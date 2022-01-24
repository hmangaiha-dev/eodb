<template>
  <div class="zcard row items-center q-col-gutter-md">
    <!-- <div class="col-12">
      <label for="" class="zlabel">1. </label>
      <div class="row justify q-col-gutter-md q-ml-md">
      

       
      </div>
    </div> -->
    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="gender">
    1. Name of the concern seeking the licence.<span
          class="asterisk"
          >*</span
        ></label
      >
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.legal_licence_repair_one"
        dense
        outlined
      />
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="gender">
      2. Complete address of the workshop.
        <span class="asterisk">*</span></label
      >
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.legal_licence_repair_two"
        dense
        outlined
      />
    </div>


     <div class="col-12">
      <label for="" class="zlabel"
        >3.
        :</label
      >
      <div class="row justify q-col-gutter-md q-ml-md">
        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="gender">
            (a) Whether premises are owned/rented/taken. on lease dully supported by documents.<span class="asterisk">*</span></label
          >
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            v-model="formData.legal_licence_repair_three_a"
            dense
            outlined
          />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="gender">
            (b) Date of establishment.<span class="asterisk">*</span></label
          >
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            v-model="formData.legal_licence_repair_three_b"
            dense
            outlined
          />
        </div>
     
      </div>
    </div>


    <div class="col-12">
      <div class="col-md-6 col-xs-10">
        <label class="zlabel" for="gender">
         4. Name (s) and address (s) along with their father's/ husband's name of proprietor (s) and/or Partners and
Managing Director (s) in the case of Limited company.<span class="asterisk">*</span></label
        >
        <q-input
          :rules="[(val) => (val && val.length > 0) || 'Please type something']"
          v-model="formData.legal_licence_repair_four"
          dense
          outlined
        />
      </div>

      <div class="col-md-6 col-xs-10">
        <label class="zlabel" for="gender">
        5. Number and date of shop/establishment/current 
Municipal Trade Licence.
          <span class="asterisk">*</span></label
        >
        <q-input
          :rules="[(val) => (val && val.length > 0) || 'Please type something']"
          v-model="formData.legal_licence_repair_five"
          dense
          outlined
        />
      </div>

      <div class="col-md-6 col-xs-10">
        <label class="zlabel" for="gender">
     6. Professional Tax/IT Tax registration Number etc if any.</label
        >
        <q-input
          v-model="formData.legal_licence_repair_six"
          dense
          outlined
        />
      </div>
    </div>

   

   

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="gender">
       7. The type of weights and measures proposed to repaired.
        <span class="asterisk">*</span></label
      >
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.legal_licence_repair_seven"
        dense
        outlined
      />
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="gender"
        >8. Area in which you wish to operate<span class="asterisk"
          >*</span
        ></label
      >
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.legal_licence_repair_eight"
        dense
        outlined
      />
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="gender"
        >9. Previous experience in the line. <span class="asterisk">*</span></label
      >
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.legal_licence_repair_nine"
        dense
        outlined
      />
    </div>

     <div class="col-12">
      <label for="" class="zlabel"
        >10. Number of skilled staff employed or proposed to be employed:
        :</label
      >
      <div class="row justify q-col-gutter-md q-ml-md">
        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="gender">
            (i) Skilled<span class="asterisk">*</span></label
          >
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            v-model="formData.legal_licence_repair_ten_1"
            dense
            outlined
          />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="gender">
           (ii) Semi-skilled<span class="asterisk">*</span></label
          >
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            v-model="formData.legal_licence_repair_ten_2"
            dense
            outlined
          />
        </div>
        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="gender">
            (iii) Unskilled<span class="asterisk">*</span></label
          >
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            v-model="formData.legal_licence_repair_ten_3"
            dense
            outlined
          />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="gender">
            (iv) Employees trained in the line<span
              class="asterisk"
              >*</span
            ></label
          >
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            v-model="formData.legal_licence_repair_ten_4"
            dense
            outlined
          />
        </div>
      </div>
    </div>
     <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="gender"
        >11. Details of machinery/tools/accessories available.<span class="asterisk">*</span></label
      >
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.legal_licence_repair_eleven"
        dense
        outlined
      />
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="gender"
        >12. Availability of electric energy. <span class="asterisk">*</span></label
      >
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.legal_licence_repair_twelve"
        dense
        outlined
      />
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="gender"
        >13. Have you sufficient stock of loan/test weights. etc.? Give details
        <span class="asterisk">*</span></label
      >
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.legal_licence_repair_thirteen"
        dense
        outlined
      />
    </div>
    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="gender"
        >14. Have you applied previously for a repairer's licence?
If so, When and with what results?<span class="asterisk">*</span></label
      >
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.legal_licence_repair_fourteen"
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

      <q-file v-model="formData.legal_licence_repair_signature_designation" outlined>
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
      application_code: "LEGAL_LICENCE_REPAIR",
      department_id: 10,
      legal_licence_repair_one:'',
      legal_licence_repair_two:'',
      legal_licence_repair_three_a:'',
      legal_licence_repair_three_b:'',
      legal_licence_repair_four:'',
      legal_licence_repair_five:'',
      legal_licence_repair_six:'',
      legal_licence_repair_seven:'',
      legal_licence_repair_eight:'',
      legal_licence_repair_nine:'',
      legal_licence_repair_ten_1:'',
      legal_licence_repair_ten_2:'',
      legal_licence_repair_ten_3:'',
      legal_licence_repair_ten_4:'',

      legal_licence_repair_eleven:'',
      legal_licence_repair_twelve:'',
      legal_licence_repair_thirteen:'',
      legal_licence_repair_fourteen:'',


      legal_licence_repair_signature_designation: null,
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
