<?php namespace Fritzandandre\LandingPagesModule\LandingPageResponse\Form;

use Anomaly\Streams\Platform\Message\MessageBag;
use Illuminate\Contracts\Bus\SelfHandling;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Mail\Mailer;
use Illuminate\Mail\Message;

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

    use DispatchesJobs;

    /**
     * @param LandingPageResponseFormBuilder $builder
     * @param MessageBag                     $messages
     * @param Mailer                         $mailer
     */
    public function handle(LandingPageResponseFormBuilder $builder, MessageBag $messages, Mailer $mailer)
    {
        // Validation failed!
        if ($builder->hasFormErrors()) {
            return;
        }
        
        // Example email code is found in the ContactPlugin
        
        // Clear the form!
        $builder->resetForm();
    }
}
