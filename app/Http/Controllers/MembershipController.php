<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MembershipController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pageTitle = "Memberships";
        $pageDescription = "Membership Fees and perks";
        return view('join', ['pageTitle' => $pageTitle,'pageDescription' => $pageDescription]);
    }

    public function juniors()
    {
        $pageTitle = "Junior Squash";
        $pageDescription = "Sport information about junior Squash for kids and young adults.";
        return view('juniors', ['pageTitle' => $pageTitle,'pageDescription' => $pageDescription]);
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
