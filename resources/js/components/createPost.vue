<template>
    <form method="post" @submit.prevent="submit_form">
        <input type="text" v-model="fields.title" placeholder="Заголовок">
        <input type="text" v-model="fields.description" placeholder="Тело поста" name = 'description'>
        <input type="text" v-model="fields.category_name" placeholder="Название категории" name = 'category_name'>
        <button type="submit">Создать</button>
    </form>
</template>

<script>
export default {
    data() {
        return{
            fields: {
                title: '',
                description: '',
                category_name: '',
            }
        }
    },
    methods: {
        submit_form(){
            axios.post('api/createPost', this.fields)
            .then(response => {
                this.$router.push('/')
            });
        }
    }
}
</script>

<style scoped>

</style>
