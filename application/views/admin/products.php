<?php include 'header.php';?>

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">View Products</h1>
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
                            Products List
                        </div>
						
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
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
                                            <td><?php echo $post['desc']; ?></td>
                                            <td class="center"><?php echo $post['created']; ?></td>
											<td align="center">
											<a href="<?php echo site_url('admin/editproject/'.$post['id']); ?>" class="glyphicon glyphicon-edit"></a>&nbsp;&nbsp;
											<?php if($_SESSION['user_type'] == 'superadmin'){?>
											<a href="<?php echo site_url('admin/deleteproject/'.$post['id']); ?>" class="glyphicon glyphicon-trash" onclick="return confirm('Are you sure to delete?')"></a><?php } ?>
										</td>
                                        </tr>
                                     <?php endforeach; }?>  
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                           
                        </div>
					</div>
			<script src="<?php echo base_url(); ?>assets/bower_components/datatables/media/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"></script>
			
			<script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
                responsive: true
        });
    });
    </script>
<?php include 'footer.php';?>