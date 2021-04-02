<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compitable" content="IE=edge">
	<title>Bukti Pengajuan Permohonan Informasi</title>
	<link rel="stylesheet" type="text/css" href="">

	<!-- <link href="<?php echo base_url('assets/bower_components/bootstrap/dist/css/bootstrap.min.css') ?>" rel="stylesheet"> -->
	<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">-->
	<style>
		.line-title{
			border: 0;
			border-style: inset;
			border-top: 1px solid #000;
		}
		.table.table-bordered{
			border:1px solid black;
		}

		.table.table-bordered > thead > tr > th {
			border:1px solid black;
		}
		.table.table-bordered > tbody > tr > td{
			border:1px solid black;
		}

		.tag1 
		{
    -webkit-column-count: 2;
    -moz-column-count: 2;
    column-count: 2;
	  }

	  /* body{
		width:99%;
    	 height: 99%;
		 border: 2px solid black;
	  } */

	  .tandatangan{
    text-align:center; 
	width:425px;
	float:left;
	font-weight: bold;
}

.tandatangan2{
    text-align:center; 
	margin-left:545px;
	font-weight: bold;
}

.merah{
	color: red;
}
/* watermak */

	</style>
</head>
<body onload="window.print()">

    <div id="content">
	<table style="width: 100%;">
		<tr>
				<img src="<?php echo base_url().'assets/img/twp1.jpg'?>" style="position: absolute; width: 120px; height: auto;">
				<td align="center">
			
				<span style="line-height: 1.6; font-weight: bold; font-size: 20px; align-content: center;">&nbsp;
				FORMULIR PENDAFTARAN TIKET <br>
                UKM TEATER WASI PUTIH <br>
“BERSAMA DENGAN KEPERCAYAAN, TEGUH DALAM BERKARYA”
				</span>
				<br>
				
			<br><br>
			</td>
		</tr>
	</table>

	<hr class="line-title">
	
    <section class="center">
    
<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr align="center">
              
                <th >Nama </th>
                <th >Alamat</th>
                <th >Asal Organisasi/Kampus</th>
				<th >Telp/WA</th>
				<th >Email</th>
              </tr>
			</thead>		
            <tbody>
				<tr align="center">
				<td><i><?php echo $detail->nama ?></i></td>
				<td><i><?php echo $detail->alamat ?></i></td>
				<td><i><?php echo $detail->asal ?></i></td>
				<td><i><?php echo $detail->telp ?></i></td>
				<td><i><?php echo $detail->email ?></i></td>
        
			</tr>
			</tbody>
			
          </table>                            
                            </section>
							<br>
				<section >		
				<p class="merah">*Bukti ini wajib dibawa saat menonton !</p>
		<div class="tandatangan">
		
		</div>
<br/>
<br/>
<br/>
  
</div>
</div>
        
	</section>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.3/moment.min.js">
			<script>
    
    $(".tm").on("change", function() {
    this.setAttribute(
        "data-date",
        moment(this.value, "YYYY-MM-DD")
        .format( this.getAttribute("data-date-format") )
    )
    }).trigger("change")

</script>					
					
						
						
                    
						

</body>
</html>