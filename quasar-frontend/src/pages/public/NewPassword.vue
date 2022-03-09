<template>
  <q-page>
    <div class="row q-mt-lg justify-center">
      <div class="col-md-6 col-xs-10 col-sm-8 col-lg-3 col-md-3">
        <q-form @submit="submit" @reset="reset">
          <q-card flat class="zcard">
            <p class="text-h6 text-weight-regular q-mt-md text-center">
              Reset New Password
            </p>
            <q-card-section>
              <q-input
                :rules="[
                  (val) => (val && val.length > 0) || 'Please type something',
                ]"
                type="email"
                v-model="loginData.email"
                label="Email"
                outlined
              >
              </q-input>
            </q-card-section>
            <q-card-section>
              <q-input
                :rules="[
                  (val) => (val && val.length > 0) || 'Please type something',
                ]"
                type="password"
                v-model="loginData.password"
                label="Password"
                outlined
              >
                <template v-slot:prepend>
                  <q-icon name="lock" />
                </template>
              </q-input>
            </q-card-section>
            <q-card-section>
              <q-input
                :rules="[
                  (val) =>
                    loginData.password == loginData.confirmPassword ||
                    'Password do not match',
                ]"
                type="password"
                v-model="loginData.confirmPassword"
                label="Confirm Password"
                outlined
              >
                <template v-slot:prepend>
                  <q-icon name="lock" />
                </template>
              </q-input>
            </q-card-section>
            <q-card-section style="display: flex" class="q-py-none">
              <q-space />
              <q-btn
                outline
                padding="sm"
                type="submit"
                color="primary"
                label="Confirm"
                class="full-width"
              />
            </q-card-section>
          </q-card>
        </q-form>
        <!-- <q-btn color="primary" icon="check" label="Get User" @click="getUser" />

        <q-btn
          class="float-right"
          color="red-4"
          icon="check"
          label="Logout"
          @click="handleLogout"
        /> -->
      </div>
    </div>
  </q-page>
</template>
<script>
import { useQuasar } from "quasar";
import { reactive } from "@vue/reactivity";
import { api } from "src/boot/axios";
import { ref, onMounted } from "vue";
import { useStore } from "vuex";
import { useRouter, useRoute } from "vue-router";

export default {
  setup(props, context) {
    const router = useRouter();
    const route = useRoute();

    const store = useStore();
    const q = useQuasar();
    const loginData = reactive({
      email: "",
      token: route.params.token,
      password: "",
      confirmPassword: "",
      // password: "password",
    });

    onMounted(() => {});

    return {
      loginData,
      isPwd: ref(true),

      remember: ref(true),

      submit: () => {
        api
          .post("reset-password", loginData)
          .then((res) => {
            // return console.log("res data", res.data);
            // const { token, user } = res.data;

            q.notify({
              color: 'primary',
              position: "top",
              icon: "announcement",
              message: res.data.message,
            });

            router.push({
              name: 'investor:login'
            });
            // router.push({ name: "home" });

            // api.defaults.headers["Authorization"] = `Bearer ${token}`;
          })
          .catch((err) => {
            console.log("error post response", err.response.data.message);

            err.response.data.message &&
              q.notify({
                type: "negative",
                position: "top",
                icon: "warnings",
                color: "red-4",
                message: err.response.data.message,
              });
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
