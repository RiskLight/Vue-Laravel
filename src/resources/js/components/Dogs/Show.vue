<template>
    <div v-if="dogs">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Age</th>
                <th scope="col">Breed</th>
                <th scope="col">Master</th>
                <th scope="col">Edit</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>{{this.dogs.id}}</td>
                <td>{{ this.dogs.name }}</td>
                <td>{{ this.dogs.age }}</td>
                <td>{{ this.dogs.breed }}</td>
                <td>{{ this.dogs.master }}</td>
                <td>
                    <router-link :to="{name: 'dogs.edit', params: {id: this.dogs.id} }" class="btn btn-info">Edit</router-link>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
export default {
    name: "Show",

    data() {
        return {
            dogs: null
        }
    },

    mounted() {
        this.getDog()
    },

    methods: {
        getDog() {
            axios.get(`/api/dogs/${this.$route.params.id}`)
                .then(res => {
                    console.log(res)
                    this.dogs = res.data.data;
                })
        },
    }
}
</script>

<style scoped>

</style>
