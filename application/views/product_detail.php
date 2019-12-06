<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title><?php echo $title;?></title>

  <!-- Bootstrap core CSS -->
  <link href="<?php echo base_url(); ?>assets/front/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/front/css/business-frontpage.css" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="<?php echo base_url(); ?>assets/wm-zoom/css/blog-post.css" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/wm-zoom/css/app.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/wm-zoom/jquery.wm-zoom-1.0.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/wm-zoom/css/bootstrap-theme.min.css">

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
            <a class="nav-link" href="#">Services</a>
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
        <h1 class="mt-4"><?php echo $post['name'];?></h1>

        <!-- Author -->
        <p class="lead">
         <b> Rs <?php echo $post['price'];?> / bottle </b>
        </p>

        <hr>

        <!-- Date/Time -->
        <p>Posted on <?php echo $post['created'];?></p>
        <hr>
		<?php $img = $post['image'];
                    $chunk = explode(".",$img);
                    $thumb = $chunk[0]."_thumb.".$chunk[1];?>
		<div class="wm-zoom-container my-zoom-1">
			  				<div class="wm-zoom-box">
								<img src="<?php echo site_url('assets/images/products/'.$post['image']); ?>" class="wm-zoom-default-img" alt="alternative text" data-hight-src="<?php echo site_url('assets/images/products/'.$thumb); ?>" data-loader-src="vendor/img/loader.gif">
			  				</div> 
			  			</div><br>
        <!-- Preview Image 
        <img class="img-fluid rounded" src="http://placehold.it/900x300" alt="">-->

        <hr>
		
        <!-- Post Content -->
        <p class="mb-0"><?php echo $post['desc'];?></p>

       
        <hr>

        <!-- Comments Form -->
        <div class="card my-4">
          <h5 class="card-header">Get Best Quote from <b>D V Plastics</b>:</h5>
          <div class="card-body">
            <form class="form-horizontal" role="form" method="post" action="<?php echo site_url('home/mobile'); ?>">
		<div class="form-group">
		<label for="name" class="col-sm-5 control-label">Mobile number</label>
		<div class="col-sm-10">
			<input type="number" class="form-control" id="mobile" name="mobile" required>
		</div>
	</div>
	<div class="form-group">
		<label for="name" class="col-sm-5 control-label">Name</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" id="name" name="name" required>
		</div>
	</div>
	<div class="form-group">
		<label for="message" class="col-sm-5 control-label">Requirement Details</label>
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

      <!-- Sidebar Widgets Column -->
      <div class="col-md-4">

        <!-- Search Widget -->
        <div class="card my-4">
          <h5 class="card-header">Search</h5>
          <div class="card-body">
		  <form class="form-horizontal" role="form" method="post" action="<?php echo site_url('home/search'); ?>">
            <div class="input-group">
              <input type="text" name="searchfield" class="form-control" placeholder="Search for..." required>
              <span class="input-group-btn">
			  <input type="submit" name="submit" class="btn btn-secondary" value="Search">
                <!--<button class="btn btn-secondary" type="button">Go!</button>-->
              </span>
            </div>
			</form>
          </div>
        </div>

        <!-- Categories Widget -->
        <div class="card my-4">
          <h5 class="card-header">Related Products</h5>
          <div class="card-body">
            <div class="row">
              <div class="col-lg-12">
                <ul class="list-unstyled mb-0">
				<?php //print_r($types);
				foreach($types as $row){
					
				?>
                  <li>
                    <a href="<?php echo base_url('product/'.$row['slug']);?>"><?php echo $row['name'];?></a>
                  </li>
				<?php } ?>
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

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  
  <script type="text/javascript" src="<?php echo base_url(); ?>assets/wm-zoom/js/jquery-1.11.1.js"></script>
		<script type="text/javascript" src="<?php echo base_url(); ?>assets/wm-zoom/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url(); ?>assets/wm-zoom/jquery.wm-zoom-1.0.min.js"></script>
		<script type="text/javascript">
			$(document).ready(function(){
				$('.my-zoom-1').WMZoom();
				$('.my-zoom-2').WMZoom({
					config : {
						inner : true
					}
				});
			});
		</script>

</body>

</html>
