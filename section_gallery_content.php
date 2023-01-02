		
<?php

if (!isset($_GET["gid"])) {
	$_GET["gid"] = 0;
}

?>
		
		<div class="fotorama" data-nav="thumbs" data-width="100%" data-thumbwidth="100px" data-thumbheight="100px" data-max-width="100%"  data-max-height="70%" data-arrows="false" data-click="true" data-swipe="true" data-startindex="<?php echo $_GET["gid"];?>" style="width: 100%;">

			<img src="/images/property/aeda9c4daa384bd820ff5392bde64de5.jpg">
			<img src="/images/property/ab5c2d88302fde6795bd452df532f787.jpg">
			<img src="/images/property/5efc3e7b758702a2991af90e693f4dfb.jpg">
			<img src="/images/property/58d8cb147fc8e100259365be92354cfb.jpg">
			<img src="/images/property/475e5c0e049d60bc01bade6a4d57fc3d.jpg">
			<img src="/images/property/5092e5e2ed9d0187cc5a251848e8591d.jpg">
			<img src="/images/property/80c504578ec6d36099ee5f5100e5d3f5.jpg">
			<img src="/images/property/470c7a7e93b44189426fae8ed2847007.jpg">
			<img src="/images/property/3348fa5e9359cafc560c55452c553131.jpg">
			<img src="/images/property/5750a30c175e28950752dd1615f9797e.jpg">
			<img src="/images/property/6117bc28db550efd87849b0937a9f299.jpg">
			<img src="/images/property/bdf9c6cf5285dd1f290730e9e8f2461a.jpg">
			<img src="/images/property/c009a13a98b377270106beeb6079803b.jpg">
			<img src="/images/property/d0856a729fd2603fb5a1deb4defce21e.jpg">

		</div>
		
		<script>
			$(document).ready(function() {				
				$(".fotorama").fotorama();
			});
		</script>