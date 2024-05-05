<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb5389dcd497709bdb78342a1a7793dc4
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Alfianizzah\\Laradi\\' => 19,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Alfianizzah\\Laradi\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitb5389dcd497709bdb78342a1a7793dc4::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb5389dcd497709bdb78342a1a7793dc4::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitb5389dcd497709bdb78342a1a7793dc4::$classMap;

        }, null, ClassLoader::class);
    }
}
