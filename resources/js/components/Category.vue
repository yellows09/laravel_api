<template>
    <div v-for="category in categories.data">
        {{ category.category_name }}
    </div>
</template>

<script>
    export default{
        data(){
            return{
                categories: []
            }
        },

        mounted(){
            axios.get('/api/allData').then(response=>{
                this.categories = response.data;
            })
        }
    }
</script>
