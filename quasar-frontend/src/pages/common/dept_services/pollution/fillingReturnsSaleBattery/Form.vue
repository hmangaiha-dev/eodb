<template>
  <div class="zcard row items-center q-col-gutter-md">
    <!-- <div class="col-12">
      <label for="" class="zlabel">1. </label>
      <div class="row justify q-col-gutter-md q-ml-md">
      

       
      </div>
    </div> -->
    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="gender">
    1. Name and address of the dealer
       <span
          class="asterisk"
          >*</span
        ></label
      >
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.pollution_return_sale_battery_one"
        dense
        outlined
      />
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="gender">
  2. Name of the authorised person and complete address with telephone and fax numbers
        <span class="asterisk">*</span></label
      >
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.pollution_return_sale_battery_two"
        dense
        outlined
      />
    </div>
   
 

  <div class="col-12">
      <label for="" class="zlabel"
        >3.Number of new batteries sold during the period October-March/April-September in respect of the  following categories :</label
      >
      <br>
        <span>(i) Automative: </span>

      <div class="row justify q-col-gutter-md q-ml-md">
        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="gender">
            (a)Four Wheeler <span class="asterisk">*</span></label
          >

        <div class="row wrap   col-xs-10">

           <q-input class="q-pa-sm" placeholder="No. of batteries"
            :rules="[
              (val) => (val && val.length > 0) || 'No. of batteries',
            ]"
            v-model="formData.pollution_return_sale_battery_three_i_a_i"
            dense
            outlined
          />
           <q-input  class="q-pa-sm" placeholder="Approximate weight in Metric Tones"
            :rules="[
              (val) => (val && val.length > 0) || 'Approximate weight in Metric Tones',
            ]"
            v-model="formData.pollution_return_sale_battery_three_i_a_ii"
            dense
            outlined
          />
          </div>
         
          
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="gender">
            (b) Two Wheeler<span class="asterisk">*</span></label
          >
         
        <div class="row col-xs-10">

           <q-input class="q-pa-sm" placeholder="No. of batteries"
            :rules="[
              (val) => (val && val.length > 0) || 'No. of batteries',
            ]"
            v-model="formData.pollution_return_sale_battery_three_i_b_i"
            dense
            outlined
          />
           <q-input class="q-pa-sm" placeholder="Approximate weight in Metric Tones"
            :rules="[ 
              (val) => (val && val.length > 0) || 'Approximate weight in Metric Tones',
            ]"
            v-model="formData.pollution_return_sale_battery_three_i_b_ii"
            dense
            outlined
          />
          </div>
        </div>
       
      </div>

      <!-- //industrial  -->
       <br>
        <span>(ii) Industrial: </span>

      <div class="row justify q-col-gutter-md q-ml-md">
        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="gender">
            (a)UPS <span class="asterisk">*</span></label
          >

        <div class="row wrap   col-xs-10">

           <q-input class="q-pa-sm" placeholder="No. of batteries"
            :rules="[
              (val) => (val && val.length > 0) || 'No. of batteries',
            ]"
            v-model="formData.pollution_return_sale_battery_three_ii_a_i"
            dense
            outlined
          />
           <q-input  class="q-pa-sm" placeholder="Approximate weight in Metric Tones"
            :rules="[
              (val) => (val && val.length > 0) || 'Approximate weight in Metric Tones',
            ]"
            v-model="formData.pollution_return_sale_battery_three_ii_a_ii"
            dense
            outlined
          />
          </div>
         
          
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="gender">
            (b) Motive power<span class="asterisk">*</span></label
          >
         
        <div class="row col-xs-10">

           <q-input class="q-pa-sm" placeholder="No. of batteries"
            :rules="[
              (val) => (val && val.length > 0) || 'No. of batteries',
            ]"
            v-model="formData.pollution_return_sale_battery_three_ii_b_i"
            dense
            outlined
          />
           <q-input class="q-pa-sm" placeholder="Approximate weight in Metric Tones"
            :rules="[
              (val) => (val && val.length > 0) || 'Approximate weight in Metric Tones',
            ]"
            v-model="formData.pollution_return_sale_battery_three_ii_b_ii"
            dense
            outlined
          />
          </div>
        </div>

   <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="gender">
            (c) Stand-by<span class="asterisk">*</span></label
          >
         
        <div class="row col-xs-10">

           <q-input class="q-pa-sm" placeholder="No. of batteries"
            :rules="[
              (val) => (val && val.length > 0) || 'No. of batteries',
            ]"
            v-model="formData.pollution_return_sale_battery_three_ii_c_i"
            dense
            outlined
          />
           <q-input class="q-pa-sm" placeholder="Approximate weight in Metric Tones"
            :rules="[
              (val) => (val && val.length > 0) || 'Approximate weight in Metric Tones',
            ]"
            v-model="formData.pollution_return_sale_battery_three_ii_c_ii"
            dense
            outlined
          />
          </div>
        </div>

           <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="gender">
            (d) Others(Inverters, etc.)<span class="asterisk">*</span></label
          >
         
        <div class="row col-xs-10">

           <q-input class="q-pa-sm" placeholder="No. of batteries"
            :rules="[
              (val) => (val && val.length > 0) || 'No. of batteries',
            ]"
            v-model="formData.pollution_return_sale_battery_three_ii_d_i"
            dense
            outlined
          />
           <q-input class="q-pa-sm" placeholder="Approximate weight in Metric Tones"
            :rules="[
              (val) => (val && val.length > 0) || 'Approximate weight in Metric Tones',
            ]"
            v-model="formData.pollution_return_sale_battery_three_ii_d_ii"
            dense
            outlined
          />
          </div>
        </div>

       
      </div>


