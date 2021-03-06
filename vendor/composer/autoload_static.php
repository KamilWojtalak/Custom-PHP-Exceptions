<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit39d3835a1480d182c31ded12ad5893ad
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit39d3835a1480d182c31ded12ad5893ad::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit39d3835a1480d182c31ded12ad5893ad::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit39d3835a1480d182c31ded12ad5893ad::$classMap;

        }, null, ClassLoader::class);
    }
}
