<?php namespace Fritzandandre\LandingPagesModule;

use Anomaly\Streams\Platform\Addon\Module\Module;

/**
 * Class LandingPagesModule
 *
 * @link          http://fritzandandre.com
 * @author        Brennon Loveless <brennon@fritzandandre.com>
 * @package       FritzAndAndre\LandingPagesModule
 */
class LandingPagesModule extends Module
{
    /**
     * The module sections.
     *
     * @var array
     */
    protected $sections = [
        'landing_pages' => [
            'buttons' => [
                'new_landing_page'
            ]
        ]
    ];

}
