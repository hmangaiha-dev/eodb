
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

      { path: 'roles', name:'roles', component: () => import('pages/admin/role/Roles') },
      { path: 'roles/create',name:'role:create', component: () => import('pages/admin/role/Create') },
      { path: 'roles/:id',name:'role:edit', component: () => import('pages/admin/role/Create') },
      { path: 'offices', name:'office', component: () => import('pages/admin/office/Offices') },
      { path: 'offices', name:'office:create', component: () => import('pages/admin/office/Create') },
      { path: 'staffs', name:'staffs', component: () => import('pages/admin/staff/Staffs') },
      { path: 'staffs/create', name:'staff:create', component: () => import('pages/admin/staff/Create') },
      { path: 'posting',name:'posting', component: () => import('pages/admin/staff/Posting') },
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
