<template>
  <div class="zcard row items-center q-col-gutter-md">
    <div class="col-12">
      <label for="" class="zlabel">1. </label>
      <div class="row justify q-col-gutter-md q-ml-md">
        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="gender">
            a) Name <span class="asterisk">*</span></label
          >
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            v-model="formData.labour_emp_contract_one_a"
            dense
            outlined
          />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="gender">
            b) Locaation of the establishment
            <span class="asterisk">*</span></label
          >
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            v-model="formData.labour_emp_contract_one_b"
            dense
            outlined
          />
        </div>
      </div>
    </div>
    <div class="col-lg-6 col-sm-10 col-xs-12">
      <label class="zlabel" for="gender"
        >2. Postal address of the establishment
        <span class="asterisk">*</span></label
      >
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.labour_emp_contract_two"
        dense
        outlined
      />
    </div>

    <div class="col-12">
      <label for="" class="zlabel">3.</label>
      <div class="row justify q-col-gutter-md q-ml-md">
        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="gender">
            a) Full name. <span class="asterisk">*</span></label
          >
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            v-model="formData.labour_emp_contract_three_a"
            dense
            outlined
          />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="gender">
            b) Address of the principal <span class="asterisk">*</span></label
          >
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            v-model="formData.labour_emp_contract_three_b"
            dense
            outlined
          />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="gender">
            c) Employer (Father's name in the case of individual)</label
          >
          <q-input v-model="formData.labour_emp_contract_three_c" dense outlined />
        </div>
      </div>
    </div>

    <div class="col-12">
      <label for="" class="zlabel">4.</label>
      <div class="row justify q-col-gutter-md q-ml-md">
        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="gender">
            a) Full name. <span class="asterisk">*</span></label
          >
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            v-model="formData.labour_emp_contract_four_a"
            dense
            outlined
          />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="gender">
            b) Address of the Manager <span class="asterisk">*</span></label
          >
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            v-model="formData.labour_emp_contract_four_b"
            dense
            outlined
          />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="gender">
            c)OR person responsible for the supervision and control of the
            establishment</label
          >
          <q-input v-model="formData.labour_emp_contract_four_c" dense outlined />
        </div>
      </div>
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="gender">
        5. Nature of work carried on in the establishment
        <span class="asterisk">*</span></label
      >
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.labour_emp_contract_five"
        dense
        outlined
      />
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="gender"
        >6. Total number of workmen directly employed<span class="asterisk"
          >*</span
        ></label
      >
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.labour_emp_contract_six"
        dense
        outlined
      />
    </div>

    <div class="col-12">
      <label for="" class="zlabel"
        >7. Particulars of contractors and contract labour:</label
      >
      <div class="row justify q-col-gutter-md q-ml-md">
        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="gender">
            a) Name and address of Contractor
            <span class="asterisk">*</span></label
          >
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            v-model="formData.labour_emp_contract_seven_a"
            dense
            outlined
          />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="gender">
            b) Nature of work in which contract labour is employed or is to be
            employed <span class="asterisk">*</span></label
          >
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            v-model="formData.labour_emp_contract_seven_b"
            dense
            outlined
          />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="gender">
            c) Maximum number of contract labour to be employed on any day
            through each contractor <span class="asterisk">*</span>
          </label>
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            v-model="formData.labour_emp_contract_seven_c"
            dense
            outlined
          />
        </div>
      </div>
    </div>

    <div class="col-lg-6 col-sm-10 col-xs-12">
      <label class="zlabel" for="gender">
        8. Particulars of Treasury Receipt enclosed (Name of the Treasury,
        Amount and date)
        <span class="asterisk">*</span></label
      >

      <q-file v-model="formData.labour_emp_contract_eight" outlined>
        <template v-slot:prepend>
          <q-icon name="attach_file" />
        </template>
      </q-file>
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

      <q-file v-model="formData.labour_emp_contract_signature" outlined>
        <template v-slot:prepend>
          <q-icon name="attach_file" />
        </template>
      </q-file>
    </div>

    <div class="col-md-6 col-xs-10">
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
      application_code: "LABOUR_EMPLOYMENT_CONTRACT",
      department_id: 7,
      labour_emp_contract_one: "",
      labour_emp_contract_one_a: "",
      labour_emp_contract_one_b: "",
      labour_emp_contract_two: "",
      labour_emp_contract_three: "",
      labour_emp_contract_three_a: "",
      labour_emp_contract_three_b: "",
      labour_emp_contract_three_c: "",
      labour_emp_contract_four: "",
      labour_emp_contract_four_a: "",
      labour_emp_contract_four_b: "",
      labour_emp_contract_four_c: "",
      labour_emp_contract_five: "",
      labour_emp_contract_six: "",
       labour_emp_contract_seven: "",
      labour_emp_contract_seven_a: "",
      labour_emp_contract_seven_b: "",
      labour_emp_contract_seven_c: "",
      labour_emp_contract_date: "",
      labour_emp_contract_eight: null,
      labour_emp_contract_signature: null,

      
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
