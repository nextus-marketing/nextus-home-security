@extends('layouts.frontend')
@section('title')
    Privacy Policy | Nextus Home Security
@endsection
@section('content')
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

    <div class="tp-about-area pt-70 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12">
                    <div class="tp-about-wrapper tp-about-wrapper-2 pt-40 mb-40 pr-40">
                        <div class="tp-section-box tp-section-box-2 p-relative">
                            <span class="tp-section-subtitle right d-inline-block">Privacy Policy</span>
                            <p class="mb-15 mt-3">
                                At <b>Nextus Home Security</b>, we are committed to protecting your privacy. This Privacy Policy
                                outlines how we collect, use, and safeguard your personal information when you interact
                                with our products, services, and website. By using our services, you agree to the collection
                                and use of information in accordance with this policy.
                            </p>
                            <hr class="mt-30 mb-30">
                            <div class="tp-about-fea-item">
                                <p><strong>1. Information We Collect</strong></p>
                                <p>When you sign up for services, contact us, or fill out forms on our website, we may
                                    collect personal details such as your name, email address, phone number, billing
                                    information, and physical address.</p>
                                <p>We also automatically collect information when you use our website or services, such as
                                    your IP address, browser type, device information, and usage patterns.</p>
                                <p>If you use our home security products or services, we may collect data related to your
                                    security system’s performance, including sensor status, alarm events, and video footage
                                    (if applicable).</p>
                                <p class="mt-30"><strong>2. Data Sharing</strong></p>
                                <p>We do not sell or rent your personal information to third parties. However, we may share
                                    your information in the following situations:</p>
                                <p>We may share your information with trusted third-party vendors who help us deliver
                                    services, such as payment processors or installation partners.</p>
                                <p>We may also disclose your information if required by law or to protect our legal rights,
                                    for example in response to a subpoena, court order, or government request.</p>
                                <p class="mt-30"><strong>3. Data Security</strong></p>
                                <p>We take the security of your personal information seriously. We implement
                                    industry-standard measures like encryption, firewalls, and secure access controls to
                                    protect your data. However, no method of transmission over the internet or electronic
                                    storage is 100% secure.</p>

                                {{-- ===== CCPA SECTION (NEW) ===== --}}
                                <p class="mt-30"><strong>4. California Privacy Rights (CCPA/CPRA)</strong></p>
                                <p>If you are a California resident, the California Consumer Privacy Act of 2018, as amended
                                    by the California Privacy Rights Act (together, the “CCPA”), gives you specific rights
                                    regarding your personal information. This section supplements the rest of this Privacy
                                    Policy.</p>

                                <p class="mt-20"><strong>Categories of personal information we collect.</strong> In the past
                                    12 months, we have collected the following categories of personal information:</p>
                                <ul class="mb-15" style="list-style: disc; padding-left: 25px;">
                                    <li>Identifiers, such as name, postal address, email address, phone number, and IP address.</li>
                                    <li>Customer records and commercial information, such as billing details and records of
                                        services purchased.</li>
                                    <li>Internet or other electronic network activity, such as browser type, device
                                        information, and website usage.</li>
                                    <li>Audio, electronic, or visual data, such as security system event data and video
                                        footage (if applicable to the services you use).</li>
                                </ul>
                                <p>We collect this information directly from you, automatically through your use of our
                                    website and services, and from our service providers. We use it to provide and maintain
                                    our services, process payments, communicate with you, improve our products, and comply
                                    with legal obligations. We disclose personal information to service providers
                                    (such as payment processors and installation partners) for these business purposes.</p>

                                <p class="mt-20"><strong>We do not sell or share your personal information.</strong> We do not
                                    sell personal information for monetary or other valuable consideration, and we do not
                                    share it for cross-context behavioral advertising. We do not knowingly sell or share the
                                    personal information of consumers under 16 years of age.</p>

                                <p class="mt-20"><strong>Your rights.</strong> Subject to certain exceptions, California
                                    residents have the right to:</p>
                                <ul class="mb-15" style="list-style: disc; padding-left: 25px;">
                                    <li><strong>Know/Access:</strong> request the categories and specific pieces of personal
                                        information we have collected about you, the sources, the purposes, and the
                                        categories of third parties we disclose it to.</li>
                                    <li><strong>Delete:</strong> request deletion of the personal information we have
                                        collected from you.</li>
                                    <li><strong>Correct:</strong> request correction of inaccurate personal information we
                                        maintain about you.</li>
                                    <li><strong>Opt out of sale/sharing:</strong> direct us not to sell or share your
                                        personal information (we do not do so, as stated above).</li>
                                    <li><strong>Limit use of sensitive personal information:</strong> where applicable, limit
                                        our use of sensitive personal information to permitted purposes.</li>
                                    <li><strong>Non-discrimination:</strong> exercise any of these rights without receiving
                                        discriminatory treatment, such as different pricing or service quality.</li>
                                </ul>

                                <p class="mt-20"><strong>How to exercise your rights.</strong> To submit a request, contact us
                                    by phone at <a href="tel:+18558743165">+1(855) 874-3165</a> or by email at
                                    <a href="mailto:privacy@yourdomain.com">privacy@yourdomain.com</a>. We will need to
                                    verify your identity before processing your request, typically by matching the
                                    information you provide with information we already hold. We will confirm receipt of
                                    your request within 10 business days and respond within 45 days; if we need more time
                                    (up to an additional 45 days), we will let you know.</p>
                                <p>You may also use an authorized agent to submit a request on your behalf. We may require
                                    written proof of the agent’s authorization and may ask you to verify your identity
                                    directly with us.</p>
                                <p class="mt-20"><strong>Data retention.</strong> We retain personal information only as long
                                    as reasonably necessary for the purposes described in this policy, or as required by law.</p>
                                {{-- ===== END CCPA SECTION ===== --}}

                                <p class="mt-30"><strong>5. Contact Us</strong></p>
                                <p>If you have any questions about this Privacy Policy or how we handle your personal
                                    information, please contact us:</p>
                                <p><strong>Phone:</strong> <a href="tel:+18558743165">+1(855) 874-3165</a></p>
                                <p><strong>Email:</strong> <a href="mailto:privacy@yourdomain.com">privacy@yourdomain.com</a></p>
                                <!-- <p><strong>Address:</strong> 21 Glenside Annandale, NJ, 08801</p> -->
                                <p class="mt-30">By using our services, you consent to the terms of this Privacy Policy.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection