<?php

$config = [
    'debug' => true
];

/*
|--------------------------------------------------------------------------
| Create The Application
|--------------------------------------------------------------------------
|
| The first thing we will do is create a new Silex application instance
| which serves as the "glue" for all the components, and is
| the IoC container for the system binding all of the various parts.
|
*/

$app = new Silex\Application($config);

/*
|--------------------------------------------------------------------------
| Register our service providers
|--------------------------------------------------------------------------
|
| Register all te various service providers we might be using.
|
*/

require_once __DIR__.'/../config/serviceProviders.php';

/*
|--------------------------------------------------------------------------
| Mount our routes
|--------------------------------------------------------------------------
|
| Mount our route file.
|
*/

require_once __DIR__.'/../routes/web.php';

/*
|--------------------------------------------------------------------------
| Return The Application
|--------------------------------------------------------------------------
|
| This script returns the application instance. The instance is given to
| the calling script so we can separate the building of the instances
| from the actual running of the application and sending responses.
|
*/

return $app;