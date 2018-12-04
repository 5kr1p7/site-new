<template>
    <v-layout row wrap>
        <v-flex xs8 offset-xs2>
            <h2>Список постов</h2>
        </v-flex>
        <v-flex xs8 offset-xs2>
            <v-list v-for="post in posts" :key="post.id">
                <v-list-tile @click="">
                    <v-list-tile-action>
                        <v-icon color="green darken-2">visibility</v-icon>
                    </v-list-tile-action>
                    <v-list-tile-content>
                        <v-list-tile-title>{{ post.title }}</v-list-tile-title>
                        <v-list-tile-sub-title>{{ post.created_at }} by {{ post.user_id }}</v-list-tile-sub-title>
                    </v-list-tile-content>
                    <v-list-tile-action>
                        <v-icon color="grey">visibility_off</v-icon>
                    </v-list-tile-action>
                    <v-list-tile-action>
                        <v-icon>edit</v-icon>
                    </v-list-tile-action>
                    <v-list-tile-action>
                        <v-icon color="red darken-2">delete</v-icon>
                    </v-list-tile-action>
                </v-list-tile>
            </v-list>
        </v-flex>
    </v-layout>
</template>

<script>
    export default {
        name: "AdminPostList",

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
    .v-list__tile__title {
        font-weight: 500;
    }
</style>