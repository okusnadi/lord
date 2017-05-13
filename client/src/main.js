// The Vue build version to load with the `import` command
// (runtime-only or standalone) has been set in webpack.base.conf with an alias.
import Vue from 'vue'
import App from './App'
import VueRouter from 'vue-router'
import VueResource from 'vue-resource'

Vue.use(VueRouter)
Vue.use(VueResource);
Vue.filter("formatTime", function(value){
  var year=value.getFullYear();
  var month=value.getMonth()+1;
  var date=value.getDate();
  return year+"-"+month+"-"+date
})

Vue.http.options.root = "http://coolmeet.app/api"
Vue.router = new VueRouter({
    hashbang: false,
    linkActiveClass: 'active',
    mode: 'history',
    base: __dirname,
    routes: [{
      path: '/admin/users',
      name: 'user',
      component: require('./components/user/Index.vue'),
      meta: {auth: true}
    },{
        path: '/login',
        name: 'login',
        component: require('./components/Login.vue'),
        meta: {auth: false}
    }, {
        path: '/account',
        name: 'account',
        component: require('./components/pages/Account.vue'),
        meta: {auth: true}
    }, {
        path: '/login/:type',
        name: 'oauth2-type',
        component: require('./components/pages/Oauth2.vue')
    }, {
        path: '/register',
        name: 'register',
        component: require('./components/pages/Register.vue'),
        meta: {auth: false}
    }, {
        path: '/oauth1',
        name: 'oauth1',
        component: require('./components/pages/Oauth1.vue')
    }, {
        path: '/oauth2',
        name: 'oauth2',
        component: require('./components/pages/Oauth2.vue')
    }, {
        path: '/',
        name: 'index',
        component: require('./components/user/Index.vue'),
        meta: {auth: true}
    }, {
        path: '/async',
        name: 'async',
        component: function(resolve) { require(['./components/pages/Async.vue'], resolve); }
    }, {
        path: '/admin',
        name: 'admin',
        component: require('./components/home/Index.vue'),
        meta: {auth: 'admin'},
        children: [{
            path: 'products',
            name: 'admin-products',
            component: require('./components/pages/admin/Products.vue'),
            children: [{
                path: ':product_id',
                name: 'admin-product',
                component: require('./components/pages/admin/Product.vue'),
                children: [{
                    path: 'info',
                    name: 'admin-product-info',
                    component: require('./components/pages/admin/ProductInfo.vue'),
                    meta: {auth: undefined}
                }, {
                    path: 'media',
                    name: 'admin-product-media',
                    component: require('./components/pages/admin/ProductMedia.vue')
                }]
            }]
        }]
    }, {
        path: '/users',
        name: 'users',
        component: require('./components/pages/Users.vue'),
        meta: {auth: ['admin']}
    }, {
        path: '/404',
        name: 'error-404',
        component: require('./components/pages/404.vue')
    }, {
        path: '/403',
        name: 'error-403',
        component: require('./components/pages/403.vue')
    }, {
        path: '/502',
        name: 'error-502',
        component: require('./components/pages/502.vue')
    }]
});

// Vue.http.options.root = 'http://homestead.app';

// Vue Auth
// Vue.use(require('./index.js'), {
//     auth: require('./drivers/auth/bearer.js'),
//     http: require('./drivers/http/vue-resource.1.x.js'),
//     // http: require(f'../../drivers/http/axios.1.x.js'),
//     router: require('./drivers/router/vue-router.2.x.js'),
//     rolesVar: 'role',
//     facebookOauth2Data: {
//         clientId: '196729390739201'
//     },
//     googleOauth2Data: {
//         clientId: '337636458732-tatve7q4qo4gnpfcenbv3i47id4offbg.apps.googleusercontent.com'
//     }
// });
Vue.use(require('@websanova/vue-auth'), {
  auth: require('@websanova/vue-auth/drivers/auth/bearer.js'),
  http: require('@websanova/vue-auth/drivers/http/vue-resource.1.x.js'),
  router: require('@websanova/vue-auth/drivers/router/vue-router.2.x.js')
});

var component = require('./App.vue');

component.router = Vue.router;

new Vue(component).$mount('#app');
