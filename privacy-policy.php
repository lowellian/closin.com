<?php 

$page_name = "about-us";

$site_name = "Closin - Privacy Policy";

$pg_title = $site_name;
$pg_desc = "Here's our privacy policy.";

$og_url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$og_type = "article";
$og_title = $pg_title;
$og_desc = $pg_desc;
$og_img = "closin.com/images/closin_og.jpg";

require 'header.php';

?>

<?php require 'top.php';?>
	
	<?php require 'section_mobile_menu.php' ?>
	

	<section class="relative" style="background: url(/images/bg_blurred.jpg) no-repeat bottom center; background-size: cover; border-radius: 0 0 120px 0; height: 495px;">
		
		<?php require 'section_header.php' ?>
		
		<div class="w-full h-auto flex items-center text-white font-normal">
			
			<div class="w-full h-full flex items-end relative max-w-7xl mx-auto md:px-10 lg:px-10" style="">
		
				<div class="w-full lg:flex relative pt-44 px-10 md:px-0" style="height: 50%;">
				
					<div class="w-full">
						
						<div class="main_title_text text-5xl md:text-7xl font-normal leading-none" style="letter-spacing: -2px;">
							Privacy Policy
						</div>
						
					</div>
					
				</div>
			
			</div>
		
		</div>
		
	</section>
	
	<section id="section_policy" class="w-full h-auto mt-20 mb-0 z-10">

		<div class="flex w-full relative">
				
			<div class="max-w-3xl mx-auto w-full h-full px-10 lg:px-10 left-0 right-0">
				
				<div class="font-normal leading-loose text-main-gray text-xl">
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Viverra sed elementum pretium consequat enim proin tempor. Placerat et enim enim, placerat enim, neque donec egestas. Praesent proin vulputate turpis et. Consequat cursus tincidunt proin feugiat ipsum in nec. Gravida nisi amet amet, id. Platea et, in viverra suspendisse. Tempor bibendum nunc aliquet turpis. Urna sit gravida scelerisque scelerisque vestibulum amet. Sed ornare nulla donec id euismod. Amet nunc, nunc, enim aliquam nunc cursus. Etiam ultrices id dictumst suspendisse proin aliquam. Non risus semper feugiat quam egestas eget consectetur tincidunt egestas. Nisi non sit vitae, ac ipsum ut ullamcorper turpis. Semper donec tellus fames volutpat libero.<br><br>
					A gravida arcu cursus eu, eget amet. Ultricies sed pellentesque pretium eget et interdum. Placerat consectetur mauris, urna metus sodales. Vestibulum hac sit nunc ut. Nisl, cursus id sollicitudin sit mauris massa, nisl molestie orci. Sapien gravida tempor, morbi aliquet cursus. Diam id molestie pulvinar nunc velit malesuada velit, a. Est, eget nunc quisque turpis risus nulla volutpat, faucibus. Sed at sed purus magna.<br><br>
					Viverra phasellus vitae gravida cras ornare purus mi. Viverra sit nec varius ullamcorper egestas risus id non. In id gravida velit est. Elit volutpat diam nisl etiam consequat, consectetur. Malesuada magna egestas interdum viverra mauris. Mi ac aenean in donec feugiat sit. Maecenas ut aliquam ultrices mattis leo purus. Facilisi sed lobortis in varius mi mi faucibus. Quisque platea nec morbi feugiat accumsan pellentesque potenti nibh. Interdum adipiscing sed magna tristique malesuada accumsan, enim augue.<br><br>
					Habitant a nibh pellentesque fringilla viverra enim viverra ut. Leo cursus ipsum ut placerat eget commodo ipsum. Fermentum morbi aliquam id ut vestibulum sed sit. Sed tempor justo dolor gravida risus a. Non vel arcu in massa sed tristique. Viverra egestas urna senectus scelerisque ultrices enim. In et vitae libero mauris adipiscing ultrices luctus. Aliquam, porttitor in urna platea pharetra. Eget etiam eget aliquam auctor.
					Consectetur suspendisse bibendum mattis dolor. Non platea vehicula arcu, morbi non cursus fusce diam arcu. Scelerisque vel, nibh metus nisi, urna mattis felis. Leo, massa cursus sed viverra risus netus elementum ac. Enim a accumsan amet vestibulum nisl nunc. Amet nullam magnis neque, et id viverra faucibus placerat. Id a, rutrum facilisi amet aliquam. Urna, etiam libero, tortor iaculis dictumst. Proin id elit quam quam ac morbi ac cras in. Nam elit sed at purus congue mattis pharetra. Tempor nunc massa egestas id sed venenatis tristique. Facilisis praesent fames suspendisse porttitor in dictum dictum.<br><br>
					Id nunc, enim semper sed a elementum dui in. Odio malesuada quis quisque id quis. Vestibulum justo, arcu suscipit aliquam ridiculus mauris risus tincidunt dictumst. Varius proin non euismod mi elementum. Id a purus egestas id sem diam. Amet, nibh magna pulvinar at vulputate. Lectus libero maecenas auctor nunc, donec. Vitae, feugiat risus viverra enim fermentum vitae neque. Nec facilisi mattis bibendum tristique urna ut. Nunc pulvinar id sapien, neque morbi nunc eleifend.
				</div>
				
			</div>
		
		</div>
		
	</section>	
	
	
	
	<?php require 'section_faq.php';  ?>
	
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






