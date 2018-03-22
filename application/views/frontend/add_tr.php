<?php
 /* Test Results add page*/

	$this->load->view('frontend/header');
	$this->load->view('frontend/sidebar');
	$this->load->view('frontend/top');
	$CI	= & get_instance();
	/*$login_user=$CI->session->userdata('frontendUserName');
	var_dump($login_user); */
?>
<!-- <script src="https://cdn.ckeditor.com/4.8.0/basic/ckeditor.js"></script> -->

<style>
	.rope-product a{
		  
		    height: 40px;
			/*border: 1px solid lightgrey;*/
			border-radius: 3px;
		    text-align: center;
		    line-height: 150px;
		    display: block;
		}
	 .test_result { position: relative; float:left; width:95%;}
	 .quantity { width:95%; }
	 .add-test { display: inline-block; padding: 5px 10px;}
	 .remove-test{display: inline-block;padding: 10px 10px;}
	 .rope-product .half .quantity {
		    width: 100%;
		}
		#vert{
			display:grid;
			padding-left: 5px;
		    padding-top: 15px;
		}
		#test_count{display:none;}
		.ck-focused.ck-editor__editable.ck-rounded-corners.ck-editor__editable_inline {
		    height: 105px;
		    padding-left:9px;
		        color: dimgrey;
		    font-size: 13px;
		    font-family: arial;
		}
		.ck-blurred.ck-editor__editable.ck-rounded-corners.ck-editor__editable_inline {
		    height: 70px;
		    padding-left:9px;
		       color: dimgrey;
		    font-size: 13px;
		    font-family: arial;
		}
</style>
<!-- Right Bar Section -->
	<div class="right-bar" id="page_layout">
		<div class="form-section">
			<div class="col-sm-12 top-head">
				<h1 id="quoting-heading">Product/Design Test Record [ Add ]</h1>
				<a href="<?=base_url('TR')?>" class="back-btn  create_quote" > < Back</a>
			</div>
			<div class="col-xs-8 inner-form" id="innerformdetails">
				<div><?php $message	= $this->session->flashdata('message'); echo $message;?></div>
				<div class="form-group form-wrap">
					<?php
						echo form_open('', array('class'=>'form-row ','id'=>'tr_form','data-parsley-validate'=>'data-parsley-validate','enctype'=>'multipart/form-data'));
					?>
					<div class="panel panel-default">
						<div class="panel-heading"> <h5 style="color:white;" >Add Product/Design Test Record</h5> </div>
						<div class="panel-body">
							<div class="row">
								<div class="half">
										<label id="customer-heading">Sample Identification	<em >*</em></label>
										<!-- <div class="select1"> -->
											<textarea rows="10" name="sample_identity" id="sample_identity" Placeholder="Sample Identification" ></textarea>
										<!-- </div> -->
								</div>
								<div class=" half">
									<div class="half">
										<label >Test Record Number<em >*</em></label>
										<div class="select1">
											<input type="text" id="trno" name="test_recordno" Placeholder="Test Record Number" data-parsley-required="true">
										</div>
									</div>
								</div>
							</div>

							<div class="row">
								<div class=" half">
									<div class=" ">
										<label id="customer-heading">Test Standard Performed (ANSI, ASTM, NFPA, etc.)<em >*</em></label>
										<div class="select1">
											<textarea name="test_standard" id="test_standard" Placeholder="Test Standard Performed"></textarea>
										</div>
									</div>
								</div>
								<div class=" half">
									<div class="">
										<label id="customer-heading">Test Description<em >*</em></label>
										<div class="select1">
											<textarea name="test_description" id="test_description" Placeholder="Test Description" ></textarea>
										</div>
									</div>
								</div>
							</div>
							
							<div class="row">
								<div class="half">
									<div class="form-row"><label>Tests</label></div>
									<div id="test-row" class="add-item rope-product">
										<div class="second_row_rope">
											<div class="form-row ">
											</div>
										</div>
										<div class="form-row">
											<div class="quantity form-row">
												<textarea name="test_results[]" id="test1" placeholder="Test 1"></textarea>
											</div>
										</div>
										
											<a href="javascript:void(0)" class="btn-align add-rope-row" id="vert"><img src="<?=base_url('assets/front/images/plus.png')?>" alt="plus"></a>
											<a href="javascript:void(0)" class="remove-rope-row " id="vert"><img src="<?=base_url('assets/front/images/minus.png')?>" alt="minus"></a>
										
									</div>
								</div>

								<div class="half">
									<label>Test Summary</label>
									<div class="select1">
										<textarea name="test_summary" id="test_summary" Placeholder="Test Summary" ></textarea>
									</div>
								</div>
							</div>

							<div id="tester" class="row">
								<div class="half">
									<div class="half">
										<label>Tester</label>
										<input type="text" name="tester" Placeholder="Tester" class="tester" data-parsley-required="true">
									</div>
									<div class="half">
										 <label>Date</label>
										<input type="text" name="date" class="date" Placeholder="Date" data-parsley-required="true">
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

	$('.right-bar').on('click','#submitTR', function (){
		$('#tr_form').parsley().validate();
		if ($('#tr_form').parsley().isValid()) {
			$('#myModal').modal('toggle');
			$.post('<?=base_url('frontend/TReport/createTR')?>',
				$('#tr_form').serialize(),
				function (response){
					var data	= JSON.parse(response);
					if(data.error!=''){
						alert(data.error);
					}else{
						alert('Test Record is successfully saved');
					}
				});
		}
	});

