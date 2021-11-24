<template>
  <div @submit="submit" class="column q-pa-md q-gutter-sm">
    <p class="ztitle">{{formData.title}}</p>
    <div v-html="formData.body"></div>


  </div>

</template>
<script>
import {onMounted, ref, watch} from 'vue'
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

    const fetch=()=>{
      const id = route.params.id;
      const note = route.params.note;
      api.get(`applications/${id}/notes/${note}`)
        .then(res=>{
          console.log(res.data)
          const {title, body} = res.data;
          formData.title = title;
          formData.body = body;
        })
        .catch(err=>{
          let message = !!err?.response ? err.response?.message : err.toString()
          q.notify({type: 'negative', message})
        })
    }
    const submit=(e)=>{

    }

    onMounted(()=>fetch())
    watch(()=>route.params.note,(val,old)=>{
      if (val !== old) {
        fetch();
      }
    },{immediate:true})
    return {
      formData,
      submit
    }
  }
}
</script>
