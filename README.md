# Vdlp.BcryptSupport

Allows developers to configure bcrypt parameters.

## Requirements

* PHP 7.1 or higher
* October CMS based on Laravel 5.8 or lower

## Installation

*Composer:*

```
composer require vdlp/oc-bcryptsupport-plugin
```

*CLI:*

```
php artisan plugin:install Vdlp.BcryptSupport
```

*October CMS:*

Go to Settings > Updates & Plugins > Install plugins and search for 'Bcrypt Support'.

## Configuration

To configure this plugin execute the following command:

```
php artisan vendor:publish --provider="Vdlp\BcryptSupport\ServiceProviders\BcryptSupportServiceProvider" --tag="config"
```

This will create a `config/bcrypt-support.php` file in your app where you can modify the configuration.

## Questions? Need help?

If you have any question about how to use this plugin, please don't hesitate to contact us at octobercms@vdlp.nl. We're happy to help you. You can also visit the support forum and drop your questions/issues there.
