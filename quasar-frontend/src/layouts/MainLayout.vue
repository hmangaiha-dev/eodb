<template>
  <q-layout view="hHh lpR fff">

    <q-header  elevated  class="bg-white print-hide green-bottom-border text-primary" height-hint="98">
      <q-toolbar  class="container">
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
        <q-btn flat icon="account_circle" />
        <q-btn flat icon="more_vert" />
      </q-toolbar>
      <q-separator />
      <q-toolbar class="xs-hide container q-pa-md q-gutter-md">
        <q-btn color="primary" icon="dashboard" />
        <q-btn-dropdown
          dropdown-icon="arrow_drop_down"
          flat
          color="primary"
          label="Administration"
        >
        </q-btn-dropdown>
        <q-space/>
        <q-btn-dropdown rounded icon="manage_accounts" dropdown-icon="arrow_drop_down" no-caps :label="user.full_name" outline color="primary">
          <ProfileMenu/>
        </q-btn-dropdown>
        <q-btn flat icon="more_vert"/>
      </q-toolbar>
      <q-separator />
      <q-toolbar class="scroll-y xs-hide container q-pa-xs q-gutter-sm">
        <q-btn color="primary" icon="dashboard"/>
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
        <q-btn flat icon="settings"/>
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
    });
    const onMenuItemClick = (menu) => {
      switch (menu) {
        case "posting":
          router.push("/admin/postings");
          break;
        case "staff":
          router.push("/admin/staffs");
          break;
        case "role":
          router.push("/admin/roles");
          break;
        case "role":
          router.push("/admin/roles");
          break;
        case "departments":
          router.push("/admin/departments");
          break;
      }
    };
    onMounted(() => {
      store.dispatch('staffData/fetchData');
    })
    return {
      onMenuItemClick,
      localData,
      user:computed(()=>store.state.authData.currentUser)
    }
  }
}
</script>
