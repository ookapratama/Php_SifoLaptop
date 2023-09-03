<?php
require '../controllers/admin/function.php';
include 'header.php';

?>
<?php



?>
<!--begin::Tables Widget 11-->
<div class="card mb-5 mb-xl-8">
	<!--begin::Header-->
	<div class="card-header border-0 pt-5">
		<h3 class="card-title align-items-start flex-column">
			<span class="card-label fw-bold fs-3 mb-1">New Arrivals</span>
		</h3>
		<div class="card-toolbar">
			<a href="tambah_kategori.php" class="btn btn-sm btn-light-primary" >
				<!--begin::Svg Icon | path: icons/duotune/arrows/arr075.svg-->
				<span class="svg-icon svg-icon-2">
					<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
						<rect opacity="0.5" x="11.364" y="20.364" width="16" height="2" rx="1" transform="rotate(-90 11.364 20.364)" fill="currentColor" />
						<rect x="4.36396" y="11.364" width="16" height="2" rx="1" fill="currentColor" />
					</svg>
				</span>
				<!--end::Svg Icon-->Tambah Kategori</a>
		</div>
	</div>
	<!--end::Header-->
	<!--begin::Body-->
	<div class="card-body py-3">
		<!--begin::Table container-->
		<div class="table-responsive">
			<!--begin::Table-->
			<table class="table align-middle gs-0 gy-4">
				<!--begin::Table head-->
				<thead>
					<tr class="fw-bold text-muted bg-light">
						<th class="ps-4 min-w-325px rounded-start">Nama Kategori</th>
						<th class="min-w-150px text-end rounded-end"></th>
					</tr>
				</thead>
				<!--end::Table head-->
				<!--begin::Table body-->
				<tbody>
					<?php
					$data_laptop = select("SELECT * FROM kategori_laptop");

					while ($data = mysqli_fetch_assoc($data_laptop)) :
					?>
						<tr>
							<td>
								<div class="d-flex align-items-center">
									<div class="d-flex justify-content-start  flex-column">
										<a href="#" class="text-dark fw-bold  text-hover-primary mb-1 fs-6"><?= $data['nama_kategori'] ?></a>
									</div>
								</div>
							</td>

							<td class="text-end">
								
								<a href="update_kategori.php?id=<?= $data['id_kategori'] ?>" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
									<!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
									<span class="svg-icon svg-icon-3">
										<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path opacity="0.3" d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z" fill="currentColor" />
											<path d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z" fill="currentColor" />
										</svg>
									</span>
									<!--end::Svg Icon-->
								</a>
								<a href="hapus_kategori.php?id=<?= $data['id_kategori'] ?>" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm">
									<!--begin::Svg Icon | path: icons/duotune/general/gen027.svg-->
									<span class="svg-icon svg-icon-3">
										<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z" fill="currentColor" />
											<path opacity="0.5" d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z" fill="currentColor" />
											<path opacity="0.5" d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z" fill="currentColor" />
										</svg>
									</span>
									<!--end::Svg Icon-->
								</a>
							</td>
						</tr>
					<?php endwhile; ?>
				</tbody>
				<!--end::Table body-->
			</table>
			<!--end::Table-->
		</div>
		<!--end::Table container-->
	</div>
	<!--begin::Body-->
</div>
<!--end::Tables Widget 11-->

