<!DOCTYPE html>
<html lang="en">

<head>



</head>

<body id="page-top">

    
<h2><center>Data Absen Pengurus</center></h2>
<table border="1" width="100%" style="text-align:center;">
          <thead>
		<tr>
			<th>No</th>
			<th>Nama Pengurus</th>
			<th>Nama Acara</th>
			<th>Jam</th>
			<th>Status</th>
		</tr>
</thead>
		<?php 
		$no = 1;
		foreach($absensi_pengurus as $u){ 
		?>
		 <tbody>
		<tr>
			<td><?php echo $no++ ?></td>
			<td><?php echo $u->nama_pengurus ?></td>
			<td><?php echo $u->nama_proker ?></td>
			<td><?php echo $u->jam ?></td>
			<td><?php echo $u->keterangan ?></td>
			
		</tr>
		</tbody>
		<?php } ?>
  </table>
  



</body>

</html>
