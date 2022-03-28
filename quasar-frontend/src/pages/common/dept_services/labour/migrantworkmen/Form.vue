<template>
  <div class="zcard row items-center q-col-gutter-md">
    <div class="col-lg-6 col-sm-10 col-xs-12">
      <label class="zlabel" for="gender">
        1. Name and location of the establishment:
        <span class="asterisk">*</span></label
      >
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.labour_migant_work_one"
        dense
        outlined
      />
    </div>

    <div class="col-lg-6 col-sm-10 col-xs-12">
      <label class="zlabel" for="gender">
        2. Postal address of the establishment:
        <span class="asterisk">*</span></label
      >
      <q-input
        type="textarea"
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.labour_migant_work_two"
        dense
        outlined
      />
    </div>

    <div class="col-lg-6 col-sm-10 col-xs-12">
      <label class="zlabel" for="gender">
        3. Full name and address of the principal employer (furnish father's/
        Husband's name in the case of individuals):
        <span class="asterisk">*</span></label
      >
      <q-input
        type="textarea"
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.labour_migant_work_three"
        dense
        outlined
      />
    </div>

    <div class="col-lg-6 col-sm-10 col-xs-12">
      <label class="zlabel" for="gender">
        4. Names and address of the directors/particulars of partners (in case
        of companies and firms):
        <span class="asterisk">*</span></label
      >
      <q-input
        type="textarea"
        v-model="formData.labour_migant_work_four"
        dense
        outlined
      />
    </div>

    <div class="col-lg-6 col-sm-10 col-xs-12">
      <label class="zlabel" for="gender">
        5. Full name and address of the Manager or person responsible for the
        supervision and control of the establishment:
        <span class="asterisk">*</span></label
      >
      <q-input
        type="textarea"
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.labour_migant_work_five"
        dense
        outlined
      />
    </div>

    <div class="col-lg-6 col-sm-10 col-xs-12">
      <label class="zlabel" for="gender">
        6. Nature of work carried on in the establishment:
        <span class="asterisk">*</span></label
      >
      <q-input
        type="textarea"
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.labour_migant_work_six"
        dense
        outlined
      />
    </div>

    <div class="col-12">
      <label for="" class="zlabel">
        7. Particulars of contractors and migrant workmen
      </label>
      <div class="row justify q-col-gutter-md q-ml-md">
        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="gender">
            a) Names and addresses of contractors:
            <span class="asterisk">*</span></label
          >
          <q-input
            type="textarea"
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            v-model="formData.labour_migant_work_seven_a"
            dense
            outlined
          />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="gender">
            b) Nature of work for which, migrant workmen are to be recruited or
            are employed:
            <span class="asterisk">*</span></label
          >
          <q-input
            type="textarea"
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            v-model="formData.labour_migant_work_seven_b"
            dense
            outlined
          />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="gender">
            c) Maximum number of migrant workmen to be employed on any day
            through each contractor:
            <span class="asterisk">*</span></label
          >
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            v-model="formData.labour_migant_work_seven_c"
            dense
            outlined
          />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="gender">
            d) Date and commencement of work under each contractor:
            <span class="asterisk">*</span></label
          >
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            v-model="formData.labour_migant_work_seven_d"
            dense
            outlined
          />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="gender">
            e) Estimated date of termination of employment of migrant workmen
            under each contractor:
            <span class="asterisk">*</span></label
          >
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            v-model="formData.labour_migant_work_seven_e"
            dense
            outlined
          />
        </div>
      </div>
    </div>

    <div class="col-12 zlabel">
      I hereby declare that particulars given above are true to the best of my
      knowledge and belief
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="gender">
        8. Original copy of the Treasury challan depositing the requisite fees
        enclosed.
        <span class="asterisk">*</span></label
      >

      <q-file v-model="formData.labour_migant_work_eight" outlined>
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
import { onMounted ,watch} from "vue";
import { date } from "quasar";
import { ref } from "vue";

export default {
  setup(props, context) {
    const store = useStore();

    const formData = reactive({
      application_code: "LABOUR_MIGRANT_WORKMEN",
      department_id: 7,
      labour_migant_work_one: "",
      labour_migant_work_two: "",
      labour_migant_work_three: "",
      labour_migant_work_four: "",
      labour_migant_work_five: "",
      labour_migant_work_six: "",
      labour_migant_work_seven: "",
      labour_migant_work_seven_a: "",
      labour_migant_work_seven_b: "",
      labour_migant_work_seven_c: "",
      labour_migant_work_seven_d: "",
      labour_migant_work_seven_e: "",
      labour_migant_work_eight: null
  
    });

 watch(store.state.globalData.common, () => {
      getA();
    });

    const getA = () => {
      const {
        applicant_name,
        city_town,
        postal_code,
        address,
        mobile_no,
        email,
        enterprise_name,
        enterprise_typ,
        company_reg_certe,
      } = store.state.globalData.common.partA;

      formData.labour_migant_work_one = enterprise_name;
      formData.labour_migant_work_two = address;
   
    };
    
    onMounted(() => {});
    return {
      group: ref([]),

      formData,
      getA,
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
