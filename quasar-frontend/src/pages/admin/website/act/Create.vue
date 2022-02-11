<template>
    <q-card style="width: 450px" class="q-pa-lg">
      <q-form @submit="onSubmit" @reset="onReset">
        <h1 class="zsubtitle q-py-md">New Act</h1>

        <q-input v-model="formData.name"
                 outlined
                 label="Name"
                 @blur="delete localData.errors['name']"
                 :error="localData.errors.hasOwnProperty('name')"
                 :error-message="localData.errors['name']?.toString()"
                 :rules="[ val => !!val || 'Name is required' ]"
        />

        <q-input v-model="formData.description"
                 type="textarea"
                 outlined
                 label="Description"
                 @blur="delete localData.errors['description']"
                 :error="localData.errors.hasOwnProperty('description')"
                 :error-message="localData.errors['description']?.toString()"
        />
        <q-file filled bottom-slots v-model="formData.attachment" label="Label" counter max-files="1">
          <template v-slot:before>
            <q-icon name="folder_open" />
          </template>

          <template v-slot:hint>
            PDF must be less than 2mb of size
          </template>

          <template v-slot:append>
            <q-btn round dense flat icon="add" @click.stop />
          </template>
        </q-file>
        <q-separator class="q-my-md"/>

        <div class="flex-inline">
          <q-btn type="submit" flat color="primary">Save</q-btn>
          <q-btn type="reset" flat color="negative">Reset</q-btn>
        </div>
      </q-form>
    </q-card>


</template>
<script>
import {computed, reactive} from "@vue/reactivity";
import {useStore} from "vuex";
import {api} from "boot/axios";
import {useQuasar} from "quasar";

export default {
  name: 'act-create',
  emits: ['onCreated'],
  setup(props,context){
    const store = useStore();
    const q = useQuasar();
    const localData=reactive({
      showPassword:false,
      errors:{}
    })
    const formData=reactive({
      name:'',
      description:'',
      attachment:''
    })

    const onSubmit=e=>{
      let formData = new FormData();
      formData.append('name',formData.name)
      formData.append('description',formData.description)
      formData.append('attachment',formData.attachment)

      api.post('web/act',formData)
      .then(res=>{
        q.notify({
          type:'positive',
          message:res?.data?.message
        })
        context.emit('onCreated',res.data.list)
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
    const onReset=e=>{
      formData.name = '';
      formData.description = '';
      formData.attachment = null;
    }

    return{
      roles:computed(()=>store.state.staffData.roles),
      formData,
      localData,
      onReset,
      onSubmit
    }
  }
}
</script>
