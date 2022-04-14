<template>
    <div>
        <div v-for="post in posts.data">
            <div v-for="p in post.posts">
                {{ p.title }} <br>
                {{ p.description }}
                <br>
                --------------------------------------------
            </div>
        </div>
    </div>
</template>

<script>
    export default{
        data(){
            return{
                posts: []
            }
        },

        mounted(){
            axios.get('/api/allData').then(response=>{
                this.posts = response.data;
            })
        }
    }
</script>
