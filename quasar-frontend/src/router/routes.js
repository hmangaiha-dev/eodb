import admin from "src/router/admin";
import investor from "src/router/investor";

const routes = [
  {
    path: '/',
    component: () => import('layouts/LandingLayout.vue'),
    children: [
      { path: '', component: () => import('pages/public/Home') },
      { path: 'login', component: () => import('pages/Login.vue') },
      { path: 'register', component: () => import('pages/public/RegisterContainer.vue') }
    ]
  },
  {
    path: '/admin',
    component: () => import('layouts/MainLayout.vue'),
    children: [
      { path: '', component: () => import('pages/Index.vue') },
      { path: 'departments', component: () => import('pages/admin/EODB_department/Department.vue') },
      { path: 'department-profiles', component: () => import('pages/admin/EODB_department/DepartmentProfile.vue') },
      { path: 'department-info', component: () => import('pages/admin/EODB_department/DepartmentInfo.vue') },


      { path: 'industries', component: () => import('pages/admin/services/Industries.vue') },
      { path: 'fire', component: () => import('pages/admin/services/Fire.vue') },



      { path: 'roles', component: () => import('pages/admin/role/Roles') },
      { path: 'offices', component: () => import('pages/admin/office/Offices') },
      { path: 'staffs', component: () => import('pages/admin/staff/Staffs') },
      // { path: 'posting', component: () => import('pages/admin/staff/Posting') },
      { path: 'roles', name:'role:read', component: () => import('pages/admin/role/Roles') },
      { path: 'roles/create',name:'role:create', component: () => import('pages/admin/role/Create') },
      { path: 'roles/:id',name:'role:edit', component: () => import('pages/admin/role/Create') },
      { path: 'offices', name:'office:read', component: () => import('pages/admin/office/Offices') },
      { path: 'offices', name:'office:create', component: () => import('pages/admin/office/Create') },
      { path: 'staffs', name:'staff:read', component: () => import('pages/admin/staff/Staffs') },
      { path: 'staffs/create', name:'staff:create', component: () => import('pages/admin/staff/Create') },
      { path: 'postings/create',name:'posting:create', component: () => import('pages/admin/posting/Posting') },
      { path: 'postings',name:'posting:read', component: () => import('pages/admin/posting/Postings') },
  {...admin},
  {...investor},
    ]
  },


  // Always leave this as last one,
  // but you can also remove it
  {
    path: '/:catchAll(.*)*',
    component: () => import('pages/Error404.vue')
  }
]


export default routes
