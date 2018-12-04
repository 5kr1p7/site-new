<template>
    <v-container>
        <v-layout row wrap>
            <v-flex xs12>
                <h1>{{ cur_post.title }}</h1>
                <p v-html="compiledMarkdown"></p>
                <h4>{{ getSlug(cur_post.title) }}</h4>
            </v-flex>
        </v-layout>
    </v-container>
</template>

<script>
    export default {
        name: "PostPage",

        data() {
            return {
                cur_post: {title: '', text: ''},
            }
        },

        computed: {
            compiledMarkdown: function () {
                return marked(this.cur_post.text, { sanitize: true })
            }
        },

        created() {
            this.getPost()
        },

        methods: {
            getPost() {
                window.axios.get('/api/post/'+this.$route.params.slug).then(({data}) => {
                    this.cur_post = data[0]
                });

            getSlug(title) {
                return slug(title, { lower: true });
            }
        }
    }
</script>

<style scoped>
    .container {
        padding-top: 0px;
    }

    p {
        text-indent: 20px;
    }

    h1 {
        padding-bottom: 20px;
    }
</style>