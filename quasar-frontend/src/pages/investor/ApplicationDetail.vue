<template>
  <q-page padding>
    <q-dialog v-model="dialog">
      <q-card>
        <embed :src="attachment" width="500" height="500" />
      </q-card>
    </q-dialog>

    <div class="row">
      <div class="col-xs-12 ztitle">
        {{ localData.application?.application_name }}
      </div>
      
    </div>
    <div class="row q-col-gutter-xs q-ma-lg">
      <div
        :class="[item.field_value != null ? 'q-ml-md' : '']"
        v-for="(item, i) in localData.fields"
        :key="i"
        class="col-12 row"
      >
        <div
        v-html="item.field_label"
          :class="[
            item.field_value == null ? 'col-12 nofield' : 'col-6 zlabel',
          ]"
        >
          
        </div>
        <div style="align-self: flex-end;" class="col-6 zvalue">{{ item.field_value }}</div>
      </div>
    </div>

    <div class="ztitle">Attachments</div>

    <div v-for="(item, i) in localData.attachments" :key="i" class="row">
      <div v-html="item.label" class="zlabel col-4" />
        <!-- {{ item.label }} -->
      <!-- </div> -->

      <div class="zlabel col-4">
        <!-- <embed :src="pdfFile" width="500" height="500" /> -->
        <q-btn flat color="primary" label="view" @click="getFile(item.path)" />
        <!-- {{ item.path }} -->
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

import { ref } from "vue";

export default {
  setup(props, context) {
    const route = useRoute();
    const router = useRouter();

    const q = useQuasar();
    const dialog = ref(false);

    const attachment = ref("");
    const localData = reactive({
      application: {},
      fields: [],
      attachments: [],
    });
    onMounted(() => {
      const id = route.params.id;
      api
        .get(`investor/applications/${id}`)
        .then((res) => {
          // console.log('applicant details',res.data);
          const {
            application_code,
            application_values,
            application_name,
            regn_no,
            attachments,
          } = res.data.data;
          localData.application.regn_no = regn_no;
          localData.application.application_code = application_code;
          localData.application.application_name = application_name;
          localData.fields = application_values;
          localData.attachments = attachments;
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
