<template>
  <q-page padding>
    <div class="row justify-center">
      <div class="col-xs-12 col-md-6">
       <Register @sendOtp="sendOtp"/>

      </div>
    </div>

  </q-page>
</template>
<script>
import {ref} from "vue";
import Register from "pages/public/Register";
import Otp from "pages/public/Otp";

export default {
  components: {Otp, Register},
  setup(props, context) {
    const step = ref(1);
    return {
      step,
      sendOtp:val=>console.log(val),
      verifyOtp:val=>console.log(val)
    }
  }

}
</script>
