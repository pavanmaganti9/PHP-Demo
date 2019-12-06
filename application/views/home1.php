<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Manufacturer of Capsule Bottle, Plastic Bottle & Plastic Container offered by D V Plastics from Hyderabad, Telangana, India">
  <meta NAME="Keywords" CONTENT="Capsule Bottle, Plastic Bottle, Plastic Container, Shampoo bottle, 550ml HDPE BOTTLE 75MM CAP, Cosmetic Cream Bottle, HDPE Bottle, D V Plastics, Hyderabad" />
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
      <a class="navbar-brand" href="#">D V Plastics</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url('about'); ?>">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url('products'); ?>">Products</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url('contact'); ?>">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Header -->
  <header class="bg-primary py-5 mb-5">
    <div class="container h-100">
      <div class="row h-100 align-items-center">
        <div class="col-lg-12">
          <h1 class="display-4 text-white mt-5 mb-2">D V Plastics</h1>
          <p class="lead mb-5 text-white">We are the topmost manufacturer and trader of Capsule Bottle, Plastic Bottle and Plastic Container. All these products are timely rendered. -- <b>P Somaraju</b> (Proprietor)</p>
        </div>
      </div>
    </div>
  </header>
	<div class="container-fluid">
    <div id="carouselExample" class="carousel slide" data-ride="carousel" data-interval="9000">
        <div class="carousel-inner row w-100 mx-auto" role="listbox">
		
		<div class="carousel-item col-md-3 active">
               <div class="panel panel-default">
                  <div class="panel-thumbnail">
                    <a href="#" title="image 3" class="thumb">
                     <img class="img-fluid mx-auto d-block" src="//via.placeholder.com/600x400?text=1" alt="slide 2">
                    </a>
                  </div>
                </div>
            </div>
		
		<?php if(!empty($first)){ 
                  
                  foreach($first as $ff): 
                    $img = $ff->image;
                    $chunk = explode(".",$img);
                    $thumb = $chunk[0]."_thumb.".$chunk[1];
                    ?>
					
            <div class="carousel-item col-md-3">
               <div class="panel panel-default">
                  <div class="panel-thumbnail">
                    <a href="" title="<?php echo $ff->name;?>" class="thumb">
                      <img class="img-fluid mx-auto d-block" src="<?php echo site_url('assets/images/products/'.$thumb); ?>" alt="<?php echo $ff->name;?>" style="width:337px;height:224px;">
                    </a>
                  </div>
                </div>
            </div>
			
			 <?php endforeach; } ?>  
			 
			 <?php if(!empty($second)){ 
                  
                  foreach($second as $ff): 
                    $img = $ff->image;
                    $chunk = explode(".",$img);
                    $thumb = $chunk[0]."_thumb.".$chunk[1];
                    ?>
            <div class="carousel-item col-md-3 ">
               <div class="panel panel-default">
                  <div class="panel-thumbnail">
                    <a href="#" title="<?php echo $ff->name;?>" class="thumb">
                     <img class="img-fluid mx-auto d-block" src="<?php echo site_url('assets/images/products/'.$thumb); ?>" alt="slide 2" style="width:337px;height:224px;">
                    </a>
                  </div>
                </div>
            </div>
			<?php endforeach; } ?>
            
        </div>
        <a class="carousel-control-prev" href="#carouselExample" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next text-faded" href="#carouselExample" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div><br>
  <!-- Page Content -->
  <div class="container">

    <div class="row">
      <div class="col-md-8 mb-5">
        <h2>Our Products</h2>
        <hr>
        <p>We are the topmost manufacturer and trader of Capsule Bottle, Plastic Bottle and Plastic Container. All these products are timely rendered.</p>
        
        <a class="btn btn-primary btn" href="<?php echo site_url('contact'); ?>">Contact &raquo;</a>
      </div>
      <div class="col-md-4 mb-5">
        <h2>Contact Us</h2>
        <hr>
        <address>
          <strong>D V Plastics</strong>
          <br>Plot No. 420/1, Phase 1 IDA Cherlapally,
          <br>Near Icomm Tele Limited, Cherlapalli,
		  <br>Hyderabad-500051, Telangana, India.
          <br>
        </address>
        <address>
          <abbr title="Phone">P:</abbr>
          (123)456-7890
          <br>
          <abbr title="Email">E:</abbr>
          <a href="mailto:dvplastics@gmail.com">dvplastics@gmail.com</a>
        </address>
      </div>
    </div>
    <!-- /.row -->
	
    <div class="row">
	
		<?php if(!empty($first)){ 
                  
                  foreach($first as $ff): 
                    $img = $ff->image;
                    $chunk = explode(".",$img);
                    $thumb = $chunk[0]."_thumb.".$chunk[1];
                    ?>
	
      <div class="col-md-3 mb-5">
        <div class="card h-100">
          <img class="card-img-top" src="<?php echo site_url('assets/images/products/'.$thumb); ?>" alt="">
          <div class="card-body">
            <h4 class="card-title"><?php echo $ff->name; ?></h4>
            <p class="card-text"><?php echo $ff->desc; ?></p>
          </div>
          <div class="card-footer">
            <a href="product/<?php echo $ff->slug; ?>" class="btn btn-primary">Find Out More!</a>
          </div>
        </div>
      </div>
	  
	   <?php endforeach; } ?>  
	  
    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; D V Plastics <?php echo date("Y");?><br> Developed and Managed by <b>MDITS</b></p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="<?php echo base_url(); ?>assets/front/js/jquery.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/front/js/bootstrap.bundle.min.js"></script>

