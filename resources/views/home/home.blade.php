@extends('layouts.app')

@section('title')
    Money Homemade
@endsection

@section('content')
    @include('partials.carousel')
    @include('partials.sub-nav')
    <div class="bg-extra-pale-spring p-1">
        <money-card></money-card>
    </div>
    <div class="content-container">
        <div class="row m-bottom-2">
            <div class="col-md-8">
                <h2 class="display-6 rich-green-dark abril">Latest News</h2>
                <div class="h-line-extra-thin bg-blue-saphire"></div>
            </div>
        </div>

        <div class="row">

        </div>

        <div class="row m-top-3">
            <div class="col-md-4">
                <div class="d-flex">
                    <h3 class="rich-green-dark  abril">Trending Topics</h3>
                </div>
                <div class="h-line-extra-thin bg-blue-saphire"></div>
            </div>
            <div class="row">

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
