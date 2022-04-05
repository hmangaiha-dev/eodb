<template>
  <div class="zcard row items-center q-col-gutter-md">
    <div class="col-12 ztitle text-center">
      APPLICATION FOR CLAIM SUBSIDY ON COST OF PROJECT REPORT
    </div>
    <q-form @submit.prevent="submit" class="col">
      <div class="row q-col-gutter-lg">
        <div class="col-12">
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
          let { fees, application } = res.data;
          //  console.log('model fees',fees);
          if (fees) {
            formDatas.append("amount", fees);

            api
              .post("/initiate-payment/" + application, {
                amount: fees,
              })
              .then((res) => {
                let paymentURL = res.data;
                // return console.log('model amount',paymentURL);
                window.open(paymentURL, "_self").focus();
              })
              .catch((err) => {
                q.notify({
                  type: "negative",
                  message: err.response?.data?.message,
                });
              });
          } else {
            q.notify({
              message: "Application submitted successfully",
              color: "green",
            });
          }
        })
        .catch((err) => {
          q.notify({
            type: "negative",
            message: err.response?.data?.message,
          });
        });
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
