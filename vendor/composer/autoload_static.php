<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2c813cfd51427ddbb406271d13e26f1f
{
    public static $prefixLengthsPsr4 = array (
        'B' => 
        array (
            'Beans\\Frontend\\Framework\\' => 25,
            'Beans\\Frontend\\' => 15,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Beans\\Frontend\\Framework\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/framework',
        ),
        'Beans\\Frontend\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit2c813cfd51427ddbb406271d13e26f1f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit2c813cfd51427ddbb406271d13e26f1f::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
