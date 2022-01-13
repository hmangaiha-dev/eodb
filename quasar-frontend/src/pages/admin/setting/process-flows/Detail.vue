<template>
  <q-card  class="q-pa-lg">
    <h1 class="zsubtitle">Application process flow</h1>
    <h6 class="zlabel">{{$props?.application_name}}</h6>
    <br/>
    <q-timeline color="secondary">
      <q-timeline-entry
        v-for="(mv,i) in $props?.flows"
        :key="i"
        icon="person"
      >
        <template v-slot:title>
          <p class="zlabel q-ma-xs"> {{ 'Expected holding hours ' +mv?.duration +' Hrs'}}</p>
        </template>
        <template v-slot:subtitle>
          <p class="text-primary">Step : {{i+1}} Dealing assistant :  <span class="text-black">{{ mv.dealing}}</span></p>
        </template>
      </q-timeline-entry>

    </q-timeline>
  </q-card>
</template>
<script>
export default {
  props: ['application_name','flows'],
  setup(props, context) {
    return{

    }
  }

}
</script>
