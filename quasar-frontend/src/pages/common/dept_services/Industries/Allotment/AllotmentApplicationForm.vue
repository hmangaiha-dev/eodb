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
import { date, format } from "quasar";
import { ref } from "vue";

import Part1 from "./Part1.vue";
import Part2 from "./Part2.vue";
import Document from "./Document.vue";
import { api } from "src/boot/axios";

import { useQuasar } from "quasar";

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

    const $q = useQuasar();
    const store = useStore();

    var formData = reactive({
      application_code: "CODE1",
      department_id: 1,
    });
    onMounted(() => {});

    return {
      part1Form,
      part2Form,
      documentForm,

      submit: () => {
        var fields = Object.assign(
          part1Form.value.formData,
          part2Form.value.formData
        );

      //  return console.log("document check file", documentForm.value.formData);


        console.log("fields", fields);

        formData = Object.assign(formData, fields);

        formData = Object.assign(formData, documentForm.value.formData);

        // return console.log('form file check',formData);

        var formDatas = new FormData();

        for (let data in formData) {
          console.log("data value of" + data, formData[data]);
          formDatas.append(`${data}`, formData[data]);
        }
        // return

        api
          .post("/applications/submit", formDatas)
          .then((res) => {
            console.log("response value", res.data);
            $q.notify({
              message: 'Application submitted successfully',
              color: 'green'
            })
          })
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
