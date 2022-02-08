<template>
  <div class="zcard row items-center q-gutter-md q-col-gutter-md">
    <div class="col-10">
      <label class="zlabel" for="name"
        >1.Name in capital (as appeared in EPIC or UID or PAN)
        <span class="asterisk"> *</span></label
      >
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.land_revenue_patta_one"
        dense
        outlined
      />
    </div>

    <div class="col-10">
      <label class="zlabel" for="name"
        >2 <span class="asterisk"> *</span></label
      >

      <div class="row justify q-col-gutter-md q-ml-md">
        <div class="col-md-6 col-xs-12">
          <label class="zlabel" for="name"
            >(a) Date Of Birth <span class="asterisk"> *</span></label
          >
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            v-model="formData.land_revenue_patta_two_a"
            dense
            outlined
          />
        </div>

        <div class="col-md-6 col-xs-12">
          <label class="zlabel" for="name"
            >(b)Present Age <span class="asterisk"> *</span></label
          >
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            v-model="formData.land_revenue_patta_two_b"
            dense
            outlined
          />
        </div>

        <div class="col-md-6 col-xs-12">
          <label class="zlabel" for="name"
            >(c) Place Of Birth <span class="asterisk"> *</span></label
          >
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            v-model="formData.land_revenue_patta_two_c"
            dense
            outlined
          />
        </div>
        <div class="col-md-6 col-xs-12">
          <label class="zlabel" for="name"
            >(d)District <span class="asterisk"> *</span></label
          >
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            v-model="formData.land_revenue_patta_two_d"
            dense
            outlined
          />
        </div>
      </div>
    </div>

    <div class="col-12">
      <label class="zlabel" for="gender"
        >3.Whether Married?If Married,name Of Husband Or Wife(In Capital
        Letters) <span class="asterisk">*</span></label
      >
      <div>
        <q-radio
          v-model="formData.land_revenue_patta_three"
          val="Yes"
          label="Yes"
        />
        <q-radio
          v-model="formData.land_revenue_patta_three"
          val="No"
          label="No"
        />
      </div>
      <div class="col-12 zlabel">
        If married, name of husband or wife (in capital letters)
        <q-input
          :rules="[(val) => (val && val.length > 0) || 'Please type something']"
          v-model="formData.land_revenue_patta_three_if_married"
          dense
          outlined
        />
      </div>
    </div>

    <div class="col-md-5 col-xs-12">
      <label class="zlabel" for="gender"
        >4.Present Address <span class="asterisk">*</span></label
      >
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.land_revenue_patta_four"
        dense
        outlined
      />
    </div>

    <div class="col-md-5 col-xs-12">
      <label class="zlabel" for="gender"
        >5.Permanent Address <span class="asterisk">*</span></label
      >
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.land_revenue_patta_five"
        dense
        outlined
      />
    </div>

    <div class="col-10">
      <label class="zlabel" for="name">6 </label>

      <div class="row justify q-col-gutter-md q-ml-md">
        <div class="col-md-6 col-xs-12">
          <label class="zlabel" for="name"
            >(a)Name Of Father <span class="asterisk"> *</span></label
          >
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            v-model="formData.land_revenue_patta_six_a"
            dense
            outlined
          />
        </div>

        <div class="col-md-6 col-xs-12">
          <label class="zlabel" for="name"
            >(b)Name Of Mother<span class="asterisk"> *</span></label
          >
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            v-model="formData.land_revenue_patta_six_b"
            dense
            outlined
          />
        </div>
      </div>
    </div>

    <div class="col-12">
      <label class="zlabel" for="">
        7.Whether Applicant Belongs To A Tribal (Mizo) As Specified In
        Sub-section (45) Of Section 2 Of The Act
      </label>
      <div>
        <q-radio
          class="zlabel"
          v-model="formData.land_revenue_patta_seven"
          val="line"
          label="Yes"
        />
        <q-radio
          class="zlabel"
          v-model="formData.land_revenue_patta_seven"
          val="line"
          label="No"
        />
      </div>
    </div>

    <div class="col-md-5 col-xs-12 zlabel">
      <label for=""
        >8.If Not Born In Mizoram, Do You Enclose Domicile Certificate Issued By
        Home Department?</label
      >

      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.land_revenue_patta_eight"
        dense
        outlined
      />
    </div>

    <div class="col-md-5 col-xs-12 zlabel">
      <label for=""
        >9.Occupation If Applicant Is Government Servant, Indicate Name Of
        Department And Designation</label
      >
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.land_revenue_patta_nine"
        dense
        outlined
      />
    </div>

    <div class="col-12 zlabel">
      <label for="">10.Exact Location/area/Veng</label>

      <!-- <div class="col-10"> -->

      <div class="row justify q-col-gutter-md q-ml-md">
        <div class="col-md-6 col-xs-12">
          <label class="zlabel" for="name"
            >(a)Survey No. <span class="asterisk"> *</span></label
          >
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            v-model="formData.land_revenue_patta_ten_a"
            dense
            outlined
          />
        </div>

        <div class="col-md-6 col-xs-12">
          <label class="zlabel" for="name"
            >(b) Plot No<span class="asterisk"> *</span></label
          >
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            v-model="formData.land_revenue_patta_ten_b"
            dense
            outlined
          />
        </div>

        <div class="col-md-6 col-xs-12">
          <label class="zlabel" for="name"
            >(c) Purpose For Use Of Land<span class="asterisk"> *</span></label
          >
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            v-model="formData.land_revenue_patta_ten_c"
            dense
            outlined
          />
        </div>

        <div class="col-md-6 col-xs-12">
          <label class="zlabel" for="name"
            >(d) Is It Town Area?<span class="asterisk"> *</span></label
          >
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            v-model="formData.land_revenue_patta_ten_d"
            dense
            outlined
          />
        </div>
      </div>
      <!-- </div> -->
    </div>

    <div class="col-12">
      <label class="zlabel" for="gender"
        >11.Name Of Village Council <span class="asterisk">*</span></label
      >
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.land_revenue_patta_eleven"
        dense
        outlined
      />
    </div>

    <div class="col-12 zlabel">
      <label for=""
        >12.Clearly Indicate Name(s) & Addresse(s) Of Immediate Neighbour
        *</label
      >

      <!-- <div class="col-10"> -->

      <div class="row justify q-col-gutter-md q-ml-md">
        <div class="col-md-6 col-xs-12">
          <label class="zlabel" for="name"
            >(a) South ( Chhim Lam ) <span class="asterisk"> *</span></label
          >
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            v-model="formData.land_revenue_patta_twelve_a"
            dense
            outlined
          />
        </div>

        <div class="col-md-6 col-xs-12">
          <label class="zlabel" for="name"
            >(b) North ( Hmar Lam )<span class="asterisk"> *</span></label
          >
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            v-model="formData.land_revenue_patta_twelve_b"
            dense
            outlined
          />
        </div>

        <div class="col-md-6 col-xs-12">
          <label class="zlabel" for="name"
            >(c) West ( Khawthlang Lam )<span class="asterisk"> *</span></label
          >
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            v-model="formData.land_revenue_patta_twelve_c"
            dense
            outlined
          />
        </div>

        <div class="col-md-6 col-xs-12">
          <label class="zlabel" for="name"
            >(d) East ( Khawchhak Lam )<span class="asterisk"> *</span></label
          >
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            v-model="formData.land_revenue_patta_twelve_d"
            dense
            outlined
          />
        </div>
      </div>
      <!-- </div> -->
    </div>

    <div class="col-md-5 col-xs-12">
      <label class="zlabel" for="gender"
        >13.Whether The Area Is Properly Cleared For Easy Movement Of Surveyors?
        <span class="asterisk">*</span></label
      >
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.land_revenue_patta_thirteen"
        dense
        outlined
      />
    </div>

    <div class="col-md-6 col-xs-12">
      <label class="zlabel" for="gender"
        >14.Whether 6 (six) Boundary Pillars As Prescribed By Revenue Department
        Are Provided For Fixing On The Day Of Survey Operation?
        <span class="asterisk">*</span></label
      >
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.land_revenue_patta_fourteen"
        dense
        outlined
      />
    </div>

    <div class="col-12">
      <label class="zlabel" for="gender"
        >15.Checklist Whether The Following Documents Are Kept Ready For
        Inspection? <span class="asterisk">*</span></label
      >
      <div>
        <q-checkbox
          left-label
          v-model="formData.land_revenue_patta_fiveteen_a"
          label="(a) House Pass Certificate"
        />
        <q-checkbox
          left-label
          v-model="formData.land_revenue_patta_fiveteen_b"
          label="(b) Tax Clearance Certificate"
        />
      </div>
    </div>

    <div class="col-12 zlabel">
      <label for="">16.Other Contact Details</label>

      <!-- <div class="col-10"> -->

      <div class="row justify q-col-gutter-md q-ml-md">
        <div class="col-md-6 col-xs-12">
          <label class="zlabel" for="name"
            >(a) Telephone Number <span class="asterisk"> *</span></label
          >
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            v-model="formData.land_revenue_patta_sixteen_a"
            dense
            outlined
          />
        </div>

        <div class="col-md-6 col-xs-12">
          <label class="zlabel" for="name"
            >(b)Email ID<span class="asterisk"> *</span></label
          >
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            v-model="formData.land_revenue_patta_sixteen_b"
            dense
            outlined
          />
        </div>
      </div>
      <!-- </div> -->
    </div>

    <div class="col-12 zlabel">
      <label for="">17</label>

      <!-- <div class="col-10"> -->

      <div class="row justify q-col-gutter-md q-ml-md">
        <div class="col-md-6 col-xs-12">
          <label class="zlabel" for="name"
            >(a) Name ( In Capital) Of Head Of Applicant’s Family As Per
            EPIC/PAN/UID ( Diltute Chhungkaw Puipa Ber Hming
            <span class="asterisk"> *</span></label
          >
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            v-model="formData.land_revenue_patta_seventeen_a"
            dense
            outlined
          />
        </div>

        <div class="col-md-6 col-xs-12">
          <label class="zlabel" for="name"
            >(b) If Name Of Head Of Family Not Indicated, Reasons ( Chhungkaw Pa
            Ber Hminga Dil A Nih Loh Chuan, A Chhan Tarlan Tur A Ni)<span
              class="asterisk"
            >
              *</span
            ></label
          >
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            v-model="formData.land_revenue_patta_seventeen_b"
            dense
            outlined
          />
        </div>
      </div>
      <!-- </div> -->
    </div>

    <div class="col-12">
      <span class="zlabel"> 18. FAMILY DETAILS (DILTU CHHUNGKUA): </span>
      <div
        v-for="i in formData.rows"
        :key="i"
        class="row justify q-col-gutter-sm q-ml-md"
      >
        <!-- {{ i }} -->
        <div class="col-sm-5 col-xs-12">
          <q-input
            label="Name as per (EPIC/PAN/UID)Hming"
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            v-model="formData.lsc_details[i - 1].name"
            dense
            outlined
          />
        </div>

        <div class="col-sm-5 col-xs-12">
          <q-input
            placeholder="Kum zat"
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            v-model="formData.lsc_details[i - 1].address"
            dense
            outlined
          />
        </div>

        <div class="col-sm-5 col-xs-12">
          <q-input
            placeholder="Hnathawh"
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            v-model="formData.lsc_details[i - 1].kum"
            dense
            outlined
          />
        </div>

        <div class="col-sm-5 col-xs-12">
          <q-input
            placeholder="Chhungkaw pa ber nen inlaichinna"
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            v-model="formData.lsc_details[i - 1].caste"
            dense
            outlined
          />
        </div>

        <div class="q-my-md q-py-none col-12">
          <hr />
        </div>
      </div>

      <div class="col-4">
        <q-btn
          color="primary"
          class="full-width"
          label="Add row"
          @click="addRow"
        />
      </div>
    </div>

    <div class="col-12">
      <label class="zlabel" for="gender"
        >19.Diltu Ngaihdanin Duhsak Bik Riauna Tur Chhan A Awm Em?<span
          class="asterisk"
          >*</span
        ></label
      >
      <q-input
        type="textarea"
        placeholder="Chhungkaw pa ber nen inlaichinna"
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.land_revenue_patta_nineteen"
        dense
        outlined
      />
    </div>

    <div class="col-12">
      <label class="zlabel" for="">
        I do hereby affirm that the informations furnished above are true and
        the documents attached herewith are genuine.
      </label>
    </div>

    <q-space />

    <div class="col-5">
      <label class="zlabel" for="gender"
        >Signature of the applicant<span class="asterisk">*</span></label
      >
      <q-file v-model="formData.land_revenue_patta_signature" outlined>
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
import { onMounted } from "vue";
import { date } from "quasar";

import { ref } from "vue";

export default {
  setup(props, context) {
    const store = useStore();
    const formData = reactive({
      application_code: "LAND_REVENUE_PATTA",
      department_id: 8,
      land_revenue_patta_one: "",
      land_revenue_patta_two: "",
      land_revenue_patta_two_a: "",
      land_revenue_patta_two_b: "",
      land_revenue_patta_two_c: "",
      land_revenue_patta_two_d: "",
      land_revenue_patta_three: "",
      land_revenue_patta_three_if_married: "",
      land_revenue_patta_four: "",
      land_revenue_patta_five: "",
      land_revenue_patta_six: "",
      land_revenue_patta_six_a: "",
      land_revenue_patta_six_b: "",
      land_revenue_patta_seven: "",
      land_revenue_patta_eight: "",
      land_revenue_patta_nine: "",
      land_revenue_patta_ten: "",
      land_revenue_patta_ten_a: "",
      land_revenue_patta_ten_b: "",
      land_revenue_patta_ten_c: "",
      land_revenue_patta_ten_d: "",
      land_revenue_patta_eleven: "",
      land_revenue_patta_twelve: "",
      land_revenue_patta_twelve_a: "",
      land_revenue_patta_twelve_b: "",
      land_revenue_patta_twelve_c: "",
      land_revenue_patta_twelve_d: "",
      land_revenue_patta_thirteen: "",
      land_revenue_patta_fourteen: "",
      land_revenue_patta_fiveteen: "",
      land_revenue_patta_fiveteen_a: "",
      land_revenue_patta_fiveteen_b: "",
      land_revenue_patta_sixteen: "",
      land_revenue_patta_sixteen_a: "",
      land_revenue_patta_sixteen_b: "",
      land_revenue_patta_seventeen: "",
      land_revenue_patta_seventeen_a: "",
      land_revenue_patta_seventeen_b: "",
      land_revenue_patta_nineteen: "",
      land_revenue_patta_signature: null,

      lsc_details: [{ name: "", address: "", kum: "", caste: "" }],
      rows: 1,
    });
    onMounted(() => {
      console.log("rows", formData.rows);
    });
    return {
      formData,
      addRow: () => {
        formData.lsc_details.push({
          name: "",
          address: "",
          kum: "",
          caste: "",
        });
        formData.rows++;
      },
      maxDate: () => date.formatDate(Date.now(), "YYYY-MM-DD"),
    };
  },
};
</script>
