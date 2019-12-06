<?php include 'header.php';?>

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Add Product Type</h1>
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
                            Add a Product Type
                        </div>
						
                        <div class="panel-body">
                            <div class="row">
							<div class="col-lg-12">
							
							<form role="form" method="post" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label>Name</label>
                                            <input class="form-control" name="productypename" value="<?php echo set_value('productypename'); ?>">
											<?php echo form_error('productypename','<p class="help-block" style="color:red;">','</p>'); ?>
                                            <p class="help-block">Example block-level help text here.</p>
                                        </div>
										
                                        <div class="form-group">
                                            <label>Image</label>
                                            <input type="file" name="productypeimage">
											<?php echo form_error('productypeimage','<p class="help-block" style="color:red;">','</p>'); ?>
                                        </div>
                                        <div class="form-group">
                                            <label>Description</label>
                                            <textarea class="form-control" rows="3" name="productypedesc"><?php echo set_value('productypedesc'); ?></textarea>
											<?php echo form_error('productypedesc','<p class="help-block" style="color:red;">','</p>'); ?>
                                        </div>
										<div class="form-group">
						<input type="submit" name="producttpeSubmit" class="btn btn-primary" value="Add Product Type">
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