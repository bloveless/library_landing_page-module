<?php

use Anomaly\Streams\Platform\Database\Migration\Migration;

class FritzandandreModuleLandingPagesCreateLandingPageResponseFields extends Migration
{
    /**
     * The addon fields.
     *
     * @var array
     */
    protected $fields = [
        'first_name'   => 'anomaly.field_type.text',
        'last_name'    => 'anomaly.field_type.text',
        'email'        => 'anomaly.field_type.email',
        'company'      => 'anomaly.field_type.text',
        'position'     => 'anomaly.field_type.text',
        'phone'        => 'anomaly.field_type.text',
        'state'        => 'anomaly.field_type.text',
        'country'      => 'anomaly.field_type.text',
        'first_wish'   => 'anomaly.field_type.text',
        'second_wish'  => 'anomaly.field_type.text',
        'rest_of_list' => 'anomaly.field_type.text',
    ];
}
