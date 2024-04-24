<?php

namespace App\Http\Controllers;

use App\Models\Fixture;
use App\Models\Team;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class FixtureController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        return view('fixtures.index', [
            'fixtures' => Fixture::all(),
            'teams' => Team::all(),
        ]);
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
        $validated = $request->validate([
            'team_id' => 'required|exists:teams,id',
            'date' => 'required|date',
            "fixture_name" => "required|string",
        ]);

        Fixture::create($validated);

        return redirect()->route('fixtures.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Fixture $fixture)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Fixture $fixture)
    {
        //
        Gate::authorize('update', $fixture);

        return view('fixtures.edit', [
            'fixture' => $fixture,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Fixture $fixture)
    {
        //
        Gate::authorize('update', $fixture);

        $validated = $request->validate([
            'date' => 'required|date',
            "fixture_name" => "required|string",
        ]);

        $fixture->update($validated);

        return redirect()->route('fixtures.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Fixture $fixture)
    {
        //
    }
}
