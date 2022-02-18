<template>
  <div class="zcard row items-center q-col-gutter-md">
    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="name"
        >1 Name of the Applicant/Organization:<span class="asterisk">
          *</span
        ></label
      >
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.power_load_enc_rdc_one"
        dense
        outlined
      />
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="dob" type="date"
        >2 Service Connection No<span class="asterisk">*</span>
      </label>
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.power_load_enc_rdc_two"
        dense
        outlined
      />
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="gender"
        >3 Consumer Number: <span class="asterisk">*</span></label
      >
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.power_load_enc_rdc_three"
        dense
        outlined
      />
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="gender"
        >4 Address of premises to which electricity is being supplied.
        <span class="asterisk">*</span></label
      >
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.power_load_enc_rdc_four"
        dense
        outlined
      />
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="gender"
        >5 Telephone No <span class="asterisk">*</span></label
      >
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.power_load_enc_rdc_five"
        dense
        outlined
      />
    </div>

    <div class="col-12">
      <label class="zlabel" for="name">6 In case of Load Enhancement: </label>

      <div class="row justify q-col-gutter-sm q-ml-md">
        <div class="col-md-6 col-sm-12 col-xs-12">
          <label class="zlabel" for="name">
            i) Existing sanctioned load (in kW):
            <span class="asterisk"> *</span></label
          >
          <q-input outlined v-model="formData.power_load_enc_rdc_six_i" type="text" dense />
        </div>
        <div class="col-md-6 col-sm-12 col-xs-12">
          <label class="zlabel" for="name"
            >ii) Enhanced load requested (in kW)</label
          >
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            dense
            outlined
            v-model="formData.power_load_enc_rdc_six_ii"
          />
        </div>
      </div>
    </div>

    <div class="col-12">
      <label class="zlabel" for="name">7 In case of Load reduction: </label>

      <div class="row justify q-col-gutter-sm q-ml-md">
        <div class="col-md-6 col-sm-12 col-xs-12">
          <label class="zlabel" for="name">
            i) Existing sanctioned load (in kW):
            <span class="asterisk"> *</span></label
          >
          <q-input outlined v-model="formData.power_load_enc_rdc_seven_i" type="text" dense />
        </div>
        <div class="col-md-6 col-sm-12 col-xs-12">
          <label class="zlabel" for="name"
            >ii) Reduced load requested (in kW)</label
          >
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            dense
            outlined
            v-model="formData.power_load_enc_rdc_seven_ii"
          />
        </div>
      </div>
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="gender"
        >8 Reason(s) for Load Enhancement / Reduction
        <span class="asterisk">*</span></label
      >

      <q-input
        v-model="formData.power_load_enc_rdc_eight"
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        dense
        outlined
      />
    </div>

    <div class="col-12">
      <label class="zlabel" for="name"
        >9 Details of load added/ disconnected from supply, if applicable.
        (Please attach list of equipments category-wise)
      </label>

      <div class="row justify q-col-gutter-sm q-ml-md">
        <div class="col-12">
          <div class="zlabel" style="display: grid">
            <q-checkbox
              v-model="formData.power_load_enc_rdc_nine_a"
              label="(a) Lighting"
            />
            <q-checkbox
              v-model="formData.power_load_enc_rdc_nine_b"
              label="(b) Motive Power"
            />
            <q-checkbox
              v-model="formData.power_load_enc_rdc_nine_c"
              label="(c) Agricultural"
            />

            <q-input
              label="d) Other(Please specify)"
              dense
              outlined
              v-model="formData.power_load_enc_rdc_nine_d"
            />
          </div>
        </div>
      </div>
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="gender"
        >Signature of the consumer <span class="asterisk">*</span></label
      >

      <q-file
        v-model="formData.power_load_enc_rdc_signature"
        outlined
      >
        <template v-slot:prepend>
          <q-icon name="attach_file" />
        </template>
      </q-file>
    </div>

    <div class="col-12 zlabel">
      Note: The following documents are attached with the application form: (if
      applicable)
    </div>

    <div class="col-md-6 col-xs-10">
      <label for="" class="zlabel"
        >1. A work completion certificate & test report from Licensed Electrical
        Contractor, if the consumer's installation has been altered</label
      >
      <q-file
        v-model="formData.power_load_enc_rdc_completion_cert"
        outlined
      >
        <template v-slot:prepend>
          <q-icon name="attach_file" />
        </template>
      </q-file>
    </div>

    <div class="col-md-6 col-xs-10">
      <label for="" class="zlabel"
        >2. Resolution for authorised signatory</label
      >
      <q-file v-model="formData.power_load_enc_rdc_authorised_sign" outlined>
        <template v-slot:prepend>
          <q-icon name="attach_file" />
        </template>
      </q-file>
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
    const currentUser = store.getters["auth/getCurrentUser"];

    const formData = reactive({
      application_code: "POWER_LOAD_ENC_RDC",
      department_id: 12,
      power_load_enc_rdc_one: "",
      power_load_enc_rdc_two: "",
      power_load_enc_rdc_three: "",
      power_load_enc_rdc_four: "",
      power_load_enc_rdc_five: "",
      power_load_enc_rdc_six: "",
      power_load_enc_rdc_six_i: "",
      power_load_enc_rdc_six_ii: "",
      power_load_enc_rdc_seven: "",
      power_load_enc_rdc_seven_i: "",
      power_load_enc_rdc_seven_ii: "",
      power_load_enc_rdc_eight: "",
      power_load_enc_rdc_nine: "",
      power_load_enc_rdc_nine_a: false,
      power_load_enc_rdc_nine_b: false,
      power_load_enc_rdc_nine_c: false,
      power_load_enc_rdc_nine_d: "",
      power_load_enc_rdc_signature: null,
      power_load_enc_rdc_completion_cert: null,
      power_load_enc_rdc_authorised_sign: null
     
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

      formData.power_load_enc_rdc_one = applicant_name  ;
      formData.power_load_enc_rdc_four = address ;
      formData.power_load_enc_rdc_five = mobile_no ;

    
      

    };

    onMounted(() => {});
    return {
      formData,
      maxDate: () => date.formatDate(Date.now(), "YYYY-MM-DD"),
    };
  },
};
</script>
