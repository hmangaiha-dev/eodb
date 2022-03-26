<template>
  <div class="zcard row items-center q-col-gutter-md">
    <div class="col-xs-12 col-md-6">
      <label class="zsubtitle" for="name"
        >1.Applicant for <span class="asterisk"> *</span></label
      >
    </div>
    <div class="col-xs-12 col-md-6">
      <q-select
        v-model="formData.application_type"
       
        dropdown-icon="expand_more"
        outlined
        :options="application_types"
      />
    </div>
    <div class="col-xs-12 zsubtitle">2.Applicant details</div>

    <div class="row items-center q-col-gutter-sm q-ml-md col-12">
      <div class="col-xs-12 col-md-6">
        <label class="zlabel" for="dob" type="date"
          >2.1 Applicant photo<span class="asterisk">*</span>
        </label>
      </div>
      <div class="col-xs-12 col-md-6">
        <q-file v-model="formData.application_photo" outlined>
          <template v-slot:prepend>
            <q-icon name="attach_file" />
          </template>
        </q-file>
      </div>
      <div class="col-xs-12 col-md-6">
        <label class="zlabel" for="gender"
          >2.2 Applicant name <span class="asterisk">*</span></label
        >
      </div>
      <div class="col-xs-12 col-md-6">
        <q-input
        lazy-rules
          :rules="[(val) => (val && val.length > 0) || 'Please type something']"
         
          outlined
          v-model="formData.applicant_name"
        />
      </div>
      <div class="col-xs-12 col-md-6">
        <label class="zlabel" for="pob">2.3 Applicant belongs to</label>
      </div>
      <div class="col-xs-12 col-md-6">
        <q-select
         
          v-model="formData.applicant_caste"
          dropdown-icon="expand_more"
          outlined
          :options="castes"
        />
      </div>
    </div>

    <div class="col-12">
      <label class="zsubtitle" for="pob">3.Correspondance Addres</label>
    </div>

    <div class="row items-center col-12 q-ml-md">
      <div class="col-xs-12 col-md-6">
        <label class="zlabel" for="fname"
          >3.1 Country<span class="asterisk">*</span></label
        >
      </div>
      <div class="col-xs-12 col-md-6">
        <q-input
          :rules="[(val) => (val && val.length > 0) || 'Please type something']"
          id="fname"
          v-model="formData.country"
         
          item-aligned
          outlined
        />
      </div>
      <div class="col-xs-12 col-md-6">
        <label class="zlabel" for="mname">3.2 State</label>
      </div>
      <div class="col-xs-12 col-md-6">
        <q-input
          :rules="[(val) => (val && val.length > 0) || 'Please type something']"
          id="mname"
          v-model="formData.state"
         
          item-aligned
          outlined
        />
      </div>
       <div class="col-xs-12 col-md-6">
        <label class="zlabel" for="mname">3.3 City/Town*</label>
      </div>
      <div class="col-xs-12 col-md-6">
        <q-input
          :rules="[(val) => (val && val.length > 0) || 'Please type something']"
          id="mname"
          v-model="formData.city_town"
         
          item-aligned
          outlined
        />
      </div>
      <div class="col-xs-12 col-md-6">
        <label class="zlabel" for="email">3.4 Postal code/Zip code</label>
      </div>
      <div class="col-xs-12 col-md-6">
        <q-input
          :rules="[(val) => (val && val.length > 0) || 'Please type something']"
          id="email"
          v-model="formData.postal_code"
         
          item-aligned
          outlined
        />
      </div>
      <div class="col-xs-12 col-md-6">
        <label class="zlabel" for="adar">3.5 Address</label>
      </div>
      <!--    hint="Adhaar no will be used to match the records of your Digilocker AC"-->
      <div class="col-xs-12 col-md-6">
        <q-input
          :rules="[(val) => (val && val.length > 0) || 'Please type something']"
         
          v-model="formData.address"
         
          item-aligned
         
          outlined
        />
      </div>
      <div class="col-xs-12 col-md-6">
        <label class="zlabel" for="adar">3.6 Phone number</label>
      </div>
      <div class="col-xs-12 col-md-6">
        <q-input
          :rules="[(val) => (val && val.length > 0) || 'Please type something']"
          id="adar"
          v-model="formData.phone_no"
         
          item-aligned
          
          outlined
        />
      </div>
       <div class="col-xs-12 col-md-6">
        <label class="zlabel" for="adar">3.7 Mobile number</label>
      </div>
      <div class="col-xs-12 col-md-6">
        <q-input
          :rules="[(val) => (val && val.length > 0) || 'Please type something']"
          id="adar"
          v-model="formData.phone_no"
         
          item-aligned
          
          outlined
        />
      </div>
      <div class="col-xs-12 col-md-6">
        <label class="zlabel" for="adar">3.8 Fax number</label>
      </div>
      <div class="col-xs-12 col-md-6">
        <q-input
          :rules="[(val) => (val && val.length > 0) || 'Please type something']"
          id="adar"
          v-model="formData.fax_no"
         
          item-aligned
          
          outlined
        />
      </div>
      <div class="col-xs-12 col-md-6">
        <label class="zlabel" for="adar">3.9 Email id</label>
      </div>
      <div class="col-xs-12 col-md-6">
        <q-input
          :rules="[(val) => (val && val.length > 0) || 'Please type something']"
          id="adar"
          v-model="formData.email"
         
          item-aligned
          
          outlined
        />
      </div>
      <div class="col-xs-12 col-md-6">
        <label class="zlabel" for="adar"> 3.10 Alternate Email ID</label>
      </div>
      <div class="col-xs-12 col-md-6">
        <q-input
          :rules="[(val) => (val && val.length > 0) || 'Please type something']"
          id="adar"
          v-model="formData.alt_email"
         
          item-aligned
          
          outlined
        />
      </div>
    </div>
    <div class="col-xs-12" />
  </div>
