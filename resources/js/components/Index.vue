<template>
    <div>
        <div v-for="post in posts.data">
            Категория: {{ post.category_name }} <br>
            Посты:
            <div v-for="p in post.posts">
                {{ p.title }}
            </div>
            <br>
            -----------------------
        </div>
        <!--    {{ data }}-->
    </div>
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
