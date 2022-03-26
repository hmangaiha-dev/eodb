<template>
  <div class="zcard row items-center">
    <!-- <div class="col-12 text-h6 q-pb-none text-center">Form-2</div>
    <p class="col-12 text-caption q-py-none text-center">[See Rule 3(1)]</p> -->
    <div class="col-12 text-center">
      <span class=""> FORM - III </span>

      <p class="ztitle col-12 text-center">
        FORMAT OF ANNUAL REPORT TO BE SUBMITTED BY THE OPERATOR OF FACILITY TO
        THE LOCAL BODY
      </p>

      <p>[SEE RULE 19 (6), 24 (1)]</p>
    </div>

    <q-form @submit.prevent="submit">
      <!-- <div class="row">
        <div class="col-12"> -->
      <Form ref="applicantRef" />
      <!-- </div>
      </div> -->

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
import { onMounted, ref } from "vue";
import { date } from "quasar";
import { useRouter } from "vue-router";
import { useQuasar } from "quasar";
import { api } from "src/boot/axios";

import Form from "./Form.vue";
// import Part2 from "./Part2.vue";
// import Document from "./Document.vue";

export default {
  components: {
    Form,
    // Part2,
    // Document,
  },
  setup(props, context) {
    const store = useStore();
    // const store = useStore();
    const q = useQuasar();

    const router = useRouter();
    const applicantRef = ref(null);

    const submit = () => {
      var formData = reactive({});

      // return console.log("formdatas", applicantRef.value);
      formData = Object.assign(formData, applicantRef.value.formData);

      var formDatas = new FormData();

      for (let data in formData) {
        formDatas.append(`${data}`, formData[data]);
      }

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

    return {
      submit,
      applicantRef,
      options: ["Google", "Facebook", "Twitter", "Apple", "Oracle"],
      maxDate: () => date.formatDate(Date.now(), "YYYY-MM-DD"),
    };
  },
};
</script>
