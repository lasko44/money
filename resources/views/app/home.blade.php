@extends('layouts.app')

@section('title')
    Money Homemade
@endsection

@section('content')
    @include('partials.home-hero')
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
            <div class="col-1"></div>
            <div class="col-md-7 m-top-10">
                <div class="row">
                    <div class="content-container">
                        <money-card></money-card>
                    </div>

                </div>
                <div class="row m-top-5 m-bottom-5">
                    <div class="col-md-12">
                        <div class="m-left-2">
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
                <div class="row ">
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
                                    <h4 class="display-6 abril rich-green">I'm not an Entrepreneur</h4>
                                </div>
                            </div>
                            <div class="row">
                                <div class="d-flex justify-content-start">
                                    <p class=" extra-pale-spring">
                                       I know there are a million websites, videos, and "entrepreneurs", telling
                                        you that if you pay them enough money, they will give you a key to a new
                                        mansion and Lamborghini. I'm not here to sell you that dream, in fact I'm not
                                        here to sell you any thing. I want to make some extra cash with minimal effort
                                        from my home. I'm taking you on that journey.
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
                                    <h4 class="display-6 abril rich-green">Does my method work?</h4>
                                </div>
                            </div>
                            <div class="row">
                                <div class="d-flex justify-content-start">
                                    <p class="extra-pale-spring">
                                        I'm going to be completely honest. I have no idea. I'm just a normal person
                                        that wants some extra cash. There are a lot of websites and apps that claim
                                        they can give a little extra cash. Those sites really mean a little, plus they take
                                        more effort than it is worth and they have minimum withdrawals. I'm going to
                                        test the best ways to make extra money from home.
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
