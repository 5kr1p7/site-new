<template>
    <v-container>
        <v-layout row wrap>
            <v-flex xs12>
                <h1>{{ cur_post.title }}</h1>
                <h4>{{ getSlug(cur_post.title) }}</h4>
                <p v-html="getMarkdown(cur_post.text)"></p>
            </v-flex>
            <v-flex xs12>
                <v-textarea
                        outline
                        cols="200" rows="30"
                        :value="input"
                        @input="update"
                        label="Markdown"></v-textarea>
            </v-flex>
            <v-flex xs12>
               <div v-html="compiledMarkdown"></div>
            </v-flex>
        </v-layout>
    </v-container>
</template>

<script>
    export default {
        name: "PostPage",

        data() {
            return {
                cur_post: { title: '', text: '' },
                input: "# Test\n```1\n1\n1\n1\n1\n1\n1\n1\n1\n1\n1\n1\n1\n1\n1\n1\n1\n1\n1\n1\n1\n1\n1\n1\n1\n```",
            }
        },

        created() {
            this.getPost()
        },

        computed: {
            compiledMarkdown: function () {
                return marked(this.input, { sanitize: true })
            }
        },

        methods: {
            update(text) {
                this.input = text
            },

            getPost() {
                window.axios.get('/api/post/'+this.$route.params.slug).then(({data}) => {
                    this.cur_post = data[0];
                });
            },

            getMarkdown(text) {
                return marked(text, { sanitize: true });
            },

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