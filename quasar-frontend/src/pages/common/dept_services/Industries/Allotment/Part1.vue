<template>
  <div class="zcard row items-center q-col-gutter-md">
    
    <div class="col-3">
      <label class="zlabel" for="name"
        >Name & Location of Industrial Area
        <span class="asterisk"> *</span></label
      >
    </div>

    <div class="col-6">
      <q-input :rules="[(val) => (val && val.length > 0) || 'Please type something']"  outlined v-model="formData.industrial_location_name" />
    </div>


    <p class="text-body col-12">
      <span class="text-bold"> General Instructions:</span> <br />
    </p>

    <p class="text-grey col-12 q-py-none q-ml-md">
      1.The filled in application form should be submitted to Appropriate
      Authority of a particular 'Industrial Area'. <br />
      2.Application form should be submitted in Duplicate copies. <br />
      3.Cost of the application should be Rs. 100. (Rupees One Hundred). <br />
      4.Attested photo copy of memorandum/Registration Certificate should be
      5.submitted along with this application <br />
      6.Attested Photo copy of Voters ID or Family ration card should be
      submitted.
    </p>

    <p class="col-12 text-h6 q-pb-none text-center">
      Part I <br /><span class="text-caption">
        (To be filled by the Entrepreneur)</span
      >
    </p>

    <div class="col-xs-12 col-md-3">
      <label class="zlabel" for="name"
        >1.Name of the Applicant <span class="asterisk"> *</span></label
      >
    </div>

    <div class="col-xs-12 col-md-4">
      <q-input :rules="[(val) => (val && val.length > 0) || 'Please type something']"  outlined v-model="formData.applicant_name" />
    </div>

    <div class="col-xs-12 zlabel">2.Address for communication</div>

    <div class="col-xs-12 col-md-3">
      <label class="zlabel" for="dob" type="date"
        >Steet<span class="asterisk">*</span>
      </label>
    </div>
    <div class="col-xs-12 col-md-3">
      <q-input :rules="[(val) => (val && val.length > 0) || 'Please type something']"  outlined v-model="formData.communication_street" />
    </div>

    <div class="col-xs-12 col-md-3">
      <label class="zlabel" for="gender"
        >City/Town/Village <span class="asterisk">*</span></label
      >
    </div>
    <div class="col-xs-12 col-md-3">
      <q-input :rules="[(val) => (val && val.length > 0) || 'Please type something']"  outlined v-model="formData.communication_city" />
    </div>

    <div class="col-xs-12 col-md-3">
      <label class="zlabel" for="gender"
        >PIN No <span class="asterisk">*</span></label
      >
    </div>
    <div class="col-xs-12 col-md-3">
      <q-input :rules="[(val) => (val && val.length > 0) || 'Please type something']"  outlined v-model="formData.communication_pin_no" />
    </div>

    <div class="col-xs-12 col-md-3">
      <label class="zlabel" for="gender"
        >House No <span class="asterisk">*</span></label
      >
    </div>
    <div class="col-xs-12 col-md-3">
      <q-input :rules="[(val) => (val && val.length > 0) || 'Please type something']"  outlined v-model="formData.communication_house_no" />
    </div>

    <div class="col-xs-12 col-md-3">
      <label class="zlabel" for="gender"
        >Phone No <span class="asterisk">*</span></label
      >
    </div>
    <div class="col-xs-12 col-md-3">
      <q-input :rules="[(val) => (val && val.length > 0) || 'Please type something']" label="Office"  outlined v-model="formData.communication_office_phn" />
    </div>

    <div class="col-xs-12 col-md-3">
      <q-input :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        label="Residence"
        
        outlined
        v-model="formData.communication_residence_phn"
      />
    </div>

    <div class="col-xs-12 col-md-3">
      <q-input :rules="[(val) => (val && val.length > 0) || 'Please type something']" label="Mobile"  outlined v-model="formData.communication_mobile_phn" />
    </div>

    <div class="col-xs-12 col-md-3">
      <label class="zlabel" for="gender"
        >Email Addess <span class="asterisk">*</span></label
      >
    </div>
    <div class="col-xs-12 col-md-3">
      <q-input :rules="[(val) => (val && val.length > 0) || 'Please type something']"  outlined v-model="formData.communication_email" />
    </div>

    <div class="col-xs-12 col-md-3">
      <label class="zlabel" for="gender"
        >Website <span class="asterisk">*</span></label
      >
    </div>
    <div class="col-xs-12 col-md-3">
      <q-input :rules="[(val) => (val && val.length > 0) || 'Please type something']"  outlined v-model="formData.communication_website" />
    </div>

    <div class="col-xs-12 col-md-3">
      <label class="zlabel" for="pob">District</label>
    </div>

    <div class="col-xs-12 col-md-3">
      <q-input :rules="[(val) => (val && val.length > 0) || 'Please type something']"  outlined v-model="formData.communication_district" />
    </div>

    <div class="col-xs-12 zlabel">
      3.Whether Proposed Or Existing Unit If Existing, Detail Address Of The
      Unit: Proposed/Existing.
    </div>

    <div class="col-xs-12 col-md-3">
      <label class="zlabel" for="dob" type="date"
        >Street<span class="asterisk">*</span>
      </label>
    </div>
    <div class="col-xs-12 col-md-3">
      <q-input :rules="[(val) => (val && val.length > 0) || 'Please type something']"  outlined v-model="formData.proposed_street" />
    </div>

    <div class="col-xs-12 col-md-3">
      <label class="zlabel" for="gender"
        >City/Town/Village <span class="asterisk">*</span></label
      >
    </div>
    <div class="col-xs-12 col-md-3">
      <q-input :rules="[(val) => (val && val.length > 0) || 'Please type something']"  outlined v-model="formData.proposed_city" />
    </div>

   

    <div class="col-xs-12 col-md-3">
      <label class="zlabel" for="gender"
        >House No <span class="asterisk">*</span></label
      >
    </div>
    <div class="col-xs-12 col-md-3">
      <q-input :rules="[(val) => (val && val.length > 0) || 'Please type something']"  outlined v-model="formData.proposed_house_no" />
    </div>

    <div class="col-xs-12 col-md-3">
      <label class="zlabel" for="gender"
        >Phone No <span class="asterisk">*</span></label
      >
    </div>
    <div class="col-xs-12 col-md-3">
      <q-input :rules="[(val) => (val && val.length > 0) || 'Please type something']" label="Office"  outlined v-model="formData.proposed_office_phn" />
    </div>

    <div class="col-xs-12 col-md-3">
      <q-input :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        label="Residence"
        
        outlined
        v-model="formData.proposed_residence_phn"
      />
    </div>

    <div class="col-xs-12 col-md-3">
      <q-input :rules="[(val) => (val && val.length > 0) || 'Please type something']" label="Mobile"  outlined v-model="formData.proposed_mobile_phn" />
    </div>

    <div class="col-xs-12" />
  </div>
