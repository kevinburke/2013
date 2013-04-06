<?php
/*
Template Name: flatui-home
*/

get_header();
?>

<div class="row">
  <div class="span6">
	<ul id="top-posts" class="accordion">
	  <li class="list-toggle">
	  <h3 class="accordion-heading toggle">Most Popular</h3>
	  <ul class="accordion-items hidden-phone">
		<li><a href="/kevin/open-season-on-virgin-mobile-customer-data/">Virgin Mobile fails web security 101, leaves 6 million subscriber accounts wide open</a>
		<li><a href="/kevin/how-not-to-ask-questions-at-conference/">How not to ask questions at a conference</a>
		<li><a href="/kevin/site-redesign/">Tips for designing your personal site</a>
		<li><a href="/kevin/the-best-ways-to-find-bugs-in-your-code/">Why code review beats testing</a>
		<li><a href="/kevin/site-redesign/">Reddit's database has two tables</a>
		<li><a href="http://kevinburke.bitbucket.org/markdowncss/">Markdown.css - let's make the Web prettier</a>
	  </ul>
	  </li>
	</ul>
	<ul id="start-here" class="accordion">
	  <li class="list-toggle">
		<h3 class="accordion-heading toggle">Start Here</h3>
		<ul class="accordion-items hidden-phone">
		  <li><a href="/kevin/the-real-reasons-you-cant-figure-out-how-to-code/">How beginning programmers should read a quickstart guide</a>
		  <li><a href="http://www.twilio.com/engineering/2012/01/18/dont-skimp-on-documentation">How to write documentation for users that don't read</a>
		  <li><a href="/kevin/the-best-ways-to-find-bugs-in-your-code/">Designing an API Client Library</a>
		  <li><a href="/kevin/how-to-talk-to-recruiters-at-a-career-fair/">How to talk to career fair recruiters</a>
		  <li><a href="/kevin/cmcs-website-redesign-the-good-the-bad-and-the-ugly/">Breaking down my school's website redesign</a>
		</ul>

	  </li>
	</ul>
	<ul id="contact" class="accordion">
	  <li class="list-toggle">
		<h3 class="accordion-heading toggle">Social</h3>
		<ul class="accordion-items hidden-phone">
		  <li><a href="mailto:kev@inburke.com">Email</a>
		  <li><a href="http://twitter.com/ekrubnivek">Twitter</a>
		  <li><a href="http://github.com/kevinburke">Github</a>
		  <li><a href="http://bitbucket.org/kevinburke">Bitbucket</a>
		  <li><a href="https://plus.google.com/111464885298476091898">Google+</a>
		  <li><a href="http://linkedin.com/in/ekrub">LinkedIn</a>
		</ul>

	  </li>
	</ul>
  </div>
  <div class="span6">
  <ul id="twitter" class="accordion">
	<li class="list-toggle">
	  <h3 class="accordion-heading toggle">Twitter</h3>
	  <a class="twitter-timeline" 
		data-chrome="noheader noborders transparent nofooter" 
		data-link-color="#fff" 
		width="560"
		height="300"
		data-dnt="true" 
		href="https://twitter.com/ekrubnivek" 
		data-widget-id="318106551330148352"></a>
	</li>
  </ul>
  <ul id="recent-posts" class="accordion">
	<li class="list-toggle">
	  <h3 class="accordion-heading toggle">Recent Posts</h3>
	  <?php get_recent_posts("accordion-items"); ?>
	</li>
  </ul>
  <ul id="projects" class="accordion">
	<li class="list-toggle">
	  <h3 class="accordion-heading toggle">Projects</h3>
	  <ul class="accordion-items hidden-phone">
		<li>
		  <a href="http://github.com/kevinburke/tecate">
			Tecate.js - making it easier to spot syntax problems in HTML
		  </a>
		</li>
		<li>
		  <a href="http://goodmorningcmc.inburke.com">
			Good Morning CMC - a comprehensive daily email for CMC students
		  </a>
		</li>
		<li>
		  <a href="http://kevinburke.bitbucket.org/markdowncss">
			Markdown.css - easy, beautiful CSS for your Markdown files
		  </a>
		</li>
		<li>
		  <a href="http://luxr.webfactional.com">
			LUXr - internship and website design
		  </a>
		</li>
		<li>
		  <a href="http://rssafter5.appspot.com">
			RSS After 5 - scheduled RSS delivery
		  </a>
		</li>
	  </ul>
	</li>
  </ul>
  <ul id="trivia" class="accordion">
	<li class="list-toggle">
	  <h3 class="accordion-heading toggle">Trivia</h3>
	  <ul class="accordion-items hidden-phone">
		<li class="nopointer">has used a DVORAK keyboard since high school</li>
		<li>
		  <a href="http://kev.inburke.com/kevin/escaping-from-your-email/">
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
		  <a href='http://www.youtube.com/watch?v=sdMoE7mr9H0'>
		   made a 10-minute video on myths about foreign aid
		  </a>
		</li>
	  </ul>
	</li>
  </ul>
</div>
</div>
<?php
get_footer();
?>
