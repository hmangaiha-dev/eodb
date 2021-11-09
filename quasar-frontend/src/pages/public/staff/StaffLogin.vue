<template>
  <q-page padding class="container-lg">
    <q-form class="q-mt-lg flex justify-center" @submit="submit" @reset="reset">
      <div  style="max-width: 450px" class="zdetailcard row q-col-gutter-sm">
        <div class="col-xs-12">
          <h1 class="ztitle">Login</h1>
        </div>
        <div class="col-xs-12">
          <p class="text-caption">Please enter your staff credential</p>
        </div>
        <div class="col-xs-12">
          <label class="zlabel" for="email">Email</label>
        </div>
        <div class="col-xs-12">
          <q-input dense
                   id="email"
                   outlined
                   v-model="formData.email"
                   :error="[
                   val=> !!val || 'Email is required',
                   val=> emailRegex.test(val)  || 'Invalid email address'
                 ]"
          />
        </div>
        <div class="col-xs-12">
          <label class="zlabel" for="password">Password</label>
        </div>
        <div class="col-xs-12">
          <q-input dense
                   :type="localData.type"
                   id="password"
                   outlined
                   v-model="formData.password"
                   :error="[
                   val=> !!val || 'Password is required',
                 ]"
          >
            <template v-slot:append>
              <q-icon
                :name="localData.type==='password' ? 'visibility_off' : 'visibility'"
                class="cursor-pointer"
                @click="togglePassword"
              />
            </template>
          </q-input>
        </div>
        <div class="col-xs-12">
          <q-btn type="submit" label="login" no-caps no-wrap color="primary"/>
        </div>
      </div>

    </q-form>

  </q-page>
</template>
<script>
import {reactive} from "@vue/reactivity";
import {api} from "boot/axios";
import {useQuasar} from "quasar";
import {useStore} from "vuex";
import {useRouter} from "vue-router";
import {computed, onMounted} from "vue";

const emailRegex = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
export default {
  setup(props, context) {
    const q = useQuasar();
    const store = useStore();
    const router = useRouter();

    const localData = reactive({
      type: 'password'
    })
    const formData = reactive({
      email: '',
      password: ''
    })
    const togglePassword = () => {
      if (localData.type === 'password') {
        localData.type = 'text'
      } else {
        localData.type = 'password'
      }
    }
    const submit = () => {
      api.post('auth/staff-login', formData)
        .then(res => {
          const {token, user} = res.data;
          store.dispatch('authData/setToken',token)
          store.dispatch('authData/setCurrentUser',user)
          router.push({name: 'staff:dashboard'});

        })
        .catch(err => {
          if (err?.response?.data?.errors)
            localData.errors = err.response.data?.errors
          err?.response?.data?.message && q.notify({
            type: 'negative',
            message: err.response?.data?.message
          })
        })
    }
    const isAuthenticated=computed(()=>store.getters['authData/isAuthenticated'])

    const reset = () => {

    }
    onMounted(()=>{
      // if (store.getters['authData/isAuthenticated']) {
      //   router.back();
      // }
    })
    return {
      isAuthenticated,
      formData,
      localData,
      emailRegex,
      togglePassword,
      submit,
      reset
    }
  }
}
</script>
