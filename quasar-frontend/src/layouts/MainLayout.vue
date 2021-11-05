<template>
  <q-layout view="hHh lpR fff">

    <q-header  elevated  class="bg-white green-bottom-border text-primary" height-hint="98">
      <q-toolbar  class="container">
        <q-btn class="lt-sm" @click="localData.openDrawer=true" flat icon="menu"/>
        <q-toolbar-title>
          <q-avatar>
            <img class="bg-primary" src="https://cdn.quasar.dev/logo-v2/svg/logo-mono-white.svg">
          </q-avatar>
          EODB
        </q-toolbar-title>
        <q-space/>
        <q-btn flat icon="account_circle"/>
        <q-btn flat icon="more_vert"/>
      </q-toolbar>
      <q-separator/>
      <q-toolbar class="scroll-y xs-hide container q-pa-xs q-gutter-sm">
        <q-btn color="primary" icon="dashboard"/>

        <q-btn-dropdown no-caps dropdown-icon="arrow_drop_down" flat label="File management">
          <q-list>
            <q-item :to="{name:'file:create'}" clickable v-close-popup>
              <q-item-section>
                <q-item-label>New file</q-item-label>
              </q-item-section>
            </q-item>

            <q-item :to="{name:'file:incoming',params:{office_id:1}}" clickable v-close-popup>
              <q-item-section>
                <q-item-label>Incoming files</q-item-label>
              </q-item-section>
            </q-item>
            <q-item  clickable v-close-popup>
              <q-item-section>
                <q-item-label>Outgoing files</q-item-label>
              </q-item-section>
            </q-item>
          </q-list>
        </q-btn-dropdown>
        <q-btn-dropdown no-caps dropdown-icon="arrow_drop_down" flat  label="Application management">
          <q-list>
            <q-item :to="{name:'application:new'}" clickable v-close-popup>
              <q-item-section>
                <q-item-label>New applications</q-item-label>
              </q-item-section>
            </q-item>

            <q-item :to="{name:'application:verified'}" clickable v-close-popup>
              <q-item-section>
                <q-item-label>Verified applications</q-item-label>
              </q-item-section>
            </q-item>
            <q-item  :to="{name:'application:approved'}" clickable v-close-popup>
              <q-item-section>
                <q-item-label>Approved applications</q-item-label>
              </q-item-section>
            </q-item>
          </q-list>
        </q-btn-dropdown>
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
        <q-btn-dropdown no-caps dropdown-icon="arrow_drop_down" flat  label="Accounting">
          <q-list>
            <q-item  clickable v-close-popup>
              <q-item-section>
                <q-item-label>Transaction book</q-item-label>
              </q-item-section>
            </q-item>

            <q-item  clickable v-close-popup>
              <q-item-section>
                <q-item-label>Ledger</q-item-label>
              </q-item-section>
            </q-item>

            <q-item  clickable v-close-popup>
              <q-item-section>
                <q-item-label>Balance sheet</q-item-label>
              </q-item-section>
            </q-item>
          </q-list>
        </q-btn-dropdown>
        <q-btn-dropdown  no-caps dropdown-icon="arrow_drop_down" flat label="Administration">
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
        <q-btn-dropdown no-caps dropdown-icon="arrow_drop_down"  flat label="Web management">
          <q-list>
            <q-item clickable v-close-popup @click="onMenuItemClick('departmentscd')">
              <q-item-section>
                <q-item-label>Department info</q-item-label>
              </q-item-section>
            </q-item>

          </q-list>
        </q-btn-dropdown>
        <q-space/>
        <q-btn flat icon="settings"/>
      </q-toolbar>
    </q-header>

    <q-drawer :model-value="localData.openDrawer" @hide="localData.openDrawer=false" side="left">
      menu
    </q-drawer>
    <q-page-container>
      <router-view/>
    </q-page-container>

    <q-footer elevated class="bg-grey-8 text-white">
     <MsegFooter/>
    </q-footer>

  </q-layout>
</template>
<script>
import {useRouter} from "vue-router";
import {reactive} from "@vue/reactivity";
import {onMounted} from "@vue/runtime-core";
import {useStore} from "vuex";
import MsegFooter from "components/MsegFooter";

export default {
  components: {MsegFooter},
  setup(props, context) {
    const router = useRouter();
    const store = useStore();
    const localData = reactive({
      openDrawer: false
    })
    const onMenuItemClick = menu => {
      switch (menu) {
        case 'posting':
          router.push('/admin/postings')
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