</body>
<style>
@media (min-width: 768px) {

    /* show 3 items */
    .carousel-inner .active,
    .carousel-inner .active + .carousel-item,
    .carousel-inner .active + .carousel-item + .carousel-item,
    .carousel-inner .active + .carousel-item + .carousel-item + .carousel-item  {
        display: block;
    }
    
    .carousel-inner .carousel-item.active:not(.carousel-item-right):not(.carousel-item-left),
    .carousel-inner .carousel-item.active:not(.carousel-item-right):not(.carousel-item-left) + .carousel-item,
    .carousel-inner .carousel-item.active:not(.carousel-item-right):not(.carousel-item-left) + .carousel-item + .carousel-item,
    .carousel-inner .carousel-item.active:not(.carousel-item-right):not(.carousel-item-left) + .carousel-item + .carousel-item + .carousel-item {
        transition: none;
    }
    
    .carousel-inner .carousel-item-next,
    .carousel-inner .carousel-item-prev {
      position: relative;
      transform: translate3d(0, 0, 0);
    }
    
    .carousel-inner .active.carousel-item + .carousel-item + .carousel-item + .carousel-item + .carousel-item {
        position: absolute;
        top: 0;
        right: -25%;
        z-index: -1;
        display: block;
        visibility: visible;
    }
    
    /* left or forward direction */
    .active.carousel-item-left + .carousel-item-next.carousel-item-left,
    .carousel-item-next.carousel-item-left + .carousel-item,
    .carousel-item-next.carousel-item-left + .carousel-item + .carousel-item,
    .carousel-item-next.carousel-item-left + .carousel-item + .carousel-item + .carousel-item,
    .carousel-item-next.carousel-item-left + .carousel-item + .carousel-item + .carousel-item + .carousel-item {
        position: relative;
        transform: translate3d(-100%, 0, 0);
        visibility: visible;
    }
    
    /* farthest right hidden item must be abso position for animations */
    .carousel-inner .carousel-item-prev.carousel-item-right {
        position: absolute;
        top: 0;
        left: 0;
        z-index: -1;
        display: block;
        visibility: visible;
    }
    
    /* right or prev direction */
    .active.carousel-item-right + .carousel-item-prev.carousel-item-right,
    .carousel-item-prev.carousel-item-right + .carousel-item,
    .carousel-item-prev.carousel-item-right + .carousel-item + .carousel-item,
    .carousel-item-prev.carousel-item-right + .carousel-item + .carousel-item + .carousel-item,
    .carousel-item-prev.carousel-item-right + .carousel-item + .carousel-item + .carousel-item + .carousel-item {
        position: relative;
        transform: translate3d(100%, 0, 0);
        visibility: visible;
        display: block;
        visibility: visible;
    }

}

 /* Bootstrap Lightbox using Modal */

#profile-grid { overflow: auto; white-space: normal; } 
#profile-grid .profile { padding-bottom: 40px; }
#profile-grid .panel { padding: 0 }
#profile-grid .panel-body { padding: 15px }
#profile-grid .profile-name { font-weight: bold; }
#profile-grid .thumbnail {margin-bottom:6px;}
#profile-grid .panel-thumbnail { overflow: hidden; }
#profile-grid .img-rounded { border-radius: 4px 4px 0 0;}
</style>


<script>
$('#carouselExample').on('slide.bs.carousel', function (e) {

  
    var $e = $(e.relatedTarget);
    var idx = $e.index();
    var itemsPerSlide = 4;
    var totalItems = $('.carousel-item').length;
    
    if (idx >= totalItems-(itemsPerSlide-1)) {
        var it = itemsPerSlide - (totalItems - idx);
        for (var i=0; i<it; i++) {
            // append slides to end
            if (e.direction=="left") {
                $('.carousel-item').eq(i).appendTo('.carousel-inner');
            }
            else {
                $('.carousel-item').eq(0).appendTo('.carousel-inner');
            }
        }
    }
});


  $('#carouselExample').carousel({ 
                interval: 2000
        });


  $(document).ready(function() {
/* show lightbox when clicking a thumbnail */
    $('a.thumb').click(function(event){
      event.preventDefault();
      var content = $('.modal-body');
      content.empty();
        var title = $(this).attr("title");
        $('.modal-title').html(title);        
        content.html($(this).html());
        $(".modal-profile").modal({show:true});
    });

  });
</script>
</html>
