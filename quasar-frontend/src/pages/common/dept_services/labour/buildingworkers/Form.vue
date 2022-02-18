<template>
  <div class="zcard row items-center q-col-gutter-md">
    <div class="col-lg-6 col-sm-10 col-xs-12">
      <label class="zlabel" for="gender">
        1. Name and location of the Establishment where building or other
        construction work is to be carried on:
        <span class="asterisk">*</span></label
      >
      <q-input
        type="textarea"
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.labour_employ_work_one"
        dense
        outlined
      />
    </div>

    <div class="col-lg-6 col-sm-10 col-xs-12">
      <label class="zlabel" for="gender">
        2. Postal address of the Establishment:
        <span class="asterisk">*</span></label
      >
      <q-input
        type="textarea"
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.labour_employ_work_two"
        dense
        outlined
      />
    </div>

    <div class="col-lg-6 col-sm-10 col-xs-12">
      <label class="zlabel" for="gender">
        3. Full name and permanent address of the Establishment (if any):
        <span class="asterisk">*</span></label
      >
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.labour_employ_work_three"
        dense
        outlined
      />
    </div>

    <div class="col-lg-6 col-sm-10 col-xs-12">
      <label class="zlabel" for="gender">
        4. Full names and address of the Manager or person responsible for the
        supervision and control of the establishment:
        <span class="asterisk">*</span></label
      >
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.labour_employ_work_four"
        dense
        outlined
      />
    </div>

    <div class="col-lg-6 col-sm-10 col-xs-12">
      <label class="zlabel" for="gender">
        5. Nature of building or other construction work carried/ is to be
        carried on in the Establishment:
        <span class="asterisk">*</span></label
      >
      <q-input
        type="textarea"
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.labour_employ_work_five"
        dense
        outlined
      />
    </div>

    <div class="col-lg-6 col-sm-10 col-xs-12">
      <label class="zlabel" for="gender">
        6. Maximum number of building workers to be employed on any day. Names
        and addresses of contractors:
        <span class="asterisk">*</span></label
      >
      <q-input
        type="textarea"
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.labour_employ_work_six"
        dense
        outlined
      />
    </div>

    <div class="col-lg-6 col-sm-10 col-xs-12">
      <label class="zlabel" for="gender">
        7. Estimated date of commencement of building or other construction
        work:
        <span class="asterisk">*</span></label
      >
      <q-input
        type="date"
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.labour_employ_work_seven"
        dense
        outlined
      />
    </div>

    <div class="col-lg-6 col-sm-10 col-xs-12">
      <label class="zlabel" for="gender">
        8. Estimated date of completion of the building or other construction
        work:
        <span class="asterisk">*</span></label
      >
      <q-input
        type="date"
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.labour_employ_work_eight"
        dense
        outlined
      />
    </div>

    <div class="col-lg-6 col-sm-10 col-xs-12">
      <label class="zlabel" for="gender">
        9. Particulars of demand draft, enclosed (name of the Bank amount,
        demand draft No. and date):
        <span class="asterisk">*</span></label
      >
      <q-file v-model="formData.labour_employ_work_nine" outlined>
        <template v-slot:prepend>
          <q-icon name="attach_file" />
        </template>
      </q-file>
    </div>

    <div class="col-12 zlabel">
      <span class="text-weight-bold">Declaration by the employer.</span> <br />
      1. I hereby declare that the particulars given above are true to the best
      of my knowledge and belief. <br />
      2. I undertake to abide by the previsions of the Building and Other
      Construction Workers (Regulation and Conditions Service) Act, 1996 and the
      Rules made thereunder.
    </div>

    <div class="col-xs-12" />
  </div>
</template>

<script>
import { reactive } from "@vue/reactivity";
import { useStore } from "vuex";
import { onMounted ,watch } from "vue";
import { date } from "quasar";
import { ref } from "vue";

export default {
  setup(props, context) {
    const store = useStore();

    const formData = reactive({
      application_code: "LABOUR_EMPLOY_WORKERS",
      department_id: 7,
      labour_employ_work_one: "",
      labour_employ_work_two: "",
      labour_employ_work_three: "",
      labour_employ_work_four: "",
      labour_employ_work_five: "",
      labour_employ_work_six: "",
      labour_employ_work_seven: "",
      labour_employ_work_eight: "",
      labour_employ_work_nine: null,
     
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

      formData.labour_employ_work_one = address;

    };



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
