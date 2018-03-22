<?php
	$this->load->view('frontend/header');
	$this->load->view('frontend/sidebar');
	$this->load->view('frontend/top');
	//dump($mailDetail);
	$salesassistantContact	= !empty($mailDetail['salesAssistantContact']) ? $mailDetail['salesAssistantContact'] : '';
?>
<style>
	.send-proposal-input {
	    padding-top: 4px;
	}
	.inner-form {
		width:100%;
		 margin-left: 5%;
	    margin-top: 2%;
	    float: left;
	}
	.send-label {
		width:12%;
	    float: left;
	}
	.save {
	    padding: 8px 24px;
	}
	.alert {
	    width: 90%;
	}
	.send_txt{
		font-size:1.38vh "MyriadProRegular";
	}
</style>

<!-- Right Bar Section -->
	<div class="right-bar">
		<div class="form-section">
			<div class="col-sm-12 top-head">
				<h1 id="quoting-heading">Send Proposal TEST</h1>
			</div>
		<div class="inner-form" id="innerformdetails">
		<div id="alert-message"><?php echo $this->session->flashdata('message');?></div>
		<div class="form-group send-mail-with-proposal">
		
		<?php
			echo form_open(base_url('sendproposalprocess'), array('class'=>'form-row ','id'=>'edit-group','enctype'=>'multipart/form-data','data-parsley-validate'=>'data-parsley-validate'));
		?>
		<div class="row"> 
			<div class="send_txt"> (Please separate each email with a comma, like: mail@example.com, mail2@example.com.) </div>
		</div>
		<div class="row">
			<div class="half">
				
				<div class="select1">
					<div class="send-label">
						<label>To <i class="fa fa-envelope" aria-hidden="true"></i></label>
					</div>
					<div class="send-proposal-input">
						<input type="hidden" name="quote_id" value="<?=$quoteId?>">
						<input type="hidden" name="proposal" value="<?=$proposal?>">
						<input type="text" name="send_to" id="send_to" Placeholder="E-mail To" data-parsley-required="true" value="<?=!empty($mailDetail['contactEmail']) ? $mailDetail['contactEmail'] : ''?>" multiple>
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
						<input type="text" name="send_cc" id="send_cc" Placeholder="E-mail cc" value="<?=!empty($mailDetail['salespersonEmail']) ? $mailDetail['salespersonEmail'] : ''?>" multiple>
					</div>
				</div>
			</div>
		</div>
		
		<div class="row">
			<div class="half">
				
				<div class="select1">
					<div class="send-label">
						<label>Subject</label>
					</div>
					<div class="send-proposal-input">
						<input type="text" name="subject" id="subject" Placeholder="subject" value="Quote [<?=$proposal?>] - Proposal" required>
					</div>
				</div>
			</div>
		</div>
		
		<div class="row">
			<div class="form- half select1">
				
				<div class="select1">
					<div class="comments">
					<label>Comments : </label>
					<textarea  name="comments" cols="10" >Please review attached proposal and advise of any changes required.&#013;&#013;To place order, please approve by replying to email with authorization to process as quoted or send formal PO.&#013;&#013;Please confirm address, contact person and phone number for delivery.&#013;&#013;If we do not already have yours on file, provide a State tax exempt certificate (required for the State that goods will be delivered to).&#013;&#013;Please call us at <?php echo $salesassistantContact;?> with payment information. We accept Visa, MC or AMEX or if using same card as previous order, confirm last four digits and sec. code.&#013;&#013;Feel free to contact me with any questions.&#013;&#013;Thank you! Have a wonderful day!! </textarea>
				</div>
				</div>
			</div>
		</div>
		
		
		<div class="row">
			
				<div class="form-row three-save ">
					<div class="attachment">
					<label><i class="fa fa-file-pdf-o fa-2x" aria-hidden="true"></i> <?=$proposal?>.pdf</label>
						
					</div>
					<button type="submit" class="save" id="submitUserDetails">
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
