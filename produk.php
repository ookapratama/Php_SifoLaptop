<?php
include 'controllers/admin/function.php';
include 'header.php';


?>

<!--begin::Body-->

<body id="kt_body" data-bs-spy="scroll" data-bs-target="#kt_landing_menu" class="bg-white position-relative app-blank">
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
   <!--begin::Root-->
   <div class="d-flex flex-column flex-root" id="kt_app_root">
      <!--begin::Header Section-->
      <div class="mb-0" id="home">
         <!--begin::Wrapper-->
         <div class="bgi-no-repeat bgi-size-contain bgi-position-x-center bgi-position-y-bottom landing-dark-bg" style="background-image: url(assets/media/svg/illustrations/landing.svg)">
            <!--begin::Header-->
            <div class="landing-header" data-kt-sticky="true" data-kt-sticky-name="landing-header" data-kt-sticky-offset="{default: '200px', lg: '300px'}">
               <!--begin::Container-->
               <div class="container">
                  <!--begin::Wrapper-->
                  <div class="d-flex align-items-center justify-content-between">
                     <!--begin::Logo-->
                     <div class="d-flex align-items-center flex-equal">
                        <!--begin::Mobile menu toggle-->
                        <button class="btn btn-icon btn-active-color-primary me-3 d-flex d-lg-none" id="kt_landing_menu_toggle">
                           <!--begin::Svg Icon | path: icons/duotune/abstract/abs015.svg-->
                           <span class="svg-icon svg-icon-2hx">
                              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <path d="M21 7H3C2.4 7 2 6.6 2 6V4C2 3.4 2.4 3 3 3H21C21.6 3 22 3.4 22 4V6C22 6.6 21.6 7 21 7Z" fill="currentColor" />
                                 <path opacity="0.3" d="M21 14H3C2.4 14 2 13.6 2 13V11C2 10.4 2.4 10 3 10H21C21.6 10 22 10.4 22 11V13C22 13.6 21.6 14 21 14ZM22 20V18C22 17.4 21.6 17 21 17H3C2.4 17 2 17.4 2 18V20C2 20.6 2.4 21 3 21H21C21.6 21 22 20.6 22 20Z" fill="currentColor" />
                              </svg>
                           </span>
                           <!--end::Svg Icon-->
                        </button>
                        <!--end::Mobile menu toggle-->
                        <!--begin::Logo image-->
                        <a href="#">
                           <img alt="Logo" src="assets/img/brand.png" class="logo-default h-25px h-lg-30px" />
                           <img alt="Logo" src="assets/img/brand.png" class="logo-sticky h-20px h-lg-25px" />
                        </a>
                        <!--end::Logo image-->
                     </div>
                     <!--end::Logo-->
                     <!--begin::Menu wrapper-->
                     <div class="d-lg-block" id="kt_header_nav_wrapper">
                        <div class="d-lg-block p-5 p-lg-0" data-kt-drawer="true" data-kt-drawer-name="landing-menu" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="200px" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_landing_menu_toggle" data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_body', lg: '#kt_header_nav_wrapper'}">
                           <!--begin::Menu-->
                           <div class="menu menu-column flex-nowrap menu-rounded menu-lg-row menu-title-gray-500 menu-state-title-primary nav nav-flush fs-5 fw-semibold" id="kt_landing_menu">
                              <!--begin::Menu item-->
                              <div class="menu-item">
                                 <!--begin::Menu link-->
                                 <a class="menu-link nav-link active py-3 px-4 px-xxl-6" href="index.php" data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true">Home</a>
                                 <!--end::Menu link-->
                              </div>
                              <!--end::Menu item-->
                              <!--begin::Menu item-->
                              <div class="menu-item">
                                 <!--begin::Menu link-->
                                 <a class="menu-link nav-link py-3 px-4 px-xxl-6" href="index.php" data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true">Cara Kerja</a>
                                 <!--end::Menu link-->
                              </div>
                              <!--end::Menu item-->
                              <!--begin::Menu item-->
                              <div class="menu-item">
                                 <!--begin::Menu link-->
                                 <a class="menu-link nav-link py-3 px-4 px-xxl-6" href="produk.php" data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true">Produk</a>
                                 <!--end::Menu link-->
                              </div>
                              <!--end::Menu item-->

                           </div>
                           <!--end::Menu-->
                        </div>
                     </div>
                     <!--end::Menu wrapper-->
                     <!--begin::Toolbar-->
                     <div class="flex-equal text-end ms-1">
                        <a href="../../demo1/dist/authentication/layouts/basic/sign-in.html" class="btn btn-success">Sign In</a>
                     </div>
                     <!--end::Toolbar-->
                  </div>
                  <!--end::Wrapper-->
               </div>
               <!--end::Container-->
            </div>
            <!--end::Header-->

         </div>
         <!--end::Wrapper-->
         <!--begin::Curve bottom-->
         <div class="landing-curve landing-dark-color mb-10 mb-lg-20">
            <svg viewBox="15 12 1470 48" fill="none" xmlns="http://www.w3.org/2000/svg">
               <path d="M0 11C3.93573 11.3356 7.85984 11.6689 11.7725 12H1488.16C1492.1 11.6689 1496.04 11.3356 1500 11V12H1488.16C913.668 60.3476 586.282 60.6117 11.7725 12H0V11Z" fill="currentColor"></path>
            </svg>
         </div>
         <!--end::Curve bottom-->
      </div>
      <!--end::Header Section-->


      <!--begin::Testimonials Section-->
      <div class="mt-20 mb-n10 position-relative z-index-2">
         <!--begin::Container-->
         <div class="container">
            <!--begin::Heading-->
            <div class="text-center mb-17">
               <!--begin::Title-->
               <h3 class="fs-2hx text-dark mb-5" id="produk" data-kt-scroll-offset="{default: 125, lg: 150}">Produk</h3>
               <!--end::Title-->
               <!--begin::Description-->
               <div class="fs-5 text-muted fw-bold">Save thousands to millions of bucks by using single tool
                  <br />for different amazing and great useful admin
               </div>
               <!--end::Description-->
            </div>
            <!--end::Heading-->
            <!--begin::Row-->
            <div class="row g-lg-10 mb-10 mb-lg-20">

               <?php

               if (isset($_GET['submit_search'])) {
                  $merk = $_GET['merk_laptop'];
                  $prosesor = $_GET['prosesor'];
                  $ram = $_GET['ram'];
                  $vga = $_GET['vga'];
                  $storage = $_GET['storage'];

                  $harga_awal = (float)preg_replace("/[^0-9]/", '', $_GET['harga_awal']);
                  $harga_maks = (float)preg_replace("/[^0-9]/", '', $_GET['harga_maks']);
                  // var_dump($ram);

                  $produks = select("SELECT laptop.*, 
                     ram_feature.nama_fitur AS ram,
                     prosesor_feature.nama_fitur AS prosesor,
                     storage_feature.nama_fitur AS storage,
                     vga_feature.nama_fitur AS vga,
                     screen_feature.nama_fitur AS screen,
                     kategori_laptop.nama_kategori
                     FROM laptop
                     JOIN fitur_laptop AS ram_feature ON laptop.ram_laptop = ram_feature.id_fitur 
                     JOIN fitur_laptop AS prosesor_feature ON laptop.prosesor_laptop = prosesor_feature.id_fitur 
                     JOIN fitur_laptop AS storage_feature ON laptop.storage_laptop = storage_feature.id_fitur 
                     JOIN fitur_laptop AS vga_feature ON laptop.vga_laptop = vga_feature.id_fitur
                     JOIN fitur_laptop AS screen_feature ON laptop.screen_laptop = screen_feature.id_fitur 
                     LEFT JOIN kategori_laptop ON laptop.kategori_id = kategori_laptop.id_kategori
                     WHERE
                     merk_laptop LIKE '%" . $merk . "%'OR
                     model_laptop LIKE '%" . $merk . "%' AND
                     ram_feature.nama_fitur LIKE '%" . $ram . "%'AND
                     prosesor_feature.nama_fitur LIKE '%" . $prosesor . "%'AND
                     storage_feature.nama_fitur LIKE '%" . $storage . "%'AND
                     vga_feature.nama_fitur LIKE '%" . $vga . "%'AND
                     screen_feature.nama_fitur LIKE '%" . $screen . "%'
                      ");
                  // var_dump($produks);
               } else {

                  $produks = select("SELECT laptop.*, 
                     ram_feature.nama_fitur AS ram,
                     prosesor_feature.nama_fitur AS prosesor,
                     storage_feature.nama_fitur AS storage,
                     vga_feature.nama_fitur AS vga,
                     screen_feature.nama_fitur AS screen,
                     kategori_laptop.nama_kategori
                     FROM laptop
                     JOIN fitur_laptop AS ram_feature ON laptop.ram_laptop = ram_feature.id_fitur 
                     JOIN fitur_laptop AS prosesor_feature ON laptop.prosesor_laptop = prosesor_feature.id_fitur 
                     JOIN fitur_laptop AS storage_feature ON laptop.storage_laptop = storage_feature.id_fitur 
                     JOIN fitur_laptop AS vga_feature ON laptop.vga_laptop = vga_feature.id_fitur
                     JOIN fitur_laptop AS screen_feature ON laptop.screen_laptop = screen_feature.id_fitur 
                     LEFT JOIN kategori_laptop ON laptop.kategori_id = kategori_laptop.id_kategori");
               }

               while ($produk = mysqli_fetch_assoc($produks)) :
               ?>
                  <!--begin::Col-->
                  <div class="col-lg-4">
                     <!--begin::Testimonial-->
                     <!--begin::Modal - New Card-->
                     <div class="bg-primary border shadow-lg rounded" style="width: 22rem;">
                        <!--begin::Modal dialog-->
                        <div class="modal-dialog modal-dialog-centered mw-650px">
                           <!--begin::Modal content-->
                           <div class="modal-content">
                              <!--begin::Modal header-->
                              <div class="modal-header m-3 py-5 px-3">
                                 <!--begin::Modal title-->
                                 <h2><?= $produk['merk_laptop'] ?> - <?= $produk['model_laptop'] ?> <br> <?= $produk['nama_kategori'] ?></h2>
                                 <!--end::Modal title-->

                              </div>
                              <!--end::Modal header-->
                              <!--begin::Modal body-->
                              <div class="modal-body scroll-y mx-5 my-3    ">

                                 <img src="admin/img/<?= $produk['gambar_laptop'] ?>" style="width: 15rem;" class="card-img-top d-flex justify-content-center mx-auto" alt="...">
                                 <div class="text-left my-3">
                                    <span class="text-muted d-block">Processor : <?= $produk['prosesor'] ?></span>
                                    <span class="text-muted d-block">Ram : <?= $produk['ram'] ?> </span>
                                    <span class="text-muted d-block">Storage : <?= $produk['storage'] ?></span>
                                    <span class="text-muted d-block">VGA Card : <?= $produk['vga'] ?></span>
                                    <span class="text-muted d-block">Size Screen : <?= $produk['screen'] ?></span>
                                 </div>
                                 <div class="text-center">
                                    <h3>Rp. <?= number_format($produk['harga_laptop'], 0, ',', '.') ?></h3>
                                 </div>
                              </div>
                              <!--end::Modal body-->
                              <div class="d-grid gap-2">
                                 <a class="btn btn-primary" onclick="dataId('<?= $produk['merk_laptop'] ?>', '<?= $produk['model_laptop'] ?>', '<?= $produk['gambar_laptop'] ?>', '<?= $produk['nama_kategori'] ?>', '<?= $produk['no_serial'] ?>', '<?= $produk['prosesor'] ?>', '<?= $produk['ram'] ?>', '<?= $produk['vga'] ?>', '<?= $produk['screen'] ?>', '<?= $produk['harga_laptop'] ?>')" type="button" data-bs-toggle="modal" data-bs-target="#kt_modal_new_card" href="javascript:void(0)">More Info</a>
                              </div>
                           </div>
                           <!--end::Modal content-->
                        </div>
                        <!--end::Modal dialog-->
                     </div>
                     <!--end::Modal - New Card-->
                     <!--end::Testimonial-->
                  </div>
                  <!--end::Col-->
               <?php endwhile; ?>



            </div>
            <!--end::Row-->

         </div>
         <!--end::Container-->
      </div>
      <!--end::Testimonials Section-->
      <!--begin::Footer Section-->
      <div class="mb-0">
         <!--begin::Curve top-->
         <div class="landing-curve landing-dark-color">
            <svg viewBox="15 -1 1470 48" fill="none" xmlns="http://www.w3.org/2000/svg">
               <path d="M1 48C4.93573 47.6644 8.85984 47.3311 12.7725 47H1489.16C1493.1 47.3311 1497.04 47.6644 1501 48V47H1489.16C914.668 -1.34764 587.282 -1.61174 12.7725 47H1V48Z" fill="currentColor"></path>
            </svg>
         </div>
         <!--end::Curve top-->
         <!--begin::Wrapper-->
         <div class="landing-dark-bg pt-20">
            <!--begin::Container-->
            <div class="container">
               <!--begin::Row-->
               <div class="row py-10 py-lg-20">
                  <!--begin::Col-->
                  <div class="col-lg-6 pe-lg-16 mb-10 mb-lg-0">
                     <!--begin::Block-->
                     <div class="rounded landing-dark-border p-9 mb-10">
                        <!--begin::Title-->
                        <h2 class="text-white">Would you need a Custom License?</h2>
                        <!--end::Title-->
                        <!--begin::Text-->
                        <span class="fw-normal fs-4 text-gray-700">Email us to
                           <a href="https://keenthemes.com/support" class="text-white opacity-50 text-hover-primary">support@keenthemes.com</a></span>
                        <!--end::Text-->
                     </div>
                     <!--end::Block-->
                     <!--begin::Block-->
                     <div class="rounded landing-dark-border p-9">
                        <!--begin::Title-->
                        <h2 class="text-white">How About a Custom Project?</h2>
                        <!--end::Title-->
                        <!--begin::Text-->
                        <span class="fw-normal fs-4 text-gray-700">Use Our Custom Development Service.
                           <a href="../../demo1/dist/pages/user-profile/overview.html" class="text-white opacity-50 text-hover-primary">Click to Get a Quote</a></span>
                        <!--end::Text-->
                     </div>
                     <!--end::Block-->
                  </div>
                  <!--end::Col-->
                  <!--begin::Col-->
                  <div class="col-lg-6 ps-lg-16">
                     <!--begin::Navs-->
                     <div class="d-flex justify-content-center">
                        <!--begin::Links-->
                        <div class="d-flex fw-semibold flex-column me-20">
                           <!--begin::Subtitle-->
                           <h4 class="fw-bold text-gray-400 mb-6">More for Metronic</h4>
                           <!--end::Subtitle-->
                           <!--begin::Link-->
                           <a href="https://keenthemes.com/faqs" class="text-white opacity-50 text-hover-primary fs-5 mb-6">FAQ</a>
                           <!--end::Link-->
                           <!--begin::Link-->
                           <a href="https://preview.keenthemes.com/html/metronic/docs" class="text-white opacity-50 text-hover-primary fs-5 mb-6">Documentaions</a>
                           <!--end::Link-->
                           <!--begin::Link-->
                           <a href="https://www.youtube.com/c/KeenThemesTuts/videos" class="text-white opacity-50 text-hover-primary fs-5 mb-6">Video Tuts</a>
                           <!--end::Link-->
                           <!--begin::Link-->
                           <a href="https://preview.keenthemes.com/html/metronic/docs/getting-started/changelog" class="text-white opacity-50 text-hover-primary fs-5 mb-6">Changelog</a>
                           <!--end::Link-->
                           <!--begin::Link-->
                           <a href="https://devs.keenthemes.com/" class="text-white opacity-50 text-hover-primary fs-5 mb-6">Support Forum</a>
                           <!--end::Link-->
                           <!--begin::Link-->
                           <a href="https://keenthemes.com/blog" class="text-white opacity-50 text-hover-primary fs-5">Blog</a>
                           <!--end::Link-->
                        </div>
                        <!--end::Links-->
                        <!--begin::Links-->
                        <div class="d-flex fw-semibold flex-column ms-lg-20">
                           <!--begin::Subtitle-->
                           <h4 class="fw-bold text-gray-400 mb-6">Stay Connected</h4>
                           <!--end::Subtitle-->
                           <!--begin::Link-->
                           <a href="https://www.facebook.com/keenthemes" class="mb-6">
                              <img src="assets/media/svg/brand-logos/facebook-4.svg" class="h-20px me-2" alt="" />
                              <span class="text-white opacity-50 text-hover-primary fs-5 mb-6">Facebook</span>
                           </a>
                           <!--end::Link-->
                           <!--begin::Link-->
                           <a href="https://github.com/KeenthemesHub" class="mb-6">
                              <img src="assets/media/svg/brand-logos/github.svg" class="h-20px me-2" alt="" />
                              <span class="text-white opacity-50 text-hover-primary fs-5 mb-6">Github</span>
                           </a>
                           <!--end::Link-->
                           <!--begin::Link-->
                           <a href="https://twitter.com/keenthemes" class="mb-6">
                              <img src="assets/media/svg/brand-logos/twitter.svg" class="h-20px me-2" alt="" />
                              <span class="text-white opacity-50 text-hover-primary fs-5 mb-6">Twitter</span>
                           </a>
                           <!--end::Link-->
                           <!--begin::Link-->
                           <a href="https://dribbble.com/keenthemes" class="mb-6">
                              <img src="assets/media/svg/brand-logos/dribbble-icon-1.svg" class="h-20px me-2" alt="" />
                              <span class="text-white opacity-50 text-hover-primary fs-5 mb-6">Dribbble</span>
                           </a>
                           <!--end::Link-->
                           <!--begin::Link-->
                           <a href="https://www.instagram.com/keenthemes" class="mb-6">
                              <img src="assets/media/svg/brand-logos/instagram-2-1.svg" class="h-20px me-2" alt="" />
                              <span class="text-white opacity-50 text-hover-primary fs-5 mb-6">Instagram</span>
                           </a>
                           <!--end::Link-->
                        </div>
                        <!--end::Links-->
                     </div>
                     <!--end::Navs-->
                  </div>
                  <!--end::Col-->
               </div>
               <!--end::Row-->
            </div>
            <!--end::Container-->
            <!--begin::Separator-->
            <div class="landing-dark-separator"></div>
            <!--end::Separator-->
            <!--begin::Container-->
            <div class="container">
               <!--begin::Wrapper-->
               <div class="d-flex flex-column flex-md-row flex-stack py-7 py-lg-10">
                  <!--begin::Copyright-->
                  <div class="d-flex align-items-center order-2 order-md-1">
                     <!--begin::Logo-->
                     <a href="#">
                        <img alt="Logo" src="assets/img/brand.png" class="h-15px h-md-20px" />
                     </a>
                     <!--end::Logo image-->
                     <!--begin::Logo image-->
                     <span class="mx-5 fs-6 fw-semibold text-gray-600 pt-1" href="#">&copy; 2023 HnD Computer.</span>
                     <!--end::Logo image-->
                  </div>
                  <!--end::Copyright-->
                  <!--begin::Menu-->
                  <ul class="menu menu-gray-600 menu-hover-primary fw-semibold fs-6 fs-md-5 order-1 mb-5 mb-md-0">
                     <li class="menu-item">
                        <a href="https://keenthemes.com" target="_blank" class="menu-link px-2">About</a>
                     </li>
                     <li class="menu-item mx-5">
                        <a href="https://devs.keenthemes.com" target="_blank" class="menu-link px-2">Support</a>
                     </li>
                     <li class="menu-item">
                        <a href="" target="_blank" class="menu-link px-2">Purchase</a>
                     </li>
                  </ul>
                  <!--end::Menu-->
               </div>
               <!--end::Wrapper-->
            </div>
            <!--end::Container-->
         </div>
         <!--end::Wrapper-->
      </div>
      <!--end::Footer Section-->
      <!--begin::Scrolltop-->
      <div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
         <!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
         <span class="svg-icon">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
               <rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="currentColor" />
               <path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="currentColor" />
            </svg>
         </span>
         <!--end::Svg Icon-->
      </div>
      <!--end::Scrolltop-->
   </div>
   <!--end::Root-->
   <!--begin::Engage drawers-->
   <!--begin::Demos drawer-->
   <div id="kt_engage_demos" class="bg-body" data-kt-drawer="true" data-kt-drawer-name="explore" data-kt-drawer-activate="true" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'350px', 'lg': '475px'}" data-kt-drawer-direction="end" data-kt-drawer-toggle="#kt_engage_demos_toggle" data-kt-drawer-close="#kt_engage_demos_close">
      <!--begin::Card-->
      <div class="card shadow-none rounded-0 w-100">
         <!--begin::Header-->
         <div class="card-header" id="kt_engage_demos_header">
            <h3 class="card-title fw-bold text-gray-700">Demos</h3>
            <div class="card-toolbar">
               <button type="button" class="btn btn-sm btn-icon btn-active-color-primary h-40px w-40px me-n6" id="kt_engage_demos_close">
                  <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                  <span class="svg-icon svg-icon-2">
                     <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
                        <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor" />
                     </svg>
                  </span>
                  <!--end::Svg Icon-->
               </button>
            </div>
         </div>
         <!--end::Header-->
         <!--begin::Body-->
         <div class="card-body" id="kt_engage_demos_body">
            <!--begin::Content-->
            <div id="kt_explore_scroll" class="scroll-y me-n5 pe-5" data-kt-scroll="true" data-kt-scroll-height="auto" data-kt-scroll-wrappers="#kt_engage_demos_body" data-kt-scroll-dependencies="#kt_engage_demos_header" data-kt-scroll-offset="5px">
               <!--begin::Wrapper-->
               <div class="mb-0">
                  <!--begin::Heading-->
                  <div class="mb-7">
                     <div class="d-flex flex-stack">
                        <h3 class="mb-0">Metronic Licenses</h3>
                        <a href="https://themeforest.net/licenses/standard" class="fw-semibold" target="_blank">License FAQs</a>
                     </div>
                  </div>
                  <!--end::Heading-->
                  <!--begin::License-->
                  <div class="rounded border border-dashed border-gray-300 py-4 px-6 mb-5">
                     <div class="d-flex flex-stack">
                        <div class="d-flex flex-column">
                           <div class="d-flex align-items-center mb-1">
                              <div class="fs-6 fw-semibold text-gray-800 fw-semibold mb-0 me-1">Regular License</div>
                              <i class="text-gray-400 fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="popover" data-bs-custom-class="popover-inverse" data-bs-trigger="hover" data-bs-placement="top" data-bs-content="Use, by you or one client in a single end product which end users are not charged for"></i>
                           </div>
                           <div class="fs-7 text-muted">For single end product used by you or one client</div>
                        </div>
                        <div class="text-nowrap">
                           <span class="text-muted fs-7 fw-semibold me-n1">$</span>
                           <span class="text-dark fs-1 fw-bold">39</span>
                        </div>
                     </div>
                  </div>
                  <!--end::License-->
                  <!--begin::License-->
                  <div class="rounded border border-dashed border-gray-300 py-4 px-6 mb-5">
                     <div class="d-flex flex-stack">
                        <div class="d-flex flex-column">
                           <div class="d-flex align-items-center mb-1">
                              <div class="fs-6 fw-semibold text-gray-800 fw-semibold mb-0 me-1">Extended License</div>
                              <i class="text-gray-400 fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="popover" data-bs-custom-class="popover-inverse" data-bs-trigger="hover" data-bs-placement="top" data-bs-content="Use, by you or one client, in a single end product which end users can be charged for."></i>
                           </div>
                           <div class="fs-7 text-muted">For single SaaS app with paying users</div>
                        </div>
                        <div class="text-nowrap">
                           <span class="text-muted fs-7 fw-semibold me-n1">$</span>
                           <span class="text-dark fs-1 fw-bold">969</span>
                        </div>
                     </div>
                  </div>
                  <!--end::License-->
                  <!--begin::License-->
                  <div class="rounded border border-dashed border-gray-300 py-4 px-6 mb-5">
                     <div class="d-flex flex-stack">
                        <div class="d-flex flex-column">
                           <div class="d-flex align-items-center mb-1">
                              <div class="fs-6 fw-semibold text-gray-800 fw-semibold mb-0 me-1">Custom License</div>
                           </div>
                           <div class="fs-7 text-muted">Reach us for custom license offers.</div>
                        </div>
                        <div class="text-nowrap">
                           <a href="https://devs.keenthemes.com" class="btn btn-sm btn-success" target="_blank">Contact Us</a>
                        </div>
                     </div>
                  </div>
                  <!--end::License-->
                  <!--begin::Purchase-->
                  <a href="https://1.envato.market/EA4JP" class="btn btn-primary fw-bold mb-15 w-100">Buy Now</a>
                  <!--end::Purchase-->
                  <!--begin::Demos-->
                  <div class="mb-0">
                     <h3 class="fw-bold text-center mb-6">Metronic Demos</h3>
                     <!--begin::Row-->
                     <div class="row g-5">
                        <!--begin::Col-->
                        <div class="col-6">
                           <!--begin::Demo-->
                           <div class="overlay overflow-hidden position-relative border border-4 border-success rounded">
                              <div class="overlay-wrapper">
                                 <img src="assets/media/demos/demo1.png" alt="demo" class="w-100" />
                              </div>
                              <div class="overlay-layer bg-dark bg-opacity-10">
                                 <a href="https://preview.keenthemes.com/metronic8/demo1" class="btn btn-sm btn-success shadow">Demo 1</a>
                              </div>
                           </div>
                           <!--end::Demo-->
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-6">
                           <!--begin::Demo-->
                           <div class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
                              <div class="overlay-wrapper">
                                 <img src="assets/media/demos/demo2.png" alt="demo" class="w-100" />
                              </div>
                              <div class="overlay-layer bg-dark bg-opacity-10">
                                 <a href="https://preview.keenthemes.com/metronic8/demo2" class="btn btn-sm btn-success shadow">Demo 2</a>
                              </div>
                           </div>
                           <!--end::Demo-->
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-6">
                           <!--begin::Demo-->
                           <div class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
                              <div class="overlay-wrapper">
                                 <img src="assets/media/demos/demo3.png" alt="demo" class="w-100" />
                              </div>
                              <div class="overlay-layer bg-dark bg-opacity-10">
                                 <a href="https://preview.keenthemes.com/metronic8/demo3" class="btn btn-sm btn-success shadow">Demo 3</a>
                              </div>
                           </div>
                           <!--end::Demo-->
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-6">
                           <!--begin::Demo-->
                           <div class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
                              <div class="overlay-wrapper">
                                 <img src="assets/media/demos/demo4.png" alt="demo" class="w-100" />
                              </div>
                              <div class="overlay-layer bg-dark bg-opacity-10">
                                 <a href="https://preview.keenthemes.com/metronic8/demo4" class="btn btn-sm btn-success shadow">Demo 4</a>
                              </div>
                           </div>
                           <!--end::Demo-->
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-6">
                           <!--begin::Demo-->
                           <div class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
                              <div class="overlay-wrapper">
                                 <img src="assets/media/demos/demo5.png" alt="demo" class="w-100" />
                              </div>
                              <div class="overlay-layer bg-dark bg-opacity-10">
                                 <a href="https://preview.keenthemes.com/metronic8/demo5" class="btn btn-sm btn-success shadow">Demo 5</a>
                              </div>
                           </div>
                           <!--end::Demo-->
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-6">
                           <!--begin::Demo-->
                           <div class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
                              <div class="overlay-wrapper">
                                 <img src="assets/media/demos/demo6.png" alt="demo" class="w-100" />
                              </div>
                              <div class="overlay-layer bg-dark bg-opacity-10">
                                 <a href="https://preview.keenthemes.com/metronic8/demo6" class="btn btn-sm btn-success shadow">Demo 6</a>
                              </div>
                           </div>
                           <!--end::Demo-->
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-6">
                           <!--begin::Demo-->
                           <div class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
                              <div class="overlay-wrapper">
                                 <img src="assets/media/demos/demo7.png" alt="demo" class="w-100" />
                              </div>
                              <div class="overlay-layer bg-dark bg-opacity-10">
                                 <a href="https://preview.keenthemes.com/metronic8/demo7" class="btn btn-sm btn-success shadow">Demo 7</a>
                              </div>
                           </div>
                           <!--end::Demo-->
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-6">
                           <!--begin::Demo-->
                           <div class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
                              <div class="overlay-wrapper">
                                 <img src="assets/media/demos/demo8.png" alt="demo" class="w-100" />
                              </div>
                              <div class="overlay-layer bg-dark bg-opacity-10">
                                 <a href="https://preview.keenthemes.com/metronic8/demo8" class="btn btn-sm btn-success shadow">Demo 8</a>
                              </div>
                           </div>
                           <!--end::Demo-->
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-6">
                           <!--begin::Demo-->
                           <div class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
                              <div class="overlay-wrapper">
                                 <img src="assets/media/demos/demo9.png" alt="demo" class="w-100" />
                              </div>
                              <div class="overlay-layer bg-dark bg-opacity-10">
                                 <a href="https://preview.keenthemes.com/metronic8/demo9" class="btn btn-sm btn-success shadow">Demo 9</a>
                              </div>
                           </div>
                           <!--end::Demo-->
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-6">
                           <!--begin::Demo-->
                           <div class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
                              <div class="overlay-wrapper">
                                 <img src="assets/media/demos/demo10.png" alt="demo" class="w-100" />
                              </div>
                              <div class="overlay-layer bg-dark bg-opacity-10">
                                 <a href="https://preview.keenthemes.com/metronic8/demo10" class="btn btn-sm btn-success shadow">Demo 10</a>
                              </div>
                           </div>
                           <!--end::Demo-->
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-6">
                           <!--begin::Demo-->
                           <div class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
                              <div class="overlay-wrapper">
                                 <img src="assets/media/demos/demo11.png" alt="demo" class="w-100" />
                              </div>
                              <div class="overlay-layer bg-dark bg-opacity-10">
                                 <a href="https://preview.keenthemes.com/metronic8/demo11" class="btn btn-sm btn-success shadow">Demo 11</a>
                              </div>
                           </div>
                           <!--end::Demo-->
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-6">
                           <!--begin::Demo-->
                           <div class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
                              <div class="overlay-wrapper">
                                 <img src="assets/media/demos/demo12.png" alt="demo" class="w-100" />
                              </div>
                              <div class="overlay-layer bg-dark bg-opacity-10">
                                 <a href="https://preview.keenthemes.com/metronic8/demo12" class="btn btn-sm btn-success shadow">Demo 12</a>
                              </div>
                           </div>
                           <!--end::Demo-->
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-6">
                           <!--begin::Demo-->
                           <div class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
                              <div class="overlay-wrapper">
                                 <img src="assets/media/demos/demo13.png" alt="demo" class="w-100" />
                              </div>
                              <div class="overlay-layer bg-dark bg-opacity-10">
                                 <a href="https://preview.keenthemes.com/metronic8/demo13" class="btn btn-sm btn-success shadow">Demo 13</a>
                              </div>
                           </div>
                           <!--end::Demo-->
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-6">
                           <!--begin::Demo-->
                           <div class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
                              <div class="overlay-wrapper">
                                 <img src="assets/media/demos/demo14.png" alt="demo" class="w-100" />
                              </div>
                              <div class="overlay-layer bg-dark bg-opacity-10">
                                 <a href="https://preview.keenthemes.com/metronic8/demo14" class="btn btn-sm btn-success shadow">Demo 14</a>
                              </div>
                           </div>
                           <!--end::Demo-->
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-6">
                           <!--begin::Demo-->
                           <div class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
                              <div class="overlay-wrapper">
                                 <img src="assets/media/demos/demo15.png" alt="demo" class="w-100" />
                              </div>
                              <div class="overlay-layer bg-dark bg-opacity-10">
                                 <a href="https://preview.keenthemes.com/metronic8/demo15" class="btn btn-sm btn-success shadow">Demo 15</a>
                              </div>
                           </div>
                           <!--end::Demo-->
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-6">
                           <!--begin::Demo-->
                           <div class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
                              <div class="overlay-wrapper">
                                 <img src="assets/media/demos/demo16.png" alt="demo" class="w-100" />
                              </div>
                              <div class="overlay-layer bg-dark bg-opacity-10">
                                 <a href="https://preview.keenthemes.com/metronic8/demo16" class="btn btn-sm btn-success shadow">Demo 16</a>
                              </div>
                           </div>
                           <!--end::Demo-->
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-6">
                           <!--begin::Demo-->
                           <div class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
                              <div class="overlay-wrapper">
                                 <img src="assets/media/demos/demo17.png" alt="demo" class="w-100" />
                              </div>
                              <div class="overlay-layer bg-dark bg-opacity-10">
                                 <a href="https://preview.keenthemes.com/metronic8/demo17" class="btn btn-sm btn-success shadow">Demo 17</a>
                              </div>
                           </div>
                           <!--end::Demo-->
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-6">
                           <!--begin::Demo-->
                           <div class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
                              <div class="overlay-wrapper">
                                 <img src="assets/media/demos/demo18.png" alt="demo" class="w-100" />
                              </div>
                              <div class="overlay-layer bg-dark bg-opacity-10">
                                 <a href="https://preview.keenthemes.com/metronic8/demo18" class="btn btn-sm btn-success shadow">Demo 18</a>
                              </div>
                           </div>
                           <!--end::Demo-->
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-6">
                           <!--begin::Demo-->
                           <div class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
                              <div class="overlay-wrapper">
                                 <img src="assets/media/demos/demo19.png" alt="demo" class="w-100" />
                              </div>
                              <div class="overlay-layer bg-dark bg-opacity-10">
                                 <a href="https://preview.keenthemes.com/metronic8/demo19" class="btn btn-sm btn-success shadow">Demo 19</a>
                              </div>
                           </div>
                           <!--end::Demo-->
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-6">
                           <!--begin::Demo-->
                           <div class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
                              <div class="overlay-wrapper">
                                 <img src="assets/media/demos/demo20.png" alt="demo" class="w-100" />
                              </div>
                              <div class="overlay-layer bg-dark bg-opacity-10">
                                 <a href="https://preview.keenthemes.com/metronic8/demo20" class="btn btn-sm btn-success shadow">Demo 20</a>
                              </div>
                           </div>
                           <!--end::Demo-->
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-6">
                           <!--begin::Demo-->
                           <div class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
                              <div class="overlay-wrapper">
                                 <img src="assets/media/demos/demo21.png" alt="demo" class="w-100" />
                              </div>
                              <div class="overlay-layer bg-dark bg-opacity-10">
                                 <a href="https://preview.keenthemes.com/metronic8/demo21" class="btn btn-sm btn-success shadow">Demo 21</a>
                              </div>
                           </div>
                           <!--end::Demo-->
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-6">
                           <!--begin::Demo-->
                           <div class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
                              <div class="overlay-wrapper">
                                 <img src="assets/media/demos/demo22.png" alt="demo" class="w-100" />
                              </div>
                              <div class="overlay-layer bg-dark bg-opacity-10">
                                 <a href="https://preview.keenthemes.com/metronic8/demo22" class="btn btn-sm btn-success shadow">Demo 22</a>
                              </div>
                           </div>
                           <!--end::Demo-->
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-6">
                           <!--begin::Demo-->
                           <div class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
                              <div class="overlay-wrapper">
                                 <img src="assets/media/demos/demo23.png" alt="demo" class="w-100 opacity-25" />
                              </div>
                              <div class="overlay-layer bg-dark bg-opacity-10">
                                 <div class="badge badge-white px-6 py-4 fw-semibold fs-base shadow">Coming soon</div>
                              </div>
                           </div>
                           <!--end::Demo-->
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-6">
                           <!--begin::Demo-->
                           <div class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
                              <div class="overlay-wrapper">
                                 <img src="assets/media/demos/demo24.png" alt="demo" class="w-100 opacity-25" />
                              </div>
                              <div class="overlay-layer bg-dark bg-opacity-10">
                                 <div class="badge badge-white px-6 py-4 fw-semibold fs-base shadow">Coming soon</div>
                              </div>
                           </div>
                           <!--end::Demo-->
                        </div>
                        <!--end::Col-->
                     </div>
                     <!--end::Row-->
                  </div>
                  <!--end::Demos-->
               </div>
               <!--end::Wrapper-->
            </div>
            <!--end::Content-->
         </div>
         <!--end::Body-->
      </div>
      <!--end::Card-->
   </div>
   <!--end::Demos drawer-->
   <!--begin::Help drawer-->
   <div id="kt_help" class="bg-body" data-kt-drawer="true" data-kt-drawer-name="help" data-kt-drawer-activate="true" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'350px', 'md': '525px'}" data-kt-drawer-direction="end" data-kt-drawer-toggle="#kt_help_toggle" data-kt-drawer-close="#kt_help_close">
      <!--begin::Card-->
      <div class="card shadow-none rounded-0 w-100">
         <!--begin::Header-->
         <div class="card-header" id="kt_help_header">
            <h5 class="card-title fw-semibold text-gray-600">Learn & Get Inspired</h5>
            <div class="card-toolbar">
               <button type="button" class="btn btn-sm btn-icon explore-btn-dismiss me-n5" id="kt_help_close">
                  <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                  <span class="svg-icon svg-icon-2">
                     <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
                        <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor" />
                     </svg>
                  </span>
                  <!--end::Svg Icon-->
               </button>
            </div>
         </div>
         <!--end::Header-->
         <!--begin::Body-->
         <div class="card-body" id="kt_help_body">
            <!--begin::Content-->
            <div id="kt_help_scroll" class="hover-scroll-overlay-y" data-kt-scroll="true" data-kt-scroll-height="auto" data-kt-scroll-wrappers="#kt_help_body" data-kt-scroll-dependencies="#kt_help_header" data-kt-scroll-offset="5px">
               <!--begin::Support-->
               <div class="rounded border border-dashed border-gray-300 p-6 p-lg-8 mb-10">
                  <!--begin::Heading-->
                  <h2 class="fw-bold mb-5">Support at
                     <a href="https://devs.keenthemes.com" class="">devs.keenthemes.com</a>
                  </h2>
                  <!--end::Heading-->
                  <!--begin::Description-->
                  <div class="fs-5 fw-semibold mb-5">
                     <span class="text-gray-500">Join our developers community to find answer to your question and help others.</span>
                     <a class="explore-link d-none" href="https://keenthemes.com/licensing">FAQs</a>
                  </div>
                  <!--end::Description-->
                  <!--begin::Link-->
                  <a href="https://devs.keenthemes.com" class="btn btn-lg explore-btn-primary w-100">Get Support</a>
                  <!--end::Link-->
               </div>
               <!--end::Support-->
               <!--begin::Link-->
               <div class="d-flex align-items-center mb-7">
                  <!--begin::Icon-->
                  <div class="d-flex flex-center w-50px h-50px w-lg-75px h-lg-75px flex-shrink-0 rounded bg-light-warning">
                     <!--begin::Svg Icon | path: icons/duotune/abstract/abs027.svg-->
                     <span class="svg-icon svg-icon-warning svg-icon-2x svg-icon-lg-3x">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path opacity="0.3" d="M21.25 18.525L13.05 21.825C12.35 22.125 11.65 22.125 10.95 21.825L2.75 18.525C1.75 18.125 1.75 16.725 2.75 16.325L4.04999 15.825L10.25 18.325C10.85 18.525 11.45 18.625 12.05 18.625C12.65 18.625 13.25 18.525 13.85 18.325L20.05 15.825L21.35 16.325C22.35 16.725 22.35 18.125 21.25 18.525ZM13.05 16.425L21.25 13.125C22.25 12.725 22.25 11.325 21.25 10.925L13.05 7.62502C12.35 7.32502 11.65 7.32502 10.95 7.62502L2.75 10.925C1.75 11.325 1.75 12.725 2.75 13.125L10.95 16.425C11.65 16.725 12.45 16.725 13.05 16.425Z" fill="currentColor" />
                           <path d="M11.05 11.025L2.84998 7.725C1.84998 7.325 1.84998 5.925 2.84998 5.525L11.05 2.225C11.75 1.925 12.45 1.925 13.15 2.225L21.35 5.525C22.35 5.925 22.35 7.325 21.35 7.725L13.05 11.025C12.45 11.325 11.65 11.325 11.05 11.025Z" fill="currentColor" />
                        </svg>
                     </span>
                     <!--end::Svg Icon-->
                  </div>
                  <!--end::Icon-->
                  <!--begin::Info-->
                  <div class="d-flex flex-stack flex-grow-1 ms-4 ms-lg-6">
                     <!--begin::Wrapper-->
                     <div class="d-flex flex-column me-2 me-lg-5">
                        <!--begin::Title-->
                        <a href="https://preview.keenthemes.com/html/metronic/docs" class="text-dark text-hover-primary fw-bold fs-6 fs-lg-4 mb-1">Documentation & Videos</a>
                        <!--end::Title-->
                        <!--begin::Description-->
                        <div class="text-muted fw-semibold fs-7 fs-lg-6">From guides and video tutorials, to live demos and code examples to get started.</div>
                        <!--end::Description-->
                     </div>
                     <!--end::Wrapper-->
                     <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                     <span class="svg-icon svg-icon-gray-400 svg-icon-2">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="currentColor" />
                           <path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="currentColor" />
                        </svg>
                     </span>
                     <!--end::Svg Icon-->
                  </div>
                  <!--end::Info-->
               </div>
               <!--end::Link-->
               <!--begin::Link-->
               <div class="d-flex align-items-center mb-7">
                  <!--begin::Icon-->
                  <div class="d-flex flex-center w-50px h-50px w-lg-75px h-lg-75px flex-shrink-0 rounded bg-light-primary">
                     <!--begin::Svg Icon | path: icons/duotune/ecommerce/ecm007.svg-->
                     <span class="svg-icon svg-icon-primary svg-icon-2x svg-icon-lg-3x">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path d="M21 9V11C21 11.6 20.6 12 20 12H14V8H20C20.6 8 21 8.4 21 9ZM10 8H4C3.4 8 3 8.4 3 9V11C3 11.6 3.4 12 4 12H10V8Z" fill="currentColor" />
                           <path d="M15 2C13.3 2 12 3.3 12 5V8H15C16.7 8 18 6.7 18 5C18 3.3 16.7 2 15 2Z" fill="currentColor" />
                           <path opacity="0.3" d="M9 2C10.7 2 12 3.3 12 5V8H9C7.3 8 6 6.7 6 5C6 3.3 7.3 2 9 2ZM4 12V21C4 21.6 4.4 22 5 22H10V12H4ZM20 12V21C20 21.6 19.6 22 19 22H14V12H20Z" fill="currentColor" />
                        </svg>
                     </span>
                     <!--end::Svg Icon-->
                  </div>
                  <!--end::Icon-->
                  <!--begin::Info-->
                  <div class="d-flex flex-stack flex-grow-1 ms-4 ms-lg-6">
                     <!--begin::Wrapper-->
                     <div class="d-flex flex-column me-2 me-lg-5">
                        <!--begin::Title-->
                        <a href="https://preview.keenthemes.com/html/metronic/docs//base/utilities" class="text-dark text-hover-primary fw-bold fs-6 fs-lg-4 mb-1">Plugins & Components</a>
                        <!--end::Title-->
                        <!--begin::Description-->
                        <div class="text-muted fw-semibold fs-7 fs-lg-6">Check out our 300+ in-house components and customized 3rd-party plugins.</div>
                        <!--end::Description-->
                     </div>
                     <!--end::Wrapper-->
                     <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                     <span class="svg-icon svg-icon-gray-400 svg-icon-2">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="currentColor" />
                           <path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="currentColor" />
                        </svg>
                     </span>
                     <!--end::Svg Icon-->
                  </div>
                  <!--end::Info-->
               </div>
               <!--end::Link-->
               <!--begin::Link-->
               <div class="d-flex align-items-center mb-7">
                  <!--begin::Icon-->
                  <div class="d-flex flex-center w-50px h-50px w-lg-75px h-lg-75px flex-shrink-0 rounded bg-light-info">
                     <!--begin::Svg Icon | path: icons/duotune/art/art006.svg-->
                     <span class="svg-icon svg-icon-info svg-icon-2x svg-icon-lg-3x">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path opacity="0.3" d="M22 19V17C22 16.4 21.6 16 21 16H8V3C8 2.4 7.6 2 7 2H5C4.4 2 4 2.4 4 3V19C4 19.6 4.4 20 5 20H21C21.6 20 22 19.6 22 19Z" fill="currentColor" />
                           <path d="M20 5V21C20 21.6 19.6 22 19 22H17C16.4 22 16 21.6 16 21V8H8V4H19C19.6 4 20 4.4 20 5ZM3 8H4V4H3C2.4 4 2 4.4 2 5V7C2 7.6 2.4 8 3 8Z" fill="currentColor" />
                        </svg>
                     </span>
                     <!--end::Svg Icon-->
                  </div>
                  <!--end::Icon-->
                  <!--begin::Info-->
                  <div class="d-flex flex-stack flex-grow-1 ms-4 ms-lg-6">
                     <!--begin::Wrapper-->
                     <div class="d-flex flex-column me-2 me-lg-5">
                        <!--begin::Title-->
                        <a href="https://preview.keenthemes.com/metronic8/layout-builder.html" class="text-dark text-hover-primary fw-bold fs-6 fs-lg-4 mb-1">Layout Builder</a>
                        <!--end::Title-->
                        <!--begin::Description-->
                        <div class="text-muted fw-semibold fs-7 fs-lg-6">Build your layout, preview it and export the HTML for server side integration.</div>
                        <!--end::Description-->
                     </div>
                     <!--end::Wrapper-->
                     <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                     <span class="svg-icon svg-icon-gray-400 svg-icon-2">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="currentColor" />
                           <path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="currentColor" />
                        </svg>
                     </span>
                     <!--end::Svg Icon-->
                  </div>
                  <!--end::Info-->
               </div>
               <!--end::Link-->
               <!--begin::Link-->
               <div class="d-flex align-items-center mb-7">
                  <!--begin::Icon-->
                  <div class="d-flex flex-center w-50px h-50px w-lg-75px h-lg-75px flex-shrink-0 rounded bg-light-success">
                     <!--begin::Svg Icon | path: icons/duotune/files/fil021.svg-->
                     <span class="svg-icon svg-icon-success svg-icon-2x svg-icon-lg-3x">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path opacity="0.3" d="M19 15C20.7 15 22 13.7 22 12C22 10.3 20.7 9 19 9C18.9 9 18.9 9 18.8 9C18.9 8.7 19 8.3 19 8C19 6.3 17.7 5 16 5C15.4 5 14.8 5.2 14.3 5.5C13.4 4 11.8 3 10 3C7.2 3 5 5.2 5 8C5 8.3 5 8.7 5.1 9H5C3.3 9 2 10.3 2 12C2 13.7 3.3 15 5 15H19Z" fill="currentColor" />
                           <path d="M13 17.4V12C13 11.4 12.6 11 12 11C11.4 11 11 11.4 11 12V17.4H13Z" fill="currentColor" />
                           <path opacity="0.3" d="M8 17.4H16L12.7 20.7C12.3 21.1 11.7 21.1 11.3 20.7L8 17.4Z" fill="currentColor" />
                        </svg>
                     </span>
                     <!--end::Svg Icon-->
                  </div>
                  <!--end::Icon-->
                  <!--begin::Info-->
                  <div class="d-flex flex-stack flex-grow-1 ms-4 ms-lg-6">
                     <!--begin::Wrapper-->
                     <div class="d-flex flex-column me-2 me-lg-5">
                        <!--begin::Title-->
                        <a href="https://devs.keenthemes.com/metronic" class="text-dark text-hover-primary fw-bold fs-6 fs-lg-4 mb-1">Metronic Downloads</a>
                        <!--end::Title-->
                        <!--begin::Description-->
                        <div class="text-muted fw-semibold fs-7 fs-lg-6">Download your prefered framework and demo with one click.</div>
                        <!--end::Description-->
                     </div>
                     <!--end::Wrapper-->
                     <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                     <span class="svg-icon svg-icon-gray-400 svg-icon-2">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="currentColor" />
                           <path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="currentColor" />
                        </svg>
                     </span>
                     <!--end::Svg Icon-->
                  </div>
                  <!--end::Info-->
               </div>
               <!--end::Link-->
               <!--begin::Link-->
               <div class="d-flex align-items-center mb-7">
                  <!--begin::Icon-->
                  <div class="d-flex flex-center w-50px h-50px w-lg-75px h-lg-75px flex-shrink-0 rounded bg-light-danger">
                     <!--begin::Svg Icon | path: icons/duotune/electronics/elc009.svg-->
                     <span class="svg-icon svg-icon-danger svg-icon-2x svg-icon-lg-3x">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path d="M13 9V8C13 7.4 13.4 7 14 7H15C16.7 7 18 5.7 18 4V3C18 2.4 17.6 2 17 2C16.4 2 16 2.4 16 3V4C16 4.6 15.6 5 15 5H14C12.3 5 11 6.3 11 8V9H13Z" fill="currentColor" />
                           <path opacity="0.3" d="M21 22H3C2.4 22 2 21.6 2 21V10C2 9.4 2.4 9 3 9H21C21.6 9 22 9.4 22 10V21C22 21.6 21.6 22 21 22ZM5 12C4.4 12 4 12.4 4 13C4 13.6 4.4 14 5 14C5.6 14 6 13.6 6 13C6 12.4 5.6 12 5 12ZM8 12C7.4 12 7 12.4 7 13C7 13.6 7.4 14 8 14C8.6 14 9 13.6 9 13C9 12.4 8.6 12 8 12ZM11 12C10.4 12 10 12.4 10 13C10 13.6 10.4 14 11 14C11.6 14 12 13.6 12 13C12 12.4 11.6 12 11 12ZM14 12C13.4 12 13 12.4 13 13C13 13.6 13.4 14 14 14C14.6 14 15 13.6 15 13C15 12.4 14.6 12 14 12ZM9 15C8.4 15 8 15.4 8 16C8 16.6 8.4 17 9 17C9.6 17 10 16.6 10 16C10 15.4 9.6 15 9 15ZM12 15C11.4 15 11 15.4 11 16C11 16.6 11.4 17 12 17C12.6 17 13 16.6 13 16C13 15.4 12.6 15 12 15ZM15 15C14.4 15 14 15.4 14 16C14 16.6 14.4 17 15 17C15.6 17 16 16.6 16 16C16 15.4 15.6 15 15 15ZM19 18C18.4 18 18 18.4 18 19C18 19.6 18.4 20 19 20C19.6 20 20 19.6 20 19C20 18.4 19.6 18 19 18ZM7 19C7 18.4 6.6 18 6 18H5C4.4 18 4 18.4 4 19C4 19.6 4.4 20 5 20H6C6.6 20 7 19.6 7 19ZM7 16C7 15.4 6.6 15 6 15H5C4.4 15 4 15.4 4 16C4 16.6 4.4 17 5 17H6C6.6 17 7 16.6 7 16ZM17 14H19C19.6 14 20 13.6 20 13C20 12.4 19.6 12 19 12H17C16.4 12 16 12.4 16 13C16 13.6 16.4 14 17 14ZM18 17H19C19.6 17 20 16.6 20 16C20 15.4 19.6 15 19 15H18C17.4 15 17 15.4 17 16C17 16.6 17.4 17 18 17ZM17 19C17 18.4 16.6 18 16 18H9C8.4 18 8 18.4 8 19C8 19.6 8.4 20 9 20H16C16.6 20 17 19.6 17 19Z" fill="currentColor" />
                        </svg>
                     </span>
                     <!--end::Svg Icon-->
                  </div>
                  <!--end::Icon-->
                  <!--begin::Info-->
                  <div class="d-flex flex-stack flex-grow-1 ms-4 ms-lg-6">
                     <!--begin::Wrapper-->
                     <div class="d-flex flex-column me-2 me-lg-5">
                        <!--begin::Title-->
                        <a href="https://preview.keenthemes.com/html/metronic/docs/getting-started/changelog" class="text-dark text-hover-primary fw-bold fs-6 fs-lg-4 mb-1">What's New ?</a>
                        <!--end::Title-->
                        <!--begin::Description-->
                        <div class="text-muted fw-semibold fs-7 fs-lg-6">Latest features and improvements added with our users feedback in mind.</div>
                        <!--end::Description-->
                     </div>
                     <!--end::Wrapper-->
                     <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                     <span class="svg-icon svg-icon-gray-400 svg-icon-2">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="currentColor" />
                           <path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="currentColor" />
                        </svg>
                     </span>
                     <!--end::Svg Icon-->
                  </div>
                  <!--end::Info-->
               </div>
               <!--end::Link-->
            </div>
            <!--end::Content-->
         </div>
         <!--end::Body-->
      </div>
      <!--end::Card-->
   </div>
   <!--end::Help drawer-->
   <!--end::Engage drawers-->

   <!--begin::Scrolltop-->
   <div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
      <!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
      <span class="svg-icon">
         <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="currentColor" />
            <path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="currentColor" />
         </svg>
      </span>
      <!--end::Svg Icon-->
   </div>
   <!--end::Scrolltop-->

   <!-- Modal per Produk -->
   <div class="modal fade" id="kt_modal_new_card" tabindex="-1" aria-hidden="true">
      <!--begin::Modal dialog-->
      <div class="modal-dialog modal-dialog-centered mw-650px">
         <!--begin::Modal content-->
         <div class="modal-content">
            <!--begin::Modal header-->
            <div class="modal-header">
               <!--begin::Modal title-->
               <div class="d-block">

                  <h1 id="merk_laptop"></h1>
                  <h2 id="nama_kategori"></h2>
               </div>

               <!-- <h2>Add New Card <span id="id_laptop"></span></h2> -->
               <!--end::Modal title-->
               <!--begin::Close-->
               <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                  <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                  <span class="svg-icon svg-icon-1">
                     <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
                        <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor" />
                     </svg>
                  </span>
                  <!--end::Svg Icon-->
               </div>
               <!--end::Close-->
            </div>
            <!--end::Modal header-->
            <!--begin::Modal body-->
            <div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
               <!--  -->
               <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                  <div class="carousel-inner">
                     <div class="carousel-item active ">
                        <img src="" class="d-block w-50 mx-auto modal-image" alt="">
                     </div>

                  </div>


               </div>




               <div class="row mt-5 text-center">
                  <div class="col-md-6">
                     <!-- <h4 id="prosesor"></h4> -->
                  </div>
                  <div class="col-md-6">
                     <!-- <h4 id="ram"></h4> -->
                  </div>
               </div>
               <div class="row text-center my-3">
                  <div class="col-md-6">
                     <!-- <h4 id="vga"></h4> -->
                  </div>
                  <div class="col-md-6">
                     <!-- <h4 id="screen"></h4> -->
                  </div>
               </div>
               <h3 class="my-5 text-center" id="harga_laptop"></h3>
            </div>
            <!--end::Modal body-->
            <table class="fs-6 table table-hover table-bordered text-center">
               <tbody>
                  <tr>
                     <td>Processor</td>
                     <td>
                        <span id="prosesor">
                           Pending
                        </span>
                     </td>
                  </tr>
                  <tr>
                     <td>Memory </td>
                     <td>
                        <span id="ram">
                           Pending
                        </span>
                     </td>
                  </tr>
                  <tr>
                     <td>VGA Card </td>
                     <td>
                        <span id="vga">
                           Pending
                        </span>
                     </td>
                  </tr>
                  <tr>
                     <td>Screen Size </td>
                     <td>
                        <span id="screen">
                           Pending
                        </span>
                     </td>
                  </tr>
               </tbody>
            </table>
         </div>
         <!--end::Modal content-->
      </div>
      <!--end::Modal dialog-->
   </div>

   <script>
      function dataId(merk_laptop, model_laptop, gambar_laptop, nama_kategori, no_serial, prosesor, ram, vga, screen, harga_laptop) {
         console.log(gambar_laptop);
         document.querySelector('#merk_laptop').innerHTML = merk_laptop + " - " + model_laptop;
         document.querySelector('#nama_kategori').innerHTML = nama_kategori + " Serial " + no_serial;
         document.querySelector('#prosesor').innerHTML = prosesor;
         document.querySelector('#vga').innerHTML = vga;
         document.querySelector('#ram').innerHTML = ram;
         document.querySelector('#screen').innerHTML = screen;

         const formatter = new Intl.NumberFormat('id-ID', {
            style: 'currency',
            currency: 'IDR'
         });

         const formatAngka = formatter.format(harga_laptop);
         console.log(formatAngka);
         document.querySelector('#harga_laptop').innerHTML = "Harga : " + formatAngka;
         const gambar_laptop1 = document.querySelector('.modal-image');
         gambar_laptop1.src = 'admin/img/' + gambar_laptop;
      }
   </script>


   <?php
   include 'footer.php';

   ?>