<?php
/**
 * This is a bloated front controller that needs trimming.
 */

// Autoloader.
require_once __DIR__.'/../vendor/autoload.php';

// dotenv example for managing environment constants.
$dotenv = new Dotenv\Dotenv(__DIR__.'/..');
$dotenv->load();

// Grab a environment variable.
getenv('APP_ENV');

// Main app instance and front controller hook.
$app = new Silex\Application();

// Debugging enabled.
$app['debug'] = true;

// Register Twig and specify the views directory.
$app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/../resources/views',
));

/**
 * A single resource example, make sure routes end with a slash to make them optional.
 * Refactor this to a general resource method to generator all of this in one go.
 */
$app->get("/hotels/", 'App\Http\Controllers\HotelController::index');
$app->get("/hotels/create/", 'App\Http\Controllers\HotelController::create');
$app->post("/hotels/", 'App\Http\Controllers\HotelController::store');
$app->get("/hotels/{id}/", 'App\Http\Controllers\HotelController::show');
$app->get("/hotels/{id}/edit/", 'App\Http\Controllers\HotelController::edit');
$app->put("/hotels/{id}/", 'App\Http\Controllers\HotelController::update');
$app->patch("/hotels/{id}/", 'App\Http\Controllers\HotelController::update');
$app->delete("/hotels/{id}/", 'App\Http\Controllers\HotelController::destroy');

// Turn on the fucking lights.
$app->run();