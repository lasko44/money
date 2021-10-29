@extends('layouts.app')

@section('title')
    Money Homemade
@endsection

@section('content')
    @include('partials.carousel')
    @include('partials.sub-nav')

    <div class="content-container m-top-5">
        <div class="row">
            <div class="col-md-4">
                <div class="row m-bottom-2">
                    <div class="col-md-12">
                        <h2 class="display-6 rich-green-dark abril">Latest News</h2>
                        <div class="h-line-extra-thin bg-blue-saphire"></div>
                    </div>
                </div>

                <div class="row m-top-5">
                    @foreach($latestNews as $post)
                        <blog-item  :post="{{$post}}" :link="'{{route('post.show',$post->id)}}'"></blog-item>
                    @endforeach
                </div>
            </div>
            <div class="col-md-8">
                <div class="row">
                    <div class="content-container">
                        <money-card></money-card>
                    </div>

                </div>
                <div class="row m-top-2">
                    <div class="col-md-12">
                        <div class="px-4 m-left-2">
                            <h3 class="rich-green-dark m-top-5 abril">Trending Topics</h3>
                            <div class="h-line-extra-thin bg-blue-saphire"></div>
                        </div>
                        <div class="row m-top-2">
                            <div class="d-flex justify-content-start">
                                <ol class="trending-list roboto">
                                    @foreach($trending as $post)
                                        <li class="m-top-1">{{$post->title}}</li>
                                    @endforeach
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                @foreach($main as $post)
                <div class="row">
                    <div class="d-flex justify-content-center">
                            <blog-item class="m-top-2"  :post="{{$post}}" :link="'{{route('post.show',$post->id)}}'"></blog-item>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

    </div>
    <div class="row bg-blue-saphire m-top-10 ">
        <div class="content-container py-4" id="blue-section">
            <div class="row">
                <div class="d-flex justify-content-center">
                    <div class="col-5">
                            <div class="row">
                                <div class="d-flex justify-content-start">
                                    <h4 class="display-6 abril rich-green">Lorem Ipsum</h4>
                                </div>
                            </div>
                            <div class="row">
                                <div class="d-flex justify-content-start">
                                    <p class=" extra-pale-spring">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                        Cursus risus at ultrices mi tempus imperdiet nulla malesuada pellentesque.
                                        Massa tincidunt dui ut ornare lectus sit amet est.
                                    </p>
                                </div>
                            </div>
                        </div>
                    <div class="col-1">
                            <div class="v-line bg-extra-pale-spring"></div>
                        </div>
                    <div class="col-5">
                            <div class="row">
                                <div class="d-flex justify-content-start">
                                    <h4 class="display-6 abril rich-green">Lorem Ipsum</h4>
                                </div>
                            </div>
                            <div class="row">
                                <div class="d-flex justify-content-start">
                                    <p class="extra-pale-spring">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                        Cursus risus at ultrices mi tempus imperdiet nulla malesuada pellentesque.
                                        Massa tincidunt dui ut ornare lectus sit amet est.
                                    </p>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
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
