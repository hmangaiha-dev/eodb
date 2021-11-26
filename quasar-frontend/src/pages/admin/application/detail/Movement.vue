<template>
  <div class="q-pa-lg">
    <h1 class="zsubtitle">Application movements</h1>
    <br/>
    <q-timeline color="secondary">
      <q-timeline-entry
        v-for="(mv,i) in $props.movements"
        :title="mv?.staff_name"
        :key="i"
        :subtitle="'Received at ' +mv?.received_at"
      >
        <p class="zlabel">Holding hour :<span class="zvalue">{{mv.duration}} </span> hrs</p>

      </q-timeline-entry>

    </q-timeline>
  </div>
</template>
<script>
export default {
  props: ['movements'],
  setup(props, context) {
    return{

    }
  }

}
</script>
