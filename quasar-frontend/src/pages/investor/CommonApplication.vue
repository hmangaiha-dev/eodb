<template>
  <q-page>
    <div class="zcard row items-center q-col-gutter-md">
      <div class="col-sm-4 col-xs-12">
        <q-list class="zlist" bordered>
          <q-item clickable>
            <q-item-section class="text-green text-subtitle1"
              >1.Personal Details</q-item-section
            >
            <q-item-section avatar class="text-green text-caption"
              >Completed</q-item-section
            >
          </q-item>
        </q-list>
      </div>

      <div class="col-sm-4 col-xs-12">
        <q-list class="zlist" bordered>
          <q-item clickable>
            <q-item-section class="text-green text-subtitle1"
              >2.Firm Details</q-item-section
            >
            <q-item-section avatar class="text-green text-caption"
              >Pending</q-item-section
            >
          </q-item>
        </q-list>
      </div>

      <div class="col-sm-4 col-xs-12">
        <q-list class="zlist" bordered>
          <q-item clickable>
            <q-item-section class="text-green text-subtitle1"
              >3.Project Details</q-item-section
            >
            <q-item-section avatar class="text-green text-caption"
              >Completed</q-item-section
            >
          </q-item>
        </q-list>
      </div>
    </div>
    <div class="zcard row items-center q-col-gutter-md">
      <h1 class="text-h6 col-12">Common Application Form</h1>
      <q-tabs
        v-model="tab"
        dense
        class="text-grey col-lg-8 col-sm-12 col-xs-12"
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
      </q-tabs>
      <q-form class="row">
        <q-tab-panels v-model="tab" animated>
          <q-tab-panel name="a">
            <q-form>
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
            <div class="row q-col-gutter-lg">
              <div class="col-xs-12">
                <ProposedDetails ref="proposedRef" />
              </div>
            </div>

            <div class="col-12 q-mt-md">
              <q-btn color="green-6" type="submit" label="Save & Next" />
            </div>
          </q-tab-panel>

          <q-tab-panel name="c">
            <div class="row q-col-gutter-lg">
              <div class="col-xs-12">
                <PartC ref="partCRef" />
              </div>
            </div>

            <div class="col-12 q-mt-md">
              <q-btn color="green-6" type="submit" label="Save & Next" />
            </div>
          </q-tab-panel>

          <q-tab-panel name="d">
            <div class="row q-col-gutter-lg">
              <div class="col-xs-12">
                <PartD ref="partDRef" />
              </div>
            </div>

            <div class="col-12 q-mt-md">
              <q-btn color="green-6" type="submit" label="Save & Next" />
            </div>
          </q-tab-panel>

          <q-tab-panel name="e">
            <div class="row q-col-gutter-lg">
              <div class="col-xs-12">
                <PartE ref="partERef" />
              </div>
            </div>

            <div class="col-12 q-mt-md">
              <q-btn color="green-6" type="submit" label="Save & Next" />
            </div>
          </q-tab-panel>
        </q-tab-panels>
      </q-form>
    </div>
  </q-page>
</template>
<script>
import { reactive } from "@vue/reactivity";
import { useStore } from "vuex";
import { onMounted } from "vue";
import { date } from "quasar";
import { ref } from "vue";

import PersonalDetails from "./form/PersonalDetails.vue";
import FirmDetails from "./form/FirmDetails.vue";
import ProposedDetails from "./form/ProposedDetails.vue";
import PartC from "./form/PartC.vue";
import PartD from "./form/PartD.vue";
import PartE from "./form/PartE.vue";

export default {
  components: {
    PersonalDetails,
    FirmDetails,
    ProposedDetails,
    PartC,
    PartD,
    PartE,
  },
  setup(props, context) {
    const applicantRef = ref(null);
    const FirmRef = ref(null);
    const proposedRef = ref(null);
    const partCRef = ref(null);
    const partDRef = ref(null);
    const partERef = ref(null);

    const store = useStore();
    const draft = store.getters["applicantData/getCurrentDraft"];
    const currentUser = store.getters["auth/getCurrentUser"];

    const formData = reactive({
      
    });
    onMounted(() => {});
    return {
      tab: ref("a"),
      applicantRef,
      FirmRef,
      proposedRef,
      partCRef,
      partDRef,
      partERef,
      formData,
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
