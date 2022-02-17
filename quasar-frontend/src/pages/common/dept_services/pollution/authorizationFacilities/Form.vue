<template>
  <div class="zcard row items-center q-col-gutter-md">
    <!-- <div class="col-12">
      <label for="" class="zlabel">1. </label>
      <div class="row justify q-col-gutter-md q-ml-md">
      

       
      </div>
    </div> -->

    <div class="col-12">
      <label for="" class="zlabel">1. :</label>
      <div class="row justify q-col-gutter-md q-ml-md">
        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="gender">
            (i) Name Of The Unit<span class="asterisk">*</span></label
          >
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            v-model="formData.pollution_authorization_facilities_one_i"
            dense
            outlined
          />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="gender">
            (ii) Address Of The Unit<span class="asterisk">*</span></label
          >
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            v-model="formData.pollution_authorization_facilities_one_ii"
            dense
            outlined
          />
        </div>
      </div>
    </div>

    <div class="col-12">
      <label for="" class="zlabel"
        >2. Contact Person With Designation, Tel./Fax :</label
      >
      <div class="row justify q-col-gutter-md q-ml-md">
        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="gender">
            (i) Contact Person Name<span class="asterisk">*</span></label
          >
          <q-input
          lazy-rules
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            v-model="formData.pollution_authorization_facilities_two_i"
            dense
            outlined
          />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="gender">
            (ii) Designation<span class="asterisk">*</span></label
          >
          <q-input
          lazy-rules
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            v-model="formData.pollution_authorization_facilities_two_ii"
            dense
            outlined
          />
        </div>
      </div>
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="gender">
        3. Date Of Commissioning

        <span class="asterisk">*</span></label
      >
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.pollution_authorization_facilities_three"
        dense
        outlined
      />
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="gender">
        4. No Of Workers (including Contract Labour)

        <span class="asterisk">*</span></label
      >
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.pollution_authorization_facilities_four"
        dense
        outlined
      />
    </div>

    <div class="col-12">
      <label for="" class="zlabel">5. Consents Validity :</label>
      <div class="row justify q-col-gutter-md q-ml-md">
        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="gender">
            (i) Water (Prevention And Control Of Pollution) Act, 1974; Valid Up
            To<span class="asterisk">*</span></label
          >
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            v-model="formData.pollution_authorization_facilities_five_i"
            dense
            outlined
          />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="gender">
            (ii) Air (Prevention And Control Of Pollution) Act, 1981;Valid Up
            To<span class="asterisk">*</span></label
          >
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            v-model="formData.pollution_authorization_facilities_five_ii"
            dense
            outlined
          />
        </div>
      </div>
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="gender">
        6. Validity Of Current Authorisation If Any

        <span class="asterisk">*</span></label
      >
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.pollution_authorization_facilities_six"
        dense
        outlined
      />
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="gender">
        7. Dismantling Or Recycling Process , Please Attach Complete Details

        <span class="asterisk">*</span></label
      >
      <q-file
        v-model="formData.pollution_authorization_facilities_seven_file"
        outlined
      >
        <template v-slot:prepend>
          <q-icon name="attach_file" />
        </template>
      </q-file>
    </div>

    <div class="col-12">
      <label for="" class="zlabel">8. Installed Capacity In MT/year :</label>
      <div class="row justify q-col-gutter-md q-ml-md">
        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="gender">
            (i) Products<span class="asterisk">*</span></label
          >
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            v-model="formData.pollution_authorization_facilities_eight_i"
            dense
            outlined
          />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="gender">
            (ii) Installed Capacity (MTA)<span class="asterisk">*</span></label
          >
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            v-model="formData.pollution_authorization_facilities_eight_ii"
            dense
            outlined
          />
        </div>
      </div>
    </div>

    <div class="col-12">
      <label for="" class="zlabel"
        >9. E-waste Processed During Last Three Years :</label
      >
      <div class="row justify q-col-gutter-md q-ml-md">
        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="gender">
            (i) Year<span class="asterisk">*</span></label
          >
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            v-model="formData.pollution_authorization_facilities_nine_i"
            dense
            outlined
          />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="gender">
            (ii) Product<span class="asterisk">*</span></label
          >
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            v-model="formData.pollution_authorization_facilities_nine_ii"
            dense
            outlined
          />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="gender">
            (iii) Quantity<span class="asterisk">*</span></label
          >
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            v-model="formData.pollution_authorization_facilities_nine_iii"
            dense
            outlined
          />
        </div>
      </div>
    </div>

    <div class="col-12">
      <label for="" class="zlabel">10. Waste Management :</label>
      <div class="row justify q-col-gutter-md q-ml-md">
        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="gender">
            (i) Waste Generation In Processing E-waste<span class="asterisk"
              >*</span
            ></label
          >
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            v-model="formData.pollution_authorization_facilities_ten_i"
            dense
            outlined
          />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="gender">
            (ii) Provide Details Of Disposal Of Residue<span class="asterisk"
              >*</span
            ></label
          >
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            v-model="formData.pollution_authorization_facilities_ten_ii"
            dense
            outlined
          />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="gender">
            (iii) Name Of Treatment Storage And Disposal Facility Utilized
            For<span class="asterisk">*</span></label
          >
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            v-model="formData.pollution_authorization_facilities_ten_iii"
            dense
            outlined
          />
        </div>
      </div>
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="gender">
        11. Details Of E-waste Proposed To Be Procured From Re-processing

        <span class="asterisk">*</span></label
      >
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.pollution_authorization_facilities_eleven"
        dense
        outlined
      />
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="gender">
        12. Details Of E-waste Proposed To Be Procured From Re-processing

        <span class="asterisk">*</span></label
      >
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.pollution_authorization_facilities_twelve"
        dense
        outlined
      />
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="gender">
        13. Details Of Facilities For Dismantling Both Manual As Well As
        Mechanised

        <span class="asterisk">*</span></label
      >
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.pollution_authorization_facilities_thirteen"
        dense
        outlined
      />
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="gender">
        14. Upload Of Agreement With Collection Centre
        <span class="asterisk">*</span></label
      >

      <q-file
        v-model="formData.pollution_authorization_facilities_fourteen_file"
        outlined
      >
        <template v-slot:prepend>
          <q-icon name="attach_file" />
        </template>
      </q-file>
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="gender">
        15. Upload Agreement With Producer
        <span class="asterisk">*</span></label
      >
      <q-file
        v-model="formData.pollution_authorization_facilities_fifteen_file"
        outlined
      >
        <template v-slot:prepend>
          <q-icon name="attach_file" />
        </template>
      </q-file>
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="gender">
        16. Details Of Storage For Dismantled E-waste
        <span class="asterisk">*</span></label
      >
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.pollution_authorization_facilities_sixteen"
        dense
        outlined
      />
    </div>
    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="gender">
        17. Upload Of Agreement With Recycler
        <span class="asterisk">*</span></label
      >
      <q-file
        v-model="formData.pollution_authorization_facilities_seventeen_file"
        outlined
      >
        <template v-slot:prepend>
          <q-icon name="attach_file" />
        </template>
      </q-file>
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="gender">
        18. Details Of Facilities For Recycling
        <span class="asterisk">*</span></label
      >
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.pollution_authorization_facilities_eighteen"
        dense
        outlined
      />
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="gender">
        19. Upload Of Agreement With Collection Centre
        <span class="asterisk">*</span></label
      >
      <q-file
        v-model="formData.pollution_authorization_facilities_nineteen_file"
        outlined
      >
        <template v-slot:prepend>
          <q-icon name="attach_file" />
        </template>
      </q-file>
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="gender">
        20. Upload Agreement With Producer
        <span class="asterisk">*</span></label
      >
      <q-file
        v-model="formData.pollution_authorization_facilities_twenty_file"
        outlined
      >
        <template v-slot:prepend>
          <q-icon name="attach_file" />
        </template>
      </q-file>
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="gender">
        21. Details Of Storage For Raw Materials And Recovered Materials
        <span class="asterisk">*</span></label
      >
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.pollution_authorization_facilities_twentyone"
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

      <q-file
        v-model="
          formData.population_authorization_facilities_signature_designation
        "
        outlined
      >
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
import { onMounted, watch } from "vue";
import { date } from "quasar";
import { ref } from "vue";

