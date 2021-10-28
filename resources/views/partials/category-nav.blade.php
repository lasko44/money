<div class="category-nav-container">
    <h3 class="roboto fw-bold ">Other Categories</h3>
    <ul class="category-nav m-top-3">
       @foreach($categories as $item)
           <li class="m-bottom-3 roboto fw-bold"><a href="{{route('blog-category.show',$item)}}">
                   {{$item->name}}
               </a></li>
        @endforeach
    </ul>
</div>

