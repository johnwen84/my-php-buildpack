<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit350a997d80ec95e61524eb4eae2ce8c9
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Monolog\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Monolog\\' => 
        array (
            0 => __DIR__ . '/..' . '/monolog/monolog/src/Monolog',
        ),
    );

    public static $prefixesPsr0 = array (
        'P' => 
        array (
            'Psr\\Log\\' => 
            array (
                0 => __DIR__ . '/..' . '/psr/log',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit350a997d80ec95e61524eb4eae2ce8c9::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit350a997d80ec95e61524eb4eae2ce8c9::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit350a997d80ec95e61524eb4eae2ce8c9::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
