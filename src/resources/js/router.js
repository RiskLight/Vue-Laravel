import Vue from "vue";
import VueRouter from "vue-router";


Vue.use(VueRouter)

export default new VueRouter({
    mode: 'history',

    routes: [
        {
            path: '/dogs', component: () => { return import('./components/Dogs/Index')},
            name: 'dogs.index'
        },

        {
            path: '/dogs/create', component: () => { return import('./components/Dogs/Create')},
            name: 'dogs.create'

        },

        {
            path: '/dogs/:id/edit', component: () => { return import('./components/Dogs/Edit')},
            name: 'dogs.edit'

        },

        {
            path: '/dogs/:id', component: () => { return import('./components/Dogs/Show')},
            name: 'dogs.show'

        }
    ]
})
