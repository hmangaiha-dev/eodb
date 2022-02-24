<template>
  <div class="zcard row items-center q-col-gutter-md">
    <div class="col-xs-12 text-h6">4.Firm details</div>
    attach {{ attachment }}

    <div class="row q-col-gutter-md items-center col-12 q-ml-sm">
      
      <q-dialog v-model="dialog">
        <q-card class="col-12">
          <q-card-section>
            <embed :src="attachment" width="900" height="900" />
          </q-card-section>
        </q-card>
      </q-dialog>
      <div class="col-xs-12 col-md-6">
        <label class="zlabel" for="name">
          4.1 Name of Proprietor / Managing Director*
          <span class="asterisk">*</span>
        </label>
      </div>
      <div class="col-xs-12 col-md-6">
        <q-input outlined v-model="formData.prop_name" type="text" />
      </div>
      <div class="col-xs-12 col-md-6">
        <label class="zlabel" for="dob" type="date">4.2 Designation*</label>
      </div>
      <div class="col-xs-12 col-md-6">
        <q-input outlined v-model="formData.designation" type="text" />
      </div>
      <div class="col-xs-12 col-md-6">
        <label class="zlabel" for="gender">
          4.3 Name of Enterprise*
          <span class="asterisk">*</span>
        </label>
      </div>
      <div class="col-xs-12 col-md-6">
        <q-input outlined v-model="formData.enterprise_name" />
      </div>
      <div class="col-xs-12 col-md-6">
        <label class="zlabel" for="gender">
          4.4 Type of Enterprise*
          <span class="asterisk">*</span>
        </label>
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
        <label class="zlabel" for="pob"
          >4.5 Number of Directors/Proprietor/MD/CEO*</label
        >
      </div>
      <div class="col-xs-12 col-md-6">
        <q-input outlined v-model="formData.total_directors" />
      </div>
      <div class="col-xs-12 col-md-6">
        <label class="zlabel" for="gender">
          4.6 PAN Number
          <span class="asterisk">*</span>
        </label>
      </div>
      <div class="col-xs-12 col-md-6">
        <q-input outlined v-model="formData.pan_no" />
      </div>
      <div class="col-xs-12 col-md-6">
        <label class="zlabel" for="gender">
          4.6(i) PAN Card Attachment* ( Maximum size : 4 MB Format : PDF )
          <span class="asterisk">*</span>
        </label>
      </div>
      <div class="col-xs-12 col-md-6">
        <q-uploader
          accept=".pdf"
          flat
          @added="
            (files) => {
              formData.pan_card = files[0];
            }
          "
          hide-upload-btn
          ref="formData.applicant_photo"
          color="grey"
          v-model="formData.pan_card"
          url="http://localhost:4444/upload"
          style="max-width: 300px"
        />

        <q-img
          v-if="mimeType(formData.pan_card)"
          :src="`http://localhost:8000/storage/${formData.pan_card}`"
          style="max-width: 150px; margin-top: -100px"
          spinner-color="primary"
          spinner-size="82px"
        />

        <!-- {{ typeof formData.udyog_memorandum }} -->

        <q-btn
          v-if="
            typeof formData.pan_card !== 'object' &&
            !mimeType(formData.pan_card)
          "
          flat
          style="max-width: 150px; margin-top: -100px"
          color="primary"
          icon="picture_as_pdf"
          label="view"
          @click="showAttachment(formData.pan_card)"
        />

        <!-- <q-btn
          v-if="typeof formData.pan_card === 'string'"
          flat
          style="max-width: 150px; margin-top: -100px"
          color="primary"
          label="view"
          @click="showAttachment(formData.pan_card)"
        /> -->

        <!-- <q-img
          v-if="!Array.isArray(formData.pan_card) && formData.pan_card"
          :src="`http://localhost:8000/storage/${formData.pan_card}`"
          style="max-width: 150px; margin-top: -100px"
          spinner-color="primary"
          spinner-size="82px"
        /> -->
        <!-- <q-file v-model="formData.pan_card" outlined>
          <template v-slot:prepend>
            <q-icon name="attach_file" />
          </template>
        </q-file> -->
        <!-- <q-btn
          flat
          color="primary"
          label="view"
          @click="showAttachment(formData.pan_card)"
        /> -->
      </div>

      <div class="col-xs-12 col-md-6">
        <label class="zlabel" for="gender">
          4.7 AADHAR Number
          <span class="asterisk">*</span>
        </label>
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
          <span class="asterisk">*</span>
        </label>
      </div>
      <div class="col-xs-12 col-md-6">
        <q-input outlined v-model="formData.passport_no" />
      </div>
      <div class="col-xs-12 col-md-6">
        <label class="zlabel" for="gender">
          4.9 Applicant is NRI
          <span class="asterisk">*</span>
        </label>
      </div>
      <div class="col-xs-12 col-md-6">
        <q-input outlined v-model="formData.is_applicant_nri" />
      </div>
      <div class="col-xs-12 col-md-6">
        <label class="zlabel" for="gender">
          4.10 TIN/VAT/GSTIN Number
          <span class="asterisk">*</span>
        </label>
      </div>
      <div class="col-xs-12 col-md-6">
        <q-input outlined v-model="formData.tin_no" />
      </div>
      <div class="col-xs-12 col-md-6">
        <label class="zlabel" for="gender">
          4.10 (i) Attach TIN/VAT/GSTIN Certificate* ( Maximum size : 4 MB
          Format : PDF )
          <span class="asterisk">*</span>
        </label>
      </div>
      <div class="col-xs-12 col-md-6">
        <q-uploader
          accept=".pdf"
          flat
          @added="
            (files) => {
              formData.tin_cert = files[0];
            }
          "
          hide-upload-btn
          ref="formData.applicant_photo"
          color="grey"
          v-model="formData.tin_cert"
          url="http://localhost:4444/upload"
          style="max-width: 300px"
        />

        <q-img
          v-if="mimeType(formData.tin_cert)"
          :src="`http://localhost:8000/storage/${formData.tin_cert}`"
          style="max-width: 150px; margin-top: -100px"
          spinner-color="primary"
          spinner-size="82px"
        />

        <!-- {{ typeof formData.udyog_memorandum }} -->

        <q-btn
          v-if="
            typeof formData.tin_cert !== 'object' &&
            !mimeType(formData.tin_cert)
          "
          flat
          style="max-width: 150px; margin-top: -100px"
          color="primary"
          icon="picture_as_pdf"
          label="view"
          @click="showAttachment(formData.tin_cert)"
        />

        <!-- <q-btn
          v-if="typeof formData.tin_cert === 'string'"
          flat
          style="max-width: 150px; margin-top: -100px"
          color="primary"
          label="view"
          @click="showAttachment(formData.tin_cert)"
        /> -->

        <!-- <q-img
          v-if="!Array.isArray(formData.tin_cert) && formData.tin_cert"
          :src="`http://localhost:8000/storage/${formData.tin_cert}`"
          style="max-width: 150px; margin-top: -100px"
          spinner-color="primary"
          spinner-size="82px"
        /> -->
      </div>
      <div class="col-xs-12 col-md-6">
        <label class="zlabel" for="gender">
          4.11 CST Number
          <span class="asterisk">*</span>
        </label>
      </div>
      <div class="col-xs-12 col-md-6">
        <q-input outlined v-model="formData.cst_no" />
      </div>
      <div class="col-xs-12 col-md-6">
        <label class="zlabel" for="gender">
          4.11(i) Attach CST Certifiacte * ( Maximum size : 4 MB Format : PDF )
          <span class="asterisk">*</span>
        </label>
        <q-uploader
          accept=".pdf"
          flat
          @added="
            (files) => {
              formData.cst_cert = files[0];
            }
          "
          hide-upload-btn
          ref="formData.applicant_photo"
          color="grey"
          v-model="formData.cst_cert"
          url="http://localhost:4444/upload"
          style="max-width: 300px"
        />

        <q-img
          v-if="mimeType(formData.cst_cert)"
          :src="`http://localhost:8000/storage/${formData.cst_cert}`"
          style="max-width: 150px; margin-top: -100px"
          spinner-color="primary"
          spinner-size="82px"
        />

        <!-- {{ typeof formData.udyog_memorandum }} -->

        <q-btn
          v-if="
            typeof formData.cst_cert !== 'object' &&
            !mimeType(formData.cst_cert)
          "
          flat
          style="max-width: 150px; margin-top: -100px"
          color="primary"
          icon="picture_as_pdf"
          label="view"
          @click="showAttachment(formData.cst_cert)"
        />

        <!-- <q-btn
          v-if="typeof formData.cst_cert === 'string'"
          flat
          style="max-width: 150px; margin-top: -100px"
          color="primary"
          label="view"
          @click="showAttachment(formData.cst_cert)"
        /> -->

        <!-- <q-img
          v-if="!Array.isArray(formData.cst_cert) && formData.cst_cert"
          :src="`http://localhost:8000/storage/${formData.cst_cert}`"
          style="max-width: 150px; margin-top: -100px"
          spinner-color="primary"
          spinner-size="82px"
        /> -->
      </div>
      <!-- <div class="col-xs-12 col-md-6"> -->
      <!-- </div> -->
      <div class="col-xs-12 col-md-6">
        <label class="zlabel" for="gender">
          4.12 MoU/Partnership Deed Attachment* ( Maximum size : 4 MB Format :
          PDF )
          <span class="asterisk">*</span>
        </label>
        <q-uploader
          accept=".pdf"
          flat
          @added="
            (files) => {
              formData.mou_deed = files[0];
            }
          "
          hide-upload-btn
          ref="formData.applicant_photo"
          color="grey"
          v-model="formData.mou_deed"
          url="http://localhost:4444/upload"
          style="max-width: 300px"
        />

        <q-img
          v-if="mimeType(formData.mou_deed)"
          :src="`http://localhost:8000/storage/${formData.mou_deed}`"
          style="max-width: 150px; margin-top: -100px"
          spinner-color="primary"
          spinner-size="82px"
        />

        <!-- {{ typeof formData.udyog_memorandum }} -->

        <q-btn
          v-if="
            typeof formData.mou_deed !== 'object' &&
            !mimeType(formData.mou_deed)
          "
          flat
          style="max-width: 150px; margin-top: -100px"
          color="primary"
          icon="picture_as_pdf"
          label="view"
          @click="showAttachment(formData.mou_deed)"
        />

        <!-- <q-btn
          v-if="typeof formData.mou_deed === 'string'"
          flat
          style="max-width: 150px; margin-top: -100px"
          color="primary"
          label="view"
          @click="showAttachment(formData.mou_deed)"
        /> -->
        <!-- <q-img
          v-if="!Array.isArray(formData.mou_deed) && formData.mou_deed"
          :src="`http://localhost:8000/storage/${formData.mou_deed}`"
          style="max-width: 150px; margin-top: -100px"
          spinner-color="primary"
          spinner-size="82px"
        /> -->
      </div>
      <div class="col-xs-12 col-md-6">
        <label class="zlabel" for="gender">
          4.13 Certificate of Company Incorporation/Registration Attachment* (
          Maximum size : 4 MB Format : PDF )
          <span class="asterisk">*</span>
        </label>
        <q-uploader
          accept=".pdf"
          flat
          @added="
            (files) => {
              formData.company_reg_cert = files[0];
            }
          "
          hide-upload-btn
          ref="formData.applicant_photo"
          color="grey"
          v-model="formData.company_reg_cert"
          url="http://localhost:4444/upload"
          style="max-width: 300px"
        />

        <q-img
          v-if="mimeType(formData.company_reg_cert)"
          :src="`http://localhost:8000/storage/${formData.company_reg_cert}`"
          style="max-width: 150px; margin-top: -100px"
          spinner-color="primary"
          spinner-size="82px"
        />

        <!-- {{ typeof formData.udyog_memorandum }} -->

        <q-btn
          v-if="
            typeof formData.company_reg_cert !== 'object' &&
            !mimeType(formData.company_reg_cert)
          "
          flat
          style="max-width: 150px; margin-top: -100px"
          color="primary"
          icon="picture_as_pdf"
          label="view"
          @click="showAttachment(formData.company_reg_cert)"
        />

        <!-- <q-btn
          v-if="typeof formData.company_reg_cert === 'string'"
          flat
          style="max-width: 150px; margin-top: -100px"
          color="primary"
          label="view"
          @click="showAttachment(formData.company_reg_cert)"
        /> -->

        <!-- <q-img
          v-if="
            !Array.isArray(formData.company_reg_cert) &&
            formData.company_reg_cert
          "
          :src="`http://localhost:8000/storage/${formData.company_reg_cert}`"
          style="max-width: 150px; margin-top: -100px"
          spinner-color="primary"
          spinner-size="82px"
        /> -->
      </div>
      <div class="col-xs-12 col-md-6">
        <label class="zlabel" for="gender">
          4.14 Udyog Aadhaar Memorandum(For Existing Enterprise Only)
          <span class="asterisk">*</span>
        </label>
        <q-uploader
          accept=".pdf"
          flat
          @added="
            (files) => {
              formData.udyog_memorandum = files[0];
            }
          "
          hide-upload-btn
          ref="formData.applicant_photo"
          color="grey"
          v-model="formData.udyog_memorandum"
          url="http://localhost:4444/upload"
          style="max-width: 300px"
        />
        <!-- {{ formData.udyog_memorandum }} -->

        <!-- {{ mimeType(formData.udyog_memorandum) }} -->
        <q-img
          v-if="mimeType(formData.udyog_memorandum)"
          :src="`http://localhost:8000/storage/${formData.udyog_memorandum}`"
          style="max-width: 150px; margin-top: -100px"
          spinner-color="primary"
          spinner-size="82px"
        />

        <!-- {{ typeof formData.udyog_memorandum }} -->

        <q-btn
          v-if="
            typeof formData.udyog_memorandum !== 'object' &&
            !mimeType(formData.udyog_memorandum)
          "
          flat
          style="max-width: 150px; margin-top: -100px"
          color="primary"
          icon="picture_as_pdf"
          label="view"
          @click="showAttachment(formData.udyog_memorandum)"
        />

        <!-- {{ Boolean('jpeg' || 'jpgdd') }} -->
      </div>
    </div>

    <div class="col-xs-12" />
  </div>
