<template>
  <div class="zcard row items-center q-col-gutter-md">
    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="name"
        >1. Name Of The Applicant <span class="asterisk"> *</span></label
      >
      <q-input dense outlined />
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="name"
        >2. Father's name <span class="asterisk"> *</span></label
      >
      <q-input dense outlined />
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="name"
        >3. Address (Village | Town | Station | District )
        <span class="asterisk"> *</span></label
      >
      <q-input type="textarea" dense outlined />
    </div>

    <div class="col-10">
      <label class="zlabel" for="name"
        >4. Location of trees/tree plantation:
        <span class="asterisk"> *</span></label
      >

      <div class="row justify q-col-gutter-md q-ml-md">
        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name"
            >A) Area<span class="asterisk"> *</span></label
          >
          <q-input dense outlined v-model="formData.applicant_name" />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name">
            B) Boundaries
            <span class="asterisk"> *</span></label
          >
          <q-input dense outlined v-model="formData.applicant_name" />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name"
            >C) Reference To Patta | License Of The Land
            <span class="asterisk"> *</span></label
          >
          <q-input
            type="file"
            dense
            outlined
            v-model="formData.applicant_name"
          />
        </div>
      </div>
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="name"
        >5. Species of trees/tree plantation
        <span class="asterisk"> *</span></label
      >
      <q-input dense outlined />
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="name"
        >6. Year of raising the plantation
        <span class="asterisk"> *</span></label
      >
      <q-input dense outlined />
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="name"
        >7. Reference to registration of the trees/tree plantation (enclosed
        certifies) <span class="asterisk"> *</span></label
      >
      <q-input type="file" dense outlined />
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="name">
        8. Nature of felling (viz. thinning/final felling)
        <span class="asterisk"> *</span></label
      >
      <q-input dense outlined />
    </div>

    <div class="col-12">
      <label class="zlabel" for="name"
        >9. Purpose of felling <span class="asterisk"> *</span></label
      >

      <div class="row justify q-col-gutter-md q-ml-md">
        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name"
            >A) For bona fide personal use<span class="asterisk">
              *</span
            ></label
          >
          <q-input dense outlined v-model="formData.applicant_name" />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name">
            B) For sale within Mizoram
            <span class="asterisk"> *</span></label
          >
          <q-input dense outlined v-model="formData.applicant_name" />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name">
            C) For sale outside Mizoram
            <span class="asterisk"> *</span></label
          >
          <q-input dense outlined v-model="formData.applicant_name" />
        </div>
      </div>
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="name"
        >10. No. of trees purposed to be felled
        <span class="asterisk"> *</span></label
      >
      <q-input dense outlined v-model="formData.applicant_name" />
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="name"
        >11. The route by which the felled timber will be transported
        <span class="asterisk"> *</span></label
      >
      <q-input dense outlined v-model="formData.applicant_name" />
    </div>

    <div class="col-10">
      <label class="zlabel" for="name"
        >12. Period of operation purposed (Not to exceed one year in any case)
        <span class="asterisk"> *</span></label
      >
      <q-input dense outlined v-model="formData.applicant_name" />
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="name"
        >Licence Of Land Copy
        <span class="asterisk"> *</span></label
      >
      <q-input type="file" dense outlined v-model="formData.applicant_name" />
    </div>


      <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="name"
        >Tree Plantation Certificate
        <span class="asterisk"> *</span></label
      >
      <q-input type="file" dense outlined v-model="formData.applicant_name" />
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
