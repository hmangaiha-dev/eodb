<template>
  <div class="zcard row items-center q-col-gutter-md">
    <div class="col-12 ztitle text-center">
      APPLICATION FORM FOR CLAIM OF SUBSIDY ON POWER GENERATING
    </div>
    <q-form @submit.prevent="submit" class="col">
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
import { onMounted, ref } from "vue";
import { useQuasar } from "quasar";
// import { useQuasar } from "quasar";

import { api } from "src/boot/axios";
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
    const q = useQuasar();

    const router = useRouter();
    const applicantRef = ref(null);

    const submit = () => {
      // var formData = reactive({});

      // return console.log(q);

      const formData = Object.assign({}, applicantRef.value.formData);

      const form = new FormData(formData);

      return console.log("formdatas results", form);
      const results = Object.fromEntries(form.entries());

      // for (let data in formData) {
      //   formDatas.append(`${data}`, formData[data]);
      // }

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
