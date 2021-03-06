<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitea4d1aa5b7e51ddbc8fb2e93d87402fc
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitea4d1aa5b7e51ddbc8fb2e93d87402fc::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitea4d1aa5b7e51ddbc8fb2e93d87402fc::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitea4d1aa5b7e51ddbc8fb2e93d87402fc::$classMap;

        }, null, ClassLoader::class);
    }
}
