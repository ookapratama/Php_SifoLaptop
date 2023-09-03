<?php
require '../controllers/admin/function.php';

include 'header.php';
// $id = $_GET['id'];

// $data_laptop = select("SELECT * FROM laptop WHERE id_laptop = $id");
// $laptop = mysqli_fetch_assoc($data_laptop);

 ?>

<!--begin::Modal - New Target-->
<div class="container-fluid" >
	<!--begin::Modal dialog-->
	<div class="">
		<!--begin::Modal content-->
		<div class="modal-content rounded">
			
			<!--begin::Modal body-->
			<div class="modal-body scroll-y px-10 px-lg-15 pt-0 pb-15">
				<!--begin:Form-->
				<form  class="form" action="proses.php?proses=update&jenis=laptop" method="POST" enctype="multipart/form-data">
					<!-- <input type="hidden" name="id_laptop" value=""> -->
					<!--begin::Heading-->
					<div class="mb-13 text-center">
						<!--begin::Title-->
						<h1 class="mb-3 mt-5">Form Admin</h1>
						<!--end::Title-->

					</div>
					<!--end::Heading-->

					<!--begin::Input group-->
					<div class="row g-9 mb-8">
						<!--begin::Input group-->
						<div class="col-md-6 fv-row">
							<!--begin::Label-->
							<label class="d-flex align-items-center fs-6 fw-semibold mb-2">
								<span class="required">Nama Lengkap</span>
								<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference"></i>
							</label>
							<!--end::Label-->
							<input required type="text" class="form-control form-control-solid" placeholder="Masukkan Nama Anda" name="nama" value="" />
						</div>
						<!--end::Input group-->
						<!--begin::Input group-->
						<div class="col-md-6 fv-row">
							<!--begin::Label-->
							<label class="d-flex align-items-center fs-6 fw-semibold mb-2">
								<span class="required">Password Lama</span>
								<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference"></i>
							</label>
							<!--end::Label-->
							<input required type="password" class="form-control form-control-solid" placeholder="Masukkan Password Lama" name="pass_lama" value="" />

						</div>
						<!--end::Input group-->
					</div>
					<!--end::Input group-->
					
					<!--begin::Input group-->
					<div class="row g-9 mb-8">
						<!--begin::Input group-->
						<div class="col-md-6 fv-row">
							<!--begin::Label-->
							<label class="d-flex align-items-center fs-6 fw-semibold mb-2">
								<span class="required">Username</span>
								<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference"></i>
							</label>
							<!--end::Label-->
							<input required type="text" class="form-control form-control-solid" placeholder="Masukkan Username Admin" name="username" value="" />
						</div>
						<!--end::Input group-->
						<!--begin::Input group-->
						<div class="col-md-6 fv-row">
							<!--begin::Label-->
							<label class="d-flex align-items-center fs-6 fw-semibold mb-2">
								<span class="required">Password Baru</span>
								<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference"></i>
							</label>
							<!--end::Label-->
							<input  type="password" class="form-control form-control-solid" placeholder="Masukkan Password Baru" name="pass_baru"  value="" />

						</div>
						<!--end::Input group-->
					</div>
					<!--end::Input group-->



					<!--begin::Actions-->
					<div class="d-flex justify-content-between">
						<a href="index.php" class="btn btn-light me-3">Cancel</a>
						<button type="submit" class="btn btn-primary">
							<span class="indicator-label">Submit</span>
						</button>
					</div>
					<!--end::Actions-->
				</form>
				<!--end:Form-->
			</div>
			<!--end::Modal body-->
		</div>
		<!--end::Modal content-->
	</div>
	<!--end::Modal dialog-->
</div>
<!--end::Modal - New Target-->



<?php include 'footer.php' ?>