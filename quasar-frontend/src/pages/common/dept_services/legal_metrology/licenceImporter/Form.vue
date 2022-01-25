<template>
  <div class="zcard row items-center q-col-gutter-md">
    <!-- <div class="col-12">
      <label for="" class="zlabel">1. </label>
      <div class="row justify q-col-gutter-md q-ml-md">
      

       
      </div>
    </div> -->
    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="gender">
       1. Name and full address<span
          class="asterisk"
          >*</span
        ></label
      >
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.legal_licence_registration_importer_one"
        dense
        outlined
      />
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="gender">
    2. Whether individual/undivided Hindu family/registered firm:
        <span class="asterisk">*</span></label
      >
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.legal_licence_registration_importer_two"
        dense
        outlined
      />
    </div>
    <div class="col-lg-6 col-sm-10 col-xs-12">
      <label class="zlabel" for="gender"
        >3.Income-tax registration No( If any)
        <span class="asterisk">*</span></label
      >
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.legal_licence_registration_importer_three"
        dense
        outlined
      />
    </div>
     <div class="col-lg-6 col-sm-10 col-xs-12">
      <label class="zlabel" for="gender"
        >4.Date of registration as manufacturer/dealer;registration No. and name of  registry authority
        <span class="asterisk">*</span></label
      >
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.legal_licence_registration_importer_four"
        dense
        outlined
      />
    </div>



      <div class="col-12">
      <label for="" class="zlabel"
        >5.Date & No. of licence to carry on the business of weights and measures;the name of authority by whom the licence was issued/renewed
        :</label
      >
      <div class="row justify q-col-gutter-md q-ml-md">
        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="gender">
            (a)buying and selling ,or<span class="asterisk">*</span></label
          >
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            v-model="formData.legal_licence_registration_importer_five_a"
            dense
            outlined
          />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="gender">
           (b) manufacturing<span class="asterisk">*</span></label
          >
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            v-model="formData.legal_licence_registration_importer_five_b"
            dense
            outlined
          />
        </div>
      
      </div>
    </div>


    <div class="col-12">
      <div class="col-md-6 col-xs-10">
        <label class="zlabel" for="gender">
     6. Item(s) of weights and measures in relation to which the applicant has been registered as manufacturer and/or dealer<span class="asterisk">*</span></label
        >
        <q-input
          :rules="[(val) => (val && val.length > 0) || 'Please type something']"
          v-model="formData.legal_licence_registration_importer_six"
          dense
          outlined
        />
      </div>

      <div class="col-md-6 col-xs-10">
        <label class="zlabel" for="gender">
       7.Items of weights and measures for which the applicant is being made for registration as importer
          <span class="asterisk">*</span></label
        >
        <q-input
          :rules="[(val) => (val && val.length > 0) || 'Please type something']"
          v-model="formData.legal_licence_registration_importer_seven"
          dense
          outlined
        />
      </div>

      <div class="col-md-6 col-xs-10">
        <label class="zlabel" for="gender">
         8.Items,if any,imported during the period of two years immediately preceding the year in which the application is made:</label
        >
        <q-input
          v-model="formData.legal_licence_registration_importer_eight"
          dense
          outlined
        />
      </div>
    </div>

  

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="gender">
        9.Remarks
        <span class="asterisk">*</span></label
      >
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.legal_licence_registration_importer_nine"
        dense
        outlined
      />
    </div>

   <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="gender">
        Registration fee
        <span class="asterisk">*</span></label
      >
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.legal_licence_registration_importer_registration_fee"
        dense
        outlined
      />
    </div>
<div class="col-md-6 col-xs-10">
      <label class="zlabel" for="gender">
        Paid in the treasury at
        <span class="asterisk">*</span></label
      >
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.legal_licence_registration_importer_registration_place"
        dense
        outlined
      />
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="gender">
        Chalan No.
        <span class="asterisk">*</span></label
      >
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.legal_licence_registration_importer_registration_chalan_no"
        dense
        outlined
      />
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="gender">
        Dated
        <span class="asterisk">*</span></label
      >
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.legal_licence_registration_importer_registration_dated"
        dense
        outlined
      />
    </div>

    

    

    
    

   

    <div class="col-12 zlabel">

      I/We* hereby apply for registration of my/our* name(s) as importer of weights and measures.
      
      I hereby declare that the particulars given above are true to the best of
      my knowledge and belief.
     
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="gender">
        Signature
        <span class="asterisk">*</span></label
      >

      <q-file v-model="formData.legal_licence_registration_importer_signature_designation" outlined>
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
      application_code: "LEGAL_LICENCE_REGISTRATION_IMPORTER",
      department_id: 10,
      legal_licence_registration_importer_one: "",
      legal_licence_registration_importer_two: "",
      legal_licence_registration_importer_three: "",
      legal_licence_registration_importer_four: "",
      legal_licence_registration_importer_five: "",
      legal_licence_registration_importer_five_a: "",
      legal_licence_registration_importer_five_b: "",

      legal_licence_registration_importer_six: "",
      legal_licence_registration_importer_seven: "",
      legal_licence_registration_importer_eight: "",
      legal_licence_registration_importer_nine: "",

      legal_licence_registration_importer_registration_fee: "",
      legal_licence_registration_importer_registration_place: "",
      legal_licence_registration_importer_registration_chalan_no: "",
      legal_licence_registration_importer_registration_dated: "",



 

    

      legal_licence_registration_importer_signature_designation: null,
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
