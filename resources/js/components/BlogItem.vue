<template>
    <div class="blog-item m-bottom-5">
        <a class="" :href="link">
            <div class="row">
                <img class="img-fluid" :src="post.url" :alt="post.title"/>
            </div>
            <div class="row">
                <h4 class="abril">{{post.title}}</h4>
                <p v-html="post.body.slice(5,200)+'...'" class="roboto"></p>
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
