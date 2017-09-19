<?php namespace Aiteh\PaymentMobilpayModule;

use Anomaly\Streams\Platform\Addon\AddonServiceProvider;
use Aiteh\PaymentMobilpayModule\Payment\Contract\PaymentRepositoryInterface;
use Aiteh\PaymentMobilpayModule\Payment\PaymentRepository;
use Anomaly\Streams\Platform\Model\PaymentMobilpay\PaymentMobilpayPaymentsEntryModel;
use Aiteh\PaymentMobilpayModule\Payment\PaymentModel;
use Illuminate\Routing\Router;

class PaymentMobilpayModuleServiceProvider extends AddonServiceProvider
{

    /**
     * Additional addon plugins.
     *
     * @type array|null
     */
    protected $plugins = [];

    /**
     * The addon Artisan commands.
     *
     * @type array|null
     */
    protected $commands = [];

    /**
     * The addon's scheduled commands.
     *
     * @type array|null
     */
    protected $schedules = [];

    /**
     * The addon API routes.
     *
     * @type array|null
     */
    protected $api = [];

    /**
     * The addon routes.
     *
     * @type array|null
     */
    protected $routes = [
        'payment/mobilpay/'           => 'Aiteh\PaymentMobilpayModule\Http\Controller\PaymentsController@index',
        'payment/mobilpay/redirect'           => 'Aiteh\PaymentMobilpayModule\Http\Controller\PaymentsController@redirect_to_mobilpay',
        'payment/mobilpay/confirm'           => 'Aiteh\PaymentMobilpayModule\Http\Controller\PaymentsController@confirm',
        'payment/mobilpay/return'           => 'Aiteh\PaymentMobilpayModule\Http\Controller\PaymentsController@return',
        'admin/payment_mobilpay'           => 'Aiteh\PaymentMobilpayModule\Http\Controller\Admin\PaymentsController@index',
//        'admin/payment_mobilpay/create'    => 'Aiteh\PaymentMobilpayModule\Http\Controller\Admin\PaymentsController@create',
        'admin/payment_mobilpay/edit/{id}' => 'Aiteh\PaymentMobilpayModule\Http\Controller\Admin\PaymentsController@edit',
    ];

    /**
     * The addon middleware.
     *
     * @type array|null
     */
    protected $middleware = [
        //Aiteh\PaymentMobilpayModule\Http\Middleware\ExampleMiddleware::class
    ];

    /**
     * The addon route middleware.
     *
     * @type array|null
     */
    protected $routeMiddleware = [];

    /**
     * The addon event listeners.
     *
     * @type array|null
     */
    protected $listeners = [
        //Aiteh\PaymentMobilpayModule\Event\ExampleEvent::class => [
        //    Aiteh\PaymentMobilpayModule\Listener\ExampleListener::class,
        //],
    ];

    /**
     * The addon alias bindings.
     *
     * @type array|null
     */
    protected $aliases = [
        //'Example' => Aiteh\PaymentMobilpayModule\Example::class
    ];

    /**
     * The addon class bindings.
     *
     * @type array|null
     */
    protected $bindings = [
        PaymentMobilpayPaymentsEntryModel::class => PaymentModel::class,
    ];

    /**
     * The addon singleton bindings.
     *
     * @type array|null
     */
    protected $singletons = [
        PaymentRepositoryInterface::class => PaymentRepository::class,
    ];

    /**
     * Additional service providers.
     *
     * @type array|null
     */
    protected $providers = [
        //\ExamplePackage\Provider\ExampleProvider::class
    ];

    /**
     * The addon view overrides.
     *
     * @type array|null
     */
    protected $overrides = [
        //'streams::errors/404' => 'module::errors/404',
        //'streams::errors/500' => 'module::errors/500',
    ];

    /**
     * The addon mobile-only view overrides.
     *
     * @type array|null
     */
    protected $mobile = [
        //'streams::errors/404' => 'module::mobile/errors/404',
        //'streams::errors/500' => 'module::mobile/errors/500',
    ];

    /**
     * Register the addon.
     */
    public function register()
    {
        // Run extra pre-boot registration logic here.
        // Use method injection or commands to bring in services.
    }

    /**
     * Boot the addon.
     */
    public function boot()
    {
        // Run extra post-boot registration logic here.
        // Use method injection or commands to bring in services.
    }

    /**
     * Map additional addon routes.
     *
     * @param Router $router
     */
    public function map(Router $router)
    {
        // Register dynamic routes here for example.
        // Use method injection or commands to bring in services.
    }

}
