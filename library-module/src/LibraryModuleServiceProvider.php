<?php namespace Fritzandandre\LibraryModule;

use Anomaly\Streams\Platform\Addon\AddonServiceProvider;

/**
 * Class LibraryModuleServiceProvider
 *
 * @link          http://fritzandandre.com
 * @author        Brennon Loveless <brennon@fritzandandre.com>
 * @package       Fritzandandre\LibraryModule
 */
class LibraryModuleServiceProvider extends AddonServiceProvider
{

    /**
     * The addon routes.
     *
     * @var array
     */
    protected $routes = [
        'admin/library'                  => 'Fritzandandre\LibraryModule\Http\Controller\Admin\ArticlesController@index',
        'admin/library/create'           => 'Fritzandandre\LibraryModule\Http\Controller\Admin\ArticlesController@create',
        'admin/library/edit/{id}'        => 'Fritzandandre\LibraryModule\Http\Controller\Admin\ArticlesController@edit',
        'admin/library/ebooks'           => 'Fritzandandre\LibraryModule\Http\Controller\Admin\EbooksController@index',
        'admin/library/ebooks/create'    => 'Fritzandandre\LibraryModule\Http\Controller\Admin\EbooksController@create',
        'admin/library/ebooks/edit/{id}' => 'Fritzandandre\LibraryModule\Http\Controller\Admin\EbooksController@edit',
        'library'                        => 'Fritzandandre\LibraryModule\Http\Controller\LibraryController@index',
        // 'library/{slug}'                 => '',
    ];
}
