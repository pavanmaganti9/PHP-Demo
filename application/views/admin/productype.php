<?php include 'header.php';?>

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">View Product Types</h1>
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
                            Product Type List
                        </div>
						
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                <table class="table table-striped table-bordered table-hover display" id="dataTables-example1">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Description</th>
                                            <th>Created</th>
											<th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
									<?php if(!empty($user)){ 
									//$user_type = $sess['user_type'];
									foreach($user as $post): ?>
                                        <tr class="odd gradeX">
                                            <td><?php echo $post['name']; ?></td>
                                            <td><?php echo $post['description']; ?></td>
                                            <td class="center"><?php echo $post['created']; ?></td>
											<td align="center">
											<a href="<?php echo site_url('admin/editproduct_type/'.$post['id']); ?>" class="glyphicon glyphicon-edit"></a>&nbsp;&nbsp;
											<?php if($_SESSION['user_type'] == 'superadmin'){?>
											<a href="<?php echo site_url('admin/deleteproduct/'.$post['id']); ?>" class="glyphicon glyphicon-trash" onclick="return confirm('Are you sure to delete?')"></a><?php } ?>
										</td>
                                        </tr>
                                     <?php endforeach; }?>  
                                    </tbody>
                                </table>
								<div class="table-responsive">
                                </div>
                            
                            </div>
                            <!-- /.table-responsive -->
                           
                        </div>
					</div>
					 <script src="<?php echo base_url(); ?>assets/bower_components/datatables/media/js/jquery.dataTables.js"></script>
					<script src="<?php echo base_url(); ?>assets/bower_components/datatables/media/js/dataTables.bootstrap.js"></script>
					<link href="<?php echo base_url(); ?>assets/bower_components/datatables/media/css/dataTables.bootstrap.css" rel="stylesheet">
			
    <script src="<?php echo base_url(); ?>assets/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"></script>
			
			<script>
   /*  $(document).ready(function() {
        $('#dataTables-example').DataTable({
                responsive: true
        });
    }); */
	$(document).ready(function() {
    $('#dataTables-example').DataTable();
} );
    </script>
<?php include 'footer.php';?>