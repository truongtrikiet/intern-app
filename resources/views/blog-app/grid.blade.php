@extends('layouts.blog-app-layout')
    
    
   <!--  BEGIN NAVBAR  -->
<div class="header-container container-xxl">
    <header class="header navbar navbar-expand-sm expand-header">

        <a href="javascript:void(0);" class="sidebarCollapse">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg>
        </a>

        <div class="search-animated toggle-search">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
            <form class="form-inline search-full form-inline search" role="search">
                <div class="search-bar">
                    <input type="text" class="form-control search-form-control  ml-lg-auto" placeholder="Search...">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x search-close"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                </div>
            </form>
            <span class="badge badge-secondary">Menu</span>
        </div>

        <ul class="navbar-item flex-row ms-lg-auto ms-0">

            <li class="nav-item dropdown language-dropdown">
                <a href="javascript:void(0);" class="nav-link dropdown-toggle" id="language-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img src="../src/assets/img/1x1/us.svg" class="flag-width" alt="flag">
                </a>
                <div class="dropdown-menu position-absolute" aria-labelledby="language-dropdown">
                    <a class="dropdown-item d-flex" href="javascript:void(0);"><img src="../src/assets/img/1x1/us.svg" class="flag-width" alt="flag"> <span class="align-self-center">&nbsp;English</span></a>
                    <a class="dropdown-item d-flex" href="javascript:void(0);"><img src="../src/assets/img/1x1/tr.svg" class="flag-width" alt="flag"> <span class="align-self-center">&nbsp;Turkish</span></a>
                    <a class="dropdown-item d-flex" href="javascript:void(0);"><img src="../src/assets/img/1x1/br.svg" class="flag-width" alt="flag"> <span class="align-self-center">&nbsp;Portuguese</span></a>
                    <a class="dropdown-item d-flex" href="javascript:void(0);"><img src="../src/assets/img/1x1/in.svg" class="flag-width" alt="flag"> <span class="align-self-center">&nbsp;Hindi</span></a>
                    <a class="dropdown-item d-flex" href="javascript:void(0);"><img src="../src/assets/img/1x1/de.svg" class="flag-width" alt="flag"> <span class="align-self-center">&nbsp;German</span></a>
                </div>
            </li>

            <li class="nav-item theme-toggle-item">
                <a href="javascript:void(0);" class="nav-link theme-toggle">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-moon dark-mode"><path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"></path></svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-sun light-mode"><circle cx="12" cy="12" r="5"></circle><line x1="12" y1="1" x2="12" y2="3"></line><line x1="12" y1="21" x2="12" y2="23"></line><line x1="4.22" y1="4.22" x2="5.64" y2="5.64"></line><line x1="18.36" y1="18.36" x2="19.78" y2="19.78"></line><line x1="1" y1="12" x2="3" y2="12"></line><line x1="21" y1="12" x2="23" y2="12"></line><line x1="4.22" y1="19.78" x2="5.64" y2="18.36"></line><line x1="18.36" y1="5.64" x2="19.78" y2="4.22"></line></svg>
                </a>
            </li>

            <li class="nav-item dropdown notification-dropdown">
                <a href="javascript:void(0);" class="nav-link dropdown-toggle" id="notificationDropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bell"><path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path><path d="M13.73 21a2 2 0 0 1-3.46 0"></path></svg><span class="badge badge-success"></span>
                </a>

                <div class="dropdown-menu position-absolute" aria-labelledby="notificationDropdown">
                    <div class="drodpown-title message">
                        <h6 class="d-flex justify-content-between"><span class="align-self-center">Messages</span> <span class="badge badge-primary">9 Unread</span></h6>
                    </div>
                    <div class="notification-scroll">
                        <div class="dropdown-item">
                            <div class="media server-log">
                                <img src="../src/assets/img/profile-16.jpeg" class="img-fluid me-2" alt="avatar">
                                <div class="media-body">
                                    <div class="data-info">
                                        <h6 class="">Kara Young</h6>
                                        <p class="">1 hr ago</p>
                                    </div>

                                    <div class="icon-status">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="dropdown-item">
                            <div class="media ">
                                <img src="../src/assets/img/profile-15.jpeg" class="img-fluid me-2" alt="avatar">
                                <div class="media-body">
                                    <div class="data-info">
                                        <h6 class="">Daisy Anderson</h6>
                                        <p class="">8 hrs ago</p>
                                    </div>

                                    <div class="icon-status">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="dropdown-item">
                            <div class="media file-upload">
                                <img src="../src/assets/img/profile-21.jpeg" class="img-fluid me-2" alt="avatar">
                                <div class="media-body">
                                    <div class="data-info">
                                        <h6 class="">Oscar Garner</h6>
                                        <p class="">14 hrs ago</p>
                                    </div>

                                    <div class="icon-status">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="drodpown-title notification mt-2">
                            <h6 class="d-flex justify-content-between"><span class="align-self-center">Notifications</span> <span class="badge badge-secondary">16 New</span></h6>
                        </div>

                        <div class="dropdown-item">
                            <div class="media server-log">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-server"><rect x="2" y="2" width="20" height="8" rx="2" ry="2"></rect><rect x="2" y="14" width="20" height="8" rx="2" ry="2"></rect><line x1="6" y1="6" x2="6" y2="6"></line><line x1="6" y1="18" x2="6" y2="18"></line></svg>
                                <div class="media-body">
                                    <div class="data-info">
                                        <h6 class="">Server Rebooted</h6>
                                        <p class="">45 min ago</p>
                                    </div>

                                    <div class="icon-status">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="dropdown-item">
                            <div class="media file-upload">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
                                <div class="media-body">
                                    <div class="data-info">
                                        <h6 class="">Kelly Portfolio.pdf</h6>
                                        <p class="">670 kb</p>
                                    </div>

                                    <div class="icon-status">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="dropdown-item">
                            <div class="media ">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
                                <div class="media-body">
                                    <div class="data-info">
                                        <h6 class="">Licence Expiring Soon</h6>
                                        <p class="">8 hrs ago</p>
                                    </div>

                                    <div class="icon-status">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </li>

            <li class="nav-item dropdown user-profile-dropdown  order-lg-0 order-1">
                <a href="javascript:void(0);" class="nav-link dropdown-toggle user" id="userProfileDropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <div class="avatar-container">
                        <div class="avatar avatar-sm avatar-indicators avatar-online">
                            <img alt="avatar" src="../src/assets/img/profile-30.png" class="rounded-circle">
                        </div>
                    </div>
                </a>

                <div class="dropdown-menu position-absolute" aria-labelledby="userProfileDropdown">
                    <div class="user-profile-section">
                        <div class="media mx-auto">
                            <div class="emoji me-2">
                                &#x1F44B;
                            </div>
                            <div class="media-body">
                                <h5>{{ Auth::user()->first_name }} {{ Auth::user()->last_name }}</h5>
                                <p>{{Auth::user()->role}}</p>
                            </div>
                        </div>
                    </div>
                    <div class="dropdown-item">
                        <a href="user-profile.html">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg> <span>Profile</span>
                        </a>
                    </div>
                    <div class="dropdown-item">
                        <a href="app-mailbox.html">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-inbox"><polyline points="22 12 16 12 14 15 10 15 8 12 2 12"></polyline><path d="M5.45 5.11L2 12v6a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-6l-3.45-6.89A2 2 0 0 0 16.76 4H7.24a2 2 0 0 0-1.79 1.11z"></path></svg> <span>Inbox</span>
                        </a>
                    </div>
                    <div class="dropdown-item">
                        <a href="auth-boxed-lockscreen.html">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-lock"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg> <span>Lock Screen</span>
                        </a>
                    </div>
                    <div class="dropdown-item">
                        <form id="logout" action={{route('logout')}} method="post">
                            @csrf
                        </form>
                        <a href="#" onclick="document.getElementById('logout').submit();">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-log-out"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg> <span>Log Out</span>
                        </a>
                    </div>
                </div>

            </li>
        </ul>
    </header>
