<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>Post Content | CORK </title>
    <link rel="icon" type="image/x-icon" href={{asset("src/assets/img/favicon.ico")}}/>
    <link href={{asset('layout/modern-light-menu/css/light/loader.css')}} rel="stylesheet" type="text/css" />
    <link href={{asset('layout/modern-light-menu/css/dark/loader.css')}} rel="stylesheet" type="text/css" />
    <script src={{asset('layout/modern-light-menu/loader.js')}}></script>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href={{asset('https://fonts.googleapis.com/css?family=Nunito:400,600,700')}} rel="stylesheet">
    <link href={{asset('src/bootstrap/css/bootstrap.min.css')}} rel="stylesheet" type="text/css" />
    <link href={{asset('layout/modern-light-menu/css/light/plugins.css')}} rel="stylesheet" type="text/css" />
    <link href={{asset('layout/modern-light-menu/css/dark/plugins.css')}} rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->

    <!--  BEGIN CUSTOM STYLE FILE  -->
    <link href={{asset('src/assets/css/light/elements/custom-pagination.css')}} rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href={{asset('src/assets/css/light/apps/blog-post.css')}}>

    <link href={{asset('src/assets/css/dark/elements/custom-pagination.css')}} rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href={{asset('src/assets/css/dark/apps/blog-post.css')}}>
    <!--  END CUSTOM STYLE FILE  -->
</head>
<body class="layout-boxed">

<!-- BEGIN LOADER -->
<div id="load_screen"> <div class="loader"> <div class="loader-content">
            <div class="spinner-grow align-self-center"></div>
        </div></div></div>
<!--  END LOADER -->

@yield('content')


<!-- BEGIN GLOBAL MANDATORY STYLES -->
    <script src={{asset('src/bootstrap/js/bootstrap.bundle.min.js')}}></script>
    <script src={{asset('src/plugins/src/perfect-scrollbar/perfect-scrollbar.min.js')}}></script>
    <script src={{asset('src/plugins/src/mousetrap/mousetrap.min.js')}}></script>
    <script src={{asset('src/plugins/src/waves/waves.min.js')}}></script>
    <script src={{asset('layouts/modern-light-menu/app.js')}}></script>
    <script src={{asset('src/plugins/src/highlight/highlight.pack.js')}}></script>
    <!-- END GLOBAL MANDATORY STYLES -->

    <!-- BEGIN PAGE LEVEL SCRIPTS -->
    <!-- END PAGE LEVEL SCRIPTS -->
</body>
</html>