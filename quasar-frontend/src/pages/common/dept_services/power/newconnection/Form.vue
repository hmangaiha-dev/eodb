<template>
  <div class="zcard row items-center q-col-gutter-md">
    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="name"
        >1.Name of the Applicant/Organization
        <span class="asterisk"> *</span></label
      >
      <q-input dense outlined />
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="dob" type="date"
        >2.Name of Father/ Husband/ Director/ Partner/ Trustee<span
          class="asterisk"
          >*</span
        >
      </label>
      <q-input dense outlined />
    </div>

    <div class="col-12">
      <label for="" class="zlabel">Address for communication</label>
      <div class="row justify q-col-gutter-md q-ml-md">
        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="gender">
            House/Plot/Premise No. <span class="asterisk">*</span></label
          >
          <q-input dense outlined />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="gender"
            >Street: <span class="asterisk">*</span></label
          >
          <q-input dense outlined />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="gender"
            >Area/Colony: <span class="asterisk">*</span></label
          >
          <q-input dense outlined />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="pob">District</label>
          <q-input dense outlined />
        </div>
      </div>
    </div>

    <div class="col-12">
      <label for="" class="zlabel">
        Address of where the new connection is applied for/existing connection
        is required to be shifted
      </label>
      <div class="row justify q-col-gutter-md q-ml-md">
        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="gender">
            House/Plot/Premise No. <span class="asterisk">*</span></label
          >
          <q-input dense outlined />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="gender"
            >Street: <span class="asterisk">*</span></label
          >
          <q-input dense outlined />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="gender"
            >Area/Colony: <span class="asterisk">*</span></label
          >
          <q-input dense outlined />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="pob">District</label>
          <q-input dense outlined />
        </div>
      </div>
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="gender"
        >4.Category of Supply <span class="asterisk">*</span></label
      >
      <q-input dense outlined />
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="gender"
        >5.Purpose of Supply <span class="asterisk">*</span></label
      >
      <q-input dense outlined />
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="gender"
        >6.Total Contracted Load applied for (in kW)
        <span class="asterisk">*</span></label
      >
      <q-input dense outlined />
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="gender"
        >7.Type of Supply <span class="asterisk">*</span></label
      >
      <q-radio name="supply" v-model="shape" val="line" label="Permanent" />
      <q-radio
        name="supply"
        v-model="shape"
        val="rectangle"
        label="Temporary"
      />
      <!-- <q-input dense outlined /> -->
    </div>

    <div class="col-10">
      <q-toggle
        v-model="value"
        label=">8.If Temporary supply, specify period of requirement: From (date): To
        (date)"
      />

      <div class="row items-center q-col-gutter-md">
        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="gender"
            >From (date) <span class="asterisk">*</span></label
          >
          <q-input dense outlined />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="gender"
            >To (date) <span class="asterisk">*</span></label
          >
          <q-input dense outlined />
        </div>
      </div>
    </div>

    <div class="col-10">
      <q-toggle
        v-model="value"
        label="8.Please indicate whether you want to carry out the works of laying service line and/or dedicated distribution facility
for the electricity supply requisitioned. "
      />
    </div>

    <div class="col-10">
      <q-toggle
        v-model="value"
        label="Please indicate whether you want to install your own CEA approved meter. (Yes/No) "
      />
    </div>

    <div class="col-md-6 col-xs-10">
      <q-input dense outlined v-model="text" type="file" />
    </div>

    <div class="col-12">
      <label for="" class="zlabel">
        <q-radio v-model="shape" val="line" label="For a Person" />
        <q-radio v-model="shape" val="line" label="For an Organization" />
      </label>

      <q-input dense v-model="text" type="file" />
    </div>

    <div class="col-5 text-caption">
      <span>For a person </span> <br>
      (i) Electoral identity card; <br />
      (ii) Passport; (iii) Driving license; <br />
      (iv) Ration card; <br />
      (v) Photo identity card issued by Government agency; <br />
      (vi) PAN card; <br />
      (viii) Certificate from village Pradhan/ Patwari/ Lekhpal/ village level
      worker/ village chowkidar/ Primary school teacher/ in-charge of primary
      health centre etc.
    </div>

    <div class="col-5 text-caption">
        <span>For an organization </span> <br>
      (i) Electoral identity card; <br />
      (ii) Passport; (iii) Driving license; <br />
      (iv) Ration card; <br />
      (v) Photo identity card issued by Government agency; <br />
      (vi) PAN card; <br />
      (viii) Certificate from village Pradhan/ Patwari/ Lekhpal/ village level
      worker/ village chowkidar/ Primary school teacher/ in-charge of primary
      health centre etc.
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
    onMounted(() => {});
    return {
      emailRegex,
      localData,
      formData,
      maxDate: () => date.formatDate(Date.now(), "YYYY-MM-DD"),
    };
  },
};
</script>
