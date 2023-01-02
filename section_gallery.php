

<div id="section-gallery" class="fixed w-full h-full top-0 left-0 bottom-0 right-0 bg-main-blue" style="display: none; z-index: 9999;">
	
	<a id="btn-close-gallery" class="fal fa-times absolute text-gray-500 hover:text-white text-3xl cursor-pointer transition duration-200 right-0 mt-5 mr-7"></a>

	<div id="section-gallery-content-box" class="w-full h-full flex items-center">
		
		&nbsp;
		
	</div>
	
</div>

<script>
	$("#btn-close-gallery").click(function() {
		
		$("#section-gallery").fadeOut("fast");
		
		return false;
	});				
</script>