<template>
  <q-card style="min-width: 60%" class="q-pa-lg">
    <q-form @submit="onSubmit" @reset="onReset">
      <h1 class="zsubtitle q-py-md">{{ formData.name }}</h1>

      <!-- <q-input
        v-model="formData.name"
        outlined
        label="Name"
        @blur="delete localData.errors['name']"
        :error="localData.errors.hasOwnProperty('name')"
        :error-message="localData.errors['name']?.toString()"
        :rules="[(val) => !!val || 'Name is required']"
      /> -->

      <q-editor
        v-model="formData.content"
        :definitions="{
          bold: { label: 'Bold', icon: null, tip: '' },
        }"
      />

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
  emits: ["onUpdated"],
  props: ["dept"],
  setup(props, context) {
    // console.log('edit props',props.dept,dept_name);
    const store = useStore();
    const q = useQuasar();
    const localData = reactive({
      showPassword: false,
      errors: {},
    });
    const formData = reactive({
      id: props.dept.id,
      name: props.dept.name,
      code: props.dept.code,
      content: props.dept.content,
    });

    const onSubmit = (e) => {
      context.emit('onUpdated',formData)
      return
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
