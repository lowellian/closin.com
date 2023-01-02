<?php 

$page_name = "property";

$site_name = "Closin - Terms";

$pg_title = $site_name;
$pg_desc = "Here's our terms of service.";

$og_url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$og_type = "article";
$og_title = $pg_title;
$og_desc = $pg_desc;
$og_img = "closin.com/images/Closin-800x420.jpg";

require 'header.php';

?>

<?php require 'top.php';?>
	
	<?php require 'section_mobile_menu.php' ?>
	

	<section class="relative h-screen mb-24 md:mb-32" style="min-height: 700px;">
		
		<?php require 'section_header.php' ?>
		
		<div class="flex w-full relative justify-center max-w-7xl mx-auto mt-24">			
			
			<div class="md:flex max-w-7xl w-full h-full mx-5 lg:mx-10">
			

			
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






