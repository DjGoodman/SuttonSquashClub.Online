<x-app-layout>
  <div class="container">
    <h1>Create Team</h1>

    <form action="{{ route('teams.store') }}" method="POST" class="max-w-2xl mx-auto p-4 sm:p-6 lg:p-8">
      @csrf

        <div class="form-group">
        <label for="club_id">Club</label>
        <select name="club_id" id="club_id" class="form-control">
          @foreach ($clubs as $club)
            <option value="{{ $club->id }}">{{ $club->name }}</option>
          @endforeach
        </select>
      </div>

        <label for="team_name">Team name</label>
        <input type="text" name="name" id="team_name" class="form-control">

      <x-input-error :messages="$errors->get('message')" class="mt-2" />
        <x-primary-button class="mt-4">{{ __('Create Team') }}</x-primary-button>
    </form>

    <h2 class="mt-8">Teams</h2>
    
    @foreach ($teams as $team)
      <div class="card mt-4">
        <div class="card-body">
          <h3>{{ $team->name }}</h3>
          <x-dropdown>
        <x-slot name="trigger">
          <button>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-400" viewBox="0 0 20 20" fill="currentColor">
              <path d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z" />
            </svg>
          </button>
        </x-slot>
        <x-slot name="content">
          <x-dropdown-link :href="route('teams.edit', $team)">
            {{ __('Edit') }}
          </x-dropdown-link>
          <x-dropdown-link :href="route('teams.show', $team)">
            {{ __('Add Players') }}
          </x-dropdown-link>
          <form method="POST" action="{{ route('teams.destroy', $team) }}">
                                            @csrf
                                            @method('delete')
                                            <x-dropdown-link :href="route('teams.destroy', $team)" onclick="event.preventDefault(); this.closest('form').submit();">
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