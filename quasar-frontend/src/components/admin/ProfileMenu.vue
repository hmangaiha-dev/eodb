<template>
  <q-list separator>

    <q-item :to="{name:'profile:read'}"   clickable>
      <q-item-label>Profile</q-item-label>
    </q-item>
<!--    <q-item :to="{name:'order-history:dashboard'}"  v-show="isAuthenticated"  clickable>-->
<!--      <q-item-label></q-item-label>-->
<!--    </q-item>-->
<!--    <q-item :to="{name:'order-history:dashboard'}"  v-show="isAuthenticated"  clickable>-->
<!--      <q-item-label>Order History</q-item-label>-->
<!--    </q-item>-->
    <q-item @click="handleLogout"   clickable>
      <q-item-label>Sign out</q-item-label>
    </q-item>

  </q-list>

</template>
<script>
import {computed} from "vue";
import {useStore} from "vuex";
import {api} from "boot/axios";
import {reactive} from "@vue/reactivity";
import {useRouter} from "vue-router";

export default {
  setup(props, context) {
    const store = useStore();
    const router = useRouter();
    const localData=reactive({
      openLogin:false,
      openSignup:false
    })
    const openSignup=() => {
      localData.openLogin = false;
      localData.openSignup = true;
    }
    const handleLogout=e=>{
      api.post('auth/logout')
        .then(res=>{
          store.dispatch('authData/setToken', null)
          store.dispatch('authData/setCurrentUser', null)
          router.replace({name:'home'})
        })
        .catch(err=>{
          console.log(err)
        })
    }
    return{
      openSignup,
      localData,
      handleLogout,
      loggedIn: val => {
        if (val) {
          localData.openLogin = false
        }
      },
      isAuthenticated:computed(()=>store.getters['authData/isAuthenticated']),

    }
  }
}
</script>
