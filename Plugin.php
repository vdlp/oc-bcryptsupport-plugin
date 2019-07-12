<?php

declare(strict_types=1);

namespace Vdlp\BcryptSupport;

use Illuminate\Contracts\Config\Repository;
use Illuminate\Contracts\Hashing\Hasher;
use Illuminate\Hashing\BcryptHasher;
use System\Classes\PluginBase;
use Vdlp\BcryptSupport\Exception\HasherNotSupported;

/**
 * Class Plugin
 *
 * @package Vdlp\BcryptSupport
 */
class Plugin extends PluginBase
{
    /**
     * {@inheritdoc}
     */
    public function pluginDetails(): array
    {
        return [
            'name' => 'vdlp.bcryptsupport::lang.plugin.name',
            'description' => 'vdlp.bcryptsupport::lang.plugin.description',
            'author' => 'Van der Let & Partners <octobercms@vdlp.nl>',
            'icon' => 'icon-link',
            'homepage' => 'https://octobercms.com/plugin/vdlp-bcryptsupport',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function register(): void
    {
        $this->app->register(ServiceProviders\BcryptSupportServiceProvider::class);
    }

    /**
     * {@inheritdoc}
     * @throws HasherNotSupported
     */
    public function boot(): void
    {
        /** @var Hasher $hasher */
        $hasher = $this->app->make(Hasher::class);
        if (!$hasher instanceof BcryptHasher) {
            throw HasherNotSupported::withUsedHasher(get_class($hasher));
        }

        /** @var Repository $config */
        $config = $this->app->make(Repository::class);
        $hasher->setRounds($config->get('bcrypt-support.rounds'));
    }
}
