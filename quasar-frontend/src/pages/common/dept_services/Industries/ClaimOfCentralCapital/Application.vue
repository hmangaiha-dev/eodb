<template>
  <div class="zcard row items-center q-col-gutter-md">
    <div class="col-12 text-h6 q-pb-none text-center">FORM:1C</div>
    <p class="col-12 text-caption q-py-none text-center">(See Rule 6A)</p>
    <p class="col-12 q-my-none q-py-none text-center">
      APPLICATION FORM FOR CLAIMING OF CENTRAL CAPITAL INVESTMENT SUBSIDY
    </p>
   
    <p class="col-12  q-py-none text-center">SCHEME UNDER NEIIPP, 2007</p>
    <p class="col-12 text-caption q-py-none text-center">(See Rule 6A)</p>
    <p class="col-12  text-center">
     PART-I: COMMON FOR BOTH MANUFACTURING AS WELL AS SERVICE SECTORS
    </p>
    <q-form @submit.prevent="submit" class="row">
      <div class="row q-col-gutter-lg">
        <div class="col-xs-12">
          <Form ref="part1Form" />
        </div>

      </div>

      <div class="text-center q-mt-md col-12">
        <q-btn type="submit" color="green-5" label="Submit" />
        <q-btn class="q-mx-md" color="red-4" label="Reset" />
      </div>
    </q-form>
  </div>
</template>
<script>
import { reactive } from "@vue/reactivity";
import { useStore } from "vuex";
import { onMounted } from "vue";
import { date } from "quasar";
import {ref} from 'vue'
import Form from "./Form.vue";
 

import { api } from "src/boot/axios";

const emailRegex =
  /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

export default {

  components: {
    Form
  },
 
  setup(props, context) {
    const part1Form = ref(null);
    const part2Form = ref(null);
    const documentForm = ref(null);

    const store = useStore();
    // const draft = store.getters["applicantData/getCurrentDraft"];
    // const currentUser = store.getters["auth/getCurrentUser"];
 

    const formData = reactive({
      title: "Mr",
      name: "dummy name",
      dob: "",
      gender: "Male",
      father_name: "",
      mother_name: "",
      birth_place: "",
      phone_no: "",
      email: "",
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

      part1Form,
      part2Form,
      documentForm,
   

      submit: () => {
        const formData = {
          part1: Object.assign({},part1Form.value.formData),
          part2: Object.assign({},part2Form.value.formData),
          document: Object.assign({},documentForm.value.formData)

        }
        // return console.log('allFormData',formData); 
      
        api.post('/investor/store',formData)
          .then(res => console.log('response value',res.data))
          .catch(err => console.log('error',err))
      }, 
      emailRegex,
     
      formData,
      options: ["Google", "Facebook", "Twitter", "Apple", "Oracle"],
      maxDate: () => date.formatDate(Date.now(), "YYYY-MM-DD"),
    };
  },
};
</script>
