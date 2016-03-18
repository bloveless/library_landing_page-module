<?php namespace Fritzandandre\LibraryModule\Http\Controller\Admin;

use Anomaly\Streams\Platform\Http\Controller\AdminController;
use Fritzandandre\LibraryModule\Article\Form\ArticleFormBuilder;
use Fritzandandre\LibraryModule\Article\Table\ArticleTableBuilder;

/**
 * Class ArticlesController
 *
 * @link          http://fritzandandre.com
 * @author        Brennon Loveless <brennon@fritzandandre.com>
 * @package       Fritzandandre\LibraryModule\Http\Controller\Admin
 */
class ArticlesController extends AdminController
{
    /**
     * Return an index of existing articles.
     *
     * @param ArticleTableBuilder $builder
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function index(ArticleTableBuilder $builder)
    {
        return $builder->render();
    }

    /**
     * Return the form for creating a new article.
     *
     * @param ArticleFormBuilder $form
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function create(ArticleFormBuilder $form)
    {
        return $form->render();
    }

    /**
     * Return the form for editing an existing articles.
     *
     * @param ArticleFormBuilder      $form
     * @param                         $id
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function edit(ArticleFormBuilder $form, $id)
    {
        return $form->render($id);
    }
}
