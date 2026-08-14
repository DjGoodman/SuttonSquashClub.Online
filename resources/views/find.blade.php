<x-layout :pageTitle="$pageTitle" :pageDescription="$pageDescription">
    <x-slot name="content">

        <div class="container my-4">
            <!-- Header Section -->
            <div class="text-center mb-4">
                <img class="img-fluid mb-3" style="max-height: 100px;" src="{{ asset('assets/img/logo.jpg') }}" alt="Sutton Squash Club Logo" itemprop="logo" />
                <h1 class="h2 mb-1" itemprop="legalName">Sutton Squash Club</h1>
                
                <!-- Notice Alert Box -->
                <div class="alert alert-warning d-inline-block mt-3 px-4 py-2 border-warning" role="alert">
                    <strong>⚠️ Important Venue Notice:</strong><br>
                    All sessions take place at <strong>Sutton Community Academy</strong> (not Lammas Leisure Centre).
                </div>
            </div>

            <!-- Content Grid -->
            <div class="row g-4">
                
                <!-- Directions & Address -->
                <div class="col-lg-6">
                    <div class="card h-100 shadow-sm">
                        <div id="SuttonCommunityDirections" class="card-body">
                            <h2 class="h4 card-title mb-3">Sutton Community Academy</h2>
                            
                            <p class="text-muted small">
                                The academy entrance can be tricky to find. Please follow these directions to avoid getting lost:
                            </p>

                            <ul class="list-unstyled mb-4">
                                <li class="mb-2">
                                    <strong>🚗 Driving:</strong> Access via <strong>Langton Road</strong>, then turn onto <strong>New Street</strong> to reach the correct side of the school.
                                </li>
                                <li class="mb-2">
                                    <strong>🅿️ Parking:</strong> Best to park in the <strong>Market Car Park</strong> (Free after 18:00).
                                </li>
                                <li class="mb-2">
                                    <strong>📍 Car Park What3Words:</strong> 
                                    <a href="https://what3words.com/signal.blues.bricks" target="_blank" rel="noopener" class="badge text-decoration-none">///signal.blues.bricks</a>
                                </li>
                                <li class="mb-2">
                                    <strong>🚪 Centre Entrance What3Words:</strong> 
                                    <a href="https://what3words.com/kind.soils.lifts" target="_blank" rel="noopener" class="badge text-decoration-none">///kind.soils.lifts</a>
                                </li>
                            </ul>

                            <div class="mb-4 text-center">
                                <img class="img-fluid rounded border" alt="Map showing entrance to Sutton Centre" src="https://www.suttonsquash.club/assets/img/entrance.png" />
                            </div>

                            <hr>

                            <address class="mb-0" itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
                                <strong>Address:</strong><br>
                                <span itemprop="streetAddress">
                                    Sutton Community Academy<br>
                                    Market Place
                                </span><br>
                                <span itemprop="addressLocality">Sutton-in-Ashfield</span>, 
                                <span itemprop="addressRegion">Nottinghamshire</span><br>
                                <span itemprop="postalCode">NG17 1AQ</span>
                            </address>
                        </div>
                    </div>
                </div>

                <!-- Video & Google Maps -->
                <div class="col-lg-6 d-flex flex-column gap-4">
                    
                    <!-- Facebook Video Card -->
                    <div class="card shadow-sm">
                        <div class="card-header bg-light">
                            <h3 class="h5 mb-0">Video Guide: How to Find the Courts</h3>
                        </div>
                        <div id="SuttonCommunityVideo" class="card-body text-center d-flex flex-column align-items-center">
                            <div style="width: 267px; height: 476px; max-width: 100%;">
                                <iframe src="https://www.facebook.com/plugins/video.php?height=476&href=https%3A%2F%2Fwww.facebook.com%2Freel%2F3504255329866230%2F&show_text=false&width=267&t=0" width="267" height="476" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
                            </div>
                            <div class="mt-3">
                                <a href="https://www.facebook.com/reel/953400916372364" target="_blank" rel="noopener" class="btn btn-sm btn-outline-primary">
                                    Open Video on Facebook
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Google Map Card -->
                    <div class="card shadow-sm flex-grow-1">
                        <div class="card-header bg-light">
                            <h3 class="h5 mb-0">Location Map</h3>
                        </div>
                        <div class="card-body p-0">
                            <div style="width: 100%; height: 450px; min-height: 350px;">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d598.5597547175125!2d-1.2621437845828667!3d53.12385480324825!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4879942af7045195%3A0x1f6900e87d57e5ca!2sSutton%20Community%20Academy!5e0!3m2!1sen!2suk!4v1704711698468!5m2!1sen!2suk" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>

    </x-slot>
</x-layout>