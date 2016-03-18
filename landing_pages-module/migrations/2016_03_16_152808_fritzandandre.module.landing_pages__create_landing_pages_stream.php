<?php

use Anomaly\Streams\Platform\Database\Migration\Migration;

class FritzandandreModuleLandingPagesCreateLandingPagesStream extends Migration
{
    /**
     * The stream definition.
     *
     * @var array
     */
    protected $stream = [
        'slug'         => 'landing_page',
        'title_column' => 'name',
        'translatable' => false,
        'sortable'     => true
    ];

    /**
     * The stream assignments.
     *
     * @var array
     */
    protected $assignments = [
        'name'        => [
            'required' => true,
            'unique'   => true
        ],
        'slug'        => [
            'required' => true,
            'unique'   => true
        ],
        'page_heading'
    ];
}
