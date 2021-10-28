<div class="category-nav-container">
    <h3 class="roboto fw-bold ">Other Categories</h3>
    <ul class="category-nav">
       @foreach($categories as $item)
           <li><a href="{{route('blog-category.show',$item)}}">
                   {{$item->name}}
               </a></li>
        @endforeach
    </ul>
</div>

