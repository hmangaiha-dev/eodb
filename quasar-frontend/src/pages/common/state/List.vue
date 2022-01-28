<template>
  <div class="row">
    <div class="flex justify-between col-12">
      <slot name="header">
        <p class="zsubtitle">Application statuses</p>

      </slot>
    </div>
    <q-btn flat @click="$refs.stepper.previous()" icon="arrow_left"/>

    <q-stepper
      flat
      v-model="localState.selected"
      ref="stepper"
      alternative-labels
      color="primary"
      animated
    >
      <q-step
        v-for="(state,i) in $props.states"
        @click="localState.selected=i"
        :name="i"
        :title="state.name"
        icon="dot"
        :done="true"
      >

        {{state.remark}}

      </q-step>
    </q-stepper>
    <q-space/>

    <q-btn flat @click="$refs.stepper.next()" icon="arrow_right"/>
  </div>
</template>
<script>
import Create from "pages/common/state/Create";
import CreateState from "pages/common/state/Create";
import {reactive} from "vue";

export default {
  props: {
    states: Array
  },
  name: 'states',
  components: {CreateState},
  setup(props, context) {
    const localState=reactive({
      selected:0
    })
    return{
      localState
    }
  }
}
</script>
