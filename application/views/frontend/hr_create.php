<?php
 /* Test Results add page*/

	$this->load->view('frontend/header');
	$this->load->view('frontend/sidebar');
	$this->load->view('frontend/top');
	$CI	= & get_instance();
?>
<!-- <script src="https://cdn.ckeditor.com/4.8.0/basic/ckeditor.js"></script> -->

<style>
	.manuf{
		font-size : 12px;
	}

	@keyframes scroll {
	  0% { opacity: 0; }
	  10% { transform: translateY(0); opacity: 1; }
	  100% { transform: translateY(15px); opacity: 0;}
	}

</style>
<!-- Right Bar Section -->
	<div class="right-bar" id="page_layout">
		<div class="form-section">
			<div class="col-sm-12 top-head">
				<h1 id="quoting-heading">HR [ Add ]</h1>
				<a href="<?=base_url('HR')?>" class="back-btn  create_quote" > < Back</a>
			</div>
			<div class="col-xs-8 inner-form" id="innerformdetails">
				<div><?php $message	= $this->session->flashdata('message'); echo $message;?></div>
				<div class="form-group form-wrap">
					<?php
						echo form_open('', array('class'=>'form-row ','id'=>'hr_form','data-parsley-validate'=>'data-parsley-validate','enctype'=>'multipart/form-data'));
					?>
					<div class="panel panel-default">
						<div class="panel-heading"> <h5 style="color:white;" >Add HR</h5> </div>
						<div class="panel-body">
							<div class="row">
								<div class="form-row half">
									<div class="form-row half">
										<label id="customer-heading">First Name <em >*</em></label>
											<input type="text" id="trno" name="first_name" Placeholder="First Name" data-parsley-required="true">
									</div>
									<div class="form-row half">
										<label id="customer-heading">Last Name <em >*</em></label>
											<input type="text" id="trno" name="last_name" Placeholder="Last Name" data-parsley-required="true">
									</div>

								</div>
								<div class="form-row half">
									<div class="half">
										<div class="form-row half">
											<label >Sex<em >*</em></label>
											<div class="select1" id="status-select">
												<select id="sex" name="sex" data-parsley-required="true">
													<option value="" selected disabled hidden>Select one</option>
													<option value="1 [Male]" >Male</option>
													<option value="2 [Female]" >Female</option>
													<option value="3 [Not specified]" >Not specified</option>
												</select>
											</div>

										</div>
										<div class="form-row half">
												<label>Home no.</label>
												<div class="select1">
													<input type="text" name="homeno" class="input-medium bfh-phone" Placeholder="(NNN) NNN-NNNN" data-format="+1 (ddd) ddd-dddd">
												</div>
										</div>
									</div>
									<div class="half">
										<div class="form-row half">
											<label>Cell no.</label>
											<div class="select1">
												<input type="text" name="cellno" class="input-medium bfh-phone" Placeholder="(NNN) NNN-NNNN" data-format="+1 (ddd) ddd-dddd" data-parseley-required="true">
											</div>
										</div>
									</div>
								</div>
							</div>

							<div class="row">
								
								<div class="half">
									<div class="form-row half">
										<label>Department</label>
										<div class="select1" id="status-select">
												<select id="department" name="department" data-parsley-required="true">
													<option value="" selected disabled hidden>Select one</option>
													<option value="1 [Finance]" >Finance</option>
													<option value="2 [HR]" >HR</option>
													<option value="3 [Inventory]">Inventory</option>
													<option value="4 [Production]" >Production</option>
													<option value="5 [Shipping]" >Shipping</option>
													<option value="6 [IT]" >IT</option>					
												</select>
										</div>
									</div>
									<div class="form-row half">
										<label>Supervisor</label>
										<div class="select1">
											<input type="text" name="supervisor" Placeholder="Supervisor" >
										</div>
									</div>
								</div>
								<div class="half">
									<div class="form-row half" id="manuf_wh">
										<label class="mnuf_lbl">Manufacturing Experience
										</label>
										<div class="input-group mb-2 mr-sm-2 mb-sm-0">
										  <input type="text" id="how-many-2" class="wheelable" value="0" name="manufac_exp_y" />
										  <div class="input-group-addon"><span class="manuf">yrs</span></div>
										  <input type="text" id="how-many-2" class="wheelable" value="0" name="manufac_exp_m" />
										  <div class="input-group-addon"><span class="manuf">months</span></div>
										</div>
									</div>

									<div class="form-row half">
										<label>Bonus Check Date</label>
										<div class="select1">
											<input type="text" name="bonus_check_date" class="date" Placeholder="Bonus Check Date">
										</div>
									</div>
								</div>
							</div>

							<div class="row">
								<div class=" half">
									<div class="form-row half ">
										<label id="customer-heading">A-Date<em >*</em></label>
										<div class="select1">
											<input type="text" name="a_date" class="date" Placeholder="Application Date" data-parsley-required="true">
										</div>
									</div>

									<div class="form-row half ">
										<label id="customer-heading">I-Date<em >*</em></label>
										<div class="select1">
											<input type="text" name="i_date" class="date" Placeholder="Interview Date" data-parsley-required="true">
										</div>
									</div>

								</div>
								<div class=" half">
									<div class="form-row half">
										<div class="form-row half">
											<label id="customer-heading">Hired Status<em >*</em></label>
											<div class="select1" id="status-select">
													<select id="status" name="hired_status" data-parsley-required="true">
														<option value="" selected disabled hidden>Select one</option>
														<option value="1 [Hired]" >Hired</option>
														<option value="2 [Pending]" >Pending</option>
														<option value="3 [No Application]" >No Application</option>
													</select>
											</div>
										</div>
										<div class="form-row half">
											<label>Referred by</label>
											<div class="select1">
												<input type="text" name="referred_by" Placeholder="Referred by">
											</div>
										</div>
									</div>
									
									<div class="form-row half">
										<label>Interview Questions</label>
										<input type="file" name="attachment[]">
									</div>
								</div>	


									

							</div>
							
							<div class="row">
								<div class="half">
									<div class="form-row half">
										<label>Application</label>
										<input type="file" name="attachment[]">
									</div>

									<div class="half">
										<div class="form-row">
											<label>Resume</label>
											<input type="file" name="attachment[]">
										</div>
									</div>
								</div>
								<div class="half">
									<div class="form-row half">
										<label>Test</label>
										<input type="file" name="attachment[]">
									</div>
									<div class="form-row half">
										<label>Letter</label>
										<input type="file" name="attachment[]">
									</div>
								</div>	
								
							</div>

							<div class="row">
								<div class="half">
									<div class="form-row half">
										<label>Comment</label>
										<textarea rows="10" name="comment" Placeholder="Comment" ></textarea>
									</div>

									<div class="half">
										<div class="form-row">
											<label>Other</label>
											<textarea rows="10" name="other" Placeholder="Other" ></textarea>
										</div>
									</div>
								</div>
								<div class="half">
									<div class="form-row half ">
										<label id="customer-heading">H-Date</label>
										<div class="select1">
											<input type="text" name="h_date" class="date" Placeholder="Hired Date">
										</div>
									</div>
								</div>	
								
							</div>

							<div id="sub" class="row">
								<div class="form-row three ">
									<button type="submit" class="save" id="submitUserDetails"> Submit </button>
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

