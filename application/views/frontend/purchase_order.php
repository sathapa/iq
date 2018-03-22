<?php
	$this->load->view('frontend/header');
	$this->load->view('frontend/sidebar');
	$this->load->view('frontend/top');
?>
<style>
	@media screen and (max-width: 1366px)
	index.css:278
	.inner-form {
	    width: 65%;
	    margin-left: 10%;
	}
</style>
<!-- Right Bar Section -->
	<div class="right-bar" id="page_layout">
		<div class="form-section">
			<div class="col-sm-12 top-head">
				<h1 id="quoting-heading">Add Purchase Order</h1>
			</div>
			<div class="col-xs-6 inner-form" id="innerformdetails">
				<div><?php $message	= $this->session->flashdata('message'); echo $message;?></div>
				<div class="form-group form-wrap">
						<?php
							echo form_open('', array('class'=>'form-row ','id'=>'contact_form','data-parsley-validate'=>'data-parsley-validate','enctype'=>'multipart/form-data'));
						?>
					<div class="panel panel-default">
						<div class="panel-heading"> <h5 style="color:white;" >Add Purchase Order</h5> </div>
						<div class="panel-body">
							<div class="row">
								<div class="form-row half">
									<div class="form-row half">
										<!-- <div class=""> -->
										<label id="customer-heading">Desired Ship Date <em >*</em> </label>
											<div class="select1">
												<input type="text" name="desire_date" class="date" placeholder="Desire Date " data-parsley-required="true"/>
											</div>
										<!--</div> -->
									</div>
								</div>
							</div>

							<div class="row">
								<div class="row main-add-row">
									<div class="form-row half">
										<label>Item # <em >*</em></label>
									</div>
									<div class="form-row four-box quantity-box">
										<label>Quantity <em >*</em></label>
									</div>
									<div class="form-row four-box price-box">
										<label>Price <em >*</em></label>
									</div>
										
									<div class="row purchase-order">
										<div class="row">
											<div id="append-purchase-order">
												<div class="form-row half ">
													<select data-parsley-required="true"  name="item_code[]"  class="custom-select" >
														<?=itemList();?>
													</select>
												</div>
												<div class="form-row four-box quantity-box">
													<input type="text" name="quantity[]"  data-parsley-min="0" data-parsley-type="number" placeholder="Enter Quantity " required ="true"/>
												</div>
												<div class="form-row four-box price-box">
													<input type="text" name="price[]"  placeholder="Enter price " required ="true"/>
												</div>
											</div>
											<a href="javascript:void(0)" class="add-purchase-order-row">
												<img src="<?=base_url('assets/front/images/plus.png')?>" alt="plus">
											</a>
											<a href="javascript:void(0)" class="remove-purchase-order-row">
												<img src="<?=base_url('assets/front/images/minus.png')?>" alt="minus">
											</a>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class=" half">
									<div class="">
										<div class="">
											<label>Approve By<em >*</em> </label>
											<div class="">
												<select name="approve_by" class="custom-select" data-parsley-required="true">                    
													<option value="">Approve By</option>
												</select>
											</div>
										</div>
									</div>
								</div>
								<div class="half">
									<div class="">
										<div class="">
											<label>Requested By <em >*</em> </label>
											<div class="">
												<select name="rejected_by" class="custom-select" data-parsley-required="true">
													<option value="">Requested By</option>
												</select>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class=" half">
									<div class="">
										<div class="">
											<label>Address <em >*</em> </label>
											<div class="">
												<select name="addres" class="custom-select" data-parsley-required="true" >                    
													<option value="">Address</option>
												</select>
											</div>
										</div>
									</div>
								</div>
								<div class=" half">
									<div class="">
										<div class="">
											<label>Attn To  </label>
											<div class="select1">
												<input type="text" name="attn_to"  placeholder="Attn To " />
											</div>
										</div>
									</div>
								</div>
							</div>

							<div class="row">
								<div class=" half">
									<div class="">
										<div class="">
											<label>Upload PO </label>
											<div class="select1 ">
												<div class="fileinput fileinput-new" data-provides="fileinput">
													<span class="btn btn-default btn-file"><span>Choose file</span>
														<input type="file" name="upload_po" /></span>
													<span class="fileinput-filename"></span><span class="fileinput-new">No file chosen</span>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="half">
									<div class="">
										<div class="">
											<label>Upload drawing </label>
											<div class="">
												<div class="fileinput fileinput-new" data-provides="fileinput">
													<span class="btn btn-default btn-file"><span>Choose file</span>
														<input type="file" name="upload_drawing" /></span>
													<span class="fileinput-filename"></span><span class="fileinput-new">No file chosen</span>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="row purchase-order-last-div">
								<div class=" half">
									<div class="">
										<div class="">
											<label>Comments </label>
											<div class="select1">
												<textarea name="comment" placeholder="Comments " ></textarea>
											</div>
										</div>
									</div>
								</div>
								<div class="half">
									<div class="">
										<div class="">
											<label>Reference#  </label>
											<div class="select1">
												<textarea name="reference" placeholder="Reference #" ></textarea>
											</div>
										</div>
									</div>
								</div>
							</div>
							
							<div class="row">
								<div class="form-row three ">
								<button type="submit" class="save" id="submitUserDetails">
									Submit</button>
								</div>
							</div>
						</div>
						<?=form_close()?>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<?php
	$this->load->view('frontend/bottom');
?>
<script type="text/javascript">
	/* Making The Dropdown of customers Auto complete search */
	$(function() {
		$(".custom-select").customselect();
	});
	
	$(".date").datepicker({
		dateFormat: 'yy-mm-dd' 
		/*minDate:new Date()*/
	});
	
	$(document).on('click','.add-purchase-order-row', function (){
		var itemCode	= '<?=itemList();?>';
		var addImg		= '<?=base_url('assets/front/images/plus.png')?>';
		var removeImg	= '<?=base_url('assets/front/images/minus.png')?>';
		var appendHtml	= '<div class="row"><div ><div class="form-row half ">';
			appendHtml	+= '<select data-parsley-required="true" name="item_code[]"  class="custom-select" >'+itemCode+'</select></div>';
			appendHtml	+= '<div class="form-row four-box quantity-box">';
			appendHtml	+= '<input type="text" name="quantity[]"  data-parsley-min="0" data-parsley-type="number" placeholder="Enter Quantity " required ="true"/></div>';
			appendHtml	+= '<div class="form-row four-box price-box"><input type="text" name="price[]"  placeholder="Enter price " required ="true"/></div></div>';
			appendHtml	+= '<a href="javascript:void(0)" class="add-purchase-order-row"><img src="'+addImg+'" alt="plus"></a>';
			appendHtml	+= '<a href="javascript:void(0)" class="remove-purchase-order-row"><img src="'+removeImg+'" alt="minus"></a></div>';
		$('.purchase-order').append(appendHtml);
		$(".custom-select").customselect();
	});
	
	$(document).on('click','.remove-purchase-order-row', function (){
		var inputNo	= $('.quantity-box input').length;
		if(inputNo > 1){
			$(this).parent().remove();
		}else{
			alert("Last item can't be deleted");
		}
	});
	
</script>
