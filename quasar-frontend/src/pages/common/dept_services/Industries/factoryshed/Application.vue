<template>
  <div class="zcard row items-center q-col-gutter-md">
    <div class="col-12 text-h6 q-pb-none text-center">Form: 1E</div>
    <div class="col-12 ztitle text-center">
      CENTRAL COMPREHENSIVE INSURANCE SUBSIDY SCHEME, 2007
    </div>
    <p class="col-12 text-caption q-py-none text-center">
      (The form, duly completed, may be submitted along with necessary documents
      with respective District Industries Centre)
    </p>
    <q-form @submit.prevent="submit" class="row">
      <div class="row">
        <div class="col-xs-12">
          <Part1 ref="applicantRef" />
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
import Part1 from "./Part1.vue";
import { useRouter } from "vue-router";
import { useQuasar } from "quasar";

import { api } from "src/boot/axios";

export default {
  components: {
    Part1,
  },

   setup(props, context) {
    const store = useStore();
    const q = useQuasar();

    const router = useRouter();
    const applicantRef = ref(null);

    const submit = () => {
      var formData = reactive({});

      // return console.log(q);

      formData = Object.assign(formData, applicantRef.value.formData);

      var formDatas = new FormData();

      for (let data in formData) {
        formDatas.append(`${data}`, formData[data]);
      }
      // return console.log('formdatas',formData);

      api
        .post("/applications/submit", formDatas)
        .then((res) => {
          // console.log("response value", res.data);
          q.notify({
            message: "Application submitted successfully",
            color: "green",
          });
          router.push({ name: "investor:ongoing" });
        })
        .catch((err) => console.log("error", err));
    };

    onMounted(() => {});
    return {
      applicantRef,
      q,
      submit,
      options: ["Google", "Facebook", "Twitter", "Apple", "Oracle"],
      maxDate: () => date.formatDate(Date.now(), "YYYY-MM-DD"),
    };
  },
};
</script>
