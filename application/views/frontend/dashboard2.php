<?php
	$this->load->view('frontend/header');
	$this->load->view('frontend/sidebar');
	$this->load->view('frontend/top');
	$draftQuote		= array('daily'=>0,'weekly'=>0,'monthly'=>0,'yearly'=>0);
	$inprogressQuote= array('daily'=>0,'weekly'=>0,'monthly'=>0,'yearly'=>0);
	$cancelledQuote	= array('daily'=>0,'weekly'=>0,'monthly'=>0,'yearly'=>0);
	if(!empty($quoteInfo) && is_array($quoteInfo)){
		foreach($quoteInfo as $val){
			if($val->quote_status=='Cancelled'){
				$cancelledQuote['daily']	= !empty($val->daily_avg) ? $val->daily_avg : 0;
				$cancelledQuote['weekly']	= !empty($val->weekly_avg) ? $val->weekly_avg : 0;
				$cancelledQuote['monthly']	= !empty($val->monhtly_avg) ? $val->monhtly_avg : 0;
				$cancelledQuote['yearly']	= !empty($val->yearly_avg) ? $val->yearly_avg : 0;
			}
			if($val->quote_status=='Draft'){
				$draftQuote['daily']	= !empty($val->daily_avg) ? $val->daily_avg : 0;
				$draftQuote['weekly']	= !empty($val->weekly_avg) ? $val->weekly_avg : 0;
				$draftQuote['monthly']	= !empty($val->monhtly_avg) ? $val->monhtly_avg : 0;
				$draftQuote['yearly']	= !empty($val->yearly_avg) ? $val->yearly_avg : 0;
			}
			if($val->quote_status=='In Progress'){
				$inprogressQuote['daily']	= !empty($val->daily_avg) ? $val->daily_avg : 0;
				$inprogressQuote['weekly']	= !empty($val->weekly_avg) ? $val->weekly_avg : 0;
				$inprogressQuote['monthly']	= !empty($val->monhtly_avg) ? $val->monhtly_avg : 0;
				$inprogressQuote['yearly']	= !empty($val->yearly_avg) ? $val->yearly_avg : 0;
			}
		}
	}
?>
<!-- Right Bar Section -->

	<div class="right-bar">
		
		<div class="color-code">
			<div id="alert-message"><?php echo $this->session->flashdata('message');?></div>
			<ul>
				<li><span class="color-code0"></span><label>Not Available</label></li>
				<li><span class="color-code1"></span><label>Daily</label></li>
				<li><span class="color-code2"></span><label>Weekly</label></li>
				<li><span class="color-code3"></span><label>Monthly</label></li>
				<li><span class="color-code4"></span><label>Yearly</label></li>
				<li>
					<div class="salesperson-dropdown select1">
						<select id="salesperson-dropdown">
							<?php
								echo salesmanList($quoteDetailsOf,'Selected');
							?>
						</select>
					</div>
				</li>
			</ul>
		</div>
		
		<div class="first-chart-div">
		
			<div class="first-row">
				<div id="draft_container" class="chart-class">
				
				</div>
			</div>
		
			<div class="first-row">
				<div id="inprogress_container" class="chart-class">
				
				</div>
			</div>
			
			<div class="first-row">
				<div id="cancelled_container" class="chart-class" >
				
				</div>
			</div>
			
		</div>
		<div class="revenue-chart" id="revenue-chart">
			
		</div>
		
	</div>

<!-- Right Bar Section -->
</section>
<?php
	$this->load->view('frontend/bottom');
