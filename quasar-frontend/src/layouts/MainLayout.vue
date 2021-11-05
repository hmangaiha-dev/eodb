<template>
  <q-layout view="hHh lpR fff">
    <q-header
      style="position: inherit !important"
      elevated
      class="green-bottom-border text-primary"
    >
      <q-toolbar class="container">
        <q-btn
          class="lt-sm"
          @click="localData.openDrawer = true"
          flat
          icon="menu"
        />
        <q-toolbar-title>
          <q-avatar>
            <img
              class="bg-primary"
              src="https://cdn.quasar.dev/logo-v2/svg/logo-mono-white.svg"
            />
          </q-avatar>
          EODB
        </q-toolbar-title>
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
            <q-separator />
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
        <q-btn-dropdown
          dropdown-icon="arrow_drop_down"
          flat
          color="primary"
          label="Web management"
        >
          <q-list>
            <q-item
              to="/admin/departments/"
              clickable
              v-close-popup
              @click="onMenuItemClick('departments')"
            >
              <q-item-section>
                <q-item-label>Departments</q-item-label>
              </q-item-section>
            </q-item>
            <q-item to="/admin/department-profiles" clickable v-close-popup>
              <q-item-section>
                <q-item-label>Department Profile</q-item-label>
              </q-item-section>
            </q-item>
            <q-item
              to="/admin/depart-info"
              clickable
              v-close-popup
              @click="onMenuItemClick('department-info')"
            >
              <q-item-section>
                <q-item-label>Department info</q-item-label>
              </q-item-section>
            </q-item>
          </q-list>
        </q-btn-dropdown>

        <q-btn-dropdown
          dropdown-icon="arrow_drop_down"
          flat
          color="primary"
          label="Online Services"
        >
          <q-list>
            <q-item v-for="service in services" :key="service.to"
              :to="`/admin/${service.to}`"
              clickable
              v-close-popup
            >
              <q-item-section>
                <q-item-label> {{ service.name }} </q-item-label>
              </q-item-section>
            </q-item>
          </q-list>
        </q-btn-dropdown>
      </q-toolbar>
    </q-header>

    <q-drawer
      :model-value="localData.openDrawer"
      @hide="localData.openDrawer = false"
      side="left"
    >
      menu
    </q-drawer>
    <q-page-container style="padding: 0 !important">
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
    </q-footer>
  </q-layout>
</template>
<script>
import { useRouter } from "vue-router";
import { reactive } from "@vue/reactivity";
import { ref } from "vue";

export default {
  setup(props, context) {
    // console.log('context',context);
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
    const localData = reactive({
      openDrawer: false,
    });
    const onMenuItemClick = (menu) => {
      switch (menu) {
        case "posting":
          router.push("/admin/posting");
          break;
        case "office":
          router.push("/admin/offices");
          break;
        case "staff":
          router.push("/admin/staffs");
          break;
        case "role":
          router.push("/admin/roles");
          break;
        case "departments":
          router.push("/admin/departments");
          break;

        case "department-info":
          router.push("/admin/department-info");
          break;
      }
    };
    return {
      onMenuItemClick,
      localData,
      services,
    };
  },
};
</script>
