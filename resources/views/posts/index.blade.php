@extends('layouts.app')
@section('content')
    <div class="d-flex justify-content-center">
        <form method="POST" action="{{route('post.store')}}" enctype='multipart/form-data'>
            @csrf
            <input type="file" name="image">
            <button type="submit">Submit</button>
        </form>
    </div>
@endsection
