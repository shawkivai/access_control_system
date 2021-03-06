<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit95ee58985f2677a3e5c03139c4723b5c
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Symfony\\Component\\EventDispatcher\\' => 34,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Symfony\\Component\\EventDispatcher\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/event-dispatcher',
        ),
    );

    public static $prefixesPsr0 = array (
        'G' => 
        array (
            'Guzzle\\Tests' => 
            array (
                0 => __DIR__ . '/..' . '/guzzle/guzzle/tests',
            ),
            'Guzzle' => 
            array (
                0 => __DIR__ . '/..' . '/guzzle/guzzle/src',
            ),
        ),
        'A' => 
        array (
            'Aws' => 
            array (
                0 => __DIR__ . '/..' . '/aws/aws-sdk-php/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit95ee58985f2677a3e5c03139c4723b5c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit95ee58985f2677a3e5c03139c4723b5c::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit95ee58985f2677a3e5c03139c4723b5c::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
