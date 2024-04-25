<x-app-layout>
  <div class="container">
    <h1 class="flex">Show Fixture</h1>
  </div>

  <div class="container">
    <h1 class="flex">{{ $fixture->name }}</h1>
    <h2 class="flex">Selected Players</h2>
    <ul>
      @foreach ($fixture->players as $player)
        <li>{{ $player->user->name }}</li>
        <!-- Button to remove player from team -->
        <form method="POST" action="{{ route('playersFixture.removePlayerFromFixture', ['player' => $player, 'fixture' => $fixture]) }}">
          @csrf
          @method('delete')
          <button type="submit" class="btn btn-danger">Remove Player from Fixture</button>
        </form>
      @endforeach
    </ul>

  <div class="container">
    <h1 class="flex">Available Team Players</h1>
  </div>
  @foreach ($fixture->availablePlayers as $teamPlayer)

  <div class="container">
    <h1 class="flex">{{ $teamPlayer->user->name }}</h1>
    <!-- button to add player to team -->
    <form method="POST" action="{{ route('playersFixture.store') }}">
      @csrf
      <button type="submit" class="btn btn-primary">Add Player to Fixture</button>
    </form>
  @endforeach
    
</x-app-layout>