<?php
	$this->load->view('frontend/header');
	$this->load->view('frontend/sidebar');
	$this->load->view('frontend/top');

	$groupPermissions	= $this->group_permissions;

	if($itemdata){ $itemdata = $itemdata[0]; }

	$part_number = !empty($itemdata->part_number) ? $itemdata->part_number : ''; 
	$sales_code = !empty($itemdata->sales_code) ? $itemdata->sales_code : '';
	$style	= !empty($itemdata->style) ? $itemdata->style : '';
	$twine_color	= !empty($itemdata->twine_color) ? $itemdata->twine_color : '';
	$twine_diameter	= !empty($itemdata->twine_diameter) ? $itemdata->twine_diameter : '0';
	$twine_size		= !empty($itemdata->imperial_twine_size) ? $itemdata->imperial_twine_size : '';
	$denier	= !empty($itemdata->denier) ? $itemdata->denier : '';
	$yarn_type	= !empty($itemdata->yarn_type) ? $itemdata->yarn_type : '';
	$twine_style   = !empty($itemdata->twine_style) ? $itemdata->twine_style : '';
	$twine_finish	= !empty($itemdata->twine_finish) ? $itemdata->twine_finish : '';
	$mesh_size		= !empty($itemdata->mesh_size) ? $itemdata->mesh_size : '0';
	$mesh_orientation	= !empty($itemdata->mesh_orientation) ? $itemdata->mesh_orientation : '0';
	$diamond_stretch	= !empty($itemdata->diamond_stretch) ? $itemdata->diamond_stretch : '';
	$description	= !empty($itemdata->description) ? $itemdata->description : '';

