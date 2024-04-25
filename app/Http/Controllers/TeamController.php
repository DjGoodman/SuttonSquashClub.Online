<?php

namespace App\Http\Controllers;

use App\Models\Team;
use App\Models\Club;
use App\Models\Player;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('teams.index', [
            'teams' => Team::all(),
            'clubs' => Club::all(),
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
        //
        $validated = $request->validate([
            'name' => 'required|string',
            'club_id' => 'required|exists:clubs,id',
        ]);

        Team::create($validated);

        return redirect()->route('teams.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Team $team)
    {
        return view('teams.show', [
            'team' => $team,
            'players' => $team->players,
            'clubPlayers' => $team->club->players,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Team $team)
    {
        //
        Gate::authorize('update', $team);

        return view('teams.edit', [
            'team' => $team,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Team $team)
    {
        //
        Gate::authorize('update', $team);

        $validated = $request->validate([
            'name' => 'required|string',
        ]);

        $team->update($validated);

        return redirect()->route('teams.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Team $team)
    {
        //
        Gate::authorize('delete', $team);

        $team->delete();

        return redirect()->route('teams.index');
    }
}
