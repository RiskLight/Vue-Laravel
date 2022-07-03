<template>
    <div>
        <div class="mb-3">
            <input type="text" class="form-control" v-model="name" id="name" placeholder="Name">
        </div>
        <div class="mb-3">
            <input type="number" class="form-control" v-model="age" id="age" placeholder="Age">
        </div>
        <div class="mb-3">
            <input type="text" class="form-control" v-model="breed" id="breed" placeholder="Breed">
        </div>
        <div class="mb-3">
            <input type="text" class="form-control" v-model="master" id="master" placeholder="Master">
        </div>
        <div class="mb-3">
            <input @click="addDog" type="submit" class="btn btn-warning" value="Add dog">
        </div>
    </div>
</template>

<script>
export default {
    name: "CreateComponent",

    components: {
     },

    data() {
        return {
            name: null,
            age: null,
            breed: null,
            master: null,
            obj: {
                color: 'yellow',
                number: 50,
                isPublished: false
            }
        }
    },

    mounted() {

    },

    methods: {
        addDog() {
            axios.post('/api/dogs', {
                name: this.name,
                age: this.age,
                breed: this.breed,
                master: this.master
            })
                .then(res => {
                    this.name = null;
                    this.age = null;
                    this.breed = null;
                    this.master = null
                    this.$parent.$refs.index.getDogs()
                })
        }
    }
}
</script>

<style scoped>

</style>
