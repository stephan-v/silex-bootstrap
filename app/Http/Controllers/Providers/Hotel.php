<?php

namespace App\Http\Controllers\Providers;

use Silex\Application;
use Silex\Api\ControllerProviderInterface;

class Hotel implements ControllerProviderInterface{

    public function connect(Application $app)
    {
        $users = $app["controllers_factory"];

        $users->get("/", "App\\Http\\Controllers\\HotelController::index");

        $users->post("/", "App\\Http\\Controllers\\HotelController::store");

        $users->get("/{id}", "App\\Http\\Controllers\\HotelController::show");

        $users->get("/edit/{id}", "App\\Http\\Controllers\\HotelController::edit");

        $users->put("/{id}", "App\\Http\\Controllers\\HotelController::update");

        $users->delete("/{id}", "App\\Http\\Controllers\\HotelController::destroy");

        return $users;
    }

}
