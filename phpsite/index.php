<?php
$title="Home";
include '_top.php';
?>
		<div class="myslider">
			<picture>
				<source srcset="images/slider1.jpg" media="(min-width: 29.25rem)">
            	<img src="images/slider1s.jpg" alt="slider1">
			</picture>

			<picture>
				<source srcset="images/slider2.jpg" media="(min-width: 29.25rem)">
            	<img src="images/slider2s.jpg" alt="slider2">
			</picture>

			<picture>
				<source srcset="images/slider3.jpg" media="(min-width: 29.25rem)">
            	<img src="images/slider3s.jpg" alt="slider3">
			</picture>

			<picture>
				<source srcset="images/slider4.jpg" media="(min-width: 29.25rem)">
            	<img src="images/slider4s.jpg" alt="slider4">
			</picture>
		</div> <!-- end slider -->



		<h1>Recent Blog Articles</h1>

			<figure class="blog">
				<img src="images/blog1.jpg" alt="moutain">
				<h2>Top Alaskan Hikes</h2>
			 	<span>May 1, 2018</span>	
			</figure>

		 	<figure class="blog">
		 		<img src="images/blog2.jpg" alt="fish">
		 		<h2>Alaska's Best Fish</h2>
		 		<span>June 15, 2018</span>	
		 	</figure>

		 	<figure class="blog">
		 		<img src="images/blog3.jpg" alt="bear">
		 		<h2>Wildlife Adventure</h2>
		 		<span>July 26, 2018</span>	
		 	</figure>

		 	<figure class="blog">
		 		<img src="images/blog4.jpg" alt="hike">
		 		<h2>Must-do Hikes</h2>
		 		<span>August 18, 2018</span>	
		 	</figure>
<?php
include '_bot.php';
?>			  
	