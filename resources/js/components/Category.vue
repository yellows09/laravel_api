<template>
    <div id="main">
        <div id = 'test' v-for="category in categories.data">
            <div class="categories">
                {{ category.category_name }}
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            categories: []
        }
    },

    mounted() {
        axios.get('/api/allData').then(response => {
            this.categories = response.data;
        })
    }
}
</script>

<style>
.categories {
    display: flex;
    align-items: center;
    justify-content: center;
    border: solid red;
    height: 90px;
    width: 200px;
    text-align: center;
}
#test{
    display: flex;
    align-items: center;
    justify-content: space-between;
    border: solid red;
    height: 90px;
    width: 200px;
}
#main{
    display: flex;
    flex-wrap: wrap;
    justify-content: space-around;
    margin-top: 50px;
}
</style>
