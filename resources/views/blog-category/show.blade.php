@extends('layouts.app')

@section('title')
 {{$blogCategory->name}}
@endsection

@section('content')
    <div class="p-6">
        <div class="row">
            <div class="content-container py-5">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="row">
                            <h1 class="display-5 fw-bolder rich-green-dark abril">
                                {{$blogCategory->name}}
                            </h1>
                            <div class="h-line-thin bg-blue-saphire"></div>
                        </div>
                        <div class="row m-top-2">
                            <p class="roboto rich-green-dark">Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                Quam viverra orci sagittis eu volutpat odio. Aliquam
                                eleifend mi in nulla posuere sollicitudin.</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="d-flex justify-content-center">
                            <img class="img-fluid rounded-circle brave" src="{{asset('/images/brave.png')}}" height="200" width="200" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="h-line-extra-thin bg-rich-green-dark m-bottom-2"></div>
        <div class="h-line-extra-thin bg-rich-green-dark"></div>
    </div>
    <div class="content-container m-top-3">
        <div class="row">
            <div class="col-3 border-right-rgd">
                @include('partials.category-nav')
            </div>
            <div class="col-9">
                <div class="content-container m-top-5">
                    <ol>

                    </ol>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')

@endsection
