<template>
  <div class="zcard row items-center q-col-gutter-md">
    <!-- <div class="col-12">
      <label for="" class="zlabel">1. </label>
      <div class="row justify q-col-gutter-md q-ml-md">
      

       
      </div>
    </div> -->
    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="gender">
    1. Name of the establishment/shop/person seeking the licence.
       <span
          class="asterisk"
          >*</span
        ></label
      >
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.legal_licence_dealer_one"
        dense
        outlined
      />
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="gender">
  2. Complete address of the establishment etc.
        <span class="asterisk">*</span></label
      >
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.legal_licence_dealer_two"
        dense
        outlined
      />
    </div>
    <div class="col-lg-6 col-sm-10 col-xs-12">
      <label class="zlabel" for="gender"
        >3. Date of establishment.
        <span class="asterisk">*</span></label
      >
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.legal_licence_dealer_three"
        dense
        outlined
      />
    </div>



    <div class="col-12">
      <div class="col-md-6 col-xs-10">
        <label class="zlabel" for="gender">
   4. Name (s) and address (s) along with their father's/ husband's name of proprietor (s) and/or Partners and Managing Director (s) in the case of Limited company<span class="asterisk">*</span></label
        >
        <q-input
          :rules="[(val) => (val && val.length > 0) || 'Please type something']"
          v-model="formData.legal_licence_dealer_four"
          dense
          outlined
        />
      </div>

      <div class="col-md-6 col-xs-10">
        <label class="zlabel" for="gender">
 5. Number and date of Registration Number of current shop/establishment/Municipal Trade licence
          <span class="asterisk">*</span></label
        >
        <q-input
          :rules="[(val) => (val && val.length > 0) || 'Please type something']"
          v-model="formData.legal_licence_dealer_five"
          dense
          outlined
        />
      </div>

      <div class="col-md-6 col-xs-10">
        <label class="zlabel" for="gender">
     6. Categories of weights and measures sold/proposed to be sold at present</label
        >
        <q-input
          v-model="formData.legal_licence_dealer_six"
          dense
          outlined
        />
      </div>
    </div>

  

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="gender">
      7. Registration Number of VAT/ CST/Sales Tax/Professional Tax/Income Tax.
        <span class="asterisk">*</span></label
      >
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.legal_licence_dealer_seven"
        dense
        outlined
      />
    </div>

   <div class="col-12">
      <label for="" class="zlabel"
        >8. Do you intend to import weights, etc. from places
outside the State/Country ? If so indicate sources of
supply. (Give details of manufacturer's trade mark/
monogram and his licence number) and provide
        :</label
      >
      <div class="row justify q-col-gutter-md q-ml-md">
        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="gender">
            (a) Registration of Importer of Weights and Measures, if any<span class="asterisk">*</span></label
          >
          <q-input
         
            v-model="formData.legal_licence_dealer_eight_a"
            dense
            outlined
          />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="gender">
            (b) Approval of model imported into India by Central Government<span class="asterisk">*</span></label
          >
          <q-input
            
            v-model="formData.legal_licence_dealer_eight_b"
            dense
            outlined
          />
        </div>
       
      </div>
    </div>

     <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="gender">
      9. Have you applied previously for a dealer's licence,either in this State or elsewhere ? If so give details ?
        <span class="asterisk">*</span></label
      >
      <q-input
        v-model="formData.legal_licence_dealer_nine"
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

      <q-file v-model="formData.legal_licence_dealer_signature_designation" outlined>
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
import { onMounted ,watch} from "vue";
import { date } from "quasar";
import { ref } from "vue";

export default {
  setup(props, context) {
    const store = useStore();

    const formData = reactive({
      application_code: "LEGAL_LICENCE_DEALER",
      department_id: 10,
      legal_licence_dealer_one: "",
      legal_licence_dealer_two: "",
      legal_licence_dealer_three: "",
      legal_licence_dealer_four: "",
      legal_licence_dealer_five: "",
      legal_licence_dealer_six: "",
      legal_licence_dealer_seven: "",
      legal_licence_dealer_eight_a: "",
      legal_licence_dealer_eight_b: "",
      legal_licence_dealer_nine: "",
    

  
 

    

      legal_licence_dealer_signature_designation: null,
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
        tin_no,
      } = store.state.globalData.common.partA;

      formData.legal_licence_dealer_two = applicant_name;
      formData.legal_licence_dealer_two =   address;
    formData.legal_licence_dealer_seven = tin_no;
    
      

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
