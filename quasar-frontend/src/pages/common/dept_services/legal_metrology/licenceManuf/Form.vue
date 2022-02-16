<template>
  <div class="zcard row items-center q-col-gutter-md">
    <!-- <div class="col-12">
      <label for="" class="zlabel">1. </label>
      <div class="row justify q-col-gutter-md q-ml-md">
      

       
      </div>
    </div> -->
    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="gender">
        1.Name of the manufacturing concern for which licence is desired.<span
          class="asterisk"
          >*</span
        ></label
      >
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.legal_name_manufcaturing"
        dense
        outlined
      />
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="gender">
        2.Complete address of the concern. Whether premises are
        owned/rented/taken on lease/leave licence, duly supported by documents.
        <span class="asterisk">*</span></label
      >
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.legal_address"
        dense
        outlined
      />
    </div>
    <div class="col-lg-6 col-sm-10 col-xs-12">
      <label class="zlabel" for="gender"
        >3. Date of Establishment of workshop/factory.
        <span class="asterisk">*</span></label
      >
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.legal_date_establishment"
        dense
        outlined
      />
    </div>

    <div class="col-12">
      <div class="col-md-6 col-xs-10">
        <label class="zlabel" for="gender">
          4. Name (s) and address (s) along with their father's/ husband's name
          of proprietor (s) and/or Partners and Managing Director (s) in the
          case of Limited company<span class="asterisk">*</span></label
        >
        <q-input
          :rules="[(val) => (val && val.length > 0) || 'Please type something']"
          v-model="formData.legal_father_husband_name"
          dense
          outlined
        />
      </div>

      <div class="col-md-6 col-xs-10">
        <label class="zlabel" for="gender">
          5. The date and current registration number of factory/ shop/
          establishment/ Municipal Trade licence.
          <span class="asterisk">*</span></label
        >
        <q-input
          :rules="[(val) => (val && val.length > 0) || 'Please type something']"
          v-model="formData.legal_current_registration_number"
          dense
          outlined
        />
      </div>

      <div class="col-md-6 col-xs-10">
        <label class="zlabel" for="gender">
          6. Nature of manufacturing activities at present.</label
        >
        <q-input
          v-model="formData.legal_nature_manufacturing"
          dense
          outlined
        />
      </div>
    </div>

    <div class="col-12">
      <label for="" class="zlabel"
        >7. The type of weights and measures proposed to be manufactured viz
        :</label
      >
      <div class="row justify q-col-gutter-md q-ml-md">
        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="gender">
            (i) Weights<span class="asterisk">*</span></label
          >
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            v-model="formData.legal_type_weight"
            dense
            outlined
          />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="gender">
            (ii) Measures<span class="asterisk">*</span></label
          >
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            v-model="formData.legal_type_measures"
            dense
            outlined
          />
        </div>
        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="gender">
            (iii) Weighing Instruments<span class="asterisk">*</span></label
          >
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            v-model="formData.legal_type_weighing_instrument"
            dense
            outlined
          />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="gender">
            (iv) Measuring Instruments with details in each case.<span
              class="asterisk"
              >*</span
            ></label
          >
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            v-model="formData.legal_type_measuring_instrument"
            dense
            outlined
          />
        </div>
      </div>
    </div>

    <div class="col-12">
      <label for="" class="zlabel"
        >8. The number of persons employed/proposed to be employed
      </label>
      <div class="row justify q-col-gutter-md q-ml-md">
        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="gender">
            (i) Skilled<span class="asterisk">*</span></label
          >
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            v-model="formData.legal_number_of_skilled_emp"
            dense
            outlined
          />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="gender">
            (ii) Semi-skilled<span class="asterisk">*</span></label
          >
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            v-model="formData.legal_number_of_semiskilled_emp"
            dense
            outlined
          />
        </div>
        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="gender">
            (iii) Unskilled<span class="asterisk">*</span></label
          >
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            v-model="formData.legal_number_of_unskilled_emp"
            dense
            outlined
          />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="gender">
            (iv) Specialist trained in the line<span class="asterisk"
              >*</span
            ></label
          >
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            v-model="formData.legal_number_of_specialist"
            dense
            outlined
          />
        </div>
      </div>
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="gender">
        9. The monogram or trade mark intended to be Imprinted on weights and
        measures to be manufactured
        <span class="asterisk">*</span></label
      >
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.legal_trademark"
        dense
        outlined
      />
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="gender"
        >10. Details of machinery, tools accessories, owned and used for
        manufacturing weights measures etc.<span class="asterisk"
          >*</span
        ></label
      >
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.legal_machinery_details"
        dense
        outlined
      />
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="gender"
        >11. Details of foundry/workshop facilities arranged. Whether ownership,
        long term lease etc.<span class="asterisk">*</span></label
      >
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.legal_foundry_details"
        dense
        outlined
      />
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="gender"
        >12. Facilities of steel casting and hardness testing of Vital parts etc
        or other means.<span class="asterisk">*</span></label
      >
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.legal_steel_facilities"
        dense
        outlined
      />
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="gender"
        >13. Availability of electric energy.
        <span class="asterisk">*</span></label
      >
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.legal_electricity_availability"
        dense
        outlined
      />
    </div>
    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="gender"
        >14. Details of loan received from Government or financial Institution.
        If so, give details.<span class="asterisk">*</span></label
      >
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.legal_loan_received"
        dense
        outlined
      />
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="gender"
        >15. Name of bankers, if any.<span class="asterisk">*</span></label
      >
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.legal_bankers"
        dense
        outlined
      />
    </div>
    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="gender"
        >16. VAT/ Sales Tax Registration Number/CST Number/ Professional Tax
        registration Number/IT Number.<span class="asterisk">*</span></label
      >
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.legal_TAX_number"
        dense
        outlined
      />
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="gender"
        >17. Have you applied previously for a manufacturer's licence? If so,
        when and with what results ?<span class="asterisk">*</span></label
      >
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.legal_previous_licence_application"
        dense
        outlined
      />
    </div>

    <div class="col-12">
      <label for="" class="zlabel">18.</label>
      <div class="row justify q-col-gutter-md q-ml-md">
        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="gender">
            (a) Whether the item (s) proposed to be manufactured will be sold
            within the State or out side the state or both.
            <span class="asterisk">*</span></label
          >
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            v-model="formData.legal_item_proposed_selling"
            dense
            outlined
          />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="gender">
            (b) Details of Model Approval received from Government of India.
            When can you produce for inspection samples of your products for
            which licence is desired ? <span class="asterisk">*</span></label
          >
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            v-model="formData.legal_model_approved_details"
            dense
            outlined
          />
        </div>
      </div>
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

      <q-file v-model="formData.legal_licence_manuf_signature_designation" outlined>
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
import { onMounted,watch } from "vue";
import { date } from "quasar";
import { ref } from "vue";

