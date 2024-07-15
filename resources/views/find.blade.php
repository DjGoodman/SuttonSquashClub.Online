<x-layout :pageTitle="$pageTitle" :pageDescription="$pageDescription">
    <x-slot name="content">

        <!-- facebook video  -->

        <div id="fb-root"></div>
<script async defer src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.2"></script>


        <div class="container container-fluid">
                <div class="text-center">
                    <h1>Find Us</h1>
                    <div>
                        <img class="img-fluid" src="{{ asset('assets/img/logo.jpg') }}" itemprop="logo" />
                    </div>
                    <h2 itemprop="https://schema.org/legalName">Sutton Squash Club</h2>
                </div>

                <!-- row -->
                <div class="row">

                    <div class="card col-md-6">
                        <div id="SuttonCommunityDirections" class="card-body">
                            <p>
                                The entrance to Sutton Community academy can be a little difficult to find:
                                You can drive to the centre using roads highlighted.
                                It is best to park in the market carpark (free after 18:00) and walk round to the
                                entrance, marked with red arrow.
                                Link to Video:
                                <a href='https://www.facebook.com/reel/953400916372364'>How to find the Squash
                                    Courts</a>
                                <img class="img-fluid" width="100%" height="100%" alt="Way to Sutton Centre"
                                    src="https://www.suttonsquash.club/assets/img/entrance.png" /><br />
                                <span itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
                                    <span itemprop="streetAddress">
                                        Sutton Community Academy<br />
                                        55 High Pavement
                                    </span><br />
                                    <span itemprop="addressLocality">Sutton-in-Ashfield</span><br />
                                    <span itemprop="addressRegion">Nottinghamshire</span><br />
                                    <span itemprop="postalCode">NG17 1EE</span><br />
                                </span>
                                <span>
                                </span>
                        </div>
                    </div>

                    <div class="card col-md-6">
                        <div class="card-body">
                            <div class="fb-post" data-href="https://www.facebook.com/reel/953400916372364"></div>
                        </div>

                    <div class="card col-md-6">
                        <div class="card-body">
                            <div id="map-container-google-1" class="z-depth-1-half map-container" style="height: 500px">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d598.5597547175125!2d-1.2621437845828667!3d53.12385480324825!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4879942af7045195%3A0x1f6900e87d57e5ca!2sSutton%20Community%20Academy!5e0!3m2!1sen!2suk!4v1704711698468!5m2!1sen!2suk"
                                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- row -->

                <div class="row">

                    <div class="card col-md-6">
                        <div id="LammasDirections" class="card-body">
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
                            <div id="map-container-google-1" class="z-depth-1-half map-container" style="height: 500px">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2394.1419663018!2d-1.2708507844695636!3d53.12559707993335!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4879979a7b790e09%3A0xcab10ee5118fd29!2sSutton%20Squash%20Club!5e0!3m2!1sen!2suk!4v1567111543749!5m2!1sen!2suk"
                                    frameborder="0" style="border:0" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>

                </div>
        </div>

    </x-slot>
</x-layout>