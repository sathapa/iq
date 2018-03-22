
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Quoteweb</title>
        <style>
  
a {
  color: #5D6975;
  text-decoration: underline;
}

body {
  position: relative;
  color: #001028;
  background: #FFFFFF; 
  font-family: Arial, sans-serif; 
  font-size: 14px; 
  font-family: Arial;
  margin:0;
  height:100%;

}
html{ height:100%;}
.quantity-tabel p{font:10px/14px  Arial, sans-serif;}
.quantity-tabel td{font:10px/14px  Arial, sans-serif; padding:8px;}
.top-header p{font:10px/14px  Arial, sans-serif; margin:0px 0 0px 0px;}
.top-header td{font:10px/14px  Arial, sans-serif;}
.contact p{font:10px/14px  Arial, sans-serif;  margin:0px 0 5px 0px;}
.contact td{font:10px/14px  Arial, sans-serif;}
.contact p span{ display: block;}
.footer p{font:10px/14px  Arial, sans-serif;  margin:0px 0 5px 0px;}
.footer td{font:10px/14px  Arial, sans-serif;}
.footer{ }
.quantity-tabel p{font:10px/14px  Arial, sans-serif; margin:0px 0 5px 0px;}
.quantity-tabel th{font:10px/14px  Arial, sans-serif;border-left: 1px solid #000000; border-bottom: 1px solid #000000;
	border-top: 1px solid #000000;}
.quantity-tabel th:last-child{ border-right:1px solid #000;;}

.quantity-tabel td{font:10px/14px  Arial, sans-serif;border-left: 1px solid #000000; border-bottom:1px solid #000;}
.quantity-tabel tr td:last-child{ border-right:1px solid #000;}
.total-price td{font:10px/14px  Arial, sans-serif;}
.total-price p{font:10px/14px  Arial, sans-serif;  margin:0px 0 5px 0px;}
.date-filde p{font:10px/14px  Arial, sans-serif;  margin:0px 0 5px 0px;}
.date-filde td{font:10px/14px  Arial, sans-serif;}
.quantity-tabel{padding-bottom:120px;}
    </style>
  </head>
  <body>


<table width="100%" align="center" border="0" cellspacing="0" cellpadding="0" bgcolor="#fff" class="main-tabel" valign="top">
<tr>
<td valign="top">
<table width="100%" border="0" cellpadding="0" cellspacing="0"  style="padding:20px 20px 0;" class="top-header">
      <tr>
        <td valign="top" colspan="1" width="50" style="padding-right:10px"> 
	<img src="<?=base_url();?>assets/logo.png" width="93" border="0/" height="104"></td>
    <td valign="top" align="left" width="320" >
	<p>InCord Ltd.<br/>
	226 Upton Rd.<br/>
	Colchester, CT &nbsp; 06415<br/>
	860-537-1414<br/> 
	800-596-1066 <br/>
	fax 860-537-7393
	</p> 
	</td>
    <td align="right" style="text-align: left;" width="80" valign="top" >
	<p><strong><?=!empty($quote_list->salespersonname)?$quote_list->salespersonname:''?></strong></p>
	<p><?=!empty($quote_list->division_name)?$quote_list->division_name:''?> </p>
	<p><?=!empty($quote_list->salesperson_email)?$quote_list->salesperson_email:''?> </p>
	<p><?=!empty($quote_list->salesperson_gen_phone)?$quote_list->salesperson_gen_phone:''?></p>
	<p><?=!empty($quote_list->salesperson_dir_phone)?$quote_list->salesperson_dir_phone:''?></p>
	
    </td>
    <?php $images=!empty($quote_list->gif_name)?$quote_list->gif_name:'amusement.gif';?>
   <td width="50" align="right" valign="top"><img src="<?=base_url().'assets/front/images/'.$images;?>" border="0/" width="50px"></td>
      </tr>  
      </table>
      </td>
      </tr>
      <tr>
        <td height="0" style="background:#fff;" valign="top">
        	<table width="100%" style="padding:0px 20px;" class="top-header">
            	<tr>
                	<td align="center" height="40"><strong style="">Proposal ID: <?=$quote_id?></strong></td>
                </tr>
            </table>
        </td>
      </tr>
      <tr>
        <td height="0" style="background:#fff;" valign="top" >
        	<table width="100%" cellspacing="0" cellpadding="2" border="0" style="padding:0px 20px;" class="date-filde">
            	<tr>
                	<td align="left" width="50%"><strong>Date:</strong> <?=!empty($quote_list->last_updated_on)?date('F d, Y',strtotime($quote_list->last_updated_on)):date('F d, Y');?></td>
                    <td align="right" width="45%"><strong>Terms:</strong> <?=!empty($quote_list->term_code)?$quote_list->term_code:''?></td>
                </tr>
            </table>
        </td>
      </tr>
      
      <tr>
        <td height="0"  width="100%" cellspacing="0" cellpadding="0" border="0" style=" padding: 0 20px 20px;" valign="top">
        	<table width="100%" cellspacing="0" cellpadding="2" border="0" class="date-filde" style="border-bottom: 1px solid #000000;">
            	<tr>
                	<td align="left" width="50%" style="padding: 5px 0 15px;">This proposal is valid for 30 days</td>
                    <td align="right" width="45%" style="padding: 5px 0 15px;"><strong>Current Lead time ARO:</strong> <?=!empty($quote_list->aro_leadtime)?$quote_list->aro_leadtime:''?></td>
                </tr>
            </table>
        </td>
      </tr>
      
      <tr>
        <td height="0" style="background:#fff;" valign="top">
        	<table  width="100%" cellspacing="0" cellpadding="2" border="0" style="padding:0px 20px 15px;"  class="contact">
            	<tr>
                	<td align="left" width="200" valign="top" style="">
                    <p><strong>Bill To: <?=!empty($quote_list->customer_id)?$quote_list->customer_id:''?> </strong></p>
                    <p> <span><?=!empty($quote_list->customername)?$quote_list->customername:''?><br></span>
                    <p> <span><?=!empty($quote_list->contact_address)?$quote_list->contact_address:''?><br></span>
                    <?php
						$d			= $quote_list->contact_city.', '.$quote_list->contact_state;
						$zipCode	= !empty($quote_list->contact_zip) ? ' '.$quote_list->contact_zip :'';
						$d			= $d.$zipCode;
					?>
                   <span> <?=trim($d,',')?></span><br><span><?=$quote_list->contact_country?></span>
                   </p>
                    </td>
                    <td align="left" width="100"  valign="top" style="padding-right:20px;">
                    <p><strong>Contact:</strong></p>
                   <?=!empty($quote_list->contact_name)?'<p><strong>Name:</strong>'.$quote_list->contact_name.'</p>':''?>
                    <p><strong>Tel:</strong><?=!empty($quote_list->contact_phone)?$quote_list->contact_phone:'N/A'?> </p>
                    <p><strong>Fax:</strong> <?=!empty($quote_list->contact_fax)?$quote_list->contact_fax:'N/A'?></p>
                    <p><?=!empty($quote_list->contact_email)?$quote_list->contact_email:''?> </p>
                    </td>
                    <td align="right" width="200"  valign="top">
                    	<p><strong>Ship To:</strong></p>
                    	<?php
							$shipZipCode	= !empty($quote_list->shipto_zip) ? ' '.$quote_list->shipto_zip :'';
							$f	= $quote_list->shipto_city.', '.$quote_list->shipto_state;
							$f	= $f.$shipZipCode;
                    	?>
                    	<p>
							<?php
								if(!empty($quote_list->shipto_address)){
							?>
							<span><?=$quote_list->shipto_address?><br></span>
							<?php } ?>
							<span><?=trim($f,',')?><br></span>
							<span><?=$quote_list->shipto_country?></span>
						</p>
                    </td>
                </tr>
            </table>
        </td>
      </tr>
      $quote_list->shipto_address.', '.
      
      <tr>
        <td  valign="top">
        	<table  width="100%" cellspacing="0" cellpadding="2" border="0" style="padding:0px 20px;" valign="top"  class="quantity-tabel">
            	<tr style="background-color: #3366CC;"> 
                    <th  style=" color:#fff;" nowrap="" align="center">	
                    Quantity
                    </th> 
                    <th  style="  color:#fff;" nowrap="" align="center">Item #
                    </th> 
                    <th  style="  color:#fff;"  nowrap="" align="center">
                    Description</th> 
                    <th  style=" color:#fff; " nowrap="" align="center">Tag
                    </th> 
                    <th style="  color:#fff;"  nowrap="" align="center">
                    Unit Price</th> 
                    <th  style="  color:#fff; border-right:1px solid #000;"  nowrap="" align="center">Amount
                    </th> 
                </tr>
                <?php
					//print_r($invoice_data);
					$freight=0;$subtotal=0;
					if(!empty($invoice_data)){
						
						foreach($invoice_data as $val){
							$totalCost	= !empty($val->totalcost) ? (float)$val->totalcost : 0;
							$unitcost	= !empty($val->unitcost) ? (float)$val->unitcost : 0;
							$desc	= str_replace(';','<br />',$val->quote_description);
							$subtotal=$subtotal+$totalCost;
								
						   echo'<tr> 
							<td  valign="top" nowrap="" align="center">'.$val->quantity.'</td> 
							<td  valign="top" nowrap="">'.$val->product.'</td> 
							<td   valign="top">
							   '.$desc.'
							</td> 
							<td   valign="top" nowrap="" align="center">'.$val->tag_number.'</td> 
							<td  valign="top" nowrap="" align="center"> '.number_format($unitcost,2).'</td> 
							<td   valign="top" nowrap="" align="right" style="border-right:1px solid #000;">  '.number_format($totalCost,2).'</td> 
							</tr>';
		
						}
					}
					$freight=!empty($quote_list->freight)?$quote_list->freight:0;
					?>
           
      
      
       <tr>
       
        	
                	<td colspan="4" style="border-top: none;border-right: none;border-bottom: none"></td> 
                    <td class="localhdr" align="right" style=" border: none; padding-right:5px;"><strong>Subtotal:</strong></td> 
                    <td class="localhdr" align="right" style="border-right:1px solid #000;"   >  <strong> <?=number_format($subtotal,2);?></strong></td> 
                </tr>
                <tr>
					<td colspan="3" style="border-top: none;border-right: none;border-bottom: none"></td> 
                <td class="text" style=" border: none;"  align="right"><strong><?=!empty($quote_list->ship_method)?$quote_list->ship_method:''?></strong></td> 
                <td class="text" align="right" style=" border: none; padding-right:5px;">Freight:</td> 
                <td class="text" align="right"  style="border-right:1px solid #000;" >   <?=number_format($freight,2);?></td> 
                </tr>
                <tr>
					<td colspan="4" style="border-top: none;border-right: none;"></td> 
                	
                    <td class="localhdr" align="right" style="border-top: none;border-right: none;border-left: none "><strong>Total:</strong></td>  
                    <td class="localhdr" align="right"  style="padding-top:5px; border-right:1px solid #000;" ><strong><?=number_format(($freight+$subtotal),2);?></strong></td>
                </tr>
            
      
             	
   
   
     
</table>

        	
            </td>
      </tr>    
            </table>

  </body>
</html>
