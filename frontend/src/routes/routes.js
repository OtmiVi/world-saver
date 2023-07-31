import WordList from "@/components/WordList.vue";
import AddWord from "@/components/AddWord.vue";
import {createRouter, createWebHistory} from "vue-router";

const routes = [
    {
        name: 'WordList',
        path: '/',
        component: WordList
    },
    {
        name: 'AddWord',
        path: '/add',
        component: AddWord
    }
];

const router = createRouter({
    history: createWebHistory(),
    routes
})

export default router;