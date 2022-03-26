<template>
  <q-card style="width: 450px" class="q-pa-lg">
    <q-form @submit="onSubmit" @reset="onReset">
      <h1 class="zsubtitle q-py-md">New notification</h1>

      <q-input
        v-model="formData.title"
        outlined
        label="Title"
        @blur="delete localData.errors['title']"
        :error="localData.errors.hasOwnProperty('title')"
        :error-message="localData.errors['title']?.toString()"
        :rules="[(val) => !!val || 'Notification no is required']"
      />
      <q-input
        v-model="formData.description"
        outlined
        type="textarea"
        label="Description"
        @blur="delete localData.errors['description']"
        :error="localData.errors.hasOwnProperty('description')"
        :error-message="localData.errors['description']?.toString()"
        :rules="[(val) => !!val || 'Date of issued is required']"
      />

      <q-file
        filled
        bottom-slots
        v-model="formData.attachment"
        label="Attachment"
        counter
        max-files="1"
      >
        <template v-slot:before>
          <q-icon name="folder_open" />
        </template>

        <template v-slot:hint> PDF must be less than 2mb of size </template>

        <template v-slot:append>
          <q-btn round dense flat icon="add" @click.stop />
        </template>
      </q-file>

      <div class="q-py-md text-center">
        <q-btn
          @click="handleDownload(formData.capture)"
          flat
          :label="formData.original_name"
          color="primary"
          icon="o_picture_as_pdf"
        />
      </div>
      <q-separator class="q-my-md" />

      <div class="flex-inline">
        <q-btn type="submit" flat color="primary">Save</q-btn>
        <q-btn type="reset" flat color="negative">Reset</q-btn>
      </div>
    </q-form>
  </q-card>
</template>
<script>
import { computed, reactive, onMounted } from "vue";
import { useStore } from "vuex";
import { api } from "boot/axios";
import { useQuasar } from "quasar";

export default {
  name: "act-create",
  emits: ["onCreated"],
  props: ["other"],
  setup(props, context) {
    const store = useStore();
    const q = useQuasar();
    const localData = reactive({
      showPassword: false,
      errors: {},
    });

    onMounted(() => {
      console.log("props", props);
    });
    const formData = reactive({
      id: props.other.id,
      title: props.other.title,
      description: props.other.description,
      original_name: props.other.attachment.original_name,
      capture: props.other.attachment.full_path,
      attachment: null,
    });

    const onSubmit = (e) => {
      let data = new FormData();
      data.append("id", formData.id);
      data.append("title", formData.title);
      data.append("description", formData.description);
      data.append("attachment", formData.attachment);
      data.append("_method", "put");

      // return console.log(data.get('name'));

      api
        .post(`web/other/${formData.id}`, data)
        .then((res) => {
          q.notify({
            type: "positive",
            message: res?.data?.message,
          });
          context.emit("onUpdated", res.data.list);
        })
        .catch((err) => {
          q.notify({
            type: "negative",
            message: err.response?.data?.message || err.toString(),
          });
        });
    };
    const onReset = (e) => {
      // formData.id = "";
      formData.title = "";
      formData.description = "";
      formData.attachment = null;
    };

    const handleDownload = (url) => {
      window.open(url, "_blank").focus();
      console.log(url);
    };

    return {
      roles: computed(() => store.state.staffData.roles),
      formData,
      localData,
      handleDownload,
      onReset,
      onSubmit,
      onRejected(rejectedEntries) {
        // Notify plugin needs to be installed
        // https://quasar.dev/quasar-plugins/notify#Installation
        q.notify({
          type: "negative",
          message: `${rejectedEntries.length} file(s) did not pass validation constraints`,
        });
      },
    };
  },
};
</script>
