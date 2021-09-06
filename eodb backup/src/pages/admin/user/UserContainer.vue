<template>
  <q-page padding>
    <div class="row flex-center">
      <q-stepper flat
                 v-model="localData.step"
                 ref="stepper"
                 color="primary"
                 contracted
      >
        <q-step
          :name="1"
          title="User info"
          icon="settings"
          :done="localData.step > 1"
        >
          <Create/>
        </q-step>
        <q-step
          :name="2"
          title="Department posting"
          icon="settings"
          :done="localData.step > 2"
        >
          <Posting/>
        </q-step>

        <template v-slot:navigation>
          <q-stepper-navigation>
            <q-btn @click="$refs.stepper.next()" color="primary" :label="localData.step === 2 ? 'Submit' : 'Continue'"/>
            <q-btn v-if="localData.step > 1" flat color="primary" @click="$refs.stepper.previous()" label="Back"
                   class="q-ml-sm"/>
          </q-stepper-navigation>
        </template>
      </q-stepper>
    </div>
  </q-page>
</template>
<script>
import {reactive} from "@vue/reactivity";
import Create from "pages/admin/user/Create";
import Posting from "pages/admin/user/Posting";

export default {
  components: {Posting, Create},
  setup(props, context) {
    const localData = reactive({
      step: 1
    })

    return {
      localData
    }
  }
}

</script>
