export default {
  path: "/investor",
  component: () => import("layouts/InvestorLayout.vue"),
  children: [
    { path: "", component: () => import("pages/investor/Dashboard.vue") },
    { path: "register", component: () => import("pages/investor/Register.vue") },
    // { path: "profile", component: () => import("pages/investor/Profile.vue") },
    { path: "profile", component: () => import("pages/investor/ProfileInfo.vue") },
    { path: "profile/update", name:"profile:update", component: () => import("pages/investor/ProfileEdit.vue") },
    { path: "profile/update", name:"profile:update", component: () => import("pages/investor/ProfileEdit.vue") },


    { path: 'applications/ongoing',name:'investor:ongoing', component: () => import('pages/investor/OnGoingApplications.vue') },

    // { path: "common-application/create", name:"commonall:create", component: () => import("pages/investor/CommonApplication.vue") },
    // { path: "common-application/create", name:"common:create", component: () => import("pages/investor/CommonApplication.vue") },
    { path: ":deptname/online-services", name:"common:create", component: () => import("pages/investor/services/Services.vue") },
    { path: "amc/online-services", name:"amc:services", component: () => import("pages/investor/services/Services.vue") },
    { path: "land-revenue-settlement/online-services", name:"amc:services", component: () => import("pages/investor/services/Services.vue") },
    // { path: "commerce-and-industries/online-services", name:"amc:services", component: () => import("pages/investor/services/Services.vue") },


    { path: 'applications/approved',name:'investor:approved', component: () => import('pages/investor/CompletedApplications.vue') },
    { path: 'commerce-and-industries/allotment-of-industrial-plot',name:'industries:allotment', component: () => import('pages/common/dept_services/Industries/Allotment/AllotmentApplicationForm.vue') },
    // { path: 'amc/allotment-of-industrial-plot',name:'industries:allotment', component: () => import('pages/common/dept_services/Industries/Allotment/AllotmentApplicationForm.vue') },







  ],
};
