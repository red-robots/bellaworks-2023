<!DOCTYPE html>
<html>
<head>
	<title>Build a Website and a Brand</title>
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<!-- optionally increase loading priority -->
	<link rel="preload" as="style" href="https://fonts.googleapis.com/css2?family=Arimo&family=Open+Sans&display=swap">
	<link href="https://fonts.googleapis.com/css2?family=Arimo&family=Open+Sans&display=swap" rel="stylesheet" media="print" onload="this.onload=null;this.removeAttribute('media');">
	<!-- no-JS fallback -->
	<noscript>
	    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Arimo&family=Open+Sans&display=swap">
	</noscript>

	<link rel="preload" href="https://use.typekit.net/ddx3hzt.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
	<noscript><link rel="stylesheet" href="https://use.typekit.net/ddx3hzt.css"></noscript>

	<link rel="preload" href="<?php bloginfo('template_url'); ?>/style.css?v=4.4" as="style" onload="this.onload=null;this.rel='stylesheet'">
	<noscript><link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style.css?v=4.4"></noscript>

	<!-- <link rel="stylesheet" href="https://use.typekit.net/ddx3hzt.css"> -->

	<link rel="apple-touch-icon" sizes="180x180" href="<?php bloginfo('template_url'); ?>/favicons/apple-touch-icon.png">
	<link rel="icon" type="image/png" href="<?php bloginfo('template_url'); ?>/favicons/favicon-32x32.png" sizes="32x32">
	<link rel="icon" type="image/png" href="<?php bloginfo('template_url'); ?>/favicons/favicon-16x16.png" sizes="16x16">
	<link rel="manifest" href="<?php bloginfo('template_url'); ?>/favicons/manifest.json">
	<link rel="mask-icon" href="<?php bloginfo('template_url'); ?>/favicons/safari-pinned-tab.svg" color="#5bbad5">
</head>



<?php
/**
 * Template Name: Template Landing Page
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ACStarter
 */
