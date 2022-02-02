<template>
  <div class="zcard row items-center q-col-gutter-md">
    <!-- <div class="col-12 text-h6 q-pb-none text-center">Form-2</div>
    <p class="col-12 text-caption q-py-none text-center">[See Rule 3(1)]</p> -->
    <div class="col-12 text-center">
      <span class="ztitle">
        APPLICATION FOR CONSENT FOR ESTABLISHMENT OF INDUSTRIES ETC
      </span>

      <p>
        Under Section 25/26 of The Water (Prevention & Control of Pollution)
        Act, 1974
      </p>

      <p>
        & Section 21 of The Air (Prevention & Control of Pollution) Act, 1981
      </p>
    </div>

    <q-form @submit.prevent="submit">
      <!-- <div class="row q-col-gutter-lg">
        <div class="col-xs-12"> -->
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
import { date } from "quasar";
import { ref } from "vue";
import { api } from "src/boot/axios";
import { useQuasar } from "quasar";
import { useRouter } from "vue-router";

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
