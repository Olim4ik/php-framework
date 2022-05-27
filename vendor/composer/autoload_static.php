<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitfd0e6071320ed5e935f9fcacde2f2f26
{
    public static $prefixLengthsPsr4 = array (
        'a' => 
        array (
            'app\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'app\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitfd0e6071320ed5e935f9fcacde2f2f26::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitfd0e6071320ed5e935f9fcacde2f2f26::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitfd0e6071320ed5e935f9fcacde2f2f26::$classMap;

        }, null, ClassLoader::class);
    }
}
