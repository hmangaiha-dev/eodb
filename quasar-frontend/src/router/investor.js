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
  path: "/investor",
  component: () => import("layouts/InvestorLayout.vue"),
  beforeEnter: checkAuth,
  children: [
    {
      path: "",
      name: "investor:dashboard",
      component: () => import("pages/investor/Dashboard.vue"),
    },
    // {
    //   path: "register",
    //   component: () => import("pages/investor/Register.vue"),
    // },
    // { path: "profile", component: () => import("pages/investor/Profile.vue") },
    {
      path: "profile",
      name: "investor:profile",
      component: () => import("pages/investor/ProfileInfo.vue"),
    },

    {
      path: "unauthorised",
      name: "unauthorised",
      component: () => import("pages/Unauthorised.vue"),
    },
    {
      path: "profile/update",
      name: "profile:update",
      component: () => import("pages/investor/ProfileEdit.vue"),
    },
    {
      path: "profile/update",
      name: "profile:update",
      component: () => import("pages/investor/ProfileEdit.vue"),
    },

    {
      path: "applications/ongoing",
      name: "investor:ongoing",
      component: () => import("pages/investor/OnGoingApplications.vue"),
    },

    {
      path: "application/:id",
      name: "investor:show-applicant",
      component: () => import("pages/investor/ApplicationDetail.vue"),
    },

    {
      path: "common-application/create",
      name: "common-application",
      component: () => import("pages/investor/CommonApplication.vue"),
    },
    // { path: "common-application/create", name:"common:create", component: () => import("pages/investor/CommonApplication.vue") },
    {
      path: ":deptname?/online-services",
      name: "common:create",
      component: () => import("pages/investor/services/Services.vue"),
    },
    // {
    //   path: "amc/online-services",
    //   name: "amc:services",
    //   component: () => import("pages/investor/services/Services.vue"),
    // },
    // {
    //   path: "land-revenue-settlement/online-services",
    //   name: "amc:services",
    //   component: () => import("pages/investor/services/Services.vue"),
    // },
    // { path: "commerce-and-industries/online-services", name:"amc:services", component: () => import("pages/investor/services/Services.vue") },

    {
      path: "applications/approved",
      name: "investor:approved",
      component: () => import("pages/investor/CompletedApplications.vue"),
    },

    {
      path: "application/track",
      name: "investor:application-track",
      component: () => import("pages/investor/TrackApplication.vue"),
    },

    //COMMERCE AND INDUSTRIES

    {
      path: "commerce-and-industries",
      component: () => import("layouts/DummyLayout.vue"),
      children: [
        {
          path: "claiming-central-interest-subsidy-scheme",
          name: "industries:claimin",
          component: () =>
            import(
              "pages/common/dept_services/Industries/ClaimOfInterestSubsidy/Application.vue"
            ),
        },
        {
          path: "allotment-of-industrial-plot",
          name: "industries:allotment",
          component: () =>
            import(
              "pages/common/dept_services/Industries/Allotment/Application.vue"
            ),
        },
        {
          path: "claiming-central-capital-investment-subsidy-scheme",
          name: "industries:central-captial",
          component: () =>
            import(
              "pages/common/dept_services/Industries/ClaimOfCentralCapital/Application.vue"
            ),
        },

        {
          path: "claiming-power-subsidy",
          name: "industries:power-sibsidy",
          component: () =>
            import(
              "pages/common/dept_services/Industries/powersubsidy/Application.vue"
            ),
        },

        {
          path: "subsidy-power-generating",
          name: "industries:power-generating",
          component: () =>
            import(
              "pages/common/dept_services/Industries/powergenerating/Application.vue"
            ),
        },


        {
          path: "subsidy-cost-project-report",
          name: "industries:cost-project",
          component: () =>
            import(
              "pages/common/dept_services/Industries/costprojectreport/Application.vue"
            ),
        },
      ],
    },

    //LAND REVENEUE

    {
      path: "land-revenue",
      component: () => import("layouts/DummyLayout.vue"),
      beforeEnter: checkAuth,
      children: [
        {
          path: "periodic-patta",
          name: "land:periodic-patta",
          component: () =>
            import(
              "pages/common/dept_services/land_revenue/periodicpata/Application.vue"
            ),
        },
        {
          path: "allotment-of-house-land",
          name: "land:house-land",
          component: () =>
            import(
              "pages/common/dept_services/land_revenue/landhousesite/Application.vue"
            ),
        },
        {
          path: "allotment-of-land-shop",
          name: "land:house-land-shop",
          component: () =>
            import(
              "pages/common/dept_services/land_revenue/landshop/Application.vue"
            ),
        },
        {
          path: "land-settlement",
          name: "land:land-settlement",
          component: () =>
            import(
              "pages/common/dept_services/land_revenue/landsettlement/Application.vue"
            ),
        },

        {
          path: "transfer-of-land-ownership",
          name: "land:land-transfer",
          component: () =>
            import(
              "pages/common/dept_services/land_revenue/landtransfer/Application.vue"
            ),
        },
      ],
    },

    {
      path: "environment-forest-and-climate-change",
      component: () => import("layouts/DummyLayout.vue"),
      beforeEnter: checkAuth,
      children: [
        {
          path: "bamboo-plantions",
          name: "forest:bamboo-planations",
          component: () =>
            import(
              "pages/common/dept_services/forests/bambooplantations/Application.vue"
            ),
        },
        {
          path: "permission-to-fell-trees",
          name: "forest:fell-trees",
          component: () =>
            import("pages/common/dept_services/forests/felltrees/Application"),
        },
        {
          path: "claiming-central-capital-investment-subsidy-scheme",
          name: "indudsdsfsftries:central-captial",
          component: () =>
            import(
              "pages/common/dept_services/Industries/ClaimOfCentralCapital/Application.vue"
            ),
        },

        // claiming-central-capital-investment-subsidy-scheme
      ],
    },

    {
      path: "pollution-control-board",
      component: () => import("layouts/DummyLayout.vue"),
      beforeEnter: checkAuth,
      children: [
        {
          path: "consent-to-establishment-industries",
          name: "pcb:consent-industries",
          component: () =>
            import(
              "pages/common/dept_services/pollution/consentindustries/Application.vue"
            ),
        },
        {
          path: "accident-reporting-bio-medical-waste",
          name: "pcb:accident-reporting-medical",
          component: () =>
            import(
              "pages/common/dept_services/pollution/accidentmedicalreporting/Application.vue"
            ),
        },
        {
          path: "accident-reporting-hazardous-waste",
          name: "pcb:accident-reporting-hazardous",
          component: () =>
            import(
              "pages/common/dept_services/pollution/accidenthazardousreporting/Application.vue"
            ),
        },
        {
          path: "accident-reporting-solid-waste",
          name: "pcb:accident-reporting-solidwaste",
          component: () =>
            import(
              "pages/common/dept_services/pollution/accidentsolidwastereporting/Application.vue"
            ),
        },
        {
          path: "submission-anual-report-bio-medical-wastes",
          name: "indudsdsfsftries:central-captial",
          component: () =>
            import(
              "pages/common/dept_services/pollution/annualreport/Application.vue"
            ),
        },

        // claiming-central-capital-investment-subsidy-scheme
      ],
    },

    {
      path: "power-and-electricity",
      component: () => import("layouts/DummyLayout.vue"),
      beforeEnter: checkAuth,
      children: [
        {
          path: "new-connection",
          name: "power:newconnection",
          component: () =>
            import(
              "pages/common/dept_services/power/newconnection/Application.vue"
            ),
        },

        // claiming-central-capital-investment-subsidy-scheme
      ],
    },

    {
      path: "fire-and-emergency-services",
      component: () => import("layouts/DummyLayout.vue"),
      beforeEnter: checkAuth,
      children: [
        {
          path: "noc-form",
          name: "fire:noc",
          component: () =>
            import("pages/common/dept_services/Fire/noc/Application.vue"),
        },

        // claiming-central-capital-investment-subsidy-scheme
      ],
    },

    {
      path: "food-and-drug-administration",
      component: () => import("layouts/DummyLayout.vue"),
      beforeEnter: checkAuth,
      children: [
        {
          path: "form19",
          name: "food:form19",
          component: () =>
            import("pages/common/dept_services/food_drug/generalretail/Application.vue"),
        },

        // claiming-central-capital-investment-subsidy-scheme
      ],
    },

    {
      path: "public-work-department",
      component: () => import("layouts/DummyLayout.vue"),
      beforeEnter: checkAuth,
      children: [
        {
          path: "road-cutting",
          name: "pwd:road-cuttting",
          component: () =>
            import(
              "pages/common/dept_services/pwd/roadcutting/Application.vue"
            ),
        },

        // claiming-central-capital-investment-subsidy-scheme
      ],
    },

    {
      path: "public-health-engineering",
      component: () => import("layouts/DummyLayout.vue"),
      beforeEnter: checkAuth,
      children: [
        {
          path: "new-water-connection",
          name: "phe:new-connection",
          component: () =>
            import(
              "pages/common/dept_services/phe/newconnection/Application.vue"
            ),
        },

        // claiming-central-capital-investment-subsidy-scheme
      ],
    },
    // { path: 'amc/allotment-of-industrial-plot',name:'industries:allotment', component: () => import('pages/common/dept_services/Industries/Allotment/AllotmentApplicationForm.vue') },
  ],
};
