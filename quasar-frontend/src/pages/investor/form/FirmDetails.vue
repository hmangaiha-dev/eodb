<template>
  <div class="zcard row items-center q-col-gutter-md">
    <div class="col-xs-12 text-h6">4.Firm details</div>

    <div class="row q-col-gutter-md items-center col-12 q-ml-sm">
      <div class="col-xs-12 col-md-6">
        <label class="zlabel" for="name">
          4.1 Name of Proprietor / Managing Director*
          <span class="asterisk"> *</span></label
        >
      </div>
      <div class="col-xs-12 col-md-6">
        <q-input outlined v-model="formData.prop_name" type="text" />
      </div>
      <div class="col-xs-12 col-md-6">
        <label class="zlabel" for="dob" type="date"> 4.2 Designation* </label>
      </div>
      <div class="col-xs-12 col-md-6">
        <q-input outlined v-model="formData.designation" type="text" />
      </div>
      <div class="col-xs-12 col-md-6">
        <label class="zlabel" for="gender"
          >4.3 Name of Enterprise* <span class="asterisk">*</span></label
        >
      </div>
      <div class="col-xs-12 col-md-6">
        <q-input outlined v-model="formData.enterprise_name" />
      </div>
      <div class="col-xs-12 col-md-6">
        <label class="zlabel" for="gender"
          >4.4 Type of Enterprise* <span class="asterisk">*</span></label
        >
      </div>
      <div class="col-xs-12 col-md-6">
        <q-select
          v-model="formData.enterprise_type"
          :options="[
            'Sole proprietorship',
            'Partnership',
            'Limited liability company',
            'Corporation',
            'Cooperatives',
          ]"
          outlined
        />
      </div>
      <div class="col-xs-12 col-md-6">
        <label class="zlabel" for="pob">
          4.5 Number of Directors/Proprietor/MD/CEO*</label
        >
      </div>
      <div class="col-xs-12 col-md-6">
        <q-input outlined v-model="formData.total_directors" />
      </div>
      <div class="col-xs-12 col-md-6">
        <label class="zlabel" for="gender">
          4.6 PAN Number <span class="asterisk">*</span></label
        >
      </div>
      <div class="col-xs-12 col-md-6">
        <q-input outlined v-model="formData.pan_no" />
      </div>
      <div class="col-xs-12 col-md-6">
        <label class="zlabel" for="gender">
          4.6(i) PAN Card Attachment* ( Maximum size : 4 MB Format : PDF )
          <span class="asterisk">*</span></label
        >
      </div>
      <div class="col-xs-12 col-md-6">
        <q-file v-model="formData.pan_card" outlined>
          <template v-slot:prepend>
            <q-icon name="attach_file" />
          </template>
        </q-file>
      </div>
      <div class="col-xs-12 col-md-6">
        <label class="zlabel" for="gender">
          4.7 AADHAR Number
          <span class="asterisk">*</span></label
        >
      </div>
      <div class="col-xs-12 col-md-6">
        <q-input outlined v-model="formData.aadhaar_no" />
      </div>
      <div class="col-12 zlabel">
        I hereby state that i have no objection in authenticating myself with
        Aadhaar based authentication system and consent to providing my Aadhaar
        number, biometric and/or One Time Pin(OTP) data for Aadhaar based
        authentication to availing services under Ease of Doing Business(EODB)
        of Department of Commerce & Industries
      </div>
      <div class="col-xs-12 col-md-6">
        <label class="zlabel" for="gender">
          4.8 Passport Number
          <span class="asterisk">*</span></label
        >
      </div>
      <div class="col-xs-12 col-md-6">
        <q-input outlined v-model="formData.passport_no" />
      </div>
      <div class="col-xs-12 col-md-6">
        <label class="zlabel" for="gender">
          4.9 Applicant is NRI
          <span class="asterisk">*</span></label
        >
      </div>
      <div class="col-xs-12 col-md-6">
        <q-input outlined v-model="formData.is_applicant_nri" />
      </div>
      <div class="col-xs-12 col-md-6">
        <label class="zlabel" for="gender">
          4.10 TIN/VAT/GSTIN Number
          <span class="asterisk">*</span></label
        >
      </div>
      <div class="col-xs-12 col-md-6">
        <q-input outlined v-model="formData.tin_no" />
      </div>
      <div class="col-xs-12 col-md-6">
        <label class="zlabel" for="gender">
          4.10 (i) Attach TIN/VAT/GSTIN Certificate* ( Maximum size : 4 MB
          Format : PDF )
          <span class="asterisk">*</span></label
        >
      </div>
      <div class="col-xs-12 col-md-6">
        <q-file v-model="formData.tin_cert" outlined>
          <template v-slot:prepend>
            <q-icon name="attach_file" />
          </template>
        </q-file>
      </div>
      <div class="col-xs-12 col-md-6">
        <label class="zlabel" for="gender">
          4.11 CST Number
          <span class="asterisk">*</span></label
        >
      </div>
      <div class="col-xs-12 col-md-6">
        <q-input outlined v-model="formData.cst_no" />
      </div>
      <div class="col-xs-12 col-md-6">
        <label class="zlabel" for="gender">
          4.11(i) Attach CST Certifiacte * ( Maximum size : 4 MB Format : PDF )
          <span class="asterisk">*</span></label
        >
        <q-file v-model="formData.cst_cert" outlined>
          <template v-slot:prepend>
            <q-icon name="attach_file" />
          </template>
        </q-file>
      </div>
      <!-- <div class="col-xs-12 col-md-6"> -->
      <!-- </div> -->
      <div class="col-xs-12 col-md-6">
        <label class="zlabel" for="gender">
          4.12 MoU/Partnership Deed Attachment* ( Maximum size : 4 MB Format :
          PDF )
          <span class="asterisk">*</span></label
        >
        <q-file v-model="formData.mou_deed" outlined>
          <template v-slot:prepend>
            <q-icon name="attach_file" />
          </template>
        </q-file>
      </div>
      <div class="col-xs-12 col-md-6">
        <label class="zlabel" for="gender">
          4.13 Certificate of Company Incorporation/Registration Attachment* (
          Maximum size : 4 MB Format : PDF )
          <span class="asterisk">*</span></label
        >
        <q-file v-model="formData.company_reg_cert" outlined>
          <template v-slot:prepend>
            <q-icon name="attach_file" />
          </template>
        </q-file>
      </div>
      <div class="col-xs-12 col-md-6">
        <label class="zlabel" for="gender">
          4.14 Udyog Aadhaar Memorandum(For Existing Enterprise Only)
          <span class="asterisk">*</span></label
        >
        <q-file v-model="formData.udyog_memorandum" outlined>
          <template v-slot:prepend>
            <q-icon name="attach_file" />
          </template>
        </q-file>
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

export default {
  setup(props, context) {
    const store = useStore();
    const draft = store.getters["applicantData/getCurrentDraft"];
    const currentUser = store.getters["auth/getCurrentUser"];

    const formData = reactive({
      prop_name: "",
      designation: "",
      enterprise_name: "",
      enterprise_type: "",
      total_directors: "",
      pan_no: "",
      pan_card: null,
      aadhaar_no: "",
      passport_no: "",
      is_applicant_nri: "",
      tin_no: "",
      tin_cert: null,
      cst_no: "",
      cst_cert: null,
      mou_deed: null,
      company_reg_cert: null,
      udyog_memorandum: null,
    });
    onMounted(() => {});
    return {
      formData,
      maxDate: () => date.formatDate(Date.now(), "YYYY-MM-DD"),
    };
  },
};
</script>
