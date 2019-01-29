<?php
/**
 * Template Name: Statistics
 *
 * @package afsp
 */

get_header();
get_template_part( 'template-parts/title' ); ?>
<div class="container" aria-labelledby="page-title">
	<h1 id="page-title" class="landing__title"><?php the_title(); ?></h1>
</div>
<section class="container" aria-label="disclaimer">
	<p class="stats__intro">While this data is the most accurate we have, we estimate the numbers to be higher. Stigma surrounding suicide leads to underreporting, and data collection methods critical to suicide prevention need to be improved. <a href="<?php echo esc_url( site_url() ); ?>/our-work/advocacy/become-an-advocate/">Learn how you can become an advocate.</a></p>
</section>
<div class="container">
<section class="counter__circles" aria-label="circle statistics">
	<div class="counter">
		<div class="counterText">
			Suicide is the<br><span id="suiCause"></span> <sup>th</sup><br>leading cause of death in the US
		</div>
	</div>
	<div class="counter">
		<div class="counterText">
			In 2017,<br><span id="suiDeaths"></span><br>Americans died by suicide
		</div>
	</div>
	<div class="counter">
		<div class="counterText">
			In 2017, there were an estimated<br><span id="suiAttempts"></span><br>suicide attempts
		</div>
	</div>
	<div class="counter">
		<div class="counterText">
			In 2015, suicide and self-injury cost the US<br>$ <span id="suiCost"></span>&nbsp; Billion
		</div>
	</div>
</section>
<section class="key-facts key-facts--us" aria-label="state facts">
	<h2>Additional Facts About Suicide in the US</h2> 
	<ul class="key-facts__list">
		<li>The age-adjusted suicide rate in 2017 was <span class="bold">14.0 per 100,000</span> individuals.</li>
		<li>The rate of suicide is <span class="bold">highest in middle-age</span> white men in particular.</li>
		<li>In 2017, men died by suicide <span class="bold">3.54x</span> more often than women.</li>
		<li>On average, there are <span class="bold">129</span> suicides per day.</li>
		<li>White males accounted for <span class="bold">77.97%</span>  of suicide deaths in 2017.</li>
		<li>In 2017, firearms accounted for <span class="bold">50.57%</span> of all suicide deaths.</li>
	</ul>
</section>
<section class="key-facts key-facts--state" aira-label="state statistics">
	<div class="viz">
		<svg id="map">
			<defs>
				<pattern id="pattern-stripe" 
					width="4" height="4" 
					patternUnits="userSpaceOnUse"
					patternTransform="rotate(45)">
					<rect width="3.5" height="4" transform="translate(0,0)" fill="white"></rect>
				</pattern>
				<mask id="mask-stripe">
					<rect x="0" y="0" width="100%" height="100%" fill="url(#pattern-stripe)" />
				</mask>
			</defs>
		</svg>
		<svg id="chart"></svg>
	</div>
	<button class="features__button" id="clear-selection">Clear Selection</button>
	<div>
		<table id="state_table">
			<thead id="state_head">
				<tr>
					<th id="table-state" style="width: 25%"></th>
					<th id="table-rank" style="width: 25%"></th>
					<th id="table-rate" style="width: 25%"></th>
					<th id="table-sheet" style="width: 25%"></th>
				</tr>
			</thead>
			<tbody id="state_body"></tbody>
		</table>
	</div>		
</section>
<section class="key-facts" aria-label="key suicide statistics">
	<div class="age-facts">
		<h2>Suicide Rates by Age</h2>
		<p>In 2017, the highest suicide rate (20.2) was among adults between 45 and 54 years of age. The second highest rate (20.1) occurred in those 85 years or older. Younger groups have had consistently lower suicide rates than middle-aged and older adults. In 2017, adolescents and young adults aged 15 to 24 had a suicide rate of 14.46.</p>
		<iframe src="https://s3.amazonaws.com/AFSPNationalContent/highcharts/suicideRatesByAge.html" style="width:600px; max-width: 100%; height:325px; display: block; margin: 0 auto;" title="Suicide Rates by Age"></iframe>
	</div>
	<br />
	<div class="race-facts">
		<h2>Suicide Rates by Race/Ethnicity</h2>
		<p>In 2017, the highest U.S. age-adjusted suicide rate was among Whites (15.85) and the second highest rate was among American Indians and Alaska Natives (13.42). Much lower and roughly similar rates were found among Black or African Americans (6.61) and Asians and Pacific Islanders (6.59).</p>
		<p>Note that the Center for Disease Control and Prevention (CDC) records Hispanic origin separately from the primary racial or ethnic groups of White, Black, American Indian or Alaskan Native, and Asian or Pacific Islander, since individuals in all groups may also be Hispanic.</p>
		<iframe src="https://s3.amazonaws.com/AFSPNationalContent/highcharts/suicideRatesByEthnicity.html" style="width:600px; max-width: 100%; height:325px; display: block; margin: 0 auto;" title="Suicide Rates by Ethnicity"></iframe>
	</div>
	<br />
	<div class="method-facts">
		<h2>Suicide Methods</h2>
		<p>In 2017, firearms were the most common method of death by suicide, accounting for a little more than half (50.57%) of all suicide deaths. The next most common methods were suffocation (including hangings) at 27.72% and poisoning at 13.89%.</p>
		<iframe src="https://s3.amazonaws.com/AFSPNationalContent/highcharts/suicideMethods.html" style="width:600px; max-width: 100%; height:325px; display: block; margin: 0 auto;" title="Suicide Methods"></iframe>
	</div>
