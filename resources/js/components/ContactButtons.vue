<template>
    <v-layout id="contactButtons" align-center justify-center row wrap>
        <v-flex class="text-xs-center d-flex align-center" xs4 lg3 v-for="socButton in socButtons" :key="socButton.name">
            <soc-contact-btn :link="socButton.link" :color="'#'+socButton.color" :name="socButton.name">{{ socButton.text }}</soc-contact-btn>
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
                socButtons: []
            }
        },
        mounted() {
            this.getContacts()
        },
        methods: {
            getContacts() {
                window.axios.get('/api/contacts').then(({data}) => {
                    this.socButtons = data
                });
            }
        }
    }
</script>

<style scoped>

</style>