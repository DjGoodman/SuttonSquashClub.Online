<?php

namespace App\Http\Controllers;

use App\Models\Club;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class ClubController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('clubs.index', [
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
        ]);

        Club::create($validated);

        return redirect()->route('clubs.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Club $club)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Club $club)
    {
        Gate::authorize('update', $club);

        return view('clubs.edit', [
            'club' => $club,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Club $club)
    {
        Gate::authorize('update', $club);

        $validated = $request->validate([
            'name' => 'required|string',
        ]);

        $club->update($validated);

        return redirect()->route('clubs.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Club $club)
    {
        //
        Gate::authorize('delete', $club);

        $club->delete();

        return redirect()->route('clubs.index');
    }
}
