<?php namespace Aiteh\PaymentMobilpayModule\Http\Controller;

use Adrianbarbos\Mobilpay\Mobilpay;
use Aiteh\PaymentMobilpayModule\Payment\PaymentModel;
use Illuminate\Routing\Controller;

class PaymentsController extends Controller
{
    public function redirect_to_mobilpay()
    {
        $order = new PaymentModel();
        $order->status = "to be sent to mobilpay";
//        dd(__DIR__ . '/../../../config/certificates/mobilpay/sandbox.PSAB-3V8P-SNU6-5Q4H-V69G.public.cer');
//        dd('/Users/eduardolariu/Projects/StudioStarMAP/config/certificates/mobilpay/sandbox.PSAB-3V8P-SNU6-5Q4H-V69G.public.cer');
        srand((double)microtime() * 1000000);
        $order->order_id = md5(uniqid(rand()));
        $order->save();
        Mobilpay::setOrderId($order->order_id)
            ->setAmount('1.00')
            ->setDetails('Some details')
            ->purchase();
    }
    
    public function confirm()
    {
        $response = Mobilpay::response();
        $data = $response->getData();
        $order = PaymentModel::where('order_id','LIKE', $data['orderId'])->first();
        $order->status = "decrypting MobilPay";
        $order->save();
        switch ($response->getMessage()) {
            case 'confirmed_pending': // transaction is pending review. After this is done, a new IPN request will be sent with either confirmation or cancellation
                $order->status = 'confirmed_pending';
                //update DB, SET status = "pending"
                
                
                break;
            case 'paid_pending': // transaction is pending review. After this is done, a new IPN request will be sent with either confirmation or cancellation
                $order->status = 'paid_pending';
                
                //update DB, SET status = "pending"
                
                break;
            case 'paid': // transaction is pending authorization. After this is done, a new IPN request will be sent with either confirmation or cancellation
                $order->status = 'paid';
                
                //update DB, SET status = "open/preauthorized"
                
                break;
            case 'confirmed': // transaction is finalized, the money have been captured from the customer's account
                $order->status = 'confirmed';
                
                //update DB, SET status = "confirmed/captured"
                
                break;
            case 'canceled': // transaction is canceled
                $order->status = 'canceled';
                
                //update DB, SET status = "canceled"
                
                break;
            case 'credit': // transaction has been refunded
                $order->status = 'credit';
                
                //update DB, SET status = "refunded"
                
                break;
        }
        $order->save();
    }
}


