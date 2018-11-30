<template>
    <v-layout id="contactButtons" align-center justify-center row wrap>
        <v-flex class="text-xs-center d-flex align-center" xs4 lg3 v-for="socButton in socButtons" :key="socButton.name">
            <soc-contact-btn :link="socButton.link" :color="socButton.color" :name="socButton.name">{{ socButton.text }}</soc-contact-btn>
        </v-flex>
    </v-layout>
</template>

<script>
    import SocContactBtn from "./SocContactBtn";
    export default {
        name: "ContactButtons",

        components: { SocContactBtn },
        data() {
            return {
                socButtons: [
                    { name: 'twitter', color: '#1da1f2', link: 'https://twitter.com/5kr1p7', text: 'Лента твиттера' },
                    { name: 'vkontakte', color: '#45668e', link: 'https://vk.com/alexshangin', text: 'вКонтакте' },
                    { name: 'linkedin', color: '#0077b5', link: 'https://www.linkedin.com/in/shangin/', text: 'Профиль на LinkedIn' },
                    { name: 'instagram', color: '#833ab4', link: 'https://www.instagram.com/5kr1p7/', text: 'Профиль в Инстаграм' },
                    { name: 'telegram', color: '#0088cc', link: 'https://t.me/skr1p7', text: 'Написать в телеграм' },
                    { name: 'github', color: '#333', link: 'https://github.com/5kr1p7', text: 'Профиль на Гитхабе' },
                    { name: 'skype', color: '#00aff0', link: 'skype:skr1p7?call' }
                ]
            }
        }
    }
</script>

<style scoped>

</style>