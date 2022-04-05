<template>
  <div class="zcard row items-center q-col-gutter-md">
    <div class="col-12 text-h6 q-pb-none text-center">FORM:1C</div>
    <p class="col-12 text-caption q-py-none text-center">(See Rule 6A)</p>
    <p class="col-12 q-my-none q-py-none text-center">
      APPLICATION FORM FOR CLAIMING OF CENTRAL CAPITAL INVESTMENT SUBSIDY
    </p>

    <p class="col-12 q-py-none text-center">SCHEME UNDER NEIIPP, 2007</p>
    <p class="col-12 text-caption q-py-none text-center">(See Rule 6A)</p>
    <p class="col-12 text-center">
      PART-I: COMMON FOR BOTH MANUFACTURING AS WELL AS SERVICE SECTORS
    </p>
    <q-form @submit.prevent="submit">
      <div class="row q-col-gutter-lg">
        <div class="col-xs-12">
          <Form ref="applicantRef" />
        </div>
      </div>

      <div class="text-center q-mt-md col-12">
        <q-btn
          v-if="!route.query.draft_id"
          @click="handleDraft"
          color="blue"
          label="Draft"
        />
        <q-btn type="submit" color="green-5" class="q-mx-md" label="Submit" />
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
import { useRoute } from "vue-router";
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
    const route = useRoute();

    const q = useQuasar();

    const router = useRouter();
    const applicantRef = ref(null);

    const submit = () => {
      // return console.log();
      let formData = reactive({});

      formData = Object.assign(formData, applicantRef.value.formData);

      let formDatas = new FormData();

      if (route.query.draft_id)
        formDatas.append("draft_id", route.query.draft_id);

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

    const handleDraft = () => {
      let formDatas = new FormData();

      let formData = reactive({});

      formData = Object.assign(formData, applicantRef.value.formData);

      formDatas.append("draft", "draft");

      for (let data in formData) {
        formDatas.append(`${data}`, formData[data]);
      }

      api
        .post("/applications/submit", formDatas)
        .then((res) => {
          // return console.log("response value", res.data);
          q.notify({
            message: "Application submitted successfully",
            color: "green",
          });
          router.push({ name: "investor:drafts" });
        })
        .catch((err) => console.log("error", err));
    };

    onMounted(() => {
      if (route.query.draft_id) {
        let id = route.query.draft_id;
        api
          .get("investor/applications/" + id)
          .then((res) => {
            let { values } = res.data;
            applicantRef.value.formData = Object.assign(
              applicantRef.value.formData,
              values
            );
            
          })
          .catch((err) => {
            router.push("invalid");
            console.log(err);
          });
      }
    });
    return {
      applicantRef,
      handleDraft,
      q,
      route,
      submit,
      options: ["Google", "Facebook", "Twitter", "Apple", "Oracle"],
      maxDate: () => date.formatDate(Date.now(), "YYYY-MM-DD"),
    };
  },
};
</script>
