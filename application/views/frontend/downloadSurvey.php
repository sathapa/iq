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
.quantity-tabel p{font:11px/14px  Arial, sans-serif;}
.quantity-tabel td{font:11px/14px  Arial, sans-serif; padding:8px;}
.top-header p{font:11px/14px  Arial, sans-serif; margin:0px 0 0px 0px;}
.top-header td{font:11px/14px  Arial, sans-serif;}
.contact p{font:11px/14px  Arial, sans-serif;  margin:0px 0 5px 0px;}
.contact td{font:11px/14px  Arial, sans-serif;}
.contact p span{ display: block;}
.footer p{font:11px/14px  Arial, sans-serif;  margin:0px 0 5px 0px;}
.footer td{font:11px/14px  Arial, sans-serif;}
.quantity-tabel p{font:11px/14px  Arial, sans-serif; margin:0px 0 5px 0px;}
.quantity-tabel th{font:11px/14px  Arial, sans-serif;border-left: 1px solid #000000; border-bottom: 1px solid #000000;
	border-top: 1px solid #000000;}
.quantity-tabel th:last-child{ border-right:1px solid #000;;}

.quantity-tabel td{font:11px/14px  Arial, sans-serif;border-left: 1px solid #000000; border-bottom:1px solid #000;}
.quantity-tabel tr td:last-child{ border-right:1px solid #000;}
.total-price td{font:11px/14px  Arial, sans-serif;}
.total-price p{font:11px/14px  Arial, sans-serif;  margin:0px 0 5px 0px;}
.date-filde p{font:11px/14px  Arial, sans-serif;  margin:0px 0 5px 0px;}
.date-filde td{font:11px/14px  Arial, sans-serif;}
.aaa{ padding-bottom:150px;}
    </style>
  </head>
  <body>

<div class="abc">
<table width="100%" align="center" border="0" cellspacing="0" cellpadding="0" bgcolor="#fff" class="main-tabel" valign="top" style="table-layout: fixed">
<tr>
<td valign="top">
<table width="100%" border="0" cellpadding="0" cellspacing="0"  style="padding:0px 20px 0;" class="top-header">
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
    <td align="right" style="text-align: left; padding-right:10px" width="200" valign="top" >
   

          <p><strong>Bill To: <?=!empty($customer_data[0]->accountnumber)?$customer_data[0]->accountnumber:''?></strong></p>
          <p><?=!empty($customer_data[0]->companyname)?$customer_data[0]->companyname:''?> </p>
          <p><?=!empty($customer_data[0]->address1_street1)?$customer_data[0]->address1_street1:''?> </p>
          <p><?=!empty($customer_data[0]->address1_city)?$customer_data[0]->address1_city:''?><?= ", "?>
            <?=!empty($customer_data[0]->address1_stateprovince)?$customer_data[0]->address1_stateprovince:''?> 
            <?=!empty($customer_data[0]->address1_zippostalcode)?$customer_data[0]->address1_zippostalcode:''?></p>
          <p> <?=!empty($customer_data[0]->address1_countryregion)?$customer_data[0]->address1_countryregion:''?></p>

    </td>
    <td width="50" align="right" valign="top"></td>
      </tr>  
      </table>
      </td>
      </tr>
      <tr>
        <td height="0" style="background:#fff;" valign="top">
        	<table width="100%" style="padding:0px 20px;" class="top-header">
            	<tr>
                	<td align="center" height="40">
						<strong style="">
              Proposal for <br>
							<?php
								echo !empty($survey_id) ? 'Survey ID :'.$survey_id :  'Survey ID :'.$survey_id ;
							?>
						</strong>
					</td>
                </tr>
            </table>
        </td>
      </tr>
      <tr>
        <td height="0" style="background:#fff;" valign="top" >
        	<table width="100%" cellspacing="0" cellpadding="2" border="0" style="padding:0px 20px;" class="date-filde">
            	<tr>
                	<td align="left" width="50%"><strong>Date:</strong> <?=!empty($survey_data->last_updated_on)?date('F d, Y',strtotime($survey_data->last_updated_on)):date('F d, Y');?></td>
              </tr>
            </table>
        </td>
      </tr>
      
      <tr>
        <td height="0"  width="100%" cellspacing="0" cellpadding="0" border="0" style=" padding: 0 20px 20px;" valign="top">
        	<table width="100%" cellspacing="0" cellpadding="2" border="0" class="date-filde" style="border-bottom: 1px solid #000000;">
            	<tr>
                	<td align="left" width="50%" style="padding: 5px 0 15px;">This survey is valid for 30 days</td>
              </tr>
            </table>
        </td>
      </tr>
      
     
      </table>
<div class="aaa">
        	<table  width="100%" cellspacing="0" cellpadding="2" border="0" style="padding:0px 20px;" valign="top"  class="quantity-tabel">
              <tr style="background-color: #3366CC;"> 
                    <th  style=" color:#fff;" nowrap="" align="center"> Quantity </th> 
                    <th  style="  color:#fff;" nowrap="" align="center">Item # </th> 
                     <th  style="  color:#fff;" nowrap="" align="center">Image </th> 
                    <th  style="  color:#fff;"  nowrap="" align="center"> Description</th> 
                    <th  style=" color:#fff; " nowrap="" align="center">Shape </th> 
                    <th style="  color:#fff;"  nowrap="" align="center"> Condition</th> 
                    <th style="  color:#fff;"  nowrap="" align="center"> Drawing</th> 
                    <th  style="  color:#fff; border-right:1px solid #000;"  nowrap="" align="center">Amount </th> 
                </tr>
                <?php
					//print_r($invoice_data);
					$freight=0;$subtotal=0;
					if(!empty($survey_data)){
						foreach($survey_data as $val){
              $condition = $val->condition;
              if($condition == 1){$condition = 'Excellent';}
              else if($condition == 2){$condition = 'Good';}
              else if($condition == 3){$condition = 'Fair';}
              else if($condition == 4){$condition = 'Poor';}

              $shape = $val->shape;
              if($shape == 1){$shape = 'R';}
              else if($shape == 2){$shape = 'T';}
              else if($shape == 3){$shape = 'C';}
              else if($shape == 4){$shape = 'O';}

              $drawing = $val->drawing;
              if($drawing == 1) {$drawing = "Yes";}
              else {$drawing = "No";}

							$totalCost	= "N/A";
							$unitcost	= "N/A";
							$desc		= "Net Material-".$val->net_material."<br>Lash Material- ".$val->lash_material."<br>Rope Material- ".$val->rope_material." ";
							$subtotal	= 0;
              if(!empty($val->profile_img)){
                $img = '<img src="'.base_url().'uploads/survey/'.$val->profile_img.'" height="60px" width="60px">';
              }
              else{
                $img = 'N/A';
              }
									echo'<tr> 
									<td  valign="top" nowrap="" align="center">'.$val->quantity.'</td> 
									<td  valign="top" nowrap="">'.$val->item_name.'</td> 
                  <td  valign="top" nowrap="">'.$img.'</td>
									<td  valign="top"> '.$desc.' </td> 
									<td   valign="top" nowrap="" align="center">'.$shape.'</td> 
									<td  valign="top" nowrap="" align="center"> '.$condition.'</td> 
                  <td  valign="top" nowrap="" align="center"> '.$drawing.'</td> 
									<td   valign="top" nowrap="" align="right" style="border-right:1px solid #000;">  </td> 
									</tr>';
							
						}
					}
					$freight=!empty($quote_list->freight)?$quote_list->freight:0;
					?>
           
      
      
       <tr>
       
        	
          <td colspan="6" style="border-top: none;border-right: none;border-bottom: none"></td> 
                <td class="localhdr" align="right" style=" border: none; padding-right:5px;"><strong>Subtotal:</strong></td> 
                <td class="localhdr" align="right" style="border-right:1px solid #000;"   >  <strong> <?=number_format($subtotal,2);?></strong></td> 
                </tr>
                <tr>
					<td colspan="5" style="border-top: none;border-right: none;border-bottom: none"></td> 
                <td class="text" style=" border: none;"  align="right"><strong><?=!empty($quote_list->ship_method)?$quote_list->ship_method:''?></strong></td> 
                <td class="text" align="right" style=" border: none; padding-right:5px;">Freight:</td> 
                <td class="text" align="right"  style="border-right:1px solid #000;" >   <?=number_format($freight,2);?></td> 
                </tr>
                <tr>
					<td colspan="6" style="border-top: none;border-right: none;"></td> 
                	
                    <td class="localhdr" align="right" style="border-top: none;border-right: none;border-left: none "><strong>Total:</strong></td>  
                    <td class="localhdr" align="right"  style="padding-top:5px; border-right:1px solid #000;" ><strong><?=number_format(($freight+$subtotal),2);?></strong></td>
                </tr>
</table>
</div>
</div>
  </body>
</html>
