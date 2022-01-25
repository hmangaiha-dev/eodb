	<template>
	  <div class="zcard row items-center q-col-gutter-md">
	    <div class="col-12 text-h6 q-pb-none text-center">See rule 16 (3)</div>
	    <p class="col-12 text-caption q-py-none text-center">Schedule – VIII</p>
	    <div class="col-12 ztitle text-center">
	      Office of the Controller, legal metrology,
Certificate of verification
	    </div>
	    <q-form @submit.prevent="submit" class="row">
      <div class="row q-col-gutter-lg">
        <div class="col-xs-12">
          <Form ref="applicantRef" />
        </div>
      </div>

      <div class="text-center q-mt-md col-12">
        <q-btn type="submit" color="green-5" label="Submit" />
        <q-btn class="q-mx-md" color="red-4" label="Reset" />
      </div>
    </q-form>
  </div>
</template>
<script>
import { reactive } from "@vue/reactivity";
import { useStore } from "vuex";
import { onMounted } from "vue";
import { date } from "quasar";
import { ref } from "vue";
import { api } from "src/boot/axios";
import { useQuasar } from "quasar";
import { useRouter } from "vue-router";

import Form from "./Form.vue";
import router from "src/router";


export default {
  components: {
    Form,
  },

  setup(props, context) {
    const applicantRef = ref(null);
    const store = useStore();
    const $q = useQuasar();
    const router = useRouter();
    const draft = store.getters["applicantData/getCurrentDraft"];
    const currentUser = store.getters["auth/getCurrentUser"];

    const submit = () => {
      // return console.log('my router',myRouter);
      var formData = reactive({
       
      });

      formData = Object.assign(formData, applicantRef.value.formData);

      // return console.log('formData',formData);

      var formDatas = new FormData();

      for (let data in formData) {
        formDatas.append(`${data}`, formData[data]);
      }

      api
        .post("/applications/submit", formDatas)
        .then((res) => {
          console.log("response value", res.data);
          $q.notify({
            message: "Application submitted successfully",
            color: "green",
          });
          router.push({ name: "investor:ongoing" });
        })
        .catch((err) => console.log("error", err));
    };

    return {
      applicantRef,
      submit,
      router,
      options: ["Google", "Facebook", "Twitter", "Apple", "Oracle"],
      maxDate: () => date.formatDate(Date.now(), "YYYY-MM-DD"),
    };
    //test
  },
};
</script>