export default {
  setup(props, context) {
    const store = useStore();

    const formData = reactive({
      application_code: "LEGAL_LICENCE_MANUFACTURING",
      department_id: 10,
      legal_name_manufcaturing: "",
      legal_address: "",
      legal_date_establishment: "",
      legal_father_husband_name: "",
      legal_current_registration_number: "",
      legal_nature_manufacturing: "",
      legal_type: "",

      legal_type_weight: "",
      legal_type_measures: "",
      legal_type_weighing_instrument: "",
      legal_type_measuring_instrument: "",
      legal_number_of_emp: "",

      legal_number_of_skilled_emp: "",
      legal_number_of_semiskilled_emp: "",
      legal_number_of_unskilled_emp: "",
      legal_number_of_specialist: "",
      legal_trademark: "",
      legal_machinery_details: "",
      legal_foundry_details: "",
      legal_steel_facilities: "",
      legal_electricity_availability: "",
      legal_TAX_number: "",
      legal_previous_licence_application: "",
      legal_item_proposed_selling: "",
      legal_model_approved_details: "",
      legal_loan_received: "",
      legal_bank:"",

      legal_licence_manuf_signature_designation: null,
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
      formData.legal_name_manufcaturing = applicant_name;
      formData.legal_address = address;

      

    };



    onMounted(() => {});
    return {
      group: ref([]),
      getA,

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
