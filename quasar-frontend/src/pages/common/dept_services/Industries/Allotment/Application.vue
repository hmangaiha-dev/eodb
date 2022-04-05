<template>
  <div class="zcard row items-center q-col-gutter-md">
    <div class="col-12 text-h6 q-pb-none text-center">Schedule - II</div>
    <p class="col-12 text-caption q-py-none text-center">(See Rule 6A)</p>
    <div class="col-12 ztitle text-center">
      APPLICATION FOR ALLOTMENT OF INDUSTRIAL PLOT/SHET AT
    </div>

    <q-dialog v-model="paymentURL">
      <q-card>
        <q-card-section>
          <div class="text-h6">Alert</div>
        </q-card-section>

        <q-card-section class="q-pt-none">
          <!-- {{ window.open('https://paymentgw.mizoram.gov.in/msegs-payment/6','_self') }} -->
          <!-- <q-item  target="_blank" to="https://paymentgw.mizoram.gov.in/msegs-payment/5">dd</q-item> -->

          <!-- <iframe
            title="hello"
            src="https://paymentgw.mizoram.gov.in/msegs-payment/11"
            frameborder="0"
          ></iframe> -->

          <!-- <embed type="" src="https://paymentgw.mizoram.gov.in/msegs-payment/11" /> -->
        </q-card-section>

        <q-card-actions align="right">
          <q-btn flat label="OK" color="primary" v-close-popup />
        </q-card-actions>
      </q-card>
    </q-dialog>

    <q-form @submit.prevent="submit('final')" class="row">
      <div class="row q-col-gutter-lg">
        <div class="col-xs-12">
          <Part1 ref="part1Form" />
        </div>

        <div class="col-xs-12">
          <Part2 ref="part2Form" />
        </div>

        <div class="col-xs-12">
          <Document ref="documentForm" />
        </div>
      </div>

      <div class="text-center q-mt-md col-12">
        <q-btn
          v-if="!route.query.draft_id"
          @click="handleDraft"
          color="blue"
          label="Draft"
        />
        <q-btn class="q-mx-md" type="submit" color="green-5" label="Submit" />
        <q-btn class="q-mx-md" color="red-4" label="Reset" />
      </div>
    </q-form>
  </div>
</template>
<script>
import { reactive } from "@vue/reactivity";
import { useStore } from "vuex";
import { onMounted } from "vue";
import { date, format } from "quasar";
import { ref } from "vue";

import Part1 from "./Part1.vue";
import Part2 from "./Part2.vue";
import Document from "./Document.vue";
import { api } from "src/boot/axios";
// import { route } from "vue-router";
import { useRouter, useRoute } from "vue-router";

import { useQuasar } from "quasar";

export default {
  components: {
    Part1,
    Part2,
    Document,
  },
  setup(props, context) {
    const part1Form = ref(null);
    const part2Form = ref(null);
    const documentForm = ref(null);
    const route = useRoute();

    const q = useQuasar();

    const paymentURL = ref(false);

    const router = useRouter();

    const formData = reactive({
      application_code: "C&E_ALLOTMENT_PLOT",
      department_id: 1,
      route: "industries:allotment",
    });

    const submit = (type) => {
      let formDatas = new FormData();
      if (route.query.draft_id) formDatas.append("draft_id", route.query.draft_id);

      let fields = Object.assign(
        formData,
        part1Form.value.formData,
        part2Form.value.formData,
        documentForm.value.formData
      );
      for (let data in fields) formDatas.append(`${data}`, formData[data]);

      api
        .post("/applications/submit", formDatas)
        .then((res) => {
          // return console.log('model fees',res.data);
          let { fees, application } = res.data;
          if (fees) {
            //  return console.log('model amout fees',fees);
            formDatas.append("amount", fees);

            api
              .post("/initiate-payment/" + application, {
                amount: fees,
              })
              .then((res) => {
                // return console.log('model amount',res.data);
                let paymentURL = res.data;
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
            router.push({ name: "investor:ongoing" });
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
      formDatas.append("draft", "draft");
      if (route.query.draft_id) formDatas.append("draft_id", route.query.draft_id);
      let fields = Object.assign(
        formData,
        part1Form.value.formData,
        part2Form.value.formData,
        documentForm.value.formData
      );
      for (let data in fields) formDatas.append(`${data}`, formData[data]);
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

    //  return console.log('payment res',res.data);

    const $q = useQuasar();
    const store = useStore();

    onMounted(() => {
      if (route.query.draft_id) {
        let id = route.query.draft_id;
        api
          .get("investor/applications/" + id)
          .then((res) => {
            let { values } = res.data;
            console.log("drafts application", values);
            part1Form.value.formData = Object.assign(
              part1Form.value.formData,
              values
            );
            part2Form.value.formData = Object.assign(
              part2Form.value.formData,
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
      part2Form,
      documentForm,
      paymentURL,
      page: "https://paymentgw.mizoram.gov.in/msegs-payment/6",
      submit,
      handleDraft,
      router,
      route,
      window: window,
      formData,
      options: ["Google", "Facebook", "Twitter", "Apple", "Oracle"],
      maxDate: () => date.formatDate(Date.now(), "YYYY-MM-DD"),
    };
  },
};
</script>
