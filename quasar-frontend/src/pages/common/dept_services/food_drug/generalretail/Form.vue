<template>
  <div class="zcard row items-center q-col-gutter-md">
    <div class="col-12">
      <label class="zlabel" for="name">1. </label>

      <div class="row justify q-col-gutter-sm q-ml-md">
        <div class="col-md-6 col-xs-12 col-xs-10">
          <label class="zlabel" for="name">
            1. I/We
            <span class="asterisk"> *</span></label
          >
          <q-input
            dense
            outlined
            v-model="formData.pollution_accident_medical_one_a"
          />
        </div>
        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name"
            >Hereby Apply For License To Sell By</label
          >
          <q-input
            dense
            outlined
            v-model="formData.pollution_accident_medical_one_b"
          />
        </div>

        <div class="col-12 zlabel">
          drugs specified in Schedules C and C(1) excluding those specified in
          Schedule X and/or drugs other than those specified in Schedules C,C(1)
          and X to the Drugs and Cosmetics Rules, 1945 and also to operate a
          pharmacy on the premises situated at
        </div>

        <div class="col-sm-4">
          <q-input
            dense
            outlined
            v-model="formData.pollution_accident_medical_one_b"
          />
        </div>
      </div>
    </div>

    <div class="col-12">
      <label class="zlabel" for="name">
        2. The Sale & Dispensing Of Drugs Will Be Made Under The Personal
        Supervision Of The Qualified Persons Namely:
      </label>

      <div class="row justify q-col-gutter-sm q-ml-md">
        <div class="col-md-6 col-xs-12 col-xs-10">
          <label class="zlabel" for="name">
            I) Name
            <span class="asterisk"> *</span></label
          >
          <q-input
            dense
            outlined
            v-model="formData.pollution_accident_medical_one_a"
          />
        </div>
        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name">II) Qualification</label>
          <q-input
            dense
            outlined
            v-model="formData.pollution_accident_medical_one_b"
          />
        </div>

        <div class="col-12 zlabel">
          drugs specified in Schedules C and C(1) excluding those specified in
          Schedule X and/or drugs other than those specified in Schedules C,C(1)
          and X to the Drugs and Cosmetics Rules, 1945 and also to operate a
          pharmacy on the premises situated at
        </div>
      </div>
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="name">
        3. Categories Of Drugs To Be Sold:
        <span class="asterisk"> *</span></label
      >
      <q-input
        dense
        outlined
        v-model="formData.pollution_accident_medical_two"
      />
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="name">
        4. Particulars For Specified Storage Accommodation:
        <span class="asterisk"> *</span></label
      >
      <q-input
        dense
        outlined
        v-model="formData.pollution_accident_medical_three"
      />
    </div>

    <div class="col-12">
      <label class="zlabel" for="name">
        5. A Fee Rs
        <span>
          <q-input
            style="display: table-cell"
            dense
            outlined
            v-model="formData.pollution_accident_medical_four"
          />
        </span>

        <span>
          has been credited to the Government under the head of account 104 (1).
        </span>
      </label>
      <div class="row justify q-col-gutter-sm q-ml-md">
        <div class="col-md-6 col-xs-12 col-xs-10">
          <label class="zlabel" for="name">
            I) Signature
            <span class="asterisk"> *</span></label
          >
          <q-input
            dense
            outlined
            v-model="formData.pollution_accident_medical_three"
          />
        </div>

        <div class="col-md-6 col-xs-12 col-xs-10">
          <label class="zlabel" for="name">
            II) Name
            <span class="asterisk"> *</span></label
          >
          <q-input
            dense
            outlined
            v-model="formData.pollution_accident_medical_three"
          />
        </div>

        <div class="col-md-6 col-xs-12 col-xs-10">
          <label class="zlabel" for="name">
            III) Full Address
            <span class="asterisk"> *</span></label
          >
          <q-input
            dense
            outlined
            v-model="formData.pollution_accident_medical_three"
          />
        </div>

        <div class="col-md-6 col-xs-12 col-xs-10">
          <label class="zlabel" for="name">
            IV) Phone
            <span class="asterisk"> *</span></label
          >
          <q-input
            dense
            outlined
            v-model="formData.pollution_accident_medical_three"
          />
        </div>
      </div>
    </div>

    <div class="col-12 q-my-md">
      <hr />
    </div>

    <div class="col-12 zlabel text-center">
      ADDITIONAL INFORMATION TO BE FURNISHED BY THE APPLICANT
    </div>

    <div class="col-12">
      <label class="zlabel" for="name">1. </label>

      <div class="row justify q-col-gutter-sm q-ml-md">
        <div class="col-md-6 col-xs-12 col-xs-10">
          <label class="zlabel" for="name">
            I) Hming
            <span class="asterisk"> *</span></label
          >
          <q-input
            dense
            outlined
            v-model="formData.pollution_accident_medical_one_a"
          />
        </div>
        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name">II) Kum</label>
          <q-input
            dense
            outlined
            v-model="formData.pollution_accident_medical_one_b"
          />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name">III) Pa Hming</label>
          <q-input
            dense
            outlined
            v-model="formData.pollution_accident_medical_one_b"
          />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name">III) Address</label>
          <q-input
            dense
            outlined
            v-model="formData.pollution_accident_medical_one_b"
          />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name">IV) Telephone No</label>
          <q-input
            dense
            outlined
            v-model="formData.pollution_accident_medical_one_b"
          />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name">V) Eizawnna</label>
          <q-input
            dense
            outlined
            v-model="formData.pollution_accident_medical_one_b"
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
      application_code: "POLLUTION_ACCIDENT_MEDICAL",
      department_id: 11,
      pollution_accident_medical_one: "",
      pollution_accident_medical_one_a: "",
      pollution_accident_medical_one_b: "",
      pollution_accident_medical_two: "",
      pollution_accident_medical_three: "",
      pollution_accident_medical_four: "",
      pollution_accident_medical_five: "",
      pollution_accident_medical_six: "",
      pollution_accident_medical_seven: "",
      pollution_accident_medical_eight: "",
      pollution_accident_medical_nine: "",
      pollution_accident_medical_ten: "",
      pollution_accident_medical_signature: null,
      pollution_accident_medical_designation: "",
    });
    onMounted(() => {});
    return {
      formData,
      maxDate: () => date.formatDate(Date.now(), "YYYY-MM-DD"),
    };
  },
};
</script>
