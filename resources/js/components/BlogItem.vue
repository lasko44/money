<template>
    <div class="blog-item">
        <a class="m-top-2" :href="link">
            <div class="row">
                <img class="img-fluid" :src="post.url" :alt="post.title"/>
            </div>
            <div class="row">
                <h4 class="abril">{{post.title}}</h4>
                <p class="roboto">{{post.body}}</p>
            </div>
        </a>
    </div>
</template>

<script>
export default {
    props: [
        'post',
        'link'
    ],
    mounted() {
    },
    methods:{

    }
}
</script>
