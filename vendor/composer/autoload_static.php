<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite9fcc6565cf5c5d0197e0ac90c0cb5eb
{
    public static $prefixLengthsPsr4 = array (
        'J' => 
        array (
            'Jyxon\\GdprCookieCompliance\\' => 27,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Jyxon\\GdprCookieCompliance\\' => 
        array (
            0 => __DIR__ . '/..' . '/jyxon/gdpr-cookie-compliance/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite9fcc6565cf5c5d0197e0ac90c0cb5eb::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite9fcc6565cf5c5d0197e0ac90c0cb5eb::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInite9fcc6565cf5c5d0197e0ac90c0cb5eb::$classMap;

        }, null, ClassLoader::class);
    }
}
