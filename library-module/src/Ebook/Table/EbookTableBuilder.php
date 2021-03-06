<?php namespace Fritzandandre\LibraryModule\Ebook\Table;

use Anomaly\Streams\Platform\Ui\Table\TableBuilder;

/**
 * Class EbookTableBuilder
 *
 * @link          http://fritzandandre.com
 * @author        Brennon Loveless <brennon@fritzandandre.com>
 * @package       Fritzandandre\LibraryModule\Ebook\Table
 */
class EbookTableBuilder extends TableBuilder
{
    /**
     * Columns to display in the table
     *
     * @var array
     */
    protected $columns = [
        'name'
    ];

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
