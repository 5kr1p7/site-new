<template>
    <v-layout id="blogPosts" row wrap>
        <post v-for="post in posts" :key="post.id" :title="post.title" :slug="post.slug">{{ post.partial }}</post>
    </v-layout>
</template>

<script>
    export default {
        name: "BlogPage",
        data() {
            return {
                posts: {},
            }
        },
        created() {
            this.getPosts()
        },
        methods: {
            getPosts() {
                window.axios.get('/api/posts').then(({data}) => {
                    this.posts = data
                });
            }
        }
    }
</script>

<style scoped>

</style>