<?php
	$this->load->view('frontend/header');
	$this->load->view('frontend/sidebar');
	$this->load->view('frontend/top');
?>

<!-- Right Bar Section -->
	<div class="right-bar">
		<div class="form-section">
			<div class="top-head">
				<h1 id="quoting-heading">InCord Non-Conformance Report</h1>
				<a href="<?=base_url('iso')?>" class="back-btn  create_quote" > < Back</a>
			</div>
		<div class="inner-form" id="innerformdetails">
		<div><?php $message	= $this->session->flashdata('message'); echo $message;?></div>
		<div class="form-group">
		<?php
			echo form_open('', array('class'=>'form-row ','id'=>'ncr_form','data-parsley-validate'=>'data-parsley-validate','enctype'=>'multipart/form-data'));
		?>
		<div class="row">
			<div class=" half">
				<div class=" ">
					<label id="customer-heading">Original Sales Order<em >*</em></label>
					<div class="select1">
						<input type="text" name="sales_order_number" id="sales_order_number" Placeholder="Sales Ordere Number" data-parsley-required="true">
					</div>
				</div>
			</div>
			<div class=" half">
				<div class=" half">
					<label >Date<em >*</em></label>
					<div class="select1">
						<input type="date" name="date" id="date" Placeholder="Date" data-parsley-required="true">
					</div>
				</div>
				<div class=" half">
					<label >NCR #<em >*</em></label>
					<div class="select1">
						<input type="text" name="ncr" id="ncr" Placeholder="NCR" data-parsley-required="true">
					</div>
				</div>
			</div>
		</div>
		
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
					<label >Product<em >*</em></label>
					<div class="select1">
						<input type="text" name="product" id="product" Placeholder="Product" data-parsley-required="true">
					</div>
				</div>
				
				<div class=" half">
					<label >Sales Division<em >*</em></label>
					<div class="select1">
						<input type="text" name="project" id="project" Placeholder="Sales Division" data-parsley-required="true">
					</div>
				</div>
			</div>
		</div>

		<div class="row">
			<div class=" half">
				<div class=" ">
					<label id="">Product Categories<em >*</em></label>
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
						<label>(forward this form to others if necessary to complete the Preventive Action investigation)</label>
					</div>
				</div>
			</div>
		</div>
			
		<div class="row">
			<div class=" half">
				<div class=" half">
					<label >Cost of Error :<em >*</em></label>
					<div class="select1">
						<input type="text" name="cost_of_error" id="cost_of_error" Placeholder="Cost of Error" data-parsley-required="true">
					</div>
				</div>
				<div class=" half">
					<label >Non Conformance Type Code<em >*</em></label>
					<div class="select1">
						<input type="text" name="nc_type" id="nc_type" Placeholder="Non Conformance Type Code" data-parsley-required="true">
					</div>
				</div>
			</div>
			<div class=" half">
				<div class=" half">
					<label >Investigated by:<em >*</em></label>
					<div class="select1">
						<input type="text" name="investigated_by" id="investigated_by" Placeholder="Investigated by" data-parsley-required="true">
					</div>
				</div>
				<div class=" half">
					<label >Date<em >*</em></label>
					<div class="select1">
						<input type="date" name="date_2" id="date_2"  data-parsley-required="true">
					</div>
				</div>
			</div>
		</div>
		
		<div class="row">
			<div class=" half">
				<div class=" ">
					<label >Quality Representative :<em >*</em></label>
					<div class="select1">
						<input type="text" name="quality_representative" id="quality_representative" Placeholder="Quality Representative " data-parsley-required="true">
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
		
		<?=form_close()?>
		
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
