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
    { path: "common-application/create", name:"common:create", component: () => import("pages/investor/CommonApplication.vue") },


  ],
};
