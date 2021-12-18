
    <div class="h-line-extra-thin bg-rich-green-dark"></div>
    <ul class="sub-nav roboto bg-rich-green-extra-light">
        @foreach($blogCategories as $cat)
            <li><a href="{{route('blog-category.show',$cat->id)}}">{{$cat->name}}</a></li>
        @endforeach
    </ul>
    <div class="h-line-extra-thin bg-rich-green-dark"></div>

