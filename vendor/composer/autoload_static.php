<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9f890ac97150acd2651cbf29b672ac35
{
    public static $files = array (
        '7b8fec4d0f7f3e2bf68d6a6c997dd928' => __DIR__ . '/../..' . '/helpers.php',
    );

    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/App',
        ),
    );

    public static $prefixesPsr0 = array (
        'p' => 
        array (
            'phpQuery' => 
            array (
                0 => __DIR__ . '/..' . '/coderockr/php-query/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit9f890ac97150acd2651cbf29b672ac35::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit9f890ac97150acd2651cbf29b672ac35::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit9f890ac97150acd2651cbf29b672ac35::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}