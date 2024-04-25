<?php

namespace App\Http\Controllers;

use App\Models\Player;
use App\Models\PlayersTeam;
use App\Models\Team;
use Illuminate\Http\Request;

class PlayersTeamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
            'player_id' => 'required|exists:players,id',
            'team_id' => 'required|exists:teams,id',
        ]);

        $team = Team::find($validated['team_id']);
        $player = Player::find($validated['player_id']);

        $team->players()->attach($player);

        return redirect()->route(
            'teams.show',
            [
                'team' => $team,
                'players' => $team->players,
                'clubPlayers' => $team->club->players
            ]
        );
    }

    /**
     * Display the specified resource.
     */
    public function show(PlayersTeam $playersTeam)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PlayersTeam $playersTeam)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PlayersTeam $playersTeam)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PlayersTeam $playersTeam)
    {
    }

    public function removePlayerFromTeam(Player $player, Team $team)
    {
        $team->players()->detach($player);

        return redirect()->route(
            'teams.show',
            [
                'team' => $team,
                'players' => $team->players,
                'clubPlayers' => $team->club->players
            ]
        );
    }
}
