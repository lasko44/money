<nav class="bg-rich-green-dark">
    <div class="logo abril">
        <h4>
            <a href="{{route('home')}}">Homemade Money
            </a>
        </h4>
    </div>
    <ul class="nav-list">
        <li><a href="{{route('home')}}">Home</a> </li>
        <li><a href="{{route('home')}}">About</a> </li>
        <li><a href="{{route('home')}}">Blog</a> </li>
        <li><a href="{{route('login')}}">Login</a> </li>
        <li>
            <label>
                <i class="fas fa-search"></i>
                <input type="text" name="global-search" placeholder="search">
            </label>
        </li>
    </ul>
    <div onclick="navSlide()" class="burger">
        <div class="line-1"></div>
        <div class="line-2"></div>
        <div class="line-3"></div>
    </div>
</nav>

