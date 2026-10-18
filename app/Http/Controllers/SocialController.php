<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SocialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pageTitle = "Social";
        $pageDescription = "Information about Social Night";
        return view('social', ['pageTitle' => $pageTitle,'pageDescription' => $pageDescription]);
    }

    public function teamUpdates()
    {
        $pageTitle = "Follow Our Teams";
        $pageDescription = "Keep up with Sutton Squash Club team fixtures, results and club news.";
        return view('teams', ['pageTitle' => $pageTitle, 'pageDescription' => $pageDescription]);
    }

    public function boxleague()
    {
        $pageTitle = "Social Box Leagues";
        $pageDescription = "Information about Sutton Box Leagues";
        return view('boxleague', ['pageTitle' => $pageTitle,'pageDescription' => $pageDescription]);
    }

    public function boxleagueFAQ()
    {
        $pageTitle = "Social Box Leagues FAQ";
        $pageDescription = "Information about Sutton Box Leagues";
        return view('boxleagueFAQ', ['pageTitle' => $pageTitle,'pageDescription' => $pageDescription]);
    }

    public function teamSquashFAQ()
    {
        $pageTitle = "Team Squash FAQ";
        $pageDescription = "Information about playing team squash for Sutton Squash Club";
        return view('teamSquashFAQ', ['pageTitle' => $pageTitle,'pageDescription' => $pageDescription]);
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
