<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita3acc7d8350fa8627e6557f513da6a20
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Powerhouse\\' => 11,
        ),
        'F' => 
        array (
            'Fountain\\' => 9,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Powerhouse\\' => 
        array (
            0 => __DIR__ . '/../..' . '/powerhouse/framework',
        ),
        'Fountain\\' => 
        array (
            0 => __DIR__ . '/../..' . '/powerhouse/fountain',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInita3acc7d8350fa8627e6557f513da6a20::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita3acc7d8350fa8627e6557f513da6a20::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}