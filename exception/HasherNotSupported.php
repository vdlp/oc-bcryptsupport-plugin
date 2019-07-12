<?php

declare(strict_types=1);

namespace Vdlp\BcryptSupport\Exception;

use RuntimeException;

/**
 * Class HasherNotSupported
 *
 * @package Vdlp\BcryptSupport\Exception
 */
class HasherNotSupported extends RuntimeException
{
    /**
     * @param string $hasher
     * @return HasherNotSupported
     */
    public static function withUsedHasher(string $hasher): HasherNotSupported
    {
        return new self(sprintf('Hasher not supported. (used hasher: %s)', $hasher));
    }
}
