<?php
/**
 * Homepage + All News view (same as the approved HTML design).
 * Content blocks are static for now; see the README for converting each block to WordPress loops.
 */
get_header(); ?>

<main id="hm">
<section class="hero"><div class="w hg">
<article class="feat card"><div class="ph" data-a="skyline" data-p="1"><span class="cap"><b>Cover story</b>Surat, textile exports</span></div>
<span class="tag">Featured story</span>
<h1 id="h1">From a Surat workshop to a global export brand</h1>
<p>How three Gujarati founders rebuilt their family textile unit around direct-to-consumer exports, and what it cost them.</p><small style="color:var(--mut)">By Editorial Desk, 8 min read</small><div class="hb"><button class="rd big" data-i="0">Read in 60 words</button><a class="btn" href="#all-news" data-view="news">Check out all the news</a></div></article>
<aside class="lat"><h3>Latest stories <span class="gu" style="font-weight:600;color:var(--mut)">તાજા સમાચાર</span></h3><div id="ls"></div>
<button class="ls" data-i="all" style="margin-top:20px" aria-label="Listen to today's news"><span class="lp"></span><span class="lt"><b><span class="t1">Too busy to read? Listen instead</span><span class="t2">Playing today's news, tap to pause</span></b><small><span class="gu">સાંભળો, વાંચવાની જરૂર નથી</span> &middot; Today's news in audio</small></span><span class="eq"><i></i><i></i><i></i><i></i></span></button></aside>
</div></section>

<section id="categories" class="cs"><div class="w cbar"><span class="cl"><b>Categories</b> <span class="gu">વિભાગ</span></span><div class="cr" id="cr"></div><div class="cn"><button class="ib" id="cpv" aria-label="Previous categories">&#8249;</button><button class="ib" id="cnx" aria-label="Next categories">&#8250;</button></div></div></section>

<section class="mk" id="market"><div class="w">
<div class="top"><div><h2>Market wrap</h2><p class="sub"><b>આજનું બજાર</b> What moved today, and why. Tap any card.</p></div><div class="cn"><button class="ib" id="mpv" aria-label="Previous">&#8249;</button><button class="ib" id="mnx" aria-label="Next">&#8250;</button><a class="btn" href="#all-news" data-nc="Markets">Read market news</a></div></div></div>
<div class="w"><div class="mg" id="mg"></div>
<div class="why"><b id="wt">Why markets moved</b><span id="why"></span></div><div class="wd" id="wd"></div>
<div class="mt" id="mt"></div><div class="tl" id="tl"></div><div class="note">Placeholder names and numbers for design only. Live data will be connected later.</div></div>
<div class="mq" aria-hidden="true"><div id="mq"></div></div></section>

<section id="podcast"><div class="w pc">
<div class="host" id="host"></div>
<div><h2>Latest podcast</h2><p class="sub">Founders, investors and operators talk shop. <b>ચાલો, વાત કરીએ</b></p>
<div class="e42"><div class="ph cov" data-a="wave" data-p="0"><small>EP 42</small><b>ધંધાની વાતો</b></div><div><span class="tag">Latest episode</span><h3 style="margin:8px 0 0;font-size:24px;line-height:1.2">Why Gujarat's small towns are building the next big brands</h3><p style="color:var(--mut);margin:6px 0 0">With the founder of a Rajkot-based FMCG startup, 48 min</p></div></div>
<div class="pl" id="pl"><button class="play" id="pb" aria-label="Play episode">&#9654;</button><div class="bar"><i></i></div><small>48:12</small></div>
<div class="eps" id="eps"></div><div class="hb" style="margin-top:22px"><a class="btn" href="#podcasts" data-view="pod">Explore all podcasts</a><a class="btn o" href="#podcasts" data-view="pod">Be a guest</a></div></div></div></section>

