<?php

define("LAST_EDIT", "Jan 18, 2012");

/* Descriptions */
define("NAME_AND_SURNAME", "Brian Feister");
define("NAME", "Brian");
define("SURNAME", "Feister");
define("PROFESSION_SHORT", "Front End Guru");
define("PROFESSION_LONG", "Front End Web Developer, Designer, &amp; Creative Director");

/* Details */
define("PHONE", "302.562.0308");
define("ADDRESS_CITY_STATE", "Newark, Delaware");
define("ADDRESS_POST_CODE", "19711");

/* URLs */
define("EMAIL", "brian@dreamstarstudios.com");

define("WEBSITE", "http://dreamstarstudios.com");
define("WEBSITE_FRIENDLY", "dreamstarstudios.com");
define("RSS2", "http://brianfeister.com/feed/");
define("RSS92", "http://brianfeister.com/feed/rss/");
define("ATOM", "http://brianfeister.com/feed/atom/");

/* PATHS (with trailing slash) */
define("CV_WEB_PATH", "http://brianfeister.com");
define("CV_WEB_PATH_FRIENDLY", "brianfeister.com");
define("CV_DOC_PATH", "http://brianfeister.com/brian_feister_resume.pdf");

define("CSS_PATH", "");

?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/xhtml; charset=UTF-8" />
	<title><?=NAME?> <?=SURNAME?> <?=PROFESSION_SHORT?> - Curriculum Vitae</title>
	<link rel="profile" href="http://microformats.org/profile/hcard" />

	<script type="text/javascript">
	(function(){
	  // if firefox 3.5+, hide content till load (or 3 seconds) to prevent FOUT
	  var d = document, e = d.documentElement, s = d.createElement('style');
	  if (e.style.MozTransform === ''){ // gecko 1.9.1 inference
	    s.textContent = 'h1,h2,h3,h4,h5,h6{visibility:hidden}';
	    var r = document.getElementsByTagName('script')[0];
	    r.parentNode.insertBefore(s, r);
	    function f(){ s.parentNode && s.parentNode.removeChild(s); }
	    addEventListener('load',f,false);
	    setTimeout(f,3000); 
	  }
	})();
	 
	// a nice improvement to this script is to only hide the elements using webfonts 
	// with visibility:hidden instead of the entire <body>
	// that's up to you to select them in that textContent line, though
	
	var b = document.documentElement;
		b.setAttribute('data-useragent',  navigator.userAgent);
		b.setAttribute('data-platform', navigator.platform );
		
	
	</script>
	
  <link rel="stylesheet" href="<?=CSS_PATH?>style2.css" type="text/css" media="screen"  />
  <link href="//get.pictos.cc/fonts/1721/3" rel="stylesheet" type="text/css">

	
	<!--
	/*
	 * MyFonts Webfont Build ID 797642, 2011-05-05T19:11:19-0400
	 * 
	 * The fonts listed in this notice are subject to the End User License
	 * Agreement(s) entered into by the website owner. All other parties are 
	 * explicitly restricted from using the Licensed Webfonts(s).
	 * 
	 * You may obtain a valid license at the URLs below.
	 * 
	 * Webfont: Kautiva Book Caps
	 * URL: http://new.myfonts.com/fonts/sudtipos/kautiva/book-caps/
	 * Foundry: Sudtipos
	 * Copyright: Copyright 2004, SUDTIPOS. Disenada por Alejandro Paul y Alfredo Graziani. Todos los derechos reservados. Buenos Aires, Argenti
	 * License: http://www.myfonts.com/viewlicense?1056
	 * Licensed pageviews: 20,000/month
	 * CSS font-family: KautivaCaps
	 * CSS font-weight: normal
	 * 
	 * Webfont: Kautiva Book
	 * URL: http://new.myfonts.com/fonts/sudtipos/kautiva/book/
	 * Foundry: Sudtipos
	 * Copyright: Copyright 2004, SUDTIPOS. Disenada por Alejandro Paul y Alfredo Graziani. Todos los derechos reservados. Buenos Aires, Argenti
	 * License: http://www.myfonts.com/viewlicense?1056
	 * Licensed pageviews: 20,000/month
	 * CSS font-family: Kautiva
	 * CSS font-weight: normal
	 * 
	 * Webfont: Kautiva Book Italic
	 * URL: http://new.myfonts.com/fonts/sudtipos/kautiva/book-italic/
	 * Foundry: Sudtipos
	 * Copyright: Copyright 2004, SUDTIPOS. Disenada por Alejandro Paul y Alfredo Graziani. Todos los derechos reservados. Buenos Aires, Argentina.
	 * License: http://www.myfonts.com/viewlicense?1056
	 * Licensed pageviews: 20,000/month
	 * CSS font-family: Kautiva-Italic
	 * CSS font-weight: normal
	 * 
	 * Webfont: Kautiva Black
	 * URL: http://new.myfonts.com/fonts/sudtipos/kautiva/black/
	 * Foundry: Sudtipos
	 * Copyright: Copyright 2004, SUDTIPOS. Disenada por Alejandro Paul y Alfredo Graziani. Todos los derechos reservados. Buenos Aires, Argentina.
	 * License: http://www.myfonts.com/viewlicense?1056
	 * Licensed pageviews: 20,000/month
	 * CSS font-family: KautivaBlack
	 * CSS font-weight: normal
	 * 
	 * (c) 2011 Bitstream Inc
	*/
	
	
	-->
	<link rel="stylesheet" type="text/css" href="/assets/fonts/kautiva.css">
	
	<meta name="viewport" content="initial-scale=0.7;" />
	
  <link rel="stylesheet" href="<?=CSS_PATH?>print.css" type="text/css" media="print"  />
	<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?=RSS2?>" />
	<link rel="alternate" type="text/xml" title="RSS .92" href="<?=RSS92?>" />
	<link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?=ATOM?>" />
