<?php 
	$b=$data->row_array();
?>

<html class="no-js" lang="zxx">

<head>
  <?php $this->load->view("user/head.php") ?>
  <style type="text/css">
    .visitor{
         background: black;
    }
    .f1{
        color: white;
    }
  </style>
  </head>
  <body>
<main>
       
        <section class="about-area about1 section-padding30">
            <div class="container">
                <div class="row justify-content-between">
                
			    <div class="container">
					<div class="col-lg-8 col-md-10 mx-auto">
						<h2 class="f1"><?php echo $b['artikel_judul'];?></h2><hr/>
						<img src="<?php echo base_url().'uploads/artikel/'.$b['artikel_sampul'];?>" width="750px" height="450px" class="img-fluid">
						<h6 class="f1"><?php echo $b['artikel_tanggal'];?></h6>
						<p class="f1"><?php echo $b['artikel_konten'];?></p>
					</div>
					
				</div>

				<script src="<?php echo base_url().'assets/jquery/jquery-2.2.3.min.js'?>"></script>
				<script type="text/javascript" src="<?php echo base_url().'assets/js/bootstrap.js'?>"></script>   
										                     
			      
                </div>
            </div>
           
        </section>

    </main>
    
      <?php $this->load->view("user/footer.php") ?>
      </body>

</html>


