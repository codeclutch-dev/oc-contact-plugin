<?php namespace Codeclutch\Contact;

use System\Classes\PluginBase;


class Plugin extends PluginBase
{
    public function pluginDetails()
    {
        return [
            'name' => 'codeclutch.contact::lang.plugin.name',
            'description' => 'codeclutch.contact::lang.plugin.description',
            'author' => 'codeclutch',
            'icon' => 'icon-at'
        ];
    }

    public function registerSettings()
    {
        return [
            'config' => [
                'label' => 'codeclutch.contact::lang.plugin.name',
                'description' => 'codeclutch.contact::lang.plugin.description',
                'category' => 'codeclutch',
                'icon' => 'icon-at',
                'order' => 2,
                'class' => 'Codeclutch\Contact\Models\Settings'
            ]
        ];
    }

    public function registerComponents()
    {
        return [
            'Codeclutch\Contact\Components\ContactInformation' => 'contactInformation',
            'Codeclutch\Contact\Components\Receivers' => 'receivers',
            'Codeclutch\Contact\Components\SocialIcons' => 'socialIcons'
        ];
    }

    public $require = ['Codeclutch.Meta', 'Zakir.AllFontIcons'];
}
