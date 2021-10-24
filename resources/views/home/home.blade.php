@extends('layouts.app')

@section('content')
    @include('partials.carousel')
    @include('partials.sub-nav')
    <div class="content-container">
        <div class="row m-top-10 m-bottom-10">
            <div class="col-md-8">
                <h2 class="display-3 extra-pale-spring abril">Latest News</h2>
            </div>
            <div class="col-md-4">
                <div class="d-flex justify-content-center">
                    <h5 class="display-6 extra-pale-spring abril">Trending Topics</h5>
                </div>
                <div class="d-flex justify-content-center">
                    <div class="h-line-thin bg-blue-saphire"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-extra-pale-spring p-1">
        <div class="content-container m-top-15 m-bottom-15 bg-rich-green-extra-light py-1 rounded-3">
            <div class="row m-top-5">
                <div class="d-flex justify-content-center">
                    <h4 class="abril display-4">Money Made</h4>
                </div>
            </div>
            <div class="row">
                <div class="d-flex justify-content-center">
                    <div class="h-line-extra-thin bg-extra-pale-spring"></div>
                </div>
            </div>
            <div class="row m-top-3 m-bottom-3">
                <div class="d-flex justify-content-center">
                    <h3 class="abril display-3">$1,000</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="d-flex justify-content-center">
                        <div class="h-line-extra-thin bg-rich-green-dark"></div>
                    </div>
                </div>
            </div>
            <div class="row m-top-2">
                <div class="d-flex justify-content-center">
                    <p class="small roboto rich-green-dark">As of: </p>
                </div>
            </div>
            <div class="row">
                <div class="d-flex justify-content-center">
                    <p class="small roboto rich-green-dark">
                        <script> document.write(new Date().toLocaleDateString()); </script>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="row bg-blue-saphire m-top-10 ">
        <div class="content-container p-5">
            <div class="row">
                <div class="d-flex justify-content-center">
                    <div class="col-5">
                            <div class="row">
                                <div class="d-flex justify-content-start">
                                    <h3 class="display-5 abril rich-green">Lorem Ipsum</h3>
                                </div>
                            </div>
                            <div class="row">
                                <div class="d-flex justify-content-start">
                                    <p class="medium extra-pale-spring">
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
                                    <h3 class="display-5 abril rich-green">Lorem Ipsum</h3>
                                </div>
                            </div>
                            <div class="row">
                                <div class="d-flex justify-content-start">
                                    <p class="medium extra-pale-spring">
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
