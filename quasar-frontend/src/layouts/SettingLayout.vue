<template>
  <q-page class="row q-col-gutter-md q-ma-none container-lg">

    <div class="bg-grey-1 col-xs-12 col-md-3">
      <q-list  separator>
        <q-item :to="{name:'process-flows:read'}" clickable v-ripple>
          <q-item-section class="zlabel">Process flows</q-item-section>
        </q-item>
        <q-item :to="{name:'application-profiles:read'}" clickable v-ripple>
          <q-item-section class="zlabel">Application profiles</q-item-section>
        </q-item>
      </q-list>
    </div>
    <div class="col-xs-12 col-md-9">
        <router-view />
    </div>

  </q-page>

</template>

<script>
import { ref } from 'vue'

export default {
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
