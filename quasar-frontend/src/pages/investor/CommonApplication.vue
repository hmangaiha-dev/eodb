<template>
  <q-page>
    <div class="row q-py-sm items-center q-col-gutter-md">
      <h1 class="ztitle col-12">Common Application Form</h1>
      <q-tabs
        v-model="tab"
        dense
        class="text-grey col-xs-12"
        active-color="primary"
        indicator-color="primary"
        align="justify"
        narrow-indicator
        @update:tab="watchTab"
      >
        <q-tab name="a" label="Part-A" />
        <q-tab name="b" label="Part-B" />
        <q-tab name="c" label="Part-C" />
        <q-tab name="d" label="Part-D" />
        <q-tab name="e" label="Part-E" />
        <q-tab name="f" label="Part-F" />

        <q-tab name="g" label="Part-G" />
        <q-tab name="declaration" label="Self-Declaration" />
      </q-tabs>
      <!-- <q-form class="row"> -->
      <q-tab-panels keep-alive v-model="tab" animated>
        <q-tab-panel name="a">
          <q-form @submit.prevent="toggle('b')">
            <div class="row q-col-gutter-lg">
              <div class="col-xs-12">
                <PersonalDetails ref="applicantRef" />
              </div>
              <div class="col-xs-12">
                <FirmDetails ref="FirmRef" />
              </div>
            </div>

            <div class="col-12 q-mt-md">
              <q-btn color="green-6" type="submit" label="Save & Next" />
            </div>
          </q-form>
        </q-tab-panel>

        <q-tab-panel name="b">
          <q-form @submit.prevent="toggle('c')">
            <div class="row q-col-gutter-lg">
              <div class="col-xs-12">
                <ProposedDetails ref="proposedRef" />
              </div>
            </div>

            <div class="col-12 q-mt-md">
              <q-btn color="green-6" type="submit" label="Save & Next" />
            </div>
          </q-form>
        </q-tab-panel>

        <q-tab-panel name="c">
          <q-form @submit.prevent="toggle('d')">
            <div class="row q-col-gutter-lg">
              <div class="col-xs-12">
                <PartC ref="partCRef" />
              </div>
            </div>

            <div class="col-12 q-mt-md">
              <q-btn color="green-6" type="submit" label="Save & Next" />
            </div>
          </q-form>
        </q-tab-panel>

        <q-tab-panel name="d">
          <q-form @submit.prevent="toggle('e')">
            <div class="row q-col-gutter-lg">
              <div class="col-xs-12">
                <PartD ref="partDRef" />
              </div>
            </div>
            <div class="col-12 q-mt-md">
              <q-btn color="green-6" type="submit" label="Save & Next" />
            </div>
          </q-form>
        </q-tab-panel>

        <q-tab-panel name="e">
          <q-form @submit.prevent="toggle('f')">
            <div class="row q-col-gutter-lg">
              <div class="col-xs-12">
                <PartE ref="partERef" />
              </div>
            </div>
            <div class="col-12 q-mt-md">
              <q-btn color="green-6" type="submit" label="Save & Next" />
            </div>
          </q-form>
        </q-tab-panel>

        <q-tab-panel name="f">
          <q-form @submit.prevent="toggle('g')">
            <div class="row q-col-gutter-lg">
              <div class="col-xs-12">
                <PartF ref="partFRef" />
              </div>
            </div>
            <div class="col-12 q-mt-md">
              <q-btn color="green-6" type="submit" label="Save & Next" />
            </div>
          </q-form>
        </q-tab-panel>

        <q-tab-panel name="g">
          <q-form @submit.prevent="toggle('declaration')">
            <div class="row q-col-gutter-lg">
              <div class="col-xs-12">
                <PartG ref="partGRef" />
              </div>
            </div>
            <div class="col-12 q-mt-md">
              <q-btn color="green-6" type="submit" label="Save & Next" />
            </div>
          </q-form>
        </q-tab-panel>

        <q-tab-panel name="declaration">
         <q-form @submit.prevent="toggle('final')">
            <div class="row q-col-gutter-lg">
              <div class="col-xs-12">
                <Declaration ref="declarationRef" />
              </div>
            </div>
            <div class="col-12 q-mt-md">
              <q-btn color="green-6" type="submit" label="Save Application" />
              <!-- <span class="q-mx-md"> </span> -->
              <!-- <q-btn color="blue-6" type="submit" label="Final Submit" /> -->
            </div>
          </q-form>
        </q-tab-panel>
      </q-tab-panels>
      <!-- </q-form> -->
    </div>
  </q-page>
</template>
<script>
import { reactive } from "@vue/reactivity";
import { useStore } from "vuex";
import { onMounted } from "vue";
import { date } from "quasar";
import { ref } from "vue";
import { api } from "src/boot/axios";

