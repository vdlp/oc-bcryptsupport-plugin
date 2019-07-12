<?php

declare(strict_types=1);

namespace Vdlp\BcryptSupport\ServiceProviders;

use October\Rain\Support\ServiceProvider;

/**
 * Class BcryptSupportServiceProvider
 *
 * @package Vdlp\BcryptSupport\ServiceProviders
 */
class BcryptSupportServiceProvider extends ServiceProvider
{
    /**
     * @return void
     */
    public function boot(): void
    {
        $this->publishes([
            __DIR__ . '/../config.php' => config_path('bcrypt-support.php'),
        ], 'config');

        $this->mergeConfigFrom(__DIR__ . '/../config.php', 'bcrypt-support');
    }
}
