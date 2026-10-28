@extends('layouts.frontend')
@section('title')
    Privacy Policy | Nextus Home Security
@endsection
@section('content')

    {{-- ===== BREADCRUMB (unchanged) ===== --}}
    <section class="breadcrumb__area include-bg pt-150 pb-150" data-background="/frontend/my_img/bredcrum.jpg">
        <div class="container">
            <div class="row">
                <div class="col-xxl-12">
                    <div class="breadcrumb__content p-relative z-index-1">
                        <div class="breadcrumb__list mb-10">
                            <span><a href="/">Home</a></span>
                            <span class="dvdr"><i class="flaticon-arrow-right"></i></span>
                            <span>Privacy Policy</span>
                        </div>
                        <h3 class="breadcrumb__title">Privacy Policy</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ===== PRIVACY POLICY (redesigned) ===== --}}
    <style>
        .pp {
            /* Change these 4 values to match your brand */
            --pp-ink: #14233a;
            --pp-text: #3d4a5c;
            --pp-accent: #0b6e8a;
            --pp-accent-soft: #e8f3f7;
            --pp-line: #dfe5ec;
            --pp-bg: #f6f8fa;
            background: var(--pp-bg);
            padding: 70px 0 90px;
            color: var(--pp-text);
            font-size: 16px;
            line-height: 1.75;
        }
        .pp *, .pp *::before, .pp *::after { box-sizing: border-box; }

        /* Intro */
        .pp-intro {
            background: #fff;
            border: 1px solid var(--pp-line);
            border-left: 5px solid var(--pp-accent);
            border-radius: 8px;
            padding: 28px 32px;
            margin-bottom: 36px;
        }
        .pp-intro h2 {
            font-size: 28px;
            line-height: 1.25;
            color: var(--pp-ink);
            margin: 0 0 12px;
        }
        .pp-intro p { margin: 0; max-width: 78ch; }

        /* Layout */
        .pp-layout {
            display: grid;
            grid-template-columns: 260px minmax(0, 1fr);
            gap: 40px;
            align-items: start;
        }

        /* Table of contents */
        .pp-toc {
            position: sticky;
            top: 100px;
            background: #fff;
            border: 1px solid var(--pp-line);
            border-radius: 8px;
            padding: 20px 8px 12px;
        }
        .pp-toc-title {
            font-size: 15px;
            font-weight: 700;
            color: var(--pp-ink);
            padding: 0 16px 10px;
            margin: 0;
        }
        .pp-toc ul { list-style: none; margin: 0; padding: 0; }
        .pp-toc a {
            display: block;
            padding: 9px 16px;
            margin: 2px 0;
            font-size: 15px;
            line-height: 1.4;
            color: var(--pp-text);
            text-decoration: none;
            border-left: 3px solid transparent;
            border-radius: 0 6px 6px 0;
            transition: background .2s, color .2s, border-color .2s;
        }
        .pp-toc a:hover { background: var(--pp-bg); color: var(--pp-ink); }
        .pp-toc a.is-active {
            background: var(--pp-accent-soft);
            color: var(--pp-accent);
            border-left-color: var(--pp-accent);
            font-weight: 600;
        }
        .pp a:focus-visible {
            outline: 3px solid var(--pp-accent);
            outline-offset: 2px;
        }

        /* Sections */
        .pp-content { min-width: 0; }
        .pp-section {
            background: #fff;
            border: 1px solid var(--pp-line);
            border-radius: 8px;
            padding: 34px 36px;
            margin-bottom: 24px;
            scroll-margin-top: 100px;
        }
        .pp-section h3 {
            display: flex;
            align-items: center;
            gap: 14px;
            font-size: 22px;
            line-height: 1.3;
            color: var(--pp-ink);
            margin: 0 0 18px;
            padding-bottom: 16px;
            border-bottom: 1px solid var(--pp-line);
        }
        .pp-num {
            flex: 0 0 auto;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 38px;
            height: 38px;
            border-radius: 50%;
            background: var(--pp-accent);
            color: #fff;
            font-size: 16px;
            font-weight: 700;
        }
        .pp-section p { margin: 0 0 14px; max-width: 78ch; }
        .pp-section p:last-child { margin-bottom: 0; }
        .pp-section h4 {
            font-size: 17px;
            color: var(--pp-ink);
            margin: 28px 0 10px;
        }
        .pp-section a { color: var(--pp-accent); font-weight: 600; text-decoration: none; }
        .pp-section a:hover { text-decoration: underline; }

        /* Lists */
        .pp-list { list-style: none; margin: 0 0 16px; padding: 0; }
        .pp-list li {
            position: relative;
            padding: 8px 0 8px 26px;
            max-width: 78ch;
        }
        .pp-list li::before {
            content: "";
            position: absolute;
            left: 4px;
            top: 18px;
            width: 8px;
            height: 8px;
            border-radius: 50%;
            background: var(--pp-accent);
        }

        /* Callout */
        .pp-callout {
            background: var(--pp-accent-soft);
            border-radius: 8px;
            padding: 18px 22px;
            margin: 22px 0;
            color: var(--pp-ink);
        }
        .pp-callout p { margin: 0; }

        /* Rights table */
        .pp-rights {
            border: 1px solid var(--pp-line);
            border-radius: 8px;
            overflow: hidden;
            margin: 0 0 20px;
        }
        .pp-right {
            display: grid;
            grid-template-columns: 220px 1fr;
            gap: 20px;
            padding: 16px 22px;
            border-bottom: 1px solid var(--pp-line);
        }
        .pp-right:last-child { border-bottom: 0; }
        .pp-right:nth-child(odd) { background: var(--pp-bg); }
        .pp-right dt { font-weight: 700; color: var(--pp-ink); margin: 0; }
        .pp-right dd { margin: 0; }

        /* Contact */
        .pp-contact {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 24px;
            flex-wrap: wrap;
            background: var(--pp-ink);
            color: #d5dde8;
            border-radius: 8px;
            padding: 36px;
            scroll-margin-top: 100px;
        }
        .pp-contact h3 {
            color: #fff;
            font-size: 22px;
            margin: 0 0 8px;
        }
        .pp-contact p { margin: 0; max-width: 52ch; }
        .pp-phone {
            display: inline-flex;
            align-items: center;
            gap: 12px;
            background: #fff;
            color: var(--pp-ink) !important;
            font-size: 20px;
            font-weight: 700;
            padding: 14px 26px;
            border-radius: 50px;
            text-decoration: none !important;
            white-space: nowrap;
            transition: transform .2s, box-shadow .2s;
        }
        .pp-phone:hover { transform: translateY(-2px); box-shadow: 0 8px 20px rgba(0,0,0,.25); }
        .pp-phone svg { width: 20px; height: 20px; fill: var(--pp-accent); }
        .pp-consent {
            text-align: center;
            font-size: 14px;
            margin: 24px 0 0;
        }

        /* Tablet and below: TOC becomes a horizontal scroll bar */
        @media (max-width: 991px) {
            .pp { padding: 40px 0 60px; }
            .pp-layout { grid-template-columns: 1fr; gap: 24px; }
            .pp-toc {
                position: sticky;
                top: 0;
                z-index: 5;
                padding: 8px;
                border-radius: 8px;
            }
            .pp-toc-title { display: none; }
            .pp-toc ul {
                display: flex;
                gap: 6px;
                overflow-x: auto;
                -webkit-overflow-scrolling: touch;
                scrollbar-width: none;
            }
            .pp-toc ul::-webkit-scrollbar { display: none; }
            .pp-toc li { flex: 0 0 auto; }
            .pp-toc a {
                margin: 0;
                border-left: 0;
                border-radius: 50px;
                white-space: nowrap;
                padding: 8px 16px;
            }
            .pp-section, .pp-contact { scroll-margin-top: 80px; }
        }

        /* Phones */
        @media (max-width: 575px) {
            .pp-intro { padding: 22px 20px; }
            .pp-intro h2 { font-size: 23px; }
            .pp-section { padding: 24px 20px; }
            .pp-section h3 { font-size: 19px; gap: 12px; }
            .pp-num { width: 34px; height: 34px; font-size: 15px; }
            .pp-right { grid-template-columns: 1fr; gap: 4px; padding: 14px 18px; }
            .pp-contact { padding: 28px 22px; }
            .pp-phone { width: 100%; justify-content: center; font-size: 18px; }
        }

        @media (prefers-reduced-motion: reduce) {
            .pp * { transition: none !important; }
        }
    </style>

    <div class="pp">
        <div class="container">

            <div class="pp-intro">
                <h2>Your privacy matters to us</h2>
                <p>
                    At <b>Nextus Home Security</b>, we are committed to protecting your privacy. This Privacy Policy
                    outlines how we collect, use, and safeguard your personal information when you interact
                    with our products, services, and website. By using our services, you agree to the collection
                    and use of information in accordance with this policy.
                </p>
            </div>

            <div class="pp-layout">

                {{-- Table of contents --}}
                <nav class="pp-toc" aria-label="Privacy policy sections">
                    <p class="pp-toc-title">On this page</p>
                    <ul>
                        <li><a href="#information">Information we collect</a></li>
                        <li><a href="#sharing">Data sharing</a></li>
                        <li><a href="#security">Data security</a></li>
                        <li><a href="#california">California privacy rights</a></li>
                        <li><a href="#contact">Contact us</a></li>
                    </ul>
                </nav>

                <div class="pp-content">

                    {{-- 1 --}}
                    <section class="pp-section" id="information">
                        <h3><span class="pp-num">1</span> Information We Collect</h3>
                        <p>When you sign up for services, contact us, or fill out forms on our website, we may
                            collect personal details such as your name, email address, phone number, billing
                            information, and physical address.</p>
                        <p>We also automatically collect information when you use our website or services, such as
                            your IP address, browser type, device information, and usage patterns.</p>
                        <p>If you use our home security products or services, we may collect data related to your
                            security system’s performance, including sensor status, alarm events, and video footage
                            (if applicable).</p>
                    </section>

                    {{-- 2 --}}
                    <section class="pp-section" id="sharing">
                        <h3><span class="pp-num">2</span> Data Sharing</h3>
                        <div class="pp-callout">
                            <p><strong>We do not sell or rent your personal information to third parties.</strong></p>
                        </div>
                        <p>However, we may share your information in the following situations:</p>
                        <ul class="pp-list">
                            <li>We may share your information with trusted third-party vendors who help us deliver
                                services, such as payment processors or installation partners.</li>
                            <li>We may also disclose your information if required by law or to protect our legal
                                rights, for example in response to a subpoena, court order, or government request.</li>
                        </ul>
                    </section>

                    {{-- 3 --}}
                    <section class="pp-section" id="security">
                        <h3><span class="pp-num">3</span> Data Security</h3>
                        <p>We take the security of your personal information seriously. We implement
                            industry-standard measures like encryption, firewalls, and secure access controls to
                            protect your data. However, no method of transmission over the internet or electronic
                            storage is 100% secure.</p>
                    </section>

                    {{-- 4 California --}}
                    <section class="pp-section" id="california">
                        <h3><span class="pp-num">4</span> California Privacy Rights</h3>
                        <p>If the California Consumer Privacy Act (CCPA), as amended, applies to our business,
                            California residents may have rights to request access to, correction of, or deletion
                            of their personal information and to opt out of the sale or sharing of personal
                            information, subject to applicable exceptions.</p>
                        <p>To submit a privacy request, email
                            <a href="mailto:YOUR-EMAIL@YOURDOMAIN.COM?subject=Privacy%20Request">YOUR-EMAIL@YOURDOMAIN.COM</a>
                            with the subject line “Privacy Request.”</p>
                        <p>Where legally required, we will honor applicable Global Privacy Control (GPC) signals
                            and provide additional privacy choices.</p>
                    </section>

                    {{-- 5 Contact --}}
                    <section class="pp-contact" id="contact">
                        <div>
                            <h3>5. Contact Us</h3>
                            <p>If you have any questions about this Privacy Policy or how we handle your personal
                                information, please call us.</p>
                        </div>
                        <a class="pp-phone" href="tel:+18558743165" aria-label="Call Nextus Home Security">
                            <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M6.6 10.8a15.1 15.1 0 0 0 6.6 6.6l2.2-2.2a1 1 0 0 1 1-.25 11.4 11.4 0 0 0 3.6.57 1 1 0 0 1 1 1V20a1 1 0 0 1-1 1A17 17 0 0 1 3 4a1 1 0 0 1 1-1h3.5a1 1 0 0 1 1 1c0 1.25.2 2.45.57 3.57a1 1 0 0 1-.25 1z"/></svg>
                            +1 (855) 874-3165
                        </a>
                    </section>

                    <p class="pp-consent">By using our services, you consent to the terms of this Privacy Policy.</p>
                </div>
            </div>
        </div>
    </div>

    <script>
        (function () {
            var links = document.querySelectorAll('.pp-toc a');
            var targets = [];
            links.forEach(function (a) {
                var el = document.querySelector(a.getAttribute('href'));
                if (el) targets.push({ a: a, el: el });
            });
            if (!targets.length || !('IntersectionObserver' in window)) return;

            var io = new IntersectionObserver(function (entries) {
                entries.forEach(function (entry) {
                    if (!entry.isIntersecting) return;
                    links.forEach(function (l) { l.classList.remove('is-active'); });
                    var hit = targets.find(function (t) { return t.el === entry.target; });
                    if (hit) {
                        hit.a.classList.add('is-active');
                        // keep active chip visible in the mobile scroll bar
                        if (hit.a.scrollIntoView && window.innerWidth < 992) {
                            hit.a.parentNode.parentNode.scrollTo({
                                left: hit.a.offsetLeft - 16,
                                behavior: 'smooth'
                            });
                        }
                    }
                });
            }, { rootMargin: '-20% 0px -70% 0px' });

            targets.forEach(function (t) { io.observe(t.el); });
            links[0].classList.add('is-active');
        })();
    </script>

@endsection