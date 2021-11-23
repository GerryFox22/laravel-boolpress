<template>
    <div class="container p-5">
        <PostList />
    </div>
</template>

<script>

import PostList from "./Posts/PostList";

    export default {
        name: 'App',
        data() {
            return {

            }
        },
        components : {
            PostList,
        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
