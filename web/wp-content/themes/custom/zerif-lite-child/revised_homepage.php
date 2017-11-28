<?php
/**
 * Template Name: Revised Homepage
 */
get_header(); ?>

<div class="clear"></div>

</header> <!-- / END HOME SECTION  -->

<?php 
//added by James
if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('homepage_hero') ) { ?>
     <div class="navbar-extrabar">Next hacknight: <a href="http://www.meetup.com/Civic-Tech-Toronto/">www.meetup.com/Civic-Tech-Toronto/</a></div>
<?php } ?>

<div id="content" class="site-content">

	<div class="about-civic-tech">
		<div class="container">

			<div class="clear" style="padding-top: 4%; padding-bottom: 4%;">

				<div class="content-left-wrap col-md-6" style="padding-bottom: 30px; padding-top: 30px;">
					<h1 class="alt-header" style="font-size: 36px; margin-bottom: 20px; text-align: right;">Hacknights for everyone.</h1>
					<video style="width: 100%; position: relative;" autoplay="true" id="bgvid" loop="true" muted="true" poster="/assets/cropped-13e263fdb71883cb81978c6aa75cc16a.jpg">
            <source src="<?php echo get_stylesheet_directory_uri() ?>/images/Hacknight_40_May_3rd_-_Brookfield_Institute_Hack2A_540.webm" type='video/webm; codecs="vp8, vorbis"'>
            <img src="<?php echo get_stylesheet_directory_uri() ?>/images/Hacknight_video_screencap.png" title="Civic Tech Toronto members working at hacknight">
					</video>
				</div>

				<div class="content-left-wrap col-md-6" style="text-align: left; padding-bottom: 30px; padding-top: 30px;">
					<p>Civic Tech Toronto is a diverse community of Torontonians interested in better understanding and finding solutions to civic challenges through technology, design or other means.</p>

					<p>The Civic Tech Toronto community comes together at our weekly Hacknights every Tuesday from 6:30pm to 9pm. At Hacknights, we come together to listen to awesome speakers, learn and share civic tech stories, and work together on projects that aim to make Toronto better.</p>

					<p>People of all backgrounds and skill levels are welcome to attend.</p>

					<p>Civic Tech Toronto aims to create a safe, welcoming and fun space for collaboration because we know that when people from different backgrounds take a collective and human-centred approach to addressing civic issues, amazing things can happen!</p>

					<p>Come out to a Civic Tech Toronto Hack Night to learn about civic tech and meet some great people.</p>

					<a style="margin: 0;" class="btn btn-primary custom-button red-btn" href="http://www.meetup.com/Civic-Tech-Toronto/">View all upcoming Hacknights</a>

					<div id="primary" class="content-area">

						<main id="main" class="site-main" role="main">

						</main><!-- #main -->

					</div><!-- #primary -->

				</div><!-- .content-left-wrap -->
			</div>
		</div><!-- .container -->
	</div>
	<hr class="spacious" style="width: 100%; margin-bottom: 0;">
	<div class="hacknight-process">
		<div class="container" style="padding: 40px 0;">
			<div class="clear">
				<div class="content-left-wrap col-md-12">
					<h1 class="alt-header">A typical Tuesday evening Hacknight</h1>
				</div>
			</div>
			<div class="clear">
				<div class="col-md-4" style="margin-bottom: 40px;">
					<img style="margin-bottom: 30px; width: 100px;" src="<?php echo get_stylesheet_directory_uri() ?>/images/icon-happy-speech-bubble.png" />
					<h2>6:30 pm</h2>
					<div style="height: 2px; background-color: rgba(0, 0, 0, 0.2); width: 16px; margin: 10px auto;"></div>
					<p>Socializing with fellow members</p>
				</div>
				<div class="col-md-4" style="margin-bottom: 40px;">
					<img style="margin-bottom: 30px; width: 100px;" src="<?php echo get_stylesheet_directory_uri() ?>/images/icon-podium.png" />
					<h2>7:00 pm</h2>
					<div style="height: 2px; background-color: rgba(0, 0, 0, 0.2); width: 16px; margin: 10px auto;"></div>
					<p>Scheduled speaker presents to the group</p>
				</div>
				<div class="col-md-4" style="margin-bottom: 40px;">
					<img style="margin-bottom: 30px; width: 100px;" src="<?php echo get_stylesheet_directory_uri() ?>/images/icon-collaboration.png" />
					<h2>7:40 pm</h2>
					<div style="height: 2px; background-color: rgba(0, 0, 0, 0.2); width: 16px; margin: 10px auto;"></div>
					<p>Attendees collaborate on projects</p>
				</div>
			</div>
		</div><!-- .container -->
	</div><!-- .hacknight-process -->
	<hr class="spacious" style="width: 100%; margin-top: 0;">
	<div class="past-speakers">
		<div class="container">
			<div class="content-left-wrap col-md-12">
				<h1 class="alt-header" style="font-size: 36px; margin-bottom: 20px;">Some of our past Hacknight speakers</h1>
			</div>
			<div class="clear speakers" style="text-align: center;">
				<div class="content-left-wrap col-lg-2 col-md-3 col-sm-4">
					<h5>Ryan Androsoff</h5>
					<span>Treasury Board of Canada</span>
				</div>
				<div class="content-left-wrap col-lg-2 col-md-3 col-sm-4">
					<h5>Vasiliki Bednar</h5>
					<span>Youth Employment Panel</span>
				</div>
				<div class="content-left-wrap col-lg-2 col-md-3 col-sm-4">
					<h5>Dave Biggs</h5>
					<span>MetroQuest</span>
				</div>
				<div class="content-left-wrap col-lg-2 col-md-3 col-sm-4">
					<h5>Jane Hilderman</h5>
					<span>Samara</span>
				</div>
				<div class="content-left-wrap col-lg-2 col-md-3 col-sm-4">
					<h5>Tris Lumley</h5>
					<span>New Philanthropy Capital</span>
				</div>
				<div class="content-left-wrap col-lg-2 col-md-3 col-sm-4">
					<h5>Jean-Noe Landry</h5>
					<span>Open North</span>
				</div>
				<div class="content-left-wrap col-lg-2 col-md-3 col-sm-4">
					<h5>Jane Hilderman</h5>
					<span>Samara</span>
				</div>
				<div class="content-left-wrap col-lg-2 col-md-3 col-sm-4">
					<h5>Jesse Coleman</h5>
					<span>City of Toronto</span>
				</div>
				<div class="content-left-wrap col-lg-2 col-md-3 col-sm-4">
					<h5>Jennifer Hollett</h5>
					<span>Atkinson Foundation</span>
				</div>
				<div class="content-left-wrap col-lg-2 col-md-3 col-sm-4">
					<h5>Jolene Cushman</h5>
					<span>Toronto Environmental Alliance</span>
				</div>
				<div class="content-left-wrap col-lg-2 col-md-3 col-sm-4">
					<h5>Judy Duncan</h5>
					<span>ACORN</span>
				</div>
				<div class="content-left-wrap col-lg-2 col-md-3 col-sm-4>
					<h5>Liane Fernandes</h5>
					<span>LHIN</span>
				</div>
				<div class="content-left-wrap col-lg-2 col-md-3 col-sm-4 hidden-xs">
					<h5>Jessica Smith Cross</h5>
					<span>Torontoist</span>
				</div>
				<div class="content-left-wrap col-lg-2 col-md-3 col-sm-4 hidden-xs">
					<h5>Jay Wall</h5>
					<span>Studio Jaywall</span>
				</div>
				<div class="content-left-wrap col-lg-2 col-md-3 col-sm-4 hidden-xs">
					<h5>Andy Best</h5>
					<span>City of Guelph</span>
				</div>
				<div class="content-left-wrap col-lg-2 col-md-3 col-sm-4 hidden-xs">
					<h5>Monique Baena-Tan</h5>
					<span>Code for America</span>
				</div>
				<div class="content-left-wrap col-lg-2 col-md-3 col-sm-4 hidden-xs">
					<h5>Christien Levien</h5>
					<span>LegalSwipe</span>
				</div>
				<div class="content-left-wrap col-lg-2 col-md-3 col-sm-4 hidden-xs">
					<h5>Mayaan Ziv</h5>
					<span>AccessNow</span>
				</div>
				<div class="col-sm-12">
					<a class="btn btn-primary custom-button red-btn" href="http://civictech.ca/updates/">View Past Speakers</a>
				</div>
			</div>
		</div><!-- .container -->
	</div>
	<hr class="spacious" style="width: 100%;">
	<div class="supporters">
		<div class="container">
			<div class="content-left-wrap col-md-12">
				<h1 class="alt-header" style="font-size: 36px; margin-bottom: 20px;">Our Supporters</h1>
			</div>
			<div class="clear supporters" style="text-align: center; margin-bottom: 80px;">




