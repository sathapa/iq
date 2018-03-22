<?php
	$this->load->view('frontend/header');
	$this->load->view('frontend/sidebar');
	$this->load->view('frontend/top');
	$groupPermissions	= $this->group_permissions;
?>
<!-- Right Bar Section -->
	<div class="right-bar">
		<div class="dashboard">
		<div class="form-section">
			<div class="top-head">
				<h1 >Manage Leads</h1>
				<div class="search-main">
					<a href="<?=base_url('addLead')?>" class="create_quote">
						Add New Lead
					</a>
			</div>
			
			</div>
			<div class="data-table-dash">
			<div id="alert-message"><?php echo $this->session->flashdata('message');?></div>
			<table class="table  table-bordered table-hover" id="quote-web-table">
				<thead>
					<tr>
						<th>Name</th>
						<th>Email</th>
						<th>Business Phone</th>
						<th>Company Name  </th>
						<th>Job Title</th>
						<th>City (State)</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody class="filter-data">
					<?php
					if(!empty($contactsList)){
						$i=0;
						foreach($contactsList as $val){
							$i++;
							
						}
					}else{
						echo '<tr><td colspan="7" align="center">Leads not found!</td></tr>';
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
	
	$('[data-toggle=confirmation]').confirmation({
		rootSelector: '[data-toggle=confirmation]',
	});
	$('[data-toggle=confirmation1]').confirmation({
		rootSelector: '[data-toggle=confirmation1]',
	});
	
});

$(document).on('click','.delete-customer',function (){
	var customerId	= $(this).attr('data-id');
	if(customerId!=''&& !isNaN(customerId)){
		$.post('<?=base_url('frontend/crm/deleteCustomer')?>',{'customerId':customerId},function (response){
			var data	= JSON.parse(response);
			if(data.status=='Yes'){
				var alterMessage	= '<div class="alert alert-block alert-success"><button type="button" class="close" data-dismiss="alert"><i class="ace-icon fa fa-times"></i></button><p>'+data.msg+'</p></div>';
				$('#alert-message').html(alterMessage);
			}else{
				var alterMessage	= '<div class="alert alert-block alert-dandger"><button type="button" class="close" data-dismiss="alert"><i class="ace-icon fa fa-times"></i></button><p>'+data.msg+'</p></div>';
				$('#alert-message').html(alterMessage);
			}
		});
	}
});

  </script>
