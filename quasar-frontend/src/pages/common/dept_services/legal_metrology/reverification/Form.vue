<template>
  <div class="zcard row items-center q-col-gutter-md">
    <!-- <div class="col-12">
      <label for="" class="zlabel">1. </label>
      <div class="row justify q-col-gutter-md q-ml-md">
      

       
      </div>
    </div> -->
    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="gender">
        Name of Legal Metrology Officer<span
          class="asterisk"
          >*</span
        ></label
      >
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.legal_reverifcation_officer_name"
        dense
        outlined
      />
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="gender">
        No
        <span class="asterisk">*</span></label
      >
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.legal_reverification_no"
        dense
        outlined
      />
    </div>
    <div class="col-lg-6 col-sm-10 col-xs-12">
      <label class="zlabel" for="gender"
        >Belongs to
        <span class="asterisk">*</span></label
      >
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.legal_reverification_belongs_to"
        dense
        outlined
      />
    </div>

    <div class="col-12">
      <div class="col-md-6 col-xs-10">
        <label class="zlabel" for="gender">
         Locality<span class="asterisk">*</span></label
        >
        <q-input
          :rules="[(val) => (val && val.length > 0) || 'Please type something']"
          v-model="formData.legal_reverification_locality"
          dense
          outlined
        />
      </div>
      </div>


       <div class="col-12">
      <label for="" class="zlabel"
        >1.Quantity
        :</label
      >
      <div class="row justify q-col-gutter-md q-ml-md">
        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="gender">
            Quantity<span class="asterisk">*</span></label
          >
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            v-model="formData.legal_reverification_one"
            dense
            outlined
          />
        </div>
       
    </div>


  

 <div class="col-12">
      <label for="" class="zlabel"
        >2.Denomination
        :</label
      >
      <div class="row justify q-col-gutter-md q-ml-md">
        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="gender">
            i.Weights<span class="asterisk">*</span></label
          >
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            v-model="formData.legal_reverification_two_a"
            dense
            outlined
          />
        </div>
        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="gender">
            ii.Measures<span class="asterisk">*</span></label
          >
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            v-model="formData.legal_reverification_two_b"
            dense
            outlined
          />
        </div>
       
    </div>
    </div>



 <div class="col-12">
      <label for="" class="zlabel"
        >3.Weighing instruments
        :</label
      >
      <div class="row justify q-col-gutter-md q-ml-md">
        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="gender">
            i.Capacity<span class="asterisk">*</span></label
          >
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            v-model="formData.legal_reverification_three_a"
            dense
            outlined
          />
        </div>
        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="gender">
            ii.Class<span class="asterisk">*</span></label
          >
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            v-model="formData.legal_reverification_three_b"
            dense
            outlined
          />
        </div>
         <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="gender">
            iii.Manufacturer<span class="asterisk">*</span></label
          >
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            v-model="formData.legal_reverification_three_c"
            dense
            outlined
          />
        </div>
         <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="gender">
            iv. Type<span class="asterisk">*</span></label
          >
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            v-model="formData.legal_reverification_three_d"
            dense
            outlined
          />
        </div>
       
    </div>
    </div>




      <div class="col-md-6 col-xs-10">
        <label class="zlabel" for="gender">
         4.Measuring Instruments
          <span class="asterisk">*</span></label
        >
        <q-input
          :rules="[(val) => (val && val.length > 0) || 'Please type something']"
          v-model="formData.legal_reverification_four"
          dense
          outlined
        />
      </div>

      <div class="col-md-6 col-xs-10">
        <label class="zlabel" for="gender">
          5. reverification fee</label
        >
        <q-input
          v-model="formData.legal_reverification_five"
          dense
          outlined
        />
      </div>
       <div class="col-md-6 col-xs-10">
        <label class="zlabel" for="gender">
          6.Carriage,conveyance adjusting charges etc.</label
        >
        <q-input
          v-model="formData.legal_reverification_six"
          dense
          outlined
        />
      </div>
    </div>

    <div class="col-12">
      <label for="" class="zlabel"
        >Total amount (Rs.) deposited
        :</label
      >
      <div class="row justify q-col-gutter-md q-ml-md">
        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="gender">
            Total amount (Rs.) deposited<span class="asterisk">*</span></label
          >
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            v-model="formData.legal_reverification_deposited_amount"
            dense
            outlined
          />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="gender">
            T. Receipt/ Money receipt .No<span class="asterisk">*</span></label
          >
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            v-model="formData.legal_reverification_deposited_amount"
            dense
            outlined
          />
        </div>
        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="gender">
            Dated<span class="asterisk">*</span></label
          >
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            v-model="formData.legal_reverification_deposted_date"
            dense
            outlined
          />
        </div>

       
      </div>
    </div>

    <div class="col-12 zlabel">
      I hereby declare that the particulars given above are true to the best of
      my knowledge and belief.
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="gender">
        Signature
        <span class="asterisk">*</span></label
      >

      <q-file v-model="formData.legal_reverification_signature_designation" outlined>
        <template v-slot:prepend>
          <q-icon name="attach_file" />
        </template>
      </q-file>
    </div>

    <!-- <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="gender">
        Date of receipt of application: <span class="asterisk">*</span>
      </label>
      <q-input
        type="date"
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.labour_emp_contract_date"
        dense
        outlined
      />
    </div> -->

    <div class="col-xs-12" />
  </div>
</template>

<script>
import { reactive } from "@vue/reactivity";
import { useStore } from "vuex";
import { onMounted ,watch} from "vue";
import { date } from "quasar";
import { ref } from "vue";

export default {
  setup(props, context) {
    const store = useStore();

    const formData = reactive({
      application_code: "LEGAL_REVERIFICATION",
      department_id: 10,
      legal_reverifcation_officer_name:'',
      legal_reverification_no:'',
      legal_reverification_belongs_to:'',
      legal_reverification_locality:'',
      legal_reverification_one:'',
      legal_reverification_two:'Denomination',
      legal_reverification_two_a:'',
      legal_reverification_two_b:'',
      legal_reverification_three:'Weighing instruments',
      legal_reverification_three_a:'',
      legal_reverification_three_b:'',
      legal_reverification_three_c:'',
      legal_reverification_three_d:'',
      legal_reverification_four:'',
      legal_reverification_five:'',
      legal_reverification_six:'',

      legal_reverification_deposited_amount:'',
      legal_reverification_deposited_receipt_No:'',
      legal_reverification_deposted_date:'',








      

      legal_reverification_signature_designation: null,
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

      formData.legal_reverification_locality = city_town;


    };



    onMounted(() => {});
    return {
      group: ref([]),

      formData,
      getA,
      maxDate: () => date.formatDate(Date.now(), "YYYY-MM-DD"),
    };
  },
};
</script>

<style>
.option-group > div {
  display: grid;
  grid-template-columns: 2fr 2fr;
}
</style>
