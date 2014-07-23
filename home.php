<?php
/*
Template Name: flatui-home
*/

get_header();
?>

<div id="home" class="row">
	<div class="span6">
		<div class="accordion">
			<h3 id="top-posts" class="accordion-heading toggle">
				<div class="genericon genericon-star"></div>
				Most Popular</h3>
			<ul class="accordion-items hidden-phone">
				<li><a href="/kevin/open-season-on-virgin-mobile-customer-data/">Virgin Mobile fails web security 101, leaves 6 million subscriber accounts wide open</a>
				<li><a href="/kevin/how-not-to-ask-questions-at-conference/">How not to ask questions at a conference</a>
				<li><a href="/kevin/site-redesign/">Tips for designing your personal site</a>
				<li><a href="/kevin/the-best-ways-to-find-bugs-in-your-code/">Why code review beats testing</a>
				<li><a href="/kevin/reddits-database-has-two-tables/">Reddit's database has two tables</a>
				<li><a href="https://kevinburke.bitbucket.org/markdowncss/">Markdown.css - let's make the Web prettier</a>
			</ul>
		</div>
		<div class="accordion">
			<h3 id="start-here" class="accordion-heading toggle">
				<div class="genericon genericon-reply"></div>
				Usability/Design
			</h3>
			<ul class="accordion-items hidden-phone">
				<li><a href="/kevin/the-real-reasons-you-cant-figure-out-how-to-code/">How beginning programmers should read a quickstart guide</a>
				<li><a href="https://www.twilio.com/engineering/2012/01/18/dont-skimp-on-documentation">How to write documentation for users that don't read</a>
				<li><a href="/kevin/client-library-design/">Designing an API Client Library</a>
				<li><a href="/kevin/how-to-talk-to-recruiters-at-a-career-fair/">How to talk to career fair recruiters</a>
				<li><a href="/kevin/cmcs-website-redesign-the-good-the-bad-and-the-ugly/">Breaking down my school's website redesign</a>
			</ul>
		</div>
		<div class="accordion clearfix">
			<h3 id="contact" class="accordion-heading toggle">
				<div class="genericon genericon-user"></div>
				Social
			</h3>
			<div class="hidden-phone contact-items">
				<div class="square">
					<div class="genericon genericon-mail"></div>
					<a href="mailto:kev@inburke.com">Email</a>
				</div>
				<div class="square">
					<a href="https://twitter.com/ekrubnivek"><div class="genericon genericon-twitter"></div>Twitter</a>
				</div>
				<div class="square">
					<a href="https://github.com/kevinburke"><div class="genericon genericon-github"></div>Github</a>
				</div>
				<div class="square">
					<a href="https://bitbucket.org/kevinburke">Bitbucket</a>
				</div>
				<div class="square">
					<a href="https://plus.google.com/111464885298476091898"><div class="genericon genericon-googleplus"></div>Google+</a>
				</div>
				<div class="square">
					<a href="https://linkedin.com/in/ekrub"><div class="genericon genericon-linkedin"></div>LinkedIn</a>
				</div>
			</div>
		</div>
		<div class="accordion">
			<h3 id="trivia" class="accordion-heading toggle">
				<div class="genericon genericon-chat"></div>
				Trivia
			</h3>
			<ul class="accordion-items hidden-phone">
				<li class="nopointer">has used a DVORAK keyboard since high school</li>
				<li>
				<a href="https://kev.inburke.com/kevin/escaping-from-your-email/">
					downloads email only once every 4 hours
				</a>
				</li>
				<li>
				<a href="https://www.economist.com/finance/displaystory.cfm?story_id=E1_RTVDTJR">
					started a Facebook group that was featured in the Economist
				</a>
				</li>
				<li class="nopointer">emailed his entire high school about how to use apostrophes</li>
				<li>
				<a href='https://www.youtube.com/watch?v=sdMoE7mr9H0'>
					made a 10-minute video on myths about foreign aid
				</a>
				</li>
			</ul>
		</div>
	</div>
	<div class="span6">
		<div class="accordion">
			<h3 id="twitter" class="accordion-heading toggle">
				<div class="genericon genericon-twitter"></div>
				Twitter</h3>
			<a class="twitter-timeline"
				data-chrome="noheader noborders transparent nofooter"
				data-link-color="#01d2ff"
				width="560"
				height="300"
				data-dnt="true"
				href="https://twitter.com/ekrubnivek"
				data-widget-id="318106551330148352"></a>
			</li>
		</div>
		<div class="accordion">
			<h3 id="recent-posts" class="accordion-heading toggle">
				<div class="genericon genericon-time"></div>
				Recent Posts
			</h3>
			<?php get_recent_posts("accordion-items"); ?>
		</div>
		<div class="accordion">
			<h3 id="projects" class="accordion-heading toggle">
				<div class="genericon genericon-category"></div>
				Projects
			</h3>
			<ul class="accordion-items hidden-phone">
				<li>
					<a href="https://github.com/kevinburke/doony">
						Doony - a more usable UI for Jenkins
					</a>
				</li>
				<li>
					<a href="https://github.com/kevinburke/hulk">
						Hulk - a human-usable, in-browser JSON editor
					</a>
				</li>
				<li>
				<a href="https://kevinburke.bitbucket.org/markdowncss">
					Markdown.css - easy, beautiful CSS for your Markdown files
				</a>
				</li>
				<li>
					<a href="https://github.com/kevinburke/tecate">
						Tecate.js - making it easier to spot syntax problems in HTML
					</a>
				</li>
				<li>
				<a href="http://goodmorningcmc.inburke.com">
					Good Morning CMC - a comprehensive daily email for CMC students
				</a>
				</li>
				<li>
				<a href="/luxr">
					LUXr - internship and website design
				</a>
				</li>
			</ul>
		</div>
	</div>
</div>
<?php
get_footer();
?>
