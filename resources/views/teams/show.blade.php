<x-app-layout>
  <div class="container">
    <h1 class="flex">Show Team</h1>
  </div>

  <div class="container">
    <h1 class="flex">{{ $team->name }}</h1>
    <h2 class="flex">Players</h2>
    <ul>
      @foreach ($team->players as $player)
        <li>{{ $player->user->name }}</li>
      @endforeach
    </ul>

  <div class="container">
    <h1 class="flex">Club Players</h1>
  </div>
  @foreach ($clubPlayers as $clubPlayer)

  <div class="container">
    <h1 class="flex">{{ $clubPlayer->user->name }}</h1>
    <!-- button to add player to team -->
    <form method="POST" action="{{ route('playersTeam.store') }}">
      @csrf
      <input type="hidden" name="team_id" value="{{ $team->id }}">
      <input type="hidden" name="player_id" value="{{ $clubPlayer->id }}">
      <button type="submit" class="btn btn-primary">Add Player to Team</button>
    </form>
  @endforeach
    
</x-app-layout>