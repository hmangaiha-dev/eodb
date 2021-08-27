<template>
  <q-page>
      <q-drawer class="bg-primary" :model-value="open">
        test
      </q-drawer>

  </q-page>
</template>
<script>


import {ref,onMounted} from "vue";

export default {
  setup(props,context){
    const open=ref(false)
    onMounted(()=>setTimeout(()=>open.value=true,3000))
    return{
      open
    }
  }
}
</script>
