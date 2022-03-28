import admin from "src/router/admin";
import investor from "src/router/investor";
import dev from "src/router/dev";
// import { checkAuth } from "./investor";
import { api } from "src/boot/axios";
// import service from "src/router/service";
// import test from "src/router/service";

const checkAlreadyLoggedIn = async (to, from, next) => {
  // console.log("auth check isloggedin", next);
  await api
    .get("/user")
    .then((res) => {
      console.log('authenticated');
      next({
        name: "home",
      });
      return
    })
    .catch((err) => {
      console.log('catch');
      next();
      // return;
    })
    .finally(()=>{
      // next();
    })
};

const routes = [
  {
    path: "/",
    component: () => import("layouts/LandingLayout.vue"),
    children: [
      { path: "", name: "home", component: () => import("pages/public/Home") },
      {
        path: "login",
        beforeEnter: checkAlreadyLoggedIn,
        name: "investor:login",
        component: () => import("pages/public/Login.vue"),
      },
      {
        path: "forgot-password",
        // beforeEnter: checkAlreadyLoggedIn,
        name: "investor:forgot-password",
        component: () => import("pages/public/ForgotPassword"),
      },
      {
        path: "reset-password/:token",
        // beforeEnter: checkAlreadyLoggedIn,
        name: "investor:new-password",
        component: () => import("pages/public/NewPassword"),
      },
      {
        path: "staff-login",
        // beforeEnter: checkAlreadyLoggedIn,
        name: "staff:login",
        component: () => import("pages/public/staff/StaffLogin.vue"),
      },
      {
        path: "register",
        beforeEnter: checkAlreadyLoggedIn,
        name: "register",
        component: () => import("pages/public/RegisterContainer.vue"),
      },
      {
        path: ":deptname?/online-services",
        name: "common:show",
        component: () => import("pages/investor/services/Services.vue"),
      },
    ],
  },

  { ...admin },
  { ...investor },
  { ...dev },

  // Always leave this as last one,
  // but you can also remove it
  {
    path: "/403",
    name: "access-denied",
    component: () => import("pages/common/error/AccessDenied.vue"),
  },
  {
    path: "/:catchAll(.*)*",
    name: "invalid",
    component: () => import("pages/Error404.vue"),
  },
];

export default routes;
