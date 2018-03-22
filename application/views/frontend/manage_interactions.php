<?php
	$this->load->view('frontend/header');
	$this->load->view('frontend/sidebar');
	$this->load->view('frontend/top');
	$groupPermissions	= $this->group_permissions;
?>
<!-- Right Bar Section -->
	<div class="right-bar">
		<div class="dashboard">
		<div class="form-section">
			<div class="col-sm-12 top-head">
				<h1>Manage Interactions</h1>
				<div class="search-main"></div>
			</div>
			
			<div class="data-table-dash">
			<div id="alert-message"><?php echo $this->session->flashdata('message');?></div>
			<table class="table  table-bordered table-hover" id="quote-web-table">
				<thead>
					<tr>
						<th></th>
						<th>Type#</th>
						<th>Date Time</th>
						<th>Subject</th>
						<th>Notes</th>
						<th>Followup</th>
						<th>Due Date</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody class="filter-data">
					<?php if(!empty($interactions)){
						$i=0;
						foreach($interactions as $val){
							$i++;
							$crmActivityId		= !empty($val->crm_activity_id) ? $val->crm_activity_id : '';
							$crmAccountid		= !empty($val->crm_accountid) ? $val->crm_accountid : '';
							
							$activityType		= !empty($val->activity_type) ? $val->activity_type : '';
							$activityDateTime	= !empty($val->activity_datetime) ? $val->activity_datetime : '';
							$activitySubject	= !empty($val->activity_subject) ? $val->activity_subject : '';
							$activityNotes		= !empty($val->activity_notes) ? $val->activity_notes : '';
							$activityFollowup	= !empty($val->followup_flag) ? 'True' : 'False';
							$activityDueDate	= !empty($val->due_date) ? $val->due_date : '';
							$dateTimes			= !empty($activityDateTime) ? explode('T',$activityDateTime) : '';
							$activityDate		= !empty($dateTimes[0]) ? $dateTimes[0] : '';
							$activityTimes		= !empty($dateTimes[1]) ? explode(':',$dateTimes[1]) : '';
							$time				= !empty($activityTimes[0]) ? $activityTimes[0] : 0;
							$zone				= 'AM';
							if(!empty($time) && $time >= 12){
								$zone			= 'PM';
								$time			= ($time - 12);
							}
							$newTime			= 8;
							$min				= !empty($activityTimes[1]) ? 10 : 20;
							$duteDates			= !empty($activityDueDate) ? explode('T',$activityDueDate) : '';
							$duteDate			= !empty($duteDates[0]) ? $duteDates[0] : '';

						echo '<tr>
								<td width="20">'.$i.'</td>
								<td width="100">'.$activityType.'</td>
								<td width="100">'.$activityDateTime.'</td>
								<td width="200">'.$activitySubject.'</td>
								<td width="200">'.$activityNotes.'</td>
								<td width="100">'.$activityFollowup.'</td>
								<td width="100">'.$activityDueDate.'</td>';
							$i++;
						?>

						<td width="80">
							
							<a class="add_activity tooltip" data-type="<?=$activityType?>" data-date="<?=$activityDate?>" data-hours="<?=$newTime?>" data-minutes="<?=$min?>" data-zone="<?=$zone;?>"
							data-subject="<?=$activitySubject?>" data-notes="<?=$activityNotes?>" data-duedate="<?=$duteDate?>" data-activityid="<?=$crmActivityId?>" data-accountid="<?=$crmAccountid?>" href="javascript:void(0)" >
								<i class="fa fa-male" aria-hidden="true"></i>
								<span class="tooltiptext">Update Interaction</span>
							</a>
							
						</td>
					</tr>
					<?php
						}
					}
					?>
				</tbody>
			</table>
			</div>
		</div>
	</div>

