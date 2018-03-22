<?php
	$this->load->view('frontend/header');
	$this->load->view('frontend/sidebar');
	$this->load->view('frontend/top');
	//dump($mailDetail);
	$salesassistantContact	= !empty($mailDetail['salesAssistantContact']) ? $mailDetail['salesAssistantContact'] : '';
?>
<!-- Right Bar Section -->
	<div class="right-bar">
		<div class="form-section">
			<div class="top-head">
				<h1 id="quoting-heading">Send Proposal</h1>
			</div>
		<div class="inner-form" id="innerformdetails">
		<div id="alert-message"><?php echo $this->session->flashdata('message');?></div>
		<div class="form-group send-mail-with-proposal">
		
		<?php
			echo form_open(base_url('sendproposalprocess'), array('class'=>'form-row ','id'=>'edit-group','enctype'=>'multipart/form-data','data-parsley-validate'=>'data-parsley-validate'));
		?>
		<div class="row">
			<div class="half">
				
				<div class="select1">
					<div class="send-label">
						<label>To <i class="fa fa-envelope" aria-hidden="true"></i></label>
					</div>
					<div class="send-proposal-input">
						<input type="hidden" name="quote_id" value="<?=$quoteId?>">
						<input type="hidden" name="proposal" value="<?=$proposal?>">
						<input type="text" data-parsley-type="email" name="send_to" id="send_to" Placeholder="E-mail " data-parsley-required="true" value="<?=!empty($mailDetail['contactEmail']) ? $mailDetail['contactEmail'] : ''?>">
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
						<input type="text" data-parsley-type="email" name="send_to" id="send_to" Placeholder="E-mail " value="<?=!empty($mailDetail['salespersonEmail']) ? $mailDetail['salespersonEmail'] : ''?>">
					</div>
				</div>
			</div>
		</div>
		<!--
		<div class="row">
			<div class="half">
				
				<div class="select1">
					<div class="send-label">
						<label>Subject</label>
					</div>
					<div class="send-proposal-input">
						<input type="text" name="send_to" id="send_to" Placeholder="Quoteweb Proposal" value="Quoteweb Proposal" required>
					</div>
				</div>
			</div>
		</div>
		-->
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
