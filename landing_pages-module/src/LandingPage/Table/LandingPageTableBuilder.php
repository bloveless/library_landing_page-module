<?php namespace Fritzandandre\LandingPagesModule\LandingPage\Table;

use Anomaly\Streams\Platform\Ui\Table\TableBuilder;

/**
 * Class LandingPageTableBuilder
 *
 * @link          http://fritzandandre.com
 * @author        Brennon Loveless <brennon@fritzandandre.com>
 * @package       Fritzandandre\LandingPagesModule\LandingPage\Table
 */
class LandingPageTableBuilder extends TableBuilder
{
    /**
     * Buttons to display on the table row
     *
     * @var array
     */
    protected $buttons = [
        'edit'
    ];

    /**
     * Actions available for the entire table
     *
     * @var array
     */
    protected $actions = [
        'delete'
    ];

    /**
     * The table options.
     *
     * @var array
     */
    protected $options = [
        'sortable' => true
    ];
}
