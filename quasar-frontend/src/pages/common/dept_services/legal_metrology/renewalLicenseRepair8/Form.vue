<template>
  <div class="zcard row items-center q-col-gutter-md">
    <!-- <div class="col-12">
      <label for="" class="zlabel">1. </label>
      <div class="row justify q-col-gutter-md q-ml-md">
      

       
      </div>
    </div> -->
    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="gender">
        1. Name and complete address of the repairing concern/ person seeking
        renewal of the licence .<span class="asterisk">*</span></label
      >
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.legal_license_renewal_repairer_one"
        dense
        outlined
      />
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="gender">
        2. Repairer's Licence Number.
        <span class="asterisk">*</span></label
      >
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.legal_license_renewal_repairer_two"
        dense
        outlined
      />
    </div>
    <div class="col-lg-6 col-sm-10 col-xs-12">
      <label class="zlabel" for="gender"
        >3. Name (s) and address (s) along with their father's/ husband's name
        of proprietor (s) and/or Partners and Managing Director (s) in the case
        of Limited company. <span class="asterisk">*</span></label
      >
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.legal_license_renewal_repairer_three"
        dense
        outlined
      />
    </div>

    <div class="col-12">
      <div class="col-md-6 col-xs-10">
        <label class="zlabel" for="gender">
          4. Registration Number and date of current shop/
          establishment/Municipal Trade Licence.<span class="asterisk"
            >*</span
          ></label
        >
        <q-input
          :rules="[(val) => (val && val.length > 0) || 'Please type something']"
          v-model="formData.legal_license_renewal_repairer_four"
          dense
          outlined
        />
      </div>

      <div class="col-md-6 col-xs-10">
        <label class="zlabel" for="gender">
          5. Registration Number of VAT/ Sales Tax/CST/Professional Tax/Income
          Tax
          <span class="asterisk">*</span></label
        >
        <q-input
          :rules="[(val) => (val && val.length > 0) || 'Please type something']"
          v-model="formData.legal_license_renewal_repairer_five"
          dense
          outlined
        />
      </div>

      <div class="col-12">
        <label for="" class="zlabel">6. :</label>
        <div class="row justify q-col-gutter-md q-ml-md">
          <div class="col-md-6 col-xs-10">
            <label class="zlabel" for="gender">
              (a) The Type of weights and measures repaired as per licence granted<span class="asterisk">*</span></label
            >
            <q-input
              :rules="[
                (val) => (val && val.length > 0) || 'Please type something',
              ]"
              v-model="formData.legal_license_renewal_repairer_six_a"
              dense
              outlined
            />
          </div>

          <div class="col-md-6 col-xs-10">
            <label class="zlabel" for="gender">
              (b) Do you propose any change?<span class="asterisk"
                >*</span
              ></label
            >
            <q-input
              :rules="[
                (val) => (val && val.length > 0) || 'Please type something',
              ]"
              v-model="formData.legal_license_renewal_repairer_six_b"
              dense
              outlined
            />
          </div>
        </div>
      </div>
      <div class="col-md-6 col-xs-10">
        <label class="zlabel" for="gender">
          7. Area in which you are operating.
        </label>
        <q-input
          v-model="formData.legal_license_renewal_repairer_seven"
          dense
          outlined
        />
      </div>
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="gender">
        8. Have you sufficient stock of loan/test weights, etc.?
        <span class="asterisk">*</span></label
      >
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.legal_license_renewal_repairer_eight"
        dense
        outlined
      />
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="gender"
        >9. Please give details with particulars of stamping.
        <span class="asterisk">*</span></label
      >
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.legal_license_renewal_repairer_nine"
        dense
        outlined
      />
    </div>

    <div class="col-12 zlabel">
      I hereby declare that the particulars given above are true to the best of
      my knowledge and belief.
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="gender">
        Signature
        <span class="asterisk">*</span></label
      >

      <q-file
        v-model="formData.legal_license_renewal_repairer_signature_designation"
        outlined
      >
        <template v-slot:prepend>
          <q-icon name="attach_file" />
        </template>
      </q-file>
    </div>

    <!-- <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="gender">
        Date of receipt of application: <span class="asterisk">*</span>
      </label>
      <q-input
        type="date"
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.labour_emp_contract_date"
        dense
        outlined
      />
    </div> -->

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
      application_code: "LEGAL_LICENCE_RENEWAL_REPAIRER",
      department_id: 10,
      legal_license_renewal_repairer_two: "",
      legal_license_renewal_repairer_one: "",
      legal_license_renewal_repairer_three: "",
      legal_license_renewal_repairer_four: "",
      legal_license_renewal_repairer_five: "",
      legal_license_renewal_repairer_six_a: "",
      legal_license_renewal_repairer_six_b: "",
      legal_license_renewal_repairer_seven: "",
      legal_license_renewal_repairer_eight: "",
      legal_license_renewal_repairer_nine: "",

      legal_license_renewal_repairer_signature_designation: null,
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
