<template>
    <v-container>
        <v-layout row wrap>
            <v-flex xs12>
                <h1>Администрирование</h1>
            </v-flex>
            <v-flex xs12>
                <h2>Блог</h2>
                <ul>
                    <li><router-link :to="{ name: 'adminPostsList' }">Список постов</router-link></li>
                    <li><router-link :to="{ name: 'adminPostCreate' }">Создать пост</router-link></li>
                </ul>
            </v-flex>
        </v-layout>
    </v-container>
</template>

<script>
    export default {
        name: "AdminIndex"
    }
</script>

<style scoped>
    .container {
        padding-top: 0;
    }

    h2 {
        padding-top: 50px;
    }
</style>