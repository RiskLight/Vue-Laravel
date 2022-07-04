<template>
    <div>
        <div class="container d-flex justify-content-around">
            <router-link :to="{name: 'dogs.index'}" class="btn btn-success">Dogs List</router-link>
            <router-link :to="{name: 'dogs.create'}" class="btn btn-warning">Create Dog</router-link>
            <router-link to="/" class="btn btn-info">Close</router-link>
        </div>
        <div class="container">
            <router-view></router-view>
        </div>
    </div>
</template>

<script>
export default {
    name: "App"
}
</script>

<style scoped>

</style>
