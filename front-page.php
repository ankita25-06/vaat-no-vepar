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
<div class="top"><div><h2>Today's market</h2><p class="sub"><b>આજનું બજાર</b>, as of market close</p></div><a class="btn" href="#">Full market page</a></div></div>
<div class="w"><div class="mg" id="mg"></div><div class="note">Placeholder values for design only. Live data will be connected later.</div></div>
<div class="mq" aria-hidden="true"><div id="mq"></div></div></section>

<section id="podcast"><div class="w pc">
<div class="ph cov" data-a="wave" data-p="0"><small>Latest episode, EP 42</small><b>ધંધાની વાતો</b></div>
<div><h2>Latest podcast</h2><p class="sub">Founders, investors and operators talk shop. <b>ચાલો, વાત કરીએ</b></p>
<h3 style="margin:0;font-size:24px">Why Gujarat's small towns are building the next big brands</h3>
<p style="color:var(--mut);margin:6px 0 0">With the founder of a Rajkot-based FMCG startup, 48 min</p>
<div class="pl" id="pl"><button class="play" id="pb" aria-label="Play episode">&#9654;</button><div class="bar"><i></i></div><small>48:12</small></div>
<div class="eps" id="eps"></div></div></div></section>

<section class="iv" id="interview"><div class="w ig">
<div class="ph pm" data-a="person" data-p="0"><span class="cap"><b>Rajesh Mehta</b>Founder, Ahmedabad</span></div>
<div><span class="tag">Person of the month</span>
<p class="q">Business in Gujarat was never about luck. It was about trust, handed down like a recipe.</p>
<p style="color:var(--mut);max-width:56ch">A long conversation with the founder who took a 60-year-old Ahmedabad trading house online without losing a single loyal customer.</p>
<a class="btn" href="#">Read the interview</a> <a class="btn o" href="#">Watch</a></div></div></section>

<section class="mag" id="magazine"><div class="w mgg">
<div class="mc ph" data-a="skyline" data-p="1"><b>વાતો નો વેપાર</b><div><h4>The Growth Issue</h4><small>Monthly magazine, edition 18</small></div></div>
<div><h2>This month's magazine</h2><p style="margin:0">The issue on how Gujarat's mid-sized firms are scaling.</p>
<ul><li>Cover story: the new family-business playbook</li><li>Startup map: 25 companies to watch</li><li>Gold, real estate and what to buy this Diwali</li></ul>
<a class="btn" href="#">Read online</a> <a class="btn o" href="#">Download PDF</a></div></div></section>

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

<?php get_footer(); ?>
