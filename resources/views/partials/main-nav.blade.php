<nav class="bg-rich-green-dark">
    <div class="logo">
            <a href="{{route('home')}}">
                <img src="{{asset('/images/money-logo.png')}}" alt="money-homemade" height="75"/>
            </a>
    </div>
    <ul class="nav-list">
        <li class="py-1"><a href="{{route('home')}}">Home</a> </li>
        <li class="py-1"><a href="{{route('about')}}">About</a> </li>
        <li class="py-1"><a href="{{route('home')}}">Blog</a> </li>
        <li>
            <label>
                <i class="fas fa-search fa-lg blue-saphire"></i>
                <input class="rounded-pill px-4 py-1" type="text" name="global-search" placeholder="search">
            </label>
        </li>
    </ul>
    <div onclick="navSlide()" class="burger">
        <div class="line-1"></div>
        <div class="line-2"></div>
        <div class="line-3"></div>
    </div>
</nav>

