<template>
  <div class="zcard row items-center q-col-gutter-md">
    <div class="col-xs-12 zsubtitle">Firm details</div>
    <div class="col-xs-12 col-md-2">
      <label class="zlabel" for="name"
        >Applicant for <span class="asterisk"> *</span></label
      >
    </div>
    <div class="col-xs-12 col-md-4">
      <q-select
        dropdown-icon="expand_more"
        outlined
        
        :options="options"
      />
    </div>

    <div class="col-xs-12 col-md-2">
      <label class="zlabel" for="dob" type="date"
        >Applicant photo<span class="asterisk">*</span>
      </label>
    </div>
    <div class="col-xs-12 col-md-4">
      <q-file outlined >
        <template v-slot:prepend>
          <q-icon name="attach_file" />
        </template>
      </q-file>
    </div>

    <div class="col-xs-12 col-md-2">
      <label class="zlabel" for="gender"
        >Applicant name <span class="asterisk">*</span></label
      >
    </div>
    <div class="col-xs-12 col-md-4">
      <q-input outlined v-model="formData.birth_place" />
    </div>
    <div class="col-xs-12 col-md-2">
      <label class="zlabel" for="pob">Applicant belongs to</label>
    </div>

    <div class="col-xs-12 col-md-4">
      <q-select
        dropdown-icon="expand_more"
        outlined
        
        :options="options"
      />
    </div>

    <div class="col-12">
      <label class="text-bold" for="pob">Correspondance Addres</label>
    </div>

    <div class="col-xs-12 col-md-2">
      <label class="zlabel" for="fname"
        >Country<span class="asterisk">*</span></label
      >
    </div>
    <div class="col-xs-12 col-md-4">
      <q-input
        id="fname"
        v-model="formData.father_name"
        :rules="[(val) => !!val?.trim() || 'Fathers name is required ']"
        dense
        item-aligned
        outlined
        @blur="onFathernameBlur"
      />
    </div>
    <div class="col-xs-12 col-md-2">
      <label class="zlabel" for="mname">State</label>
    </div>
    <div class="col-xs-12 col-md-4">
      <q-input
        id="mname"
        v-model="formData.mother_name"
        :rules="[]"
        dense
        item-aligned
        outlined
        @blur="onMothernameBlur"
      />
    </div>
    <div class="col-xs-12 col-md-2">
      <label class="zlabel" for="mobile"
        >City/Town<span class="asterisk">*</span></label
      >
    </div>
    <div class="col-xs-12 col-md-4">
      <q-input
        id="mobile"
        v-model="formData.phone_no"
        mask="##########"
        :rules="[
          (val) => !!val?.trim() || 'Mobile no is required ',
          (val) => val.match(/^\d{10}$/) || 'Mobile no must be 10 digit no ',
        ]"
        dense
        item-aligned
        outlined
      />
    </div>

    <div class="col-xs-12 col-md-2">
      <label class="zlabel" for="email">Postal code/Zip code</label>
    </div>
    <div class="col-xs-12 col-md-4">
      <q-input
        id="email"
        v-model="formData.email"
        dense
        :rules="[
          (val) => {
            if (val === '') {
              return true;
            } else {
              if (emailRegex.test(val)) {
                return true;
              } else {
                return 'Invalid email format';
              }
            }
          },
        ]"
        item-aligned
        outlined
      />
    </div>

    <div class="col-xs-12 col-md-2">
      <label class="zlabel" for="adar">Address</label>
    </div>
    <!--    hint="Adhaar no will be used to match the records of your Digilocker AC"-->

    <div class="col-xs-12 col-md-4">
      <q-input
        id="adar"
        v-model="formData.aadhaar_no"
        dense
        item-aligned
        mask="############"
        :rules="[
          (val) => {
            if (val === '') {
              return true;
            } else {
              if (val?.length !== 12) return 'Invalid aadhaar no';
              else return true;
            }
          },
        ]"
        outlined
      />
    </div>

    <div class="col-xs-12 col-md-2">
      <label class="zlabel" for="adar">Phone number</label>
    </div>

    <div class="col-xs-12 col-md-4">
      <q-input
        id="adar"
        v-model="formData.aadhaar_no"
        dense
        item-aligned
        mask="############"
        :rules="[
          (val) => {
            if (val === '') {
              return true;
            } else {
              if (val?.length !== 12) return 'Invalid aadhaar no';
              else return true;
            }
          },
        ]"
        outlined
      />
    </div>

    <div class="col-xs-12 col-md-2">
      <label class="zlabel" for="adar">Fax number</label>
    </div>

    <div class="col-xs-12 col-md-4">
      <q-input
        id="adar"
        v-model="formData.aadhaar_no"
        dense
        item-aligned
        mask="############"
        :rules="[
          (val) => {
            if (val === '') {
              return true;
            } else {
              if (val?.length !== 12) return 'Invalid aadhaar no';
              else return true;
            }
          },
        ]"
        outlined
      />
    </div>

    <div class="col-xs-12 col-md-2">
      <label class="zlabel" for="adar">Email id</label>
    </div>

    <div class="col-xs-12 col-md-4">
      <q-input
        id="adar"
        v-model="formData.aadhaar_no"
        dense
        item-aligned
        mask="############"
        :rules="[
          (val) => {
            if (val === '') {
              return true;
            } else {
              if (val?.length !== 12) return 'Invalid aadhaar no';
              else return true;
            }
          },
        ]"
        outlined
      />
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
