<?php
header('Content-type: text/css');
require_once "../config.php";
?>

@import url(http://fonts.googleapis.com/css?family=Lato:300,400,700);
@font-face {
	font-family: 'codropsicons';
	src:url('<?php echo SERVERURL; ?>system/core/fonts/codropsicons/codropsicons.eot');
	src:url('<?php echo SERVERURL; ?>system/core/fonts/codropsicons/codropsicons.eot?#iefix') format('embedded-opentype'),
		url('<?php echo SERVERURL; ?>system/core/fonts/codropsicons/codropsicons.woff') format('woff'),
		url('<?php echo SERVERURL; ?>system/core/fonts/codropsicons/codropsicons.ttf') format('truetype'),
		url('<?php echo SERVERURL; ?>system/core/fonts/codropsicons/codropsicons.svg#codropsicons') format('svg');
	font-weight: normal;
	font-style: normal;
}

body {
	/*background: #34495e;*/
}
/*
.container > header,
.codrops-top {
	color: #fff;
	font-family: 'Lato', Arial, sans-serif;
}

.container > header {
	margin: 0 auto;
	padding: 12em 2em;
	padding-left: 370px;
	background: rgba(0,0,0,0.05);
}

.container > header a {
	color: #566473;
	text-decoration: none;
	outline: none;
}

.container > header a:hover {
	color: #4f7bab;
}

.container > header h1 {
	font-size: 3.2em;
	line-height: 1.3;
	margin: 0;
	font-weight: 300;
}

.container > header span {
	display: block;
	font-size: 55%;
	color: #74818e;
	padding: 0 0 0.6em 0.1em;
}
*/
/* To Navigation Style */
.codrops-top {
	background: #fff;
	background: rgba(255, 255, 255, 0.6);
	text-transform: uppercase;
	width: 100%;
	font-size: 0.69em;
	line-height: 2.2;
}

.codrops-top a {
	text-decoration: none;
	padding: 0 1em;
	letter-spacing: 0.1em;
	color: #888;
	display: inline-block;
}

.codrops-top a:hover {
	background: rgba(255,255,255,0.95);
	color: #333;
}

.codrops-top span.right {
	float: right;
}

.codrops-top span.right a {
	float: left;
	display: block;
}

.codrops-icon:before {
	font-family: 'codropsicons';
	margin: 0 4px;
	speak: none;
	font-style: normal;
	font-weight: normal;
	font-variant: normal;
	text-transform: none;
	line-height: 1;
	-webkit-font-smoothing: antialiased;
}

.codrops-icon-drop:before {
	content: "\e001";
}

.codrops-icon-prev:before {
	content: "\e004";
}

/* Demo Buttons Style */
.codrops-demos {
	padding-top: 1em;
	font-size: 0.9em;
}

.codrops-demos a {
	text-decoration: none;
	outline: none;
	display: inline-block;
	margin: 0.5em;
	padding: 0.7em 1.1em;
	border: 3px solid #b1aea6;
	color: #b1aea6;
	font-weight: 700;
}

.codrops-demos a:hover,
.codrops-demos a.current-demo,
.codrops-demos a.current-demo:hover {
	border-color: #89867e;
	color: #89867e;
}

@media screen and (max-width: 1025px) {
	.container > header {
		margin: 0 auto;
		padding: 120px 50px;
		font-size: 70%;
		text-align: right;
	}
}

@media screen and (max-width: 740px) {

	.codrops-icon span {
		display: none;
	}

}
*,
*:after,
*::before {
		-webkit-box-sizing: border-box;
		-moz-box-sizing: border-box;
		box-sizing: border-box;
}

@font-face {
		font-weight: normal;
		font-style: normal;
		font-family: 'ecoicons';
		src: url("<?php echo SERVERURL; ?>system/core/fonts/ecoicons/ecoicons.eot");
		src: url("<?php echo SERVERURL; ?>system/core/fonts/ecoicons/ecoicons.eot?#iefix") format("embedded-opentype"), url("<?php echo SERVERURL; ?>system/core/fonts/ecoicons/ecoicons.woff") format("woff"), url("<?php echo SERVERURL; ?>system/core/fonts/ecoicons/ecoicons.ttf") format("truetype"), url("<?php echo SERVERURL; ?>system/core/fonts/ecoicons/ecoicons.svg#ecoicons") format("svg");
}

/* Icomoon.com */

.gn-menu-main,
.gn-menu-main ul {
		margin: 0;
		padding: 0;
		background: white;
		color: #5f6f81;
		list-style: none;
		text-transform: none;
		font-weight: 300;
		font-family: 'Lato', Arial, sans-serif;
		line-height: 60px;
}

.gn-menu-main {
		position: fixed;
		top: 0;
		left: 0;
		width: 100%;
		height: 60px;
		font-size: 13px;
}

.gn-menu-main a {
		display: block;
		height: 100%;
		color: #5f6f81;
		text-decoration: none;
		cursor: pointer;
}

.no-touch .gn-menu-main a:hover,
.no-touch .gn-menu li.gn-search-item:hover,
.no-touch .gn-menu li.gn-search-item:hover a {
		background: #5f6f81;
		color: white;
}

.gn-menu-main > li {
		display: block;
		float: left;
		height: 100%;
		border-right: 1px solid #c6d0da;
		text-align: center;
}

/* icon-only trigger (menu item) */

.gn-menu-main li.gn-trigger {
		position: relative;
		width: 60px;
		-webkit-touch-callout: none;
		-webkit-user-select: none;
		-khtml-user-select: none;
		-moz-user-select: none;
		-ms-user-select: none;
		user-select: none;
}

.gn-menu-main > li:last-child {
		float: right;
		border-right: none;
		border-left: 1px solid #c6d0da;
}

.gn-menu-main > li > a {
		padding: 0 30px;
		text-transform: uppercase;
		letter-spacing: 1px;
		font-weight: bold;
}

.gn-menu-main:after {
		display: table;
		clear: both;
		content: "";
}

.gn-menu-wrapper {
		position: fixed;
		top: 60px;
		bottom: 0;
		left: 0;
		overflow: hidden;
		width: 60px;
		border-top: 1px solid #c6d0da;
		background: white;
		-webkit-transform: translateX(-60px);
		-moz-transform: translateX(-60px);
		transform: translateX(-60px);
		-webkit-transition: -webkit-transform 0.3s, width 0.3s;
		-moz-transition: -moz-transform 0.3s, width 0.3s;
		transition: transform 0.3s, width 0.3s;
}

.gn-scroller {
		position: absolute;
		overflow-y: scroll;
		width: 370px;
		height: 100%;
}

.gn-menu {
		border-bottom: 1px solid #c6d0da;
		text-align: left;
		font-size: 18px;
}

.gn-menu li:not(:first-child),
.gn-menu li li {
		box-shadow: inset 0 1px #c6d0da
}

.gn-submenu li {
		overflow: hidden;
		height: 0;
		-webkit-transition: height 0.3s;
		-moz-transition: height 0.3s;
		transition: height 0.3s;
}

.gn-submenu li a {
		color: #c1c9d1
}

input.gn-search {
		position: relative;
		z-index: 10;
		padding-left: 60px;
		outline: none;
		border: none;
		background: transparent;
		color: #5f6f81;
		font-weight: 300;
		font-family: 'Lato', Arial, sans-serif;
		cursor: pointer;
}

/* placeholder */

.gn-search::-webkit-input-placeholder {
		color: #5f6f81
}

.gn-search:-moz-placeholder {
		color: #5f6f81
}

.gn-search::-moz-placeholder {
		color: #5f6f81
}

.gn-search:-ms-input-placeholder {
		color: #5f6f81
}

/* hide placeholder when active in Chrome */

.gn-search:focus::-webkit-input-placeholder,
.no-touch .gn-menu li.gn-search-item:hover .gn-search:focus::-webkit-input-placeholder {
		color: transparent
}

input.gn-search:focus {
		cursor: text
}

.no-touch .gn-menu li.gn-search-item:hover input.gn-search {
		color: white
}

/* placeholder */

.no-touch .gn-menu li.gn-search-item:hover .gn-search::-webkit-input-placeholder {
		color: white
}

.no-touch .gn-menu li.gn-search-item:hover .gn-search:-moz-placeholder {
		color: white
}

.no-touch .gn-menu li.gn-search-item:hover .gn-search::-moz-placeholder {
		color: white
}

.no-touch .gn-menu li.gn-search-item:hover .gn-search:-ms-input-placeholder {
		color: white
}

.gn-menu-main a.gn-icon-search {
		position: absolute;
		top: 0;
		left: 0;
		height: 60px;
}

.gn-icon::before {
		display: inline-block;
		width: 60px;
		text-align: center;
		text-transform: none;
		font-weight: normal;
		font-style: normal;
		font-variant: normal;
		font-family: 'ecoicons';
		line-height: 1;
		speak: none;
		-webkit-font-smoothing: antialiased;
}

.gn-icon-help::before {
		content: "\e000"
}

.gn-icon-earth::before {
		content: "\e004"
}

.gn-icon-cog::before {
		content: "\e006"
}

.gn-icon-search::before {
		content: "\e005"
}

.gn-icon-download::before {
		content: "\e007"
}

.gn-icon-photoshop::before {
		content: "\e001"
}

.gn-icon-illustrator::before {
		content: "\e002"
}

.gn-icon-archive::before {
		content: "\e00d"
}

.gn-icon-article::before {
		content: "\e003"
}

.gn-icon-pictures::before {
		content: "\e008"
}

.gn-icon-videos::before {
		content: "\e009"
}

/* if an icon anchor has a span, hide the span */

.gn-icon span {
		width: 0;
		height: 0;
		display: block;
		overflow: hidden;
}

.gn-icon-menu::before {
		margin-left: -15px;
		vertical-align: -2px;
		width: 30px;
		height: 3px;
		background: #5f6f81;
		box-shadow: 0 3px white, 0 -6px #5f6f81, 0 -9px white, 0 -12px #5f6f81;
		content: '';
}

.no-touch .gn-icon-menu:hover::before,
.no-touch .gn-icon-menu.gn-selected:hover::before {
		background: white;
		box-shadow: 0 3px #5f6f81, 0 -6px white, 0 -9px #5f6f81, 0 -12px white;
}

.gn-icon-menu.gn-selected::before {
		background: #5993cd;
		box-shadow: 0 3px white, 0 -6px #5993cd, 0 -9px white, 0 -12px #5993cd;
}

/* styles for opening menu */

.gn-menu-wrapper.gn-open-all,
.gn-menu-wrapper.gn-open-part {
		-webkit-transform: translateX(0px);
		-moz-transform: translateX(0px);
		transform: translateX(0px);
}

.gn-menu-wrapper.gn-open-all {
		width: 340px
}

.gn-menu-wrapper.gn-open-all .gn-submenu li {
		height: 60px
}

@media screen and (max-width: 422px) { 
	.gn-menu-wrapper.gn-open-all {
			-webkit-transform: translateX(0px);
			-moz-transform: translateX(0px);
			transform: translateX(0px);
			width: 100%;
	}

	.gn-menu-wrapper.gn-open-all .gn-scroller {
			width: 130%
	}
}
