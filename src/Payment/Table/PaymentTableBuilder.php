<?php namespace Aiteh\PaymentMobilpayModule\Payment\Table;

use Anomaly\Streams\Platform\Ui\Table\TableBuilder;

class PaymentTableBuilder extends TableBuilder
{
    
    /**
     * The table views.
     *
     * @var array|string
     */
    protected $views = [];
    
    /**
     * The table filters.
     *
     * @var array|string
     */
    protected $filters = [
        
            'search' => [
                'fields' => [
                    'order_id',
                    'status',
                ]
            ],
        
    ];
    
    /**
     * The table columns.
     *
     * @var array|string
     */
    protected $columns = [
        'order_id', 'status',
        'entry.updated_at',
        'entry.updated_at.timeAgo()',
        'entry.created_at'
    ];
    
    /**
     * The table buttons.
     *
     * @var array|string
     */
    protected $buttons = [
        'edit', 'delete'
    ];
    
    /**
     * The table actions.
     *
     * @var array|string
     */
    protected $actions = [
    
    ];
    
    /**
     * The table options.
     *
     * @var array
     */
    protected $options = [];
    
    /**
     * The table assets.
     *
     * @var array
     */
    protected $assets = [];
    
}
