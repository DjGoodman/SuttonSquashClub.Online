<x-layout :pageTitle="$pageTitle" :pageDescription="$pageDescription">
    <x-slot name="content">
        <div class="container my-4">
            <div class="text-center mb-4">
                <img class="img-fluid mb-3" style="max-height: 100px;" src="{{ asset('assets/img/logo.jpg') }}" alt="Sutton Squash Club Logo" itemprop="logo" />
                <h1>About Sutton Squash Club</h1>
                <p class="lead">A friendly squash club in Sutton-in-Ashfield, for players of all levels.</p>
            </div>

            <div class="row g-4">
                <div class="col-lg-7">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body">
                            <h2 class="h4">Who we are</h2>
                            <p>
                                Sutton Squash Club welcomes new and returning players to enjoy social squash, coaching,
                                junior sessions, and competitive team play. All club sessions take place at
                                <strong>Sutton Community Academy</strong> in Sutton-in-Ashfield.
                            </p>
                            <p>
                                We are affiliated with <a href="https://www.englandsquash.com/finder/club/sutton-squash-club/861" target="_blank" rel="noopener noreferrer">England Squash</a>
                                and compete in local league fixtures while also running a relaxed social programme for members.
                            </p>
                            <p>
                                Our story goes back to 1977. Read how the club grew, rebuilt and returned to The Stronghold on our
                                <a href="/history">Club History</a> page.
                            </p>
                            <p>
                                If you're new to squash, our <a href="/getting-started">Getting Started FAQ</a> is the best place to begin.
                                If you want to find the venue, read our <a href="/findus">Find Us</a> page for directions and parking information.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-5">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body">
                            <h2 class="h4">Useful links</h2>
                            <ul class="list-unstyled mb-0">
                                <li class="mb-2"><a href="/getting-started">Getting Started FAQ</a></li>
                                <li class="mb-2"><a href="/team-squash-faq">Team Squash FAQ</a></li>
                                <li class="mb-2"><a href="/findus">Find Us</a></li>
                                <li class="mb-2"><a href="/social">Club sessions and socials</a></li>
                                <li class="mb-2"><a href="/boxleague">Sutton Box Leagues</a></li>
                                <li class="mb-2"><a href="/membership/join">Membership information</a></li>
                                <li class="mb-2"><a href="/history">Club history</a></li>
                                <li class="mb-2"><a href="/committee">Committee</a></li>
                                <li class="mb-2"><a href="/contact">Contact us</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card mt-4 shadow-sm">
                <div class="card-body">
                    <h2 class="h4">Where we play</h2>
                    <p class="mb-2">
                        <strong>Sutton Community Academy</strong><br />
                        Market Place<br />
                        Sutton-in-Ashfield<br />
                        Nottinghamshire<br />
                        NG17 1AQ
                    </p>
                    <p class="mb-0">
                        For directions, parking and travel notes, visit the <a href="/findus">Find Us</a> page.
                    </p>
                </div>
            </div>
        </div>
    </x-slot>
</x-layout>
