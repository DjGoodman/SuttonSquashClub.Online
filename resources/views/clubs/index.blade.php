<x-app-layout>


  <form class="max-w-2xl mx-auto p-4 sm:p-6 lg:p-8" action="{{ route('clubs.store') }}" method="POST">
    <h1 class="underline">Create Club</h1>
    @csrf

    <label for="club_name">Club name</label>
    <input type="text" name="name" id="club_name" class="form-control">
    <x-input-error :messages="$errors->get('message')" class="mt-2" />
    <x-primary-button class="mt-4">{{ __('Create Club') }}</x-primary-button>
  </form>

  <h2 class="mt-8">Clubs</h2>

  @foreach ($clubs as $club)
  <div class="card mt-4">
    <div class="card-body">
      <h3>{{ $club->name }}</h3>
      <x-dropdown>
        <x-slot name="trigger">
          <button>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-400" viewBox="0 0 20 20" fill="currentColor">
              <path d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z" />
            </svg>
          </button>
        </x-slot>
        <x-slot name="content">
          <x-dropdown-link :href="route('clubs.edit', $club)">
            {{ __('Edit') }}
          </x-dropdown-link>
          <form method="POST" action="{{ route('clubs.destroy', $club) }}">
                                            @csrf
                                            @method('delete')
                                            <x-dropdown-link :href="route('clubs.destroy', $club)" onclick="event.preventDefault(); this.closest('form').submit();">
                                                {{ __('Delete') }}
                                            </x-dropdown-link>
                                        </form>
        </x-slot>
      </x-dropdown>
    </div>
  </div>
  @endforeach
</x-app-layout>