=== WOW Slider ===
Contributors: WOWSlider.com
Donate link: http://wowslider.com/
Tags: banner, gallery, image, image slider, images, javascript, jquery, photo, css, photos, picture, pictures, plugin, post, responsive slider, shortcode, posts, slider, slideshow, widget, wordpress, wordpress slider, wow slider, page, links
Requires at least: 3.1
Tested up to: 3.5
Stable tag: trunk
License: GPLv2

Add beautiful image slider to your Wordpress blog! Awesome effects, fancy templates, point-and-click wizard. Fully responsive, pure CSS fallback.

== Description ==

[WOW Slider](http://wowslider.com/) is a Wordpress slider with stunning visual effects and tons of professionally made templates. 
WOW Slider is packed with a point-and-click wizard to create fantastic image sliders in a matter of seconds without 
coding and image editing. 
Responsive, fully accessible as a pure CSS slider if the Javascript is turned off, touch swipe support, 
all browsers, all devices,  search engine friendly, clean and valid markup.

**Live Demos**:
*    [3D HTML5 Slider - Transparent Skin Slider Demo - Brick effect](http://wowslider.com/jquery-3d-slider-transparent-brick-demo.html "3D HTML5 Slider - Transparent Skin Slider Demo - Brick effect")
*    [Contour Template Demo with Cube effect](http://wowslider.com/javascript-image-slider-contour-cube-demo.html "Javascript Image Slider - Contour Template Demo with Cube effect")


More Info: http://wowslider.com/

*    [How to create Wordpress slider with WOW Slider - Full Tutorial](view-source:http://wowslider.com/wordpress-jquery-slider.html "Wordpress Image Slider Plugin Tutorial")
*    [How to update existing WOWSlider galleries in Wordpress - Video Tutorial](view-source:http://www.youtube.com/watch?v=0NCBHINEPvE "How to update existing WOWSlider galleries in Wordpress - Video Tutorial")

[youtube http://www.youtube.com/watch?v=o82IuhWtgTo]


== Credits ==

Copyright:<br>
WOWSlider.com 2014<br>

This program is free software; you can redistribute it and/or modify it under the terms of the GNU General Public License as published by the Free Software Foundation; either version 2 of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU General Public License for more details.

== Installation ==

Please see full tutorial+video here:
http://wowslider.com/wordpress-jquery-slider.html

1. Download WOWSlider Desktop application for Win or Mac from  
   http://wowslider.com/wowslider-free-setup.zip
1. Create an image slideshow in WOW Slider program, click "Publish" button, and select "Wordpress Slider" as a publishing method - wowslider.zip WordPress plugin will be created
1. Install and activate the created module – wowslider.zip through the 'Plugins' menu in WordPress
1. WOWSlider menu will appear. Go to WOW Slider -> All Sliders and copy the shortcode of your slider
1. Add the shortcode inside the page where you want your slider to appear
1. Preview changes 
1. Use WOW Slider menu WOW Slider -> Add New to add each next slider

[youtube http://www.youtube.com/watch?v=o82IuhWtgTo]

== Frequently Asked Questions ==

= 1. Is it possible to make changes (add/delete images, change template or effect) directly in Wordpress? =

No, it's impossible. You should make all changes in WOWSlider application and generate a new module.

= 2. I've recently ordered WOWSlider. Now I want to add it in Wordpress header. How i can do this? =

To insert WOWSlider into header you should use WOWSlider PHP code.

Go to
WOW Slider -> All Sliders

and click on "Excerpt view" button at the top right corner. Additional line "for templates" with php code will appear under line with shortcode.
You should add this php code into your header (Appearance->Editor->Header), for example:

&lt;?php wowslider(1); ?&gt;

= 3. How to add WOWSlider in Wordpress widget? =

You should install a special plugin that allows to add php code into text widget firstly. For example, "PHP Text Widget":
[http://wordpress.org/plugins/php-text-widget/](http://wordpress.org/plugins/php-text-widget/ "PHP Text Widget")

After that go to
WOW Slider -> All Sliders

and click on "Excerpt view" button at the top right corner. Additional line "for templates" with php code will appear under line with shortcode.

You should select a simple text widget and add PHP code into it, for example:

&lt;?php wowslider(1); ?&gt; 

= 4. How can I change the DOCTYPE declaration for universal compatibility in Wordpres? =

You should select
Appearance -> Editor
and change "header.php" from templates in the right column. 

= 5. Drop down menus open behind WOWSlider =

It seems "z-index" problem. WOWSlider's value of "z-index" parameter is 90. So, "z-index" value of your menu should be greater than 90.
If problem will persist, please contact with customer support at support [at] wowslider [dot] com. Provide us a direct link to your webpage with a problem.

= 6. WOWSlider doesn't degradate nicely to CSS-only slider =

Notice, WOWSlider provides this feature since v.2.1. So, if you use an older version, it will not work.
Also, degradation to CSS-slider will not work, if you use "On-demand image loading" option. This option means that the images will be loaded from the script.
 
= 8. My slider always shows "Basic" transition effect though I selected another effect. Why does it happen and how can I fix it? = 

It seems that your slider works in pure css mode. Make sure that javascript is enabled in your browser. If problem will persist, probably it caused by jquery conflict. So, please contact with Customer Support at support [at] wowslider [dot] com and provide us a direct link to your webpage with a problem.

= 9. WOWSlider won't work in HTTPS site. Is it possible to fix it? =

WOWSlider generates paths to files according to your WordPress settings. So, if your site is "https", all paths in HTML code should be "https" too. Please try to follow this instruction:
[http://make.wordpress.org/support/user-manual/web-publishing/https-for-wordpress/](http://make.wordpress.org/support/user-manual/web-publishing/https-for-wordpress/ "HTTPS for Wordpress")

= 10. I have just downloaded WOW Slider for Windows. It was installed fine, however it will not launch at all. =

Try to do the following:

Control panel -&gt; System -&gt; Advanced system settings -&gt; (Performance) Settings -&gt; Data Execution Prevention.

Turn off DEP or add WOW Slider in the exception list.


= 11. I want to add WOWSlider on the frontpage only and not on the other pages. Is it possible? =

Yes, it's possible. To insert WOWSlider into frontpage only, you should add the following code in the "header.php" file:

&lt;?php if (is_home() || is_front_page()) wowslider(ID); ?&gt; 

(where ID is your slider identifier - number) in the place where you want to have a slider.

= 12. I plan to add 100+ images in my slideshow. Does WOWSlider allow it? Should all images be pre-loaded before slideshow will start the playing? =

You should use "On-demand image loading" option in this case. Only first image should be pre-loaded and slideshow will start. All other images will be loaded during the playing.

= 13. I'd like to make the different pictures in my slider link to different pages. Is it possible? =

It's possible to add individual link to each image. You should select image by clicking and specify link in "Url" field.

= 14. Will WOWSlider play on iPhone/iPad/Android? =

Yes, it'll. WOWSlider supports all modern devices. 

= 15. I want my slideshow to begin from a random slide and play images in random order. Is it possible with WOWSlider? =

Some of templates provide this feature already. For example: Prime Time, Calm, Shady, Noir, etc.

You can change other templates manually in generated "style.css" file. Open it in any text editor (for example, Notepad), find following lines:

Yes, it's possible. You should go to
Gallery->Properties->General
and enable "Random order" option.

= 16. I use "basic" transition effect. Can images go from last to first without "scrolling" back? =

"Basic" transition effect can work in this way only. Please use "Basic linear" effect.

= 17. Is there a way to add a video (iframe/pdf/page/etc.) in WOWSlider? =
	
 It's impossible in a current version. WOW Slider supports images only. Video will be supported in version 5.7


== Screenshots ==

1. Fancy Templates
1. Create an image slideshow in WOW Slider program, click "Publish" button, and select "Wordpress Slider" as a publishing method - wowslider.zip WordPress plugin will be created
1. Install and activate the created module – wowslider.zip through the 'Plugins' menu in WordPress
1. WOWSlider menu will appear. Go to WOW Slider -> All Sliders and copy the shortcode of your slider
1. Add the shortcode inside the page where you want your slider to appear
1. Preview changes. Use WOW Slider menu WOW Slider -> Add New to add each next slider

== Changelog ==

== Upgrade Notice ==
