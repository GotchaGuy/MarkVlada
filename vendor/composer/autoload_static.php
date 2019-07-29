<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitcbd8f22b4e36d74f0c7e26ea911bb6fb
{
    public static $classMap = array (
        'Cms\\Controllers\\AdminMoviesController' => __DIR__ . '/../..' . '/controllers/AdminMoviesController.php',
        'Cms\\Controllers\\ApiController' => __DIR__ . '/../..' . '/controllers/ApiController.php',
        'Cms\\Controllers\\ApiPetsController' => __DIR__ . '/../..' . '/controllers/ApiPetsController.php',
        'Cms\\Controllers\\PagesController' => __DIR__ . '/../..' . '/controllers/PagesController.php',
        'Cms\\Controllers\\TasksController' => __DIR__ . '/../..' . '/controllers/TasksController.php',
        'Cms\\Core\\App' => __DIR__ . '/../..' . '/core/App.php',
        'Cms\\Core\\Database\\Connection' => __DIR__ . '/../..' . '/core/database/Connection.php',
        'Cms\\Core\\Database\\QueryBuilder' => __DIR__ . '/../..' . '/core/database/QueryBuilder.php',
        'Cms\\Core\\Request' => __DIR__ . '/../..' . '/core/Request.php',
        'Cms\\Core\\Router' => __DIR__ . '/../..' . '/core/Router.php',
        'ComposerAutoloaderInitcbd8f22b4e36d74f0c7e26ea911bb6fb' => __DIR__ . '/..' . '/composer/autoload_real.php',
        'Composer\\Autoload\\ClassLoader' => __DIR__ . '/..' . '/composer/ClassLoader.php',
        'Composer\\Autoload\\ComposerStaticInitcbd8f22b4e36d74f0c7e26ea911bb6fb' => __DIR__ . '/..' . '/composer/autoload_static.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInitcbd8f22b4e36d74f0c7e26ea911bb6fb::$classMap;

        }, null, ClassLoader::class);
    }
}