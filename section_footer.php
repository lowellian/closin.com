
<section class="w-full relative" style="background: linear-gradient(to bottom, #081F5C 45%, #051234 100%);">

	<div class="hidden md:block absolute md:w-1/2 h-ful top-0 bottom-0 right-0" style="background: url(./images/triangles.png) no-repeat 0% 7%;"></div>

	<div class="w-full max-w-7xl mx-auto px-12 md:px-10" style="min-height: 650px;">
	
		<div class="md:flex py-24">
		
			<div class="text-beige text-3xl w-full md:w-1/2">
				<div class="text-6xl md:text-7xl lg:text-8xl font-normal tracking-tight text-white">
					Invest with<br><span style="color: #81EEF3;">Closin.</span>
				</div>
				<div class="w-full text-lg lg:text-xl font-normal tracking-widest inline-block pt-8 md:pt-12 pb-10 md:pb-16 text-white">
				
				<?php					
					if($page_name == "property"){
						echo '
							<a href="/get-notified">
								<i class="far fa-arrow-right mr-4 text-light-blue" style="transform: rotate(-45deg);"></i>
								INVEST NOW
							</a>
						';
					} else {
						echo '
							<a href="/property">
								<i class="far fa-arrow-right mr-4 text-light-blue" style="transform: rotate(-45deg);"></i>
								INVEST NOW
							</a>
						';
					}					
				?>
				
				</div>
				<div class="w-full md:flex" style="color: #D4EFFF; display: none;">
					<div class="w-full md:w-1/2 xl:w-2/6">
						<ul>
							<li><a class="btn_faq text-base font-normal" href="#">FAQs</a></li>
							<li><a class="text-base font-normal" href="/privacy-policy">Privacy Policy</a></li>
							<li><a class="text-base font-normal" href="/terms">Terms of Service</a></li>
						</ul>
					</div>
					<div class="w-full md:w-1/2 xl:w-3/6 pt-8 md:pt-0">
						<ul>
							<li><span class="text-base font-normal">&nbsp;</span></li>
							<li><a class="text-base font-normal" href="mainto:hello@closin.com">hello@closin.com</a></li>
							<li>
								<a class="text-base font-normal fab fa-facebook mr-1" href="https://facebook.com/ClosinRE" target="_blank"></a>
								<a class="text-base font-normal fab fa-instagram mr-1" href="https://instagram.com/ClosinRE" target="_blank"></a>
								<a class="text-base font-normal fab fa-twitter mr-1" href="https://twitter.com/ClosinRE" target="_blank"></a>
							</li>
						</ul>
					</div>
				</div>
				
				<div class="w-full md:flex" style="color: #D4EFFF;">
					<div class="w-full md:w-1/2 xl:w-2/6">
						<ul>
							<li><a class="btn_faq text-base font-normal" href="#">FAQs</a></li>
							<li><a class="text-base font-normal" href="mainto:hello@closin.com">hello@closin.com</a></li>
							<li>
								<a class="text-base font-normal fab fa-facebook mr-1" href="https://facebook.com/ClosinRE" target="_blank"></a>
								<a class="text-base font-normal fab fa-instagram mr-1" href="https://instagram.com/ClosinRE" target="_blank"></a>
								<a class="text-base font-normal fab fa-twitter mr-1" href="https://twitter.com/ClosinRE" target="_blank"></a>
							</li>
						</ul>
					</div>
				</div>
				
				<div class="w-full md:w-4/5 border-b my-8" style="border-color: rgba(212, 239, 255, 0.5);"></div>
				
				<div class="text-sm lg:text-base font-normal inline-block uppercase" style="color: #D4EFFF; letter-spacing: 3px">
					©2022 Closin. All right reserved
				</div>
				
			</div>
			<div class="md:w-1/2"></div>
		
		</div>
	
	</div>

</section>


<script>
	$(".btn_faq").click(function() {
	  $("html, body").animate({
		  scrollTop: $("#section_faq").offset().top
	  }, 800);
	  return false;
	});
</script>
	
	