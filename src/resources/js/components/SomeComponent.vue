<template>
    <div>
        <div>Color: {{ obj.color }}</div>
        <div>Number: {{ obj.number > 10 ? 'more' : 'less 10'}}</div>
        <div>Is published: {{ obj.isPublished ? 'Published' : 'Not Published'}} </div>
    </div>
</template>

<script>
export default {
    name: "SomeComponent",

    data() {
        return {

        }
    },

    props: ['obj'],

    mounted() {
    },

    methods: {

    }
}
</script>

<style scoped>

</style>
