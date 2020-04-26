<!DOCTYPE html>
<html lang="pl">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>PHP Galery MASONRY  + LIGHTBOX</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/lightbox.min.css" rel="stylesheet">
	<script src="js/lightbox-plus-jquery.min.js"></script>
	
<style>
.gallery {
  column-rule: 0px solid #eee;
  column-gap: 17px;
  width: 100%;
  margin: 0 auto;
}
.gallery.gallery-columns-3 {
  -webkit-column-count: 3;
  /* Chrome, Safari, Opera */
  -moz-column-count: 3;
  /* Firefox */
  column-count: 3;
}

@media only screen and (max-width: 1023px) {
  .gallery.gallery-columns-3 {
    -webkit-column-count: 2;
    /* Chrome, Safari, Opera */
    -moz-column-count: 2;
    /* Firefox */
    column-count: 2;
  }
}

@media only screen and (max-width: 720px) {
  .gallery.gallery-columns-3 {
    -webkit-column-count: 1;
    /* Chrome, Safari, Opera */
    -moz-column-count: 1;
    /* Firefox */
    column-count: 1;
  }
}


.gallery .gallery-item {
  display: inline-block;
  vertical-align: top;
  margin-bottom: 17px;
  max-width: 100%;
  width: 100%;
}
.gallery .gallery-item img{
  max-width: 100%;
  height:auto;
  display:block;
  margin: 0 auto;
      width: 100%;
}
pre{
	    background-color: #e8e8e8;
		padding:5px;
}

</style>
</head>
<body>

	<div class="image-set container">
	<h4>Galeria PHP - MASONRY </h4>
	<div class="gallery gallery-columns-3">
	<!-- Kod PHP -->
	<?php

	$dirname = "g-2/";
	
	$images = glob("$dirname*.{png,jpeg,jpg,gif}", GLOB_BRACE);
	

	foreach($images as $image) {
		?>
		
        <a class="example-image-link gallery-item" href="<?php echo $image; ?>" data-lightbox="example-set" data-title="">
		<img class="example-image img-responsive" src="<?php echo $image; ?>" />
		</a>
		<?php
	}
	?>  <!-- koniec kodu PHP -->
	</div>
	</div>

	<div class="container">
	
		<br>
	<br>
	<br>
	<p>PHP / HTML</p>
	<pre class="lang:default decode:true ">&lt;div class="image-set container"&gt;
	&lt;h4&gt;Galeria PHP - MASONRY &lt;/h4&gt;
	&lt;div class="gallery gallery-columns-3"&gt;
	&lt;!-- Kod PHP --&gt;
	&lt;?php

	$dirname = "g-2/";
	
	$images = glob("$dirname*.{png,jpeg,jpg,gif}", GLOB_BRACE);
	

	foreach($images as $image) {
		?&gt;
		
        &lt;a class="example-image-link gallery-item" href="&lt;?php echo $image; ?&gt;" data-lightbox="example-set" data-title=""&gt;
		&lt;img class="example-image img-responsive" src="&lt;?php echo $image; ?&gt;" /&gt;
		&lt;/a&gt;
		&lt;?php
	}
	?&gt;  &lt;!-- koniec kodu PHP --&gt;
	&lt;/div&gt;
	&lt;/div&gt;
</pre>

<p>CSS</p>
<pre>
.gallery {
  column-rule: 0px solid #eee;
  column-gap: 17px;
  width: 100%;
  margin: 0 auto;
}
.gallery.gallery-columns-3 {
  -webkit-column-count: 3;
  /* Chrome, Safari, Opera */
  -moz-column-count: 3;
  /* Firefox */
  column-count: 3;
}

@media only screen and (max-width: 1023px) {
  .gallery.gallery-columns-3 {
    -webkit-column-count: 2;
    /* Chrome, Safari, Opera */
    -moz-column-count: 2;
    /* Firefox */
    column-count: 2;
  }
}

@media only screen and (max-width: 720px) {
  .gallery.gallery-columns-3 {
    -webkit-column-count: 1;
    /* Chrome, Safari, Opera */
    -moz-column-count: 1;
    /* Firefox */
    column-count: 1;
  }
}


.gallery .gallery-item {
  display: inline-block;
  vertical-align: top;
  margin-bottom: 17px;
  max-width: 100%;
  width: 100%;
}
.gallery .gallery-item img{
  max-width: 100%;
  height:auto;
  display:block;
  margin: 0 auto;
      width: 100%;
}
pre{
	    background-color: #e8e8e8;
		padding:5px;
}

</pre>

</div>
	
</body>

</html>