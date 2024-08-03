<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>CORK Admin - Multipurpose Bootstrap Dashboard Template </title>
    <link rel="icon" type="image/x-icon" href={{asset("src/assets/img/favicon.ico")}}/>
    <link href={{asset("layout/modern-light-menu/css/light/loader.css")}} rel="stylesheet" type="text/css" />
    <link href={{asset("layout/modern-light-menu/css/dark/loader.css")}} rel="stylesheet" type="text/css" />
    <script src={{asset("layout/modern-light-menu/loader.js")}}></script>

    <!-- Home -->

    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href={{asset("https://fonts.googleapis.com/css?family=Nunito:400,600,700")}} rel="stylesheet">
    <link href={{asset("src/bootstrap/css/bootstrap.min.css")}} rel="stylesheet" type="text/css" />
    <link href={{asset("layout/modern-light-menu/css/light/plugins.css")}} rel="stylesheet" type="text/css" />
    <link href={{asset("layout/modern-light-menu/css/dark/plugins.css")}} rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM STYLES -->
    <link href={{asset("src/plugins/src/apex/apexcharts.css")}} rel="stylesheet" type="text/css">
    <link href={{asset("src/assets/css/light/dashboard/dash_1.css")}} rel="stylesheet" type="text/css" />
    <link href={{asset("src/assets/css/dark/dashboard/dash_1.css")}} rel="stylesheet" type="text/css" />

    <link href={{asset("src/assets/css/light/components/list-group.css")}} rel="stylesheet" type="text/css">
    <link href={{asset("src/assets/css/dark/components/list-group.css")}} rel="stylesheet" type="text/css">
    <link href={{asset("src/assets/css/light/dashboard/dash_2.css")}} rel="stylesheet" type="text/css">
    <link href={{asset("src/assets/css/dark/dashboard/dash_2.css")}} rel="stylesheet" type="text/css">
    <!-- END PAGE LEVEL PLUGINS/CUSTOM STYLES -->
</head>

<body class="layout-boxed">
@yield('content')

<!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
<script src={{asset("src/bootstrap/js/bootstrap.bundle.min.js")}}></script>
<script src={{asset("src/plugins/src/perfect-scrollbar/perfect-scrollbar.min.js")}}></script>
<script src={{asset("src/plugins/src/mousetrap/mousetrap.min.js")}}></script>
<script src={{asset("src/plugins/src/waves/waves.min.js")}}></script>
<script src={{asset("modern-light-menu/app.js")}}></script>
<!-- END GLOBAL MANDATORY SCRIPTS -->

<!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
<script src={{asset("src/plugins/src/apex/apexcharts.min.js")}}></script>
<script src={{asset("src/assets/js/dashboard/dash_1.js")}}></script>
<!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
</body>
</html>