import PersonalDetails from "./form/PersonalDetails.vue";
import FirmDetails from "./form/FirmDetails.vue";
import ProposedDetails from "./form/ProposedDetails.vue";
import PartC from "./form/PartC.vue";
import PartD from "./form/PartD.vue";
import PartE from "./form/PartE.vue";
import PartF from "./form/PartF.vue";
import PartG from "./form/PartG.vue";
import Declaration from "./form/Declaration.vue";
import { useRouter, useRoute } from "vue-router";
// import { useStore } from "vuex";

export default {
  components: {
    PersonalDetails,
    FirmDetails,
    ProposedDetails,
    PartC,
    PartD,
    PartE,
    PartF,
    PartG,
    Declaration,
  },
  setup(props, context) {
    const applicantRef = ref(null);
    const FirmRef = ref(null);
    const proposedRef = ref(null);
    const partCRef = ref(null);
    const partDRef = ref(null);
    const partERef = ref(null);
    const partFRef = ref(null);
    const partGRef = ref(null);
    const declarationRef = ref(null);
    const tab = ref("a");
    const router = useRouter();
    const store = useStore();

    const toggle = (val) => {
      formData = {};
      if (val == "b") {
        formData = Object.assign({}, applicantRef.value.formData);
        formData = Object.assign(formData, FirmRef.value.formData);
      } else if (val == "c") {
        formData = Object.assign({}, proposedRef.value.formData);
      } else if (val == "d") {
        formData = Object.assign({}, partCRef.value.formData);
      } else if (val == "e") {
        formData = Object.assign({}, partDRef.value.formData);
      } else if (val == "f") {
        formData = Object.assign({}, partERef.value.formData);
      } else if (val == "g") {
        formData = Object.assign({}, partFRef.value.formData);
      } else if (val == "declaration") {
        formData = Object.assign({}, partGRef.value.formData);
      } 
      else if (val == "final") {
        formData = Object.assign({}, declarationRef.value.formData);
      }

      var formDatas = new FormData();

      for (let data in formData) {
        formDatas.append(`${data}`, formData[data]);
      }
      // formDatas.append('model','A');
      // return console.log("form values", formData);
      api
        .post("/investor/common-applications/store", formDatas)
        .then((res) => {
          console.log("response value", res.data);
          // q.notify({
          //   message: "Application submitted successfully",
          //   color: "green",
          // });
          // router.push({ name: "investor:ongoing" });
        })
        .catch((err) => console.log("error", err));

      // store.dispatch("globalData/fetchCommonData");

      return;

      tab.value = val;
      var formData = {};

      // return console.log(q);

      formData = Object.assign({}, applicantRef.value.formData);
      formData = Object.assign(formData, FirmRef.value.formData);

      return console.log("form values", formData);

      var formDatas = new FormData();

      for (let data in formData) {
        formDatas.append(`${data}`, formData[data]);
      }
    };

    onMounted(() => {
      console.log("dispatching");
      // store.dispatch("globalData/fetchCommonData");
    });

    const watchTab = (oldValue, newValue) => {
      console.log("new and old", oldValue, newValue);
    };
    const finalSubmit = () => {
      api
        .get("/investor/common-applications")
        .then((res) => {
          console.log("response value", res.data);
          // q.notify({
          //   message: "Application submitted successfully",
          //   color: "green",
          // });
          // router.push({ name: "investor:ongoing" });
        })
        .catch((err) => console.log("error", err));

      return;
      console.log("final submit");

      var applications = [
        {
          ...applicantRef.value.formData,
          ...FirmRef.value.formData,
          ...proposedRef.value.formData,
          ...partCRef.value.formData,
          ...partDRef.value.formData,
          ...partERef.value.formData,
          ...partFRef.value.formData,
          ...partGRef.value.formData,
          ...declarationRef.value.formData,
        },
      ];

      var formDatas = new FormData();

      for (let data in applications[0]) {
        console.log(`${data}`, applications[0][data]);

        formDatas.append(`${data}`, applications[0][data]);
      }

      console.log("formDatas", applications);
    };

    // const store = useStore();
    // const draft = store.getters["applicantData/getCurrentDraft"];
    // const currentUser = store.getters["auth/getCurrentUser"];

    const formData = reactive({});

    return {
      tab,
      applicantRef,
      FirmRef,
      proposedRef,
      declarationRef,
      partCRef,
      partDRef,
      partERef,
      partFRef,
      partGRef,
      Declaration,
      formData,
      toggle,
      watchTab,
      finalSubmit,
      options: ["Google", "Facebook", "Twitter", "Apple", "Oracle"],
      maxDate: () => date.formatDate(Date.now(), "YYYY-MM-DD"),
    };
  },
};
</script>

<style>
.zlist {
  border-radius: 8px;
}
</style>
