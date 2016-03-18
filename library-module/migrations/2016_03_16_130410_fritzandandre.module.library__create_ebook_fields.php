<?php

use Anomaly\Streams\Platform\Database\Migration\Migration;

class FritzandandreModuleLibraryCreateEbookFields extends Migration
{
    /**
     * The addon fields.
     *
     * @var array
     */
    protected $fields = [
        'name'         => 'anomaly.field_type.text',
        'slug'         => [
            'type'   => 'anomaly.field_type.slug',
            'config' => [
                'slugify' => 'name',
                'type'    => '-'
            ]
        ],
        'landing_page' => [
            'type'   => 'anomaly.field_type.relationship',
            'config' => [
                'related' => 'Fritzandandre\LandingPagesModule\LandingPage\LandingPageModel'
            ]
        ],
        'ebook_image'  => [
            'type'   => 'anomaly.field_type.file',
            'config' => [
                'folders' => [
                    'ebook_images'
                ],
                'image'   => true
            ]
        ],
        'cta'     => 'anomaly.field_type.text',
        'ebook_pdf'    => [
            'type'   => 'anomaly.field_type.file',
            'config' => [
                'folders' => [
                    'ebook_pdfs'
                ]
            ]
        ]
    ];
}
