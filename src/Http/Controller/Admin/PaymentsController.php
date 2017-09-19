<?php namespace Aiteh\PaymentMobilpayModule\Http\Controller\Admin;

use Aiteh\PaymentMobilpayModule\Payment\Form\PaymentFormBuilder;
use Aiteh\PaymentMobilpayModule\Payment\Table\PaymentTableBuilder;
use Anomaly\Streams\Platform\Http\Controller\AdminController;

class PaymentsController extends AdminController
{

    /**
     * Display an index of existing entries.
     *
     * @param PaymentTableBuilder $table
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function index(PaymentTableBuilder $table)
    {
        return $table->render();
    }

    /**
     * Create a new entry.
     *
     * @param PaymentFormBuilder $form
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function create(PaymentFormBuilder $form)
    {
        return $form->render();
    }

    /**
     * Edit an existing entry.
     *
     * @param PaymentFormBuilder $form
     * @param        $id
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function edit(PaymentFormBuilder $form, $id)
    {
        return $form->render($id);
    }
}
