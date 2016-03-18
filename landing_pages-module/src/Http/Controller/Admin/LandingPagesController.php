<?php namespace Fritzandandre\LandingPagesModule\Http\Controller\Admin;

use Anomaly\Streams\Platform\Http\Controller\AdminController;
use Fritzandandre\LandingPagesModule\LandingPage\Form\LandingPageFormBuilder;
use Fritzandandre\LandingPagesModule\LandingPage\Table\LandingPageTableBuilder;

/**
 * Class LandingPagesController
 *
 * @link          http://fritzandandre.com
 * @author        Brennon Loveless <brennon@fritzandandre.com>
 * @package       Fritzandandre\LandingPagesModule\Http\Controller\Admin
 */
class LandingPagesController extends AdminController
{
    /**
     * Return an index of existing landing pages.
     *
     * @param LandingPageTableBuilder $builder
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function index(LandingPageTableBuilder $builder)
    {
        return $builder->render();
    }

    /**
     * Return the form for creating a new landing page.
     *
     * @param LandingPageFormBuilder $form
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function create(LandingPageFormBuilder $form)
    {
        return $form->render();
    }

    /**
     * Return the form for editing an existing landing pages.
     *
     * @param ArticleFormBuilder      $form
     * @param                         $id
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function edit(LandingPageFormBuilder $form, $id)
    {
        return $form->render($id);
    }
}