<!-- SPONSORS -->



<div class="col-xs-2"><a href="http://brookfieldinstitute.ca"><img src="<?php echo get_stylesheet_directory_uri() ?>/images/brookfield200.png" /></a></div>
<div class="col-xs-2"><a href="http://geothink.ca"><img src="<?php echo get_stylesheet_directory_uri() ?>/images/geothink.png" /></a></div>
<div class="col-xs-2"><a href="http://grllp.com"><img src="<?php echo get_stylesheet_directory_uri() ?>/images/gardiner.png" /></a></div>
<div class="col-xs-2"><a href="http://lighthouselabs.ca/"><img src="<?php echo get_stylesheet_directory_uri() ?>/images/logo-lighthouse.png" /></a></div>
<div class="col-xs-2"><a href="http://pivotal.io"><img src="<?php echo get_stylesheet_directory_uri() ?>/images/pivotal200.png" /></a></div>
<div class="col-xs-2"><a href="https://www.sandboxdmz.com/"><img src="<?php echo get_stylesheet_directory_uri() ?>/images/Sandbox200.png" /></a></div>
<div class="col-xs-2"><a href="http://twitter.com/"><img src="<?php echo get_stylesheet_directory_uri() ?>/images/twitter.png" /></a></div>
<div class="col-xs-2"><a href="http://myplanet.com/"><img src="<?php echo get_stylesheet_directory_uri() ?>/images/logo-myplanet.png" /></a></div>
<div class="col-xs-2"><a href="http://toronto.ca/"><img src="<?php echo get_stylesheet_directory_uri() ?>/images/logo-toronto.png" /></a></div>
<div class="col-xs-2">
<a href="https://www.randstad.ca/our-divisions/technologies/"><img src="<?php echo get_stylesheet_directory_uri() ?>/images/logo-randstad.png" /></a></div>
<div class="col-xs-2"><a href="http://publicpolicy.utoronto.ca/"><img src="<?php echo get_stylesheet_directory_uri() ?>/images/logo-sppg.png" /></a></div>
<div class="col-xs-2"><a href="http://hackeryou.com/"><img src="<?php echo get_stylesheet_directory_uri() ?>/images/logo-hackeryou.png" /></a></div>
<div class="col-xs-2"><a href="http://tunnelbear.com/"><img src="<?php echo get_stylesheet_directory_uri() ?>/images/logo-tunnelbear.png" /></a></div>
<div class="col-xs-2"><a href="http://rangle.io/"><img src="<?php echo get_stylesheet_directory_uri() ?>/images/logo-rangle.png" /></a></div>
<div class="col-xs-2"><a href="http://twg.io/"><img src="<?php echo get_stylesheet_directory_uri() ?>/images/logo-twg.png" /></a></div>
<div class="col-xs-2"><a href="http://interaccess.org/"><img src="<?php echo get_stylesheet_directory_uri() ?>/images/logo-interaccess.png" /></a></div>
<div class="col-xs-2"><a href="http://atkinsonfoundation.ca/"><img src="<?php echo get_stylesheet_directory_uri() ?>/images/atkinson.png" /></a></div>
<div class="col-xs-2"><a href="http://civicaction.ca/"><img src="<?php echo get_stylesheet_directory_uri() ?>/images/civic-action.png" /></a></div>
<div class="col-xs-2"><a href="http://elnonline.ca/"><img src="<?php echo get_stylesheet_directory_uri() ?>/images/logo-eln.png" /></a></div>
<div class="col-xs-2"><a href="http://connectedlab.com/"><img src="<?php echo get_stylesheet_directory_uri() ?>/images/logo-connectedlab.png" /></a></div>
<div class="col-xs-2"><a href="http://ontario.ca/"><img src="<?php echo get_stylesheet_directory_uri() ?>/images/logo-ontario.png" /></a></div>
<div class="col-xs-2"><a href="http://mozilla.org/"><img src="<?php echo get_stylesheet_directory_uri() ?>/images/logo-mozilla.png" /></a></div>
<div class="col-xs-2"><a href="http://architech.ca/"><img src="<?php echo get_stylesheet_directory_uri() ?>/images/logo-architech.png" /></a></div>
<div class="col-xs-2"><a href="http://thoughtworks.com/"><img src="<?php echo get_stylesheet_directory_uri() ?>/images/logo-thoughtworks.png" /></a></div>
<div class="col-xs-2"><a href="http://designcofounders.com/"><img src="<?php echo get_stylesheet_directory_uri() ?>/images/logo-designcofounders.png" /></a></div>
-->			</div>
		</div><!-- .container -->
	</div>
</div>
<?php if( is_user_logged_in() ){ ?>
<a href="http://civictech.ca/wp-admin/theme-editor.php?file=revised_homepage.php">Edit this page</a>
<?php } ?>
<?php get_footer(); ?>
