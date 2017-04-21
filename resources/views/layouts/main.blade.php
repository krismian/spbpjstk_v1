<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Installation - Laravel - The PHP Framework For Web Artisans</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="author" content="Taylor Otwell">
    <meta name="description" content="Laravel - The PHP framework for web artisans.">
    <meta name="keywords" content="laravel, php, framework, web, artisans, taylor otwell">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="canonical" href="https://laravel.com/docs/5.4/installation" />
    <!--[if lte IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">


    <link href='https://fonts.googleapis.com/css?family=Miriam+Libre:400,700|Source+Sans+Pro:200,400,700,600,400italic,700italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://laravel.com/build/assets/css/laravel-380131efa5.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/flexboxgrid/6.3.1/flexboxgrid.min.css" type="text/css" >
    <link rel="apple-touch-icon" href="/favicon.png">
    {{--<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/1.0.26/vue.min.js"></script>--}}

</head>
<body class="docs language-php">

<span class="overlay"></span>

<nav class="main">
    <a href="/" class="brand nav-block">
        {{--<svg xmlns="http://www.w3.org/2000/svg" width="84.1" height="57.6" viewBox="0 0 84.1 57.6"><path fill="#FB503B" d="M83.8 26.9c-.6-.6-8.3-10.3-9.6-11.9-1.4-1.6-2-1.3-2.9-1.2s-10.6 1.8-11.7 1.9c-1.1.2-1.8.6-1.1 1.6.6.9 7 9.9 8.4 12l-25.5 6.1L21.2 1.5c-.8-1.2-1-1.6-2.8-1.5C16.6.1 2.5 1.3 1.5 1.3c-1 .1-2.1.5-1.1 2.9S17.4 41 17.8 42c.4 1 1.6 2.6 4.3 2 2.8-.7 12.4-3.2 17.7-4.6 2.8 5 8.4 15.2 9.5 16.7 1.4 2 2.4 1.6 4.5 1 1.7-.5 26.2-9.3 27.3-9.8 1.1-.5 1.8-.8 1-1.9-.6-.8-7-9.5-10.4-14 2.3-.6 10.6-2.8 11.5-3.1 1-.3 1.2-.8.6-1.4zm-46.3 9.5c-.3.1-14.6 3.5-15.3 3.7-.8.2-.8.1-.8-.2-.2-.3-17-35.1-17.3-35.5-.2-.4-.2-.8 0-.8S17.6 2.4 18 2.4c.5 0 .4.1.6.4 0 0 18.7 32.3 19 32.8.4.5.2.7-.1.8zm40.2 7.5c.2.4.5.6-.3.8-.7.3-24.1 8.2-24.6 8.4-.5.2-.8.3-1.4-.6s-8.2-14-8.2-14L68.1 32c.6-.2.8-.3 1.2.3.4.7 8.2 11.3 8.4 11.6zm1.6-17.6c-.6.1-9.7 2.4-9.7 2.4l-7.5-10.2c-.2-.3-.4-.6.1-.7.5-.1 9-1.6 9.4-1.7.4-.1.7-.2 1.2.5.5.6 6.9 8.8 7.2 9.1.3.3-.1.5-.7.6z"/></svg>--}}
        <img src="/storage/logo1.png" width="70px">
        <span>&nbsp; SPBPJSTK</span>
    </a>

    <div class="search nav-block">
        {{--<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><path fill="#A1A1A1" d="M5.8 11.7c-1.6 0-3-.6-4.1-1.7S0 7.4 0 5.8s.6-3 1.7-4.1C2.8.6 4.3 0 5.8 0s3 .6 4.1 1.7c2.3 2.3 2.3 6 0 8.3-1 1.1-2.5 1.7-4.1 1.7zM5.8 1c-1.3 0-2.5.5-3.4 1.4C1.5 3.3 1 4.5 1 5.8s.5 2.5 1.4 3.4c.9.9 2.1 1.4 3.4 1.4s2.5-.5 3.4-1.4c1.9-1.9 1.9-5 0-6.9C8.4 1.5 7.1 1 5.8 1z"/><path fill="#A1A1A1" d="M15.5 16c-.1 0-.3 0-.3-.1L9.3 10c-.2-.2-.2-.5 0-.7s.5-.2.7 0l5.9 5.9c.2.2.2.5 0 .7-.1.1-.3.1-.4.1z"/></svg>--}}
        {{--<input placeholder="search" type="text" v-model="search" id="search-input" v-on:blur="reset" />--}}
    </div>

    <ul class="main-nav" ">
    {{--Profil--}}
    <li class="dropdown community-dropdown">
        <a href="/" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Profil<span class="caret"></a>
        <ul class="dropdown-menu" role="menu">
            <li><a href="/sejarah">Sejarah</a></li>
            <li><a href="/visimisi">Visi dan Misi</a></li>
            <li><a href="/ad_art">AD / ART</a></li>
            <li><a href="/struktur">Struktur Organisasi</a></li>
        </ul>
    </li>

    {{--Agenda--}}
    <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Agenda <span class="caret"></span> </a>
        <ul class="dropdown-menu">
            <li><a href="/rapat">Rapat</a></li>
            <li><a href="/kegiatan">Kegiatan</a></li>
        </ul>
    </li>


    {{--Berita--}}
    <li class="dropdown">
    <a href="/" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Berita <span class="caret"></span> </a>
    <ul class="dropdown-menu">
        <li><a href="/">Berita Publik</a></li>
        <li><a href="/beritainternal">Berita Internal</a></li>
        <li><a href="/">Laporan Keuangan</a></li>
        <li><a href="/berita/create">Buat Berita</a></li>
    </ul>
    </li>


    {{--Peraturan--}}
        <li><a href="/peraturan">Peraturan</a> </li>

        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Pengaduan <span class="caret"></span> </a>
            <ul class="dropdown-menu">
                <li><a href="/pengaduan">Lihat Pengaduan</a></li>
                <li><a href="/pengaduan/create">Buat Pengaduan</a></li>
            </ul>

    {{--Tanya Jawab--}}
        <li><a href="/tanyajawab">Tanya Jawab</a> </li>

        <li class="dropdown community-dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Halaman Admin <span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">
                <li><a href="/banner">Edit Banner</a></li>
                <li><a href="/berita/edit">Edit Berita</a></li>
                <li><a href="/anggota">Edit Anggota</a></li>
            </ul>
        </li>

    </ul>

    <div class="switcher">
        <div class="dropdown">
            <button class="btn dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
                {{ Auth::user()->name }}
                <span class="caret"></span>
            </button>
            <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                <li role="presentation">
                    <a role="menuitem" tabindex="-1" href="/profil"><span class="glyphicon glyphicon-user"></span> Profile</a>
                </li>
                <li role="presentation">
                    <a role="menuitem" tabindex="-1" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                       document.getElementById('logout-form').submit();">
                        <span class="glyphicon glyphicon-log-out"></span> Logout </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                    
                </li>
            </ul>
        </div>
    </div>

    <div class="responsive-sidebar-nav">
        <a href="#" class="toggle-slide menu-link btn">&#9776;</a>
    </div>
</nav>

<nav id="slide-menu" class="slide-menu" role="navigation">

    <div class="brand">
        <a href="/">
            {{--<img src="https://laravel.com/assets/img/laravel-logo-white.png" height="50">--}}
            <img src="/storage/logo1.png" width="70px"><br><span>SPBPJSTK</span>
        </a>
    </div>

    <ul class="slide-main-nav">
        <li><a href="/">Berita</a></li>
        <li class="dropdown community-dropdown">
            <a href="/" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Tentang Kami <span class="caret"></a>
            <ul class="dropdown-menu" role="menu">
                <li><a href="/sejarah">Sejarah</a></li>
                <li><a href="/visimisi">Visi dan Misi</a></li>
                <li><a href="/struktur">Struktur Organisasi</a></li>
            </ul>
        </li>

        <li class="dropdown community-dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Halaman Admin <span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">
                <li><a href="/banner">Edit Banner</a></li>
                <li><a href="/berita/edit">Edit Berita</a></li>
                <li><a href="/anggota">Edit Anggota</a></li>
            </ul>
        </li>
    </ul>
    </div>
</nav>

<div class="container">
    <div style="margin-bottom: 20px">

    </div>
    @yield('content')
</div>


<div class="col-lg-12">
    <div class="col-lg-6 col-lg-offset-3">
        @yield('show')
    </div>
    <div class="col-lg-2">
        @yield('thumbnail')
    </div>
</div>

{{--color #f4645f--}}
<div style="background-color: #2725a2; height: 30px">
    <p style="text-align: center; color: white">Copyright &copy; SP BPJS Ketenagakerjaan 2017</p>
</div>
<script src="https://laravel.com/build/assets/js/laravel-7b7cf225c8.js"></script>
<script src="https://laravel.com/assets/js/viewport-units-buggyfill.js"></script>
<script>window.viewportUnitsBuggyfill.init();</script>
<script>
    var _gaq=[['_setAccount','UA-23865777-1'],['_trackPageview']];
    (function(d,t){
        var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
        g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
        s.parentNode.insertBefore(g,s)
    }(document,'script'));
</script>

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<script>
    $('.carousel').carousel()
    $('.dropdown-toggle').dropdown()
</script>
</body>
</html>
