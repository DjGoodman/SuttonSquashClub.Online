<x-layout :pageTitle="$pageTitle" :pageDescription="$pageDescription">
    <x-slot name="content">

        <div class="jumbotron text-center container container-fluid">
            <h1>Box League</h1>
        </div>
        <div class="container container-fluid">
            <div class="row">
                <div class="card-deck">
                    <div class="card">
                        <div class="card-body col-md-12">
                            <p>The Sutton & Mansfield Squash League is open to anyone who plays squash in the Sutton &
                                Mansfield area.<br/>
                                This league is for any player of any standard to join in and play. You will meet new
                                people, make friends, keep fit and improve your squash.<br/>
                                We think squash is a great sport and should be played by everyone. The league is free
                                and we would love you to join in.<br/>
                                You can play squash at the following places:
                                <ul>
                                    <li><span itemprop="address" itemtype="http://schema.org/PostalAddress"> Lammas Leisure
                                        Centre, Sutton-in-Ashfield</span></li>
                                    <li><span itemprop="address" itemtype="http://schema.org/PostalAddress">Sutton Community
                                        Academy,Sutton-in-Ashfield</span></li>
                                    <li><span itemprop="address" itemtype="http://schema.org/PostalAddress">Joseph Whitaker
                                        Sports Centre, Rainworth</span></li>
                                </ul>
                            </p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body col-md-12">
                            <span itemscope itemprop="http://schema.org/ContactPoint">
                                <p>To join the league please contact Sutton squash Club:
                                <address>
                                    <a href="mailto:contact@suttonsquash.club"
                                        itemprop="email">contact@suttonsquash.club</a>
                                </address>
                                </p>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row col-md-12" style="height: 500px; width:100%">
                    <x-sportyhq />
            </div>
        </div>
        </div>

    </x-slot>
</x-layout>
