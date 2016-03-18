<?php

use Anomaly\Streams\Platform\Database\Migration\Migration;

class FritzandandreModuleLandingPagesCreateLandingPageResponseStream extends Migration
{
    /**
     * The stream definition.
     *
     * @var array
     */
    protected $stream = [
        'slug'         => 'landing_page_response',
        'title_column' => 'Company',
        'translatable' => false,
        'sortable'     => true
    ];

    /**
     * The stream assignments.
     *
     * @var array
     */
    protected $assignments = [
        'first_name' => [
            'required' => true,
        ],
        'last_name'  => [
            'required' => true
        ],
        'email'      => [
            'required' => true
        ],
        'company'    => [
            'required' => true
        ],
        'position'   => [
            'required' => true
        ],
        'phone',
        'state'      => [
            'required' => true
        ],
        'country'    => [
            'required' => true
        ],
        'first_wish' => [
            'required' => true
        ],
        'second_wish',
        'rest_of_list'
    ];
}