</div>
<!--  END NAVBAR  -->

<!--  BEGIN MAIN CONTAINER  -->
<div class="main-container" id="container">

    <div class="overlay"></div>
    <div class="search-overlay"></div>

    <!--  BEGIN SIDEBAR  -->
    <div class="sidebar-wrapper sidebar-theme">

        <nav id="sidebar">

            <div class="navbar-nav theme-brand flex-row  text-center">
                <div class="nav-logo">
                    <div class="nav-item theme-logo">
                        <a href={{asset('blog-app.index')}}>
                            <img src="../src/assets/img/logo.svg" class="navbar-logo" alt="logo">
                        </a>
                    </div>
                    <div class="nav-item theme-text">
                        <a href={{asset('blog-app.index')}} class="nav-link"> CORK </a>
                    </div>
                </div>
                <div class="nav-item sidebar-toggle">
                    <div class="btn-toggle sidebarCollapse">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevrons-left"><polyline points="11 17 6 12 11 7"></polyline><polyline points="18 17 13 12 18 7"></polyline></svg>
                    </div>
                </div>
            </div>

            <div class="profile-info">
                <div class="user-info">
                    <div class="profile-img">
                        <img src="../src/assets/img/profile-30.png" alt="avatar">
                    </div>
                    <div class="profile-content">
                        <h6 class="">{{ Auth::user()->first_name }} {{ Auth::user()->last_name }}</h6>
                        <p class="">{{Auth::user()->role}}</p>
                    </div>
                </div>
            </div>

            <div class="shadow-bottom"></div>
            <ul class="list-unstyled menu-categories" id="accordionExample">

                <li class="menu menu-heading">
                    <div class="heading"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-minus"><line x1="5" y1="12" x2="19" y2="12"></line></svg><span>APPLICATIONS</span></div>
                </li>


                <!-- <li class="menu">
                    <a href="./app-contacts.html" aria-expanded="false" class="dropdown-toggle">
                        <div class="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-map-pin"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
                            <span>Contacts</span>
                        </div>
                    </a>
                </li> -->

               
                <li class="menu">
                    <a href="#blog" data-bs-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <div class="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-pen-tool"><path d="M12 19l7-7 3 3-7 7-3-3z"></path><path d="M18 13l-1.5-7.5L2 2l3.5 14.5L13 18l5-5z"></path><path d="M2 2l7.586 7.586"></path><circle cx="11" cy="11" r="2"></circle></svg>
                            <span>Blog</span>
                        </div>
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                        </div>
                    </a>
                    <ul class="collapse submenu list-unstyled" id="blog" data-bs-parent="#accordionExample">
                        <li class="active">
                            <a href={{url('/blog-app.grid')}}> Home </a>
                        </li>
                        <li>
                            <a href={{url('/blog/list')}}> List </a>
                        </li>
                        <!-- <li>
                            <a href={{url('/blog-app.post')}}> Post </a>
                        </li> -->
                        <li>
                            <a href={{url('/blog/create')}}> Create </a>
                        </li>
                        <!-- <li>
                            <a href={{url('/blog/{id}/edit')}}> Edit </a>
                        </li> -->
                    </ul>
                </li>


                <li class="menu menu-heading">
                    <div class="heading"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-minus"><line x1="5" y1="12" x2="19" y2="12"></line></svg><span>USER AND PAGES</span></div>
                </li>

                <li class="menu">
                    <a href="#users" data-bs-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <div class="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                            <span>Users</span>
                        </div>
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                        </div>
                    </a>

                    <!-- Profile by user -->
                    <ul class="collapse submenu list-unstyled" id="users" data-bs-parent="#accordionExample">
                        <li>
                        @php
                            $user = Auth::user();
                        @endphp
                            <a href={{route('profile.page', ['email' => $user->email])}}> Profile </a>
                        </li>
                    </ul>
                </li>
            </ul>

        </nav>

    </div>
    <!--  END SIDEBAR  -->
