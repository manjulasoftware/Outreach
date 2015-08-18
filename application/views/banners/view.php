	<div id="main-content">
			<div class="container">
				<div class="row">
					<div id="content" class="col-lg-12">
						<!-- PAGE HEADER-->
						<div class="row">
							<div class="col-sm-12">
								<div class="page-header">
									<!-- STYLER -->
									
									<!-- /STYLER -->
									<!-- BREADCRUMBS -->
									<ul class="breadcrumb">
										<li>
											<i class="fa fa-home"></i>
											<a href="<?php echo site_url('admin/home/dashboard');?>">Home</a>
										</li>
										<li>Banners</li>
									</ul>
									<!-- /BREADCRUMBS -->
									<div class="clearfix">
										<h3 class="content-title pull-left">Banners</h3>
									</div>
                                <?php if($this->session->flashdata('msg')!=NULL) { ?>
								<div class="alert alert-success display-none" style="display: block;">
									<a data-dismiss="alert" href="#" aria-hidden="true" class="close">×</a>
									<?php  echo $this->session->flashdata('msg');?>
								</div>
								<?php } ?>
									<div class="description"></div>
								</div>
							</div>
						</div>
						<!-- /PAGE HEADER -->
             
           <!-- Filter -->
                     
        
      <!-- /Filter -->
						<!-- EXPORT TABLES -->
						<div class="row">
							<div class="col-md-12">
								<!-- BOX -->
								<div class="box solid gray">
									<div class="box-title">
										<h4><i class="fa fa-table"></i>Banners</h4>
									<div class="tools hidden-xs">
											<a href="<?php echo site_url('admin/banners/add');?>"><button class="btn btn-xs btn-inverse">Add New Banner</button></a>
										</div>
									</div>
									<div class="box-body">
										<table id="datatable2" cellpadding="0" cellspacing="0" border="0" class="datatable table table-striped table-bordered table-hover">
											<thead>
												<tr>
                                                	<th>S.No</th>
													<th>Content</th>
													<th>Created On</th>
													<th>Action</th>
												</tr>
											</thead>
											<tbody>
                     <?php $i=0; if(!empty($banners_details)) {
								foreach ($banners_details as $row) {$i++;  ?>
													<tr class="gradeX">
                                                    <td><?php echo $i;?></td>
													<td><?php echo $row['content'];?></td>
													<td><?php echo date('M jS Y',strtotime($row['created_on']));?></td>
													<td>
                            <a href="<?php echo site_url('admin/banners/detailview/'.base64_encode($row['id']));?>">
                                <button class="btn btn-xs btn-success"><i class="fa fa-check"></i> View</button></a>&nbsp;
                                
                                <a href="<?php echo site_url('admin/banners/edit/'.base64_encode($row['id']));?>"><button class="btn btn-xs btn-warning"><i class="fa fa-pencil-square-o"></i> Edit</button></a>&nbsp;
&nbsp;
								<a onclick = "return confirm('Are you sure want to delete this Download ?');" href="<?php echo site_url('admin/banners/Delete/'.base64_encode($row['id']));?>"><button class="btn btn-xs btn-danger"><i class="fa fa-exclamation-circle"></i> Delete</button></a>
													</td>
												</tr>
								<?php }
					 } else {echo '<tr class="gradeX"><td colspan="6" align="left">No Banner Records found</td></tr>'; }?>
											</tbody>
											<tfoot>
												<tr>
                                                	<th>S.No</th>
													<th>Title</th>
													<th>Created On</th>
													<th>Action</th>
												</tr>
											</tfoot>
										</table>
									</div>
								</div>
                                       <div class="row" style="float:right">
                                        <?php echo $pagination;?>
                             		   </div>
								<!-- /BOX -->
							</div>
						</div>
						<!-- /EXPORT TABLES -->
						<div class="footer-tools">
							<span class="go-top">
								<i class="fa fa-chevron-up"></i> Top
							</span>
						</div>
					</div><!-- /CONTENT-->
				</div>
			</div>
		</div>
<script>
$(document).ready(function(){
	$('#date_range').daterangepicker({
		timePicker: true, timePickerIncrement: 30,
		format: 'DD-MM-YYYY hh:mm:ss',
		timePicker12Hour: false, 
		separator: '_'});
	});
</script>
