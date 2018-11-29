<template>
    <v-layout id="contactButtons" align-center justify-center row wrap>
        <v-flex class="text-xs-center d-flex align-center" xs4 v-for="socButton in socButtons" :key="socButton.name">
            <v-tooltip bottom>
                <v-btn fab dark large slot="activator" :color="socButton.color" :href="socButton.link" target="_blank">
                    <v-icon dark>socicon-{{ socButton.name }}</v-icon>
                </v-btn>
                <span>{{ socButton.name.charAt(0).toUpperCase() + socButton.name.slice(1) }}</span>
            </v-tooltip>
        </v-flex>
    </v-layout>
</template>

<script>
    export default {
        name: "ContactButtonsComponent",

        data() {
            return {
                socButtons: [
                    { name: 'twitter', color: '#1da1f2', link: 'https://twitter.com/5kr1p7' },
                    { name: 'vkontakte', color: '#45668e', link: 'https://vk.com/alexshangin' },
                    { name: 'linkedin', color: '#0077b5', link: 'https://www.linkedin.com/in/shangin/' },
                    { name: 'instagram', color: '#833ab4', link: 'https://www.instagram.com/5kr1p7/' },
                    { name: 'telegram', color: '#0088cc', link: 'https://t.me/skr1p7' },
                    { name: 'github', color: '#333', link: 'https://github.com/5kr1p7' },
                    { name: 'skype', color: '#00aff0', link: 'skype:skr1p7?chat' }
                ]
            }
        }
    }
</script>

<style scoped>

</style>