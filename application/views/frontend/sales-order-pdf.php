<?php
	$this->load->view('frontend/header');
	$this->load->view('frontend/sidebar');
	$this->load->view('frontend/top');
	$groupPermissions	= $this->group_permissions;
	//dump($specifications);
?>
<!-- Right Bar Section -->
	<div class="right-bar">
		<div class="dashboard">
		<div class="form-section">
			<div class="col-sm-12 top-head">
				<h1>Sales Order Documents - <?=$salesOrderNo?></h1> 
				<a href="<?=base_url('orders')?>" class=" create_quote">
				< Back
				</a>
			</div>
			<div class="data-table-dash">
				<div>
				<?php
					$message	= $this->session->flashdata('message');echo $message;
				?>
				</div>
			<table class="table table-bordered table-hover" id="quote-web-table">
				<thead>
					<tr>
						<th>SN</th>
						<th>Document</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
			<?php
				if (extension_loaded('imagick')) {
				    //echo 'Supported';
				} else {
				    //echo 'Not supported'; 
				}
			?>

			<?php
				if(!empty($alldocuments) && is_array($alldocuments)){
					$i = 1;
					foreach($alldocuments as $file=>$pdf){
						$path 	= base_url('assets/paperless/'.$salesOrderNo.'/'.$pdf);
						
						/* Thumbs Testing */
							/*
								$source 	= FCPATH.'assets/paperless/'.$salesOrderNo.'/'.$pdf;
								$target 	= 'my.jpg';
								$pp = genPdfThumbnail($source,$target);//Common_helper function 
								dump($pp);
							*/
						/* Testing end */

						$extention 	= pathinfo($path, PATHINFO_EXTENSION);
						if(($extention=='pdf') || ($extention=='msg') || ($extention=='rtf')){
							echo '<tr>
										<td width="80">'.$i.'</td>
										<td width="500">
											<div class="attachment">
												<label>
													<i class="fa fa-file-pdf-o fa-2x" aria-hidden="true"></i>
													<a href="'.$path.'" target="_blank">'.$pdf.'</a>
												</label>
											</div>
										</td>
										<td>
											<label>
												<i class="fa fa-download fa-2x" aria-hidden="true"></i>&nbsp;&nbsp;
												<a href="'.$path.'" target="_blank">Download</a>
											</label>
										</td>
									</tr>';
								$i ++;
						}
					}
				}
			?>
				</tbody>
			</table>
			
			</div>
		</div>
		
	</div>

<!-- Right Bar Section -->
</section>


<?php
	$this->load->view('frontend/bottom');
?>
<script>
	$(document).ready(function() {
		$('#quote-web-table').DataTable({
			"pageLength": 50,language: {
				searchPlaceholder: "Enter Search Value...",
				paginate: {
					next: '<i class="fa fa-angle-right" aria-hidden="true"></i>',
					previous: '<i class="fa fa-angle-left" aria-hidden="true"></i>'  
				}
			}
		});
	});
</script>
