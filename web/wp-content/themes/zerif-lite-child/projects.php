<?php
/*
 * Template Name: Projects
 * Template Post Type: page
 */

get_header();  ?>
<div class="clear"></div>
</header> <!-- / END HOME SECTION  -->

<div id="content" class="site-content">
	<div class="container">
		<div id="primary" class="content-area">
			<main id="main" class="site-main" role="main">
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
          <header class="entry-header">
            <h1 class="entry-title"><?php the_title(); ?></h1>
          </header><!-- .entry-header -->

          <div style="border: 2px solid #ccc; padding: 30px;">
            <h3 class="project-page-header">Every Tuesday evening, citizens meet at Civic Tech Toronto to collaborate on projects aimed at finding solutions to civic challenges.</h3>
            <h3 class="project-page-header no-margin">Listed below are a snippet of the projects you can contribute to.</h3>
          </div>
          &nbsp;
          <div class="clear">
            <div class="project-image"><img class="size-thumbnail alignleft wp-image-566" src="http://civictech.ca/wp-content/uploads/2016/04/budgetpedia.jpg" alt="20160329-DSC08845" />
            </div>
            <div class="project-content">
              <h1>Budgetpedia <span class="project-phase">Alpha</span></h1>
              <p class="m-b-1 project-copy">The mission of this project is to support informed debate about the Toronto budget. Specifically, provide tools for activists to facilitate insight into the Toronto budget contents, provide ready access to annual budget process information, and more.</p>
              <p class="m-b-1">Lead: <a href="mailto:henrik@civictech.ca.">Henrik Bechmann</a>
              </p>
              <p class="m-b-2">Slack: <a href="https://civictechto.slack.com/archives/budgetpedia-gen">#budgetpedia-gen</a>
              </p>

              <div><a class="btn red-btn btn-primary custom-button no-margin margin-r-1 m-b-1" href="http://budgetpedia.ca/">View the Project</a> <a class="btn btn-primary custom-button green-btn no-margin m-b-1" href="https://drive.google.com/drive/u/0/folders/0B208oCU9D8OuSms5bEZxcnRLZzA">Contribute on GDrive</a> <a class="btn btn-primary custom-button green-btn no-margin m-b-1" href="https://github.com/CivicTechTO/budgetcommons-dev-frontend">Contribute on Github (frontend)</a> <a class="btn btn-primary custom-button green-btn no-margin m-b-1" href="https://github.com/CivicTechTO/budgetcommons-dev-backend">Contribute on Github (backend)</a>
              </div>
              <div><a class="attribution" href="https://www.flickr.com/photos/thomashawk/5405835151/">Photo by Thomas Hawk</a>
              </div>
            </div>
          </div>

          <hr class="spacious" />

          <div class="clear">
            <div class="project-image"><img class="size-thumbnail alignleft wp-image-566" src="http://civictech.ca/wp-content/uploads/2016/04/meshnet-1.jpg" alt="20160329-DSC08845" />
            </div>
            <div class="project-content">
              <h1>Toronto Meshnet <span class="project-phase">Alpha</span></h1>
              <p class="m-b-1 project-copy">Meshnets are highly distributed, redundant intranet networks. A series of nodes, usually fashioned from cannibalized routers, emit signals that create a free self-contained and self-reliant network that’s accessible to any internet capable devices within range. We are dedicated to the growth of free-to-use wireless Internet access in Toronto's public and publicly accessible spaces.</p>
              <p class="m-b-1">Leads: Benedict Lau, Garry Ing, Dawn Walker</p>
              <p class="m-b-2">Chat: <a href="https://chat.tomesh.net/#/room/#tomesh:tomesh.net">#tomesh</a>
              </p>

              <div><a class="btn red-btn btn-primary custom-button no-margin margin-r-1 m-b-1" href="https://tomesh.net/">View the Project</a> <a class="btn btn-primary custom-button green-btn no-margin m-b-1" href="https://tomesh.net/get-involved/">Contribute</a>
              </div>
              <div><a class="attribution" href="https://dribbble.com/shots/2098174-Nodes-experiment/attachments/378749">Illustration by Gabriel Ghnassia</a>
              </div>
            </div>
          </div>

          <hr class="spacious" />

          <div class="clear">
            <div class="project-image"><img class="size-thumbnail alignleft wp-image-566" src="http://civictech.ca/wp-content/uploads/2016/04/councilmatic.jpg" alt="Toronto City Council Chambers" />
            </div>
            <div class="project-content">
              <h1>Toronto Councilmatic <span class="project-phase">Alpha</span></h1>
              <p class="m-b-1 project-copy">The purpose of this project is to create a beautiful citizen-controlled website that tracks all things related to City Council: the legislation introduced and passed, its various committees and the meetings they hold, and the councillors themselves.</p>
              <p class="m-b-1">Lead: <a href="https://twitter.com/patconnolly">Patrick Connolly</a>
              </p>
              <p class="m-b-2">Slack: <a href="https://civictechto.slack.com/archives/councilmatic-toronto">#councilmatic-toronto</a>
              </p>

              <div><a class="btn red-btn btn-primary custom-button no-margin margin-r-1 m-b-1" href="https://tor-councilmatic-staging.herokuapp.com">View the Project</a><a class="btn btn-primary custom-button green-btn no-margin m-b-1" href="https://github.com/CivicTechTO/tor-councilmatic/milestones/Public%20Launch">Contribute on Github</a>
              </div>
              <div><a class="attribution" href="http://www1.toronto.ca/City%20Of%20Toronto/Social%20Development,%20Finance%20%26%20Administration/Shared%20Content/Newcomer/Images/Newcomer%20Day%202015/ND59.JPG">Photo by City of Toronto</a>
              </div>
            </div>
          </div>

          <hr class="spacious" />

          <div class="clear">
            <div class="project-image"><img class="size-thumbnail alignleft wp-image-566" src="http://civictech.ca/wp-content/uploads/2016/04/city-of-brains-2.jpg" alt="20160329-DSC08845" />
            </div>
            <div class="project-content">
              <h1>City of Brains Project <span class="project-phase">Experiment</span></h1>
              <p class="m-b-1 project-copy">The purpose of this project is to develop an understanding of how people access mental health services in Toronto, to share those stories to help others find their way to help, to identify common challenges in those stories, and then, design and develop technology solutions to support people in overcoming those challenges.</p>
              <p class="m-b-1">Lead: <a href="http://www.markfreeman.ca/">Mark Freeman</a>
              </p>
              <p class="m-b-2">Slack: <a href="https://civictechto.slack.com/archives/city_of_brains">#city_of_brains</a>
              </p>

              <div><a class="btn red-btn btn-primary custom-button no-margin margin-r-1 m-b-1" href="http://www.cityofbrainsproject.com/">View the Project</a>
              </div>
              <div><a class="attribution" href="https://www.flickr.com/photos/bwjones/8797663832/">Photo by Bryan Jones</a>
              </div>
            </div>
          </div>

          <hr class="spacious" />

          <div class="clear">
            <div class="project-image"><img class="size-thumbnail alignleft wp-image-566" src="http://civictech.ca/wp-content/uploads/2016/04/free-the-electorate.jpg" alt="20160329-DSC08845" />
            </div>
            <div class="project-content">
              <h1>Free the Electorate <span class="project-phase">Experiment</span></h1>
              <p class="m-b-1 project-copy">Ontario election results are posted on the Elections Ontario website, but generally aren't readily available outside election cycles, when the information is in the press. Poll-by-poll results are available as pdfs and spreadsheets back to 2007, and prior to that only basic election results are published online. We want to make this data more easily available by creating a set of standard documents and a database, as well as visualizations of that data for public use.</p>
              <p class="m-b-1">Leads: Peter Rose, Ann Catton</p>
              <p class="m-b-2">Slack: <a href="https://civictechto.slack.com/archives/freetheelectorate">#freetheelectorate</a>
              </p>

              <div><a class="btn btn-primary custom-button green-btn no-margin m-b-1" href="https://github.com/anncatton/free-the-electorate">Contribute on Github</a>
              </div>
              <div><a class="attribution" href="https://www.flickr.com/photos/paul/6195792050/">Photo by Paul Schreiber</a>
              </div>
            </div>
          </div>

          <hr class="spacious" />

          <div class="clear">
            <div class="project-image"><img class="size-thumbnail alignleft wp-image-566" src="http://civictech.ca/wp-content/uploads/2016/04/opendata.jpg" alt="Open Data" />
            </div>
            <div class="project-content">
              <h1>Citizen Data Portal <span class="project-phase">Experiment</span></h1>
              <p class="m-b-1 project-copy">The purpose of this project is to create a community-managed platform that will collect all Toronto datasets in a single place, whether they originate from official city sources or from citizens.</p>
              <p class="m-b-1">Lead: <a href="https://twitter.com/patconnolly">Patrick Connolly</a>
              </p>
              <p class="m-b-2">Slack: <a href="https://civictechto.slack.com/archives/data-portal">#data-portal</a>
              </p>

              <div><a class="btn red-btn btn-primary custom-button no-margin margin-r-1 m-b-1" href="http://data.t0ronto.ca/">View the Project</a><a class="btn btn-primary custom-button green-btn no-margin m-b-1" href="https://github.com/patcon/data.toronto.io">Contribute on Github</a>
              </div>
              <div><a class="attribution" href="http://www.flickr.com/photos/jwyg/4528443760/">Photo by Jonathan Gray</a>
              </div>
            </div>
          </div>

          <hr class="spacious" />

          <div style="border: 2px solid #ccc; padding: 30px; margin-bottom: 40px;">
            <h2>Interested in contributing to one of the groups?</h2>
            <h2 style="margin-bottom: 0;"><a href="http://www.meetup.com/Civic-Tech-Toronto/">Come to one of our hacknights to meet the project team.</a></h2>
          </div>

        </article>
			</main><!-- #main -->
		</div><!-- #primary -->
	</div><!-- .container -->

<?php get_footer(); ?>
