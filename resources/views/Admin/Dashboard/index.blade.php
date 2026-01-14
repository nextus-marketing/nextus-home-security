@extends('layouts.admin')
@section('title') Dashboard @endsection
@section('content')
{{-- <div class="owl-carousel counter-carousel owl-theme"> --}}
    <div class="item">
        <div class="card border-0 zoom-in bg-light-warning shadow-none">
            <div class="card-body">
                <div class="text-center">
                    <img src="/backend/dist/images/svgs/icon-briefcase.svg" width="50" height="50" class="mb-3" alt="" />
                    <p class="fw-semibold fs-3 text-warning mb-1">Total Blogs</p>
                    <h5 class="fw-semibold text-warning mb-0">{{$blogs_count}}</h5>
                </div>
            </div>
        </div>
    </div>

@endsection