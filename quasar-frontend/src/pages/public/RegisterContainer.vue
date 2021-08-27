<template>
  <q-page padding>
    <div class="row justify-center">
      <div class="col-xs-12 col-md-6">
        <q-stepper
          v-model="step"
          ref="stepper"
          color="primary"
          animated
        >
          <q-step
            :name="1"
            title="Select campaign settings"
            icon="settings"
            :done="step > 1"
          >
            <Register @sendOtp="sendOtp"/>
          </q-step>
          <q-step
            :name="2"
            title="Select campaign settings"
            icon="settings"
            :done="step > 2"
          >
            <Otp @verifyOtp="verifyOtp"/>
          </q-step>
          <template v-slot:navigation>
            <q-stepper-navigation>
              <q-btn @click="$refs.stepper.next()" color="primary" :label="step === 4 ? 'Finish' : 'Continue'"/>
              <q-btn v-if="step > 1" flat color="primary" @click="$refs.stepper.previous()" label="Back"
                     class="q-ml-sm"/>
            </q-stepper-navigation>
          </template>
        </q-stepper>

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
