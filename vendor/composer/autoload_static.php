<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1e5a2b7d10b6f0e8a18ec73e94250e00
{
    public static $prefixLengthsPsr4 = array (
        'Y' => 
        array (
            'Yusuf\\BulkMail\\' => 15,
        ),
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Yusuf\\BulkMail\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit1e5a2b7d10b6f0e8a18ec73e94250e00::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit1e5a2b7d10b6f0e8a18ec73e94250e00::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit1e5a2b7d10b6f0e8a18ec73e94250e00::$classMap;

        }, null, ClassLoader::class);
    }
}
