@extends('layouts.app')

@section('content')
    <img src="https://via.placeholder.com/1920x500" class="img-fluid" alt="Homemade Money">
    @include('partials.sub-nav')
    <div class="content-container">
        <div class="row m-top-10">
            <div class="col-md-8">
                <h2 class="display-3 rich-green-dark abril">Latest News</h2>
            </div>
            <div class="col-md-4">
                <div class="d-flex justify-content-center">
                    <h5 class="display-6 rich-green-dark abril">Trending Topics</h5>
                </div>
                <div class="d-flex justify-content-center">
                    <div class="h-line-thin bg-blue-saphire"></div>
                </div>
            </div>
        </div>
    </div>
@endsection
