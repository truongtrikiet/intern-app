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
            <span class="badge badge-secondary">Admin Dashboard.</span>
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
                                <h5>Shaun Park</h5>
                                <p>Project Leader</p>
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
                        <a href={{asset('views.index')}}>
                            <img src="../src/assets/img/logo.svg" class="navbar-logo" alt="logo">
                        </a>
                    </div>
                    <div class="nav-item theme-text">
                        <a href={{asset('views.index')}} class="nav-link"> CORK </a>
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
                        <h6 class="">Shaun Park</h6>
                        <p class="">Project Leader</p>
                    </div>
                </div>
            </div>

            <div class="shadow-bottom"></div>
            <ul class="list-unstyled menu-categories" id="accordionExample">

                <li class="menu menu-heading">
                    <div class="heading"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-minus"><line x1="5" y1="12" x2="19" y2="12"></line></svg><span>APPLICATIONS</span></div>
                </li>


                <li class="menu">
                    <a href="./app-contacts.html" aria-expanded="false" class="dropdown-toggle">
                        <div class="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-map-pin"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
                            <span>Contacts</span>
                        </div>
                    </a>
                </li>

               
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
                        <li>
                            <a href="./app-blog-grid.html"> Grid </a>
                        </li>
                        <li>
                            <a href="./app-blog-list.html"> List </a>
                        </li>
                        <li class="active">
                            <a href="./app-blog-post.html"> Post </a>
                        </li>
                        <li>
                            <a href="./app-blog-create.html"> Create </a>
                        </li>
                        <li>
                            <a href="./app-blog-edit.html"> Edit </a>
                        </li>
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
                    <ul class="collapse submenu list-unstyled" id="users" data-bs-parent="#accordionExample">
                        <li>
                            <a href="./user-profile.html"> Profile </a>
                        </li>
                        <li>
                            <a href="./user-account-settings.html"> Account Settings </a>
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
                                <li class="breadcrumb-item"><a href="#">Blog</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Post</li>
                            </ol>
                        </nav>
                    </div>
                    <!-- /BREADCRUMB -->
    
                    <div class="row layout-top-spacing">
    
                        <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 mb-4">


                            <div class="single-post-content">

                                <div class="featured-image">

                                    <div class="featured-image-overlay"></div>

                                    <div class="post-header">
                                        
                                        <div class="post-title">
                                            <h1 class="mb-0">List of Best Restaurant WordPress Themes</h1>
                                        </div>
                                        
                                        <div class="post-meta-info d-flex justify-content-between">
    
                                            <div class="media">
                                                <img src="../src/assets/img/profile-12.jpeg" alt="profile">
                                                <div class="media-body">
                                                    <h5>Kelly Young</h5>
                                                    <p>15 May 2022</p>
                                                </div>
                                            </div>

                                            <div class="align-self-center">
                                                <button class="btn btn-success btn-icon btn-share btn-rounded">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-share-2"><circle cx="18" cy="5" r="3"></circle><circle cx="6" cy="12" r="3"></circle><circle cx="18" cy="19" r="3"></circle><line x1="8.59" y1="13.51" x2="15.42" y2="17.49"></line><line x1="15.41" y1="6.51" x2="8.59" y2="10.49"></line></svg>
                                                </button>
                                            </div>
                                            
                                        </div>

                                    </div>
                                    
                                </div>

                                <div class="post-content">

                                    <p class="mb-5">Aenean non tempor justo. Donec faucibus sapien a urna interdum porta. Quisque fermentum nisi felis, quis aliquam quam volutpat porta. Nullam aliquet scelerisque massa, quis tincidunt velit. Vivamus semper placerat ornare. Maecenas eget accumsan eros. Donec non felis vitae tortor elementum euismod sit amet vitae risus. Nam nunc turpis, porttitor ut tempor eu, efficitur nec risus.</p>

                                    <h4>Cinyras ea tulit in inducit qui mater</h4>

                                    <p class="mb-5">Lorem markdownum facit? Hinc tutus serisque, mihi iaculum curam, vicibus aliquando se posses gentis quidem. Meta  tenebat diversa dixerat celeberrimus molle require; prendique urnam  Pyreneus? Haut mei sive digna noctisque percussit dicta, in pars certaminis iuvenalis. Praemonuisse esse  inter in huic, Cinyras pallentem vi sistere cubat ne causa.</p>

                                    <h4>Utque tu canibus</h4>

                                    <p class="mb-5">Possent quippe. Conata fera ab Hersilie iam auditur haesit. Culpa ignis retia Aonides ictus crescendo micantes, petere, ambustaque vicem in digitos iubet cornigeris.</p>
                                    
                                    <ul class="mb-5">
                                        <li class="mb-1">Consectetur adipiscing elit</li>
                                        <li class="mb-1">Integer massa</li>
                                        <li class="mb-1">Facilisis nisl aliquet</li>
                                    </ul>
                                    
                                    <h4>Fregit aut Caystro equos</h4>

                                    <p>Manet pro aere superest adiacet sua purpura Tereus in multis conantem culpa, inque fingit et referebat? Materiaque mentes et, quo omnia  captiva ore mandat cepit triformis filia. Prius sorte nomina in repellite sentit facunde te aures, vires.</p>
                                    
                                    
                                    <hr class="my-5">

                                    <h2 class="my-4">Code Block</h2>

                                    <div class="code-section-container show-code">
                                            
                                        <div class="code-section text-left">
                                            <pre>
