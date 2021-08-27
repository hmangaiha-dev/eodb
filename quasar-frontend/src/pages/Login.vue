
<template>
  <q-page>
    <div class="row flex justify-center">
      <div class="col-sm-12 col-md-4">
        <q-card>
            <p class="text-h6">Login</p>
          <q-card-section class="q-col-gutter-lg">
            <q-input v-model="loginData.username" label="Username" outlined/>
            <q-input v-model="loginData.password" label="Password" outlined/>
          </q-card-section>
          <q-card-actions>
            <q-btn label="Login"/>
            <q-btn label="Login"/>
          </q-card-actions>
        </q-card>
        <q-form class="self-stretch">

          <div>

          </div>
        </q-form>
      </div>
    </div>

  </q-page>
</template>
<script>
import {useQuasar} from "quasar";
import {reactive} from "@vue/reactivity";

export default {
  setup(props,context){
    const q = useQuasar();
    const loginData = reactive({
      username: '',
      password: ''
    })

    return{
      loginData

    }
  }
}



</script>
