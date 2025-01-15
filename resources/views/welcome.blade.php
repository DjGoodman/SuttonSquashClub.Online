<x-layout :pageTitle="$pageTitle" :pageDescription="$pageDescription">
    <x-slot name="content">
        
            <script async src="//www.instagram.com/embed.js"></script>

        <div class="jumbotron text-center container container-fluid">
            <h1>Sutton in Ashfield</h1>
            <h1>Squash Club</h1>
            <p class="lead">Sponsored By:</p>
            <div class="row"></div>
                <div class="col-md-3">
                    <a href="https://crossfithexis.com/home/"><img src="{{ asset('assets/img/sponsor/hexis.png') }}" class="img-fluid" alt="Crossfit Hexis"></a>
                </div>
                <div class="col-md-3">
                <a href="https://www.facebook.com/profile.php?id=100088832055803"><img src="{{ asset('assets/img/sponsor/jim-heat.jpg') }}" class="img-fluid" alt="Jim Heat, Plumbing and heating company, local to Derbyshire, friendly and reliable with competitive prices"></a>
                </div>
                <div class="col-md-3">
                <a href="https://www.craftunionpubs.com/nags-head-sutton-in-ashfield"><img src="{{ asset('assets/img/sponsor/nags-head.png') }}" class="img-fluid" alt="Nags Head Pub in Sutton-in-Ashfield"></a>
                </div>
                <div class="col-md-3">
                <a href="https://www.protein-shack.co.uk/"><img src="{{ asset('assets/img/sponsor/protein-shack.png') }}" class="img-fluid" alt="Protein Shack"></a>
                </div>
            </div>
            <div class="row text-center">
            </div>
            <p class="lead text-center">Affiliated with</p>
            <div class="row">
                <a href="https://www.englandsquash.com/finder/club/sutton-squash-club/861">
                    <img class="img-fluid" width="20%" height="20%" alt="England Squash"
                        src="{{ asset('assets/img/englandsquash.png') }}" />
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
                            <h5 class="card-title">Sutton Box leagues</h5>
                            <p class="card-text">The Sutton box League is open to anyone who plays squash
                                in Sutton.<br />
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
