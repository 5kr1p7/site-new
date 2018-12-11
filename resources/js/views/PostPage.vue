<template>
    <v-container>
        <v-layout row wrap>
            <v-flex xs12>
                <h1 class="content-title display-1">{{ cur_post.title }}</h1>
            </v-flex>
            <v-flex xs12>
                <div class="content-body" v-html="getMarkdown(cur_post.text)"></div>
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
                input: "# Test\n```php\n<?php\nprint(\"Test\");\n?>\n```",
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

    code {
        text-indent: 0 !important;
    }

    h1 {
        padding-bottom: 20px;
    }
</style>