<!-- Right Bar Section -->
</section>
	<!-- Add new contact details Popup Modal (22-08-2017)-->
	<div class="md-modal md-effect-1 add-an-activity" id="modify-activity">
		<div class="md-content">
			<div class="pop-main-cont">
				<div class="pop-header">
					<h2>Interaction Details :</h2>
					<button class="md-close" data-dismiss="modal">
						<i class="fa fa-times" aria-hidden="true"></i>
					</button>
				</div>
            <div class="pop-body cf">
				<?php
				echo form_open('', array('class'=>'form-row ','id'=>'update_activity'));
				?>
				<div class="row select-area">
					<input type="hidden" name="crm_activity_id" id="crm_activity_id" value="">
					<input type="hidden" name="crm_account_id" id="crm_account_id" value="">
					<div class="form-row first select1">
						<label>Category :<em >*</em></label>
						<div class="select1" id="interaction-type-html">
							<select id="activity_category" name="activity_category" class="input-fields" data-parsley-required="true">
								<?=getQuoteHeaderLookUp('interaction_type')?>
							</select>
						</div>
					</div>
						
					<div class="form-row first">
						<label>Time :</label>
						<div class="">
							<input type="text" name="activity_time" id="activity_time" class=" time input-fields" placeholder="HH:MM" />		
						</div>
					</div>
					
					<div class="row select-area">
						<div class="form-row first">
							<label>Date :</label>
							<input type="text" name="activity_date" id="activity_date" class="date input-fields" placeholder="YY-MM-DD">
						</div>
						<div class="form-row first">
							<label>Subject :</label>
							<input type="text" name="activity_subject" id="activity_subject" class="input-fields" placeholder="Subject">
						</div>
					</div>
					
					<div class="row select-area">
						<div class="form-row one">
							<label>Details :</label>
							<textarea name="activity_notes" id="activity_notes" class="input-fields" placeholder="Activity Notes"></textarea>
						</div>
					</div>
					
					<div class="row select-area">
						<div class="form-row3 ">
							<input type="checkbox" name="activity_followup" id="activity_followup" value="1" class="followup-checkbox input-fields">
							<label>Followup :</label>
						</div>
						<div class="form-row4 ">
							<label>Due Date :</label>
							<input type="text" name="activity_due_date" id="activity_due_date" class=" date input-fields" placeholder="YY-MM-DD" value="">
						</div>
						<div class="form-row3  update-area">
							<input type="button" value="Submit" class="add-more-contact-btn" id="updateActivity" />
						</div>
					</div>
					
				<?=form_close()?>
                </div>
			</div>
		</div>
	</div>	
	
	<div class="md-overlay"></div>
	<!-- model pop html code end -->
<?php
	$this->load->view('frontend/bottom');
?>
<script>
	
	$('#quote-web-table').DataTable({
		"pageLength": 50,language: {
			searchPlaceholder: "Enter Search Value...",
			paginate: {
				next: '<i class="fa fa-angle-right" aria-hidden="true"></i>',
				previous: '<i class="fa fa-angle-left" aria-hidden="true"></i>'  
			}
		}
	});
	
	$(".date").datepicker({
		dateFormat: 'yy-mm-dd' 
		/*minDate:new Date()*/
	});
	
	/* Add more contact details (22-08-2017) */
	$(document).on('click','.add_activity',function (){
		var contactId		= $(this).attr('data-accountid');
		var activityId		= $(this).attr('data-activityid');
		
		var type		= $(this).attr('data-type');
		
		var date			= $(this).attr('data-date');
		var hourse			= $(this).attr('data-hours');
		var minutes			= $(this).attr('data-minutes');
		var zone			= $(this).attr('data-zone');
		var subject			= $(this).attr('data-subject');
		var notes			= $(this).attr('data-notes');
		var pollowup		= $(this).attr('data-followup');
		var dueDate			= $(this).attr('data-duedate');
		
		
		if(contactId!=''){
			$('#crm_account_id').val(contactId);
			$('#crm_activity_id').val(activityId);
			var hh	= '<select id="activity_category" name="activity_category" class="input-fields" data-parsley-required="true"><option value="'+type+'">'+type+'</option>';
				hh	+= '<?=getQuoteHeaderLookUp('interaction_type')?>';
				hh	+= '</select>';
			$('#interaction-type-html').html(hh);
			$(".select1").find('select').selectBoxIt();
			
			
			$('#activity_time').val(hourse+':'+minutes+' '+zone);
			$('#activity_date').val(date);
			$('#activity_subject').val(subject);
			$('#activity_due_date').val(dueDate);
			
			$('#activity_notes').val(notes);
			
			$(".time").timepicki({
				timeFormat: 'hh:mm',
				min_hour_value:0,
				max_hour_value:12,
				step_size_minutes:15,
				start_time: [hourse, minutes, zone],
				overflow_minutes:true,
				increase_direction:'up',
				disable_keyboard_mobile: true
			});
			$(".time").timepicki();
			$('#modify-activity').modal('show');
		}
		
	});
	
	/* Submit add new contact form */
	$(document).on('click','#updateActivity',function (){
		var addBtnText	= $(this);
		$('#update_activity').parsley().validate();
		if ($('#update_activity').parsley().isValid()) {
			addBtnText.val('Processing....');
			$.post('<?=base_url('frontend/crm/addActivity')?>',$('#update_activity').serialize(), function (response){
				var data	= JSON.parse(response);
				if(data.status=='Yes'){
						$('.input-fields').val('');
						var alterMessage	= '<div class="alert alert-block alert-success"><button type="button" class="close" data-dismiss="alert"><i class="ace-icon fa fa-times"></i></button><p>'+data.msg+'</p></div>';
						$('#alert-message').html(alterMessage);
						$('#modify-activity').modal('hide');
						location.reload(); 
				}else{
					alert(data.msg);
				}
				addBtnText.val('Submit');
			});
		}
	});
</script>