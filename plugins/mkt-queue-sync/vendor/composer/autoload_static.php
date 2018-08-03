<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit793bdee794ceba540cb0afc247cbaccd
{
    public static $files = array (
        'bbf73f3db644d3dced353b837903e74c' => __DIR__ . '/..' . '/php-di/php-di/src/DI/functions.php',
    );

    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Psr\\Log\\' => 8,
            'Psr\\Container\\' => 14,
            'PhpDocReader\\' => 13,
        ),
        'M' => 
        array (
            'MikrotikQueueSync\\' => 18,
        ),
        'K' => 
        array (
            'Katzgrau\\KLogger\\' => 17,
        ),
        'I' => 
        array (
            'Invoker\\' => 8,
            'Interop\\Container\\' => 18,
        ),
        'D' => 
        array (
            'Doctrine\\Common\\Cache\\' => 22,
            'DI\\' => 3,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/Psr/Log',
        ),
        'Psr\\Container\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/container/src',
        ),
        'PhpDocReader\\' => 
        array (
            0 => __DIR__ . '/..' . '/php-di/phpdoc-reader/src/PhpDocReader',
        ),
        'MikrotikQueueSync\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'Katzgrau\\KLogger\\' => 
        array (
            0 => __DIR__ . '/..' . '/katzgrau/klogger/src',
        ),
        'Invoker\\' => 
        array (
            0 => __DIR__ . '/..' . '/php-di/invoker/src',
        ),
        'Interop\\Container\\' => 
        array (
            0 => __DIR__ . '/..' . '/container-interop/container-interop/src/Interop/Container',
        ),
        'Doctrine\\Common\\Cache\\' => 
        array (
            0 => __DIR__ . '/..' . '/doctrine/cache/lib/Doctrine/Common/Cache',
        ),
        'DI\\' => 
        array (
            0 => __DIR__ . '/..' . '/php-di/php-di/src/DI',
        ),
    );

    public static $classMap = array (
        'Katzgrau\\KLogger\\Logger' => __DIR__ . '/..' . '/katzgrau/klogger/src/Logger.php',
        'RouterosAPI' => __DIR__ . '/..' . '/BenMenking/routeros-api/routeros_api.class.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit793bdee794ceba540cb0afc247cbaccd::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit793bdee794ceba540cb0afc247cbaccd::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit793bdee794ceba540cb0afc247cbaccd::$classMap;

        }, null, ClassLoader::class);
    }
}
