<?php return [
    'plugin' => [
        'name' => 'Kontakt',
        'description' => 'Komponenty kontaktowe',
        'author' => 'codeclutch',
    ],
    'settings' => [
        'company_name' => 'Nazwa firmy',
        'phone' => 'Numer telefonu',
        'email' => 'Adres e-mail',
        'address' => 'Adres',
        'address_street' => 'Ulica',
        'address_number' => 'Numer',
        'address_postcode' => 'Kod pocztowy',
        'address_city' => 'Miasto',
        'country' => 'Kraj',
        'social_media' => 'Media społecznościowe',
        'select_icon' => 'Wybierz ikonkę',
        'select' => 'Wybierz',
        'url' => 'Adres URL',
        'receivers' => 'Odbiorcy',
        'name' => 'Nazwa',
    ],
    'components' => [
        'contact_information' => [
            'name' => 'Informacje kontaktowe',
            'description' => 'Wyświetla informacje kontaktowe',
            'display_company_name' => [
                'name' => 'Wyświetl nazwę firmy',
                'description' => 'Wyświetla nazwę firmy',
            ],
            'display_logo' => [
                'name' => 'Wyświetl logo',
                'description' => 'Wyświetla logo z wtyczki Meta',
            ],
            'logo_height' => [
                'name' => 'Wysokość logo',
                'description' => 'Wysokość logo',
            ],
            'logo_width' => [
                'name' => 'Szerokość logo',
                'description' => 'Szerokość logo',
            ],
            'use_icons' => [
                'name' => 'Użyj ikon',
                'description' => 'Użyj ikon Font Awesome',
            ],
        ],
        'receivers' => [
            'name' => 'Odbiorcy',
            'description' => 'Wyświetla informacje kontaktowe odbiorców',
            'use_icons' => [
                'name' => 'Użyj ikon',
                'description' => 'Użyj ikon Font Awesome',
            ],
        ],
        'social_icons' => [
            'name' => 'Ikony społecznościowe',
            'description' => 'Wyświetla ikony społecznościowe podlinkowane z kontami',
        ],
    ],
];
