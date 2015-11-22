##WPS-Prime##

A lightweight WordPress master theme based on _s and extended with simple and useful add ons that speeds up child theme development

- **Contact from 7 plugin adjustments:**
  - Disable scripts 
  - Disable styles 
  - Change preloader image 
  - Allow other shortcodes in Contact Form 7 Editor 
- **Custom Comment list**
  - custom markup
- **Custom Image sizes**
  - Image sizes show at content insertion point selector
- **Custom menu walker** 
  - Main menu navigation with BEM markup
- **Developer helper functions** _not active_
  - Get all registered image sizes
- **Add favicon**
  - Add favicon to website by dropping it into the theme root ( name file favicon.ico )
- **Theme Shortcodes**
  - 1  Layout Wrapper Markup - [layout class="lap-and-up..." wrapper="false"]
  - 2  Layout Item Markup - [item class="lap-and-up..."] ...content... [/item]
  - 3  Full Width Slider - [slider images="1,2,3...(image id's)" links="56,78,98...(page/post id's)" size="wps_prime_full"]
  - 4  Custom Buttons - [button class="btn--small,btn--large,btn--primary,btn--secondary,btn--tertiary" link="..." label="button label"]
  - 5  Media / Flag Object - media/flag(OOCSS Markup Items) - [object type="media/flag"] ... [/object]
  - 6  Media / Flag Object inners -media/flag (OOCSS Markup Items) - [object_item type="media__img/flag__img,media__img/media__body"]...[/object_item]
  - 7  Shortcode for icons - [ico]fa fa-home[/ico]
  - 8  Main Phone number - [main_phone_nr]
  - 9  Main Email address - [main_email]"
- **Recommended plugins activator** _speeds up wp-setup making esential plugins more accessable_
  - PIKLIST 
  - Simple Image Sizes
  - Online Backup for WordPress
  - WordPress Backup to Dropbox
  - WP Migrate DB
- **Theme fine tunes**
  - Remove all the version numers from the end of css/js enqueued files added to <head> (suggested by pingdom.com)
  - Remove Comment Form Allowed Tags
  - Customize Comment Form Place Holder Input Text Fields & Labels [source](http://wpsites.net/web-design/customize-comment-form-place-holder-input-text-fields-labels/)
  - Customize Comment Form Text Area & Label [source](http://wpsites.net/web-design/customize-comment-field-text-area-label/)
  - Removes empty paragraph tags p-tags and line break tags br-tags from shortcodes caused by WordPress's wpautop function.
  - Allow shortcode in text widget
  - Allow shortcode in widget title
- **Theme settings**
  - **Blog settings**
  - Archive article display mode, set article display type on archive pages (Blog / Archives) - options -> full / excerpt
  - Archive article featured image, set article featured image display on archive pages ( Blog / Archives) - check -> show / default unchecked and hidden
  - Article meta visibility settings, Set Article meta data visibility (ex. Posted on... / Posted in ...) show/hide. Default 'show' 
  - **Branding settings**
  - Company logo - Upload company logo
  - Use Logo or site title - Choose what to display
  - Company name - The Company name will be used for branding purpouses in the footer ex. Company Name LLC
  - Company Launch Year
  - Add main contact number - The Company main phone number for contact purpouses can be used later in content via shortcode and will be updated via option panel
  - Add main email address - The Company main contact email can be used later in content via shortcode and will be updated via option panel
  - **Typography settings**
  - Set font family, predefined list -> Open Sans, Raleway, Merriweather, Lato, Roboto, Source Sans Pro, PT Sans
