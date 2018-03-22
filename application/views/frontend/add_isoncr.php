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
				<h1 id="quoting-heading">ISO NCR Management [ Add ]</h1>
				<a href="<?=base_url('iso')?>" class="back-btn  create_quote" > < Back</a>
			</div>
			<div class="col-sm-8 inner-form" id="innerformdetails">
				<div><?php $message	= $this->session->flashdata('message'); echo $message;?></div>
				<div class="form-group form-wrap">
					<?php
						echo form_open('', array('class'=>'form-row ','id'=>'ncr_form','data-parsley-validate'=>'data-parsley-validate','enctype'=>'multipart/form-data'));
					?>
					<div class="panel panel-default">
						<div class="panel-heading"> <h5 style="color:white;" >Add ISO NCR Management</h5> </div>
						<div class="panel-body">
							<div class="row">
								<div class=" half">
									<div class=" ">
										<label id="customer-heading">Customer<em >*</em></label>
										<div class="select1">
											<input type="text" name="customer_name" id="customer_name" Placeholder="Customer" data-parsley-required="true">
										</div>
									</div>
								</div>
								<div class=" half">
									<div class=" half">
										<label >Project<em >*</em></label>
										<div class="select1">
											<input type="text" name="project" id="project" Placeholder="Project" data-parsley-required="true">
										</div>
									</div>
									<div class=" half">
										<label >Product<em >*</em></label>
										<div class="select1">
											<input type="text" name="product" id="product" Placeholder="Product" data-parsley-required="true">
										</div>
									</div>
								</div>
							</div>

							<div class="row">
								<div class=" half">
									<div class=" ">
										<label id="customer-heading">Orignal Sales Order<em >*</em></label>
										<div class="select1">
											<input type="text" name="orig_sales_order" id="orig_sales_order" Placeholder="Orignal Sales Order" 
											data-parsley-required="true">
										</div>
									</div>
								</div>
								<div class=" half">
									<div class="">
										<label id="customer-heading">New Sales Order<em >*</em></label>
										<div class="select1">
											<input type="text" name="new_sales_order" id="new_sales_order" Placeholder="New Sales Order"
											 data-parsley-required="true">
										</div>
									</div>
								</div>
							</div>
							
							<div class="row">
								<div class=" half">
									<div class=" half">
										<label id="">Non-Conformance Categories<em >*</em></label>
										<div class="" id="status-select">
											<select name="non_conformance_category[]" name="non_conformance_category" multiple="multiple"  
											class="multiselect-ui" data-parsley-required="true">
												<?php
													$nonConformanceCategories = $this->config->item('nonconformance-categories');
													if(!empty($nonConformanceCategories) && is_array($nonConformanceCategories)){
														foreach($nonConformanceCategories as $val){
															echo '<option value="'.$val.'">'.$val.'</option>';
														}
													}
												?>
											</select>
										</div>
									</div>
									<div class=" half">
										<label id="sales_division">Sales Division<em >*</em></label>
										<div class="select1">
											<select name="division" name="division" data-parsley-required="true">
												<option value="">Select Division</option>
												<?php
													echo getQuoteHeaderLookUp('division_to_wtclass');
												?>
											</select>
										</div>
									</div>
								</div>
								<div class=" half">
									<div class="">
										<label >Nature of non-conformance/complaint <em >*</em></label>
										<div class="select1">
											<textarea name="non_conformance_complaint" id="non_conformance_complaint"
											 placeholder="State the problem" data-parsley-required="true" ></textarea>
										</div>
									</div>
								</div>
							</div>
							
							<div class="row">
								<div class=" half">
									<div class="">
										<label >Corrective Action <em >*</em></label>
										<div class="select1">
											<textarea name="corrective_action" id="corrective_action" 
											placeholder="What was needed to make customer happy" data-parsley-required="true" ></textarea>
										</div>
									</div>
								</div>
								<div class=" half">
									<div class="">
										<label >Preventive Action <em >*</em></label>
										<div class="select1">
											<textarea name="preventive_action" id="preventive_action"  data-parsley-required="true"
											placeholder="How not to do this again, including recommended procedure changes"></textarea>
										</div>
									</div>
								</div>
							</div>

							<div class="row">
								<div class=" three">
									<div class="">
										<label >Attachment File 1 </label>
										<div class="select1">
											<input type="file" name="attachment[]">
										</div>
									</div>
								</div>
								<div class=" three">
									<div class="">
										<label >Attachment File 2</label>
										<div class="select1">
											<input type="file" name="attachment[]">
										</div>
									</div>
								</div>
								<div class=" three">
									<div class="">
										<label >Attachment File 3</label>
										<div class="select1">
											<input type="file" name="attachment[]">
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
	var select = false;
	$( "#customer_name" ).autocomplete({
		source: '<?=base_url('frontend/home/getCustomer')?>',
		open: function(event, ui) { if(select) select=false; },
		select: function (a, b) {
			select=true; 
		}
	}).blur(function(){
		var cus	= $("#customer_name").val();
		if(!select || cus=='No Record Found !'){
			$("#customer_name").val('');
		}
	});
	
	$(document).ready(function(){
		$('.multiselect-ui').multiselect({
      includeSelectAllOption: true,
    });
	});

</script>
