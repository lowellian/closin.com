
<?php

	
$text_color = 'text-white';
$login_bg = 'background: rgba(255, 255, 255, 0.12)';
$signup_bg = 'background: #FFFFFF';
$signup_text = 'text-main-blue';
$primary_main = '';
$secondary_main = 'color: #81EEF3';
$font_main = 'Inter';

?>

<div class="w-full flex" style="height: 80px;">

<div class="flex w-full items-center relative px-10 md:px-0 max-w-7xl mx-auto" style="z-index: 100;">

	<div class="absolute top-0 left-0 w-full" style="z-index: 1;"></div>

	<div class="text-4xl w-3/4 md:w-2/12 md:pl-2 lg:pl-2 <?php echo $text_color;?> pr-0 flex" style="z-index: 10;">
		<a href="/" class="inline-block">
			
			<span class="flex items-center text-white">
				<img src="/images/closin-logo.png">
			</span>
			
		</a>
		
	</div>
	
	<div class="hidden md:flex text-md md:w-5/12 text-left md:pr-5 lg:pr-10 <?php echo $text_color;?>" style="z-index: 10;">
		<a id="h_1" class="menu_item md:mx-3 lg:mx-6 font-normal" href="/about-us" data-value-text="section_about">About Us</a>
		<a id="h_2" class="menu_item md:mx-3 lg:mx-6 font-normal" href="/property" data-value-text="section_about">Properties</a>
		<a class="menu_item md:mx-3 lg:mx-6 font-normal btn_faq" href="#" data-value-text="section_about">FAQs</a>
	</div>
	
	<div class="block md:hidden w-1/4 text-right" style="z-index: 10;">
		<a id="mobile-menu-button" href="#" class="inline-block rounded-full text-4xl <?php echo $text_color;?> fal fa-bars"></a>
	</div>
	
	<script>
		$("#mobile-menu-button").click(function() {
			$(this).fadeOut();
			$("#mobile-menu").fadeIn();
			return false;
		});
		$("#mobile-menu-close, .trigger_close_menu").click(function() {
			$("#mobile-menu").fadeOut("fast");
			$("#mobile-menu-button").fadeIn();
			return false;
		});
	</script>
	
	<div class="hidden md:block text-md md:w-9/12 text-right /*md:pr-5 lg:pr-10*/ <?php echo $text_color;?>" style="z-index: 10;">

		<a class="menu_item md:mx-3 lg:mx-4 font-normal text-sm" href="/get-notified" style="<?php echo $secondary_main;?>">Login / Sign up</a>
		<a id="connect_wallet" class="font-normal text-sm text-center rounded-full px-3 py-4 text-main-blue inline-block my-5 ml-2 bg-light-blue" href="/get-notified" style="width: 134px;">
			Connect Wallet
		</a>
	</div>
	
</div>

</div>


