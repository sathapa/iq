<?php
 /* HR edit page*/


	$this->load->view('frontend/header');
	$this->load->view('frontend/sidebar');
	$this->load->view('frontend/top');
	$CI	= & get_instance();
	$login_user=$CI->session->userdata('frontendUserName');
	

	if(!empty($hrdata)) { $hrdata = $hrdata[0]; }
	
	$hrno = !empty($hrdata->hid) ? $hrdata->hid : '';
	$fname	= !empty($hrdata->first_name) ? $hrdata->first_name : '';
	$lname	= !empty($hrdata->last_name) ? $hrdata->last_name : '';
	$sex	= !empty($hrdata->sex) ? $hrdata->sex : '';
	$a_date	= !empty($hrdata->a_date) ? $hrdata->a_date : ''; $i_date	= !empty($hrdata->i_date) ? $hrdata->i_date : '';
	$h_date	= !empty($hrdata->h_date) ? $hrdata->h_date : '';
	$hired_status	= !empty($hrdata->hired_status) ? $hrdata->hired_status : ''; 

	$interviewQ = !empty($hrdata->interview_questions) ? $hrdata->interview_questions : '';
	$application = !empty($hrdata->application) ? $hrdata->application : '';$resume = !empty($hrdata->resume) ? $hrdata->resume : '';
	$test = !empty($hrdata->test) ? $hrdata->test : '';$letter	= !empty($hrdata->letter) ? $hrdata->letter : '';

	$manufac_exp	= !empty($hrdata->manufac_exp) ? $hrdata->manufac_exp : ''; $comment_desc	= !empty($hrdata->comment_desc) ? $hrdata->comment_desc : '';
	$department	= !empty($hrdata->department) ? $hrdata->department : ''; $supervisor	= !empty($hrdata->supervisor) ? $hrdata->supervisor : '';
	$referred_by	= !empty($hrdata->referred_by) ? $hrdata->referred_by : ''; $bonus_check_date	= !empty($hrdata->bonus_check_date) ? $hrdata->bonus_check_date : '';
	$home_no	= !empty($hrdata->home_no) ? $hrdata->home_no : '-';
	$cell_no		= !empty($hrdata->cell_no) ? $hrdata->cell_no : '-';
	$other	= !empty($hrdata->other) ? $hrdata->other : '';

	/*Manufacturing yrs & months partition*/
	$y_exp = (int) $manufac_exp;
	$m_exp = round(($manufac_exp - $y_exp)*12,1);

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
				<h1 id="quoting-heading">HR [ Update ]</h1>
				<a href="<?=base_url('HR')?>" class="back-btn  create_quote" > < Back</a>
			</div>
		<div class="col-sm-8 inner-form" id="innerformdetails">
		<div><?php $message	= $this->session->flashdata('message'); echo $message;?></div>
		<div class="form-group">
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
								<input type="text" id="trno" name="first_name" Placeholder="First Name" value="<?=$fname;?>" data-parsley-required="true">
						</div>
						<div class="form-row half">
							<label id="customer-heading">Last Name <em >*</em></label>
								<input type="text" id="trno" name="last_name" Placeholder="Last Name" value="<?=$lname;?>" data-parsley-required="true">
						</div>

					</div>
					<div class="form-row half">
						<div class="half">
							<div class="form-row half">
								<label >Sex<em >*</em></label>
								<div class="select1" id="status-select">
									<select id="sex" name="sex" data-parsley-required="true">
										<option value="" selected disabled hidden>Select one</option>
										<option value="1 [Male]" <?=($sex=='Male')?'selected':''?> >Male</option>
										<option value="2 [Female]"<?=($sex=='Female')?'selected':''?> >Female</option>
										<option value="3 [Not specified]"<?=($sex=='Not specified')?'selected':''?> >Not specified</option>
									</select>
								</div>

							</div>
							<div class="form-row half">
									<label>Home no.</label>
									<div class="select1">
										<input type="text" name="homeno" class="input-medium bfh-phone" value="<?=$home_no;?>" Placeholder="(NNN) NNN-NNNN" data-format="+1 (ddd) ddd-dddd">
									</div>
							</div>
						</div>
						<div class="half">
							<div class="form-row half">
								<label>Cell no.</label>
								<div class="select1">
									<input type="text" name="cellno" class="input-medium bfh-phone" value="<?=$cell_no;?>" Placeholder="(NNN) NNN-NNNN" data-format="+1 (ddd) ddd-dddd" data-parseley-required="true">
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
										<option value="1 [Finance]"  <?=($department=='Finance')?'selected':''?> >Finance</option>
										<option value="2 [HR]"  <?=($department=='HR')?'selected':''?> >HR</option>
										<option value="3 [Inventory]"  <?=($department=='Inventory')?'selected':''?> >Inventory</option>
										<option value="4 [Production]"  <?=($department=='Production')?'selected':''?> >Production</option>
										<option value="5 [Shipping]"  <?=($department=='Shipping')?'selected':''?> >Shipping</option>
										<option value="6 [IT]"  <?=($department=='IT')?'selected':''?> >IT</option>					
									</select>
							</div>
						</div>
						<div class="form-row half">
							<label>Supervisor</label>
							<div class="select1">
								<input type="text" name="supervisor" Placeholder="Supervisor" value="<?=$supervisor;?>" data-parsley-required="true">
							</div>
						</div>
					</div>
					<div class="half">
						<div class="form-row half" id="manuf_wh">
							<label class="mnuf_lbl">Manufacturing Experience
							</label>
							<div class="input-group mb-2 mr-sm-2 mb-sm-0">
							  <input type="text" id="how-many-2" class="wheelable" value="<?=$y_exp;?>" name="manufac_exp_y" />
							  <div class="input-group-addon"><span class="manuf">yrs</span></div>
							  <input type="text" id="how-many-2" class="wheelable" value="<?=$m_exp;?>" name="manufac_exp_m" />
							  <div class="input-group-addon"><span class="manuf">months</span></div>
				  		    </div>
						</div>

						<div class="form-row half">
							<label>Bonus check date</label>
							<div class="select1">
								<input type="text" name="bonus_check_date" class="date" value="<?=$bonus_check_date;?>" Placeholder="Bonus check date" data-parsley-required="true">
							</div>
						</div>
					</div>
				</div>

				<div class="row">
					<div class=" half">
						<div class="form-row half ">
							<label id="customer-heading">a-Date<em >*</em></label>
							<div class="select1">
								<input type="text" name="a_date" class="date" value="<?=$a_date;?>" data-parsley-required="true">
							</div>
						</div>

						<div class="form-row half ">
							<label id="customer-heading">i-Date<em >*</em></label>
							<div class="select1">
								<input type="text" name="i_date" class="date" value="<?=$i_date;?>" data-parsley-required="true">
							</div>
						</div>

					</div>
					<div class=" half">
					 <div class="half">
						<div class="form-row half">
							<label id="customer-heading">Hired Status<em >*</em></label>
							<div class="select1" id="status-select">
									<select id="status" name="hired_status" data-parsley-required="true">
										<option value="" selected disabled hidden>Select one</option>
										<option value="1 [Hired]"  <?=($hired_status=='Hired')?'selected':''?> >Hired</option>
										<option value="2 [Pending]"  <?=($hired_status=='Pending')?'selected':''?> >Pending</option>
										<option value="3 [No Application]"  <?=($hired_status=='No Application')?'selected':''?> >No Application</option>
									</select>
							</div>
						</div>

						<div class="form-row half">
							<label>Referred by</label>
							<div class="select1">
								<input type="text" name="referred_by" value="<?=$referred_by;?>" Placeholder="Referred by" data-parsley-required="true">
							</div>
						</div>
					  </div>
					  <div class="half">
					  	  <?php
									if(!empty($interviewQ) && file_exists(FCPATH.'uploads/hr_files/'.$interviewQ)){ 
										echo '<label>Interview Questions <a href="'.base_url('uploads/hr_files/'.$interviewQ).'" target="_blank" >[Interview Questions]</a></label>';
										echo '<input type="hidden" name="interview_questions" value="'.$interviewQ.'">'; }
										else{
											echo '<label>Interview Questions</label>';
											}	
							 	?>
									<input type="file" name="attachment[]">
					  </div>
					</div>	
				</div>
				
				<div class="row">
					<div class="half">
						<div class="form-row half">
							<?php
									if(!empty($application) && file_exists(FCPATH.'uploads/hr_files/'.$application)){ 
										echo '<label>Application <a href="'.base_url('uploads/hr_files/'.$application).'" target="_blank" >[Application]</a></label>';
										echo '<input type="hidden" name="application" value="'.$application.'">'; }
										else{
											echo '<label>Application</label>';
											}	
							 	?>
											<input type="file" name="attachment[]">
										
							
						</div>

						<div class="half">
							<div class="form-row">
								<?php
									if(!empty($resume) && file_exists(FCPATH.'uploads/hr_files/'.$resume)){ 
										echo '<label>Resume <a href="'.base_url('uploads/hr_files/'.$resume).'" target="_blank" >[Resume]</a></label>';
										echo '<input type="hidden" name="resume" value="'.$resume.'">'; }else{
											echo '<label>Resume</label>';
											}	
							 	?>
											<input type="file" name="attachment[]">
										
							 	
							</div>
						</div>
					</div>

					<div class="half">
						<div class="form-row half">
							<?php
								if(!empty($test) && file_exists(FCPATH.'uploads/hr_files/'.$test)){ 
									echo '<label>Test <a href="'.base_url('uploads/hr_files/'.$test).'" target="_blank" >[Test]</a></label>';
									echo '<input type="hidden" name="test" value="'.$test.'">'; } else{
											echo '<label>Test</label>';
											}	
							 	?>
								<input type="file" name="attachment[]">
							
						</div>
						<div class="form-row half">
							<?php
								if(!empty($letter) && file_exists(FCPATH.'uploads/hr_files/'.$letter)){ 
									echo '<label>Letter <a href="'.base_url('uploads/hr_files/'.$letter).'" target="_blank" >[Letter]</a></label>';
									echo '<input type="hidden" name="letter" value="'.$letter.'">'; }else{
											echo '<label>Letter</label>';
											}	
							 	?>
										<input type="file" name="attachment[]">
										
							 
						</div>
					</div>
				</div>

				<div class="row">
					<div class="form-row half">
						<div class="form-row half">
							<label>Comment</label>
							<textarea rows="10" name="comment" Placeholder="Comment" ><?=$comment_desc;?></textarea>
						</div>
						<div class="form-row half">
							<label>Other</label>
							<textarea rows="10" name="other" Placeholder="Other" ><?=$other;?></textarea>
						</div>
					</div>
					<div class="form-row half">
						<div class="form-row half">
							<label id="customer-heading">H-Date</label>
							<div class="select1">
								<input type="text" name="h_date" value="<?=$h_date;?>" class="date" >
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div id="sub" class="row">
			<div class="form-row three ">
				<button type="submit" class="save" id="submitUserDetails"> Submit </button>
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

</script>

<script type="text/javascript">
	
	/*File Browser field*/
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


