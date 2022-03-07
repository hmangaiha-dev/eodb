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
            <div class="zcard row q-ma-xs q-col-gutter-lg">
              <div class="col-xs-12">
                <Declaration ref="declarationRef" />
                <div class="col-xs-12 col-md-5">
                  <label class="zlabel" for="gender"></label>
                  <div class="q-gutter-sm">
                    <q-checkbox
                      v-model="declaration_consent"
                      label="I accept the terms and conditions"
                      color="teal"
                    />
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12 q-mt-md">
              <q-btn
                :disable="!declaration_consent"
                color="green-6"
                type="submit"
                label="Save Application"
              />
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
import { useQuasar } from "quasar";
import { useRouter, useRoute } from "vue-router";
// import { useStore } from "vuex"  ;

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
    const q = useQuasar();
    const applicantRef = ref(null);
    const FirmRef = ref(null);
    const proposedRef = ref(null);
    const partCRef = ref(null);
    const partDRef = ref(null);
    const partERef = ref(null);
    const partFRef = ref(null);
    const partGRef = ref(null);
    const declarationRef = ref(null);
    const declaration_consent = ref(false);
    const tab = ref("a");
    const router = useRouter();
    const store = useStore();

    const toggle = (val) => {
      let applications = [{}];

      val == "b" &&
        Object.assign(
          applications[0],
          applicantRef.value?.formData,
          FirmRef.value?.formData
        );
      val == "c" && Object.assign(applications[0], proposedRef.value?.formData);
      val == "d" && Object.assign(applications[0], partCRef.value?.formData);
      val == "e" && Object.assign(applications[0], partDRef.value?.formData);
      val == "f" && Object.assign(applications[0], partERef.value?.formData);
      val == "g" && Object.assign(applications[0], partFRef.value?.formData);
      val == "declaration" &&
        Object.assign(applications[0], partGRef.value?.formData);
      val == "final" &&
        Object.assign(applications[0], declarationRef.value?.formData);

      var formDatas = new FormData();

      // return console.log("applications", applications[0]);

      for (let data in applications[0]) {
        formDatas.append(`${data}`, applications[0][data]);
      }

      // applications[0].din_details.splice(
      //   applications[0].din_details.length - 1
      // );

      if (val == "b") {
        formDatas.delete("din_details");
        // console.log('drtilas',applications[0].din_details);
        // return
        applications[0].din_details.forEach((element, index) => {
          formDatas.append(`din_attach[${index}][id]`, element.id);
          formDatas.append(`din_attach[${index}][number]`, element.number);
          formDatas.append(
            `din_attach[${index}][qualification]`,
            element.qualification
          );
          formDatas.append(
            `din_attach[${index}][association_year]`,
            element.association_year
          );
          formDatas.append(
            `din_attach[${index}][experience_year]`,
            element.experience_year
          );
        });
      }

      if (val == "f") {
        // formDatas.delete("fciDetails");
        formDatas.append(
          "fciDetails",
          JSON.stringify(applications[0].fciDetails)
        );
      }
      if (val == "g") {
        formDatas.append(
          "manufactureDetails",
          JSON.stringify(applications[0].manufactureDetails)
        );
        formDatas.append(
          "emissionDetails",
          JSON.stringify(applications[0].emissionDetails)
        );

        formDatas.append(
          "solidWasteDetails",
          JSON.stringify(applications[0].solidWasteDetails)
        );
      }

      // return console.log(formDatas.get(fci_details));;

      // return console.log(formDatas.get("din_attach[0]"));

      api
        .post("/investor/common-applications/store", formDatas)
        .then((res) => {
          // return console.log("res value", res.data);
          if (val == "final") {
            q.notify({
              message: "Application submitted successfully",
              color: "green",
            });
            // router.push({ name: "investor:ongoing" });
          } else tab.value = val;
        })
        .catch((err) => console.log("error", err));

      return;
    };

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
      declaration_consent,
      toggle,
    };
  },
};
</script>

<style>
.zlist {
  border-radius: 8px;
}
</style>
