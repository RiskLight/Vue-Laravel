import Vue from "vue";
import VueRouter from "vue-router";
import PostComponent from "./components/ViewComponents/PostComponent";
import TagsComponent from "./components/ViewComponents/TagsComponent";

Vue.use(VueRouter)

export default new VueRouter({
    mode: 'history',

    routes: [
        {
            path: '/show-dogs-list',
            component: PostComponent
        },

        {
            path: '/add-dog',
            component: TagsComponent
        }
    ]
})
