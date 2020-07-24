<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name='copyright' content='Precon'>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
       <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
       <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

        <!-- Title Tag  -->
        <title>Baosem : Edition & Publicité</title>
         
        <!-- Favicon -->
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css" integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ==" crossorigin=""/> 
        <link rel="icon" type="image/png" href="img/favicon.html">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" />

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{asset('site/css/bootstrap.min.css')}}">
        <!-- Animate CSS -->
        <link rel="stylesheet" href="{{asset('site/css/animate.min.css')}}">
        <!-- Font Awesome CSS -->
        <link rel="stylesheet" href="{{asset('site/css/font-awesome.css')}}">
        <!-- FancyBox CSS -->
        <link rel="stylesheet" href="{{asset('site/css/jquery.fancybox.min.css')}}">
        <!-- Magnipic Popup CSS -->
        <link rel="stylesheet" href="{{asset('site/css/magnific-popup.min.css')}}">
        <!-- Slick Nav CSS -->
        <link rel="stylesheet" href="{{asset('site/css/slicknav.min.css')}}">
        <!-- Slick Slider CSS -->
        <link rel="stylesheet" href="{{asset('site/css/slick-slider.css')}}">
        <!-- Google Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
        <!-- Precon Stylesheet -->
        <link rel="stylesheet" href="{{asset('site/css/reset.css')}}">
        <link rel="stylesheet" href="{{asset('site/css/style.css')}}">
        <link rel="stylesheet" href="{{asset('site/css/responsive.css')}}">
        <link rel="stylesheet" href="{{asset('site/css/skins/skin1.css')}}">
        <link rel="stylesheet" href="{{asset('site/css/mdb.min.css')}}">
        @yield('header')
  
</head>
<body>
<nav class="navbar navbar-expand-md navbar-dark bg-dark sidebarNavigation" data-sidebarClass="navbar-dark bg-dark">
        <div class="container-fluid">
        <a class="navbar-brand" href="#">Admin Apelle d'offre</a>
        <button class="navbar-toggler leftNavbarToggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault"
            aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="nav navbar-nav nav-flex-icons ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="{{url('/importation')}}">Importation</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="{{url('/TransfertArchive')}}">Transfert Archive</a>
                </li>
                
            </ul>

        </div>
    </div>
  
</nav>
  @yield('corp')
</body>
</html>
        <style type="text/css">
            body{position:relative}
.overlay,.sideMenu{position:fixed;bottom:0}
.overlay{top:0;left:-100%;right:100%;margin:auto;background-color:rgba(0,0,0,.5);z-index:998;transition:all ease 0.2s}
.overlay.open{left:0;right:0}
.sidebarNavigation{margin-bottom:0;z-index:999;justify-content:flex-start}
.sidebarNavigation .leftNavbarToggler{margin-right:10px;order:-1}
.sideMenu{left:-100%;top:52px;transition:all ease 0.5s;overflow:hidden;width:100%;z-index:999;max-width:80%;margin-bottom:0;padding:1rem}
.sideMenu.open{left:0;display:block;overflow-y:auto}
.sideMenu ul{margin:0;padding:0 15px}
        </style>
        <script type="text/javascript">
            window.onload=function(){if(window.jQuery){$(document).ready(function(){$(".sidebarNavigation .navbar-collapse").hide().clone().appendTo("body").removeAttr("class").addClass("sideMenu").show();$("body").append("<div class='overlay'></div>");$(".navbar-toggle, .navbar-toggler").on("click",function(){$(".sideMenu").addClass($(".sidebarNavigation").attr("data-sidebarClass"));$(".sideMenu, .overlay").toggleClass("open");$(".overlay").on("click",function(){$(this).removeClass("open");$(".sideMenu").removeClass("open")})});$("body").on("click",".sideMenu.open .nav-item",function(){if(!$(this).hasClass("dropdown")){$(".sideMenu, .overlay").toggleClass("open")}});$(window).resize(function(){if($(".navbar-toggler").is(":hidden")){$(".sideMenu, .overlay").hide()}else{$(".sideMenu, .overlay").show()}})})}else{console.log("sidebarNavigation Requires jQuery")}}
        </script>