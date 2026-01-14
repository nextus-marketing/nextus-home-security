@extends('layouts.frontend')

@section('title')
    404 Not Found | Nextus Home Security
@endsection

@section('content')
    <div class="tp-process-area grey-bg pt-115 pb-90">
        <div class="container">
            <div class="row text-center">
                <div class="col-xl-12">
                    <div class="tp-section-box tp-section-box-2 p-relative mb-45">
                        <!-- Changed line here -->
                        <span class="tp-section-subtitle d-inline-block pre mb-10">404</span>

                        <h2 class="tp-section-title">
                            Something Went Wrong 
                        </h2>
                        <p>
                            We apologize, but it seems like there's been an error. Our team has been notified, and we are working
                        diligently to resolve the issue.
                        </p>

                        <!-- Smaller button -->
                        <div class="contact__btn">
                            <a class="tp-btn" href="/"
                               style="display:inline-block; padding:0px 25px; font-size:16px; width:auto; min-width:150px;">
                                Back To Home <i class="fal fa-long-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
