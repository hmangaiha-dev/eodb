<template>
  <q-page class="container-lg" padding>
    <h1 class="ztitle">Profile</h1>
    <br/>
    <div class="zcard row  q-col-gutter-md">
      <div class="col-xs-12 zsubtitle">Profile details</div>
      <div class="col-xs-3">Full Name</div>
      <div class="col-xs-9">
        <q-input style="max-width: 260px" v-model="profile.full_name" disable outlined dense/>
      </div>
      <div class="col-xs-3 ">Email</div>
      <div class="col-xs-9">
        <q-input style="max-width: 260px" v-model="profile.email" disable outlined dense/>
      </div>
      <div class="col-xs-3 ">Phone</div>
      <div class="col-xs-9">
        <q-input style="max-width: 260px" v-model="profile.phone" disable outlined dense/>
      </div>
      <div class="col-xs-12">
        <q-btn @click="handleEdit" color="primary" outline label="Edit profile"/>
      </div>
    </div>
  </q-page>
</template>
<script>
import {onMounted} from "@vue/runtime-core";
import {api} from "boot/axios";
import {reactive} from "@vue/reactivity";
import {useStore} from "vuex";
import {useQuasar} from "quasar";
import {useRouter} from "vue-router";

export default {
  setup(props, context) {
    const q = useQuasar();
    const router = useRouter();
    const store = useStore();
    const profile = reactive({
      full_name: '',
      email: '',
      phone: ''
    })
    onMounted(() => {
      
      api.get('investor/profile')
        .then(res => {
          // return console.log('profile info',res.data);
          const {full_name, email, phone} = res.data.data;
          profile.full_name = full_name;
          profile.email = email;
          profile.phone = phone
        })
        .catch(err => {
          console.log(err)
        })
    })
    const handleEdit=()=>{
        router.push({name:'profile:update'})
        return
      const type=store.getters['auth/getUserType'];
      if (type === 'staff') {
        router.push({name:'admin-profile:update'})
      }else{
        router.push({name:'profile:edit'})
      }
    }
    return {
      handleEdit,
      profile,
    }
  }
}
</script>
