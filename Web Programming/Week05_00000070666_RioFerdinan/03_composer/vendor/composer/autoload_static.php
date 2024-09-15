<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit52df4bdf690410e472b8aaea4cfab1fa
{
    public static $prefixLengthsPsr4 = array (
        'H' => 
        array (
            'HelloWorld\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'HelloWorld\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit52df4bdf690410e472b8aaea4cfab1fa::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit52df4bdf690410e472b8aaea4cfab1fa::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit52df4bdf690410e472b8aaea4cfab1fa::$classMap;

        }, null, ClassLoader::class);
    }
}
