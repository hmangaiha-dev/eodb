<template>
  <div class="zcard row items-center q-gutter-md q-col-gutter-md">
    <div class="col-10">
      <label class="zlabel" for="name"
        >1.Diltu Hming (Hawrawppuiin ) <span class="asterisk"> *</span></label
      >
      <q-input dense outlined />
    </div>

    <div class="col-10">
      <label class="zlabel" for="name"
        >2 <span class="asterisk"> *</span></label
      >

      <div class="row justify q-col-gutter-md q-ml-md">
        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name"
            >(a) Date Of Birth <span class="asterisk"> *</span></label
          >
          <q-input dense outlined v-model="formData.applicant_name" />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name"
            >(b)Present Age <span class="asterisk"> *</span></label
          >
          <q-input dense outlined v-model="formData.applicant_name" />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name"
            >(c) Place Of Birth <span class="asterisk"> *</span></label
          >
          <q-input dense outlined v-model="formData.applicant_name" />
        </div>
        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name"
            >(d)District <span class="asterisk"> *</span></label
          >
          <q-input dense outlined v-model="formData.applicant_name" />
        </div>
      </div>
    </div>

    <div class="col-12">
      <label class="zlabel" for="gender"
        >3.Whether Married?If Married,name Of Husband Or Wife(In Capital
        Letters) <span class="asterisk">*</span></label
      >
      <div>
        <q-radio v-model="shape" val="line" label="Yes" />
        <q-radio v-model="shape" val="line" label="No" />
      </div>
    </div>

    <div class="col-md-5 col-xs-10">
      <label class="zlabel" for="gender"
        >4.Present Address <span class="asterisk">*</span></label
      >
      <q-input dense outlined />
    </div>

    <div class="col-md-5 col-xs-10">
      <label class="zlabel" for="gender"
        >5.Permanent Address <span class="asterisk">*</span></label
      >
      <q-input dense outlined />
    </div>

    <div class="col-10">
      <label class="zlabel" for="name">6 </label>

      <div class="row justify q-col-gutter-md q-ml-md">
        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name"
            >(a)Name Of Father <span class="asterisk"> *</span></label
          >
          <q-input dense outlined v-model="formData.applicant_name" />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name"
            >(b)Name Of Mother<span class="asterisk"> *</span></label
          >
          <q-input dense outlined v-model="formData.applicant_name" />
        </div>
      </div>
    </div>

    <div class="col-12">
      <label class="zlabel" for="">
        7.Whether Applicant Belongs To A Tribal (Mizo) As Specified In
        Sub-section (45) Of Section 2 Of The Act
      </label>
      <div>
        <q-radio class="zlabel" v-model="shape" val="line" label="Yes" />
        <q-radio class="zlabel" v-model="shape" val="line" label="No" />
      </div>
    </div>

    <div class="col-md-5 col-xs-10 zlabel">
      <label for=""
        >8.If Not Born In Mizoram, Do You Enclose Domicile Certificate Issued By
        Home Department?</label
      >

      <q-input dense outlined />
    </div>

    <div class="col-md-5 col-xs-10 zlabel">
      <label for=""
        >9.Occupation If Applicant Is Government Servant, Indicate Name Of
        Department And Designation</label
      >
      <q-input dense outlined />
    </div>

    <div class="col-12 zlabel">
      <label for="">10.Exact Location/area/Veng</label>

      <!-- <div class="col-10"> -->
      

        <div class="row justify q-col-gutter-md q-ml-md">
          <div class="col-md-6 col-xs-10">
            <label class="zlabel" for="name"
              >(a)Survey No. <span class="asterisk"> *</span></label
            >
            <q-input dense outlined v-model="formData.applicant_name" />
          </div>

          <div class="col-md-6 col-xs-10">
            <label class="zlabel" for="name"
              >(b) Plot No<span class="asterisk"> *</span></label
            >
            <q-input dense outlined v-model="formData.applicant_name" />
          </div>

          <div class="col-md-6 col-xs-10">
            <label class="zlabel" for="name"
              >(c) Purpose For Use Of Land<span class="asterisk"> *</span></label
            >
            <q-input dense outlined v-model="formData.applicant_name" />
          </div>

          <div class="col-md-6 col-xs-10">
            <label class="zlabel" for="name"
              >(d) Is It Town Area?<span class="asterisk"> *</span></label
            >
            <q-input dense outlined v-model="formData.applicant_name" />
          </div>
        </div>
      <!-- </div> -->
    </div>

    <div class="col-12">
      <label class="zlabel" for="gender"
        >11.Name Of Village Council <span class="asterisk">*</span></label
      >
      <q-input dense outlined />

    </div>
   



    <div class="col-12 zlabel">
      <label for="">12.Clearly Indicate Name(s) & Addresse(s) Of Immediate Neighbour *</label>

      <!-- <div class="col-10"> -->
      

        <div class="row justify q-col-gutter-md q-ml-md">
          <div class="col-md-6 col-xs-10">
            <label class="zlabel" for="name"
              >(a) South ( Chhim Lam ) <span class="asterisk"> *</span></label
            >
            <q-input dense outlined v-model="formData.applicant_name" />
          </div>

          <div class="col-md-6 col-xs-10">
            <label class="zlabel" for="name"
              >(b) North ( Hmar Lam )<span class="asterisk"> *</span></label
            >
            <q-input dense outlined v-model="formData.applicant_name" />
          </div>

          <div class="col-md-6 col-xs-10">
            <label class="zlabel" for="name"
              >(c) West ( Khawthlang Lam )<span class="asterisk"> *</span></label
            >
            <q-input dense outlined v-model="formData.applicant_name" />
          </div>

          <div class="col-md-6 col-xs-10">
            <label class="zlabel" for="name"
              >(d) East ( Khawchhak Lam )<span class="asterisk"> *</span></label
            >
            <q-input dense outlined v-model="formData.applicant_name" />
          </div>
        </div>
      <!-- </div> -->
    </div>









    
    <div class="col-md-5 col-xs-10">
      <label class="zlabel" for="gender"
        >13.Whether The Area Is Properly Cleared For Easy Movement Of Surveyors?
        <span class="asterisk">*</span></label
      >
      <q-input dense outlined />

    </div>
   

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="gender"
        >14.Whether 6 (six) Boundary Pillars As Prescribed By Revenue Department
        Are Provided For Fixing On The Day Of Survey Operation?
        <span class="asterisk">*</span></label
      >
      <q-input dense outlined />

    </div>
   

    <div class="col-12">
      <label class="zlabel" for="gender"
        >15.Checklist Whether The Following Documents Are Kept Ready For
        Inspection? <span class="asterisk">*</span></label
      >
      <div >
        <q-checkbox left-label v-model="orange" label="(a) House Pass Certificate" />
        <q-checkbox left-label v-model="orange" label="(b) Tax Clearance Certificate" />
      </div>
    </div>
   

   



