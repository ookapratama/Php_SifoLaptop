<?php
require '../controllers/admin/function.php';

include 'header.php';

$id = $_GET['id'];

$data_fitur = select("SELECT * FROM fitur_laptop WHERE id_fitur = $id");
$fitur = mysqli_fetch_assoc($data_fitur);
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
				<form  class="form" action="proses.php?proses=update&jenis=fitur" method="POST" enctype="multipart/form-data">
					<!--begin::Heading-->
					<input type="hidden" name="id" value="<?= $fitur['id_fitur'] ?>">
					<div class="mb-13 text-center">
						<!--begin::Title-->
						<h1 class="mb-3 mt-5">Update Kategori</h1>
						<!--end::Title-->

					</div>
					<!--end::Heading-->
					<!--begin::Input group-->
					<div class="row g-9 mb-8">
						<!--begin::Col-->
						<div class="col-md-6 fv-row">
							<label class="required fs-6 fw-semibold mb-2">Jenis Fitur</label>
							<select required class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Select Jenis Fitur" name="jenis_fitur">
								<option value="" disabled selected>Select kategori...</option>
									<option value="RAM" <?= $fitur['jenis_fitur'] == 'RAM' ? 'selected' : '' ?> >RAM</option>
									<option value="Processor" <?= $fitur['jenis_fitur'] == 'Processor' ? 'selected' : '' ?> >Processor</option>
									<option value="Storage" <?= $fitur['jenis_fitur'] == 'Storage' ? 'selected' : '' ?>>Storage</option>
									<option value="VGA" <?= $fitur['jenis_fitur'] == 'VGA' ? 'selected' : '' ?>>VGA</option>
									<option value="Screen" <?= $fitur['jenis_fitur'] == 'Screen' ? 'selected' : '' ?> >Screen</option>
							</select>
						</div>
						<!--end::Col-->
						<!--begin::Input group-->
						<div class="col-md-6 fv-row">
							<!--begin::Label-->
							<label class="d-flex align-items-center fs-6 fw-semibold mb-2">
								<span class="required">Nama Fitur</span>
								<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference"></i>
							</label>
							<!--end::Label-->
							<input required type="text" class="form-control form-control-solid" placeholder="Masukkan Nama Fitur" name="nama_fitur" value="<?= $fitur['nama_fitur'] ?>" />
						</div>
						<!--end::Input group-->
					</div>
					<!--end::Input group-->
					

					<!--begin::Actions-->
					<div class="d-flex justify-content-between">
						<a href="view_fitur.php?jenis_fitur=<?= $fitur['jenis_fitur'] ?>" class="btn btn-light me-3">Cancel</a>
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