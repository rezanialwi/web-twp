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
			<th>Nama</th>
			<th>Email</th>
			<th>Komentar</th>
			
		</tr>
</thead>
		<?php 
		$no = 1;
		foreach($kontak->result() as $u){ 
		?>
		 <tbody>
		<tr>
			<td><?php echo $no++ ?></td>
			<td><?php echo $u->nama ?></td>
			<td><?php echo $u->email ?></td>
			<td><?php echo $u->komen ?></td>
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

<?php $this->load->view("admin/partial/footer.php") ?>

</body>

</html>
