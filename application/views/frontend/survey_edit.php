<style>
	hr {
	  border: 0;
	  clear:both;
	  display:block;
	  width: 100%;               
	  background-color:#FFFF00;
	  height: 3px;
	}
	.survey_img{
		width: 150px;
	    height: 150px;
	    border-radius: 24px;
	    border: 3px solid darkgrey;
	    float: right;
	}
	#alig{
		float:right;
		
	}
	.fa-calculator{color:grey;}
	.ck-focused.ck-editor__editable.ck-rounded-corners {
		    height: 105px;
		    padding-left:18px;
		        color: dimgrey;
		    font-size: 13px;
		    font-family: arial;
		    background-color: white;
		}
		.ck-blurred.ck-editor__editable.ck-rounded-corners {
		    height: 70px;
		    padding-left:18px;
		       color: dimgrey;
		    font-size: 13px;
		    font-family: arial;
		    background-color: white;
		}
		.ck-toolbar{
			margin-top:22px;
		}
</style>

<?php 
	$this->load->view('frontend/header');
	$this->load->view('frontend/sidebar');
	$this->load->view('frontend/top');
	

	if(!empty($survey)) { $survey = $survey[0]; }
	

	$itemId	= !empty($survey->item_id) ? $survey->item_id : '';
	$itemId = base64_encode($itemId);
	/*$survId = !empty($survey->survId) ? $survey->survId : '';*/

	$customer	= !empty($survey->customer) ? $survey->customer : '';
	$item_name	= !empty($survey->item_name) ? $survey->item_name : '';
	$no_ropes	= !empty($survey->no_ropes) ? $survey->no_ropes : '';
	$no_posts	= !empty($survey->no_posts) ? $survey->no_posts : '';
	$quantity	= !empty($survey->quantity) ? $survey->quantity : '0';
	$net_material		= !empty($survey->net_material) ? $survey->net_material : '';
	$lash_material	= !empty($survey->lash_material) ? $survey->lash_material : '';
	$rope_material	= !empty($survey->rope_material) ? $survey->rope_material : '';
	$border_material= !empty($survey->border_material) ? $survey->border_material : '';
	$condition	= !empty($survey->condition) ? $survey->condition : '';
	$item_height		= !empty($survey->item_height) ? $survey->item_height : '0';
	$item_length	= !empty($survey->item_length) ? $survey->item_length : '0';
	$shape	= !empty($survey->shape) ? $survey->shape : '';
	$drawing		= !empty($survey->drawing) ? $survey->drawing : '0';
	$drawing_pg	= !empty($survey->drawing_pg) ? $survey->drawing_pg : '';
	$notes	= !empty($survey->notes) ? $survey->notes : '';
	$profile_img = !empty($survey->profile_img) ? $survey->profile_img : '';
	$file_path = FCPATH.'uploads\survey\ '.$profile_img;
	$file_path = str_replace(' ', '', $file_path);
	
?>

