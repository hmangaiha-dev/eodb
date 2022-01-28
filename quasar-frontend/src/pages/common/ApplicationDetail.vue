<template>
  <q-page padding class="container-lg">
    <q-dialog v-model="dialog">
      <q-card>
        <embed :src="attachment" width="500" height="500"/>
      </q-card>
    </q-dialog>

    <h6 class="zsubtitle">{{localData.application?.application_name || ''}}</h6>
    <br/>
    <br/>
      <div v-html="localData.template"/>
    <Attachments :attachments="localData.attachments"/>
    <div class="col-12">
      <q-btn @click="printApplication" label="Print"/>
    </div>
  </q-page>
</template>
<script>
import {onMounted, ref} from "vue";
import {api} from "boot/axios";
import {useQuasar} from "quasar";
import {reactive} from "@vue/reactivity";
import {useRoute} from "vue-router";
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
      template: 'test',
      attachments: [],
    });

    const getPrint = (id) => {
      api.get(`applications/${id}/print`)
        .then(res => {
          const {template, application} = res.data;
          localData.template = template;
          localData.application = application;
        })
        .catch(err => q.notify({type: "negative", message: err.response?.message || ''}))
    }
    onMounted(() => {
      const id = route.params.id;
      getPrint(id);
    });
    return {
      localData,
      dialog,
      attachment,
      printApplication: () => window.print(),
      getFile: (path) => {
        attachment.value = "http://localhost:8000/storage/" + path;
        dialog.value = true;
        console.log('attachment', attachment.value);
      },
    };
  },
};
</script>
