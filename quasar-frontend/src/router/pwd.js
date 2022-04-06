import { api } from "src/boot/axios";
import { Notify } from "quasar";

export const checkAuth = async (to, from, next) => {
  await api
    .get("/user")
    .then((res) => {
      next();
    })
    .catch((err) => {
      Notify.create({
        message: "Please login to continue",
        color: "primary",
        position: "top",
        icon: "warnings",
      });
      next({
        name: "investor:login",
      });
    });
};

export default {
  path: "/pwd",
  component: () => import("layouts/InvestorLayout.vue"),
  children: [
    {
      path: "track",
      name: "pwd:track",
      component: () => import("pages/common/pwd/Tracking.vue"),
    },
  ],
};
