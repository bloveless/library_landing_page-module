<?php namespace Fritzandandre\LibraryModule\Http\Controller\Admin;

use Anomaly\Streams\Platform\Http\Controller\AdminController;
use Fritzandandre\LibraryModule\Ebook\Form\EbookFormBuilder;
use Fritzandandre\LibraryModule\Ebook\Table\EbookTableBuilder;

/**
 * Class EbooksController
 *
 * @link          http://fritzandandre.com
 * @author        Brennon Loveless <brennon@fritzandandre.com>
 * @package       Fritzandandre\LibraryModule\Http\Controller\Admin
 */
class EbooksController extends AdminController
{
    /**
     * Return an index of existing Ebooks.
     *
     * @param EbookTableBuilder $builder
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function index(EbookTableBuilder $builder)
    {
        return $builder->render();
    }

    /**
     * Return the form for creating a new Ebook.
     *
     * @param EbookFormBuilder $form
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function create(EbookFormBuilder $form)
    {
        return $form->render();
    }

    /**
     * Return the form for editing an existing Ebook.
     *
     * @param EbookFormBuilder        $form
     * @param                         $id
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function edit(EbookFormBuilder $form, $id)
    {
        return $form->render($id);
    }
}
