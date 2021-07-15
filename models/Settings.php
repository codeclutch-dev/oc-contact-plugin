<?php namespace Codeclutch\Contact\Models;

use Model;

class Settings extends Model
{
    public $implement = ['System.Behaviors.SettingsModel'];

    // A unique code
    public $settingsCode = 'codeclutch_contact_settings';

    // Reference to field configuration
    public $settingsFields = 'fields.yaml';
}
