=== Retina Stripper ===
Plugin Name: Retina Stripper
Plugin URI: http://DavidFavor.com/wordpress/plugins/retina-stripper
Author: David Favor
Author URI: http://DavidFavor.com
Contributors: dfavor
Tags: retina, performance, speed, server, database connection
Requires at least: 3.5.0
Tested up to: 4.5.2
Stable tag: 1.4
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
Description: Strip retina images which reduces site + page rendering speed to a crawl, especially on mobile.

== Description ==

For now only occurrences of the [retina.js](http://imulus.github.io/retinajs) script are dequeue + deregister.

If you identify other Retina related scripts open a support ticket + note the name.

I'll add any other identified scripts here, to strip them out also.

== Problems Serving Retina Images ==

Some of these problems include...

= Retina Image File Size + Mobile =

Retina images have massive size. If you're running a Food Porn blog or
Image Hosting site, this might be okay.

Otherwise, likely your visitor on page time will decrease + conversions tank.

If you're running a Click Arbitrage site or target Mobile devices, which
may be on 3G networks or simply have under powered CPUs or little memory.

This occurs as size of Retina images eat up all your visitor's connection
bandwidth, then require heavy CPU + memory usage to render.

= Retina Image 404s On Server =

Most sites serving Retina images, do so via the horribly simplistic [retina.js](http://imulus.github.io/retinajs) library.

Unfortunately this script works by...

1) Extracting every DOM <img> tag + rewriting the URL as
   image-name@2X.extension back into the DOM.

2) For many sites 100% of these image-name@2X.extension file access
   result in a 404 (missing page) error. Then [retina.js](http://imulus.github.io/retinajs) will walk
   the DOM again, removing the @2X from images + the image file
   fetch begins again. Since this process runs via AJAX, instantaneously
   page load resource usage can spike very high.

3) WordPress caching plugins specifically avoid caching 404 errors. This
   is intentional. The idea being, once you notice 404s, you'll fix them.
   If 404s were cached, every permanent + transient 404 error would
   require a manual cache flush, to clear the cache object, so the fixed
   page could then reach visitors.

4) Thus every 404 @2X image served generates what tends to be an extremely
   high resource intensive page view... all for nothing...

5) If you have 20 images on a page you'll generate 20x 404s.

You can see when this can lead to extreme dips in performance,
which are hard to diagnose, unless you have a Server Savant
doing daily log studies with logtop to monitor page view patterns.

Some servers where I host client sites showed 90%+ of all page
accesses were 404s to Retina images.

As traffic spends or natural traffic increase, 404s increase,
starving Apache + Database till eventually all visitors see become
Apache 500 errors + Database Connection Errors.

== Plugin History ==

This code was originally written to serve my many private hosting clients.

Check [http://FastStableHosting.com]http://FastStableHosting.com WordPress speedups.

This site is a work in process, where my goal is to converge all the many
checklists I've published over the years cohesively + retire all other
site with related WordPress performance boosting tips.

Material presented on this site is based on testing, rather than drivel + myth
which pollutes the entire WordPress ecosystem, at every turn.

If you wonder why you keep reading how to speed up your site + nothing seems
to make any difference, likely your reading content written by posers.

== Installation ==

Best to just install through the WordPress admin panel.

This plugin has no database access, so will install via a recursive sftp/ftp file put.

== Frequently Asked Questions ==

= Have a question? =

Post it under the Support Tab + I'll add it to the FAQ along with my answer.

= Think Twice About Asking Me To Host Your Site =

If you're generating significant daily profit, we might work well together.

If you have a hobby site or proof of concept site, likely we're a poor fit.

In other words, Fast + Stable Hosting is expensive, which is why it's
scarce as Purple Lemmings, who are smart enough to stand aside + let
the others head over the cliff edge.

= Think Twice About Contacting Me Outside This Plugin's WordPress Support Thread =

Consider this. If I'm consulting with you for an hour, that's an hour of time invested
with you, rather than one of my personal projects or assisting one of my other clients.

Before you contact me, be clear this will be a paid consulting conversation. So before
you contact me, be sure you're crystal clear about out topic, so we can optimize our time.

== Screenshots ==

1. No screenshots as this is a zero config plugin.

== Changelog ==

= 1.0 =
* 2016-05-16
* Initial Release

= 1.1 =
* 2016-05-18
* Minor readme file formatting fixes

= 1.2 =
* 2016-05-18
* Minor readme file formatting fixes

= 1.3 =
* 2016-05-18
* Minor readme file formatting fixes

= 1.4 =
* 2016-05-18
* Bumped readme.txt "Stable Tag" + plugin.php "Version" to match + show up correctly on [http://WordPress.org](http://WordPress.org) download page

== Upgrade Notice ==

Best always use the latest version of this plugin.
