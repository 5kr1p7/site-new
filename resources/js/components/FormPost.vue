<template>
    <v-form ref="form" v-model="valid" lazy-validation>
        <v-layout row wrap>
            <v-flex xs12>
                <v-text-field v-model="post.title" label="Название" :rules="titleRules" @input="changeInput" required></v-text-field>
            </v-flex>

            <v-flex xs12>
                <v-text-field v-model="post.slug" label="Slug" :rules="slugRules" required></v-text-field>
            </v-flex>

            <v-flex xs12>
                <v-textarea v-model="post.text" outline label="Текст поста" :rules="textRules" required></v-textarea>
            </v-flex>

            <v-flex xs12>
                <v-btn :disabled="!valid" @click="submit">Отправить</v-btn>
            </v-flex>
        </v-layout>
    </v-form>
</template>

<script>
    export default {
        name: "FormPost",

        data() {
            return {
                valid: false,

                titleRules: [
                    v => !!v || 'Введите название',
                ],

                textRules: [
                    v => !!v || 'Введите текст поста',
                ],

                slugRules: [
                    v => !!v || 'Введите название',
                    v => /^[a-z0-9\-]+$/.test(v) || 'Slug содержит некорректные символы',
                ],

                formUrl: '',

                post: {},
                method: 'post',
            }
        },

        created() {
            if (this.$route.params.slug) {
                this.getPost(this.$route.params.slug)
            }
        },

        methods: {
            getPost(id) {
                window.axios.get('/api/post/'+id).then(({data}) => {
                    this.post = data[0];
                });
            },

            changeInput(text) {
                this.post.slug = slug(text, {lower: true})
            },

            submit () {
                switch(this.$route.name) {
                    case 'adminPostCreate':
                        this.formUrl = '/api/posts'
                        this.method = 'post'
                        break
                    case 'adminPostEdit':
                        this.method = 'patch'
                        this.formUrl = '/api/posts/'+this.$route.params.slug
                        break
                }

                if (this.$refs.form.validate()) {
                    axios({
                            method: this.method,
                            url: this.formUrl,
                            data: this.post,
                    })
                        .then(response => {
                            console.log(response)
                            this.$router.push({ name: 'adminPostsList' })
                        })
                        .catch(error => {
                            console.log(error.response)
                        })
                }
            },
        }
    }
</script>

<style scoped>

</style>