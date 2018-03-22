<?php 
if(!empty($js)){
	foreach($js as $jval){
		echo "<script type='text/javascript' src='".base_url()."assets/front/js/$jval.js' ></script>";
	}
}
?>
<script>
$(document).ready(function () {
	$('.item-has-children').children('a').on('click', function(event){
			event.preventDefault();
			$(this).toggleClass('submenu-open').next('.sub-menu').slideToggle(200).end().parent('.item-has-children').siblings('.item-has-children').children('a').removeClass('submenu-open').next('.sub-menu').slideUp(200);
		});
	});

	$(function() {
		$(".select1").find('select').selectBoxIt();
	});
	
	$(".user-profile").click(function(){
		$(".userProfile").toggle();
	});
	$(window).load(function() {
		$(".loader").fadeOut("slow");
	});
</script>
<script type="text/javascript">
$(".sidebar").mCustomScrollbar();
</script>
<script src="<?=base_url('assets/front/sidebar/js/jquery.menu-aim.js')?>"></script>
<script src="<?=base_url('assets/front/sidebar/js/main.js')?>"></script> <!-- Resource jQuery -->

</body>
</html>
