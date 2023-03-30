<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="script/script.js?ver=1.1"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="fontawesome/css/fontawesome.css" rel="stylesheet">
    <link href="fontawesome/css/brands.css" rel="stylesheet">
    <link href="fontawesome/css/solid.css" rel="stylesheet">
    <!-- Link Swiper's CSS -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"
    />
    <link href="./css/styles_libraryaccounts.css?ver=1.1" rel="stylesheet">
    <title>KTH Biblioteket</title>
</head>
<body osncontextmenu="return false;">
    <!--video autoplay muted loop id="myVideo">
        <source src="videos/balcony_book_heart_domino.mp4" type="video/mp4">
        Your browser does not support HTML5 video.
    </video-->
    <div class="swiper mySwiper">
        <div class="swiper-wrapper">
            <!-- Sida 1 -->
            <div class="swiper-slide">
                <div class='appbuttons'>
                    <div class="grid-container _sv">
                        <div class="grid-item appbutton app1">
                            <a target="_self" href="https://apps.lib.kth.se/activatepatron/index_kiosk.php?auth=ldap&kiosk=true&lang=sv"><b>KTH användare</b><br>Aktivera bibliotekskonto</a>
                        </div>
                        <div class="grid-item appbutton app2">
                            <a target="_self" href="https://apps.lib.kth.se/kiosk/kthbforms_libraryaccount_kiosk.php?kiosk=true&lang=sv"><b>Övriga användare</b><br>Ansök om bibliotekskonto</a>
                        </div>
                        <div class="grid-item appbutton app3 emptybutton">
                            <a target="_self" href=""></a>
                        </div>
                        <div class="grid-item appbutton app4 emptybutton">
                            <a target="_self" href=""></a>
                        </div>
                    </div>
                </div>
                <!-- Engelska -->
                <div class='appbuttons'>
                    <div class="grid-container _en">
                        <div class="grid-item appbutton app1">
                            <a target="_self" href="https://apps.lib.kth.se/activatepatron/index_kiosk.php?auth=ldap&kiosk=true&lang==en"><b>KTH users</b><br>Activate library account</a>
                        </div>
                        <div class="grid-item appbutton app2">
                            <a target="_self" href="https://apps.lib.kth.se/kiosk/kthbforms_libraryaccount_kiosk.php?kiosk=true&lang=en"><b>Other users</b><br>Apply for a library account</a>
                        </div>
                        <div class="grid-item appbutton app3 emptybutton">
                            <a target="_self" href=""></a>
                        </div>
                        <div class="grid-item appbutton app4 emptybutton">
                            <a target="_self" href=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-pagination"></div>
    </div>
    <div class ="languageswitch" style = 'display:flex; position:absolute; top:10px; right:10px; width: 50px;z-index: 9999;'>
        <div class="_sv" onclick="changelang('en')"><img style="width: 100%" src="https://static.sys.kth.se/gvs/kthb/img/flags/gb.svg"></div>
        <div class="_en" onclick="changelang('sv')"><img style="width: 100%" src="https://static.sys.kth.se/gvs/kthb/img/flags/se.svg"></div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>    
    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
        $(document).ready(function() {
            const queryString = window.location.search;
            const urlParams = new URLSearchParams(queryString);
            let lang = 'en';
            if(urlParams.get('lang')) {
                lang = urlParams.get('lang')
            }
            document.querySelector('html').setAttribute("lang", lang);
        })

        var swiper = new Swiper(".mySwiper", {
            pagination: {
                el: ".swiper-pagination",
            },
        });
    </script>
    <script>
        const queryString = window.location.search;
        const urlParams = new URLSearchParams(queryString);
        const lang = urlParams.get('lang')
    </script>
</body>
</html>