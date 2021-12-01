<template>
  <q-page padding>
    <div class="zdetailcard">
      <div class="row">
        <div class="col-xs-12 ztitle">
          {{localData.application?.application_name}}
        </div>
      </div>
      <div class="row q-col-gutter-xs q-ma-lg">
        <div  v-for="(item,i) in localData.fields" :key="i"  class="col-xs-12 row">
          <div class="col-4 zlabel">{{item.field_label}}</div>
          <div class="col-4 zvalue">{{item.field_value}}</div>
        </div>
      </div>
    </div>

    <q-separator class="q-my-md"/>
    <div class="zdetailcard col-xs-12 q-gutter-xs">
      <q-btn v-for="(action,i) in localData.actions" :name="action.value" :key="i" outline :label="action?.label"/>
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
      application: {},
      fields:[],
      actions:[]
    })
    onMounted(()=>{
      const id = route.params.id;
      api.get(`applications/${id}`)
      .then(res=>{
        const {application_code,application_values,application_name, regn_no,current_state} = res.data.data;
        localData.actions = res.data.actions;
        localData.application.regn_no = regn_no;
        localData.application.application_code = application_code;
        localData.application.application_name = application_name;
        localData.application.current_state = current_state;
        localData.fields = application_values;
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
