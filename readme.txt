=== All Icon Block ===
Contributors:      ikamal, wpbranch
Tags:              icon, icon block, SVG, SVG block, block
Requires at least: 5.9
Tested up to:      6.0
Requires PHP:      7.0
Stable tag:        1.0.2
License:           GPL-2.0-or-later
License URI:       https://www.gnu.org/licenses/gpl-2.0.html

Effortlessly add an SVG icon or graphic to your website or choose one from the WordPress icon library.

== Description ==

This plugin provides an easy way to add a custom SVG icon or graphic to the Block Editor (Gutenberg). It also includes the complete WordPress icon library with over 270 SVG icons to choose from!

=== Key Features ===

* 270+ native WordPress icons, including social logos
* Use any custom SVG icon or graphic
* Includes some handy icon controls (link, rotate, alignment, colors, border, padding, margin, etc.)
* No block library required 🎉
* Built almost entirely with native WordPress components
* Will get additional functionality as it's added to WordPress core
* Register your own custom icon library. [Learn more](https://blog.kamalhosen.com/adding-custom-icons-to-the-icon-block/)

=== Stay Connected ===

* [Follow on Twitter](https://twitter.com/kamalhosenn)

== Installation ==

1. You have a couple options:
	* Go to Plugins &rarr; Add New and search for "All Icon Block". Once found, click "Install".
	* Download the Icon Block from wordpress.org and make sure the folder us zipped. Then upload via Plugins &rarr; Add New &rarr; Upload.
    * Open the block inserter within the Block Editor (Gutenberg) and search for "icon". The plugin should appear and allow you to it install directly. Skip steps 2 and 3.
2. Activate the plugin through the 'Plugins' screen in WordPress.
3. Search for the block within the Block Editor (Gutenberg) and begin using.

== Frequently Asked Questions ==

= Where can I get more icons? =

Currently, the Icon Block only includes the WordPress icon library. That said, the plugin allows you to render **any** SVG-based icon by simply copy/pasting the code into the icon textarea when using the "Add custom icon" option! See the screenshots for reference. This gives you complete flexibility and allows you to use practically any icon you want. A great source for free SVG icons is Google's Material Icons project, Font Awesome, and Iconic, just to name a few.

The Icon Block also allows you to register your own custom block library. This needs to be done externally in your theme, or via a plugin, but provides complete flexibility over the icons available in the plugin. [Learn more](https://blog.kamalhosen.me/adding-custom-icons-to-the-icon-block/).

= Why is my icon not changing color? =

The Icon Block includes controls for the icon's color and background. However, if your SVG icon has hard coded color/fill values, the plugin will respect those instead of any applied custom colors.

= Why is the block not working for certain users? =

WordPress only allows Administrators and Editors to save "Unfiltered HTML" content, which includes SVGs. The Icon Block will not work properly for users who are at the Author level or lower.

Note that WordPress multisite installations have additional restrictions. "Unfiltered HTML" is restricted to Super Admins on multisite. To enable "Unfiltered HTML" content for site Administrators and Editors, you will need to use a [code snippet](https://kellenmace.com/add-unfiltered_html-capability-to-admins-or-editors-in-wordpress-multisite/), the [Unfiltered MU](https://wordpress.org/plugins-wp/unfiltered-mu/) plugin, or something similar. Regrettably, this is a WordPress restriction and needs to be handled outside of the Icon Block.

== Screenshots ==

1. The Icon Block includes the WordPress icon library allowing you to quickly and easily insert 270+ graphics.
2. Create your own custom icons by simply copy/pasting the SVG code. Then modify the icon to suit your needs.
3. The Icon Block comes with numerous icon controls such as color, rotation, alignment, padding, and border radius.
4. Whether you need a big icon, or a small one, the Icon Block adapts to your layout. Give it a try with the Row block in Gutenberg!
5. Use the "quick inserter", to quickly pick the WordPress icon you need.
6. The WordPress icon library modal is complete with categories, search, and preview size functionality.
7. Custom icons are added via their own insertion modal with a large textarea and the ability to preview the SVG code.
8. You are not limited to traditional icons. Any SVG-based graphic will work as well. The block will respect any hard coded color/fill values in the provided SVG.

== Changelog ==

= 1.0.0 =

* Initial release 🎉
