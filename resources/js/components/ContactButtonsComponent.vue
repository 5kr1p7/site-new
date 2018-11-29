<template>
    <v-layout>
        <p id="contactButtons" class="text-xs-center d-flex align-center">
            <v-tooltip bottom v-for="socButton in socButtons" :key="socButton.name">
                <v-btn fab dark large slot="activator" :color="socButton.color" :href="socButton.link">
                    <v-icon dark>socicon-{{ socButton.name }}</v-icon>
                </v-btn>
                <span>{{ socButton.name.charAt(0).toUpperCase() + socButton.name.slice(1) }}</span>
            </v-tooltip>
        </p>
    </v-layout>
</template>

<script>
    export default {
        name: "ContactButtonsComponent",

        data() {
            return {
                socButtons: [
                    { name: 'twitter', color: '#1da1f2', link: 'https://twiiter.com/5kr1p7' },
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