<!--begin::Modal - New Target-->
<div class="modal fade" id="kt_modal_new_target" tabindex="-1" aria-hidden="true">
	<!--begin::Modal dialog-->
	<div class="modal-dialog modal-dialog-centered mw-650px">
		<!--begin::Modal content-->
		<div class="modal-content rounded">
			<!--begin::Modal header-->
			<div class="modal-header pb-0 border-0 justify-content-end">
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
			<!--begin::Modal header-->
			<!--begin::Modal body-->
			<div class="modal-body scroll-y px-10 px-lg-15 pt-0 pb-15">
				<!--begin:Form-->
				<form id="kt_modal_new_target_form" class="form" action="proses.php?proses=store&jenis=laptop" method="POST" enctype="multipart/form-data">
					<!--begin::Heading-->
					<div class="mb-13 text-center">
						<!--begin::Title-->
						<h1 class="mb-3">Tambah Laptop</h1>
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
						<input type="text" class="form-control form-control-solid" placeholder="Masukkan Merk Laptop" name="merk_laptop" />
					</div>
					<!--end::Input group-->
					<!--begin::Input group-->
					<div class="row g-9 mb-8">
						<!--begin::Col-->
						<div class="col-md-6 fv-row">
							<label class="required fs-6 fw-semibold mb-2">Kategori Laptop</label>
							<select class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Select Kategori" name="kategori_laptop">
								<option value="">Select kategori...</option>
								<?php
								$data_kategori = select("SELECT * FROM kategori_laptop");
								while ($data = mysqli_fetch_assoc($data_kategori)) :
								?>
									<option value="<?= $data['id_kategori'] ?>"><?= $data['nama_kategori'] ?></option>
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
							<input type="text" class="form-control form-control-solid" placeholder="Masukkan Nomor Serial Laptop" name="no_serial" />
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
							<input type="text" class="form-control form-control-solid" placeholder="Masukkan Model Laptop" name="model_laptop" />
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
							<input type="text" class="form-control form-control-solid" placeholder="Masukkan Harga Laptop" name="harga_laptop" id="rupiah" />

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
							<select class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Select Processor" name="prosesor_laptop">
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
							<select class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Select Memory" name="ram_laptop">
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
							<select class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Select Storage" name="storage_laptop">
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
							<select class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Select Graphic Card" name="vga_laptop">
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
							<select class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Select Screen" name="screen_laptop">
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
							<input type="file" class="form-control form-control-solid" name="gambar_laptop" />

						</div>
						<!--end::Input group-->
					</div>
					<!--end::Input group-->

					<!--begin::Actions-->
					<div class="text-center">
						<button type="reset" id="kt_modal_new_target_cancel" class="btn btn-light me-3">Cancel</button>
						<button type="submit" id="kt_modal_new_target_submit" class="btn btn-primary">
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

<!--begin::Modal - Update Target-->
<div class="modal fade" id="kt_modal_new_update" tabindex="-1" aria-hidden="true">
	<!--begin::Modal dialog-->
	<div class="modal-dialog modal-dialog-centered mw-650px">
		<!--begin::Modal content-->
		<div class="modal-content rounded">
			<!--begin::Modal header-->
			<div class="modal-header pb-0 border-0 justify-content-end">
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
			<!--begin::Modal header-->
			<!--begin::Modal body-->
			<div class="modal-body scroll-y px-10 px-lg-15 pt-0 pb-15">
				<!--begin:Form-->
				<form id="kt_modal_new_target_form_update" class="form" action="proses.php?proses=store&jenis=laptop" method="POST" enctype="multipart/form-data">
					<!--begin::Heading-->
					<div class="mb-13 text-center">
						<!--begin::Title-->
						<h1 class="mb-3">Update Laptop</h1>
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
						<input type="text" class="form-control form-control-solid" placeholder="Masukkan Merk Laptop" name="merk_laptop" />
					</div>
					<!--end::Input group-->
					<!--begin::Input group-->
					<div class="row g-9 mb-8">
						<!--begin::Col-->
						<div class="col-md-6 fv-row">
							<label class="required fs-6 fw-semibold mb-2">Kategori Laptop</label>
							<select class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Select Kategori" name="kategori_laptop">
								<option value="">Select kategori...</option>
								<?php
								$data_kategori = select("SELECT * FROM kategori_laptop");
								while ($data = mysqli_fetch_assoc($data_kategori)) :
								?>
									<option value="<?= $data['id_kategori'] ?>"><?= $data['nama_kategori'] ?></option>
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
							<input type="text" class="form-control form-control-solid" placeholder="Masukkan Nomor Serial Laptop" name="no_serial" />
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
							<input type="text" class="form-control form-control-solid" placeholder="Masukkan Model Laptop" name="model_laptop" />
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
							<input type="text" class="form-control form-control-solid" placeholder="Masukkan Harga Laptop" name="harga_laptop" id="rupiah" />

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
							<select class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Select Processor" name="prosesor_laptop">
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
							<select class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Select Memory" name="ram_laptop">
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
							<select class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Select Storage" name="storage_laptop">
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
							<select class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Select Graphic Card" name="vga_laptop">
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
							<select class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Select Screen" name="screen_laptop">
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
							<input type="file" class="form-control form-control-solid" name="gambar_laptop" />

						</div>
						<!--end::Input group-->
					</div>
					<!--end::Input group-->

					<!--begin::Actions-->
					<div class="text-center">
						<button type="reset" id="kt_modal_new_target_cancel" class="btn btn-light me-3">Cancel</button>
						<button type="submit" id="kt_modal_new_target_submit" class="btn btn-primary">
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
<!--end::Modal - Update Target-->


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