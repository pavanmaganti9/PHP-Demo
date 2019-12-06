<?php include 'header.php';?>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Edit product type</h1>
					<div class="pull-right">
		
        <a href="../product_type" class="btn btn-default-btn-xs btn-success"> Back to product type</a>
    </div>
                </div>
                <!-- /.col-lg-12 -->
            </div>
			<div class="row">
                                <div class="col-lg-6">
			<?php  
					if($this->session->flashdata('message')){
					?>	
						<div class="alert alert-success" role="alert">
					<?php	echo $this->session->flashdata('message'); ?>
						
						</div>
				<?php	}
				?>
            <form role="form" method="post">
			
                                        <div class="form-group">
							<label for="title">Name</label>
							<input type="text" id="title" class="form-control" name="title"  value="<?php echo !empty($post['name'])?$post['name']:''; ?>">
                <?php echo form_error('name','<p class="help-block" style="color:red;">','</p>'); ?>
						</div>
						
                        <div class="form-group">
						<label for="desc">Description</label>
						<textarea name="desc" class="form-control"><?php echo !empty($post['description'])?$post['description']:''; ?></textarea>
                <?php echo form_error('description','<p class="help-block" style="color:red;">','</p>'); ?>
            </div>
			<div class="form-group">
			
			<?php $img = $post['image'];
                   ?>
			<img class="card-img-top" src="<?php echo site_url('assets/images/productype/'.$img); ?>" alt="" width="300">
			</div>
            	<div><br></div>
            
						<div class="form-group">
						<input type="submit" name="productypeSubmit" class="btn btn-primary btn" value="Update Product">
                        </div>

										</form>
										</div></div>
        </div>
        <!-- /#page-wrapper -->

<?php include 'footer.php';?>