<template>
  <div class="zcard row items-center q-col-gutter-md">
    <!-- <div class="col-12">
      <label for="" class="zlabel">1. </label>
      <div class="row justify q-col-gutter-md q-ml-md">
      

       
      </div>
    </div> -->
       <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="gender">
     Registration no.
       <span
          class="asterisk"
          >*</span
        ></label
      >
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.legal_registration_manufacturer_registration_no"
        dense
        outlined
      />
    </div>
   <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="gender">
     of Year
       <span
          class="asterisk"
          >*</span
        ></label
      >
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.legal_registration_manufacturer_registration_year"
        dense
        outlined
      />
    </div>

    <p> The following persons / firm has been registered as Manufacturer and Packer as required
under Chapter VI of the Legal Metrology (Packaged Commodities) Rules, 2011.</p>
    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="gender">
  1. Name
       <span
          class="asterisk"
          >*</span
        ></label
      >
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.legal_registration_manufacturer_one"
        dense
        outlined
      />
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="gender">
    2. Complete Address 
        <span class="asterisk">*</span></label
      >
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.legal_registration_manufacturer_two"
        dense
        outlined
      />
    </div>
    <div class="col-lg-6 col-sm-10 col-xs-12">
      <label class="zlabel" for="gender"
        >3. Aadhaar number
        <span class="asterisk">*</span></label
      >
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.legal_registration_manufacturer_three"
        dense
        outlined
      />
    </div>



    <div class="col-12">
      <div class="col-md-6 col-xs-10">
        <label class="zlabel" for="gender">
   4. Address of warehouse<span class="asterisk">*</span></label
        >
        <q-input
          :rules="[(val) => (val && val.length > 0) || 'Please type something']"
          v-model="formData.legal_registration_manufacturer_four"
          dense
          outlined
        />
      </div>

      <div class="col-md-6 col-xs-10">
        <label class="zlabel" for="gender">
 5. Type of Commodities to be manufactured or packed
          <span class="asterisk">*</span></label
        >
        <q-input
          :rules="[(val) => (val && val.length > 0) || 'Please type something']"
          v-model="formData.legal_registration_manufacturer_five"
          dense
          outlined
        />
      </div>

      <div class="col-md-6 col-xs-10">
        <label class="zlabel" for="gender">
       6. Area of Operation</label
        >
        <q-input
          v-model="formData.legal_registration_manufacturer_six"
          dense
          outlined
        />
      </div>
    </div>

  

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="gender">
    7. Date of Registration
        <span class="asterisk">*</span></label
      >
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.legal_registration_manufacturer_seven"
        dense
        outlined
      />
    </div>

     <div class="col-12">
      <label for="" class="zlabel"
        >8. This Registration is valid
        :</label
      >
      <div class="row justify q-col-gutter-md q-ml-md">
        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="gender">
            From<span class="asterisk">*</span></label
          >
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            v-model="formData.legal_registration_manufacturer_eight_from"
            dense
            outlined
          />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="gender">
            To<span class="asterisk">*</span></label
          >
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            v-model="formData.legal_registration_manufacturer_eight_to"
            dense
            outlined
          />
        </div>
       
      </div>
    </div>

    <div class="col-md-6 col-xs-10">

      <h2>1. The person / firm in whose favour this Registration Certificate is issued shall: -</h2>
      <ol>
        <li>Comply with all relevant provisions of the Legal Metrology Act and Rules for the time being in force.</li>
        <li>Report without delay to the Registering authority any infringement that come to his notice.</li>
        <li>Exhibit this Certificate in some conspicuous part of the premises to which it relates</li>
        <li>Comply with any general or special directions issued by the Registering authority. </li>
        <li>Be open to the Inspection of the public without payment of any fees. </li>
        <li>Not possess / pack any commodities which does not conform to the Legal Metrology Act and Rules
for the time being in force</li>
        <li>Comply with all relevant provisions of The Central / State Acts & Rules for the time being in force</li>


      </ol>
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

      <q-file v-model="formData.legal_signature_designation" outlined>
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
      application_code: "LEGAL_REGISTRATION_MANUFACTURER_PACKER",
      department_id: 10,
      legal_registration_manufacturer_one: "",
      legal_registration_manufacturer_two: "",
      legal_registration_manufacturer_three: "",
      legal_registration_manufacturer_four: "",
      legal_registration_manufacturer_five: "",
      legal_registration_manufacturer_six: "",
      legal_registration_manufacturer_seven: "",
      
      legal_registration_manufacturer_eight: "8. This Registration is valid",

      legal_registration_manufacturer_eight_from: "",
      legal_registration_manufacturer_eight_to: "",
      legal_registration_manufacturer_registration_no: "",
      legal_registration_manufacturer_registration_year: "",
    
    
 

    

      legal_signature_designation: null,
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
