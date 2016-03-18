<?php namespace Fritzandandre\LandingPagesModule\LandingPage\Table;

use Fritzandandre\LandingPagesModule\LandingPage\LandingPageModel;
use Illuminate\Contracts\Bus\SelfHandling;

/**
 * Class LandingPageTableColumns
 *
 * @link          http://www.fritzandandre.com
 * @author        Brennon Loveless <brennon@fritzandandre.com>
 * @package       Fritzandandre\LandingPagesModule\LandingPage\Table
 */
class LandingPageTableColumns implements SelfHandling
{

    /**
     * Handle the command.
     *
     * @param LandingPageTableBuilder $builder
     */
    public function handle(LandingPageTableBuilder $builder)
    {
        $builder->setColumns(
            [
                'name',
                'related_ebook' => [
                    'heading' => 'Related eBook',
                    'value'   => function (LandingPageModel $entry) {
                        if ($entry->ebook) {
                            return $entry->ebook->name;
                        } else {
                            return 'No related eBook';
                        }
                    }
                ]
            ]
        );
    }
}
