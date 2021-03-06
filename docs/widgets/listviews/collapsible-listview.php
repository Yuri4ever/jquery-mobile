<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Collapsible listview - jQuery Mobile Demos</title>
	<link rel="stylesheet"  href="../../../css/themes/default/jquery.mobile.css">
	<link rel="stylesheet" href="../../_assets/css/jqm-demos.css">
	<link rel="shortcut icon" href="../../../favicon.ico">

	<script src="../../../js/jquery.js"></script>
	<script src="../../_assets/js/"></script>
	<script src="../../../js/"></script>
	<style>
		#demo-borders .ui-collapsible .ui-collapsible-heading .ui-btn { border-top-width: 1px !important; }
	</style>
</head>
<body>
<div data-role="page">

	<div data-role="header" class="jqm-header">
		<h1>Collapsible listview</h1>
		<a href="#" class="jqm-search-link" data-icon="search" data-iconpos="notext">Search</a>
		<?php include( '../../search.php' ); ?>
	</div><!-- /header -->

	<div data-role="content" class="jqm-content">

			<h2>Inset, individual collapsible</h2>

			<div data-demo-html="true">
				<div data-role="collapsible" data-theme="b" data-content-theme="c">
					<h2>Choose a car model...</h2>
					<ul data-role="listview">
						<li><a href="#">Acura</a></li>
						<li><a href="#">Audi</a></li>
						<li><a href="#">BMW</a></li>
						<li><a href="#">Cadillac</a></li>
						<li><a href="#">Chrysler</a></li>
						<li><a href="#">Dodge</a></li>
						<li><a href="#">Ferrari</a></li>
						<li><a href="#">Ford</a></li>
						<li><a href="#">GMC</a></li>
						<li><a href="#">Honda</a></li>
						<li><a href="#">Hyundai</a></li>
						<li><a href="#">Infiniti</a></li>
						<li><a href="#">Jeep</a></li>
						<li><a href="#">Kia</a></li>
						<li><a href="#">Lexus</a></li>
						<li><a href="#">Mini</a></li>
						<li><a href="#">Nissan</a></li>
						<li><a href="#">Porsche</a></li>
						<li><a href="#">Subaru</a></li>
						<li><a href="#">Toyota</a></li>
						<li><a href="#">Volkswagen</a></li>
						<li><a href="#">Volvo</a></li>
					</ul>
				</div><!-- /collapsible -->
			</div><!--/demo-html -->

			<h2>Inset, collapsible set</h2>

			<div data-demo-html="true">
				<div data-role="collapsible-set" data-theme="b" data-content-theme="d">
					<div data-role="collapsible">
						<h2>Filtered list</h2>
						<ul data-role="listview" data-filter="true" data-filter-theme="c" data-divider-theme="d">
							<li><a href="#">Adam Kinkaid</a></li>
							<li><a href="#">Alex Wickerham</a></li>
							<li><a href="#">Avery Johnson</a></li>
							<li><a href="#">Bob Cabot</a></li>
							<li><a href="#">Caleb Booth</a></li>
						</ul>
					</div><!-- /collapsible -->
					<div data-role="collapsible">
						<h2>Formatted text</h2>
						<ul data-role="listview" data-theme="d" data-divider-theme="d">
							<li data-role="list-divider">Friday, October 8, 2010 <span class="ui-li-count">2</span></li>
							<li><a href="#">
								<h3>Stephen Weber</h3>
								<p><strong>You've been invited to a meeting at Filament Group in Boston, MA</strong></p>
								<p>Hey Stephen, if you're available at 10am tomorrow, we've got a meeting with the jQuery team.</p>
								<p class="ui-li-aside"><strong>6:24</strong>PM</p>
							</a></li>
							<li><a href="#">
								<h3>jQuery Team</h3>
								<p><strong>Boston Conference Planning</strong></p>
								<p>In preparation for the upcoming conference in Boston, we need to start gathering a list of sponsors and speakers.</p>
								<p class="ui-li-aside"><strong>9:18</strong>AM</p>
							</a></li>
						</ul>
					</div><!-- /collapsible -->
					<div data-role="collapsible">
						<h2>Thumbnails and split button</h2>
						<ul data-role="listview" data-split-icon="gear" data-split-theme="d">
							<li><a href="#">
								<img src="../../_assets/img/album-bb.jpg" />
								<h3>Broken Bells</h3>
								<p>Broken Bells</p>
								</a><a href="#">Purchase album
							</a></li>
							<li><a href="#">
								<img src="../../_assets/img/album-hc.jpg" />
								<h3>Warning</h3>
								<p>Hot Chip</p>
								</a><a href="#">Purchase album
							</a></li>
							<li><a href="#">
								<img src="../../_assets/img/album-p.jpg" />
								<h3>Wolfgang Amadeus Phoenix</h3>
								<p>Phoenix</p>
								</a><a href="#">Purchase album
							</a></li>
						</ul>
					</div><!-- /collapsible -->
				</div><!-- /collapsible-set -->
			</div><!--/demo-html -->

			<h2>Non-inset, collapsible set</h2>

			<div data-demo-html="true">
				<div data-role="collapsible-set" data-theme="b" data-content-theme="d" data-inset="false">
					<div data-role="collapsible">
						<h2>Mailbox</h2>
						<ul data-role="listview">
							<li><a href="#">Inbox <span class="ui-li-count">12</span></a></li>
							<li><a href="#">Outbox <span class="ui-li-count">0</span></a></li>
							<li><a href="#">Drafts <span class="ui-li-count">4</span></a></li>
							<li><a href="#">Sent <span class="ui-li-count">328</span></a></li>
							<li><a href="#">Trash <span class="ui-li-count">62</span></a></li>
						</ul>
					</div><!-- /collapsible -->
					<div data-role="collapsible">
						<h2>Calendar</h2>
						<ul data-role="listview" data-theme="d" data-divider-theme="d">
							<li data-role="list-divider">Friday, October 8, 2010 <span class="ui-li-count">2</span></li>
							<li><a href="#">
								<h3>Stephen Weber</h3>
								<p><strong>You've been invited to a meeting at Filament Group in Boston, MA</strong></p>
								<p>Hey Stephen, if you're available at 10am tomorrow, we've got a meeting with the jQuery team.</p>
								<p class="ui-li-aside"><strong>6:24</strong>PM</p>
							</a></li>
							<li><a href="#">
								<h3>jQuery Team</h3>
								<p><strong>Boston Conference Planning</strong></p>
								<p>In preparation for the upcoming conference in Boston, we need to start gathering a list of sponsors and speakers.</p>
								<p class="ui-li-aside"><strong>9:18</strong>AM</p>
							</a></li>
							<li data-role="list-divider">Thursday, October 7, 2010 <span class="ui-li-count">1</span></li>
							<li><a href="#">
								<h3>Avery Walker</h3>
								<p><strong>Re: Dinner Tonight</strong></p>
								<p>Sure, let's plan on meeting at Highland Kitchen at 8:00 tonight. Can't wait! </p>
								<p class="ui-li-aside"><strong>4:48</strong>PM</p>
							</a></li>
							<li data-role="list-divider">Wednesday, October 6, 2010 <span class="ui-li-count">3</span></li>
							<li><a href="#">
								<h3>Amazon.com</h3>
								<p><strong>4-for-3 Books for Kids</strong></p>
								<p>As someone who has purchased children's books from our 4-for-3 Store, you may be interested in these featured books.</p>
								<p class="ui-li-aside"><strong>12:47</strong>PM</p>
							</a></li>
						</ul>
					</div><!-- /collapsible -->
					<div data-role="collapsible">
						<h2>Contacts</h2>
						<ul data-role="listview" data-autodividers="true" data-theme="d" data-divider-theme="d">
							<li><a href="#">Adam Kinkaid</a></li>
							<li><a href="#">Alex Wickerham</a></li>
							<li><a href="#">Avery Johnson</a></li>
							<li><a href="#">Bob Cabot</a></li>
							<li><a href="#">Caleb Booth</a></li>
							<li><a href="#">Christopher Adams</a></li>
							<li><a href="#">Culver James</a></li>
						</ul>
					</div><!-- /collapsible -->
				</div><!-- /collapsible-set -->
			</div><!--/demo-html -->

			<h2>Non-inset, individual collapsibles</h2>

			<p>This is an example of a series of individual collapsibles that are full width (non-inset) with listviews inside. Multiple collapsible rows can be open at once since each is an individual collapsible. Here, each collapsible also has a custom icon.</p>

			<div data-demo-html="true">
				<div data-role="collapsible" data-theme="b" data-content-theme="d" data-collapsed-icon="arrow-r" data-expanded-icon="arrow-d" data-inset="false">
					<h2>Pets</h2>
					<ul data-role="listview">
						<li><a href="#">Canary</a></li>
						<li><a href="#">Cat</a></li>
						<li><a href="#">Dog</a></li>
						<li><a href="#">Gerbil</a></li>
						<li><a href="#">Iguana</a></li>
						<li><a href="#">Mouse</a></li>
					</ul>
				</div><!-- /collapsible -->
				<div data-role="collapsible" data-theme="b" data-content-theme="d" data-collapsed-icon="arrow-r" data-expanded-icon="arrow-d" data-inset="false">
					<h2>Farm animals</h2>
					<ul data-role="listview">
						<li><a href="#">Chicken</a></li>
						<li><a href="#">Cow</a></li>
						<li><a href="#">Duck</a></li>
						<li><a href="#">Horse</a></li>
						<li><a href="#">Pig</a></li>
						<li><a href="#">Sheep</a></li>
					</ul>
				</div><!-- /collapsible -->
				<div data-role="collapsible" data-theme="b" data-content-theme="d" data-collapsed-icon="arrow-r" data-expanded-icon="arrow-d" data-inset="false">
					<h2>Wild Animals</h2>
					<ul data-role="listview">
						<li><a href="#">Aardvark</a></li>
						<li><a href="#">Alligator</a></li>
						<li><a href="#">Ant</a></li>
						<li><a href="#">Bear</a></li>
						<li><a href="#">Beaver</a></li>
						<li><a href="#">Cougar</a></li>
						<li><a href="#">Dingo</a></li>
					</ul>
				</div><!-- /collapsible -->
			</div><!--/demo-html -->

			<p>To avoid "double" borders the framework removes the top border of collapsibles that are immediately preceded by another collapsible. Here we show how to negate this with custom CSS.</p>

			<div data-demo-html="true" data-demo-css="true">
				<div id="demo-borders">
					<div data-role="collapsible" data-theme="b" data-content-theme="d" data-collapsed-icon="arrow-r" data-expanded-icon="arrow-d" data-inset="false">
						<h2>Pets</h2>
						<ul data-role="listview">
							<li><a href="#">Canary</a></li>
							<li><a href="#">Cat</a></li>
							<li><a href="#">Dog</a></li>
							<li><a href="#">Gerbil</a></li>
							<li><a href="#">Iguana</a></li>
							<li><a href="#">Mouse</a></li>
						</ul>
					</div><!-- /collapsible -->
					<div data-role="collapsible" data-theme="e" data-content-theme="d" data-collapsed-icon="arrow-r" data-expanded-icon="arrow-d" data-inset="false">
						<h2>Farm animals</h2>
						<ul data-role="listview">
							<li><a href="#">Chicken</a></li>
							<li><a href="#">Cow</a></li>
							<li><a href="#">Duck</a></li>
							<li><a href="#">Horse</a></li>
							<li><a href="#">Pig</a></li>
							<li><a href="#">Sheep</a></li>
						</ul>
					</div><!-- /collapsible -->
				</div>
			</div><!--/demo-html -->

	</div><!-- /content -->

	<div data-role="footer" class="jqm-footer">
		<p class="jqm-version"></p>
		<p>Copyright 2013 The jQuery Foundation</p>
	</div><!-- /footer -->

</div><!-- /page -->
</body>
</html>