<!-- Right Bar Section -->
<section id="wrapper" class="wrepper">
	<div class="right-bar">
		<div class="form-section">
			<div class="col-sm-12 top-head">
				<h1 id="quoting-heading"> Edit Survey</h1>
				<a href="<?=base_url('surveyView/'.$survId)?>" class="back-btn  create_quote" > < Back</a>
			</div>
		<div class="col-sm-8 inner-form" id="innerformdetails">
		<div><?php $message	= $this->session->flashdata('message'); echo $message;?></div>
		<div class="form-group" >
			<?php
				echo form_open( 'surveyIUpdate/'.$itemId.'/'.$survId , array('class'=>'form-row ','method'=>'POST','enctype'=>'multipart/form-data','id'=>'main_form','data-parsley-validate'=>'data-parsley-validate'));
			?>
			<div class="panel panel-default">
				<div class="panel-heading"> <h5 style="color:white;" >Add Survey</h5> </div>
				<div class="panel-body">

					<div class="row">
						<div class="half">
							<div class="half">
								<label>Item Name <em >*</em></label>
								<div class="select1">
									<input type="text" name="item_name" id="item_name" Placeholder="Item Name" value="<?=$item_name?>" required>
								</div>
							</div>
							<div class="half">
								<div class="half">
									<label>Quantity <em >*</em></label>
										<div class="select1" >
											<input type="text" name="quantity" id="quantity" Placeholder="Quantity" value="<?=$quantity?>" required >
										</div>
								</div>
							</div>
						</div>

						<div class="form-row half">
							<div class="form-row half">
								<div class="form-row half">
									<label>No. of posts</label>
									<div class="select1">
										<input type="text" name="no_posts" id="no_posts" value="<?=$no_posts?>" Placeholder="No. of posts" >
									</div>
								</div>
								<div class="form-row half">
									<label>No. of ropes</label>
									<div class="select1">
										<input type="text" name="no_ropes" id="no_ropes" value="<?=$no_ropes?>" Placeholder="No. of ropes" >
									</div>
								</div>		
							</div>
							<div class="form-row half">
								<label>Netting Material <em >*</em></label>
								<input type="text" id="new-materialoption" name="net_material1" placeholder="Select" value="<?=$net_material?>">
								<div id="zero-select" alt-data="materialoption" alt-name="net_material" required>
									<select id="borderoption" name="net_material" class="custom-select">
										<option value="">None</option>
									</select>
								</div>
							</div>
						</div>
					</div>
				
					<div class="row">
						
						<div class="form-row half">
							<div class="form-row half">
								<label>Lashing Material <em >*</em></label>
								<input type="text" id="new-lashoption" name="lash_material1" placeholder="Select" value="<?=$lash_material?>">
								<div id="first-select" alt-data="lashoption" alt-name="lash_material" required>
									<select id="lashoption" name="lash_material" class="custom-select">
										<option value="">None</option>
									</select>
								</div>
							</div>

							<div class="form-row half">
								<label>Rope Material <em >*</em></label>
								<input type="text" id="new-ropeoption" name="rope_material1" placeholder="Select" value="<?=$rope_material?>">
								<div id="second-select" alt-data="ropeoption" alt-name="rope_material" required>
									<select id="ropeoption" name="rope_material" class="custom-select">
										<option value="">None</option>
									</select>
								</div>
							</div>
						</div>
						<div class="form-row half">
							<div class="customer form-row half">
								<label>Border Style <em >*</em></label>
								<input type="text" id="new-borderoption" name="border_material1" placeholder="Select" value="<?=$border_material?>">
								<div id="third-select" alt-data="borderoption" alt-name="border_material" required>
									<select id="borderoption" name="border_material" class="custom-select">
										<option value="">None</option>
									</select>
								</div>
							</div>
							<div class="half">
								<label>Condition<em >*</em></label>
								<div class="select1" id="status-select">
									<select id="condition" name="condition" data-parsley-required="true">
										<option value="" selected disabled hidden>Select one</option>
										<option value="1" <?=(!empty($condition)&&($condition=='1'))?'selected':''?>>Excellent</option>
										<option value="2" <?=(!empty($condition)&&($condition=='2'))?'selected':''?>>Good</option>
										<option value="3" <?=(!empty($condition)&&($condition=='3'))?'selected':''?>>Fair</option>
										<option value="4" <?=(!empty($condition)&&($condition=='4'))?'selected':''?>>Poor</option>
									</select>
								</div>
							</div>
							
						</div>
					</div>

					<div class="row">
						<div class="half">
							<div class="form-row half">
								<div class="form-row half">
									<a class="get-calculation" data-id="item_height">
										<span style="font: 1.38vh 'MyriadProRegular'; color: dimgrey;">Height (ft in) <em >* </em></span><i class="fa fa-calculator" aria-hidden="true"></i>
									</a>
									<div class="select1" >
										<input type="text" name="item_height" data-target="#display-calculator" id="item_height" Placeholder="Height" value="<?=$item_height?>" required >
									</div>
								</div>
								<div class="form-row half">
									<a class="get-calculation" data-id="item_length">
										<span style="font: 1.38vh 'MyriadProRegular'; color: dimgrey;">Length (ft in) <em >* </em></span><i class="fa fa-calculator" aria-hidden="true"></i>
									</a>
									<div class="select1">
										<input type="text" name="item_length" id="item_length" Placeholder="Length" value="<?=$item_length?>" required>
									</div>
								</div>
							</div>
							<div class="customer half">
								<label>Shape (R, T, C, O) <em >*</em></label>
								<div id="usertype-select" class="select1" >
									<select id="shape" name="shape" data-parsley-required="true">
										<option value="" selected disabled hidden>Select one</option>
										<option value="1" <?=(!empty($shape)&&($shape=='1'))?'selected':''?>>R</option>
										<option value="2" <?=(!empty($shape)&&($condition=='2'))?'selected':''?>>T</option>
										<option value="3" <?=(!empty($shape)&&($shape=='3'))?'selected':''?>>C</option>
			   							<option value="4" <?=(!empty($shape)&&($shape=='4'))?'selected':''?>>O</option>

									</select>
								</div>
							</div>
						</div>
						<div class="half">
							
							<div class="form-row half">
								<label>Drawing (Y/N) <em >*</em></label>
								<div class="select1" id="status-select">
									<select id="drawing" name="drawing" data-parsley-required="true">
										<option value="" selected disabled hidden>Select one</option>
										<option value="1" <?=(!empty($drawing)&&($drawing=='1'))?'selected':''?>>Yes</option>
										<option value="0" <?=(!empty($drawing)&&($drawing=='0'))?'selected':''?>>No</option>
									</select>
								</div>
							</div>
							<div class="form-row half">
								<label>Drawing Page #<em >*</em></label>
								<input type="text" name="drawing_pg" id="drawing_pg" Placeholder="Drawing page" value="<?=$drawing_pg?>" required>
							</div>
						</div>	
					</div>
				
					<div class="row ">
						<div class="half">
							<label>Notes </label>
							<div class="select1">
								<textarea name="notes" id="notes" Placeholder="Notes"><?=$notes?></textarea>
							</div>
						</div>
						
						<div class="half">
							<div class="form-row half">
								<label class="control-label">Net Image </label>
								 <div class="input-group image-preview">
						                <input type="text" id="img_file" class="form-control image-preview-filename" disabled="disabled" value="<?=$profile_img?>"> <!-- don't give a name === doesn't send on POST/GET -->
						                <span class="input-group-btn">
						                    <!-- image-preview-clear button -->
						                    <button type="button" class="btn btn-default image-preview-clear" style="display:none;">
						                        <span class="glyphicon glyphicon-remove"></span> Clear
						                    </button>
						                    <!-- image-preview-input -->
						                    <div class="btn btn-default image-preview-input">
						                        <span class="glyphicon glyphicon-folder-open"></span>
						                        <span class="image-preview-input-title">Browse</span>
						                        <input type="file" accept="image/png, image/jpeg, image/gif" name="profile_img" id="profile_img"/> <!-- rename it -->
						                        <input type="hidden" name="hidden_profile_img" id="hidden_profile_img" value="<?=$profile_img?>"> 
						                    </div>
						                </span>
						            </div>
			            	</div>
			            	<div id="alig" class="form-row half">
									<img class="survey_img" id="sv_img" src="<?= base_url('uploads/survey/'.$profile_img);?>">
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


	<div class="md-overlay"></div>
	<div class="md-modal md-effect-1 display-calculator overlay" id="display-calculator">
		<div class="md-content ">
			<div class="pop-main-cont">
				<div class="pop-header">
					<h2 class="calculator">Calculate !</h2>
					<button class="md-close"><i class="fa fa-times" aria-hidden="true"></i></button>
				</div>
				<div class="pop-body">
				<?php
					echo form_open('',array('id'=>'calculation_form','class'=>'calculation_form','data-parsley-validate'=>'data-parsley-validate'));
				?>

				<div class="calculate-input">
				<label class="calcu-label" >Feets</label>
					<input type="text" id="feet" name="feet" placeholder="Feet" data-parsley-min="0" data-parsley-maxlength="4" data-parsley-type="digits">
				</div>
				<div class="calculate-input">
				<label class="calcu-label" >Inches</label>
					<input type="text" id="inches" name="inches" placeholder="Inches" data-parsley-maxlength="6" data-parsley-type="number">
					</div>
					<span class="calculate-value">=</span>
				<div class="calculate-input">
				<label class="calcu-label">Decimal Feet</label>
					<input type="text" id="calculate_value"  >
				</div>
					<button class="calculator-btn">Calculate</button>
				<?php
					form_close();
				?>
				</div>
			</div>
		</div>
	</div>

