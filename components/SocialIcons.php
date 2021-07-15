<?php namespace Codeclutch\Contact\Components;

use Codeclutch\Contact\Models\Settings;


class SocialIcons extends \Cms\Classes\ComponentBase
{
    public function componentDetails()
    {
        return [
            'name' => 'codeclutch.contact::lang.components.social_icons.name',
            'description' => 'codeclutch.contact::lang.components.social_icons.description'
        ];
    }

    public function onRun()
    {
        $this->page['cc_social_icons'] = [
            'icons' => Settings::instance()->social_media,
        ];
    }
}
