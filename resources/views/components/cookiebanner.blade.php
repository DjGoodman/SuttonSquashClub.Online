<footer class="footer fixed-bottom" id="cookieBanner">
    <div class="cookie-banner">
        <span class="">We use cookies to improve your website experience
            <a type="button"
                href="https://www.itgovernance.eu/en-ie/eu-general-data-protection-regulation-gdpr-ie"
                target="_blank" class="btn btn-primary">Learn more</a>
            <a type="button" class="btn btn-primary" id="cookieButton">Ok, thanks</a>
        </span>
    </div>
</footer>

<script type="text/javascript">
    $(document).ready(function() {
        if (document.cookie.indexOf('visited=true') == -1) {
            $('#cookieBanner').show();
        } else {
            $('#cookieBanner').hide();
        }
    });

    $('#cookieButton').click(function() {
        var fifteenDays = 1000 * 60 * 60 * 24 * 15;
        var expires = new Date((new Date()).valueOf() + fifteenDays);
        document.cookie = "visited=true;expires=" + expires.toUTCString();
        $('#cookieBanner').hide();
    });
</script>