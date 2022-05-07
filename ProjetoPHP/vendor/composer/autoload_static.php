<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2b0ddeb799e85b0e82ff912302ee6415
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Aluno\\ProjetoPHP\\' => 17,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Aluno\\ProjetoPHP\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit2b0ddeb799e85b0e82ff912302ee6415::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit2b0ddeb799e85b0e82ff912302ee6415::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit2b0ddeb799e85b0e82ff912302ee6415::$classMap;

        }, null, ClassLoader::class);
    }
}