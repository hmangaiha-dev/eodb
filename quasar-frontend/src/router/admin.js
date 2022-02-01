import {useStore} from "vuex";
import {Notify} from "quasar";

export default {
  path: '/admin',
  component: () => import('layouts/MainLayout.vue'),
  beforeRouteEnter: (to,from,next) => {
    const store = useStore();
    const loggedIn = store.getters['authData/isAuthenticated'];
    let userType = store.getters['authData/getUserType']
    if (!loggedIn || userType!=='staff') {
      Notify.create({
        message: "Access Denied",
        color: "negative",
        position: "top",
      });
    }
    next();
  },
  meta: {
    protected: true
  },
  children: [
    { path: '',name:'staff:dashboard', component: () => import('pages/admin/Dashboard.vue') },

    { path: 'profile',name:'profile:read', component: () => import('pages/admin/profile/Profile.vue') },

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

    // { path: 'files',name:'file:read', component: () => import('pages/admin/file/Files') },
    // { path: 'files/create',name:'file:create', component: () => import('pages/admin/file/Create') },
    // { path: 'files/incoming',name:'file:incoming', component: () => import('pages/admin/file/IncomingFiles.vue') },
    // { path: 'files/outgoing',name:'file:outgoing', component: () => import('pages/admin/file/OutgoingFiles.vue') },
    // { path: 'files/archived',name:'file:archived', component: () => import('pages/admin/file/ArchivedFiles.vue') },

    { path: 'ongoing-applications',name:'ongoing-applications:read', component: () => import('pages/admin/application/Ongoing') },
    { path: 'ongoing-applications/:id',name:'ongoing-applications:detail', component: () => import('pages/common/ApplicationDetail.vue') },
    {
      path: 'applications/:id',
      component: () => import('layouts/ApplicationLayout.vue'),
      children: [
        // {path: '', name: 'application:detail', component: () => import('pages/admin/application/detail/Index.vue')},
        {path: '', name: 'application:detail', component: () => import('pages/common/ApplicationDetail.vue')},
        {path: 'notes/create', name: 'note:create', component: () => import('pages/admin/application/detail/notes/Create.vue')},
        {path: 'notes/:note', name: 'note:detail', component: () => import('pages/admin/application/detail/notes/Detail.vue')},
      ]
    },

    { path: 'applications/create',name:'application:create', component: () => import('pages/admin/application/Create') },
    { path: 'applications/incoming',name:'application:incoming', component: () => import('pages/admin/application/Incoming.vue') },
    { path: 'applications/archived',name:'application:archived', component: () => import('pages/admin/application/Archived.vue') },
    //test
    // { path: 'files/:office_id/incoming',name:'file:incoming', component: () => import('pages/admin/file/IncomingFiles') },
    // { path: 'files/:office_id/outgoing',name:'file:outgoing', component: () => import('pages/admin/file/OutgoingFiles') },

    {
      path: 'master-data',
      component: () => import('layouts/MasterDataLayout.vue'),
      children: [
        {path: 'districts', name: 'district:read', component: () => import('pages/admin/master-data/Index')},
        {path: 'keypairs', name: 'keypairs:read', component: () => import('pages/admin/master-data/keypairs/List')},
      ]
    },
    {
      path: 'settings',
      component: () => import('layouts/SettingLayout.vue'),
      children: [
        {path: 'process-flows', name: 'process-flows:read', component: () => import('pages/admin/setting/process-flows/List.vue')},
        {path: 'application_profiles', name: 'application-profiles:read', component: () => import('pages/admin/setting/application-profiles/List.vue')},
        {path: 'application_profiles/:id/print-template', name: 'print-template:create', component: () => import('pages/admin/setting/print-template/Create.vue')},
        {path: 'application_profiles/:id/print-template/:template_id/edit', name: 'print-template:edit', component: () => import('pages/admin/setting/print-template/Create.vue')},
        {path: 'process-flows/create', name: 'process-flows:create', component: () => import('pages/admin/setting/process-flows/Create.vue')},
      ]
    },


  ]
}