<?php
	$this->load->view('frontend/bottom');
?>
<script type="text/javascript">
		
			$(function() {
		$(".custom-select").customselect();
	});

	$(document).ready(function(){
		populate_productlistsurvey();
		$("#zero-select").hide();
		$("#first-select").hide();
		$("#second-select").hide();
		$("#third-select").hide();		

		$("#new-lashoption").click(function(){ $("#first-select").show(); $("#new-lashoption").hide();});
		$("#new-materialoption").click(function(){ $("#zero-select").show(); $("#new-materialoption").hide();});
		$("#new-ropeoption").click(function(){ $("#second-select").show(); $("#new-ropeoption").hide();});
		$("#new-borderoption").click(function(){ $("#third-select").show(); $("#new-borderoption").hide();});
	});

	/* This function used for make calculat */
	$(document).on('click','.get-calculation',function(){
		var inputId = $(this).attr('data-id');
		$('.calculator-btn').attr('data-id',inputId);
		$('#feet').val('');$('#inches').val('');$('#calculate_value').val('');
		$('#display-calculator').modal('show');
	});
	$(document).on('click','.md-close',function (){
		$('#display-calculator').modal('hide');
	});
	
	$(document).on('click','.calculator-btn',function (){
			var inputId = $(this).attr('data-id');
			$('#calculation_form').parsley().validate();
			if ($('#calculation_form').parsley().isValid()) {
					var feet = $('#feet').val();
					var inches = $('#inches').val();
					if(!(feet > 0)){
						feet= 0;
					}
					if(!(inches > 0)){
						inches= 0;
					}
					var convertedValues = convertDecimalFeet(inches);
					feet = parseInt(feet) + parseInt(convertedValues['feets']);
					inches = convertedValues['inches'];
					var finalVal = (feet+inches);
					$('#calculate_value').val(finalVal);
					$('#'+inputId).val(finalVal);
					return false;
			}
		});

	function convertDecimalFeet(inches){
		var formula = {1:0.0833,2:0.167,3:0.250,4:0.333,5:0.417,6:0.500,7:0.583,8:0.667,9:0.750,10:0.833,11:0.917};
		var gg = 0;
	  var nn = inches;
	  var newfeet = 0;
	  if(inches > 11){
	  	while(inches >= 12){
				gg++;
				inches = (inches-12);
			}
			var newinches = (nn-(gg*12));
	  	newfeet = (gg);
	  }else{
	  	var newinches = inches;
	  }
	  var check = formula[newinches];
	  if(check==undefined){
	  	newinches = (newinches * .0833);
	  	newinches = newinches+'';
	  	newinches = newinches.substring(1,5);
	  }else{
	  	newinches = formula[newinches];
	  }
	  console.log(newinches);
		return {'inches':newinches,'feets':newfeet}
	}
	
