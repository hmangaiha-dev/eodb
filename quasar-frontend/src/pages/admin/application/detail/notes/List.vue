<template>
  <h1 class="ztitle">Notes</h1>
  <q-list title="Notes" separator>
    <q-item :to="{name:'note:detail',params:{id:$route.params.id,note:note.id}}"
            v-for="note in localData.notes"
            :key="note.id"
            clickable v-ripple>
      <q-item-section>
        <q-item-label>{{note?.title}}</q-item-label>
        <q-item-label caption>{{note?.created_at}}</q-item-label>
      </q-item-section>

    </q-item>
  </q-list>
</template>
<script>
import {useRoute} from "vue-router";
import {onMounted} from "vue";
import {api} from "boot/axios";
import {reactive} from "@vue/reactivity";

export default {
  setup(props, context) {
    const $route = useRoute();
    const localData=reactive({
      notes:[]
    })
    onMounted(()=>{
      const id = $route.params.id;
      api.get(`applications/${id}/notes`)
        .then(res => [
          localData.notes = res.data.list
        ]);
    })

    return{
      localData
    }
  }
}
</script>
