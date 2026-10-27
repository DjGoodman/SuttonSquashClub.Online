@props(['pageTitle', 'pageDescription'])

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $pageTitle }} - Sutton Squash Club</title>
    <meta name="description" content="{{ $pageDescription }}">
    <link rel="canonical" href="{{ url()->current() }}" />

    <script type='application/ld+json'> 
{
  "@context": "https://schema.org",
  "@type": "SportsClub",
  "name": "Sutton Squash Club",
  "url": "{{ url('/') }}",
  "logo": "{{ asset('assets/img/logo.jpg')}}",
  "image": "{{ asset('assets/img/logo.jpg')}}",
  "email": "contact@suttonsquash.club",
  "foundingDate": "1977",
  "description": "Sutton Squash Club is a friendly squash club in Sutton-in-Ashfield, playing at Sutton Community Academy (The Stronghold).\nWednesday nights in school term time: junior coaching 18:20-19:00, women's coaching on the 1st and 3rd Wednesday of the month 18:15-19:00, and beginner-friendly club squash with coaching 19:00-20:20.\nWe have four squash teams and a Squash 57 team in the Nottinghamshire leagues, with home matches on Monday and Tuesday nights.\nNottinghamshire County Cup (B Grade) winners 2026.\nSutton Squash Club is affiliated with England Squash.",
  "address": {
    "@type": "PostalAddress",
    "streetAddress": "Sutton Community Academy, Market Place",
    "addressLocality": "Sutton-in-Ashfield",
    "addressRegion": "Nottinghamshire",
    "postalCode": "NG17 1AQ",
    "addressCountry": "GB"
  },
  "memberOf": {
    "@type": "SportsOrganization",
    "name": "England Squash",
    "url": "https://www.englandsquash.com"
  },
  "sameAs": [
    "https://www.facebook.com/suttonsquash/",
    "https://www.instagram.com/sutton_squash_club/",
    "https://twitter.com/squash_sutton"
  ]
}
 </script>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jquerymobile/1.4.5/jquery.mobile.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquerymobile/1.4.5/jquery.mobile.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"
        integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="jquery.bs.gdpr.cookies.js"></script>
    <link rel="stylesheet" href="{{ asset('css/custom.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- favicon stuff -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/img/favicon/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/img/favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/img/favicon/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('assets/img/favicon/site.webmanifest') }}">
    <link rel="mask-icon" href="{{ asset('assets/img/favicon/safari-pinned-tab.svg') }}" color="#212529">
    <link rel="shortcut icon" href="{{ asset('assets/img/favicon/favicon.ico') }}">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="msapplication-config" content="{{ asset('assets/img/favicon/browserconfig.xml') }}">
    <meta name="theme-color" content="#ffffff">
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v17.0"
        nonce="2GkTszif"></script>

        {{-- Adsense --}}

        <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-4052036123523379"
     crossorigin="anonymous"></script>
</head>

<body>
    <div class="navbar navbar-expand-lg navbar-dark" style="background-color: #212529; color: white">
        <a class="navbar-brand" href="/">
            <img src="{{ asset('assets/img/logo-no-bg-w.png') }}" itemprop="logo" width="30" height="30"
                class="d-inline-block align-top" alt="Sutton Squash Logo">
            Sutton Squash Club</a>
        <button type="button" class="navbar-toggler border" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-collapse collapse" style="color: rgb(255, 255, 255, 1)">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="/about">About</a></li>
                <li class="nav-item"><a class="nav-link" href="/committee">Committee</a></li>
                <li class="nav-item"><a class="nav-link" href="/contact">Contact</a></li>
                <li class="nav-item"><a class="nav-link" href="/sponsors">Sponsors</a></li>
                <li class="nav-item"><a class="nav-link" href="/calendar">Calendar</a></li>
                <li class="nav-item"><a class="nav-link" href="/membership/join">Memberships</a></li>
                <li class="nav-item"><a class="nav-link" href="/social">Social</a></li>
                <li class="nav-item"><a class="nav-link" href="/boxleague">Box Leagues</a></li>
                <li class="nav-item dropdown">
                    <a href="" class="nav-link dropdown-toggle" id="navbarDropdown" data-toggle="dropdown"
                        role="button" aria-haspopup="true" aria-expanded="false">More<span class="caret"></span></a>
                    <ul class="dropdown-menu" style="background-color: #212529;" aria-labelledby="navbarDropdown">
                        <li class="dropdown-item"><a class="nav-link" href="/join">Join Us</a></li>
                        <li class="dropdown-item"><a class="nav-link" href="/getting-started">Getting Started FAQ</a></li>
                        <li class="dropdown-item"><a class="nav-link" href="/team-squash-faq">Team Squash FAQ</a></li>
                        <li class="dropdown-item"><a class="nav-link" href="/teams">Follow Our Teams</a></li>
                        <li class="dropdown-item"><a class="nav-link" href="/juniors">Juniors</a></li>
                        <li class="dropdown-item"><a class="nav-link" href="/boxleague">Sutton box Leagues</a>
                        </li>
                        <li class="dropdown-item"><a class="nav-link" href="/findus">Find Us</a></li>
                        <li class="dropdown-item"><a class="nav-link" href="/padel">Padel</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    <div class="container body-content">
        {{ $content }}

    </div>
    <x-cookiebanner>
    </x-cookiebanner>
    <footer>
        <div class="container container-fluid">
            <p>Follow us on social media:</p>
            <div>
                <a href="https://www.facebook.com/suttonsquash/" class="fa fa-facebook"></a>
                <a href="https://www.instagram.com/sutton_squash_club/" class="fa fa-instagram"></a>
                <a href="https://www.Twitter.com/squash_sutton/" class="fa fa-twitter"></a>
                <p>&copy; <?php echo date('Y'); ?> - Sutton Squash Club</p>
            </div>
        </div>
    </footer>


</body>



</html>
