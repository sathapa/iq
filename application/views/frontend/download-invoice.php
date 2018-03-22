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
	border-top: 1px solid #000000; border-right: 1px solid #000000; }
.quantity-tabel th:last-child{ border-right:1px solid #000;border-right: 1px solid #000000; }

.quantity-tabel td{font:11px/14px  Arial, sans-serif;border-left: 1px solid #000000; border-bottom:1px solid #000;border-right: 1px solid #000000; }
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
		$shipDate	= !empty($salesOrdersDetails->shipexpiredate) ? $salesOrdersDetails->shipexpiredate : '';
		$orderNet	= !empty($salesOrdersDetails->amount) ? $salesOrdersDetails->amount: '';
	?>
	  <table width="100%" align="center" border="0" cellspacing="0" cellpadding="0" bgcolor="#fff" class="main-tabel" valign="top" style="table-layout: fixed;     padding: 30px 0 5px;">
			<tr>
				<td valign="top">
					<table width="100%" border="0" cellpadding="0" cellspacing="0"  style="padding:0px 20px 0;" class="top-header">
			     		<tr>
				       		<td valign="top" colspan="1" width="50" style="padding-right:10px"> 
								<img src="<?php echo base_url('assets/logo.png')?>" width="93" border="0/" height="104">
							</td>
						    <td valign="top" align="left" width="320" >
								<p><strong style="font-size:30px; padding-bottom:10px; display:block">InCord</strong><br/>
								<strong>226 Upton Road<br/>
								Colchester, CT06415 <br/>
								(860)537-1414</strong>
								</p> 
							</td>
						    <td align="right" style="text-align: left;" width="250" valign="top" >
								<p><strong style="font-size:30px;">Invoice</strong></p><br>
								<p><strong>Invoice Number: </strong>0103632-IN </p>
								<p><strong>Invoice Date:</strong> 12/1/2017  </p>
								<p><strong>Order Number:</strong> 0090421 </p>
								<p><strong>Order Date</strong> 11/21/2017</p>
								
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
		        <td height="0" style="background:#fff;" valign="top">
		        	<table  width="100%" cellspacing="0" cellpadding="2" border="0" style="padding:0px 20px 15px;"  class="contact">
		            	<tr>
		                	<td align="left" width="200" valign="top" style="">
			                    <p style="font-size: 16px;"><b>Sold To: </b></p>
			                    <p> <span>Atlas  Companies <br></span>
			                    <p> <span>1815 Landmeier  Rd</span>
			                	<span>Elk Grove Village, IL 60007-2420</span>
			                	<span> United States </span>
			                	</p>
		                    </td>
		                    <td align="right" width="200"  valign="top">
		                    	<p style="font-size: 16px;"><b>Ship To:</b></p>
		                    	<p>
									<?php
										echo $shipto;
									?>
								</p>
		                    </td>
		                </tr>
		            </table>
		        </td>
		    </tr>

		    <tr>
		    	<td style="text-align: center; padding: 0">
		    		<p style="margin: 0; font-weight: bold; text-transform: uppercase;">TRACKING: <span style="font-weight: normal; font-size: 12px;">876053106</span></p>
		    	</td>
		    </tr>
		    <tr>
		    	<td style="text-align: center; padding: 0">&nbsp;</td>
		    </tr>
		    <tr>
		    <td>
		    	<table  width="100%" cellspacing="0" cellpadding="2" border="0" style="padding:0px 20px 15px;"  class="contact">
		            	<tr>
		            		<td style="text-align: center; font-size: 12px" >As of April1, 2017, we will no longer be mailing our invoices. Please contact accounting@incord.com if you still wish to receive a paper copy.Shipments not arranged by InCord are subject, but not limited to, a24 - 48 hour delay from provided ship date. 
		    				</td>
		    			</tr>
		    	</table>
		    </td>
		    	
		    </tr>
		</table>
		<div class="top-one">
			<table  width="100%" cellspacing="0" cellpadding="2" border="0" style="padding:0px 20px;" valign="top"  class="quantity-tabel">
            	<tr style="background-color: #aca8a5;"> 
                    <th style="color:#000;text-transform: uppercase;" nowrap="" align="center">Customer ID</th> 
                    <th style="color:#000;text-transform: uppercase;" nowrap="" align="center">Customer Contact</th> 
                    <th style="color:#000;text-transform: uppercase;" nowrap="" align="center">Telephone</th> 
                    <th style="color:#000;text-transform: uppercase;" nowrap="" align="center">FACSIMILE</th> 
                    <th style="color:#000;text-transform: uppercase;" nowrap="" align="center">SALES REPRESENTATIVE</th>
                </tr>
                <tr> 
					<td  valign="top" nowrap="" align="center"><?php echo $custNo;?></td> 
					<td  valign="top" nowrap="" align="center"><?php echo $custName;?></td> 
					<td  valign="top" nowrap="" align="center">---</td> 
					<td  valign="top" align="center"> --- </td> 
					<td  valign="top" nowrap="" align="center">---</td> 
				</tr>
			</table>
		</div>
		<div class="top-one">
			<table  width="100%" cellspacing="0" cellpadding="2" border="0" style="padding:0px 20px;" valign="top"  class="quantity-tabel">
            	<tr style="background-color: #aca8a5;"> 
                    <th  style="color:#000;text-transform: uppercase;" nowrap="" align="center">SHIP METHOD </th> 
                    <th  style="color:#000;text-transform: uppercase;" nowrap="" align="center">SHIP DATE</th> 
                    <th  style="color:#000;text-transform: uppercase;" nowrap="" align="center">DUE DATE </th> 
                    <th  style="color:#000;text-transform: uppercase;" nowrap="" align="center">TEARM </th> 
                    <th  style="color:#000;text-transform: uppercase;" nowrap="" align="center">CUSTOMER PO# </th>
                </tr>
                <tr> 
					<td  valign="top" nowrap="" align="center"><?php echo $shipvia;?></td> 
					<td  valign="top" nowrap="" align="center"><?php echo $shipDate;?></td> 
					<td  valign="top" nowrap="" align="center">---</td> 
					<td  valign="top" align="center">--- </td> 
					<td  valign="top" align="center"><?php echo $custPoNo;?></td>
				</tr>
			</table>
		</div>
		
		
		<div class="margin-top">
        	<table  width="100%" cellspacing="0" cellpadding="2" border="0" style="padding:0px 20px 0;" valign="top"  class="quantity-tabel">
            	<tr style="background-color: #aca8a5;"> 
                    <th style="color:#000; text-transform: uppercase;" nowrap="" align="center">QUANTITY </th> 
                    <th style="color:#000; text-transform: uppercase;" nowrap="" align="center">UM</th> 
                    <th style="color:#000; text-transform: uppercase;" nowrap="" align="center">ITEM No</th> 
                    <th style="color:#000; text-transform: uppercase;" nowrap="" align="center">DISCRIPTION</th> 
                    <th style="color:#000; text-transform: uppercase;" nowrap="" align="center">UNIT PRICE </th> 
                    <th style="color:#000; text-transform: uppercase;" nowrap="" align="center">EXTENSION </th>
                </tr>
                <?php
					//dump($salesOrders);die;
					$total 	= 0;
					$numRow = 0;
					$netTotal 	= 0;
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
								$numRow ++;
						}
					}
					$tax 	= 1.00;
					$total 	= ($orderNet + $frieght + $tax);
				?>
                
				
			</table>
		</div>	 
			
