<template>
  <div class="my-layout">
    <q-layout view="hHh Lpr lff">
      <q-header elevated class="bg-white text-white" height-hint="98">
        <q-toolbar :class="$q.screen.gt.sm && 'q-px-xl'" class="text-dark q-py-none">
          <q-btn dense flat round icon="menu" @click="toggleLeftDrawer" />
          <router-link to="/"
            ><img style="width: 80px" src="~assets/eodb-logo.png"
          /></router-link>

          <q-toolbar-title class="gt-xs q-mt-md q-pl-lg q-mb-none"
            ><span class="heading q-pb-none">Ease of Doing Business</span>
            <p class="mizoram q-pt-none text-caption">Mizoram</p>
          </q-toolbar-title>

          <q-space />
          <q-space />

          <q-btn-dropdown
            color="primary"
            v-if="isAuthenticated"
            outline
            class="q-pa-xs"
            icon="account_circle"
            rounded
          >
            <ProfileMenu />
          </q-btn-dropdown>

        </q-toolbar>
      </q-header>

      <q-drawer
        :width="$q.screen.gt.xs ? 400 : 300"
        :breakpoint="1580"
        persistent
        class="q-pa-md"
        v-model="leftDrawerOpen"
        side="left"
        bordered
      >
        <q-item>
          <q-item-section class="text-italic text-subtitle1 text-caption"
            >Applicant Profile</q-item-section
          >
        </q-item>
        <q-item
          exact
          class="zitem"
          active-class="active-item q-px-md"
          to="/investor"
          clickable
        >
          <q-item-section avatar>
            <q-icon name="dashboard" />
          </q-item-section>
          <q-item-section> Dashboard </q-item-section>
        </q-item>
        <q-item
          class="zitem"
          active-class="active-item q-px-md"
          :to="{ name: 'common-application' }"
          clickable
        >
          <q-item-section avatar>
            <q-icon name="assignment" />
          </q-item-section>
          <q-item-section> Common Application </q-item-section>
        </q-item>
        <q-expansion-item
          default-opened
          expand-icon="expand_more"
          group="somegroup"
          icon="sticky_note_2"
          label="My Applications"
        >
          <q-item
            class="q-ml-md zitem"
            active-class="active-item q-px-md"
            :to="{ name: 'investor:ongoing' }"
            clickable
          >
            <q-item-section avatar>
              <q-icon color="yellow-7" name="hourglass_empty" />
            </q-item-section>
            <q-item-section> Submitted Applications </q-item-section>
          </q-item>
          <!-- <q-item
            active-class="active-item q-px-md"
            class="q-ml-md zitem"
            :to="{ name: 'investor:approved' }"
            clickable
          >
            <q-item-section avatar>
              <q-icon color="green-4" name="check_circle" />
            </q-item-section>
            <q-item-section> Approved Applications </q-item-section>
          </q-item> -->

          <q-item
            active-class="active-item q-px-md"
            class="q-ml-md zitem"
            :to="{ name: 'investor:application-track' }"
            clickable
          >
            <q-item-section avatar>
              <q-icon color="green" name="trending_up" />
            </q-item-section>
            <q-item-section> Track Application </q-item-section>
          </q-item>
          <q-item
            active-class="active-item q-px-md"
            class="q-ml-md zitem"
            :to="{ name: 'investor:certificates' }"
            clickable
          >
            <q-item-section avatar>
              <q-icon color="pink" name="drafts" />
            </q-item-section>
            <q-item-section> Certificates </q-item-section>
          </q-item>
           <q-item
            active-class="active-item q-px-md"
            class="q-ml-md zitem"
            :to="{ name: 'investor:drafts' }"
            clickable
          >
            <q-item-section avatar>
              <q-icon color="green" name="edit_note" />
            </q-item-section>
            <q-item-section> Drafts </q-item-section>
          </q-item>
        </q-expansion-item>

        <q-expansion-item group="somegroup" label="Online Services" icon="dns">
          <q-item
            v-for="dept in depts"
            :key="dept"
            active-class="active-item q-px-md"
            exact
            :to="`/investor/${dept.slug}/online-services`"
          >
            <q-icon size="9px" class="self-center q-pa-md" name="circle" />
            <q-item-section> {{ dept.name }} </q-item-section>
          </q-item>
        </q-expansion-item>
        <q-separator />
      </q-drawer>

      <q-page-container>
        <!-- <keep-alive> -->
        <router-view class="container-lg" />
        <!-- </keep-alive> -->
      </q-page-container>

      <!-- <MsegsFooter /> -->
    </q-layout>
  </div>
</template>

<script>
import { ref, onMounted } from "vue";
import MsegFooter from "components/MsegFooter";

import ProfileMenu from "components/ProfileMenu";
import { reactive } from "@vue/reactivity";
import { api } from "src/boot/axios";
import { useRouter } from "vue-router";
import { useStore } from "vuex";

import { computed } from "vue";
import MsegsFooter from "src/components/MsegsFooter.vue";

const depts = [
  {
    name: "Commerce and Industries",
    slug: "commerce-and-industries",
  },
  {
    name: "Land Revenue and Settlement",
    slug: "land-revenue",
  },
  {
    name: "Environment, Forest & Climate Change",
    slug: "environment-forest-and-climate-change",
  },
  {
    name: "Power & Electricity",
    slug: "power-and-electricity",
  },
  {
    name: "Mizoram Pollution Control Board",
    slug: "pollution-control-board",
  },
  {
    name: "Fire & Emergency Services",
    slug: "fire-and-emergency-services",
  },
  {
    name: "Taxation Department",
    slug: "taxation",
  },
  {
    name: "Public Works Department",
    slug: "public-work-department",
  },
  {
    name: "Aizawl Municipal Corporation",
    slug: "aizawl-municipal-corporation",
  },
  {
    name: "Law & Judicial Department",
    slug: "law-and-judicial",
  },
  {
    name: "Legal Metrology",
    slug: "legal-metrology",
  },
  {
    name: "Excise & Narcotics Department",
    slug: "excise-and-narcotics",
  },

  {
    name: "Public Health Engineering Department",
    slug: "public-health-engineering",
  },

  {
    name: "Food & Drug Administration, H&FW Department",
    slug: "food-and-drug-administration",
  },
  {
    name: "Urban Development & Proverty Alleviation",
    slug: "urban-development-and-proverty-alleviation",
  },
  {
    name: "Labour Employment, Skill Development & Entreprenuership",
    slug: "labour-skill-development-and-enterprise",
  },
];

export default {
  components: { ProfileMenu, MsegFooter, MsegsFooter },
  setup(props, context) {
    const store = useStore();

    const router = useRouter();
    const leftDrawerOpen = ref(false);
    const rightDrawerOpen = ref(false);
    const menuItems = reactive([{}]);

    onMounted(async () => {
      store.dispatch("globalData/fetchDeptServices");
      await store.dispatch("globalData/fetchCommonData");
    });

    return {
      depts,
      leftDrawerOpen,

      isAuthenticated: computed(
        () => store.getters["authData/isAuthenticated"]
      ),

      handleProfileMenu: (menuitem) => {
        if (menuitem != "logout") return console.log("not logout");

        api.defaults.headers["Authorization"] = "";

        router.push({
          name: "investor:login",
        });
      },

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

<style>
.active-item {
  background: #c8e6c9 !important;
  border-radius: 30px;
}

.zitem:hover {
  border-radius: 30px;
}
</style>
