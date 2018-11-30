<template>
    <v-tooltip bottom>
        <v-btn fab dark large slot="activator" :color="color" :href="link" target="_blank">
            <v-icon dark>socicon-{{ name }}</v-icon>
        </v-btn>
        <span>
            {{ $slots.default[0].text.length ? $slots.default[0].text : name | capitalize }}
        </span>
    </v-tooltip>
</template>

<script>
    export default {
        name: "SocContactBtn",

        props: [ 'color', 'link', 'name' ],

        filters: {
            capitalize: function (value) {
                if (!value) return ''
                value = value.toString()
                return value.charAt(0).toUpperCase() + value.slice(1)
            }
        }
    }
</script>

<style scoped>

</style>