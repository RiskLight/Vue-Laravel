<template>
    <div>
        <CreateComponent></CreateComponent>
        <IndexComponent ref="index"></IndexComponent>
    </div>
</template>

<script>
import CreateComponent from "./CreateComponent";
import IndexComponent from "./IndexComponent";
export default {
    name: "PostComponent",
    data() {
        return {
            dogs: null
        }
    },

    mounted() {
        console.log(this.$parent);
    },

    methods: {

        parentLog() {
            console.log('this is parent log')
        }

    },
    computed: {

    },

    components: {
        CreateComponent,
        IndexComponent
    }
}
</script>
