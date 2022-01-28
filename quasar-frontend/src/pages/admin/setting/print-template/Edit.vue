<template>
  <q-page padding class="container-lg q-my-md">
    <h1 class="zsubtitle">Print template</h1>
    <p class="text-caption">{{ localData.application_name }}</p>
    <q-form @submit="submit" class="row zcard">
      <div class="col-12">
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
            options: ['left', 'center', 'right', 'justify']
          },
          {
            label: $q.lang.editor.align,
            icon: $q.iconSet.editor.align,
            fixedLabel: true,
            options: ['left', 'center', 'right', 'justify']
          }
        ],
        ['bold', 'italic', 'strike', 'underline', 'subscript', 'superscript'],
        ['token', 'hr', 'link', 'custom_btn'],
        ['print', 'fullscreen'],
        [
          {
            label: $q.lang.editor.formatting,
            icon: $q.iconSet.editor.formatting,
            list: 'no-icons',
            options: [
              'p',
              'h1',
              'h2',
              'h3',
              'h4',
              'h5',
              'h6',
              'code'
            ]
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
              'size-7'
            ]
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
              'verdana'
            ]
          },
          'removeFormat'
        ],
        ['quote', 'unordered', 'ordered', 'outdent', 'indent'],

        ['undo', 'redo'],
        ['viewsource']
      ]"
          :fonts="{
        arial: 'Arial',
        arial_black: 'Arial Black',
        comic_sans: 'Comic Sans MS',
        courier_new: 'Courier New',
        impact: 'Impact',
        lucida_grande: 'Lucida Grande',
        times_new_roman: 'Times New Roman',
        verdana: 'Verdana'
      }"
        />
      </div>
      <div class="col-12">
        <q-separator class="q-my-md"/>
      </div>
      <div class="col-12">
        <q-btn :disable="formData.content===''" type="submit" outline color="primary" label="Save"/>
      </div>
    </q-form>
  </q-page>
</template>
<script>
import {useRoute} from "vue-router";
import {useQuasar} from "quasar";
import {onMounted, reactive} from "vue";
import {api} from "boot/axios";

export default {
  name: 'create-print',
  setup(props, context) {
    const route = useRoute();
    const q = useQuasar();
    const localData = reactive({
      application_name: ''
    })
    const formData = reactive({
      content: ''
    })

    const detail=()=>{
      const {id} = route.params;
      api.get(`application-profiles/${id}/print-template`)
        .then(res => {
          localData.application = res.data;
          formData.content = res.data.print_template;
        })
        .catch(err => {

        })
    }

    onMounted(() => detail())
    const submit = () => {
      const {id} = route.params;
      api.post(`application-profiles/${id}/print-template`, formData)
        .then(res => {
          q.notify({
            type: 'positive',
            message: res.data?.message || 'Succcess'
          })
        })
        .catch(err => {
          q.notify({
            type: 'negative',
            message: err.response?.message || err.toString()
          })
        })
    }
    return {
      localData,
      formData,
      submit
    }
  }
}
</script>
