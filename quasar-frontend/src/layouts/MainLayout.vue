<template>
  <q-layout view="hHh lpR fff">

    <q-header elevated class="green-bottom-border text-primary" height-hint="98">
      <q-toolbar  class="container">
        <q-btn class="lt-sm" @click="localData.openDrawer=true" flat icon="menu"/>
        <q-toolbar-title>
          <q-avatar>
            <img class="bg-primary" src="https://cdn.quasar.dev/logo-v2/svg/logo-mono-white.svg">
          </q-avatar>
          EODB
        </q-toolbar-title>
      </q-toolbar>
      <q-separator/>
      <q-toolbar class="xs-hide container q-pa-xs q-gutter-md">
        <q-btn color="primary" icon="dashboard"/>
        <q-btn-dropdown dropdown-icon="arrow_drop_down" flat color="primary" label="Administration">
          <q-list>
            <q-item clickable v-close-popup @click="onMenuItemClick('posting')">
              <q-item-section>
                <q-item-label>Posting</q-item-label>
              </q-item-section>
            </q-item>

            <q-item clickable v-close-popup @click="onMenuItemClick('staff')">
              <q-item-section>
                <q-item-label>Staff</q-item-label>
              </q-item-section>
            </q-item>
            <q-separator/>
            <q-item clickable v-close-popup @click="onMenuItemClick('office')">
              <q-item-section>
                <q-item-label>Office/Department</q-item-label>
              </q-item-section>
            </q-item>
            <q-item clickable v-close-popup @click="onMenuItemClick('role')">
              <q-item-section>
                <q-item-label>Role</q-item-label>
              </q-item-section>
            </q-item>
          </q-list>
        </q-btn-dropdown>
        <q-btn-dropdown dropdown-icon="arrow_drop_down" flat color="primary" label="Web management">
          <q-list>
            <q-item clickable v-close-popup @click="onMenuItemClick('departmentscd')">
              <q-item-section>
                <q-item-label>Department info</q-item-label>
              </q-item-section>
            </q-item>

          </q-list>
        </q-btn-dropdown>
      </q-toolbar>
    </q-header>

    <q-drawer :model-value="localData.openDrawer" @hide="localData.openDrawer=false" side="left">
      menu
    </q-drawer>
    <q-page-container>
      <router-view/>
    </q-page-container>

    <q-footer elevated class="bg-grey-8 text-white">
      <q-toolbar>
        <q-toolbar-title>
          <q-avatar>
            <img src="https://cdn.quasar.dev/logo-v2/svg/logo-mono-white.svg">
          </q-avatar>
          <div>Title</div>
        </q-toolbar-title>
      </q-toolbar>
    </q-footer>

  </q-layout>
</template>
<script>
import {useRouter} from "vue-router";
import {reactive} from "@vue/reactivity";
import {onMounted} from "@vue/runtime-core";
import {useStore} from "vuex";

export default {

  setup(props, context) {
    const router = useRouter();
    const store = useStore();
    const localData = reactive({
      openDrawer: false
    })
    const onMenuItemClick = menu => {
      switch (menu) {
        case 'posting':
          router.push('/admin/posting')
          break;
        case 'office':
          router.push('/admin/offices')
          break;
        case 'staff':
          router.push('/admin/staffs')
          break;
        case 'role':
          router.push('/admin/roles')
          break
        case 'departments':
          router.push('/admin/departments')
          break;
      }
    }
    onMounted(() => {
      store.dispatch('globalData/fetchGlobalData');
    })
    return {
      onMenuItemClick,
      localData
    }
  }
}
</script>