<!--  sec  -->

			<table  width="100%"  style="padding:0px 20px;" valign="top" cellspacing="0">
				<tr>
					<td width="80%" style="vertical-align: top;">
						<table  width="100%"  style="" valign="top" cellspacing="0">
						<tr>
						<td colspan="2">
							<p style="font-size:12px;">Custom Orders Non-Returnable. InCord warrants its products free of defects in workmanship and material on the date of shipment. InCord has no control over product use of installation by its customers. It is the customer's responsibility to insure product suitability for all applications. </p> 
						</td>
						</tr>

						<tr>
						<td style="width: 70%">
							<p style="display: inline-block; margin: 0; float: left"><b style="margin: 0; font-size: 18px; width:60%">REMIT TO:</b><br>
							<b style="margin: 0; font-size: 18px;">PO BOX344</b><br>
							<b style="margin: 0; font-size: 18px;">BRATTLEBORO, VT</b><br>
							<b style="margin: 0; font-size: 18px;">05302-0344 </b><br>
							<b style="margin: 0; font-size: 18px; padding-left: 13px;">ISO From012S_Re00</b></p>
						</td>

						<td style="width: 30%; text-align: right;">
							<img src="<?php echo base_url('assets/front/images/ios.jpg')?>" alt="image" style="width: 80px;">
						</td>
						</tr>
						</table>

						
	
							
					</td>

					<td width="30%" style="font-size:14px; text-align:right;padding: 0;border: 1px solid #000;">
						<table  width="100%"  style="" valign="top" cellspacing="0">
						<tr>
							<td style="width: 70%; ">
								<strong>Net Invoice: </strong>
							</td>

							<td style="width:30%; text-align: center;"><?php echo $orderNet;?></td>

						</tr>

						<tr>
							<td style="width: 70%;">
								<strong>Less Discount: </strong>
							</td>

							<td style="width:30%; text-align: center;"><span style="width: 150px;display: inline-block;">0.0</span></td>

						</tr>

						<tr>
							<td style="width: 70%; ">
								<strong>Shipping/Handling: </strong>
							</td>

							<td style="width:30%; text-align: center;"><span style="width: 150px;display: inline-block;"><?php echo $frieght;?></span></td>

						</tr>

						<tr>
							<td style="width: 70%; ">
								<strong>Sales Tax: </strong>
							</td>

							<td style="width:30%; border-bottom: 2px solid #000; text-align: center;"><span style="width: 150px;display: inline-block; "><?php echo $tax;?></span></td>

						</tr>
						<tr>
							<td  style="width: 70%;">
								<strong>Invoice Total: </strong>
							</td>

							<td style="width:30%; text-align: center;"><span style="width: 150px;display: inline-block;"><?php echo $total;?></span></td>

						</tr>
						</table>

						
					</td>
				</tr>
			</table>
  </body>
</html>
<?php //die();?>
