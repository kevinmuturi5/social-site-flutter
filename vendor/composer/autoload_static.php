<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9e2aa93ab9de4c829b827e487ad66092
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PostgreSQLTutorial\\' => 19,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PostgreSQLTutorial\\' => 
        array (
            0 => __DIR__ . '/../..' . '/blogish',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit9e2aa93ab9de4c829b827e487ad66092::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit9e2aa93ab9de4c829b827e487ad66092::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
