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

    <div class="col-xs-12 zsubtitle">2.Address for communication</div>

    <div class="col-xs-12 col-md-1">
      <label class="zlabel" for="dob" type="date"
        >Present age<span class="asterisk">*</span>
      </label>
    </div>
    <div class="col-xs-12 col-md-2">
      <q-input dense outlined />
    </div>

    <div class="col-xs-12 col-md-2">
      <label class="zlabel" for="gender"
        >Place of birth <span class="asterisk">*</span></label
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
        >Present Address <span class="asterisk">*</span></label
      >
    </div>
    <div class="col-xs-12 col-md-2">
      <q-input dense outlined />
    </div>

    <div class="col-xs-12 col-md-1">
      <label class="zlabel" for="gender"
        >Permanent Address <span class="asterisk">*</span></label
      >
    </div>
    <div class="col-xs-12 col-md-2">
      <q-input label="Office" dense outlined />
    </div>

    <div class="col-xs-12 col-md-2">
      <q-input label="Residence" dense outlined />
    </div>

    <div class="col-xs-12 col-md-3">
      <q-input label="Mobile" dense outlined />
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
      <label class="zlabel" for="gender"
        >Name of Mother <span class="asterisk">*</span></label
      >
    </div>
    <div class="col-xs-12 col-md-2">
      <q-input dense outlined />
    </div>

    <div class="col-xs-12 col-md-1">
      <label class="zlabel" for="pob"
        >.Whether Applicant Belongs To A Tribal (Mizo) As Specified In
        Sub-section (45) Of Section 2 Of The Act</label
      >
    </div>

    <div class="col-xs-12 col-md-2">
      <q-radio name="check" v-model="check" val="line" label="Line" />
      <q-radio name="check" v-model="check" val="rectangle" label="Rectangle" />
    </div>

    <div class="col-xs-12 zsubtitle">
      If Not Born In Mizoram, Do You Enclose Domicile Certificate Issued By Home
      Department?
    </div>

    <div>Exact Location</div>

    <div class="col-xs-12 col-md-1">
      <label class="zlabel" for="dob" type="date"
        >Area/Veng.<span class="asterisk">*</span>
      </label>
    </div>
    <div class="col-xs-12 col-md-2">
      <q-input dense outlined />
    </div>

    <div class="col-xs-12 col-md-2">
      <label class="zlabel" for="gender"
        >Indicate Category:Shop Or Stall <span class="asterisk">*</span></label
      >
    </div>
    <div class="col-xs-12 col-md-2">
      <q-input dense outlined />
    </div>

    <div class="col-xs-12 col-md-2">
      <label class="zlabel" for="gender"
        >Name Of Village Council <span class="asterisk">*</span></label
      >
    </div>
    <div class="col-xs-12 col-md-2">
      <q-input dense outlined />
    </div>

    <div>Clearly Indicate Name(s) & Addresse(s) Of Immediate Neighbour *</div>

    <div class="col-xs-12 col-md-1">
      <label class="zlabel" for="gender"
        >South ( Chhim Lam ) <span class="asterisk">*</span></label
      >
    </div>
    <div class="col-xs-12 col-md-2">
      <q-input dense outlined />
    </div>

    <div class="col-xs-12 col-md-1">
      <label class="zlabel" for="gender"
        >North ( Hmar Lam ) <span class="asterisk">*</span></label
      >
    </div>
    <div class="col-xs-12 col-md-2">
      <q-input label="Office" dense outlined />
    </div>

    <div class="col-xs-12 col-md-1">
      <label class="zlabel" for="gender"
        >West ( Khawthlang Lam ) <span class="asterisk">*</span></label
      >
    </div>
    <div class="col-xs-12 col-md-2">
      <q-input label="Office" dense outlined />
    </div>

    <div class="col-xs-12 col-md-1">
      <label class="zlabel" for="gender"
        >East ( Khawchhak Lam ) <span class="asterisk">*</span></label
      >
    </div>
    <div class="col-xs-12 col-md-2">
      <q-input label="Office" dense outlined />
    </div>

    <div class="col-xs-12 col-md-1">
      <label class="zlabel" for="gender"
        >Whether The Area Is Properly Cleared For Easy Movement Of Surveyors?
        <span class="asterisk">*</span></label
      >
    </div>
    <div class="col-xs-12 col-md-2">
      <q-input label="Office" dense outlined />
    </div>

    <div class="col-xs-12 col-md-1">
      <label class="zlabel" for="gender"
        >Whether 4(four) Boundary Pillars As Prescribed By Revenue Department
        Are Provided For Fixing On The Day Of Survey Operation?
        <span class="asterisk">*</span></label
      >
    </div>
    <div class="col-xs-12 col-md-2">
      <q-input label="Office" dense outlined />
    </div>

    <div>Other Contact Details</div>

    <div class="col-xs-12 col-md-1">
      <label class="zlabel" for="gender"
        >Telephone Number <span class="asterisk">*</span></label
      >
    </div>
    <div class="col-xs-12 col-md-2">
      <q-input label="Office" dense outlined />
    </div>

    <div class="col-xs-12 col-md-1">
      <label class="zlabel" for="gender"
        >Email ID <span class="asterisk">*</span></label
      >
    </div>
    <div class="col-xs-12 col-md-2">
      <q-input label="Office" dense outlined />
    </div>

    <div class="col-12">
      *Notes: Hemi vengah hian a thenawmte hi an awm lo anih pawhin a ram awmna
      hmun hi chipchiar takin ziah tur a ni (In case neighbours are not present,
      clear location of land should be described).
    </div>

    <div class="col-12">
       <q-radio dense v-model="shape" val="line" label="I hereby certify that all particulars and documents are true and correct. Any incorrect particulars furnished herein will result in cancellation of settlement or allotment (A chunga sawite khi a dik vek tih ka hriattir e. Diklo a awm a nih chuan allotment emaw settlement pek tawh pawh sut leh theih a ni tih ka hre bawk e). I also hereby agree to abide by terms and conditions laid down in rule 14 & 15 of these Rules ( Rule 14 leh 15 na in a phut zawng zawngte zawm turin ka intiam a, ka zawm loh chuan House Pass pawh sut leh turin ka in tiam e)." />
    </div>


    <div class="col-xs-12 col-md-1">
      <label class="zlabel" for="gender"
        >Signature of the applicant <span class="asterisk">*</span></label
      >
    </div>
    <div class="col-xs-12 col-md-2">
      <q-input label="Office" dense outlined />
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
     
    });
    return {
     
      localData,
      formData,
      maxDate: () => date.formatDate(Date.now(), "YYYY-MM-DD"),
    };
  },
};
</script>
