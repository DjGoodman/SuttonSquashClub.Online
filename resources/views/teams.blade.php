<x-layout :pageTitle="$pageTitle" :pageDescription="$pageDescription">
    <x-slot name="content">
        <div class="jumbotron text-center container container-fluid">
            <h1>Follow Our Teams</h1>
            <p class="mb-0">Keep up with Sutton Squash Club fixtures, results and news.</p>
        </div>

        <div class="container container-fluid">
            <div class="row">
                <div class="card-deck col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <h2>Fixtures and Results</h2>
                            <p>See how our teams are doing in the Nottinghamshire Squash League.</p>
                            <a class="btn btn-primary" href="https://nottssquash.leaguemanagersq.com/?"
                                target="_blank" rel="noopener noreferrer">
                                View fixtures and results
                            </a>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <h2>Follow Sutton Squash Club</h2>
                            <p>Follow us on social media for club news and updates.</p>
                            <a class="btn btn-primary mr-2" href="https://www.facebook.com/suttonsquash"
                                target="_blank" rel="noopener noreferrer">
                                Facebook
                            </a>
                            <a class="btn btn-primary" href="https://www.instagram.com/sutton_squash_club/?hl=en"
                                target="_blank" rel="noopener noreferrer">
                                Instagram
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </x-slot>
</x-layout>
