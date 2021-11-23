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
          <q-input dense outlined v-model="formData.applicant_name" />
        </div>
        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name">B) Time Of Accident</label>
          <q-input dense outlined v-model="formData.applicant_name" />
        </div>
      </div>
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="name">
        2. Type Of Accident
        <span class="asterisk"> *</span></label
      >
      <q-input dense outlined v-model="formData.applicant_name" />
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="name">
        3. Sequence Of Events Leading To Accident
        <span class="asterisk"> *</span></label
      >
      <q-input dense outlined v-model="formData.applicant_name" />
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="name">
        4. Has The Authority Been Informed Immediately
        <span class="asterisk"> *</span></label
      >
      <q-input dense outlined v-model="formData.applicant_name" />
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="name">
        5. The Type Of Waste Involved In Accident
        <span class="asterisk"> *</span></label
      >
      <q-input dense outlined v-model="formData.applicant_name" />
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="name">
        6. Assessment Of The Effects Of The Accidents On Human Health And The
        Environment
        <span class="asterisk"> *</span></label
      >
      <q-input dense outlined v-model="formData.applicant_name" />
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="name">
        7. Emergency Measures Taken
        <span class="asterisk"> *</span></label
      >
      <q-input dense outlined v-model="formData.applicant_name" />
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="name">
        8. Steps Taken To Alleviate The Effects Of Accidents
        <span class="asterisk"> *</span></label
      >
      <q-input dense outlined v-model="formData.applicant_name" />
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="name">
        10. Does Your Facility Have An Emergency Control Policy? If Yes Give
        Details
        <span class="asterisk"> *</span></label
      >
      <q-input dense outlined v-model="formData.applicant_name" />
    </div>

    <div class="col-12 text-center">
      I do hereby affirm that the informations furnished above are true and the
      documents attached herewith are genuine.
    </div>

      <q-space />

    <div class="col-md-6 col-xs-10 ">
      <label class="zlabel" for="name"> Signature Of The Operator </label>
      <q-input type="file" dense outlined />
    </div>

    <div class="col-xs-12" />
  </div>
</template>

<script>
import { reactive } from "@vue/reactivity";
import { useStore } from "vuex";
import { onMounted } from "vue";
import { date } from "quasar";

const emailRegex =
  /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

export default {
  setup(props, context) {
    const store = useStore();
    const draft = store.getters["applicantData/getCurrentDraft"];
    const currentUser = store.getters["auth/getCurrentUser"];
    const localData = reactive({
      genders: [
        { value: "Male", label: "Male" },
        { value: "Female", label: "Female" },
        { value: "Other", label: "Other" },
      ],
      epic_relations: [
        { value: "Father", label: "Father" },
        { value: "Mother", label: "Mother" },
      ],
      relations: [
        { value: "Father", label: "Father" },
        { value: "Mother", label: "Mother" },
        { value: "Spouse", label: "Spouse" },
        { value: "Guardian", label: "Guardian" },
      ],
      adults: [
        { value: true, label: "Applicant is above 18 years" },
        { value: false, label: "Applicant is below 18 years" },
      ],
    });

    const formData = reactive({
      title: "Mr",
      name: "",
      dob: "",
      gender: "Male",
      father_name: "",
      mother_name: "",
      birth_place: "",
      phone_no: "",
      email: currentUser?.email,
      aadhaar_no: "",
      relation: "Father",
      relation_name: "",
      relation_title: "Mr",
      adult: true,
      epic_no: "",
      epic_relation: "Father",
      epic_holder: "",
      constituency: "",
    });
    onMounted(() => {
      if (draft?.applicant) {
        formData.title = draft?.applicant?.title;
        formData.name = draft?.applicant?.name;
        formData.dob = draft?.applicant?.dob;
        formData.gender = draft?.applicant?.gender;
        formData.father_name = draft?.applicant?.father_name;
        formData.mother_name = draft?.applicant?.mother_name;
        formData.birth_place = draft?.applicant?.birth_place;
        formData.phone_no = draft?.applicant?.phone_no;
        formData.email = draft?.applicant?.email;
        formData.aadhaar_no = draft?.applicant?.aadhaar_no;
        formData.relation = draft?.applicant?.relation;
        formData.relation_name = draft?.applicant?.relation_name;
        formData.relation_title = draft?.applicant?.title;
        formData.adult = draft?.applicant?.adult;
        formData.epic_no = draft?.applicant?.epic_no;
        formData.epic_relation = draft?.applicant?.epic_relation;
        formData.epic_holder = draft?.applicant?.epic_holder;
        formData.constituency = draft?.applicant?.constituency;
      }
    });
    return {
      onFathernameBlur: (e) => {
        if (!formData.adult) {
          formData.epic_relation?.toLowerCase() === "father" &&
            (formData.epic_holder = e?.target?.value);
        }
        if (formData.relation?.toLowerCase() === "father") {
          formData.relation_name = e?.target?.value;
          formData.relation_title = "Mr";
        }
      },
      onMothernameBlur: (e) => {
        if (!formData.adult) {
          formData.epic_relation?.value?.toLowerCase() === "father" &&
            (formData.epic_holder = e?.target?.value);
        }
        if (formData.relation?.value?.toLowerCase() === "mother") {
          formData.relation_name = e?.target?.value;
          formData.relation_title = "Mrs";
        }
      },
      handleAdult: (e) => {
        if (e.target?.checked) {
          formData.epic_relation?.toLowerCase() === "father" &&
            (formData.epic_holder = formData.father_name);
          formData.epic_relation?.toLowerCase() === "mother" &&
            (formData.epic_holder = formData.mother_name);
        }
      },
      handleEpicSelect: () => {
        if (formData.epic_relation?.value === "Father") {
          formData.epic_holder = formData.father_name;
        }
        if (formData.epic_relation?.value === "Mother") {
          formData.epic_holder = formData.mother_name;
        }
      },
      emailRegex,
      localData,
      formData,
      maxDate: () => date.formatDate(Date.now(), "YYYY-MM-DD"),
    };
  },
};
</script>
