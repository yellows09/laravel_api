<template>
    <div class="container">
        <div class="form-group">
            {{this.post}}
            <input type="text" @blur="saveTitle" v-model="post.title" class="form-control">
        </div>
    </div>
</template>

<script>
export default {
    props: [
        'postId'
    ],
    data(){
        return{
            post: []
        }
    },
    methods:{
        saveTitle(){
            axios.post('/api/postUpdate/'+this.postId,{
                _method: 'PUT',
                title: this.post.title
            }).then(response => {
                console.log(response)
            });
        }
    },
    mounted() {
        axios.get('/api/post/'+this.postId).then(response => {
            console.log(response)
            this.post = response.data;
        });
    }
}
</script>

<style scoped>

</style>
