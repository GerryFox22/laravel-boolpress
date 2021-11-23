<template>
    
    <div class="card">
        <div class="card-body">
            <h5 class="card-title ">{{ post.title }}</h5>
            <p class="card-text"> {{post.content}} </p>
            <p> <strong>Scritto da:</strong>  {{ post.author }}</p>
            
        </div>
    </div>
    
</template>

<script>


    export default {
        name: 'Post',
        
        props : ['post'],

        mounted() {
            
        }
    }
</script>