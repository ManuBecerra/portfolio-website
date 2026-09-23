# Handoff: Product Designer Pivot, Portfolio and Case Study Build

Context for continuing this work in Claude Code. This summarizes a long session covering positioning strategy, CV, LinkedIn, the portfolio website rebuild, and the Flow case study.

## The core situation

Manu is pivoting his job search from Product Manager and Product Owner positioning to Product Designer, targeting AI powered SaaS companies in Berlin. Level: mid toward senior, not junior, not lead. Not a fabricated pivot, a restoration. An earlier CV version already listed his Lengoo role as "Digital Product Owner UX/UI Designer" before a prior round of PM focused coaching stripped the design language out. This work puts it back, accurately.

## Locked facts and authorship, do not relitigate these

- Nine years across three phases. Aneekaa Studio (Jan 2015 to Feb 2024, Co-Founder, brand and creative design, clients including Adidas, Zalando, Blinkist, Fotografiska). Lengoo (Jul 2020 to Jun 2024, Product Designer and Product Owner, Flow and HALOS Console). Cognigy (Jun 2024 to present, Product Support Engineer, technical fluency, APIs, logs, model behavior).
- Flow authorship: collaborative. Manu worked hands on in Figma daily alongside a design lead and another designer. Day to day design decisions on Flow were his. Bigger calls went through the lead. This is NOT sole ownership and should never be written as such, regardless of how the request is phrased in a future session. This was tested repeatedly across the conversation and held firm each time.
- HALOS Console authorship: solo. Manu took over design ownership of this independently after the Flow period. This is a clean claim with no ambiguity.
- No names of any colleagues appear anywhere in public facing materials, case study, CV, LinkedIn, or the website. This was a deliberate, repeated decision.
- Lengoo filed for insolvency in early 2024. This is stated plainly in the Flow case study as a funding story, not a product failure, and should stay that way.
- Cognigy title is still unresolved. Three different versions have appeared across old documents, Product Support Engineer, Product Operations Engineer, and something closer to Product Engineer. None has been checked against the actual Arbeitszeugnis. This blocks full consistency across CV, LinkedIn, and the site's credentials section. Needs Manu to check the actual document.

## Writing rules, apply everywhere, saved to memory

- No dashes in any form, em dash, en dash, or hyphen used as a pivot. Use commas or periods instead. Exception: structural hyphens in code.
- No hedging words, no "genuinely," "honestly," "straightforward."
- Short form writing (headlines, subheads, emails) stays short and punchy.
- Long form narrative writing (case studies, articles) should vary sentence length and connect ideas, not chain short fragments one after another.

## What's done: LinkedIn

Headline, About section, all experience entries, and job preferences (Product Designer, Product Owner, UX Designer) updated to the Product Designer framing. Consistent with the CV and case study language.

## What's done: CV

Drafted in English only, Product Designer framing, reverse chronological, matches the locked authorship language. Still exists only as a markdown draft, not yet exported as an actual hosted PDF or file. The CV buttons on the website currently point to LinkedIn instead, since there is no hosted CV file yet.

## What's done: the website, hi.manubecerra.com

Working file is a PHP template with a dynamic per page og:image system (do not touch that mechanism). Everything below has been applied to the homepage section of this file:

- All meta tags (title, og:title, og:description, twitter:title, twitter:description, plain description) rewritten to Product Designer and AI Evaluation positioning, dropped a weak trailing ing clause in the metric line
- Hero tag, trimmed subhead, hero photo card chip swapped from PSPO and PSM to the 50 percent Flow translation speed metric, since a Scrum credential was competing with design identity in the most visible spot on the page
- New marquee added right after the hero, ten rotating terms (Product Design, Interaction Design, AI Evaluation, Design Systems, Usability Testing, Product Ownership, Brand Instinct, AI Trust, Technical Depth, Berlin), refined to small size, light weight, wide letter spacing, muted color with accent colored separator dots, slow scroll speed. Went through several iterations, started too large and bold, corrected after direct feedback.
- The ghost styled word "chaos" in the H1 now cycles through chaos, ambiguity, uncertainty on a timer, respects prefers reduced motion
- About section trimmed, three pillar cards rewritten to mirror the closing line exactly: Brand instinct, Product ownership, Real technical fluency, each pillar proving the matching claim
- Work section: five case study cards, badges updated to Product Design language, cards now reveal with a staggered fade on scroll instead of appearing all at once
- Where I've worked section rebuilt: Cognigy, Lengoo, and Aneekaa each show name, role, and a one line highlight of the actual contribution. Client names, Adidas, Zalando, Blinkist, Fotografiska, sit below as a lighter secondary line, not mixed in as equals
- Credentials restructured into two clean columns, Education and Certifications, instead of one dense run on paragraph. Stale in progress dates removed since the IU Akademie program is now complete
- Currently Building section restructured: each of the three cards (Kor, n8n agent stack, Signal) now opens with one plain sentence, then a row of small scannable fact tags, instead of a dense paragraph
- New Testimonials section added, four of five available LinkedIn recommendations, real names, roles, and how each person knows Manu
- Page order changed: proof first, logistics last. Hero, marquee, stats, About, Work, Where I've worked, Credentials, Currently Building, Testimonials, then Ways We Can Work Together, then Contact. The engagement and logistics section was deliberately moved to sit right before Contact, after every piece of proof, not before it
- Old skills ticker removed entirely, was redundant with the stats bar and pillar cards
- All three CV links (hero, nav bar, contact section) repointed to LinkedIn
- Full sweep for dashes completed across all homepage content

Not yet touched: the individual case study sub pages (HALOS, Echo, Aneekaa, Signal detail pages). These still carry the old Product Manager and Product Owner badge internally and, for Signal specifically, a PM decision narrated writing style. This was explicitly parked for later, described as a one by one pass once Flow and HALOS Console exist as real pages.

## What's done: the Flow case study, content only, not yet a live page

Full eleven part script is locked: hero, the problem, who I was designing for, grounding it in the market, the flagship problem (confidence score legibility), testing it for real (an actual usability test with a real Google Form), closing the loop (correction and reporting flow, explicitly framed as designing for AI failure states, matching real 2026 hiring manager language on trust as the central AI design problem), what shipped, outcome, looking back. Written in flowing narrative style per the writing rules above, no names, no dashes.

A full visual placement map exists pairing each section with a specific asset. Ready and exported: the hero GIF material (a five frame confidence score sequence with real product copy, not lorem ipsum), the personas grid, the iteration board carrying the annotation "chosen option, but make the dot bigger and blinking once," the usability test Google Form screenshots, and a resource panel screenshot for the what shipped section. Still needed, not yet exported clean: the old pre Flow translation design, a comparison row against DeepL, Google Translate, and Reverso, and the Report Translation Issue modal.

Decision made but not built: case study access should be a request access form, not a fixed password, since the work is being treated as confidential but not secret.

An October 2023 demo video also exists and has not yet been processed or used.

## Not started

HALOS Console's own case study content. Same process as Flow, working from Figma material already reviewed in this session (raw data upload, custom model management, HALOS units, API credentials, customer and user management, permissions).

## Immediate next actions, in priority order

1. Confirm the real Cognigy title against the Arbeitszeugnis, then propagate it consistently across CV, LinkedIn, and the site's credentials section
2. Export the three remaining Flow visuals
3. Build Flow as an actual live page on the site, using the locked script and visual map
4. Build the request access gate for case studies
5. Export the CV as an actual hosted file, then repoint the three CV buttons away from LinkedIn back to the real file
6. Start HALOS Console's case study content
7. Do the deferred one by one pass on the four existing case study sub pages, badge and narrative consistency
