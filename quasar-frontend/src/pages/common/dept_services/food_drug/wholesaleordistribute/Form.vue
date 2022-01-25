<template>
  <div class="zcard row items-center q-col-gutter-md">
    <div class="col-12">
      <label class="zlabel" for="name">1. </label>

      <div class="row justify q-col-gutter-sm q-ml-md">
        <div class="col-md-6 col-xs-12 col-xs-12">
          <label class="zlabel" for="name">
            I/We
            <span class="asterisk"> *</span></label
          >
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            dense
            outlined
            v-model="formData.food_drug_form19AA_one_i_we"
          />
        </div>
        <div class="col-md-6 col-xs-12">
          <label class="zlabel" for="name">Of</label>
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            dense
            outlined
            v-model="formData.food_drug_form19AA_one_of"
          />
        </div>

        <div class="col-12 zlabel">
          Hereby Apply For [licence To Sell, Stock Or Exhibit Or Offer For Sale
          By Wholesale, Or Distribute] Drugs Specified In Schedules C & C(1) And
          / Or Drugs Other Than Those Specified In Schedules C & Schedule C(1)
          From The Vehicle Bearing Registration No ________ Assigned Under The
          Motor Vehicles Act, 1939.
        </div>

        <div class="col-sm-4">
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            dense
            outlined
            v-model="formData.food_drug_form19AA_one_reg_no"
          />
        </div>
      </div>
    </div>

    <div class="col-md-6 col-xs-12">
      <label class="zlabel" for="name">
        2. Categories Of Drugs To Be Sold / Distributed
        <span class="asterisk"> *</span></label
      >
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        dense
        outlined
        v-model="formData.food_drug_form19AA_two"
      />
    </div>

    <div class="col-12">
      <label class="zlabel" for="name">
        3. A fee of Rs. ______________ has been credited to Government under the
        Head of Account 104 (1).
        <span>
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            style="display: table-cell"
            dense
            outlined
            v-model="formData.food_drug_form19AA_three"
          />
        </span>
      </label>
    </div>

    <div class="col-12">
      <label class="zlabel" for="name">
        4. Particulars of the storage accommodation for the storage of drugs
        specified in Schedules C and C (1) on the vehicle referred to above.
      </label>
      <div class="row justify q-col-gutter-sm q-ml-md">
    

        <div class="col-md-6 col-xs-12 col-xs-12">
          <label class="zlabel" for="name">
            I) Name
            <span class="asterisk"> *</span></label
          >
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            dense
            outlined
            v-model="formData.food_drug_form19AA_four_i"
          />
        </div>

        <div class="col-md-6 col-xs-12 col-xs-12">
          <label class="zlabel" for="name">
            II) Full Address
            <span class="asterisk"> *</span></label
          >
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            dense
            outlined
            v-model="formData.food_drug_form19AA_four_ii"
          />
        </div>

        <div class="col-md-6 col-xs-12 col-xs-12">
          <label class="zlabel" for="name">
            III) Phone
            <span class="asterisk"> *</span></label
          >
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            dense
            outlined
            v-model="formData.food_drug_form19AA_four_iii"
          />
        </div>
      </div>
    </div>

    <div class="col-12 q-my-md">
      <hr />
    </div>

    <div class="col-12 zlabel text-center">ADDITIONAL INFORMATION</div>

    <div class="col-12">
      <label class="zlabel" for="name">1. </label>

      <div class="row justify q-col-gutter-sm q-ml-md">
        <div class="col-md-6 col-xs-12 col-xs-12">
          <label class="zlabel" for="name">
            I) Hming
            <span class="asterisk"> *</span></label
          >
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            dense
            outlined
            v-model="formData.food_drug_form19AA_addl_one_i"
          />
        </div>
        <div class="col-md-6 col-xs-12">
          <label class="zlabel" for="name">II) Kum</label>
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            dense
            outlined
            v-model="formData.food_drug_form19AA_addl_one_ii"
          />
        </div>

        <div class="col-md-6 col-xs-12">
          <label class="zlabel" for="name">III) Pa Hming</label>
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            dense
            outlined
            v-model="formData.food_drug_form19AA_addl_one_iii"
          />
        </div>

        <div class="col-md-6 col-xs-12">
          <label class="zlabel" for="name">IV) Address</label>
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            dense
            outlined
            v-model="formData.food_drug_form19AA_addl_one_iv"
          />
        </div>

        <div class="col-md-6 col-xs-12">
          <label class="zlabel" for="name">V) Telephone No</label>
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            dense
            outlined
            v-model="formData.food_drug_form19AA_addl_one_v"
          />
        </div>

        <div class="col-md-6 col-xs-12">
          <label class="zlabel" for="name"
            >VI) Educational Qualification
          </label>
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            dense
            outlined
            v-model="formData.food_drug_form19AA_addl_one_vi"
          />
        </div>

        <div class="col-md-6 col-xs-12">
          <label class="zlabel" for="name"
            >VII) Damdawi lama thiamna/experience</label
          >
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            dense
            outlined
            v-model="formData.food_drug_form19AA_addl_one_vii"
          />
        </div>
      </div>
    </div>

    <div class="col-12">
      <label class="zlabel" for="name">2. </label>

      <div class="row justify q-col-gutter-sm q-ml-md">
        <div class="col-md-6 col-xs-12 col-xs-12">
          <label class="zlabel" for="name">
            I) Registered Pharmacist i ruai dawn em?
            <span class="asterisk"> *</span></label
          >
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            dense
            outlined
            v-model="formData.food_drug_form19AA_addl_two_i"
          />
        </div>
        <div class="col-md-6 col-xs-12">
          <label class="zlabel" for="name"
            >II) Registered Pharmacist hming
          </label>
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            dense
            outlined
            v-model="formData.food_drug_form19AA_addl_two_ii"
          />
        </div>

        <div class="col-md-6 col-xs-12">
          <label class="zlabel" for="name">III) Registration No. </label>
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            dense
            outlined
            v-model="formData.food_drug_form19AA_addl_two_iii"
          />
        </div>
      </div>
    </div>

    <div class="col-12">
      <label class="zlabel" for="name">3. </label>

      <div class="row justify q-col-gutter-sm q-ml-md">
        <div class="col-md-6 col-xs-12 col-xs-12">
          <label class="zlabel" for="name">
            I) Tunhmain Licence i nei toh em ?
            <span class="asterisk"> *</span></label
          >
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            dense
            outlined
            v-model="formData.food_drug_form19AA_addl_three_i"
          />
        </div>
        <div class="col-md-6 col-xs-12">
          <label class="zlabel" for="name"
            >II) Nei tawh thin i nih chuan eng vanga cancelled nge?</label
          >
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            dense
            outlined
            v-model="formData.food_drug_form19AA_addl_three_ii"
          />
        </div>
      </div>
    </div>

    <div class="col-md-6 col-xs-12">
      <label class="zlabel" for="name">4. Tunah eng Hna nge i thawh? </label>
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        dense
        outlined
        v-model="formData.food_drug_form19AA_addl_four"
      />
    </div>

    <div class="col-md-6 col-xs-12">
      <label class="zlabel" for="name"
        >5. Licence lo hmuta la Nangmah ngeiin i enkawl thei dawn em?
      </label>
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        dense
        outlined
        v-model="formData.food_drug_form19AA_addl_five"
      />
    </div>

    <div class="col-md-6 col-xs-12">
      <label class="zlabel" for="name"
        >6. Khawi route atan nge Mobile Licence hi i dil?
      </label>
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        dense
        outlined
        v-model="formData.food_drug_form19AA_addl_six"
      />
    </div>

    <div class="col-12">
      <label class="zlabel" for="name">
        A chunga mite khi a dik a ni tih ka hriattira, thil diklo leh belh chian
        dawllo a awm a nih chuan ka dilna hi hnawl mahse ka sawisel thei loving.
      </label>
      <div class="row justify q-col-gutter-sm q-ml-md">
        <div class="col-md-6 col-xs-12 col-xs-12">
          <label class="zlabel" for="name">
            I) Signature
            <span class="asterisk"> *</span></label
          >
          <q-input
            type="file"
            :rules="[(val) => val || 'Please type something']"
            dense
            outlined
            v-model="formData.food_drug_form19AA_addl_statement_i"
          />
        </div>

        <div class="col-md-6 col-xs-12 col-xs-12">
          <label class="zlabel" for="name">
            II) Name
            <span class="asterisk"> *</span></label
          >
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            dense
            outlined
            v-model="formData.food_drug_form19AA_addl_statement_ii"
          />
        </div>

        <div class="col-md-6 col-xs-12 col-xs-12">
          <label class="zlabel" for="name">
            III) Full Address
            <span class="asterisk"> *</span></label
          >
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            dense
            outlined
            v-model="formData.food_drug_form19AA_addl_statement_iii"
          />
        </div>

        <div class="col-md-6 col-xs-12 col-xs-12">
          <label class="zlabel" for="name">
            IV) Phone
            <span class="asterisk"> *</span></label
          >
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            dense
            outlined
            v-model="formData.food_drug_form19AA_addl_statement_iv"
          />
        </div>
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

    const formData = reactive({
      application_code: "FOOD_DRUG_FORM19AA",
      department_id: 6,
      food_drug_form19AA_one: "",
      food_drug_form19AA_one_i_we: "",
      food_drug_form19AA_one_of: "",    
      food_drug_form19AA_one_reg_no: "",    
      food_drug_form19AA_two: "",
      food_drug_form19AA_three: "",
      food_drug_form19AA_four: "",
      food_drug_form19AA_four_i: "",
      food_drug_form19AA_four_ii: "",
      food_drug_form19AA_four_iii: "",
      food_drug_form19AA_addl: "",
      food_drug_form19AA_addl_one: "",
      food_drug_form19AA_addl_one_i: "",
      food_drug_form19AA_addl_one_ii: "",
      food_drug_form19AA_addl_one_iii: "",
      food_drug_form19AA_addl_one_iv: "",
      food_drug_form19AA_addl_one_v: "",
      food_drug_form19AA_addl_one_vi: "",
      food_drug_form19AA_addl_one_vii: "",
      food_drug_form19AA_addl_two: "",
      food_drug_form19AA_addl_two_i: "",
      food_drug_form19AA_addl_two_ii: "",
      food_drug_form19AA_addl_two_iii: "",
      food_drug_form19AA_addl_three: "",
      food_drug_form19AA_addl_three_i: "",
      food_drug_form19AA_addl_three_ii: "",
      food_drug_form19AA_addl_four: "",
      food_drug_form19AA_addl_five: "",
      food_drug_form19AA_addl_six: "",
      food_drug_form19AA_addl_statement: "",
      food_drug_form19AA_addl_statement_i: null,
      food_drug_form19AA_addl_statement_ii: "",
      food_drug_form19AA_addl_statement_iii: "",
      food_drug_form19AA_addl_statement_iv: "",
     
    });
    onMounted(() => {});
    return {
      formData,
      maxDate: () => date.formatDate(Date.now(), "YYYY-MM-DD"),
    };
  },
};
</script>