</template>

<script>
import { reactive } from "@vue/reactivity";
import { useStore } from "vuex";
import { onMounted } from "vue";
import { date } from "quasar";
import {api} from 'boot/axios'

export default {
  setup(props, context) {
    const store = useStore();
    const draft = store.getters["applicantData/getCurrentDraft"];
    const currentUser = store.getters["auth/getCurrentUser"];

    var formData = reactive({
      application_type: "",
      application_photo: null,
      applicant_name: "",
      applicant_caste: "",
      country: "",
      state: "",

      city_town: "",
      postal_code: "",
      address: "",
      phone_no: "",
      mobile_no: "",
      fax_no: "",
      email: "",
      alt_email: "",

      // prop_name: '',
      // designation: '',

      // enterprise_name: '',

      // total_directors: '',

      // pan_no: '',

      // pan_card: null,

      // aadhaar_no: '',

      // passport_no: '',

      // is_applicant_nri: '',

      // cst_no: '',

      // cst_cert: '',

      // udyog_no: ''
    });
    onMounted(() => {
       api
      .get("/investor/common-applications")
      .then((res) => {
        
        formData = Object.assign(formData,res.data.part_a)
        console.log('fetch res personal',res.data.part_a);

        
      })
      .catch((err) => {
        // const q = useQuasar();
        // q.notify({
        //   type: "negative",
        //   message: err.toString(),
        // });
        console.error('err',err);
      });
    });
    return {
      application_types: [
        "New Enterprise",
        "Expansion of Enterprise",
        "Under Special Schemes",
      ],
      castes: [
        "General",
        "SC/ST",
        "OBC/MOBC",
        "Physically Challenged",
        "Women Entrepreneur",
      ],
      formData,
      maxDate: () => date.formatDate(Date.now(), "YYYY-MM-DD"),
    };
  },
};
</script>
