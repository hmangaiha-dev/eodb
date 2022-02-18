<template>
  <div class="zcard row items-center q-col-gutter-md">
    <div class="col-lg-10 col-xs-12">
      <label class="zlabel" for="name"
        >Complaint reference No. : _____ (to be given by licensee)<span
          class="asterisk"
        >
          *</span
        ></label
      >
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.power_meter_complaints_refer_no"
        dense
        outlined
      />
    </div>
    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="name"
        >1. Service Connection No:<span class="asterisk"> *</span></label
      >
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.power_meter_complaints_one"
        dense
        outlined
      />
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="dob" type="date"
        >2. Consumer No<span class="asterisk">*</span>
      </label>
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.power_meter_complaints_two"
        dense
        outlined
      />
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="gender"
        >3. Name of the consumer<span class="asterisk">*</span></label
      >
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.power_meter_complaints_three"
        dense
        outlined
      />
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="gender"
        >4. Address and Telephone No. of the consumer:
        <span class="asterisk">*</span></label
      >
      <q-input
        type="textarea"
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.power_meter_complaints_four"
        dense
        outlined
      />
    </div>

    <div class="col-12">
      <label class="zlabel" for="name"
        >5 . Brief description of the complaint –
      </label>

      <div class="row justify q-col-gutter-sm q-ml-md">
        <div class="col-12">
          <div class="zlabel" style="display: grid">
            <q-checkbox
              v-model="formData.power_meter_complaints_five_a"
              label="(a) Burnt out"
            />
            <q-checkbox
              v-model="formData.power_meter_complaints_five_b"
              label="(b) Completely stopped"
            />
            <q-checkbox
              v-model="formData.power_meter_complaints_five_c"
              label="(c) Fast meter"
            />

            <q-checkbox
              v-model="formData.power_meter_complaints_five_d"
              label="(d) Seal broken"
            />
            <q-checkbox
              v-model="formData.power_meter_complaints_five_e"
              label="(e) Testing of Meter"
            />
          </div>
        </div>
      </div>
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="gender"
        >6. Initial cost of meter was borne by (tick one):<span class="asterisk"
          >*</span
        ></label
      >
      <br />

      <q-radio class="zlabel" v-model="formData.power_meter_complaints_six" val="(a)Consumer" label="(a)Consumer" />
      <q-radio class="zlabel" v-model="formData.power_meter_complaints_six" val="(b)Licensee" label="(b)Licensee" />
    </div>

    <div class="col-md-6 col-sm-12 col-xs-12">
      <label class="zlabel" for="name"
        >7. Complainant desires to provide/has provided a new meter for
        replacement (Yes/No):</label
      >
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        dense
        outlined
        v-model="formData.power_meter_complaints_seven"
      />
    </div>

    <div class="col-md-6 col-sm-12 col-xs-12">
      <label class="zlabel" for="name">8. Any other information:</label>
      <q-input
        type="textarea"
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        dense
        outlined
        v-model="formData.power_meter_complaints_eight"
      />
    </div>

    <div class="col-md-6 col-xs-10">
      <label for="" class="zlabel">Signature of Consumer</label>
      <q-file v-model="formData.power_meter_complaints_signature" outlined>
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
      application_code: "POWER_METER_COMPLAINTS",
      department_id: 12,
      power_meter_complaints_refer_no: "",
      power_meter_complaints_one: "",
      power_meter_complaints_two: "",
      power_meter_complaints_three: "",
      power_meter_complaints_four: "",
      power_meter_complaints_five: "",
      power_meter_complaints_five_a: false,
      power_meter_complaints_five_b: false,
      power_meter_complaints_five_c: false,
      power_meter_complaints_five_d: false,
      power_meter_complaints_five_e: false,
      power_meter_complaints_six: "",
      power_meter_complaints_seven: "",
      power_meter_complaints_eight: "",
      power_meter_complaints_signature: null,
    
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

      formData.power_meter_complaints_three = applicant_name  ;
      formData.power_meter_complaints_four = address ;
    
      

    };

    onMounted(() => {});
    return {
      formData,
      getA,
      maxDate: () => date.formatDate(Date.now(), "YYYY-MM-DD"),
    };
  },
};
</script>
