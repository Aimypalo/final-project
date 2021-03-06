<?php get_header('home'); ?>

			<main class="site-content">
				<div class="pinned">
					<nav class="menu">
						<a class="home">Home</a>
						<a class="nav-links">Links</a>
						<a class="nav-services">Services</a>
						<a class="nav-about">About</a>
						<a class="nav-contact">Contact</a>
					</nav>
				</div>
				<div class="slide">
							<a class="switch-off">X</a>
							<p>I studied Painting at the Athens School of Fine Art where there was a natural progress in my paintings. I graduated in 2009 and when I moved to London in 2010 for my postgraduate studies my inspiration continued to source from the city’s environment and my research focused on the concept of urbanism. In 2011 I graduated from Central Saint Martins with a Master degree in Fine Arts and an interactive sound installation which I built for my final project.
							<br>
							<br>
							During all these years I have been participating in several art shows and group exhibitions around Europe. Art is a state of mind, it's a lifestyle and I cannot imagine myself without it.
							<br>
							<br>
							Since the beginning of 2014 I had been planning a long-term project that concerns travelling around the world with a sailing boat. After a radical decision for life change I left the city in May 2015. Inspired and passionate with nature my art focuses on the earth’s beauties and natural elements like water and earth. The concept of urbanism arrives to its self-deconstruction and it finally alters to the rebirth of primitive instincts.
							<br>
							<br>
							With the beliefs that the world belongs to those who explore it and the oceans are highways that connect people from every part of the world, I have started the mapping of my personal experience through a series of photographs, videos, diaries, notes and writings. This is the process of mapping my personal world rather than just a reproduction.
							<br>
							<br>
							While traveling in the sea I descovered a new talent that was hidden in me. I started scuba diving and became passionate with underwater photography. Then I realised that the digital world is very close to me and this could be the key to combine traveling and art.
							<br>
							<br>
							And here it comes the question; Why not all these things together? How can art and coding and traveling and technology be combined together? There is a stereotype which distinguishes the creative, full of imagination, 'out of the box' minds from the practical and mathematical ones. My mission is to prove that this is a myth.
							<br>
							<br>
							I started a Front End Web Development course at General Assembly in London where I learnt about the front-end's 'Holy Trinity'; Html, Css and JavaScript. And this is where I'm standing now, offering my knowledge in coding, high aesthetics and photography for innovative, dynamic and responsive websites.</p>
				</div>

				<form class= "contact-form" method="post" action="https://www.formspree.io/emmapalo@gmail.com">
					<p class="contact-form-off">X</p>
					<h3>GET IN TOUCH!</h3>
					<h1>TELL US ABOUT YOUR PROJECT</h1>
					<h4>We are happy to talk to you and share our ideas.</h4>
					
					<div class="form-field">
		  			    <label class="visually-hidden" for="name">Name</label>
		  			    <input class="text-input" type="text" name="full_name" id="name" placeholder="Your Full Name" required>
		  			</div>
    	  			<div class="form-field">
  			    		<label class="visually-hidden" for="email">Email</label>
  			    		<input class="text-input" type="email" name="email" id="email" placeholder="Your Email" required>
  			    	</div>
  			    	<div class="form-field">
  			    		<label class="visually-hidden" for="message">Your Message</label>
  			    		<textarea class="text-input" type="text" name="message" id="message" placeholder="Type your message" required></textarea>
  			    	</div>
  			    	<div class="form-field form-button">
  			    		<input type="submit" name="send" value="Send">
  	   				</div>
				</form>

				<section class="text-1">
					<p>Ready to enjoy remarkable image quality for exceptional user’s experience?</p>
					<a class="tell-us">Tell us about your project</a>
				</section>
				<p class="text-2">When art and technology enter in a simultaneous activity...</p>
				<section class="links">
					<h3>LINKS</h3>								
						<div class="photo-gallery">
							<a href="/photo-gallery/">
								<p>Photo Gallery</p>
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/linear-map/photo-gallery.gif">
							</a>
						</div>	
						<div class="map-services">
							<a href="#">
								<p>Services</p>
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/linear-map/services.gif">
							</a>
						</div>
						<div class="web-development">
							<a href="#">
								<p>Web Development & Design Solutions</p>
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/linear-map/design-solutions.gif">
							</a>
						</div>
						<div class="online-shop">
							<a href="#">
								<p>Photo Online Shop</p>
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/linear-map/photography-shop.gif">
							</a>
						</div>
						<div class="art">
							<a href="https://www.aimypalo.com" target="_blank">
								<p>Art</p>
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/linear-map/art.gif">
							</a>
						</div>
						<div class="about">
							<a>
								<p>About</p>
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/linear-map/about.gif">
							</a>
						</div>
						<div class="contact">
							<a>
								<p>Contact</p>
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/linear-map/contact.gif">
							</a>
						</div>
						<div class="drag-me">
							<a>Drag Me</a>
						</div>
					
				</section>
				<p class="text-3">...this is when the creative and ‘out of the box’ minds meet rationality and maths</p>
				<section class="services">
					<h3>WHAT WE OFFER</h3>
					<div class="grid-row clearfix">
						<div class="grid-column image-container">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/work.jpg" alt="working-environment">
						</div>
						<div class="grid-column text">
							<a href="#">
								<ul><p>Website Development</p>
									<li>Ideas development.</li>
									<li>Wordpress development.</li>
									<li>Dynamic websites designed just for you.</li>
									<li>Responsive innovative design with personality.</li>
									<li>Website management.</li>
								</ul>
							</a>
						</div>
					</div>
					<div class="grid-row clearfix">
						<div class="grid-column text">
							<a href="#">
								<ul><p>Image Editing</p>
									<li>Photography and image editing.</li>
									<li>The power of image in its maximum value.</li>
									<li>Attractive images which will boost up the visibility of your website or blog.</li>
								</ul>
							</a>
						</div>
						<div class="grid-column image-container">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/white-flower.jpg" alt="lily">
						</div>
					</div>
					<div class="grid-row clearfix">
						<div class="grid-column image-container">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/underwater.jpg" alt="star-fish">
						</div>
						<div class="grid-column text">
							<a href="#">
								<ul><p>Photo Online Shop</p>
									<li>Attractive landscapes, portraits and colourful underwater images from different places in the world.</li>
									<li>Available as limited edition prints, posters or for digital use.</li>
								</ul>
							</a>
						</div>
					</div>
				</section>
				<p>“I am in love with the sun and with the reflections in the water, and to paint them I would go around the world.”<br> 
				-Auguste Renoir</p>
			</main><!-- .site-content -->
			<?php get_footer(); ?>
		</div><!-- .site-container-->
		<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
		<script src="https://code.jquery.com/jquery-latest.min.js"></script>
		<script src="/wp-content/themes/ap-artstudio/jquery-plugin-ui/jquery-ui.js"></script>
		<script src="/wp-content/themes/ap-artstudio/js/main.js"></script>
	</body>
</html>
