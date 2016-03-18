<?php namespace Fritzandandre\LandingPagesModule;

use Anomaly\Streams\Platform\Addon\AddonServiceProvider;

/**
 * Class LandingPagesModuleServiceProvider
 *
 * @link          http://fritzandandre.com
 * @author        Brennon Loveless <brennon@fritzandandre.com>
 * @package       Fritzandandre\LandingPagesModule
 */
class LandingPagesModuleServiceProvider extends AddonServiceProvider
{
    /**
     * The addon plugins.
     *
     * @var array
     */
    protected $plugins = [
        'Fritzandandre\LandingPagesModule\LandingPagesModulePlugin'
    ];

    /**
     * The addon routes.
     *
     * @var array
     */
    protected $routes = [
        'admin/landing_pages'           => 'Fritzandandre\LandingPagesModule\Http\Controller\Admin\LandingPagesController@index',
        'admin/landing_pages/create'    => 'Fritzandandre\LandingPagesModule\Http\Controller\Admin\LandingPagesController@create',
        'admin/landing_pages/edit/{id}' => 'Fritzandandre\LandingPagesModule\Http\Controller\Admin\LandingPagesController@edit',
        'info/{slug}'                   => 'Fritzandandre\LandingPagesModule\Http\Controller\LandingPagesController@show'
    ];
}
