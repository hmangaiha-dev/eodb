import admin from "src/router/admin";
import investor from "src/router/investor";
import dev from "src/router/dev";
import {checkAuth} from './investor'
import { api } from "src/boot/axios";





export const checkAlreadyLoggedIn = async(to, from, next) => {
  console.log('auth check isloggedin');
  await api
    .get("/user")
    .then((res) => {

     next({
       name: 'home'
     });
    })
    .catch((err) => {
      console.log('unauthenticated');
      next()
    });
};



const routes = [
  {
    path: '/',
    component: () => import('layouts/LandingLayout.vue'),
    children: [
      { path: '', name:'home', component: () => import('pages/public/Home') },
      { path: 'login',  name: 'investor:login', component: () => import('pages/public/Login.vue') },
      { path: 'staff-login',name:'staff:login', component: () => import('pages/public/staff/StaffLogin.vue') },
      { path: 'register', beforeEnter: checkAlreadyLoggedIn, component: () => import('pages/public/RegisterContainer.vue') },
      {
        path: ":deptname?/online-services",
        name: "common:show",
        component: () => import("pages/investor/services/Services.vue"),
      },
    ]
  },


  {...admin},
  {...investor},
  {...dev},


  // Always leave this as last one,
  // but you can also remove it
  {
    path: '/403',
    name: 'access-denied',
    component: () => import('pages/common/error/AccessDenied.vue')
  } ,{
    path: '/:catchAll(.*)*',
    name: 'invalid',
    component: () => import('pages/Error404.vue')
  }
]


export default routes
