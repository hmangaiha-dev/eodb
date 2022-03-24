<template>
  <q-page>
    <div class="row q-mt-lg justify-center">
      <div class="col-md-6 col-xs-10 col-sm-8 col-lg-3 col-md-3">
        <q-form @submit="submit" @reset="reset">
          <q-card flat class="zcard">
            <p class="text-h6 text-weight-regular q-mt-md text-center">
              Reset Password
            </p>
            <q-card-section>
              <q-input
                type="email"
                :rules="[
                  (val) => (val && val.length > 0) || 'Please type something',
                ]"
                v-model="loginData.email"
                label="Registered Email id"
                outlined
              />
            </q-card-section>
            <q-card-section style="display: flex" class="q-py-none">
              <q-space />
              <q-btn
                :loading="loading"
                outline
                padding="sm"
                type="submit"
                color="primary"
                label="Proceed"
                class="full-width"
              />
            </q-card-section>
          </q-card>
        </q-form>
       
      </div>
    </div>
  </q-page>
</template>
<script>
import { useQuasar } from "quasar";
import { reactive } from "@vue/reactivity";
import { api } from "src/boot/axios";
import { ref } from "vue";
import { useStore } from "vuex";
import { useRouter, useRoute } from "vue-router";

export default {
  setup(props, context) {
    const router = useRouter();
    const route = useRoute();
    const loading = ref(false);

    const store = useStore();
    const q = useQuasar();
    const loginData = reactive({
      email: "",
      // password: "password",
    });

    return {
      loginData,
      isPwd: ref(true),
      loading,

      remember: ref(false),

      submit: () => {
        loading.value = true;
        api
          .post("forgot-password", loginData)
          .then((res) => {
            // return console.log('res data',res.data);
            q.notify({
              color: "primary",
              position: "top",
              icon: "announcement",
              message: res.data.status,
            });
          })
          .catch((err) => {
            console.log("error post response", err.response.data.status);
            err.response.data.status &&
              q.notify({
                type: "negative",
                position: "top",
                icon: "warnings",
                color: "red-4",
                message: err.response.data.status,
              });
          })
          .finally(() => {
            loading.value = false;
          });
      },

      storeUser: () => {
        console.log("store user", store.state.investor.currentUser);
      },

      getUser: () => {
        console.log("bearer value", api.defaults.headers["Authorization"]);
        api
          .get("/user")
          .then((res) => {
            console.log("user ok response", res.data);
          })
          .catch((err) => {
            console.log("error response", err);
          });
      },

      reset: () => {
        console.log("reset");
        loginData.email = loginData.password = "";
      },

      logout: () => {
        api.defaults.headers["Authorization"] = "";
      },

      handleLogout: (e) => {
        api
          .post("auth/investor/logout")
          .then((res) => {
            store.dispatch("investor/setToken", null);
            store.dispatch("investor/setCurrentUser", null);
            // router.push({ name: "home" });
          })
          .catch((err) => console.log(err));
      },
    };
  },
};
</script>