?>
<!--<script src="https://code.highcharts.com/highcharts-3d.js"></script>-->
<script src="https://code.highcharts.com/modules/drilldown.js"></script>
<script type="text/javascript">
	var c	= 0;
	var c1 	= <?=$cancelledQuote['daily']?>;
	var c2 	= <?=$cancelledQuote['weekly']?>;
	var c3	= <?=$cancelledQuote['monthly']?>;
	var c4 	= <?=$cancelledQuote['yearly']?>;
	if(c1==0 && c2==0 && c3==0 && c4==0){
		c=1;
	}
	
	
	/* Cancelled Quote Data */
	Highcharts.chart('cancelled_container', {
		colors: ['#F1f1f1','#7cb5ec','#434348', '#90ed7d','#f7a35c'],
		chart: {
			type: 'pie',
			
			height: 240,
			options3d: {
				enabled: true,
				alpha: 45
			},
			backgroundColor: "#f2f2f2",
			events: {
			drilldown: function (e) {
				if (!e.seriesOptions) {

					var chart = this,
						drilldowns = {
							'Animals': {
								name: 'Animals',
								data: [
									['Cows', 2],
									['Sheep', 3]
								]
							},
							'Fruits': {
								name: 'Fruits',
								data: [
									['Apples', 5],
									['Oranges', 7],
									['Bananas', 2]
								]
							},
							'Cars': {
								name: 'Cars',
								data: [
									['Toyota', 1],
									['Volkswagen', 2],
									['Opel', 5]
								]
							}
						},
						series = drilldowns[e.point.name];

					/* Show the loading label*/
					chart.showLoading('Simulating Ajax ...');

					setTimeout(function () {
						chart.hideLoading();
						chart.addSeriesAsDrilldown(e.point, series);
					}, 1000);
				}

			}
		}
		},
		title: {
			text: 'Cancelled Quote Details'
		},
		subtitle: {
			text: ''
		},
		plotOptions: {
			pie: {
				dataLabels: {
					enabled: false,
					distance: -50,
					style: {
						fontWeight: 'bold',
						color: 'white',
						textShadow: '0px 1px 2px black'
					}
				},
			}
		},
		series: [{
			name: 'Quote',
			innerSize: '50%',
			data: [
				['Not Available', c],
				['Daily', c1],
				['Weekly', c2],
				['Monthly', c3],
				['Yearly', c4],
			]
		}]
	});
	
	
	/* Draft Quote Data */
	var d	= 0;
	var d1 	= <?=$draftQuote['daily']?>;
	var d2 	= <?=$draftQuote['weekly']?>;
	var d3	= <?=$draftQuote['monthly']?>;
	var d4 	= <?=$draftQuote['yearly']?>;
	if(d1==0 && d2==0 && d3==0 && d4==0){
		d=1;
	}
	Highcharts.chart('draft_container', {
		colors: ['#F1f1f1','#7cb5ec','#434348', '#90ed7d','#f7a35c'],
		chart: {
			type: 'pie',
			height: 240,
			options3d: {
				enabled: true,
				alpha: 45
			},
			backgroundColor: "#f2f2f2"
		},
		title: {
			text: 'Quote Details'
		},
		subtitle: {
			text: ''
		},
		plotOptions: {
			pie: {
				dataLabels: {
					enabled: false,
					distance: -50,
					style: {
						fontWeight: 'bold',
						color: 'white',
						textShadow: '0px 1px 2px black'
					}
				},
			}
		},
		series: [{
			name: 'Quote',
			innerSize: '50%',
			data: [
				['Not Available', d],
				['Daily', d1],
				['Weekly', d2],
				['Monthly', d3],
				['Yearly', d4],
			]
		}]
	});
	
	/* In Progress Quote Data */
	var p 	= 0;
	var p1 	= <?=$draftQuote['daily']?>;
	var p2 	= <?=$draftQuote['weekly']?>;
	var p3	= <?=$draftQuote['monthly']?>;
	var p4 	= <?=$draftQuote['yearly']?>;
	if(p1==0 && p2==0 && p3==0 && p4==0){
		p=1;
	}
	Highcharts.chart('inprogress_container', {
		colors: ['#F1f1f1','#7cb5ec','#434348', '#90ed7d','#f7a35c'],
		chart: {
			type: 'pie',
			height: 240,
			options3d: {
				enabled: true,
				alpha: 45
			},
			backgroundColor: "#f2f2f2"
		},
		title: {
			text: 'Ordered Quote Details'
		},
		subtitle: {
			text: ''
		},
		plotOptions: {
			pie: {
				dataLabels: {
					enabled: false,
					distance: -50,
					style: {
						fontWeight: 'bold',
						color: 'white',
						textShadow: '0px 1px 2px black'
					}
				},
			}
		},
		series: [{
			name: 'Quote',
			innerSize: '50%',
			data: [
				['Not Available', p],
				['Daily', p1],
				['Weekly', p2],
				['Monthly', p3],
				['Yearly', p4],
			]
		}]
	});
	
	/*  Make the Pie Chart based on Salesperson change */
		/*  Make the Pie Chart based on Salesperson change */
	$(document).on('change','#salesperson-dropdown',function (){
		var salesPerson	= this.value;
		$.post('<?=base_url('frontend/dashboard/getSalespersonQuoteInformation')?>',{'salesPerson':salesPerson},function (response){
			var data	= JSON.parse(response);
			d	= data.d; dd	= data.dd;dw	= data.dw;dm	= data.dm;dy	= data.dy;
			p	= data.p; pd	= data.pd;pw	= data.pw;pm	= data.pm;py	= data.py;
			c	= data.c; cd	= data.cd;cw	= data.cw;cm	= data.cm;cy	= data.cy;
				/* Draft Quote Data */
				
				Highcharts.chart('draft_container', {
					colors: ['#c2c2c2','#7cb5ec','#434348', '#90ed7d','#f7a35c'],
					chart: {
						type: 'pie',
						height: 240,
						options3d: {
							enabled: true,
							alpha: 45
						},
						backgroundColor: "#f2f2f2"
					},
					title: {
						text: 'Quote Details'
					},
					subtitle: {
						text: ''
					},
					plotOptions: {
						pie: {
							dataLabels: {
								enabled: false,
								distance: -50,
								style: {
									fontWeight: 'bold',
									color: 'white',
									textShadow: '0px 1px 2px black'
								}
							},
						}
					},
					series: [{
						name: 'Quote',
						innerSize: '50%',
						data: [
							['Not Available', d],
							['Daily', dd],
							['Weekly', dw],
							['Monthly', dm],
							['Yearly', dy],
						]
					}]
				});
				
				/* In Progress Quote Data */
				
				Highcharts.chart('inprogress_container', {
					colors: ['#c2c2c2','#7cb5ec','#434348', '#90ed7d','#f7a35c'],
					chart: {
						type: 'pie',
						height: 240,
						options3d: {
							enabled: true,
							alpha: 45
						},
						backgroundColor: "#f2f2f2"
					},
					title: {
						text: 'Ordered Quote Details'
					},
					subtitle: {
						text: ''
					},
					plotOptions: {
						pie: {
							dataLabels: {
								enabled: false,
								distance: -50,
								style: {
									fontWeight: 'bold',
									color: 'white',
									textShadow: '0px 1px 2px black'
								}
							},
						}
					},
					series: [{
						name: 'Quote',
						innerSize: '50%',
						data: [
							['Not Available', p],
							['Daily', pd],
							['Weekly', pw],
							['Monthly', pm],
							['Yearly', py],
						]
					}]
				});
			/* Cancelled Quote Data */
			Highcharts.chart('cancelled_container', {
				colors: ['#c2c2c2','#7cb5ec','#434348', '#90ed7d','#f7a35c'],
				chart: {
					type: 'pie',
					height: 240,
					options3d: {
						enabled: true,
						alpha: 45
					},
					backgroundColor: "#f2f2f2"
				},
				title: {
					text: 'Cancelled Quote Details'
				},
				subtitle: {
					text: ''
				},
				plotOptions: {
					pie: {
						dataLabels: {
							enabled: false,
							distance: -50,
							style: {
								fontWeight: 'bold',
								color: 'white',
								textShadow: '0px 1px 2px black'
							}
						},
					}
				},
				series: [{
					name: 'Quote',
					innerSize: '50%',
					data: [
						['Not Available', c],
						['Daily', cd],
						['Weekly', cw],
						['Monthly', cm],
						['Yearly', cy],
					]
				}]
			});
			
			/* End */
		});
	});
	
	/* Revenue Chart Data */
	var cates	= 'Jan';
	
	 $('#revenue-chart').highcharts({
        chart: {
            type: 'column'
        },
        title: {
            text: 'Monthly Revenue Group By Division'
        },
        xAxis: {
            type: 'category',
            categories: [<?=$months?>]
            
        },
		yAxis: {
			min: 0,
			title: {
				text: 'Revenue ',
				style: {
					/*fontFamily: "\"MyriadProRegular\"",*/
					fontWeight: "Bold",
				}
			},
			
			
		},
        legend: {
            enabled: false
        },

        plotOptions: {
            series: {
				pointPadding: 0.2,
				borderWidth: .5,
				borderColor: "#000000"
            }
        },
		drilldown : {
			series: [<?=$np?>]
        },
        series: [<?=$pr?>]
    });
    
	
</script>
