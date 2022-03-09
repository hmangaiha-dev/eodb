<template>
  <q-card style="width: 450px" class="q-pa-lg">
    <q-form @submit="onSubmit" @reset="onReset">
      <h1 class="zsubtitle q-py-md">Edit</h1>

      <q-input
        v-model="formData.name"
        outlined
        label="Name"
        @blur="delete localData.errors['name']"
        :error="localData.errors.hasOwnProperty('name')"
        :error-message="localData.errors['name']?.toString()"
        :rules="[(val) => !!val || 'Name is required']"
      />

      <q-input
        v-model="formData.description"
        type="textarea"
        outlined
        label="Description"
        @blur="delete localData.errors['description']"
        :error="localData.errors.hasOwnProperty('description')"
        :error-message="localData.errors['description']?.toString()"
      />

      <q-file
      
        accept=".pdf"
        filled
        bottom-slots
        v-model="formData.attachment"
        label="Label"
        counter
        max-file-size="2048576"
        max-files="1"
        @rejected="onRejected"
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
import { computed, reactive } from "@vue/reactivity";
import { useStore } from "vuex";
import { api } from "boot/axios";
import { useQuasar } from "quasar";

export default {
  name: "act-create",
  emits: ["onCreated"],
  props: ["act"],
  setup(props, context) {
    const store = useStore();
    console.log('edit props',props.act);
    const q = useQuasar();
    const localData = reactive({
      showPassword: false,
      errors: {},
    });
    const formData = reactive({
      id: props.act.id,
      name: props.act.name,
      description: props.act.description,
      attachment: null,
      capture: props.act?.attachment?.full_path,
      original_name: props.act?.attachment?.original_name,
    });

    const onSubmit = (e) => {
      let data = new FormData();
      data.append("id", formData.id);
      data.append("name", formData.name);
      data.append("description", formData.description);
      data.append("attachment", formData.attachment);
      data.append("_method", "put");

      // return console.log(data.get('name'));

      api
        .post(`web/act-rule/${formData.id}`, data)
        .then((res) => {
          return console.log('user',res.data);
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
      formData.name = "";
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
