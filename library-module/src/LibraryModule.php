<?php namespace Fritzandandre\LibraryModule;

use Anomaly\Streams\Platform\Addon\Module\Module;

/**
 * Class LibraryModule
 *
 * @link          http://fritzandandre.com
 * @author        Brennon Loveless <brennon@fritzandandre.com>
 * @package       FritzAndAndre\LibraryModule
 */
class LibraryModule extends Module
{
    /**
     * The module sections.
     *
     * @var array
     */
    protected $sections = [
        'articles' => [
            'buttons' => [
                'new_article'
            ]
        ],
        'ebooks' => [
            'buttons' => [
                'new_ebook'
            ]
        ]
    ];

}
