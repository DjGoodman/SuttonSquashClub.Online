<x-app-layout>
    <div class="max-w-2xl mx-auto p-4 sm:p-6 lg:p-8">
        <form method="POST" action="{{ route('fixtures.update', $fixture) }}">
            @csrf
            @method('patch')
            <textarea
                name="fixture_name"
            >{{ old('fixture_name', $fixture->fixture_name) }}</textarea>
            <input type="date" name="date" id="date" class="form-control" value="{{ old('date', $fixture->date) }}">
            <x-input-error :messages="$errors->get('message')" class="mt-2" />
            <div class="mt-4 space-x-2">
                <x-primary-button>{{ __('Save') }}</x-primary-button>
                <a href="{{ route('fixtures.index') }}">{{ __('Cancel') }}</a>
            </div>
        </form>
    </div>
</x-app-layout>