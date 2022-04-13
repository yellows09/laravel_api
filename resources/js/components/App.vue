<template>
    <div class="container">
        <p>
            <router-link active-class="active-menu" exact :to="{name: 'Index'}">Все посты и категории</router-link>
            <router-link active-class="active-menu" exact :to="{name: 'Categories'}">Категории</router-link>
            <router-link active-class="active-menu" exact :to="{name: 'Posts'}">Посты</router-link>
            <router-link active-class="active-menu" exact :to="{name: 'createPost'}">Создать пост</router-link>
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
