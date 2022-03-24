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

    <q-form @submit.prevent="initPaytm" class="row">
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
import { date, format } from "quasar";
import { ref } from "vue";

import Part1 from "./Part1.vue";
import Part2 from "./Part2.vue";
import Document from "./Document.vue";
import { api } from "src/boot/axios";

import { useRouter } from "vue-router";

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

    const paymentURL = ref(false);

    const router = useRouter();

    const initPaytm = () => {
      //  return console.log('payment res',res.data);
      api
        .post("/initiate-payment", {
          // order_id: "dsd",
          amount: "1",
        })
        .then((res) => {
          console.log("payment url", res.data);
          let paymentURL = res.data;

          api
            .get(paymentURL)
            .then((res) => {
              console.log("success payment", res.data);
            })
            .catch((err) => {
              console.log("payment failes", err.response);
            });
        })
        .catch((err) => {
          console.log("error", err);
        });
    };

    const $q = useQuasar();
    const store = useStore();

    var formData = reactive({
      application_code: "C&E_ALLOTMENT_PLOT",
      department_id: 1,
    });
    onMounted(() => {
      var config = {
        root: "",
        flow: "DEFAULT",
        merchant: {
          name: "MSeGS",
          logo: "https://paymentgw.mizoram.gov.in/images/logo.png",
        },
        style: {
          headerBackgroundColor: "#8dd8ff",
          headerColor: "#3f3f40",
        },
        data: {
          orderId: "1648118268",
          token: "ddc34ad2205f47c58c614641917f3ddb1648119316108",
          tokenType: "TXN_TOKEN",
          amount: "1",
        },
        handler: {
          notifyMerchant: function (eventName, data) {
            if (eventName == "SESSION_EXPIRED") {
              alert("Your session has expired!!");
              location.reload();
            }
          },
        },
      };

      if (window.Paytm && window.Paytm.CheckoutJS) {
        window.Paytm.CheckoutJS.init(config)
          .then(function onSuccess() {
            window.Paytm.CheckoutJS.invoke();
          })
          .catch(function onError(error) {
            console.log("Error => ", error);
          });
      }
    });

    return {
      part1Form,
      part2Form,
      documentForm,
      initPaytm,
      paymentURL,
      page: "https://paymentgw.mizoram.gov.in/msegs-payment/6",

      submit: () => {
        var fields = Object.assign(
          part1Form.value.formData,
          part2Form.value.formData
        );

        console.log("fields", fields);

        formData = Object.assign(formData, fields);

        formData = Object.assign(formData, documentForm.value.formData);

        var formDatas = new FormData();

        for (let data in formData) {
          console.log("data value of" + data, formData[data]);
          formDatas.append(`${data}`, formData[data]);
        }
        // return

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
      },
      router,
      window: window,
      formData,
      options: ["Google", "Facebook", "Twitter", "Apple", "Oracle"],
      maxDate: () => date.formatDate(Date.now(), "YYYY-MM-DD"),
    };
  },
};
</script>
