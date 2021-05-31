<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4655244ae85e31c31fbacba51995723f
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Alura\\Pdo\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Alura\\Pdo\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit4655244ae85e31c31fbacba51995723f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit4655244ae85e31c31fbacba51995723f::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit4655244ae85e31c31fbacba51995723f::$classMap;

        }, null, ClassLoader::class);
    }
}