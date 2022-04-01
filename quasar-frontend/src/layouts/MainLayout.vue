<template>
  <q-layout @scroll="handleScroll" view="hHh lpR fff">
    {{ $q.screen.gt.xs ? (localData.openDrawer = false) : true }}

    <q-header
      elevated
      class="bg-white print-hide green-bottom-border text-primary"
      height-hint="98"
    >
      <q-toolbar
        v-if="!localData.onTop"
        class="container-lg flex items-center q-py-md"
      >
        <q-btn
          class="lt-sm"
          @click="localData.openDrawer = true"
          flat
          icon="menu"
        />
        <router-link to="/"
          ><img style="width: 80px" src="~assets/eodb-logo.png"
        /></router-link>

        <q-toolbar-title> Ease of Doing Business </q-toolbar-title>
        <q-space />
        <q-btn :to="{ name: 'process-flows:read' }" flat icon="settings" />
      </q-toolbar>
      <q-separator />
      <q-toolbar
        class="scroll-y xs-hide container-lg q-pa-xs q-gutter-sm q-py-md"
      >
        <q-btn
          :to="{ name: 'staff:dashboard' }"
          :class="$route.name === 'staff:dashboard' ? 'selected-menu' : ''"
          flat
          outline
          label="My desk"
          color="primary"
          icon="dashboard"
        />

        <AdminNav />

        <q-btn
          :to="{ name: 'office:payments' }"
          :class="$route.name === 'office:payments' ? 'selected-menu' : ''"
          flat
          outline
          label="Payments"
          color="primary"
          icon="payments"
        />
        <q-space />
        <q-btn-dropdown
          rounded
          icon="manage_accounts"
          dropdown-icon="arrow_drop_down"
          no-caps
          :label="user?.full_name"
          outline
          color="primary"
        >
          <ProfileMenu />
        </q-btn-dropdown>
        <q-btn v-if="localData.onTop" flat icon="settings" />
      </q-toolbar>
    </q-header>

    <q-drawer
      :model-value="localData.openDrawer"
      @hide="localData.openDrawer = false"
      side="left"
    >
      <AdminNav />
    </q-drawer>
    <q-page-container>
      <router-view />
    </q-page-container>

    <q-footer elevated class="print-hide bg-grey-8 text-white">
      <MsegFooter />
    </q-footer>
  </q-layout>
</template>
<script>
import { useRouter } from "vue-router";
import { reactive } from "@vue/reactivity";
import { onMounted } from "@vue/runtime-core";
import { useStore } from "vuex";
import { ref } from "vue";
import MsegFooter from "components/MsegFooter";
import AdminNav from "components/admin/AdminNav";
import { api } from "boot/axios";
import ProfileMenu from "components/admin/ProfileMenu";
import { computed } from "vue";

export default {
  components: { ProfileMenu, AdminNav, MsegFooter },
  setup(props, context) {
    const router = useRouter();
    const store = useStore();
    const localData = reactive({
      openDrawer: false,
      onTop: false,
    });
    const onMenuItemClick = (menu) => {};

    onMounted(() => {
      store.dispatch("staffData/fetchData");
    });
    const handleScroll = (e) => {
      localData.onTop = e.position;
    };
    return {
      handleScroll,
      onMenuItemClick,
      localData,
      user: computed(() => store.state.authData?.currentUser),
    };
  },
};
</script>
<style scoped></style>
