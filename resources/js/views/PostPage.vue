<template>
    <div>
        <h1>{{ cur_post.title }}</h1>
        <p v-html="compiledMarkdown"></p>
    </div>
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

        mounted() {
            this.getPost()
        },

        methods: {
            getPost() {
                window.axios.get('/api/post/'+this.$route.params.slug).then(({data}) => {
                    this.cur_post = data[0]
                });
            }
        }
    }
</script>

<style scoped>
    p {
        text-indent: 20px;
    }
</style>