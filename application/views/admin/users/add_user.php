<div class="page-content">
	<?php
		$this->load->view('themes/admin/alert');
	?>
	<div class="page-header">
		<h1>
			Register New Users
		</h1>
	</div><!-- /.page-header -->

	<div class="row">
		<div class="col-xs-12">
			<!-- PAGE CONTENT BEGINS -->
			<?=form_open(current_url(),array('id'=>'user-register','enctype'=>'multipart/form-data','class'=>'form-horizontal','data-parsley-validate'=>'data-parsley-validate'))?>
				<div class="form-group">
					<label for="usertype" class="col-sm-3 control-label no-padding-right"> User Type </label>
					<div class="col-sm-9">
						<select id="usertype" name="user_group" class="col-xs-10 col-sm-5" data-parsley-required="true" data-parsley-required-message="Please select user group">
							<option value="">Select User Type</option>
							<?php
								$groups	= $this->config->item('user_group');
								if(!empty($groups)){
									foreach($groups as $k=>$val){
										echo '<option value="'.$k.'">'.$val.'</option>';
									}
								}
							?>
						</select>
					</div>
				</div>
				
				<div class="form-group">
					<label for="username" class="col-sm-3 control-label no-padding-right"> User Name </label>
					<div class="col-sm-9">
						<input type="text" name="username" data-parsley-required="true" data-parsley-required-message="Please Enter User Name" 
						data-parsley-pattern="^[a-zA-Z0-9 ]{3,20}$" data-parsley-error-message="Enter valid user name" data-parsley-minlength="3" class="col-xs-10 col-sm-5" placeholder="Username" id="username"
						 value="<?=set_value('username')?>">
					</div>
				</div>
				
				<div class="form-group">
					<label for="email" class="col-sm-3 control-label no-padding-right"> User Email </label>
					<div class="col-sm-9">
						<input type="text" name="email" class="col-xs-10 col-sm-5" placeholder="Email Address" id="email" data-parsley-required-message="Please Enter Email Id" data-parsley-required="true" 
							data-parsley-type="email" data-parsley-type-message="Please Enter Valid Email Id" value="<?=set_value('email')?>">
					</div>
				</div>
				<div class="form-group">
					<label for="form-field-1" class="col-sm-3 control-label no-padding-right"> User Mobile </label>
					<div class="col-sm-9">
						<input type="text" name="contact_no" class="col-xs-10 col-sm-5" placeholder="Contact Number" id="contact" data-parsley-required-message="Please Enter contact Number" 
						data-parsley-required="true" data-parsley-type="digits" maxlength="12" data-parsley-rangelength="[10,12]" data-parsley-rangelength-message="Contact Number should be between 10 and 12 characters" 
						data-parsley-type-message="Please Enter Valid Contact Number" value="<?=set_value('contact_no')?>" >
					</div>
				</div>
				<div class="form-group">
					<label for="form-field-1" class="col-sm-3 control-label no-padding-right"> First Name </label>
					<div class="col-sm-9">
						<input type="text" name="first_name" data-parsley-required="true"  data-parsley-required-message="Please Enter First Name" 
						data-parsley-pattern="^[a-zA-Z0-9 ]{3,20}$" data-parsley-pattern-message="Enter Valid First Name" data-parsley-minlength="3" class="col-xs-10 col-sm-5" placeholder="First Name" 
						id="first_name" value="<?=set_value('first_name')?>">
					</div>
				</div>
				<div class="form-group">
					<label for="form-field-1" class="col-sm-3 control-label no-padding-right"> Last Name </label>
					<div class="col-sm-9">
						<input type="text" name="last_name" class="col-xs-10 col-sm-5" placeholder="Last Name" id="last_name" value="<?=set_value('last_name')?>">
					</div>
				</div>
				<div class="form-group">
					<label for="form-field-1" class="col-sm-3 control-label no-padding-right"> About US </label>
					<div class="col-sm-9">
						<textarea name="about_us"  maxlength="50" class="col-xs-10 col-sm-5" placeholder="About us"><?=set_value('about_us')?></textarea>
					</div>
				</div>
				
				<div class="form-group">
					<label for="form-field-1" class="col-sm-3 control-label no-padding-right"> Password </label>
					<div class="col-sm-9">
						<input type="password" name="password" id="password" class="col-xs-10 col-sm-5" placeholder="Password" 
						data-parsley-required-message="Please Enter New Password" data-parsley-required="true" maxlength="20" 
						value="" />
					</div>
				</div>
				<div class="form-group">
					<label for="form-field-1" class="col-sm-3 control-label no-padding-right"> Confirm Password </label>
					<div class="col-sm-9">
						<input type="password" name="con_password" id="con_password" class="col-xs-10 col-sm-5" maxlength="20" data-parsley-equalto="#password" data-parsley-equalto-message="Password and Confirm Password are not same" placeholder="Confirm Password" />
					</div>
				</div>
				
				<div class="form-group">
					<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> User Image </label>

					<div class="col-sm-9">
						<input type="file" id="logo" name="image" />
						<span class="show_logo"></span>
						<p>Image sould be (gif|jpg|png|bmp|jpeg) and dimension max (500x500) px</p>
					</div>
					
				</div>

				<div class="form-group">
					<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> User Status </label>
					<div class="col-sm-9">
						<label>
							<input  name="status" value="1" class="ace" type="radio" checked="checked">
							<span class="lbl"> Active</span>
						</label>
						<label>
							<input  name="status" value="0" class="ace" type="radio" >
							<span class="lbl"> Deactive</span>
						</label>
					</div>
				</div>
				<div class="clearfix form-actions">
					<div class="col-md-offset-3 col-md-9">
						<button type="submit" class="btn btn-info">
							<i class="ace-icon fa fa-check bigger-110"></i>
							Submit
						</button>

						&nbsp; &nbsp; &nbsp;
						<button type="reset" class="btn">
							<i class="ace-icon fa fa-undo bigger-110"></i>
							Reset
						</button>
					</div>
				</div>
			<?=form_close()?>

			<div class="hr hr-18 dotted hr-double"></div>

		</div><!-- /.col -->
	</div><!-- /.row -->
