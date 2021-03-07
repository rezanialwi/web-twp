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
			<th>NIM</th>
			<th>Nama Calang</th>
		
            <th>Minat</th>
            <th>Foto</th>
		
		</tr>
</thead>
		<?php 
		$no = 1;
		foreach($foto->result() as $u){ 
		?>
		 <tbody>
		<tr>
   
			<td><?php echo $no++ ?></td>
			<td><?php echo $u->nim ?></td>
			<td><?php echo $u->nm_pendaftar ?></td>
			<td><?php echo $u->minat ?></td>
            <td><img width="100 " src="<?php echo base_url(); ?>uploads/<?php echo $u->foto ?>"></td>
			
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
