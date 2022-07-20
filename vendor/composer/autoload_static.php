<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc0da3ae13d89cedde202b9621b1b473a
{
    public static $prefixLengthsPsr4 = array (
        'w' => 
        array (
            'wfm\\' => 4,
        ),
        'a' => 
        array (
            'app\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'wfm\\' => 
        array (
            0 => __DIR__ . '/..' . '/wfm',
        ),
        'app\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitc0da3ae13d89cedde202b9621b1b473a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc0da3ae13d89cedde202b9621b1b473a::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitc0da3ae13d89cedde202b9621b1b473a::$classMap;

        }, null, ClassLoader::class);
    }
}
