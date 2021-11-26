<template>
  <div class="zcard row items-center q-col-gutter-md">
    <div class="col-10">
      <label class="zlabel" for="name"
        >1.Diltu Hming (Hawrawppuiin ) <span class="asterisk"> *</span></label
      >
      <q-input dense outlined />
    </div>

    <div class="col-10">
      <label class="zlabel" for="name">
        2. Address <span class="asterisk"> *</span></label
      >

      <div class="row justify q-col-gutter-md q-ml-md">
        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name"
            >A.). House No.<span class="asterisk"> *</span></label
          >
          <q-input dense outlined v-model="formData.applicant_name" />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name">
            B). Hmun Bik (Street/lane)
            <span class="asterisk"> *</span></label
          >
          <q-input dense outlined v-model="formData.applicant_name" />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name"
            >C) Veng <span class="asterisk"> *</span></label
          >
          <q-input
            type="text"
            dense
            outlined
            v-model="formData.applicant_name"
          />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name"
            >D) Khua <span class="asterisk"> *</span></label
          >
          <q-input
            type="text"
            dense
            outlined
            v-model="formData.applicant_name"
          />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name"
            >E) Pin Code <span class="asterisk"> *</span></label
          >
          <q-input
            type="text"
            dense
            outlined
            v-model="formData.applicant_name"
          />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name"
            >F) Dilna Hmun Hriat Awlsamna Tur (Landmark):
            <span class="asterisk"> *</span></label
          >
          <q-input
            type="text"
            dense
            outlined
            v-model="formData.applicant_name"
          />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name"
            >G) Telephone No.<span class="asterisk"> *</span></label
          >
          <q-input
            type="text"
            dense
            outlined
            v-model="formData.applicant_name"
          />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name"
            >G) Telephone No.<span class="asterisk"> *</span></label
          >
          <q-input
            type="text"
            dense
            outlined
            v-model="formData.applicant_name"
          />
        </div>
      </div>
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="dob" type="date"
        >3.Date Of Establishment Of Workshop/factory<span class="asterisk"
          >*</span
        >
      </label>
      <q-input dense outlined />
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="gender"
        >4.Current Registration Number <span class="asterisk">*</span></label
      >
      <q-input dense outlined />
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="gender"
        >5.Registration Date <span class="asterisk">*</span></label
      >
      <q-input dense outlined />
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="gender"
        >6.Nature Of Manufacturing Activities At Present
        <span class="asterisk">*</span></label
      >
      <q-input dense outlined />
    </div>

    <div class="col-12">
      <label class="zlabel" for=""
        >7.Type Of Weights And Measures Proposed To Be Manufactured :</label
      >
      <div class="row justify q-col-gutter-md q-ml-md">
        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="gender"
            >Weights <span class="asterisk">*</span></label
          >
          <q-input  dense outlined />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="gender"
            >Measures <span class="asterisk">*</span></label
          >
          <q-input dense outlined />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="gender"
            >Weighing Instruments <span class="asterisk">*</span></label
          >
          <q-input dense outlined />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="pob"
            >Measuring Instruments With Details</label
          >
          <q-input dense outlined />
        </div>
      </div>
    </div>

    <div class="col-12">
      <label class="zlabel" for=""
        >8. The Number Of Persons Employed/proposed To Be Employed :</label
      >
      <div class="row justify q-col-gutter-md q-ml-md">
        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="gender"
            >(i) Skilled <span class="asterisk">*</span></label
          >
          <q-input  dense outlined />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="gender"
            >(ii) Semi-skilled <span class="asterisk">*</span></label
          >
          <q-input dense outlined />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="gender"
            >(iii) Unskilled <span class="asterisk">*</span></label
          >
          <q-input dense outlined />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="pob"
            >(iv) Specialist Trained In The Lines</label
          >
          <q-input dense outlined />
        </div>
      </div>
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="gender"
        >9.Monogram Or Trade Mark Intended To Be Imprinted On Weights And
        Measures To Be Manufactured <span class="asterisk">*</span></label
      >
      <q-input  dense outlined />
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="gender"
        >10.Details Of Machinery, Tools Accessories, Owned And Used For
        Manufacturing Weights Measures Etc.
        <span class="asterisk">*</span></label
      >
      <q-input  dense outlined />
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="gender"
        >11.Details Of Foundry/workshop Facilities Arranged.Whether Ownership,
        Long Term Lease Etc. <span class="asterisk">*</span></label
      >
      <q-input  dense outlined />
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="gender"
        >12.Facilities Of Steel Casting And Hardness Testing Of Vital Parts Etc
        Or Other Means. <span class="asterisk">*</span></label
      >
      <q-input  dense outlined />
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="gender"
        >13.Availability Of Electricity <span class="asterisk">*</span></label
      >
      <q-input  dense outlined />
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="gender"
        >14.Details Of Loan Received From Government Or Financial Institution.
        If So, Give Details <span class="asterisk">*</span></label
      >
      <q-input  dense outlined />
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="gender"
        >15.Name Of Bankers,if Any <span class="asterisk">*</span></label
      >
      <q-input  dense outlined />
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="gender"
        >16.VAT/ Sales Tax Registration Number/CST Number/Professional Tax
        Registration Number/IT Number <span class="asterisk">*</span></label
      >
      <q-input  dense outlined />
    </div>

    <div class="col-10">
      <label class="zlabel" for="gender"
        >17.Have You Applied Previously For A Manufacturer's Licence? If So,
        When And With What Results ? <span class="asterisk">*</span></label
      >
      <q-input  dense outlined />
    </div>

    <div class="col-12">
      <label class="zlabel" for="gender"
        >18. <span class="asterisk">*</span></label
      >
      <div class="row justify q-col-gutter-md q-ml-md">
        <div class="col-md-5 col-xs-10">
          <label class="zlabel" for="gender"
            >(i)Whether The Item (s) Proposed To Be Manufactured Will Be Sold
            Within The State Or Out Side The State Or Both
            <span class="asterisk">*</span></label
          >
          <q-input  dense outlined />
        </div>
        <div class="col-md-5 col-xs-10">
          <label class="zlabel" for="gender"
            >(ii)Details Of Model Approval Received From Government Of India;
            <span class="asterisk">*</span></label
          >
          <q-input  dense outlined />
        </div>

        <div class="col-md-7 col-xs-10">
          <label class="zlabel" for="gender"
            >(iii)When Can You Produce For Inspection Samples Of Your Products
            For Which Licence Is Desired ?
            <span class="asterisk">*</span></label
          >
          <q-input  dense outlined />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="text-weight-bold" for="gender"
            >I do hereby affirm that the informations furnished above are true
            and the documents attached herewith are genuine.
            <span class="asterisk">*</span></label
          >
        </div>
      </div>
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="gender"
        >Signature Of The Applicant <span class="asterisk">*</span></label
      >
      <q-input type="file"  dense outlined />
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
