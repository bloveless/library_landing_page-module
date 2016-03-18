<?php

use Anomaly\Streams\Platform\Database\Migration\Migration;

class FritzandandreModuleLibraryCreateEbookStream extends Migration
{
    /**
     * The stream definition.
     *
     * @var array
     */
    protected $stream = [
        'slug'         => 'ebooks',
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
        'name'         => [
            'required' => true,
            'unique'   => true
        ],
        'slug'         => [
            'required' => true,
            'unique'   => true
        ],
        'landing_page' => [
            'required' => true
        ],
        'ebook_image' => [
            'required' => true
        ],
        'cta'     => [
            'required' => true
        ],
        'ebook_pdf' => [
            'required' => true
        ]
    ];
}
