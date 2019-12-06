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
        <h1 class="mt-4">Search Products</h1>
        <hr>

      <?php
	  if(!empty($query)){
				foreach($query as $row){
					$img = $row['image'];
                    $chunk = explode(".",$img);
                    $thumb = $chunk[0]."_thumb.".$chunk[1];
				?>
                   

               <div class="col-lg-12 col-md-8 col-sm-9 col-xs-12">
		    
		    <article>
		        <div class="row">
		            <div class="col-lg-3 col-md-4">
		                <figure>
		                    <img src="<?php echo site_url('assets/images/products/'.$thumb); ?>">
		                </figure>
		            </div>
		            <div class="col-sm-4 col-md-8">
		                <h4><a href="<?php echo base_url('product/'.$row['slug']);?>"><?php echo $row['name'];?></a></h4>
		                <p><?php echo substr($row['desc'],0,80);?>....</p>
		                <section>
		                   
		                    <i class="glyphicon glyphicon-calendar"></i>Rs <b><?php echo $row['price'];?></b>/Bottle
		                    <i class="glyphicon glyphicon-eye-open"></i>Posted: <?php echo $row['created'];?>
		                    <a href="<?php echo base_url('product/'.$row['slug']);?>" class="btn btn-default">View Product</a>
		                </section>
		            </div>
		        </div>
		    </article>
		 
		</div>
	  <?php } }else{ echo "<b>No Results Found!</b>";}?>  
	
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
  
<style>

/*recent-post-col////////////////////*/
.widget-sidebar {
    background-color: #fff;
    padding: 20px;
    margin-top: 30px;
}

.title-widget-sidebar {
    font-size: 14pt;
    border-bottom: 2px solid #e5ebef;
    margin-bottom: 15px;
    padding-bottom: 10px;    
    margin-top: 0px;
}

.title-widget-sidebar:after {
    border-bottom: 2px solid #f1c40f;
    width: 150px;
    display: block;
    position: absolute;
    content: '';
    padding-bottom: 10px;
}
/*categories//////////////////////*/

.categories-btn{
    background-color: #F39C12;
    margin-top:1px;
    color: #fff;
    cursor: pointer;
    padding: 18px;
    width: 100%;
    border: none;
    text-align: left;
    outline: none;
    font-size: 15px;
    transition: 0.4s;
    
}
.categories-btn:after {
    content: '\25BA';
    color: #fff;
    font-weight: bold;
    float: right;
    margin-left: 5px;
}
.categories-btn:hover {
    background-color: #16A085;color: #fff;
}


/* sol yazılar */

article{
    background-color: #E0E0E0;
    padding: 10px;
    margin-bottom: 10px;
    margin-top: 10px;
}
figure img{
    width: 100%;
    height: 100%;
}
.glyphicon-folder-open,
.glyphicon-user,
.glyphicon-calendar,
.glyphicon-eye-open,
.glyphicon-comment{
    padding: 5px;
}


/* Post tab custom css  */
.populat-post-tab {
    border: 1px solid #e0e0e0;
}

.populat-post-tab .nav-tabs {
    border: none;
}

.populat-post-tab .nav-tabs > li {
    width: 33.33333333333333%;
    text-align: center;
}

.populat-post-tab .nav-tabs > li a {
    background: #f0f5f7;
    margin-right: 0;
    border: 1px solid #e0e0e0;
    border-radius: 0;
    display: block;
    padding: 10px 0;
    font-weight: 700;
    font-size: 15px;
    color: #3a3c41;
    transition: all 0.01s;
}

.populat-post-tab .nav-tabs > li.active a {
    border-top: 2px solid #018EBB;
    border-bottom: none;
    border-left: none;
    border-right: none;
    background: #ffffff;
}

.tab-post-list-wrap {
    margin: 15px 0;
    padding: 0 35px;
}

.tab-post-thumb {
    margin: 0 15px 0 0;
}

.tab-post-thumb figure {
    width: 65px;
}

.tab-post-thumb figure img{
    max-width: 70px;
}

.tab-post-title h6 {
    font-size: 14px;
    font-weight: 700;
    line-height: 18px;
    margin-bottom: 5px;
}

.tab-post-title span {
    font-size: 12px;
    color: #999ca5;
}

.tab-post-list ul{
    list-style: none;
}

.tab-post-list ul li:before {
    content: "";
    width: 2px;
    height: 8px;
    padding: 0 4px;
    margin-right: 5px;
    background: #018EBB;
    display: inline-block;
}

.tab-post-list ul li small {
    display: block;
}

.tab-post-list ul li small abbr {
    font-size: 11px;
    line-height: 20px;
    text-decoration: none;
    border: none;
}



/* bulanık post */
.post
{
    background-color: #FFF;
    overflow: hidden;
    box-shadow: 0 0 1px #CCC;
}
.post img
{
    filter: blur(2px);
    -webkit-filter: blur(2px);
    -moz-filter: blur(2px);
    -o-filter: blur(2px);
    -ms-filter: blur(2px);
}
.post img:hover
{
    filter: blur(0px);
    -webkit-filter: blur(0px);
    -moz-filter: blur(0px);
    -o-filter: blur(0px);
    -ms-filter: blur(0px);
}
.post .content
{
    padding: 15px;
}
.post .author
{
    font-size: 11px;
    color: #737373;
    padding: 25px 30px 20px;
}
.post .post-img-content
{
    height: 196px;
    position: relative;
}
.post .post-img-content img
{
    position: absolute;
}
.post .post-title
{
    display: table-cell;
    vertical-align: bottom;
    z-index: 2;
    position: relative;
}
.post .post-title b
{
    background-color: rgba(51, 51, 51, 0.58);
    display: inline-block;
    margin-bottom: 5px;
    color: #FFF;
    padding: 10px 15px;
    margin-top: 5px;
}
</style>
</body>

</html>