<section class="iv" id="interview"><div class="w ig">
<div class="ph pm" data-a="person" data-p="0"><span class="cap"><b>Rajesh Mehta</b>Founder, Ahmedabad</span></div>
<div><span class="tag">Person of the month</span>
<p class="q">Business in Gujarat was never about luck. It was about trust, handed down like a recipe.</p>
<p style="color:var(--mut);max-width:56ch">A long conversation with the founder who took a 60-year-old Ahmedabad trading house online without losing a single loyal customer.</p>
<a class="btn" href="#">Read the interview</a> <a class="btn o" href="#">Watch</a></div></div></section>

<section class="mag" id="magazine"><div class="w mgg">
<div class="mc ph" data-a="skyline" data-p="1"><b>વાતો નો વેપાર</b><div><h4>The Vaato 25</h4><small>Monthly edition, October 2026</small></div></div>
<div><h2>This month's magazine</h2><p style="margin:0">The 25 startups to watch this month, from Gujarat and across India.</p>
<ul><li>Cover story: the 25 startups of the month, ranked</li><li>Founder stories from Surat to Bengaluru</li><li>Funding, markets and what to watch next month</li></ul>
<a class="btn" href="#">Read online</a> <a class="btn o" href="#">Download PDF</a> <a class="btn o" href="#magazines" data-view="mag">All magazines</a></div></div></section>

<section class="dk" id="vlog"><div class="w">
<h2>Vaato no vlog</h2><p class="sub"><b>વાતો નો વ્લોગ</b> Behind the scenes with the people who run the business.</p>
<div class="g3" id="vl"></div></div></section>

<section id="reels"><div class="w">
<h2>60 second vaato</h2><p class="sub"><b>૬૦ સેકન્ડ વાતો</b> One idea, one minute.</p>
<div class="rl" id="rl"></div></div></section>

<section style="background:var(--soft)"><div class="w">
<h2>Business events</h2><p class="sub">Meet the community, in person.</p><div id="evs"></div></div></section>

<section id="articles"><div class="w">
<h2 id="at">Latest articles</h2><p class="sub"><b>બધા વિભાગો</b> Pick a category to filter stories.</p>
<div class="chips" id="cc"></div><div class="g3" id="ar"></div></div></section>

<div class="nl" id="news"><div class="w"><h2>Get the day's vaato in your inbox</h2><p>One short email every morning: markets, one big story, one useful idea.</p>
<div class="nf"><input id="em" type="email" placeholder="Your email address" aria-label="Email address"><button class="btn" id="sb">Subscribe</button></div><div class="ok" id="ok" role="status"></div></div></div>
</main>

<div id="newspage" hidden><section class="np"><div class="w">
<div class="srs"><div class="sh"><div><h2 style="margin:0">Daily and weekly news shows</h2><p class="sub" style="margin:4px 0 0"><b>રોજની અને સાપ્તાહિક સમાચાર શ્રેણી</b> Watch on YouTube and Instagram, listen on Spotify.</p></div><div class="cn"><button class="ib" id="spv" aria-label="Previous shows">&#8249;</button><button class="ib" id="snx" aria-label="Next shows">&#8250;</button></div></div><div class="srw" id="srw"></div></div>
<div class="nph"><div><h1 id="nt">All news</h1><p class="sub" style="margin:6px 0 0"><b>બધા સમાચાર</b> Every story, every category.</p></div>
<button class="ls" data-i="cat" aria-label="Listen to this category"><span class="lp"></span><span class="lt"><b><span class="t1">Too busy to read? Listen instead</span><span class="t2">Playing now, tap to pause</span></b><small><span class="gu">સાંભળો, વાંચવાની જરૂર નથી</span> &middot; Hear <span id="nlab">top</span> news in audio</small></span><span class="eq"><i></i><i></i><i></i><i></i></span></button></div>
<div class="nch"><div class="chips" id="nc"></div></div>
<div class="ng" id="ng"></div></div></section></div>

