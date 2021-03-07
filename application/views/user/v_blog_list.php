
<html class="no-js" lang="zxx">

<head>
  <?php $this->load->view("user/head.php") ?>
  <style type="text/css">
    .visitor{
         background: black;
    }

    .f1{
        color: white;
        background: white;
    }
  </style>
  </head>
  <body>
<main>
        <!--? slider Area Start-->
        <div class="slider-area ">
            <div class="slider-active">
                <!-- Single Slider -->
                <div class="single-slider slider-height d-flex align-items-center">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-7 col-lg-7 col-md-8">
                                <div class="hero__caption">
                                    <span data-animation="fadeInUp" data-delay=".4s">Teater Wasi Putih</span>
                                    <h1 data-animation="fadeInUp" data-delay=".6s">Portal Artikel</h1>
                                    <!-- Hero-btn -->
                                    <div class="hero__btn">
                                        <a href="<?php echo site_url('home') ?>" class="btn hero-btn" data-animation="fadeInLeft"
                                            data-delay=".8s">Home</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Hero Man Img -->
                    <div class="hero-man">
                        <img src="image/logo/" alt="">
                    </div>
                </div>
            
                    <!-- Hero Man Img -->
                    <div class="hero-man">
                        <img src="<?php echo base_url(); ?>assets2/img/hero/hero_man1.png" alt="">
                    </div>
                </div>
            </div>
        </div>
        <!-- slider Area End-->
        <!--? About Area start -->


        <section class="about-area about1 section-padding30">
            <div class="container">
                <div class="row justify-content-between">
                   
							 <?php
								function limit_words($string, $word_limit){
					                $words = explode(" ",$string);
					                return implode(" ",array_splice($words,0,$word_limit));
					            }
								foreach ($data->result() as $row) :
							?>
							<div class="col-lg-8 col-md-10 mx-auto caption">
								<h2> <?php echo $row->artikel_judul;?></h2>
								<img src="<?php echo base_url().'uploads/artikel/'.$row->artikel_sampul;?>" width="450px" height="300px" class="img-fluid">
								<h6><?php echo $row->artikel_tanggal;?></h6>
								<p class="f1"><?php echo limit_words($row->artikel_konten,50);?></p><a target="_blank" href="<?php echo base_url().'blog/detail/'.$row->artikel_slug;?>"> <strong>Selengkapnya ></strong></a><hr/>
							</div>
							<?php endforeach;?>                      

                        
                    </div>
                </div>
            </div>
            <!--? Brand Shape  -->
            <div class="about-shape d-none d-xl-block">
                <img src="<?php echo base_url(); ?>assets2/img/gallery/about_shape.png" alt="">
            </div>
        </section>

    </main>
    
      <?php $this->load->view("user/footer.php") ?>
      </body>

</html>