<template>
    <v-layout align-content-center row wrap>
        <v-flex offset-md4 md4 offset-xs4 xs4>
            <v-img src="/img/construct.svg" max-height="300" contain></v-img>
        </v-flex>
        <v-flex xs12>
            <p class="text-xs-center display-1">Сайт находится в разработке.</p>
        </v-flex>
        <v-flex xs12 md4 offset-md4>
            <ContactButtons></ContactButtons>
        </v-flex>
    </v-layout>
</template>

<script>
    export default {
        name: "IndexPage"
    }
</script>

<style scoped>

</style>