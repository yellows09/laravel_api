https://hot.exporntoons.net/watch/544189716_456239110
<template>
    <div>
        <div v-for="post in posts">
            <div v-for="p in post.posts">
                <div>
                    {{ p.title }} <br>
                    {{ p.description }}
                    <br>
                    --------------------------------------------
                </div>
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
            axios.get('/api/allData',{
                headers: {
                    "Accept": "application/json"
                }
            }).then(response=>{
                this.posts = response.data;
                console.log(this.posts)
            })
        }
    }
</script>
<style>

</style>