export default {
  setup(props, context) {
    const store = useStore();

    const formData = reactive({
      application_code: "POLLUTION_AUTHORIZATION_FACILITIES",
      department_id: 10,
      pollution_authorization_facilities_one_i: "",
      pollution_authorization_facilities_one_ii: "",
      pollution_authorization_facilities_two_i: "",
      pollution_authorization_facilities_two_ii: "",
      pollution_authorization_facilities_three: "",
      pollution_authorization_facilities_four: "",
      pollution_authorization_facilities_five_i: "",
      pollution_authorization_facilities_five_ii: "",
      pollution_authorization_facilities_six: "",
      pollution_authorization_facilities_seven_file: "",
      pollution_authorization_facilities_eight_i: "",
      pollution_authorization_facilities_eight_ii: "",
      pollution_authorization_facilities_nine_i: "",
      pollution_authorization_facilities_nine_ii: "",
      pollution_authorization_facilities_nine_iii: "",
      pollution_authorization_facilities_ten_i: "",
      pollution_authorization_facilities_ten_ii: "",
      pollution_authorization_facilities_ten_iii: "",
      pollution_authorization_facilities_eleven: "",
      pollution_authorization_facilities_twelve: "",
      pollution_authorization_facilities_thirteen: "",
      pollution_authorization_facilities_fourteen_file: "",
      pollution_authorization_facilities_fifteen_file: "",
      pollution_authorization_facilities_sixteen: "",
      pollution_authorization_facilities_seventeen_file: "",
      pollution_authorization_facilities_eighteen: "",
      pollution_authorization_facilities_nineteen_file: "",
      pollution_authorization_facilities_twenty_file: "",
      pollution_authorization_facilities_twentyone: "",

      population_authorization_facilities_signature_designation: null,
    });
    watch(store.state.globalData.common, () => getA());

    const getA = () => {
      const { applicant_name, phone_no, fax_no, email } =
        store.state.globalData.common.partA || "";
      const { declaration_designation } =
        store.state.globalData.common.selfDeclaration || "";

      formData.pollution_authorization_facilities_two_i = applicant_name;
      formData.pollution_authorization_facilities_two_ii = declaration_designation;
    };

    onMounted(async () => getA());

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