<!--  BEGIN CONTENT AREA  -->
<div id="content" class="main-content">

<div class="layout-px-spacing">

    <div class="middle-content container-xxl p-0">

        <!-- BREADCRUMB -->
        <div class="page-meta">
            <nav class="breadcrumb-style-one" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">App</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Blog</li>
                </ol>
            </nav>
        </div>
        <!-- /BREADCRUMB -->

        <div class="row layout-top-spacing">
            <div class="col-lg-3 col-md-3 col-sm-3 mb-4">
                <input id="t-text" type="text" name="txt" placeholder="Search" class="form-control" required="">
            </div>
            <div class="col-xl-2 col-lg-3 col-md-3 col-sm-3 mb-4 ms-auto">
                <select class="form-select form-select" aria-label="Default select example">
                    <option selected="">All Category</option>
                    <option value="3">Wordpress</option>
                    <option value="1">Admin</option>
                    <option value="2">Themeforest</option>
                    <option value="3">Travel</option>
                </select>
            </div>

            <div class="col-xl-2 col-lg-3 col-md-3 col-sm-3 mb-4">
                <select class="form-select form-select" aria-label="Default select example">
                    <option selected="">Sort By</option>
                    <option value="1">Recent</option>
                    <option value="2">Most Upvoted</option>
                    <option value="3">Popular</option>
                </select>
            </div>
        </div>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <div class="row">

        @foreach ($blogs as $blog)
        <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-4 col-sm-6 mb-4">
                <a href={{route('blog.show', $blog->slug)}} class="card style-2 mb-md-0 mb-4">
                    <img src="../src/assets/img/grid-blog-style-2.jpeg" class="card-img-top" alt="...">
                     
                    <!-- <img src="{{ asset($blog->getFirstMediaUrl('thumbnails')) }}" class="card-img-top"> -->
                    <div class="card-body px-0 pb-0">
                        <h5 class="card-title mb-3">{{ $blog->title }}</h5>
                        <div class="media mt-4 mb-0 pt-1">
                            <img src="../src/assets/img/profile-5.jpeg" class="card-media-image me-3" alt="">
                            <div class="media-body">
                                <h4 class="media-heading mb-1">{{ $blog->user->first_name }} {{ $blog->user->last_name }}</h4>
                                <p class="media-text">{{ $blog->publish_date }}</p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        @endforeach
            
           

            <!-- <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-4 col-sm-6 mb-4">
                <a href="./app-blog-post.html" class="card style-2 mb-md-0 mb-4">
                    <img src="../src/assets/img/grid-blog-style-1.jpg" class="card-img-top" alt="...">
                    <div class="card-body px-0 pb-0">
                        <h5 class="card-title mb-3">The ideal work from home office setup</h5>
                        <div class="media mt-4 mb-0 pt-1">
                            <img src="../src/assets/img/profile-2.jpeg" class="card-media-image me-3" alt="">
                            <div class="media-body">
                                <h4 class="media-heading mb-1">Vanessa Kirby</h4>
                                <p class="media-text">02 May</p>
                            </div>
                        </div>
                    </div>
                </a>
            </div> -->

            <!-- <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-4 col-sm-6 mb-4">
                <a href="./app-blog-post.html" class="card style-2 mb-md-0 mb-4">
                    <img src="../src/assets/img/grid-blog-style-3.jpg" class="card-img-top" alt="...">
                    <div class="card-body px-0 pb-0">
                        <h5 class="card-title mb-3">Top haunted houses in Great Britain</h5>
                        <div class="media mt-4 mb-0 pt-1">
                            <img src="../src/assets/img/profile-16.jpeg" class="card-media-image me-3" alt="">
                            <div class="media-body">
                                <h4 class="media-heading mb-1">Kelly Young</h4>
                                <p class="media-text">10 May</p>
                            </div>
                        </div>
                    </div>
                </a>
            </div> -->

            <!-- <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-4 col-sm-6 mb-4">
                <a href="./app-blog-post.html" class="card style-2 mb-md-0 mb-4">
                    <img src="../src/assets/img/list-blog-style-3.jpeg" class="card-img-top" alt="...">
                    <div class="card-body px-0 pb-0">
                        <h5 class="card-title mb-3">29 Most Beautiful Places in the World</h5>
                        <div class="media mt-4 mb-0 pt-1">
                            <img src="../src/assets/img/profile-32.jpeg" class="card-media-image me-3" alt="">
                            <div class="media-body">
                                <h4 class="media-heading mb-1">Xavier</h4>
                                <p class="media-text">14 May</p>
                            </div>
                        </div>
                    </div>
                </a>
            </div> -->

            <!-- <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-4 col-sm-6 mb-4">
                <a href="./app-blog-post.html" class="card style-2 mb-md-0 mb-4">
                    <img src="../src/assets/img/grid-blog-style-5.jpg" class="card-img-top" alt="...">
                    <div class="card-body px-0 pb-0">
                        <h5 class="card-title mb-3">21 Habits of highly productive people</h5>
                        <div class="media mt-4 mb-0 pt-1">
                            <img src="../src/assets/img/profile-2.jpeg" class="card-media-image me-3" alt="">
                            <div class="media-body">
                                <h4 class="media-heading mb-1">Vanessa Kirby</h4>
                                <p class="media-text">19 May</p>
                            </div>
                        </div>
                    </div>
                </a>
            </div> -->

            <!-- <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-4 col-sm-6 mb-4">
                <a href="./app-blog-post.html" class="card style-2 mb-md-0 mb-4">
                    <img src="../src/assets/img/masonry-blog-style-3.jpeg" class="card-img-top" alt="...">
                    <div class="card-body px-0 pb-0">
                        <h5 class="card-title mb-3">9 Reasons why sugar is bad for your health</h5>
                        <div class="media mt-4 mb-0 pt-1">
                            <img src="../src/assets/img/profile-19.jpeg" class="card-media-image me-3" alt="">
                            <div class="media-body">
                                <h4 class="media-heading mb-1">Oscar Garner</h4>
                                <p class="media-text">25 May</p>
                            </div>
                        </div>
                    </div>
                </a>
            </div> -->

            <!-- <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-4 col-sm-6 mb-4">
                <a href="./app-blog-post.html" class="card style-2 mb-md-0 mb-4">
                    <img src="../src/assets/img/grid-blog-style-4.jpg" class="card-img-top" alt="...">
                    <div class="card-body px-0 pb-0">
                        <h5 class="card-title mb-3">7 Effective ways to instantly look more faishonable</h5>
                        <div class="media mt-4 mb-0 pt-1">
                            <img src="../src/assets/img/profile-32.jpeg" class="card-media-image me-3" alt="">
                            <div class="media-body">
                                <h4 class="media-heading mb-1">Xavier</h4>
                                <p class="media-text">27 May</p>
                            </div>
                        </div>
                    </div>
                </a>
            </div> -->

            <!-- <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-4 col-sm-6 mb-4">
                <a href="./app-blog-post.html" class="card style-2 mb-md-0 mb-4">
                    <img src="../src/assets/img/masonry-blog-style-4.jpeg" class="card-img-top" alt="...">
                    <div class="card-body px-0 pb-0">
                        <h5 class="card-title mb-3">How to plan a trip in 7 easy steps</h5>
                        <div class="media mt-4 mb-0 pt-1">
                            <img src="../src/assets/img/profile-9.jpeg" class="card-media-image me-3" alt="">
                            <div class="media-body">
                                <h4 class="media-heading mb-1">Daisy Anderson</h4>
                                <p class="media-text">31 May</p>
                            </div>
                        </div>
                    </div>
                </a>
            </div> -->

        </div>

    </div>
    
</div>
            
            

        </div>
        <!--  END CONTENT AREA  -->
    </div>
    <!-- END MAIN CONTAINER -->
    
    