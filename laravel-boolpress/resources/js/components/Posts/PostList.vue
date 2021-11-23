<template>
    <section id="post-list">
        <h1 class="text-center">Posts</h1>
        <Post v-for="post in posts" :key="post.id" :post="post"/>
    </section>
</template>

<script>

import Post from './Post';

    export default {
        name: 'PostList',
        data() {
            return {
                posts: [],
            }
        },
        components : {
            Post,
        },
        methods: {
           getPostList(){
               axios.get('http://127.0.0.1:8000/api/posts/')
               .then((res) => {
                   console.log(res.data.posts)
                   this.posts = res.data.posts;
               })
               .catch((err)=>{
                   console.error(err);
               })
           }
        },

        mounted(){
            this.getPostList();
        }
    }
</script>