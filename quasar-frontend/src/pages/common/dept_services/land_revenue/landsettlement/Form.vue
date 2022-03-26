<template>
  <div class="zcard row items-center q-gutter-sm">
    <div class="col-sm-10 col-md-8">
      <label class="zlabel" for="name"
        >1.Name in capital (as appeared in EPIC or UID or PAN)
        <span class="asterisk"> *</span></label
      >
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.land_revenue_land_settlement_one"
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
            v-model="formData.land_revenue_land_settlement_two_a"
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
            v-model="formData.land_revenue_land_settlement_two_b"
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
            v-model="formData.land_revenue_land_settlement_two_c"
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
            v-model="formData.land_revenue_land_settlement_two_d"
            dense
            outlined
          />
        </div>
      </div>
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="pob"
        >3.Whether Married?If Married,name Of Husband Or Wife(In Capital
        Letters)</label
      >
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.land_revenue_land_settlement_three"
        dense
        outlined
      />
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="gender"
        >4.Present Address <span class="asterisk">*</span></label
      >
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.land_revenue_land_settlement_four"
        dense
        outlined
      />
    </div>

    <div class="col-md-5 col-xs-10">
      <label class="zlabel" for="gender"
        >5.Permanent Address <span class="asterisk">*</span></label
      >
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.land_revenue_land_settlement_five"
        dense
        outlined
      />
    </div>

    <div class="col-12">
      <span class="zlabel"> 6. </span>
      <div class="row justify q-col-gutter-md q-ml-md">
        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="gender"
            >(a)Name Of Father <span class="asterisk">*</span></label
          >
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            v-model="formData.land_revenue_land_settlement_six_a"
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
            v-model="formData.land_revenue_land_settlement_six_b"
            dense
            outlined
          />
        </div>
      </div>
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="pob"
        >7.Whether Applicant Belongs To A Tribal (Mizo) As Specified In
        Sub-section (45) Of Section 2 Of The Act</label
      >
    </div>

    <div class="col-md-6 col-xs-10">
      <q-radio
        v-model="formData.land_revenue_land_settlement_seven"
        val="Yes"
        label="Yes"
      />
      <q-radio
        v-model="formData.land_revenue_land_settlement_seven"
        val="No"
        label="No"
      />
    </div>

    <div class="zlabel col-md-6 col-xs-10">
      8.If Not Born In Mizoram, Do You Enclose Domicile Certificate Issued By
      Home Department?
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.land_revenue_land_settlement_eight"
        dense
        outlined
      />
    </div>

    <div class="zlabel col-md-6 col-xs-10">
      9.House Pass Number And Year
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.land_revenue_land_settlement_nine"
        dense
        outlined
      />
    </div>

    <div class="zlabel col-md-6 col-xs-10">
      10.Exact Location/area/Veng
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.land_revenue_land_settlement_ten"
        dense
        outlined
      />
    </div>

    <div class="zlabel col-md-6 col-xs-10">
      11.Name Of Village Council
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.land_revenue_land_settlement_eleven"
        dense
        outlined
      />
    </div>

    <div class="col-12 zlabel">
      12.Clearly Indicate Name(s) & Addresse(s) Of Immediate Neighbour *

      <div class="row justify q-col-gutter-md q-ml-md">
        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="gender"
            >(a) South ( Chhim Lam ) <span class="asterisk">*</span></label
          >
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            v-model="formData.land_revenue_land_settlement_twelve_a"
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
            v-model="formData.land_revenue_land_settlement_twelve_b"
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
            v-model="formData.land_revenue_land_settlement_twelve_c"
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
            v-model="formData.land_revenue_land_settlement_twelve_d"
            dense
            outlined
          />
        </div>
      </div>
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="gender"
        >13.Whether The Area Is Properly Cleared For Easy Movement Of Surveyors?
        <span class="asterisk">*</span></label
      >
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.land_revenue_land_settlement_thirteen"
        dense
        outlined
      />
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="gender"
        >14.Whether 6(six) Boundary Pillars As Prescribed By Revenue Department
        Are Provided For Fixing On The Day Of Survey Operation?
        <span class="asterisk">*</span></label
      >
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.land_revenue_land_settlement_fourteen"
        dense
        outlined
      />
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="pob">
        15.Checklist Whether The Following Documents Are Kept Ready For
        Inspection?
      </label>

      <q-checkbox
        v-model="formData.land_revenue_land_settlement_fifteen_a"
        label="(a) House Pass Certificate"
      />
      <q-checkbox
        v-model="formData.land_revenue_land_settlement_fifteen_b"
        label="(b) Tax Clearance Certificate"
      />
    </div>

    <div class="col-12 zlabel">
      16.Other Contact Details
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
              v-model="formData.land_revenue_land_settlement_sixteen_a"
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
              v-model="formData.land_revenue_land_settlement_sixteen_b"
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
        :value="formData.land_revenue_land_settlement_agreement"
        :rules="[
          (val) =>
            formData.land_revenue_land_settlement_agreement == true ||
            'Please agree the declaration',
        ]"
        borderless
        dense
      >
        <template v-slot:control>
          <q-checkbox
            class="text-caption"
            v-model="formData.land_revenue_land_settlement_agreement"
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
        v-model="formData.land_revenue_land_settlement_signature"
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
import { onMounted, watch } from "vue";
import { date } from "quasar";

