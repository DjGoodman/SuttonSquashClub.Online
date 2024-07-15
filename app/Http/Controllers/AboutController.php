<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pageTitle = "About";
        $pageDescription = "Find out about Sutton Squash club.
        Sutton squash club is based at Lammas Leisure Centre in Sutton in Ashfield.
        The club plays in the Nottinghamshire Squash League and is affilated with England Squash.";
        return view('about', ['pageTitle' => $pageTitle,'pageDescription' => $pageDescription]);
    }

    public function calendar()
    {
        $pageTitle = "Club Calendar";
        $pageDescription = "Find out about events at Sutton Squash club.";
        return view('calendar', ['pageTitle' => $pageTitle,'pageDescription' => $pageDescription]);
    }

    public function findus()
    {
        $pageTitle = "Find Us";
        $pageDescription = "How To Find Sutton Squash Club";
        return view('about', ['pageTitle' => $pageTitle,'pageDescription' => $pageDescription]);

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
