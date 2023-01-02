


<section id="section_signup" class="w-full h-auto" style="background: url(/images/signup-bg.png) no-repeat top right; background-size: cover;">

	<div class="w-full relative max-w-7xl mx-auto">			
		
		<div class="lg:flex items-center max-w-7xl w-full h-full px-5">
		
			<div class="w-full lg:w-1/2 relative pb-0 py-16 lg:py-24 lg:pr-10">
				
				<div class="text-4xl md:text-5xl font-extrabold text-white text-left" style="line-height: 1.10;">
					<span class="text-light-blue">Be the first to hear the new updates</span> on rental properties each month!
				</div>

			</div>
			
			<div class="get_notified_box w-full lg:w-1/2 relative pb-16 lg:py-16 lg:py-24 text-white" style="max-width: 600px;">
				
				<div class="text-xl font-medium pt-12 lg:pt-0 pb-5 lg:pl-9">
					Sign up with your email
				</div>
				
				
				<form method="post" data-drip-embedded-form="482516731" id="drip-ef-482516731-2">
					<div class="bg-white rounded-full px-5 flex items-center">
						<input id="email" name="fields[email]" type="email" class="w-9/12 px-3 py-1 my-4 text-dark text-lg" placeholder="Type your email" autocomplete="off" required="">
						<a id="get_notified" class="block font-normal rounded-full px-2 py-4 inline-block w-full bg-light-blue text-main-blue text-center text-sm absolute right-0 mr-2" href="#" style="max-width: 120px;">Sign Up</a>
					</div>
					<input type="hidden" name="tags[]" id="tags" value="waitlist" tabindex="-1">
				</form>

				<div class="py-3">
					<span class="font-light text-xs block text-left lg:pl-9">
						By signing up for email notifications, you agree to our Privacy Policy and Terms of Use.
					</span>
				</div>
				
				
						
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
								$(".get_notified_box #email_error_msg").removeClass("text-green-600").addClass("text-red-600").html("Please enter a valid Email Address");
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
								setTimeout(function(){
									$(".get_notified_complete").fadeIn();
									$("#drip-ef-482516731-2 input, textarea").val("");
									$("#drip-ef-482516731-2").css({"opacity":"","pointer-events":"auto"});
									$(".get_notified_box #email_error_msg").removeClass("text-red-600").addClass("text-green-600").html("Email submitted");
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
	
</section>



