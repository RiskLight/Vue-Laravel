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
                <th scope="col">Delete</th>
            </tr>
            </thead>
            <tbody>
            <template v-for="dog in dogs">
                <ShowComponent :dog="dog" :ref="`show_${dog.id}`"></ShowComponent>
                <EditComponent :dog="dog" :ref="`edit_${dog.id}`"></EditComponent>
            </template>

            </tbody>
        </table>
    </div>
</template>

<script>
import EditComponent from "./EditComponent"
import ShowComponent from "./ShowComponent";

export default {
    name: "IndexComponent",

    components: {
        EditComponent,
        ShowComponent
    },

    data() {
        return {
            dogs: null,
            editDogId: null,
            name: null,
            age: null,
            breed: null,
            master: null
        }
    },

    mounted() {
      this.getDogs()
    },

    methods: {
        getDogs() {
            axios.get('/api/dogs')
                .then(res => {
                    this.dogs = res.data
                })
        },

        changeEditDogId(id, name, age, breed, master) {
            this.editDogId = id;
            let editName = `edit_${id}`;
            let fullEditName = this.$refs[editName][0];
            fullEditName.name = name;
            fullEditName.age = age;
            fullEditName.breed = breed;
            fullEditName.master = master;

        },

        updateDog(id) {
            this.editDogId = null;
            console.log(this.name, this.age, this.breed, this.master)
            axios.patch(`/api/dogs/${id}`, {
                name: this.name,
                age: this.age,
                breed: this.breed,
                master: this.master
            })
                .then(res => {
                    console.log(res)
                    this.getDogs();
                })
        },

        deleteDog(id) {
            axios.delete(`/api/dogs/${id}`)
                .then(res => {
                    this.getDogs();
                })
        },

        isEdit(id) {
            return this.editDogId === id
        },

    }
}
</script>

<style scoped>

</style>
