<template>
  <q-layout view="lHh lpR fFf">
    <q-header elevated class="bg-primary text-white" height-hint="98">
      <q-toolbar>
        <q-btn dense flat round icon="menu" @click="toggleLeftDrawer" />

        <q-toolbar-title>
          <q-avatar>
            <img src="https://cdn.quasar.dev/logo-v2/svg/logo-mono-white.svg" />
          </q-avatar>
          Title
        </q-toolbar-title>

        <q-btn dense flat round icon="person">
          <ProfileMenu @onMenuItemClick="handleProfileMenu" />
        </q-btn>
      </q-toolbar>
      <q-toolbar>
        <q-toolbar-title>Main menu</q-toolbar-title>
      </q-toolbar>

      <!--      <q-tabs align="left">-->
      <!--        <q-route-tab to="/page1" label="Page One" />-->
      <!--        <q-route-tab to="/page2" label="Page Two" />-->
      <!--        <q-route-tab to="/page3" label="Page Three" />-->
      <!--      </q-tabs>-->
    </q-header>

    <q-drawer show-if-above v-model="leftDrawerOpen" side="left" bordered>
      <!-- QScrollArea is optional -->
      <q-scroll-area class="fit q-pa-sm">
        <q-item>
          <q-item-section>App icon</q-item-section>
        </q-item>
        <q-item>
          <q-item-section avatar>
            <q-icon color="negative" name="dashboard" />
          </q-item-section>
          <q-item-section> Dashboard </q-item-section>
        </q-item>

        <q-expansion-item
        expand-icon="expand_more"
          group="somegroup"
          icon="explore"
          label="Online Services"
          default-opened
          header-class="text-primary"
        >
          <q-item
            class="q-ml-md"
            active-class="bg-grey-3"
            to="/investor/industries/online-services"
          >
           
            <q-item-section avatar>
              <q-icon color="negative" name="dashboard" />
            </q-item-section>
            <q-item-section> Industries </q-item-section>
          </q-item>
        </q-expansion-item>

    

        <q-item>
          <q-item-section avatar>
            <q-icon color="negative" name="dashboard" />
          </q-item-section>
          <q-item-section> My Applications </q-item-section>
        </q-item>
        <q-list separator>
          <q-expansion-item
            group="somegroup"
            icon="explore"
            label="Website management"
            default-opened
            header-class="text-primary"
          >
            <q-item clickable class="q-ml-lg">
              <q-item-section avatar>
                <q-icon color="primary" name="bluetooth" />
              </q-item-section>

              <q-item-section>Icon as avatar</q-item-section>
            </q-item>
            <q-item clickable class="q-ml-lg">
              <q-item-section avatar>
                <q-icon color="primary" name="bluetooth" />
              </q-item-section>

              <q-item-section>Icon as avatar</q-item-section>
            </q-item>
          </q-expansion-item>
          <q-expansion-item
            group="somegroup"
            icon="explore"
            label="File management"
            default-opened
            header-class="text-primary"
          >
            <q-item clickable class="q-ml-lg">
              <q-item-section avatar>
                <q-icon color="primary" name="tag" />
              </q-item-section>
              <q-item-section>Tags</q-item-section>
            </q-item>
          </q-expansion-item>
          <q-expansion-item
            group="somegroup"
            icon="explore"
            label="User management"
            default-opened
            header-class="text-primary"
          >
            <q-item clickable class="q-ml-lg">
              <q-item-section avatar>
                <q-icon color="primary" name="tag" />
              </q-item-section>
              <q-item-section>Tags</q-item-section>
            </q-item>
          </q-expansion-item>
          <q-expansion-item
            group="somegroup"
            icon="explore"
            label="Master Data"
            default-opened
            header-class="text-primary"
          >
            <q-item clickable class="q-ml-lg">
              <q-item-section avatar>
                <q-icon color="primary" name="tag" />
              </q-item-section>
              <q-item-section>Tags</q-item-section>
            </q-item>
          </q-expansion-item>
        </q-list>
        <q-separator />
        <q-item class="absolute-bottom">
          <q-item-section avatar>
            <q-icon color="negative" name="dashboard" />
          </q-item-section>
          <q-item-section> Log out </q-item-section>
        </q-item>
      </q-scroll-area>
    </q-drawer>

    <q-drawer show-if-above v-model="rightDrawerOpen" side="right" bordered>
      <!-- drawer content -->
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
    </q-footer>
  </q-layout>
</template>

<script>
import { ref } from "vue";
import ProfileMenu from "components/ProfileMenu";
import { reactive } from "@vue/reactivity";

export default {
  components: { ProfileMenu },
  setup() {
    const leftDrawerOpen = ref(false);
    const rightDrawerOpen = ref(false);
    const menuItems = reactive([{}]);

    return {
      leftDrawerOpen,
      handleProfileMenu: (menuitem) => console.log(menuitem),
      toggleLeftDrawer() {
        leftDrawerOpen.value = !leftDrawerOpen.value;
      },

      rightDrawerOpen,
      toggleRightDrawer() {
        rightDrawerOpen.value = !rightDrawerOpen.value;
      },
    };
  },
};
</script>