</template>

<script>
import { reactive } from "@vue/reactivity";
import { useStore } from "vuex";
import { onMounted,watch } from "vue";
import { date } from "quasar";



export default {
  setup(props, context) {
    const store = useStore();
    const draft = store.getters["applicantData/getCurrentDraft"];

    const formData = reactive({
      industrial_location_name: "",
      applicant_name: "",

      communication_street: "",
      communication_city : "",
      communication_pin_no: "",
      communication_house_no: "",
      communication_office_phn: "",
      communication_residence_phn: "",
      communication_mobile_phn: "",
      communication_email: "",
      communication_website: "",
      communication_district: "",



      proposed_or_existing: "",

      proposed_street: "",
      proposed_city: "",
      proposed_pin_no: "",
      proposed_house_no: "",
      proposed_office_phn: "",
      proposed_residence_phn: "",
      proposed_mobile_phn: "",

      
    });

  watch(store.state.globalData.common, () => {
      getA();
    });

    const getA = () => {
      const { applicant_name,city_town, postal_code,address, mobile_no,email} =
        store.state.globalData.common.partA;
      formData.applicant_name = applicant_name;
      formData.communication_city  =city_town;
      formData.communication_pin_no = postal_code;
      formData.communication_mobile_phn = address;
      formData.communication_email = email;

  
    };


    onMounted(() => {
   
    });
    return {
     
     
      formData,
      getA,
      maxDate: () => date.formatDate(Date.now(), "YYYY-MM-DD"),
    };
  },
};
</script>
