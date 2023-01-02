<?php 

$page_name = "property";

$site_name = "Closin";

$pg_title = $site_name;
$pg_desc = "";

$og_url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$og_type = "article";
$og_title = $pg_title;
$og_desc = $pg_desc;
$og_img = "closin.com/images/closin_og.jpg";

require 'header.php';

?>

<?php require 'top.php';?>
	
	<?php require 'section_mobile_menu.php' ?>
	
	<?php require 'section_gallery.php' ?>

	<section class="relative h-auto mb-24 md:mb-32" style="">
		
		<?php require 'section_header.php' ?>
		
		<div class="flex w-full relative justify-center max-w-7xl mx-auto mt-24">			
			
			<div class="md:flex max-w-7xl w-full h-full px-5 lg:px-10">
			
				<div class="w-full md:w-1/2 relative z-50 pb-10 md:pr-5 md:pb-0 lg:pr-20">
				
					<div class="w-full mb-6 text-right flex items-center">
					
						<div class="rounded-full inline-block mr-3 bg-light-blue" style="width: 14px; height: 14px;"></div>
					
						<div class="text-md font-normal tracking-widest inline-block text-main-blue">EXAMPLE PROPERTY</div>
						
					</div>
					
					<div class="text-4xl md:text-5xl lg:text-6xl font-normal tracking-tight text-main-blue">
						14384 Armond Lane
					</div>
					
					<div class="text-2xl md:text-3xl lg:text-4xl font-normal tracking-tight lg:py-2 text-main-gray">
						Huntsville, AL 35810
					</div>
					
					<div class="w-full px-3 py-4 md:px-5 lg:px-12 md:py-10 text-main-blue mt-5 bg-light-blue">
					
						<div class="flex md:block lg:flex px-2 mb-2">
							
							<div class="w-1/2 md:w-full lg:w-1/2 border-r md:border-r-0 lg:border-r border-main-blue">
								
								<div class="text-sm font-normal tracking-widest flex items-center">
									
									PROJECTED IRR
								
									<span class="flex items-center justify-center rounded-full text-white ml-2 font-bold cursor-pointer" style="background: rgba(8, 31, 92, 0.30); width: 14px; height: 14px; font-size: 10px;" data-toggle="tooltip" data-placement="bottom" title="The Internal Rate of Return is he yearly return for an investment which combines the appreciation of the property and the cash payout. View the Financials section below for a breakdown.">i</span>
									
								</div>
								
								<div class="text-4xl md:text-5xl font-bold pt-2 break-words">18.64%</div>
							
							</div>
							
							<div class="w-1/2 md:w-full lg:w-1/2 pl-4 md:pl-0 lg:pl-10 md:pt-8 lg:pt-0">
								
								<div class="text-sm font-normal tracking-widest flex items-center">
								
									CASH PAYOUT
								
									<span class="flex items-center justify-center rounded-full text-white ml-2 font-bold cursor-pointer" style="background: rgba(8, 31, 92, 0.30); width: 14px; height: 14px; font-size: 10px;" data-toggle="tooltip" data-placement="bottom" title="This is the cash percentage return you can expect from investing in this property. For example, a $100 investment that yielded a cash payout of $6.44 each year would have a 6.44% cash return. View the Financials section below for a breakdown.">i</span>
								
								</div>
								
								<div class="text-4xl md:text-5xl font-normal pt-2">6.44%</div>
							
							</div>
							
						</div>
											
						<div class="flex px-2">							
					
							<div class="w-full pt-8">
								
								<div class="w-full">
								
									<a class="font-normal rounded-full px-8 py-5 bg-main-blue text-white inline-block w-full" href="/get-notified">Invest Now<img src="/images/icon-analytics-inverted.png" class="inline-block float-right mt-1"></a>
									<div class="w-full text-center text-xs font-normal text-white uppercase pt-3" style="color: rgba(8, 31, 92, 0.5);">$100 Minimum</div>
									
								</div>
														
							</div>
							
						</div>
					
					</div>
					
					<div class="w-full md:mr-5 lg:mr-10 p-6 py-5 md:py-5 md:p-6 bg-main-blue h-auto flex items-center">
						<img src="/images/info_b.png" class="">
						<div class="pl-4 text-light-blue" style="line-height: 18px;">
							<span class="font-bold">Closin has not yet secured a property for investment.</span><br>						
							<span class="font-normal">This property is for illustrative purposes only.</span>
						</div>
					</div>
	
				</div>
			
				<div class="w-full md:w-1/2 pt-0 md:pt-0" style="background: url(/images/property_img.jpg) no-repeat top center; background-size: cover; min-height: 275px;">
				
					<a id="btn-gallery" class="font-normal rounded-full px-6 py-3 mt-8 mr-7 bg-light-blue text-main-blue inline-block w-auto float-right" href="#">
						<span class="flex items-center"><i class="far fa-eye mr-2"></i> See More Photos</span>
					</a>
					
					<script>
						$("#btn-gallery").click(function() {
							
							$("#section-gallery-content-box").html("").load("section_gallery_content");
							$("#section-gallery").fadeIn("fast");
							
							return false;
						});				
					</script>
					
				</div>
			
			</div>
			
		</div>
		
	</section>
	
	<section id="section_2" class="w-full h-auto mt-20 mb-40">
		
		<div class="flex w-full relative justify-center max-w-7xl mx-auto">			
			
			<div class="flex max-w-7xl w-full h-full mx-5 lg:mx-10">
			
				<div class="w-full relative lg:flex mx-5 lg:mx-16">
		
					<div class="panels_menu border-b lg:border-b-0 lg:border-r pb-5 lg:pb-0 text-main-gray font-normal grid grid-cols-2 md:grid-cols-3 lg:block" style="border-color: rgba(8, 31, 92, 0.14);">
						<div class="w-full">
							<div class="w-auto inline-block py-3 p-menu p-active-menu text-main-blue">
								<a href="#" class="text-lg lg:text-2xl inline-block pl-14 flex items-center" style="background-image: url(/images/icon-home.png); height: 42px;" data-panel-id="1">Details</a>
							</div>
						</div>
						<div class="w-full">
							<div class="w-auto inline-block py-3 p-menu">
								<a href="#" class="text-lg lg:text-2xl inline-block pl-14 flex items-center" style="background-image: url(/images/icon-candle-chart.png); height: 42px;" data-panel-id="2">Financials</a>
							</div>
						</div>
						<div class="w-full">
							<div class="w-auto inline-block py-3 p-menu">
								<a href="#" class="text-lg lg:text-2xl inline-block pl-14 flex items-center" style="background-image: url(/images/icon-date.png); height: 42px;" data-panel-id="3">Buying Process</a>
							</div>
						</div>
						<div class="w-full">
							<div class="w-auto inline-block py-3 p-menu">
								<a href="#" class="text-lg lg:text-2xl inline-block pl-14 flex items-center" style="background-image: url(/images/icon-geolocation.png); height: 42px;" data-panel-id="4">Market</a>
							</div>
						</div>
						
						<script>
							$(".p-menu").on({
								mouseenter: function () {
									if(!$(this).hasClass("p-active-menu")){
										$(this).addClass("p-active-menu-h text-main-blue");
										//$(this).removeClass("font-normal");
									}
								},
								mouseleave: function () {
									if(!$(this).hasClass("p-active-menu")){
										$(this).removeClass("p-active-menu-h text-main-blue");
										//$(this).addClass("font-normal");
									}
								}
							});
							$(".p-menu a").click(function() {
								if(!$(this).hasClass("p-active-menu")){
									$(".p-menu").removeClass("p-active-menu text-main-blue p-active-menu-h");
									$(this).closest(".p-menu").addClass("p-active-menu text-main-blue");
									//$(this).removeClass("font-normal");
								}
								
								var panelID = $(this).data("panel-id");
								
								$(".panel_box").hide();
								$(".panel_"+panelID).show();
								
								return false;
							});				
						</script>
						
					</div>
					
					<div class="panels_container mt-10 lg:mt-0">
					
						<div class="panel_1 panel_box px-0 lg:px-5 lg:pl-20">
					
							<div class="w-full grid grid-cols-2 md:grid-cols-5 gap-3">
							
								<div class="border rounded-md p-3" style="border-color: rgba(8, 31, 92, 0.14);">
								
									<img src="/images/icon-bed.png">
									
									<div class="text-md font-normal pt-2 text-main-gray">3 Beds</div>
								
								</div>
							
								<div class="border rounded-md p-3" style="border-color: rgba(8, 31, 92, 0.14);">
								
									<img src="/images/icon-bath.png">
									
									<div class="text-md font-normal pt-2 text-main-gray">2 Baths</div>
								
								</div>
							
								<div class="border rounded-md p-3" style="border-color: rgba(8, 31, 92, 0.14);">
								
									<img src="/images/icon-floor.png">
									
									<div class="text-md font-normal pt-2 text-main-gray">1400 sqft</div>
								
								</div>
							
								<div class="border rounded-md p-3" style="border-color: rgba(8, 31, 92, 0.14);">
								
									<img src="/images/icon-house.png">
									
									<div class="text-md font-normal pt-2 text-main-gray">Single Family</div>
								
								</div>
							
								<div class="border rounded-md p-3" style="border-color: rgba(8, 31, 92, 0.14);">
								
									<img src="/images/icon-users.png">
									
									<div class="text-md font-normal pt-2 text-main-gray">Occupied</div>
								
								</div>
							
							</div>
							
							<div class="mt-12 lg:mt-20">
							
								<div class="text-2xl md:text-3xl lg:text-4xl font-normal text-main-blue">
									Investment Summary
								</div>
								
								<div class="flex mt-5">
									
									<div class="w-1/3 md:w-1/4 border-l-2 border-light-blue pl-2 md:pl-4">
										<div class="text-md font-normal text-main-gray">Total Investment:</div>
										<div class="text-md font-bold text-main-blue">$180,500</div>
									</div>
									<div class="w-1/3 md:w-1/4 border-l-2 border-light-blue pl-2 md:pl-4">
										<div class="text-md font-normal text-main-gray">Token Price:</div>
										<div class="text-md font-bold text-main-blue">$100</div>
									</div>
									<div class="w-1/3 md:w-2/4 border-l-2 border-light-blue pl-2 md:pl-4">
										<div class="text-md font-normal text-main-gray">Total Tokens:</div>
										<div class="text-md font-bold text-main-blue">1805 <span class="font-normal">(385 tokens left)</span></div>
									</div>
									
								</div>
							
							</div>
							
							<div class="mt-12 lg:mt-20">
							
								<div class="text-2xl md:text-3xl lg:text-4xl font-normal text-main-blue">
									About This Property
								</div>
								
								<div class="text-md font-normal text-main-gray mt-5">
									This property is a fully renovated 3 bedroom 2 bathroom single family located in a trending neighborhood of Huntsville. The following renovations have been completed: New kitchen, new bathroom, new luxury vinyl plank flooring, removed carpets, new rear security door, new glass-block windows in basement, new hot water tank, new electrical, new handrail on left side of steps, repaired lattice, repaired siding & fascia, new garage roof, landscaping, interior & exterior paint.
									<br><br>
									The property is not presently rented and we anticipate securing a long term tenant at $1,400 per month within the first month of ownership.
								</div>
							
							</div>
							
							<div class="mt-12 lg:mt-20">
							
								<div class="text-2xl md:text-3xl lg:text-4xl font-normal text-main-blue">
									Location
								</div>
								
								<div class="text-md font-normal text-main-gray mt-5">
									<img src="/images/location_map.png" class="w-full">
								</div>
							
							</div>
							
							<div class="mt-12 lg:mt-20 hidden">
							
								<div class="text-2xl md:text-3xl lg:text-4xl font-normal text-main-blue">
									Documents
								</div>
								
								<div class="md:flex md:items-center text-md font-normal text-main-gray mt-5">
									
									<div class="w-full md:w-3/5 lg:w-3/4 border-l-2 border-light-blue pl-4 mb-3 md:mb-0">
										<div class="text-2xl font-normal text-main-gray break-words pr-2">
											https://docs.closin.com/8Ba001
										</div>
									</div>
									<div class="w-full md:w-2/5 lg:w-1/4 md:text-right">
										<a class="font-normal rounded-full px-6 py-2 text-white inline-block bg-main-blue text-center" href="#" data-value-text="section_learn" style="min-width: 148px;">
											<i class="fas fa-arrow-alt-circle-down pr-2"></i> Download
										</a>
									</div>
								</div>
							
							</div>
						
						</div>
						
					
						<div class="panel_2 panel_box px-0 lg:px-5 lg:pl-20" style="display: none;">
						
							<div class="w-full">
							
								<div class="flex pb-2 lg:pb-4">
								
									<div class="w-2/3 text-2xl md:text-3xl lg:text-4xl font-normal text-main-blue">
										Total Investment
									</div>
									
									<div class="w-1/3 text-2xl md:text-3xl lg:text-4xl font-bold text-main-blue text-right">
										$180,500
									</div>
									
								</div>
								
								<div class="flex mt-3 lg:mt-5 font-normal">
									
									<div class="w-2/3 border-l-2 border-light-blue pl-2 md:pl-4">
										<div class="text-lg lg:text-2xl text-main-gray inline-block">Property purchase price</div>
									</div>
									<div class="w-1/3 text-right">
										<div class="text-lg lg:text-2xl text-main-blue inline-block">$165,000</div>
									</div>
									
								</div>
								
								<div class="flex mt-3 lg:mt-5 font-normal">
									
									<div class="w-2/3 border-l-2 border-light-blue pl-2 md:pl-4">
										<div class="text-lg lg:text-2xl text-main-gray inline-block">Closing costs</div>
									</div>
									<div class="w-1/3 text-right">
										<div class="text-lg lg:text-2xl text-main-blue inline-block">$1,500</div>
									</div>
									
								</div>
								
								<div class="flex mt-3 lg:mt-5 font-normal">
									
									<div class="w-2/3 border-l-2 border-light-blue pl-2 md:pl-4">
										<div class="text-lg lg:text-2xl text-main-gray inline-block">Maintenance reserve</div>
									</div>
									<div class="w-1/3 text-right">
										<div class="text-lg lg:text-2xl text-main-blue inline-block">$5,000</div>
									</div>
									
								</div>
								
								<div class="flex mt-3 lg:mt-5 font-normal">
									
									<div class="w-2/3 border-l-2 border-light-blue pl-2 md:pl-4">
										<div class="text-lg lg:text-2xl text-main-gray inline-block">Vacancy reserve</div>
									</div>
									<div class="w-1/3 text-right">
										<div class="text-lg lg:text-2xl text-main-blue inline-block">$3,000</div>
									</div>
									
								</div>
								
								<div class="flex mt-3 lg:mt-5 font-normal">
									
									<div class="w-2/3 border-l-2 border-light-blue pl-2 md:pl-4">
										<div class="text-lg lg:text-2xl text-main-gray inline-block">Closin listing fee</div>
									</div>
									<div class="w-1/3 text-right">
										<div class="text-lg lg:text-2xl text-main-blue inline-block">$6,000</div>
									</div>
									
								</div>
							
							</div>
							
							<div class="mt-12 lg:mt-20">
							
								<div class="flex pb-2 lg:pb-4">
								
									<div class="w-2/3 text-2xl md:text-3xl lg:text-4xl font-normal text-main-blue">
										Annual Gross Rents
									</div>
									
									<div class="w-1/3 text-2xl md:text-3xl lg:text-4xl font-bold text-main-blue text-right">
										$16,800
									</div>
									
								</div>
								
								<div class="flex mt-3 lg:mt-5 font-normal">
									
									<div class="w-2/3 border-l-2 border-light-blue pl-2 md:pl-4">
										<div class="text-lg lg:text-2xl text-main-gray inline-block">Property management</div>
									</div>
									<div class="w-1/3 text-right">
										<div class="text-lg lg:text-2xl text-main-blue inline-block">$1,680</div>
									</div>
									
								</div>
								
								<div class="flex mt-3 lg:mt-5 font-normal">
									
									<div class="w-2/3 border-l-2 border-light-blue pl-2 md:pl-4">
										<div class="text-lg lg:text-2xl text-main-gray inline-block">Property taxes</div>
									</div>
									<div class="w-1/3 text-right">
										<div class="text-lg lg:text-2xl text-main-blue inline-block">$2,100</div>
									</div>
									
								</div>
								
								<div class="flex mt-3 lg:mt-5 font-normal">
									
									<div class="w-2/3 border-l-2 border-light-blue pl-2 md:pl-4">
										<div class="text-lg lg:text-2xl text-main-gray inline-block">Homeowners insurance</div>
									</div>
									<div class="w-1/3 text-right">
										<div class="text-lg lg:text-2xl text-main-blue inline-block">$1,200</div>
									</div>
									
								</div>
								
								<div class="flex mt-3 lg:mt-5 font-normal">
									
									<div class="w-2/3 border-l-2 border-light-blue pl-2 md:pl-4">
										<div class="text-lg lg:text-2xl text-main-gray inline-block">LLC administration and filing fees</div>
									</div>
									<div class="w-1/3 text-right">
										<div class="text-lg lg:text-2xl text-main-blue inline-block">$200</div>
									</div>
									
								</div>
								
								<div class="flex mt-3 lg:mt-5 font-normal">
									
									<div class="w-2/3 border-l-2 border-light-blue pl-2 md:pl-4">
										<div class="text-lg lg:text-2xl text-main-gray inline-block">Annual cash flow</div>
									</div>
									<div class="w-1/3 text-right">
										<div class="text-lg lg:text-2xl text-main-blue inline-block">$11,620</div>
									</div>
									
								</div>
								
								<div class="flex mt-3 lg:mt-5 font-normal">
									
									<div class="w-2/3 border-l-2 border-light-blue pl-2 md:pl-4">
										<div class="text-lg lg:text-2xl text-main-gray inline-block">Monthly cash flow</div>
									</div>
									<div class="w-1/3 text-right">
										<div class="text-lg lg:text-2xl text-main-blue inline-block">$968</div>
									</div>
									
								</div>
							
							</div>		
							
							<div class="mt-12 lg:mt-20">
							
								<div class="flex pb-2 lg:pb-4">
								
									<div class="w-2/3 text-2xl md:text-3xl lg:text-4xl font-normal text-main-blue">
										Total returns (IRR)
									</div>
									
									<div class="w-1/3 text-2xl md:text-3xl lg:text-4xl font-bold text-main-blue text-right">
										18.64%
									</div>
									
								</div>
								
								<div class="flex mt-3 lg:mt-5 font-normal">
									
									<div class="w-2/3 border-l-2 border-light-blue pl-2 md:pl-4">
										<div class="text-lg lg:text-2xl text-main-gray inline-block">Projected appreciation</div>
									</div>
									<div class="w-1/3 text-right">
										<div class="text-lg lg:text-2xl text-main-blue inline-block">12.20%</div>
									</div>
									
								</div>
								
								<div class="flex mt-3 lg:mt-5 font-normal">
									
									<div class="w-2/3 border-l-2 border-light-blue pl-2 md:pl-4">
										<div class="text-lg lg:text-2xl text-main-gray inline-block">Cash on cash return</div>
									</div>
									<div class="w-1/3 text-right">
										<div class="text-lg lg:text-2xl text-main-blue inline-block">6.44%</div>
									</div>
									
								</div>
								
								<div class="flex mt-3 lg:mt-5 font-normal">
									
									<div class="w-2/3 border-l-2 border-light-blue pl-2 md:pl-4">
										<div class="text-lg lg:text-2xl text-main-gray inline-block">Cap rate</div>
									</div>
									<div class="w-1/3 text-right">
										<div class="text-lg lg:text-2xl text-main-blue inline-block">6.44%</div>
									</div>
									
								</div>
							
							</div>
							
							<?php
							
							/*
							echo '
							
							<div class="mt-12 lg:mt-20">
							
								<div class="w-full" style="">
					
									<div class="flex relative">
									
										<div class="text-3xl font-normal relative mt-2" style="width: 46px;">
											
											<div class="flex py-1 relative bg-white z-50" style="height: 24px;">
												<div class="rounded-full inline-block bg-main-blue" style="width: 14px; height: 14px;"></div>
											</div>
											
										</div>
										
										<div class="timeline_detail w-full block w-full2 pb-8 z-40">
											<div class="text-2xl md:text-3xl lg:text-4xl font-normal text-main-blue">
												Annual Gross Rents
											</div>
											
											<div class="w-auto mt-8 lg:mt-10">
										
												<div class="flex font-normal">
													
													<div class="w-2/3">
														<div class="text-lg lg:text-2xl text-main-gray inline-block">Tokens Purchased</div>
													</div>
													<div class="w-1/3 text-right">
														<div class="text-lg lg:text-2xl text-main-gray font-bold inline-block">22/$1,100</div>
													</div>
													
												</div>
												
												<div class="flex items-center mt-5 lg:mt-7 relative">
												
													<div class="bg-white rounded-full mx-auto absolute z-50" style="width: 24px; height: 24px; box-shadow: 0px 3px 10px rgb(16 24 40 / 10%); left: 0; right: 0;"></div>
													<div class="bg-light-blue py-1 rounded-full" style="width: 50%"></div>
													<div class="bg-light-gray py-1 rounded-full" style="width: 50%"></div>
												
												</div>
												
												<div class="flex items-center my-3 relative">
												
													<div class="w-1/6 mx-auto absolute text-center z-50" style="left: 0; right: 0;">
														<div class="text-sm lg:text-lg text-main-blue font-normal inline-block">50%</div>
													</div>
													
													<div class="text-sm lg:text-lg text-main-blue font-normal inline-block">1</div>
													
												</div>
												
											</div>
											
											<div class="w-auto mt-14 lg:mt-16">
										
												<div class="flex font-normal">
													
													<div class="w-2/3">
														<div class="text-lg lg:text-2xl text-main-gray inline-block">Appreciation</div>
													</div>
													<div class="w-1/3 text-right">
														<div class="text-lg lg:text-2xl text-main-gray font-bold inline-block">60%</div>
													</div>
													
												</div>
												
												<div class="flex items-center mt-5 lg:mt-7 relative">
												
													<div class="bg-white rounded-full mx-auto absolute z-50" style="width: 24px; height: 24px; box-shadow: 0px 3px 10px rgb(16 24 40 / 10%); left: 60%; right: 40%;"></div>
													<div class="bg-light-blue py-1 rounded-full" style="width: 60%"></div>
													<div class="bg-light-gray py-1 rounded-full" style="width: 40%"></div>
												
												</div>
												
												<div class="flex items-center my-3 relative">
												
													<div class="w-1/6 mx-auto absolute text-left z-50" style="left: 60%; right: 40%;">
														<div class="text-sm lg:text-lg text-main-blue font-normal inline-block">60%</div>
													</div>
													
													<div class="text-sm lg:text-lg text-main-blue font-normal inline-block">1</div>
													
												</div>
												
											</div>
											
											<div class="w-auto mt-14 lg:mt-16">
										
												<div class="flex font-normal">
													
													<div class="w-2/3">
														<div class="text-lg lg:text-2xl text-main-gray inline-block">Cash on Cash Return</div>
													</div>
													<div class="w-1/3 text-right">
														<div class="text-lg lg:text-2xl text-main-gray font-bold inline-block">72%</div>
													</div>
													
												</div>
												
												<div class="flex items-center mt-5 lg:mt-7 relative">
												
													<div class="bg-white rounded-full mx-auto absolute z-50" style="width: 24px; height: 24px; box-shadow: 0px 3px 10px rgb(16 24 40 / 10%); left: 72%; right: 28%;"></div>
													<div class="bg-light-blue py-1 rounded-full" style="width: 72%"></div>
													<div class="bg-light-gray py-1 rounded-full" style="width: 28%"></div>
												
												</div>
												
												<div class="flex items-center my-3 relative">
												
													<div class="w-1/6 mx-auto absolute text-left z-50" style="left: 72%; right: 28%;">
														<div class="text-sm lg:text-lg text-main-blue font-normal inline-block">72%</div>
													</div>
													
													<div class="text-sm lg:text-lg text-main-blue font-normal inline-block">1</div>
													
												</div>
												
											</div>
											
										</div>
																			
									</div>
							
									<div class="flex w-full relative">
									
										<div class="text-3xl font-normal text-white relative mt-2" style="width: 46px;">
											
											<div class="flex py-1 relative bg-white z-50" style="height: 24px;">
												<div class="rounded-full inline-block bg-main-blue" style="width: 14px; height: 14px;"></div>
											</div>
											
										</div>
										
										<div class="w-full pb-0 z-40">
											<div class="text-2xl md:text-3xl lg:text-4xl font-normal text-main-blue">
												Est. Investment Value over time based on above assumptions
											</div>
										</div>
									
									</div>
									
									<div class="w-full md:pl-11">
										
										<div class="w-auto mt-8 lg:mt-10">
											<img src="/images/investment_value_graph.png" class="">
										</div>
										
										<div class="w-full relative text-main-gray text-sm md:text-base mt-10">
											
											<div class="w-full flex items-center border-b border-light-gray py-4 text-center">
												<div class="w-4/12">&nbsp;</div>
												<div class="w-2/12 text-main-blue">Year 5</div>
												<div class="w-2/12 text-main-blue">Year 10</div>
												<div class="w-2/12 text-main-blue">Year 20</div>
												<div class="w-2/12 text-main-blue">Year 30</div>
											</div>
											
											<div class="w-full flex items-center border-b border-light-gray py-4 text-center font-normal">
												<div class="w-4/12 text-main-blue text-left">Cumulative Net Cash flow</div>
												<div class="w-2/12">$3,135</div>
												<div class="w-2/12">$6,270</div>
												<div class="w-2/12">$12,540</div>
												<div class="w-2/12">$18,810</div>
											</div>
											
											<div class="w-full flex items-center border-b border-light-gray py-4 text-center font-normal">
												<div class="w-4/12 text-main-blue text-left">Cumulative Appreciation Gain</div>
												<div class="w-2/12">$3,300</div>
												<div class="w-2/12">$6,600</div>
												<div class="w-2/12">$13,200</div>
												<div class="w-2/12">$19,800</div>
											</div>
											
											<div class="w-full flex items-center border-b-4 border-light-blue py-4 text-center font-normal">
												<div class="w-4/12 text-main-blue text-left">Your Investment</div>
												<div class="w-2/12">$1,100</div>
												<div class="w-2/12">$1,100</div>
												<div class="w-2/12">$1,100</div>
												<div class="w-2/12">$1,100</div>
											</div>
											
											<div class="w-full flex items-center py-4 text-center">
												<div class="w-4/12 text-main-blue text-left">Total Investment value</div>
												<div class="w-2/12 text-main-blue">$7,535</div>
												<div class="w-2/12 text-main-blue">$13,970</div>
												<div class="w-2/12 text-main-blue">$26,840</div>
												<div class="w-2/12 text-main-blue">$39,710</div>
											</div>
											
										</div>
									
									</div>
								
								</div>
							
							</div>
									
							';
							*/
							?>
							
						
						</div>
						
						
						<div class="panel_3 panel_box px-0 lg:px-5 lg:pl-20" style="display: none;">							
						
							<div class="w-full">
							
								<div class="flex pb-2 lg:pb-4">
								
									<div class="w-2/3 text-2xl md:text-3xl lg:text-4xl font-normal text-main-blue">
										Project Timeline
									</div>
									
								</div>
								
								<div class="w-full mt-3 lg:mt-5 font-normal">
					
									<div class="flex relative">
									
										<div class="text-3xl font-normal relative" style="width: 46px;">
											
											<div class="flex py-1 relative bg-white z-50" style="height: 24px;">
												<div class="rounded-full inline-block" style="background: #81EEF3; width: 14px; height: 14px;"></div>
											</div>
											
										</div>
										
										<div class="timeline_detail w-full2 pb-8 z-40">
											<div class="text-md font-bold tracking-widest block text-main-blue uppercase">August 13, 2022</div>
											<div class="text-md font-normal tracking-widest block text-main-blue uppercase">PROPERTY DUE DILIGENCE & PURCHASE PROPERTY (IN PROGRESS)</div>
											<div class="text-md font-normal pt-3 text-main-gray">
												Paperwork completed and LLC tokenized.
											</div>
										</div>
									
									</div>
							
									<div class="flex relative">
									
										<div class="text-3xl font-normal relative" style="width: 46px;">
											
											<div class="flex py-1 relative bg-white z-50" style="height: 24px;">
												<div class="rounded-full inline-block" style="background: #81EEF3; width: 14px; height: 14px;"></div>
											</div>
											
										</div>
										
										<div class="timeline_detail w-full pb-8 z-40">
											<div class="text-md font-bold tracking-widest block text-main-blue uppercase">August 17, 2022</div>
											<div class="text-md font-normal tracking-widest block text-main-blue uppercase">Token offering</div>
											<div class="text-md font-normal pt-3 text-main-gray">
												Property tokens available to purchase on Closin. Once purchased, tokens will be stored in your Closin account.
											</div>
										</div>
									
									</div>
							
									<div class="flex relative">
									
										<div class="text-3xl font-normal relative" style="width: 46px;">
											
											<div class="flex py-1 relative bg-white z-50" style="height: 24px;">
												<div class="rounded-full inline-block" style="background: #81EEF3; width: 14px; height: 14px;"></div>
											</div>
											
										</div>
										
										<div class="timeline_detail w-full pb-8 z-40">
											<div class="text-md font-bold tracking-widest block text-main-blue uppercase">September 17, 2022</div>
											<div class="text-md font-normal tracking-widest block text-main-blue uppercase">TOKEN OFFERING COMPLETE</div>
											<div class="text-md font-normal pt-3 text-main-gray">
												All tokens are sold or purchase window expires.
											</div>
										</div>
									
									</div>
							
									<div class="flex relative">
									
										<div class="text-3xl font-normal relative" style="width: 46px;">
											
											<div class="flex py-1 relative bg-white z-50" style="height: 24px;">
												<div class="rounded-full inline-block" style="background: #81EEF3; width: 14px; height: 14px;"></div>
											</div>
											
										</div>
										
										<div class="w-full pb-0 z-40">
											<div class="text-md font-bold tracking-widest block text-main-blue uppercase">September 24, 2022</div>
											<div class="text-md font-normal pt-3 text-main-gray">
												RECEIVE MONTHLY RENTAL DIVIDENDS
											</div>
											<div class="text-md font-normal pt-3 text-main-gray">
												Your cumulative rental income will be sent to you based on the day you invested. You will then begin to earn monthly rental dividends moving forward. You can choose to receive your rental income to your Closin account in USD or to your crypto wallet in USDC (a USD stablecoin).
											</div>
										</div>
									
									</div>
								
								</div>
								
							
							</div>
						
						</div>
						
						
						<div class="panel_4 panel_box px-0 lg:px-5 lg:pl-20" style="display: none;">							
						
							<div class="w-full">
							
								<div class="flex pb-2 lg:pb-4">
								
									<div class="w-2/3 text-2xl md:text-3xl lg:text-4xl font-normal text-main-blue">
										Why Huntsville?
									</div>
									
								</div>
								
								<div class="text-md font-normal pt-6 text-main-gray">
					
									The average price of homes in Huntsville have increased 26.8% this past 12 months and the average rents for 3 bedroom homes have increased over 13%. More than 31% of the homes in Huntsville are occupied by renters, with the average rent for a 3 bedroom property being $1,457 as of April 2022. Huntsville ranks the third-best place in the US to live in according to U.S. News & World Report.
									<br><br>
									Employment growth in Huntsville is 1.8% year-over-year, and the GDP of Huntsville has increased by more than 19% in the last decade. Huntsville is nicknamed The Rocket City as it remains the center of rocket-propulsion research in the U.S. Huntsville employers and organization's include Jeff Bezo's Blue Origin, NASA's Marshall Space Flight Center, the U.S. Army Aviation and Missile Command, Facebook's data center, Alabama A&M University, and many more.
									<br><br>
									Our A.I. ranks Huntsville in the top ten markets in the United States in terms of projected future appreciation.
								
								</div>
								
							
							</div>
							
							<div class="w-full mt-12 lg:mt-20">
							
								<div class="pb-2 lg:pb-4">
								
									<div class="w-2/3 text-2xl md:text-3xl lg:text-4xl font-normal text-main-blue">
										Huntsville historical growth
									</div>
									
									<div class="w-auto mt-8 lg:mt-10">
										<img src="/images/growth_graph.png" class="">
									</div>
									
									<div class="mt-8 text-sm font-normal text-main-gray">
						
										Historical rental returns for 3 bedroom homes taken from https://www.zumper.com/rent-research/huntsville-al
										<br><br>
										Historical appreciation returns for single family homes taken from https://www.zillow.com/huntsville-al/home-values/
									
									</div>
									
								</div>
								
							</div>
						
						</div>
						
						
					
					</div>		
		
				</div>
			
			</div>			
		
		</div>
		
	</section>
	
	
	<?php require 'section_faq.php';  ?>
	
	<?php require 'section_footer.php';  ?>
	
	
	
	<script>
		$(function () {
			$('[data-toggle="tooltip"]').tooltip();
		});
	</script>
	
	
	<script>
		$(".profile_box")
			.mouseenter(function() {
				$(this).find(".info_box").fadeIn("fast");
				$(this).find(".profile_name ").fadeOut("fast");
			})
			.mouseleave(function() {
				$(this).find(".info_box").fadeOut("fast");
				$(this).find(".profile_name ").fadeIn("fast");
		});
		$(".menu_item").click(function() {
			var value_text = $(this).data("value-text");
			console.log(value_text);
			$("html, body").animate({
				scrollTop: $("#"+value_text).offset().top
			}, 500);
			$("#mobile-menu").fadeOut("fast");
			$("#mobile-menu-button").fadeIn();
			return false;
		});
	</script>

	
<?php require 'footer.php';?>






