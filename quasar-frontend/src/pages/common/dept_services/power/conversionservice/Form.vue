<template>
  <div class="zcard row items-center q-col-gutter-md">
    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="name"
        >1 Service Connection No. <span class="asterisk"> *</span></label
      >
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.power_conversion_service_one"
        dense
        outlined
      />
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="dob" type="date"
        >2 Consumer No.<span class="asterisk">*</span>
      </label>
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.power_conversion_service_two"
        dense
        outlined
      />
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="gender"
        >3 Name of Consumer <span class="asterisk">*</span></label
      >
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.power_conversion_service_three"
        dense
        outlined
      />
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="gender"
        >4 Consumer category <span class="asterisk">*</span></label
      >
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.power_conversion_service_four"
        dense
        outlined
      />
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="gender"
        >5 Contracted load <span class="asterisk">*</span></label
      >
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.power_conversion_service_five"
        dense
        outlined
      />
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="gender"
        >6 Address<span class="asterisk">*</span></label
      >

      <q-input
        v-model="formData.power_conversion_service_six"
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        dense
        outlined
      />
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="gender"
        >7 Telephone No.<span class="asterisk">*</span></label
      >

      <q-input
        v-model="formData.power_conversion_service_seven"
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        dense
        outlined
      />
    </div>

    <div class="col-12">
      <label class="zlabel" for="name">8 Request for change in service: </label>

      <div class="row justify q-col-gutter-sm q-ml-md">
        <div class="col-12">
          <label class="zlabel" for="name">
            i) If request is for conversion of service: (Tick whichever
            applicable)
            <span class="asterisk"> *</span></label
          >
          <br />

          <div style="display:grid">
            <q-checkbox
              v-model="formData.power_conversion_service_eight_i_a"
              label="a)Conversion from LT single phase to LT 3-phase"
            />
            <q-checkbox
              v-model="formData.power_conversion_service_eight_i_b"
              label="b)Conversion from LT 3-phase to LT single phase"
            />
            <q-checkbox
              v-model="formData.power_conversion_service_eight_i_c"
              label="c)Conversion from LT to HT"
            />
            <q-checkbox
              v-model="formData.power_conversion_service_eight_i_d"
              label="d) Conversion from HT to LT"
            />
            <q-checkbox
              v-model="formData.power_conversion_service_eight_i_e"
              label="e)Conversion from HT to EHT"
            />
            <q-checkbox
              v-model="formData.power_conversion_service_eight_i_f"
              label="f) Conversion from EHT to HT"
            />
            <q-input
              label="g) Other(Please specify)"
              dense
              outlined
              v-model="formData.power_conversion_service_eight_i_g"
            />
          </div>
        </div>
        <div class="col-md-6 col-sm-12 col-xs-12">
          <label class="zlabel" for="name"
            >ii) If request is for change in consume category, mention the
            tariff category to which Consumer</label
          >
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            dense
            outlined
            v-model="formData.power_conversion_service_eight_ii"
          />
        </div>

        <div class="col-md-6 col-sm-12 col-xs-12">
          <label class="zlabel" for="name"
            >iii) If request is for change in premises: iii) If request is for
            change in premises:</label
          >
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            dense
            outlined
            v-model="formData.power_conversion_service_eight_iii"
          />
        </div>
      </div>
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="gender"
        >9 Reason for change in service<span class="asterisk">*</span></label
      >

      <q-input
        v-model="formData.power_conversion_service_nine"
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        dense
        outlined
      />
    </div>

    <div class="col-12 zlabel">
      Note: The following documents are attached with the application form:
      (Tick whichever applicable)
    </div>

    <div class="col-md-6 col-xs-10">
      <label for="" class="zlabel"
        >1. Installation inspection report by the Electrical Inspector</label
      >
      <q-file v-model="formData.power_conversion_service_inspection_report" outlined>
        <template v-slot:prepend>
          <q-icon name="attach_file" />
        </template>
      </q-file>
    </div>

    <div class="col-md-6 col-xs-10">
      <label for="" class="zlabel"
        >2. Any other document (please specify)</label
      >
      <q-file v-model="formData.power_conversion_service_other_doc" outlined>
        <template v-slot:prepend>
          <q-icon name="attach_file" />
        </template>
      </q-file>
    </div>

     <div class="col-md-6 col-xs-10">
      <label for="" class="zlabel"
        >Signature of the consumer</label
      >
      <q-file v-model="formData.power_conversion_service_signature" outlined>
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
import { onMounted ,watch} from "vue";
import { date } from "quasar";

export default {
  setup(props, context) {
    const store = useStore();
    const draft = store.getters["applicantData/getCurrentDraft"];
    const currentUser = store.getters["auth/getCurrentUser"];

    const formData = reactive({
      application_code: "POWER_CONVERSION_SERVICE",
      department_id: 12,
      power_conversion_service_one: "",
      power_conversion_service_two: "",
      power_conversion_service_three: "",
      power_conversion_service_four: "",
      power_conversion_service_five: "",
      power_conversion_service_six: "",
      power_conversion_service_seven: "",
      power_conversion_service_eight: "",
      power_conversion_service_eight_i: "",
      power_conversion_service_eight_i_a: false,
      power_conversion_service_eight_i_b: false,
      power_conversion_service_eight_i_c: false,
      power_conversion_service_eight_i_d: false,
      power_conversion_service_eight_i_e: false,
      power_conversion_service_eight_i_f: false,
      power_conversion_service_eight_i_g: '',
      power_conversion_service_eight_ii: '',
      power_conversion_service_eight_iii: '',
      power_conversion_service_nine: '',
      power_conversion_service_inspection_report: null,
      power_conversion_service_other_doc: null,
      power_conversion_service_signature: null

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

      formData.power_conversion_service_three = applicant_name  ;
      formData.power_conversion_service_six = address ;
      formData.power_conversion_service_seven = mobile_no ;
    
      

    };
    onMounted(() => {});
    return {
      formData,
      maxDate: () => date.formatDate(Date.now(), "YYYY-MM-DD"),
    };
  },
};
</script>
