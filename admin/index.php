<?php include 'header.php';  ?>

<?php

include '../controllers/admin/function.php';

$fitur_laptop = select("SELECT COUNT(jenis_fitur) as total FROM `fitur_laptop`");
$total_fitur = mysqli_fetch_assoc($fitur_laptop);

$kategori_laptop = select("SELECT COUNT(nama_kategori) as total FROM `kategori_laptop`");
$total_kategori = mysqli_fetch_assoc($kategori_laptop);

$laptop = select("SELECT COUNT(merk_laptop) as total FROM `laptop`");
$total_laptop = mysqli_fetch_assoc($laptop);


?>
<!--begin::Main-->
<div class="app-main flex-column flex-row-fluid" id="kt_app_main">
   <!--begin::Content wrapper-->
   <div class="d-flex flex-column flex-column-fluid">
      <!--begin::Toolbar-->
      <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
         <!--begin::Toolbar container-->
         <div id="kt_app_toolbar_container" class="app-container container-fluid d-flex flex-stack">
            <!--begin::Page title-->
            <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
               <!--begin::Title-->
               <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Default</h1>
               <!--end::Title-->
               <!--begin::Breadcrumb-->
               <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                  <!--begin::Item-->
                  <li class="breadcrumb-item text-muted">
                     <a href="#" class="text-muted text-hover-primary">Home</a>
                  </li>
                  <!--end::Item-->
                  <!--begin::Item-->
                  <li class="breadcrumb-item">
                     <span class="bullet bg-gray-400 w-5px h-2px"></span>
                  </li>
                  <!--end::Item-->
                  <!--begin::Item-->
                  <li class="breadcrumb-item text-muted">Dashboards</li>
                  <!--end::Item-->
               </ul>
               <!--end::Breadcrumb-->
            </div>
            <!--end::Page title-->

         </div>
         <!--end::Toolbar container-->
      </div>
      <!--end::Toolbar-->
      <!--begin::Content-->
      <div id="kt_app_content" class="app-content flex-column-fluid">
         <!--begin::Content container-->
         <div id="kt_app_content_container" class="app-container container-fluid">
            <!--begin::Row-->
            <div class="row g-5 g-xl-10 mb-5 mb-xl-10">

               <!--begin::Col-->
               <div class="col-md-6 col-lg-6 col-xl-4 col-xxl-3 mb-md-5 mb-xl-10">
                  <!--begin::Card widget 20-->
                  <div class="card card-flush bgi-no-repeat bgi-size-contain bgi-position-x-end h-md-50 mb-5 mb-xl-10" style="background-color: #F1416C;background-image:url('assets/media/patterns/vector-1.png')">
                     <!--begin::Header-->
                     <div class="card-header pt-5">
                        <!--begin::Title-->
                        <div class="card-title d-flex flex-row justify-content-between">
                           <!--begin::Amount-->
                           <span class="fs-2hx fw-bold text-white me-2 lh-1 ls-n2"><?= $total_laptop['total'] ?></span>
                           <!--end::Amount-->
                           <!--begin::Subtitle-->
                           <span class="text-white opacity-75 pt-1 fw-semibold fs-6">Laptop</span>
                           <!--end::Subtitle-->
                        </div>
                        <!--end::Title-->
                     </div>
                     <!--end::Header-->
                     <!--begin::Card body-->
                     <div class="card-body d-flex align-items-end justify-content-end pt-0">
                        <!--begin::Svg Icon | path: /var/www/preview.keenthemes.com/kt-products/docs/metronic/html/releases/2023-07-21-074234/core/html/src/media/icons/duotune/electronics/elc001.svg-->
                        <span class="svg-icon svg-icon-5tx svg-icon-dark"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M20 19H4C2.9 19 2 18.1 2 17H22C22 18.1 21.1 19 20 19Z" fill="currentColor" />
                              <path opacity="0.3" d="M20 5H4C3.4 5 3 5.4 3 6V17H21V6C21 5.4 20.6 5 20 5Z" fill="currentColor" />
                           </svg>
                        </span>
                        <!--end::Svg Icon-->
                     </div>
                     <!--end::Card body-->
                  </div>
                  <!--end::Card widget 20-->

                  <!--begin::Card widget 20-->
                  <div class="card card-flush bgi-no-repeat bgi-size-contain bgi-position-x-end h-md-50 mb-5 mb-xl-10" style="background-color: #2b2b2b;background-image:url('assets/media/patterns/vector-1.png')">
                     <!--begin::Header-->
                     <div class="card-header pt-5">
                        <!--begin::Title-->
                        <div class="card-title d-flex flex-row justify-content-between">
                           <!--begin::Amount-->
                           <span class="fs-2hx fw-bold text-white me-2 lh-1 ls-n2">1</span>
                           <!--end::Amount-->
                           <!--begin::Subtitle-->
                           <span class="text-white opacity-75 pt-1 fw-semibold fs-6">Admin</span>
                           <!--end::Subtitle-->
                        </div>
                        <!--end::Title-->
                     </div>
                     <!--end::Header-->
                     <!--begin::Card body-->
                     <div class="card-body d-flex align-items-end justify-content-end pt-0">
                        <!--begin::Svg Icon | path: /var/www/preview.keenthemes.com/kt-products/docs/metronic/html/releases/2023-07-21-074234/core/html/src/media/icons/duotune/electronics/elc001.svg-->
                        <span class="svg-icon svg-icon-5tx svg-icon-light"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M6.28548 15.0861C7.34369 13.1814 9.35142 12 11.5304 12H12.4696C14.6486 12 16.6563 13.1814 17.7145 15.0861L19.3493 18.0287C20.0899 19.3618 19.1259 21 17.601 21H6.39903C4.87406 21 3.91012 19.3618 4.65071 18.0287L6.28548 15.0861Z" fill="currentColor" />
                              <rect opacity="0.3" x="8" y="3" width="8" height="8" rx="4" fill="currentColor" />
                           </svg>
                        </span>
                        <!--end::Svg Icon-->
                     </div>
                     <!--end::Card body-->
                  </div>
                  <!--end::Card widget 20-->
               </div>
               <!--end::Col-->

               <!--begin::Col-->
               <div class="col-md-6 col-lg-6 col-xl-4 col-xxl-3 mb-md-5 mb-xl-10">
                  <!--begin::Card widget 20-->
                  <div class="card card-flush bgi-no-repeat bgi-size-contain bgi-position-x-end h-md-50 mb-5 mb-xl-10" style="background-color: #f2be3a;background-image:url('assets/media/patterns/vector-1.png')">
                     <!--begin::Header-->
                     <div class="card-header pt-5">
                        <!--begin::Title-->
                        <div class="card-title d-flex flex-row justify-content-between">
                           <!--begin::Amount-->
                           <span class="fs-2hx fw-bold text-white me-2 lh-1 ls-n2"><?= $total_kategori['total'] ?></span>
                           <!--end::Amount-->
                           <!--begin::Subtitle-->
                           <span class="text-white opacity-75 pt-1 fw-semibold fs-6">Kategori Laptop</span>
                           <!--end::Subtitle-->
                        </div>
                        <!--end::Title-->
                     </div>
                     <!--end::Header-->
                     <!--begin::Card body-->
                     <div class="card-body d-flex align-items-end justify-content-end pt-0">
                        <!--begin::Svg Icon | path: /var/www/preview.keenthemes.com/kt-products/docs/metronic/html/releases/2023-07-21-074234/core/html/src/media/icons/duotune/electronics/elc001.svg-->
                        <span class="svg-icon svg-icon-5tx svg-icon-primary">
                           <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path opacity="0.3" d="M21.25 18.525L13.05 21.825C12.35 22.125 11.65 22.125 10.95 21.825L2.75 18.525C1.75 18.125 1.75 16.725 2.75 16.325L4.04999 15.825L10.25 18.325C10.85 18.525 11.45 18.625 12.05 18.625C12.65 18.625 13.25 18.525 13.85 18.325L20.05 15.825L21.35 16.325C22.35 16.725 22.35 18.125 21.25 18.525ZM13.05 16.425L21.25 13.125C22.25 12.725 22.25 11.325 21.25 10.925L13.05 7.62502C12.35 7.32502 11.65 7.32502 10.95 7.62502L2.75 10.925C1.75 11.325 1.75 12.725 2.75 13.125L10.95 16.425C11.65 16.725 12.45 16.725 13.05 16.425Z" fill="currentColor" />
                              <path d="M11.05 11.025L2.84998 7.725C1.84998 7.325 1.84998 5.925 2.84998 5.525L11.05 2.225C11.75 1.925 12.45 1.925 13.15 2.225L21.35 5.525C22.35 5.925 22.35 7.325 21.35 7.725L13.05 11.025C12.45 11.325 11.65 11.325 11.05 11.025Z" fill="currentColor" />
                           </svg>
                        </span>
                        <!--end::Svg Icon-->
                     </div>
                     <!--end::Card body-->
                  </div>
                  <!--end::Card widget 20-->

               </div>
               <!--end::Col-->


               <!--begin::Col-->
               <div class="col-md-6 col-lg-6 col-xl-4 col-xxl-3 mb-md-5 mb-xl-10">
                  <!--begin::Card widget 20-->
                  <div class="card card-flush bgi-no-repeat bgi-size-contain bgi-position-x-end h-md-50 mb-5 mb-xl-10" style="background-color: #5c72ff;background-image:url('assets/media/patterns/vector-1.png')">
                     <!--begin::Header-->
                     <div class="card-header pt-5">
                        <!--begin::Title-->
                        <div class="card-title d-flex flex-row justify-content-between">
                           <!--begin::Amount-->
                           <span class="fs-2hx fw-bold text-white me-2 lh-1 ls-n2"><?= $total_fitur['total'] ?></span>
                           <!--end::Amount-->
                           <!--begin::Subtitle-->
                           <span class="text-white opacity-75 pt-1 fw-semibold fs-6">Fitur Laptop</span>
                           <!--end::Subtitle-->
                        </div>
                        <!--end::Title-->
                     </div>
                     <!--end::Header-->
                     <!--begin::Card body-->
                     <div class="card-body d-flex align-items-end justify-content-end pt-0">
                        <!--begin::Svg Icon | path: /var/www/preview.keenthemes.com/kt-products/docs/metronic/html/releases/2023-07-21-074234/core/html/src/media/icons/duotune/electronics/elc001.svg-->
                        <span class="svg-icon svg-icon-5tx svg-icon-warning"><svg width="16" height="19" viewBox="0 0 16 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M12 0.400024H1C0.4 0.400024 0 0.800024 0 1.40002V2.40002C0 3.00002 0.4 3.40002 1 3.40002H12C12.6 3.40002 13 3.00002 13 2.40002V1.40002C13 0.800024 12.6 0.400024 12 0.400024Z" fill="currentColor" />
                              <path opacity="0.3" d="M15 8.40002H1C0.4 8.40002 0 8.00002 0 7.40002C0 6.80002 0.4 6.40002 1 6.40002H15C15.6 6.40002 16 6.80002 16 7.40002C16 8.00002 15.6 8.40002 15 8.40002ZM16 12.4C16 11.8 15.6 11.4 15 11.4H1C0.4 11.4 0 11.8 0 12.4C0 13 0.4 13.4 1 13.4H15C15.6 13.4 16 13 16 12.4ZM12 17.4C12 16.8 11.6 16.4 11 16.4H1C0.4 16.4 0 16.8 0 17.4C0 18 0.4 18.4 1 18.4H11C11.6 18.4 12 18 12 17.4Z" fill="currentColor" />
                           </svg>
                        </span>
                        <!--end::Svg Icon-->
                     </div>
                     <!--end::Card body-->
                  </div>
                  <!--end::Card widget 20-->

               </div>
               <!--end::Col-->

            </div>
            <!--end::Row-->

         </div>
         <!--end::Content container-->
      </div>
      <!--end::Content-->
   </div>
   <!--end::Content wrapper-->
   <!--begin::Footer-->
   <div id="kt_app_footer" class="app-footer">
      <!--begin::Footer container-->
      <div class="app-container container-fluid d-flex flex-column flex-md-row flex-center flex-md-stack py-3">
         <!--begin::Copyright-->
         <div class="text-dark order-2 order-md-1">
            <span class="text-muted fw-semibold me-1">2022&copy;</span>
            <a href="https://keenthemes.com" target="_blank" class="text-gray-800 text-hover-primary">Keenthemes</a>
         </div>
         <!--end::Copyright-->
         <!--begin::Menu-->
         <ul class="menu menu-gray-600 menu-hover-primary fw-semibold order-1">

         </ul>
         <!--end::Menu-->
      </div>
      <!--end::Footer container-->
   </div>
   <!--end::Footer-->
</div>
<!--end:::Main-->
</div>
<!--end::Wrapper-->
</div>
<!--end::Page-->
</div>
<!--end::App-->

<?php include 'footer.php'; ?>