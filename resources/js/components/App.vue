<template>
    <div>
        <p class="header alink">
            <router-link active-class="active-menu" exact :to="{name: 'Categories'}">Категории</router-link>
            <router-link active-class="active-menu" exact :to="{name: 'Posts'}">Посты и категории</router-link>
            <router-link active-class="active-menu" exact :to="{name: 'createPost'}">Создать пост</router-link>
        </p>
        <div>
            <router-view></router-view>
        </div>
    </div>
</template>

<script>
export default {}
</script>
<style>
.header {
    border: solid black;
    height: 100px;
    width: 800px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin-left: 50px;
    padding-left: 25px;
    padding-right: 25px;
    font-size: 30px;
}
a{
    text-decoration: none;
}
a:hover{
    color:red;
}
</style>
