<?php

/**
 * This is a bloated front controller that needs trimming.
 */

// Autoloader.
require_once __DIR__.'/../vendor/autoload.php';

// dotenv example for managing environment constants.
$dotenv = new Dotenv\Dotenv(__DIR__.'/..');
$dotenv->load();

// Main app instance and front controller hook.
$app = new Silex\Application();

// Database connection and dotenv example.
$app->register(new Silex\Provider\DoctrineServiceProvider(), array(
    'dbs.options' => array (
        'mysql_read' => array(
            'driver'    => 'pdo_mysql',
            'host'      => getenv('DB_HOST'),
            'dbname'    => getenv('DB_DATABASE'),
            'user'      => getenv('DB_USERNAME'),
            'password'  => getenv('DB_PASSWORD'),
            'charset'   => 'utf8mb4',
        )
    )
));

$bookSegment = $app['db']->fetchAll('SELECT * FROM booksegment');

// Debugging enabled.
$app['debug'] = true;

// Register Twig and specify the views directory.
$app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/../resources/views'
));
$app->register(new Silex\Provider\HttpFragmentServiceProvider());
$app->register(new Silex\Provider\ServiceControllerServiceProvider());

// Web profiler(debugbar, performance monitor, etc.).
$app->register(new Silex\Provider\WebProfilerServiceProvider(), array(
    'profiler.cache_dir' => __DIR__.'/../cache/profiler',
    'profiler.mount_prefix' => '/_profiler', // this is the default
));

// Grab our routes file.
require_once __DIR__.'/../routes/web.php';

// Turn on the fucking lights.
$app->run();
