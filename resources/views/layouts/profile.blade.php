<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="google-site-verification" content="Yxg_vOfbKZUPov6k6_cIGROfD5YWmhslNU7rI0WfdHM" />
    <meta name="description" content="Fateen book is a personal Website and spending times with best friends">
    <meta name="keywords" content="Fateenbook,Fateen,Fateen alzubi,alzubi">
    <link rel="icon" type="image/png" href="{!! asset('img/favicon-57.png') !!}">
    <title>fateenbook</title>
     @yield('css')

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}
    <style>
        body {
            font-family: 'Lato';
        }

        .navbar-default .navbar-nav>li>a {color:#fff;font-size:15px;}
        .navbar-default .navbar-brand {color:#fff;}
        .panel-default>.panel-heading{background-color: #3c604a;color:#fff;}
        .navbar-default .navbar-nav >li:hover {background-color:#abc3b5;color:#3c604a; }
        .navbar-default .navbar-brand:hover {background-color:#abc3b5;color:#3c604a; }


        .fa-btn {
            margin-right: 6px;
        }
    </style>

</head>
<body id="app-layout">
@include('layouts.header')