<template>
  <q-page class="container-lg">
    <div class="flex flex-inline items-center">
      <h1 class='ztitle'>New role</h1>
      <q-space/>
      <q-breadcrumbs align="right" gutter="xs">
        <q-breadcrumbs-el :to="{name:'role:read'}" label="Roles" />
        <q-breadcrumbs-el label="New role" />
      </q-breadcrumbs>
    </div>
    <q-card  class="zcard q-pa-md">
      <q-form ref="formRef" @reset="resetForm" @submit="handleSubmit">

        <q-input v-model="formData.name"
                 outlined
                 autofocus
                 :error="localData.errors.hasOwnProperty('name')"
                 :error-message="localData.errors?.name?.toString()"
                 @blur="delete localData.errors['name']"
                 :rules="[
                 val=>!!val || 'Name is required'
               ]"
        />
        <q-space/>
        <q-input v-model="formData.description"
                 type="textarea"
                 outlined
                 :error="localData.errors.hasOwnProperty('description')"
                 :error-message="localData.errors?.description?.toString()"
                 @blur="delete localData.errors['description']"
        />
        <q-space/>
        <q-select
          outlined
          dropdown-icon="arrow_drop_down"
          v-model="tempPerms"
          multiple
          :options="permissions"
          use-chips
          label="Permissions"
        />
        <q-card-actions>
          <q-btn flat color="primary" type="submit" label="Save"/>
          <q-btn flat color="negative" type="reset" label="Reset"/>
        </q-card-actions>
      </q-form>
    </q-card>
  </q-page>
</template>
<script>
import {computed, reactive} from "@vue/reactivity";
import {useStore} from "vuex";
import {api} from "boot/axios";
import {useQuasar} from "quasar";
import {ref} from "vue";

export default {
  emits: ['onRoleCreated'],
  setup(props, context) {
    const store = useStore();
    const q = useQuasar();
    const formRef = ref(null);
    const localData=reactive({
      errors:{}
    })
    const tempPerms = ref([]);
    const formData = reactive({
      name: '',
      description: '',
      permissions:[]
    });

    const handleSubmit = e => {
      formData['permissions']=tempPerms.value.map(item=>item.value)
      api.post('roles',formData)
        .then(res=>{
          q.notify({
            type:'positive',
            message:res?.data?.message
          })
          e.target.reset();
        })
        .catch(err=>{
          console.log('error',err.response)
          if (err?.response?.data?.errors)
            localData.errors= err.response.data?.errors
          err?.response?.data?.message &&  q.notify({
            type: 'negative',
            message: err.response?.data?.message
          })
        })
    }
    const resetForm = e => {
      formData.name = '';
      formData.description = '';
      formData.permissions=[];
      tempPerms.value=[]
    }
    return {
      permissions:computed(()=>store.state.masterData.permissions),
      localData,
      formData,
      resetForm,
      handleSubmit,
      tempPerms,
      formRef

    }
  }
}
</script>
