<template>
  <q-card  style="min-height: 150px" class="zcard ">
    <q-card-section horizontal class="flex items-center">
<!--      <q-space/>-->
<!--      <q-btn class="q-pa-none" rounded flat icon="more_vert"/>-->
    </q-card-section>
    <q-card-section>
      <p class="zvalue q-ma-none">{{ application?.application_name }}</p>
      <p class="zlabel">REGNO:{{ application?.regn_no }}</p>
      <p class="text-caption">Submitted at :{{ date.formatDate(new Date(application?.created_at),'DD/MM/YYYY hh:mm a') }}</p>
    </q-card-section>
    <q-card-actions slot="actions">
      <q-btn color="primary" outline  label="open" @click="$emit('open',application)"/>
    </q-card-actions>
  </q-card>
</template>
<script>
import {toRefs} from "@vue/reactivity";
import {date} from "quasar";

export default {
  props: ['application'],
  emits: ['open'],
  setup(props, context) {
    const {application} = toRefs(props)
    return {
      application,
      date
    }
  }
}
</script>
<style scoped>

</style>
