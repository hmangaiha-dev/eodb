<template>
  <q-card style="min-height: 270px" class="zcard">
    <q-card-section horizontal>
      <h1 class="zsubtitle text-primary">{{file.fileno}}</h1>
      <q-space/>
      <q-space/>
      <q-icon name="more_vert"/>
    </q-card-section>
    <q-card-section>
      <p class="text-primary">{{file.subject}}</p>
    </q-card-section>
    <q-card-section>
      <p class="text-green-4 text-caption">{{file.remark}}</p>
    </q-card-section>

    <q-card-actions>
      <q-btn flat label="open"/>
      <q-btn flat label="more ..."/>
    </q-card-actions>
  </q-card>
</template>
<script>
import {toRefs} from "@vue/reactivity";

export default {
  props: ['file'],
  setup(props,context){
    const {file}=toRefs(props)
    return{
      file
    }
  }
}
</script>
<style scoped>

</style>
