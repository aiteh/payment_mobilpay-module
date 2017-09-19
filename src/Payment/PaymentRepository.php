<?php namespace Aiteh\PaymentMobilpayModule\Payment;

use Aiteh\PaymentMobilpayModule\Payment\Contract\PaymentRepositoryInterface;
use Anomaly\Streams\Platform\Entry\EntryRepository;

class PaymentRepository extends EntryRepository implements PaymentRepositoryInterface
{

    /**
     * The entry model.
     *
     * @var PaymentModel
     */
    protected $model;

    /**
     * Create a new PaymentRepository instance.
     *
     * @param PaymentModel $model
     */
    public function __construct(PaymentModel $model)
    {
        $this->model = $model;
    }
}