<div id="podpage" hidden>
<section class="np" style="padding-bottom:40px"><div class="w"><div class="ph2" style="margin-bottom:0"><span class="tag">Podcasts</span><h1>Our podcasts.</h1><p class="sub" style="max-width:62ch"><b>ચાલો, વાત કરીએ</b> Three shows, three hosts, one promise: real business talk. Pick the conversation that suits you.</p><div class="chips" style="margin:22px 0 0"><button class="chip" data-sj="show0">Startup Spotlight</button><button class="chip" data-sj="show1">Binndaas Vaato</button><button class="chip" data-sj="show2">The Boardroom</button></div></div></div></section>
<div id="shows"></div>
<section class="np"><div class="w">
<div class="blk" style="margin-top:0"><h2>Follow us where you listen</h2><p class="sub"><b>અમને અનુસરો</b> New episodes land on every platform.</p><div class="soc" id="soc"></div></div>
<div class="blk"><h2>Recent podcasts</h2><p class="sub">Fresh from YouTube, Instagram and Spotify.</p><div class="chips" id="pt"></div><div class="g3" id="pg"></div></div>
<div class="guest"><div><h2 style="margin:0 0 12px">Want to be on a podcast?</h2><p style="margin:0 0 22px;opacity:.8;line-height:1.55;max-width:46ch">We invite our guests ourselves. If you have a story worth telling, share your details and our team will take a look. If it is a good fit, we will invite you to the show that suits you best.</p><a class="btn cta" href="#" style="width:auto;display:inline-block">Share your details</a></div>
<div class="stp"><div><i>1</i><b>Share your details</b><span>Tell us about you or your business.</span></div><div><i>2</i><b>We review</b><span>Our team looks at the story and the fit.</span></div><div><i>3</i><b>We invite you</b><span>If it fits, we place you on the right show.</span></div><div><i>4</i><b>Record and publish</b><span>In studio or remote, then live on YouTube, Instagram and Spotify.</span></div></div></div>
</div></section></div>

<div id="magpage" hidden>
<section class="np" style="padding-bottom:40px"><div class="w"><div class="ph2" style="margin-bottom:0"><span class="tag">Magazine</span><h1>Our magazines.</h1><p class="sub" style="max-width:62ch"><b>વાંચો, વિચારો, વિકસો</b> Two ways to read the business of Gujarat and India: a monthly 25 and a half-yearly 50.</p><div class="chips" style="margin:22px 0 0"><button class="chip" data-sj="mag0">The Vaato 25, monthly</button><button class="chip" data-sj="mag1">The Vaato 50, half-yearly</button></div></div></div></section>
<div id="mags"></div>
<section class="np"><div class="w">
<div class="blk" style="margin-top:0"><h2>How we choose</h2><p class="sub">Every listing is picked by our editorial team.</p><div class="stp"><div><i>Idea</i><b>Innovation</b><span>Something genuinely new, not a copy of what exists.</span></div><div><i>Traction</i><b>Real progress</b><span>Customers, revenue or users that prove it works.</span></div><div><i>Impact</i><b>Change it creates</b><span>Jobs, communities or industries it moves forward.</span></div><div><i>Story</i><b>Founder journey</b><span>A story that is worth telling and worth reading.</span></div></div></div>
<div class="nl" style="border-radius:32px;margin-top:80px;padding:56px 20px"><h2 style="margin:0">Never miss an issue</h2><p>We will send each new issue straight to your inbox.</p><div class="nf"><input id="em2" type="email" placeholder="Your email address" aria-label="Email address"><a class="btn tz" href="#" data-t="Thanks, you are on the list.">Subscribe</a></div></div>
<div class="guest"><div><h2 style="margin:0 0 12px">Know a startup we should feature?</h2><p style="margin:0 0 22px;opacity:.8;line-height:1.55;max-width:46ch">Nominations are welcome. Our editors read every one and decide who makes the list.</p><a class="btn tz" href="#" data-t="The nomination form opens here." style="display:inline-block">Nominate a startup</a></div>
<div class="stp"><div><i>1</i><b>You nominate</b><span>Tell us about the startup and why it stands out.</span></div><div><i>2</i><b>We review</b><span>Our editors research and verify the details.</span></div><div><i>3</i><b>Shortlist</b><span>The strongest candidates are compared side by side.</span></div><div><i>4</i><b>Ranked and published</b><span>The final list appears in the next issue.</span></div></div></div>
</div></section></div>

<?php get_footer(); ?>