</div>
</div>
</div>
	<?php $this->load->view('themes/admin/footer'); ?>
	<?php $this->load->view('themes/admin/bottom'); ?>
	<script>
	/*$('#user-register').on('change', '#logo',function(){
		var FileUploadPath = $(this)[0].files;
		if (typeof (FileReader) != "undefined"){
			var dvPreview = $(this).parent().find(".show_logo");
			$(this).parent().find(".img-info").html('');
			dvPreview.html("");
			var regex = /^([a-zA-Z0-9\s_\\.\-: ,' ' - _ ~ # % ^ * @ + = < > ;" '&( ) { } ])+(.jpg|.jpeg|.gif|.png|.bmp)$/;
			var k=0;
			var fname='';
			$($(this)[0].files).each(function () {
				fname=fname+FileUploadPath[0].name+',';
				var str=str+FileUploadPath[0].size;
				str=str/(4*1024*1024);
				if(str>=10){
					$(this).parent().find(".img-info").html("Please select images less then 10 MB.");
					dvPreview.html("");
					return false; 
				};
				var file = $(this);
				if(regex.test(file[0].name.toLowerCase())) {
					var reader = new FileReader();
					reader.onload = function (e) {
						var img = $("<img style='width:150px; height:100px;'/>");
						img.attr("src", e.target.result);
						dvPreview.html(img);
					}
					reader.readAsDataURL(file[0]);
				}else{
					$(this).parent().find(".img-info").html(file[0].name + " is not a valid image file.Please select only JPG,PNG,JPEG,GIF,BMP type files.");
					$(this).val('');
					return false;
				}
			});
		}else {
			$(this).parent().find(".img-info").html("This browser does not support HTML5 FileReader.");
		}
	});	*/
	</script>
