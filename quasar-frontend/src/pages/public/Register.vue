<template>
  <div class="row justify-center q-mt-lg">
    <div class="col-md-10 col-xs-10 col-sm-8 col-lg-6">
      <q-form
        class="q-col-gutter-md"
        @submit="handleSubmit"
        @reset="handleReset"
      >
        <q-card flat class="zcard">
          <q-card-section>
            <h6 class="text-h6 q-ma-none">Sign up </h6>
          </q-card-section>
          <q-card-section class="q-pb-none">
            <q-input
              outlined
              v-model="formData.full_name"
              label="Full name"
              :rules="[(val) => !!val || 'Email is required']"
            />
            <q-input
              outlined
              type="email"
              v-model="formData.email"
              label="Email"
              :rules="[(val) => !!val || 'Email is required']"
            />
            <q-input
              outlined
              v-model="formData.phone"
              label="Mobile no"
              :rules="[(val) => !!val || 'Mobile no is required']"
            />
            <q-input
              outlined
              :type="inputType"
              v-model="formData.password"
              label="Password"
              :rules="[(val) => !!val || 'Password is required']"
            >
              <template v-slot:append>
                <q-btn
                  flat
                  @click="
                    inputType === 'text'
                      ? (inputType = 'password')
                      : (inputType = 'text')
                  "
                  :icon="inputType === 'text' ? 'visibility' : 'visibility_off'"
                />
              </template>
            </q-input>
            <q-input
              outlined
              v-model="formData.password_confirmation"
              :type="inputType"
              label="Confirm Password"
              :rules="[
                (val) => !!val || 'Email is required',
                (val) => formData.password === val || 'Password must match',
              ]"
            />
          </q-card-section>

          <q-card-section style="display: flex">
            <router-link
              style="text-decoration: none; color: #3c8dbc"
              to="/login"
            >
              I already have a membership
            </router-link>
            <q-space />
            <q-btn
              outline
              type="submit"
              color="primary"
              label="Register"
              class="q-mr-md"
            />
            <q-btn type="reset" color="red" label="Reset" />
          </q-card-section>
        </q-card>
      </q-form>
    </div>
  </div>
</template>
<script>
import { reactive } from "@vue/reactivity";
import { ref } from "vue";
import { api } from "boot/axios";
import { useRouter } from "vue-router";

import { processValidationError } from "src/utils";
import { useQuasar } from "quasar";

export default {
  setup(props, context) {
    const router = useRouter();

    const inputType = ref("text");
    let errors = reactive({});
    const q = useQuasar();
    const formData = reactive({
      full_name: "testname",
      email: "test@email.com",
      password: "password",
      password_confirmation: "password",
      phone: "88888",
    });
    const handleSubmit = (e) => {
      api
        .post("/auth/register", formData)
        .then((res) => {
          // return console.log("response", res.data);
          q.notify({
            position: "top",

            color: "green-4",
            message: "Successfully registered !",
          });
          router.push({ name: "investor:login" });

          // const { token, user } = res.data;
          // store.dispatch("authData/setToken", token);
          // store.dispatch("authData/setCurrentUser", user);
          // console.log("login response", res.data);

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
    };

    const handleReset = (e) => {
      formData.fullname = "";
      formData.email = "";
      formData.password = "";
      formData.password_confirmation = "";
      formData.mobile = "";
    };

    return {
      inputType,
      errors,
      formData,
      handleSubmit,
      handleReset,
    };
  },
};
</script>
