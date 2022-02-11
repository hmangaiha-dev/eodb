import { api } from "src/boot/axios";
import { Notify } from "quasar";

const test={
      path: "/:code",name:"service", component: () => import("layouts/ServiceLayout.vue"),
      children :[
        {path:'online-services',name:'web:service',component: () => import("pages/common/web/OnlineServices.vue")},
        {path:'about',name:'web:about',component: () => import("pages/common/web/About.vue")},
        {path:'act-rule',name:'web:act-rule',component: () => import("pages/common/web/ActRules.vue")},
        {path:'notification',name:'web:notification',component: () => import("pages/common/web/Notification.vue")},
        {path:'other',name:'web:other',component: () => import("pages/common/web/OtherInformation.vue")},
      ]
};
export default test;