</script>

<script type="text/javascript">
	
	/*File Browser field jquery func*/
	function bs_input_file() {
	$(".input-file").before(
		function() {
			if ( ! $(this).prev().hasClass('input-ghost') ) 
			{
				var element = $("<input type='file' class='input-ghost' style='visibility:hidden; height:0'>");
				element.attr("name",$(this).attr("name"));
				element.change(function(){
					element.next(element).find('input').val((element.val()).split('\\').pop());
				});
				$(this).find("button.btn-choose").click(function(){
					element.click();
				});
				$(this).find("button.btn-reset").click(function(){
					element.val(null);
					$(this).parents(".input-file").find('input').val('');
				});
				$(this).find('input').css("cursor","pointer");
				$(this).find('input').mousedown(function() {
					$(this).parents('.input-file').prev().click();
					return false;
				});
				return element;
			}
		}
	  );
	}

	$(function() {
		bs_input_file();
	});
	/*File Browser field func ends here*/

	$(".date").datepicker({
		dateFormat: 'yy-mm-dd' 
		/*minDate:new Date()*/
	});

	$(function() {
		$('input#trno').on('keypress', function (event) {
		    var regex = new RegExp("^[a-zA-Z0-9]+$");
		    var key = String.fromCharCode(!event.charCode ? event.which : event.charCode);
		    if (!regex.test(key)) {
		       event.preventDefault();
		       return false;
		    }
		});

		$(".custom-select").customselect();

		/*var cdate = getDate();
		$('.date').val(cdate);*/

		/*var user = $('.user-profile p');
		$('.tester').val(user[0].innerHTML);*/

	});
	
	var counter = 1;
	function count(){
		counter = counter+1;
		return counter;
	}


	/*Auto Date*/
	function getDate(){
		var d = new Date();

		var month = d.getMonth()+1;
		var day = d.getDate();

		var output = d.getFullYear() + '-' +
		    (month<10 ? '0' : '') + month + '-' +
		    (day<10 ? '0' : '') + day;

		return output;
	}

</script>


