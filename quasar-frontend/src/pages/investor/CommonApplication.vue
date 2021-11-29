<template>
  <q-page>
    <div class="zcard row items-center q-col-gutter-md">
      <div class="col-3">
        <q-list class="zlist" bordered>
          <q-item  clickable>
            <q-item-section class="text-green text-subtitle1">1.Personal Details</q-item-section>
             <q-item-section avatar class="text-green text-caption">Completed</q-item-section>
          </q-item>
        </q-list>
      </div>

      <div class="col-3">
        <q-list class="zlist" bordered>
          <q-item clickable>
            <q-item-section class="text-green text-subtitle1">2.Firm Details</q-item-section>
             <!-- <q-item-section avatar></q-item-section> -->

          </q-item>
        </q-list>
      </div>


      
      <div class="col-3">
        <q-list class="zlist" bordered>
          <q-item clickable>
            <q-item-section class="text-green text-subtitle1">3.Project Details</q-item-section>
             <!-- <q-item-section avatar></q-item-section> -->

          </q-item>
        </q-list>
      </div>
    </div>
    <div class="zcard row items-center q-col-gutter-md">
      <h1 class="text-h6">Common Application Form</h1>
      <q-form class="row">
        <div class="row q-col-gutter-lg">
          <div class="col-xs-12">
            <PersonalDetails ref="applicantRef" />
          </div>
          <div class="col-xs-12">
            <FirmDetails ref="FirmRef" />
          </div>
        </div>
      </q-form>
    </div>
  </q-page>
</template>
<script>
import { reactive } from "@vue/reactivity";
import { useStore } from "vuex";
import { onMounted } from "vue";
import { date } from "quasar";
import { ref } from "vue";

import PersonalDetails from "./form/PersonalDetails.vue";
import FirmDetails from "./form/FirmDetails.vue";

export default {
  components: {
    PersonalDetails,
    FirmDetails,
  },
  setup(props, context) {
    const applicantRef = ref(null);
    const FirmRef = ref(null);

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
      localData,
      applicantRef,
      FirmRef,
      formData,
      options: ["Google", "Facebook", "Twitter", "Apple", "Oracle"],
      maxDate: () => date.formatDate(Date.now(), "YYYY-MM-DD"),
    };
  },
};
</script>


<style>

  .zlist {
    border-radius: 8px;
  }

</style>
