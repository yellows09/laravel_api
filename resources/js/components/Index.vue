<template>
    <div v-for="post in posts.data">
<!--        <div v-for="postInfo in post.posts">-->
<!--            {{postInfo.title}}-->
<!--        </div>-->
        Категория: {{ post.category_name }} <br>
        Посты:
        <div v-for="p in post.posts">
            {{ p.title }}
        </div>
        <br>
        -----------------------
    </div>
<!--    {{ data }}-->
</template>

<script>
export default {
    data(){
        return{
            posts: []
        }
    },

    mounted(){
        axios.get('/api/posts').then(response=>{
            this.posts = response.data;
        })
    }
}
</script>
