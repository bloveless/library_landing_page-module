<?php namespace Fritzandandre\LandingPagesModule\LandingPageResponse\Form;

use Fritzandandre\LandingPagesModule\LandingPageResponse\LandingPageResponseModel;
use Illuminate\Contracts\Bus\SelfHandling;

/**
 * Class LandingPageResponseFormHandler
 *
 * @link          http://anomaly.is/streams-platform
 * @author        AnomalyLabs, Inc. <hello@anomaly.is>
 * @author        Ryan Thompson <ryan@anomaly.is>
 * @package       Anomaly\ContactPlugin\Form
 */
class LandingPageResponseFormHandler implements SelfHandling
{

    /**
     * Save the response to the LandingPageResponseModel
     *
     * @param LandingPageResponseFormBuilder $builder
     */
    public function handle(LandingPageResponseFormBuilder $builder)
    {
        // Validation failed!
        if ($builder->hasFormErrors()) {
            return;
        }

        $formData = $builder->getFormInput();
       
        $wishList = $formData['wish_list'];
        unset($formData['wish_list']);

        $landingPageResponse = LandingPageResponseModel::create($formData);

        // The first wish will always be present
        $landingPageResponse->first_wish = array_shift($wishList);

        // If there was more than one then save off the second wish
        if (count($wishList) > 0) {
            $landingPageResponse->second_wish = array_shift($wishList);
        }

        // Anything left over will be imploded as the rest of the list
        if (count($wishList) > 0) {
            $landingPageResponse->rest_of_list = implode(',', $wishList);
        }

        $landingPageResponse->save();

        // Example email code is found in the ContactPlugin
    }
}
