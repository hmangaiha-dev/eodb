<template>
  <div class="row">
    <div class="flex justify-between col-12">
      <slot name="header">
        <p class="zsubtitle">Certificate</p>
        <q-space/>
        <q-btn @click="localState.openUpload=true"  outline label="Upload certificate"/>
      </slot>
    </div>
    <div class="col-12">
      <q-separator class="q-my-md"/>
    </div>
    <div class="col-12">
      <q-list separator>
        <q-item v-for="(certificate,index) in localState.certificates" :key="index">
          <q-item-section avatar>
            <q-icon name="attachment"/>
          </q-item-section>
         <q-item-section>
           <q-item-label>
             {{certificate?.name || "Certificate"}}
           </q-item-label>
         </q-item-section>
          <q-item-section side>
            <q-btn @click="downloadCert(certificate)" round icon="cloud_download"/>
          </q-item-section>
        </q-item>
      </q-list>
    </div>
    <q-dialog v-model="localState.openUpload">
      <upload-certificate @exposeList="onUploaded"/>
    </q-dialog>
  </div>
</template>
<script>
import CreateState from "pages/common/state/Create";
import {onMounted, reactive} from "vue";
import UploadCertificate from "pages/admin/application/certificate/Upload";
import {api} from "boot/axios";
import {useQuasar} from "quasar";
import {useRoute} from "vue-router";

export default {
  props: {
    id: Number
  },
  name: 'certificates',
  components: {UploadCertificate, CreateState},
  setup(props, context) {
    const q = useQuasar();
    const route = useRoute();

    const localState=reactive({
      openUpload:false,
      selected:{},
      certificates:[]
    })
    const onUploaded=list=>{
      localState.certificates = list;
      localState.openUpload=false
    }
    const downloadCert=certificate=>{
      let a=document.createElement('a');
      a.href = certificate.full_path;
      a.target = '_blank';
      a.click()
    }
    onMounted(()=>{
      const id=route.params.id;
      api.get(`applications/${id}/certificates`)
      .then(res=>{
        const {list} = res.data;
        localState.certificates = list;
      })
      .catch(err=>{
        q.notify({
          type:'negative',
          message:err.response?.message ||  err.toString()
        })
      })
    })
    return{
      downloadCert,
      onUploaded,
      localState
    }
  }
}
</script>
