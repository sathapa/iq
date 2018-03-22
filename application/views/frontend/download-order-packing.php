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
							<p><strong style="font-size:30px;">Packing List</strong>
								<br><br>
								<strong>Shipping Number </strong><?php echo $orderNo;?> <br>
								<strong>Order Number</strong> <?php echo $orderNo;?> <br>
								<strong>Order Date</strong> 11/21/2017<br>
								<strong>Number of Package</strong> 1
							</p>
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
						<td align="left" width="200" valign="top">
							<p><strong>Sold To: </strong></p>
							<p> <span>Asians Companies<br></span>
							<p> <span>1815 Landmark Rd</span>
								<span>Eik Group Village IL 60007-2420 </span>
							</p>
						</td>
						<td align="right" width="200"  valign="top">
							<p><strong>Ship To:</strong></p>
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
	</table>
		
		<div class="top-one">
			<table  width="100%" cellspacing="0" cellpadding="2" border="0" style="padding:0px 20px;" valign="top"  class="quantity-tabel">
				<tr> 
					<th style="color:#000;" nowrap="" align="center"><strong>Customer ID</strong></th> 
					<th style="color:#000;" nowrap="" align="center"><strong>Customer Contact</strong></th> 
					<th style="color:#000;" nowrap="" align="center"><strong>Telephone</strong></th>
					<th style="color:#000;" nowrap="" align="center"><strong>FACSIMILE</strong></th>
					<th style="color:#000;" nowrap="" align="center"><strong>SALES REP</strong></th>
				</tr>
				<tr> 
					<td valign="top" nowrap="" align="center">3D-FIRS01</td> 
					<td valign="top" nowrap="">EA</td> 
					<td valign="top" nowrap="">205-1411</td> 
					<td valign="top">Description will display dynamically </td> 
					<td valign="top" nowrap="" align="center">50</td> 
				</tr>
			</table>
		</div>
		<br>
		<div class="top-one">
			<table  width="100%" cellspacing="0" cellpadding="2" border="0" style="padding:0px 20px;" valign="top"  class="quantity-tabel">
				<tr> 
					<th style="color:#000;" nowrap="" align="center"><strong>Ship VIA</strong></th> 
					<th style="color:#000;" nowrap="" align="center"><strong>Ship Date</strong></th> 
					<th style="color:#000;" nowrap="" align="center"><strong>Terms</strong></th> 
					<th style="color:#000;" nowrap="" align="center"><strong>Customer PO</strong></th>
				</tr>
				<tr> 
					<td valign="top" nowrap="" align="center">R&L PPA</td> 
					<td valign="top" nowrap="">12/1/2017</td> 
					<td valign="top" nowrap="">Not 30 Days</td> 
					<td valign="top">021552 </td>
				</tr>
			</table>
		</div>
		<br>
		<div class="margin-top">
			<table  width="100%" cellspacing="0" cellpadding="2" border="0" style="padding:0px 20px;" valign="top"  class="quantity-tabel">
				<tr> 
					<th width="10%" style="color:#000;" nowrap="" align="center"><strong>ORDLRED</strong></th> 
					<th width="10%" style="color:#000;" nowrap="" align="center"><strong>SHIPPED</strong></th> 
					<th width="20%" style="color:#000;" nowrap="" align="center"><strong>B/O</strong></th> 
					<th width="20%" style="color:#000;" nowrap="" align="center"><strong>ITEM NO.</strong></th> 
					<th width="40%" style="color:#000;" nowrap="" align="center"><strong>DISCRIPTION</strong></th> 
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
							$unitPrice	= 5;//!empty($val->quantityorderedoriginal) ? $val->quantityorderedoriginal : '';
							$ext		= ($quantity * $unitPrice);
							$ext		= number_format($ext,2);
							$netTotal	= ($netTotal + $ext);
							$bottomBorder 	= "border-bottom:none";
							if(($key + 1 ) ==($numRows)){
								$bottomBorder 	= "";
							}
							echo '<tr> 
									<td valign="top" nowrap="" align="center" style="'.$bottomBorder.'">12.00</td> 
									<td valign="top" nowrap="" align="center" style="'.$bottomBorder.'">12.00</td> 
									<td valign="top" nowrap="" align="center" style="'.$bottomBorder.'">0.00</td> 
									<td valign="top" align="center" style="'.$bottomBorder.'">'.$itemCode.'</td> 
									<td valign="top" nowrap="" align="center" style="'.$bottomBorder.'">'.$itemDesc.'</td> 
								</tr>';
						}
					}
					$tax 	= 1.00;
					$total 	= ($netTotal + $frieght + $tax);
				?>
			</table>
			<br>
			<table  width="100%"  style="padding:0px 20px;" valign="top">
				<tr>
					<td width="75%"><p style="font-size:11px;">Custom Orders Non-Returnable. Incord warrants its product free of defects in workmanship
					and material on the date shipment. Incord has no control over product use of installation by its customers. Its is customer's 
					reponsibility to insure product suitability for the all applications </p> </td>
						<td width="25%" style="font-size:14px; text-align:right;"><b>ISO From012S_Re00</b></td>
				</tr>
			</table>
		</div>
  </body>
</html>
<?php //die;?>
	
