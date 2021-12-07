<template>
  <div class="zcard row items-center q-col-gutter-md">
    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="name"
        >1.Name of the Applicant/Organization
        <span class="asterisk"> *</span></label
      >
      <q-input :rules="[(val) => (val && val.length > 0) || 'Please type something']" v-model="formData.power_new_connection_applicant_name" dense outlined />
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="dob" type="date"
        >2.Name of Father/ Husband/ Director/ Partner/ Trustee<span
          class="asterisk"
          >*</span
        >
      </label>
      <q-input :rules="[(val) => (val && val.length > 0) || 'Please type something']" v-model="formData.power_new_connection_father_name" dense outlined />
    </div>

    <div class="col-12">
      <label for="" class="zlabel">Address for communication</label>
      <div class="row justify q-col-gutter-md q-ml-md">
        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="gender">
            House/Plot/Premise No. <span class="asterisk">*</span></label
          >
          <q-input :rules="[(val) => (val && val.length > 0) || 'Please type something']" v-model="formData.power_new_connection_communication_house" dense outlined />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="gender"
            >Street: <span class="asterisk">*</span></label
          >
          <q-input :rules="[(val) => (val && val.length > 0) || 'Please type something']" v-model="formData.power_new_connection_communication_street" dense outlined />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="gender"
            >Area/Colony: <span class="asterisk">*</span></label
          >
          <q-input :rules="[(val) => (val && val.length > 0) || 'Please type something']" v-model="formData.power_new_connection_communication_area" dense outlined />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="pob">District</label>
          <q-input :rules="[(val) => (val && val.length > 0) || 'Please type something']" v-model="formData.power_new_connection_communication_district" dense outlined />
        </div>
      </div>
    </div>

    <div class="col-12">
      <label for="" class="zlabel">
        Address of where the new connection is applied for/existing connection
        is required to be shifted
      </label>
      <div class="row justify q-col-gutter-md q-ml-md">
        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="gender">
            House/Plot/Premise No. <span class="asterisk">*</span></label
          >
          <q-input :rules="[(val) => (val && val.length > 0) || 'Please type something']" v-model="formData.power_new_connection_connection_house" dense outlined />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="gender"
            >Street: <span class="asterisk">*</span></label
          >
          <q-input :rules="[(val) => (val && val.length > 0) || 'Please type something']" v-model="formData.power_new_connection_connection_street" dense outlined />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="gender"
            >Area/Colony: <span class="asterisk">*</span></label
          >
          <q-input :rules="[(val) => (val && val.length > 0) || 'Please type something']" v-model="formData.power_new_connection_connection_area" dense outlined />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="pob">District</label>
          <q-input :rules="[(val) => (val && val.length > 0) || 'Please type something']" v-model="formData.power_new_connection_connection_district" dense outlined />
        </div>
      </div>
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="gender"
        >4.Category of Supply <span class="asterisk">*</span></label
      >
      <q-input :rules="[(val) => (val && val.length > 0) || 'Please type something']" v-model="formData.power_new_connection_supply_category" dense outlined />
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="gender"
        >5.Purpose of Supply <span class="asterisk">*</span></label
      >
      <q-input :rules="[(val) => (val && val.length > 0) || 'Please type something']" v-model="formData.power_new_connection_supply_purpose" dense outlined />
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="gender"
        >6.Total Contracted Load applied for (in kW)
        <span class="asterisk">*</span></label
      >
      <q-input :rules="[(val) => (val && val.length > 0) || 'Please type something']" v-model="formData.power_new_connection_total_load" dense outlined />
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="gender"
        >7.Type of Supply <span class="asterisk">*</span></label
      >
      <q-radio
        name="supply"
        v-model="formData.power_new_connection_supply_type"
        val="permanent"
        label="Permanent"
      />
      <q-radio
        name="supply"
        v-model="formData.power_new_connection_supply_type"
        val="temporary"
        label="Temporary"
      />
      <!-- <q-input :rules="[(val) => (val && val.length > 0) || 'Please type something']" dense outlined /> -->
    </div>

    <div class="col-10">
      <q-toggle
        v-model="formData.power_new_connection_is_temporary"
        label="8.If Temporary supply, specify period of requirement: From (date): To
        (date)"
      />

      <div class="row items-center q-ml-md q-col-gutter-md">
        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="gender"
            >From (date) <span class="asterisk">*</span></label
          >
          <q-input :rules="[(val) => (val && val.length > 0) || 'Please type something']"  v-model="formData.power_new_connection_temporay_from" dense outlined />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="gender"
            >To (date) <span class="asterisk">*</span></label
          >
          <q-input :rules="[(val) => (val && val.length > 0) || 'Please type something']"  v-model="formData.power_new_connection_temporay_to" dense outlined />
        </div>
      </div>
    </div>

    <div class="col-10">
      <q-toggle
        v-model="formData.power_new_connection_is_laying_service"
        label="9.Please indicate whether you want to carry out the works of laying service line and/or dedicated distribution facility
