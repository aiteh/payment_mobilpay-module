<?php namespace Aiteh\PaymentMobilpayModule;

use Anomaly\Streams\Platform\Addon\Module\Module;

class PaymentMobilpayModule extends Module
{

    /**
     * The navigation display flag.
     *
     * @var bool
     */
    protected $navigation = true;

    /**
     * The addon icon.
     *
     * @var string
     */
    protected $icon = 'fa fa-money';

    /**
     * The module sections.
     *
     * @var array
     */
    protected $sections = [
        'payments' => [
        
        ],
    ];

}
