<?php 

$page_name = "get-notified";

$site_name = "Closin";

$pg_title = $site_name;
$pg_desc = "";

$og_url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$og_type = "article";
$og_title = $pg_title;
$og_desc = $pg_desc;
$og_img = "closin.com/images/Closin-800x420.jpg";

require 'header.php';

?>

<?php require 'top.php';?>
	
	<?php require 'section_mobile_menu.php' ?>
	

	<section class="relative h-screen" style="background: url(/images/get_notified_bg.png) no-repeat bottom right; background-size: cover; min-height: 800px;">
		
		<?php require 'section_header.php' ?>
		
		<div class="w-full h-auto flex items-center text-white font-normal">
			
			<div class="w-full h-full flex items-center relative max-w-7xl mx-auto md:px-10 lg:px-10" style="min-height: 815px;">
		
				<div class="w-full lg:flex relative pb-32 px-10 md:px-0" style="height: 50%;">
				
					<div class="get_notified_complete w-full mb-14 lg:mb-0 lg:w-2/5" style="display: none;">
					
						<div class="main_title_text text-5xl md:text-7xl font-normal leading-none text-light-blue" style="letter-spacing: -2px;">
							Interest<br>Submitted
						</div>
						
						<div class="md:text-xl font-normal leading-none text-white py-4">
							We'll send you an email as soon as investing has opened for this property.
						</div>
					
					</div>
				
				
					<div class="get_notified_box w-full mb-14 lg:mb-0 lg:w-2/5">
					
						<div class="main_title_text text-5xl md:text-7xl font-normal leading-none text-light-blue" style="letter-spacing: -2px;">
							Don't Miss Out!
						</div>
						
						<div class="md:text-xl font-normal leading-none text-white py-4">
							Be notified as soon as this property is available.
						</div>
						
						<form method="post" data-drip-embedded-form="482516731" id="drip-ef-482516731-2">
						
							<input id="email" name="fields[email]" type="email" class="w-full bg-transparent border px-3 py-2.5 my-4 rounded-md text-white" placeholder="Email address" style=" border-color: #3D4A6D; background: rgba(255, 255, 255, 0.06);" autocomplete="off" required>
						
							<input type="hidden" name="tags[]" id="tags" value="waitlist" tabindex="-1">
							
						</form>
						
						<a id="get_notified" class="w-full font-normal text-center rounded-full px-8 py-5 text-main-blue inline-block my-5 bg-light-blue" href="javascipt:void();">
							Get Notified
						</a>
						
						<div class="text-red-600 text-center" id="email_error_msg" style="height: 25px;"></div>
						
						<script>
							$("#get_notified").click(function() {
								
								var email = $(".get_notified_box #email").val().replace(/\s/g, "");
								
								if(!email) {
									$(".get_notified_box #email").focus();
									return false;
								}
															
								if(email){
									if(isValidEmailAddress(email)){
										$(".get_notified_box #email_error_msg").html("");
									} else {
										$(".get_notified_box #email_error_msg").html("Please enter a valid Email Address");
										$(".get_notified_box #email").focus();
										return false;
									}
								}
								
								$("#drip-ef-482516731-2").css({"opacity":"0.5","pointer-events":"none"}).submit();
															
								return false;
							});
							
							$("#drip-ef-482516731-2").submit(function() {
									
								var sendData = $("#drip-ef-482516731-2").serialize();
								
								$.ajax({
									method: "POST",
									url: "https://www.getdrip.com/forms/482516731/submissions",
									data: sendData,
									traditional: true,
									complete: function(xhr, status){
										$(".get_notified_box").fadeOut("fast");
										setTimeout(function(){
											$(".get_notified_complete").fadeIn();
											$("#drip-ef-482516731-2 input, textarea").val("");
											$("#drip-ef-482516731-2").css({"opacity":"","pointer-events":"auto"});
										}, 400);
									},
								});
								
								return false;
							});
												
													
							$(".get_notified_box #email").keyup(function() {
								$(".get_notified_box #email_error_msg").html("");
							});
							
							function isValidEmailAddress(emailAddress) {
								//var pattern = new RegExp(/^(("[\w-\s]+")|([\w-]+(?:\.[\w-]+)*)|("[\w-\s]+")([\w-]+(?:\.[\w-]+)*))(@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$)|(@\[?((25[0-5]\.|2[0-4][0-9]\.|1[0-9]{2}\.|[0-9]{1,2}\.))((25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\.){2}(25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\]?$)/i);
								var pattern = new RegExp(/(?:((?:[\w-]+(?:\.[\w-]+)*)@(?:(?:[\w-]+\.)*\w[\w-]{0,66})\.(?:[a-z]{2,6}(?:\.[a-z]{2})?));*)/g);
								return pattern.test(emailAddress);
							}
							
						</script>
						
					</div>
					
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






