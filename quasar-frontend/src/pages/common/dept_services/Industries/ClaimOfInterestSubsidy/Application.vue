<template>
  <div class="zcard row items-center q-col-gutter-md">
    <div class="col-12 text-h6 q-pb-none text-center">Schedule - II</div>
    <p class="col-12 text-caption q-py-none text-center">(See Rule 6A)</p>
    <div class="col-12 ztitle text-center">
      APPLICATION FORM FOR CLAIMING CENTRAL INTEREST SUBSIDY SCHEME
    </div>
    <q-form @submit.prevent="submit" class="row">
      <div class="row q-col-gutter-lg">
        <div class="col-xs-12">
          <Part1 ref="part1Form" />
        </div>
      </div>

      <div class="text-center q-mt-md col-12">
        <q-btn
          v-if="!route.query.draft_id"
          @click="handleDraft"
          color="blue"
          label="Draft"
        />
        <q-btn type="submit" class="q-mx-md" color="green-5" label="Submit" />
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
import { useRouter, useRoute } from "vue-router";
import { useQuasar } from "quasar";

import { api } from "src/boot/axios";

export default {
  components: {
    Part1,
  },

  setup(props, context) {
    const part1Form = ref(null);
    const router = useRouter();
    const route = useRoute();
    const $q = useQuasar();

    const store = useStore();
    // const draft = store.getters["applicantData/getCurrentDraft"];
    // const currentUser = store.getters["auth/getCurrentUser"];

    const formData = reactive({});

    const submit = () => {
      // return console.log('my router',myRouter);
      var formData = reactive({
        application_code: "C&E_INTEREST_SUBSIDY",
        department_id: 1,
        route: "industries:claimin",
      });

      formData = Object.assign(formData, part1Form.value.formData);
      let formDatas = new FormData();
      if (route.query.draft_id)
        formDatas.append("draft_id", route.query.draft_id);
      for (let data in formData) {
        // console.log("data value of" + data, formData[data]);
        formDatas.append(`${data}`, formData[data]);
      }

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
      let formData = reactive({
        application_code: "C&E_INTEREST_SUBSIDY",
        department_id: 1,
        route: "industries:claimin",
      });

      formData = Object.assign(formData, part1Form.value.formData);
      let formDatas = new FormData();
      if (route.query.draft_id)
        formDatas.append("draft_id", route.query.draft_id);
      for (let data in formData) {
        // console.log("data value of" + data, formData[data]);
        formDatas.append(`${data}`, formData[data]);
      }

      api
        .post("/applications/submit", formDatas)
        .then((res) => {
          // return console.log("response value", res.data);
          $q.notify({
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
            part1Form.value.formData = Object.assign(
              part1Form.value.formData,
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
      part1Form,
      submit,
      handleDraft,
      route,

      formData,
      options: ["Google", "Facebook", "Twitter", "Apple", "Oracle"],
      maxDate: () => date.formatDate(Date.now(), "YYYY-MM-DD"),
    };
  },
};
</script>
