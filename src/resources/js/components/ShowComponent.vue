<template>

    <tr :class="this.$parent.isEdit(dog.id) ? 'd-none' : ''">
        <th scope="row">{{ dog.id }}</th>
        <td>{{ dog.name }}</td>
        <td>{{ dog.age }}</td>
        <td>{{ dog.breed }}</td>
        <td>{{ dog.master }}</td>
        <td><a href="#" @click.prevent="changeEditDogId(dog.id, dog.name, dog.age, dog.breed, dog.master)"
               class="btn btn-secondary">Edit</a></td>
        <td><a href="#" @click.prevent="deleteDog(dog.id)" class="btn btn-danger">Delete</a></td>
    </tr>

</template>

<script>

export default {
    name: "ShowComponent",

    components: {},

    data() {
        return {

        }
    },

    props: [
        'dog'
    ],

    mounted() {
    },

    methods: {
        changeEditDogId(id, name, age, breed, master) {
            this.$parent.editDogId = id;
            let editName = `edit_${id}`;
            let fullEditName = this.$parent.$refs[editName][0];
            fullEditName.name = name;
            fullEditName.age = age;
            fullEditName.breed = breed;
            fullEditName.master = master;

        },

        deleteDog(id) {
            axios.delete(`/api/dogs/${id}`)
                .then(res => {
                    this.$parent.getDogs();
                })
        },

    }
}
</script>

<style scoped>

</style>
