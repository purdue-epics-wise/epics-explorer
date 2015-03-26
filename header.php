<?php
/**
 * The Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width">
		<title><?php wp_title( '-', true, 'right' ); ?></title>
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

		<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>

		<link rel='stylesheet' href='<?php bloginfo('stylesheet_url'); ?>' type='text/css' media='all' />

		<script type="text/javascript" src="js/jquery-2.1.0.min.js"></script>
		<script type="text/javascript" src="js/jquery.mixitup.js"></script>

		<script>
		</script>

		<?php wp_head(); ?>

		
	</head>
	<body>

		<div id="splash" class="">
				<span class="welcome">Welcome To</span>
				<span class="epics">EPICS</span>
				<span class="explorer">explorer</span>
				<div id="start">Click here to begin</div>
		</div>
		<div class="container">
			<div id="sticky">
				<a class="epics-logotype-a" href="https://engineering.purdue.edu/EPICS"><img class="epics-logotype" src="images/EPICS.png" /></a>

				<span class="explorer-logotype"><b>EPICS</b> | explorer</span>

				<a class="purdue-logotype-a" href="http://www.purdue.edu/"><img class="purdue-logotype" src="images/Purdue.png" /></a>
			</div>


			<div id="filters">
				<div class="filter-row">
					<div class="filter-cell-cat">Major</div>
					<div class="filter-cell-opt">
						<div class="filter" data-filter=".major-aae">Aero/Astro Engineering</div>
						<div class="filter" data-filter=".major-ae">Agricultural Engineering</div>
						<div class="filter" data-filter=".major-be">Biological Engineering</div>
						<div class="filter" data-filter=".major-bme">Biomedical Engineering</div>
						<div class="filter" data-filter=".major-che">Chemical Engineering</div>
						<div class="filter" data-filter=".major-ce">Civil Engineering</div>
						<div class="filter" data-filter=".major-cs">Computer Science</div>
						<div class="filter" data-filter=".major-cem">Construction Engineering & Management</div>
						<div class="filter" data-filter=".major-ece">Electrical/Computer Engineering</div>
						<div class="filter" data-filter=".major-eee">Environmental/Ecological Engineering</div>
						<div class="filter" data-filter=".major-ie">Industrial Engineering</div>
						<div class="filter" data-filter=".major-mse">Materials Engineering</div>
						<div class="filter" data-filter=".major-me">Mechanical Engineering</div>
						<div class="filter" data-filter=".major-ne">Nuclear Engineering</div>
						<div class="filter" data-filter="all">Show All</div>
					</div>
				</div>
				<div class="filter-row">
					<div class="filter-cell-cat">Day</div>
					<div class="filter-cell-opt">
						<div class="filter" data-filter=".day-monday">Monday</div>
						<div class="filter" data-filter=".day-tuesday">Tuesday</div>
						<div class="filter" data-filter=".day-wednesday">Wednesday</div>
						<div class="filter" data-filter=".day-thursday">Thursday</div>
						<div class="filter" data-filter=".day-friday">Friday</div>
						<!--<div class="filter" data-filter="all">Show All</div>-->
					</div>
				</div>
				<div class="filter-row">
					<div class="filter-cell-cat">Time</div>
					<div class="filter-cell-opt">
						<div class="filter" data-filter=".time-1">8:30 AM - 10:20 AM</div>
						<div class="filter" data-filter=".time-2">10:30 AM - 12:20 PM</div>
						<div class="filter" data-filter=".time-3">1:30 PM - 3:20 PM</div>
						<div class="filter" data-filter=".time-4">3:30 PM - 5:20 PM</div>
						<!--<div class="filter" data-filter="all">Show All</div>-->
					</div>
				</div>
			</div>

			<hr />

			<div id="objects">