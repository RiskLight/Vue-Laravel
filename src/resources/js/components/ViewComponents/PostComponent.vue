<template>
    <div>
        <IndexComponent ref="index"></IndexComponent>
    </div>
</template>

<script>
import IndexComponent from "../DogsComponents/IndexComponent";
export default {
    name: "PostComponent",
    data() {
        return {

        }
    },

    components: {
        IndexComponent
    }
}
</script>
