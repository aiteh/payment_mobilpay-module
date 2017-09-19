<?php

use Anomaly\Streams\Platform\Database\Migration\Migration;

class AitehModulePaymentMobilpayCreatePaymentsStream extends Migration
{
    
    /**
     * The stream definition.
     *
     * @var array
     */
    protected $stream = [
        'slug' => 'payments',
        'title_column' => 'order_id',
        'translatable' => false,
        'trashable' => true,
        'searchable' => true,
        'sortable' => false,
    ];
    
    /**
     * The stream assignments.
     *
     * @var array
     */
    protected $assignments = [
        'order_id'=>[
            'unique' => true,
        ],
        
        'status',
        'object',
    ];
    
}
