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
          <li class="nav-item active">
            <a class="nav-link" href="<?php echo site_url('products'); ?>">Products</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url('contact'); ?>">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Content -->
  <div class="container">

    <div class="row">

      <!-- Post Content Column -->
      <div class="col-lg-8">

        <!-- Title -->
        <h1 class="mt-4">Products</h1>
        <hr>
		<?php foreach($products as $row){	
					$img = $row->image;
                    $chunk = explode(".",$img);
                    $thumb = $chunk[0]."_thumb.".$chunk[1];?>
		<div class="card mb-4">
          
          <div class="card-body">
            <h2 class="card-title"><?php echo $row->name;?></h2>
			
            <p class="card-text"><?php echo $row->desc;?></p>
            <div><div align="right"> Rs  <b><?php echo $row->price;?></b> / Bottle&nbsp;<br><a href="<?php echo base_url('product/'.$row->slug);?>" class="btn btn-primary">View More &rarr;</a></div>
			<img src="<?php echo site_url('assets/images/products/'.$thumb); ?>" alt="Card" width="200" height="200"></div>
          </div>
          <div class="card-footer text-muted">
            Posted on <?php echo $row->created;?> by
            D V Plastics
          </div>
        </div>
		<?php } ?>
      </div>

      <!-- Sidebar Widgets Column -->
      <div class="col-md-4">

        <!-- Search Widget -->
        <div class="card my-4">
          <h5 class="card-header">Search</h5>
          <div class="card-body">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Search for...">
              <span class="input-group-btn">
                <button class="btn btn-secondary" type="button">Go!</button>
              </span>
            </div>
          </div>
        </div>

        <!-- Categories Widget -->
        <div class="card my-4">
          <h5 class="card-header">Categories</h5>
          <div class="card-body">
            <div class="row">
              <div class="col-lg-6">
                <ul class="list-unstyled mb-0">
                  <li>
                    <a href="#">Web Design</a>
                  </li>
                  <li>
                    <a href="#">HTML</a>
                  </li>
                  <li>
                    <a href="#">Freebies</a>
                  </li>
                </ul>
              </div>
              <div class="col-lg-6">
                <ul class="list-unstyled mb-0">
                  <li>
                    <a href="#">JavaScript</a>
                  </li>
                  <li>
                    <a href="#">CSS</a>
                  </li>
                  <li>
                    <a href="#">Tutorials</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>

        <!-- Side Widget -->
        <div class="card my-4">
          <h5 class="card-header">Side Widget</h5>
          <div class="card-body">
            You can put anything you want inside of these side widgets. They are easy to use, and feature the new Bootstrap 4 card containers!
          </div>
        </div>

      </div>

    </div>
    <!-- /.row -->

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
