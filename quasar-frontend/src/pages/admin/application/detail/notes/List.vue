<template>
  <h1 class="zsubtitle q-ma-md">Notes</h1>
  <q-list title="Notes" separator>
    <q-item :to="{name:'note:detail',params:{id:$route.params.id,note:note.id}}"
            v-for="note in $props.notes"
            :key="note.id"
            clickable v-ripple>
      <q-item-section>
        <q-item-label>{{note?.title}}</q-item-label>
        <q-item-label caption>{{note?.written_by}}</q-item-label>
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
  props: ['notes'],
  setup(props, context) {
    const $route = useRoute();

    return{

    }
  }
}
</script>
