VAATO NO VEPAR WORDPRESS THEME (starter, design v2)

INSTALL (LocalWP)
1. Copy the vaato-theme folder into app/public/wp-content/themes/ (replace the old one),
   or WP Admin > Appearance > Themes > Add New > Upload Theme.
2. Activate "Vaato No Vepar". The 11 categories are created automatically.
3. Appearance > Customize > Site Identity: upload the logo.
4. HOST PHOTOS: the podcast section uses two photos that are embedded inside the client's HTML.
   Run this once from the theme folder (needs Python):
       python tools/extract-host-images.py "C:\path\to\vaato-no-vepar.html"
   It saves assets/img/host-mic.webp and assets/img/host-std.webp.
   (Or save the two photos yourself with those exact names.)

FILE MAP
style.css               theme header only
functions.php           theme setup, assets, content types, 60-word summary box
header.php / footer.php top bar + header, footer
front-page.php          Home, All News, Podcasts and Magazines views (same markup as the HTML design)
assets/css/main.css     ALL design CSS (paste updated CSS from client files here)
assets/js/main.js       design behaviour (currently uses demo data)
tools/                  helper script for the host photos

WHEN THE CLIENT SENDS A NEW HTML FILE
- CSS changes: update assets/css/main.css
- JS changes: update assets/js/main.js
- Markup changes: update front-page.php / header.php / footer.php

NEXT STEPS (replace demo data with real WordPress content)
1. Latest stories + article grids: pass WP_Query results to JS (wp_localize_script) instead of arrays S, NS, AR.
2. Podcast, show, magazine, vlog, reel, event sections: loop over their post types.
3. Market wrap: connect a market data API (arrays M, W, MT in main.js).
4. Newsletter and "Share your details" / "Nominate" forms: connect real forms.
5. Add single.php, archive.php, category.php for article pages.
