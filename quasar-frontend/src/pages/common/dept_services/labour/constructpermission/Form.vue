<template>
  <div class="zcard row items-center q-col-gutter-md">
    <div class="col-lg-6 col-sm-10 col-xs-12">
      <label class="zlabel" for="gender">
        1. Applicant Name
        <span class="asterisk">*</span></label
      >
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.labour_construct_perm_one"
        dense
        outlined
      />
    </div>

    <div class="col-lg-6 col-sm-10 col-xs-12">
      <label class="zlabel" for="gender">
        2. Contact No
        <span class="asterisk">*</span></label
      >
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.labour_construct_perm_two"
        dense
        outlined
      />
    </div>

    <div class="col-lg-6 col-sm-10 col-xs-12">
      <label class="zlabel" for="gender">
        3. Address:
        <span class="asterisk">*</span></label
      >
      <q-input
        type="textarea"
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.labour_construct_perm_three"
        dense
        outlined
      />
    </div>

    <div class="col-lg-6 col-sm-10 col-xs-12">
      <label class="zlabel" for="gender">
        4. Full name and address of factory location
        <span class="asterisk">*</span></label
      >
      <q-input
        type="textarea"
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.labour_construct_perm_four"
        dense
        outlined
      />
    </div>

    <div class="col-lg-6 col-sm-10 col-xs-12">
      <label class="zlabel" for="gender">
        5. District
        <span class="asterisk">*</span></label
      >
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.labour_construct_perm_five"
        dense
        outlined
      />
    </div>

    <div class="col-lg-6 col-sm-10 col-xs-12">
      <label class="zlabel" for="gender">
        6. Town/Village
        <span class="asterisk">*</span></label
      >
      <q-input
        type="textarea"
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.labour_construct_perm_six"
        dense
        outlined
      />
    </div>

    <div class="col-lg-6 col-sm-10 col-xs-12">
      <label class="zlabel" for="gender">
        7. Nearest Police Station
        <span class="asterisk">*</span></label
      >
      <q-input
        type="textarea"
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.labour_construct_perm_seven"
        dense
        outlined
      />
    </div>

    <div class="col-lg-6 col-sm-10 col-xs-12">
      <label class="zlabel" for="gender">
        8. Particulars of plant to be installed

        <span class="asterisk">*</span></label
      >
      <q-input
        type="textarea"
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.labour_construct_perm_eight"
        dense
        outlined
      />
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="gender">
        Signature of Applicant
        <span class="asterisk">*</span></label
      >

      <q-file v-model="formData.labour_construct_perm_signature" outlined>
        <template v-slot:prepend>
          <q-icon name="attach_file" />
        </template>
      </q-file>
    </div>

    <div class="col-12 zlabel">
      Note: This application shall be accompanied by the following documents:
    </div>

    <div class="col-md-10 col-xs-10">
      <label class="zlabel" for="gender">
        1. A flow chart of the manufacturing process supplemented by a brief
        description of the process in its various stages
        <span class="asterisk">*</span></label
      >

      <q-file v-model="formData.labour_construct_perm_flow_chart" outlined>
        <template v-slot:prepend>
          <q-icon name="attach_file" />
        </template>
      </q-file>
    </div>

    <div class="col-md-10 col-xs-10">
      <label class="zlabel" for="gender">
        2. Plans in duplicate drawn to scale showing: <br />
        a) The site of the factory and immediate surroundings including adjacent
        buildings and other structures, roads, drains, etc. and <br />
        b) The plan elevation and necessary cross-sections of various buildings,
        indicating all relevant details relating to natural lighting,
        ventilation and means of escape in case of fire. The plans shall also
        clearly indicate the position of the plant and machinery aisles and
        passage ways <span class="asterisk">*</span></label
      >

      <q-file v-model="formData.labour_construct_perm_plans" outlined>
        <template v-slot:prepend>
          <q-icon name="attach_file" />
        </template>
      </q-file>
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="gender">
        3. Such other particulars as the Chief Inspector may require
        <span class="asterisk">*</span></label
      >

      <q-file v-model="formData.labour_construct_perm_other" outlined>
        <template v-slot:prepend>
          <q-icon name="attach_file" />
        </template>
      </q-file>
    </div>

    <div class="col-xs-12" />
  </div>
</template>

<script>
import { reactive } from "@vue/reactivity";
import { useStore } from "vuex";
import { onMounted } from "vue";
import { date } from "quasar";
import { ref } from "vue";

export default {
  setup(props, context) {
    const store = useStore();

    const formData = reactive({
      application_code: "LABOUR_CONSTRUCT_PERMISSION",
      department_id: 7,
      labour_construct_perm_one: "",
      labour_construct_perm_two: "",
      labour_construct_perm_three: "",
      labour_construct_perm_four: "",
      labour_construct_perm_five: "",
      labour_construct_perm_six: "",
      labour_construct_perm_seven: "",
      labour_construct_perm_eight: "",
      labour_construct_perm_signature: null,
      labour_construct_perm_flow_chart: null,
      labour_construct_perm_plans: null,
      labour_construct_perm_other: null,


    });
    onMounted(() => {});
    return {
      group: ref([]),

      formData,
      maxDate: () => date.formatDate(Date.now(), "YYYY-MM-DD"),
    };
  },
};
</script>

<style>
.option-group > div {
  display: grid;
  grid-template-columns: 2fr 2fr;
}
</style>
