<template>
    <v-flex d-flex xs12 md10 offset-md1 mt-3>
        <router-link :to="{ name: 'post', params: { slug: slug }}" class="post_listitem">
        <v-card>
                <v-layout>
                    <v-flex xs3 md1 hidden-xs-only class="post-smallimg">
                        <v-img :aspect-ratio="1/1" :src="'/img/posts/small/'+image_small" contain></v-img>
                    </v-flex>
                    <v-flex xs9 md11>
                        <v-card-title primary-title>
                            <div>
                                <div class="headline mb-0 post-title">{{ title }}</div>
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
        </router-link>
    </v-flex>
</template>

<script>
    export default {
        name: "Post",

        props: [ 'title', 'slug', 'partial', 'image_small' ],
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