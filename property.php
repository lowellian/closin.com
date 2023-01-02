<?php 

$page_name = "index";

$site_name = "Closin - Invest In Tokenized Rental Properties";

$pg_title = $site_name;
$pg_desc = "Own part of a cash producing rental property for as little as $100. Collect your share of rental income and appreciation while we handle everything else.";

$og_url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$og_type = "article";
$og_title = $pg_title;
$og_desc = $pg_desc;
$og_img = "closin.com/images/closin_og.jpg";

require 'header.php';

?>


<div class="absolute" style="background: url(/images/main-bg.png); mix-blend-mode: color-dodge; opacity: 0.5; width: 100%; height: 2249px; background-size: auto; background-repeat: no-repeat; background-position: top right;"></div>

<?php require 'top.php';?>
	
	<?php require 'section_mobile_menu.php' ?>
	
	
	<?php require 'section_gallery.php' ?>
	

	<section class="relative" style="height: auto;">
		
		<?php require 'section_header.php' ?>
				
	</section>
	
	<section class="pt-16 md:pt-24 relative z-10">
	
		<div class="w-full relative justify-center max-w-7xl mx-auto pt-4 lg:pt-8">
			
			<div class="max-w-7xl relative mx-auto h-full md:mx-5 lg:mx-10 px-5 md:px-0">
			
				<div class="md:w-7/12 md:mt-20 mb-16 md:mb-0 md:float-right" style="max-width: 680px;">
				
					<div class="text-5xl md:text-6xl font-extrabold text-white title-text" style="line-height: 1.10;">
						<span class="text-light-blue">Obtain part ownership</span> of this property by minting one of its NFTs
					</div>
									
				</div>
				
				<div class="index-verified-box index-verified-box-p md:w-4/12 xl:w-5/12 text-white md:float-left overflow-hidden bg-tertiary-blue relative h-auto md:ml-5 lg:ml-10 xl:ml-16">
				
					<div class="w-full" style="background: url(/images/index-verified-property.png) no-repeat top center; height: 360px; background-size: cover;">
								
						<a class="font-normal rounded-xl px-2 py-2 inline-block w-full bg-light-blue text-main-blue text-center absolute top-0 left-0 text-xs m-5 flex items-center justify-center" href="/get-notifed" style="max-width: 104px;">Verified <img class="ml-2" src="/images/icon-check-dark.png"></a>
									
					</div>
					
					<div class="w-full bg-main-blue flex pl-6 pr-0 py-5" style="height: 157px;">
				
						<div class="w-10/12">
																
							<div class="font-medium md:font-bold text-2xl poppins">
								14384 Armond Lane
							</div>
							<div class="font-light text-base">Huntsville, AL 35810</div>
							<div class="font-light text-xs block mt-5">Edition 1 of 1,850</div>
													
						</div>
						
					</div>
										
					
					<div class="py-3">
						<span class="font-light text-xs block text-center">
							1 NFT = 1/1,850 ownership of 14384 Armond Lane and its rental income
						</span>
					</div>
				
				</div>
				
				<div class="clear-both"></div>
				
			</div>
			
		</div>
		
	</section>
	
	
	<section id="section_2" class="w-full h-auto mt-0 text-white mt-16 md:mt-10 lg:-mt-24">
	
		<div class="w-full relative justify-center max-w-7xl mx-auto pt-4 pb-0 lg:pt-8">
		
			<div class="max-w-7xl relative mx-auto h-full md:mx-5 lg:mx-10 p-5 md:p-7" style="background: linear-gradient(108.79deg, #081F5C 12.78%, rgba(8, 31, 92, 0) 121.5%); box-shadow: 0px 5px 20px -5px rgba(8, 31, 92, 0.1); border-radius: 20px;">
								
				<div class="border border-light-blue" style="border-radius: 20px; min-height: 300px;">
								
					<div class="w-full relative justify-center max-w-7xl mx-auto py-16 px-0 md:px-4 lg:px-16">
											
						<div class="max-w-7xl relative mx-auto h-full px-5 md:px-0">
						
							<div class="md:w-1/2 mb-10 md:mb-16 md:mb-0 md:float-right md:pl-5 lg:pl-10 text-lg">
														
								<a class="rounded-xl block pl-2.5 pr-7 py-2 bg-dark text-white font-thin -mt-24 md:-mt-28 my-4 relative border border-light-blue top-0 right-0" style="box-shadow: 0px 2px 25px 2px rgba(8, 31, 92, 0.05); z-index: 10000;" href="/get-notified">
									<span class="flex items-center">
										<img src="/images/icon-nft-address.png">
										<span class="inline-block pl-3">0xc0b1678de6e704c5c654be72ae...</span>
									</span>
									<img src="/images/arrow-up-right.png" class="absolute top-4 right-7">
								</a>
							
								<div class="font-medium md:font-bold text-2xl poppins mt-10 mb-6">
									Proof of Authenticity
								</div>
								
								<a class="rounded-xl block px-7 py-4 bg-dark text-white font-light my-4 relative" style="box-shadow: 0px 2px 25px 2px rgba(8, 31, 92, 0.05);" href="/get-notified">
									<span class="flex items-center">
										<img src="/images/icon-check-green.png">
										<span class="font-semibold inline-block pl-3 pr-1">Verified</span>by Closin
									</span>
									<img src="/images/arrow-up-right.png" class="absolute top-4 right-7">
								</a>
								
								<a class="rounded-xl block px-7 py-4 bg-dark text-white font-light my-4 relative" style="box-shadow: 0px 2px 25px 2px rgba(8, 31, 92, 0.05);" href="/get-notified">
									<span class="flex items-center">
										<img src="/images/icon-proof.png">
										<span class="inline-block pl-3">View on Etherscan</span>
									</span>
									<img src="/images/arrow-up-right.png" class="absolute top-4 right-7">
								</a>
								
								<div class="font-medium md:font-bold text-2xl poppins mt-10 relative">
									Unique Ownership									
									<a class="inline-block mb-2 cursor-pointer" data-toggle="tooltip" data-placement="bottom" title=""><img src="/images/icon-alert-circle.png"></a>
									
								</div>
								
								
								<div class="flex items-center mt-7 mb-8">
									<span class="inline-block font-semibold">20</span>
									<a class="inline-block font-light pl-7 text-light-blue" href="/get-notified">
										See Top 10 Owners
										<i class="fal fa-chevron-down text-light-blue pl-4"></i>
									</a>
								</div>
								
								
								<div class="w-full rounded-3xl px-3 py-4 md:px-5 lg:px-12 md:py-10 text-white bg-dark">
					
									<div class="flex md:block lg:flex px-2 mb-2">
										
										<div class="w-1/2 md:w-full lg:w-1/2">
											
											<div class="text-sm font-normal tracking-widest flex items-center text-light-blue">
												
												PROJECTED IRR
											
												<span class="flex items-center justify-center rounded-full text-white ml-2 font-bold cursor-pointer mb-2" style="background: rgba(8, 31, 92, 0.30); width: 14px; height: 14px; font-size: 10px;" data-toggle="tooltip" data-placement="bottom" title="The Internal Rate of Return is he yearly return for an investment which combines the appreciation of the property and the cash payout. View the Financials section below for a breakdown."><img src="/images/icon-alert-circle.png"></span>
												
											</div>
											
											<div class="text-4xl md:text-5xl font-bold pt-2 break-words">18.64%</div>
										
										</div>
										
										<div class="w-1/2 md:w-full lg:w-1/2 pl-4 md:pl-0 lg:pl-10 md:pt-8 lg:pt-0">
											
											<div class="text-sm font-normal tracking-widest flex items-center text-light-blue">
											
												CASH PAYOUT
											
												<span class="flex items-center justify-center rounded-full text-white ml-2 font-bold cursor-pointer mb-2" style="background: rgba(8, 31, 92, 0.30); width: 14px; height: 14px; font-size: 10px;" data-toggle="tooltip" data-placement="bottom" title="This is the cash percentage return you can expect from investing in this property. For example, a $100 investment that yielded a cash payout of $6.44 each year would have a 6.44% cash return. View the Financials section below for a breakdown."><img src="/images/icon-alert-circle.png"></span>
											
											</div>
											
											<div class="text-4xl md:text-5xl font-bold pt-2">6.44%</div>
										
										</div>
										
									</div>
														
									<div class="flex px-2 border-t border-tertiary-blue mt-6 md:mt-12">							
								
										<div class="w-full pt-5 md:pt-10">
											
											<div class="pt-0 md:pt-0 col-span-2 md:col-span-1 text-center">									
									
												<a class="font-normal rounded-full px-8 py-5 inline-block w-full bg-light-blue text-main-blue text-center" href="/get-notified" style="max-width: 200px;">Invest Now</a>
												<div class="w-full text-center text-xs font-thin text-white uppercase pt-3">*100 USDC Minimum</div>
											
											</div>
																	
										</div>
										
									</div>
								
								</div>
								
								
								
								<div class="font-medium md:font-bold text-2xl poppins mt-10 mb-6">
									Gallery
								</div>							
								
								<div class="w-full grid grid-cols-2 md:grid-cols-3 gap-2 items-center">
																
									<a class="w-full block btn-gallery-item" style="height: 120px; background: url(/images/property/ab5c2d88302fde6795bd452df532f787.jpg) no-repeat top center; background-size: cover;" href="#" data-value-id="1"></a>
									<a class="w-full block btn-gallery-item" style="height: 120px; background: url(/images/property/5efc3e7b758702a2991af90e693f4dfb.jpg) no-repeat top center; background-size: cover;" href="#" data-value-id="2"></a>
									<a class="w-full block btn-gallery-item" style="height: 120px; background: url(/images/property/470c7a7e93b44189426fae8ed2847007.jpg) no-repeat top center; background-size: cover;" href="#" data-value-id="7"></a>
									<a class="w-full block btn-gallery-item" style="height: 120px; background: url(/images/property/3348fa5e9359cafc560c55452c553131.jpg) no-repeat top center; background-size: cover;" href="#" data-value-id="8"></a>
									<a class="w-full block btn-gallery-item" style="height: 120px; background: url(/images/property/5092e5e2ed9d0187cc5a251848e8591d.jpg) no-repeat top center; background-size: cover;" href="#" data-value-id="5"></a>
									
									<a class="w-full btn-gallery block flex items-center justify-center" style="height: 120px; background: url(/images/property/property-more-image.png) no-repeat top center; background-size: cover;" href="#">
										<span class="text-center font-light text-lg block">+6<br>more</span>
									</a>
									<script>
										$(".btn-gallery-item").click(function() {
											var gallery_id = $(this).data("value-id");	
											$("#section-gallery-content-box").html("").load("section_gallery_content.php?gid="+gallery_id+"&ms=" + new Date().getTime());
											$("#section-gallery").fadeIn("fast");
											
											return false;
										});	
										$(".btn-gallery").click(function() {
											
											$("#section-gallery-content-box").html("").load("section_gallery_content.php");
											$("#section-gallery").fadeIn("fast");
											
											return false;
										});	
									</script>

								</div>
					
							
							</div>
							
							<div class="md:w-1/2 text-white md:float-left overflow-hidden w-full h-auto">
							
								<div class="w-full md:float-left rounded-3xl px-3 py-4 md:px-5 lg:px-12 md:py-10 text-white bg-dark">
					
									<div class="w-full grid grid-cols-3 gap-3">
							
										<div class="border rounded-md p-3" style="border-color: rgba(8, 31, 92, 0.14);">
										
											<img src="/images/icon-bed-w.png" class="mx-auto">
											
											<div class="text-xl font-medium pt-2 text-white text-center">3 Beds</div>
										
										</div>
									
										<div class="border rounded-md p-3" style="border-color: rgba(8, 31, 92, 0.14);">
										
											<img src="/images/icon-bath-w.png" class="mx-auto">
											
											<div class="text-xl font-medium pt-2 text-white text-center">2 Baths</div>
										
										</div>
									
										<div class="border rounded-md p-3" style="border-color: rgba(8, 31, 92, 0.14);">
										
											<img src="/images/icon-floor-w.png" class="mx-auto">
											
											<div class="text-xl font-medium pt-2 text-white text-center">1400 sqft</div>
										
										</div>
									
									</div>
									
									<div class="w-full grid grid-cols-2 gap-3 mt-4">
							
										<div class="border rounded-md p-3 pl-10" style="border-color: rgba(8, 31, 92, 0.14);">
										
											<img src="/images/icon-house-w.png" class="mx-auto">
											
											<div class="text-xl font-medium pt-2 text-white text-center">Single Family</div>
										
										</div>
									
										<div class="border rounded-md p-3 pr-10" style="border-color: rgba(8, 31, 92, 0.14);">
										
											<img src="/images/icon-users-w.png" class="mx-auto">
											
											<div class="text-xl font-medium pt-2 text-white text-center">Occupied</div>
										
										</div>
									
									</div>

								
								</div>
								
								<div class="clear-both"></div>
								
								<div class="font-medium md:font-bold text-2xl poppins mt-10 mb-6 text-light-blue">
									Investment Summary
								</div>
								
								<div class="grid grid-cols-2 text-lg my-5">
									<div class="w-full">
										<div class="font-thin py-1">
											Total Investment:
										</div>
										<div class="font-semibold py-1">
											$180,500 USDC
										</div>
									</div>
									<div class="w-full">
										<div class="font-thin py-1">
											Token Price:
										</div>
										<div class="font-semibold py-1">
											Token Price:
										</div>
									</div>
								</div>
								
								<div class="grid grid-cols-1 text-lg my-5">
									<div class="w-full">
										<div class="font-thin py-1">
											Total Tokens:
										</div>
										<div class="font-semibold py-1">
											1805 <span class="font-thin">(385 tokens left)</span>
										</div>
									</div>
								</div>
								
								
								<div class="font-medium md:font-bold text-2xl poppins mt-8 mb-6 text-light-blue">
									About This Property
								</div>
																
								<div class="font-thin text-lg mt-6 mb-6 text-white">
									This property is a fully renovated 3 bedroom 2 bathroom single family located in a trending neighborhood of Huntsville. The following renovations have been completed: New kitchen, new bathroom, new luxury vinyl plank flooring, removed carpets, new rear security door, new glass-block windows in basement, new hot water tank, new electrical, new handrail on left side of steps, repaired lattice, repaired siding & fascia, new garage roof, landscaping, interior & exterior paint.
									<br><br>
									The property is not presently rented and we anticipate securing a long term tenant at $1,400 per month within the first month of ownership.
								</div>
							
							</div>
							
							<div class="clear-both"></div>
							
							<div class="w-full mt-8 md:mt-4">
							
								<img src="/images/location-map.png" class="w-full rounded-xl">
							
							</div>
							
						</div>
						
					</div>
							
				
				</div>
				
			</div>
		
		</div>
	
	</section>
	
	
	
	
	
	
	
	
	<section id="section_3" class="w-full h-auto relative my-28 md:my-24">

		<div class="w-full relative poppins mx-auto text-white text-center md:text-left">
		
			<div class="text-4xl md:text-5xl font-bold text-white text-center">
			
				Top 10 NFT Holders
			
			</div>
			
			<div class="max-w-7xl mx-auto pt-10 inter px-10 lg:px-0">
				
				<div class="nft-holder-box-holder md:mx-5 lg:mx-10 relative mb-4">
				
					<a class="nft-holder-link far fa-chevron-right text-2xl text-light-blue px-2 absolute top-8 right-4 block lg:hidden" href="#"></a>
				
					<div class="w-full flex items-start lg:items-center rounded-2xl bg-main-blue px-0 py-4 justify-center md:justify-left">
					
						<div class="w-1/12 mr-5 hidden md:block">
						
							<div class="w-full text-2xl poppins font-bold text-right pr-2">#1</div>
						
						</div>
						
						<div class="w-11/12">
						
							<div class="flex items-start lg:items-center">
							
								<div class="rounded-lg hidden lg:block" style="min-width: 50px; height: 50px; background: url(/images/nft-icon-bg.png) no-repeat center center; background-size: cover;"></div>
								
								<div class="rounded-lg block lg:hidden" style="min-width: 60px; height: 60px; background: url(/images/nft-icon-bg.png) no-repeat center center; background-size: cover;"></div>
								
								<div class="pl-4 lg:flex items-start lg:items-center w-9/12 md:w-full">
								
									<div class="w-full lg:w-4/12 pr-2 break-words">
										<div class="text-lg font-medium text-left">0xc0b1678de6e704c5c654...</div>
										<div class="text-xs font-thin text-left">0xc0b1678de6e704c5c654...</div>
									</div>
						
									<div class="nft-holder-box w-full lg:w-8/12 lg:flex items-start lg:items-center hidden lg:block">
						
										<div class="w-full md:w-4/12 lg:w-5/12 pr-2 py-4">
											<div class="flex items-center">
												<div class="text-xs md:text-lg font-thin text-left">56 14384 Armond Lane NFTs</div>
											</div>
										</div>
										
										<div class="w-full md:w-8/12 lg:w-7/12 flex items-start lg:items-center">	
											<div class="w-1/2 md:w-5/12 xl:w-7/12 inline-block lg:block">
												<div class="flex items-center">
													<div class="w-full text-lg font-normal text-light-blue text-left lg:text-center">&nbsp;</div>
												</div>
											</div>
											
											<div class="w-1/2 md:w-7/12 xl:w-5/12 inline-block lg:block text-right lg:pr-10">
												<div class="w-full text-lg font-normal">= 5,600 USDC</div>
												<div class="w-full text-xs font-thin">= 5,600 USDC</div>
											</div>
										</div>
										
									</div>
									
								</div>
								
							</div>
							
						</div>
					
					</div>
				
				</div>
				
				
				<div class="nft-holder-box-holder md:mx-5 lg:mx-10 relative mb-4">
				
					<a class="nft-holder-link far fa-chevron-right text-2xl text-light-blue px-2 absolute top-8 right-4 block lg:hidden" href="#"></a>
				
					<div class="w-full flex items-start lg:items-center rounded-2xl bg-main-blue px-0 py-4 justify-center md:justify-left">
					
						<div class="w-1/12 mr-5 hidden md:block">
						
							<div class="w-full text-2xl poppins font-bold text-right pr-2">#1</div>
						
						</div>
						
						<div class="w-11/12">
						
							<div class="flex items-start lg:items-center">
							
								<div class="rounded-lg hidden lg:block" style="min-width: 50px; height: 50px; background: url(/images/nft-icon-bg.png) no-repeat center center; background-size: cover;"></div>
								
								<div class="rounded-lg block lg:hidden" style="min-width: 60px; height: 60px; background: url(/images/nft-icon-bg.png) no-repeat center center; background-size: cover;"></div>
								
								<div class="pl-4 lg:flex items-start lg:items-center w-9/12 md:w-full">
								
									<div class="w-full lg:w-4/12 pr-2 break-words">
										<div class="text-lg font-medium text-left">0xc0b1678de6e704c5c654...</div>
										<div class="text-xs font-thin text-left">0xc0b1678de6e704c5c654...</div>
									</div>
						
									<div class="nft-holder-box w-full lg:w-8/12 lg:flex items-start lg:items-center hidden lg:block">
						
										<div class="w-full md:w-4/12 lg:w-5/12 pr-2 py-4">
											<div class="flex items-center">
												<div class="text-xs md:text-lg font-thin text-left">56 14384 Armond Lane NFTs</div>
											</div>
										</div>
										
										<div class="w-full md:w-8/12 lg:w-7/12 flex items-start lg:items-center">	
											<div class="w-1/2 md:w-5/12 xl:w-7/12 inline-block lg:block">
												<div class="flex items-center">
													<div class="w-full text-lg font-normal text-light-blue text-left lg:text-center">&nbsp;</div>
												</div>
											</div>
											
											<div class="w-1/2 md:w-7/12 xl:w-5/12 inline-block lg:block text-right lg:pr-10">
												<div class="w-full text-lg font-normal">= 5,600 USDC</div>
												<div class="w-full text-xs font-thin">= 5,600 USDC</div>
											</div>
										</div>
										
									</div>
									
								</div>
								
							</div>
							
						</div>
					
					</div>
				
				</div>
				
				
				
				
				<script>
					$(".nft-holder-link").click(function() {
						
						if($(this).hasClass("fa-chevron-right")){
							$(this).removeClass("fa-chevron-right").addClass("fa-chevron-down");
							$(this).closest(".nft-holder-box-holder").find(".nft-holder-box").removeClass("hidden");
						} else {
							$(this).removeClass("fa-chevron-down").addClass("fa-chevron-right");
							$(this).closest(".nft-holder-box-holder").find(".nft-holder-box").addClass("hidden");
						}
						
						return false;
					});	
				</script>
				
				
			
			</div>
			
			
	
		</div>
		
	</section>
	
	
	
	
	
	

	
	<section id="section_4" class="w-full h-auto relative my-28 md:my-24">

		<div class="w-full relative poppins mx-auto text-white text-center md:text-left">
		
			<div class="text-4xl md:text-5xl font-bold text-white text-center">
			
				Financials
			
			</div>
			
			<div class="max-w-7xl mx-auto pt-10 inter px-10 lg:px-0">
				
				<div class="financial-holder-box-holder md:mx-5 lg:mx-10 relative mb-4">
				
					<a class="financial-holder-link far fa-chevron-right text-2xl text-white px-2 absolute top-7 lg:top-4 right-4 md:right-14" href="#"></a>
				
					<div class="w-full flex items-start lg:items-center rounded-2xl bg-main-blue px-0 py-4 justify-center md:justify-left">
					
						<div class="w-full">
						
							<div class="w-full">
							
								
								<div class="lg:flex items-start w-full pl-5 md:pl-12">
								
									<div class="w-full lg:w-1/2 break-words">
									
										<div class="text-lg md:text-2xl font-bold text-left">Total Investment</div>
										
									</div>
									
									<div class="w-full lg:w-1/2 md:pr-40 break-words">
									
										<div class="text-lg md:text-2xl font-normal md:font-bold text-left lg:text-right text-light-blue">$180,500</div>
										
									</div>
									
								</div>
								
								<div class="financial-holder-box w-full text-xs md:text-lg font-thin text-left mx-auto pt-4 md:pt-8 px-5 md:px-12 lg:px-24 hidden">
								
									<div class="w-full flex items-center py-3 md:py-2">
										<div class="w-1/2 md:w-2/3 text-left">Property purchase price</div>
										<div class="w-1/2 md:w-1/3 text-right lg:pr-16 text-light-blue">$165,000</div>
									</div>
									<div class="w-full flex items-center py-3 md:py-2">
										<div class="w-1/2 md:w-2/3 text-left">Closing costs</div>
										<div class="w-1/2 md:w-1/3 text-right lg:pr-16 text-light-blue">$1,500</div>
									</div>
									<div class="w-full flex items-center py-3 md:py-2">
										<div class="w-1/2 md:w-2/3 text-left">Maintenance reserve</div>
										<div class="w-1/2 md:w-1/3 text-right lg:pr-16 text-light-blue">$5,000</div>
									</div>
									<div class="w-full flex items-center py-3 md:py-2">
										<div class="w-1/2 md:w-2/3 text-left">Vacancy reserve</div>
										<div class="w-1/2 md:w-1/3 text-right lg:pr-16 text-light-blue">$3,000</div>
									</div>
									<div class="w-full flex items-center py-3 md:py-2">
										<div class="w-1/2 md:w-2/3 text-left">Closin listing fee</div>
										<div class="w-1/2 md:w-1/3 text-right lg:pr-16 text-light-blue">$6,000</div>
									</div>
								
								</div>
								
							</div>
							
						</div>
					
					</div>
				
				</div>
				
				<div class="financial-holder-box-holder md:mx-5 lg:mx-10 relative mb-4">
				
					<a class="financial-holder-link far fa-chevron-right text-2xl text-white px-2 absolute top-7 lg:top-4 right-4 md:right-14" href="#"></a>
				
					<div class="w-full flex items-start lg:items-center rounded-2xl bg-main-blue px-0 py-4 justify-center md:justify-left">
					
						<div class="w-full">
						
							<div class="w-full">
							
								
								<div class="lg:flex items-start w-full pl-5 md:pl-12">
								
									<div class="w-full lg:w-1/2 break-words">
									
										<div class="text-lg md:text-2xl font-bold text-left">Annual Gross Rents</div>
										
									</div>
									
									<div class="w-full lg:w-1/2 md:pr-40 break-words">
									
										<div class="text-lg md:text-2xl font-normal md:font-bold text-left lg:text-right text-light-blue">$16,800</div>
										
									</div>
									
								</div>
								
								<div class="financial-holder-box w-full text-xs md:text-lg font-thin text-left mx-auto pt-4 md:pt-8 px-5 md:px-12 lg:px-24 hidden">
								
									<div class="w-full flex items-center py-3 md:py-2">
										<div class="w-1/2 md:w-2/3 text-left">Property management</div>
										<div class="w-1/2 md:w-1/3 text-right lg:pr-16 text-light-blue">$1,680</div>
									</div>
									<div class="w-full flex items-center py-3 md:py-2">
										<div class="w-1/2 md:w-2/3 text-left">Property taxes</div>
										<div class="w-1/2 md:w-1/3 text-right lg:pr-16 text-light-blue">$2,100</div>
									</div>
									<div class="w-full flex items-center py-3 md:py-2">
										<div class="w-1/2 md:w-2/3 text-left">Homeowners insurance</div>
										<div class="w-1/2 md:w-1/3 text-right lg:pr-16 text-light-blue">$1,200</div>
									</div>
									<div class="w-full flex items-center py-3 md:py-2">
										<div class="w-1/2 md:w-2/3 text-left">LLC administration and filing fees</div>
										<div class="w-1/2 md:w-1/3 text-right lg:pr-16 text-light-blue">$200</div>
									</div>
									<div class="w-full flex items-center py-3 md:py-2">
										<div class="w-1/2 md:w-2/3 text-left">Annual cash flow</div>
										<div class="w-1/2 md:w-1/3 text-right lg:pr-16 text-light-blue">$11,600</div>
									</div>
									<div class="w-full flex items-center py-3 md:py-2">
										<div class="w-1/2 md:w-2/3 text-left">Monthly cash flow</div>
										<div class="w-1/2 md:w-1/3 text-right lg:pr-16 text-light-blue">$968</div>
									</div>
								
								</div>
								
								
							</div>
							
						</div>
					
					</div>
				
				</div>
				
				<div class="financial-holder-box-holder md:mx-5 lg:mx-10 relative mb-4">
				
					<a class="financial-holder-link far fa-chevron-right text-2xl text-white px-2 absolute top-7 lg:top-4 right-4 md:right-14" href="#"></a>
				
					<div class="w-full flex items-start lg:items-center rounded-2xl bg-main-blue px-0 py-4 justify-center md:justify-left">
					
						<div class="w-full">
						
							<div class="w-full">
							
								
								<div class="lg:flex items-start w-full pl-5 md:pl-12">
								
									<div class="w-full lg:w-1/2 break-words">
									
										<div class="text-lg md:text-2xl font-bold text-left">Total Returns (IRR)</div>
										
									</div>
									
									<div class="w-full lg:w-1/2 md:pr-40 break-words">
									
										<div class="text-lg md:text-2xl font-normal md:font-bold text-left lg:text-right text-light-blue">18.64%</div>
										
									</div>
									
								</div>
								
								<div class="financial-holder-box w-full text-xs md:text-lg font-thin text-left mx-auto pt-4 md:pt-8 px-5 md:px-12 lg:px-24 hidden">
								
									<div class="w-full flex items-center py-3 md:py-2">
										<div class="w-1/2 md:w-2/3 text-left">Projected appreciation</div>
										<div class="w-1/2 md:w-1/3 text-right lg:pr-16 text-light-blue">12.20%</div>
									</div>
									<div class="w-full flex items-center py-3 md:py-2">
										<div class="w-1/2 md:w-2/3 text-left">Cash on cash return</div>
										<div class="w-1/2 md:w-1/3 text-right lg:pr-16 text-light-blue">6.44%</div>
									</div>
									<div class="w-full flex items-center py-3 md:py-2">
										<div class="w-1/2 md:w-2/3 text-left">Cap rate</div>
										<div class="w-1/2 md:w-1/3 text-right lg:pr-16 text-light-blue">6.44%</div>
									</div>
								
								</div>
								
								
							</div>
							
						</div>
					
					</div>
				
				</div>
				
				
				
				<script>
					$(".financial-holder-link").click(function() {
						
						if($(this).hasClass("fa-chevron-right")){
							$(this).removeClass("fa-chevron-right").addClass("fa-chevron-down");
							$(this).closest(".financial-holder-box-holder").find(".financial-holder-box").removeClass("hidden");
						} else {
							$(this).removeClass("fa-chevron-down").addClass("fa-chevron-right");
							$(this).closest(".financial-holder-box-holder").find(".financial-holder-box").addClass("hidden");
						}
						
						return false;
					});	
				</script>
				
				
			
			</div>
			
			
	
		</div>
		
	</section>
	
	
	

	
	
	<section id="section_5" class="w-full h-auto mt-0">

		<div class="w-full relative">
		
			<div class="w-full text-white poppins" style="background: url(/images/project_bg_new.jpg) no-repeat center center; background-size: cover;">
			
				<div class="w-full relative justify-center max-w-7xl mx-auto py-20 lg:py-24">
					
					<div class="lg:flex max-w-7xl relative mx-auto h-full md:mx-5 lg:mx-10 px-5 md:px-0">
					
						<div class="w-full lg:w-3/12">
						
							<div class="text-2xl font-semibold tracking-tight mb-8">Project Timeline</div>
						
						</div>
						
						<div class="w-full lg:w-9/12 pl-6 lg:pl-0">
						
							<div class="w-full">
								
								<div class="w-full font-normal text-white">
					
									<div class="flex relative">
									
										<div class="text-3xl font-normal relative pt-1" style="min-width: 46px;">
											
											<div class="flex py-1 relative z-50" style="height: 24px;">
												<div class="rounded-full inline-block bg-white" style="width: 14px; height: 14px;"></div>
											</div>
											
										</div>
										
										<div class="timeline_detail_new w-full2 pb-8 z-40">
											<div class="text-2xl font-semibold">Nov. 13, 2022</div>
											<div class="text-lg md:text-xl font-medium py-1">Property due diligence & purchase property</div>
											<div class="text-lg font-thin pt-3 inter">
												Paperwork completed and LLC tokenized.
											</div>
										</div>
									
									</div>
							
									<div class="flex relative">
									
										<div class="text-3xl font-normal relative pt-1" style="min-width: 46px;">
											
											<div class="flex py-1 relative z-50" style="height: 24px;">
												<div class="rounded-full inline-block bg-white" style="width: 14px; height: 14px;"></div>
											</div>
											
										</div>
										
										<div class="timeline_detail_new w-full2 pb-8 z-40">
											<div class="text-2xl font-semibold">Nov. 17, 2022</div>
											<div class="text-lg md:text-xl font-medium py-1">Token offering</div>
											<div class="text-lg font-thin pt-3 inter">
												Property tokens available to purchase on Closin. Once purchased, tokens will be stored in your Closin account.
											</div>
										</div>
									
									</div>
							
									<div class="flex relative">
									
										<div class="text-3xl font-normal relative pt-1" style="min-width: 46px;">
											
											<div class="flex py-1 relative z-50" style="height: 24px;">
												<div class="rounded-full inline-block bg-white" style="width: 14px; height: 14px;"></div>
											</div>
											
										</div>
										
										<div class="timeline_detail_new w-full2 pb-8 z-40">
											<div class="text-2xl font-semibold">Dec. 17, 2022</div>
											<div class="text-lg md:text-xl font-medium py-1">Token offering</div>
											<div class="text-lg font-thin pt-3 inter">
												All tokens are sold or purchase window expires.
											</div>
										</div>
									
									</div>
							
									<div class="flex relative">
									
										<div class="text-3xl font-normal relative pt-1" style="min-width: 46px;">
											
											<div class="flex py-1 relative z-50" style="height: 24px;">
												<div class="rounded-full inline-block bg-light-blue" style="width: 14px; height: 14px;"></div>
											</div>
											
										</div>
										
										<div class="w-full2 pb-8 z-40">
											<div class="text-2xl font-semibold">Dec. 24, 2022</div>
											<div class="text-lg md:text-xl font-medium py-1">Receive monthly rental dividends</div>
											<div class="text-lg font-thin pt-3 inter">
												Your cumulative rental income will be sent to you based on the day you invested. You will then begin to earn monthly rental dividends moving forward. You can choose to receive your rental income to your Closin account in USD or to your crypto wallet in USDC (a USD stablecoin).
											</div>
										</div>
									
									</div>
								
								</div>
								
							
							</div>
							
						</div>
						
					</div>
					
				</div>
			
			</div>
	
		</div>
		
	</section>
	
	
	<section id="section_6" class="w-full h-auto relative py-28 md:py-24 bg-main-blue">

		<div class="w-full relative poppins mx-auto text-white text-center md:text-left">

			
			<div class="max-w-7xl mx-auto inter px-5 md:px-10 lg:px-0">
		
				<div class="md:flex items-center mx-0 md:mx-5 lg:mx-10">
				
					<div class="w-full md:w-1/2 text-2xl md:text-5xl font-bold text-white text-left">
					
						 NFT Stats
					
					</div>
				
					<div class="flex md:justify-end w-full md:w-1/2 mt-4">
					
						<div class="w-full font-thin text-xs md:text-sm border border-light-blue rounded-full px-2 py-3 text-center capitalize" style="max-width: 490px;">
							1 NFT = 1/1,850 ownership of 14384 Armond Lane and its rental income
						</div>
						
					</div>
				
				</div>
				
				<div class="w-full lg:flex px-0 md:px-5 lg:px-10 gap-4 mt-12">
				
					<div class="w-full flex lg:block gap-4 lg:w-2/12">
					
						<div class="w-full border border-white rounded-xl px-2 md:px-5 lg:px-7 py-8 my-3 text-left">
						
							<div class="text-base font-thin inter text-light-blue">
								Value
								<a class="inline-block mb-2 cursor-pointer" data-toggle="tooltip" data-placement="right" title="The implies value of an individual NFT based on the last traded price."><img src="/images/icon-alert-circle.png"></a>
							</div>
							
							<div class="w-full flex items-start pt-2">
							
								<div class="w-7/12 text-4xl md:text-5xl font-bold poppins">$0</div>
								<div class="w-5/12 text-base font-light inter text-green text-right">+0%</div>
							
							</div>
						
						</div>
						
						<div class="w-full border border-white rounded-xl px-2 md:px-5 lg:px-7 py-8 my-3 text-left">
						
							<div class="text-base font-thin inter text-light-blue">
								 Daily Volume
							</div>
							
							<div class="w-full flex items-start pt-2">
							
								<div class="w-7/12 text-4xl md:text-5xl font-bold poppins">$0</div>
								<div class="w-5/12 text-base font-light inter text-green text-right">+0%</div>
							
							</div>
						
						</div>
						
						<div class="w-full border border-white rounded-xl px-2 md:px-5 lg:px-7 py-8 my-3 text-left">
						
							<div class="text-base font-thin inter text-light-blue">
								 Tx Count
							</div>
							
							<div class="w-full flex items-start pt-2">
							
								<div class="w-7/12 text-4xl md:text-5xl font-bold poppins">$0</div>
								<div class="w-5/12 text-base font-light inter text-green text-right">+0%</div>
							
							</div>
						
						</div>
					
					</div>
				
					<div class="w-full lg:w-10/12 py-1 lg:py-3">
					
						<div class="w-full h-full border border-white rounded-xl px-6 lg:px-12 py-5">
						
							<div class="w-full h-auto lg:flex items-center gap-4 relative">
								
								<div class="w-full lg:w-1/2 text-xl lg:text-2xl font-semibold text-left mb-3 lg:mb-0">Value</div>
								
								<div class="w-full lg:w-1/2 flex items-center font-light text-xs md:text-sm border border-light-blue rounded-full p-2 text-center capitalize">
									
									<div class="w-1/3">Daily Volume</div>
									
									<div class="w-1/3 text-main-blue bg-light-blue rounded-full p-3">Value</div>
									
									<div class="w-1/3">Tx Count</div>
									
								</div>
								
							</div>
							
							<div class="w-full h-auto flex items-start pt-6 gap-4 relative">
							
								<div class="w-full h-full absolute flex items-center justify-center -mt-10">
									<div class="text-5xl md:text-6xl">Coming Soon</div>
								</div>
							
								<div class="w-full h-full relative" style="width: 60px;">
								
									<div class="w-full text-base lg:text-lg font-thin inter text-light-blue absolute text-right" style="opacity: 0.1; top: -15px;">
										$150
									</div>
									<div class="w-full text-base lg:text-lg font-thin inter text-light-blue absolute text-right" style="opacity: 0.1; top: 85px;">
										$95
									</div>
									<div class="w-full text-base lg:text-lg font-thin inter text-light-blue absolute text-right" style="opacity: 0.1; top: 185px;">
										$75
									</div>
								
								</div>
							
								<div class="w-full h-full">
							
									<div class="border border-t border-l border-b-0 border-r-0 border-white" style="height: 100px; opacity: 0.1;"></div>
									<div class="border border-t border-l border-b-0 border-r-0 border-white" style="height: 100px; opacity: 0.1;"></div>
									<div class="border border-r-0 border-white" style="height: 100px; opacity: 0.1;"></div>
								
									<div class="flex items-center font-thin pt-2" style="opacity: 0.1;">
										<div class="w-full grid grid-cols-7">
											<div class="text-left">29</div>
											<div class="text-left">30</div>
											<div class="text-left">31</div>
											<div class="text-left">01</div>
											<div class="text-left">02</div>
											<div class="text-left">03</div>
											<div class="text-left">04</div>
										</div>
										<div class="text-right" style="width: 24px;">05</div>
									<div>
									
								</div>
							
							</div>
							
						</div>
					
					</div>
				
				</div>
		
		
			</div>
			
		</div>
		
	</section>
	
	
	<section id="section_7" class="w-full h-auto relative py-28 md:py-24">

		<div class="w-full relative poppins mx-auto text-white text-center md:text-left">

			
			<div class="max-w-7xl mx-auto inter px-5 md:px-10 lg:px-0">
		
				<div class="w-full mx-0 md:px-5 lg:px-10 text-left">
				
					<div class="text-2xl font-semibold text-light-blue mb-4">Why Huntsville?</div>
					
					<div class="md:flex items-start gap-8 mb-16">
					
						<div class="w-full md:w-1/2 text-lg font-thin pt-3 inter">
							The average price of homes in Huntsville have increased 26.8% this past 12 months and the average rents for 3 bedroom homes have increased over 13%. More than 31% of the homes in Huntsville are occupied by renters, with the average rent for a 3 bedroom property being $1,457 as of April 2022. Huntsville ranks the third-best place in the US to live in according to U.S. News & World Report.
							<br><br>
							Employment growth in Huntsville is 1.8% year-over-year, and the GDP of Huntsville has increased by more than 19% in the last decade.
						</div>
						
						<div class="w-full md:w-1/2 text-lg font-thin mt-4 md:mt-0 pt-3 inter">
							Huntsville is nicknamed The Rocket City as it remains the center of rocket-propulsion research in the U.S. Huntsville employers and organization's include Jeff Bezo's Blue Origin, NASA's Marshall Space Flight Center, the U.S. Army Aviation and Missile Command, Facebook's data center, Alabama A&M University, and many more.
							<br><br>
							Our A.I. ranks Huntsville in the top ten markets in the United States in terms of projected future appreciation.
						</div>
						
					</div>
					
					<div class="text-2xl font-semibold text-light-blue mb-4">Huntsville historical growth</div>
					
					<div class="w-full mt-8">
					
						<img src="/images/growth-graph.png">
						
						<div class="w-full font-thin pt-8  text-lg inter text-center">
							<div class="block">
								Historical rental returns for 3 bedroom homes taken from 
								<a class="text-light-blue" href="https://www.zumper.com/rent-research/huntsville-al" target="_blank">https://www.zumper.com/rent-research/huntsville-al</a>
							</div>
							<div class="block">
								Historical appreciation returns for single family homes taken from
								<a class="text-light-blue" href="https://www.zillow.com/huntsville-al/home-values/" target="_blank">https://www.zillow.com/huntsville-al/home-values/</a>
							</div>
						</div>
						
					</div>
						
				</div>
				
			</div>
			
		</div>
		
	</section>
		
		
		
		
	
	<?php require 'section_faq.php';  ?>
	
	<?php require 'section_signup.php';  ?>
	
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






