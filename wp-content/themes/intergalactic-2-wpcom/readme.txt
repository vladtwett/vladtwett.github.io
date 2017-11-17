=== Intergalactic 2 ===
Contributors: automattic
Donate link:
Tags: photoblogging, dark, black, white, one-column, right-sidebar, custom-background, custom-colors, custom-header, custom-menu, featured-image-header, featured-images, flexible-header, post-formats, rtl-language-support, translation-ready, fixed-layout, responsive-layout
Tested up to: 4.2
Stable tag: 3.8
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Intergalactic 2 is based on Underscores http://underscores.me/, (C) 2012-2017 Automattic, Inc.

== Description ==

Intergalactic 2 is a stunning specimen for your personal blog. Bold featured images act as the backdrop to your text, giving you a high-contrast, readable theme that's perfect for making your content pop. The one-column layout provides a distraction-free environment for reading, while the slide-out menu keeps your navigation and secondary content readily accessible.

== Bundled Licenses ==

* Photographs depicted in screenshot.png are from pexels.com and licensed CC0
* Google Font "Lato" is licensed under the SIL Open Font License, Version 1.1; Source: https://www.google.com/fonts/specimen/Lato
* Genericons icon font, Copyright 2013 Automattic; Genericons are licensed under the terms of the GNU GPL, Version 2 (or later); Source: http://www.genericons.com

== Installation ==

1. In your admin panel, go to Appearance -> Themes and click the Add New button.
2. Click Upload and Choose File, then select the theme's .zip file. Click Install Now.
3. Click Activate to use your new theme right away.

== Frequently Asked Questions ==

== Where is my Custom Menu? ==

Intergalactic 2 includes a navigation menu in the slide-out menu, accessed by clicking the hamburger menu (three horizontal lines) in the upper right corner of the header. Custom Menus can be configured by going to Appearance -> Menus in your Dashboard.

== Where can I add widgets? ==

Intergalactic 2 includes a widget area in the slide-out menu, accessed by clicking the hamburger menu (three horizontal lines) in the upper right corner of the header. Widgets can be configured by going to Appearance -> Widgets in your Dashboard.

== Does Intergalactic 2 use Featured Images? ==

Featured Images display best at least 1440px by 900px as a background to the post excerpt and title.

== How can I add a site logo? == 

Brand your site and make it yours by including your business' logo with Jetpack (http://jetpack.me); navigate to Customize → Site Title and upload a logo image in the space provided. The logo will appear next to your site title in the header; it can be any size, but will display at a maximum height of 100 px.

== How can I add links to my social networks? == 

You can add links to a multitude of social services in the slide-out menu using the following steps:

1. Create a new Custom Menu, and assign it to the Social Links menu location.
2. Add links to each of your social services using the Links panel.
3. Icons for your social links will appear in the slide-out menu.

= Quick Specs (all measurements in pixels) =

* The main column width is 660.
* The sidebar width is 600.
* Featured Images are 1440px by 900px

== Changelog ==

= 2 May 2017 =
* Add screenshot.png

= 28 April 2017 =
* Ensure custom header when set appears on posts and pages that have no featured images.
* Add brighter custom header behind text; change text color when custom header is active.
* More accurate positioning for toggle button on large screens
* Add special notation for sticky posts.
* Cleaner styles for menu toggle to better match overall theme design
* Better styles for archive descriptions
* Fix footer z-index from -1 to 0; -1 was hiding it behind the overlaid page element preventing links and other elements from being click-able.
* Relink correct JS file in functions.php; update media query to align with required window width plus scrollbar in JS
* Rename JS file to match new theme slug
* Account for no results and 404 pages in site branding width change.
* Ensure site branding doesn't run into menu area on single posts on small screens
* Tweaks for logo size and positioning on large and small screens

= 27 April 2017 =
* Updating tags
* Better spacing for custom logo across screen sizes.
* RTL styles; add POT file; begin styling custom logo
* Tweak colors support
* Accurately name slide-out menu; minor style
* Add some more free color palettes

= 26 April 2017 =
* Begin work on colors, fonts, and Headstart annotations.

= 24 April 2017 =
* Tabs instead of spaces for indentation in style.css
* Images should display by default on all archive types.
* Initial commit to repo
