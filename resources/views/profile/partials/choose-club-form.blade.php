<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Select Club') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __("Please Choose the Club you wish to play for.") }}
        </p>
    </header>


    <form method="post" action="{{ route('players.update', $player) }}" class="mt-6 space-y-6">
        @csrf
        @method('patch')

        <div>
            <x-input-label for="club" :value="__('Name')" />
            <select id="club" name="club_id" class="mt-1 block w-full" :value="old('name', $club->name)" required autofocus autocomplete="name">
                @foreach ($clubs as $club)
                    <option value="{{ $club->id }}">{{ $club->name }}</option>
                @endforeach
            </select>
            <x-input-error class="mt-2" :messages="$errors->get('name')" />
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Save') }}</x-primary-button>

            @if (session('status') === 'club-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600"
                >{{ __('Saved.') }}</p>
            @endif
        </div>
    </form>
</section>
