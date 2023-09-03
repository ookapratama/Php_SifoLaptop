<?php
require '../controllers/admin/function.php';

include 'header.php';
$id = $_GET['id'];

$data_kategori = select("SELECT * FROM kategori_laptop WHERE id_kategori = $id");
$kategori = mysqli_fetch_assoc($data_kategori);
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
				<form  class="form" action="proses.php?proses=update&jenis=kategori" method="POST" enctype="multipart/form-data">
					<input type="hidden" name="id" value="<?= $kategori['id_kategori'] ?>">
					<!--begin::Heading-->
					<div class="mb-13 text-center">
						<!--begin::Title-->
						<h1 class="mb-3 mt-5">Update Kategori</h1>
						<!--end::Title-->

					</div>
					<!--end::Heading-->
					<!--begin::Input group-->
					<div class="d-flex flex-column mb-8 fv-row">
						<!--begin::Label-->
						<label class="d-flex align-items-center fs-6 fw-semibold mb-2">
							<span class="required">Kategori Laptop</span>
							<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference"></i>
						</label>
						<!--end::Label-->
						<input required type="text" class="form-control form-control-solid" placeholder="Masukkan Kategori Laptop" name="kategori_laptop" value="<?= $kategori['nama_kategori'] ?>" />
					</div>
					<!--end::Input group-->
					

					<!--begin::Actions-->
					<div class="d-flex justify-content-between">
						<a href="view_kategori.php" class="btn btn-light me-3">Cancel</a>
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