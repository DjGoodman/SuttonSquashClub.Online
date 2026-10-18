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
        $pageDescription = "Learn about Sutton Squash Club, where we play, how to get involved, and the most useful club pages for members and newcomers.";
        return view('about', ['pageTitle' => $pageTitle,'pageDescription' => $pageDescription]);
    }

    public function committee()
    {
        $pageTitle = "Committee";
        $pageDescription = "Meet the committee members of Sutton Squash Club.";
        $committeeMembers = [
            ['name' => 'Andy Hay', 'role' => 'Head Coach and Junior Lead'],
            ['name' => 'Daniel Goodman', 'role' => 'Chair, Coach, 2nd+4th team captain'],
            ['name' => 'Dan Mee', 'role' => 'Social Secretary, Box Leagues'],
            ['name' => 'Sam Blacknell', 'role' => '1st Team Captain'],
            ['name' => 'Stephen Townsend', 'role' => '3rd team captain'],
            ['name' => 'Max Lewis', 'role' => 'Treasurer'],
            ['name' => 'Jono Wright', 'role' => 'Secretary'],
        ];

        return view('committee', [
            'pageTitle' => $pageTitle,
            'pageDescription' => $pageDescription,
            'committeeMembers' => $committeeMembers,
        ]);
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
        return view('find', ['pageTitle' => $pageTitle,'pageDescription' => $pageDescription]);

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
