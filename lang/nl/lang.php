<?php return [
    'plugin' => [
        'name' => 'Contact',
        'description' => 'Contact information components',
        'author' => 'codeclutch',
    ],
    'settings' => [
        'company_name' => 'Company name',
        'phone' => 'Phone',
        'email' => 'E-mail',
        'address' => 'Address',
        'address_street' => 'Street',
        'address_number' => 'Number',
        'address_postcode' => 'Post code',
        'address_city' => 'City',
        'country' => 'Country',
        'social_media' => 'Social Media',
        'select_icon' => 'Select icon',
        'select' => 'Select',
        'url' => 'URL',
        'receivers' => 'Receivers',
        'name' => 'Name',
    ],
    'components' => [
        'contact_information' => [
            'name' => 'Contact Information',
            'description' => 'Displays contact information',
            'display_company_name' => [
                'name' => 'Display company name',
                'description' => 'Displays company name',
            ],
            'display_logo' => [
                'name' => 'Display logo',
                'description' => 'Displays logo from Meta plugin',
            ],
            'logo_height' => [
                'name' => 'Logo height',
                'description' => 'Height of logo',
            ],
            'logo_width' => [
                'name' => 'Logo width',
                'description' => 'Width of logo',
            ],
            'use_icons' => [
                'name' => 'Use icons',
                'description' => 'Use Font Awesome icons',
            ],
        ],
        'receivers' => [
            'name' => 'Receivers',
            'description' => 'Displays receivers information',
            'use_icons' => [
                'name' => 'Use icons',
                'description' => 'Use Font Awesome icons',
            ],
        ],
        'social_icons' => [
            'name' => 'Social Icons',
            'description' => 'Displays social icons with linked accounts',
        ],
    ],
];
