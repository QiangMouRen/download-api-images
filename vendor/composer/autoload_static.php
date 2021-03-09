<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit5c41898d24a9c1079c69d59f004d84d5
{
    public static $prefixLengthsPsr4 = array (
        'L' => 
        array (
            'Lazer\\Test\\' => 11,
            'Lazer\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Lazer\\Test\\' => 
        array (
            0 => __DIR__ . '/..' . '/greg0/lazer-database/tests/src',
        ),
        'Lazer\\' => 
        array (
            0 => __DIR__ . '/..' . '/greg0/lazer-database/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit5c41898d24a9c1079c69d59f004d84d5::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit5c41898d24a9c1079c69d59f004d84d5::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit5c41898d24a9c1079c69d59f004d84d5::$classMap;

        }, null, ClassLoader::class);
    }
}
