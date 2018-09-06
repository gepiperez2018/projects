<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita37f1a2c3d6ee4ae369795727ea0d24f
{
    public static $prefixLengthsPsr4 = array (
        'Z' => 
        array (
            'Zend\\Validator\\' => 15,
            'Zend\\Uri\\' => 9,
            'Zend\\Stdlib\\' => 12,
            'Zend\\Soap\\' => 10,
            'Zend\\Server\\' => 12,
            'Zend\\EventManager\\' => 18,
            'Zend\\Escaper\\' => 13,
            'Zend\\Code\\' => 10,
        ),
        'P' => 
        array (
            'Psr\\Container\\' => 14,
        ),
        'I' => 
        array (
            'Interop\\Container\\' => 18,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Zend\\Validator\\' => 
        array (
            0 => __DIR__ . '/..' . '/zendframework/zend-validator/src',
        ),
        'Zend\\Uri\\' => 
        array (
            0 => __DIR__ . '/..' . '/zendframework/zend-uri/src',
        ),
        'Zend\\Stdlib\\' => 
        array (
            0 => __DIR__ . '/..' . '/zendframework/zend-stdlib/src',
        ),
        'Zend\\Soap\\' => 
        array (
            0 => __DIR__ . '/..' . '/zendframework/zend-soap/src',
        ),
        'Zend\\Server\\' => 
        array (
            0 => __DIR__ . '/..' . '/zendframework/zend-server/src',
        ),
        'Zend\\EventManager\\' => 
        array (
            0 => __DIR__ . '/..' . '/zendframework/zend-eventmanager/src',
        ),
        'Zend\\Escaper\\' => 
        array (
            0 => __DIR__ . '/..' . '/zendframework/zend-escaper/src',
        ),
        'Zend\\Code\\' => 
        array (
            0 => __DIR__ . '/..' . '/zendframework/zend-code/src',
        ),
        'Psr\\Container\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/container/src',
        ),
        'Interop\\Container\\' => 
        array (
            0 => __DIR__ . '/..' . '/container-interop/container-interop/src/Interop/Container',
        ),
    );

    public static $prefixesPsr0 = array (
        'M' => 
        array (
            'Monolog' => 
            array (
                0 => __DIR__ . '/..' . '/monolog/monolog/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInita37f1a2c3d6ee4ae369795727ea0d24f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita37f1a2c3d6ee4ae369795727ea0d24f::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInita37f1a2c3d6ee4ae369795727ea0d24f::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
