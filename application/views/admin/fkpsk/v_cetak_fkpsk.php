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
 <hr>
 <H3 class="text-center">DATA UNDANGAN</H3>
	 <div class="card-body">
      <div class="table-responsive">
      <table class="table table-bordered"  width="100%" cellspacing="0">
          <thead>
		<tr align="center">
			<th>No</th>
			<th>Nama </th>
			<th align="center">Jumlah Orang</th>
			<th>Keterangan</th>
			
		</tr>
</thead>
		<?php 
		$no = 1;
		foreach($fkpsk as $u){ 
		?>
		 <tbody>
		<tr align="center">
			<td><?php echo $no++ ?></td>
			<td><?php echo $u->nama ?></td>
			<td ><?php echo $u->jumlah ?></td>
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
