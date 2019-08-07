@extends("layouts.master")

@section("title")
Home
@endsection

@push('css')
<style>
    .img-relative {
        position: relative;
        text-align: center;
        color: white;
        filter: brightness(50%);
    }

    .centered {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }

</style>
@endpush

@section("conte nt")

<div class="parallax home1"></div>

<!-- Banner2 -->
<section class="">
    <div class="container-fluid pl-0">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <img src="{{ asset('assets/images/home-3.png') }}" alt="" class="img-fluid w-100">
            </div>
            <div class="col-lg-6">
              <h1 class="font-weight-bold">KHAS JAWA TIMUR</h1>
              <p class="mt-5">
                 Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
              </p>
              <a href="#" class="btn btn-link">MENU</a>
              <!-- <img src="{{ asset('assets/images/home2.png') }}" alt="" class="img-fluid"> -->
            </div>
        </div>
    </div>
</section>
@endsection
