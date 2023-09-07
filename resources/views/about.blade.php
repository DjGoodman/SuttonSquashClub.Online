<x-layout :pageTitle="$pageTitle" :pageDescription="$pageDescription">
    <x-slot name="content">

        <div class="container container-fluid">
            <span itemscope itemtype="http://schema.org/SportsOrganization">
                <span itemprop="sport" class="ninja">squash</span>
                <div class="text-center">
                    <h1>About</h1>
                    <div>
                        <img class="img-fluid" src="{{ asset('assets/img/logo.jpg') }}" itemprop="logo" />
                    </div>
                    <h2 itemprop="https://schema.org/legalName">Sutton Squash Club</h2>
                </div>
                <div class="row">
                    <div class="card col-md-6">
                        <div class="card-body">
                            <div itemprop="memberOf" class="ninja">England Squash</div>
                            <p>
                                Sutton Squash Club operates out of the Lammas Centre and Sutton Community Academy.<br />
                                Wednesday night (19:00-20:20) is the club social night and open to all abilities. <br />
                                Meet fellow squash players and arrange squash matches to suit.<br />
                                Join the team to play regular league matches across the county.<br />
                                We currently have two teams competing in the <a
                                    href="http://notts-squash.co.uk/results.html?table=clubs&idd=47">Nottinghamshire
                                    squash
                                    league</a><br />
                                Sutton Squash Club is Affiliated with England Squash.
                            </p>
                            <a href="https://www.englandsquash.com/finder/club/sutton-squash-club/861">
                                <img class="img-fluid" width="20%" height="20%" alt="England Squash"
                                    src="https://www.suttonsquash.club/img/englandsquash.png" />
                            </a><br />

                            <a href="https://SuttonSquash.club" class="ninja" itemprop="url">SuttonSquash.club</a>
                            <span itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
                                <span itemprop="streetAddress">
                                    Lammas Leisure center<br />
                                    Lammas rd
                                </span><br />
                                <span itemprop="addressLocality">Sutton-in-Ashfield</span><br />
                                <span itemprop="addressRegion">Nottinghamshire</span><br />
                                <span itemprop="postalCode">NG17 2AD</span><br />
                            </span>
                            <span itemprop="http://schema.org/ContactPoint" itemscope>
                                <span itemprop="contactType"></span>
                                <a href="mailto:Contact@suttonsquash.club"
                                    itemprop="email">Contact@suttonsquash.club</a>
                                <a href="suttonsquash.club" class="ninja" itemprop="url">suttonsquash.club</a>
                            </span>
                        </div>
                    </div>

                    <div class="card col-md-6">
                        <div class="card-body">
                             <div id="map-container-google-1" class="z-depth-1-half map-container"
                            style="height: 500px">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2394.1419663018!2d-1.2708507844695636!3d53.12559707993335!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4879979a7b790e09%3A0xcab10ee5118fd29!2sSutton%20Squash%20Club!5e0!3m2!1sen!2suk!4v1567111543749!5m2!1sen!2suk"
                                frameborder="0" style="border:0" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
        </div>
        </span>
        </div>

    </x-slot>
</x-layout>
