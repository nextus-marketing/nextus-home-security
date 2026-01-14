<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <title>My Dashboard</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="handheldfriendly" content="true" />
    <meta name="MobileOptimized" content="width" />
    <meta name="description" content="Mordenize" />
    <meta name="author" content="" />
    <meta name="keywords" content="Mordenize" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link id="themeColors" rel="stylesheet" href="/backend/dist/css/style.min.css" /> -->

    <!-- Font Awesome for eye icon -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        .btn-primary {
            --bs-btn-color: #fff !important;
            --bs-btn-bg: #3a8395 !important;
            --bs-btn-border-color: #3a8395 !important;
            --bs-btn-hover-color: #fff !important;
            --bs-btn-hover-bg: #217286 !important;
            --bs-btn-hover-border-color: #217286 !important;
            --bs-btn-focus-shadow-rgb: 220, 53, 69 !important;
            --bs-btn-active-color: #fff !important;
            --bs-btn-active-bg: #217286 !important;
            --bs-btn-active-border-color: #217286 !important;
            --bs-btn-active-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125) !important;
            --bs-btn-disabled-color: #fff !important;
            --bs-btn-disabled-bg: #3a8395 !important;
            --bs-btn-disabled-border-color: #3a8395 !important;
        }

        .position-relative .toggle-password {
            position: absolute;
            top: 50%;
            right: 15px;
            transform: translateY(-50%);
            cursor: pointer;
            color: #999;
        }
    </style>
</head> -->

<!-- <body>
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed">
        <div class="position-relative overflow-hidden radial-gradient min-vh-100">
            <div class="position-relative z-index-5">
                <div class="row">
                    <div class="col-xl-7 col-xxl-8">
                        <a href="./index.html" class="text-nowrap logo-img d-block px-14 py-9 w-100"></a>
                        <div class="d-none d-xl-flex align-items-center justify-content-center"
                            style="height: calc(100vh - 80px);">
                            <img src="/backend/dist/images/backgrounds/login-security.svg" alt="" class="img-fluid" width="500">
                        </div>
                    </div>
                    <div class="col-xl-5 col-xxl-4">
                        <div
                            class="authentication-login min-vh-100 bg-body row justify-content-center align-items-center p-4">
                            <div class="col-sm-8 col-md-6 col-xl-9">
                                <div class="text-center">
                                    <img src="/frontend/my_img/logo/logo-2.png" width="180" alt="" />
                                    <br /><br />
                                    <h2 class="mb-3 fs-7 fw-bolder">Welcome to <br /> <span style="color: #3a8395">Buy Home Security</span>
                                    </h2>
                                    <p class=" mb-9">Your Admin Dashboard</p>
                                </div>
                                <form method="POST" action="{{ route('login') }}">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="email" class="form-label">E-Mail</label>
                                        <input type="email" class="form-control" name="email" id="email" />
                                    </div>
                                    <div class="mb-4">
                                        <label for="password" class="form-label">Password</label>
                                        <div class="position-relative">
                                            <input type="password" class="form-control pe-5" id="password" name="password" placeholder="Password">
                                            <i class="fa-solid fa-eye toggle-password" id="togglePassword"></i>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary w-100 py-8 mb-4 rounded-2">Sign In</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->

    <!-- Toggle Password Script -->
    <!-- <script>
        const togglePassword = document.getElementById('togglePassword');
        const passwordInput = document.getElementById('password');

        togglePassword.addEventListener('click', function () {
            const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
            passwordInput.setAttribute('type', type);

            this.classList.toggle('fa-eye');
            this.classList.toggle('fa-eye-slash');
        });
    </script> -->

    <!-- Existing Scripts -->
    <!-- <script src="/backend/dist/libs/jquery/dist/jquery.min.js"></script>
    <script src="/backend/dist/libs/simplebar/dist/simplebar.min.js"></script>
    <script src="/backend/dist/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/backend/dist/js/app.min.js"></script>
    <script src="/backend/dist/js/app.init.js"></script>
    <script src="/backend/dist/js/app-style-switcher.js"></script>
    <script src="/backend/dist/js/sidebarmenu.js"></script>
    <script src="/backend/dist/js/custom.js"></script>
</body>

</html> -->
