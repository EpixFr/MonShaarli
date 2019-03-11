<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit590ce86243e58872b26ca2f2877c3712
{
    public static $files = array (
        '253c157292f75eb38082b5acb06f3f01' => __DIR__ . '/..' . '/nikic/fast-route/src/functions.php',
        '4e8529f441ae68678bcd39411e36296b' => __DIR__ . '/..' . '/shaarli/netscape-bookmark-parser/NetscapeBookmarkParser.php',
    );

    public static $prefixLengthsPsr4 = array (
        'p' => 
        array (
            'pubsubhubbub\\publisher\\' => 23,
        ),
        'S' => 
        array (
            'Slim\\' => 5,
            'Shaarli\\Security\\' => 17,
            'Shaarli\\Config\\Exception\\' => 25,
            'Shaarli\\Config\\' => 15,
            'Shaarli\\Api\\Exceptions\\' => 23,
            'Shaarli\\Api\\Controllers\\' => 24,
            'Shaarli\\Api\\' => 12,
            'Shaarli\\' => 8,
        ),
        'P' => 
        array (
            'Psr\\Log\\' => 8,
            'Psr\\Http\\Message\\' => 17,
            'Psr\\Container\\' => 14,
        ),
        'K' => 
        array (
            'Katzgrau\\KLogger\\' => 17,
        ),
        'I' => 
        array (
            'Interop\\Container\\' => 18,
        ),
        'G' => 
        array (
            'Gettext\\Languages\\' => 18,
            'Gettext\\' => 8,
        ),
        'F' => 
        array (
            'FastRoute\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'pubsubhubbub\\publisher\\' => 
        array (
            0 => __DIR__ . '/..' . '/pubsubhubbub/publisher/library',
        ),
        'Slim\\' => 
        array (
            0 => __DIR__ . '/..' . '/slim/slim/Slim',
        ),
        'Shaarli\\Security\\' => 
        array (
            0 => __DIR__ . '/../..' . '/application/security',
        ),
        'Shaarli\\Config\\Exception\\' => 
        array (
            0 => __DIR__ . '/../..' . '/application/config/exception',
        ),
        'Shaarli\\Config\\' => 
        array (
            0 => __DIR__ . '/../..' . '/application/config',
        ),
        'Shaarli\\Api\\Exceptions\\' => 
        array (
            0 => __DIR__ . '/../..' . '/application/api/exceptions',
        ),
        'Shaarli\\Api\\Controllers\\' => 
        array (
            0 => __DIR__ . '/../..' . '/application/api/controllers',
        ),
        'Shaarli\\Api\\' => 
        array (
            0 => __DIR__ . '/../..' . '/application/api',
        ),
        'Shaarli\\' => 
        array (
            0 => __DIR__ . '/../..' . '/application',
        ),
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/Psr/Log',
        ),
        'Psr\\Http\\Message\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/http-message/src',
        ),
        'Psr\\Container\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/container/src',
        ),
        'Katzgrau\\KLogger\\' => 
        array (
            0 => __DIR__ . '/..' . '/katzgrau/klogger/src',
        ),
        'Interop\\Container\\' => 
        array (
            0 => __DIR__ . '/..' . '/container-interop/container-interop/src/Interop/Container',
        ),
        'Gettext\\Languages\\' => 
        array (
            0 => __DIR__ . '/..' . '/gettext/languages/src',
        ),
        'Gettext\\' => 
        array (
            0 => __DIR__ . '/..' . '/gettext/gettext/src',
        ),
        'FastRoute\\' => 
        array (
            0 => __DIR__ . '/..' . '/nikic/fast-route/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'W' => 
        array (
            'WebThumbnailer\\' => 
            array (
                0 => __DIR__ . '/..' . '/arthurhoaro/web-thumbnailer/src',
                1 => __DIR__ . '/..' . '/arthurhoaro/web-thumbnailer/tests',
            ),
        ),
        'P' => 
        array (
            'Pimple' => 
            array (
                0 => __DIR__ . '/..' . '/pimple/pimple/src',
            ),
            'Parsedown' => 
            array (
                0 => __DIR__ . '/..' . '/erusev/parsedown',
            ),
        ),
    );

    public static $classMap = array (
        'Katzgrau\\KLogger\\Logger' => __DIR__ . '/..' . '/katzgrau/klogger/src/Logger.php',
        'Text_Template' => __DIR__ . '/..' . '/phpunit/php-text-template/src/Template.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit590ce86243e58872b26ca2f2877c3712::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit590ce86243e58872b26ca2f2877c3712::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit590ce86243e58872b26ca2f2877c3712::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit590ce86243e58872b26ca2f2877c3712::$classMap;

        }, null, ClassLoader::class);
    }
}