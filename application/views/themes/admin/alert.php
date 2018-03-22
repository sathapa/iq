<?php
$alertMsg	= '';
$color		= 'green';
$alertType	= $this->session->flashdata('message_type');
	if($alertType){
		if($alertType=='success'){$color='green';}if($alertType=='warning'){$color='yellow';}if($alertType=='dander'){$color='red';}
		$alertMsg	= $this->session->flashdata('message');
?>
<div class="alert alert-block alert-<?=$alertType;?> ">
	<button type="button" class="close" data-dismiss="alert">
		<i class="ace-icon fa fa-times"></i>
	</button>
	<strong class="<?=$color?>">
		<?=$alertMsg;?>
	</strong>
</div>
<?php
	}
?>
