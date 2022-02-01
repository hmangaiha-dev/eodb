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
      path: "legal-metrology",
      component: () => import("layouts/DummyLayout.vue"),
      beforeEnter: checkAuth,
      children: [
        {
          path: "licensing-of-manufacturer-of-weights&measures-1",
          name: "legal:license-manufactudrer",
          component: () =>
            import(
              "pages/common/dept_services/legal_metrology/licenceManuf/Application.vue"
            ),
        },

        {
          path: "licensing-of-manufacturer-of-weights&measures-2",
          name: "legal:license-renewal",
          component: () =>
            import(
              "pages/common/dept_services/legal_metrology/renewalManuf/Application.vue"
            ),
        },
        {
          path: "licensing-of-repairer-of-weights&measures-3",
          name: "legal:dealer-renewal",
          component: () =>
            import(
              "pages/common/dept_services/legal_metrology/licenceRepair/Application.vue"
            ),
        },
        {
          path: "licensing-of-repairer-of-weights&measures-4",
          name: "legal:license-repair",
          component: () =>
            import(
              "pages/common/dept_services/legal_metrology/licenceRepair/Application.vue"
            ),
        },
        {
          path: "licensing-of-dealers-in-weights&measures-5",
          name: "legal:license-dealer",
          component: () =>
            import(
              "pages/common/dept_services/legal_metrology/licenceDealer/Application.vue"
            ),
        },
        {
          path: "certificate_of_registration_manufacturer_packer_6",
          name: "legal:registration-manufacturer",
          component: () =>
            import(
              "pages/common/dept_services/legal_metrology/registrationManuf/Application.vue"
            ),
        },
        {
          path: "certificate_of_registration_importer_packer_7",
          name: "legal:registration-importer",
          component: () =>
            import(
              "pages/common/dept_services/legal_metrology/registrationImporter/Application.vue"
            ),
        },
        {
          path: "renewal-of-licence-repair-weightandmeasures-8",
          name: "legal:license-renewal-repair",
          component: () =>
            import(
              "pages/common/dept_services/legal_metrology/renewalLicenseRepair8/Application.vue"
            ),
        },
        {
          path: "licence-of-importers-wieghtsandmearures-9",
          name: "legal:license-importer",
          component: () =>
            import(
              "pages/common/dept_services/legal_metrology/licenceImporter/Application.vue"
            ),
        },
        {
          path: "verification-of-weightsandmeasures-10",
          name: "legal:verification",
          component: () =>
            import(
              "pages/common/dept_services/legal_metrology/verification/Application.vue"
            ),
        },
        {
          path: "re-verification-of-weights&measures-11",
          name: "legal:re-verification",
          component: () =>
            import(
              "pages/common/dept_services/legal_metrology/reverification/Application.vue"
            ),
        },

        // pollution
        {
          path: "filing-returns-of-sale-new-batteries-collection-old-batteries",
          name: "pcb:20",
          component: () =>
            import(
              "pages/common/dept_services/pollution/fillingReturnsSaleBattery/Application.vue"
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
        // pollution
        {
          path: "filing-returns-of-sale-new-batteries-collection-old-batteries",
          name: "pcb:20",
          component: () =>
            import(
              "pages/common/dept_services/pollution/fillingReturnsSaleBattery/Application.vue"
            ),
        },
        {
          path: "authorisation-generating-storage-treatment-dispostal-eWaste_manufacturer",
          name: "pcb:21",
          component: () =>
            import(
              "pages/common/dept_services/pollution/authorizationGenerationorStorage/Application.vue"
            ),
        },
        {
          path: "application-for-approval-&-Notification-of-sites",
          name: "pcb:25",
          component: () =>
            import(
              "pages/common/dept_services/pollution/authorizationGenerationorStorage/Application.vue"
            ),
        },

        {
          path: "authorization-facilities-processing-environmentally-sound-management-practice-recycling-ewaste",
          name: "pcb:22",
          component: () =>
            import(
              "pages/common/dept_services/pollution/authorizationFacilities/Application.vue"
            ),
        },
        {
          path: "authorization-e-waste-management",
          name: "pcb:24",
          component: () =>
            import(
              "pages/common/dept_services/pollution/authorizationeWaste/Application.vue"
            ),
        },
        {
          path: "application-for-approval-&-Notification-of-sites",
          name: "pcb:25",
          component: () =>
            import(
              "pages/common/dept_services/pollution/approvalNotification/Application.vue"
            ),
        },

        // claiming-central-capital-investment-subsidy-scheme
      ],
    },
  ],
};
