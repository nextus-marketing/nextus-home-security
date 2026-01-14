<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title> @yield(section: 'title') </title>
    <meta name="description" content="Nextus Home Security provides smart, reliable home security solutions to protect your family and property with advanced technology and 24/7 monitoring.">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="/frontend/my_img/new-logo/favicon.png">

    <!-- CSS here -->
    <link rel="stylesheet" href="/frontend/assets/css/bootstrap.css">
    <link rel="stylesheet" href="/frontend/assets/css/meanmenu.css">
    <link rel="stylesheet" href="/frontend/assets/css/animate.css">
    <link rel="stylesheet" href="/frontend/assets/css/swiper-bundle.css">
    <link rel="stylesheet" href="/frontend/assets/css/slick.css">
    <link rel="stylesheet" href="/frontend/assets/css/backtotop.css">
    <link rel="stylesheet" href="/frontend/assets/css/magnific-popup.css">
    <link rel="stylesheet" href="/frontend/assets/css/nice-select.css">
    <link rel="stylesheet" href="/frontend/assets/css/ui-icon.css">
    <link rel="stylesheet" href="/frontend/assets/css/font-awesome-pro.css">
    <link rel="stylesheet" href="/frontend/assets/css/flaticon.css">
    <link rel="stylesheet" href="/frontend/assets/css/spacing.css">
    <link rel="stylesheet" href="/frontend/assets/css/style.css">
    <link rel="stylesheet" href="/frontend/assets/css/my.css">
    <meta name="robots" content="follow, index, max-snippet:-1, max-video-preview:-1, max-image-preview:large"/>
    <link rel="canonical" href="{{ url()->current() }}" />
    
<!-- <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Organization",
  "name": "Nextus Home Security",
  "url": "https://buyhomesecurity.org/",
  "logo": "https://buyhomesecurity.org/frontend/my_img/logo/logo-1.png",
  "contactPoint": [
    {
      "@type": "ContactPoint",
      "telephone": "+1-855-832-1250",
      "contactType": "sales",
      "email": "sales@buyhomesecurity.org",
      "areaServed": "US",
      "availableLanguage": "en"
    }
  ]
}
</script> -->
</head>

