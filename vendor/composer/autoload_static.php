<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit08fe89b9b791645fdf46afc629c31894
{
    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit08fe89b9b791645fdf46afc629c31894::$classMap;

        }, null, ClassLoader::class);
    }
}
