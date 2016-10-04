<?php

namespace App\Http\Controllers;

use Silex\Application;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class HotelController {

    /**
     * Display a listing of the resource.
     *
     * @param Application $app
     * @return Response
     */
    public function index(Application $app)
    {
        $name = 'John Doe';

        return $app['twig']->render('hello.twig', array(
            'name' => $name,
        ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return 'Showing the form for creating a new resource.';
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        return $request->get('name');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        return 'Displaying the specified resource.';
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        return 'Showing the form for editing the specified resource.';
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        return 'Updating the specified resource in storage.';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        return 'Removing the specified resource from storage.';
    }
}
