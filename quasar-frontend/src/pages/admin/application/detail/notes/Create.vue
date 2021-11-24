<template>
  <q-form @submit="submit" class="column q-pa-md q-gutter-sm">
    <p class="ztitle">New note</p>
    <p class="zlabel">Title</p>
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
    <q-btn type="submit" color="primary" label="Save" outline/>
    <q-btn type="reset" class="q-ml-lg" color="negative" outline label="clear" />
  </div>
  </q-form>

</template>
<script>
import { ref } from 'vue'
import {reactive} from "@vue/reactivity";
import {api} from "boot/axios";
import {useRoute, useRouter} from "vue-router";
import {useQuasar} from "quasar";

export default {
  setup () {
    const route = useRoute();
    const router = useRouter();
    const q = useQuasar();
    const formData=reactive({
      title:"",
      body:''
    })

    const submit=(e)=>{
      const id = route.params.id;
      api.post(`applications/${id}/notes/create`)
      .then(res=>{
        const {message} = res.data;
        q.notify({type: 'positive', message})
        router.replace({name:'application:detail',params:{id}})
      })
      .catch(err=>{
        let message = !!err?.response ? err.response?.message : err.toString()
        q.notify({type: 'negative', message})
      })
    }

    return {
      formData,
      submit
    }
  }
}
</script>
