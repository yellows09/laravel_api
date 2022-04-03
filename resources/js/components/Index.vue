<template>
    test data1111
    <div v-for="data in data">
        {{ data.title}}
    </div>
<!--    {{ data }}-->
</template>

<script>
export default {
    data(){
        return{
            data: []
        }
    },

    mounted(){
        axios.get('/posts').then(response=>{
            this.data = response.data;
        })
    }
}
</script>
