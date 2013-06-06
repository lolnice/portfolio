<!DOCTYPE html>
<html lang="de">
	<head>
		<meta charset="utf-8" />
		<title>Portfolio - Jan Klostermann</title>
		<link rel="stylesheet" href="css/reset.css" />
		<link rel="stylesheet" href="css/960.css" />
		<link rel="stylesheet" href="css/style.css" />
		<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,400' rel='stylesheet' type='text/css'>
	</head>
<body>
	
	<?php
		$path = "img/background_" . rand(0, 1) . ".jpg";
	?>

	<?php
		include('getColors.php');
	?>
	
	<div id="bg_container" style="background-image: url('<?php echo $path; ?>');"></div>
	<header>
		<nav>
			<ul>
				<li><a href="#" id="active_site"><img src="img/icons/icon_home_alt.png" /></a></li>
				<li><a href="#"><img src="img/icons/icon_portfolio.png" /></a></li>
				<li><a href="#"><img src="img/icons/icon_about.png" /></a></li>
			</ul>
		</nav>
	</header>
	<div class="container_12" id="site_wrapper">
		<div id="slider">
			<div class="grid_4 slider_box"><img class="slider_img" src="img/work/vector_portrait.png" />
			<img class="slider_type" src="img/icons/icon_vector.png" />
			</div>
			<div class="grid_4 slider_box"><img class="slider_img" src="img/work/fritz_sw.jpg" />
			<img class="slider_type" src="img/icons/icon_photo.png" />
			</div>
			<div class="grid_4 slider_box"><img class="slider_img" src="img/work/shield_logo.png" />
			<img class="slider_type" src="img/icons/icon_vector.png" />
			</div>
		</div>
		<div class="clear"></div>
	</div>
	<div id="white_wrapper">
		<div class="container_12">
			<div class="grid_12" id="content_wrapper">
				<div class="grid_12 alpha" id="color_bars_top">
				<?php
					printDivW(940);
				?>
				</div>
				<div class="clear"></div>
				<div class="grid_8 alpha articles">
				<article>
					<h1>Latest headline</h1>
					<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>

					<p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p> 

					<p>Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</p> 
				</article>
				</div>
				<aside class="grid_4 omega" id="latest_headlines">
					<h2>Latest headlines</h2>
					<div class="grid4 omega">
					<h3>News_1</h3>
					<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod.</p>
					</div>
					<div class="grid4 omega">
					<h3>News_2</h3>
					<p>At vero eos et accusam et justo duo dolores et ea rebum.</p>
					</div>
				</aside>
				<div class="clear"></div>
							<div class="grid_12 alpha" id="color_bars_bot">
					<?php
						printDivW(940);
					?>
			</div>	
				
				<div class="clear"></div>
			</div>
		</div>		
		</div>
</body>
</html>