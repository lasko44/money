<template>
    <li>
        <a>
            <div class="row">
                <div class="col-9">
                    <h2 class="abril">{{post.title}}</h2>
                    <p v-html="post.body.slice(0,200)+'...'" class="roboto"></p>
                </div>
                <div class="col-3">
                   
                </div>
            </div>
        </a>
    </li>
</template>

<script>
export default {
    props: [
        'post'
    ],
    mounted() {
        console.log(this.post)
    },
    methods:{

    }
}
</script>
