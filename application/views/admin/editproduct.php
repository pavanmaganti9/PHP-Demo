<?php include 'header.php';?>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Edit product</h1>
					<div class="pull-right">
		
        <a href="../products" class="btn btn-default-btn-xs btn-success"> Back to products</a>
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
						<label for="desc">Price</label>
						<input type="number" step="any" id="price" class="form-control" name="productprice"  value="<?php echo !empty($post['price'])?$post['price']:''; ?>">
                <?php echo form_error('price','<p class="help-block" style="color:red;">','</p>'); ?>
            </div>
			
                        <div class="form-group">
						<label for="desc">Description</label>
						<textarea name="desc" class="form-control"><?php echo !empty($post['desc'])?$post['desc']:''; ?></textarea>
                <?php echo form_error('desc','<p class="help-block" style="color:red;">','</p>'); ?>
            </div>
			<div class="form-group">
			
			<?php $img = $post['image'];
                    $chunk = explode(".",$img);
                    $thumb = $chunk[0]."_thumb.".$chunk[1];?>
			<img class="card-img-top" src="<?php echo site_url('assets/images/products/'.$thumb); ?>" alt="" width="300">
			</div>
			<div class="form-group">
													<label for="ptype">Product Type</label>
													<select name="ptype" class="form-control" required>
										 <option>---Select Type---</option>
										 <option value="<?php echo $post['product_type'];?>" selected> <?php echo $post['product_type'];?></option>
										 <?php foreach($user as $post): ?>
										<option value="<?php echo $post['name'];?>"> <?php echo $post['name'];?></option>
										<?php endforeach;?>
										</select>
										<?php echo form_error('ptype','<p class="help-block" style="color:red;">','</p>'); ?>
													</div>
            	<div><br></div>
            
						<div class="form-group">
						<input type="submit" name="productSubmit" class="btn btn-primary btn" value="Update Product">
                        </div>

										</form>
										</div></div>
        </div>
        <!-- /#page-wrapper -->

<?php include 'footer.php';?>