<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>Blog Content | CORK </title>
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
    <link href={{asset('src/assets/js/blogs/delete.css')}} rel="stylesheet">

    <!-- <link href="{{asset('https://cdn.quilljs.com/1.3.6/quill.snow.css')}}" rel="stylesheet">
    <script src="{{asset('https://cdn.quilljs.com/1.3.6/quill.min.js')}}"></script>
    <script src={{asset('src/assets/js/quill/quill.js')}}></script> -->
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
    <script src={{asset('layout/modern-light-menu/app.js')}}></script>
    <script src={{asset('src/plugins/src/highlight/highlight.pack.js')}}></script>
    <script src={{asset('src/assets/js/blogs/delete.js')}}></script>

    <!-- END GLOBAL MANDATORY STYLES -->

    <!-- BEGIN PAGE LEVEL SCRIPTS -->
    <!-- END PAGE LEVEL SCRIPTS -->
</body>
<!--  BEGIN FOOTER  -->
            <!-- <div class="footer-wrapper">
                <div class="footer-section f-section-1">
                    <p class="">Copyright © <span class="dynamic-year">2022</span> <a target="_blank" href="https://designreset.com/cork-admin/">DesignReset</a>, All rights reserved.</p>
                </div>
                <div class="footer-section f-section-2">
                    <p class="">Coded with <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg></p>
                </div>
            </div> -->
            <!--  END FOOTER  -->
</html>