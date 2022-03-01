<template>
  <q-card style="min-width: 60%" class="q-pa-lg">
    <q-form @submit="onSubmit" @reset="onReset">
      <h1 class="zsubtitle q-py-md">{{ formData.name }}</h1>

      <q-editor
        v-model="formData.content"
        :dense="$q.screen.lt.md"
        :toolbar="[
          [
            {
              label: $q.lang.editor.align,
              icon: $q.iconSet.editor.align,
              fixedLabel: true,
              list: 'only-icons',
              options: ['left', 'center', 'right', 'justify'],
            },
            {
              label: $q.lang.editor.align,
              icon: $q.iconSet.editor.align,
              fixedLabel: true,
              options: ['left', 'center', 'right', 'justify'],
            },
          ],
          ['bold', 'italic', 'strike', 'underline', 'subscript', 'superscript'],
          ['token', 'hr', 'link', 'custom_btn'],
          ['print', 'fullscreen'],
          [
            {
              label: $q.lang.editor.formatting,
              icon: $q.iconSet.editor.formatting,
              list: 'no-icons',
              options: ['p', 'h1', 'h2', 'h3', 'h4', 'h5', 'h6', 'code'],
            },
            {
              label: $q.lang.editor.fontSize,
              icon: $q.iconSet.editor.fontSize,
              fixedLabel: true,
              fixedIcon: true,
              list: 'no-icons',
              options: [
                'size-1',
                'size-2',
                'size-3',
                'size-4',
                'size-5',
                'size-6',
                'size-7',
              ],
            },
            {
              label: $q.lang.editor.defaultFont,
              icon: $q.iconSet.editor.font,
              fixedIcon: true,
              list: 'no-icons',
              options: [
                'default_font',
                'arial',
                'arial_black',
                'comic_sans',
                'courier_new',
                'impact',
                'lucida_grande',
                'times_new_roman',
                'verdana',
              ],
            },
            'removeFormat',
          ],
          ['quote', 'unordered', 'ordered', 'outdent', 'indent'],

          ['undo', 'redo'],
          ['viewsource'],
        ]"
        :fonts="{
          arial: 'Arial',
          arial_black: 'Arial Black',
          comic_sans: 'Comic Sans MS',
          courier_new: 'Courier New',
          impact: 'Impact',
          lucida_grande: 'Lucida Grande',
          times_new_roman: 'Times New Roman',
          verdana: 'Verdana',
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
    console.log("edit props", props.dept?.name);
    const store = useStore();
    const q = useQuasar();
    const localData = reactive({
      showPassword: false,
      errors: {},
    });
    const formData = reactive({
      id: props.dept?.id,
      name: props.dept?.name,
      code: props.dept?.code,
      content: props.dept?.content,
    });

    const onSubmit = (e) => {
      context.emit("onUpdated", formData);
      return;
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
