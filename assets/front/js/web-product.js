	
$( document ).ready(function() {
		/*Distributor as default pricing selection */
		jQuery("select#pricingtier option[value='Distributor Pricing [2]']").attr("selected", "selected"); 
});

function empty(value){
  return (value == null || value.length === 0);
}

function GetProdOptions(wtclass)
		{
			if(wtclass!='No Record Found !' && wtclass!=''){
				
					var data = {};   // $('#div1').find('#children2') 
					var product_type_cur = '';  //$('#net_form').find('.custom-select')
					var wt_class_cur = '';
					var wt_class = wtclass;
					var product_type = $('#choose-product :selected').text()
					$("#choose-product").change(function () {			
							product_type_cur = $(this).find('option:selected').text();
							product_type_cur = (!empty(product_type_cur)?product_type_cur:product_type);
							data['ptype'] = product_type_cur;


							/*if(wt_class === "IND") {
								
								$('#product_row').hide(); 
								$("#ptype").show();*/
								/*setTimeout(function(){ $('#net_form').find('.custom-select').hide(); }, 498);*/
   							    /*setTimeout(function(){ alert("Hello"); }, 3000);*/
								DefaultProdOptions(data);
							//}
							//else{
								/* $('#product_row').find('.custom-select').show();
								 $("#ptype").hide();*/
							//}

					});


					$("#choose-wtclass").change(function () {			
							wt_class_cur = $(this).find('option:selected').text();
							wt_class_cur = (!empty(wt_class_cur)?wt_class_cur:wt_class);
							
							data['wt'] = wt_class_cur;
							/*console.log(wt_class_cur);*/
							/*if(wt_class_cur === 'IND'){*/
							/*	$('#product_row').find('.custom-select').hide(); 
								$("#ptype").show();*/
								
         					/*setTimeout(function(){ $('#net_form').find('.custom-select').hide(); }, 498);*/
							DefaultProdOptions(data);/*}
							else{*/
								/*$("#ptype").show();
								$('#product_row').find('.custom-select').show();
								$("#ptype").hide(); */
							//}
					});
					
					data['ptype'] = product_type;
					data['wt']	= 	wt_class;	
					/*console.log(product_type);console.log(wt_class);*/
					/*if(wt_class === 'IND'){*/
						/*setTimeout(function(){ $('#net_form').find('.custom-select').hide(); }, 498);*/
						/*$('#product_row').find('.custom-select').hide();*/
						DefaultProdOptions(data);
					/*}
					else{*/
					/*	$('#product_row').find('.custom-select').show();*/
					//}

					/*if(wtclass="IND"){$('#product_row').find('.custom-select').hide(); }
					else{$('#product_row').find('.custom-select').show();}*/
				
			}		
		}
		
/*Getting product options*/
	$('#page_layout').on('change','#nettingtype_IND',function (){
		GetProdOptionsIND();
	});
		
	$('#page_layout').on('select','#nettingtype_IND',function (){
		GetProdOptionsIND();
	});

	function GetProdOptionsIND(){
		/*$("#nettingtype option[value='']").attr('selected', true);*/
		var search		= $('#nettingtype_IND').val();
		var ind_status = 1;
		var net_type	= 'net';
		populateProductOptions(search,net_type,'first-select',ind_status);
		
		var border_type1 =  'sewnborder';
		populateProductOptions(search,border_type1,'second-select',ind_status);

		var border_type2 =  'wovenborder';
		populateProductOptions(search,border_type2,'third-select',ind_status);
		
		var border_type3 =  'rolledgoods';
		populateProductOptions(search,border_type3,'fourth-select',ind_status);
		
		var addon_type =  'addon';
		populateProductOptions(search,addon_type,'addons',ind_status);
		populate_cuttingstyle();
	}