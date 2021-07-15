# October Contact Plugin
[![Crowdin](https://badges.crowdin.net/oc-contact-plugin/localized.svg)](https://crowdin.com/project/oc-contact-plugin)
[![PRs Welcome](https://img.shields.io/badge/PRs-welcome-brightgreen.svg)](http://makeapullrequest.com)
[![License: MIT](https://img.shields.io/badge/License-MIT-blue.svg)](https://opensource.org/licenses/MIT)

## Overview

Contact plugin is a component set for websites made with October CMS by freelancers. This plugin may not be compatible with Winter CMS because it use plugin available only on October Marketplace.

With this plugin is possible:

* Set contact information
* Add and adjust the contact information component
* Use logo from Meta plugin in contact component
* Add receivers information and use them in component

And the most important feature:

* Set social icons linked to social media accounts (based on Font Awesome)

## Installation
### Artisan

Use the Laravel's CLI. Traverse to a project's root directory and run the following:

```
php artisan plugin:install codeclutch.meta
php artisan plugin:install zakir.allfonticons
php artisan plugin:install codeclutch.contact
```

## Documentation
### Contact Information

Add information in plugin settings, then add component and write

>{% component 'contactInformation' %}

you can adjust this component in many ways

### Receivers

This component can be used as company team members contact information

Add receivers in plugin settings, import component and write

>{% component 'receivers' %}

### Social Icons

Add social links in plugin settings then open footer (or other file) to  import component and write
>{% component 'socialIcons' %}

## Contributing
You are free to contribute in the following ways:
* sending pull requests
* bug reporting and feature requesting by creating issues on plugin [GitHub page](https://github.com/codeclutch-ltd/oc-contact-plugin/issues)
* localization to your language using [Crowdin](https://crowdin.com/project/oc-contact-plugin)

## License
The Contact plugin for October CMS is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
