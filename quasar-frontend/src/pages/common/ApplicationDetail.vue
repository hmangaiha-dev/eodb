<template>
  <div class="print-only" v-html="localData.template" />
  <q-page padding class="container-lg">
    <q-dialog class="print-hide" v-model="dialog">
      <q-card>
        <embed :src="attachment" width="500" height="500" />
      </q-card>
    </q-dialog>

    <br />

    <div class="q-py-md">
      <q-radio v-model="localData.state" val="submitted" label="Under Review" />
      <q-radio v-model="localData.state" val="Approved" label="Approved" />
      <q-radio v-model="localData.state" val="Reject" label="Reject" />
      <q-radio v-model="localData.state" val="Pending" label="Pending" />

      <q-btn
        class="q-ml-md"
        outline
        color="primary"
        label="Update"
        @click="updateStatus"
      />
    </div>
    <div
      style="padding: 36px; border: 1px solid #ccc"
      v-html="localData.template"
    />
    <br />
    <q-separator class="q-my-md print-hide" />
    <div class="col-12">
      <q-btn
        @click="printApplication"
        label="Print"
        outline
        class="print-hide"
      />
    </div>
    <br />
    <Attachments class="print-hide" :attachments="localData.attachment" />

    <!-- <q-radio v-model="shape" val="line" label="Pending" /> -->
  </q-page>
</template>
<script>
import { onMounted, ref } from "vue";
import { api } from "boot/axios";
import { useQuasar } from "quasar";
import { reactive } from "@vue/reactivity";
import { useRoute } from "vue-router";
import Attachments from "pages/common/attachments/Attachments";

export default {
  components: { Attachments },
  setup(props, context) {
    const route = useRoute();
    const q = useQuasar();
    const dialog = ref(false);

    const attachment = ref("");
    const localData = reactive({
      application: {},
      template: "test",
      attachment: [],
      state: "submitted",
    });

    const getPrint = (id) => {
      api
        .get(`applications/${id}/print`)
        .then((res) => {
          const { template, application, attachment } = res.data;
          localData.template = template;
          localData.application = application;
          localData.attachment = attachment;
        })
        .catch((err) =>
          q.notify({ type: "negative", message: err.response?.message || "" })
        );
    };

    const updateStatus = () => {
      const id = route.params.id;
      api
        .put(`applications/${id}/states`, {
          state: localData.state,
        })
        .then((res) => {
          q.notify({
            color: "primary",
            message: res.data.state || "State updated",
          });
        })
        .catch((err) =>
          q.notify({
            type: "negative",
            message: err.response?.data.message || "",
          })
        );
    };
    // const getAttachment = (id) => {
    //   api.get(`applications/${id}/attachments`)
    //     .then(res => {
    //       const {list} = res.data;
    //       localData.attachments = list;
    //     })
    //     .catch(err => q.notify({type: "negative", message: err.response?.message || ''}))
    // }
    onMounted(() => {
      const id = route.params.id;
      getPrint(id);
      // getAttachment(id);
    });
    return {
      localData,
      dialog,
      attachment,
      printApplication: () => window.print(),
      getFile: (path) => {
        attachment.value = "http://localhost:8000/storage/" + path;
        dialog.value = true;
        console.log("attachment", attachment.value);
      },
      updateStatus,
    };
  },
};
</script>
