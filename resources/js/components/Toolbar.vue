<template>
    <div id="toolbar">
        <v-navigation-drawer v-model="drawer" temporary absolute>
            <v-toolbar flat>
                <v-list>
                    <v-list-tile>
                        <v-list-tile-title class="title">
                            AlexShangin.Ru
                        </v-list-tile-title>
                    </v-list-tile>
                </v-list>
            </v-toolbar>

            <v-divider></v-divider>

            <v-list dense class="pt-0">
                <v-list-tile v-for="item in menuitems" :to="item.link" :key="item.title" >
                    <v-list-tile-action>
                        <v-icon>{{ item.icon }}</v-icon>
                    </v-list-tile-action>

                    <v-list-tile-content>
                        <v-list-tile-title>{{ item.title }}</v-list-tile-title>
                    </v-list-tile-content>
                </v-list-tile>
            </v-list>
        </v-navigation-drawer>

        <v-toolbar flat fixed elevation-0 class="transparent" clipped-left>
            <v-toolbar-side-icon class="hidden-sm-and-up" @click.stop="drawer = !drawer"></v-toolbar-side-icon>
            <v-spacer></v-spacer>

            <v-toolbar-items class="hidden-xs-only">
                <v-btn v-for="item in menuitems" :to="item.link" :key="item.title" flat>{{ item.title }}</v-btn>
            </v-toolbar-items>
        </v-toolbar>
    </div>
</template>

<script>
    export default {
        name: "Toolbar",

        data() {
            return {
                drawer: false,
                menuitems: [
                    { title: 'Главная', icon: 'home', link: '/' },
                    { title: 'Блог', icon: 'subject', link: '/blog' },
                    { title: 'Контакты', icon: 'perm_contact_calendar', link: '/contacts' },
                    { title: 'Резюме', icon: 'assignment_turned_in', link: '/resume' }
                ]
            }
        }
    }
</script>

<style scoped>

</style>