</script>

<script type="text/javascript">
	
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

		var cdate = getDate();
		$('.date').val(cdate);

		var user = $('.user-profile p');
		$('.tester').val(user[0].innerHTML);

	});
	
	var counter = 1;
	function count(){
		counter = counter+1;
		return counter;
	}


	$('#page_layout').on('click','.add-rope-row',function() {
		
		var counter = count();
		var html	= '<div id="test-row" class="add-item rope-product"><div class="second_row_rope"><div class="form-row "><div class=""></div></div></div>';
		
		
		html 		+= '<div class="form-row"><div class="quantity form-row "><textarea name="test_results[]" id="test'+counter+'" placeholder="Test '+counter+'"></textarea></div></div><a href="javascript:void(0)" class="btn-align add-rope-row" id="vert"><img src="<?=base_url('assets/front/images/plus.png')?>" alt="plus"></a>                                                             <a href="javascript:void(0)" class="remove-rope-row" id="vert"><img src="<?=base_url('assets/front/images/minus.png')?>" alt="plus"></a></div>';


		$('.add-item:last').after(html);

		ClassicEditor.create( document.querySelector( '#test'+counter ) );
		$('#tr_form').parsley().isValid();
		$(".custom-select").customselect();
		$(".select1").find('select').selectBoxIt();
		/*addplusminus();*/
	});
	
	/* Remove the rope quote row */
	$('#page_layout').on('click','.remove-rope-row',function() {
		var inputNo	= $('.quantity textarea').length;
		if(inputNo > 1){
			$(this).parent().remove();
		}else{
			alert("Last item can't be deleted");
		}
	});

	function addplusminus(){
		jQuery('<div class="quantity-nav"><div class="quantity-button quantity-up">+</div><div class="quantity-button quantity-down">-</div></div>').insertAfter('.quantity input');
	};

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

	/*$( document ).ready(function() {
		$( "#submitUserDetails" ).click(function() {
			var val = $('.ck-focused.ck-editor__editable.ck-rounded-corners.ck-editor__editable_inline').val();
			console.log(val);
		});
	});*/
</script>

<script>ClassicEditor.create( document.querySelector( '#sample_identity' ) )</script>
<script>ClassicEditor.create( document.querySelector( '#test_standard' ) )</script>
<script>ClassicEditor.create( document.querySelector( '#test_description' ) )</script>
<script>ClassicEditor.create( document.querySelector( '#test_summary' ) )</script>
<script>ClassicEditor.create( document.querySelector( '#test1' ) )</script>

