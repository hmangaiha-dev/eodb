<template>
  <q-page>
    <div class="row q-mt-lg justify-center">
      <div class="col-sm-10 col-xs-10 col-md-3">
        <q-form @submit="submit" @reset="reset">
          <q-card flat bordered>
            <p class="text-h6 text-weight-regular q-mt-md text-center">Login</p>
            <q-card-section>
              <q-input
                :rules="[
                  (val) => (val && val.length > 0) || 'Please type something',
                ]"
                v-model="loginData.email"
                label="Email"
                outlined
              />
              <q-input
                :rules="[
                  (val) => (val && val.length > 0) || 'Please type something',
                ]"
                v-model="loginData.password"
                label="Password"
                outlined
              />
            </q-card-section>
            <q-card-section style="display: flex" class="q-py-none">
              <q-checkbox right-label v-model="remember" label="Remember me" />
              <q-space />
              <q-btn
                outline
                padding="sm"
                type="submit"
                color="primary"
                label="Login"
                class="q-mr-md"
              />
              <q-btn padding="sm" type="reset" color="red" label="Reset" />
            </q-card-section>
            <q-card-section class="q-py-xs">
              <router-link
                style="text-decoration: none; color: #3c8dbc"
                class="q-mb-md"
                to="/reset-password"
              >
                Forgot password?
              </router-link>
              <br />
            </q-card-section>

            <q-card-section class="q-py-xs">
              <router-link
                style="text-decoration: none; color: #3c8dbc"
                class="q-mt-lg"
                to="/register"
              >
                Register as new membership
              </router-link>
            </q-card-section>

          
          </q-card>
        </q-form>
        <q-btn color="primary" icon="check" label="Get User" @click="storeUser " />
      </div>
    </div>
  </q-page>
</template>
<script>
import { useQuasar } from "quasar";
import { reactive } from "@vue/reactivity";
import { api } from "src/boot/axios";
import {ref} from 'vue'
import { useStore } from "vuex";

export default {
  setup(props, context) {
    const store = useStore();
    const q = useQuasar();
    const loginData = reactive({
      email: "investor@email.com",
      password: "password",
    });

    return {
      loginData,

      remember: ref(true),

      submit: () => {
        api
          .post("/auth/login", loginData)
          .then((res) => {
            const { token, currentUser } = res.data;

            console.log('current user',currentUser);
            // store.dispatch("investor/setToken", token);
            store.dispatch("investor/setCurrentUser", currentUser);
            console.log("login response", res.data);

            // api.defaults.headers["Authorization"] = `Bearer ${token}`;
          })
          .catch((err) => {
            console.log("error post response", err);
          });
      },


      storeUser: () => {
        console.log('store user',store.state.investor.currentUser);
      },

      getUser: () => {
        api
          .get("/user")
          .then((res) => {
            console.log("user response", res.data);
          })
          .catch((err) => {
            console.log("error response", err);
          });
      },

      reset: () => {
        console.log('reset');
        loginData.email = loginData.password = ''
      },

      logout: () => {
        api.defaults.headers["Authorization"] = "";
      },
    };
  },
};
</script>
