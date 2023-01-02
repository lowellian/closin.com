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
	

	<section class="relative" style="height: auto;">
		
		<?php require 'section_header.php' ?>
				
	</section>
	
	<section class="pt-16 md:pt-24 relative z-10">
	
		<div class="w-full relative justify-center max-w-7xl mx-auto pt-4 lg:pt-8">
			
			<div class="max-w-7xl relative mx-auto h-full md:mx-5 lg:mx-10 px-5 md:px-0">
			
				<div class="md:w-7/12 mb-16 md:mb-0 md:float-left" style="max-width: 705px;">
				
					<div class="text-5xl md:text-6xl font-extrabold text-white title-text" style="line-height: 1.10;">
						<span class="text-light-blue">Buy</span> and <span class="text-light-blue">sell</span> fractional ownership of <span class="text-light-blue">rental properties</span> through NFTs
					</div>
					
					<div class="text-white text-lg font-light py-6 md:py-8">
						Each rental property is divided into 1,000s of NFTs, with each NFT having proportional ownership of the real estate.
					</div>
					
					<div class="flex items-center py-3">
					
						<a id="btn-gallery" class="font-normal rounded-full px-5 py-4 mr-7 bg-light-blue text-main-blue inline-block w-auto float-left" href="/get-notified">
							<span class="flex items-center"><img src="/images/icon-credit-card.png"> <span class="pl-3">connect wallet<span></span>
						</a>
						
						<a class="menu_item md:mx-3 lg:mx-4 font-normal text-base" href="/property" style="<?php echo $secondary_main;?>">
							Explore Properties
						</a>
						
					</div>
				
				</div>
				
				<div class="index-verified-box md:w-5/12 text-white md:float-right overflow-hidden bg-tertiary-blue relative h-auto">
				
					<div class="w-full" style="background: url(/images/index-verified-property.png) no-repeat top center; height: 451px; background-size: cover;">
								
						<a class="font-normal rounded-xl px-2 py-2 inline-block w-full bg-light-blue text-main-blue text-center absolute top-0 left-0 text-xs m-5 flex items-center justify-center" href="/property" style="max-width: 104px;">Verified <img class="ml-2" src="/images/icon-check-dark.png"></a>
									
					</div>
					
					<div class="w-full bg-main-blue flex pl-6 pr-0 py-5" style="height: 163px;">
				
						<div class="w-8/12">
													
							<div class="font-medium md:font-bold text-2xl poppins">
								14384 Armond Lane
							</div>
							<div class="font-light text-lg">Huntsville, AL 35810</div>
							<div class="font-light text-sm block mt-5">Edition 1 of 1,850</div>
													
						</div>
													
						<div class="w-4/12 pl-4">

							<div class="text-light-blue uppercase font-light text-xs inter">
								projected irr
							</div>
							<span class="font-bold text-2xl poppins">18.64%</span>
							<div class="text-light-blue uppercase font-light text-xs inter mt-4">
								cash payout
							</div>
							<span class="font-bold text-2xl poppins">6.44%</span>
							
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
		
			<div class="max-w-7xl relative mx-auto h-full md:mx-5 lg:mx-10 p-7" style="background: linear-gradient(108.79deg, #081F5C 12.78%, rgba(8, 31, 92, 0) 121.5%); box-shadow: 0px 5px 20px -5px rgba(8, 31, 92, 0.1); border-radius: 20px;">
				
				<div style="border: 1px solid #81EEF3; border-radius: 20px; min-height: 300px;">
				
					<div class="w-full relative justify-center max-w-7xl mx-auto py-20 lg:py-24 px-4 lg:px-16">
						
						<div class="max-w-7xl relative mx-auto h-full md:mx-5 lg:mx-10 px-5 md:px-0">
						
							<div class="md:w-7/12 mb-10 md:mb-16 md:mb-0 md:float-right md:pl-5 lg:pl-10">
							
								<div class="text-4xl md:text-5xl font-extrabold text-white text-center md:text-left" style="line-height: 1.10;">
									<span class="text-light-blue">Collective</span> ownership of cash producing rental properties
								</div>
								
								<div class="text-white text-lg font-light py-6 md:py-8 text-center md:text-left">
									Fractionalizing real estate through NFTs allows for easier and less costly liquidity compared to traditional real estate transactions that can take months + 6%+ agent fees.
								</div>
								
								<div class="flex items-center py-3 font-light">
								
									<span class="flex items-center">
										<img src="/images/icon-check.png">
										<span class="pl-3">Easy</span>
									</span>
									<span class="flex items-center ml-8">
										<img src="/images/icon-check.png">
										<span class="pl-3">Simple</span>
									</span>
									<span class="flex items-center ml-8">
										<img src="/images/icon-check.png">
										<span class="pl-3">Less Cost</span>
									</span>
									
								</div>
							
							</div>
							
							<div class="index-verified-box-2 md:w-5/12 text-white md:float-left overflow-hidden bg-tertiary-blue w-full h-auto" style="min-height: 480px;">
							
								<div class="w-full" style="background: url(/images/index-verified-property-2.png) no-repeat top center;height: 327px;background-size: cover;">
								
									<a class="font-normal rounded-xl px-2 py-2 inline-block w-full bg-light-blue text-main-blue text-center absolute top-0 left-0 text-xs m-5 flex items-center justify-center" href="/property" style="max-width: 104px;">Verified <img class="ml-2" src="/images/icon-check-dark.png"></a>
								
								</div>
								
								<div class="w-full bg-main-blue flex pl-5 pr-0 py-4 h-auto" style="min-height: 120px;">
							
									<div class="w-10/12">
																
										<div class="font-medium md:font-bold text-2xl poppins">
											14384 Armond Lane
										</div>
										<div class="font-light text-base">Huntsville, AL 35810</div>
										<div class="font-light text-xs block mt-5">Edition 1 of 1,850</div>
																
									</div>
																
									
									
								</div>
													
								
								<div class="py-3">
									<span class="font-light block text-center" style="font-size: 9px;">
										1 NFT = 1/1,850 ownership of 14384 Armond Lane and its rental income
									</span>
								</div>
							
							</div>
							
							<div class="clear-both"></div>
							
						</div>
						
					</div>
							
				
				</div>
				
			</div>
		
		</div>
	
	</section>
	
	
	
	
	<section id="section_3" class="w-full h-auto relative my-28 md:my-24">

		<div class="w-full relative poppins mx-auto text-white text-center md:text-left" style="max-width: 960px;">
		
			<div class="text-light-blue text-2xl font-medium text-center">How Closin Works</div>
			
			<div class="md:grid grid-cols-2 items-center md:gap-16 px-5">
				
				<div class="w-full">
					<div class="text-xl font-medium pt-12 pb-5">
						View available properties
					</div>
					<div class="text-base font-light">
						Look through properties that are available for investment. You can see their property reports, financial data and projections and other available documents to help you make an informed decision.
					</div>
				</div>
				
				<div class="w-full">
					<div class="text-xl font-medium pt-12 pb-5">
						Choose a property
					</div>
					<div class="text-base font-light">
						Once you select a property to invest in, you can acquire ownership by minting an NFT for 100 USDC ($100 USD) each. You're now a part owner of that property and will start receiving your portion of rental payments immediately to your wallet.
					</div>
				</div>
			
			</div>
			
			<div class="md:grid grid-cols-2 items-center md:gap-16 px-5">
				
				<div class="w-full">
					<div class="text-xl font-medium pt-12 pb-5">
						Partake in property appreciation
					</div>
					<div class="text-base font-light">
						NFT value is determined by the free market, however, as each NFT is backed by an underlining real estate physical asset, when the property appreciates in value, so should your NFT.
					</div>
				</div>
				
				<div class="w-full">
					<div class="text-xl font-medium pt-12 pb-5">
						Sell when you want
					</div>
					<div class="text-base font-light">
						Sell your NFT whenever you want on any NFT marketplace (like OpenSea). There are no restrictions or lockup periods.
					</div>
				</div>
			
			</div>
			
			<div class="md:flex items-center justify-center pt-14 pb-10">
					
				<a class="font-normal rounded-full px-5 pt-4 pb-4 mx-auto md:mx-0 bg-light-blue text-main-blue block md:inline-block w-auto md:float-left" href="/get-notified" style="max-width: 215px;">
					<span class="flex items-center"><img src="/images/icon-credit-card.png"> <span class="pl-3">connect wallet<span></span>
				</a>
				
				<a class="menu_item mx-3 md:mx-10 pt-8 md:pt-0 font-normal text-base block" href="/property" style="<?php echo $secondary_main;?>">
					Explore Properties
				</a>
				
			</div>
	
		</div>
		
	</section>
	
	
	<section id="section_4" class="w-full h-auto mt-0">

		<div class="w-full relative">
		
			<div class="w-full" style="background: url(/images/main-featured-properties-bg.png) no-repeat center center; background-size: cover;">
			
				<div class="w-full relative justify-center max-w-7xl mx-auto py-20 lg:py-24">
					
					<div class="lg:flex max-w-7xl relative mx-auto h-full md:mx-5 lg:mx-10 px-5 md:px-0 poppins">
					
						<div class="w-full lg:w-3/5 md:pr-3">
						
							<div class="w-full"><img src="/images/featured-property.png"></div>
						
						</div>
						
						<div class="w-full lg:w-2/5 pt-10 lg:pt-0 text-white">
						
							<div class="text-base font-normal tracking-widest inline-block uppercase">featured property</div>
						
							<div class="text-4xl md:text-5xl font-bold text-white pt-3 pb-2" style="line-height: 1.10;">
								<span class="text-light-blue">14384 Armond Lane</span>
							</div>
							
							<div class="text-2xl font-bold">Huntsville, AL 35810</div>
							
							<div class="text-base font-light pt-6 pb-10">
								This property is a fully renovated 3 bedroom 2 bathroom single family located in a trending neighborhood of Huntsville. The following renovations have been completed: New kitchen, new bathroom, new luxury vinyl plank flooring...
							</div>
							
							<div class="w-full grid grid-cols-2 md:grid-cols-3 items-center">
						
								<div class="">
									
									<div class="text-base font-normal text-light-blue text-center md:text-left">PROJECTED IRR</div>
									
									<div class="text-4xl font-bold text-white py-2 archivo text-center md:text-left">18.64%</div>
								
								</div>
								
								<div class="">
									
									<div class="text-base font-normal text-light-blue text-center md:text-left">CASH PAYOUT</div>
									
									<div class="text-4xl font-bold text-white py-2 archivo text-center md:text-left">6.44%</div>
								
								</div>
								
								<div class="pt-10 md:pt-0 col-span-2 md:col-span-1 text-center">									
									
									<a class="font-normal rounded-full px-8 py-5 inline-block w-full bg-light-blue text-main-blue text-center" href="/property" style="max-width: 215px;">Invest Now</a>
									<div class="w-full text-center text-xs font-normal text-white uppercase pt-3">*100 USDC Minimum</div>
								
								</div>
							
							</div>
						
						</div>
						
					</div>
					
				</div>
			
			</div>
	
		</div>
		
	</section>
	

	<section class="w-full h-auto ">
	
		<div class="text-sm md:text-base inter font-light text-white text-center px-4 py-4" style="background: #0F3AAE;">
		
			***Closin has not yet secured a property for investment. This property is for illustrative purposes only.***
		
		</div>
	
	</section>
	
	
	
	
	
	
	

		
		
	
	<?php require 'section_what_brings.php';  ?>
	
	<?php require 'section_faq.php';  ?>
	
	<?php require 'section_signup.php';  ?>
	
	<?php require 'section_footer.php';  ?>
	
	
	
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






