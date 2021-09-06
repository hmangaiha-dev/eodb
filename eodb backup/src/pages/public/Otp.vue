<template>
  <div class="row">
    <div class="col-xs-12">
      <q-input v-model="otp"
               outlined
               label="Enter otp"
               />
      <q-space/>
      <q-btn @click="verifyOtp" label="Verify otp"/>
    </div>
  </div>
</template>
<script>
import {ref} from "vue";

export default {

  setup(props, context) {
    const otp=ref('');

    const verifyOtp=()=>{
      context.commit('verifyOtp',otp)
    }
    return{
      otp,
      verifyOtp
    }
  }
}
</script>
