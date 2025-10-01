<x-layout :pageTitle="$pageTitle" :pageDescription="$pageDescription">
    <x-slot name="content">

        <div class="jumbotron text-center container container-fluid">
            <h1>Junior Squash at Sutton-in-Ashfield</h1>
        </div>
        <div class="container container-fluid">
            <div class="row">
                <div class="card-deck">
                    <div class="card">
                        <div class="card-body text-center">
                            <p>
                                We currently have a junior session running on Wednesday Nights 18:20 till 19:00 at sutton community
                                accademy.
                                The Junior sessions are run by our coaches Andy Hay and Daniel Goodman.
                                Contact Andy on 07919026344 or email andy@advancesquash.co.uk for more info.
                            </p>
                            <div>
                                <img class="img-fluid" src="{{ asset('assets/img/ASC1.png') }}" itemprop="juniors" />
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </x-slot>
</x-layout>
