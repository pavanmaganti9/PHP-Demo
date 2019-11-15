<?php include 'header.php';?>

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Adding Products</h1>
                    </div>
                    <!-- /.col-lg-12 -->
					<div class="col-lg-12">
					<?php  if($this->session->flashdata('message')){ ?>	
						    <div class="alert alert-success alert-dismissable">
					        <?php echo $this->session->flashdata('message'); ?>
							</div>
							<?php } ?>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Add a Product
                        </div>
						
                        <div class="panel-body">
                            <div class="row">
							<div class="col-lg-12">
							
							<form role="form" method="post" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label>Name</label>
                                            <input class="form-control" name="productname" value="<?php echo set_value('productname'); ?>">
											<?php echo form_error('productname','<p class="help-block" style="color:red;">','</p>'); ?>
                                            <p class="help-block">Example block-level help text here.</p>
                                        </div>
                                        <div class="form-group">
                                            <label>Image</label>
                                            <input type="file" name="productimage">
											<?php echo form_error('productimage','<p class="help-block" style="color:red;">','</p>'); ?>
                                        </div>
                                        <div class="form-group">
                                            <label>Description</label>
                                            <textarea class="form-control" rows="3" name="productdesc"><?php echo set_value('productdesc'); ?></textarea>
											<?php echo form_error('productdesc','<p class="help-block" style="color:red;">','</p>'); ?>
                                        </div>
										<div class="form-group">
						<input type="submit" name="productSubmit" class="btn btn-primary" value="Add Product">
                        </div>
							</form>
							</div>
							</div>
						</div>
					</div>
					</div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

<?php include 'footer.php';?>