<?php

use Anomaly\Streams\Platform\Database\Migration\Migration;

class FritzandandreModuleLibraryCreateArticleFields extends Migration
{
    /**
     * The addon fields.
     *
     * @var array
     */
    protected $fields = [
        'name'        => 'anomaly.field_type.text',
        'slug'        => [
            'type'   => 'anomaly.field_type.slug',
            'config' => [
                'slugify' => 'name',
                'type'    => '-'
            ]
        ],
        'content' => [
            'type'   => 'anomaly.field_type.editor',
            'config' => [
                'mode' => 'html',
                'word_wrap' => 'yes'
            ]
        ]
    ];
}
