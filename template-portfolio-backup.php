<?php /* Template Name: Portfolio Template */ ?>
<?php
$ogCards = [
  [
    'image' => 'https://aneekaa.com/wp-content/uploads/cropped-logoweb@100x.png',
    'alt' => 'Aneekaa Studio logo',
  ],
];
$ogCard = $ogCards[array_rand($ogCards)];
?>

<!DOCTYPE html>
<html lang="en" data-theme="dark">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Manuel Becerra | Product Manager · Berlin · Enterprise AI</title>

<!-- Open Graph Meta Tags -->
<meta property="og:type" content="website">
<meta property="og:url" content="https://hi.manubecerra.com">
<meta property="og:title" content="Manuel Becerra | Product Manager · Berlin · Enterprise AI">
<meta property="og:description" content="PM and PO with 5+ years building enterprise AI tools. Case studies in AI model customization, MT quality pipelines, and B2B SaaS. Open to PM/PO roles in Berlin.">
<meta property="og:image" content="<?php echo htmlspecialchars($ogCard['image'], ENT_QUOTES, 'UTF-8'); ?>">
<meta property="og:image:alt" content="<?php echo htmlspecialchars($ogCard['alt'], ENT_QUOTES, 'UTF-8'); ?>">
<meta property="og:locale" content="en_US">

<!-- Twitter Card Meta Tags -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:url" content="https://hi.manubecerra.com">
<meta name="twitter:title" content="Manuel Becerra | Product Manager · Berlin · Enterprise AI">
<meta name="twitter:description" content="PM and PO with 5+ years building enterprise AI tools. Case studies in AI model customization, MT quality pipelines, and B2B SaaS. Open to PM/PO roles in Berlin.">
<meta name="twitter:image" content="<?php echo htmlspecialchars($ogCard['image'], ENT_QUOTES, 'UTF-8'); ?>">

<!-- Additional Meta Tags -->
<meta name="description" content="PM and PO with 5+ years building enterprise AI tools. Case studies in AI model customization, MT quality pipelines, and B2B SaaS. Open to PM/PO roles in Berlin.">
<meta name="author" content="Manuel Becerra">
<meta name="robots" content="index, follow">
<meta name="google-site-verification" content="google9e1b1b5f15b5328b.html">
<link rel="canonical" href="https://hi.manubecerra.com">
<link href="https://fonts.googleapis.com/css2?family=Sora:wght@300;400;500;600;700;800&family=JetBrains+Mono:wght@400;500;700&display=swap" rel="stylesheet">
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-MWJP7JLC');</script>
<!-- End Google Tag Manager -->
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-PV9ZWBGWW1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-PV9ZWBGWW1');
</script>
<style>
  /* ── GLOBAL OVERRIDES (case study hero) ── */
.ph-cover {
  display: none !important;
}
/* Case Study Hero Alignment and Spacing */
.hero-case-study {
  min-height: 100vh;
  display: flex;
  flex-direction: column;
  padding-top: 140px;
  padding-bottom: 120px;
}
.metrics {
  margin-top: auto;
}
/* (your existing big CSS continues here) */
/* ─────────────────────────────────────
   DESIGN SYSTEM
───────────────────────────────────── */
:root {
  /* HOME / HALOS = electric yellow */
  --a:#fff200; --al:#fff200; --adim:rgba(255,242,0,.07); --abdr:rgba(255,242,0,.28); --aglow:rgba(255,242,0,.18);
  /* ECHO = cyan */
  --ea:#0891b2; --eal:#22d3ee; --edim:rgba(34,211,238,.08); --ebdr:rgba(34,211,238,.2);
  /* ANEEKAA = orange-red */
  --na:#e84432; --nal:#ff6b55; --ndim:rgba(232,68,50,.08); --nbdr:rgba(232,68,50,.22);
  /* BRAND = violet/purple */
  --ba:#7c3aed; --bal:#a78bfa; --bdim:rgba(167,139,250,.08); --bbdr:rgba(167,139,250,.25); --bglow:rgba(167,139,250,.2);
  /* SIGNAL = electric blue */
  --sa:#00b4d8; --sal:#6ee7ff; --sdim:rgba(0,180,216,.10); --sbdr:rgba(0,180,216,.32); --sglow:rgba(0,180,216,.22);
}
[data-theme="dark"] {
  --bg:#080808; --bg2:#0f0f0f; --bg3:#161616;
  --card:#111111; --bdr:#222222; --subtle:#333;
  --ink:#f0f0f0; --muted:#666;
  --nav-bg:rgba(8,8,8,.9); --sh:rgba(0,0,0,.6);
}
[data-theme="light"] {
  --bg:#fafafa; --bg2:#f2f2f2; --bg3:#e8e8e8;
  --card:#fff; --bdr:#e0e0e0; --subtle:#ccc;
  --ink:#0a0a0a; --muted:#888;
  --nav-bg:rgba(250,250,250,.92); --sh:rgba(0,0,0,.08);
}

/* ── BASE ── */
*,*::before,*::after{box-sizing:border-box;margin:0;padding:0}

/* Hero section spacing and clean visuals override */
.hero {
  gap: 80px !important;
}
.hero .tag {
  padding-top: 12px !important;
  padding-bottom: 12px !important;
  margin-bottom: 48px !important;
}
.hero .h1 {
  margin-bottom: 48px !important;
}
.hero .hero-sub {
  margin-bottom: 64px !important;
}
.stats {
  padding-top: 64px !important;
}
.hero-glow {
  display: none !important;
}
.pcard-in::before {
  content: none !important;
}
.chip {
  box-shadow: none !important;
}
html{scroll-behavior:smooth}
body{background:var(--bg);color:var(--ink);font-family:'Sora',sans-serif;overflow-x:hidden;transition:background .4s,color .4s}
a{text-decoration:none;color:inherit}

/* ── CURSOR ── */
#cur{width:8px;height:8px;background:var(--al);border-radius:50%;position:fixed;pointer-events:none;z-index:9999;transform:translate(-50%,-50%);transition:width .2s,height .2s}
#cur-r{width:28px;height:28px;border:1px solid var(--abdr);border-radius:50%;position:fixed;pointer-events:none;z-index:9998;transform:translate(-50%,-50%)}

