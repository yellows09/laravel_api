<template>
    <div class="container">
        <p>
            <router-link :to="{name: 'Index'}">Все посты и категории</router-link>
            <router-link :to="{name: 'Categories'}">Категории</router-link>
            <router-link :to="{name: 'Posts'}">Посты</router-link>

<!--            <router-link to="/categories">Категории</router-link>-->
<!--            <router-link to="/">Все статьи и категории</router-link>-->
        </p>
        <div>
            <router-view></router-view>
        </div>
    </div>
</template>

<script>
    export default {

    }
</script>
