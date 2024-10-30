<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pageTitle = "Welcome";
        return view('welcome', ['pageTitle' => $pageTitle,'pageDescription' => "The HomePage of the Sutton Squash Club"]);
    }

    public function padel()
    {
        $pageTitle = "Padel";
        return view('padel', ['pageTitle' => $pageTitle,'pageDescription' => "Information about Padel Tennis in Mansfield and Sutton in Ashfield"]);
    }

    public function pickleball()
    {
        $pageTitle = "Pickleball";
        return view('pickleball', ['pageTitle' => $pageTitle,'pageDescription' => "Information about pickleball Tennis in Mansfield and Sutton in Ashfield"]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
