
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
.quantity-tabel th{font:10px/14px  Arial, sans-serif;}
.quantity-tabel td{font:10px/14px  Arial, sans-serif;}
.total-price td{font:10px/14px  Arial, sans-serif;}
.total-price p{font:10px/14px  Arial, sans-serif;  margin:0px 0 5px 0px;}
.date-filde p{font:10px/14px  Arial, sans-serif;  margin:0px 0 5px 0px;}
.date-filde td{font:10px/14px  Arial, sans-serif;}
.main-tabel{height: 824px;}
    </style>
  </head>
  <body>


<table width="100%" align="center" border="0" cellspacing="0" cellpadding="0" bgcolor="#fff" class="main-tabel">
<tr>
<td valign="top">
<table width="100%" border="0" cellpadding="0" cellspacing="0" style="padding:20px 20px 0;" class="top-header">
      <tr>
        <td valign="top" colspan="1" width="50" style="padding-right:10px"> 
	<a href="<?=base_url()?>"><img src="<?=base_url();?>assets/logo.png" width="93" border="0/" height="104"></a></td>
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
        	<table  width="100%" cellspacing="0" cellpadding="2" border="0" style="padding:0px 20px;" class="contact">
            	<tr>
                	<td align="left" width="200" valign="top" style="">
                    <p><strong>Bill To:</strong></p>
                    <p> <span><?=!empty($quote_list->customername)?$quote_list->customername:''?></span>
                    <?php $d=$quote_list->contact_address.', '.$quote_list->contact_city.', '.$quote_list->contact_state;?>
                   <span> <?=trim($d,',')?></span><span><?=$quote_list->contact_zip?></span><span><?=$quote_list->contact_country?></span>
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
                    	<?php $f=$quote_list->shipto_address.', '.$quote_list->shipto_city.', '.$quote_list->shipto_state;?>
                    	<p> <span><?=trim($f,',')?></span><span><?=$quote_list->shipto_zip?></span><span><?=$quote_list->shipto_country?></span>
                </p>
                    </td>
                </tr>
            </table>
        </td>
      </tr>
      
      
      <tr>
        <td  valign="top">
        	<table  width="100%" cellspacing="0" cellpadding="2" border="0" style="padding:0px 20px;" class="quantity-tabel">
            	<tr style="background-color: #3366CC;"> 
                    <th  style="border: 1px solid #000000; color:#fff;" nowrap="" align="center">	
                    Quantity
                    </th> 
                    <th  style="border: 1px solid #000000;  color:#fff;" nowrap="" align="center">Item #
                    </th> 
                    <th  style="border: 1px solid #000000;  color:#fff;"  nowrap="" align="center">
                    Description</th> 
                    <th  style="border: 1px solid #000000; color:#fff; " nowrap="" align="center">Tag
                    </th> 
                    <th style="border: 1px solid #000000;  color:#fff;"  nowrap="" align="center">
                    Unit Price</th> 
                    <th  style="border: 1px solid #000000;  color:#fff;"  nowrap="" align="center">Amount
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
							<td  style="border: 1px solid #000000;" valign="top" nowrap="" align="center">'.$val->quantity.'</td> 
							<td style="border: 1px solid #000000;" valign="top" nowrap="">'.$val->product.'</td> 
							<td  style="border: 1px solid #000000;" valign="top">
							   '.$desc.'
							</td> 
							<td  style="border: 1px solid #000000;" valign="top" nowrap="" align="center"></td> 
							<td  style="border: 1px solid #000000;" valign="top" nowrap="" align="center"> '.number_format($unitcost,2).'</td> 
							<td  style="border: 1px solid #000000;" valign="top" nowrap="" align="right">  '.number_format($totalCost,2).'</td> 
							</tr>';
		
						}
					}
					$freight=!empty($quote_list->freight)?$quote_list->freight:0;
					?>
            </table>
        </td>
      </tr>
      
      
      
       <tr>
        <td  valign="top" style="padding:0px 19px; ">
        	<table  width="100%" cellspacing="0" cellpadding="2" border="0" style=" border:1px solid #000000; border-top:0px;" class="total-price">
            	<tr>
                	<td colspan="10"></td> 
                    <td class="localhdr" align="right" width="80" style="border-right:1px solid #000000;  padding-right:5px;"><strong>Subtotal:</strong></td> 
                    <td class="localhdr" align="right" width="80" style="border-bottom:1px solid #000000;"  >  <strong> <?=number_format($subtotal,2);?></strong></td> 
                </tr>
                <tr>
                <td class="text" colspan="10" align="right"><strong><?=!empty($quote_list->ship_method)?$quote_list->ship_method:''?></strong></td> 
                <td class="text" align="right" width="80" style="border-right:1px solid #000000;  padding-right:5px;">Freight:</td> 
                <td class="text" align="right" width="80" style="border-bottom:1px solid #000000;" >   <?=number_format($freight,2);?></td> 
                </tr>
                <tr>
                	<td colspan="10" style="padding-top:5px"></td> 
                    <td class="localhdr" align="right" width="80" style="padding-top:5px; padding-right:5px; border-right:1px solid #000000 !important"><strong>Total:</strong></td>  
                    <td class="localhdr" align="right" width="80" style="padding-top:5px border-bottom:1px solid #000000;" ><strong><?=number_format(($freight+$subtotal),2);?></strong></td>
                </tr>
            </table>
        </td>
      </tr>
      
      
      
   
   
     
</table>

        	<table width="100%" cellspacing="0" cellpadding="0" border="0" style="padding:0px 10px 0 00px;" class="footer" >
            	<tr>
                	<td width="60%" valign="top" colspan="3">
                    	<p><strong>FOB: Colchester, CT</strong></p>
                    </td>
                   <td colspan="3"></td>
                    <td width="40%" valign="top" align="right" colspan="3"><p><strong>Commercial Address</strong></p></td> 
                </tr>
                <tr>
                	<td width="60%" align="left"valign="top" colspan="3">
                    	InCord must be advised if any of the following delivery options apply to shipments:
                        lift gate, residential, guaranteed, job site or notification/appointment.
                        Additional Charges will apply.
                    </td>
                    <td colspan="3"></td>
                    <td width="40%" align="right" valign="top" colspan="3">Sale may be subject to Sales Tax
                        without a sales tax exemption form on file.
                        We accept Visa, Master Card and AMEX
                    </td>
                </tr>
                
                 <tr>
                	<td width="33.33%" align="center" valign="top" colspan="3" style="padding-top:25px;"></td>
                    <td width="33.33%" align="left" valign="top" colspan="3" style="padding-top:25px;">Custom Safety Netting Solutions </td>
                    <td width="33.33%" align="right" valign="top" colspan="3" style="padding-top:25px;"></td>
                </tr>
               
            </table>

  </body>
</html>
