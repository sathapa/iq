<?php
 /* Test Results add page*/

	$this->load->view('frontend/header');
	$this->load->view('frontend/sidebar');
	$this->load->view('frontend/top');
	$CI	= & get_instance();
	$login_user=$CI->session->userdata('frontendUserName');
	

	if(!empty($trdata)) { $trdata = $trdata[0]; }

	$sample_identity	= !empty($trdata->sample_identity) ? $trdata->sample_identity : '';
	$test_recordno	= !empty($trdata->test_recordno) ? $trdata->test_recordno : '';
	$test_standard	= !empty($trdata->test_standard) ? $trdata->test_standard : '';
	$test_description	= !empty($trdata->test_description) ? $trdata->test_description : '';
	$test_summary	= !empty($trdata->test_summary) ? $trdata->test_summary : '0';
	$test_results		= !empty($trdata->test_results) ? $trdata->test_results : '';
	/*var_dump($test_results);*/
	



	$test_data = json_decode($test_results,true);
	
	

	$tester	= !empty($trdata->created_by) ? $trdata->created_by : '';
	$date	= !empty($trdata->date) ? $trdata->date : '';
	
?>

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
				<h1 id="quoting-heading">Product/Design Test Record [ <?=$title_text;?> ]</h1>
				<a href="<?=base_url('TR')?>" class="back-btn  create_quote" > < Back</a>
			</div>
		<div class="col-sm-8 inner-form" id="innerformdetails">
		<div id="alert-message-success"><?php $message	= $this->session->flashdata('message'); echo $message;?></div>
		<div id="alert-message-replicate"><?php echo $this->session->flashdata('message_replicate');?></div>
		<div class="form-group">
		<?php
			echo form_open('', array('class'=>'form-row ','id'=>'tr_form','data-parsley-validate'=>'data-parsley-validate','enctype'=>'multipart/form-data'));
		?>
		<div class="panel panel-default">
			<div class="panel-heading"> <h5 style="color:white;" >Add Product/Design Test Record</h5> </div>
			<div class="panel-body">
				<div class="row">
					<div class="half">
							<label id="customer-heading">Sample Identification	<em >*</em></label>
							<div class="select1">
								<textarea name="sample_identity" id="sample_identity" data-parsley-required="true"><?=$sample_identity?></textarea>
							</div>
					</div>
					<div class=" half">
						<div class="half">
							<label >Test Record Number<em >*</em></label>
							<div class="select1">
								<input type="text" id="test_recordno" name="test_recordno" value="<?=$test_recordno?>" data-parsley-required="true" disabled>
							</div>
						</div>
					</div>
				</div>

				<div class="row">
					<div class=" half">
						<div class=" ">
							<label id="customer-heading">Test Standard Performed (ANSI, ASTM, NFPA, etc.)<em >*</em></label>
							<div class="select1">
								<textarea name="test_standard" id="test_standard"  data-parsley-required="true"><?=$test_standard?></textarea>
							</div>
						</div>
					</div>
					<div class=" half">
						<div class="">
							<label id="customer-heading">Test Description<em >*</em></label>
							<div class="select1">
								<textarea name="test_description" id="test_description" data-parsley-required="true"><?=$test_description?></textarea>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
				
					

					<div class="half">
						
					</div>
				</div>
				
				<div class="row">
					<div class="half">
						<div id="test_count"><?=count($test_data);?></div>
						<div class="form-row"><label>Tests</label></div>
						<?php
						for($i=0;$i<count($test_data);$i++)
						{ ?>
							
						<div class="add-item rope-product">
							<div class="second_row_rope">
								<div class="form-row ">
								</div>
							</div>
							<div class="form-row">
								<div class="quantity form-row">
									<textarea name="test_results[]" id="test<?=$i?>" data-parsley-required="true"><?php echo $test_data[$i]; ?></textarea>
								</div>
							</div>
							
								<a href="javascript:void(0)" class="add-rope-row" id="vert"><img src="<?=base_url('assets/front/images/plus.png')?>" alt="plus"></a>
								<a href="javascript:void(0)" class="remove-rope-row " id="vert"><img src="<?=base_url('assets/front/images/minus.png')?>" alt="minus"></a>
						</div>

						<?php } ?>
					</div>

					<div class="half">
						<label>Test Summary</label>
						<div class="select1">
							<textarea name="test_summary" id="test_summary" data-parsley-required="true"><?=$test_summary?></textarea>
						</div>
					</div>
				</div>

				<div id="tester" class="row">
					<div class="half">
						<div class="half">
							<label>Tester</label>
							<input type="text" name="tester" value="<?=$tester?>" class="tester" data-parsley-required="true">
						</div>
						<div class="half">
							 <label>Date</label>
							<input type="text" name="date" class="date" value="<?=$date?>" data-parsley-required="true">
							<div id="dp6" data-date="12-02-2012" data-date-format="dd-mm-yyyy"></div>
							

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
	$( document ).ready(function() {
	   /*If previous page was Manage*/
	   var url =  document.referrer;
	   var _array = url.split('/'),
	   _foo = _array[_array.length-1];
	   if(_foo === "TR"){	
	    	$('.form-group').show();	
	    	$("input").removeAttr('disabled');
	    }
	   else{	
			var txt_title = $(".top-head h1#quoting-heading").text();
			var result = txt_title.match(/\[(.*)\]/);
			if($.trim(result[1]) === "Replicate"){
				$("input").removeAttr('disabled');
				$('.form-group').hide();

				$('.right-bar').on('click','#replicate', function (){
					$('.form-group').show();
				});

				$('.right-bar').on('click','#new', function (){
					$(location).attr('href', '<?=base_url('frontend/TReport/createTR')?>')
				});


			}
		}


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
	
	var counter = $("#test_count").text();
	editor_display(counter);

	function count(){
		counter = parseInt(counter)+1;
		return counter;
	}
	function editor_display(n){
		for(i=1;i<n;i++){
				ClassicEditor.create( document.querySelector( '#test'+i ) );
			}
	}

	$('#page_layout').on('click','.add-rope-row',function() {
		
		var counter = count();
		var html	= '<div class="add-item rope-product"><div class="second_row_rope"><div class="form-row "><div class=""></div></div></div>';
		html 		+= '<div class="form-row"><div class="quantity form-row "><textarea name="test_results[]" id="test'+counter+'" placeholder="Test '+counter+'"></textarea></div></div><a href="javascript:void(0)" class="add-rope-row" id="vert"><img src="<?=base_url('assets/front/images/plus.png')?>" alt="plus"></a>                                                             <a href="javascript:void(0)" class="remove-rope-row" id="vert"><img src="<?=base_url('assets/front/images/minus.png')?>" alt="plus"></a></div>';
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


</script>

<script>ClassicEditor.create( document.querySelector( '#sample_identity' ) )</script>
<script>ClassicEditor.create( document.querySelector( '#test_standard' ) )</script>
<script>ClassicEditor.create( document.querySelector( '#test_description' ) )</script>
<script>ClassicEditor.create( document.querySelector( '#test_summary' ) )</script>
<script>ClassicEditor.create( document.querySelector( '#test0' ) )</script>
