<template>
  <q-layout @scroll="handleScroll" view="hHh lpR fff">

    <q-header elevated class="bg-primary text-white print-hide green-bottom-border" height-hint="98">
      <q-toolbar v-if="!localData.onTop">
        <q-btn class="lt-sm" @click="localData.openDrawer=true" flat icon="menu"/>

        <q-toolbar-title class="q-mt-md q-pl-lg q-mb-none"
        ><span class="q-pb-none">Ease of Doing Business</span>
          <p class="mizoram q-pt-none text-caption">Mizoram</p>
        </q-toolbar-title>
        <q-space/>
        <q-btn :to="{name:'process-flows:read'}" flat icon="settings"/>
      </q-toolbar>
      <q-separator/>

    </q-header>

    <q-drawer
      :model-value="localData.openDrawer"
      @hide="localData.openDrawer = false"
      side="left"
      class="right-border q-pa-sm q-mr-lg shadow-7"
    >

      <q-list separator class="scroll-y bg-white">
        <q-item  class="lt-sm q-py-md">
          <Logo class="cursor-pointer" @click="$router.push({name:'home'})"/>
        </q-item>
        <q-item active-class="active-profile"
                exact
                :active="$route.name==='profile:read' || $route.name==='profile:edit'"
                clickable :to="{name:'profile:read'}"
                class="profile"
        >
          <q-item-section avatar>
            <q-icon name="person_outline"/>
          </q-item-section>
          <q-item-section>
            <q-item-label>{{user?.fullname}}</q-item-label>
          </q-item-section>
        </q-item>
        <q-item active-class="menu-item"
                clickable
                exact
                :to="{name:'staff:dashboard'}"
                :active="$route.name==='staff:dashboard'"
        >
          <q-item-section avatar>
            <q-icon name="dashboard"/>
          </q-item-section>
          <q-item-section>
            <q-item-label style="font-size: 16px" class="text-weight-500">Dashboard</q-item-label>
          </q-item-section>
        </q-item>
        <q-separator/>
        <br/>

        <q-expansion-item v-for="menu in menus" :key="menu.id"
                          group="menu"
                          expand-separator
                          :label="menu.label"
                          :icon="menu.icon"
                          class="text-weight-medium text-grey-9"
        >
          <q-item  v-for="item in menu.items"
                   :key="item.route_name"
                   class="text-grey-8"
                   :to="{name:item.route_name}">
            <q-item-section avatar>
              <q-icon class="q-ml-sm" :size="$route.name===item.route_name?'12px':'8px'" name="fiber_manual_record"/>
            </q-item-section>
            <q-item-section>
              <q-item-label  class="text-weight-300">{{item.label}}</q-item-label>
            </q-item-section>
          </q-item>
        </q-expansion-item>
        <br/>
      </q-list>
    </q-drawer>
    <q-page-container class="q-ml-md">
      <router-view/>
    </q-page-container>

    <q-footer elevated class="print-hide bg-grey-8 text-white">
      <MsegFooter/>
    </q-footer>
  </q-layout>
</template>
<script>
import {useRouter} from "vue-router";
import {reactive} from "@vue/reactivity";
import {onMounted} from "@vue/runtime-core";
import {useStore} from "vuex";
import {computed} from 'vue'
import MsegFooter from "components/MsegFooter";
import AdminNav from "components/admin/AdminNav";
import ProfileMenu from "components/admin/ProfileMenu";

export default {
  components: {ProfileMenu, AdminNav, MsegFooter},
  setup(props, context) {
    const router = useRouter();
    const store = useStore();
    const localData = reactive({
      openDrawer: true,
      onTop: false
    })
    const onMenuItemClick = menu => {
    }

    onMounted(() => {
      store.dispatch('staffData/fetchData');
    })
    const handleScroll = e => {
      localData.onTop = e.position;
    }
    return {
      handleScroll,
      onMenuItemClick,
      localData,
      user: computed(() => store.state.authData?.currentUser),
      menus: [
        {
          id: 'apps', label: 'Applications', icon: 'description',
          items: [
            // {route_name:'application:create',label:'New application',leftIcon:'label',rightIcon:'navigate_next'},
            {
              route_name: 'ongoing-applications:read',
              label: 'Ongoing Applications',
              leftIcon: 'label',
              rightIcon: 'navigate_next'
            },
            // {route_name:'application:incoming',label:'Incoming (online)',leftIcon:'label',rightIcon:'navigate_next'},
            {route_name: 'application:archived', label: 'Archived', leftIcon: 'label', rightIcon: 'navigate_next'},
          ]
        },
        {
          id: 'admin', label: 'Admin Control', icon: 'settings_applications',
          items: [
            {route_name: 'web:service', label: 'Online Services', leftIcon: 'tag', rightIcon: 'navigate_next'},
            {route_name: 'posting:read', label: 'Staff postings', leftIcon: 'tag', rightIcon: 'navigate_next'},
            {route_name: 'office:read', label: 'Manage offices', leftIcon: 'tag', rightIcon: 'navigate_next'},
            {route_name: 'staff:read', label: 'Manage staffs', leftIcon: 'tag', rightIcon: 'navigate_next'},
            {route_name: 'role:read', label: 'Manage roles', leftIcon: 'tag', rightIcon: 'navigate_next'},
            {route_name: 'district:read', label: 'Master data', leftIcon: 'tag', rightIcon: 'navigate_next'},
          ]
        }, {
          id: 'web', label: 'Web Management', icon: 'public',
          items: [
            {route_name: 'web:about', label: 'About us', leftIcon: 'tag', rightIcon: 'navigate_next'},
            {route_name: 'web:act', label: 'Act & Rules', leftIcon: 'tag', rightIcon: 'navigate_next'},
            {route_name: 'web:notification', label: 'Notification', leftIcon: 'tag', rightIcon: 'navigate_next'},
            {route_name: 'web:other', label: 'Other Information', leftIcon: 'tag', rightIcon: 'navigate_next'}
          ]
        }
      ]
    }
  }
}
</script>
<style>
.q-item__section--avatar{
  min-width: 45px;
}

.menu-item{
  color: #b9d8d4;
  background-color: #E0E7F4;
  border-radius: 4px;
}
.active-profile{
  margin: 16px;
  color: #b9d8d4;
  background-color: #E0E7F4;
}
.active-menu-item{
  font-weight: 500;
  color: #2a2a2a;
}
.profile{
  margin:16px  ;
  border-radius: 4px;
  background-color: #dedede;
}
.menu-title{
  color: #404040;
  font-family: Roboto;
  font-size: 16px;
  font-weight: 500;
}
</style>
