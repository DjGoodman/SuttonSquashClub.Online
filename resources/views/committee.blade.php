<x-layout :pageTitle="$pageTitle" :pageDescription="$pageDescription">
    <x-slot name="content">
        <div class="jumbotron text-center container container-fluid">
            <h1>Committee</h1>
        </div>

        <div class="container container-fluid">
            <div class="row">
                @foreach ($committeeMembers as $member)
                    <div class="col-md-6 col-lg-4 mb-4">
                        <div class="card h-100">
                            <div class="card-body text-center">
                                <h2 class="card-title h4">{{ $member['name'] }}</h2>
                                <p class="card-text">{{ $member['role'] }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </x-slot>
</x-layout>
