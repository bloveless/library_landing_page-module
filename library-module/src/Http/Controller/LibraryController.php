<?php namespace Fritzandandre\LibraryModule\Http\Controller;

use Anomaly\Streams\Platform\Http\Controller\PublicController;
use Fritzandandre\LibraryModule\Article\ArticleModel;
use Fritzandandre\LibraryModule\Ebook\EbookModel;

/**
 * Class LibraryController
 *
 * @link          http://fritzandandre.com
 * @author        Brennon Loveless <brennon@fritzandandre.com>
 * @package       Fritzandandre\LibraryModule\Http\Controller
 */
class LibraryController extends PublicController
{
    /**
     * Display all articles and eBooks
     *
     * @param ArticleModel $articles
     * @param EbookModel   $ebooks
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(ArticleModel $articles, EbookModel $ebooks)
    {
        $articles = $articles::all();
        $ebooks   = $ebooks::all();

        return view('fritzandandre.module.library::library.list', compact('articles', 'ebooks'));
    }
}
