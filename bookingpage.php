<?php
/*
Template Name: BookingPage
*/
?>

<?php get_header(); ?>

		<div class="booking-wrapper">

			<div id="bookingbox">

				<div id="pickup">
					<div class="outer-blue">
					<div class="inner-blue">
    					<div class="form-group">
      						<input type="text" required="required"/>
      						<label for="input" class="control-label">PICK-UP</label>
      						<!-- <i class="bar"></i> -->
    					</div>			
    				</div>
    				</div>	
				</div>
				
				<div id="dropoff">
					
					<div class="outer-red">
					<div class="inner-red">
    					<div class="form-group">
      						<input type="text" required="required"/>
      						<label for="input" class="control-label">DROP-OFF</label>
      						<!-- <i class="bar"></i> -->
    					</div>	
    				</div>
    				</div>
				</div>
				
				<div class="thirdrow">
					<div class="thirdrowcolumn">
						<select id="grabjet-add-ons" multiple="multiple">
    						<option value="fa300">Flight Attendant (+ $300)</option>
    						<option value="fk100">Full Kitchen (+ $100)</option>
    						<option value="ma50">Massage (+ $50)</option>
    						<option value="ja180">Jacuzzi (+ $180)</option>
						</select>
					</div>
					<div class="thirdrowcolumn">
						<div class="col-xs-12">
							<input type='text' class="form-control" id='datetimepicker' placeholder="Choose Date" />
						</div>	
					</div>
					<div class="clearfix"></div>
				</div>

			</div>

			<button class="btn btn-lg btn-grab col-xs-12">
    			<span class="pull-left">Request a Jet</span><span class="pull-right">$<span id="total-price">199</span></span>
			</button>
			<div class="clearfix"></div>
		</div>



		<section class="threecolums">
			<div class="row">
				<div class="col-sm-4">
					<i class="fa fa-usd" aria-hidden="true"></i>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
				</div>
				<div class="col-sm-4">
					<i class="fa fa-plane" aria-hidden="true"></i>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
				</div>
				<div class="col-sm-4">
					<i class="fa fa-thumbs-o-up" aria-hidden="true"></i>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
				</div>
			</div>
		</section>

<?php get_footer(); ?>
