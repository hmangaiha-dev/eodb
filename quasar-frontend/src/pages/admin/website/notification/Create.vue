<template>
    <q-card style="width: 450px" class="q-pa-lg">
      <q-form @submit="onSubmit" @reset="onReset">
        <h1 class="zsubtitle q-py-md">New notification</h1>

        <q-input v-model="formData.number"
                 outlined
                 label="Notification Number"
                 @blur="delete localData.errors['number']"
                 :error="localData.errors.hasOwnProperty('number')"
                 :error-message="localData.errors['number']?.toString()"
                 :rules="[ val => !!val || 'Notification no is required' ]"
        />
        <q-input v-model="formData.issued_at"
                 outlined
                 type="date"
                 label="Notification Date"
                 @blur="delete localData.errors['issued_at']"
                 :error="localData.errors.hasOwnProperty('issued_at')"
                 :error-message="localData.errors['issued_at']?.toString()"
                 :rules="[ val => !!val || 'Date of issued is required' ]"
        />

        <q-input v-model="formData.subject"
                 outlined
                 label="Subject"
                 @blur="delete localData.errors['subject']"
                 :error="localData.errors.hasOwnProperty('subject')"
                 :error-message="localData.errors['subject']?.toString()"
                 :rules="[ val => !!val || 'Subject is required' ]"
        />

        <q-input v-model="formData.authority"
                 outlined
                 label="Authority"
                 @blur="delete localData.errors['authority']"
                 :error="localData.errors.hasOwnProperty('authority')"
                 :error-message="localData.errors['authority']?.toString()"
                 :rules="[ val => !!val || 'Authority is required' ]"
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
import {date, useQuasar} from "quasar";

export default {
  name: 'notification-create',
  emits: ['onCreated'],
  setup(props,context){
    const store = useStore();
    const q = useQuasar();
    const localData=reactive({
      showPassword:false,
      errors:{}
    })
    const formData=reactive({
      authority:'',
      issued_at:date.formatDate(Date.now(),'YYYY/MM/DD'),
      number:'',
      subject:'',
      attachment:null
    })

    const onSubmit=e=>{
      let data = new FormData();
      data.append('number',formData.number)
      data.append('issued_at',formData.issued_at)
      data.append('subject', formData.subject);
      data.append('authority',formData.authority)
      data.append('attachment', formData.attachment);

      api.post('web/notification',data)
      .then(res=>{
        q.notify({
          type:'positive',
          message:res?.data?.message
        })
        context.emit('onCreated',res.data.list)
      })
      .catch(err=>{
        q.notify({
          type:'negative',
          message:err.response?.data?.message || err.toString()
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