$("#first-select").change(function () {	

			var res = $("#first-select li.no-results").css('display');
			if(res != 'none'){
				/*displays No Result*/
				var inp = $("#first-select input").val();
				
				$("#first-select").hide();
				$("#new-lashoption").show();
				$('#new-lashoption').val(inp);
				$("select#lashoption").val(inp);


				$("#new-lashoption").click(function(){
					$("#first-select").show();
					$("#new-lashoption").hide();
				});
			}
			else{
				$("new-lashoption").hide();

				$("#new-lashoption").click(function(){
					$("#first-select").show();
					$("#new-lashoption").hide();
				});
			}
	});

	$("#zero-select").change(function () {	
			var res = $("#zero-select li.no-results").css('display');
			if(res != 'none'){
				var inp = $("#zero-select input").val();

				$("#zero-select").hide();
				$("#new-materialoption").show();
				$('#new-materialoption').val(inp);
				$("select#materialoption").val(inp);

				$("#new-materialoption").click(function(){
					$("#zero-select").show();
					$("#new-materialoption").hide();
				});
			}
			else{
				$("new-materialoption").hide();

				$("#new-materialoption").click(function(){
					$("#zero-select").show();
					$("#new-materialoption").hide();
				});
			}
	});

	$("#second-select").change(function () {	
			var res = $("#second-select li.no-results").css('display');
			if(res != 'none'){
				var inp = $("#second-select input").val();

				$("#second-select").hide();
				$("#new-ropeoption").show();
				$('#new-ropeoption').val(inp);
				$("select#ropeoption").val(inp);

				$("#new-ropeoption").click(function(){
					$("#second-select").show();
					$("#new-ropeoption").hide();
				});
			}
			else{

				$("new-ropeoption").hide();	

				$("#new-ropeoption").click(function(){
					$("#second-select").show();
					$("#new-ropeoption").hide();
				});
			}
	});

	$("#third-select").change(function () {	
			var res = $("#third-select li.no-results").css('display');
			if(res != 'none'){
				var inp = $("#third-select input").val();

				$("#third-select").hide();
				$("#new-borderoption").show();
				$('#new-borderoption').val(inp);
				$("select#borderoption").val(inp);

				$("#new-borderoption").click(function(){
					$("#third-select").show();
					$("#new-borderoption").hide();
				});
			}
			else{

				$("new-borderoption").hide();	

				$("#new-borderoption").click(function(){
					$("#third-select").show();
					$("#new-borderoption").hide();
				});
			}
	});

	function populate_productlistsurvey(){
		var survey_product = 'suv';
		populateProductOptionssurvey(survey_product,'net','zero-select');
		populateProductOptionssurvey(survey_product,'rope','second-select');

		populateProductOptionssurvey(survey_product,'lash','first-select');
		populateProductOptionssurvey(survey_product,'sewnborder','third-select');
	}

	function populateProductOptionssurvey(product,type,id){
		var varibale_id		= $("#"+id).attr('alt-data');
		var varibale_name	= $("#"+id).attr('alt-name');
		if(product!='' && type!='')
		{
			if(type!='lash')
			{
				$.post('<?=base_url('frontend/home/populateProductOptions')?>',
				{'product':product,'type':type,'var_name':varibale_id, 'name':varibale_name,'csrf_test_name':'<?php echo $this->security->get_csrf_hash(); ?>'},
				 function (response){
					if(type=='lash'){
						$('#'+id).html(response);
						$('#main_form').parsley().isValid();
						$(".select1").find('select').selectBoxIt();
						$(".custom-select").customselect();
					}else{
						$('#'+id).html(response);
						$('#main_form').parsley().isValid();
						$(".select1").find('select').selectBoxIt();
						$(".custom-select").customselect();
					}
				});
			}
			else
			{
				$.post('<?=base_url('frontend/home/populateSLashOptions')?>',
				{'product':product,'type':type,'var_name':varibale_id, 'name':varibale_name,'csrf_test_name':'<?php echo $this->security->get_csrf_hash(); ?>'},
				 function (response){
						$('#'+id).html(response);
						$('#main_form').parsley().isValid();
						$(".select1").find('select').selectBoxIt();
						$(".custom-select").customselect();
				});
			}
		}
	}

		var select = false;
		$( document ).ready(function() {
	   	   var img = $("#img_file").val();
	    	   if(!img){$("#sv_img").hide();}
	        });

		$( "#customer" ).autocomplete({
			source: '<?=base_url('frontend/home/getCustomer')?>',
			open: function(event, ui) { if(select) select=false; },
			select: function (a, b) {
				select=true; 
			}
		}).blur(function(){
			var cus	= $("#customer").val();
			if(!select || cus=='No Record Found !'){
				$("#customer").val('');
			}
		});

	$(document).on('click', '#close-preview', function(){ 
	    $('.image-preview').popover('hide');
	    $('.image-preview').hover(
	        function () {
	           $('.image-preview').popover('show');
	        }, 
	         function () {
	           $('.image-preview').popover('hide');
	        }
	    );    
	});

	$(function() {
	 
	    var closebtn = $('<button/>', {
	        type:"button",
	        text: 'x',
	        id: 'close-preview',
	        style: 'font-size: initial;',
	    });
	    closebtn.attr("class","close pull-right");
	   
	    $('.image-preview').popover({
	        trigger:'manual',
	        html:true,
	        title: "<strong>Preview</strong>"+$(closebtn)[0].outerHTML,
	        content: "There's no image",
	        placement:'bottom'
	    });

	    $('.image-preview-clear').click(function(){
	        $('.image-preview').attr("data-content","").popover('hide');
	        $('.image-preview-filename').val("");
	        $('.image-preview-clear').hide();
	        $('.image-preview-input input:file').val("");
	        $(".image-preview-input-title").text("Browse"); 
	    }); 

	    $(".image-preview-input input:file").change(function (){     
	        var img = $('<img/>', {
	            id: 'dynamic',
	            width:250,
	            height:200
	        });      
	        var file = this.files[0];
	        var reader = new FileReader();
	   
	        reader.onload = function (e) {
	            $(".image-preview-input-title").text("Change");
	            $(".image-preview-clear").show();
	            $(".image-preview-filename").val(file.name);            
	            img.attr('src', e.target.result);
	            $(".image-preview").attr("data-content",$(img)[0].outerHTML).popover("show");
	        };    
	        reader.readAsDataURL(file);
	    });  
	});
</script>
