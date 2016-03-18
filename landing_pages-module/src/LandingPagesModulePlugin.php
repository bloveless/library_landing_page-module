<?php namespace Fritzandandre\LandingPagesModule;

use Anomaly\Streams\Platform\Addon\Plugin\Plugin;

/**
 * Class LandingPagesModulePlugin
 *
 * @link          http://www.fritzandandre.com
 * @author        Brennon Loveless <brennon@fritzandandre.com>
 * @package       Frtizandandre\LandingPagesModule
 */
class LandingPagesModulePlugin extends Plugin
{

    /**
     * The plugin functions.
     *
     * @var LandingPagesPluginFunctions
     */
    protected $functions;

    /**
     * Create a new LandingPagesPlugin instance.
     *
     * @param LandingPagesModulePluginFunctions $functions
     */
    public function __construct(LandingPagesModulePluginFunctions $functions)
    {
        $this->functions = $functions;
    }

    /**
     * Get the functions.
     *
     * @return array
     */
    public function getFunctions()
    {
        return [
            new \Twig_SimpleFunction('landing_page_form', [$this->functions, 'form'], ['is_safe' => ['html']])
        ];
    }
}
