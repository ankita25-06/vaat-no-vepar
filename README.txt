VAATO NO VEPAR WORDPRESS THEME (starter)

INSTALL (LocalWP)
1. Create a site in LocalWP.
2. Copy the vaato-theme folder into app/public/wp-content/themes/
   (or WP Admin > Appearance > Themes > Add New > Upload Theme, using the zip).
3. Activate "Vaato No Vepar". The 11 categories are created automatically.
4. Settings > Reading: set "Your homepage displays" to "Your latest posts" (front-page.php is used automatically).
5. Appearance > Customize > Site Identity: upload the logo (it replaces the text logo in the header).

FILE MAP
style.css            theme header only
functions.php        theme setup, assets, content types (podcast, vlog, reel, event, magazine, show), 60-word summary box
header.php/footer.php  top bar + header, footer
front-page.php       homepage and All News view (same markup as the HTML design)
assets/css/main.css  ALL design CSS (paste updated CSS from client files here)
assets/js/main.js    design behaviour (currently uses demo data)

WHEN THE CLIENT SENDS A NEW HTML FILE
- CSS changes: paste into assets/css/main.css
- JS changes: update assets/js/main.js
- Markup changes: update front-page.php / header.php / footer.php

NEXT STEPS (replace demo data with real WordPress content)
1. Latest stories + article grids: pass WP_Query results to JS (wp_localize_script) instead of arrays S, NS, AR.
2. Podcast, vlog, reel, event, magazine sections: loop over their post types.
3. Market strip: connect a market data API.
4. Newsletter form: connect Mailchimp or similar.
5. Add single.php, archive.php, category.php for article pages.
