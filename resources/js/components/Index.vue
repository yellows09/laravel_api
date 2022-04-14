<template>
    <div>
        <div v-for="post in posts.data">
            Категория: {{ post.category_name }} <br>
            Посты:
            <a href="" class="card-body">
                <div v-for="p in post.posts">
                    <router-link class="card-body" cactive-class="active-menu" exact :to="{name: 'showPost', params: {postId: p.id}}">
                        {{ p.title }}
                    </router-link>
                </div>
            </a>
            <br>
            <button v-on:click="delete_post">Удалить</button>
            <br>
            -----------------------
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            posts: []
        }
    },

    mounted() {
        axios.get('/api/posts').then(response => {
            this.posts = response.data;
        });
    },
    methods: {
        delete_post() {
            axios.post('/api/deletePost')
                .then(response => {
                    // this.$router.push('/');
                    console.log(response)
                })
        }
    }
}
</script>
