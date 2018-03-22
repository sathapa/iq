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
.quantity-tabel th{font:13px/14px  Arial, sans-serif; border-bottom: 1px solid #000000; padding:5px; border-top: 1px solid #000000;}

.total-price td{font:11px/20px  Arial, sans-serif;}
.total-price p{font:11px/14px  Arial, sans-serif;  margin:0px 0 5px 0px;}
.date-filde p{font:11px/14px  Arial, sans-serif;  margin:0px 0 5px 0px;}
.date-filde td{font:11px/14px  Arial, sans-serif;}
.packing_production_sheet tr th{border-top: 1px solid #000; border-bottom: 1px solid #000;border-left: 1px solid #000;  }
.pkg_div{border-right: 1px solid #000}
.packing_production_sheet tr td{text-align: center}
td, th{font-size: 20px !important;}
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
			$wareHouse	= !empty($salesOrdersDetails->warehousecode) ? $salesOrdersDetails->warehousecode : '';
			$orderNet	= !empty($salesOrdersDetails->amount) ? $salesOrdersDetails->amount: '';
		?>
	 	<table width="100%"  border="0" cellspacing="0" cellpadding="0" bgcolor="#fff" class="main-tabel" valign="top" style="table-layout: fixed; padding:10px;">
			<tr>
				<td valign="top"  style="border-bottom:2px solid #222222;">
					<table width="100%" border="0" cellpadding="0" cellspacing="0"  style="padding:0px 20px 10px;" class="top-header">
			     		<tr>
							<td valign="top" align="left" width="520" style="font-size: 20px;" >
								<p>If you happy and you know jump hurrey</p> <br>
								<p>BW gt hg</p>
							</td>
							<td align="right" style="text-align: left;" width="250" valign="top" >
									<p><strong style="font-size:30px;">Packaging Production Sheet</strong></p><br>
									<p style="text-align:right;"><strong style="font-size:20px;">Bar Code</strong></p><br>
									<p style="text-align:right; "><strong style="font-size:25px;"><?php echo $orderNo;?></strong></p>
							</td>
			      		</tr>  
			     	</table>
			    </td>
			</tr>
		    <tr>
		        <td height="0"  width="100%" cellspacing="0" cellpadding="0" border="0" style=" padding: 0 5px 5px;" valign="top">
		        </td>
		    </tr>
			<tr>
				<td>
					<table width="100%" border="0" cellpadding="0" cellspacing="0"  style="padding:0px 20px 0; background:#bcb8b5; font-size:15px;border: 1px solid #000;" >
						<tr>
							<td valign="top" style="width:20%; text-align:center;">
								<p>
									<strong>Sales order</strong>
									<span style="display:block;"><strong><?php echo $orderNo;?></strong></span>
								</p>
							</td>
							<td valign="top" style="width:20%;text-align:center;">
								<p>
									<strong>Customer Name</strong>
									<span style="display:block;"><?php echo $custName;?></span>
								</p>
							</td>
							<td valign="top" style="width:20%;text-align:center;">
								<p>
									<strong>Ship To Name</strong>
									<span style="display:block;"><?php echo $shipto?></span>
								</p>
							</td>
							<td valign="top" style="width:20%;text-align:center;">
								<p>
									<strong>Order Date</strong>
									<span style="display:block;">11/21/2017</span>
								</p>
							</td>
							<td valign="top" style="width:20%;text-align:center;">
								<p>
									<strong>Ship Date</strong>
									<span style="display:block;"><?php echo $shipDate;?></span>
								</p>
							</td>
							
						</tr>
						<tr>
							<td style="text-align:center; margin:0px;">
								<p >
									<strong>Cust No</strong>
									<?php echo $custNo; ?>
								</p>
							</td>
						</tr>
					</table>
				</td>
			</tr>		
			<tr>
				<td>
					<table width="100%">
						<tr>
								<td>
									<p>
										<strong style="padding-right:10px;">S/O Created</strong>BY beth-Annh 11/12/2017
									</p>
								</td>
								<td style="padding-left:10px;">
									<p>
										<strong style="padding-right:10px;">S/O Last Modified</strong>BY beth-Annh On 11/12/2017
									</p>
								</td>
								<td style="padding-left:10px;">
									<p>
										<strong style="padding-right:10px;">Printed On</strong> 11/12/2017
									</p>
								</td>
								<td style="padding-left:10px;">
									<p>
										<strong style="padding-right:10px;">at</strong>1:03.33Pm
									</p>
								</td>
								<!-- <td style="padding-left:10px;">
									<p>
										<strong style="padding-right:10px;">Page</strong> 3 of 3
									</p>
								</td> -->
							</tr>
						</table>
					</td>						
			</tr>	

			<tr>
				<td>
					<table width="100%;">
						<tr>
							<td><p><strong>Note: </strong>Ship w90421-3 By 12/5 Latest</p></td>
							<td><p><strong>Sales Person: </strong><?php echo $custName;?></p></td>
							<td><p><strong>Cust PO: </strong> <?php echo $custPoNo;?></p></td>
						</tr>
					</table>
				</td>
			</tr>
			<tr>
				<td>
					<table width="100%;">
					
						<tr style="padding-bottom: 10px;" >
						<td style="width: 30%"></td>
						<td style="width: 30%"></td>
							<td  style="width: 10% ;padding: 10px 20px; border: 2px solid #000;  background:#bcb7b7;text-align: right;" >PICK FROM WAREHOUSE  <?php echo $wareHouse;?>
						
							</td>
</tr>
							
						
					</table>
				</td>
			</tr>
<br>
			<tr>
				<td>
					<div class="quantity-tabel">
							<table class="packing_production_sheet" width="100%" valign="top" border="0" cellspacing="0" cellpadding="0" bgcolor="#fff">
								<thead style="text-align:left;">
								<tr style="    height: 35px;">
									<th><strong>Ordered</strong></th>
									<th><strong>UOM</strong></th>
									<th><strong>Item Number</strong></th>
									<th style="width: 30%; "><strong>Discription</strong></th>
									<th><strong>Weight</strong></th>
									<th><strong>QTY<br>Shipped</strong></th>
									<th><strong>QTY<br>B/O</strong></th>
									<th><strong>B/O<br>Ship Date</strong></th>
									<th class="pkg_div"><strong>PKG'D<br>By</strong></th>
									</tr>
								</thead>
						
								<tbody>
								<?php
									$total 	= 0;
									if(!empty($salesOrders) && is_array($salesOrders)){
										$numRows = count($salesOrders);
										foreach($salesOrders as $key=>$val){
											$quantity	= !empty($val->quantityorderedoriginal) ? $val->quantityorderedoriginal : 0;
											$uom		= !empty($val->uom) ? $val->uom : '';
											$itemCode	= !empty($val->itemcode) ? $val->itemcode : '';
											$itemDesc	= !empty($val->itemcodedesc) ? $val->itemcodedesc : '';
											$unitPrice	= !empty($val->unitprice) ? $val->unitprice : '';
											$ext		= ($quantity * $unitPrice);
											$netTotal	= ($netTotal + $ext);
											$bottomBorder 	= "border-bottom:none";
											if(($key + 1 ) ==($numRows)){
												$bottomBorder 	= "";
											}
											echo '<tr style="    height: 35px;">
												<td> <strong>'.$quantity.'</strong></td>
												<td>'.$uom.'</td>
												<td>'.$itemCode.'</td>
												<td style="text-align:left">'.$itemDesc.'</td>
												<td>'.$quantity.'</td>
												<td>0</td>
												<td>___</td>
												<td>'.date('Y/m/d',strtotime($shipDate)).'</td>
												<td>___</td>
											</tr>';
										} 
									}
									$total 	= ($orderNet + $frieght);
								?>
								</tbody>
					</table>
					
					</div>
				</td>
			</tr>	
			<tr>
				<td style="padding:40px 0px; font-size:20px;">
					S/o's <?php echo $orderNo;?> shipped together. Freight charged on s/o# <?php echo $orderNo;?>.
				</td>
			</tr>

			<tr>
				<td>
					<table width="100%" border="0">
			  			<tr>
			   				<td width="300px">
								<table border="1" cellspacing="0" cellpadding="5" width="100%">									
									<tr>
										<td>Bx = Box</td>
										<td>D55 = 55 Gal. Drum</td>
									</tr>
									<tr>
										<td>SP = Spool</td>
										<td>D30 = 30 Gal. Drum</td>
									</tr>
									<tr>
										<td>BDL = Bundle</td>
										<td>D15 = 15 Gal. Drum</td>
									</tr>
									<tr>
										<td>G = Gaylord</td>
										<td>1/4 G = 1/4 Gaylord</td>
									</tr>
									<tr>
										<td>R = Roll</td>
										<td></td>
									</tr>
								</table>
								<table>
									<tr>
										<td><strong>ISO From 027_rew03</strong></td>
									</tr>
								</table>
							</td>
			    			<td width="700px" style="vertical-align: top">
								<table width="100%" border="1" cellspacing="0" cellpadding="5">
									<tr>
										<th style="color: #000"># Skids</th>
										<th># BX</th>
										<th># D15</th>
										<th># D30</th>
										<th># D55</th>
										<th># 1/4G</th>
										<th># G</th>
										<th># SP</th>
										<th># BDL</th>
										<th>#R Over </th>
										<th style="width:150px;">Weight EA.</th>
									</tr>


									<tbody>
										<tr>
											<td align="center">___</td>
											<td align="center">___</td>
											<td align="center">___</td>
											<td align="center">___</td>
											<td align="center">___</td>
											<td align="center">___</td>
											<td align="center">___</td>
											<td align="center">___</td>
											<td align="center">___</td>
											<td align="center">___</td>
											<td align="center">____________</td>
										</tr>
										<tr>
											<td align="center">___</td>
											<td align="center">___</td>
											<td align="center">___</td>
											<td align="center">___</td>
											<td align="center">___</td>
											<td align="center">___</td>
											<td align="center">___</td>
											<td align="center">___</td>
											<td align="center">___</td>
											<td align="center">___</td>
											<td align="center">____________</td>
										</tr>
										<tr>
											<td align="center">___</td>
											<td align="center">___</td>
											<td align="center">___</td>
											<td align="center">___</td>
											<td align="center">___</td>
											<td align="center">___</td>
											<td align="center">___</td>
											<td align="center">___</td>
											<td align="center">___</td>
											<td align="center">___</td>
											<td align="center">____________</td>
										</tr>
										<tr>
											<td align="center">___</td>
											<td align="center">___</td>
											<td align="center">___</td>
											<td align="center">___</td>
											<td align="center">___</td>
											<td align="center">___</td>
											<td align="center">___</td>
											<td align="center">___</td>
											<td align="center">___</td>
											<td align="center">___</td>
											<td align="center">____________</td>
										</tr>
										</tbody>
								</table>
							</td>
							<td width="300px">
								<table width="100%">
									<tr>
										<td>
											<strong>Quoted Frieght:</strong>
										</td>
										<td>
											<strong><?php echo $frieght;?></strong>
										</td>
									</tr>
									<tr>
										<td>
											<strong>Order Total</strong>
										</td>
										<td>
											<strong><?php echo $total;?><strong>
										</td>
									</tr>
								</table>
							</td>
			  			</tr>
					</table>
				</td>
			</tr>
		</table>
  </body>
</html>
<?php //die();?>