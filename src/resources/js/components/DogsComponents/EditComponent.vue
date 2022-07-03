<template>

    <tr :class="this.$parent.isEdit(dog.id) ? '' : 'd-none'">
        <th scope="row">{{ dog.id }}</th>
        <td><input type="text" v-model="name" class="form-control"></td>
        <td><input type="number" v-model="age" class="form-control"></td>
        <td><input type="text" v-model="breed" class="form-control"></td>
        <td><input type="text" v-model="master" class="form-control"></td>
        <td><a @click="updateDog(dog.id)" class="btn btn-primary">Update</a></td>
        <td><a @click="closeEditDog(dog.id)" class="btn btn-warning">Close</a></td>
    </tr>

</template>

<script>
export default {
    name: "EditComponent",

    props: [
        'dog'
    ],

    data() {
        return {
            name:null,
            age: null,
            breed: null,
            master: null
        }
    },

    mounted() {
    },

    methods: {

        updateDog(id) {
            this.$parent.editDogId = null;
            console.log(this.name, this.age, this.breed, this.master)
            axios.patch(`/api/dogs/${id}`, {
                name: this.name,
                age: this.age,
                breed: this.breed,
                master: this.master
            })
                .then(res => {
                    console.log(res)
                    this.$parent.getDogs();
                })
        },

        closeEditDog() {
            this.$parent.editDogId = null;
        }

    }
}
</script>

<style scoped>

</style>
