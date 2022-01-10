<template>
  <div class="zcard row items-center q-col-gutter-md">
    <div class="col-12 text-h6 q-pb-none text-center">Schedule - II</div>
    <p class="col-12 text-caption q-py-none text-center">(See Rule 6A)</p>
    <div class="col-12 ztitle text-center">
      APPLICATION FORM FOR CLAIMING CENTRAL INTEREST SUBSIDY SCHEME
    </div>
    <q-form @submit.prevent="submit" class="row">
      <div class="row q-col-gutter-lg">
        <div class="col-xs-12">
          <Part1 ref="part1Form" />
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
import { useRouter } from 'vue-router'
import { useQuasar } from "quasar";



import { api } from "src/boot/axios";

const emailRegex =
  /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

export default {
  components: {
    Part1,
  },

  setup(props, context) {
    const part1Form = ref(null);
    const router = useRouter()
    const $q = useQuasar();



    const store = useStore();
    // const draft = store.getters["applicantData/getCurrentDraft"];
    // const currentUser = store.getters["auth/getCurrentUser"];

    const formData = reactive({});
    onMounted(() => {});

    const submit = () => {
      // return console.log('my router',myRouter);
      var formData = reactive({
        application_code: "C&E_INTEREST_SUBSIDY",
        department_id: 1,
      });

      formData = Object.assign(formData, part1Form.value.formData);

      var formDatas = new FormData();

      for (let data in formData) {
        // console.log("data value of" + data, formData[data]);
        formDatas.append(`${data}`, formData[data]);
      }

      // console.log("formData: ", formData);

      // return console.log("formDatas", formDatas);

      api
        .post("/applications/submit", formDatas)
        .then((res) => {
          console.log("response value", res.data);
          $q.notify({
            message: "Application submitted successfully",
            color: "green",
          });
          router.push({ name: "investor:ongoing" });
        })
        .catch((err) => console.log("error", err));
    };

    return {
      part1Form,
      submit,

      formData,
      options: ["Google", "Facebook", "Twitter", "Apple", "Oracle"],
      maxDate: () => date.formatDate(Date.now(), "YYYY-MM-DD"),
    };
  },
};
</script>
