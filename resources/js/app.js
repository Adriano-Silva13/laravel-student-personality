import './bootstrap';
import { createApp } from 'vue';
import { createRouter, createWebHistory } from 'vue-router';
import App from './App.vue';
import ExampleComponent from './components/ExampleComponent.vue';
import FormQuantidade from './components/FormQuantidade.vue';


const routes = [
    {path: '/', component: ExampleComponent },
    {path: '/form', component: FormQuantidade }
];

const router = createRouter({
    history: createWebHistory(),
    routes
})

const app = createApp(App);
app.use(router);
app.mount('#app');
