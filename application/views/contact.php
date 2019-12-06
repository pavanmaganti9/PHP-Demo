<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="D V Plastics - Manufacturer of 25ml,28mmcap ( Tablet Bottle), HDPE Plastic Bottle, Hdpe Tablet Bottles, 125mlHDPE BOTTLE 25MM FTC cap and Plastic Bottles & Jars in Cherlapalli, Hyderabad, Telangana">
  <meta NAME="Keywords" CONTENT="D V Plastics, Cherlapalli, Hyderabad, Telangana, 25ml,28mmcap ( Tablet Bottle), HDPE Plastic Bottle, Hdpe Tablet Bottles, 125mlHDPE BOTTLE 25MM FTC cap, HDPE BOTTLE 75MM CAP., Plastic Bottles & Jars, Manufacturer from Hyderabad" />
  <meta name="author" content="">

  <title><?php echo $title;?></title>

  <!-- Bootstrap core CSS -->
  <link href="<?php echo base_url(); ?>assets/front/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="<?php echo base_url(); ?>assets/front/css/business-frontpage.css" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="<?php echo site_url('home'); ?>">D V Plastics</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url('home'); ?>">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url('about'); ?>">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url('products'); ?>">Products</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="<?php echo site_url('contact'); ?>">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Content -->
<div class="container">
    <div class="row">
	<div class="col-md-12"><br>
        <div class="col-md-8">
        	
			<iframe width="100%" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3805.9614565177503!2d78.58816181418862!3d17.46155880525932!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bcb9c41bfaf332b%3A0x7ad674ba876720e8!2sICOMM%20Tele%20Limited!5e0!3m2!1sen!2sin!4v1575226358297!5m2!1sen!2sin" width="600" style="border:0;" allowfullscreen=""></iframe>
    	</div>
    	
      	<div class="col-md-4">
    		<address>
          <strong>D V Plastics</strong>
          <br>Plot No. 420/1, Phase 1 IDA Cherlapally,
          <br>Near Icomm Tele Limited, Cherlapalli,
		  <br>Hyderabad-500051, Telangana, India.
          <br>
        </address>
    	</div><br><br>
		<form class="form-horizontal" role="form" method="post" action="<?php echo site_url('home/mobile'); ?>">
		<div class="form-group">
		<label for="name" class="col-sm-2 control-label">Mobile number</label>
		<div class="col-sm-10">
			<input type="number" class="form-control" id="mobile" name="mobile" required>
		</div>
	</div>
	<div class="form-group">
		<label for="name" class="col-sm-2 control-label">Name</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" id="name" name="name" required>
		</div>
	</div>
	<div class="form-group">
		<label for="message" class="col-sm-2 control-label">Requirement Details</label>
		<div class="col-sm-10">
			<textarea class="form-control" rows="4" name="message" required></textarea>
		</div>
	</div>
	<div class="form-group">
		<div class="col-sm-10 col-sm-offset-2">
			<input id="submit" name="submit" type="submit" value="Contact Now" class="btn btn-primary">
		</div>
	</div>
	<div class="form-group">
		<div class="col-sm-10 col-sm-offset-2">
			<! Will be used to display an alert to the user>
		</div>
	</div>
</form>
		</div>
    </div>
</div>
  <!-- /.container -->

  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Your Website 2019</p>
    </div>
    <!-- /.container -->
  </footer>

  <script src="<?php echo base_url(); ?>assets/front/js/jquery.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/front/js/bootstrap.bundle.min.js"></script>
  

</body>

</html>
