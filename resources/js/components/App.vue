<template>
    <div id="app">
        <v-app light>
            <div>
                <toolbar></toolbar>
                <v-content class="position-ref">
                    <v-container fluid>
                        <div class="content">
                            <transition name="fade" mode="out-in">
                                <router-view v-cloak></router-view>
                            </transition>
                        </div>
                    </v-container>
                </v-content>
            </div>
        </v-app>
    </div>
</template>

<script>
    export default {
        name: "App"
    }
</script>

<style scoped>

</style>