<?php get_header(); ?>
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<div class="entry-content">
			<section class="above-the-fold blp-row">
				<div class="blp-col-6 blp-col-xs-12">
					<h1 class="left-align">A simple bookmark manager</h1>
					<p>A clean and simple interface to organize your favorite websites. Open a new browser tab and see your sites load instantly. Try it free.</p>
					<div class="atf-cta">
						<a href="#" class="cta-on-chrome btn-soft-blue">Get it on Chrome</a>
						<a href="#" class="cta-on-firefox">Get it on Firefox</a>
					</div>
				</div>
				<div class="blp-col-6 blp-col-xs-12">
					<img src="<?php echo site_url();?>/wp-content/themes/twentytwentyone-child/assets/images/illustration-hero.svg" width="650px" height="auto">
				</div>
			</section>
			<section class="sec-features">
				<h2 class="center">Features</h1>
				<p>Our aim is to make it quick and easy for you to access your favourite websites. Your bookmarks sync between your devices so you can acess them on the go</p>
				<div class="feature-tab blp-row" >
					<button class="blp-col-4 blp-col-xs-12 tablink active" onclick="openFeature(event, 'feat-bookmark')">Simple Bookmarking</button>
					<button class="blp-col-4 blp-col-xs-12 tablink " onclick="openFeature(event, 'feat-searching')">Speedy Searching</button>
					<button class="blp-col-4 blp-col-xs-12 tablink " onclick="openFeature(event, 'feat-sharing')">Easy Sharing</button>
				</div>
				<div class="feature-container">
					<div class="one-click blp-row" id="feat-bookmark">
						<div class="blp-col-6 blp-col-xs-12"><img src="<?php echo site_url();?>/wp-content/themes/twentytwentyone-child/assets/images/illustration-features-tab-1.svg" width="100%" height="auto"></div>
						<div class="blp-col-6 blp-col-xs-12">
							<h2 class="left-align">Bookmark in one click</h2>
							<p>Organize your bookmarks however you like. Our simple drag-and-drop interface gives you complete control over how you manage your favourite sites.</p>
							<a href="#" class="btn-soft-blue">More Info</a>
						</div>
					</div>
					<div class="one-click blp-row" id="feat-searching">
						<div class="blp-col-6 blp-col-xs-12"><img src="<?php echo site_url();?>/wp-content/themes/twentytwentyone-child/assets/images/illustration-features-tab-2.svg" width="100%" height="auto"></div>
						<div class="blp-col-6 blp-col-xs-12">
							<h2 class="left-align">Intelligent search</h2>
							<p>Our powerful search feature will help you find saved sites in no time at all. No need to trawl through all of your bookmarks</p>
							<a href="#" class="btn-soft-blue">More Info</a>
						</div>
					</div>
					<div class="one-click blp-row" id="feat-sharing">
						<div class="blp-col-6 blp-col-xs-12"><img src="<?php echo site_url();?>/wp-content/themes/twentytwentyone-child/assets/images/illustration-features-tab-3.svg" width="100%" height="auto"></div>
						<div class="blp-col-6 blp-col-xs-12">
							<h2 class="left-align">Share your bookmarks</h2>
							<p>Easily share your bookmarks and collections with others. Create a shareable link that you can send at the click of a button</p>
							<a href="#" class="btn-soft-blue">More Info</a>
						</div>
					</div>
				</div>
				
			</section>
			<section class="sec-extention">
				<h2 class="center">Download the extention</h2>
				<p>We've got more brosers in the pipeline. Please do let us know if you've got a favourite you'd like us to prioritize</p>
				<div class="three-browsers blp-row">
					<?php
						if( have_rows('extention_items') ):
					    	while( have_rows('extention_items') ) : the_row();
					        $imgslug = get_sub_field('image_slug');
					        $name = get_sub_field('name');
					        $s_description = get_sub_field('short_description');
					        $link = get_sub_field('link');
					        ?>
					        	<div class="blp-col-4 blp-col-xs-12">
									<img src="<?php echo site_url();?>/wp-content/themes/twentytwentyone-child/assets/images/<?php echo  $imgslug; ?>" width="100px" height="auto">
									<h3 class="center"><?php echo  $name; ?></h3>
									<p><?php echo  $s_description; ?></p>
									<img src="<?php echo site_url();?>/wp-content/themes/twentytwentyone-child/assets/images/bg-dots.svg" width="100%" height="auto">
									<a href="#<?php echo  $link; ?>" class="link-inst-ext btn-soft-blue">Add & Install Extension</a>
								</div>
					        <?php

					        endwhile;
						endif;

					?>
					
				</div>
			</section>
			<section class="sec-faq">
				<h2 class="center">Frequently Asked Questions</h2>
				<p class="center">Here are some of our FAQs. If you have any other questions you'd like answered please feel free to email us.</p>
				<div class="faq-container">
				<?php
					if( have_rows('add_faq') ):
					    while( have_rows('add_faq') ) : the_row();
					        $title = get_sub_field('title');
					        $description = get_sub_field('description');
					        
					        ?>
					        <button class="btn-accordion"><?php echo $title; ?></button>
					        <div class="faq-panel">
					        	<p><?php echo $description; ?></p>
					        </div>
					        <?php
					    endwhile;
					endif;
				?>
				</div>
				<a class="center btn-soft-blue more-info">More Info</a>
			</section>
		</div><!-- .entry-content -->
	</article><!-- #post-<?php the_ID(); ?> -->
<?php get_footer(); ?>

<script type="text/javascript">
	// accordion script
	var acc = document.getElementsByClassName("btn-accordion");
	var i;

	for (i = 0; i < acc.length; i++) {
	  acc[i].addEventListener("click", function() {
	    /* Toggle between adding and removing the "active" class,
	    to highlight the button that controls the panel */
	    this.classList.toggle("active");

	    /* Toggle between hiding and showing the active panel */
	    var panel = this.nextElementSibling;
	    if (panel.style.display === "block") {
	      panel.style.display = "none";
	    } else {
	      panel.style.display = "block";
	    }
	  });
	}

	// featured tab script
	// function openFeature(featurename) {
	//   var i;
	//   var x = document.getElementsByClassName("one-click");
	//   for (i = 0; i < x.length; i++) {
	//     x[i].style.display = "none";  
	//   }
	//   document.getElementById(featurename).style.display = "flex";  
	// }

	function openFeature(evt, featurename) {
		console.log(featurename);
	  var i, x, tablinks;
	  x = document.getElementsByClassName("one-click");
	  for (i = 0; i < x.length; i++) {
	    x[i].style.display = "none";
	  }
	  tablinks = document.getElementsByClassName("tablink");
	  for (i = 0; i < x.length; i++) {
	    tablinks[i].className = tablinks[i].className.replace("active", "");
	  }
	  document.getElementById(featurename).style.display = "flex";
	  evt.currentTarget.className += "active";
	}
</script>