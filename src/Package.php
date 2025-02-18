<?php

namespace Zerotoprod\:namespace;

use Symfony\Component\Console\Application;
use Zerotoprod\:namespace\Src\SrcCommand;

/**
 * :description
 *
 * @link https://github.com/zero-to-prod/:slug
 */
class :namespace
{
    /**
     * @link https://github.com/zero-to-prod/:slug
     */
    public static function register(Application $Application): void
    {
        $Application->add(new SrcCommand());
    }
}