<template>
  <div class="zcard row items-center q-col-gutter-md">
    <div class="col-12">
      <label class="zlabel" for="name"
        >1. Date And Time Of Accident <span class="asterisk"> *</span></label
      >

      <div class="row justify q-col-gutter-md q-ml-md">
        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name">
            A) Date Of Accident
            <span class="asterisk"> *</span></label
          >
          <q-input
            type="date"
            dense
            outlined
            v-model="formData.pollution_accident_medical_one_a"
              :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
          />
        </div>
        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name">B) Time Of Accident</label>
          <q-input
            dense
            outlined
            v-model="formData.pollution_accident_medical_one_b"
              :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
          />
        </div>
      </div>
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="name">
        2. Type Of Accident
        <span class="asterisk"> *</span></label
      >
      <q-input
        dense
        outlined
        v-model="formData.pollution_accident_medical_two"
          :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
      />
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="name">
        3. Sequence Of Events Leading To Accident
        <span class="asterisk"> *</span></label
      >
      <q-input
        dense
        outlined
        v-model="formData.pollution_accident_medical_three"
          :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
      />
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="name">
        4. Has The Authority Been Informed Immediately
        <span class="asterisk"> *</span></label
      >
      <q-input
        dense
        outlined
        v-model="formData.pollution_accident_medical_four"
                :rules="[(val) => (val && val.length > 0) || 'Please type something']"

      />
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="name">
        5. The Type Of Waste Involved In Accident
        <span class="asterisk"> *</span></label
      >
      <q-input
        dense
        outlined
        v-model="formData.pollution_accident_medical_five"
          :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
      />
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="name">
        6. Assessment Of The Effects Of The Accidents On Human Health And The
        Environment
        <span class="asterisk"> *</span></label
      >
      <q-input
        dense
        outlined
        v-model="formData.pollution_accident_medical_six"
                :rules="[(val) => (val && val.length > 0) || 'Please type something']"

      />
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="name">
        7. Emergency Measures Taken
        <span class="asterisk"> *</span></label
      >
      <q-input
        dense
        outlined
        v-model="formData.pollution_accident_medical_seven"
          :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
      />
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="name">
        8. Steps Taken To Alleviate The Effects Of Accidents
        <span class="asterisk"> *</span></label
      >
      <q-input
        dense
        outlined
        v-model="formData.pollution_accident_medical_eight"
                :rules="[(val) => (val && val.length > 0) || 'Please type something']"

      />
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="name">
        9. Steps taken to prevent the recurrence of such an accident
        <span class="asterisk"> *</span></label
      >
      <q-input
        dense
        outlined
        v-model="formData.pollution_accident_medical_nine"
                :rules="[(val) => (val && val.length > 0) || 'Please type something']"

      />
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="name">
        10. Does Your Facility Have An Emergency Control Policy? If Yes Give
        Details
       </label
      >
      <q-input
        dense
        outlined
        v-model="formData.pollution_accident_medical_ten"
        
      />
    </div>

    <q-space />

    <div class="col-lg-4 col-sm-6">
      <div class="row justify-end q-col-gutter-md">
        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name"> Signature of The Applicant </label>
          <q-file
            v-model="formData.pollution_accident_hazardous_signature"
            outlined
          >
            <template v-slot:prepend>
              <q-icon name="attach_file" />
            </template>
          </q-file>
        </div>
        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name"> Designation </label>
          <q-input
            v-model="formData.pollution_accident_medical_designation"
            dense
            outlined
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
import { onMounted,watch } from "vue";
import { date } from "quasar";

export default {
  setup(props, context) {
    const store = useStore();

    const formData = reactive({
      application_code: "POLLUTION_ACCIDENT_HAZARDOUS",
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
      pollution_accident_hazardous_signature: null,
      pollution_accident_medical_designation: "",
    });
    watch(store.state.globalData.common, () => getA());

    const getA = () => {
      const { declaration_designation } = store.state.globalData.common?.selfDeclaration || '';

      formData.pollution_accident_medical_designation = declaration_designation;
    };

    onMounted(async () => getA());
    return {
      formData,
      maxDate: () => date.formatDate(Date.now(), "YYYY-MM-DD"),
    };
  },
};
</script>
