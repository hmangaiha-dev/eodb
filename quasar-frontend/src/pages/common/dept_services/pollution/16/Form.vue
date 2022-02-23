<template>
  <div class="zcard row items-center q-col-gutter-md">
    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="name">
        1 Name and Address of the importer
        <span class="asterisk"> *</span></label
      >
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        type="textarea"
        dense
        outlined
        v-model="formData.pollution_form16_one"
      />
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="name">
        2 Import / Export Licence No.
        <span class="asterisk"> *</span></label
      >
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        dense
        outlined
        v-model="formData.pollution_form16_two"
      />
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="name">
        3 Name of person / owner / occupier as the case may be
        <span class="asterisk"> *</span></label
      >
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        type="textarea"
        dense
        outlined
        v-model="formData.pollution_form16_three"
      />
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="name"> Signature of the Importer </label>
      <q-file v-model="formData.pollution_form16_signature" outlined>
        <template v-slot:prepend>
          <q-icon name="attach_file" />
        </template>
      </q-file>
    </div>

    <!-- <div class="col-lg-4 col-sm-6">
      <div class="row justify-end q-col-gutter-md"> -->

    <div class="col-xs-12" />
  </div>
</template>

<script>
import { reactive } from "@vue/reactivity";
import { useStore } from "vuex";
import { onMounted,watch } from "vue";
import { date } from "quasar";

export default {
  setup(props, context) {
    const store = useStore();

    const formData = reactive({
      application_code: "POLLUTION_FORM_16",
      department_id: 11,
      pollution_form16_one: "",
      pollution_form16_two: "",
      pollution_form16_three: "",
      pollution_form16_signature: null,
    });
    watch(store.state.globalData.common, () => getA());

    const getA = () => {
      const { applicant_name, address } =
        store.state.globalData.common.partA

      formData.pollution_form16_one = `Name: ${applicant_name || ''}\nAddress: ${address || ''}`
      formData.pollution_form16_three = applicant_name
    };

    onMounted(async () => getA());
    return {
      formData,
      maxDate: () => date.formatDate(Date.now(), "YYYY-MM-DD"),
    };
  },
};
</script>