/* ── NAV ── */
nav{position:fixed;top:0;left:0;right:0;z-index:100;display:flex;align-items:center;justify-content:space-between;padding:18px 52px;background:var(--nav-bg);backdrop-filter:blur(24px);border-bottom:1px solid transparent;transition:border-color .3s,background .4s}
nav.scrolled{border-color:var(--bdr)}
.logo{font-family:'JetBrains Mono',monospace;font-weight:700;font-size:13px;color:var(--ink);display:flex;align-items:center}
.logo .dot{color:var(--al)}
.nav-r{display:flex;align-items:center;gap:30px}
.nav-links{display:flex;gap:26px;list-style:none}
.nav-links a{font-size:13px;font-weight:500;color:var(--muted);letter-spacing:.02em;transition:color .2s}
.nav-links a:hover{color:var(--ink)}
.nav-cta{background:var(--a);color:#000;padding:8px 20px;border-radius:6px;font-size:13px;font-weight:600;transition:opacity .2s,transform .2s}
.nav-cta:hover{opacity:.85;transform:translateY(-1px)}
.nav-cv{border:1px solid var(--bdr);padding:7px 16px;border-radius:6px;font-size:12px;font-weight:600;letter-spacing:.05em;color:var(--muted);transition:border-color .2s,color .2s}
.nav-cv:hover{border-color:var(--a);color:var(--a)}
.nav-toggle{
  display:none;
  width:32px;height:32px;
  border-radius:999px;
  border:1px solid var(--bdr);
  background:var(--card);
  align-items:center;justify-content:center;
  padding:0;margin:0;
  cursor:pointer;
}
.nav-toggle span{
  display:block;width:14px;height:2px;
  background:var(--muted);
  border-radius:999px;
  position:relative;
}
.nav-toggle span+span{margin-top:4px}
nav.open .nav-toggle span:first-child{transform:translateY(3px) rotate(45deg)}
nav.open .nav-toggle span:last-child{transform:translateY(-3px) rotate(-45deg)}
.th-btn{
  display:flex;align-items:center;gap:6px;
  background:var(--card);border:1px solid var(--bdr);
  border-radius:20px;padding:5px 12px;
  cursor:pointer;outline:none;
  font-family:'JetBrains Mono',monospace;
  font-size:11px;font-weight:600;letter-spacing:.06em;
  color:var(--muted);
  transition:border-color .2s,color .2s,background .3s;
}
.th-btn:hover{border-color:var(--al);color:var(--ink)}
.th-btn .th-icon{font-size:14px;line-height:1}
.th-btn .th-lbl{font-size:10px}

/* ── PAGES ── */
.page{display:none;min-height:100vh}
.page.active{display:block}

/* ══ HOME ══════════════════════════════ */

.hero{min-height:100vh;display:grid;grid-template-columns:1fr 1fr;align-items:center;padding:120px 52px 80px;gap:64px;position:relative;overflow:hidden;max-width:1280px;margin:0 auto}
.hero-glow{position:absolute;width:700px;height:700px;top:-120px;right:-100px;background:radial-gradient(circle,var(--aglow) 0%,transparent 65%);pointer-events:none;animation:pulse 8s ease-in-out infinite}
@keyframes pulse{0%,100%{opacity:.35;transform:scale(1)}50%{opacity:.6;transform:scale(1.07)}}
.hero-grid{position:absolute;inset:0;background-image:linear-gradient(var(--bdr) 1px,transparent 1px),linear-gradient(90deg,var(--bdr) 1px,transparent 1px);background-size:52px 52px;opacity:.25;pointer-events:none;mask-image:radial-gradient(ellipse 70% 70% at 70% 40%,black 20%,transparent 80%)}

.hero-left{position:relative;z-index:1}
.tag{display:inline-flex;align-items:center;gap:8px;border:1px solid var(--abdr);background:var(--adim);border-radius:4px;padding:6px 12px;font-family:'JetBrains Mono',monospace;font-size:10px;font-weight:500;letter-spacing:.12em;text-transform:uppercase;color:var(--al);margin-bottom:28px}
.blink{width:6px;height:6px;background:var(--al);border-radius:50%;animation:bl 2s infinite;flex-shrink:0}
@keyframes bl{0%,100%{opacity:1}50%{opacity:.15}}

.h1{font-size:clamp(42px,5.4vw,80px);font-weight:800;line-height:1.02;letter-spacing:-3px;margin-bottom:22px;color:var(--ink)}
.h1 .g{color:var(--al)}
.h1 .ghost{-webkit-text-stroke:1.5px var(--subtle);color:transparent}
.h1 .dm{color:var(--muted)}

.hero-sub{font-size:16px;color:var(--muted);line-height:1.82;max-width:440px;margin-bottom:36px;font-weight:300}
.hero-sub strong{color:var(--ink);font-weight:600}
.btns{display:flex;gap:12px;align-items:center}
.btn-p{background:var(--a);color:#000;padding:12px 28px;border-radius:6px;font-size:14px;font-weight:600;letter-spacing:.02em;transition:opacity .2s,transform .2s,box-shadow .2s;display:inline-block}
.btn-p:hover{opacity:.85;transform:translateY(-2px);box-shadow:0 12px 36px var(--aglow)}
.btn-s{color:var(--muted);font-size:14px;font-weight:500;padding:12px 18px;border:1px solid var(--bdr);border-radius:6px;transition:border-color .2s,color .2s;display:inline-block}
.btn-s:hover{border-color:var(--al);color:var(--al)}
.hero-social{display:flex;gap:20px;margin-top:24px;align-items:center}
.hs-link{display:flex;align-items:center;gap:7px;font-size:13px;font-weight:500;color:var(--muted);transition:color .2s}
.hs-link:hover{color:var(--a)}
.hs-link svg{opacity:.6;transition:opacity .2s}
.hs-link:hover svg{opacity:1}

/* photo card */
.hero-right{position:relative;z-index:1;display:flex;justify-content:center}
.pcard{width:300px;height:400px;position:relative}
.pcard-in{width:100%;height:100%;background:var(--card);border:1px solid var(--bdr);border-radius:16px;display:flex;flex-direction:column;align-items:center;justify-content:center;gap:8px;overflow:hidden;transition:background .4s,border-color .4s;position:relative}
.pcard-in::before{content:'';position:absolute;inset:0;background:linear-gradient(140deg,var(--adim) 0%,transparent 55%)}
.pcard-init{font-family:'JetBrains Mono',monospace;font-size:62px;font-weight:700;color:var(--subtle);line-height:1;position:relative;z-index:1}
.pcard-hint{font-size:11px;color:var(--muted);font-family:'JetBrains Mono',monospace;position:relative;z-index:1}
.pcard-img{width:100%;height:100%;object-fit:cover;border-radius:15px;position:absolute;top:0;left:0}
.pc-img{width:100%;height:100%;object-fit:cover;display:block;transition:transform .5s ease,opacity .3s}
.pc:hover .pc-img{transform:scale(1.04);opacity:.9}
.chip{position:absolute;background:var(--card);border:1px solid var(--bdr);border-radius:8px;padding:10px 14px;z-index:2;box-shadow:0 8px 26px var(--sh);transition:background .4s,border-color .4s}
.chip .cn{font-family:'JetBrains Mono',monospace;font-size:17px;font-weight:700;color:var(--al);line-height:1}
.chip .cl{font-size:10px;color:var(--muted);margin-top:3px}
.c1{top:24px;left:-50px} .c2{bottom:80px;right:-46px} .c3{bottom:-10px;left:6px}

/* ticker */
.ticker{overflow:hidden;border-top:1px solid var(--bdr);border-bottom:1px solid var(--bdr);padding:11px 0}
.tk{display:flex;gap:44px;animation:roll 30s linear infinite;width:max-content}
@keyframes roll{from{transform:translateX(0)}to{transform:translateX(-50%)}}
.tki{font-family:'JetBrains Mono',monospace;font-size:10px;letter-spacing:.12em;text-transform:uppercase;color:var(--muted);white-space:nowrap;display:flex;align-items:center;gap:10px}
.tki .s{color:var(--al);opacity:.4}

/* stats */
.stats{display:grid;grid-template-columns:repeat(4,1fr);border-bottom:1px solid var(--bdr);max-width:1280px;margin:0 auto}
.st{padding:34px 38px;border-right:1px solid var(--bdr);text-align:center}
.st:last-child{border-right:none}
.st .n{font-family:'JetBrains Mono',monospace;font-size:42px;font-weight:700;letter-spacing:-2px;color:var(--ink);line-height:1}
.st .n .a{color:var(--al)}
.st .l{font-size:12px;color:var(--muted);margin-top:6px}

/* sections */
.sec{padding:76px 52px;border-top:1px solid var(--bdr);max-width:1280px;margin:0 auto}
.lbl{font-family:'JetBrains Mono',monospace;font-size:10px;letter-spacing:.14em;text-transform:uppercase;color:var(--al);margin-bottom:12px;display:flex;align-items:center;gap:8px}
.lbl::before{content:'//';color:var(--subtle)}
.stitle{font-size:clamp(26px,3.4vw,48px);font-weight:800;letter-spacing:-2px;line-height:1.04;color:var(--ink);margin-bottom:12px}

/* about */
.ag{display:grid;grid-template-columns:1.1fr .9fr;gap:64px;align-items:stretch}
.abt{display:flex;flex-direction:column;justify-content:center}
.abt p{font-size:15px;color:var(--muted);line-height:1.88;margin-bottom:14px;font-weight:300}
.abt p strong{color:var(--ink);font-weight:600}
.pillars{display:grid;grid-template-columns:1fr 1fr;grid-auto-rows:1fr;gap:12px;align-self:stretch}
.pil{background:var(--card);border:1px solid var(--bdr);padding:28px 24px;position:relative;overflow:hidden;transition:border-color .25s,background .4s;cursor:default;display:flex;flex-direction:column;justify-content:flex-start}
.pil::after{content:'';position:absolute;left:0;top:0;bottom:0;width:2px;background:var(--al);transform:scaleY(0);transform-origin:bottom;transition:transform .3s}
.pil:hover{border-color:var(--abdr)} .pil:hover::after{transform:scaleY(1)}
.pil .ico{font-size:18px;margin-bottom:12px}
.pil h4{font-size:13px;font-weight:700;color:var(--ink);margin-bottom:8px}
.pil p{font-size:12px;color:var(--muted);line-height:1.65;margin:0}

/* ═══════════════════════════════════════
   PROJECT GRID
═══════════════════════════════════════ */
.pg{
  display:grid;
  grid-template-columns:repeat(3,minmax(0,1fr));
  gap:24px;
  margin-top:48px;
  align-items:stretch;
}

/* Shared case study card */
.pc-card{
  position:relative;
  display:flex;
  flex-direction:column;
  background:var(--card);
  border:1px solid var(--bdr);
  overflow:hidden;
  cursor:pointer;
  height:100%;
  transition:border-color .3s,transform .4s cubic-bezier(.22,1,.36,1);
}
.pc-card:hover{transform:translateY(-3px)}

/* Image / visual area */
.pc-media{
  position:relative;
  overflow:hidden;
  height:220px;
  background:var(--bg2);
}
.pc-media img,
.pc-media svg{
  width:100%;
  height:100%;
  object-fit:cover;
  display:block;
}
.pc-media img{
  transition:transform .7s cubic-bezier(.22,1,.36,1),filter .5s;
  filter:brightness(.9) saturate(.9);
}
.pc-card:hover .pc-media img{transform:scale(1.06);filter:brightness(.8)}

/* Text content area */
.pc-body{
  flex:1;
  padding:26px 28px 28px;
  display:flex;
  flex-direction:column;
  background:var(--card);
}

/* HALOS specific accents */
.pc-halos{border-color:var(--bdr)}
.pc-halos:hover{border-color:var(--abdr)}
.pc-halos .pmet{color:var(--al)}
.pc-halos-meta{display:flex;flex-wrap:wrap;gap:6px;margin-top:16px;margin-bottom:20px}
.pc-halos-pill{
  font-family:'JetBrains Mono',monospace;font-size:9px;
  letter-spacing:.1em;text-transform:uppercase;
  color:var(--muted);border:1px solid var(--bdr);
  padding:3px 9px;border-radius:3px;
  transition:border-color .2s,color .2s;
}
.pc-halos:hover .pc-halos-pill{border-color:var(--abdr);color:var(--al)}

/* ECHO & ANEEKAA accents */
.pc-echo:hover{border-color:var(--ebdr)}
.pc-aneekaa:hover{border-color:var(--nbdr)}
.pc-signal:hover{border-color:var(--sbdr)}
.pc-echo .pcb-split::before{background:var(--eal)}
.pc-aneekaa .pcb-split::before{background:var(--nal)}
.pc-signal .ptag{border-color:var(--sbdr);color:var(--sal);background:var(--sdim)}
.pc-signal .pc-cta{color:var(--sal)}
.pc-signal:hover .pc-cta{opacity:1;transform:none}
.pc-signal:hover .parr{background:var(--sal);border-color:var(--sal);color:#000;transform:rotate(0)}
.pc-echo:hover .pcb-split::before,
.pc-aneekaa:hover .pcb-split::before{transform:scaleX(1)}

/* ── SHARED CARD ELEMENTS ── */

/* Tag */
.ptag{
  display:inline-flex;align-items:center;
  border:1px solid var(--abdr);
  background:var(--adim);
  color:var(--al);
  font-family:'JetBrains Mono',monospace;font-size:8px;
  letter-spacing:.14em;text-transform:uppercase;
  padding:4px 10px;border-radius:3px;
  margin-bottom:20px;width:fit-content;
}
.pc-echo .ptag{border-color:var(--ebdr);color:var(--eal);background:var(--edim)}
.pc-aneekaa .ptag{border-color:var(--nbdr);color:var(--nal);background:var(--ndim)}

/* Metric */
.pmet{
  font-family:'JetBrains Mono',monospace;
  font-size:clamp(52px,6vw,80px);
  font-weight:700;letter-spacing:-4px;line-height:.9;
  margin-bottom:14px;
  transition:color .3s;
}
.pc-halos .pmet{color:var(--al)}
.pc-echo .pmet,.pc-aneekaa .pmet{color:var(--ink)}
.pc-echo:hover .pmet{color:var(--eal)}
.pc-aneekaa:hover .pmet{color:var(--nal)}

/* Title */
.ptit{font-size:clamp(16px,1.6vw,20px);font-weight:700;letter-spacing:-.5px;line-height:1.2;margin-bottom:10px;color:var(--ink)}

/* Description */
.pdsc{font-size:13.5px;line-height:1.76;margin-bottom:6px;font-weight:300;color:var(--muted)}

/* CTA */
.pc-cta{
  display:inline-flex;align-items:center;gap:6px;
  font-family:'JetBrains Mono',monospace;font-size:10px;
  font-weight:700;letter-spacing:.1em;text-transform:uppercase;
  opacity:0;transform:translateY(5px);
  transition:opacity .3s,transform .3s;
  margin-top:4px;
}
.pc-halos .pc-cta{color:var(--al)}
.pc-echo .pc-cta{color:var(--eal)}
.pc-aneekaa .pc-cta{color:var(--nal)}
.pc-halos:hover .pc-cta,
.pc-echo:hover .pc-cta,
.pc-aneekaa:hover .pc-cta{opacity:1;transform:none}
.pc-cta::after{content:'→';transition:transform .2s}
.pc-halos:hover .pc-cta::after,
.pc-echo:hover .pc-cta::after,
.pc-aneekaa:hover .pc-cta::after{transform:translateX(4px)}

/* Corner arrow */
.parr{
  position:absolute;top:18px;right:18px;z-index:8;
  width:30px;height:30px;
  border:1px solid var(--bdr);border-radius:50%;
  display:flex;align-items:center;justify-content:center;
  font-size:11px;color:var(--muted);
  background:var(--bg2);
  transform:rotate(-45deg);
  transition:all .35s cubic-bezier(.22,1,.36,1);
}
.pc-halos:hover .parr{background:var(--a);border-color:var(--a);color:#000;transform:rotate(0)}
.pc-echo:hover .parr{background:var(--eal);border-color:var(--eal);color:#000;transform:rotate(0)}
.pc-aneekaa:hover .parr{background:var(--nal);border-color:var(--nal);color:#000;transform:rotate(0)}



/* ── HOW I WORK ── */
.how-grid{display:grid;grid-template-columns:repeat(4,1fr);gap:3px;margin-top:36px}
.how-col{background:var(--card);border:1px solid var(--bdr);padding:28px 24px;position:relative}
.how-col::before{content:'';position:absolute;top:0;left:0;right:0;height:2px;background:var(--al)}
.how-label{font-family:'JetBrains Mono',monospace;font-size:9px;font-weight:700;color:var(--al);letter-spacing:.12em;text-transform:uppercase;margin-bottom:20px}
.how-list{list-style:none;padding:0;margin:0}
.how-list li{font-size:13px;color:var(--muted);line-height:1.7;padding:7px 0;border-bottom:1px solid var(--bdr);font-weight:300}
.how-list li:last-child{border-bottom:none}
@media(max-width:860px){.how-grid{grid-template-columns:1fr 1fr}}
@media(max-width:600px){.how-grid{grid-template-columns:1fr}}

/* ── BRAND card ── */
.pc-brand:hover{border-color:var(--bbdr);transform:translateY(-3px)}
.pc-brand .ptag{border-color:var(--bbdr);color:var(--bal);background:var(--bdim)}
.pc-brand .pmet{color:var(--bal)}
.pc-brand:hover .pmet{color:var(--bal)}
.pc-brand .pc-cta{color:var(--bal)}
.pc-brand:hover .pc-cta{opacity:1;transform:none}
.pc-brand:hover .parr{background:var(--bal);border-color:var(--bal);color:#000;transform:rotate(0)}

/* ── Brand case study page ── */
#pg-brand{
  --ca:var(--ba);--cal:var(--bal);
  --cadim:var(--bdim);--cabdr:var(--bbdr);
  --caglow:rgba(167,139,250,.25);
}

/* ── Brand gallery grid ── */
/* ── Brand image display ── */
.brand-section{
  display:grid;
  grid-template-columns:1fr 1fr;
  gap:48px;
  align-items:start;
  margin:120px 0;
}
.brand-section:nth-of-type(even) {
  direction: rtl;
}
.brand-section:nth-of-type(even) > div {
  direction: ltr;
}
.brand-section h2{margin-top:0}
.brand-section > div:first-child{flex:1}
.brand-section .brand-img-block{
  margin:0;
  max-width:100%;
}
.brand-img-block{
  margin:32px 0;
  border:1px solid var(--bdr);
  overflow:hidden;
  cursor:zoom-in;
  position:relative;
  transition:border-color .3s;
}
html[data-theme="dark"] .brand-img-block{
  background:#0d0d0d;
}
.brand-img-block:hover{border-color:var(--bbdr)}
.brand-img-block img{
  width:100%;
  height:auto;
  display:block;
  object-fit:contain;
  transition:opacity .3s;
}
.brand-img-block:hover img{opacity:.9}
.brand-img-caption{
  font-family:'JetBrains Mono',monospace;
  font-size:10px;letter-spacing:.1em;
  text-transform:uppercase;color:var(--muted);
  padding:12px 16px;
  border-top:1px solid var(--bdr);
  background:var(--card);
}
/* White-bg images need padding so they don't bleed */
html[data-theme="dark"] .brand-img-block.on-dark img{
  padding:40px;
  background:#0d0d0d;
}
@media(max-width:768px){
  .brand-section{
    grid-template-columns:1fr;
    gap:24px;
  }
}
/* Keep old classes for backward compat */
.bg-grid{display:block}
.bg-item{display:none}
.bg-item.wide{display:none}

/* ── Lightbox ── */
#lb{display:none;position:fixed;inset:0;z-index:9000;background:rgba(0,0,0,.94);backdrop-filter:blur(12px);align-items:center;justify-content:center;cursor:zoom-out}
#lb.open{display:flex}
#lb img{max-width:90vw;max-height:88vh;object-fit:contain;cursor:default}
#lb-close{position:absolute;top:22px;right:28px;font-family:'JetBrains Mono',monospace;font-size:11px;color:rgba(255,255,255,.5);letter-spacing:.1em;text-transform:uppercase;cursor:pointer;transition:color .2s;background:none;border:none}
#lb-close:hover{color:#fff}
#lb-caption{position:absolute;bottom:28px;left:50%;transform:translateX(-50%);font-family:'JetBrains Mono',monospace;font-size:11px;color:rgba(255,255,255,.45);letter-spacing:.04em;text-align:center;max-width:560px;line-height:1.5;pointer-events:none}

/* tools */
.tools{
  display:grid;
  grid-template-columns:repeat(auto-fit,minmax(140px,1fr));
  gap:10px 12px;
  margin-top:24px;
}
.tool{
  background:var(--card);
  border:1px solid var(--bdr);
  padding:7px 14px;
  border-radius:4px;
  font-size:12px;
  font-weight:500;
  color:var(--muted);
  text-align:left;
  transition:border-color .2s,color .2s,background .4s;
  cursor:default;
}
.tool:hover{border-color:var(--al);color:var(--al);background:var(--adim)}

/* creds */
.cg{display:grid;grid-template-columns:1fr 1fr;gap:2px;margin-top:40px}
.cb{background:var(--card);border:1px solid var(--bdr);padding:32px;transition:background .4s}
.cb h3{font-family:'JetBrains Mono',monospace;font-size:9px;letter-spacing:.14em;text-transform:uppercase;color:var(--al);margin-bottom:20px}
.ci{padding:13px 0;border-bottom:1px solid var(--bdr)}
.ci:last-child{border-bottom:none;padding-bottom:0}
.ci .ct{font-size:14px;font-weight:700;color:var(--ink);margin-bottom:2px}
.ci .cs{font-size:12px;color:var(--muted)}
.ci .cy{font-family:'JetBrains Mono',monospace;font-size:10px;color:var(--al);margin-top:2px}

/* contact */
.cog{display:grid;grid-template-columns:1fr 1fr;gap:68px;align-items:start}
.col p{font-size:15px;color:var(--muted);line-height:1.82;margin:14px 0 22px;font-weight:300}
.col p strong{color:var(--ink);font-weight:600}
.eml{font-family:'JetBrains Mono',monospace;font-size:14px;font-weight:700;color:var(--al);border-bottom:1px solid var(--abdr);padding-bottom:3px;transition:border-color .2s}
.eml:hover{border-color:var(--al)}
.socs{display:flex;gap:9px;margin-top:18px}
.soc{color:var(--muted);font-size:12px;font-weight:500;padding:7px 13px;border:1px solid var(--bdr);border-radius:4px;transition:border-color .2s,color .2s}
.soc:hover{border-color:var(--al);color:var(--al)}
.form{display:flex;flex-direction:column;gap:10px}
.fr label{display:block;font-family:'JetBrains Mono',monospace;font-size:9px;letter-spacing:.12em;text-transform:uppercase;color:var(--muted);margin-bottom:5px}
.fr input,.fr textarea{width:100%;background:var(--bg2);border:1px solid var(--bdr);border-radius:4px;padding:11px 14px;color:var(--ink);font-family:'Sora',sans-serif;font-size:14px;outline:none;transition:border-color .2s,background .4s;resize:vertical}
.fr input::placeholder,.fr textarea::placeholder{color:var(--subtle)}
.fr input:focus,.fr textarea:focus{border-color:var(--al)}
.fr textarea{min-height:96px}
.btn-send{background:var(--a);color:#000;border:none;padding:12px 24px;border-radius:6px;font-family:'Sora',sans-serif;font-size:13px;font-weight:600;cursor:pointer;transition:opacity .2s,transform .2s;align-self:flex-start}
.btn-send:hover{opacity:.85;transform:translateY(-2px)}

footer{padding:22px 52px;border-top:1px solid var(--bdr);display:flex;justify-content:space-between;align-items:center;max-width:1280px;margin:0 auto}
footer p{font-family:'JetBrains Mono',monospace;font-size:11px;color:var(--muted)}
.fl{display:flex;gap:18px}
.fl a{font-size:12px;color:var(--muted);transition:color .2s}
.fl a:hover{color:var(--al)}

/* ══ CASE STUDY PAGES ══════════════════
   Each page has data-acc which sets --ca vars
═════════════════════════════════════ */
#pg-halos{--ca:var(--a);--cal:var(--al);--cadim:var(--adim);--cabdr:var(--abdr);--caglow:rgba(255,242,0,.18)}
#pg-halos .cs-pillars{grid-template-columns:1fr}
#pg-halos .cs-features{grid-template-columns:1fr}
#pg-echo {--ca:var(--ea);--cal:var(--eal);--cadim:var(--edim);--cabdr:var(--ebdr);--caglow:rgba(34,211,238,.28)}
#pg-aneekaa{--ca:var(--na);--cal:var(--nal);--cadim:var(--ndim);--cabdr:var(--nbdr);--caglow:rgba(232,68,50,.28)}
#pg-signal{--ca:var(--sa);--cal:var(--sal);--cadim:var(--sdim);--cabdr:var(--sbdr);--caglow:var(--sglow)}

.ph{
  padding:0;
  border-bottom:1px solid var(--bdr);
  position:relative;overflow:hidden;
}
/* Optional cover image strip */
.ph-cover{
  width:100%;height:320px;position:relative;overflow:hidden;
}
.ph-cover img{
  width:100%;height:100%;object-fit:cover;
  filter:brightness(.45) saturate(.7);
  display:block;
}
.ph-cover::after{
  content:'';position:absolute;inset:0;
  background:linear-gradient(to bottom, transparent 20%, var(--bg) 100%);
}
/* No cover fallback - just show glow */
.ph-glow{
  position:absolute;width:700px;height:700px;
  top:-100px;right:-100px;
  background:radial-gradient(circle,var(--caglow) 0%,transparent 65%);
  pointer-events:none;opacity:.5;
}
.ph-body{
  padding:200px 52px 160px;
  position:relative;z-index:2;
  max-width:1280px;margin:0 auto;
}
.ph-word{
  position:absolute;right:-10px;bottom:0px;
  font-family:'JetBrains Mono',monospace;font-weight:800;
  font-size:clamp(80px,13vw,180px);letter-spacing:-8px;
  color:var(--ink);opacity:.04;line-height:1;
  pointer-events:none;user-select:none;z-index:0;
}
.back,
.ph-back{
  display:inline-flex;align-items:center;gap:7px;
  font-family:'JetBrains Mono',monospace;font-size:11px;
  color:var(--muted);margin-bottom:26px;cursor:pointer;
  transition:color .2s;letter-spacing:.04em;
  background:none;border:none;
}
.back:hover,
.ph-back:hover{color:var(--cal)}
.ph-tags{display:flex;gap:7px;flex-wrap:wrap;margin-bottom:16px}
.ph-tag{
  background:var(--bg2);border:1px solid var(--bdr);
  border-radius:3px;padding:4px 10px;
  font-family:'JetBrains Mono',monospace;font-size:9px;
  font-weight:500;letter-spacing:.1em;text-transform:uppercase;color:var(--muted);
}
.ph-tag.hi{background:var(--cadim);border-color:var(--cabdr);color:var(--cal)}
.ph-ttl{
  font-size:clamp(38px,6vw,80px);font-weight:800;
  letter-spacing:-3px;line-height:.95;
  margin-bottom:20px;color:var(--ink);
  position:relative;z-index:1;
}
.ph-sub{
  font-size:16px;color:var(--muted);
  max-width:600px;line-height:1.76;font-weight:300;
  position:relative;z-index:1;
}

.mbar{display:grid;grid-template-columns:repeat(auto-fit,minmax(160px,1fr));gap:3px}
.mi{
  background:var(--card);border:1px solid var(--bdr);
  padding:28px 28px 24px;transition:background .4s;
  position:relative;overflow:hidden;
}
.mi::before{content:'';position:absolute;top:0;left:0;right:0;height:2px;background:var(--cal)}
.mi .mn{font-family:'JetBrains Mono',monospace;font-size:clamp(28px,3.5vw,44px);font-weight:700;color:var(--cal);letter-spacing:-2px;line-height:1}
.mi .ml{font-size:11px;color:var(--muted);margin-top:8px;line-height:1.5}

.cs-pillars{display:grid;grid-template-columns:repeat(auto-fit,minmax(260px,1fr));gap:3px}
.cspil{background:var(--card);border:1px solid var(--bdr);padding:26px 28px;transition:background .4s;position:relative}
.cspil::before{content:'';position:absolute;top:0;left:0;bottom:0;width:2px;background:var(--cal)}
.cspil-n{font-family:'JetBrains Mono',monospace;font-size:10px;font-weight:700;color:var(--cal);letter-spacing:.08em;text-transform:uppercase;margin-bottom:14px}
.cspil p{font-size:13.5px;line-height:1.78;color:var(--muted);margin-bottom:10px;font-weight:300}
.cspil p:last-child{margin-bottom:0}
.cspil p strong{color:var(--ink);font-weight:600}

.cs-features{display:grid;grid-template-columns:1fr;gap:3px}
.cs-feat{background:var(--card);border:1px solid var(--bdr);padding:26px 28px;transition:background .4s}
.cs-feat-ttl{font-size:14px;font-weight:700;color:var(--ink);margin-bottom:12px;letter-spacing:-.3px;display:flex;align-items:center;gap:8px}
.cs-feat-ttl::before{content:'';display:block;width:3px;height:14px;background:var(--cal);flex-shrink:0}
.cs-feat p{font-size:13px;color:var(--muted);line-height:1.72;margin-bottom:10px;font-weight:300}
.cs-feat ul{margin:0 0 0 14px;padding:0}
.cs-feat ul li{font-size:12.5px;color:var(--muted);line-height:1.6;margin-bottom:5px;font-weight:300}

.art{padding:52px 52px 40px;max-width:1280px;margin:0 auto}
.art h2{
  font-size:clamp(17px,1.8vw,22px);font-weight:800;
  letter-spacing:-.5px;color:var(--ink);
  margin:52px 0 16px;
  display:flex;align-items:center;gap:12px;
}
.art h2::before{content:'';display:block;width:24px;height:2px;background:var(--cal);flex-shrink:0}
.art h2:first-child{margin-top:0}
.art p{font-size:15px;color:var(--muted);line-height:1.88;margin-bottom:14px;font-weight:300;max-width:720px}
.art p strong{color:var(--ink);font-weight:600}
.art ul{margin:0 0 18px 18px;max-width:700px}
.art ul li{font-size:14px;color:var(--muted);line-height:1.78;margin-bottom:8px;font-weight:300}
.art ul li strong{color:var(--ink);font-weight:600}
.art .cs-pillars,.art .cs-features,.art .mbar{max-width:100%;margin-top:24px}
.aq{
  background:var(--card);border-left:3px solid var(--cal);
  padding:20px 26px;margin:28px 0;
  transition:background .4s,border-color .4s;
}
.aq p{color:var(--ink)!important;font-style:italic;margin:0;font-size:15px;font-weight:400!important;line-height:1.72;max-width:none!important}
.cs-img{width:100%;margin:28px 0;display:block;border:1px solid var(--bdr)}
.cs-figure{margin:28px 0}
.cs-figure .cs-img{margin:0 0 0}
.cs-caption{
  font-family:'JetBrains Mono',monospace;font-size:11px;
  color:var(--muted);line-height:1.6;
  padding:10px 14px;
  border-left:2px solid var(--cal);
  background:var(--bg2);
  border-bottom:1px solid var(--bdr);
  border-right:1px solid var(--bdr);
}
.tool-logos{
  display:flex;
  flex-wrap:wrap;
  gap:14px;
  align-items:center;
  justify-content:flex-start;
  margin:20px 0 12px;
}
.tl{
  height:26px;
  width:auto;
  object-fit:contain;
  filter:grayscale(1) brightness(1.6);
  opacity:.5;
  transition:opacity .3s,filter .3s,transform .3s;
}
.tl:hover{
  opacity:.75;
  filter:grayscale(.2) brightness(1.2);
  transform:translateY(-1px);
}
.cs-img{width:100%;border-radius:10px;margin:26px 0;display:block;border:1px solid var(--bdr)}
.pcard-img{width:100%;height:100%;object-fit:cover;border-radius:inherit}

.case-nav{border-top:1px solid var(--bdr);padding:36px 52px;display:flex;justify-content:space-between;align-items:center;max-width:1280px;margin:0 auto}
.cnl{cursor:pointer}
.cnlbl{font-family:'JetBrains Mono',monospace;font-size:9px;letter-spacing:.1em;text-transform:uppercase;color:var(--muted);margin-bottom:6px}
.cnttl{font-size:18px;font-weight:800;letter-spacing:-.5px;color:var(--ink);transition:color .2s}
.cnl:hover .cnttl{color:var(--cal)}
.btn-case{padding:11px 24px;border-radius:6px;font-size:13px;font-weight:600;background:var(--ca);color:#000;transition:opacity .2s,transform .2s;display:inline-block}
.btn-case:hover{opacity:.85;transform:translateY(-1px)}

/* fade animation */
.fade{opacity:0;transform:translateY(16px);transition:opacity .65s ease,transform .65s ease}
.fade.in{opacity:1;transform:none}

@media(max-width:860px){
  nav{padding:14px 20px}
  .nav-r{gap:12px}
  .nav-toggle{display:flex}
  .nav-links{
    position:absolute;
    top:100%;left:0;right:0;
    background:var(--nav-bg);
    flex-direction:column;
    align-items:flex-start;
    padding:12px 20px 14px;
    border-bottom:1px solid var(--bdr);
    display:none;
    gap:12px;
  }
  nav.open .nav-links{display:flex}
  .hero{grid-template-columns:1fr;padding:96px 20px 56px}
  .hero-right{display:none}
  .sec,.ph-body,.case-nav,.art{padding-left:20px;padding-right:20px}
  .ag,.cog,.cg{grid-template-columns:1fr;gap:28px}
  .pg{grid-template-columns:1fr}
  .pc-media{height:200px}
  .stats{grid-template-columns:1fr 1fr}
  .pillars{grid-template-columns:1fr}
  .mbar{grid-template-columns:1fr 1fr}
  .ph-cover{height:200px}
  .ph-ttl{letter-spacing:-2px}
  footer{flex-direction:column;gap:10px;padding:18px;text-align:center}
  .case-nav{flex-direction:column;gap:18px}
}

/* ─── SIGNAL STYLES ─── */
.sig-glance{display:grid;grid-template-columns:repeat(auto-fit,minmax(170px,1fr));gap:3px;margin:20px 0 8px}
.sig-mini{background:var(--card);border:1px solid var(--bdr);padding:20px 22px;display:flex;flex-direction:column;gap:6px;transition:border-color .25s,background .3s;position:relative;overflow:hidden}
.sig-mini::after{content:'';position:absolute;bottom:0;left:0;right:0;height:1px;background:var(--sal);transform:scaleX(0);transform-origin:left;transition:transform .3s}
.sig-mini:hover{border-color:var(--sbdr);background:var(--bg2)}
.sig-mini:hover::after{transform:scaleX(1)}
.sig-mini .k{font-family:'JetBrains Mono',monospace;font-size:9px;letter-spacing:.1em;text-transform:uppercase;color:var(--sal)}
.sig-mini .v{font-size:15px;font-weight:700;letter-spacing:-.3px;color:var(--ink);line-height:1.2}
.sig-mini .s{font-size:11px;color:var(--muted);line-height:1.45}

.sig-grid{display:grid;grid-template-columns:repeat(auto-fit,minmax(240px,1fr));gap:3px;margin:20px 0 8px}
.sig-card{background:var(--card);border:1px solid var(--sbdr);padding:24px 26px;display:flex;flex-direction:column;gap:10px;position:relative;overflow:hidden;transition:border-color .3s,transform .3s}
.sig-card::before{content:'';position:absolute;top:0;left:0;bottom:0;width:2px;background:var(--sal);opacity:.45;transition:opacity .3s}
.sig-card:hover{border-color:var(--sal);transform:translateY(-2px)}
.sig-card:hover::before{opacity:1}
.sig-card .sig-kicker{font-family:'JetBrains Mono',monospace;font-size:9px;letter-spacing:.1em;text-transform:uppercase;color:var(--sal)}
.sig-card h4{font-size:15px;font-weight:700;letter-spacing:-.2px;color:var(--ink)}
.sig-card p{font-size:13px;color:var(--muted);line-height:1.65;margin:0}

.flow-diagram{background:var(--bg2);border:1px solid var(--bdr);padding:36px 32px 28px;margin:24px 0}
.flow-svg-wrap{overflow-x:auto}

.cs-pillars{display:grid;grid-template-columns:repeat(auto-fit,minmax(280px,1fr));gap:20px;margin:32px 0}
.cspil{background:var(--card);border:1px solid var(--bdr);padding:24px;display:flex;flex-direction:column;gap:12px}
.cspil-n{font-family:'JetBrains Mono',monospace;font-size:11px;letter-spacing:.1em;text-transform:uppercase;color:var(--sal);font-weight:600}

.sig-steps{margin:0 0 18px 18px;max-width:700px}
.sig-steps li{font-size:14px;color:var(--muted);line-height:1.8;margin-bottom:8px;font-weight:300}

.signal-demo{background:var(--bg2);border:1px solid var(--bdr);padding:32px;margin:32px 0;border-radius:8px}
.sd-header{display:flex;align-items:center;justify-content:space-between;margin-bottom:20px}
.sd-lbl{font-family:'JetBrains Mono',monospace;font-size:12px;font-weight:600;color:var(--sal);letter-spacing:.05em}
.sd-badge{background:var(--sdim);border:1px solid var(--sbdr);padding:4px 10px;font-family:'JetBrains Mono',monospace;font-size:9px;font-weight:500;letter-spacing:.1em;text-transform:uppercase;color:var(--sal)}
.sd-body{display:flex;flex-direction:column;gap:20px}
.sd-context{font-size:13px;color:var(--muted);line-height:1.6;margin-bottom:8px}
.sd-chips{display:flex;gap:8px;flex-wrap:wrap}
.sd-chip{background:var(--card);border:1px solid var(--bdr);padding:8px 14px;font-size:12px;color:var(--ink);border-radius:20px;cursor:pointer;transition:background .2s,border-color .2s}
.sd-chip:hover{background:var(--bg2);border-color:var(--sal)}
.sd-input{width:100%;min-height:80px;padding:14px;border:1px solid var(--bdr);border-radius:6px;background:var(--card);color:var(--ink);font-family:inherit;font-size:13px;line-height:1.5;resize:vertical;outline:none;transition:border-color .2s}
.sd-input:focus{border-color:var(--sal)}
.sd-actions{display:flex;align-items:center;gap:16px}
.sd-btn{background:var(--sal);color:#000;border:none;padding:10px 20px;border-radius:6px;font-family:'JetBrains Mono',monospace;font-size:11px;font-weight:600;letter-spacing:.05em;cursor:pointer;outline:none;transition:background .2s}
.sd-btn:hover{background:#6ee7ff}
.sd-btn:disabled{background:#ccc;cursor:not-allowed}
.sd-hint{font-size:11px;color:var(--muted)}
#sd-output{margin-top:20px}

.sd-section{margin-bottom:24px;padding:20px;border:1px solid var(--bdr);border-radius:6px;background:var(--card);position:relative;overflow:hidden}
.sd-section.show{animation:sdFadeIn .5s ease-out}
@keyframes sdFadeIn{from{opacity:0;transform:translateY(10px)}to{opacity:1;transform:translateY(0)}}
.sd-hero{display:flex;align-items:flex-start;gap:16px}
.sd-hero-ico{font-size:24px}
.sd-hero-text{flex:1}
.sd-hero-label{font-family:'JetBrains Mono',monospace;font-size:9px;letter-spacing:.1em;text-transform:uppercase;color:var(--sal);margin-bottom:4px}
.sd-hero-team{font-size:16px;font-weight:700;color:var(--ink);margin-bottom:8px}
.sd-hero-pills{display:flex;gap:6px;flex-wrap:wrap}
.sd-pill{background:var(--bg2);border:1px solid var(--bdr);padding:3px 8px;font-family:'JetBrains Mono',monospace;font-size:8px;font-weight:500;letter-spacing:.1em;text-transform:uppercase;border-radius:3px}
.sd-map{display:grid;grid-template-columns:repeat(auto-fit,minmax(120px,1fr));gap:8px;margin-top:16px}
.sd-mnode{display:flex;flex-direction:column;align-items:center;gap:6px;padding:12px;border:1px solid var(--bdr);border-radius:6px;background:var(--card);transition:all .3s}
.sd-mnode.active{border-color:var(--sal);background:var(--sdim)}
.sd-mnode-ico{font-size:18px}
.sd-mnode-name{font-family:'JetBrains Mono',monospace;font-size:9px;letter-spacing:.05em;text-transform:uppercase;color:var(--muted);text-align:center}
.sd-flow{margin-top:16px}
.sd-step{font-size:13px;color:var(--muted);line-height:1.6;margin-bottom:8px;padding-left:12px;border-left:2px solid var(--bdr)}
.sd-step strong{color:var(--ink)}
.sd-trace{margin-top:16px;padding:16px;border:1px solid var(--bdr);border-radius:6px;background:var(--bg2)}
.sd-trace-step{display:flex;align-items:center;gap:8px;font-size:12px;color:var(--muted);margin-bottom:6px}
.sd-dot-live{width:6px;height:6px;border-radius:50%;background:var(--sal);animation:sdPulse 1.5s ease-in-out infinite}
@keyframes sdPulse{0%,100%{opacity:1}50%{opacity:.4}}
.sd-processing{display:flex;flex-direction:column;align-items:center;gap:12px;padding:20px;text-align:center}
.sd-dot{display:inline-block;width:6px;height:6px;border-radius:50%;background:var(--sal);margin:0 2px;animation:sdBounce 1.4s ease-in-out infinite both}
.sd-dot:nth-child(1){animation-delay:-.32s}
.sd-dot:nth-child(2){animation-delay:-.16s}
.sd-stream{font-size:12px;color:var(--sal);font-weight:500}
.sd-rationale{margin-top:16px;padding:16px;border-left:3px solid var(--sal);background:var(--bg2)}
.sd-action{margin-top:16px;padding:12px;border:1px solid var(--sbdr);border-radius:4px;background:var(--sdim)}
.sd-action strong{color:var(--sal)}

.pm-decisions{display:grid;grid-template-columns:repeat(auto-fit,minmax(300px,1fr));gap:24px;margin:40px 0}
.pm-dec{background:var(--card);border:1px solid var(--bdr);padding:28px;display:flex;flex-direction:column;gap:16px;position:relative;overflow:hidden}
.pm-dec__num{font-family:'JetBrains Mono',monospace;font-size:10px;letter-spacing:.1em;text-transform:uppercase;color:var(--sal);font-weight:600}
.pm-dec__title{font-size:16px;font-weight:700;color:var(--ink);letter-spacing:-.3px}
.pm-dec__body{font-size:14px;color:var(--muted);line-height:1.7}

.res-bar{display:grid;grid-template-columns:repeat(auto-fit,minmax(200px,1fr));gap:3px;border-top:1px solid var(--bdr);padding-top:24px;margin-top:32px}

</style>
</head>
<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MWJP7JLC"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<div id="cur"></div><div id="cur-r"></div>

<!-- NAV -->
<nav id="nav">
  <a class="logo" href="#" onclick="show('home');return false">Manu Becerra<span class="dot">_</span></a>
  <div class="nav-r">
    <button class="nav-toggle" id="nav-toggle" aria-label="Toggle navigation" aria-expanded="false">
      <span></span><span></span>
    </button>
    <ul class="nav-links">
      <li><a href="#" onclick="show('home');jmp('about');return false">About</a></li>
      <li><a href="#" onclick="show('home');jmp('work');return false">Work</a></li>
      <li><a href="#" onclick="show('home');jmp('contact');return false">Contact</a></li>
      <li><a href="http://hi.manubecerra.com/wp-content/uploads/2026/04/CV-Manuel-Becerra-Perez-2.pdf" target="_blank" rel="noopener noreferrer" class="nav-cv">CV</a></li>
    </ul>
    <button class="th-btn" id="thbtn" aria-label="Toggle theme">
      <span class="th-icon" id="thicon">☀️</span>
      <span class="th-lbl" id="thlbl">LIGHT</span>
    </button>
  </div>
</nav>

<!-- ═════════════ HOME ════════════════ -->
<div class="page active" id="pg-home">

  <section class="hero">
    <div class="hero-glow"></div>
    <div class="hero-grid"></div>

    <div class="hero-left">
      <div class="tag"><span class="blink"></span>Open to PM / PO Roles · Berlin</div>
      <div class="h1">
        <span>Making </span><span class="g">complex AI</span><br>
        <span class="ghost">feel</span><br>
        <span>simple to use</span>
      </div>
      <p class="hero-sub">
        <strong>Product Manager and Product Owner</strong> with 5+ years building enterprise AI tools. My background is in UX, which means I think about how systems feel to use, not just how they work. I turn powerful platforms into products people actually adopt.
      </p>
      <div class="btns">
        <a href="#" class="btn-p" onclick="jmp('work');return false">View case studies</a>
        <a href="http://hi.manubecerra.com/wp-content/uploads/2026/04/CV-Manuel-Becerra-Perez-2.pdf" target="_blank" rel="noopener noreferrer" class="btn-s">Download CV</a>
      </div>
      <div class="hero-social">
        <a href="https://www.linkedin.com/in/manubecerra" target="_blank" rel="noopener noreferrer" class="hs-link">
          <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433a2.062 2.062 0 01-2.063-2.065 2.064 2.064 0 112.063 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
          LinkedIn
        </a>
        
      </div>
    </div>

    <div class="hero-right">
      <div class="pcard">
        <div class="pcard-in">
          <img class="pcard-img" src="https://hi.manubecerra.com/wp-content/uploads/2022/11/Manu_Becerra.png" alt="Manuel Becerra">
        </div>
        <div class="chip c1"><div class="cn">+15%</div><div class="cl">CSAT Lift</div></div>
        <div class="chip c2"><div class="cn">85%</div><div class="cl">Latency Drop</div></div>
        <div class="chip c3"><div class="cn">+60%</div><div class="cl">Repeat Business</div></div>
      </div>
    </div>
  </section>

  <div class="ticker">
    <div class="tk" id="tk">
      <span class="tki">Product Management<span class="s">·</span></span><span class="tki">Scrum / Agile<span class="s">·</span></span><span class="tki">UX Strategy<span class="s">·</span></span><span class="tki">User Research<span class="s">·</span></span><span class="tki">Data-Driven Decisions<span class="s">·</span></span><span class="tki">Roadmap Planning<span class="s">·</span></span><span class="tki">Cross-Functional Leadership<span class="s">·</span></span><span class="tki">AI Product<span class="s">·</span></span><span class="tki">OKRs / KPIs<span class="s">·</span></span><span class="tki">A/B Testing<span class="s">·</span></span>
      <span class="tki">Product Management<span class="s">·</span></span><span class="tki">Scrum / Agile<span class="s">·</span></span><span class="tki">UX Strategy<span class="s">·</span></span><span class="tki">User Research<span class="s">·</span></span><span class="tki">Data-Driven Decisions<span class="s">·</span></span><span class="tki">Roadmap Planning<span class="s">·</span></span><span class="tki">Cross-Functional Leadership<span class="s">·</span></span><span class="tki">AI Product<span class="s">·</span></span><span class="tki">OKRs / KPIs<span class="s">·</span></span><span class="tki">A/B Testing<span class="s">·</span></span>
    </div>
  </div>

  <div class="stats fade">
    <div class="st"><div class="n">5<span class="a">+</span></div><div class="l">Years in product</div></div>
    <div class="st"><div class="n">2</div><div class="l">Enterprise AI products</div></div>
    <div class="st"><div class="n">85<span class="a">%</span></div><div class="l">Latency eliminated</div></div>
    <div class="st"><div class="n">3</div><div class="l">Languages spoken</div></div>
  </div>

  <section class="sec fade" id="about">
    <div class="ag">
      <div class="abt">
        <div class="lbl">About</div>
        <div class="stitle">Berlin-based PM.<br>UX background.</div>
        <p>I'm Manuel, a <strong>Product Manager and Product Owner</strong> based in Berlin. I started in advertising and photography, moved into UX, and then into product. I enjoy the hard problems: products with real technical depth that still need to feel obvious to the people using them.</p>
        <p>At <strong>Lengoo</strong>, a Berlin AI startup (USD 34M raised), I owned the product that helped enterprise teams configure, train, and improve custom translation models. When Lengoo closed in 2024, I kept working at Cognigy, the Conversational AI company, turning support and customer insights into clear product priorities.</p>
        <p>My edge is simple: I understand what AI systems are doing under the hood, and I understand why users stop trusting them. I work in that gap. I am currently <strong>open to PM and PO roles</strong> at product led companies where AI is a real product challenge, not a buzzword.</p>
      </div>
      <div class="pillars">
        <div class="pil"><div class="ico">🤖</div><h4>AI product thinking</h4><p>Four plus years building enterprise AI platforms, from custom model tooling to conversational AI. I know the gap between "technically works" and "actually adopted."</p></div>
        <div class="pil"><div class="ico">🔍</div><h4>Discovery that drives delivery</h4><p>I start with the problem, not a feature list. I use interviews, ticket patterns, and usage data before anything hits the roadmap.</p></div>
        <div class="pil"><div class="ico">🎨</div><h4>UX as a product lever</h4><p>Design is how complexity becomes usable. I use UX to make decisions clearer, workflows faster, and products easier to learn.</p></div>
        <div class="pil"><div class="ico">📐</div><h4>Metrics with a point</h4><p>CSAT, latency, adoption, retention. I define the outcome first, then build what moves it.</p></div>
      </div>
    </div>
  </section>

  <section class="sec fade" id="work">
    <div class="lbl">Selected Work</div>
    <div class="stitle">Case studies.</div>
    <div class="pg">

      <!-- HALOS unified card -->
      <article class="pc pc-card pc-halos" onclick="show('halos')">
        <div class="pc-media">
          <img src="https://hi.manubecerra.com/wp-content/uploads/2025/10/HALOS-Console-manuweb1-1.png" alt="HALOS Console">
        </div>
        <div class="pc-body">
          <span class="ptag">Enterprise AI · B2B SaaS · Lengoo</span>
          <div class="pmet">+15%</div>
          <div class="ptit">HALOS: AI Model<br>Customization</div>
          <p class="pdsc">Turned a fragmented ML configuration workflow into a guided platform. Result: +15% CSAT and +20% adoption.</p>
          <div class="pc-halos-meta">
            <span class="pc-halos-pill">Discovery</span>
            <span class="pc-halos-pill">UX Strategy</span>
            <span class="pc-halos-pill">Agile Delivery</span>
          </div>
          <div class="pc-cta">Read case study</div>
        </div>
        <div class="parr">↗</div>
      </article>

      <!-- ECHO unified card -->
      <article class="pc pc-card pc-echo" onclick="show('echo')">
        <div class="pc-media">
          <img src="https://hi.manubecerra.com/wp-content/uploads/2025/10/Echo-project.png" alt="Echo">
        </div>
        <div class="pc-body">
          <span class="ptag">AI Governance · Automation · Lengoo</span>
          <div class="pmet">85%</div>
          <div class="ptit">Project Echo: MT Quality Loop</div>
          <p class="pdsc">Built a real time feedback pipeline that cut latency by 85% and automated P1 triage across four engineering teams via Jira.</p>
          <div class="pc-cta">Read case study</div>
        </div>
        <div class="parr">↗</div>
      </article>

      <!-- ANEEKAA unified card -->
      <article class="pc pc-card pc-aneekaa" onclick="show('aneekaa')">
        <div class="pc-media">
          <img src="https://hi.manubecerra.com/wp-content/uploads/2025/10/Aneekaa-manuweb.png" alt="Aneekaa Studio">
        </div>
        <div class="pc-body">
          <span class="ptag">Co-Founder · Brand & Digital · 9 years</span>
          <div class="pmet">+60%</div>
          <div class="ptit">Aneekaa: Studio and Growth</div>
          <p class="pdsc">Co built a studio trusted by Adidas, Zalando, and Blinkist. 100% on time delivery across 20+ clients and 60% repeat business.</p>
          <div class="pc-cta">Read case study</div>
        </div>
        <div class="parr">↗</div>
      </article>

      <!-- SIGNAL unified card -->
      <article class="pc pc-card pc-signal" onclick="show('signal')">
        <div class="pc-media">
          <svg viewBox="0 0 400 250" xmlns="http://www.w3.org/2000/svg" class="signal-card-svg">
            <defs>
              <linearGradient id="bgGrad" x1="0%" y1="0%" x2="100%" y2="100%">
                <stop offset="0%" style="stop-color:#ffffff;stop-opacity:0.05"/>
                <stop offset="100%" style="stop-color:#ffffff;stop-opacity:0.02"/>
              </linearGradient>
              <linearGradient id="cardGrad" x1="0%" y1="0%" x2="100%" y2="100%">
                <stop offset="0%" style="stop-color:#ffffff;stop-opacity:0.9"/>
                <stop offset="100%" style="stop-color:#ffffff;stop-opacity:0.7"/>
              </linearGradient>
              <linearGradient id="accentGrad" x1="0%" y1="0%" x2="100%" y2="100%">
                <stop offset="0%" style="stop-color:#007acc;stop-opacity:0.15"/>
                <stop offset="100%" style="stop-color:#8b5cf6;stop-opacity:0.08"/>
              </linearGradient>
              <filter id="softShadow">
                <feGaussianBlur stdDeviation="1.5" result="coloredBlur"/>
                <feMerge>
                  <feMergeNode in="coloredBlur"/>
                  <feMergeNode in="SourceGraphic"/>
                </feMerge>
              </filter>
            </defs>

            <!-- Transparent background with subtle gradient -->
            <rect width="400" height="250" fill="url(#bgGrad)" rx="8"/>

            <!-- Header -->
            <rect x="20" y="18" width="360" height="42" fill="url(#cardGrad)" rx="8" stroke="#ffffff" stroke-width="0.5" stroke-opacity="0.3" filter="url(#softShadow)"/>
            <text x="35" y="35" font-size="12" fill="#1e293b" font-weight="700">SIGNAL</text>
            <text x="35" y="48" font-size="8" fill="#64748b">Intelligent Feedback Routing</text>
            <circle cx="355" cy="39" r="4" fill="#10b981"/>
            <text x="365" y="43" font-size="7" fill="#10b981" font-weight="600">Active</text>

            <!-- Main Content Area -->
            <rect x="20" y="75" width="165" height="150" fill="url(#cardGrad)" rx="8" stroke="#ffffff" stroke-width="0.5" stroke-opacity="0.3" filter="url(#softShadow)"/>
            <text x="30" y="95" font-size="9" fill="#374151" font-weight="600">Live Tickets</text>

            <!-- Ticket Items -->
            <g opacity="0.95">
              <!-- Ticket 1 -->
              <rect x="30" y="105" width="145" height="22" fill="#fef2f2" rx="4" stroke="#fecaca" stroke-width="0.5"/>
              <circle cx="42" cy="116" r="3" fill="#ef4444"/>
              <text x="52" y="113" font-size="6.5" fill="#dc2626" font-weight="500">Crash on save</text>
              <text x="52" y="121" font-size="5.5" fill="#7f1d1d">→ Engineering</text>
              <text x="165" y="121" font-size="5.5" fill="#059669" text-anchor="end">2m</text>

              <!-- Ticket 2 -->
              <rect x="30" y="132" width="145" height="22" fill="#fefce8" rx="4" stroke="#fde047" stroke-width="0.5"/>
              <circle cx="42" cy="143" r="3" fill="#f59e0b"/>
              <text x="52" y="140" font-size="6.5" fill="#d97706" font-weight="500">CSV export needed</text>
              <text x="52" y="148" font-size="5.5" fill="#92400e">→ Product</text>
              <text x="165" y="148" font-size="5.5" fill="#059669" text-anchor="end">15m</text>

              <!-- Ticket 3 -->
              <rect x="30" y="159" width="145" height="22" fill="#f0fdf4" rx="4" stroke="#bbf7d0" stroke-width="0.5"/>
              <circle cx="42" cy="170" r="3" fill="#10b981"/>
              <text x="52" y="167" font-size="6.5" fill="#059669" font-weight="500">Setup question</text>
              <text x="52" y="175" font-size="5.5" fill="#14532d">→ Support</text>
              <text x="165" y="175" font-size="5.5" fill="#059669" text-anchor="end">1h</text>
            </g>

            <!-- Metrics Panel -->
            <rect x="195" y="75" width="185" height="70" fill="url(#cardGrad)" rx="8" stroke="#ffffff" stroke-width="0.5" stroke-opacity="0.3" filter="url(#softShadow)"/>
            <text x="205" y="95" font-size="9" fill="#374151" font-weight="600">Impact</text>

            <!-- Metrics -->
            <text x="205" y="120" font-size="16" fill="#1e293b" font-weight="700">70%</text>
            <text x="205" y="130" font-size="7" fill="#64748b">fewer misroutes</text>

            <text x="275" y="120" font-size="16" fill="#1e293b" font-weight="700">&lt;24h</text>
            <text x="275" y="130" font-size="7" fill="#64748b">resolution time</text>

            <text x="345" y="120" font-size="16" fill="#1e293b" font-weight="700">4</text>
            <text x="345" y="130" font-size="7" fill="#64748b">teams aligned</text>

            <!-- Flow Visualization -->
            <rect x="195" y="155" width="185" height="60" fill="url(#accentGrad)" rx="8" stroke="#ffffff" stroke-width="0.5" stroke-opacity="0.2" filter="url(#softShadow)"/>
            <text x="205" y="175" font-size="9" fill="#374151" font-weight="600">Smart Routing</text>

            <!-- Flow Elements -->
            <g opacity="0.85">
              <!-- Input -->
              <circle cx="225" cy="200" r="8" fill="#ffffff" stroke="#007acc" stroke-width="1.5"/>
              <text x="225" y="205" text-anchor="middle" font-size="8" fill="#1e293b">📨</text>

              <!-- AI Processing -->
              <circle cx="265" cy="200" r="8" fill="#ffffff" stroke="#8b5cf6" stroke-width="1.5"/>
              <text x="265" y="205" text-anchor="middle" font-size="8" fill="#1e293b">🤖</text>

              <!-- Teams -->
              <circle cx="305" cy="190" r="6" fill="#ffffff" stroke="#f59e0b" stroke-width="1"/>
              <text x="305" y="194" text-anchor="middle" font-size="6" fill="#1e293b">⚙️</text>

              <circle cx="305" cy="210" r="6" fill="#ffffff" stroke="#60a5fa" stroke-width="1"/>
              <text x="305" y="214" text-anchor="middle" font-size="6" fill="#1e293b">📋</text>

              <circle cx="345" cy="200" r="6" fill="#ffffff" stroke="#c084fc" stroke-width="1"/>
              <text x="345" y="204" text-anchor="middle" font-size="6" fill="#1e293b">💬</text>

              <!-- Flow lines -->
              <path d="M233 200 L257 200" stroke="#007acc" stroke-width="1.5" opacity="0.6"/>
              <path d="M273 200 L297 190" stroke="#8b5cf6" stroke-width="1.5" opacity="0.6"/>
              <path d="M273 200 L297 210" stroke="#8b5cf6" stroke-width="1.5" opacity="0.6"/>
              <path d="M311 190 L337 200" stroke="#007acc" stroke-width="1.5" opacity="0.6"/>
              <path d="M311 210 L337 200" stroke="#007acc" stroke-width="1.5" opacity="0.6"/>
            </g>

            <!-- Subtle accent elements -->
            <circle cx="45" cy="35" r="12" fill="url(#accentGrad)" opacity="0.4"/>
            <circle cx="355" cy="215" r="10" fill="url(#accentGrad)" opacity="0.3"/>
          </svg>
        </div>
        <div class="pc-body">
          <span class="ptag" style="border-color:var(--sbdr);color:var(--sal);background:var(--sdim)">PM Tooling · AI Initiative · Enterprise SaaS</span>
          <div class="pmet" style="color:var(--sal)">70%</div>
          <div class="ptit">Signal: Feedback Routing</div>
          <p class="pdsc">AI-powered routing system that cut misrouted tickets by 70% and got urgent issues to the right team in under 24 hours.</p>
          <div class="pc-cta" style="color:var(--sal)">Read case study</div>
        </div>
        <div class="parr">↗</div>
      </article>

      <!-- BRAND fourth card -->
      <article class="pc pc-card pc-brand" onclick="show('brand')">
        <div class="pc-media">
          <img src="https://hi.manubecerra.com/wp-content/uploads/2026/04/Card_Home-scaled.png" alt="Brand and identity for HALOS Console">
        </div>
        <div class="pc-body">
          <span class="ptag" style="border-color:var(--bbdr);color:var(--bal);background:var(--bdim)">Brand Identity · Logo Design · Marketing</span>
          <div class="pmet" style="color:var(--bal)">360°</div>
          <div class="ptit">HALOS Console: Brand and Design</div>
          <p class="pdsc">Built the HALOS Console brand from zero: logo, color system, and marketing assets. Then applied it consistently across product and sales.</p>
          <div class="pc-cta" style="color:var(--bal)">View work</div>
        </div>
        <div class="parr">↗</div>
      </article>

    </div>
  </section>

  <section class="sec fade" id="stack">
    <div class="lbl">Process</div>
    <div class="stitle">How I work.</div>
    <div class="how-grid">
      <div class="how-col">
        <div class="how-label">01 Discovery</div>
        <ul class="how-list">
          <li>User Research</li>
          <li>Customer Insights</li>
          <li>Problem Framing</li>
          <li>Stakeholder Alignment</li>
        </ul>
      </div>
      <div class="how-col">
        <div class="how-label">02 Delivery</div>
        <ul class="how-list">
          <li>Backlog Prioritization</li>
          <li>Roadmap Planning</li>
          <li>Sprint Execution</li>
          <li>Cross-functional Collaboration</li>
        </ul>
      </div>
      <div class="how-col">
        <div class="how-label">03 Optimization</div>
        <ul class="how-list">
          <li>Product Analytics</li>
          <li>A/B Testing</li>
          <li>Customer Feedback Loops</li>
          <li>Continuous Improvement</li>
        </ul>
      </div>
      <div class="how-col">
        <div class="how-label">04 Tools</div>
        <ul class="how-list">
          <li>Jira · Confluence</li>
          <li>Figma · Miro</li>
          <li>Kibana · Grafana</li>
          <li>Postman · GitLab</li>
        </ul>
      </div>
    </div>
  </section>


  
  

  <section class="sec fade">
    <div class="lbl">Background</div>
    <div class="stitle">Credentials.</div>
    <div class="cg">
      <div class="cb">
        <h3>// Education</h3>
        <div class="ci"><div class="ct">MA, Photography</div><div class="cs">Espai d'art Fotografic de Valencia</div><div class="cy">2008 to 2010</div></div>
        <div class="ci"><div class="ct">B.A., Advertising</div><div class="cs">Universidad Jorge Tadeo Lozano</div><div class="cy">2003 to 2006</div></div>
      </div>
      <div class="cb">
        <h3>// Certifications</h3>
        <div class="ci"><div class="ct">Agile Project & Process Management</div><div class="cs">Spezialist:in für agiles Projekt- und Prozessmanagement (IFM)</div></div>
        <div class="ci"><div class="ct">PSPO I - Professional Scrum Product Owner</div><div class="cs">Scrum.org</div></div>
        <div class="ci"><div class="ct">PSM I - Professional Scrum Master</div><div class="cs">Scrum.org</div></div>
        <div class="ci"><div class="ct">Product Manager - AI Program</div><div class="cs">IU Akademie · Berlin</div><div class="cy">Mar 2026 to Jul 2026 (in progress)</div></div>
      </div>
    </div>
  </section>

  <section class="sec fade" id="contact">
    <div class="cog">
      <div class="col">
        <div class="lbl">Contact</div>
        <div class="stitle">Let's talk.</div>
        <p>I am open to PM and PO roles at <strong>product led companies in Berlin and remotely</strong>, especially in AI, B2B SaaS, or complex technical tooling. If you need someone who can own a problem end to end, I would love to talk.</p>
        <a href="mailto:contact@manubecerra.com" class="eml">contact@manubecerra.com</a>
        <div class="socs">
          <a href="https://www.linkedin.com/in/manubecerra" class="soc" target="_blank" rel="noopener noreferrer">↗ LinkedIn</a>
          
          <a href="http://hi.manubecerra.com/wp-content/uploads/2026/04/CV-Manuel-Becerra-Perez-2.pdf" class="soc" target="_blank" rel="noopener noreferrer">Download CV</a>
        </div>
      </div>
      <form class="form" onsubmit="return false">
        <div class="fr"><label>Email</label><input type="email" placeholder="you@company.com"></div>
        <div class="fr"><label>Subject</label><input type="text" placeholder="PM role at your startup"></div>
        <div class="fr"><label>Message</label><textarea placeholder="Tell me about the opportunity..."></textarea></div>
        <button class="btn-send">Send Message →</button>
      </form>
    </div>
  </section>

  <footer>
    <p>// © 2026 Manuel Becerra · Berlin</p>
    <div class="fl">
      <a href="https://www.linkedin.com/in/manubecerra" target="_blank" rel="noopener noreferrer">LinkedIn</a>
      
    </div>
  </footer>
</div>

<!-- ═════════════ HALOS (yellow) ════════ -->
<div class="page" id="pg-halos">
  <div class="ph">
    <div class="ph-body fade">
      <span class="back" onclick="show('home')">← Back to Work</span>
      <div class="ph-tags">
        <span class="ph-tag hi">Product Manager / Product Owner</span>
        <span class="ph-tag">Enterprise AI · B2B SaaS</span>
        <span class="ph-tag">Lengoo · Berlin</span>
      </div>
      <div class="ph-ttl">The AI Model Customization Initiative</div>
      <p class="ph-sub">I owned the AI Model Customization initiative, a core part of Lengoo's HALOS Console. The goal was simple: replace a fragile, manual workflow with a product teams could rely on.</p>
    </div>
    <div class="mbar fade">
      <div class="mi"><div class="mn">+15%</div><div class="ml">CSAT lift</div></div>
      <div class="mi"><div class="mn">+20%</div><div class="ml">Feature adoption</div></div>
      <div class="mi"><div class="mn">+20%</div><div class="ml">User efficiency</div></div>
      <div class="mi"><div class="mn">+30%</div><div class="ml">Product engagement</div></div>
    </div>
  </div>
  <div class="art">

    <h2>The challenge</h2>
    <p>HALOS Console had the technical foundation. But the core workflow — how teams configured and customized their ML models — was held together with scripts, tribal knowledge, and a lot of Slack messages to Engineering. There was no clear interface, no visible model state, and no way for non-technical users to act without help.</p>
    <p>The result was a constant support load on Engineering and a product that felt inaccessible to the people who needed it most.</p>
    <img class="cs-img" src="https://hi.manubecerra.com/wp-content/uploads/2025/09/HALOS-Console-logo-1Console.png" alt="HALOS Console">

    <h2>How I approached it</h2>
    <p>I combined interviews, usage signals, and a hard look at where the workflow broke down. Then I shaped the scope so we could ship improvements quickly without painting ourselves into a corner.</p>

    <div class="cs-pillars">
      <div class="cspil">
        <div class="cspil-n">1. Start with the friction, not the feature</div>
        <p>I ran <strong>20+ interviews</strong> with linguists, PMs, and customer success teams — not to validate a roadmap, but to understand where the workflow was actually breaking. Most of the friction was invisible in analytics. It only showed up in conversations.</p>
        <p>Those interviews shaped the scope. We did not build what was easiest. We built what removed the most pain.</p>
      </div>
      <div class="cspil">
        <div class="cspil-n">2. Map before building</div>
        <p>Before any spec was written, I mapped the end-to-end model customization workflow — from a user's first action to a deployed model. That map exposed three handoff points where context was lost and users had to go find someone in Engineering.</p>
        <p>It became the shared reference for the whole team. Designers, engineers, and CS all worked from the same picture of the problem.</p>
      </div>
      <div class="cspil">
        <div class="cspil-n">3. Ship in phases, with pre-defined KPIs</div>
        <p>We moved from monthly to <strong>bi-weekly releases</strong>. But the cadence was not the goal — the feedback loop was. Each release had defined success metrics (adoption, task completion, support volume) so we knew within two weeks whether to push forward or adjust.</p>
        <p>That discipline is how we hit +15% CSAT without a big-bang launch.</p>
      </div>
    </div>

    <img class="cs-img" src="https://hi.manubecerra.com/wp-content/uploads/2025/09/v2_Diagrama-de-flujos-en-FigJam-Community-scaled.png" alt="Workflow blueprint">

    <h2>What we shipped</h2>
    <p>We turned a set of scripts and tribal knowledge into a clear product experience. The goal was not "more features". It was fewer mistakes, faster iteration, and a workflow that felt safe to use.</p>

    <div class="cs-features">
      <div class="cs-feat">
        <div class="cs-feat-ttl">LLM Interface</div>
        <p>A single view where users could see the state of every model — no more pinging Engineering to ask what was running. Status was visible, actions were clear, and edge cases were handled in the UI instead of falling through to a support ticket.</p>
        <ul>
          <li>Tabular model management with real-time status</li>
          <li>Inline status indicators for active, pending, and error states</li>
          <li>Edge case handling built into the interface</li>
          <li>Responsive across screen sizes</li>
        </ul>
      </div>
      <div class="cs-feat">
        <div class="cs-feat-ttl">Machine Translation Interface</div>
        <p>Users needed control over when models ran and what they cost. The On-demand vs Always ON toggle was a small decision with real cost implications. We made it obvious, with immediate feedback so users understood what they were switching before they switched it.</p>
        <ul>
          <li>On-demand vs Always ON toggle with cost context</li>
          <li>Performance tuning controls with visible trade-offs</li>
          <li>Clear visual feedback on state changes</li>
          <li>Accessible data presentation for non-technical users</li>
        </ul>
      </div>
      <div class="cs-feat">
        <div class="cs-feat-ttl">Performance Dashboard</div>
        <p>Before this, performance data lived in Kibana — accessible to engineers, invisible to everyone else. The dashboard brought the key metrics into the product so PMs, CS, and linguists could see what was happening without filing a request.</p>
        <ul>
          <li>Real-time performance metrics in-product</li>
          <li>Visual trend representation for non-technical readers</li>
          <li>Actionable insights surfaced directly in the workflow</li>
        </ul>
      </div>
    </div>

    <video class="cs-img" src="https://hi.manubecerra.com/wp-content/uploads/2025/09/HALOS-Console-Upload-File_1-online-video-cutter.com_.mp4" autoplay muted loop playsinline></video>

    <h2>Results</h2>
    <p>The most telling signal: teams stopped filing tickets asking Engineering how to use their own platform. The workflow was now something people could navigate on their own.</p>

    <div class="mbar" style="margin:32px 0">
      <div class="mi"><div class="mn">15%</div><div class="ml">CSAT improved after the workflow redesign</div></div>
      <div class="mi"><div class="mn">20%</div><div class="ml">Adoption increased once the flow became predictable</div></div>
      <div class="mi"><div class="mn">20%</div><div class="ml">Users completed key tasks faster with fewer retries</div></div>
      <div class="mi"><div class="mn">30%</div><div class="ml">Engagement rose after we improved clarity and release cadence</div></div>
    </div>

  </div>
  <div class="case-nav">
    <div class="cnl" onclick="show('echo')">
      <div class="cnlbl">// next project</div>
      <div class="cnttl">Echo: MT Quality Intelligence →</div>
    </div>
    <a href="#" class="btn-case" style="color:#000" onclick="show('home');jmp('work');return false">All Projects</a>
  </div>
  <footer><p>// © 2026 Manuel Becerra · Berlin</p><div class="fl"><a href="https://www.linkedin.com/in/manubecerra" target="_blank" rel="noopener noreferrer">LinkedIn</a></div></footer>
</div>

<!-- ═════════════ ECHO (cyan) ═══════════ -->
<div class="page" id="pg-echo">
  <div class="ph">
    <div class="ph-body fade">
      <span class="back" onclick="show('home')">← Back to Work</span>
      <div class="ph-tags">
        <span class="ph-tag hi">Product Manager / Product Owner</span>
        <span class="ph-tag">AI Governance · Internal Tool</span>
        <span class="ph-tag">Lengoo · Berlin</span>
      </div>
      <div class="ph-ttl">Project ECHO: MT Quality Intelligence</div>
      <p class="ph-sub">Project ECHO fixed a painful truth: feedback reached engineers days too late. I connected structured linguist feedback to the backlog so issues showed up fast, clearly, and in the right order.</p>
    </div>
    <div class="mbar fade">
      <div class="mi"><div class="mn">85%</div><div class="ml">Latency reduction</div></div>
      <div class="mi"><div class="mn">Real-time</div><div class="ml">Error visibility via Kibana</div></div>
      <div class="mi"><div class="mn">4 teams</div><div class="ml">Coordinated across org</div></div>
      <div class="mi"><div class="mn">P1</div><div class="ml">Automated Jira triage</div></div>
    </div>
    <!-- Removed ph-cover element for Echo project as requested -->
  </div>
  <div class="art">

    <h2>Why</h2>

    <div class="cs-pillars">
      <div class="cspil">
        <div class="cspil-n">What was broken</div>
        <p>We had systemic latency in the MT feedback loop across four teams: Linguistics, Front End, Data Engineering, and ML. The manual process added <strong>days of delay</strong> between a linguist spotting an issue and an engineer acting on it. That delay directly hurt quality and iteration speed.</p>
      </div>
      <div class="cspil">
        <div class="cspil-n">Why it compounded</div>
        <p>The friction was pushing expert linguists out of the loop, which meant the models lost high-quality training signal. Once linguists stopped flagging issues, the data degraded silently. The mandate was clear: <strong>remove the latency</strong>, automate triage, and keep the feedback loop alive.</p>
      </div>
    </div>

    <h2>What</h2>
    <p><strong>Vision:</strong> Turn the feedback to fix cycle from a bottleneck into an advantage. Near zero latency iteration and an always on quality signal.</p>
    <p><strong>Three concrete deliverables:</strong></p>
    <ul>
      <li>Enforce <strong>structured data governance</strong> on all linguist inputs with a standard error taxonomy (type and severity)</li>
      <li>Achieve <strong>100% real-time visibility</strong> on error trends via Kibana dashboards</li>
      <li>Automate <strong>P1 Jira ticket creation</strong> based on objective severity thresholds so the backlog reflects the highest impact issues</li>
    </ul>

    <h2>How</h2>

    <div class="cs-pillars">
      <div class="cspil">
        <div class="cspil-n">1. Data Governance First</div>
        <p>I worked with Data Science to define a structured error taxonomy. We used Kibana and Datadog to identify the <strong>top 5 error classes driving 80% of rework</strong>. Those became the initial schema.</p>
        <p>Result: objective, unambiguous Definition of Done. No more backlog refinement debates about severity.</p>
      </div>
      <div class="cspil">
        <div class="cspil-n">2. Unblock All Teams in Sprint 1</div>
        <p>I prioritized the <strong>data contract</strong> (JSON schema plus API endpoints) as the first sprint deliverable. That unlocked parallel work across all four teams and removed a major dependency risk.</p>
      </div>
      <div class="cspil">
        <div class="cspil-n">3. Technical Spec Ownership</div>
        <p>I wrote the technical spec for the ingestion layer and the Jira integration as a single source of truth. That clarity reduced back and forth and made sprint planning faster.</p>
      </div>
    </div>

    <figure class="cs-figure">
      <img class="cs-img" src="https://hi.manubecerra.com/wp-content/uploads/2025/10/Frame-10000076689-scaled.png" alt="Echo automated triage dashboard">
      <figcaption class="cs-caption">Kibana dashboard showing real time MT error trends. P1 issues automatically surface in Jira without manual triage.</figcaption>
    </figure>

    <h2>Results</h2>
    <p>When you remove friction from a feedback process, people use it. Linguist participation went back up, error trends became visible in real time, and Engineering stopped triaging tickets manually.</p>
    <div class="mbar" style="margin:32px 0">
      <div class="mi"><div class="mn">85%</div><div class="ml">End-to-end latency reduction</div></div>
      <div class="mi"><div class="mn">100%</div><div class="ml">Real-time error trend visibility</div></div>
      <div class="mi"><div class="mn">P1</div><div class="ml">Automated backlog triage</div></div>
    </div>

  </div>
  <div class="case-nav">
    <div class="cnl" onclick="show('aneekaa')">
      <div class="cnlbl">// next project</div>
      <div class="cnttl">Aneekaa Studio →</div>
    </div>
    <a href="#" class="btn-case" style="color:#fff" onclick="show('home');jmp('work');return false">All Projects</a>
  </div>
  <footer><p>// © 2026 Manuel Becerra · Berlin</p><div class="fl"><a href="https://www.linkedin.com/in/manubecerra" target="_blank" rel="noopener noreferrer">LinkedIn</a></div></footer>
</div>

<!-- ═════════════ ANEEKAA (amber) ══════ -->
<div class="page" id="pg-aneekaa">
  <div class="ph">
    <div class="ph-body fade">
      <span class="back" onclick="show('home')">← Back to Work</span>
      <div class="ph-tags">
        <span class="ph-tag hi">Co-Founder & Project Manager</span>
        <span class="ph-tag">Brand & Digital · 9 years</span>
        <span class="ph-tag">Spain / Germany</span>
      </div>
      <div class="ph-ttl">Aneekaa Studio</div>
      <p class="ph-sub">How I co built a creative studio trusted by Adidas, Zalando, and Blinkist. Every project delivered on time, 60% repeat business, and nine years of learning what it takes to build from zero.</p>
    </div>
    <div class="mbar fade">
      <div class="mi"><div class="mn">+60%</div><div class="ml">Repeat business rate</div></div>
      <div class="mi"><div class="mn">+20%</div><div class="ml">Conversion lift</div></div>
      <div class="mi"><div class="mn">100%</div><div class="ml">On-time delivery</div></div>
      <div class="mi"><div class="mn">20+</div><div class="ml">Clients delivered</div></div>
    </div>
    <div class="ph-cover fade">
      <img src="https://hi.manubecerra.com/wp-content/uploads/2025/10/Aneekaa-manuweb.png" alt="Aneekaa Studio">
    </div>
  </div>
  <div class="art">
    <h2>The Context</h2>
    <p>Aneekaa Studio was the agency I co founded in 2015 and ran for nearly a decade. We delivered brand strategy, digital design, and web development for clients across Spain and Germany. We worked with <strong>Adidas, Zalando, Blinkist, and Fotografiska</strong>, and built a reputation for being clear, reliable, and precise.</p>
    <p>Running Aneekaa was not only creative work. It was full ownership. I set objectives, scoped work, estimated effort, coordinated a small core team plus freelancers, and managed client relationships from kickoff to sign off.</p>
    <div class="aq"><p>"Building from zero taught me that strategy without execution is theory, and execution without strategy is noise. You need both at the same time."</p></div>

    <h2>What I Did</h2>
    <ul>
      <li><strong>Full cycle ownership:</strong> From brief and scope through delivery and sign off. I owned the full lifecycle on every engagement</li>
      <li><strong>Cross-functional coordination:</strong> Managed designers, developers, and videographers across Spain and Germany, aligning priorities and clearing blockers to maintain delivery schedules</li>
      <li><strong>Client relationships:</strong> Clear communication and accurate estimates that led to 60% repeat business and steady referrals</li>
      <li><strong>Rapid UX iteration:</strong> For Fruchtstück3000's site launch, rapid UX iterations drove a 35% traffic surge in the first month and a 20% lift in reservation conversions</li>
    </ul>
    <img class="cs-img" src="https://hi.manubecerra.com/wp-content/uploads/2025/10/Aneekaa-manuweb.png" alt="Aneekaa Studio">

    <h2>Key Highlights</h2>
    <ul>
      <li><strong>Adidas, Zalando, Blinkist, Fotografiska:</strong> Brand and web projects scoped, coordinated, and shipped without missing deadlines</li>
      <li><strong>Blinkist cultural onboarding video:</strong> Produced a cultural onboarding video that received 90% positive feedback from new hires and strengthened employer branding</li>
      <li><strong>Fruchtstück3000 launch:</strong> UX-led redesign drove +35% traffic and +20% reservations in the first month</li>
      <li><strong>100% on-time, on-budget delivery</strong> across 20+ client projects over 9 years</li>
    </ul>

    <h2>What It Taught Me</h2>
    <p>Running a studio for nine years gave me something most PMs do not have: I have felt the full weight of delivery. I know what it means when a deadline slips, scope creeps, or a client loses confidence. That experience shapes how I work today. I treat product decisions with founder level seriousness because I have been one.</p>
  </div>
  <div class="case-nav">
    <div class="cnl" onclick="show('halos')">
      <div class="cnlbl">// back to first</div>
      <div class="cnttl">HALOS Console →</div>
    </div>
    <a href="#" class="btn-case" onclick="show('home');jmp('work');return false">All Projects</a>
  </div>
  <footer><p>// © 2026 Manuel Becerra · Berlin</p><div class="fl"><a href="https://www.linkedin.com/in/manubecerra" target="_blank" rel="noopener noreferrer">LinkedIn</a></div></footer>
</div>


<!-- ═════════════ SIGNAL (electric blue) ══════ -->
<div class="page" id="pg-signal">
  <div class="ph">
    <div class="ph-glow"></div>
    <div class="ph-grid"></div>
    <div class="ph-body fade">
      <button class="ph-back" onclick="show('home')">← Back to Work</button>

      <!-- FIX 1: role tag → PM, not Support -->
      <div class="ph-tags">
        <span class="ph-tag hi">Product Manager / Product Owner</span>
        <span class="ph-tag">PM Tooling · AI Initiative</span>
        <span class="ph-tag">Enterprise SaaS · Berlin · 2024</span>
      </div>

      <div class="ph-ttl">Signal:<br><span class="accent">Feedback</span><br>Routing</div>

      <!-- FIX 2: hero sub leads with the pain, not the system -->
      <p class="ph-sub">P1s were sitting in the queue for 72 hours. The same feature request arrived five different ways and never hit the roadmap. I mapped where the signal was dying and built the routing layer to stop it. <strong>Misroutes dropped 70%. Urgent issues now land in under a day.</strong></p>

      <div class="ph-word">SIGNAL</div>
    </div>
    <div class="mbar fade">
      <div class="mi"><div class="mn">70%</div><div class="ml">Fewer misrouted tickets</div></div>
      <div class="mi"><div class="mn">&lt;24h</div><div class="ml">Signal to action time</div></div>
      <div class="mi"><div class="mn">4 teams</div><div class="ml">Aligned on one taxonomy</div></div>
      <div class="mi"><div class="mn">30%</div><div class="ml">Faster resolution time</div></div>
    </div>
  </div>

  <!-- ═══ ARTICLE ═══ -->
  <div class="art">

    <!-- FIX 3: at-a-glance reframed as PM signal, not metadata -->
    <h2>At a glance</h2>
    <div class="sig-glance">
      <div class="sig-mini">
        <div class="k">// my role</div>
        <div class="v">PM, full ownership</div>
        <div class="s">From audit to live adoption. No delegation.</div>
      </div>
      <div class="sig-mini">
        <div class="k">// how I framed it</div>
        <div class="v">Process problem</div>
        <div class="s">Not a tooling gap. A shared-language gap.</div>
      </div>
      <div class="sig-mini">
        <div class="k">// first sprint decision</div>
        <div class="v">No UI in v1</div>
        <div class="s">Behavioral change before product build.</div>
      </div>
      <div class="sig-mini">
        <div class="k">// north star</div>
        <div class="v">&lt;24h SLA</div>
        <div class="s">Signal-to-action. Measurable from day one.</div>
      </div>
      <div class="sig-mini">
        <div class="k">// shipped in</div>
        <div class="v">2 sprints</div>
        <div class="s">Adopted by all four teams in week one.</div>
      </div>
    </div>

    <h2>Before Signal (reality)</h2>
    <p>On a contact-center platform, tickets arrived as raw text from Zendesk/Intercom, Slack, and email. Every one meant jumping into Kibana/Grafana to reproduce, then tailoring the handoff: Eng wanted logs + repro, PM needed a story, CS needed KB updates. Resolution times stretched, delays piled up, PM visibility stayed low.</p>

    <h2>The problem</h2>
    <div class="sig-grid">
      <div class="sig-card">
        <span class="sig-kicker">// channels</span>
        <h4>Signals everywhere</h4>
        <p>Zendesk, Slack, email, PM DMs. No single intake and no shared format.</p>
      </div>
      <div class="sig-card">
        <span class="sig-kicker">// ownership</span>
        <h4>Wrong teams, slow action</h4>
        <p>Engineering got UX nits, PMs got crash reports. P1s sat 72 hours before anyone saw them.</p>
      </div>
      <div class="sig-card">
        <span class="sig-kicker">// dilution</span>
        <h4>Value got lost</h4>
        <p>The same feature request arrived five different ways and never reached the roadmap because it looked different every time.</p>
      </div>
    </div>

    <div class="aq fade">
      <p>"The routing problem wasn't technical. It was structural. We didn't need a new tool; we needed a shared language for classification and a clear routing contract between teams."</p>
    </div>

    <h2>What we learned</h2>
    <ul class="sig-steps">
      <li><strong>63% misrouted.</strong> Audit of 200+ tickets showed delay was routing, not info quality.</li>
      <li><strong>Language first.</strong> The same issue showed up as a bug, a feature, or a docs request, so we set one taxonomy.</li>
      <li><strong>Small beats perfect.</strong> Four categories, three severities cut resolution time 30% before automation.</li>
    </ul>

    <!-- FIX 4: visual break with before/after SVG flow diagram -->
    <h2>Before → After</h2>
    <p>The before state: invisible chaos. Work happened but not in order, not by the right people, not fast enough. The after state: one contract, one intake point, deterministic routing.</p>

    <div class="flow-diagram fade">
      <div class="flow-svg-wrap">
        <svg viewBox="0 0 780 260" xmlns="http://www.w3.org/2000/svg" font-family="'JetBrains Mono', monospace">
          <defs>
            <marker id="arr-bad" markerWidth="8" markerHeight="6" refX="8" refY="3" orient="auto">
              <polygon points="0 0, 8 3, 0 6" fill="#c04040"/>
            </marker>
            <marker id="arr-good" markerWidth="8" markerHeight="6" refX="8" refY="3" orient="auto">
              <polygon points="0 0, 8 3, 0 6" fill="#6ee7ff"/>
            </marker>
          </defs>

          <!-- BEFORE row label -->
          <text x="12" y="40" font-size="9" fill="#f08080" letter-spacing="2" opacity=".8">BEFORE</text>

          <!-- BEFORE nodes -->
          <rect x="10" y="48" width="120" height="44" fill="rgba(200,40,40,.15)" stroke="rgba(220,60,60,.6)" stroke-width="1"/>
          <text x="70" y="68" text-anchor="middle" font-size="10" fill="#f08080">Ticket</text>
          <text x="70" y="82" text-anchor="middle" font-size="10" fill="#f08080">arrives</text>

          <line x1="130" y1="70" x2="152" y2="70" stroke="#c04040" stroke-width="1" marker-end="url(#arr-bad)"/>

          <rect x="153" y="48" width="120" height="44" fill="rgba(200,40,40,.15)" stroke="rgba(220,60,60,.6)" stroke-width="1"/>
          <text x="213" y="68" text-anchor="middle" font-size="10" fill="#f08080">Manual</text>
          <text x="213" y="82" text-anchor="middle" font-size="10" fill="#f08080">read</text>

          <line x1="273" y1="70" x2="295" y2="70" stroke="#c04040" stroke-width="1" marker-end="url(#arr-bad)"/>

          <rect x="296" y="48" width="120" height="44" fill="rgba(200,40,40,.15)" stroke="rgba(220,60,60,.6)" stroke-width="1"/>
          <text x="356" y="68" text-anchor="middle" font-size="10" fill="#f08080">Guess</text>
          <text x="356" y="82" text-anchor="middle" font-size="10" fill="#f08080">routing</text>

          <line x1="416" y1="70" x2="438" y2="70" stroke="#c04040" stroke-width="1" marker-end="url(#arr-bad)"/>

          <rect x="439" y="48" width="136" height="44" fill="rgba(200,40,40,.15)" stroke="rgba(220,60,60,.6)" stroke-width="1"/>
          <text x="507" y="65" text-anchor="middle" font-size="10" fill="#f08080">Wrong team →</text>
          <text x="507" y="79" text-anchor="middle" font-size="10" fill="#f08080">re-assign</text>

          <line x1="575" y1="70" x2="597" y2="70" stroke="#c04040" stroke-width="1" marker-end="url(#arr-bad)"/>

          <rect x="598" y="48" width="120" height="44" fill="rgba(200,40,40,.15)" stroke="rgba(220,60,60,.6)" stroke-width="1"/>
          <text x="658" y="68" text-anchor="middle" font-size="10" fill="#f08080">Slow / lost</text>
          <text x="658" y="82" text-anchor="middle" font-size="10" fill="#f08080">resolution</text>

          <!-- Divider -->
          <line x1="0" y1="130" x2="780" y2="130" stroke="#1e1e1e" stroke-width="1"/>

          <!-- AFTER row label -->
          <text x="12" y="158" font-size="9" fill="#6ee7ff" letter-spacing="2" opacity=".7">AFTER</text>

          <!-- AFTER nodes -->
          <rect x="10" y="166" width="120" height="44" fill="rgba(0,180,216,.08)" stroke="rgba(110,231,255,.3)" stroke-width="1"/>
          <text x="70" y="186" text-anchor="middle" font-size="10" fill="#aaa">Ticket</text>
          <text x="70" y="200" text-anchor="middle" font-size="10" fill="#aaa">arrives</text>

          <line x1="130" y1="188" x2="152" y2="188" stroke="#6ee7ff" stroke-width="1" stroke-opacity=".4" marker-end="url(#arr-good)"/>

          <rect x="153" y="166" width="120" height="44" fill="rgba(0,180,216,.08)" stroke="rgba(110,231,255,.3)" stroke-width="1"/>
          <text x="213" y="183" text-anchor="middle" font-size="10" fill="#aaa">Classify +</text>
          <text x="213" y="197" text-anchor="middle" font-size="10" fill="#aaa">severity</text>

          <line x1="273" y1="188" x2="295" y2="188" stroke="#6ee7ff" stroke-width="1" stroke-opacity=".4" marker-end="url(#arr-good)"/>

          <rect x="296" y="166" width="120" height="44" fill="rgba(0,180,216,.08)" stroke="rgba(110,231,255,.3)" stroke-width="1"/>
          <text x="356" y="183" text-anchor="middle" font-size="10" fill="#aaa">Auto-route</text>
          <text x="356" y="197" text-anchor="middle" font-size="10" fill="#aaa">right team</text>

          <line x1="416" y1="188" x2="438" y2="188" stroke="#6ee7ff" stroke-width="1" stroke-opacity=".4" marker-end="url(#arr-good)"/>

          <rect x="439" y="166" width="136" height="44" fill="rgba(0,180,216,.08)" stroke="rgba(110,231,255,.3)" stroke-width="1"/>
          <text x="507" y="183" text-anchor="middle" font-size="10" fill="#aaa">P1 auto-</text>
          <text x="507" y="197" text-anchor="middle" font-size="10" fill="#aaa">escalate</text>

          <line x1="575" y1="188" x2="597" y2="188" stroke="#6ee7ff" stroke-width="1" stroke-opacity=".4" marker-end="url(#arr-good)"/>

          <rect x="598" y="166" width="120" height="44" fill="rgba(0,180,216,.08)" stroke="rgba(110,231,255,.3)" stroke-width="1"/>
          <text x="658" y="183" text-anchor="middle" font-size="10" fill="#aaa">Resolve +</text>
          <text x="658" y="197" text-anchor="middle" font-size="10" fill="#aaa">validate</text>

          <!-- time labels -->
          <text x="70" y="240" text-anchor="middle" font-size="9" fill="#f08080" opacity=".7">72+ hrs</text>
          <text x="658" y="240" text-anchor="middle" font-size="9" fill="#6ee7ff" opacity=".6">&lt; 24h</text>
        </svg>
      </div>
    </div>

    <h2>The Design: Three Layers</h2>
    <div class="cs-pillars">
      <div class="cspil">
        <div class="cspil-n">Layer 1: Governance and Taxonomy</div>
        <p>Four categories, three severities, one owner per combo. Published as the Signal Contract and signed by Eng, PM, CS, and Design.</p>
      </div>
      <div class="cspil">
        <div class="cspil-n">Layer 2: Model-backed classification</div>
        <p>Small in-house classifier checks the ticket, suggests taxonomy + severity, and adds a one-line rationale so the receiving team acts without clarifying.</p>
      </div>
      <div class="cspil">
        <div class="cspil-n">Layer 3: Distribution via Slack and Jira</div>
        <p>Slack handoffs with rationale + confidence; P1s open Jira automatically. Everything is logged so humans can override quickly.</p>
      </div>
    </div>

    <h2>Flow with escalation</h2>
    <ol class="sig-steps">
      <li><strong>Intake.</strong> Signal classifies intent/severity and auto-requests missing repro/version/logs from the client.</li>
      <li><strong>Routing.</strong> Bug → Eng (logs + repro + GitLab issue). Feature/pattern → PM (story + frequency score). Docs/how-to → CS (KB + self-serve). Missing info → back to client.</li>
      <li><strong>Escalation.</strong> P1 triggers lead + PM, SLA clock, client updates every 2h; 48h with no fix escalates again.</li>
      <li><strong>Validation.</strong> CS confirms fix, repeat-ticket trend in Kibana, PM checks if the pattern died.</li>
    </ol>

    <!-- FIX 5: demo with context sentence -->
    <h2>Live routing demo</h2>
    <div class="signal-demo fade">
      <div class="sd-header">
        <span class="sd-lbl">Signal · Live Routing Demo</span>
        <span class="sd-badge">Model-assisted</span>
      </div>
      <div class="sd-body">
        <!-- FIX 5: context line above chips -->
        <div class="sd-context">
          These are <strong>real ticket types from the support queue.</strong> Pick one to see how Signal classifies and routes it, or write your own. The classifier runs the same logic used in production.
        </div>
        <div class="sd-chips">
          <span class="sd-chip" onclick="sdFill(0)">🐛 Bug report</span>
          <span class="sd-chip" onclick="sdFill(1)">🐢 Performance issue</span>
          <span class="sd-chip" onclick="sdFill(2)">💡 Feature request</span>
          <span class="sd-chip" onclick="sdFill(3)">❓ UX / Docs gap</span>
          <span class="sd-chip" onclick="sdFill(4)">🎨 Design feedback</span>
        </div>
        <textarea class="sd-input" id="sd-ticket" placeholder="Enter a support ticket, customer comment, or escalation here..."></textarea>
        <div class="sd-actions">
          <button class="sd-btn" id="sd-btn" onclick="runSignal()">Classify &amp; Route →</button>
          <span class="sd-hint">Try different types to see the routing logic in action.</span>
        </div>
        <div id="sd-output"></div>
      </div>
    </div>

    <h2>The Decision: Process Over Product</h2>
    <p>We skipped a new UI. Instead: Slack workflow + tiny classifier + Notion contract running on signals. Built over two sprints, adopted in sprint three, now feeds the backlog every week.</p>

    <div class="cs-features">
      <div class="cs-feat">
        <div class="cs-feat-ttl">Why this trade-off was right</div>
        <p>The core value of Signal is behavioral change: getting four teams to use a shared language and trust a shared routing decision. That is a change management problem first, a tooling problem second. A polished internal product would not have solved the adoption challenge any faster.</p>
        <ul>
          <li>Adopted by all four teams in the first week, zero training required</li>
          <li>Engineering backlog quality improved in the next sprint cycle</li>
          <li>Support started seeing clear feedback handoffs instead of dropped tickets</li>
        </ul>
      </div>
      <div class="cs-feat">
        <div class="cs-feat-ttl">When I would build the full product</div>
        <p>Signal v1 was the right scoping call. A full product makes sense once the taxonomy has proven stable across 3+ months, teams are asking for analytics on signal trends, and there is a business case for extending routing to external channels.</p>
        <ul>
          <li>Analytics: trend visualisation across ticket categories over time</li>
          <li>Multi-channel ingestion: email, forums, NPS, community chat</li>
          <li>PM dashboard: recurring themes surfaced automatically</li>
        </ul>
      </div>
    </div>

    <!-- FIX 7: PM decisions section surfaces the thinking explicitly -->
    <h2>What this says about how I work</h2>
    <p>Three decisions shaped Signal. Each one is the kind of call a PM has to own. No committee, no consensus. Just a clear reason and the willingness to defend it.</p>
    <div class="pm-decisions fade">
      <div class="pm-dec">
        <div class="pm-dec__num">Decision 01</div>
        <div class="pm-dec__title">Taxonomy before tooling</div>
        <div class="pm-dec__body">I refused to build anything until we had a shared classification schema. Four teams agreeing on four categories and three severities took two working sessions. Without that contract, any tool we shipped would have routed differently for each team. We would be back where we started within a month.</div>
      </div>
      <div class="pm-dec">
        <div class="pm-dec__num">Decision 02</div>
        <div class="pm-dec__title">No UI in version one</div>
        <div class="pm-dec__body">The instinct was to build a dashboard. I killed it. The value Signal had to prove first was behavioral: could four teams actually follow a shared routing contract? That question doesn't need a dashboard. It needs a Slack workflow and two weeks of data. We shipped the dashboard in v2, on top of clean data, not dirty guesswork.</div>
      </div>
      <div class="pm-dec">
        <div class="pm-dec__num">Decision 03</div>
        <div class="pm-dec__title">I wrote the spec myself</div>
        <div class="pm-dec__body">The routing rules, severity thresholds, and Jira field mapping were written by me, not engineering. It was not my job in the strict sense, but vague specs create slow sprints. When the PM removes ambiguity before standup, engineers ship faster. That is a trade I will always make.</div>
      </div>
    </div>

    <h2>The Result: Quantified Impact</h2>
    <div class="res-bar">
      <div class="mi"><div class="mn">70%</div><div class="ml">Fewer misrouted tickets: from 63% down to 12%</div></div>
      <div class="mi"><div class="mn">&lt;24h</div><div class="ml">Signal to action: down from 5+ day average</div></div>
      <div class="mi"><div class="mn">4/4</div><div class="ml">Teams adopted the taxonomy within week one</div></div>
      <div class="mi"><div class="mn">2 wks</div><div class="ml">Idea to full adoption, no sprint capacity spent</div></div>
    </div>

    <!-- FIX 6: thesis as pull-quote, not buried paragraph -->
    <div class="aq-thesis fade">
      <p>Signal was never a product. It was a system of agreements backed by just enough automation to make those agreements stick.</p>
      <span class="thesis-attr">// Manuel Becerra · PM · 2024</span>
    </div>

  </div><!-- /art -->

  <div class="case-nav">
    <div class="cnl" onclick="show('aneekaa')">
      <div class="cnlbl">// back to previous</div>
      <div class="cnttl">ANEEKAA →</div>
    </div>
    <a href="#" class="btn-case" onclick="show('home');jmp('work');return false">All Projects</a>
  </div>
  <footer><p>// © 2026 Manuel Becerra · Berlin</p><div class="fl"><a href="https://www.linkedin.com/in/manubecerra" target="_blank" rel="noopener noreferrer">LinkedIn</a></div></footer>
</div>


<!-- LIGHTBOX -->
<div id="lb" onclick="lbClose()">
  <button id="lb-close" onclick="lbClose()">✕ close</button>
  <img id="lb-img" src="" alt="">
  <div id="lb-caption"></div>
</div>

<!-- ═════════════ BRAND (violet) ══════ -->
<div class="page" id="pg-brand">
  <div class="ph">
    <div class="ph-glow"></div>
    <div class="ph-cover">
      <img src="https://hi.manubecerra.com/wp-content/uploads/2026/04/HALOS-Final-Logotype-scaled.png" alt="HALOS Console Brand Identity">
    </div>
    <div class="ph-body">
      <span class="back" onclick="show('home')">← Back to Work</span>
      <div class="ph-tags">
        <span class="ph-tag hi">Brand Identity · Logo Design</span>
        <span class="ph-tag">Marketing Design · Visual System</span>
        <span class="ph-tag">Lengoo · Berlin · 2021 to 2024</span>
      </div>
      <div class="ph-ttl">HALOS Console<br>Brand and Design</div>
      <p class="ph-sub">I built the HALOS Console brand from scratch: logo, color system, and marketing materials. Then I applied that visual language across the product, website, and sales assets so everything felt like one coherent system.</p>
      <div class="ph-word">BRAND</div>
    </div>
  </div>

  <div class="mbar">
    <div class="mi"><div class="mn">1</div><div class="ml">Brand built from zero</div></div>
    <div class="mi"><div class="mn">3</div><div class="ml">Core brand colours</div></div>
    <div class="mi"><div class="mn">360°</div><div class="ml">Applied across product & marketing</div></div>
    <div class="mi"><div class="mn">9yr</div><div class="ml">Design & brand background</div></div>
  </div>

  <div class="art">

    <h2>The Brief</h2>
    <p>HALOS Console was Lengoo's enterprise AI platform. The tech was strong, but it had no visual identity. It needed a brand that worked in product UI, marketing, sales decks, and external comms while still feeling credible to enterprise buyers.</p>
    <p>I owned this end to end: positioning, logo construction, color system, and applied assets. No agency. Built in house from concept to production.</p>

    <div class="brand-section">
      <div>
        <h2>Final Wordmark</h2>
        <p>The primary brand expression: the "hi" icon paired with the HALOS Console wordmark. Designed to work at any scale, from product UI to marketing.</p>
      </div>
      <div class="brand-img-block" onclick="lbOpen(this)">
        <img src="https://hi.manubecerra.com/wp-content/uploads/2026/04/HALOS-Final-Logotype-scaled.png" alt="HALOS Console final logotype" data-caption="HALOS Console. Final wordmark. Primary brand expression combining the 'hi' icon with the HALOS Console wordmark.">
        <div class="brand-img-caption">Final Wordmark</div>
      </div>
    </div>

    <div class="brand-section">
      <div>
        <h2>Light & Dark Variants</h2>
        <p>The logo works on light and dark surfaces. Both versions use the same icon. Only the wordmark color changes so it stays legible everywhere.</p>
      </div>
      <div class="brand-img-block" onclick="lbOpen(this)">
        <img src="https://hi.manubecerra.com/wp-content/uploads/2026/04/HALOS-Console-variant-dark-and-light-2-scaled.png" alt="HALOS Console logo light and dark variants" data-caption="HALOS Console. Logo system. Light variant and dark variant. Both maintain legibility across contexts.">
        <div class="brand-img-caption">Logo Variants</div>
      </div>
    </div>

    <div class="brand-section">
      <div>
        <h2>Icon Mark</h2>
        <p>The "hi" icon works as a standalone mark for small formats like product UI, favicons, app icons, and social. It is built on a geometric grid so it scales cleanly from 16px upward.</p>
      </div>
      <div class="brand-img-block" onclick="lbOpen(this)">
        <img src="https://hi.manubecerra.com/wp-content/uploads/2026/04/HALOS-Logo-scaled.png" alt="HALOS Console hi icon mark" data-caption="HALOS Console. The 'hi' icon mark. Standalone version used in product UI, favicons, and small formats.">
        <div class="brand-img-caption">Icon Mark</div>
      </div>
    </div>

    <div class="brand-section">
      <div>
        <h2>Design Process & Construction</h2>
        <p>The logo went through an exploration phase with geometric construction systems, gradient directions, and letterform variations. The construction grid shows how the curves and proportions come from the same circle geometry.</p>
      </div>
      <div class="brand-img-block on-dark" onclick="lbOpen(this)">
        <img src="https://hi.manubecerra.com/wp-content/uploads/2026/04/HALOS-Brainstorning_all-scaled.png" alt="HALOS Console logo construction grid and iterations" data-caption="HALOS Console. Logo construction. Geometric grid with the circle based proportional system and the exploration from first concept to final mark.">
        <div class="brand-img-caption">Construction Grid & Design Iterations</div>
      </div>
    </div>

    <div class="brand-section">
      <div>
        <h2>Colour System</h2>
        <p>Three primary brand colors, each with a role. Cyan (#0abce9) for energy, navy (#3f4497) for trust, and blue (#007fe4) as the connector. Together they work across UI, print, and digital.</p>
      </div>
      <div class="brand-img-block on-dark" onclick="lbOpen(this)">
        <img src="https://hi.manubecerra.com/wp-content/uploads/2026/04/HALOS-Pallete-Colors-scaled.png" alt="HALOS Console brand color palette" data-caption="HALOS Console brand colors: #0abce9 (cyan), #3f4497 (navy), #007fe4 (blue). Built for accessibility and consistent reproduction.">
        <div class="brand-img-caption">Brand Colors</div>
      </div>
    </div>

    <h2>Why This Matters for Product</h2>
    <p>Building a brand from scratch forces decisions to be intentional. Color had to work in a data table, a loading state, a marketing headline, and a small icon badge at the same time. That constraint driven thinking is exactly how I approach product design.</p>
    <p>The same visual system became the foundation for the HALOS Console product UI: color tokens, type hierarchy, and icon style. Brand and product were not separate workstreams. They were one.</p>

    <div class="aq">
      <p>"A brand is not a logo. It is a set of decisions that makes every touchpoint feel like it came from the same place, from the favicon to the sales deck. I built that system for HALOS Console and then shipped the product on top of it."</p>
    </div>

    <div class="brand-img-block" onclick="lbOpen(this)">
      <img src="https://hi.manubecerra.com/wp-content/uploads/2026/03/HALOS-Console-UI-Permissions-1.gif" alt="HALOS Console UI permissions interface">
    </div>

  </div>

  <div class="case-nav">
    <div class="cnl" onclick="show('halos')">
      <div class="cnlbl">// see the product case study</div>
      <div class="cnttl">HALOS Console →</div>
    </div>
    <a href="#" class="btn-case" style="color:#fff" onclick="show('home');jmp('work');return false">All Projects</a>
  </div>
  <footer><p>// © 2026 Manuel Becerra · Berlin</p><div class="fl"><a href="https://www.linkedin.com/in/manubecerra" target="_blank" rel="noopener noreferrer">LinkedIn</a></div></footer>
</div>

<script>
/* cursor */
const cur=document.getElementById('cur'),cr=document.getElementById('cur-r');
let mx=0,my=0,rx=0,ry=0;
document.addEventListener('mousemove',e=>{mx=e.clientX;my=e.clientY;cur.style.left=mx+'px';cur.style.top=my+'px'});
(function loop(){rx+=(mx-rx)*.12;ry+=(my-ry)*.12;cr.style.left=rx+'px';cr.style.top=ry+'px';requestAnimationFrame(loop)})();
document.querySelectorAll('a,button,.pc,.pc-card,.pc-brand,.tool,.pil,.cnl,.bg-item').forEach(el=>{
  el.addEventListener('mouseenter',()=>{cur.style.width='16px';cur.style.height='16px'});
  el.addEventListener('mouseleave',()=>{cur.style.width='8px';cur.style.height='8px'});
});

/* theme */
const html=document.documentElement,thbtn=document.getElementById('thbtn');
const thicon=document.getElementById('thicon'),thlbl=document.getElementById('thlbl');
let dark=(()=>{
  try{
    const saved=localStorage.getItem('theme');
    if(saved==='light' || saved==='dark') return saved==='dark';
  }catch(e){}
  return window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches;
})();
function applyTheme(){
  html.setAttribute('data-theme',dark?'dark':'light');
  thicon.textContent=dark?'☀️':'🌙';
  thlbl.textContent=dark?'LIGHT':'DARK';
}
if(thbtn){
  applyTheme();
  thbtn.addEventListener('click',()=>{
    dark=!dark;
    applyTheme();
    try{localStorage.setItem('theme',dark?'dark':'light');}catch(e){}
  });
}

/* mobile nav toggle */
const nav=document.getElementById('nav');
const navToggle=document.getElementById('nav-toggle');
if(nav && navToggle){
  navToggle.addEventListener('click',()=>{
    const isOpen=nav.classList.toggle('open');
    navToggle.setAttribute('aria-expanded',isOpen?'true':'false');
  });
  nav.querySelectorAll('.nav-links a').forEach(a=>{
    a.addEventListener('click',()=>{
      nav.classList.remove('open');
      navToggle.setAttribute('aria-expanded','false');
    });
  });
}

/* nav scroll */
window.addEventListener('scroll',()=>document.getElementById('nav').classList.toggle('scrolled',scrollY>40));

/* router */
const caseStudyPages=new Set(['halos','echo','aneekaa','signal','brand']);
const sectionTrackIds=new Set(['about','work','contact']);
const routeLabels={
  home:'Home',
  halos:'HALOS: AI Model Customization',
  echo:'Project Echo: MT Quality Loop',
  aneekaa:'Aneekaa: Studio and Growth',
  signal:'Signal: Feedback Routing',
  brand:'HALOS Console: Brand and Design',
  about:'About',
  work:'Work',
  contact:'Contact'
};

function getRouteUrl(name){
  const url=new URL(window.location.href);
  if(caseStudyPages.has(name)){
    url.searchParams.set('case',name);
  }else{
    url.searchParams.delete('case');
  }
  url.hash='';
  return `${url.pathname}${url.search}${url.hash}`;
}

function trackVirtualPage(name){
  if(typeof gtag!=='function') return;
  const routeUrl=getRouteUrl(name);
  gtag('event','page_view',{
    page_title:routeLabels[name]||document.title,
    page_location:`${window.location.origin}${routeUrl}`,
    page_path:routeUrl
  });
}

function show(name,options={}){
  const page=document.getElementById('pg-'+name);
  if(!page){console.warn('Page not found: pg-'+name);return;}
  document.querySelectorAll('.page').forEach(p=>p.classList.remove('active'));
  page.classList.add('active');
  if(options.updateUrl!==false){
    const routeUrl=getRouteUrl(name);
    const method=options.replaceUrl ? 'replaceState' : 'pushState';
    history[method]({page:name},'',routeUrl);
  }
  if(options.track!==false){
    trackVirtualPage(name);
  }
  window.scrollTo({top:0,behavior:'smooth'});
  setTimeout(initFades,80);
}
function jmp(id){
  if(sectionTrackIds.has(id) && typeof gtag==='function'){
    gtag('event','section_view',{
      section_id:id,
      section_name:routeLabels[id]||id,
      page_location:window.location.href
    });
  }
  setTimeout(()=>{const el=document.getElementById(id);if(el)el.scrollIntoView({behavior:'smooth'})},130);
}

/* scroll fade */
function initFades(){
  const obs=new IntersectionObserver(entries=>entries.forEach(e=>{if(e.isIntersecting)e.target.classList.add('in')}),{threshold:.06});
  document.querySelectorAll('.fade:not(.in)').forEach(el=>obs.observe(el));
  document.querySelectorAll('.fade').forEach(el=>{if(el.getBoundingClientRect().top<window.innerHeight*.9)el.classList.add('in')});
}

/* lightbox */
const lb=document.getElementById('lb'),lbImg=document.getElementById('lb-img'),lbCap=document.getElementById('lb-caption');
function lbOpen(el){
  const img=el.querySelector('img');
  lbImg.src=img.src;lbImg.alt=img.alt;
  lbCap.textContent=img.dataset.caption||'';
  lb.classList.add('open');
  document.body.style.overflow='hidden';
}
function lbClose(){
  lb.classList.remove('open');
  document.body.style.overflow='';
  lbImg.src='';
}
document.addEventListener('keydown',e=>{if(e.key==='Escape')lbClose()});
if(lbImg) lbImg.addEventListener('click',e=>e.stopPropagation());

/* ── Signal routing demo ── */
const SD_EXAMPLES=[
  'The flow builder crashes every time I try to save a flow with more than 15 nodes. It just shows a white screen and all my work is lost.',
  'Every API call is taking 12 to 15 seconds today when it is normally under one second. The whole platform feels completely unresponsive.',
  'It would be great if we could export conversation logs directly as a CSV file. Right now I have to copy everything manually which takes a very long time.',
  'I cannot figure out how to set up the handover protocol. The documentation mentions a webhook but I do not understand where to configure it in the settings.',
  'The new conversation view is quite hard to read. The contrast between the message text and the background is way too low, especially on mobile screens.'
];
const SD_TEAMS=[
  {id:'Engineering',    ico:'⚙️',color:'#f59e0b',bg:'rgba(245,158,11,.12)',bdr:'rgba(245,158,11,.35)'},
  {id:'Product (PM)',   ico:'📋',color:'#60a5fa',bg:'rgba(96,165,250,.12)', bdr:'rgba(96,165,250,.35)'},
  {id:'Customer Success',ico:'💬',color:'#2dd4bf',bg:'rgba(45,212,191,.12)',bdr:'rgba(45,212,191,.35)'},
  {id:'Design',         ico:'✏️',color:'#c084fc',bg:'rgba(192,132,252,.12)',bdr:'rgba(192,132,252,.35)'}
];
function sdFill(i){const el=document.getElementById('sd-ticket');if(el){el.value=SD_EXAMPLES[i];el.focus();}}
function classifySignal(text){
  const t=text.toLowerCase();
  if(/crash|exception|broken|fails|doesn.t work|not working|500|error|traceback|white screen|lost my work/.test(t))
    return{type:'Bug Report',sev:'P1',sevLabel:'Critical',team:'Engineering',conf:94,reason:'<strong>Functional failure detected.</strong> The ticket describes a reproducible outage or data loss scenario. Signal marks this as P1, creates a Jira incident, and notifies the Engineering on-call channel.',next:'Create a high-priority Jira ticket and notify the Engineering incident channel.'};
  if(/slow|performance|latency|timeout|loading|hangs|unresponsive|12 to 15 seconds|taking too long/.test(t))
    return{type:'Performance Issue',sev:'P1',sevLabel:'Critical',team:'Engineering',conf:91,reason:'<strong>Performance degradation detected.</strong> Response time is far above baseline, indicating a production-level incident. Signal escalates this immediately and routes it to Engineering with monitoring context.',next:'Escalate to Engineering and attach performance context for immediate investigation.'};
  if(/feature|would be great|could you add|request|suggestion|export|csv|wish|enhancement|improve|support for/.test(t))
    return{type:'Feature Request',sev:'P3',sevLabel:'Low',team:'Product (PM)',conf:88,reason:'<strong>Improvement signal with no urgency indicators.</strong> Routed to Product for roadmap consideration with structured metadata so the PM team can prioritise without re-reading the original ticket.',next:'Capture as a roadmap candidate and route to Product for feature review.'};
  if(/how do i|cannot figure|documentation|unclear|confusing|do not understand|where|configure|webhook|settings/.test(t))
    return{type:'UX / Docs Gap',sev:'P2',sevLabel:'Medium',team:'Customer Success',conf:85,reason:'<strong>User comprehension barrier detected.</strong> The language suggests a missing or unclear doc or onboarding flow. CS receives it immediately and Design gets a copy flagged for UX review.',next:'Send to Customer Success for clarification and add to the UX/docs audit backlog.'};
  if(/design|hard to read|contrast|visual|looks|color|layout|interface|font|spacing|mobile/.test(t))
    return{type:'Design Feedback',sev:'P3',sevLabel:'Low',team:'Design',conf:83,reason:'<strong>Aesthetic signal with no functional impact.</strong> Routed to Design for the next UI iteration and batched with other low-priority design items.',next:'Batch into the next Design review digest and route to the Design team.'};
  return{type:'General Feedback',sev:'P3',sevLabel:'Low',team:'Customer Success',conf:71,reason:'<strong>Ambiguous signal: human review required.</strong> No dominant category emerged. Routed to Customer Success for manual tagging and audit-trail review.',next:'Route to Customer Success for manual review and classification.'};
}
function renderSignalResult(r){
  const at=SD_TEAMS.find(t=>t.id===r.team);
  const sc={'P1':'#ef4444','P2':'#f59e0b','P3':'#60a5fa'}[r.sev]||'#60a5fa';
  const sb={'P1':'rgba(239,68,68,.12)','P2':'rgba(245,158,11,.12)','P3':'rgba(96,165,250,.12)'}[r.sev]||'rgba(96,165,250,.12)';
  const sbdr={'P1':'rgba(239,68,68,.35)','P2':'rgba(245,158,11,.35)','P3':'rgba(96,165,250,.35)'}[r.sev]||'rgba(96,165,250,.35)';
  const hero=`<div class="sd-section sd-hero"><div class="sd-hero-ico" style="color:${at.color}">${at.ico}</div><div class="sd-hero-text"><div class="sd-hero-label">// routed to</div><div class="sd-hero-team" style="color:${at.color}">${r.team}</div><div class="sd-hero-pills"><span class="sd-pill" style="color:${at.color};border-color:${at.bdr};background:${at.bg}">${r.type}</span><span class="sd-pill" style="color:${sc};border-color:${sbdr};background:${sb}">${r.sev}: ${r.sevLabel}</span><span class="sd-pill" style="color:var(--muted);border-color:var(--bdr);background:var(--bg2)">Confidence: ${r.conf}%</span></div></div></div>`;
  const map=`<div class="sd-section"><div class="sd-map">${SD_TEAMS.map(t=>{const a=t.id===r.team;return`<div class="sd-mnode${a?' active':''}" style="${a?`color:${t.color};border-color:${t.bdr};background:${t.bg}`:''}"><div class="sd-mnode-ico">${t.ico}</div><div class="sd-mnode-name">${t.id}</div></div>`;}).join('')}</div></div>`;
  const flow=`<div class="sd-section sd-flow"><div class="sd-step"><strong>1) Signal ingested</strong> · We capture channel metadata (Zendesk vs Slack), time, account, and language to keep context.</div><div class="sd-step"><strong>2) Model scores</strong> · Our classifier reads the text, checks past tickets for near-duplicates, and assigns taxonomy + severity.</div><div class="sd-step"><strong>3) Routing rules</strong> · Severity + category map to an owner team and SLA; P1s also open Jira with prefilled fields.</div><div class="sd-step"><strong>4) Audit trail</strong> · Slack handoff includes rationale and confidence; every decision is logged so humans can override fast.</div></div>`;
  return hero+map+flow+`<div class="sd-section sd-rationale">${r.reason}</div>`+`<div class="sd-section sd-action"><strong>Next step:</strong> ${r.next}</div>`;
}
function animateSignal(el){el.querySelectorAll('.sd-section').forEach((s,i)=>setTimeout(()=>s.classList.add('show'),120*i));}
function runSignal(){
  const input=document.getElementById('sd-ticket'),btn=document.getElementById('sd-btn'),out=document.getElementById('sd-output');
  const text=(input&&input.value||'').trim();if(!text)return;
  btn.disabled=true;btn.textContent='Analyzing…';
  out.innerHTML=`<div class="sd-output"><div class="sd-processing"><div class="sd-dot"></div><div class="sd-dot"></div><div class="sd-dot"></div><span>Signal is classifying your ticket…</span></div><div class="sd-stream"></div><div class="sd-trace"><div class="sd-trace-step"><span class="sd-dot-live"></span>Parsing text & metadata</div><div class="sd-trace-step"><span class="sd-dot-live"></span>Scoring against taxonomy</div><div class="sd-trace-step"><span class="sd-dot-live"></span>Assigning team & severity</div><div class="sd-trace-step"><span class="sd-dot-live"></span>Preparing handoff packet</div></div></div>`;
  setTimeout(()=>{const r=classifySignal(text);out.innerHTML=`<div class="sd-output">${renderSignalResult(r)}</div>`;animateSignal(out);btn.disabled=false;btn.textContent='Classify & Route →';},1500);
}

const initialCase=new URLSearchParams(window.location.search).get('case');
if(caseStudyPages.has(initialCase)){
  show(initialCase,{replaceUrl:true,track:false});
  if(typeof gtag==='function'){
    gtag('event','page_view',{
      page_title:routeLabels[initialCase]||document.title,
      page_location:window.location.href,
      page_path:new URL(window.location.href).pathname+new URL(window.location.href).search
    });
  }
}

initFades();
</script>
</body>
</html>
