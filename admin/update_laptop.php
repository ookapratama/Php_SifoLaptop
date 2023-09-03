<?php
require '../controllers/admin/function.php';

include 'header.php';
$id = $_GET['id'];

$data_laptop = select("SELECT * FROM laptop WHERE id_laptop = $id");
$laptop = mysqli_fetch_assoc($data_laptop);

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
					<input type="hidden" name="id_laptop" value="<?= $laptop['id_laptop'] ?>">
					<!--begin::Heading-->
					<div class="mb-13 text-center">
						<!--begin::Title-->
						<h1 class="mb-3 mt-5">Update Laptop</h1>
						<!--end::Title-->

					</div>
					<!--end::Heading-->
					<!--begin::Input group-->
					<div class="d-flex flex-column mb-8 fv-row">
						<!--begin::Label-->
						<label class="d-flex align-items-center fs-6 fw-semibold mb-2">
							<span class="required">Merk Laptop</span>
							<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference"></i>
						</label>
						<!--end::Label-->
						<input required type="text" class="form-control form-control-solid" placeholder="Masukkan Merk Laptop" name="merk_laptop" value="<?= $laptop['merk_laptop'] ?>" />
					</div>
					<!--end::Input group-->
					<!--begin::Input group-->
					<div class="row g-9 mb-8">
						<!--begin::Col-->
						<div class="col-md-6 fv-row">
							<label class="required fs-6 fw-semibold mb-2">Kategori Laptop</label>
							<select required class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Select Kategori" name="kategori_laptop">
								<option value="">Select kategori...</option>
								<?php
								$data_kategori = select("SELECT * FROM kategori_laptop");
								while ($data = mysqli_fetch_assoc($data_kategori)) :
								?>
									<option value="<?= $data['id_kategori'] ?>" <?php $laptop['kategori_id'] == $data['id_kategori'] ? 'selected' : '' ?> > <?= $data['nama_kategori'] ?></option>
								<?php endwhile; ?>
							</select>
						</div>
						<!--end::Col-->
						<!--begin::Input group-->
						<div class="col-md-6 fv-row">
							<!--begin::Label-->
							<label class="d-flex align-items-center fs-6 fw-semibold mb-2">
								<span class="required">Nomor Serial</span>
								<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference"></i>
							</label>
							<!--end::Label-->
							<input required type="text" class="form-control form-control-solid" placeholder="Masukkan Nomor Serial Laptop" name="no_serial" value="<?= $laptop['no_serial'] ?>" />
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
								<span class="required">Model Laptop</span>
								<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference"></i>
							</label>
							<!--end::Label-->
							<input required type="text" class="form-control form-control-solid" placeholder="Masukkan Model Laptop" name="model_laptop" value="<?= $laptop['model_laptop'] ?>" />
						</div>
						<!--end::Input group-->
						<!--begin::Input group-->
						<div class="col-md-6 fv-row">
							<!--begin::Label-->
							<label class="d-flex align-items-center fs-6 fw-semibold mb-2">
								<span class="required">Harga Laptop</span>
								<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference"></i>
							</label>
							<!--end::Label-->
							<input required type="text" class="form-control form-control-solid" placeholder="Masukkan Harga Laptop" name="harga_laptop" id="rupiah" value="<?= $laptop['harga_laptop'] ?>" />

						</div>
						<!--end::Input group-->
					</div>
					<!--end::Input group-->

					<!--begin::Heading-->
					<div class="mb-13 mt-6 text-left">
						<div class="text-muted fw-semibold fs-5">Spesifikasi Laptop
						</div>
					</div>
					<!--end::Heading-->

					<!--begin::Input group-->
					<div class="row g-9 mb-8">
						<!--begin::Col-->
						<div class="col-md-6 fv-row">
							<label class="required fs-6 fw-semibold mb-2">Processor Laptop</label>
							<select required class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Select Processor" name="prosesor_laptop">
								<option value="">Select processor...</option>
								<?php
								$data_prosesor = select("SELECT * FROM fitur_laptop WHERE jenis_fitur = 'Processor'");
								while ($data = mysqli_fetch_assoc($data_prosesor)) :
								?>
									<option value="<?= $data['id_fitur'] ?>"><?= $data['nama_fitur'] ?></option>
								<?php endwhile; ?>
							</select>
						</div>
						<!--end::Col-->
						<!--begin::Col-->
						<div class="col-md-6 fv-row">
							<label class="required fs-6 fw-semibold mb-2">Memory Laptop</label>
							<select required class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Select Memory" name="ram_laptop">
								<option value="">Select memory...</option>
								<?php
								$data_ram = select("SELECT * FROM fitur_laptop WHERE jenis_fitur = 'RAM'");
								while ($data = mysqli_fetch_assoc($data_ram)) :
								?>
									<option value="<?= $data['id_fitur'] ?>"><?= $data['nama_fitur'] ?></option>
								<?php endwhile; ?>
							</select>
						</div>
						<!--end::Col-->
					</div>
					<!--end::Input group-->

					<!--begin::Input group-->
					<div class="row g-9 mb-8">
						<!--begin::Col-->
						<div class="col-md-6 fv-row">
							<label class="required fs-6 fw-semibold mb-2">Storage Laptop</label>
							<select required class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Select Storage" name="storage_laptop">
								<option value="" selected disabled>Select storage...</option>
								<?php
								$data_storage = select("SELECT * FROM fitur_laptop WHERE jenis_fitur = 'Storage'");
								while ($data = mysqli_fetch_assoc($data_storage)) :
								?>
									<option value="<?= $data['id_fitur'] ?>"><?= $data['nama_fitur'] ?></option>
								<?php endwhile; ?>
							</select>
						</div>
						<!--end::Col-->
						<!--begin::Col-->
						<div class="col-md-6 fv-row">
							<label class="required fs-6 fw-semibold mb-2">Graphic Card Laptop</label>
							<select required class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Select Graphic Card" name="vga_laptop">
								<option value="" selected disabled>Select graphic card...</option>
								<?php
								$data_vga = select("SELECT * FROM fitur_laptop WHERE jenis_fitur = 'VGA'");
								while ($data = mysqli_fetch_assoc($data_vga)) :
								?>
									<option value="<?= $data['id_fitur'] ?>"><?= $data['nama_fitur'] ?></option>
								<?php endwhile; ?>
							</select>
						</div>
						<!--end::Col-->
					</div>
					<!--end::Input group-->

					<!--begin::Input group-->
					<div class="row g-9 mb-8">
						<!--begin::Col-->
						<div class="col-md-6 fv-row">
							<label class="required fs-6 fw-semibold mb-2">Screen Laptop</label>
							<select required class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Select Screen" name="screen_laptop">
								<option value="" selected disabled>Select screen...</option>
								<?php
								$data_storage = select("SELECT * FROM fitur_laptop WHERE jenis_fitur = 'Screen'");
								while ($data = mysqli_fetch_assoc($data_storage)) :
								?>
									<option value="<?= $data['id_fitur'] ?>"><?= $data['nama_fitur'] ?></option>
								<?php endwhile; ?>
							</select>
						</div>
						<!--end::Col-->
						<!--begin::Input group-->
						<div class="col-md-6 fv-row">
							<!--begin::Label-->
							<label class="d-flex align-items-center fs-6 fw-semibold mb-2">
								<span class="required">Gambar Laptop</span>
								<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference"></i>
							</label>
							<!--end::Label-->
							<input type="file" class="form-control form-control-solid" name="gambar_laptop"  />
							<input type="hidden" name="gambar_lama" value="<?= $laptop['gambar_laptop'] ?>">
							<img class="img-fluid img-thumbnail" width="200"  src="img/<?= $laptop['gambar_laptop'] ?>" alt="">

						</div>
						<!--end::Input group-->
					</div>
					<!--end::Input group-->

					<!--begin::Actions-->
					<div class="d-flex justify-content-between">
						<a href="view_laptop.php" class="btn btn-light me-3">Cancel</a>
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

<!-- start::Script ke rupiah -->
<script>
	var convert_rupiah = document.getElementById('rupiah');
	convert_rupiah.addEventListener('keyup', function(e) {
		convert_rupiah.value = formatRupiah(this.value, 'Rp. ');
	});

	/* Fungsi */
	function formatRupiah(angka, prefix) {
		var number_string = angka.replace(/[^,\d]/g, '').toString(),
			split = number_string.split(','),
			sisa = split[0].length % 3,
			rupiah = split[0].substr(0, sisa),
			ribuan = split[0].substr(sisa).match(/\d{3}/gi);

		if (ribuan) {
			separator = sisa ? '.' : '';
			rupiah += separator + ribuan.join('.');
		}

		rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
		return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
	}
</script>
<!-- end::Script ke rupiah -->

<?php include 'footer.php' ?>