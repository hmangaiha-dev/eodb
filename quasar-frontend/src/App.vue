<template>
  <router-view />
</template>
<script>
import {defineComponent, onMounted} from 'vue';
import {api} from "boot/axios";
import axios from "axios";
import {useStore} from "vuex";

export default defineComponent({
  name: 'App',
  setup() {
    const store = useStore();
    onMounted(()=> {
      axios.get('http://164.100.124.152/sanctum/csrf-cookie')
      .then(res=>{
        store.dispatch('staffData/fetchData')
      })
    })
  }
})
</script>
