<template>
  <q-page padding class="contai">
    <q-dialog v-model="dialog">
      <q-card>
        <embed :src="attachment" width="500" height="500" />
      </q-card>
    </q-dialog>

    <div class="row">
    </div>
    <div
      style="padding: 36px; border: 1px solid #ccc"
      class="row q-col-gutter-xs q-ma-lg"
    >
      <div class="col-12 ">
        Application Reference Number: <span class="text-weight-bold">{{ localData.application.id }}</span>
      </div>
      <div class="col-12">
        Submitted to: <span class="text-weight-bold">{{ localData.application?.department?.dept_name }}</span>
      </div>
      <div class="col-12">
        Reg.No.: <span class="text-weight-bold">{{ localData.application?.regn_no }}</span>
      </div>
      <div v-html="localData.template" class="col-12" />
      <div class="col-12">
        <Attachments :attachments="localData.attachment" />
      </div>

      <div class="col-12">
        <q-btn
          @click="printApplication"
          label="Print"
          outline
          class="print-hide"
        />
      </div>
    </div>

    <q-separator class="q-my-md" />
  </q-page>
</template>
<script>
import { onMounted } from "vue";
import { api } from "boot/axios";
import { useQuasar } from "quasar";
import { reactive } from "@vue/reactivity";
import { useRoute } from "vue-router";
import { useRouter } from "vue-router";
import Attachments from "../common/attachments/Attachments.vue";

import { ref } from "vue";

export default {
  components: { Attachments },
  setup(props, context) {
    const route = useRoute();
    const router = useRouter();

    const q = useQuasar();
    const dialog = ref(false);

    const attachment = ref("");
    const localData = reactive({
      application: {},
      fields: [],
      attachment: [],
      template: "",
    });
    onMounted(() => {
      const id = route.params.id;
      api
        .get(`applications/${id}/print`)
        .then((res) => {
          console.log("applicant templates", res.data);
          localData.template = res.data.template;
          localData.application = res.data.application;
          localData.attachment = res.data.attachment;
          // const {
          //   application_code,
          //   application_values,
          //   application_name,
          //   regn_no,
          //   attachments,
          // } = res.data.data;
          // localData.application.regn_no = regn_no;
          // localData.application.application_code = application_code;
          // localData.application.application_name = application_name;
          // localData.fields = application_values;
          // localData.attachments = attachments;
        })
        .catch((err) => {
          console.log("permission message", err.response.data.message);
          router.push({
            name: "unauthorised",
          });
          q.notify({
            type: "negative",
            icon: "warnings",
            message: err.response.data.message,
          });
        });
    });
    return {
      localData,
      dialog,
      route,
      router,
      attachment,
      printApplication: () => window.print(),
      getFile: (path) => {
        attachment.value = "http://localhost:8000/storage/" + path;
        dialog.value = true;
        console.log("attachment", attachment.value);
      },
    };
  },
};
</script>

<style>
.nofield {
  color: rgb(73, 71, 71);
  font-size: 18px;
  font-family: "Roboto", "Helvetica", "Arial", sans-serif;
  font-weight: 500;
}
</style>