for the electricity supply requisitioned. "
      />
    </div>

    <div class="col-10">
      <q-toggle
        v-model="formData.power_new_connection_own_meter"
        label="10.Please indicate whether you want to install your own CEA approved meter. (Yes/No) "
      />
    </div>

    <div class="col-md-6 col-xs-10">
      <label for="" class="zlabel"
        >11.Photograph to be affixed on application form</label
      >
      <q-file v-model="formData.power_new_connection_photo" outlined>
        <template v-slot:prepend>
          <q-icon name="attach_file" />
        </template>
      </q-file>
      <!-- <q-input :rules="[(val) => (val && val.length > 0) || 'Please type something']" dense outlined  v-model="formData.power_new_connection_photo" type="file" /> -->
    </div>

    <div class="col-12">
      <label for="" class="zlabel">
        <q-radio  v-model="formData.power_new_connection_for" val="person" label="For a Person" />
        <q-radio v-model="formData.power_new_connection_for" val="organization" label="For an Organization" />
      </label>

       <q-file v-model="formData.power_new_connection_identity_proof" outlined>
        <template v-slot:prepend>
          <q-icon name="attach_file" />
        </template>
      </q-file>

      <!-- <q-input :rules="[(val) => (val && val.length > 0) || 'Please type something']" dense v-model="formData.power_new_connection_identity_proof" type="file" /> -->
    </div>

    <div class="col-5 text-caption">
      <span>For a person </span> <br />
      (i) Electoral identity card; <br />
      (ii) Passport; (iii) Driving license; <br />
      (iv) Ration card; <br />
      (v) Photo identity card issued by Government agency; <br />
      (vi) PAN card; <br />
      (viii) Certificate from village Pradhan/ Patwari/ Lekhpal/ village level
      worker/ village chowkidar/ Primary school teacher/ in-charge of primary
      health centre etc.
    </div>

    <div class="col-5 text-caption">
      <span>For an organization </span> <br />
      (i) Electoral identity card; <br />
      (ii) Passport; (iii) Driving license; <br />
      (iv) Ration card; <br />
      (v) Photo identity card issued by Government agency; <br />
      (vi) PAN card; <br />
      (viii) Certificate from village Pradhan/ Patwari/ Lekhpal/ village level
      worker/ village chowkidar/ Primary school teacher/ in-charge of primary
      health centre etc.
    </div>

    <div class="col-xs-12" />
  </div>
</template>

<script>
import { reactive } from "@vue/reactivity";
import { useStore } from "vuex";
import { onMounted } from "vue";
import { date } from "quasar";

const emailRegex =
  /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

export default {
  setup(props, context) {
    const store = useStore();
    const draft = store.getters["applicantData/getCurrentDraft"];
    const currentUser = store.getters["auth/getCurrentUser"];

    const formData = reactive({
      application_code: "POWER_NEW_CONNECTION",
      department_id: 12,
      power_new_connection_applicant_name: "",
      power_new_connection_father_name: "",
      power_new_connection_communication_address: "",
      power_new_connection_communication_house: "",
      power_new_connection_communication_street: "",
      power_new_connection_communication_area: "",
      power_new_connection_communication_district: "",

      power_new_connection_connection_address: "",
      power_new_connection_connection_house: "",
      power_new_connection_connection_street: "",
      power_new_connection_connection_area: "",
      power_new_connection_connection_district: "",

      power_new_connection_supply_category: "",
      power_new_connection_supply_purpose: "",
      power_new_connection_total_load: "",

      power_new_connection_supply_type: "permanent",

      power_new_connection_is_temporary: false,
      power_new_connection_temporay_from: "",
      power_new_connection_temporay_to: "",

      power_new_connection_is_laying_service: true,

      power_new_connection_own_meter: true,

      power_new_connection_photo: null,

      

      power_new_connection_for: "person",

      power_new_connection_identity_proof: null


    });
    onMounted(() => {});
    return {
      emailRegex,
      formData,
      maxDate: () => date.formatDate(Date.now(), "YYYY-MM-DD"),
    };
  },
};
</script>