</section>
<section class="attempt-facts" aria-label="suicide attempt facts">
	<h2>Suicide Attempts</h2>
	<p>When it comes to suicide and suicide attempts there are rate differences depending on demographic characteristics such as age, gender, ethnicity and race. Nonetheless, suicide occurs in all demographic groups.</p>
	<p>In the U.S., no complete count of suicide attempt data are available. The CDC gathers data from hospitals on non-fatal injuries from self-harm as well as survey data.</p>
	<p>In 2015, (the most recent year for which data are available), approximately 575,000 people visited a hospital for injuries due to self-harm.</p>
	<p>Based on the 2017 National Survey of Drug Use and Mental Health it is estimated that 0.6 percent of the adults aged 18 or older made at least one suicide attempt.  This translates to approximately 1.4 million adults. Adult females reported a suicide attempt 1.4 times as often as males. Further breakdown by gender and race are not available.</p>
	<p>Based on the 2017 Youth Risk Behaviors Survey, 7.4 percent of youth in grades 9-12 reported that they had made at least one suicide attempt in the past 12 months. Female students attempted almost twice as often as male students (9.3% vs. 5.1%). Black students reported the highest rate of attempt (9.8%) with white students at 6.1 percent. Approximately 2.4 percent of all students reported making a suicide attempt that required treatment by a doctor or nurse.  For those requiring treatment, rates were highest for Black students (3.4%).</p>
</section>		
<section class="stats_citation" aria-label="statistics citation">
	<br>
	<hr>
	<p><small><em>AFSP's latest data on suicide are taken from the Centers for Disease Control and Prevention (CDC) Data & Statistics Fatal Injury Report for 2017. Suicide rates listed are Age-Adjusted Rates.</em></small></p>
