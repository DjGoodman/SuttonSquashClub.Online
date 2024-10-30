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
  "@context": "http://www.schema.org",
  "@type": "SportsTeam",
  "name": "Sutton Squash Club",
  "url": "SuttonSquash.club",
  "logo": "{{ asset('assets/img/logo.jpg')}}",
  "description": "Sutton Squash Club operates out of the Lammas Centre where we have two glass-backed squash courts.\nSunday night (18:20-20:20) is the club social night and open to all abilities.\nWednesday night (19:40-21:00) is team training.\nMeet fellow squash players and arrange squash matches to suit.\nJoin the team to play regular league matches across the county.\nWe currently have three teams competing in the Nottinghamshire squash league\nSutton Squash Club is Affiliated with England Squash.",
  "address": {
    "@type": "PostalAddress",
    "streetAddress": "Lammas Leisure Centre, Lammas Road",
    "addressLocality": "Sutton in Ashfield",
    "addressRegion": "Nottinghamshire",
    "postalCode": " NG17 2AD",
    "addressCountry": "United Kingdom"
  }
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
    <link rel="mask-icon" href="{{ asset('assets/img/favicon/safari-pinned-tab.svg') }}" color="#5bbad5">
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
    <div class="navbar navbar-expand-lg navbar-dark" style="background-color: #34bdeb; color: white">
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
                <li class="nav-item"><a class="nav-link" href="/contact">Contact</a></li>
                <li class="nav-item"><a class="nav-link" href="/calendar">Calendar</a></li>
                <li class="nav-item"><a class="nav-link" href="/membership/join">Memberships</a></li>
                <li class="nav-item"><a class="nav-link" href="/social">Social</a></li>
                <li class="nav-item"><a class="nav-link" href="/boxleague">Box Leagues</a></li>
                <li class="nav-item dropdown">
                    <a href="" class="nav-link dropdown-toggle" id="navbarDropdown" data-toggle="dropdown"
                        role="button" aria-haspopup="true" aria-expanded="false">More<span class="caret"></span></a>
                    <ul class="dropdown-menu" style="background-color: #34bdeb;" aria-labelledby="navbarDropdown">
                        <li class="dropdown-item"><a class="nav-link" href="/join">Join Us</a></li>
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
