<?php

   session_start();
   if(empty($_SESSION['login'])) {
      header("Location: ../auth/login.php");
   }
   

?>

<!DOCTYPE html>
<!--
Author: Keenthemes
Product Name: Metronic | Bootstrap HTML, VueJS, React, Angular, Asp.Net Core, Blazor, Django, Flask & Laravel Admin Dashboard Theme
Purchase: https://1.envato.market/EA4JP
Website: http://www.keenthemes.com
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
License: For each use you must have a valid license purchased only from above link in order to legally use the theme for your project.
-->
<html lang="en">
<!--begin::Head-->

<head>
   <base href="" />
   <title>HnD Computer - Admin</title>
   <meta charset="utf-8" />
   <meta name="description" content="The most advanced Bootstrap Admin Theme on Themeforest trusted by 100,000 beginners and professionals. Multi-demo, Dark Mode, RTL support and complete React, Angular, Vue, Asp.Net Core, Blazor, Django, Flask & Laravel versions. Grab your copy now and get life-time updates for free." />
   <meta name="keywords" content="metronic, bootstrap, bootstrap 5, angular, VueJs, React, Asp.Net Core, Blazor, Django, Flask & Laravel starter kits, admin themes, web design, figma, web development, free templates, free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button, bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon" />
   <meta name="viewport" content="width=device-width, initial-scale=1" />
   <meta property="og:locale" content="en_US" />
   <meta property="og:type" content="article" />
   <meta property="og:title" content="Metronic | Bootstrap HTML, VueJS, React, Angular, Asp.Net Core, Blazor, Django, Flask & Laravel Admin Dashboard Theme" />
   <meta property="og:url" content="https://keenthemes.com/metronic" />
   <meta property="og:site_name" content="Keenthemes | Metronic" />
   <link rel="canonical" href="https://preview.keenthemes.com/metronic8" />
   <link rel="shortcut icon" href="../../assets/img/brand.png" />

   <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.css" rel="stylesheet"/> -->

   <!--begin::Fonts-->
   <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
   <!--end::Fonts-->
   <!--begin::Vendor Stylesheets(used by this page)-->
   <link href="../assets/plugins/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet" type="text/css" />
   <link href="../assets/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />
   <!--end::Vendor Stylesheets-->
   <!--begin::Global Stylesheets Bundle(used by all pages)-->
   <link href="../assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
   <link href="../assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
   <!--end::Global Stylesheets Bundle-->
</head>
<!--end::Head-->
<!--begin::Body-->

