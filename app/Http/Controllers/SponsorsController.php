<?php

namespace App\Http\Controllers;

class SponsorsController extends Controller
{
    public function index()
    {
        return view('sponsors', [
            'pageTitle' => 'Sponsors',
            'pageDescription' => 'Find out how to sponsor Sutton Squash Club sessions or team kit.',
        ]);
    }
}
