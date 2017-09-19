<?php namespace Aiteh\PaymentMobilpayModule\Payment;

use Aiteh\PaymentMobilpayModule\Payment\Contract\PaymentInterface;
use Anomaly\Streams\Platform\Model\PaymentMobilpay\PaymentMobilpayPaymentsEntryModel;

class PaymentModel extends PaymentMobilpayPaymentsEntryModel implements PaymentInterface
{

}
