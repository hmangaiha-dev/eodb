<template>
  <router-view />
</template>
<script>
import {defineComponent, onMounted} from 'vue';
import axios from "axios";
import {useStore} from "vuex";

export default defineComponent({
  name: 'App',
  setup() {
    const store = useStore();
    onMounted(()=> {
      // axios.get('http://13.235.104.152/sanctum/csrf-cookie')
      // .then(res=>{
      //   store.dispatch('staffData/fetchData')
      // })
    })
  }
})
</script>
