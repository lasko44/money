<template>
    <nav>
        <div class="logo abril">
            <h4>
                <a href="/home">Homemade Money
                </a>
            </h4>
        </div>
        <ul class="nav-list">
            <li><a href="/home">Home</a></li>
            <li><a href="/about">About</a></li>
            <li><a href="/blog">Blog</a></li>
            <li><a href="/ideas">Ideas</a></li>
            <li><a href="/login">Login</a> </li>
        </ul>
        <div @click="navSlide()" class="burger">
            <div class="line-1"></div>
            <div class="line-2"></div>
            <div class="line-3"></div>
        </div>
    </nav>
</template>

<script>
export default {
    methods:{
        navSlide(){
            const nav = document.querySelector('.nav-list');
            nav.classList.toggle('nav-list-active');
        }
    }
}
</script>
