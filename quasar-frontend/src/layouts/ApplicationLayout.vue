<template>
  <q-page class="row q-col-gutter-md q-ma-none container-lg">

    <div class="col-md-3 bg-grey-1">
      <List/>
    </div>
    <div class="col-md-9 column">
      <div style="height: 120px" class="bg-grey-2">
        <p>Application detail</p>
      </div>
      <router-view/>

    </div>
    <q-btn :to="{name:'note:create',params:{id:$route.params.id}}" fab icon="edit" color="primary" class="absolute-bottom-right q-mr-xl q-mb-xl"/>
  </q-page>

</template>

<script>
import { ref } from 'vue'
import List from "pages/admin/application/detail/notes/List";

export default {
  components: {List},
  setup () {
    const leftDrawerOpen = ref(true)

    return {
      leftDrawerOpen,
      toggleLeftDrawer () {
        leftDrawerOpen.value = !leftDrawerOpen.value
      }
    }
  }
}
</script>
