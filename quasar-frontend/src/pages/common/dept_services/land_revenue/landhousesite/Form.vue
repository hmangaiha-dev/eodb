<template>
  <div class="zcard row items-center q-gutter-sm">
    <div class="col-sm-10 col-md-8">
      <label class="zlabel" for="name"
        >1.Name in capital (as appeared in EPIC or UID or PAN)
        <span class="asterisk"> *</span></label
      >
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.land_revenue_land_house_one"
        dense
        outlined
      />
    </div>

    <div class="col-12">
      <span class="zlabel"> 2. </span>

      <div class="row justify q-col-gutter-md q-ml-md">
        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name"
            >(a) Date Of Birth <span class="asterisk"> *</span></label
          >
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            v-model="formData.land_revenue_land_house_two_a"
            dense
            outlined
          />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name"
            >(b)Present Age<span class="asterisk"> *</span></label
          >
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            v-model="formData.land_revenue_land_house_two_b"
            dense
            outlined
          />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name"
            >(c) Place Of Birth<span class="asterisk"> *</span></label
          >
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            v-model="formData.land_revenue_land_house_two_c"
            dense
            outlined
          />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name"
            >(d)District<span class="asterisk"> *</span></label
          >
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            v-model="formData.land_revenue_land_house_two_d"
            dense
            outlined
          />
        </div>
      </div>
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="gender"
        >3.Present Address <span class="asterisk">*</span></label
      >
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.land_revenue_land_house_three"
        dense
        outlined
      />
    </div>

    <div class="col-md-5 col-xs-10">
      <label class="zlabel" for="gender"
        >4.Permanent Address <span class="asterisk">*</span></label
      >
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.land_revenue_land_house_four"
        dense
        outlined
      />
    </div>

    <div class="col-12">
      <span class="zlabel"> 5. </span>
      <div class="row justify q-col-gutter-md q-ml-md">
        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="gender"
            >(a)Name Of Father <span class="asterisk">*</span></label
          >
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            v-model="formData.land_revenue_land_house_five_a"
            dense
            outlined
          />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="gender"
            >(b)Name Of Mother <span class="asterisk">*</span></label
          >
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            v-model="formData.land_revenue_land_house_five_b"
            dense
            outlined
          />
        </div>
      </div>
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="pob"
        >6.Whether Applicant Belongs To A Tribal (Mizo) As Specified In
        Sub-section (45) Of Section 2 Of The Act</label
      >
    </div>

    <div class="col-xs-12 col-md-2">
      <q-radio
        v-model="formData.land_revenue_land_house_six"
        val="Yes"
        label="Yes"
      />
      <q-radio
        v-model="formData.land_revenue_land_house_six"
        val="No"
        label="No"
      />
    </div>

    <div class="col-12 zlabel">
      7.If Not Born In Mizoram, Do You Enclose Domicile Certificate Issued By
      Home Department?
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.land_revenue_land_house_seven"
        dense
        outlined
      />
    </div>

    <div class="col-12 zlabel">
      8.Exact Location
      <div class="row justify q-col-gutter-md q-ml-md">
        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="dob" type="date"
            >(a)Area/Veng.<span class="asterisk">*</span>
          </label>
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            v-model="formData.land_revenue_land_house_eight_a"
            dense
            outlined
          />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="dob" type="date"
            >(b) Indicate Category:Shop Or Stall<span class="asterisk">*</span>
          </label>
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            v-model="formData.land_revenue_land_house_eight_b"
            dense
            outlined
          />
        </div>
      </div>
    </div>

    <div class="col-12 zlabel">
      9.Name Of Village Council
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.land_revenue_land_house_nine"
        dense
        outlined
      />
    </div>

    <div class="col-12 zlabel">
      10.Clearly Indicate Name(s) & Addresse(s) Of Immediate Neighbour *

      <div class="row justify q-col-gutter-md q-ml-md">
        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="gender"
            >(a) South ( Chhim Lam ) <span class="asterisk">*</span></label
          >
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            v-model="formData.land_revenue_land_house_ten_a"
            dense
            outlined
          />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="gender"
            >(b) North ( Hmar Lam )<span class="asterisk">*</span></label
          >
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            v-model="formData.land_revenue_land_house_ten_b"
            dense
            outlined
          />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="gender"
            >(c) West ( Khawthlang Lam )<span class="asterisk">*</span></label
          >
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            v-model="formData.land_revenue_land_house_ten_c"
            dense
            outlined
          />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="gender"
            >(d) East ( Khawchhak Lam )<span class="asterisk">*</span></label
          >
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            v-model="formData.land_revenue_land_house_ten_d"
            dense
            outlined
          />
        </div>
      </div>
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="gender"
        >11.Whether The Area Is Properly Cleared For Easy Movement Of Surveyors?
        <span class="asterisk">*</span></label
      >
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.land_revenue_land_house_eleven"
        dense
        outlined
      />
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="gender"
        >12.Whether 4(four) Boundary Pillars As Prescribed By Revenue Department
        Are Provided For Fixing On The Day Of Survey Operation?
        <span class="asterisk">*</span></label
      >
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.land_revenue_land_house_twelve"
        dense
        outlined
      />
    </div>

    <div class="col-12 zlabel">
      13.Other Contact Details
      <div class="row justify q-col-gutter-md q-ml-md">
        <div class="col-md-6 col-xs-10">
          <div class="col-xs-12 col-md-1">
            <label class="zlabel" for="gender"
              >(a)Telephone Number <span class="asterisk">*</span></label
            >
            <q-input
              :rules="[
                (val) => (val && val.length > 0) || 'Please type something',
              ]"
              v-model="formData.land_revenue_land_house_thirteen_a"
              dense
              outlined
            />
          </div>

          <div class="col-xs-12 col-md-1">
            <label class="zlabel" for="gender"
              >(b)Email ID <span class="asterisk">*</span></label
            >

            <q-input
              :rules="[
                (val) => (val && val.length > 0) || 'Please type something',
              ]"
              v-model="formData.land_revenue_land_house_thirteen_b"
              dense
              outlined
            />
          </div>
        </div>
      </div>
    </div>

    <div class="col-12 text-caption">
      *Notes: Hemi vengah hian a thenawmte hi an awm lo anih pawhin a ram awmna
      hmun hi chipchiar takin ziah tur a ni (In case neighbours are not present,
      clear location of land should be described).
    </div>

    <div class="col-12 text-caption">
      <q-field
        ref="toggle"
        :value="formData.land_revenue_land_house_agreement"
        :rules="[
          (val) =>
            formData.land_revenue_land_house_agreement == true ||
            'Please agree the declaration',
        ]"
        borderless
        dense
      >
        <template v-slot:control>
          <q-checkbox
            v-model="formData.land_revenue_land_house_agreement"
            label="I hereby certify that all particulars and documents are true and correct. Any incorrect particulars furnished herein will result in cancellation of settlement or allotment (A chunga sawite khi a dik vek tih ka hriattir e. Diklo a awm a nih chuan allotment emaw settlement pek tawh pawh sut leh theih a ni tih ka hre bawk e). I also hereby agree to abide by terms and conditions laid down in rule 14 & 15 of these Rules ( Rule 14 leh 15 na in a phut zawng zawngte zawm turin ka intiam a, ka zawm loh chuan House Pass pawh sut leh turin ka in tiam e)."
          />
        </template>
      </q-field>
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="gender"
        >Signature of the Applicant <span class="asterisk">*</span></label
      >
      <q-file
        :rules="[(val) => val || 'Please type something']"
        v-model="formData.land_revenue_land_house_signature"
        outlined
      >
        <template v-slot:prepend>
          <q-icon name="attach_file" />
        </template>
      </q-file>
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
      application_code: "LAND_REVENUE_LAND_HOUSE",
      department_id: 8,
      land_revenue_land_house_one: "",
      land_revenue_land_house_two: "",
      land_revenue_land_house_two_a: "",
      land_revenue_land_house_two_b: "",
      land_revenue_land_house_two_c: "",
      land_revenue_land_house_two_d: "",
      land_revenue_land_house_three: "",
      land_revenue_land_house_four: "",
      land_revenue_land_house_five: "",
      land_revenue_land_house_five_a: "",
      land_revenue_land_house_five_b: "",
      land_revenue_land_house_six: "Yes",
      land_revenue_land_house_seven: "",
      land_revenue_land_house_eight: "",
      land_revenue_land_house_eight_a: "",
      land_revenue_land_house_eight_b: "",
      land_revenue_land_house_nine: "",
      land_revenue_land_house_ten: "",
      land_revenue_land_house_ten_a: "",
      land_revenue_land_house_ten_b: "",
      land_revenue_land_house_ten_c: "",
      land_revenue_land_house_ten_d: "",
      land_revenue_land_house_eleven: "",
      land_revenue_land_house_twelve: "",
      land_revenue_land_house_thirteen: "",
      land_revenue_land_house_thirteen_a: "",
      land_revenue_land_house_thirteen_b: "",
      land_revenue_land_house_agreement: false,
      land_revenue_land_house_signature: "",
    });
    watch(store.state.globalData.common, () => {  
      getA();
    });

    const getA = () => {
      const { applicant_name, address,email,mobile_no,city_town } =
        store.state.globalData.common.partA;

      formData.land_revenue_land_house_one = applicant_name;
      formData.land_revenue_land_house_three = address;
      formData.land_revenue_land_house_thirteen_a = mobile_no;
      formData.land_revenue_land_house_thirteen_b = email;
      formData.land_revenue_land_house_two_d = city_town;

    };

    onMounted(async () => {
      getA();
    });

    
    return {
      formData,
      getA,
      maxDate: () => date.formatDate(Date.now(), "YYYY-MM-DD"),
    };
  },
};
</script>
