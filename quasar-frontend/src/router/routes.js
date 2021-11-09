import admin from "src/router/admin";
import investor from "src/router/investor";

const routes = [
  {
    path: '/',
    component: () => import('layouts/LandingLayout.vue'),
    children: [
      { path: '', component: () => import('pages/public/Home') },
      { path: 'login', component: () => import('pages/Login.vue') },
      { path: 'staff-login',name:'staff:login', component: () => import('pages/public/staff/StaffLogin.vue') },
      { path: 'register', component: () => import('pages/public/RegisterContainer.vue') }
    ]
  },
 

  {...admin},
  {...investor},


  // Always leave this as last one,
  // but you can also remove it
  {
    path: '/:catchAll(.*)*',
    component: () => import('pages/Error404.vue')
  }
]


export default routes
