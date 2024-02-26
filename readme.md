![header](./.github/resources/header.png)


# Filament Spotlight

[![Latest Version on Packagist](https://img.shields.io/packagist/v/jeremykenedy/filament-spotlight.svg?include_prereleases)](https://packagist.org/packages/jeremykenedy/filament-spotlight)
[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg)](LICENSE.md)
![GitHub Workflow Status](https://img.shields.io/github/actions/workflow/status/jeremykenedy/filament-spotlight/code-style.yml?branch=main&label=Code%20style&style=flat-square)
[![Total Downloads](https://img.shields.io/packagist/dt/jeremykenedy/filament-spotlight.svg)](https://packagist.org/packages/jeremykenedy/filament-spotlight)


Quickly navigate your Filament Resources with Spotlight functionality.

Supports pages, resources and links from the user menu.

https://user-images.githubusercontent.com/22632550/159757479-ca9c3f46-7638-4889-98ba-6164e5205509.mp4


## Installation via Composer

**Requires PHP > 8.0 and Filament > 2.10.34**

```bash
composer require jeremykenedy/filament-spotlight
```

## Usage

There is no configuration needed.

> "its genius"

  – Dan Harrin

To open the Spotlight input bar you can use one of the following shortcuts:

CTRL + K  
CMD + K  
CTRL + /  
CMD + /  

### Setup

This plugin relies on the same properties and methods used for Filament's global search. For records showing up with the correct name in "Edit/View" you need to set `$recordTitleAttribute`. [Check the docs for more information](https://filamentphp.com/docs/2.x/admin/resources/global-search)

## Translation

To translate or edit the default placeholder, you have to publish the translation file for *wire-element/spotlight*: 

```php
php artisan vendor:publish --tag=livewire-ui-spotlight-translations
```



## Contributing

If you want to contribute to this packages, you may want to test it in a real Filament project:

- Fork this repository to your GitHub account.
- Create a Filament app locally.
- Clone your fork in your Filament app's root directory.
- In the `/filament-spotlight` directory, create a branch for your fix, e.g. `fix/error-message`.

Install the packages in your app's `composer.json`:

```json
"require": {
    "jeremykenedy/filament-spotlight": "dev-fix/error-message as main-dev",
},
"repositories": [
    {
        "type": "path",
        "url": "filament-spotlight"
    }
]
```

Now, run `composer update`.

## Credits
- [Dennis Koch](https://github.com/jeremykenedy)
- [All Contributors](../../contributors)
- [Wire Elements Spotlight](https://github.com/wire-elements/spotlight)
