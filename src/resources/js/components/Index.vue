<template>
    <div class="container">
        <div class="d-flex justify-content-around mb-5">
            <router-link to="/show-dogs-list" class="btn btn-success">Dogs List</router-link>
            <router-link to="/add-dog" class="btn btn-dark">Add Dog</router-link>
            <router-link to="/" class="btn btn-dark">Close</router-link>
        </div>
        <router-view></router-view>

    </div>
</template>

<script>
export default {
    name: "Index"
}
</script>

<style scoped>

</style>
