<?php
$protocol = ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
?>

<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
	<meta charset="utf-8">

	
	<?php
	
	echo '
	<title>'.$pg_title.'</title>
	<meta name="description" content="'.$pg_desc.'">
	
	<meta property="og:url" content="'.$og_url.'" />
	<meta property="og:type" content="'.$og_type.'" />
	<meta property="og:title" content="'.$og_title.'" />
	<meta property="og:description" content="'.$og_desc.'" />
	<meta property="og:image" content="'.$protocol.$og_img.'" />
	
	';
	?>

	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<link rel="icon" href="/images/favicons/favicon.svg">
	<link rel="apple-touch-icon" sizes="180x180" href="/images/favicons/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="/images/favicons/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="/images/favicons/favicon-16x16.png">
	<link rel="manifest" href="/images/favicons/site.webmanifest">
	<link rel="mask-icon" href="/images/favicons/safari-pinned-tab.svg" color="#5bbad5">
	<link rel="shortcut icon" href="/images/favicons/favicon.ico">
	<meta name="msapplication-TileColor" content="#da532c">
	<meta name="msapplication-config" content="/images/favicons/browserconfig.xml">
	<meta name="theme-color" content="#ffffff">

	<link rel="stylesheet" href="/css/fa.css">
	<link rel="stylesheet" href="/css/fonts.css">
	<link rel="stylesheet" href="/css/style.css">
	
	<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/web3/1.6.1/web3.min.js" integrity="sha512-5erpERW8MxcHDF7Xea9eBQPiRtxbse70pFcaHJuOhdEBQeAxGQjUwgJbuBDWve+xP/u5IoJbKjyJk50qCnMD7A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

	<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js" integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU=" crossorigin="anonymous"></script>
	
	<script src="https://code.iconify.design/2/2.1.0/iconify.min.js"></script>
	
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Atkinson+Hyperlegible:wght@400;700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="/css/fotorama.css">
	<script src="/js/fotorama.js"></script>
	
	
	<!-- popper js for bootstrap tooltip -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	
	<script type="text/javascript" src="https://appraisalsaver.com/wp-content/themes/bosa/assets/bootstrap/js/bootstrap.min.js?ver=0.8" id="bootstrap-js"></script>
	
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-CCEB27CVKE"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'G-CCEB27CVKE');
	</script>

</head>

<body>
