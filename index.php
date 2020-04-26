<!DOCTYPE html>
<html lang="pl">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>PHP Galery + LIGHTBOX</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/lightbox.min.css" rel="stylesheet">
	<script src="js/lightbox-plus-jquery.min.js"></script>

	<STYLE>	
	.example-image-link{ padding: 15PX;	}
	</STYLE>
</head>
<body>

	<div class="image-set container">
	<h4>Galeria PHP</h4>
	<!-- Kod PHP -->
	<?php

	$dirname = "images/";
	
	$images = glob("$dirname*.{png,jpeg,jpg,gif}", GLOB_BRACE);
	

	foreach($images as $image) {
		?>
		
        <a class="example-image-link col-xs-12 col-sm-6 col-md-4" href="<?php echo $image; ?>" data-lightbox="example-set" data-title="">
		<img class="example-image img-responsive" src="<?php echo $image; ?>" />
		</a>
		<?php
	}
	?>  <!-- koniec kodu PHP -->
	</div>
</body>

</html>