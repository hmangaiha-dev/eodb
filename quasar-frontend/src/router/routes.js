
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
      { path: 'departments', component: () => import('pages/admin/EODB_department/DepartmentInfo.vue') },
      { path: 'department-profiles', component: () => import('pages/admin/EODB_department/DepartmentProfile.vue') },
      { path: 'roles', component: () => import('pages/admin/role/Roles') },
      { path: 'users', component: () => import('pages/admin/user/Users') },
      

      { path: 'users', component: () => import('pages/admin/user/Users') },
      {name:'create-user', path: 'users/create', component: () => import('pages/admin/user/UserContainer') },
    ]
  }, {
    path: '/investor',
    component: () => import('layouts/InvestorLayout.vue'),
    children: [
      { path: '', component: () => import('pages/investor/Dashboard.vue') }
    ]
  },{
    path: '/department',
    component: () => import('layouts/DepartmentLayout.vue'),
    children: [
      { path: '', component: () => import('pages/department/Dashboard.vue') }
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
