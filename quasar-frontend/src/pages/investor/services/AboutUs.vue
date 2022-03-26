<template>
 <div v-html="localState.content"/>
</template>

<script>
import {onMounted, reactive} from "vue";
import {useRoute} from "vue-router";
import {api} from "boot/axios";
import {useQuasar} from "quasar";

export default {
  setup(props,context) {
    const route = useRoute();
    const q = useQuasar();
    const localState=reactive({
      content:''
    })
    onMounted(()=>{
      const {deptname} = route.params;

      q.loading.show();
      api.get(`web/${deptname}/about`)
      .then(res=>{
        const {data} = res.data;
        localState.content=data?.content;
      })
      .catch(err=>{
        q.notify({type:'negative',message:err.response?.data?.message||err.toString()})
      })
      .finally(()=>q.loading.hide())

    })
    return {
      localState
    };
  },
};
</script>

<style lang="scss" scoped></style>
