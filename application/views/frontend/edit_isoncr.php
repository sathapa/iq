<?php
	$this->load->view('frontend/header');
	$this->load->view('frontend/sidebar');
	$this->load->view('frontend/top');
	$entryDate		= !empty($isoInfo->entry_date) ? $isoInfo->entry_date : '';
	$customerNo		= !empty($isoInfo->customerno) ? $isoInfo->customerno : '';
	$customerName	= !empty($isoInfo->customername) ? $isoInfo->customername : '';
	
	$customerDisplay= $customerNo.(!empty($customerName) ? ' ['.$customerName.' ]' : '');
	
	$division		= !empty($isoInfo->division) ? $isoInfo->division : '';
	$origSalesOrder	= !empty($isoInfo->orig_salesorder) ? $isoInfo->orig_salesorder : '';
	$newSalesOrder	= !empty($isoInfo->new_salesorder) ? $isoInfo->new_salesorder : '';
	$allCategory	= !empty($isoInfo->ncr_category) ? $isoInfo->ncr_category : '';
	
	$ncrCategory	= !empty($isoInfo->ncr_category) ? json_decode($isoInfo->ncr_category) : '';
	
	$ncrCats		= (!empty($allCategory) && !empty($ncrCategory)) ? $ncrCategory : (!empty($allCategory) ? array($allCategory) : array());
	
	$ncrDescription	= !empty($isoInfo->ncr_description) ? $isoInfo->ncr_description : '';
	$correctiveAction	= !empty($isoInfo->corrective_action) ? $isoInfo->corrective_action : '';
	$preventativeAction	= !empty($isoInfo->preventative_action) ? $isoInfo->preventative_action : '';
	$product		= !empty($isoInfo->product) ? $isoInfo->product : '';
	$project		= !empty($isoInfo->project) ? $isoInfo->project : '';
	$attachment1	= !empty($isoInfo->attachment1) ? $isoInfo->attachment1 : '';
	$attachment2	= !empty($isoInfo->attachment2) ? $isoInfo->attachment2 : '';
	$attachment3	= !empty($isoInfo->attachment3) ? $isoInfo->attachment3 : '';
	$ncrId			= !empty($isoInfo->ncr_id) ? $isoInfo->ncr_id :'';
?>

<!-- Right Bar Section -->
	<div class="right-bar">
		<div class="form-section">
			<div class="col-sm-12 top-head">
				<h1 id="quoting-heading">ISO NCR Management [ Edit ]</h1>
				<a href="<?=base_url('iso')?>" class="back-btn  create_quote" > < Back</a>
			</div>
		<div class="col-sm-8 inner-form" id="innerformdetails">
		<div><?php $message	= $this->session->flashdata('message'); echo $message;?></div>
		<div class="form-group">
		<?php
			echo form_open('', array('class'=>'form-row ','id'=>'ncr_form','data-parsley-validate'=>'data-parsley-validate','enctype'=>'multipart/form-data'));
		?>
		<div class="panel panel-default">
			<div class="panel-heading"> <h5 style="color:white;"> Edit Record </h5>	</div>
			<div class="panel-body">
				<div class="row">
					<div class=" half">
						<div class=" ">
							<label id="customer-heading">Customer<em >*</em></label>
							<div class="select1">
								<input type="hidden" name="ncr_id" value="<?php echo $ncrId;?>">
								<input type="text" name="customer_name" id="customer_name" Placeholder="Customer" value="<?php echo $customerDisplay;?>" data-parsley-required="true">
							</div>
						</div>
					</div>
					<div class=" half">
						<div class=" half">
							<label >Project<em >*</em></label>
							<div class="select1">
								<input type="text" name="project" id="project" Placeholder="Project" value="<?php echo $project;?>" data-parsley-required="true">
							</div>
						</div>
						<div class=" half">
							<label >Product<em >*</em></label>
							<div class="select1">
								<input type="text" name="product" id="product" Placeholder="Product" value="<?php echo $product;?>" data-parsley-required="true">
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
								value="<?php echo $origSalesOrder;?>" data-parsley-required="true">
							</div>
						</div>
					</div>
					<div class=" half">
						<div class="">
							<label id="customer-heading">New Sales Order<em >*</em></label>
							<div class="select1">
								<input type="text" name="new_sales_order" id="new_sales_order" Placeholder="New Sales Order"
								value="<?php echo $newSalesOrder;?>"  data-parsley-required="true">
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
												$selected	= (!empty($val) && in_array($val,$ncrCats)) ? 'selected' : '';
												echo '<option value="'.$val.'" '.$selected.'>'.$val.'</option>';
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
										echo getQuoteHeaderLookUp('division_to_wtclass',$division);
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
								 placeholder="State the problem" data-parsley-required="true" ><?php echo $ncrDescription?></textarea>
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
								placeholder="What was needed to make customer happy" data-parsley-required="true" ><?php echo $correctiveAction; ?></textarea>
							</div>
						</div>
					</div>
					<div class=" half">
						<div class="">
							<label >Preventive Action <em >*</em></label>
							<div class="select1">
								<textarea name="preventive_action" id="preventive_action"  data-parsley-required="true"
								placeholder="How not to do this again, including recommended procedure changes"><?php echo $preventativeAction;?></textarea>
							</div>
						</div>
					</div>
				</div>

				<div class="row">
					<div class=" three">
						<div class="">
							<label >Attahcment File 1 </label>
							<div class="select1">
								<input type="file" name="attachment[]">
							</div>
							<?php
								if(!empty($attachment1) && file_exists(FCPATH.'uploads/isoncr_files/'.$attachment1)){
									echo '<input type="hidden" name="attachment1" value="'.$attachment1.'">';
									echo '<a href="'.base_url('uploads/isoncr_files/'.$attachment1).'" target="_blank" >Attachment</a>';
								}
							?>
							
						</div>
					</div>
					<div class=" three">
						<div class="">
							<label >Attahcment File 2</label>
							<div class="select1">
								<input type="file" name="attachment[]">
							</div>
							<?php
								if(!empty($attachment2) && file_exists(FCPATH.'uploads/isoncr_files/'.$attachment2)){
									echo '<input type="hidden" name="attachment2" value="'.$attachment2.'">';
									echo '<a href="'.base_url('uploads/isoncr_files/'.$attachment2).'" target="_blank" >Attachment</a>';
								}
							?>
						</div>
					</div>
					<div class=" three">
						<div class="">
							<label >Attahcment File 3</label>
							<div class="select1">
								<input type="file" name="attachment[]">
								
							</div>
							<?php
								if(!empty($attachment3) && file_exists(FCPATH.'uploads/isoncr_files/'.$attachment3)){
									echo '<input type="hidden" name="attachment3" value="'.$attachment3.'">';
									echo '<a href="'.base_url('uploads/isoncr_files/'.$attachment3).'" target="_blank" >Attachment</a>';
								}
							?>
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
