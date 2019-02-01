</main>
</div>    
<!-- FOOTER STARTS HERE -->  
    <footer>
    	 <div class="footerContainer">
          <div><h2>Contact Us</h2>
          	<a href="https://www.google.com/maps/place/Smith+Cove+Cruise+Terminal/@47.6290942,-122.3821473,17z/data=!4m13!1m7!3m6!1s0x5490157c17c0ad33:0xfc8292b74fa51acb!2s2001+W+Garfield+St,+Seattle,+WA+98119!3b1!8m2!3d47.6332986!4d-122.3796528!3m4!1s0x5490156302df88ef:0x23e95d150e11e35d!8m2!3d47.6276208!4d-122.3828559" target="_blank">
            <p>CABOT CRUISES</p>
            <p>2001 West Garfield St</p>
            <p>Seattle, WA 98119</p></a>
            <br>
            <h2>Phone:</h2>
            <p><a href="tel:1-800-555-5555">1-800-555-5555</a></p>
            <br>
            <h2>Hours of Operation:</h2>
            <p>Monday-Friday 9am-4pm</p>
          </div> <!-- end column -->

          <div><h2>News Letter</h2>
            <p>Subscribe to our email list and stay up-to-date with our hottest offers and latest specials.</p>
            <form method="post" action="post">
				<fieldset>
					<label class="top"><input type="email" name="email" placeholder="someone@gmail.com" required></label>
				</fieldset>
				<input type="submit" value="Subscribe" class ="submitBtn">
			</form>
          </div> <!-- end column -->

          <div class="cabot"><h2>Why Cabot Cruises</h2>
            <p>Cabot Cruises is a travel agency providing the best cruise
			deals on our online travel website. We can help you with all
			inclusive vacaMons including discounted cruises.
			<br><br>
			We do not sell travel to residents of Delaware, Iowa,
			Florida, Hawaii and Washington state because those states
			are just weird. If you are a resident of one of these states,
			call your congressman and tell them to change the
			regulations.</p>
          </div> 

        </div> <!-- end footer container -->

<!-- SOCIAL ICONS STARTS HERE -->  
    <ul class="social">
			<li class="facebook"><a href="#"></a></li>
			<li class="twitter"><a href="#"></a></li>
			<li class="youtube"><a href="#"></a></li>
			<li class="linkedin"><a href="#"></a></li>
			<li class="google"><a href="#"></a></li>
		</ul>

    <p class="jhfooter">©2019 Julianne Halversen &#9679; <a href="http://juliannehalversen.com" target=_blank>http://juliannehalversen.com</a></p>
    </footer>



  <script src="js/menuToggle.js"></script> 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	 <script src="slick/slick.min.js"></script>
	 <script>
	 	$(document).ready(function(){
          $('.myslider').slick(
          {
            autoplay:true,
            dots: true,
            arrows: false,
            cssEase: 'ease-out',
            speed: 2000,
            autoplaySpeed: 10000
          });
        });
	 </script> 

	 <script src="js/scripts.js"></script>
	 
	 <script type="application/ld+json">
	 	{
		  "@context": "http://schema.org",
		  "@type": "TravelAgency",
		  "name": "Cabot Cruises",
		  "description": "Cabot Cruises is a travel agency providing the best cruise deals on our online travel website.",
		  "openingHours": "Mo-Fr 09:00-16:00",
		  "telephone": "+18005555555",
		  "faxNumber": "+18005555555",
		  "address": {
		  	"@type": "PostalAddress",
		  	"streetAddress": "2001 West Garfield St",
		  	"addressLocality": "Seattle",
		  	"addressRegion": "WA"
		  },
		  "image": "http://fullpath.com/logo1x.png",
		  "priceRange": "$400-$3000"
		}



	 </script>
</body>
</html>