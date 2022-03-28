<template>
  <div class="zcard row items-center q-gutter-md q-col-gutter-md">
    <div class="col-3">
      <label class="zlabel" for="name"
        >Diltu Hming (Hawrawppuiin ) <span class="asterisk"> *</span></label
      >
    </div>

    <div class="col-6">
      <q-input dense outlined  v-model="formData.land_allotment_shop_1"       :rules="[(val) => (val && val.length > 0) || 'Please type something']"
/>
    </div>

    <div class="col-xs-12 col-md-2">
      <label class="zsubtitle" for="name"
        >Date of Birth <span class="asterisk"> *</span></label
      >
    </div>

    <div class="col-xs-12 col-md-4">
      <q-input dense outlined      v-model="formData.land_allotment_shop_2_a"       :rules="[(val) => (val && val.length > 0) || 'Please type something']"
/>
    </div>



    
    <div class="col-xs-12 col-md-2">
      <label class="zlabel" for="gender"
        >Place of birth <span class="asterisk">*</span></label
      >
    </div>
    <div class="col-xs-12 col-md-2">
      <q-input dense outlined  v-model="formData.land_allotment_shop_2_b"       :rules="[(val) => (val && val.length > 0) || 'Please type something']"
/>
    </div>

 

    <div class="col-xs-12 col-md-1">
      <label class="zlabel" for="gender"
        >Present Address <span class="asterisk">*</span></label
      >
    </div>
    <div class="col-xs-12 col-md-2">
      <q-input dense outlined  v-model="formData.land_allotment_shop_3"       :rules="[(val) => (val && val.length > 0) || 'Please type something']"/>
    </div>

    <div class="col-xs-12 col-md-1">
      <label class="zlabel" for="gender"
        >Permanent Address <span class="asterisk">*</span></label
      >
    </div>
    <div class="col-xs-12 col-md-2">
      <q-input label="Office" dense outlined v-model="formData.land_allotment_shop_4"       :rules="[(val) => (val && val.length > 0) || 'Please type something']" />
    </div>

  

    <div class="col-xs-12 col-md-1">
      <label class="zlabel" for="gender"
        >Name of Father <span class="asterisk">*</span></label
      >
    </div>
    <div class="col-xs-12 col-md-2">
      <q-input dense outlined v-model="formData.land_allotment_shop_5_a"       :rules="[(val) => (val && val.length > 0) || 'Please type something']"/>
    </div>

    <div class="col-xs-12 col-md-1">
      <label class="zlabel" for="gender"
        >Name of Mother <span class="asterisk">*</span></label
      >
    </div>
    <div class="col-xs-12 col-md-2">
      <q-input dense outlined v-model="formData.land_allotment_shop_5_b"       :rules="[(val) => (val && val.length > 0) || 'Please type something']" />
    </div>

    <div class="col-xs-12 col-md-1">
      <label class="zlabel" for="pob"
        >.Whether Applicant Belongs To A Tribal (Mizo) As Specified In
        Sub-section (45) Of Section 2 Of The Act</label
      >
    </div>

    <div class="col-xs-12 col-md-2">
      <q-radio name="check" v-model="formData.land_allotment_shop_4" val="line" label="Line" />
      <q-radio name="check" v-model="formData.land_allotment_shop_4" val="rectangle" label="Rectangle" />
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
      <q-input dense outlined  v-model="formData.land_allotment_shop_8_a"       :rules="[(val) => (val && val.length > 0) || 'Please type something']"/>
    </div>

    <div class="col-xs-12 col-md-2">
      <label class="zlabel" for="gender"
        >Indicate Category:Shop Or Stall <span class="asterisk">*</span></label
      >
    </div>
    <div class="col-xs-12 col-md-2">
      <q-input dense outlined  v-model="formData.land_allotment_shop_8_b"       :rules="[(val) => (val && val.length > 0) || 'Please type something']"/>
    </div>

    <div class="col-xs-12 col-md-2">
      <label class="zlabel" for="gender"
        >Name Of Village Council <span class="asterisk">*</span></label
      >
    </div>
    <div class="col-xs-12 col-md-2">
      <q-input dense outlined v-model="formData.land_allotment_shop_9"       :rules="[(val) => (val && val.length > 0) || 'Please type something']"/>
    </div>

    <div>Clearly Indicate Name(s) & Addresse(s) Of Immediate Neighbour *</div>

    <div class="col-xs-12 col-md-1">
      <label class="zlabel" for="gender"
        >South ( Chhim Lam ) <span class="asterisk">*</span></label
      >
    </div>
    <div class="col-xs-12 col-md-2">
      <q-input dense outlined v-model="formData.land_allotment_shop_10_a"       :rules="[(val) => (val && val.length > 0) || 'Please type something']"/>
    </div>

    <div class="col-xs-12 col-md-1">
      <label class="zlabel" for="gender"
        >North ( Hmar Lam ) <span class="asterisk">*</span></label
      >
    </div>
    <div class="col-xs-12 col-md-2">
      <q-input label="Office" dense outlined v-model="formData.land_allotment_shop_10_b"       :rules="[(val) => (val && val.length > 0) || 'Please type something']"/>
    </div>

    <div class="col-xs-12 col-md-1">
      <label class="zlabel" for="gender"
        >West ( Khawthlang Lam ) <span class="asterisk">*</span></label
      >
    </div>
    <div class="col-xs-12 col-md-2">
      <q-input label="Office" dense outlined v-model="formData.land_allotment_shop_10_c"       :rules="[(val) => (val && val.length > 0) || 'Please type something']" />
    </div>

    <div class="col-xs-12 col-md-1">
      <label class="zlabel" for="gender"
        >East ( Khawchhak Lam ) <span class="asterisk">*</span></label
      >
    </div>
    <div class="col-xs-12 col-md-2">
      <q-input label="Office" dense outlined v-model="formData.land_allotment_shop_10_d"       :rules="[(val) => (val && val.length > 0) || 'Please type something']" />
    </div>

    <div class="col-xs-12 col-md-1">
      <label class="zlabel" for="gender"
        >Whether The Area Is Properly Cleared For Easy Movement Of Surveyors?
        <span class="asterisk">*</span></label
      >
    </div>
    <div class="col-xs-12 col-md-2">
      <q-input label="Office" dense outlined v-model="formData.land_allotment_shop_11"       :rules="[(val) => (val && val.length > 0) || 'Please type something']"/>
    </div>

    <div class="col-xs-12 col-md-1">
      <label class="zlabel" for="gender"
        >Whether 4(four) Boundary Pillars As Prescribed By Revenue Department
        Are Provided For Fixing On The Day Of Survey Operation?
        <span class="asterisk">*</span></label
      >
    </div>
    <div class="col-xs-12 col-md-2">
      <q-input label="Office" dense outlined v-model="formData.land_allotment_shop_12"       :rules="[(val) => (val && val.length > 0) || 'Please type something']"/>
    </div>

    <div>Other Contact Details</div>

    <div class="col-xs-12 col-md-1">
      <label class="zlabel" for="gender"
        >Telephone Number <span class="asterisk">*</span></label
      >
    </div>
    <div class="col-xs-12 col-md-2">
      <q-input label="Office" dense outlined v-model="formData.land_allotment_shop_13_a"       :rules="[(val) => (val && val.length > 0) || 'Please type something']"/>
    </div>

    <div class="col-xs-12 col-md-1">
      <label class="zlabel" for="gender"
        >Email ID <span class="asterisk">*</span></label
      >
    </div>
    <div class="col-xs-12 col-md-2">
      <q-input label="Office" dense outlined v-model="formData.land_allotment_shop_13_b"       :rules="[(val) => (val && val.length > 0) || 'Please type something']"/>
    </div>

    <div class="col-12">
      *Notes: Hemi vengah hian a thenawmte hi an awm lo anih pawhin a ram awmna
      hmun hi chipchiar takin ziah tur a ni (In case neighbours are not present,
      clear location of land should be described).
    </div>

    <div class="col-12">
       <q-radio dense  val="line" label="I hereby certify that all particulars and documents are true and correct. Any incorrect particulars furnished herein will result in cancellation of settlement or allotment (A chunga sawite khi a dik vek tih ka hriattir e. Diklo a awm a nih chuan allotment emaw settlement pek tawh pawh sut leh theih a ni tih ka hre bawk e). I also hereby agree to abide by terms and conditions laid down in rule 14 & 15 of these Rules ( Rule 14 leh 15 na in a phut zawng zawngte zawm turin ka intiam a, ka zawm loh chuan House Pass pawh sut leh turin ka in tiam e)." />
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
    
      tribal: [
        { value: true, label: "Applicant is above 18 years" },
        { value: false, label: "Applicant is below 18 years" },
      ],
    });

    const formData = reactive({
       application_code: "LAND_ALLOTMENT_SHOP",
      department_id: 8,
      land_allotment_shop_1: "",
      land_allotment_shop_2_a: "",
      land_allotment_shop_2_b: "",
      land_allotment_shop_3: "",
      land_allotment_shop_4: "",
      land_allotment_shop_5_a: "",
      land_allotment_shop_5_b: "",
      land_allotment_shop_6: "",
      land_allotment_shop_7: "",
      land_allotment_shop_8_a: "",
      land_allotment_shop_8_b: "",
      land_allotment_shop_9: "",
      land_allotment_shop_10_a: "",
      land_allotment_shop_10_b: "",
      land_allotment_shop_10_c: "",
      land_allotment_shop_10_d: "",
      land_allotment_shop_11: "",
      land_allotment_shop_12: "",
      land_allotment_shop_13_a: "",
      land_allotment_shop_13_b: "",
    

   
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
