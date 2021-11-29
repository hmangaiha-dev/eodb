<template>
  <div class="zcard row items-center q-col-gutter-md">
    <div class="col-12 text-h6 q-pb-none text-center">Schedule - II</div>
    <p class="col-12 text-caption q-py-none text-center">(See Rule 6A)</p>
    <div class="col-12 ztitle text-center">
      APPLICATION FOR ALLOTMENT OF INDUSTRIAL PLOT/SHET AT
    </div>
    <q-form @submit.prevent="submit" class="row">
      <div class="row q-col-gutter-lg">
        <div class="col-xs-12">
          <Part1 ref="part1Form" />
        </div>

        <div class="col-xs-12">
          <Part2 ref="part2Form" />
        </div>

        <div class="col-xs-12">
          <Document ref="documentForm" />
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
import { ref } from "vue";

import Part1 from "./Part1.vue";
import Part2 from "./Part2.vue";
import Document from "./Document.vue";
import { api } from "src/boot/axios";

const emailRegex =
  /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

export default {
  components: {
    Part1,
    Part2,
    Document,
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
    onMounted(() => {});

    return {
      part1Form,
      part2Form,
      documentForm,

      submit: () => {
        let formDatas = new FormData();

        // console.log("documents value", formData.document);

        for (let data in documentForm.value.formData) {
          console.log(
            "data value of" + data,
            documentForm.value.formData[data]
          );
          formDatas.append(`${data}`, documentForm.value.formData[data]);
        }

        const formData = {
          application_code: "CODE1",
          department_id: 1,
          fields: Object.assign(
            part1Form.value.formData,
            part2Form.value.formData
          ),
          // voters_id: documentForm.value.formData.voters_id,
          // document: Object.assign({}, documentForm.value.formData),
          document: formDatas,
        };

        console.log("formdatas document", formData.document);
        console.log("document only", formDatas);

        // return console.log("allFormData", formDatas.get('voters_id'));

        api
          .post("/applications/submit", formData)
          .then((res) => console.log("response value", res.data))
          .catch((err) => console.log("error", err));
      },
      emailRegex,

      formData,
      options: ["Google", "Facebook", "Twitter", "Apple", "Oracle"],
      maxDate: () => date.formatDate(Date.now(), "YYYY-MM-DD"),
    };
  },
};
</script>
