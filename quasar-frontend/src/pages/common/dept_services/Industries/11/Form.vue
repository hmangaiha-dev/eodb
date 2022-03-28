<template>
  <div class="zcard row items-center q-col-gutter-md">
    <!-- <div class="col-12">
      <label for="" class="zlabel">1. </label>
      <div class="row justify q-col-gutter-md q-ml-md">
      

       
      </div>
    </div> -->
    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="gender">
        1. Name and Address of Industrial unit <span
          class="asterisk"
          >*</span
        ></label
      >
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.ce_grant_of_subsidy_one"
        dense
        outlined
      />
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="gender">
        2. Detail address stating Plot no./Land No. 
        <span class="asterisk">*</span></label
      >
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.ce_grant_of_subsidy_two"
        dense
        outlined
      />
    </div>
    <div class="col-lg-6 col-sm-10 col-xs-12">
      <label class="zlabel" for="gender"
        >3. Registration No. 
        <span class="asterisk">*</span></label
      >
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.ce_grant_of_subsidy_three"
        dense
        outlined
      />
    </div>

    <div class="col-12">
      <div class="col-md-6 col-xs-10">
        <label class="zlabel" for="gender">
         4. Total space area of land alloted with order No. & date <span class="asterisk">*</span></label
        >
        <q-input
          :rules="[(val) => (val && val.length > 0) || 'Please type something']"
          v-model="formData.ce_grant_of_subsidy_four"
          dense
          outlined
        />
      </div>

<div class="col-12">
      <label for="" class="zlabel"
        >5.
        :</label
      >
      <div class="row justify q-col-gutter-md q-ml-md">
        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="gender">
            a) Total value of lease charge of the land <span class="asterisk">*</span></label
          >
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            v-model="formData.ce_grant_of_subsidy_five_a"
            dense
            outlined
          />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="gender">
           b) Total cost of development of land<span class="asterisk">*</span></label
          >
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            v-model="formData.ce_grant_of_subsidy_five_b"
            dense
            outlined
          />
        </div>
    
      </div>
    </div>



      <div class="col-md-6 col-xs-10">
        <label class="zlabel" for="gender">
          6. Name of agency executing development of land
          <span class="asterisk">*</span></label
        >
        <q-input
          :rules="[(val) => (val && val.length > 0) || 'Please type something']"
          v-model="formData.ce_grant_of_subsidy_six"
          dense
          outlined
        />
      </div>

      <div class="col-md-6 col-xs-10">
        <label class="zlabel" for="gender">
          7. Amount already paid(to be supported by APR). </label
        >
        <q-input
          v-model="formData.ce_grant_of_subsidy_seven"
          dense
          outlined
        />
      </div>
    </div>

   
    

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="gender">
        8. Subsidy already received 
        <span class="asterisk">*</span></label
      >
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.ce_grant_of_subsidy_eight"
        dense
        outlined
      />
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="gender"
        >9. Present claim amount <span class="asterisk"
          >*</span
        ></label
      >
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.ce_grant_of_subsidy_nine"
        dense
        outlined
      />
    </div>

<div class="col-12">
      <label for="" class="zlabel"
        >10.
        :</label
      >
      <div class="row justify q-col-gutter-md q-ml-md">
        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="gender">
            (a) Technical  <span class="asterisk">*</span></label
          >
          <q-input
         
            v-model="formData.ce_grant_of_subsidy_ten_a"
            dense
            outlined
          />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="gender">
          (b) Non- Technical <span class="asterisk">*</span></label
          >
          <q-input
        
            v-model="formData.ce_grant_of_subsidy_ten_b"
            dense
            outlined
          />
        </div>
    
      </div>
    </div>



    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="gender"
        >11. Item of production <span class="asterisk">*</span></label
      >
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.ce_grant_of_subsidy_eleven"
        dense
        outlined
      />
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="gender"
        >12. Value of production during the last 1 year<span class="asterisk">*</span></label
      >
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.ce_grant_of_subsidy_twelve"
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

      <q-file v-model="formData.ce_grant_of_subsidy_signature_designation" outlined>
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
      application_code: "CE_GRANT_OF_SUBSIDY",
      department_id: 1,
      ce_grant_of_subsidy_one: "",
      ce_grant_of_subsidy_two: "",
      ce_grant_of_subsidy_three: "",
      ce_grant_of_subsidy_four: "",
      ce_grant_of_subsidy_five_a: "",
      ce_grant_of_subsidy_five_b: "",
      ce_grant_of_subsidy_six: "",
      ce_grant_of_subsidy_seven: "",
      ce_grant_of_subsidy_eight: "",
      ce_grant_of_subsidy_nine: "",
      ce_grant_of_subsidy_ten_a: "",
      ce_grant_of_subsidy_ten_b: "",
      ce_grant_of_subsidy_eleven: "",
      ce_grant_of_subsidy_twelve: "",
      ce_grant_of_subsidy_signature_designation: null,
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
