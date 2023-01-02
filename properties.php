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


<div class="absolute w-full" style="background: url(/images/properties-bg.png); height: 630px; background-size: cover; background-repeat: no-repeat; background-position: bottom left; top: 80px;"></div>

<?php require 'top.php';?>
	
	<?php require 'section_mobile_menu.php' ?>
	

	<section class="relative" style="height: auto;">
		
		<?php require 'section_header.php' ?>
				
	</section>
	
	<section class="pt-16 md:pt-24 relative z-10">
	
		<div class="w-full relative justify-center max-w-7xl mx-auto pt-4 lg:pt-8">
			
			<div class="max-w-7xl relative mx-auto h-full md:mx-5 lg:mx-10 px-5 md:px-0">
			
				<div class="w-full mb-16 md:mb-0 mx-auto text-center text-white" style="max-width: 998px;">
				
					<div class="text-5xl md:text-6xl font-bold text-white title-text poppins" style="line-height: 1.10;">
						Your <span class="text-light-blue">rental properties </span>through NFTs
					</div>
				
				</div>
				
				
				<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5 mt-20">
				
					<div class="properties-item rounded-xl w-full text-white md:float-right overflow-hidden relative h-auto border-b-4 border-light-blue">
				
						<div class="w-full" style="background: url(/images/index-verified-property.png) no-repeat top center; height: 300px; background-size: cover;">
									
							<a class="font-normal rounded-xl px-2 py-2 inline-block w-full bg-light-blue text-main-blue text-center absolute top-0 left-0 text-xs m-5 flex items-center justify-center" href="/property" style="max-width: 104px;">Verified <img class="ml-2" src="/images/icon-check-dark.png"></a>
										
						</div>
						
						<div class="w-full px-4">
					
							<div class="w-full border-b border-light-blue px-4 py-7">
														
								<div class="font-medium text-2xl poppins">
									14384 Armond Lane
									<br>
									Huntsville, AL 3581
								</div>
														
							</div>
														
							<div class="w-full grid grid-cols-3 gap-2 text-left px-4 py-7">

								<div class="">
									<div class="text-light-blue font-thin text-xs inter mb-2">
										Projected IRR
									</div>
									<span class="font-medium text-xl poppins">18.64%</span>
								</div>
								<div class="">
									<div class="text-light-blue font-thin text-xs inter mb-2">
										Cashout
									</div>
									<span class="font-medium text-xl poppins">6.44%</span>
								</div>
								<div class="">
									<a class="font-normal text-sm rounded-full px-2 py-3 inline-block w-full bg-light-blue text-main-blue text-center" href="/property" style="max-width: 120px;">Invest</a>
								</div>
								
							</div>
							
						</div>
					
					</div>
				
				</div>
				
				
			</div>
			
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


	<script type="text/javascript">
		$(document).ready(function() {
			$("#h_2").addClass("text-light-blue");
		});
	</script>
	
<?php require 'footer.php';?>






