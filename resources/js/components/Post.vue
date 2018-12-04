<template>
    <v-flex d-flex xs12 md10 offset-md1 mt-3>
        <v-card>
                <v-layout>
                    <v-flex xs2 md1 class="post-smallimg">
                        <v-img src="https://cdn.vuetifyjs.com/images/cards/foster.jpg" width="100px" contain></v-img>
                    </v-flex>
                    <v-flex xs10 md11>
                        <v-card-title primary-title>
                            <div>
                                <div class="headline mb-0 post-title"><router-link :to="{ name: 'post', params: { slug: slug }}">{{ title }}</router-link>
                                </div>
                                <div class="post-partial">
                                    <p>
                                        <slot></slot>
                                    </p>
                                </div>
                            </div>

                        </v-card-title>
                    </v-flex>
                </v-layout>
        </v-card>
    </v-flex>
</template>

<script>
    export default {
        name: "Post",

        props: [ 'title', 'slug', 'partial' ],
    }
</script>

<style scoped>
    .headline {
        margin-top: -15px;
    }

    .post-smallimg {
        padding: 15px;
    }

    .post-title a {
        text-decoration: none;
        color: black;
    }

    .post-partial {
        padding-top: 10px;
    }
</style>