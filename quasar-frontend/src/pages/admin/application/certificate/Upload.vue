<template>
  <q-card flat style="min-width: 480px">
    <q-form @submit="submitStatus" class="row q-col-gutter-md zcard">
      <h1 class="zsubtitle col-12">Update application status</h1>
      <q-input  v-model="formData.name"
                outlined
                class="col-xs-12"
                :rules="[
                val=>!!val || 'Name is required'
              ]"
                label="Name of certificate"/>
      <q-editor
        class="col-12"
        v-model="formData.remark"
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
        }],
          ['viewsource']
      ]"
      />
      <q-file filled
              class="col-xs-12"
              bottom-slots
              max-file-size="24800"
              v-model="formData.attachment"
              label="Attachment"
              counter>
        <template v-slot:hint>
          Maximum File Upload size 2mb
        </template>

        <template v-slot:append>
          <q-btn round dense flat icon="add" @click.stop />
        </template>
      </q-file>
      <div class="col-xs-12">
        <q-btn type="submit" label="Submit" color="primary"/>
      </div>
    </q-form>
  </q-card>
</template>
<script>
import {reactive} from "vue";
import {api} from "boot/axios";
import {useRoute} from "vue-router";
import {useQuasar} from "quasar";

export default {
  emits: ['exposeList'],
  name: 'upload-certificate',
  setup(props,context) {
    const route = useRoute();
    const q = useQuasar();
    const formData = reactive({
      name: '',
      remark:'',
      attachment:null
    });
    const submitStatus=e=>{
      const id = route.params.id;
      const data = new FormData();
      data.append('name', formData.name);
      data.append('remark', formData.remark);
      data.append('attachment', formData.attachment);

      api.post(`applications/${id}/certificate`,data)
        .then(res=>{
          const {list, message} = res.data
          context.emit('exposeList',list)
          q.notify({
            type:'positive',
            message:message
          })
          e?.target.reset();
        })
        .catch(err=>{
          q.notify({
            type:'negative',
            message:err.response?.message || err.toString()
          })
        })
    }
    return {
      formData,
      submitStatus
    }
  },
}
</script>