export default {
  setup(props, context) {
    const store = useStore();

    const formData = reactive({
      application_code: "LAND_REVENUE_LAND_SETTLEMENT",
      department_id: 8,
      land_revenue_land_settlement_one: "",
      land_revenue_land_settlement_two: "",
      land_revenue_land_settlement_two_a: "",
      land_revenue_land_settlement_two_b: "",
      land_revenue_land_settlement_two_c: "",
      land_revenue_land_settlement_two_d: "",
      land_revenue_land_settlement_three: "",
      land_revenue_land_settlement_four: "",
      land_revenue_land_settlement_five: "",
      land_revenue_land_settlement_six: "",
      land_revenue_land_settlement_six_a: "",
      land_revenue_land_settlement_six_b: "",
      land_revenue_land_settlement_seven: "",
      land_revenue_land_settlement_eight: "",
      land_revenue_land_settlement_nine: "",
      land_revenue_land_settlement_ten: "",
      land_revenue_land_settlement_eleven: "",
      land_revenue_land_settlement_twelve: "",
      land_revenue_land_settlement_twelve_a: "",
      land_revenue_land_settlement_twelve_b: "",
      land_revenue_land_settlement_twelve_c: "",
      land_revenue_land_settlement_twelve_d: "",
      land_revenue_land_settlement_thirteen: "",
      land_revenue_land_settlement_fourteen: "",
      land_revenue_land_settlement_fifteen: "",
      land_revenue_land_settlement_fifteen_a: false,
      land_revenue_land_settlement_fifteen_b: false,
      land_revenue_land_settlement_sixteen: "",
      land_revenue_land_settlement_sixteen_a: "",
      land_revenue_land_settlement_sixteen_b: "",
      land_revenue_land_settlement_agreement: false,
      land_revenue_land_settlement_signature: null,
    });

    watch(store.state.globalData.common, () => {
      getA();
    });

    const getA = () => {
      const { applicant_name, address, email, mobile_no, city_town } =
        store.state.globalData.common.partA;

      formData.land_revenue_land_settlement_one = applicant_name;
      formData.land_revenue_land_settlement_four = address;
      formData.land_revenue_land_settlement_sixteen_b = email;
      formData.land_revenue_land_settlement_sixteen_a = mobile_no;
      formData.land_revenue_land_settlement_two_d = city_town;
    };

    onMounted(() => {});
    return {
      formData,
      getA,
      maxDate: () => date.formatDate(Date.now(), "YYYY-MM-DD"),
    };
  },
};
</script>
