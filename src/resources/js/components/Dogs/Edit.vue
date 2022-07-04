<template>
    <div>
        <div class="mb-3">
            <input type="text" v-model="name" class="form-control"  id="name" placeholder="Name">
        </div>
        <div class="mb-3">
            <input type="number" v-model="age" class="form-control" id="age" placeholder="Age">
        </div>
        <div class="mb-3">
            <input type="text" v-model="breed" class="form-control" id="breed" placeholder="Breed">
        </div>
        <div class="mb-3">
            <input type="text" v-model="master" class="form-control" id="master" placeholder="Master">
        </div>
        <div class="mb-3">
            <input :disabled="!isDisabled" @click.prevent="update" type="submit" class="btn btn-warning" value="Update">
        </div>
    </div>
</template>

<script>
import router from "../../router";

export default {
    name: "Edit",

    data() {
        return {
            name: null,
            age: null,
            breed: null,
            master: null
        }
    },

    mounted() {
        this.getDog()
    },

    methods: {
        getDog() {
            axios.get(`/api/dogs/${this.$route.params.id}`)
                .then(res => {
                    this.name = res.data.data.name;
                    this.age = res.data.data.age;
                    this.breed = res.data.data.breed;
                    this.master = res.data.data.master;
                })
        },

        update() {
            axios.patch(`/api/dogs/${this.$route.params.id}`, {
                name: this.name,
                age: this.age,
                breed: this.breed,
                master: this.master
            })
                .then(res => {
                    router.push({name: 'dogs.show', params: {id: this.$route.params.id}})
                })
        }
    },

    computed: {
        isDisabled() {
            return  this.name && this.age && this.breed && this.master
        }
    }
}
</script>

<style scoped>

</style>