<div class="col-12 zlabel">
      <label for="">16.Other Contact Details</label>

      <!-- <div class="col-10"> -->
      

        <div class="row justify q-col-gutter-md q-ml-md">
          <div class="col-md-6 col-xs-10">
            <label class="zlabel" for="name"
              >(a) Telephone Number <span class="asterisk"> *</span></label
            >
            <q-input dense outlined v-model="formData.applicant_name" />
          </div>

          <div class="col-md-6 col-xs-10">
            <label class="zlabel" for="name"
              >(b)Email ID<span class="asterisk"> *</span></label
            >
            <q-input dense outlined v-model="formData.applicant_name" />
          </div>

          
        </div>
      <!-- </div> -->
    </div>







    <div class="col-12 zlabel">
      <label for="">15</label>

      <!-- <div class="col-10"> -->
      

        <div class="row justify q-col-gutter-md q-ml-md">
          <div class="col-md-6 col-xs-10">
            <label class="zlabel" for="name"
              >(a) Name ( In Capital) Of Head Of Applicant’s Family As Per EPIC/PAN/UID ( Diltute Chhungkaw Puipa Ber Hming <span class="asterisk"> *</span></label
            >
            <q-input dense outlined v-model="formData.applicant_name" />
          </div>

          <div class="col-md-6 col-xs-10">
            <label class="zlabel" for="name"
              >(b) If Name Of Head Of Family Not Indicated, Reasons ( Chhungkaw Pa Ber Hminga Dil A Nih Loh Chuan, A Chhan Tarlan Tur A Ni)<span class="asterisk"> *</span></label
            >
            <q-input dense outlined v-model="formData.applicant_name" />
          </div>

          
        </div>
      <!-- </div> -->
    </div>

















    

    
    <div class="col-12"><label class="zlabel" for="">16.Family Details(Diltu Chungchang)</label>
    
     <div class="row justify q-col-gutter-md q-ml-md">
          <div class="col-md-4 col-xs-10">
            <label class="zlabel" for="name"
              >Name as per EPIC/PAN/UID) Hming</label
            >
            <q-input dense outlined v-model="formData.applicant_name" />
          </div>

          <div class="col-md-2 col-xs-10">
            <label class="zlabel" for="name"
              >Kum zat</label
            >
            <q-input dense outlined v-model="formData.applicant_name" />
          </div>

          <div class="col-md-2 col-xs-10">
            <label class="zlabel" for="name"
              >Hnathawh</label
            >
            <q-input dense outlined v-model="formData.applicant_name" />
          </div>

          <div class="col-md-4 col-xs-10">
            <label class="zlabel" for="name"
              >Chhungkaw pa ber nen inlaichinna</label
            >
            <q-input dense outlined v-model="formData.applicant_name" />
          </div>

          
        </div>
    </div>

    

   

    

    

    <div class="col-12">
      <label class="zlabel" for="gender"
        >17.Diltu Ngaihdanin Duhsak Bik Riauna Tur Chhan A Awm Em?<span
          class="asterisk"
          >*</span
        ></label
      >
      <q-input dense outlined />

    </div>
   

    <div class="col-12">
      <q-radio
      class="zlabel"
        v-model="shape"
        val="line"
        label="I do hereby affirm that the informations furnished above are true and the documents attached herewith are genuine."
      />
    </div>

    <q-space/>

    <div class="col-5 ">
      <label class="zlabel" for="gender"
        >Signature of the applicant<span class="asterisk">*</span></label
      >
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
