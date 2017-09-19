<?php

use Anomaly\Streams\Platform\Database\Migration\Migration;

class AitehModulePaymentMobilpayCreatePaymentMobilpayFields extends Migration
{

    /**
     * The addon fields.
     *
     * @var array
     */
    protected $fields = [
        'order_id' => 'anomaly.field_type.text',
        'status' => 'anomaly.field_type.text',
        'object' => 'anomaly.field_type.textarea',
        'slug' => [
            'type' => 'anomaly.field_type.slug',
            'config' => [
                'slugify' => 'name',
                'type' => '_'
            ],
        ],
    ];

}