wp_head();
//get_header(); ?>
<body>
	<div id="primary" class="content-area-full">
		<main id="main" class="site-main" role="main">

			
				<?php
				while ( have_posts() ) : the_post();

					

				endwhile; // End of the loop.
				?>

				<section class="landing">
					<section class="landing-hero template">
						<h1 class="template">Get a Professionally Designed Website In <span>Days</span> not Months</h1>
						<div class="subhead template">Grow your business with smart digital marketing</div>
						<div class="turd">
							Save money / Save time / Do it right
						</div>
						
					</section>

					<section class="landing-what">


						<div class="center">
							<div class="button white">
								<div class="action">
									<a class=" bob " href="#form">
										<div class="circle">
											<span class="icon arrow"></span>
										</div>
										<p class="button-text blue">Get Started</p>
									</a>
								</div>
							</div>
						</div>


						<div class="row even">
							<div class="left even">
								<img  src="<?php bloginfo('template_url'); ?>/images/landing-create.png">
							</div>
							<div class="right even">
								<h2 class="template">Stick to your business / Be Professional</h2>
								<p class="template">Spend your time building your business, not on trying to DIY your website. Hire experts or risk wasting time, money, and ruining your brand.</p>
							</div>
						</div>
						<div class="row odd">
							<div class="left odd">
								<img  src="<?php bloginfo('template_url'); ?>/images/landing-stand-out.png">
							</div>
							<div class="right odd">
								<h2 class="template">Succeed at Digital Marketing</h2>
								<p class="template">The internet is a competitive, technical space. Build your website to industry standards or risk being lost online.</p>
							</div>
						</div>
						<div class="row even">
							<div class="left even">
								<img  src="<?php bloginfo('template_url'); ?>/images/landing-growth.png">
							</div>
							<div class="right even">
								<h2 class="template">Communicate with purpose</h2>
								<p class="template">Website copywriting follows a recipe that helps connect sites with both humans and search engines. Follow our guide or work with our copywriters to avoid copy that reads like a term paper.</p>
							</div>
						</div>
						<div class="row odd">
							<div class="left even">
								<img  src="<?php bloginfo('template_url'); ?>/images/landing-growth.png">
							</div>
							<div class="right even">
								<h2 class="template">Reach your goals for growth</h2>
								<p class="template">Make plans to convert your visitors to customers or lose out on valuable growth for your business.</p>
							</div>
						</div>
						<div class="clear"></div>
						<div class="center">
							<div class="button white">
								<div class="action">
									<a class=" bob " href="#form">
										<div class="circle">
											<span class="icon arrow"></span>
										</div>
										<p class="button-text blue">Get Started</p>
									</a>
								</div>
							</div>
						</div>
					</section>

					<section class="guide">
						<div class="left">
							<div class="imgwrap">
								<img src="<?php bloginfo('template_url'); ?>/images/explain.png">
							</div>
						</div>
						<div class="right">
							<h2>About/Guide</h2>
							<p>Tell us your goals, and let our team craft a plan to build your best website.</p>
							<ul>
								<li>Build a professional website that looks as fresh and smart as your company</li>
								<li>Get clear on who you are and why customers should want to work with you</li>
								<li>Present your services in a way that attracts your customers</li>
								<li>Design a user experience that flows and results in next step actions</li>
								<li>Protect your website with quality website hosting and maintenance services</li>
							</ul>
						</div>
						<div class="clear"></div>
						<div class="center">
							<div class="button white">
								<div class="action">
									<a class=" bob " href="#form">
										<div class="circle">
											<span class="icon arrow"></span>
										</div>
										<p class="button-text blue">Learn More</p>
									</a>
								</div>
							</div>
						</div>
					</section>

					<section class="landing-saying">
						<h2>What Our Customers Are Saying</h2>
						<section class="testimonials wrapper">
							<div class="testi">
								I contacted Bellaworks because they had done some work for other clients I trust. After a few short meetings, Bellworks was able to design a clean and effective website that's eye catching and highly functional. I highly recommend this group.
								<div class="who">- Kelly Frenzel, Frenzel Properties</div>
							</div>
							<div class="testi">
								Owning a small business isn't easy and it truly takes a village. I'm so thankful that Bellaworks is part of my village - because they always put my business' needs first. Bellaworks not only shares their ideas - they listen to yours and incorporate them in the best way possible. I can't wait to work with Bellaworks again soon!
								<div class="who">- Chase Williams, The Institute for Speech and Debate</div>
							</div>
							<div class="testi">
								Consistently impressed with the level of commitment and quality of work this office gives us for multiple sites. We're incredibly happy to have found them.
								<div class="who">- Remy Thurston, FS Food Group</div>
							</div>
						</section>
					</section>


					<section class="landing-why">
						<h2>Process</h2>
						<p>Get started in 3 easy steps:</p>
						<div class="flex wrapper">
							<div class="row">
								<div class="circle">1</div>
								<div class="icon js-blocks">
									<img src="<?php bloginfo('template_url'); ?>/images/landing-solution.png">
								</div>
								<h3>Think about your goals – what can a website help you do?</h3>
								<!-- <p>We work with you to identify your unique website or marketing needs and suggest the right solutions for your budget.</p> -->
							</div>
							<div class="row">
								<div class="circle">2</div>
								<div class="icon js-blocks">
									<img src="<?php bloginfo('template_url'); ?>/images/landing-communication.png">
								</div>
								<h3>Contact Bellaworks</h3>
								<!-- <p>Our small team focuses on building a personal relationship with every client, and we’re always just a phone call or e-mail away.</p> -->
							</div>
							<div class="row">
								<div class="circle">3</div>
								<div class="icon js-blocks">
									<img src="<?php bloginfo('template_url'); ?>/images/landing-service.png">
								</div>
								<h3>Compete and win online</h3>
								<!-- <p>We’re ready to be your all-in-one solution to building your website, developing your brand, and marketing your business.</p> -->
							</div>
						</div>
					</section>


					<section class="landing-start">
						<h2>Ready to get started?</h2>
						<div class="center">
							<div class="button white">
								<div class="action last">
									<a class=" bob " href="#form">
										<div class="circle">
											<span class="icon arrow"></span>
										</div>
										<p class="button-text blue">Get Started</p>
									</a>
								</div>
							</div>
						</div>
					</section>


					<section class="bw-story">
						<div class="wrap-story">
							<p>At Bellaworks, we focus on finding the right solution for you. If you’re a start-up or working within a smaller budget, that doesn’t mean you shouldn’t be able to afford a stellar website that represents your brand. We can provide a variety of site design options that provide you with a professional, conversion-optimized site you can be proud of.</p>
						</div>
					</section>


				</section>



			

		</main><!-- #main -->
	</div><!-- #primary -->

<?php wp_footer(); ?>
</body>
</html>