</head>
<body id="curriculumvitae">

<div id="canvas">

	
	<div id="fixedmenu">
		<ul>
			<li><a href="#curriculumvitae" title="Scroll to the top"><strong><?=NAME?> <?=SURNAME?></strong> <small><?=PROFESSION_SHORT?></small></a></li>
			<li><a href="#skills" title="">Skills</a>
				<ul>
					<li><a href="#ui-design" title="User Interface Design">User Interface Design</a></li>
					<li><a href="#design" title="Illustration, Design, Photomanipulation">Design, Illustration, Photomanipulation</a></li>
					<li><a href="#front-end-development" title="Front End Web Development">Front End Web Development</a></li>
					<li><a href="#back-end-development" title="Back End Web Development">Back End Web Development</a></li>
					<li><a href="#photography" title="Photography">Photography</a></li>
					<li><a href="#operations" title="Operations Management">Operations Management</a></li>
					<li><a href="#miscellaneous" title="Miscellaneous">Miscellaneous</a></li>
				</ul>
			</li>
			<li><a href="#experience" title="Employment">Employment</a></li>
			<li><a href="#languages" title="Languages">Languages</a></li>
			<li><a href="#education" title="Education">Education</a></li>
			<li><a href="#references" title="References">References</a></li>
			<li>&nbsp;</li>
			<li><a href="<?=CV_DOC_PATH?>" title="Download as PDF document (.pdf)"><strong>Download as PDF</strong></a></li>
		</ul>
	</div>
	
	<div class="page pagefirst">
	
			<h1><?=NAME_AND_SURNAME?><br /><span><?=PROFESSION_LONG?></span></h1>
			
			<div class="icon" data-icon="a"></div>
			<div class="icon" data-icon="b"></div>
			<div class="icon" data-icon="c"></div>
			<div class="icon" data-icon="d"></div>
			<div class="icon" data-icon="e"></div>
			<div class="icon" data-icon="f"></div>
			<div class="icon" data-icon="g"></div>
			<div class="icon" data-icon="h"></div>
			<div class="icon" data-icon="i"></div>
			<div class="icon" data-icon="j"></div>
			<div class="icon" data-icon="k"></div>

		
			<p class="subh1">Curriculum Vitae<br />
			Microformat friendly<br />
			<?=LAST_EDIT?></p>
            <p class=" subh1-print onlyprint">A microformat friendly CV is available at <a href="<?=CV_WEB_PATH?>"><?=CV_WEB_PATH_FRIENDLY?></a></p>

			<img class="light_speed" src="assets/img/light_speed.png" />
			<p>Growing up, my father always encouraged me to be an entrepreneur. His advice helped me to become a self-starter with a strong work ethic and dedication to my craft. Now after having founded 5 small startups (all profitable), I have a growing desire to put my diverse skillset to work doing the things I love in a team environment with other creative professionals. <strong>I am excited about the opportunity to merge my talents with a larger team</strong> on projects that require a pool of resources beyond that which I alone could ever hope to provide.</p>
			
			<p>As the Creative Director of DreamStar Studios, I deliver engaging and modern web-based UI / UX experiences that comply with modern web technology conventions as they mature and evolve within the web professional community, including CSS3 &amp; XHTML, jQuery / javascript, WordPress, PHP, and many others.  Highly sensitive to modern web technologic conventions and aesthetic standards, I specialize in brand development with keen attention to the business objectives of clients. I hold all of my design work to a pixel-perfect standard.</p>  
			
			<p>Able to draw on a wide array of business experience, I have founded and directed numerous small businesses in a span of 5 years and I would love to bring share my experience and knowledge with your team.</p>
            
	<div id="contact" class="hcard vcard">
			<p class="fn n" lang="ca">Name: <strong><span class="given-name"><?=NAME?></span> <span class="family-name"><?=SURNAME?></span></strong></p>
			<p>Job Title: <span class="title"><?=PROFESSION_LONG?></span></p>
			
			<p>Website: <a href="<?=WEBSITE?>" class="url personal"><?=WEBSITE_FRIENDLY?></a></p>
			<p>Portfolio: <a href="http://dreamstarstudios.com" class="url portfolio">dreamstarstudios.com</a></p>
			<p>E-mail: <a href="mailto:<?=EMAIL?>" class="email"><?=EMAIL?></a></p>
			<p class="tel"><span class="type">Phone</span>: <span class="pref"><?=PHONE?></span></p>
			<p class="adr">Address: <span class="street-address"><?=ADDRESS_CITY_STATE?></span> <span class="postal-code"><?=ADDRESS_POST_CODE?></span></p>
		</div>
		
		
		<div id="skills">
			<h2>Skills</h2>
			
			<h3 id="ui-design">User Interface Design</h3>
			
			<p>Design user interfaces and websites designs focusing on creative edge with a keen eye for usability and user experience.</p>
			<p>Table-less cross-browser hand-coded <strong>CSS2-3/XHTML</strong> with experience following <strong><abbr title="World Wide Web Consorcium">W3C</abbr> standards</strong> (later abandoned in favor of responsive CSS development that reacts to the quirks of various browsers) to ensure the best formatting and the fastest code possible in <strong><abbr title="Internet Explorer 7">IE7</abbr></strong>, IE8, IE9, IE10, Firefox, Safari, Chrome and <strong>iPhone</strong>. <strong>WordPress</strong> theme design for many websites (including high-level backend functionality for many - <a href="#front-end-development">see front end web development</a>).</p>
			
			<p class="software">Software: Adobe Photoshop and Adobe Illustrator.</p>

			<h3 id="design">Design, Illustration, &amp; Photomanipulation</h3>
			
			<p><strong>Expert-level</strong> knowledge and expertise of Adobe <strong>Photoshop</strong> and Adobe <strong>Illustrator</strong>. Strong understanding of photography, composition, layout, balance, and color theory as a professional photographer (<a class="external" target="_blank" href="http://brianfeisterphotography.com">portfolio</a>), photo re-toucher, and <strong>expert level</strong> photo-manipulator / digital artist.</p>
			<p>Primary expertise in web formats, but also well-versed in the standards of print design. Created posters, flyers, brochures, business cards, and templates following branding specifications, typography, structure, balance, color theory with an eye for high impact design.</p>
			<p class="software">Software: Adobe Photoshop, Adobe InDesign, and Adobe Illustrator.</p>

			<h3 id="front-end-development">Front End Web Development</h3>
			
			<p><strong>Clean code</strong>, <strong>Usability</strong>, <strong>Accessibility</strong>, organic <strong><abbr title="Search Engine Optimization">SEO</abbr></strong>, <strong>progressive enhancement</strong> and <strong>graceful degradation</strong>, Information Architecture. Focus on responsive web design for presentational optimization across the diverse array of user platforms. Leverage modern techniques that optimize design aesthetic while minimizing server-load (<strong>@font-face</strong>, <strong>CSS3</strong> media-queries, gradients, drop-shadows, text-shadow, and many others).</p>
			<p>Highly engaged with the open-source web community, use frameworks to save time and work with effective pre-defined software models. Employ <strong>adaptive</strong> &amp; <strong>responsive CSS</strong> when designing for mobile devices and various screen resolutions (resize your browser to see an example on brianfeister.com). </p>
		  <p><strong><abbr lang="en" title="Extensible Hypertext Markup Language" class="skill">XHTML</abbr></strong>, <strong><abbr lang="en" title="Cascading Style Sheets" class="skill">CSS</abbr></strong> (including 960gs, HTML5 Boilerplate).</p> <strong>CSS3</strong> (animations, transition, transforms, etc.), <strong><abbr lang="en" title="Extensible Markup Language">XML</abbr></strong>/<abbr lang="en" title="Really Simple Syndication">RSS</abbr>.<br />
	<strong>jQuery</strong> framework, JavaScript, and <strong><abbr lang="en" title="Asynchronous JavaScript and XML">AJAX</abbr></strong>.</p>
			<p>Develop websites in collaborative local development with <strong>MAMP</strong>, Dropbox, and <strong>Github</strong> in order to push finalized and approved (by client) design to server in a single deployment.</p>
			<p>Experience as Artistic / Creative Director on enterprise-level projects.<br />
				
			<p class="software">Software: MacRabbit's Espresso, MAMP, Github, Chrome Developer Tools, and Firebug.</p>			
			
			
			<h3 id="back-end-development">Back End Web Development</h3>
			
			<p>Emphasis on CMS development with WordPress as CMS-of-choice. Experience with eCommerce solutions including: <strong>Magento</strong>, <stong>Presatashop</stong>, <strong>Jigoshop</strong>, and <strong>WooCommerce</strong>. Working knowledge of <strong><acronym lang="en" title="Hypertext Preprocessor">PHP5</acronym></strong> (<abbr lang="en" title="Object Oriented Programming">OOP</abbr> programming) for <strong><abbr lang="en" title="Content Management System">CMS</abbr></strong>, strong emphasis on <strong>Wordpress</strong> (personally developed many fully custom WordPress themes), having attained expert-level knowledge of <strong>WordPress API</strong> (shortcodes, custom WordPress functions, plugin customization and manipulation). Limited experience developing in <strong><abbr lang="en" title="Model-View-Controller">MVC</abbr></strong> (<strong>Ruby on Rails</strong>) environement.</p>
			<p>Database and system administrator experience (<strong><abbr lang="en" title=" Michael Structured Query Language">MySQL</abbr></strong> and <strong>PHP MyAdmin</strong>) of WordPress databases for many client websites on MediaTemple (dv) private web server.</p>
			<p>Working knowledge of direct command-line / <strong>SSH</strong> interaction with <strong>Apache</strong> / <strong>Linux</strong> web server administration / setup and knowledge of several other public <strong><abbr lang="en" title="Application Programming Interface">API</abbr></strong> (Magento, Prestashop, YouTube API, MailChimp integration / setup)<br />
