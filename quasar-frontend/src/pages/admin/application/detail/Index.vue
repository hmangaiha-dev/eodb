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
          :class="[
            item.field_value == null ? 'col-12 nofield' : 'col-6 zlabel',
          ]"
        >
          {{ item.field_label }}
        </div>
        <div class="col-6 zvalue">{{ item.field_value }}</div>
      </div>
    </div>
    <Attachments :attachments="localData.attachments"/>

<!--    <div class="ztitle">Attachments</div>-->

<!--    <div v-for="(item, i) in localData.attachments" :key="i" class="row">-->
<!--      <div class="zlabel col-4">-->
<!--        {{ item.label }}-->
<!--      </div>-->

<!--      <div class="zlabel col-4">-->
<!--        &lt;!&ndash; <embed :src="pdfFile" width="500" height="500" /> &ndash;&gt;-->
<!--        <q-btn-->
<!--        flat-->
<!--          color="primary"-->

<!--          label="view"-->
<!--          @click="getFile(item.path)"-->
<!--        />-->
<!--        &lt;!&ndash; {{ item.path }} &ndash;&gt;-->
<!--      </div>-->
<!--    </div>-->
<!--    <q-separator class="q-my-md" />-->
<!--    <div class="zcard col-xs-12 q-gutter-xs">-->
<!--      <q-btn-->
<!--        v-for="(action, i) in localData.actions"-->
<!--        :name="action.value"-->
<!--        :key="i"-->
<!--        outline-->
<!--        :label="action?.label"-->
<!--      />-->
<!--    </div>-->
  </q-page>
</template>
<script>
import { onMounted } from "vue";
import { api } from "boot/axios";
import { useQuasar } from "quasar";
import { reactive } from "@vue/reactivity";
import { useRoute } from "vue-router";
import { ref } from "vue";
import Attachments from "pages/common/attachments/Attachments";

export default {
  components: {Attachments},
  setup(props, context) {
    const route = useRoute();
    const q = useQuasar();
    const dialog = ref(false);

    const attachment = ref('');
    const localData = reactive({
      application: {},
      fields: [],
      actions: [],
      attachments: [],
    });
    onMounted(() => {
      const id = route.params.id;
      api
        .get(`applications/${id}`)
        .then((res) => {
          // console.log('applicant details',res.data);
          const {
            application_code,
            application_values,
            application_name,
            regn_no,
            current_state,
            attachments,
          } = res.data.data;
          localData.actions = res.data.actions;
          localData.application.regn_no = regn_no;
          localData.application.application_code = application_code;
          localData.application.application_name = application_name;
          localData.application.current_state = current_state;
          localData.fields = application_values;
          localData.attachments = attachments;
        })
        .catch((err) => {
          let message = err.response?.message || "Something wrong";
          q.notify({ type: "negative", message });
        });
    });
    return {
      localData,
      dialog,
      attachment,
      getFile: (path) => {
        attachment.value = "http://localhost:8000/storage/" + path;
        dialog.value = true;
        console.log('attachment',attachment.value);
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
