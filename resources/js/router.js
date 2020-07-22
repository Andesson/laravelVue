import Vue from 'vue'
import Router from 'vue-router'
Vue.use(Router)

//user
import user from  './components/user/User'
//produto
import produto from  './components/produto/indexComponent'

const routes = [
    {
        path:  '/new-user',
        name: 'newuser',
        component: user
    },

    //vue produto
    {
        path:  '/produto',
        name: 'produto',
        component: produto
    },
]


export default new Router({
    mode:"history",
    routes
})
