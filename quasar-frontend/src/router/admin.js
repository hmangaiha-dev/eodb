export default {
  path: '/admin',
  component: () => import('layouts/MainLayout.vue'),
  children: [
    { path: '', component: () => import('pages/Index.vue') },
    { path: 'department-info', component: () => import('pages/admin/EODB_department/DepartmentInfo.vue') },

    { path: 'roles', name:'role:read', component: () => import('pages/admin/role/Roles') },
    { path: 'roles/create',name:'role:create', component: () => import('pages/admin/role/Create') },
    { path: 'roles/:id',name:'role:edit', component: () => import('pages/admin/role/Create') },
    { path: 'offices', name:'office:read', component: () => import('pages/admin/office/Offices') },
    { path: 'offices', name:'office:create', component: () => import('pages/admin/office/Create') },
    { path: 'staffs', name:'staff:read', component: () => import('pages/admin/staff/Staffs') },
    { path: 'staffs/create', name:'staff:create', component: () => import('pages/admin/staff/Create') },
    { path: 'postings/create',name:'posting:create', component: () => import('pages/admin/posting/Posting') },
    { path: 'postings',name:'posting:read', component: () => import('pages/admin/posting/Postings') },

    { path: 'files',name:'file:read', component: () => import('pages/admin/file/Create') },
    { path: 'files/create',name:'file:create', component: () => import('pages/admin/file/Files') },
    { path: 'files/:office_id/files',name:'file:edit', component: () => import('pages/admin/posting/Postings') },
    //test
    { path: 'files/:office_id/incoming',name:'file:incoming', component: () => import('pages/admin/file/IncomingFiles') },
    { path: 'files/:office_id/outgoing',name:'file:outgoing', component: () => import('pages/admin/file/OutgoingFiles') },

    { path: 'applications/new',name:'application:new', component: () => import('pages/admin/application/Application') },
    { path: 'applications/verified',name:'application:verified', component: () => import('pages/admin/application/Verified') },
    { path: 'applications/approved',name:'application:approved', component: () => import('pages/admin/application/Approved') },
  ]
}

