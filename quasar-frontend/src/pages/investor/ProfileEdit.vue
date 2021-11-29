<template>
  <q-page class="container-lg">
    <h1 class="ztitle">Edit profile</h1>
    <br />
    <q-form @submit="submit" @reset="reset" class="zcard row q-col-gutter-md">
      <div class="col-xs-12 zsubtitle">Profile details</div>
      <div class="col-xs-3">Name</div>
      <div class="col-xs-9">
        <q-input
          style="max-width: 260px"
          v-model="profile.full_name"
          outlined
          dense
        />
      </div>
      <div class="col-xs-3">Email</div>
      <div class="col-xs-9">
        <q-input
          disable
          style="max-width: 260px"
          v-model="profile.email"
          outlined
          dense
        />
      </div>
      <div class="col-xs-3">Phone</div>
      <div class="col-xs-9">
        <q-input
          style="max-width: 260px"
          v-model="profile.phone"
          outlined
          dense
        />
      </div>
      <div class="col-xs-3">Password</div>
      <div class="col-xs-9">
        <q-input
          style="max-width: 260px"
          type="password"
          v-model="profile.password"
          hint="Leave blank to use current password"
          outlined
          dense
        />
      </div>
      <div class="col-xs-3">Confirm Password</div>
      <div class="col-xs-9">
        <q-input
          style="max-width: 260px"
          type="password"
          v-model="profile.password_confirmation"
          :rules="[(val) => val === profile.password || 'Password must match']"
          outlined
          dense
        />
      </div>
      <div class="col-xs-12">
        <q-btn type="submit" color="primary" label="Save" />
        <q-btn @click="$router.back()" color="negative" flat label="Cancel" />
      </div>
    </q-form>
  </q-page>
</template>
<script>
import { onMounted } from "@vue/runtime-core";
import { api } from "boot/axios";
import { reactive } from "@vue/reactivity";
import { useQuasar } from "quasar";
import { useRouter } from "vue-router";
import { ref } from "vue";

export default {
  setup(props, context) {
    const q = useQuasar();
    const router = useRouter();
    const user = ref({});
    const profile = reactive({
      full_name: "",
      email: "",
      phone: "",
      password: "",
      password_confirmation: "",
    });

    const submit = (e) => {
      api
        .put("investor/profile", profile)
        .then((res) => {
          console.log("profile update", res.data.message);
          q.notify({
            type: "positive",
            message: res.data.message,
          });
          router.back();
        })
        .catch((err) => {
          console.log("error profile", err.response.data.message);

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
    const reset = (e) => {
      profile.fullname = user.value.full_name;
      profile.mobile = user.value.mobile;
      profile.password = "";
      profile.password_confirmation = "";
    };

    onMounted(() => {
      api
        .get("investor/profile")
        .then((res) => {
          const { full_name, email, phone } = res.data.data;
          console.log("profile data", res.data.data);
          user.value = res.data.data;
          profile.full_name = full_name;
          profile.email = email;
          profile.phone = phone;
        })
        .catch((err) => {
          console.log(err);
          err.response.data.message &&
            q.notify({
              type: "negative",
              position: "top",
              icon: "warnings",
              color: "red-4",
              message: err.response.data.message,
            });
        });
    });
    return {
      submit,
      reset,
      profile,
    };
  },
};
</script>
