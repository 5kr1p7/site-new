<template>
    <v-layout row wrap>
        <v-flex xs12 md10 offset-md1>
            <h2 id="title">Список постов</h2>
        </v-flex>
        <v-flex xs12 md10 offset-md1>
            <v-list v-for="post in posts" :key="post.id">
                <v-list-tile>
                    <v-list-tile-action>
                        <v-icon color="green darken-2" @click="showPost(post.slug)">visibility</v-icon>
                    </v-list-tile-action>
                    <v-list-tile-content @click="editPost(post.slug)">
                        <v-list-tile-title>{{ post.title }}</v-list-tile-title>
                        <v-list-tile-sub-title>{{ post.created_at }} by {{ post.user_id }}</v-list-tile-sub-title>
                    </v-list-tile-content>
                    <v-list-tile-action>
                        <v-icon color="grey">visibility_off</v-icon>
                    </v-list-tile-action>
                    <v-list-tile-action>
                        <v-icon color="red darken-2" @click="deletePost(post)">delete</v-icon>
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
                posts: [],
            }
        },
        created() {
            this.getPosts()
        },
        methods: {
            showPost(slug) {
                this.$router.push({ name: 'post', params: { slug: slug }})
            },

            getPosts() {
                window.axios.get('/api/posts')
                    .then(({data}) => {
                        this.posts = data
                    })
                    .catch(error => {
                        console.log(error.response)
                });
            },

            deletePost(post) {
                var index = this.posts.indexOf(post)

                window.axios.delete('/api/posts/'+post.id)
                    .then(response => {
                        Vue.delete(this.posts, index)
                    })
                    .catch(error => {
                        console.log('Error', error.response)
                    });
            },

            editPost(slug) {
                this.$router.push({ name: 'adminPostEdit', params: { slug: slug }})
            }
        }
    }
</script>

<style scoped>
    .v-list__tile__title {
        font-weight: 500;
    }

    #title {
        padding-left: 20px;
    }
</style>