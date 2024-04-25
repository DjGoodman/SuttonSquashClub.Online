<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>

    <!-- Select fixture availability for each team the player is a member of -->
    @foreach ($user->player->teams as $team)

        @foreach ($team->fixtures as $fixture)
            <div class="max-w-2xl mx-auto p-4 sm:p-6 lg:p-8">
                <form method="POST" action="{{ route('playersFixture.addPlayerToAvailableForFixture', ['player' => $user->player, 'fixture'=> $fixture]) }}">
                    @csrf
                    <div class="mt-4 space-x-2">
                        <h3>{{ $fixture->fixture_name }}</h3>
                        <h3>{{ $team->name }}</h3>
                        <h3>{{ $fixture->date }}</h3>
                        <x-input-error :messages="$errors->get('message')" class="mt-2" />
                        <x-primary-button>{{ __('Available') }}</x-primary-button>
                        <x-primary-button>{{ __('Unavailable') }}</x-primary-button>
                    </div>
                </form>
            </div>

            @endforeach
    @endforeach

</x-app-layout>
