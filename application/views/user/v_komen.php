<?php $this->load->view("user/head.php") ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	
<style>
* {
  box-sizing: border-box;
}

/* Style inputs */
input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

/* Style the container/contact section */
.container {
  border-radius: 5px;
  
  padding: 10px;
}

/* Create two columns that float next to eachother */
.column {
  float: left;
  width: 50%;
  margin-top: 6px;
  padding: 20px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .column, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
                </style>
                </head>
                <body>
                  <main>
                        <div class="slider-area ">
                            <div class="slider-height2 d-flex align-items-center">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <div class="hero-cap hero-cap2 text-center">
                                                <h2>About Us</h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                <section class="bg">
                <div class="container">
                  <div style="text-align:center ">
                    <h2>Contact Us</h2>
                    <p class="info1">Swing by for a cup of coffee, or leave us a message:</p>
                  </div>
                  <div class="row">
                    <div class="column">
                      <img src="<?php echo base_url(); ?>image/logo/twp1.jpg" style="width:90%" class="rounded-circle img-thumbnail">
                    </div>
                    <div class="column">
                      <form action="<?php echo base_url(). 'komen/tambah_aksi'; ?>" method="post" class="info1">
                        <label for="fname">Name</label>
                        <input type="text" id="nama" name="nama" placeholder="Your name..">
                        <label for="lname">Email</label>
                        <input type="text" id="email" name="email" placeholder="Your Email..">
                        <label for="subject">Comment</label>
                        <textarea id="komen" name="komen" placeholder="Write something.." style="height:170px"></textarea>
                        <input type="submit" value="Submit" >
                      </form>
                    </div>
                  </div>
                </div>
                </section>
<?php $this->load->view("user/footer.php") ?>
