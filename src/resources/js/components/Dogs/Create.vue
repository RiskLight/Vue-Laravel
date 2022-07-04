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
            <input :disabled="!isDisabled" @click.prevent="store" type="submit" class="btn btn-warning" value="Add dog">
        </div>
    </div>
</template>

<script>
import router from "../../router";

export default {
    name: "Create",

    data() {
        return {
            name: null,
            age: null,
            breed: null,
            master: null
        }
    },

    methods: {
        store() {
            axios.post('api/dogs', {
                name: this.name,
                age: this.age,
                breed: this.breed,
                master: this.master
            })
                .then(res => {
                    router.push({name: 'dogs.index'})
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
