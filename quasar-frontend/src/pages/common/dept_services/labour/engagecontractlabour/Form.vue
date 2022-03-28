<template>
  <div class="zcard row items-center q-col-gutter-md">
    <div class="col-lg-6 col-sm-10 col-xs-12">
      <label class="zlabel" for="gender">
        1. Name of Contractor (with father's name in case of individuals):
        <span class="asterisk">*</span></label
      >
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.labour_contract_lic_one"
        dense
        outlined
      />
    </div>

    <div class="col-lg-6 col-sm-10 col-xs-12">
      <label class="zlabel" for="gender">
        2. Address: <span class="asterisk">*</span></label
      >
      <q-input
        type="textarea"
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.labour_contract_lic_two"
        dense
        outlined
      />
    </div>

    <div class="col-lg-6 col-sm-10 col-xs-12">
      <label class="zlabel" for="gender">
        3. Date of Birth and age (in case of individual):
        <span class="asterisk">*</span></label
      >
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.labour_contract_lic_three"
        dense
        outlined
      />
    </div>
    <div class="col-12">
      <label for="" class="zlabel">
        4. Particulars of Establishment where contract labour is to be employed:
      </label>
      <div class="row justify q-col-gutter-md q-ml-md">
        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="gender">
            a) Name and address of the establishment
            <span class="asterisk">*</span></label
          >
          <q-input
            type="textarea"
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            v-model="formData.labour_contract_lic_four_a"
            dense
            outlined
          />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="gender">
            b) Type of business, trade, industry, manufacture or occupation,
            which is carried on in the establishment
            <span class="asterisk">*</span></label
          >
          <q-input
            type="textarea"
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            v-model="formData.labour_contract_lic_four_b"
            dense
            outlined
          />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="gender">
            c) Number and date of certificate of registration of the
            establishment under the Act
            <span class="asterisk">*</span></label
          >
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            v-model="formData.labour_contract_lic_four_c"
            dense
            outlined
          />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="gender">
            d) Name and address of the Principal Employer:
            <span class="asterisk">*</span></label
          >
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            v-model="formData.labour_contract_lic_four_d"
            dense
            outlined
          />
        </div>
      </div>
    </div>

    <div class="col-12">
      <label for="" class="zlabel"> 5. Particulars of contract labour: </label>
      <div class="row justify q-col-gutter-md q-ml-md">
        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="gender">
            a) Nature of work in which contract labour is employed or is to be
            employed in the establishment:
            <span class="asterisk">*</span></label
          >
          <q-input
            type="textarea"
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            v-model="formData.labour_contract_lic_five_a"
            dense
            outlined
          />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="gender">
            b) Duration of the proposed contract work (given particulars of
            proposed date of commencing and ending):
            <span class="asterisk">*</span></label
          >
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            v-model="formData.labour_contract_lic_five_b"
            dense
            outlined
          />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="gender">
            c) Name and address of the agent or manager of contractor at the
            worksite:
            <span class="asterisk">*</span></label
          >
          <q-input
            type="textarea"
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            v-model="formData.labour_contract_lic_five_c"
            dense
            outlined
          />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="gender">
            d) Maximum no. of contract labour proposed to be employed in the
            establishment on any date:
            <span class="asterisk">*</span></label
          >
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            v-model="formData.labour_contract_lic_five_d"
            dense
            outlined
          />
        </div>
      </div>
    </div>

    <div class="col-lg-6 col-sm-10 col-xs-12">
      <label class="zlabel" for="gender"
        >6. Whether the contractor was convicted of any offence within the
        preceding five years. If so, give detail:
        <span class="asterisk">*</span></label
      >
      <q-input
        v-model="formData.labour_contract_lic_six"
        dense
        outlined
      />
    </div>

    <div class="col-lg-6 col-sm-10 col-xs-12">
      <label class="zlabel" for="gender"
        >7. Whether there was any order against the contractor revoking or
        suspending licence or forfeiting security deposit in respect of an
        earlier contract, if so, the date of such order:
        <span class="asterisk">*</span></label
      >
      <q-input
        v-model="formData.labour_contract_lic_seven"
        dense
        outlined
      />
    </div>

    <div class="col-lg-6 col-sm-10 col-xs-12">
      <label class="zlabel" for="gender"
        >8. Whether the contractor has worked in any other establishment within
        the past five years. If so, given details of the Principal employer in
        Form-V is enclosed: <span class="asterisk">*</span></label
      >
      <q-input
        v-model="formData.labour_contract_lic_eight"
        dense
        outlined
      />
    </div>

    <div class="col-lg-6 col-sm-10 col-xs-12">
      <label class="zlabel" for="gender"
        >9. Amount of Licence fee paid, No. of treasury Challan and date
        <span class="asterisk">*</span></label
      >
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.labour_contract_lic_nine"
        dense
        outlined
      />
    </div>

    <div class="col-lg-6 col-sm-10 col-xs-12">
      <label class="zlabel" for="gender"
        >10. Amount of security deposit, Treasury Receipt No. and date:<span
          class="asterisk"
          >*</span
        ></label
      >
      <q-input
        type="textarea"
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.labour_contract_lic_ten"
        dense
        outlined
      />
    </div>

    <div class="col-12 zlabel">
      Note: The application should be accompanied by a Treasury Receipt for the
      appropriate amount and a certificate in Form-V from the Principal
      Employer. (To be filled in the office of the Licensing Officer). Date and
      receipt of the application with Challan for fees/Security deposit
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="gender">
        Signature of the applicant
        <span class="asterisk">*</span></label
      >

      <q-file v-model="formData.labour_contract_lic_signature" outlined>
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
import { onMounted, watch } from "vue";
import { date } from "quasar";
import { ref } from "vue";

export default {
  setup(props, context) {
    const store = useStore();

    const formData = reactive({
      application_code: "LABOUR_CONTRACT_LICENCE",
      department_id: 7,
      labour_contract_lic_one: "",
      labour_contract_lic_two: "",
      labour_contract_lic_three: "",
      labour_contract_lic_four: "",
      labour_contract_lic_four_a: "",
      labour_contract_lic_four_b: "",
      labour_contract_lic_four_c: "",
      labour_contract_lic_four_d: "",
      labour_contract_lic_five: "",
      labour_contract_lic_five_a: "",
      labour_contract_lic_five_b: "",
      labour_contract_lic_five_c: "",
      labour_contract_lic_five_d: "",
      labour_contract_lic_six: "",
      labour_contract_lic_seven: "",
      labour_contract_lic_eight: "",
      labour_contract_lic_nine: "",
      labour_contract_lic_ten: "",
      labour_contract_lic_signature: null,
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

      formData.labour_contract_lic_one = applicant_name;
      formData.labour_contract_lic_two = address;
      formData.labour_contract_lic_four_a = enterprise_name;
      enterprise_typ ?  formData.labour_contract_lic_four_b = enterprise_typ : formData.labour_contract_lic_four_b="";
      company_reg_certe ?  formData.labour_contract_lic_four_c = company_reg_certe :  formData.labour_contract_lic_four_c="";
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
