<?php

namespace App\Http\Controllers;

use App\Models\PlayersFixture;
use App\Models\Player;
use App\Models\Fixture;
use Illuminate\Http\Request;

class PlayersFixtureController extends Controller
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
    }

    /**
     * Display the specified resource.
     */
    public function show(PlayersFixture $playersFixture)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PlayersFixture $playersFixture)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PlayersFixture $playersFixture)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PlayersFixture $playersFixture)
    {
        //
    }

    public function removePlayerFromFixture(Player $player, Fixture $fixture)
    {
        $fixture->players()->detach($player);

        return redirect()->route(
            'fixture.show',
            [
                'fixture' => $fixture,
            ]
        );
    }

    public function addPlayerToFixture(Player $player, Fixture $fixture)
    {
        $fixture->players()->attach($player);

        return redirect()->route(
            'fixture.show',
            [
                'fixture' => $fixture,
            ]
        );
    }

    public function addPlayerToAvailableForFixture(Player $player, Fixture $fixture)
    {
        $fixture->availablePlayers()->attach($player);

        return redirect()->route(
            'dashboard.index',
            [
                'user' => $player->user,
            ]
        );
    }

}
