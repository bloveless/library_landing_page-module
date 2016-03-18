<?php

use Anomaly\Streams\Platform\Database\Migration\Migration;

class FritzandandreModuleLibraryCreateArticleStream extends Migration
{
    /**
     * The stream definition.
     *
     * @var array
     */
    protected $stream = [
        'slug'         => 'articles',
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
        'name' => [
            'required' => true,
            'unique' => true
        ],
        'slug' => [
            'required' => true,
            'unique' => true
        ],
        'content',
    ];
}
