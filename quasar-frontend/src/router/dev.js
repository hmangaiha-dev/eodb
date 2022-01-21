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
                

                // claiming-central-capital-investment-subsidy-scheme
            ],
        },

        

    ],
};


