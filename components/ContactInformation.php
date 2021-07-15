<?php namespace Codeclutch\Contact\Components;

use Codeclutch\Contact\Models\Settings;
use Codeclutch\Meta\Models\Settings as MetaSettings;


class ContactInformation extends \Cms\Classes\ComponentBase
{
    public function componentDetails()
    {
        return [
            'name' => 'codeclutch.contact::lang.components.contact_information.name',
            'description' => 'codeclutch.contact::lang.components.contact_information.description'
        ];
    }

    public function onRun()
    {
        $this->page['cc_contact_information'] = [
            'company_name' => Settings::instance()->company_name,
            'email' => Settings::instance()->email,
            'phone' => Settings::instance()->phone,

            /* Take logo from 'Meta' plugin */
            'logo' => MetaSettings::instance()->logo,

            /* Address */
            'street' => Settings::instance()->address_street,
            'number' => Settings::instance()->address_number,
            'post_code' => Settings::instance()->address_postcode,
            'city' => Settings::instance()->address_city,
            'country' => Settings::instance()->country,

            /* Properties */
            'display_company_name' => $this->property('display_company_name'),
            'display_logo' => $this->property('display_logo'),
            'logo_height' => $this->property('logo_height'),
            'logo_width' => $this->property('logo_width'),
            'use_icons' => $this->property('use_icons'),
        ];
    }

    public function defineProperties()
    {
        return [
            'display_company_name' => [
                'title' => 'codeclutch.contact::lang.components.contact_information.display_company_name.name',
                'description' => 'codeclutch.contact::lang.components.contact_information.display_company_name.description',
                'default' => false,
                'type' => 'checkbox',
            ],
            'display_logo' => [
                'title' => 'codeclutch.contact::lang.components.contact_information.display_logo.name',
                'description' => 'codeclutch.contact::lang.components.contact_information.display_logo.description',
                'default' => false,
                'type' => 'checkbox',
            ],
            'logo_height' => [
                'title'             => 'codeclutch.contact::lang.components.contact_information.logo_height.name',
                'description'       => 'codeclutch.contact::lang.components.contact_information.logo_height.description',
                'default'           => 'auto',
                'type'              => 'string',
            ],
            'logo_width' => [
                'title'             => 'codeclutch.contact::lang.components.contact_information.logo_width.name',
                'description'       => 'codeclutch.contact::lang.components.contact_information.logo_width.description',
                'default'           => '500',
                'type'              => 'string',
            ],
            'use_icons' => [
                'title' => 'codeclutch.contact::lang.components.contact_information.use_icons.name',
                'description' => 'codeclutch.contact::lang.components.contact_information.use_icons.description',
                'default' => true,
                'type' => 'checkbox',
            ],
        ];
    }
}
