
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>Account Settings</title>
    <link rel="icon" type="image/x-icon" href="{{asset('src/assets/img/favicon.ico')}}"/>
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
    <link rel="stylesheet" href={{asset('src/plugins/src/filepond/filepond.min.css')}}>
    <link rel="stylesheet" href={{asset('src/plugins/src/filepond/FilePondPluginImagePreview.min.css')}}>
    <link href={{asset('src/plugins/src/notification/snackbar/snackbar.min.css')}} rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href={{asset('src/plugins/src/sweetalerts2/sweetalerts2.css')}}>
    
    <link href={{asset('src/plugins/css/light/filepond/custom-filepond.css')}} rel="stylesheet" type="text/css" />
    <link href={{asset('src/assets/css/light/components/tabs.css')}} rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href={{asset('src/assets/css/light/elements/alert.css')}}>
    
    <link href={{asset('src/plugins/css/light/sweetalerts2/custom-sweetalert.css')}} rel="stylesheet" type="text/css" />
    <link href={{asset('src/plugins/css/light/notification/snackbar/custom-snackbar.css')}} rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href={{asset('src/assets/css/light/forms/switches.css')}}>
    <link href={{asset('src/assets/css/light/components/list-group.css')}} rel="stylesheet" type="text/css">
    <link href={{asset('src/assets/css/light/users/account-setting.css')}} rel="stylesheet" type="text/css" />



    <link href={{asset('src/plugins/css/dark/filepond/custom-filepond.css')}} rel="stylesheet" type="text/css" />
    <link href={{asset('src/assets/css/dark/components/tabs.css')}} rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href={{asset('src/assets/css/dark/elements/alert.css')}}>
    
    <link href="../src/plugins/css/dark/sweetalerts2/custom-sweetalert.css" rel="stylesheet" type="text/css" />
    <link href="../src/plugins/css/dark/notification/snackbar/custom-snackbar.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="../src/assets/css/dark/forms/switches.css">
    <link href="../src/assets/css/dark/components/list-group.css" rel="stylesheet" type="text/css">

    <link href="../src/assets/css/dark/users/account-setting.css" rel="stylesheet" type="text/css" />


    <!--  END CUSTOM STYLE FILE  -->
</head>
<body class=" layout-boxed">

@yield('content')


<!--  BEGIN FOOTER  -->
<div class="footer-wrapper">
                <div class="footer-section f-section-1">
                    <p class="">Copyright © <span class="dynamic-year">2022</span> <a target="_blank" href="https://designreset.com/cork-admin/">DesignReset</a>, All rights reserved.</p>
                </div>
                <div class="footer-section f-section-2">
                    <p class="">Coded with <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg></p>
                </div>
            </div>
            <!--  END FOOTER  -->
            
        </div>
        <!--  END CONTENT AREA  -->
    </div>
    <!-- END MAIN CONTAINER -->

    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="../src/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../src/plugins/src/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="../src/plugins/src/mousetrap/mousetrap.min.js"></script>
    <script src="../src/plugins/src/waves/waves.min.js"></script>
    <script src="../layouts/modern-light-menu/app.js"></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->

    <!--  BEGIN CUSTOM SCRIPTS FILE  -->
    <script src="../src/plugins/src/filepond/filepond.min.js"></script>
    <script src="../src/plugins/src/filepond/FilePondPluginFileValidateType.min.js"></script>
    <script src="../src/plugins/src/filepond/FilePondPluginImageExifOrientation.min.js"></script>
    <script src="../src/plugins/src/filepond/FilePondPluginImagePreview.min.js"></script>
    <script src="../src/plugins/src/filepond/FilePondPluginImageCrop.min.js"></script>
    <script src="../src/plugins/src/filepond/FilePondPluginImageResize.min.js"></script>
    <script src="../src/plugins/src/filepond/FilePondPluginImageTransform.min.js"></script>
    <script src="../src/plugins/src/filepond/filepondPluginFileValidateSize.min.js"></script>
    <script src="../src/plugins/src/notification/snackbar/snackbar.min.js"></script>
    <script src="../src/plugins/src/sweetalerts2/sweetalerts2.min.js"></script>
    <script src="../src/assets/js/users/account-settings.js"></script>
    <!--  END CUSTOM SCRIPTS FILE  -->
</body>
</html>