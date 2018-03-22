<?php
	$this->load->view('frontend/header');
	$this->load->view('frontend/sidebar');
	$this->load->view('frontend/top');
	$firstName	= !empty($user->first_name) ? $user->first_name : '';
	$lastName	= !empty($user->last_name) ? $user->last_name : '';
	$email		= !empty($user->email) ? $user->email : '';
	$contact	= !empty($user->contact_no) ? $user->contact_no : '';
	$aboutus	= !empty($user->aboutus) ? $user->aboutus : '';
	$profileImg	= !empty($user->image) ? $user->image : '';
	$active		= !empty($user->active) ? $user->active : '0';
	
?>
<!-- Right Bar Section -->
	<div class="right-bar">
		<div class="form-section">
			<div class="col-sm-12 top-head">
				<h1 id="quoting-heading">User Management [ Edit User ]</h1>
				<a href="<?=base_url('users')?>" class="back-btn create_quote"> < Back</a>
			</div>
		<div class="col-sm-8 inner-form" id="innerformdetails">
		<div><?php $message	= $this->session->flashdata('message'); echo $message;?></div>
		<div class="form-group">
		<div class="panel panel-default">
		 	<div class="panel-heading"> <h5 style="color:white;"> Add User </h5>	</div>
		  	<div class="panel-body">
		<?php
			echo form_open('', array('class'=>'form-row ','id'=>'edit-user','enctype'=>'multipart/form-data','data-parsley-validate'=>'data-parsley-validate'));
		?>
		<div class="row">
			<div class="half">
				<label>First Name <em >*</em></label>
				<div class="select1">
					<input type="text" name="first_name" id="first_name" Placeholder="First Name" value="<?=$firstName?>" required>
				</div>
			</div>
			<div class=" half">
				<label>Last Name </label>
				<div class="select1">
					<input type="text" name="last_name" id="last_name" Placeholder="Last Name" value="<?=$lastName?>" >
				</div>
			</div>
		</div>

		<div class="row">
			<div class="customer half">
				<label>User Type </label>
				<div id="usertype-select" class="select1" >
					<select id="user_group_id" name="user_group_id" >
						<option value="">Select</option>
						<?php
							if(!empty($groups) && is_array($groups)){
								foreach($groups as $group){
									$select	= (!empty($user->user_group_id) && $user->user_group_id==$group->group_id ) ? 'selected' : '';
									echo '<option value="'.$group->group_id.'" '.$select.'>'.$group->group_name.'</option>';
								}
							}
						?>
					</select>
				</div>
			</div>
			
			<div class="customer half">
				<label>Email <em >*</em></label>
				<div class="select1">
					<input type="email" name="email" id="email" Placeholder="Email " value="<?=$email?>" required>
				</div>
			</div>
			
		</div>
		
		<div class="row">
			<div class="form-row half">
				<label>Description </label>
				<div class="select1">
					<textarea name="aboutus" id="aboutus" Placeholder="Short Description " ><?=$aboutus?></textarea>
				</div>
			</div>
			<div class="form-row half">
				<label>Profile Image </label>
				 <div class="input-group image-preview">
                <input type="text" class="form-control image-preview-filename" disabled="disabled" value="<?=$profileImg?>"> <!-- don't give a name === doesn't send on POST/GET -->
                <span class="input-group-btn">
                    <!-- image-preview-clear button -->
                    <button type="button" class="btn btn-default image-preview-clear" style="display:none;">
                        <span class="glyphicon glyphicon-remove"></span> Clear
                    </button>
                    <!-- image-preview-input -->
                    <div class="btn btn-default image-preview-input">
                        <span class="glyphicon glyphicon-folder-open"></span>
                        <span class="image-preview-input-title">Browse</span>
                        <input type="file" name="profile_img" id="profile_img" accept="image/png, image/jpeg, image/gif"/>
                        <input type="hidden" name="hidden_profile_img" id="hidden_profile_img" value="<?=$profileImg?>"> <!-- rename it -->
                    </div>
                </span>
            </div>
			</div>
		</div>
		
		<div class="row">
			<div class="form-row half">
				<label>Contact <em >*</em></label>
				<div class="select1">
					<input type="text" name="contact_no" id="contact_no" Placeholder="Contact " value="<?=$contact?>" data-parsley-type="digits" data-parsley-length="[8, 12]" required>
				</div>
			</div>
			<div class="form-row half">
				<label>Status <em >*</em></label>
				<div class="select1" id="status-select">
					<select id="active" name="active" data-parsley-required="true">
						<option value="1" <?=$active==1 ? 'selected' : ''; ?> >Active</option>
						<option value="0" <?=$active!=1 ? 'selected' : ''; ?> >Inactive</option>
					</select>
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
