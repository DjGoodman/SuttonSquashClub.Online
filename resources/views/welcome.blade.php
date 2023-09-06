<x-layout :pageTitle="$pageTitle" :pageDescription="$pageDescription">
    <x-slot name="content">
        
            <script async src="//www.instagram.com/embed.js"></script>

        <div class="jumbotron text-center container container-fluid">
            <h1>Sutton Squash Club</h1>
            <h1>Squash Club</h1>
            <p class="lead">Looking for Sponsors.
                Get in touch if you wish to sponsor us!</p>
            <div class="row text-center">
            </div>
            <p class="lead text-center">Affiliated with</p>
            <div class="row">
                <a href="https://www.englandsquash.com/finder/club/sutton-squash-club/861">
                    <img class="img-fluid" width="20%" height="20%" alt="England Squash"
                        src="https://www.suttonsquash.club/img/englandsquash.png" />
                </a>
            </div>
        </div>
        <div class="container container-fluid">
            <div class="row">
                <div class="card-deck">
                    <div class="card">
                        <img src= "{{ asset('assets/img/beginner.jpg') }}" class="card-img-top" alt="...">
                        <div class="card-body text-center">
                            <h5 class="card-title">New Player?</h5>
                            <p class="card-text">If you are looking to start playing squash come to our no strings
                                Squash Wednesday Nights 7-8:20 at Sutton Community Academy.<br />
                                <a href="/social">Check dates here</a>
                            </p>
                        </div>
                    </div>
                    <div class="card">
                        <img src= "{{ asset('assets/img/competative.jpg') }}" class="card-img-top" alt="...">
                        <div class="card-body text-center">
                            <h5 class="card-title">Experienced Player</h5>
                            <p class="card-text">Looking to Join the Team?<br />
                                <a href="/contact">Get in touch</a>
                            </p>
                        </div>
                    </div>
                    <div class="card">
                        <img src= "{{ asset('assets/img/senior.jpg') }}" class="card-img-top" alt="...">
                        <div class="card-body text-center">
                            <h5 class="card-title">Sutton And Mansfield league</h5>
                            <p class="card-text">The Sutton & Mansfield Squash League is open to anyone who plays squash
                                in the Sutton & Mansfield area.<br />
                                <a href="/boxleague">Get the info here</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="container text-center">
                <h2>News</h2>
                <div class="card-deck">
                    <div class="card">
                        <x-twitter>
                        </x-twitter>
                    </div>
                    <div class="card">
                        <x-instagram>
                        </x-instagram>
                    </div>
                    <div class="card">
                        <x-facebook>
                        </x-facebook>
                    </div>
                </div>
            </div>
        </div>

    </x-slot>
</x-layout>