Code optimization, scalability and debugging.</p>
			<p>Regular use of version control (<strong>Github</strong>) in collaborative environment.</p>
			
			<p class="software">Software: MacRabbit's Espresso and Terminal.</p>


			<h3 id="photography">Professional Photography</h3>
			<p>Successful photographer for performance art, commercial, wedding, engagment, portraits, and studio photography.</p>
			<p>Reputation for excellence in photo editing, re-touching, and artistic manipulation.</p>
			<p class="software">Software: Adobe Lightroom, and Adobe Photoshop.</p>		
			
			<h3 id="operations">Operations Management</h3>
			<p>Extensive management experience dealing with all human resources isssues with a team of up to 20 part-time employees. Manage communication, negotiation, contracts, and administration with all clients and ongoing contracts. Facilitated, taught, and adminstrated training for all employees to ensure competence in the task(s) assigned to them.</p>
			
			
			<h3 id="miscellaneous">Miscellaneous</h3>
			
			<p>Mac <strong>OSX</strong> and iOS.</p>
			<p><strong><abbr title="Secure Shell">SSH</abbr></strong> and <abbr title="File Transfer Protocol">FTP</abbr>.</p>
			<p>Administrate web studio with <strong>Freshbooks</strong> and <strong>Basecamp</strong>. Log hours with Freshbooks and manage communications in collaborative team environment through Basecamp.</p>
			<p>Interact with clients through <strong>Skype</strong> and Techsmith's <strong>Jing</strong> for recorded screencast tutorials and consultation. Collaborate with employees and share internal company files (including databases to main synchronized local development) via <strong>Dropbox</strong>.</p>
			
			<p class="software">Software: Freshbooks, Basecamp, SSH, OSX, iOS, Jing, Dropbox, and Skype.</p>
		
		</div><!--/skills-->
	
		
	</div><!--.page-->
	<div class="page">
	
		<div id="experience">
		
			<h2>Experience</h2>
			
			<ol>
				<li class="experience">
					<p class="dt"><span class="dtstart" title="10-01-2007">Oct 2007</span> - <span class="dtend" title="2010-<?php echo date("y-m-d");?>">Present</span></p>
					<p><strong class="title">Creative Director, Front End Web Developer, Back End Developer</strong>
						<em class="org"><a class="external" target="_blank" href="http://dreamstarstudios.com">DreamStar Studios</a></em> <span class="location">Newark, DE</span></p>
					<p class="summary">Working closely with a small number of contractors, managing one full-time junior designer / project manager. Completing front end and back end website development solutions in <strong>XHTML</strong>/<strong>CSS</strong>, <strong>WordPress</strong>, <strong>PHP5</strong>, <strong>MySQL</strong>, <strong>jQuery</strong> / JavaScript, all built on <strong>WordPress</strong>. Responsive and adaptive layout / theme design with organic SEO considerations.</p>
					<p>Employing all of the following technologies / development models: <strong>xHTML</strong>, <strong>CSS2-3</strong>, <strong>jQuery</strong> / javascript, AJAX, RSS, XML, <strong>@font-face</strong>, <strong>SEO</strong>, <strong>CMS</strong>, <strong>WordPress</strong> (shortcodes, custom functions, custom theming, Roots theme framework), version control (git / <strong>Github</strong>), <strong>MAMP</strong>, <strong>PHP</strong>, <strong>MySQL</strong>, <strong>PHP MyAdmin</strong>, <strong>eCommerce</strong> (<strong>Magento</strong>, <strong>Prestashop</strong>, <strong>WooCommerce</strong>, <strong>Jigoshop</strong>), <strong>SSH</strong>, Systems Administrator (sysadmin), <strong>Apache</strong>, <strong>Linux</strong>, MVC (<strong>Ruby on Rails</strong>), and various <strong>API</strong> (YouTube, MailChimp, etc.). </p>
					<p>Known for excellence and considered by many to be the best web designer in the NYC performance arts niche market.</p>
				</li>
				<li class="experience">
					<p class="dt"><span class="dtstart" title="11-01-2007">Nov 2007</span> - <span class="dtend" title="<?php echo date("y-m-d");?>">Present</span></p>
					<p><strong class="title">Photographer</strong><em class="org"> <a class="external" target="_blank" href="http://brianfeisterphotography.com">Brian Feister Photography</a></em> <span class="location">Newark, DE</span></p>
					<p class="summary">Local photographer, well-known in NYC performing artist community and a frequent guest photographer at exclusive highly acclaimed performance arts productions.</p>
				</li>
				<li class="experience">
					<p class="dt"><span class="dtstart" title="09-01-2010">Sep 2010</span> - <span class="dtend" <span class="dtend" title="<?php echo date("y-m-d");?>">Present</span></p>
					<p><strong class="title">Founder &amp; Director</strong>
					<em class="org"><a class="external" target="_blank" href="http://newarkcowork.com">Newark CoWork</a></em> 
					<span class="location">Newark, DE</span></p>
					<p class="summary">Acting director (and founder) of Newark CoWork, a community endeavor for entrepreneurs, small business owners, freelancers, and creative professionals to share space, ideas, visions, dreams, and more. CoWorking is a fresh and innovative way to work that encourages both creativity &amp; productivity.</p>
				</li>
				<li class="experience">
					<p class="dt"><span class="dtstart" title="12-01-2011">Dec 2011</span> - <span class="dtend" <span class="dtend" title="<?php echo date("y-m-d");?>">Present</span></p>
					<p><strong class="title">Founder &amp; Organizer</strong>
					<em class="org">Newark Area Web Professional Meetup</a></em> 
					<span class="location">Newark, DE</span></p>
					<p class="summary">Founded a local meetup group dedicated to organizing and unifying local web professionals. Open monthly business meetings to discuss entrenpeneurship, technology, trends in the industry, tools of the trade and other things which help all members maintain a high standard for their work quality and business practices.</p>
				</li>				
				<li class="experience">
					<p class="dt"><span class="dtstart">Feb 2005</span> - <span class="dtend" title="<?php echo date("y-m-d");?>">Present</span></p>
					<p><strong class="title">Operations Manager / Fitness Instructor</strong>
					<em class="org">Training by Liz</em> <span class="location">Newark, DE</span></p>
					<p class="summary">Due to personal circumstances, left college to rescue Training by Liz, a fitness consulting company who's owner was gravely ill at the time. Stabilized and grew the company, managing scheduling, training, operations, billing, administration, contracts / negotiations, and instruction, for up to 20 fitness instructors and personal trainers.</p>
				</li>
								
			</ol>
			
		</div><!--/experience-->
	
	</div><!--.page-->
		<div class="page">
		
			<div id="languages">
				<h2>Languages</h2>
				
				<p>Proficient: <span id="proficient_languages"><span class="skill language high">English</span>.</span></p>
				<p>Semi-fluent: <span id="elemental_languages"><span class="skill language low">Japanese</span>.</span></p>
				
			</div><!--/languages-->
		
		
			<div id="education">
			
				<h2>Education</h2>
				
				<ul>
				
					<li class="education">
						<p class="dt"><span class="dtstart" title="11-01-2007">Nov 2007</span> - <span class="dtend" title="<?php echo date("y-m-d");?>">Present</span></p>
						<p><strong class="title">Self Taught Web Development and Graphic Design</strong></p>
						<p class="summary">Reading highly regarded books, magazines, blogs, news, tutorials, attending web seminars, and following industry leaders on Twitter to keep current on the latest market trends, new technologies, etc.</p>
					</li>
					
					<li class="education">
						<p class="dt"><span class="dtstart" title="12-01-2007">Dec 2007</span> - <span class="dtend" title="?">?</span></p>
						<p><strong class="title">Rogie King (LOL)</strong>
						<em class="org">Grasshopper</em></p>
						<p class="summary">Was mentored in design principle and philosophy by the generous and kind <a class="external" target="_blank" href="http://rogieking.com">Rogie King</a> (well known web designer, developer, and Illustrator) before he became a superstar :)<br />
					</li>	
					
					<li class="education">
						<p class="dt"><span class="dtstart" title="09-01-2002">Sep 2002</span> - <span class="dtend" title="12-01-2004">Dec 2005</span></p>
						<p><strong class="title">University of Delaware</strong>
						<em class="org">Philosophy</em></p>
						<p class="summary">Studied Philosophy at University of Delaware for 3 years.  Left out of necessity to take over operations management at Training by Liz (see above).</p>
					</li>	
						
				</ul>
			</div><!--/education-->
			
			<div id="references">
				<h2>References</h2>
				<p>Illustrator, Designer, and Taxidermist <strong><a href="http://rogieking.com">Rogie King</a></strong> of <a href="http://komodomedia.com">Komodo Media</a>.</p>
				<p>WordPress Developer Supreme <strong><a href="mailto:brian@fegter.com">Brian Fegter</a></strong>.</p>
				<p>Visit <strong><a class="url personal" href="http://dreamstarstudios.com">dreamstarstudios.com</a></strong> to see my company website and some projects I've worked on.</p>
				<p>Connect with me on <strong><a class="url references" href="http://www.linkedin.com/in/brianfeister">LinkedIn</a></strong><span class="onlyprint"> (http://www.linkedin.com/in/brianfeister)</span> to read my professional recommendations.</p>
				<p>Many additional references from an array of satisfied clients can be furnished upon request.</p>
			</div><!--/references-->
			
		</div><!--.page-->
	</div><!--#canvas-->
	
	
</body>
</html>