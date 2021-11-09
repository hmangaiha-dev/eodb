<template>
  <router-view />
</template>
<script>
import {defineComponent, onMounted} from 'vue';
import {api} from "boot/axios";
import axios from "axios";

export default defineComponent({
  name: 'App',
  setup() {
    onMounted(()=>  axios.get('http://localhost:8000/sanctum/csrf-cookie')
      .then(res=>console.log(res)).catch(err=>console.log(err)))
  }
})
</script>
