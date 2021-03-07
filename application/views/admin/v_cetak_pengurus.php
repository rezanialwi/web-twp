<!DOCTYPE html>
<html lang="en">

<head>

  <?php $this->load->view("admin/partial/head.php") ?>

</head>

<body onload="script:window.print()">
	<div class="container">
		<section class="text-center">
		<img src="<?php echo base_url(); ?>assets/img/twp1.jpg" width="10%" class="rounded-circle img-thumbnail">
		<h4>FORMULIR PENDAFTARAN CALON ANGGOTA</h4>
		<h4>UKM TEATER WASI PUTIH</h4>
		<h4>"BERSAMA DENGAN KEPERCAYAAN, TEGUH DALAM BERKARYA"</h4>
		</section>
           <div class="card-body">
      <div class="table-responsive">
     <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
			<tr>
			<th>No</th>
			<th>No_Anggota</th>
			<th>Nama Pengurus</th>
            <th>NIM</th>
            <th>Prodi</th>
            <th>No Wa</th>
            <th>Alamat</th>
            <th>Jabatan</th>
            <th>Foto</th>
			
		</tr>
</thead>
		<?php 
		$no = 1;
		foreach($pengurus->result() as $data) {?>
		 <tbody>
		<tr>
      <input type="hidden" name="id_pengurus" value="<?php echo $data->id_pengurus?>">
			<td><?php echo $no++ ?></td>
			<td><?php echo $data->no_anggota ?></td>
			<td><?php echo $data->nama ?></td>
			<td><?php echo $data->nim ?></td>
			<td><?php echo $data->prodi ?></td>
			<td><?php echo $data->no_wa ?></td>
			<td><?php echo $data->alamat ?></td>
			<td><?php echo $data->jabatan ?></td>
            <td><img width="50" src="<?php echo base_url(); ?>uploads/<?php echo $data->foto ?>"></td>
			
		</tr>
		</tbody>
		<?php } ?>
	</table>
   </div>
 </div>
	 
          </div>

          <!-- Content Row -->


        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->

  <!-- End of Page Wrapper -->

<script src="<?php echo base_url('assets/vendor/jquery/jquery.min.js') ?>"></script>
  <script src="<?php echo base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?php echo base_url('assets/vendor/jquery-easing/jquery.easing.min.js') ?>"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?php echo base_url('assets/js/sb-admin-2.min.js') ?>"></script>

  <!-- Page level plugins -->
  <script src="<?php echo base_url('assets/vendor/chart.js/Chart.min.js') ?>"></script>

  <!-- Page level custom scripts -->
  <script src="<?php echo base_url('assets/js/demo/chart-area-demo.js') ?>"></script>
  <script src="<?php echo base_url('assets/js/demo/chart-pie-demo.js') ?>"></script>

</body>

</html>
