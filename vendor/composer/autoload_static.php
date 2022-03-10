<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit79011b1c00cac66a391b9f71d510c182
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Sodexs\\MyPackage\\' => 17,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Sodexs\\MyPackage\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit79011b1c00cac66a391b9f71d510c182::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit79011b1c00cac66a391b9f71d510c182::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit79011b1c00cac66a391b9f71d510c182::$classMap;

        }, null, ClassLoader::class);
    }
}
