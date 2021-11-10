<template>
  <div class="zcard row items-center q-gutter-md q-col-gutter-md">
    <div class="col-3">
      <label class="zlabel" for="name"
        >Name & Location of Industrial Area
        <span class="asterisk"> *</span></label
      >
    </div>

    <div class="col-6">
      <q-input dense outlined v-model="formData.birth_place" />
    </div>

    <p class="text-body col-12">
      <span class="text-bold"> General Instructions:</span> <br />
    </p>

    <p class="text-grey col-12 q-py-none q-ml-md">
      1.The filled in application form should be submitted to Appropriate
      Authority of a particular 'Industrial Area'. <br />
      2.Application form should be submitted in Duplicate copies. <br />
      3.Cost of the application should be Rs. 100. (Rupees One Hundred). <br />
      4.Attested photo copy of memorandum/Registration Certificate should be
      5.submitted along with this application <br />
      6.Attested Photo copy of Voters ID or Family ration card should be
      submitted.
    </p>

    <p class="col-12 text-h6 q-pb-none text-center">Part I <br><span class="text-caption"> (To be filled by the Entrepreneur)</span></p>
    
      
    

    <div class="col-xs-12 col-md-2">
      <label class="zsubtitle" for="name"
        >1.Name of the Applicant <span class="asterisk"> *</span></label
      >
    </div>

    <div class="col-xs-12 col-md-4">
      <q-input dense outlined v-model="formData.birth_place" />
    </div>

    <div class="col-xs-12 zsubtitle">2.Address for communication</div>

    <div class="col-xs-12 col-md-1">
      <label class="zlabel" for="dob" type="date"
        >Steet<span class="asterisk">*</span>
      </label>
    </div>
    <div class="col-xs-12 col-md-2">
      <q-input dense outlined v-model="formData.birth_place" />
    </div>

    <div class="col-xs-12 col-md-2">
      <label class="zlabel" for="gender"
        >City/Town/Village <span class="asterisk">*</span></label
      >
    </div>
    <div class="col-xs-12 col-md-2">
      <q-input dense outlined v-model="formData.birth_place" />
    </div>

    <div class="col-xs-12 col-md-2">
      <label class="zlabel" for="gender"
        >PIN No <span class="asterisk">*</span></label
      >
    </div>
    <div class="col-xs-12 col-md-2">
      <q-input dense outlined v-model="formData.birth_place" />
    </div>

    <div class="col-xs-12 col-md-1">
      <label class="zlabel" for="gender"
        >House No <span class="asterisk">*</span></label
      >
    </div>
    <div class="col-xs-12 col-md-2">
      <q-input dense outlined v-model="formData.birth_place" />
    </div>

    <div class="col-xs-12 col-md-1">
      <label class="zlabel" for="gender"
        >Phone No <span class="asterisk">*</span></label
      >
    </div>
    <div class="col-xs-12 col-md-2">
      <q-input label="Office" dense outlined v-model="formData.birth_place" />
    </div>

    <div class="col-xs-12 col-md-2">
      <q-input
        label="Residence"
        dense
        outlined
        v-model="formData.birth_place"
      />
    </div>

    <div class="col-xs-12 col-md-3">
      <q-input label="Mobile" dense outlined v-model="formData.birth_place" />
    </div>

    <div class="col-xs-12 col-md-1">
      <label class="zlabel" for="gender"
        >Email Addess <span class="asterisk">*</span></label
      >
    </div>
    <div class="col-xs-12 col-md-2">
      <q-input dense outlined v-model="formData.birth_place" />
    </div>

    <div class="col-xs-12 col-md-1">
      <label class="zlabel" for="gender"
        >Website <span class="asterisk">*</span></label
      >
    </div>
    <div class="col-xs-12 col-md-2">
      <q-input dense outlined v-model="formData.birth_place" />
    </div>

    <div class="col-xs-12 col-md-1">
      <label class="zlabel" for="pob">District</label>
    </div>

    <div class="col-xs-12 col-md-2">
      <q-input dense outlined v-model="formData.birth_place" />
    </div>

    <div class="col-xs-12 zsubtitle">
      3.Whether Proposed Or Existing Unit If Existing, Detail Address Of The
      Unit: Proposed/Existing.
    </div>

    <div class="col-xs-12 col-md-1">
      <label class="zlabel" for="dob" type="date"
        >Steet<span class="asterisk">*</span>
      </label>
    </div>
    <div class="col-xs-12 col-md-2">
      <q-input dense outlined v-model="formData.birth_place" />
    </div>

    <div class="col-xs-12 col-md-2">
      <label class="zlabel" for="gender"
        >City/Town/Village <span class="asterisk">*</span></label
      >
    </div>
    <div class="col-xs-12 col-md-2">
      <q-input dense outlined v-model="formData.birth_place" />
    </div>

    <div class="col-xs-12 col-md-2">
      <label class="zlabel" for="gender"
        >PIN No <span class="asterisk">*</span></label
      >
    </div>
    <div class="col-xs-12 col-md-2">
      <q-input dense outlined v-model="formData.birth_place" />
    </div>

    <div class="col-xs-12 col-md-1">
      <label class="zlabel" for="gender"
        >House No <span class="asterisk">*</span></label
      >
    </div>
    <div class="col-xs-12 col-md-2">
      <q-input dense outlined v-model="formData.birth_place" />
    </div>

    <div class="col-xs-12 col-md-1">
      <label class="zlabel" for="gender"
        >Phone No <span class="asterisk">*</span></label
      >
    </div>
    <div class="col-xs-12 col-md-2">
      <q-input label="Office" dense outlined v-model="formData.birth_place" />
    </div>

    <div class="col-xs-12 col-md-2">
      <q-input
        label="Residence"
        dense
        outlined
        v-model="formData.birth_place"
      />
    </div>

    <div class="col-xs-12 col-md-3">
      <q-input label="Mobile" dense outlined v-model="formData.birth_place" />
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
