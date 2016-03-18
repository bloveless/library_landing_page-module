<?php namespace Fritzandandre\LandingPagesModule\LandingPageResponse\Form;

use Anomaly\CheckboxesFieldType\CheckboxesFieldType;
use Fritzandandre\LandingPagesModule\LandingPage\LandingPageModel;

/**
 * Class LandingPageWishListOptions
 *
 * @link          http://www.fritzandandre.com
 * @author        Brennon Loveless <brennon@fritzandandre.com>
 * @package Fritzandandre\LandingPagesModule\LandingPageResponse\Form
 */
class LandingPageWishListOptions
{
    /**
     * Set the options for the checkboxes
     * 
     * @param CheckboxesFieldType $fieldType
     * @param LandingPageModel    $landingPages
     */
    public function handle(CheckboxesFieldType $fieldType, LandingPageModel $landingPages)
    {
        $landingPages = $landingPages::all();
        
        $options = [];
        foreach($landingPages as $landingPage)
        {
            $options[$landingPage->getSlug()] = $landingPage->getName();
        }
        
        $fieldType->setOptions($options);
    }
}