<!-- //Number  of batteries sold to -->
   <br>
        <span>(iii) Number of batteries sold to: </span>

      <div class="row justify q-col-gutter-md q-ml-md">
        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="gender">
            i. As replacement of used batteries  <span class="asterisk">*</span></label
          >

        <div class="row wrap   col-xs-10">

           <q-input class="q-pa-sm" placeholder="No. of batteries"
            :rules="[
              (val) => (val && val.length > 0) || 'No. of batteries',
            ]"
            v-model="formData.pollution_return_sale_battery_three_iii_a_i"
            dense
            outlined
          />
           <q-input  class="q-pa-sm" placeholder="Approximate weight in Metric Tones"
            :rules="[
              (val) => (val && val.length > 0) || 'Approximate weight in Metric Tones',
            ]"
            v-model="formData.pollution_return_sale_battery_three_iii_a_ii"
            dense
            outlined
          />
          </div>
         
          
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="gender">
            ii. To bulk consumers <span class="asterisk">*</span></label
          >
         
        <div class="row col-xs-10">

           <q-input class="q-pa-sm" placeholder="No. of batteries"
            :rules="[
              (val) => (val && val.length > 0) || 'No. of batteries',
            ]"
            v-model="formData.pollution_return_sale_battery_three_iii_b_i"
            dense
            outlined
          />
           <q-input class="q-pa-sm" placeholder="Approximate weight in Metric Tones"
            :rules="[
              (val) => (val && val.length > 0) || 'Approximate weight in Metric Tones',
            ]"
            v-model="formData.pollution_return_sale_battery_three_iii_b_ii"
            dense
            outlined
          />
          </div>
        </div>

   <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="gender">
            iii.To OEM<span class="asterisk">*</span></label
          >
         
        <div class="row col-xs-10">

           <q-input class="q-pa-sm" placeholder="No. of batteries"
            :rules="[
              (val) => (val && val.length > 0) || 'No. of batteries',
            ]"
            v-model="formData.pollution_return_sale_battery_three_iii_c_i"
            dense
            outlined
          />
           <q-input class="q-pa-sm" placeholder="Approximate weight in Metric Tones"
            :rules="[
              (val) => (val && val.length > 0) || 'Approximate weight in Metric Tones',
            ]"
            v-model="formData.pollution_return_sale_battery_three_iii_c_ii"
            dense
            outlined
          />
          </div>
        </div>

           <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="gender">
            iv. To any other party<span class="asterisk">*</span></label
          >
         
        <div class="row col-xs-10">

           <q-input class="q-pa-sm" placeholder="No. of batteries"
            :rules="[
              (val) => (val && val.length > 0) || 'No. of batteries',
            ]"
            v-model="formData.pollution_return_sale_battery_three_iii_d_i"
            dense
            outlined
          />
           <q-input class="q-pa-sm" placeholder="Approximate weight in Metric Tones"
            :rules="[
              (val) => (val && val.length > 0) || 'Approximate weight in Metric Tones',
            ]"
            v-model="formData.pollution_return_sale_battery_three_iii_d_ii"
            dense
            outlined
          />
          </div>
        </div>

       
      </div>



    </div>

  
  

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="gender">
      4. Total number of used batteries of different categories as at Sl. No. 3 collected and sent to registered recyclers * / designated collection centers / manufacturers
        <span class="asterisk">*</span></label
      >
      <p>*enclose the list of recyclers to who batteries have been sent for recycling. </p>
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.pollution_return_sale_battery_four"
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

      <q-file v-model="formData.pollution_return_sale_battery_signature_designation" outlined>
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
      application_code: "POLLUTION_RETURN_SALE_BATTERY",
      department_id: 11,
      pollution_return_sale_battery_one:'',
      pollution_return_sale_battery_two:'',


      pollution_return_sale_battery_three:'',
      pollution_return_sale_battery_three_category:'',

      pollution_return_sale_battery_three_i:'Automative',
      pollution_return_sale_battery_three_i_a_i:'',
      pollution_return_sale_battery_three_i_a_ii:'',
      pollution_return_sale_battery_three_i_b_i:'',
      pollution_return_sale_battery_three_i_b_ii:'',

      pollution_return_sale_battery_three_ii:'Industrial',
      pollution_return_sale_battery_three_ii_a_i:'',
      pollution_return_sale_battery_three_ii_a_ii:'',
      pollution_return_sale_battery_three_ii_b_i:'',
      pollution_return_sale_battery_three_ii_b_ii:'',
      pollution_return_sale_battery_three_ii_c_i:'',
      pollution_return_sale_battery_three_ii_c_ii:'',
      pollution_return_sale_battery_three_ii_d_i:'',
      pollution_return_sale_battery_three_ii_d_ii:'',


       pollution_return_sale_battery_three_iii:'Number of batteries sold to',
      pollution_return_sale_battery_three_iii_a_i:'',
      pollution_return_sale_battery_three_iii_a_ii:'',
      pollution_return_sale_battery_three_iii_b_i:'',
      pollution_return_sale_battery_three_iii_b_ii:'',
      pollution_return_sale_battery_three_iii_c_i:'',
      pollution_return_sale_battery_three_iii_c_ii:'',
      pollution_return_sale_battery_three_iii_d_i:'',
      pollution_return_sale_battery_three_iii_d_ii:'',

     

      

      pollution_return_sale_battery_four:'',

  
 

    

      pollution_return_sale_battery_signature_designation: null,
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
