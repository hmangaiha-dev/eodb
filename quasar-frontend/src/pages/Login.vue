<template>
  <q-page>
    <div class="row justify-center">
      <div class="col-sm-10 col-xs-10 col-md-3">
        <q-form @submit="submit" @reset="reset">
          <q-card flat bordered>
            <p class="text-h6 text-weight-regular q-mt-md text-center">Login</p>
            <q-card-section class="q-col-gutter-lg">
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
            <q-card-actions align="center">
              <q-btn
                outline
                padding="sm"
                type="submit"
                color="primary"
                label="Login"
              />
              <q-btn padding="sm" color="red" label="Reset" />
            </q-card-actions>
            <div>
              <q-btn
                @click="getUser"
                padding="sm"
                color="green"
                label="Getuser"
              />

               <q-btn class="float-right"
                @click="logout"
                padding="sm"
                color="red"
                label="Logout"
              />
            </div>
          </q-card>
        </q-form>
        <q-form class="self-stretch">
          <div></div>
        </q-form>
      </div>
    </div>
  </q-page>
</template>
<script>
import { useQuasar } from "quasar";
import { reactive } from "@vue/reactivity";
import { api } from "src/boot/axios";
import {useStore} from "vuex";

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

      submit: () => {
        api
          .post("/auth/login", loginData)
          .then((res) => {
            const {token, user} = res.data;
            store.dispatch('authData/setToken', token)
              store.dispatch('authData/setCurrentUser', user)
            console.log("login response", res.data);

            // api.defaults.headers["Authorization"] = `Bearer ${token}`;
          })
          .catch((err) => {
            console.log("error post response", err);
          });
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

      logout: () =>  {
        api.defaults.headers["Authorization"] = '';
      }
    };
  },
};
</script>
