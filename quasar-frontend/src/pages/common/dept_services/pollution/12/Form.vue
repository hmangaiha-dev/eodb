<template>
  <div class="zcard row items-center q-col-gutter-md">
    <div class="col-12">
      <label class="zlabel" for="name"
        >1. <span class="asterisk"> *</span></label
      >

      <div class="row justify q-col-gutter-md q-ml-md">
        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name">
            (a) Name and location of the unit
            <span class="asterisk"> *</span></label
          >
          <q-input
            type="textarea"
            dense
            outlined
            v-model="formData.pollution_form12_one_a"
          />
        </div>
        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name">(b) Address of the unit</label>
          <q-input
            type="textarea"
            dense
            outlined
            v-model="formData.pollution_form12_one_b"
          />
        </div>
        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name">
            (c) In case of renewal, previous registration number and date of
            registration
          </label>
          <q-input
            dense
            outlined
            v-model="formData.pollution_form12_one_c"
          />
        </div>
      </div>
    </div>

    <div class="col-sm-10 col-xs-12">
      <label class="zlabel" for="name">
        2. Is the unit registered with the DIC or DCSSI of the State Government
        or Union Territory? If yes, attach a copy.
        <span class="asterisk"> *</span></label
      >
      <q-file v-model="formData.pollution_form12_two" outlined>
        <template v-slot:prepend>
          <q-icon name="attach_file" />
        </template>
      </q-file>
    </div>

    <div class="col-12">
      <label class="zlabel" for="name"
        >3. <span class="asterisk"> *</span></label
      >

      <div class="row justify q-col-gutter-md q-ml-md">
        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name">
            (a) Total capital invested on the project
            <span class="asterisk"> *</span></label
          >
          <q-input
            dense
            outlined
            v-model="formData.pollution_form12_three_a"
          />
        </div>
        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name"
            >(b) Year of commencement of production</label
          >
          <q-input
            dense
            outlined
            v-model="formData.pollution_form12_three_b"
          />
        </div>
        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name">
            (c) List of producers and quantum of raw materials supplied to
            producers
          </label>
          <q-input
            type="textarea"
            dense
            outlined
            v-model="formData.pollution_form12_three_c"
          />
        </div>
      </div>
    </div>

    <!-- <div class="col-lg-4 col-sm-6">
      <div class="row justify-end q-col-gutter-md"> -->
    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="name"> Signature of The Applicant </label>
      <q-file v-model="formData.pollution_form12_signature" outlined>
        <template v-slot:prepend>
          <q-icon name="attach_file" />
        </template>
      </q-file>
    </div>
    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="name"> Designation </label>
      <q-input
        v-model="formData.pollution_form12_designation"
        dense
        outlined
      />
      <!-- </div>
      </div> -->
    </div>

    <div class="col-xs-12" />
  </div>
</template>

<script>
import { reactive } from "@vue/reactivity";
import { useStore } from "vuex";
import { onMounted } from "vue";
import { date } from "quasar";

export default {
  setup(props, context) {
    const store = useStore();

    const formData = reactive({
      application_code: "POLLUTION_FORM_12",
      department_id: 11,
      pollution_form12_one: "",
      pollution_form12_one_a: "",
      pollution_form12_one_b: "",
      pollution_form12_one_c: "",
      pollution_form12_two: null,
      pollution_form12_three: "",
      pollution_form12_three_a: "",
      pollution_form12_three_b: "",
      pollution_form12_three_c: "",
      pollution_form12_signature: null,
      pollution_form12_designation: "",
    });
    onMounted(() => {});
    return {
      formData,
      maxDate: () => date.formatDate(Date.now(), "YYYY-MM-DD"),
    };
  },
};
</script>
