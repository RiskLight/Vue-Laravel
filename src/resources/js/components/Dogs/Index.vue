<template>
    <div>
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
            <tr v-for="dog in dogs">
                <th scope="row">{{ dog.id }}</th>
                <td>
                    <router-link :to="{name: 'dogs.show', params: {id: dog.id}}">{{ dog.name }}</router-link>
                </td>
                <td>{{ dog.age }}</td>
                <td>{{ dog.breed }}</td>
                <td>{{ dog.master }}</td>
                <td>
                    <router-link :to="{name: 'dogs.edit', params: {id: dog.id} }" class="btn btn-info">Edit
                    </router-link>
                </td>
                <td>
                    <a @click="deleteDog(dog.id)" class="btn btn-outline-danger">Delete</a>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
export default {
    name: "Index",
    data() {
        return {
            dogs: null
        }
    },

    mounted() {
        this.getDogs()
    },

    methods: {
        getDogs() {
            axios.get('/api/dogs')
                .then(res => {
                    this.dogs = res.data.data
                })
        },

        deleteDog(id) {
            axios.delete(`/api/dogs/${id}`)
                .then(res => {
                    this.getDogs()
                })
        }
    }
}
</script>

<style scoped>

</style>
