@extends('layouts.app')
@section('title'){{'Money Homemade | '.$post->title}} @endsection
@section('content')
    <div class="post-hero">
        <img class="img-fluid" src="{{asset($post->url)}}" alt="{{$post->title}}"/>
    </div>
    <div class="content-container">
        <div class="row">
            <h1 class="m-top-5 m-bottom-5 abril rich-green-dark">{{$post->title. ' | '.$post->sub_title}}</h1>
        </div>
        <div class="row">
            <div class="col-md-10">
                <div class="post-text m-top-5">
                    {!! $post->body !!}
                </div>
            </div>
            <div class="col-md-2 border-right-rgd">
                <h5 class="roboto fw-bold m-top-5">Related Posts</h5>
                <ul class="category-nav m-top-3">
                    @foreach($post->related() as $item)
                        <li class="m-bottom-3 roboto fw-bold"><a href="{{route('post.show',$item->id)}}">
                                {{$item->title}}
                            </a></li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>

@endsection
