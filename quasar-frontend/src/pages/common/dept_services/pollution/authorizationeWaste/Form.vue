<template>
  <div class="zcard row items-center q-col-gutter-md">
    <!-- <div class="col-12">
      <label for="" class="zlabel">1. </label>
      <div class="row justify q-col-gutter-md q-ml-md">
      

       
      </div>
    </div> -->
    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="gender">
        1. Name and full address: <span
          class="asterisk"
          >*</span
        ></label
      >
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.pollution_authorization_ewaste_one"
        dense
        outlined
      />
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="gender">
       2. Contact Person with designation and contact details such as telephone Nos, Fax. No. and E-mail:
        <span class="asterisk">*</span></label
      >
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.pollution_authorization_ewaste_two"
        dense
        outlined
      />
    </div>
   
    <div class="col-12">
      <label for="" class="zlabel"
        >3. Authorisation required for (Please tick mark appropriate activity/ies*) 
        :</label
      >
      <div class="row justify q-col-gutter-md q-ml-md">
        <div class="col-md-6 col-xs-10">
          <!-- <label class="zlabel" for="gender">
            (i) Generation during manufacturing or refurbishing*<span class="asterisk">*</span></label
          > -->

           <div class="q-gutter-sm">
                 <q-checkbox  :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]" v-model="formData.pollution_authorization_ewaste_three_i" label="(i) Generation during manufacturing or refurbishing*" />
           </div>
         


          <div class="q-gutter-sm">
                 <q-checkbox  :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]" v-model="formData.pollution_authorization_ewaste_three_ii" label="(ii) Treatment, if any" />
           </div>


          <div class="q-gutter-sm">
                 <q-checkbox  :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]" v-model="formData.pollution_authorization_ewaste_three_iii" label="(iii) Collection, Transportation, Storage " />
           </div>
 <div class="q-gutter-sm">
                 <q-checkbox  :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]" v-model="formData.pollution_authorization_ewaste_three_iv" label="(iv) Refurbishing " />
           </div>
         

         </div>
          <!-- <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            v-model="formData.legal_type_weight"
            dense
            outlined
          />
        </div> -->

        <!-- <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="gender">
            (ii) Treatment, if any <span class="asterisk">*</span></label
          >
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            v-model="formData.legal_type_measures"
            dense
            outlined
          />
        </div>
        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="gender">
            (iii) Collection, Transportation, Storage <span class="asterisk">*</span></label
          >
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            v-model="formData.legal_type_weighing_instrument"
            dense
            outlined
          />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="gender">
            (iv) Refurbishing <span
              class="asterisk"
              >*</span
            ></label
          >
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            v-model="formData.legal_type_measuring_instrument"
            dense
            outlined
          />
        </div> -->
      </div>
    </div>



     <div class="col-12">
      <label for="" class="zlabel"
        >4. E-waste details: 
        :</label
      >
      <div class="row justify q-col-gutter-md q-ml-md">
        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="gender">
            (a) Total quantity e-waste generated in MT/A <span class="asterisk">*</span></label
          >
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            v-model="formData.pollution_authorization_ewaste_four_a"
            dense
            outlined
          />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="gender">
            (b) Quantity refurbished (applicable to refurbisher) <span class="asterisk">*</span></label
          >
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            v-model="formData.pollution_authorization_ewaste_four_b"
            dense
            outlined
          />
        </div>
        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="gender">
          (c) Quantity sent for recycling <span class="asterisk">*</span></label
          >
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            v-model="formData.pollution_authorization_ewaste_four_c"
            dense
            outlined
          />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="gender">
           (d) Quantity sent for disposal <span
              class="asterisk"
              >*</span
            ></label
          >
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            v-model="formData.pollution_authorization_ewaste_four_d"
            dense
            outlined
          />
        </div>
      </div>
    </div>


    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="gender">
       5. Details of Facilities for storage/handling/treatment/refurbishing: 
        <span class="asterisk">*</span></label
      >
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.pollution_authorization_ewaste_five"
        dense
        outlined
      />
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="gender"
        >6. In case of renewal of authorisation previous authorisation no. and date and details of annual returns:<span class="asterisk"
          >*</span
        ></label
      >
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.pollution_authorization_ewaste_six"
        dense
        outlined
      />
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

      <q-file v-model="formData.pollution_authorization_ewaste_signature_designation" outlined>
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
import { onMounted } from "vue";
import { date } from "quasar";
import { ref } from "vue";

export default {
  setup(props, context) {
    const store = useStore();

    const formData = reactive({
      application_code: "POLLUTION_AUTHORIZATION_EWASTE",
      department_id: 11,
      pollution_authorization_ewaste_one: "",
      pollution_authorization_ewaste_two: "",
      pollution_authorization_ewaste_three: "",
      pollution_authorization_ewaste_three_i: false,
      pollution_authorization_ewaste_three_ii: false,
      pollution_authorization_ewaste_three_iii: false,
      pollution_authorization_ewaste_three_iv: false,

      pollution_authorization_ewaste_four: "",
      pollution_authorization_ewaste_four_a: "",
      pollution_authorization_ewaste_four_b: "",
      pollution_authorization_ewaste_four_c: "",
      pollution_authorization_ewaste_four_d: "",

      pollution_authorization_ewaste_five: "",
      pollution_authorization_ewaste_six: "",

      pollution_authorization_ewaste_signature_designation: null,
    });
    onMounted(() => {});
    return {
      group: ref([]),

      formData,
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
