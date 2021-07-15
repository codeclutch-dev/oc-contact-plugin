<?php namespace Codeclutch\Contact\Components;

use Codeclutch\Contact\Models\Settings;


class Receivers extends \Cms\Classes\ComponentBase
{
    public function componentDetails()
    {
        return [
            'name' => 'codeclutch.contact::lang.components.receivers.name',
            'description' => 'codeclutch.contact::lang.components.receivers.description'
        ];
    }

    public function onRun()
    {
        $this->page['cc_receivers'] = [
            'receivers' => Settings::instance()->receivers,

            'use_icons' => $this->property('use_icons'),
        ];
    }

    public function defineProperties()
    {
        return [
            'use_icons' => [
                'title' => 'codeclutch.contact::lang.components.receivers.use_icons.name',
                'description' => 'codeclutch.contact::lang.components.receivers.use_icons.description',
                'default' => true,
                'type' => 'checkbox',
            ],
        ];
    }
}
