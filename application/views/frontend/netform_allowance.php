<?php
	$this->load->view('frontend/header');
	$this->load->view('frontend/sidebar');
	$this->load->view('frontend/top');
	$groupPermissions	= $this->group_permissions;
	if(empty($groupPermissions) || !in_array(25,$groupPermissions)){
		$message='<div class="alert alert-block alert-danger"><button type="button" class="close" data-dismiss="alert"><i class="ace-icon fa fa-times"></i></button><p>You are not authorized to access this feature !.</p></div>';
		$this->session->set_flashdata('message',$message);
		redirect('dashboard');
	}
?>
<!-- Right Bar Section -->
	<div class="right-bar">
		<div class="dashboard">
		<div class="form-section">
			<div class="col-sm-12 top-head">
				<h1>Netform Allowances</h1>
				<div class="search-main">
					<?php
						if(!empty($groupPermissions) && in_array(26,$groupPermissions)){
					?>
					<a href="javascript:void(0)" class="create_quote create-update-netform-btn" data-type="create">Add Netrform Allowance</a>
					<?php
						}
					?>
				</div>
			</div>
			<div class="data-table-dash">
				<div>
				<?php
					$message	= $this->session->flashdata('message');echo $message;
				?>
				</div>
			
			<table class="table  table-bordered table-hover" id="quote-web-table">
				<thead>
					<tr class="inventries-tooltip-text">
						<th>##</th>
						<th>Product</th>
						<th>Category</th>
						<th>Category Description</th>
						<th>Term Allowance</th>
						<?php
							if(!empty($groupPermissions) && in_array(27,$groupPermissions)){
						?>
						<th>Action</th>
						<?php
							}
						?>
					</tr>
				</thead>
				<tbody class="filter-data">
					<?php
						if(!empty($netformAllowances) && !empty($netformAllowances)){
							$i=0;
							foreach($netformAllowances as $allowance){
								$i++;
								$product		= !empty($allowance->product) ? $allowance->product : '';
								$category		= !empty($allowance->category) ? $allowance->category : '';
								$categoryDesc	= !empty($allowance->category_description) ? $allowance->category_description : '';
								$termAllowance	= !empty($allowance->term_allowance) ? $allowance->term_allowance : '00';
								echo '<tr id="'.$i.'">
									<td>'.$i.'</td>
									<td>'.$product.'</td>
									<td>'.$category.'</td>
									<td width="300">'.$categoryDesc.'</td>
									<td>'.$termAllowance.'</td>';
									if(!empty($groupPermissions) && in_array(27,$groupPermissions)){
									echo '<td>
										<a class="edit_detail create-update-netform-btn tooltip " data-type="update" data-product="'.$product.'" 
										data-cat="'.$category.'" data-term-allowance="'.$termAllowance.'" data-cat-desc="'.$categoryDesc.'">
										<i class="fa fa-pencil-square-o" aria-hidden="true"></i>
										<span class="tooltiptext">Edit </span>
										</a></td>';
									}
									echo '
								</tr>';
							}
						}else{
							echo '<tr><td colspan="5">No Records Found</td></tr>';
						}
					?>
				</tbody>
			</table>
			
			</div>
		</div>
		
	</div>

<!-- Right Bar Section -->
</section>

<!-- model pop html code start -->
	<div class="md-modal md-effect-1 create-update-netform-allowance" id="create-update-netform-allowance">
		<div class="md-content ">
			<div class="pop-main-cont">
                <div class="pop-header">
					<h2 id="heading-netform-allowance">Create Netform Allowance</h2>
					<button class="md-close "><i class="fa fa-times" aria-hidden="true"></i></button>
				</div>
				<?=form_open(base_url('createupdatenetformallowance'), array('class'=>'form-row ','id'=>'add-netform-allowance-form','data-parsley-validate'=>'data-parsley-validate','enctype'=>'multipart/form-data'));?>
				<div class="pop-body cf" >
					<div class="row select-area">
						<div class="form-row one">
							<label>Product :</label>
							<div class="select1" id="netform-product-html">
								<select id="product" name="product" class="quote_status" data-parsley-required="true">
									<option value="" >Select Product</option>
									<option value="NF18mm" >NF18mm</option><option value="NF16mm" >NF16mm</option>
								</select>
							</div>
						</div>
					</div>
					<div class="row select-area">
						<div class="form-row one">
							<label>Category :</label>
							<input type="text" name="category" id="category" Placeholder="Category" data-parsley-required="true" maxlength="100"/>
						</div>
					</div>
					
					<div class="row select-area">
						<div class="form-row one">
							<label>Term Allowance :</label>
							<input type="text" name="term_allowance" id="term_allowance" Placeholder="Term Allowance" data-parsley-type="number" data-parsley-required="true" maxlength="100"/>
						</div>
					</div>
					
					<div class="row select-area">
						<div class="form-row one">
							<label>Category Description :</label>
							<textarea name="category_desc" id="category_desc" class=""></textarea>
						</div>
					</div>
					
					<div class="form-row three update-area">
						<input type="submit" value="Submit" class="update-quote" id="submit-create-update-netform-allowance" />
					</div>
					<?=form_close()?>
				</div>
		</div>
	</div>
</div>	
	
	<div class="md-overlay"></div>
	<!-- model pop html code end -->

<?php
	$this->load->view('frontend/bottom');
?>
<script>
	
	
	
$(document).ready(function() {
	
	/* Confirmation box */
	$('[data-toggle=confirmation]').confirmation({
		rootSelector: '[data-toggle=confirmation]',
	});
	
	
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
	
	$(document).on('click','.create-update-netform-btn',function (){
		var type	= $(this).attr('data-type');
		var product	= '';var category	= ''; var termAllowance	= '00';
		var cateDesc	= $(this).attr('data-cat-desc');
		var productHtml	= '<select id="product" name="product" class="quote_status" data-parsley-required="true"><option value="">Select Product</option><option value="NF18mm" >NF18mm</option><option value="NF16mm" >NF16mm</option></select>';
		$('#netform-product-html').html(productHtml);
		$('#submit-create-update-netform-allowance').val('Submit');
		$('#heading-netform-allowance').text('Create Netform Allowance');
		$('#category_desc').val(cateDesc);
		if(type=='update'){
			product			= $(this).attr('data-product');
			var productOptions	 = '';
			if(product=='NF18mm'){
				productOptions	= '<option value="NF18mm" selected >NF18mm</option><option value="NF16mm" >NF16mm</option>';
			}else{
				productOptions	= '<option value="NF18mm" >NF18mm</option><option value="NF16mm" selected>NF16mm</option>';
			}
			var productHtml	= '<select id="product" name="product" class="quote_status" data-parsley-required="true">'+productOptions+'</select>';
			$('#netform-product-html').html(productHtml);
			category		= $(this).attr('data-cat');
			termAllowance	= $(this).attr('data-term-allowance');
			$('#submit-create-update-netform-allowance').val('Update');
			$('#heading-netform-allowance').text('Update Netform Allowance');
		}
		
		$(".select1").find('select').selectBoxIt();
		/*$('#product').val(product);*/
		$('#category').val(category);$('#term_allowance').val(termAllowance);
		$('#create-update-netform-allowance').modal('show');
	});
	$(document).on('click','.md-close',function (){
		$('#create-update-netform-allowance').modal('hide');
	});

</script>
