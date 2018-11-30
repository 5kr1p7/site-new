<template>
    <v-toolbar flat fixed elevation-0 class="transparent">
        <v-spacer></v-spacer>

        <v-toolbar-items>
            <v-btn v-for="item in menuitems" :to="item.link" :key="item.title" flat>{{ item.title }}</v-btn>
        </v-toolbar-items>
    </v-toolbar>
</template>

<script>
    export default {
        name: "Toolbar",

        data() {
            return {
                menuitems: [
                    { title: 'Блог', link: '/' },
                    { title: 'Контакты', link: '/contacts' },
                    { title: 'Резюме', link: '/resume' }
                ]
            }
        }
    }
</script>

<style scoped>

</style>
