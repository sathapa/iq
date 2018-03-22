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

    </style>
  </head>
  <body>
		<?php
			$frieght	= !empty($salesOrdersDetails->freightamt) ? $salesOrdersDetails->freightamt : 100;
			$fob 		= !empty($salesOrdersDetails->fob) ? $salesOrdersDetails->fob : '';
			$shipto		= !empty($salesOrdersDetails->shipto) ? $salesOrdersDetails->shipto : '';
			$orderNo	= !empty($salesOrdersDetails->salesorderno) ? $salesOrdersDetails->salesorderno : '';
			$custPoNo	= !empty($salesOrdersDetails->customerpono) ? $salesOrdersDetails->customerpono : '';
			$custNo		= !empty($salesOrdersDetails->customerno) ? $salesOrdersDetails->customerno : '';
			$custName	= !empty($salesOrdersDetails->customername) ? $salesOrdersDetails->customername : '';
			$shipvia	= !empty($salesOrdersDetails->shipvia) ? $salesOrdersDetails->shipvia : '';
		?>
		<table width="100%" align="center" border="0" cellspacing="0" cellpadding="0" bgcolor="#fff" class="main-tabel" valign="top" style="table-layout: fixed">
			<tr>
				<td valign="top">
					<table width="100%" border="0" cellpadding="0" cellspacing="0"  style="padding:0px 20px 0;" class="top-header">
			     		<tr>
				       		<td valign="top" colspan="1" width="50" style="padding-right:10px"> 
								<img src="<?php echo base_url('assets/logo.png')?>" width="93" border="0/" height="104">
							</td>
						    <td valign="top" align="left" width="320" >
								<p><strong style="font-size:30px; padding-bottom:10px; display:block">InCord</strong><br/><br/>
								<strong>226 Upton Rd.<br/>
								Colchester, CT &nbsp; 06415<br/>
								860-537-1414<br/> 
								800-596-1066 <br/>
								fax 860-537-7393</strong>
								</p> 
							</td>
						    <td align="right" style="text-align: left;" width="250" valign="top" >
								<p><strong style="font-size:30px;">Sales Order</strong></p>
								<p><strong>Order Number</strong> <?php echo $orderNo;?></p>
								<p><strong>Order Date</strong> 11/21/2017 </p>
								<p><strong>P0 Date</strong> 11/20/2017</p>
								
						    </td>
			      		</tr>  
			     	</table>
			    </td>
			</tr>
		    <tr>
		        <td height="0"  width="100%" cellspacing="0" cellpadding="0" border="0" style=" padding: 0 20px 20px;" valign="top">
		        </td>
		    </tr>
		    <tr>
		        <td height="0"  width="100%" cellspacing="0" cellpadding="0" border="0" style=" padding: 0 20px 20px; text-align: center;" valign="top">
		        	Shipments not arranged by InCord are subject, but not limited to, a 24 - 48 hour delay from provided ship date.
		        </td>
		    </tr>
		
			<tr>
		        <td height="0" style="background:#fff;" valign="top">
		        	<table  width="100%" cellspacing="0" cellpadding="2" border="0" style="padding:0px 20px 15px;"  class="contact">
		            	<tr>
		                	<td align="left" width="200" valign="top" style="">
			                    <p><strong>Bill To: </strong></p>
			                    <p> <span>Kapil Tyagi<br></span>
			                    <p> <span>Noida Sec-61<br></span>
			                   <span> Noida City Center</span>
			                   <br>
			                   <span>India</span>
			                   </p>
		                    </td>
		                    <td align="right" width="200"  valign="top">
		                    	<p><strong>Ship To:</strong></p>
		                    	<p><?php echo $shipto;?></p>
		                    </td>
		                </tr>
		            </table>
		        </td>
		    </tr>
		</table>
		<div class="top-one">
			<table  width="100%" cellspacing="0" cellpadding="2" border="0" style="padding:0px 20px;" valign="top"  class="quantity-tabel">
            	<tr style="background-color: #aca8a5;"> 
                    <th style=" color:#000;" nowrap="" align="center">	Customer Number</th> 
                    <th style=" color:#000;" nowrap="" align="center">Customer Contact</th> 
                    <th style=" color:#000;" nowrap="" align="center">Telephone</th> 
                    <th style=" color:#000;"  nowrap="" align="center">FACSIMILE</th> 
                    <th style=" color:#000; border-right:1px solid #000;"  nowrap="" align="center">SALES REP</th> 
                </tr>
                <tr> 
					<td  valign="top" nowrap="" align="center"><?php echo $custNo;?></td> 
					<td  valign="top" nowrap=""><?php echo $custName;?></td> 
					<td  valign="top" nowrap="">205-1411</td> 
					<td  valign="top">Description will display dynamically </td> 
					<td   valign="top" nowrap="" align="right" style="border-right:1px solid #000;">  100</td> 
				</tr>
			</table>
		</div>
		<div class="top-one">
			<table  width="100%" cellspacing="0" cellpadding="2" border="0" style="padding:0px 20px;" valign="top"  class="quantity-tabel">
            	<tr style="background-color: #aca8a5;"> 
                    <th  style=" color:#000;" nowrap="" align="center">	Customer P.O</th> 
                    <th  style="  color:#000;" nowrap="" align="center">Ship VIA</th> 
                    <th  style="  color:#000;" nowrap="" align="center">F.O.B.</th> 
                    <th  style="  color:#000;"  nowrap="" align="center">Terms</th> 
                    <th  style="  color:#000; border-right:1px solid #000;"  nowrap="" align="center">Ship Date</th> 
                </tr>
                <tr> 
					<td  valign="top" nowrap="" align="center"><?php echo $custPoNo?></td> 
					<td  valign="top" nowrap=""><?php echo $shipvia?></td> 
					<td  valign="top" nowrap="">205-1411</td> 
					<td  valign="top">Description will display dynamically </td> 
					<td   valign="top" nowrap="" align="right" style="border-right:1px solid #000;">  100</td> 
				</tr>
			</table>
		</div>
		
		
		<div class="margin-top">
        	<table  width="100%" cellspacing="0" cellpadding="2" border="0" style="padding:0px 20px;" valign="top"  class="quantity-tabel">
            	<tr style="background-color: #aca8a5;"> 
                    <th width="8%" style="color:#000;" nowrap="" align="center">Quantity</th> 
                    <th width="5%" style="color:#000;" nowrap="" align="center">UOM</th> 
                    <th width="14%" style="color:#000;" nowrap="" align="center">Item No</th> 
                    <th width="30%" style="color:#000;" nowrap="" align="center">Description</th> 
                    <th width="13%" style="color:#000;" nowrap="" align="center">Unit Price</th> 
                    <th width="10%" style="color:#000; border-right:1px solid #000;" nowrap="" align="center">Extension</th> 
                </tr>
				<?php
					//dump($salesOrders);die;
					$total 	= 0;
					if(!empty($salesOrders) && is_array($salesOrders)){
						$numRows = count($salesOrders);
						foreach($salesOrders as $key=>$val){
							$quantity	= !empty($val->quantityorderedoriginal) ? $val->quantityorderedoriginal : 0;
							$uom		= !empty($val->uom) ? $val->uom : '';
							$itemCode	= !empty($val->itemcode) ? $val->itemcode : '';
							$itemDesc	= !empty($val->itemcodedesc) ? $val->itemcodedesc : '';
							$unitPrice	= !empty($val->unitprice) ? $val->unitprice : 0;
							$ext		= !empty($val->total_price) ? $val->total_price : 0;
							$ext		= number_format($ext,2);
							$netTotal	= ($netTotal + $ext);
							$bottomBorder 	= "border-bottom:none";
							if(($key + 1 ) ==($numRows)){
								$bottomBorder 	= "";
							}
							echo '<tr> 
									<td valign="top" nowrap="" align="center" style="'.$bottomBorder.'">'.$quantity.'</td> 
									<td valign="top" nowrap="" style="'.$bottomBorder.'">'.$uom.'</td> 
									<td valign="top" nowrap="" style="'.$bottomBorder.'">'.$itemCode.'</td> 
									<td valign="top" style="'.$bottomBorder.'">'.$itemDesc.'</td> 
									<td valign="top" nowrap="" align="center" style="'.$bottomBorder.'">'.$unitPrice.'</td> 
									<td valign="top" nowrap="" align="right" style="border-right:1px solid #000; '.$bottomBorder.'">'.$ext.'</td> 
								</tr>';
						}
					}
					$tax 	= 1.00;
					$total 	= ($netTotal + $frieght + $tax);
				?>
				
				<tr>
					<td colspan="4" style="border-top: none;border-right: none; border-left: none; border-bottom: none">
					Printed 11/21/2017 at 1:01:41PM</td> 
					<td class="localhdr" align="right" style=" border: none; padding-right:5px;">Net Order:</td> 
					<td class="localhdr" align="right" style="border-right:1px solid #000;"><?php echo $netTotal;?></td> 
                </tr>
                <tr>
					<td colspan="3" style="border-top: none;border-right: none; border-left: none; border-bottom: none">
					Last Modified By: Beth-AnnH On 11/21/2017</td> 
					<td class="text" style=" border: none;"  align="right">
						
					</td> 
					<td class="text" align="right" style=" border: none; padding-right:5px;">Less Discount:</td> 
					<td class="text" align="right"  style="border-right:1px solid #000;" >0.00</td> 
                </tr>
                <tr>
					<td colspan="3" style="border-top: none;border-right: none; border-left: none; border-bottom: none">
					Created By: Beth-AnnH On 11/21/2017</td> 
					<td class="text" style=" border: none;"  align="right">
						
					</td> 
					<td class="text" align="right" style=" border: none; padding-right:5px;">Shipping/Handling:</td> 
					<td class="text" align="right"  style="border-right:1px solid #000;" ><?php echo $frieght?></td> 
				</tr>
				<tr>
					<td colspan="3" style="border-top: none;border-right: none; border-left: none; border-bottom: none; text-align:center">
						Order may be subject to sales tax at the time of shipping.
					</td> 
					<td class="text" colspan="0" style=" border: none; text-align: center; width:0px;" >
						
					</td> 
					<td class="text" align="right" style=" border: none; padding-right:5px;">Sales Tax:</td> 
					<td class="text" align="right"  style="border-right:1px solid #000;" ><?php echo $tax;?></td> 
				</tr>
				<tr>
					<td colspan="3" style="border-top: none;border-right: none; border-left: none;  border-bottom:none;">
						<strong>ISO Form 012s_Rev02</strong>
					</td> 
					<td class="text" style=" border: none; text-align: center; border-bottom: none;" >
						
					</td> 
					<td class="text" align="right" style=" border: none; padding-right:5px; border-bottom:none;">
						<strong>Order Total:</strong></td> 
					<td class="text" align="right"  style="border-right:1px solid #000;" ><?php echo $total;?></td> 
                </tr>
			</table>
		</div>
  </body>
</html>
<?php //die;?>
	