</template>

<script>
import { reactive } from "@vue/reactivity";
import { useStore } from "vuex";
import { onMounted, watch, ref } from "vue";
import { date } from "quasar";

export default {
  setup(props, context) {
    const store = useStore();
    const draft = store.getters["applicantData/getCurrentDraft"];
    const currentUser = store.getters["auth/getCurrentUser"];

    const dialog = ref(false);
    const attachment = ref("");

    var formData = reactive({
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
      common_id: null,
      model: "A",
    });

    const getA = () => {
      formData.prop_name = store.state.globalData.common.partA?.prop_name;
      formData.designation = store.state.globalData.common.partA?.designation;
      formData.enterprise_name =
        store.state.globalData.common.partA?.enterprise_name;
      formData.enterprise_type =
        store.state.globalData.common.partA?.enterprise_type;
      formData.total_directors =
        store.state.globalData.common.partA?.total_directors;
      formData.pan_no = store.state.globalData.common.partA?.pan_no;
      formData.pan_card = store.state.globalData.common.partA?.pan_card;
      formData.aadhaar_no = store.state.globalData.common.partA?.aadhaar_no;
      formData.passport_no = store.state.globalData.common.partA?.passport_no;
      formData.is_applicant_nri =
        store.state.globalData.common.partA?.is_applicant_nri;
      formData.tin_no = store.state.globalData.common.partA?.tin_no;
      formData.tin_cert = store.state.globalData.common.partA?.tin_cert;
      formData.cst_no = store.state.globalData.common.partA?.cst_no;
      formData.cst_cert = store.state.globalData.common.partA?.cst_cert;
      formData.mou_deed = store.state.globalData.common.partA?.mou_deed;
      formData.company_reg_cert =
        store.state.globalData.common.partA?.company_reg_cert;
      formData.udyog_memorandum =
        store.state.globalData.common.partA?.udyog_memorandum;
      formData.common_id = store.state.globalData.common.partA?.common_id;
    };
    onMounted(() => getA());

    watch(store.state.globalData.common, () => getA());
    return {
      formData,
      dialog,
      attachment,
      getA,
      mimeType: (val) => {
        // return console.log(typeof val);
        let index = String(val).lastIndexOf(".");
        let mime = String(val).substring(index + 1);
        return typeof val === "string" && val ? mime != "pdf" : false;
      },
      previewImg: ref(true),
      showAttachment: (val) => {
        console.log("dialog attach", val);
        // return
        attachment.value = "http://localhost:8000/storage/" + val;
        console.log("dialog attach check", attachment.value);
        dialog.value = true;
      },
      maxDate: () => date.formatDate(Date.now(), "YYYY-MM-DD"),
    };
  },
};
</script>
