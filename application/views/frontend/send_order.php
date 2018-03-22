<?php
	$this->load->view('frontend/header');
	$this->load->view('frontend/sidebar');
	$this->load->view('frontend/top');
	//dump($mailDetail);
?>
<!-- Right Bar Section -->
	<div class="right-bar">
		<div class="form-section">
			<div class="top-head">
				<h1 id="quoting-heading">Send Tracking No</h1>
			</div>
		<div class="inner-form" id="innerformdetails">
		<div id="alert-message"><?php echo $this->session->flashdata('message');?></div>
		<div class="form-group send-mail-with-proposal">
		
		<?php
			echo form_open(base_url('sendTrackingNo'), 
			array('class'=>'form-row ','id'=>'edit-group','enctype'=>'multipart/form-data','data-parsley-validate'=>'data-parsley-validate'));
		?>
		<div class="row">
			<div class="half">
				
				<div class="select1">
					<div class="send-label">
						<label>To <i class="fa fa-envelope" aria-hidden="true"></i></label>
					</div>
					<div class="send-proposal-input">
						<input type="hidden" name="tracking_no" value="<?php echo $trackingNo;?>">
						<input type="text" data-parsley-type="email" name="send_to" id="send_to" Placeholder="E-mail " data-parsley-required="true" value="">
					</div>
				</div>
			</div>
		</div>
		
		<div class="row">
			<div class="half">
				<div class="select1">
					<div class="send-label">
						<label>Cc <i class="fa fa-envelope" aria-hidden="true"></i></label>
					</div>
					<div class="send-proposal-input">
						<input type="text" data-parsley-type="email" name="send_to_cc" id="send_to_cc" Placeholder="E-mail " value="">
					</div>
				</div>
			</div>
		</div>
		
		<div class="row">
			<div class="form- half select1">
				
				<div class="select1">
					<div class="comments">
					<label>Comments : </label>
					<textarea  name="comments" cols="10" ><?php echo $trackingNo;?></textarea>
				</div>
				</div>
			</div>
		</div>
		
		<div class="row">
			<div class="form-row three-save ">
				<button type="submit" class="save" id="sendTrackingNo">
					<i class="fa fa-paper-plane-o fa-2x" aria-hidden="true"></i>
				</button>
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
