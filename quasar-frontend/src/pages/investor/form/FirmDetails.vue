<template>
  <div class="zcard row items-center q-col-gutter-md">
    <div class="col-xs-12 zsubtitle">Firm details</div>

    <div class="col-xs-12 col-md-3">
      <label class="zlabel" for="name">
        Name of Proprietor / Managing Director*
        <span class="asterisk"> *</span></label
      >
    </div>
    <div class="col-xs-12 col-md-3">
      <q-input dense outlined v-model="formData.prop_name" type="text" />
    </div>

    <div class="col-xs-12 col-md-2">
      <label class="zlabel" for="dob" type="date"> Designation* </label>
    </div>
    <div class="col-xs-12 col-md-4">
      <q-input dense outlined v-model="formData.designation" type="text" />
    </div>

    <div class="col-xs-12 col-md-3">
      <label class="zlabel" for="gender"
        >Name of Enterprise* <span class="asterisk">*</span></label
      >
    </div>
    <div class="col-xs-12 col-md-3">
      <q-input outlined v-model="formData.enterprise_name" />
    </div>
    <div class="col-xs-12 col-md-3">
      <label class="zlabel" for="pob">
        Number of Directors/Proprietor/MD/CEO*</label
      >
    </div>

    <div class="col-xs-12 col-md-3">
      <q-input outlined v-model="formData.total_directors" />
    </div>

    <div class="col-xs-12 col-md-3">
      <label class="zlabel" for="gender">
        PAN Number <span class="asterisk">*</span></label
      >
    </div>
    <div class="col-xs-12 col-md-3">
      <q-input dense outlined v-model="formData.pan_no" />
    </div>

    <div class="col-xs-12 col-md-3">
      <label class="zlabel" for="gender">
        PAN Card Attachment* ( Maximum size : 4 MB Format : PDF )
        <span class="asterisk">*</span></label
      >
    </div>
    <div class="col-xs-12 col-md-3">
      <q-file v-model="formData.pan_card" dense outlined>
        <template v-slot:prepend>
          <q-icon name="attach_file" />
        </template>
      </q-file>
    </div>

    <div class="col-xs-12 col-md-3">
      <label class="zlabel" for="gender">
        AADHAR Number
        <span class="asterisk">*</span></label
      >
    </div>
    <div class="col-xs-12 col-md-3">
      <q-input dense outlined v-model="formData.aadhaar_no" />
    </div>

    <div class="col-12">
      I hereby state that i have no objection in authenticating myself with
      Aadhaar based authentication system and consent to providing my Aadhaar
      number, biometric and/or One Time Pin(OTP) data for Aadhaar based
      authentication to availing services under Ease of Doing Business(EODB) of
      Department of Commerce & Industries
    </div>

    <div class="col-xs-12 col-md-3">
      <label class="zlabel" for="gender">
        Passport Number
        <span class="asterisk">*</span></label
      >
    </div>
    <div class="col-xs-12 col-md-3">
      <q-input dense outlined v-model="formData.passport_no" />
    </div>

    <div class="col-xs-12 col-md-3">
      <label class="zlabel" for="gender">
        Applicant is NRI
        <span class="asterisk">*</span></label
      >
    </div>
    <div class="col-xs-12 col-md-3">
      <q-input dense outlined v-model="formData.is_applicant_nri" />
    </div>

    <div class="col-xs-12 col-md-3">
      <label class="zlabel" for="gender">
        TIN/VAT/GSTIN Number
        <span class="asterisk">*</span></label
      >
    </div>
    <div class="col-xs-12 col-md-3">
      <q-input dense outlined v-model="formData.is_applicant_nri" />
    </div>

    <div class="col-xs-12 col-md-3">
      <label class="zlabel" for="gender">
        Attach TIN/VAT/GSTIN Certificate* ( Maximum size : 4 MB Format : PDF )
        <span class="asterisk">*</span></label
      >
    </div>
    <div class="col-xs-12 col-md-3">
      <q-input dense outlined v-model="formData.is_applicant_nri" />
    </div>

    <div class="col-xs-12 col-md-3">
      <label class="zlabel" for="gender">
        CST Number
        <span class="asterisk">*</span></label
      >
    </div>
    <div class="col-xs-12 col-md-3">
      <q-input dense outlined v-model="formData.cst_no" />
    </div>

    <div class="col-xs-12 col-md-3">
      <label class="zlabel" for="gender">
        Attach CST Certifiacte * ( Maximum size : 4 MB Format : PDF )
        <span class="asterisk">*</span></label
      >
    </div>
    <div class="col-xs-12 col-md-3">
      <q-file v-model="formData.cst_cert" dense outlined>
        <template v-slot:prepend>
          <q-icon name="attach_file" />
        </template>
      </q-file>
    </div>

    <div class="col-xs-12 col-md-3">
      <label class="zlabel" for="gender">
        Udyog Aadhaar Memorandum(For Existing Enterprise Only)
        <span class="asterisk">*</span></label
      >
    </div>
    <div class="col-xs-12 col-md-3">
      <q-input dense outlined v-model="formData.udyog_no" />
    </div>

    <div class="col-xs-12" />
  </div>
</template>

<script>
import { reactive } from "@vue/reactivity";
import { useStore } from "vuex";
import { onMounted } from "vue";
import { date } from "quasar";


export default {
  setup(props, context) {
    const store = useStore();
    const draft = store.getters["applicantData/getCurrentDraft"];
    const currentUser = store.getters["auth/getCurrentUser"];

    const formData = reactive({
      prop_name: "",
      designation: "",

      enterprise_name: "",

      total_directors: "",

      pan_no: "",

      pan_card: null,

      aadhaar_no: "",

      passport_no: "",

      is_applicant_nri: "",

      cst_no: "",

      cst_cert: "",

      udyog_no: "",
    });
    onMounted(() => {});
    return {
      formData,
      maxDate: () => date.formatDate(Date.now(), "YYYY-MM-DD"),
    };
  },
};
</script>
