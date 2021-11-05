export default {
  path: '/admin',
  component: () => import('layouts/MainLayout.vue'),
  children: [
    { path: '',name:'staff:dashboard', component: () => import('pages/Index.vue') },

    { path: 'roles', name:'role:read', component: () => import('pages/admin/roles/List') },
    { path: 'roles/create',name:'role:create', component: () => import('pages/admin/roles/Create') },
    { path: 'roles/:id',name:'role:edit', component: () => import('pages/admin/roles/Edit') },

    { path: 'offices', name:'office:read', component: () => import('pages/admin/office/List') },
    { path: 'offices/create', name:'office:create', component: () => import('pages/admin/office/Create') },
    { path: 'offices/:id', name:'office:edit', component: () => import('pages/admin/office/Edit') },

    { path: 'staffs', name:'staff:read', component: () => import('pages/admin/staff/List') },
    { path: 'staffs/create', name:'staff:create', component: () => import('pages/admin/staff/Create') },
    { path: 'staffs/:id', name:'staff:edit', component: () => import('pages/admin/staff/Edit') },

    { path: 'postings',name:'posting:read', component: () => import('pages/admin/postings/StaffPostings') },
    { path: 'postings/create',name:'posting:create', component: () => import('pages/admin/postings/Posting') },

    { path: 'files',name:'file:read', component: () => import('pages/admin/file/Create') },
    { path: 'files/create',name:'file:create', component: () => import('pages/admin/file/Files') },
    //test
    { path: 'files/:office_id/incoming',name:'file:incoming', component: () => import('pages/admin/file/IncomingFiles') },
    { path: 'files/:office_id/outgoing',name:'file:outgoing', component: () => import('pages/admin/file/OutgoingFiles') },

    { path: 'applications/new',name:'application:new', component: () => import('pages/admin/application/Application') },
    { path: 'applications/verified',name:'application:verified', component: () => import('pages/admin/application/Verified') },
    { path: 'applications/approved',name:'application:approved', component: () => import('pages/admin/application/Approved') },



    {
      path: 'master-data',
      component: () => import('layouts/MasterDataLayout.vue'),
      children: [
        {path: 'districts', name: 'district:read', component: () => import('pages/admin/master-data/Index')},
        {path: 'keypairs', name: 'keypairs:read', component: () => import('pages/admin/master-data/keypairs/List')},
      ]
    }
  ]
}

