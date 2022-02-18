<template>
  <div class="zcard row items-center q-col-gutter-md">
    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="name"
        >1. Service Connection No:<span class="asterisk"> *</span></label
      >
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.power_disconnection_one"
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
        v-model="formData.power_disconnection_two"
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
        v-model="formData.power_disconnection_three"
        dense
        outlined
      />
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="gender"
        >4. Consumer category <span class="asterisk">*</span></label
      >
      <q-input
       
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.power_disconnection_four"
        dense
        outlined
      />
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="gender"
        >5. Address <span class="asterisk">*</span></label
      >
      <q-input
        type="textarea"
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.power_disconnection_five"
        dense
        outlined
      />
    </div>


      <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="gender"
        >6. Phone no <span class="asterisk">*</span></label
      >
      <q-input
       
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.power_disconnection_six"
        dense
        outlined
      />
    </div>

    <div class="col-12 zlabel">
      It is requested that the above connection may be disconnected and the
      relevant Agreement with the licensee be terminated forthwith
    </div>

    <div class="col-12 zlabel text-center">
      Note: The following documents are attached with the application form:
    </div>

    <div class="col-12">
      <hr>
    </div>

    <div class="col-md-6 col-xs-10">
      <label for="" class="zlabel">1. Copy of last bill</label>
      <q-file v-model="formData.power_disconnection_last_bill" outlined>
        <template v-slot:prepend>
          <q-icon name="attach_file" />
        </template>
      </q-file>
    </div>

    <div class="col-md-6 col-xs-10">
      <label for="" class="zlabel">2. Copy of payment receipt of last bill</label>
      <q-file v-model="formData.power_disconnection_last_payment_receipt" outlined>
        <template v-slot:prepend>
          <q-icon name="attach_file" />
        </template>
      </q-file>
    </div>


     <div class="col-md-6 col-xs-10">
      <label for="" class="zlabel">Signature of the Consumer</label>
      <q-file v-model="formData.power_disconnection_last_signature" outlined>
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
      application_code: "POWER_DISCONNECTION",
      department_id: 12,
      power_disconnection_one: "",
      power_disconnection_two: "",
      power_disconnection_three: "",
      power_disconnection_four: "",
      power_disconnection_five: "",
      power_disconnection_six: "",
      power_disconnection_last_bill: null,
      power_disconnection_last_payment_receipt: null,
      power_disconnection_last_signature: null,
     
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

      formData.power_disconnection_three = applicant_name  ;
      formData.power_disconnection_five = address ;
      formData.power_disconnection_six = mobile_no ;
    
      

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
