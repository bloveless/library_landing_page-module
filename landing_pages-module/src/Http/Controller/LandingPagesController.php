<?php namespace Fritzandandre\LandingPagesModule\Http\Controller;

use Anomaly\Streams\Platform\Http\Controller\PublicController;
use Fritzandandre\LandingPagesModule\LandingPage\LandingPageModel;

/**
 * Class LandingPagesController
 *
 * @link          http://fritzandandre.com
 * @author        Brennon Loveless <brennon@fritzandandre.com>
 * @package       Fritzandandre\LandingPagesModule\Http\Controller
 */
class LandingPagesController extends PublicController
{
    /**
     * Return an index of existing landing pages.
     *
     * @param LandingPageModel $landingPages
     * @param                  $slug
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show(LandingPageModel $landingPages, $slug)
    {
        $landingPage = $landingPages::where('slug', $slug)->first();

        return view('fritzandandre.module.landing_pages::landing_page.show', compact('landingPage'));
    }

}
