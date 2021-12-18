@extends('layouts.app')

@section('title')
    Money Homemade
@endsection

@section('content')
    @include('partials.home-hero')
    @include('partials.sub-nav')
    <div class="content-container">
        <div class="col-md-6">
            <div class="m-top-5">
                @include('home.home-left')
            </div>
        </div>
        <div class="col-md-6">

        </div>
    </div>
@endsection



@section('scripts')
<script>
    let div = document.getElementById('blue-section');
    window.addEventListener("resize", function() {
        console.log(div.classList);
        if (window.innerWidth < 500) {
           div.classList.remove("p-5");
            console.log(div.classList);
        }
    });
</script>

@endsection
