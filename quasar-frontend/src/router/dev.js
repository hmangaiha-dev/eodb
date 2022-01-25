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
                    name: "legal:license-manufacturer",
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
                    path: "licensing-of-dealers-in-weights&measures-5",
                    name: "legal:license-dealer",
                    component: () =>
                        import(
                            "pages/common/dept_services/legal_metrology/licenceDealer/Application.vue"
                        ),
                },
                

                // claiming-central-capital-investment-subsidy-scheme
            ],
        },

        

    ],
};


