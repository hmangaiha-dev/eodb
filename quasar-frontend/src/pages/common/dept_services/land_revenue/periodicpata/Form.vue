<template>
  <div class="zcard row items-center q-gutter-md q-col-gutter-md">
    <div class="col-3">
      <label class="zlabel" for="name"
        >Diltu Hming (Hawrawppuiin ) <span class="asterisk"> *</span></label
      >
    </div>

    <div class="col-6">
      <q-input dense outlined />
    </div>

    <div class="col-xs-12 col-md-2">
      <label class="zsubtitle" for="name"
        >Date of Birth <span class="asterisk"> *</span></label
      >
    </div>

    <div class="col-xs-12 col-md-4">
      <q-input dense outlined />
    </div>

    <div class="col-xs-12 col-md-1">
      <label class="zlabel" for="dob" type="date"
        >Present Age<span class="asterisk">*</span>
      </label>
    </div>
    <div class="col-xs-12 col-md-2">
      <q-input dense outlined />
    </div>

    <div class="col-xs-12 col-md-2">
      <label class="zlabel" for="gender"
        >Place of Birth <span class="asterisk">*</span></label
      >
    </div>
    <div class="col-xs-12 col-md-2">
      <q-input dense outlined />
    </div>

    <div class="col-xs-12 col-md-2">
      <label class="zlabel" for="gender"
        >District <span class="asterisk">*</span></label
      >
    </div>
    <div class="col-xs-12 col-md-2">
      <q-input dense outlined />
    </div>

    <div class="col-xs-12 col-md-1">
      <label class="zlabel" for="gender"
        >Whether Married?If Married,name Of Husband Or Wife(In Capital Letters)
        <span class="asterisk">*</span></label
      >
    </div>
    <div class="col-xs-12 col-md-2">
      <q-radio v-model="shape" val="line" label="Line" />
      <q-radio v-model="shape" val="line" label="Line" />
    </div>

    <div class="col-xs-12 col-md-1">
      <label class="zlabel" for="gender"
        >Present Address <span class="asterisk">*</span></label
      >
    </div>
    <div class="col-xs-12 col-md-2">
      <q-input  dense outlined />
    </div>

    <div class="col-xs-12 col-md-1">
      <label class="zlabel" for="gender"
        >Permanent Address <span class="asterisk">*</span></label
      >
    </div>
    <div class="col-xs-12 col-md-2">
      <q-input dense outlined />
    </div>

    <div class="col-xs-12 col-md-1">
      <label class="zlabel" for="gender"
        >Name of Father <span class="asterisk">*</span></label
      >
    </div>
    <div class="col-xs-12 col-md-2">
      <q-input dense outlined />
    </div>

    <div class="col-xs-12 col-md-1">
      <label class="zlabel" for="pob">Name of Mother</label>
    </div>

    <div class="col-xs-12 col-md-2">
      <q-input dense outlined />
    </div>

    <div class="col-12">
      Whether Applicant Belongs To A Tribal (Mizo) As Specified In Sub-section
      (45) Of Section 2 Of The Act
    </div>

    <div class="col-xs-12 col-md-2">
      <q-radio v-model="shape" val="line" label="Line" />
      <q-radio v-model="shape" val="line" label="Line" />
    </div>

    <div class="col-xs-12 col-md-1">
      <label class="zlabel" for="dob" type="date"
        >Occupation If Applicant Is Government Servant, Indicate Name Of
        Department And Designation<span class="asterisk">*</span>
      </label>
    </div>
    <div class="col-xs-12 col-md-2">
      <q-input dense outlined />
    </div>

    <div class="col-12 ztitle">Exact Location/area/Veng</div>

    <div class="col-xs-12 col-md-2">
      <label class="zlabel" for="gender"
        >Survey No<span class="asterisk">*</span></label
      >
    </div>
    <div class="col-xs-12 col-md-2">
      <q-input dense outlined />
    </div>

    <div class="col-xs-12 col-md-2">
      <label class="zlabel" for="gender"
        >Plot No <span class="asterisk">*</span></label
      >
    </div>
    <div class="col-xs-12 col-md-2">
      <q-input dense outlined />
    </div>

    <div class="col-xs-12 col-md-1">
      <label class="zlabel" for="gender"
        >Purpose For Use Of Land <span class="asterisk">*</span></label
      >
    </div>
    <div class="col-xs-12 col-md-2">
      <q-input dense outlined />
    </div>

    <div class="col-xs-12 col-md-1">
      <label class="zlabel" for="gender"
        >Is It Town Area? <span class="asterisk">*</span></label
      >
    </div>
    <div class="col-xs-12 col-md-2">
      <q-input  dense outlined />
    </div>

    <div class="col-xs-12 col-md-1">
      <label class="zlabel" for="gender"
        >Name Of Village Council <span class="asterisk">*</span></label
      >
    </div>
    <div class="col-xs-12 col-md-2">
      <q-input  dense outlined />
    </div>

    <div class="col-12 ztitle">
      Clearly Indicate Name(s) & Addresse(s) Of Immediate Neighbour *
    </div>

    <div class="col-xs-12 col-md-1">
      <label class="zlabel" for="gender"
        >South ( Chhim Lam ) <span class="asterisk">*</span></label
      >
    </div>
    <div class="col-xs-12 col-md-2">
      <q-input  dense outlined />
    </div>

    <div class="col-xs-12 col-md-1">
      <label class="zlabel" for="gender"
        >North ( Hmar Lam ) <span class="asterisk">*</span></label
      >
    </div>
    <div class="col-xs-12 col-md-2">
      <q-input  dense outlined />
    </div>

    <div class="col-xs-12 col-md-1">
      <label class="zlabel" for="gender"
        >West ( Khawthlang Lam ) <span class="asterisk">*</span></label
      >
    </div>
    <div class="col-xs-12 col-md-2">
      <q-input  dense outlined />
    </div>

    <div class="col-xs-12 col-md-1">
      <label class="zlabel" for="gender"
        >East ( Khawchhak Lam ) <span class="asterisk">*</span></label
      >
    </div>
    <div class="col-xs-12 col-md-2">
      <q-input  dense outlined />
    </div>

    <div class="col-xs-12 col-md-1">
      <label class="zlabel" for="gender"
        >Whether The Area Is Properly Cleared For Easy Movement Of Surveyors?
        <span class="asterisk">*</span></label
      >
    </div>
    <div class="col-xs-12 col-md-2">
      <q-input  dense outlined />
    </div>

    <div class="col-xs-12 col-md-1">
      <label class="zlabel" for="gender"
        >Whether 6 (six) Boundary Pillars As Prescribed By Revenue Department
        Are Provided For Fixing On The Day Of Survey Operation?
        <span class="asterisk">*</span></label
      >
    </div>
    <div class="col-xs-12 col-md-2">
      <q-input  dense outlined />
    </div>

    <div class="col-xs-12 col-md-1">
      <label class="zlabel" for="gender"
        >Checklist Whether The Following Documents Are Kept Ready For
        Inspection? <span class="asterisk">*</span></label
      >
    </div>
    <div class="col-xs-12 col-md-2">
      <q-checkbox left-label v-model="orange" label="Orange" />
      <q-checkbox left-label v-model="orange" label="Orange" />
    </div>

    <div class="col-12 ztitle">Other Contact Details</div>

    <div class="col-xs-12 col-md-1">
      <label class="zlabel" for="gender"
        >Telephone Number <span class="asterisk">*</span></label
      >
    </div>
    <div class="col-xs-12 col-md-2">
      <q-input  dense outlined />
    </div>

    <div class="col-xs-12 col-md-1">
      <label class="zlabel" for="gender"
        >Email ID <span class="asterisk">*</span></label
      >
    </div>
    <div class="col-xs-12 col-md-2">
      <q-input  dense outlined />
    </div>

    <div class="col-xs-12 col-md-1">
      <label class="zlabel" for="gender"
        >Name ( In Capital) Of Head Of Applicant’s Family As Per EPIC/PAN/UID (
        Diltute Chhungkaw Puipa Ber Hming <span class="asterisk">*</span></label
      >
    </div>
    <div class="col-xs-12 col-md-2">
      <q-input  dense outlined />
    </div>

    <div class="col-xs-12 col-md-1">
      <label class="zlabel" for="gender"
        >If Name Of Head Of Family Not Indicated, Reasons ( Chhungkaw Pa Ber
        Hminga Dil A Nih Loh Chuan, A Chhan Tarlan Tur A Ni)
        <span class="asterisk">*</span></label
      >
    </div>
    <div class="col-xs-12 col-md-2">
      <q-input  dense outlined />
    </div>

    <div class="col-12 ztitle">Family Details(Diltu Chungchang)</div>

    <div class="col-xs-12 col-md-1">
      <label class="zlabel" for="gender"
        >Name as per EPIC/PAN/UID) Hming<span class="asterisk">*</span></label
      >
    </div>
    <div class="col-xs-12 col-md-2">
      <q-input  dense outlined />
    </div>

    <div class="col-xs-12 col-md-1">
      <label class="zlabel" for="gender"
        >Kum zat<span class="asterisk">*</span></label
      >
    </div>
    <div class="col-xs-12 col-md-2">
      <q-input  dense outlined />
    </div>

    <div class="col-xs-12 col-md-1">
      <label class="zlabel" for="gender"
        >Hnathawh<span class="asterisk">*</span></label
      >
    </div>
    <div class="col-xs-12 col-md-2">
      <q-input  dense outlined />
    </div>

    <div class="col-xs-12 col-md-1">
      <label class="zlabel" for="gender"
        >Chhungkaw pa ber nen inlaichinna<span class="asterisk">*</span></label
      >
    </div>
    <div class="col-xs-12 col-md-2">
      <q-input  dense outlined />
    </div>

    <div class="col-xs-12 col-md-1">
      <label class="zlabel" for="gender"
        >Diltu Ngaihdanin Duhsak Bik Riauna Tur Chhan A Awm Em?<span
          class="asterisk"
          >*</span
        ></label
      >
    </div>
    <div class="col-xs-12 col-md-2">
      <q-input  dense outlined />
    </div>

    <div class="col-12">
      <q-radio
        v-model="shape"
        val="line"
        label="I do hereby affirm that the informations furnished above are true and the documents attached herewith are genuine."
      />
    </div>

    <div class="col-xs-12 col-md-1">
      <label class="zlabel" for="gender"
        >Signature of the applicant<span
          class="asterisk"
          >*</span
        ></label
      >
    </div>
    <div class="col-xs-12 col-md-2">
      <q-input  dense outlined />
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
