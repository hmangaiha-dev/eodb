<template>
  <div class="zcard row items-center q-col-gutter-md">
    <div class="col-lg-6 col-sm-10 col-xs-12">
      <label class="zlabel" for="gender">
        1. Name and address of the contractor:
        <span class="asterisk">*</span></label
      >
      <q-input
        type="textarea"
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.labour_contract_renew_one"
        dense
        outlined
      />
    </div>

    <div class="col-lg-6 col-sm-10 col-xs-12">
      <label class="zlabel" for="gender">
        2. Number and date of the licence:
        <span class="asterisk">*</span></label
      >
      <q-input
        type="textarea"
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.labour_contract_renew_two"
        dense
        outlined
      />
    </div>

    <div class="col-lg-6 col-sm-10 col-xs-12">
      <label class="zlabel" for="gender">
        3. Date of expiry of the previous licence:
        <span class="asterisk">*</span></label
      >
      <q-input
        type="date"
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.labour_contract_renew_three"
        dense
        outlined
      />
    </div>

    <div class="col-12">
      <label for="" class="zlabel"> 4. Particulars of contract labour </label>
      <div class="row justify q-col-gutter-md q-ml-md">
        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="gender">
            a) Nature of work in which contract labour is to be employed in the
            establishment
            <span class="asterisk">*</span></label
          >
          <q-input
            type="textarea"
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            v-model="formData.labour_contract_renew_four_a"
            dense
            outlined
          />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="gender">
            b) Name and address of the Agent or Manager of Contractor of the
            work site:
            <span class="asterisk">*</span></label
          >
          <q-input
            type="textarea"
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            v-model="formData.labour_contract_renew_four_b"
            dense
            outlined
          />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="gender">
            c) Duration of the proposed contract work (give particular of
            proposed date of commencing and ending):
            <span class="asterisk">*</span></label
          >
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            v-model="formData.labour_contract_renew_four_c"
            dense
            outlined
          />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="gender">
            d) Maximum number of contract labour proposed to be employed in the
            tablishment on any dat
            <span class="asterisk">*</span></label
          >
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            v-model="formData.labour_contract_renew_four_d"
            dense
            outlined
          />
        </div>
      </div>
    </div>

    <div class="col-lg-6 col-sm-10 col-xs-12">
      <label class="zlabel" for="gender">
        5. Whether the Licence of the contractor was suspended or revoked:
        <span class="asterisk">*</span></label
      >
      <q-input
        type="textarea"
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.labour_contract_renew_five"
        dense
        outlined
      />
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="gender">
        Signature of Applicant
        <span class="asterisk">*</span></label
      >

      <q-file v-model="formData.labour_contract_renew_signature" outlined>
        <template v-slot:prepend>
          <q-icon name="attach_file" />
        </template>
      </q-file>
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="gender">
        6. No. and date of the treasury receipt enclosed
        <span class="asterisk">*</span></label
      >

      <q-file v-model="formData.labour_contract_renew_six" outlined>
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
      application_code: "LABOUR_CONTRACT_RENEWAL",
      department_id: 7,
      labour_contract_renew_one: "",
      labour_contract_renew_two: "",
      labour_contract_renew_three: "",
      labour_contract_renew_four: "",
      labour_contract_renew_four_a: "",
      labour_contract_renew_four_b: "",
      labour_contract_renew_four_c: "",
      labour_contract_renew_four_d: "",
      labour_contract_renew_five: "",
      labour_contract_renew_signature: null,
      labour_contract_renew_six: null,
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

      formData.labour_contract_renew_one = applicant_name + address;
      company_reg_certe ? formData.labour_contract_renew_two = company_reg_certe : formData.labour_contract_renew_two= "";

      

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
