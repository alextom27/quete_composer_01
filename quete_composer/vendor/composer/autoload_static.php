<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit502dac7dbddd64c95549d7313207c30d
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
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'H' => 
        array (
            'HelloWorld' => 
            array (
                0 => __DIR__ . '/..' . '/ehime/hello-world/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit502dac7dbddd64c95549d7313207c30d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit502dac7dbddd64c95549d7313207c30d::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit502dac7dbddd64c95549d7313207c30d::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
