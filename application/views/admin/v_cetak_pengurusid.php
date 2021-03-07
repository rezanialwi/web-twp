<!DOCTYPE html>
<html>
<head>

    <title>Bukti Pendaftaran</title>
    <?php $this->load->view("admin/partial/head.php") ?>

</head>
<body onload="script:window.print()"> 
    <?php $no=1;
     foreach($pengurus->result() as $u){ ?>
	<div class="container border border-dark"">
		<section class="text-center">
		<img src="<?php echo base_url(); ?>assets/img/twp1.jpg" width="10%" class="rounded-circle img-thumbnail">
		<h4>FORMULIR PENDAFTARAN CALON ANGGOTA</h4>
		<h4>UKM TEATER WASI PUTIH</h4>
		<h4>"BERSAMA DENGAN KEPERCAYAAN, TEGUH DALAM BERKARYA"</h4>
		</section>
	
        <hr>
        <section >
		<table class="table-data mx-auto" border="0">
        <tr>
				<td>No Anggota</td>
				<td>:</td>
				<td><?php echo  $u->no_anggota ?></td>		
			</tr>
    	<tr>
				<td>Nama Lengkap</td>
				<td>:</td>
				<td><?php echo $u->nama ?></td>
			</tr>
			<tr>
				<td>Nim</td>
				<td>:</td>
				<td><?php echo  $u->nim ?></td>		
			</tr>
			<tr>
				<td>Prodi</td>
				<td>:</td>
				<td><?php echo $u->prodi ?></td>
			</tr>
			<tr>
				<td>Nomer Whatsapp</td>
				<td>:</td>
				<td><?php echo $u->no_wa ?></td>
			</tr>            
			<tr>
				<td>Alamat</td>
				<td>:</td>
				<td><?php echo $u->alamat ?></td>
			</tr>
            <tr>
				<td>Jabatan</td>
				<td>:</td>
				<td><?php echo $u->jabatan ?></td>
			</tr>

		<tr>
       <td>Foto</td> 
       <td>:</td>
      <td><img src="<?php echo base_url(); ?>uploads/<?php echo $u->foto ?>" width='100' height='100' class='img-thumbnail'>
        </tr>
		</table>
        </section>
        <h6><b>Contact Person</b></h6>
        <h6> Lina	: 0831-5994-9679 (WA)</h6>
        <h6> Noval	: 0852-8211-8512 (WA)</h6>
	<?php
	}
	?>

    </div>
    <!-- Bootstrap core JavaScript-->
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