<body>


    <!-- pre loader area start -->
    {{-- <div id="loading">
        <div id="loading-center">
            <div id="loading-center-absolute">
                <!-- loading content here -->
            </div>
        </div>
    </div> --}}
    <!-- pre loader area end -->
    <!-- Call Button -->
    <a href="tel:+18558321250" class="call-floating-btn" title="Call Now">
        <i class="fas fa-phone-alt"></i>
    </a>
    <!-- back to top start -->
    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>
    <!-- back to top end -->

    <!-- header start -->

    <header>
        <div class="header-notification-area black-bg pt-15 pb-15">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div class="notification-text text-center">
                                    <p class="m-0"><b>Limited Time Offer:</b> Talk To Our Security Experts &amp; Get
                                        3 Months Free Monitoring Services</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
      <div class="header-area-flat pl-25 pr-25">
         <div class="container-fluid">
            <div class="row align-items-center">
               <div class="col-xl-3 col-lg-6 col-md-5 col-7">
                  <div class="logo">
                     <a href="/"><img src="/frontend/my_img/new-logo/logo.png" alt="logo" ></a>
                  </div>
               </div>
               <div class="col-xl-6 d-none d-xl-block">
                  <div class="tp-main-menu text-center">
                     <nav id="mobile-menu">
                        <ul>
                           <li><a href="/">Home</a></li>
                           <li><a href="/#about">About Us</a></li>
                           <li><a href="/#contact">Contact Us</a></li>
                        </ul>
                     </nav>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-6 col-md-7 col-5">
                  <div class="search-main p-relative">
                     <div class="tp-header-right">
                        <a href="tel:+18558321250" class="tp-btn-2 ml-20 d-none d-md-inline-block">Get In Touch</a>
                        <a href="#" class="tp-menu-toggle tp-header-icon ml-20 d-xl-none"><i
                              class="far fa-bars"></i></a>
                     </div>
                     <div class="search-form">
                        <form method="GET">
                           
                           <button type="submit"><i class="fal fa-search"></i></button>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </header>

    <div class="tp-sidebar-menu ">
        <button class="sidebar-close"><i class="fal fa-times"></i></button>
        <div class="side-logo mb-20">
              <a href="/"><img src="/frontend/my_img/new-logo/logo.png" alt="logo" ></a>
        </div>
        <div class="mobile-menu">
            <div class="sidebar-title">
                <h3>CONTACT US</h3>
            </div>
            <ul class="sidebar-list">
                <li>21 Glenside Annandale, NJ, 08801</li>
                <li><a href="tel:+18558321250">+1-855-832-1250</a></li>
            </ul>
            <div class="tp-sidebar-social">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-dribbble"></i></a>
            </div>
        </div>
    </div>
    <div class="body-overlay"></div>


    <!-- header end -->
    @yield('content')

    <!-- footer-area-start -->
  <footer>
    <div class="footer-widget-area footer-bg pt-50 pb-10">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="logo mb-3">
                        <a href="/"><img src="/frontend/my_img/new-logo/footer-logo.png" alt="logo" style="max-width: 60% !important;"></a>
                    </div>
                    <div class="footer-widget footer-col-1 mb-50">
                        <p>
                            Nextus Home Security provides trusted security solutions for homes and businesses.
                            Explore our range of cameras, alarms, and smart safety accessories.
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer-widget footer-col-2 mb-50">
                        <h3 class="footer-widget-title">Get In Touch</h3>
                        <div class="footer-contact">
                            <div class="footer-contact-item">
                                <p>
                                    21 Glenside <br>
                                    Annandale, NJ, 08801
                                </p>
                            </div>
                            <div class="footer-contact-item">
                                <p><a href="tel:+18558321250">+1-855-832-1250</a></p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="footer-widget footer-col-3 mb-50">
                        <h3 class="footer-widget-title">Main Pages</h3>

                        <ul style="
                            list-style:none;margin:0;padding:0;
                            display:block !important;
                            -webkit-column-count:1 !important; column-count:1 !important;
                            flex-direction:column !important; flex-wrap:nowrap !important;
                            grid-template-columns:none !important;
                        ">
                            <li style="display:block !important; width:100% !important; margin:0 0 8px 0;">
                                <a href="/">Home</a>
                            </li>
                            <li style="display:block !important; width:100% !important; margin:0 0 8px 0;">
                                <a href="/#about">About Us</a>
                            </li>
                            <li style="display:block !important; width:100% !important; margin:0;">
                                <a href="/#contact">Contact Us</a>
                            </li>
                        </ul>

                    </div>
                </div>

                {{-- 
                <div class="col-lg-3 col-md-6">
                    <div class="footer-widget footer-col-4 mb-50">
                        <h3 class="footer-widget-title">Get Newsletter</h3>
                        <div class="logo">
                            <a href="index.html"><img src="/frontend/my_img/logo/logo-1.png" alt="logo" style="max-width: 65% !important;"></a>
                        </div>
                        <div class="footer-social mt-20">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-behance"></i></a>
                            <a href="#"><i class="fab fa-youtube"></i></a>
                            <a href="#"><i class="fab fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
                --}}

            </div>
        </div>
    </div>

    <div class="copyright-area theme-bg pt-20 pb-20">
        <div class="container">
            <div class="row">

                <div class="col-xl-7 col-lg-7 text-lg-start col-12 text-center">
                    <div class="copyright-text">
                        <p>Copyright © 2026 <a href="/"> Nextus Home Security</a> All Rights Reserved.</p>
                    </div>
                </div>

                <div class="col-xl-5 col-lg-5 text-lg-end col-12 text-center">
                    <div class="footer-menu">
                        <ul>
                            <li><a href="/privacy-policy">Privacy Policy</a></li>
                            <li><a href="/terms-and-condition">Terms & Condition</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<div class="modal fade" id="securityModal" tabindex="-1" aria-labelledby="securityModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content custom-modal text-center">
            <button
                type="button"
                class="btn-close"
                data-bs-dismiss="modal"
                aria-label="Close"
                style="position: absolute; top: 15px; right: 15px;">
            </button>
            <div class="mb-3">
                <img src="/frontend/my_img/new-logo/logo.png" alt="Logo" class="modal-logo">
            </div>
            <h4 class="fw-bold modal-title-text" id="securityModalLabel">Talk To Security Experts</h4>
            <p class="modal-subtext">Get 3 Months Free Monitoring Services</p>
            <div style="text-align: center; margin-top: 5px;">
                <a class="tp-btn"
                   href="tel:+18558321250"
                   style="display: inline-block; padding: 1px 39px; font-size: 19px; width: auto; min-width: 80px; border-radius: 50px;">
                    <i class="fas fa-phone-alt"></i> Call Now
                </a>
            </div>
        </div>
    </div>
</div>

    <!-- Bootstrap 5 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Auto Trigger Modal -->
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            setTimeout(function() {
                var myModal = new bootstrap.Modal(document.getElementById('securityModal'));
                myModal.show();
            }, 3000); // Delay for 3000ms = 3 seconds
        });
    </script>


    <!-- Custom CSS -->
    <style>
        .custom-modal {
            border-radius: 15px;
            padding: 30px 20px;
            background: linear-gradient(135deg, #ffffff, #f8f9fa);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
            animation: fadeInUp 0.5s ease;
        }

        .modal-logo {
            max-width: 180px;
            transition: transform 0.3s ease;
        }

        .modal-logo:hover {
            transform: scale(1.05);
        }

        .modal-title-text {
            font-size: 22px;
            color: #222;
            margin-bottom: 10px;
        }

        .modal-subtext {
            font-size: 16px;
            color: #666;
            margin-bottom: 25px;
        }

        .call-btn:hover {

            transform: translateY(-2px);
        }

        /* Animation */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>

    <!-- JS here -->
    
    <script src="/frontend/assets/js/vendor/jquery.js"></script>
    <script src="/frontend/assets/js/vendor/waypoints.js"></script>
    <script src="/frontend/assets/js/bootstrap-bundle.js"></script>
    <script src="/frontend/assets/js/meanmenu.js"></script>
    <script src="/frontend/assets/js/slick.js"></script>
    <script src="/frontend/assets/js/magnific-popup.js"></script>
    <script src="/frontend/assets/js/backtotop.js"></script>
    <script src="/frontend/assets/js/nice-select.js"></script>
    <script src="/frontend/assets/js/counterup.js"></script>
    <script src="/frontend/assets/js/isotope-pkgd.js"></script>
    <script src="/frontend/assets/js/imagesloaded-pkgd.js"></script>
    <script src="/frontend/assets/js/ajax-form.js"></script>
    <script src="/frontend/assets/js/main.js"></script>
</body>
</html>
