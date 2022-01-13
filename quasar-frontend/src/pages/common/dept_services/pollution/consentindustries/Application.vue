<template>
  <div class="zcard row items-center q-col-gutter-md">
    <!-- <div class="col-12 text-h6 q-pb-none text-center">Form-2</div>
    <p class="col-12 text-caption q-py-none text-center">[See Rule 3(1)]</p> -->
    <div class="col-12 text-center">
      <span class="ztitle">
        APPLICATION FOR CONSENT FOR ESTABLISHMENT OF INDUSTRIES ETC
      </span>

      <p>
        Under Section 25/26 of The Water (Prevention & Control of Pollution)
        Act, 1974
      </p>
      
      <p>
        & Section 21 of The Air (Prevention & Control of Pollution) Act, 1981
      </p>
    </div>

    <q-form @submit.prevent="" class="row">
      <div class="row q-col-gutter-lg">
        <div class="col-xs-12">
          <Form ref="applicantRef" />
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

import Form from "./Form.vue";
// import Part2 from "./Part2.vue";
// import Document from "./Document.vue";

export default {
  components: {
    Form,
    // Part2,
    // Document,
  },
  setup(props, context) {
    const store = useStore();
    // const draft = store.getters["applicantData/getCurrentDraft"];
    // const currentUser = store.getters["auth/getCurrentUser"];

    const formData = reactive({
      title: "Mr",
      name: "",
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

    return {
      options: ["Google", "Facebook", "Twitter", "Apple", "Oracle"],
      maxDate: () => date.formatDate(Date.now(), "YYYY-MM-DD"),
    };
  },
};
</script>
