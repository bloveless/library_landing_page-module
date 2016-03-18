<?php namespace Fritzandandre\LandingPagesModule\LandingPageResponse\Form;

use Anomaly\Streams\Platform\Ui\Form\FormBuilder;

/**
 * Class LandingPageResponseFormBuilder
 *
 * @link          http://www.fritzandandre.com
 * @author        Brennon Loveless <brennon@fritzandandre.com>
 * @package       Fritzandandre\LandingPageResponse\Form
 */
class LandingPageResponseFormBuilder extends FormBuilder
{

    /**
     * The form handler.
     *
     * @var LandingPageResopnseFormHandler
     */
    protected $handler = LandingPageResponseFormHandler::class;

    /**
     * The form fields.
     *
     * @var array
     */
    protected $fields = [
        'first_name' => [
            'label'      => 'First Name',
            'type'       => 'anomaly.field_type.text',
            'required'   => true,
            'input_view' => 'fritzandandre.module.landing_pages::input.text'
        ],
        'last_name'  => [
            'label'    => 'Last Name',
            'type'     => 'anomaly.field_type.text',
            'required' => true
        ],
        'email'      => [
            'label'    => 'Email',
            'type'     => 'anomaly.field_type.email',
            'required' => true
        ],
        'company'    => [
            'label'    => 'Company',
            'type'     => 'anomaly.field_type.text',
            'required' => true
        ],
        'position'   => [
            'label'    => 'Position',
            'type'     => 'anomaly.field_type.text',
            'required' => true
        ],
        'phone'      => [
            'label' => 'Phone',
            'type'  => 'anomaly.field_type.text'
        ],
        'state'      => [
            'label'    => 'State',
            'type'     => 'anomaly.field_type.text',
            'required' => true
        ],
        'country'    => [
            'label'    => 'Country',
            'type'     => 'anomaly.field_type.text',
            'required' => true
        ],
        'wish_list'  => [
            'label'      => 'What Product is Next on Your Wish List: (Choose at Least One)',
            'type'       => 'anomaly.field_type.checkboxes',
            'required'   => true,
            'input_view' => 'fritzandandre.module.landing_pages::input.checkboxes',
            'config'     => [
                'handler' => 'Fritzandandre\LandingPagesModule\LandingPageResponse\Form\LandingPageWishListOptions@handle'
            ]
        ]
    ];

    /**
     * The form actions.
     *
     * @var array
     */
    protected $actions = [
        'submit' => [
            'redirect' => '/info/landing-pages/thank-you'
        ]
    ];

    /**
     * The form buttons.
     *
     * @var array
     */
    protected $buttons = [];

    /**
     * The form options.
     *
     * @var array
     */
    protected $options = [
        'breadcrumb' => false
    ];

}
