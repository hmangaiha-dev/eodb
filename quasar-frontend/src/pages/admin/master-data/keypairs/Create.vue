<template>
  <q-card style="min-width: 450px" class="q-pa-lg">
    <q-form ref="formRef"  @reset.prevent="resetForm" @submit.prevent="handleSubmit">

        <h1 class='zsubtitle q-py-md'>{{title}}</h1>
        <q-input v-model="formData.value"
                 class="col-xs-12"
                 outlined
                 autofocus
                 label="Slug"
                 :error="localData.errors.hasOwnProperty('value')"
                 :error-message="localData.errors?.name?.toString()"
                 @blur="delete localData.errors['value']"
                 :rules="[
                 val=>!!val || 'Slug is required'
               ]">
      </q-input>
      <q-input v-model="formData.label"
               class="col-xs-12"
               outlined
               label="Label"
               :error="localData.errors.hasOwnProperty('label')"
               :error-message="localData.errors?.description?.toString()"
               :rules="[
                 val=>!!val || 'Label is required'
               ]"
               @blur="delete localData.errors['label']">
      </q-input>
      <div class="col-xs-12">
        <q-separator/>
      </div>
      <div class="col-xs-12">
        <q-btn flat  color="primary" type="submit" label="Save"/>
        <q-btn flat color="negative" type="reset" label="Reset"/>
      </div>
    </q-form>
  </q-card>
</template>
<script>
import {computed, reactive} from "@vue/reactivity";
import {useStore} from "vuex";
import {api} from "boot/axios";
import {useQuasar} from "quasar";
import {ref, toRefs} from "vue";

export default {
  emits: ['onCreated'],
  props: ['title','type'],
  setup(props, context) {
    const store = useStore();
    const q = useQuasar();
    const {type} = toRefs(props);
    const formRef = ref(null);
    const localData=reactive({
      errors:{}
    })
    const formData = reactive({
      label: '',
      type:type,
      value: '',
    });

    const handleSubmit = e => {
      api.post(`resources/store`,formData)
        .then(res=>{
          q.notify({
            type:'positive',
            message:res?.data?.message
          })
          context.emit('onCreated',res.data.list)
          formRef.value.resetForm();
        })
        .catch(err=>{
          if (err?.response?.data?.errors)
            localData.errors= err.response.data?.errors
          err?.response?.data?.message &&  q.notify({
            type: 'negative',
            message: err.response?.data?.message
          })
        })
    }
    const resetForm = e => {
      formData.type = 'dt';
      formData.value = '';
      formData.label = '';
    }
    return {
      localData,
      formData,
      resetForm,
      handleSubmit,
    }
  }
}
</script>
