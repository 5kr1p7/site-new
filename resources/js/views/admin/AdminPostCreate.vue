<template>
    <v-layout row wrap>
        <v-flex xs8 offset-xs2>
            <h2 id="title">Создание поста</h2>
        </v-flex>
        <v-flex xs8 offset-xs2>
            <form-post></form-post>
        </v-flex>
    </v-layout>
</template>

<script>
    import FormPost from "../../components/FormPost";
    export default {
        name: "AdminPostCreate",
        components: {FormPost}
    }
</script>

<style scoped>

</style>