</section>
</div>	
<script>
/*global d3*/
jQuery(document).ready(function($) {
	var supportsTouch = 'ontouchstart' in window || navigator.msMaxTouchPoints;
	$('.counter').css('height', function() {return $('.counter').css('width');});
	var suiOptions = {
		useEasing: false,
		useGrouping: true,
		separator: ','
	}
	var suiCause = new CountUp('suiCause', 0, 10, 0, 1, suiOptions).start();
	var suiDeaths = new CountUp('suiDeaths', 0, 47173, 0, 1, suiOptions).start();
	var suiAttempts = new CountUp('suiAttempts', 0, 1400000, 0, 1, suiOptions).start();
	var suiCost = new CountUp('suiCost', 0, 69, 0, 1, suiOptions).start(); 
	// width and height of svg
	var w = parseInt(d3.select('#map').style('width')),
			h = parseInt(d3.select('#map').style('height')),
			ch = parseInt(d3.select('#chart').style('height')),
			offset = {}; //this empty object will help the chart draw and redraw itself
/**********
*
* Start All The D3
*
**********/
	// import csv and make magic with it
	d3.csv('<?php echo esc_url( get_template_directory_uri() ); ?>/stats/suicide-state-2017.csv', function(data) {
		// start working with the json file
		d3.json('<?php echo esc_url( get_template_directory_uri() ); ?>/stats/usgeo.json', function(json) {
			for(var i = 0; i < data.length; i++) {
				var dataState = data[i]['State'];
				var dataYear = data[i]['Year'];
				var dataValue = parseFloat(data[i]['Age-Adjusted Rate']);
				var latestYear = d3.max(data, function(dt){
					return dt['Year'];
				});
				for(var j = 0; j < json.features.length; j++) {
					var jsonState = json.features[j].properties.name;
					if(dataState == jsonState && dataYear == latestYear) {
						json.features[j].properties.value = dataValue;
						break;
					}
				}
			}
/**********
* 
* Start map functions
* 
**********/ 
			// projection for map
			var projection = d3.geo.albersUsa() 
									.translate([w/2, h/2])
									.scale(w * 1.3);
			// path for states
			var path = d3.geo.path() 
								.projection(projection);
			// color domain and range for states
			var color = d3.scale.quantize()
								.range(["rgba(8,106,142,0.2)","rgba(8,106,142,0.4)","rgba(8,106,142,0.6)","rgba(8,106,142,0.8)","rgba(8,106,142,1.0)"])
								.domain([
									d3.min(data, function(dt) {
										return +dt['Age-Adjusted Rate'];
									}), 
									d3.max(data, function(dt) {
										return +dt['Age-Adjusted Rate'];
									})
								]);  
			// map controller variable
			var svgMap = d3.select('#map'); 
			// function that colors the states
			function colorData(dt) { 
				var value = dt.properties.value;
				if(value) {
					return color(value);
				} else {
					return '#ccc';
				}
			}
			// draw the map
			svgMap.selectAll('path')
					.data(json.features)
					.enter()
					.append('path')
					.attr('d', path)
					.attr('stroke-width', 1)
					.attr('data-state', function(dt) {return dt.properties.name.replace(/\s+/g, '-');})
					.attr('data-value', function(dt) {return dt.properties.value;})
					.style('fill', colorData)
					.style('stroke', 'white')
					.on('mouseover', function() {
						d3.select(this.parentNode.appendChild(this))
							.transition()
							.duration(100)
							.attr('stroke-width', 2)
							.style('stroke', 'rgb(252,76,2)');
					})
					.on('mouseout', function() {
						d3.select(this)
							.transition()
							.duration(100)
							.attr('stroke-width', 1)
							.style('fill', colorData)
							.style('stroke', 'white');
					})
					.on('mouseup', function() {
						var thisEl = d3.select(this)
						var ident = thisEl.attr('data-state');
						var table_state = d3.select('.' + ident);
						if(thisEl.classed('stats--active')) {
							thisEl.classed('stats--active', false);
						} else {
							thisEl.classed('stats--active', true);
						}
						if(table_state.classed('stats--hidden')) {
							$('.' + ident).removeClass('stats--hidden');
							$('.' + ident).append('<td class="fact-sheet"><a href="<?php echo esc_url( site_url() ); ?>/about-suicide/state-fact-sheets/#' + ident + '">Click to view state fact sheet</a></td>');
						} else {
							$('.' + ident).addClass('stats--hidden');
							$('.' + ident + ' .fact-sheet').remove();
						}
						tableState();
						var thisLine = d3.select('.state-line path[data-state="' + ident + '"]');
						var thisDot = d3.selectAll('.dot[data-state="' + ident + '"]');
						if(!offset[ident]) {
							offset[ident] = thisLine.attr('stroke-dashoffset');
						}
						if(thisLine.attr('stroke-dashoffset') == offset[ident]) {
							thisLine.transition()
									.duration(500)
									.ease('linear')
									.attr('stroke-dashoffset', 0);
							thisDot.transition()
									.duration(500)
									.ease('linear')
									.attr('opacity', 1)
									.style('pointer-events', 'visibleFill');
						} else {
							thisLine.transition()
									.duration(250)
									.ease('linear')
									.attr('stroke-dashoffset', offset[ident]);
							thisDot.transition()
									.duration(500)
									.ease('linear')
									.attr('opacity', 0)
									.style('pointer-events', 'none');
						}
					});
/**********
* 
* End map functions
* 
* Start table functions
* 
**********/
			// function that creates the table for state data
			function tabulate(data, columns) { 
				var tbody = d3.select('#state_table tbody');
				var dataFilter = [];
				// get all the years that aren't the latest data out of the table
				for(var foo = 0; foo < data.length; foo++) { 
					if(data[foo]['Year'] == latestYear) {
						dataFilter = dataFilter.concat(data[foo]);
					}
				}
				data = dataFilter;
				d3.select('#table-state').text('State');
				d3.select('#table-rank').text(latestYear + ' Rank');
				d3.select('#table-rate').text(latestYear + ' Age-Adjusted Rate');
				var rows = tbody.selectAll('tr')
								.data(data)
								.enter()
								.append('tr')
								.attr('class', function(dt) {return dt.State.replace(/\s+/g, '-');})
								.classed('state-table', true)
								.classed('stats--hidden', true);
				var cells = rows.selectAll('td')
								.data(function(row) {
									return columns.map(function(column) {
										return {column: column, value: row[column]};
									});
								});
				cells.enter()
				.append('td')
				.style('width', '25%')
				.attr('class', function(dt) {return dt.column.replace(/\s+/g, '-')})
				.html(function(dt) {
					return dt.value});
				return tbody;
			}
			// function that adds the data when two or more states are selected
			function avgValue(cls) { 
				var average = 0;
				$('.' + cls).not('.stats--hidden td').each(function() {
					var value = $(this).text();
					if(!isNaN(value) && value.length != 0) {
						average += parseFloat(value);
					}
				});
				var avgReturn = average/$('.' + cls).not('.stats--hidden td').length;
				return avgReturn.toFixed(2);
			}
			// provide instructions for using the state map
			function stateInstuctions(selector, newId, position) {
				var clk = 'click on';
				if(supportsTouch) {
					var clk = 'double press';
				}
				$(selector).after('<div id="' + newId + '" style="text-align: center;">Please ' + clk + ' on a state or states ' + position + ' to view state and national data. To remove a state from you selection' + clk + ' the state or use the "Clear Selection" button to remove all states.</div>');
			}
			// run stateInstructions so that the message appears above state map
			stateInstuctions('.key-facts--us', '', 'below');
			// function that determines the visibility of the table based on state selections
			function tableState() { 
				if($('.state-table').not('.stats--hidden').length === 0) {
					stateInstuctions('#state_table', 'emptyTable', 'above');
					$('#state_table').css('display','none');
				} else {
					$('#emptyTable').remove();
					$('#state_table').css('display','table');
				}
				if($('.state-table').not('.stats--hidden').length >= 2 && $('#totals').length == 0) {
					$('#state_body').after('<tr id="totals" style="border-top: 1px solid #000;"><td><b>Selected Average</b></td><td>N/A</td><td id="avgRate">' + avgValue('Age-Adjusted-Rate') + '</td><td></td></tr>')
				} else if($('.state-table').not('.stats--hidden').length > 2) {
					$('#avgRate').text(avgValue('Age-Adjusted-Rate'));
				} else {
					$('#totals').remove();
				}
			}
			// run tableState for the first time so we get the message
			tableState();
			// draw the table         
			var suicideTable = tabulate(data, ['State', 'Rank', 'Age-Adjusted Rate']);
/**********
* 
* End table functions
* 
* Start chart functions
* 
**********/
			// define chart margins
			var margins = {
				top: 40,
				right: 20,
				bottom: 20,
				left: 50
			};
			// define colors for chart
			var lineColor = d3.scale.category20()
									.domain(d3.keys(data[0]).filter(function(key) {return key == 'State'} )); // from here on out, references to the state can be made by calling dt.key
			// x and y ranges and domains for chart
			var x = d3.scale.linear()
							.range([margins.left, w - margins.right])
							.domain(d3.extent(data, function(dt) {return dt['Year'];} )),
				y = d3.scale.linear()
							.range([ch, margins.top + margins.bottom])
							.domain([0, d3.max(data, function(dt) {return +dt['Age-Adjusted Rate'];} )]);
			// x and y axes for chart
			var xAxis = d3.svg.axis().scale(x)
								.orient('bottom')
								.ticks(10)
								.tickFormat(d3.format('d')),
				yAxis = d3.svg.axis().scale(y)
								.orient('left')
								.ticks(5);
			// nest the data by state
			var stateNest = d3.nest()
								.key(function(dt) {return dt['State'];} )
								.entries(data);
			// define the lines
			var suiLine = d3.svg.line()
								.x(function(dt) {return x(dt['Year']);} )
								.y(function(dt) {return -(margins.top) + y(dt['Age-Adjusted Rate']);});
			// define the tooltip
			var tool = d3.select('body')
							.append('div')
							.attr('class', 'stats__tooltip')
							.style('opacity',0);
			// chart controller variable
			var svgChart = d3.select('#chart');
			//draw the chart
			svgChart.append('g')
					.attr('transform', 'translate(' + margins.left + ',' + margins.top + ')');
			svgChart.append('g')  
					.attr('class', 'x-axis')
					.attr('transform', 'translate(0,' + (ch - margins.top) + ')')
					.call(xAxis);
			svgChart.append('g')
					.attr('class', 'y-axis')
					.attr('transform', 'translate(' + margins.left + ',-' + margins.top + ')')
					.call(yAxis);
			// draw the chart title and axis labels 
			var cTitle = svgChart.append('text')
									.attr('y', margins.top)
									.attr('x', w / 2)
									.attr('dx', '1em')
									.style('text-anchor', 'middle')
									.style('font-size', '1.1em')
									.text('Suicide Rates in the United States');
			var yLabel = svgChart.append('text')
									.attr('transform','rotate(-90)')
									.attr('y', 0)
									.attr('x', 0 - (ch / 2))
									.attr('dy', '1em')
									.style('text-anchor', 'middle')
									.style('font-weight', 'bold')
									.text('Rate per 100,000 individuals');
			var xLabel = svgChart.append('text')
									.attr('y', ch)
									.attr('x', w / 2)
									.attr('dx', '1em')
									.style('text-anchor', 'middle')
									.style('font-weight', 'bold')
									.text('Year');
			// loop through the nest for each symbol / key and draw lines
			var states = svgChart.selectAll('.state-line')
									.data(stateNest, function(dt) {return dt.key;} )
									.enter()
									.append('g')
									.style('fill', 'none')
									.attr('class', 'state-line');
			// draw the dots
			var stateDots = svgChart.append('g')
									.attr('class','state-dots')
									.selectAll('.dot')
									.data(data)
									.enter()
									.append('circle')
									.attr('class','dot')
									.attr('data-state', function(dt) {return dt['State'].replace(/\s+/g, '-');} )
									.attr('r', 6)
									.attr('cx', function(dt) {return x(dt['Year'])} )
									.attr('cy', function(dt) {return -(margins.top) + y(dt['Age-Adjusted Rate'])} )
									.attr('fill', function(dt) {return lineColor(dt['State']);} )
									.attr('opacity', 0)
									.style('pointer-events', 'none');
			// draw the tooltips
			stateDots.on('mouseover', function(dt) {
				if(d3.select(this).attr('opacity') == 1) {
					tool.transition()
						.duration(200)
						.style('opacity',0);
					tool.transition()
						.duration(100)
						.style('opacity',0.9)
						.style('left', (d3.event.pageX) + 'px')
						.style('top', (d3.event.pageY) + 'px');
					tool.html('<h3>' + dt['State'] + '</h3>' + '<b>Year:</b> ' + dt['Year'] + '<br><b>Suicide Rate:</b> ' + dt['Age-Adjusted Rate']);
				}
			})
			.on('mouseout', function() {
				tool.transition()
					.delay(500)
					.duration(200)
					.style('opacity',0);
			});
			// draw the lines
			var stateLines = states.append('path')
									.attr('class', 'line')
									.attr('d', function(dt) {return suiLine(dt.values);} )
									.attr('data-state', function(dt) {return dt.key.replace(/\s+/g, '-');} )
									.style('stroke', function(dt) {return lineColor(dt.key);} )
									.each(function(dt) {dt.totalLength = this.getTotalLength();} )
									.attr('data-stroke', function(dt) {return dt.totalLength;} )
									.attr('stroke-dasharray', function(dt) {return dt.totalLength + ' ' + dt.totalLength;} )
									.attr('stroke-dashoffset', function(dt) {return dt.totalLength;} );
/**********
* 
* End state chart functions
* 
**********/ 
			// display All States data by default
			d3.select('.state-line path[data-state="US-Average"]')
				.transition()
				.duration(500)
				.ease('linear')
				.attr('stroke-dashoffset', 0);
			d3.selectAll('.dot[data-state="US-Average"]')
				.transition()
				.duration(500)
				.ease('linear')
				.attr('opacity', 1)
				.style('pointer-events', 'visibleFill');
			// clear the selection of states
			$('#clear-selection').on('click', function(e) {
				e.preventDefault();
				$('path.stats--active').attr('class','');
				d3.selectAll('path.line:not([data-state="US-Average"])').each(function(dt) {
					var strokeArray = d3.select(this).attr('data-stroke');
					d3.select(this).attr('stroke-dashoffset', strokeArray);
				});
				d3.selectAll('.dot:not([data-state="US-Average"])').attr('opacity', 0);
				d3.selectAll('#state_body tr').classed('stats--hidden', true);
				d3.selectAll('.fact-sheet').remove();
				tableState();
			});
		});
	});
});      
// end of jQuery document function
</script>
<?php get_footer(); ?>
