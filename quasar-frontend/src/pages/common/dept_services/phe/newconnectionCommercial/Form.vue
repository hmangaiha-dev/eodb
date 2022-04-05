<template>
  <div class="zcard row items-center q-col-gutter-md">
    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="gender"
        >1. Applicant's Name (Diltu hming)*
        <span class="asterisk">*</span></label
      >
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.phe_water_connection_commercial_one"
        dense
        outlined
      />
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="gender">
        2. Occupation (Private)/Designation * <span class="asterisk">*</span></label
      >
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.phe_water_connection_commercial_twelve"
        dense
        outlined
      />
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="gender"
        >3. Father’s Name  <span class="asterisk">*</span></label
      >
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.phe_water_connection_commercial_three"
        dense
        outlined
      />
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="gender"
        >4. Address:  <span class="asterisk">*</span></label
      >
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.phe_water_connection_commercial_four"
        dense
        outlined
      />
    </div>
    <div class="col-12">
      <label for="" class="zlabel">5. Address</label>
      <div class="row justify q-col-gutter-md q-ml-md">
        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="gender">
            A). House No. <span class="asterisk">*</span></label
          >
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            v-model="formData.phe_water_connection_commercial_four_a"
            dense
            outlined
          />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="gender">
            B) Locality (Veng) <span class="asterisk">*</span></label
          >
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            v-model="formData.phe_water_connection_commercial_four_b"
            dense
            outlined
          />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="gender">
            C) Street/lane <span class="asterisk">*</span></label
          >
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            v-model="formData.phe_water_connection_commercial_four_c"
            dense
            outlined
          />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="gender">
            D) City/Town <span class="asterisk">*</span></label
          >
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            v-model="formData.phe_water_connection_commercial_four_d"
            dense
            outlined
          />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="gender">
            E) Landmark <span class="asterisk">*</span></label
          >
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            v-model="formData.phe_water_connection_commercial_four_e"
            dense
            outlined
          />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="gender">
            F) Pin Code <span class="asterisk">*</span></label
          >
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            v-model="formData.phe_water_connection_commercial_four_f"
            dense
            outlined
          />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="gender">
            G) Phone no
            <span class="asterisk">*</span></label
          >
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            v-model="formData.phe_water_connection_commercial_four_g"
            dense
            outlined
          />
        </div>
    

         <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="gender">
            H) e-mail
            <span class="asterisk">*</span></label
          >
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            v-model="formData.phe_water_connection_commercial_four_h"
            dense
            outlined
          />
        </div>
      </div>
    </div>

  <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="gender">
        5.Name of business 
        <span class="asterisk">*</span></label
      >
      <q-input
        v-model="formData.phe_water_connection_commercial_five"
        dense
        outlined
      />
    </div>
    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="gender">
     6. Nature of business
        <span class="asterisk">*</span></label
      >
      <q-input
        v-model="formData.phe_water_connection_commercial_six"
        dense
        outlined
      />
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="gender">
     7. Number of existing connection (s):
        <span class="asterisk">*</span></label
      >
      <q-input
        v-model="formData.phe_water_connection_commercial_seven"
        dense
        outlined
      />
    </div>
     <div class="col-12">
      <label for="" class="zlabel">8.</label>
      <div class="row justify q-col-gutter-md q-ml-md">



    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="gender">
     a) Residential (No. of family):
        <span class="asterisk">*</span></label
      >
      <q-input
        v-model="formData.phe_water_connection_commercial_eight_a"
        dense
        outlined
      />
    </div>


    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="gender">
       b) Others (No.of person): 
        <span class="asterisk">*</span></label
      >
      <q-input
        v-model="formData.phe_water_connection_commercial_eight_b"
        dense
        outlined
      />
    </div>
        
      </div>
     </div>
  



    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="gender">
        9. LSC/Land Pass/Relevant document (Attested Photocopy)*:
        <span class="asterisk">*</span></label
      >

      <q-file v-model="formData.phe_water_connection_commercial_nine_doc" outlined>
        <template v-slot:prepend>
          <q-icon name="attach_file" />
        </template>
      </q-file>
    </div>




    <div class="col-12 text-caption">
      I do hereby affirm that the informations furnished above are true and the
      documents attached herewith are genuine.
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="gender">
        15.Signature Of The Applicant
        <span class="asterisk">*</span></label
      >

      <q-file v-model="formData.signature_phe_water_connection_commercial" outlined>
        <template v-slot:prepend>
          <q-icon name="attach_file" />
        </template>
      </q-file>
    </div>


  </div>
</template>

<script>
import { reactive } from "@vue/reactivity";
import { useStore } from "vuex";
import { onMounted,watch } from "vue";
import { date } from "quasar";
import { ref } from "vue";

export default {
  setup(props, context) {
    const store = useStore();

    const formData = reactive({
      application_code: "phe_water_connection_commercial_COMMERCIAL",
      department_id: 13,
      phe_water_connection_commercial_one: "",
      phe_water_connection_commercial_two: "",
      phe_water_connection_commercial_three: "",
      phe_water_connection_commercial_four: "",
      phe_water_connection_commercial_four_a: "",
      phe_water_connection_commercial_four_b: "",
      phe_water_connection_commercial_four_c: "",
      phe_water_connection_commercial_four_d: "",
      phe_water_connection_commercial_four_e: "",
      phe_water_connection_commercial_four_f: "",
      phe_water_connection_commercial_four_g: "",
      phe_water_connection_commercial_four_h: "",

      phe_water_connection_commercial_five: "",

      phe_water_connection_commercial_six: "",
      phe_water_connection_commercial_seven: "",
      phe_water_connection_commercial_eight_a: "",
      phe_water_connection_commercial_eight_b: "",

 
 
      phe_water_connection_commercial_nine_doc:null,
  
      signature_phe_water_connection_commercial: null,
    });

    watch(store.state.globalData.common, () => {
      getA();
      getG();
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

      formData.phe_water_connection_commercial_one = applicant_name  ;
      formData.phe_water_connection_commercial_four_d = city_town ;
      formData.phe_water_connection_commercial_four_f = postal_code ;
      formData.phe_water_connection_commercial_four_g = mobile_no ;

      formData.phe_water_connection_commercial_six = email ;



    };
     const getG = () => {
      const {
        
       electric_regular_consumer_number,
       electric_temporary_existing_connection_file	
      } = store.state.globalData.common.partG;

      formData.power_change_name_two = electric_regular_consumer_number  ;

    };


    onMounted(() => {});
    return {
      group: ref([]),

      formData,
      getA,
      getG,
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
