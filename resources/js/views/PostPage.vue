<template>
    <v-container>
        <v-layout row wrap >
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
            }
        },

        created() {
            this.getPost()
        },

        computed: {
        },

        methods: {
            update(text) {
                this.input = text
            },

            getPost() {
                window.axios.get('/api/post/'+this.$route.params.slug).then(({data}) => {
                    this.cur_post = data[0];
                    document.title = this.cur_post.title+' — AlexShangin.Ru'
                    document.head.querySelector('meta[name=description]').content = this.cur_post.partial
                    document.head.querySelector('meta[name=keywords]').content = this.cur_post.keywords

                    document.head.querySelector('meta[property="og:description"]').content = this.cur_post.partial
                    document.head.querySelector('meta[property="og:title"]').content = this.cur_post.title
                    document.head.querySelector('meta[property="og:url"]').content = document.URL
                    document.head.querySelector('meta[property="og:image"]').content = document.URL.split('/')[0]+'//'+document.URL.split('/')[2]+'/img/posts/small/'+this.cur_post.image_small
                    document.head.querySelector('meta[name="twitter:title"]').content = this.cur_post.title
                    document.head.querySelector('meta[name="twitter:description"]').content = this.cur_post.partial
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