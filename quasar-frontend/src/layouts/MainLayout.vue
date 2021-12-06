<template>
  <q-layout @scroll="handleScroll" view="hHh lpR fff">

    <q-header  elevated  class="bg-white print-hide green-bottom-border text-primary" height-hint="98">
      <q-toolbar v-if="!localData.onTop"  class="container-lg">
        <q-btn class="lt-sm" @click="localData.openDrawer=true" flat icon="menu"/>
        <q-toolbar-title>
          <q-avatar>
            <img
              class="bg-primary"
              src="https://cdn.quasar.dev/logo-v2/svg/logo-mono-white.svg"
            />
          </q-avatar>
          EODB
        </q-toolbar-title>
        <q-space />
        <q-btn :to="{name:'process-flows:read'}" flat icon="settings"/>
      </q-toolbar>
      <q-separator/>
      <q-toolbar class="scroll-y xs-hide container-lg q-pa-xs q-gutter-sm">
        <q-btn :to="{name:'staff:dashboard'}" :class="$route.name==='staff:dashboard' ?'selected-btn':'' "
               flat outline label="My desk" color="primary" icon="dashboard"/>
<!--        <q-btn-dropdown no-caps dropdown-icon="arrow_drop_down" flat  label="Certificate">-->
<!--          <q-list>-->
<!--            <q-item :to="{name:'application:new'}" clickable v-close-popup>-->
<!--              <q-item-section>-->
<!--                <q-item-label>Unpaid</q-item-label>-->
<!--              </q-item-section>-->
<!--            </q-item>-->

        <!--            <q-item :to="{name:'application:verified'}" clickable v-close-popup>-->
        <!--              <q-item-section>-->
        <!--                <q-item-label>Paid</q-item-label>-->
        <!--              </q-item-section>-->
        <!--            </q-item>-->

<!--          </q-list>-->
<!--        </q-btn-dropdown>-->

        <AdminNav/>
        <q-space/>
        <q-btn-dropdown rounded icon="manage_accounts" dropdown-icon="arrow_drop_down" no-caps :label="user?.full_name" outline color="primary">
          <ProfileMenu/>
        </q-btn-dropdown>
        <q-btn v-if="localData.onTop" flat icon="settings"/>
      </q-toolbar>
    </q-header>

    <q-drawer
      :model-value="localData.openDrawer"
      @hide="localData.openDrawer = false"
      side="left"
    >
      menu
    </q-drawer>
    <q-page-container>
      <router-view />
    </q-page-container>

    <q-footer elevated class="bg-grey-8 text-white">
      <q-toolbar>
        <q-toolbar-title>
          <q-avatar>
            <img src="https://cdn.quasar.dev/logo-v2/svg/logo-mono-white.svg" />
          </q-avatar>
          <div>Title</div>
        </q-toolbar-title>
      </q-toolbar>
     <MsegFooter/>
    </q-footer>
  </q-layout>
</template>
<script>
import {useRouter} from "vue-router";
import {reactive} from "@vue/reactivity";
import {onMounted} from "@vue/runtime-core";
import {useStore} from "vuex";
import {ref} from 'vue'
import MsegFooter from "components/MsegFooter";
import AdminNav from "components/admin/AdminNav";
import {api} from "boot/axios";
import ProfileMenu from "components/admin/ProfileMenu";
import {computed} from "vue";

export default {
  components: {ProfileMenu, AdminNav, MsegFooter},
  setup(props, context) {
    const services = ref([
      {
        name: 'Industries',
        to: 'industries'
      },
      {
        name: 'Fire',
        to: 'fire'
      },
      {
        name: 'AMC',
        to: 'amc'
      },
      {
        name: 'MPCB',
        to: 'mpcb'
      },
      {
        name: 'PWD',
        to: 'pwd'
      },
      {
        name: 'Food & Drug',
        to: 'food-and-drug'
      },
      {
        name: 'UD & PA',
        to: 'ud-and-pa'
      }

    ]);
    const router = useRouter();
    const store = useStore();
    const localData = reactive({
      openDrawer: false,
      onTop:false
    })
    const onMenuItemClick = menu => {
    }

    onMounted(() => {
      store.dispatch('staffData/fetchData');
    })
    const handleScroll=e=>{
      localData.onTop = e.position;
    }
    return {
      handleScroll,
      onMenuItemClick,
      localData,
      user:computed(()=>store.state.authData?.currentUser)
    }
  }
}
</script>
<style scoped>
.selected-btn {
  background: #ffffff;
  opacity: 0.8;
  color: #94d222;
}
</style>
