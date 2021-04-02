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
      <table class="table table-bordered"  width="100%" cellspacing="0">
          <thead>
		<tr>
			<th>No</th>
			<th>Nama </th>
			<th>Alamat </th>
			<th>Asal</th>
			<th>Telp</th>
			<th>Email</th>
			<th>Keterangan</th>
			
		</tr>
</thead>
		<?php 
		$no = 1;
		foreach($tiket as $u){ 
		?>
		 <tbody>
		<tr>
			<td><?php echo $no++ ?></td>
			<td><?php echo $u->nama ?></td>
			<td><?php echo $u->alamat ?></td>
			<td><?php echo $u->asal ?></td>
			<td><?php echo $u->telp ?></td>
			<td><?php echo $u->email ?></td>
			<td><?php echo $u->ket ?></td>
 
			
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
