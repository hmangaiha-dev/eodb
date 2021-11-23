<template>
  <q-card  style="min-height: 150px" class="zcard ">
    <q-card-section horizontal>
      <p class="text-grey">REGNO:{{ application?.regn_no }}</p>
      <q-space/>
      <q-icon name="more_vert"/>
    </q-card-section>
    <q-card-section>
      <h1 class="zsubtitle text-primary">{{ application.application_code }}</h1>
    </q-card-section>
    <q-card-section>
      <p class="text-primary">{{ application?.remark }}</p>
    </q-card-section>
    <q-card-section>
      <p class="text-green-4 text-caption">{{ application?.remark }}</p>
    </q-card-section>

    <q-card-actions slot="actions">
      <q-btn color="primary" flat label="open" @click="$emit('open',application)"/>
    </q-card-actions>
  </q-card>
</template>
<script>
import {toRefs} from "@vue/reactivity";

export default {
  props: ['application'],
  emits: ['open'],
  setup(props, context) {
    const {application} = toRefs(props)
    return {
      application
    }
  }
}
</script>
<style scoped>

</style>
