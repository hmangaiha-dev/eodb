<template>
  <q-page padding>
    <div class="row q-col-gutter-xs">
      <div class="col-xs-12">
        <label class="zlabel">Label</label>
        <label class="zlabel">Value</label>
      </div>
      <div class="zdetailcard col-xs-12 q-gutter-xs">
        <q-btn outline label="Verify"/>
        <q-btn outline label="Sign/Approved"/>
        <q-btn outline label="Inspect"/>
        <q-btn outline label="Reject"/>
        <q-btn outline label="Archive"/>
      </div>
    </div>
  </q-page>
</template>
<script>
import {onMounted} from "vue";
import {api} from "boot/axios";
import {useQuasar} from "quasar";
import {reactive} from "@vue/reactivity";
import {useRoute} from "vue-router";

export default {
  setup(props, context) {
    const route = useRoute();
    const q = useQuasar();
    const  localData=reactive({
      application:{}
    })
    onMounted(()=>{
      const id = route.params.id;
      api.get(`applications/${id}`)
      .then(res=>{
        const {application_code, regn_no,current_state} = res.data;
        localData.application.regn_no = regn_no;
        localData.application.application_code = application_code;
        localData.application.current_state = current_state;
      })
      .catch(err=>{
        let message =  err.response?.message || 'Something wrong'
        q.notify({type: 'negative', message})
      })
    })
    return{
      localData
    }
  }
}
</script>
