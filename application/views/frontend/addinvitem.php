<?php
 /* Test Results add page*/

	$this->load->view('frontend/header');
	$this->load->view('frontend/sidebar');
	$this->load->view('frontend/top');
	$CI	= & get_instance();
?>
<style>
	@media screen and (max-width: 1366px)
	index.css:278
	.inner-form {
	    width: 65%;
	    margin-left: 10%;
	}
</style>
	<div class="right-bar" id="page_layout">
		<div class="form-section">
			<div class="col-sm-12 top-head">
				<h1 id="quoting-heading">Items [ Add ]</h1>
				<a href="<?=base_url('viewitems')?>" class="back-btn  create_quote" > < Back</a>
			</div>
			<div class="col-xs-8 inner-form" id="innerformdetails">
				<div><?php $message	= $this->session->flashdata('message'); echo $message;?></div>
				<div class="form-group form-wrap">
					<?php
						echo form_open('', array('class'=>'form-row ','id'=>'addinv_form','data-parsley-validate'=>'data-parsley-validate','enctype'=>'multipart/form-data'));
					?>
					<div class="panel panel-default">
						<div class="panel-heading"> <h5 style="color:white;" >Add Item</h5> </div>	
						<div class="panel-body">
							<div class="row">
								<div class="form-row half">
									<div class="form-row half">
										<label id="customer-heading">Part Number <em >*</em></label>
											<input type="text" name="part_number" Placeholder="Part Number" data-parsley-required="true">
									</div>
									<div class="form-row half">
										<label id="customer-heading">Sales Code <em >*</em></label>
											<input type="text" name="sales_code" Placeholder="Sales Code" data-parsley-required="true">
									</div>

								</div>
								<div class="form-row half">
									<div class="half">
										<div class="form-row half">
											<label >Style<em >*</em></label>
											<div class="select1" id="status-select">
												<select name="style" data-parsley-required="true">
													<option value="" selected disabled hidden>None</option>
													<option value="1" >Knotted</option>
													<option value="2" >Knotless</option>
												</select>
											</div>

										</div>
										<div class="form-row half">
											<label>Twine Color</label>
											<!-- <div class="select1">
												<input type="text" name="twine_color" Placeholder="color">
											</div> -->
											<div class="select1" id="status-select">
												<select name="twine_color" data-parsley-required="true">
														<option value="" selected disabled hidden>None</option>
														<option value="White" >White</option>
														<option value="Black" >Black</option>
														<option value="Sand" >Sand</option>
														<option value="Orange" >Orange</option>
														<option value="Red" >Red</option>
														<option value="Grey" >Grey</option>
														<option value="Multi-color" >Multi-color</option>
												</select>
											</div>
										</div>
									</div>
									<div class="half">
												<label>Twine Diameter </label>
												<div class="select1" id="status-select">
													<select name="twine_diameter" data-parsley-required="true">
														<option value="" selected disabled hidden>None</option>
														<option value="1.8" >1.8 mm</option>
														<option value="1.98" >1.98 mm</option>
														<option value="2.16" >2.16 mm</option>
														<option value="2.3" >2.3 mm</option>
														<option value="3.0" >3.0 mm</option>
														<option value="4.31" >4.31 mm</option>
														<option value="4.75" >4.75 mm</option>
														<option value="5.0" >5.0 mm</option>
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
													<option value="30" >#30</option>
													<option value="36" >#36</option>
													<option value="120">#120</option>
												</select>
										</div>
									</div>
									<div class="form-row half">
										<label>Denier/ply</label>
										<div class="select1" id="status-select">
												<select name="denier" data-parsley-required="true">
													<option value="" selected disabled hidden>None</option>
													<option value="1" >210/108</option>
													<option value="2" >210/120</option>
													<option value="3">210/234</option>
													<option value="4" >210/336</option>
													<option value="5" >210/72</option>
													<option value="6">210/84</option>
													<option value="7" >210/96</option>
													<option value="8" >210D/48Ply</option>
													<option value="9">210D/378Ply(garware) 
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
													<option value="1" >Dupont Nylon </option>
													<option value="2" >Dupont Nylon</option>
													<option value="3">Dnyeema</option>
													<option value="4" >Multiple select</option>
												</select>
										</div>
									</div>

									<div class="form-row half">
										<label>Twine Style</label>
											<div class="select1" id="status-select">
												<select name="twine_style" data-parsley-required="true">
													<option value="" selected disabled hidden>None</option>
													<option value="1" >Rascel Knit</option>
													<option value="2" >Twisted 3-Strand</option>
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
											<input type="text" name="twine_finish" Placeholder="Twine Finish" data-parsley-required="true">
										</div>
									</div>

									<div class="form-row half ">
										<label id="customer-heading">Mesh Size<em >*</em></label>
										<div class="select1">
											<input type="text" name="mesh_size" Placeholder="Mesh size" data-parsley-required="true">
										</div>
									</div>

								</div>
								<div class=" half">
									<div class="form-row half">
											<label id="customer-heading">Mesh Orientation<em >*</em></label>
											<div class="select1" >
													<select name="mesh_orientation" data-parsley-required="true">
														<option value="" selected disabled hidden>None</option>
														<option value="1" >Diamond</option>
														<option value="2" >Square</option>
													</select>
											</div>
									</div>
									<div class="form-row half">
											<label>Diamond Stretch (knot-knot)</label>
											<div class="select1">
												<input type="text" name="diamond_stretch" Placeholder="Diamond Stretch">
											</div>
									</div>
									
								
								</div>	
							</div>
							
							<div class="row">
								<div class="half">
									<label>Description</label>
									<div class="select1" >
										<textarea name="description" placeholder="Description"></textarea>
									</div>
								</div>
							</div>
							<div class="row submit-btn">
								<div class="form-row three ">
									<button type="submit" class="save" id="submitUserDetails"> Submit </button>
								</div>
							</div>
						</div>
						<?=form_close()?>
					</div>		
				</div>
			</div>
		</div>
	</div>
</section>

<?php
	$this->load->view('frontend/bottom');
?>