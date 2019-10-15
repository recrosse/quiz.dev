import Vue from 'vue'
import VueRouter from 'vue-router'
import BootstrapVue from 'bootstrap-vue'

Vue.use(VueRouter);
Vue.use(BootstrapVue);


import App from './components/App.vue'
import 'bootstrap/dist/css/bootstrap.css'
import 'bootstrap-vue/dist/bootstrap-vue.css'

import TheContent from './components/TheContent.vue'


import TheContentQuiz from './components/TheContentQuiz.vue'
import TheContentResults from './components/TheContentResults.vue'
import TheContentResultsEdit from './components/TheContentResultsEdit.vue'
const router = new VueRouter({
    mode: 'history',
    base: '/',
    linkActiveClass: '',
    linkExactActiveClass: '',
    routes: [
        {
            path: '/',
            component: TheContent,
            children: [
                {
                    path: '/',
                    name: 'the-content-quiz',
                    component: TheContentQuiz
                },
                {
                    path: '/results',
                    name: 'the-content-results',
                    component: TheContentResults
                },
                {
                    path: '/results/edit/:id',
                    name: 'the-content-results-edit',
                    component: TheContentResultsEdit,
                    props:true
                }
            ]
        },

    ],
});

const app = new Vue({
    el: '#app',
    router,
    components: {App},
});