npm install </pre>
                                        </div>
                                    </div>

                                    <h2 class="mb-4 mt-5">Code Block with Toggle</h2>

                                    <div class="code-section-container show-code mb-5">
                                            
                                        <button class="btn toggle-code-snippet"><span>Code</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down toggle-code-icon"><polyline points="6 9 12 15 18 9"></polyline></svg></button>

                                        <div class="code-section text-left">
                                            <pre>
&lt;button type=&quot;button&quot; onclick=&quot;document.getElementById('demo').innerHTML = Date()&quot;&gt;
    Click me to display Date and Time.
&lt;/button&gt; </pre>
                                        </div>
                                    </div>

                                    <p class="mb-5">Fama creatis cum; ait atque et ictaque stabat, si texit continuere exsatiata vestes, humana arces. Moriens carissime  pudet dextra et aures micantes est, in. Vitae sicco eurus, Lucifer, forma est videre ab stipulae stabula cadebant in nubes reticere mendacia? Adice  Ladon petis. Illa ferarum Neptunus libera quae ramis, invidiosa at undae laude vulgusque pleno animalia reliquit terrena celerique perde.</p>

                                    <h4>Nocte populusque</h4>

                                    <p>Lorem markdownum, ponere patent ista, Cadme, adesse humum non forem putares; adiuro ore viresque est. Inde labores si sustinet regia, levi oris pascere! Rhodon ad lingua perdidit inpia alis! Maiorque de duro!</p>

                                    <p class="mb-5">Sit et angues referente proxima Emathiique nemo: herbae servant eo  corpus cornua tenuata recuso; natis parentem. Nisi nec aquarum, nymphae.</p>
                                    
                                    <img src="../src/assets/img/lightbox-3.jpeg" alt="image-1" class="full-width img-fluid mt-4 mb-5">

                                    <h4>Novato extrema monimenta clivo ille</h4>

                                    <p class="mb-5">Recessit mox patrem ille mea, tumulatus teneri hominis, favilla enim recentes deam cur nocte pro eburnea. Favilla iam suis horruerant Chiae quotiensque ingemuit locumque ducere postquam alebat. Iovi caeli esse superet contraria conscia transierant verae; ut vetuere, suo gerat lumina rugis velletque. Facta innecte de relicta Chrysenque morte, laedor dea aequaret dedit! Sustinui attulit proles potentior.</p>

                                    
                                    <h4>Aliquod corpora sororibus crimine ornata</h4>

                                    <p class="mb-5">Est convicia et nubibus negate. In nisi inbellibus sui, cruribus vult hostes solum invitat. Vino faciam stratis; non modo in eurus igitur, ambit, mentitus periclo? Ullo dextra, extemplo commenta ultima, quid ire vos toto quia, in habili Gradivus ferarum certaminis attulerat.</p>
                                    

                                    <h4>Nemus dolet monstravit</h4>

                                    <p class="mb-5">Est et hic volucres, rursus; simul, cauda tamen cacumine pars intendensque . Maius dignior caret coniuge, demugitaeque duce, exponimur anus inritata. Quoque sum casusve corpora, dat caecis doloris scelus domesticus laboris heu quod reliquit. Albenti infra sed Pergama vivere fusus de fecerat sublime prosunt illic. Consensu pavet insistit terras!</p>
                                    
                                    <hr class="my-5">

                                    <div class="text-center mb-5">
                                        <img src="../src/assets/img/slider-3.jpeg" alt="image-1" class="img-fluid">
                                    </div>

                                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>


                                </div>
                                
                                
                                <div class="post-info">
                                    
                                    <hr>

                                    <div class="post-tags mt-5">

                                        <span class="badge badge-primary mb-2">Admin</span>
                                        <span class="badge badge-primary mb-2">Themeforeset</span>
                                        <span class="badge badge-primary mb-2">Dashboard</span>
                                        <span class="badge badge-primary mb-2">Top 10</span>
                                        
                                    </div>

                                    <div class="post-dynamic-meta mt-5 mb-5">

                                        <button class="btn btn-secondary me-4 mb-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
                                            <span class="btn-text-inner">1.1k</span>
                                        </button>
                                        
                                        <div class="avatar--group mb-2">
                                            <div class="avatar avatar-sm m-0">
                                                <img alt="avatar" src="../src/assets/img/profile-16.jpeg" class="rounded-circle">
                                            </div>
                                            <div class="avatar avatar-sm">
                                                <img alt="avatar" src="../src/assets/img/delete-user-4.jpeg" class="rounded-circle">
                                            </div>
                                            <div class="avatar avatar-sm">
                                                <img alt="avatar" src="../src/assets/img/profile-5.jpeg" class="rounded-circle">
                                            </div>
                                            <div class="avatar avatar-sm">
                                                <span class="avatar-title rounded-circle">AG</span>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <hr>

                                    <h2 class="mb-5">Comments <span class="comment-count">(4)</span></h2>

                                    <div class="post-comments">

                                        <div class="media mb-5 pb-5 primary-comment">
                                            <!-- <img class="me-4" src="../src/assets/img/profile-2.jpeg" alt="pic1"> -->
                                            <div class="avatar me-4">
                                                <img alt="avatar" src="../src/assets/img/profile-2.jpeg" class="rounded-circle" />
                                            </div>
                                            <div class="media-body">
                                                <h5 class="media-heading mb-1">Daisy Andrason</h5>
                                                <div class="meta-info mb-0">14 April</div>
                                                <p class="media-text mt-2 mb-0">Fusce condimentum cursus mauris et ornare. Mauris fermentum mi id sollicitudin viverra. Aenean dignissim sed ante eget dapibus. Sed dapibus nulla elementum, rutrum neque eu, gravida neque.</p>

                                                <!-- <button class="btn btn-success btn-reply">Reply</button> -->
                                                <button class="btn btn-success btn-icon btn-reply btn-rounded">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg>
                                                </button>
                                                
                                                <!--  -->
                                                <div class="media mb-4 mt-4">
                                                    <!-- <img class="me-4" src="../src/assets/img/profile-3.jpeg" alt="pic1"> -->
                                                    <div class="avatar me-4">
                                                        <img alt="avatar" src="../src/assets/img/profile-3.jpeg" class="rounded-circle" />
                                                    </div>
                                                    <div class="media-body">
                                                        <h5 class="media-heading mb-1">Xavier</h5>
                                                        <div class="meta-info mb-0">15 April</div>
                                                        <p class="media-text mt-2 mb-0">Fusce condimentum cursus mauris et ornare. Mauris fermentum mi id sollicitudin viverra. Aenean dignissim sed ante eget dapibus. Sed dapibus nulla elementum, rutrum neque eu, gravida neque.</p>
                                                    </div>
                                                </div>

                                                <div class="media mt-4">
                                                    <!-- <img class="me-4" src="../src/assets/img/profile-25.jpeg" alt="pic1"> -->
                                                    <div class="avatar me-4">
                                                        <img alt="avatar" src="../src/assets/img/profile-25.jpeg" class="rounded-circle" />
                                                    </div>
                                                    <div class="media-body">
                                                        <h5 class="media-heading mb-1">Mary McDonald</h5>
                                                        <div class="meta-info mb-0">15 April</div>
                                                        <p class="media-text mt-2 mb-0">Fusce condimentum cursus mauris et ornare. Mauris fermentum mi id sollicitudin viverra. Aenean dignissim sed ante eget dapibus. Sed dapibus nulla elementum, rutrum neque eu, gravida neque.</p>
                                                    </div>
                                                </div>
                                                <!--  -->
                                            </div>
                                        </div>

                                        <div class="media mb-5 pb-5 primary-comment">
                                            <!-- <img class="me-4" src="../src/assets/img/profile-12.jpeg" alt="pic1"> -->
                                            <div class="avatar me-4">
                                                <img alt="avatar" src="../src/assets/img/profile-12.jpeg" class="rounded-circle" />
                                            </div>
                                            <div class="media-body">
                                                <h5 class="media-heading mb-1">Kelly Young</h5>
                                                <div class="meta-info mb-0">12 April</div>
                                                <p class="media-text mt-2 mb-0">Fusce condimentum cursus mauris et ornare. Mauris fermentum mi id sollicitudin viverra. Aenean dignissim sed ante eget dapibus. Sed dapibus nulla elementum, rutrum neque eu, gravida neque.</p>

                                                <button class="btn btn-success btn-icon btn-reply btn-rounded">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg>
                                                </button>

                                                <!--  -->
                                                <div class="media mt-4">
                                                    <!-- <img class="me-4" src="../src/assets/img/profile-30.png" alt="pic1"> -->
                                                    <div class="avatar me-4">
                                                        <img alt="avatar" src="../src/assets/img/profile-21.jpeg" class="rounded-circle" />
                                                    </div>
                                                    <div class="media-body">
                                                        <h5 class="media-heading mb-1">Andy King</h5>
                                                        <div class="meta-info mb-0">13 April</div>
                                                        <p class="media-text mt-2 mb-0">Fusce condimentum cursus mauris et ornare. Mauris fermentum mi id sollicitudin viverra. Aenean dignissim sed ante eget dapibus. Sed dapibus nulla elementum, rutrum neque eu, gravida neque.</p>
                                                    </div>
                                                </div>
                                                <!--  -->
                                                
                                            </div>
                                        </div>

                                        <div class="media mb-5 pb-5 primary-comment">
                                            <!-- <img class="me-4" src="../src/assets/img/profile-9.jpeg" alt="pic1"> -->
                                            <div class="avatar me-4">
                                                <img alt="avatar" src="../src/assets/img/profile-9.jpeg" class="rounded-circle" />
                                            </div>
                                            <div class="media-body">
                                                <h5 class="media-heading mb-1">Alma Clarke</h5>
                                                <div class="meta-info mb-0">10 April</div>
                                                <p class="media-text mt-2 mb-0">Fusce condimentum cursus mauris et ornare. Mauris fermentum mi id sollicitudin viverra. Aenean dignissim sed ante eget dapibus. Sed dapibus nulla elementum, rutrum neque eu, gravida neque.</p>

                                                <button class="btn btn-success btn-icon btn-reply btn-rounded">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg>
                                                </button>
                                                
                                            </div>
                                        </div>

                                        <div class="post-pagination">

                                            <div class="pagination-no_spacing">

                                                <ul class="pagination">
                                                    <li><a href="javascript:void(0);" class="prev"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-left"><polyline points="15 18 9 12 15 6"></polyline></svg></a></li>
                                                    <li><a href="javascript:void(0);">1</a></li>
                                                    <li><a href="javascript:void(0);" class="active">2</a></li>
                                                    <li><a href="javascript:void(0);">3</a></li>
                                                    <li><a href="javascript:void(0);" class="next"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg></a></li>
                                                </ul>
        
                                            </div>
                                            
                                        </div>
                                        

                                    </div>
                                    
                                    <div class="post-form mt-5">

                                        <div class="section add-comment">
                                            <div class="info">
                                                <h6 class="">Add Comment</h6>
                                                <p>Add your <span class="text-success">comment</span> to this post.</p>

                                                <div class="row mt-4">

                                                        <div class="col-md-12">
                                                        <div class="mb-3">
                                                            <label class="form-label">Write Comment</label>
                                                            <textarea class="form-control" cols="30" rows="10"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label class="form-label">Name</label>
                                                            <input type="text" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label class="form-label">Email</label>
                                                            <input type="email" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="text-end mt-4">
                                                    <button class="btn btn-primary me-3">Clear</button>
                                                    <button class="btn btn-success">Add Comment</button>
                                                </div>
                                            </div>
                                        </div>

                                        
                                    </div>
                                    
                                </div>
                                
                            </div>
                                
                            
                        </div>
                        
                    </div>

                </div>

            </div>
            
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
    
    