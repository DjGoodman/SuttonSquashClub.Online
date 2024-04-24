<x-app-layout>
  <div class="container">
    <h1>Create Fixture</h1>

    <form action="{{ route('fixtures.store') }}" method="POST" class="max-w-2xl mx-auto p-4 sm:p-6 lg:p-8">
      @csrf

      <div class="form-group">
        <label for="team_id">Home Team</label>
        <select name="team_id" id="team_id" class="form-control">
          @foreach ($teams as $team)
            <option value="{{ $team->id }}">{{ $team->name }}</option>
          @endforeach
        </select>
      </div>

      <div class="form-group">
        <label for="fixture_name">Fixture Name</label>
        <input type="text" name="fixture_name" id="fixture_name" class="form-control">
      </div>

      <div class="form-group">
        <label for="date">Date</label>
        <input type="date" name="date" id="date" class="form-control">
      </div>

      <x-input-error :messages="$errors->get('message')" class="mt-2" />
        <x-primary-button class="mt-4">{{ __('Create Fixture') }}</x-primary-button>
    </form>

    <h2 class="mt-8">Fixtures</h2>

    @foreach ($fixtures as $fixture)
      <div class="card mt-4">
        <div class="card-body">
          <h3>{{ $fixture->fixture_name }}</h3>
          <p>{{ $fixture->date }}</p>
          <x-dropdown>
            <x-slot name="trigger">
              <button>
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-400" viewBox="0 0 20 20" fill="currentColor">
                  <path d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z" />
                </svg>
              </button>
            </x-slot>
            <x-slot name="content">
              <x-dropdown-link :href="route('fixtures.edit', $fixture)">
                {{ __('Edit') }}
              </x-dropdown-link>
              <form method="POST" action="{{ route('fixtures.destroy', $fixture) }}">
                @csrf
                @method('delete')
                <x-dropdown-link :href="route('fixtures.destroy', $fixture)" onclick="event.preventDefault(); this.closest('form').submit();">
                  {{ __('Delete') }}
                </x-dropdown-link>
              </form>
            </x-slot>
          </x-dropdown>
        </div>
      </div>
    @endforeach
  </div>
</x-app-layout>