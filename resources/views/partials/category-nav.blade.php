<div class="category-nav-container">
    <h5 class="roboto fw-bold m-top-5">Other Categories</h5>
    <ul class="category-nav m-top-3">
       @foreach($categories as $item)
           <li class="m-bottom-3 roboto fw-bold"><a href="{{route('blog-category.show',$item)}}">
                   {{$item->name}}
               </a></li>
        @endforeach
    </ul>
</div>

