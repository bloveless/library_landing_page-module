<?php namespace Fritzandandre\LandingPagesModule\LandingPage;

use Anomaly\Streams\Platform\Model\LandingPages\LandingPagesLandingPageEntryModel;
use Fritzandandre\LibraryModule\Ebook\EbookModel;

/**
 * Class LandingPageModel
 *
 * @link          http://fritzandandre.com
 * @author        Brennon Loveless <brennon@fritzandandre.com
 * @package       Fritzandandre\LandingPagesModule\LandingPage
 */
class LandingPageModel extends LandingPagesLandingPageEntryModel
{
    /**
     * Get the slug
     * 
     * @return \Anomaly\Streams\Platform\Entry\EntryPresenter|mixed
     */
    public function getSlug()
    {
        return $this->slug;
    }

    /**
     * Get the name
     * 
     * @return \Anomaly\Streams\Platform\Entry\EntryPresenter|mixed
     */
    public function getName()
    {
        return $this->name;
    }
    
    /**
     * Get the eBook for the view.
     *
     * @return \Anomaly\Streams\Platform\Entry\EntryPresenter|mixed
     */
    public function getEbook() {
        return $this->ebook;
    }

    /**
     * Set up the eBook relationship.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function ebook()
    {
        return $this->hasOne(EbookModel::class, 'landing_page_id');
    }
}
