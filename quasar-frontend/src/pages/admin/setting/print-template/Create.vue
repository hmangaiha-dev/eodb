<template>
  <q-page padding class="container-lg q-my-md">
    <h1 class="zsubtitle">Create print template</h1>
    <p class="text-caption">{{localData.application_code}}</p>
    <q-form @submit="submit" class="row zcard">
      <div class="col-12">
        <q-editor
          v-model="formData.content"
          flat
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
import {reactive} from "vue";
import {api} from "boot/axios";

export default {
  name: 'create-print',
  setup(props, context) {
    const route = useRoute();
    const q = useQuasar();
    const localData=reactive({
      application_code:''
    })
    const  formData=reactive({
      content:''
    })
    const  submit=()=>{
      const {id} = route.params;
      api.post(`application-profiles/${id}/print-template`,formData)
      .then(res=>{
        q.notify({
          type:'positive',
          message:res.data?.message || 'Succcess'
        })
      })
      .catch(err=>{
        q.notify({
          type:'negative',
          message:err.response?.message || err.toString()
        })
      })
    }
    return{
      localData,
      formData,
      submit
    }
  }
}
</script>