?>

	<div class="right-bar" id="page_layout">
		<div class="form-section">
			<div class="top-head">
				<h1 id="quoting-heading">Items [ Edit ]</h1>
				<a href="<?=base_url('viewitems')?>" class="back-btn  create_quote" > < Back</a>
			</div>

			<div class="inner-form" id="innerformdetails">
				<div><?php $message	= $this->session->flashdata('message'); echo $message;?></div>
				<div class="form-group form-wrap">
					<?php
						echo form_open('', array('class'=>'form-row ','id'=>'addinv_form','data-parsley-validate'=>'data-parsley-validate','enctype'=>'multipart/form-data'));
					?>

				  	<div class="panel panel-default">
						<div class="panel-heading"> <h5 style="color:white;" >Edit Item [<?=$part_number;?>]</h5> </div>
						<div class="panel-body">
							<div class="row">
								<div class="form-row half">
									<div class="form-row half">
										<label id="customer-heading">Part Number <em >*</em></label>
											<input type="text" name="part_number" Placeholder="Part Number" data-parsley-required="true" value="<?=$part_number?>">
									</div>
									<div class="form-row half">
										<label id="customer-heading">Sales Code <em >*</em></label>
											<input type="text" name="sales_code" Placeholder="Sales Code" data-parsley-required="true" value="<?=$sales_code?>">
									</div>

								</div>
								<div class="form-row half">
									<div class="half">
										<div class="form-row half">
											<label >Style<em >*</em></label>
											<div class="select1" id="status-select">
												<select name="style" data-parsley-required="true">
													<option value="" selected disabled hidden>None</option>
													<option value="1" <?=(!empty($style)&&($style=='1'))?'selected':''?>>Knotted</option>
													<option value="2" <?=(!empty($style)&&($style=='2'))?'selected':''?>>Knotless</option>
												</select>
											</div>

										</div>
										<div class="form-row half">
											<label>Twine Color</label>
											<div class="select1" id="status-select">
												<select name="twine_color" data-parsley-required="true">
														<option value="" selected disabled hidden>None</option>
														<option value="White" <?=(!empty($twine_color)&&($twine_color=='White'))?'selected':''?>>White</option>
														<option value="Black" <?=(!empty($twine_color)&&($twine_color=='Black'))?'selected':''?>>Black</option>
														<option value="Sand" <?=(!empty($twine_color)&&($twine_color=='Sand'))?'selected':''?>>Sand</option>
														<option value="Orange" <?=(!empty($twine_color)&&($twine_color=='Orange'))?'selected':''?>>Orange</option>
														<option value="Red" <?=(!empty($twine_color)&&($twine_color=='Red'))?'selected':''?>>Red</option>
														<option value="Grey" <?=(!empty($twine_color)&&($twine_color=='Grey'))?'selected':''?>>Grey</option>
														<option value="Multi-color" <?=(!empty($twine_color)&&($twine_color=='Multi-color'))?'selected':''?>>Multi-color</option>
												</select>
											</div>
										</div>
									</div>
									<div class="half">
												<label>Twine Diameter </label>
												<div class="select1" id="status-select">
													<select name="twine_diameter" data-parsley-required="true">
														<option value="" selected disabled hidden>None</option>
														<option value="1.8" <?=(!empty($twine_diameter)&&($twine_diameter=='1.8'))?'selected':''?> >1.8 mm</option>
														<option value="1.98" <?=(!empty($twine_diameter)&&($twine_diameter=='1.98'))?'selected':''?>>1.98 mm</option>
														<option value="2.16" <?=(!empty($twine_diameter)&&($twine_diameter=='2.16'))?'selected':''?>>2.16 mm</option>
														<option value="2.3" <?=(!empty($twine_diameter)&&($twine_diameter=='2.3'))?'selected':''?>>2.3 mm</option>
														<option value="3.0" <?=(!empty($twine_diameter)&&($twine_diameter=='3.0'))?'selected':''?>>3.0 mm</option>
														<option value="4.31" <?=(!empty($twine_diameter)&&($twine_diameter=='4.31'))?'selected':''?>>4.31 mm</option>
														<option value="4.75" <?=(!empty($twine_diameter)&&($twine_diameter=='4.75'))?'selected':''?>>4.75 mm</option>
														<option value="5.0" <?=(!empty($twine_diameter)&&($twine_diameter=='5.0'))?'selected':''?>>5.0 mm</option>
													</select>
												</div>
									</div>
								</div>
							</div>

							<div class="row">
								
								<div class="half">
									<div class="form-row half">
										<label>Imperial Twine size</label>
										<div class="select1" id="status-select">
												<select name="twine_size" data-parsley-required="true">
													<option value="" selected disabled hidden>None</option>
													<option value="30" <?=(!empty($twine_size)&&($twine_size=='30'))?'selected':''?>>#30</option>
													<option value="36" <?=(!empty($twine_size)&&($twine_size=='36'))?'selected':''?>>#36</option>
													<option value="120" <?=(!empty($twine_size)&&($twine_size=='120'))?'selected':''?>>#120</option>
												</select>
										</div>
									</div>
									<div class="form-row half">
										<label>Denier/ply</label>
										<div class="select1" id="status-select">
												<select name="denier" data-parsley-required="true">
													<option value="" selected disabled hidden>None</option>
													<option value="1" <?=(!empty($denier)&&($denier=='1'))?'selected':''?>>210/108</option>
													<option value="2" <?=(!empty($denier)&&($denier=='2'))?'selected':''?>>210/120</option>
													<option value="3" <?=(!empty($denier)&&($denier=='3'))?'selected':''?>>210/234</option>
													<option value="4" <?=(!empty($denier)&&($denier=='4'))?'selected':''?>>210/336</option>
													<option value="5" <?=(!empty($denier)&&($denier=='5'))?'selected':''?>>210/72</option>
													<option value="6" <?=(!empty($denier)&&($denier=='6'))?'selected':''?>>210/84</option>
													<option value="7" <?=(!empty($denier)&&($denier=='7'))?'selected':''?>>210/96</option>
													<option value="8" <?=(!empty($denier)&&($denier=='8'))?'selected':''?>>210D/48Ply</option>
													<option value="9" <?=(!empty($denier)&&($denier=='9'))?'selected':''?>>210D/378Ply(garware) 
																		210D/336Ply (rest of world</option>
												</select>
										</div>
									</div>
								</div>
								<div class="half">
									<div class="form-row half" id="manuf_wh">
										<label class="mnuf_lbl">Yarn Type(Fiber,polymer)</label>
										<div class="select1" id="status-select">
												<select name="yarn_type" data-parsley-required="true">
													<option value="" selected disabled hidden>None</option>
													<option value="1" <?=(!empty($yarn_type)&&($yarn_type=='1'))?'selected':''?>>Dupont Nylon </option>
													<option value="2" <?=(!empty($yarn_type)&&($yarn_type=='2'))?'selected':''?>>Dupont Nylon</option>
													<option value="3" <?=(!empty($yarn_type)&&($yarn_type=='3'))?'selected':''?>>Dnyeema</option>
													<option value="4" <?=(!empty($yarn_type)&&($yarn_type=='4'))?'selected':''?>>Multiple select</option>
												</select>
										</div>
									</div>

									<div class="form-row half">
										<label>Twine Style</label>
											<div class="select1" id="status-select">
												<select name="twine_style" data-parsley-required="true">
													<option value="" selected disabled hidden>None</option>
													<option value="1" <?=(!empty($twine_style)&&($twine_style=='1'))?'selected':''?>>Rascel Knit</option>
													<option value="2" <?=(!empty($twine_style)&&($twine_style=='2'))?'selected':''?>>Twisted 3-Strand</option>
												</select>
											</div>
									</div>
								</div>
							</div>

							<div class="row">
								<div class=" half">
									<div class="form-row half ">
										<label id="customer-heading">Twine Finish<em >*</em></label>
										<div class="select1">
											<input type="text" name="twine_finish" Placeholder="Twine Finish" data-parsley-required="true" value="<?=$twine_finish?>">
										</div>
									</div>

									<div class="form-row half ">
										<label id="customer-heading">Mesh Size<em >*</em></label>
										<div class="select1">
											<input type="text" name="mesh_size" Placeholder="Mesh size" data-parsley-required="true" value="<?=$mesh_size?>">
										</div>
									</div>

								</div>
								<div class=" half">
									<div class="form-row half">
											<label id="customer-heading">Mesh Orientation<em >*</em></label>
											<div class="select1" >
													<select name="mesh_orientation" data-parsley-required="true">
														<option value="" selected disabled hidden>None</option>
														<option value="1" <?=(!empty($mesh_orientation)&&($mesh_orientation=='1'))?'selected':''?>>Diamond</option>
														<option value="2" <?=(!empty($mesh_orientation)&&($mesh_orientation=='2'))?'selected':''?>>Square</option>
													</select>
											</div>
									</div>
									<div class="form-row half">
											<label>Diamond Stretch (knot-knot)</label>
											<div class="select1">
												<input type="text" name="diamond_stretch" Placeholder="Diamond Stretch" value="<?=$diamond_stretch?>">
											</div>
									</div>
									
								
								</div>	
							</div>
						
							<div class="row">
											<div class="half">
												<label>Description</label>
												<div class="select1" >
													<textarea name="description" placeholder="Description"><?=$description;?></textarea>
												</div>
											</div>
							</div>

							<div class="row submit-btn">
								<div class="form-row three ">
									<button type="submit" class="save" id="submitUserDetails"> Submit </button>
								</div>
							</div>
						</div>
					</div>
					<?=form_close()?>
				</div>	
			</div><!--form section ends here-->
		</div>
	</div>


<?php
	$this->load->view('frontend/bottom');
?>
