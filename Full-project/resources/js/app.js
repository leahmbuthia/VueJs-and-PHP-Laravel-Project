import './bootstrap';
import 'admin-lte/plugins/jquery/jquery.min.js'
import 'admin-lte/plugins/bootstrap/js/bootstrap.bundle.min.js'
import 'admin-lte/dist/js/adminlte.min.js?v=3.2.0'
import {createApp} from 'vue/dist/vue.esm-bundler.js';
import {createRouter, createWebHistory} from 'vue-router'
import Routes from './routes.js'


const app = createApp({App});

const router = createRouter({
    routes: Routes,
    history: createWebHistory(),
});



app.use(router);


app.mount('#app');