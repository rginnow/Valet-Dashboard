import VueRouter from 'vue-router'

import Home from './pages/Home'
// import Settings from './pages/Settings'

const routes = [
    {
        path: '/',
        name: 'home',
        component: Home,
    },
    {
        path: '/settings',
        name: 'settings',
    },
];

const router = new VueRouter({
    history: true,
    mode: 'history',
    routes,
})

export default router
