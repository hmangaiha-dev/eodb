<template>
  <q-form @submit="submit" class="zdetailcard column q-pa-md q-gutter-sm">
    <div class="flex justify-between">
      <p class="zlabel">{{ formData.title }}</p>
      <q-btn @click="handleDelete" :disable="$store.state.authData.currentUser.id!==formData.staff_id" flat
             color="negative" label="Delete ?"/>
    </div>
    <q-input outlined
             dense
             v-model="formData.title"
    />
    <p class="zlabel">Body</p>
    <q-editor
      v-model="formData.body"
      flat
      content-class="bg-amber-3"
      toolbar-text-color="white"
      toolbar-toggle-color="yellow-8"
      toolbar-bg="primary"
      :toolbar="[
        ['bold', 'italic', 'underline'],
        [{
          label: $q.lang.editor.formatting,
          icon: $q.iconSet.editor.formatting,
          list: 'no-icons',
          options: ['p', 'h3', 'h4', 'h5', 'h6', 'code']
        }]
      ]"
    />
    <div class="q-pa-md">
      <q-btn :disable="$store.state.authData.currentUser.id!==formData.staff_id" type="submit" color="primary"
             label="Update" outline/>
      <q-btn type="reset" class="q-ml-lg" color="negative" outline label="clear"/>
    </div>
  </q-form>

</template>
<script>
import {onMounted, watch} from 'vue'
import {reactive} from "@vue/reactivity";
import {api} from "boot/axios";
import {useRoute, useRouter} from "vue-router";
import {useQuasar} from "quasar";

export default {
  emits: ['notes'],
  setup(props, context) {
    const route = useRoute();
    const router = useRouter();
    const q = useQuasar();
    const formData = reactive({
      title: "",
      body: ''
    })

    const fetch = () => {
      const id = route.params.id;
      const note = route.params.note;
      api.get(`applications/${id}/notes/${note}`)
        .then(res => {
          console.log(res.data)
          const {title, body, staff_id, id} = res.data;

          formData.staff_id = staff_id;
          formData.title = title;
          formData.body = body;
        })
        .catch(err => {
          let message = !!err?.response ? err.response?.message : err.toString()
          q.notify({type: 'negative', message})
        })
    }
    const submit = (e) => {
      const id = route.params.id;
      const note = route.params.note;
      api.put(`applications/${id}/notes/${note}`, formData)
        .then(res => {
          const {message, list, data} = res.data;
          q.notify({type: 'positive', message})
          context.emit('notes', list);
        })
        .catch(err => {
          let message = err.response?.message || 'Something wrong'
          q.notify({type: 'negative', message})
        })
    }
    const handleDelete = () => {
      const id = route.params.id;
      const note = route.params.note;
      api.delete(`applications/${id}/notes/${note}`)
        .then(res => {
          const {message, list, data} = res.data;
          q.notify({type: 'positive', message})
          context.emit('notes', list);
          router.replace({name: 'note:create', params: {id:id}})
        })
        .catch(err => {
          let message = err.response?.message || 'Something wrong'
          q.notify({type: 'negative', message})
        })

    }

    onMounted(() => fetch())
    watch(() => route.params.note, (val, old) => {
      if (val !== old) {
        fetch();
      }
    }, {immediate: true})
    return {
      formData,
      submit,
      handleDelete
    }
  }
}
</script>
