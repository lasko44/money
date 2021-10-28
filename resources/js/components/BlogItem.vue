<template>
    <li>
    </li>
</template>

<script>
export default {
    props:[
      'title',
      'link',
      'excerpt',
      'thumbnail'
    ],
    mounted() {
        console.log('Blog Item Mounted')
    }
}
</script>
