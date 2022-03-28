<template>
  <div class="zcard row items-center q-col-gutter-md">
    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="name">
        1. Name and address of the dealers with telephone and fax numbers:
        <span class="asterisk"> *</span></label
      >
      <q-input
        type="textarea"
        dense
        outlined
        v-model="formData.pollution_form15_one"
         :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
      />
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="name">
        2. TIN/VAT number*
        <span class="asterisk"> *</span></label
      >
      <q-input dense outlined v-model="formData.pollution_form15_two" 
       :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"/>
    </div>

    <div class="col-12 text-center zlabel">
      *If applicable (as percurrent state sale tax rules, mandatory tin/vat
      number is require only if the annual turnover of the dealer is more than
      the prescribed value)
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="name">
        Signature of the authorized person
      </label>
      <q-file v-model="formData.pollution_form15_signature" outlined>
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
import { onMounted, watch } from "vue";
import { date } from "quasar";

export default {
  setup(props, context) {
    const store = useStore();

    const formData = reactive({
      application_code: "POLLUTION_FORM_15",
      department_id: 11,
      pollution_form15_one: "",
      pollution_form15_two: "",
      pollution_form15_signature: null,
    });
    watch(store.state.globalData.common, () => getA());

    const getA = () => {
      const { applicant_name, phone_no, fax_no,tin_no } =
        store.state.globalData.common.partA || "";

      formData.pollution_form15_one = `Name: ${applicant_name}\nTelephone: ${phone_no}\nFax no: ${fax_no}`;
      formData.pollution_form15_two = tin_no
    };

    onMounted(async () => getA());

    return {
      formData,
      maxDate: () => date.formatDate(Date.now(), "YYYY-MM-DD"),
    };
  },
};
</script>