<body id="kt_app_body" data-kt-app-layout="dark-sidebar" data-kt-app-header-fixed="true" data-kt-app-sidebar-enabled="true" data-kt-app-sidebar-fixed="true" data-kt-app-sidebar-hoverable="true" data-kt-app-sidebar-push-header="true" data-kt-app-sidebar-push-toolbar="true" data-kt-app-sidebar-push-footer="true" data-kt-app-toolbar-enabled="true" class="app-default">
   <!--begin::Theme mode setup on page load-->
   <script>
      var defaultThemeMode = "light";
      var themeMode;
      if (document.documentElement) {
         if (document.documentElement.hasAttribute("data-theme-mode")) {
            themeMode = document.documentElement.getAttribute("data-theme-mode");
         } else {
            if (localStorage.getItem("data-theme") !== null) {
               themeMode = localStorage.getItem("data-theme");
            } else {
               themeMode = defaultThemeMode;
            }
         }
         if (themeMode === "system") {
            themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light";
         }
         document.documentElement.setAttribute("data-theme", themeMode);
      }
   </script>
   <!--end::Theme mode setup on page load-->
   <!--begin::App-->
   <div class="d-flex flex-column flex-root app-root" id="kt_app_root">
      <!--begin::Page-->
      <div class="app-page flex-column flex-column-fluid" id="kt_app_page">
         <!--begin::Header-->
         <div id="kt_app_header" class="app-header">
            <!--begin::Header container-->
            <div class="app-container container-fluid d-flex align-items-stretch justify-content-between" id="kt_app_header_container">
               <!--begin::sidebar mobile toggle-->
               <div class="d-flex align-items-center d-lg-none ms-n2 me-2" title="Show sidebar menu">
                  <div class="btn btn-icon btn-active-color-primary w-35px h-35px" id="kt_app_sidebar_mobile_toggle">
                     <!--begin::Svg Icon | path: icons/duotune/abstract/abs015.svg-->
                     <span class="svg-icon svg-icon-1">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path d="M21 7H3C2.4 7 2 6.6 2 6V4C2 3.4 2.4 3 3 3H21C21.6 3 22 3.4 22 4V6C22 6.6 21.6 7 21 7Z" fill="currentColor" />
                           <path opacity="0.3" d="M21 14H3C2.4 14 2 13.6 2 13V11C2 10.4 2.4 10 3 10H21C21.6 10 22 10.4 22 11V13C22 13.6 21.6 14 21 14ZM22 20V18C22 17.4 21.6 17 21 17H3C2.4 17 2 17.4 2 18V20C2 20.6 2.4 21 3 21H21C21.6 21 22 20.6 22 20Z" fill="currentColor" />
                        </svg>
                     </span>
                     <!--end::Svg Icon-->
                  </div>
               </div>
               <!--end::sidebar mobile toggle-->
               <!--begin::Mobile logo-->
               <div class="d-flex align-items-center flex-grow-1 flex-lg-grow-0">
                  <a href="../../demo1/dist/index.html" class="d-lg-none">
                     <img alt="Logo" src="../assets/media/logos/default-small.svg" class="h-30px" />
                  </a>
               </div>   
               <!--end::Mobile logo-->
               <!--begin::Header wrapper-->
               <div class="d-flex align-items-stretch justify-content-between flex-lg-grow-1" id="kt_app_header_wrapper">
                  <!--begin::Menu wrapper-->
                  <div class="app-header-menu app-header-mobile-drawer align-items-stretch" data-kt-drawer="true" data-kt-drawer-name="app-header-menu" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="250px" data-kt-drawer-direction="end" data-kt-drawer-toggle="#kt_app_header_menu_toggle" data-kt-swapper="true" data-kt-swapper-mode="{default: 'append', lg: 'prepend'}" data-kt-swapper-parent="{default: '#kt_app_body', lg: '#kt_app_header_wrapper'}">

                  </div>
                  <!--end::Menu wrapper-->
                  <!--begin::Navbar-->
                  <div class="app-navbar flex-shrink-0">

                     <!--begin::User menu-->
                     <div class="app-navbar-item ms-1 ms-lg-3" id="kt_header_user_menu_toggle">
                        <!--begin::Menu wrapper-->
                        <div class="cursor-pointer symbol symbol-35px symbol-md-40px" data-kt-menu-trigger="click" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
                           <img src="../assets/media/avatars/300-1.jpg" alt="user" />
                        </div>
                        <!--begin::User account menu-->
                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-color fw-semibold py-4 fs-6 w-275px" data-kt-menu="true">
                           <!--begin::Menu item-->
                           <div class="menu-item px-3">
                              <div class="menu-content d-flex align-items-center px-3">
                                 <!--begin::Avatar-->
                                 <div class="symbol symbol-50px me-5">
                                    <img alt="Logo" src="../assets/media/avatars/300-1.jpg" />
                                 </div>
                                 <!--end::Avatar-->
                                 <!--begin::Username-->
                                 <div class="d-flex flex-column">
                                    <div class="fw-bold d-flex align-items-center fs-5"><?= $_SESSION['username'] ?>

                                    </div>

                                 </div>
                                 <!--end::Username-->
                              </div>
                           </div>
                           <!--end::Menu item-->

                           <!--begin::Menu item-->
                           <div class="menu-item px-5 my-1">
                              <a href="update_admin.php" class="menu-link px-5">Account Settings</a>
                           </div>
                           <!--end::Menu item-->
                           <!--begin::Menu item-->
                           <div class="menu-item px-5">
                              <a href="../auth/logout.php" class="menu-link px-5">Sign Out</a>
                           </div>
                           <!--end::Menu item-->
                        </div>
                        <!--end::User account menu-->
                        <!--end::Menu wrapper-->
                     </div>
                     <!--end::User menu-->
                     <!--begin::Header menu toggle-->
                     <div class="app-navbar-item d-lg-none ms-2 me-n3" title="Show header menu">
                        <div class="btn btn-icon btn-active-color-primary w-35px h-35px" id="kt_app_header_menu_toggle">
                           <!--begin::Svg Icon | path: icons/duotune/text/txt001.svg-->
                           <span class="svg-icon svg-icon-1">
                              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <path d="M13 11H3C2.4 11 2 10.6 2 10V9C2 8.4 2.4 8 3 8H13C13.6 8 14 8.4 14 9V10C14 10.6 13.6 11 13 11ZM22 5V4C22 3.4 21.6 3 21 3H3C2.4 3 2 3.4 2 4V5C2 5.6 2.4 6 3 6H21C21.6 6 22 5.6 22 5Z" fill="currentColor" />
                                 <path opacity="0.3" d="M21 16H3C2.4 16 2 15.6 2 15V14C2 13.4 2.4 13 3 13H21C21.6 13 22 13.4 22 14V15C22 15.6 21.6 16 21 16ZM14 20V19C14 18.4 13.6 18 13 18H3C2.4 18 2 18.4 2 19V20C2 20.6 2.4 21 3 21H13C13.6 21 14 20.6 14 20Z" fill="currentColor" />
                              </svg>
                           </span>
                           <!--end::Svg Icon-->
                        </div>
                     </div>
                     <!--end::Header menu toggle-->
                  </div>
                  <!--end::Navbar-->
               </div>
               <!--end::Header wrapper-->
            </div>
            <!--end::Header container-->
         </div>
         <!--end::Header-->
         <!--begin::Wrapper-->
         <div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper">
            <!--begin::Sidebar-->
            <div id="kt_app_sidebar" class="app-sidebar flex-column" data-kt-drawer="true" data-kt-drawer-name="app-sidebar" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="225px" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_app_sidebar_mobile_toggle">
               <!--begin::Logo-->
               <div class="app-sidebar-logo px-6" id="kt_app_sidebar_logo">
                  <!--begin::Logo image-->
                  <a href="../../demo1/dist/index.html">
                     <img alt="Logo" src="../assets/img/brand.png" class="h-25px app-sidebar-logo-default" />
                     <img alt="Logo" src="../assets/img/brand.png" class="h-20px app-sidebar-logo-minimize" />
                  </a>
                  <!--end::Logo image-->
                  <!--begin::Sidebar toggle-->
                  <div id="kt_app_sidebar_toggle" class="app-sidebar-toggle btn btn-icon btn-shadow btn-sm btn-color-muted btn-active-color-primary body-bg h-30px w-30px position-absolute top-50 start-100 translate-middle rotate" data-kt-toggle="true" data-kt-toggle-state="active" data-kt-toggle-target="body" data-kt-toggle-name="app-sidebar-minimize">
                     <!--begin::Svg Icon | path: icons/duotune/arrows/arr079.svg-->
                     <span class="svg-icon svg-icon-2 rotate-180">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path opacity="0.5" d="M14.2657 11.4343L18.45 7.25C18.8642 6.83579 18.8642 6.16421 18.45 5.75C18.0358 5.33579 17.3642 5.33579 16.95 5.75L11.4071 11.2929C11.0166 11.6834 11.0166 12.3166 11.4071 12.7071L16.95 18.25C17.3642 18.6642 18.0358 18.6642 18.45 18.25C18.8642 17.8358 18.8642 17.1642 18.45 16.75L14.2657 12.5657C13.9533 12.2533 13.9533 11.7467 14.2657 11.4343Z" fill="currentColor" />
                           <path d="M8.2657 11.4343L12.45 7.25C12.8642 6.83579 12.8642 6.16421 12.45 5.75C12.0358 5.33579 11.3642 5.33579 10.95 5.75L5.40712 11.2929C5.01659 11.6834 5.01659 12.3166 5.40712 12.7071L10.95 18.25C11.3642 18.6642 12.0358 18.6642 12.45 18.25C12.8642 17.8358 12.8642 17.1642 12.45 16.75L8.2657 12.5657C7.95328 12.2533 7.95328 11.7467 8.2657 11.4343Z" fill="currentColor" />
                        </svg>
                     </span>
                     <!--end::Svg Icon-->
                  </div>
                  <!--end::Sidebar toggle-->
               </div>
               <!--end::Logo-->
               <!--begin::sidebar menu-->
               <div class="app-sidebar-menu overflow-hidden flex-column-fluid">
                  <!--begin::Menu wrapper-->
                  <div id="kt_app_sidebar_menu_wrapper" class="app-sidebar-wrapper hover-scroll-overlay-y my-5" data-kt-scroll="true" data-kt-scroll-activate="true" data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_app_sidebar_logo, #kt_app_sidebar_footer" data-kt-scroll-wrappers="#kt_app_sidebar_menu" data-kt-scroll-offset="5px" data-kt-scroll-save-state="true">
                     <!--begin::Menu-->
                     <div class="menu menu-column menu-rounded menu-sub-indention px-3" id="#kt_app_sidebar_menu" data-kt-menu="true" data-kt-menu-expand="false">

                        <!--begin:Menu item-->
                        <div class="menu-item ">
                           <!--begin:Menu link-->
                           <span class="menu-link active">
                              <span class="menu-icon">
                                 <!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
                                 <span class="svg-icon svg-icon-2">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                       <rect x="2" y="2" width="9" height="9" rx="2" fill="currentColor" />
                                       <rect opacity="0.3" x="13" y="2" width="9" height="9" rx="2" fill="currentColor" />
                                       <rect opacity="0.3" x="13" y="13" width="9" height="9" rx="2" fill="currentColor" />
                                       <rect opacity="0.3" x="2" y="13" width="9" height="9" rx="2" fill="currentColor" />
                                    </svg>
                                 </span>
                                 <!--end::Svg Icon-->
                              </span>
                              <span class="">
                                 <a class="menu-title" href="index.php">Dashboards</a>
                              </span>
                           </span>
                           <!--end:Menu link-->

                        </div>
                        <!--end:Menu item-->

                        <!--begin:Menu item-->
                        <div class="menu-item">
                           <!--begin:Menu link-->
                           <a class="menu-link" href="view_laptop.php">
                              <span class="menu-icon">
                                 <!--begin::Svg Icon | path: /var/www/preview.keenthemes.com/kt-products/docs/metronic/html/releases/2023-07-21-074234/core/html/src/media/icons/duotune/electronics/elc001.svg-->
                                 <span class="svg-icon svg-icon-2">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                       <path d="M20 19H4C2.9 19 2 18.1 2 17H22C22 18.1 21.1 19 20 19Z" fill="currentColor" />
                                       <path opacity="0.3" d="M20 5H4C3.4 5 3 5.4 3 6V17H21V6C21 5.4 20.6 5 20 5Z" fill="currentColor" />
                                    </svg>
                                 </span>
                                 <!--end::Svg Icon-->
                              </span>
                              <span class="menu-title">Data Laptop</span>
                           </a>
                           <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->

                        <!--begin:Menu item-->
                        <div class="menu-item">
                           <!--begin:Menu link-->
                           <a class="menu-link" href="view_kategori.php">
                              <span class="menu-icon">
                                 <!--begin::Svg Icon | path: icons/duotune/abstract/abs027.svg-->
                                 <span class="svg-icon svg-icon-2">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                       <path opacity="0.3" d="M21.25 18.525L13.05 21.825C12.35 22.125 11.65 22.125 10.95 21.825L2.75 18.525C1.75 18.125 1.75 16.725 2.75 16.325L4.04999 15.825L10.25 18.325C10.85 18.525 11.45 18.625 12.05 18.625C12.65 18.625 13.25 18.525 13.85 18.325L20.05 15.825L21.35 16.325C22.35 16.725 22.35 18.125 21.25 18.525ZM13.05 16.425L21.25 13.125C22.25 12.725 22.25 11.325 21.25 10.925L13.05 7.62502C12.35 7.32502 11.65 7.32502 10.95 7.62502L2.75 10.925C1.75 11.325 1.75 12.725 2.75 13.125L10.95 16.425C11.65 16.725 12.45 16.725 13.05 16.425Z" fill="currentColor" />
                                       <path d="M11.05 11.025L2.84998 7.725C1.84998 7.325 1.84998 5.925 2.84998 5.525L11.05 2.225C11.75 1.925 12.45 1.925 13.15 2.225L21.35 5.525C22.35 5.925 22.35 7.325 21.35 7.725L13.05 11.025C12.45 11.325 11.65 11.325 11.05 11.025Z" fill="currentColor" />
                                    </svg>
                                 </span>
                                 <!--end::Svg Icon-->
                              </span>
                              <span class="menu-title">Kategori Laptop</span>
                           </a>
                           <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
      
                        <div class="menu-item menu-accordion" data-kt-menu-trigger="click">

                           <!--begin:Menu link-->
                           <span class="menu-link">
                              <span class="menu-icon">
                                 <!--begin::Svg Icon | path: icons/duotune/communication/com005.svg-->
                                 <span class="svg-icon svg-icon-2">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                       <path d="M20 14H18V10H20C20.6 10 21 10.4 21 11V13C21 13.6 20.6 14 20 14ZM21 19V17C21 16.4 20.6 16 20 16H18V20H20C20.6 20 21 19.6 21 19ZM21 7V5C21 4.4 20.6 4 20 4H18V8H20C20.6 8 21 7.6 21 7Z" fill="currentColor" />
                                       <path opacity="0.3" d="M17 22H3C2.4 22 2 21.6 2 21V3C2 2.4 2.4 2 3 2H17C17.6 2 18 2.4 18 3V21C18 21.6 17.6 22 17 22ZM10 7C8.9 7 8 7.9 8 9C8 10.1 8.9 11 10 11C11.1 11 12 10.1 12 9C12 7.9 11.1 7 10 7ZM13.3 16C14 16 14.5 15.3 14.3 14.7C13.7 13.2 12 12 10.1 12C8.10001 12 6.49999 13.1 5.89999 14.7C5.59999 15.3 6.19999 16 7.39999 16H13.3Z" fill="currentColor" />
                                    </svg>
                                 </span>
                                 <!--end::Svg Icon-->
                              </span>
                              <span class="menu-title">Jenis Fitur</span>
                              <span class="menu-arrow"></span>
                           </span>
                           <!--end:Menu link-->
                           <!--begin:Menu sub-->
                           <div class="menu-sub menu-sub-accordion">
                              <!--begin:Menu item-->
                              <div class="menu-item">
                                 <!--begin:Menu link-->
                                 <a class="menu-link" href="view_fitur.php?jenis_fitur=RAM">
                                    <span class="menu-bullet">
                                       <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">RAM</span>
                                 </a>
                                 <!--end:Menu link-->
                              </div>
                              <!--end:Menu item-->
                              <!--begin:Menu item-->
                              <div class="menu-item">
                                 <!--begin:Menu link-->
                                 <a class="menu-link" href="view_fitur.php?jenis_fitur=Processor">
                                    <span class="menu-bullet">
                                       <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">Processor</span>
                                 </a>
                                 <!--end:Menu link-->
                              </div>
                              <!--end:Menu item-->
                              <!--begin:Menu item-->
                              <div class="menu-item">
                                 <!--begin:Menu link-->
                                 <a class="menu-link" href="view_fitur.php?jenis_fitur=Storage">
                                    <span class="menu-bullet">
                                       <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">Storage</span>
                                 </a>
                                 <!--end:Menu link-->
                              </div>
                              <!--end:Menu item-->
                              <!--begin:Menu item-->
                              <div class="menu-item">
                                 <!--begin:Menu link-->
                                 <a class="menu-link" href="view_fitur.php?jenis_fitur=VGA">
                                    <span class="menu-bullet">
                                       <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">VGA</span>
                                 </a>
                                 <!--end:Menu link-->
                              </div>
                              <!--end:Menu item-->
                              <!--begin:Menu item-->
                              <div class="menu-item">
                                 <!--begin:Menu link-->
                                 <a class="menu-link" href="view_fitur.php?jenis_fitur=Screen">
                                    <span class="menu-bullet">
                                       <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">Screen</span>
                                 </a>
                                 <!--end:Menu link-->
                              </div>
                              <!--end:Menu item-->
                           </div>
                           <!--end:Menu sub-->
                        </div>


                     </div>
                     <!--end::Menu-->
                  </div>
                  <!--end::Menu wrapper-->
               </div>
               <!--end::sidebar menu-->

            </div>
            <!--end::Sidebar-->