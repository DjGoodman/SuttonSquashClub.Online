<x-layout :pageTitle="$pageTitle" :pageDescription="$pageDescription">
    <x-slot name="content">
        <div class="home-page">
            <section class="home-hero" aria-labelledby="home-title">
                <div class="row align-items-center">
                    <div class="col-lg-7">
                        <p class="home-eyebrow">Sutton in Ashfield · Nottinghamshire</p>
                        <h1 id="home-title">Sutton Squash Club</h1>
                        <p class="home-hero-copy">
                            Friendly games, great people, and squash for every level. Come along, pick up a racket,
                            and find your place on court.
                        </p>
                        <a class="btn btn-primary btn-lg mr-2 mb-2" href="/social">Join a social night</a>
                        <a class="btn btn-outline-primary btn-lg mb-2" href="/contact">Get in touch</a>
                    </div>
                    <div class="col-lg-5">
                        <img class="home-hero-image" src="{{ asset('assets/img/beginner.jpg') }}"
                            alt="Players enjoying a game of squash">
                    </div>
                </div>
            </section>

            <section class="home-section" aria-labelledby="sponsors-title">
                <div class="d-flex flex-wrap align-items-end justify-content-between home-section-heading">
                    <div>
                        <p class="home-eyebrow">With thanks to</p>
                        <h2 id="sponsors-title" class="mb-0">Our local sponsors</h2>
                    </div>
                </div>
                <div class="sponsor-strip">
                    <a href="https://crossfithexis.com/home/" aria-label="Crossfit Hexis">
                        <img src="{{ asset('assets/img/sponsor/hexis.png') }}" alt="Crossfit Hexis">
                    </a>
                    <a href="https://www.facebook.com/profile.php?id=100088832055803" aria-label="Jim Heat">
                        <img src="{{ asset('assets/img/sponsor/jim-heat.jpg') }}"
                            alt="Jim Heat, plumbing and heating">
                    </a>
                    <a href="https://www.craftunionpubs.com/nags-head-sutton-in-ashfield" aria-label="Nags Head">
                        <img src="{{ asset('assets/img/sponsor/nags-head.png') }}" alt="Nags Head">
                    </a>
                    <a href="https://www.protein-shack.co.uk/" aria-label="Protein Shack">
                        <img src="{{ asset('assets/img/sponsor/protein-shack.png') }}" alt="Protein Shack">
                    </a>
                </div>
                <div class="club-affiliation">
                    <span>Affiliated with</span>
                    <a href="https://www.englandsquash.com/finder/club/sutton-squash-club/861">
                        <img src="{{ asset('assets/img/englandsquash.png') }}" alt="England Squash">
                    </a>
                </div>
            </section>

            <section class="home-section" aria-labelledby="pathways-title">
                <div class="home-section-heading">
                    <p class="home-eyebrow">There’s a place for you</p>
                    <h2 id="pathways-title" class="mb-0">Find your game</h2>
                </div>
                <div class="row">
                    <div class="col-md-4 mb-3">
                        <article class="card pathway-card">
                            <img src="{{ asset('assets/img/beginner.jpg') }}" class="card-img-top"
                                alt="Two players on a squash court">
                            <div class="card-body text-center">
                                <h3 class="card-title">New to squash?</h3>
                                <p class="card-text">
                                    Try our no-strings Squash Wednesday Nights, 7–8:20 at Sutton Community Academy.
                                </p>
                                <a class="btn btn-outline-primary" href="/social">Check social dates</a>
                            </div>
                        </article>
                    </div>
                    <div class="col-md-4 mb-3">
                        <article class="card pathway-card">
                            <img src="{{ asset('assets/img/competative.jpg') }}" class="card-img-top"
                                alt="Players competing in a squash match">
                            <div class="card-body text-center">
                                <h3 class="card-title">Ready to compete?</h3>
                                <p class="card-text">Looking to join the team? Get in touch and find out more.</p>
                                <a class="btn btn-outline-primary" href="/contact">Contact the club</a>
                            </div>
                        </article>
                    </div>
                    <div class="col-md-4 mb-3">
                        <article class="card pathway-card">
                            <img src="{{ asset('assets/img/senior.jpg') }}" class="card-img-top"
                                alt="Players taking part in a squash game">
                            <div class="card-body text-center">
                                <h3 class="card-title">Sutton box leagues</h3>
                                <p class="card-text">Our box leagues are open to anyone who plays squash in Sutton.</p>
                                <a class="btn btn-outline-primary" href="/boxleague">Explore the leagues</a>
                            </div>
                        </article>
                    </div>
                </div>
            </section>

            <section class="home-section" aria-labelledby="news-title">
                <div class="home-section-heading">
                    <p class="home-eyebrow">From the club</p>
                    <h2 id="news-title" class="mb-0">Latest news</h2>
                </div>
                <div class="row">
                    <div class="col-lg-6 mb-3">
                        <div class="news-card">
                            <script async src="//www.instagram.com/embed.js"></script>
                            <x-instagram></x-instagram>
                        </div>
                    </div>
                    <div class="col-lg-6 mb-3">
                        <div class="news-card">
                            <x-facebook></x-facebook>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </x-slot>
</x-layout>
