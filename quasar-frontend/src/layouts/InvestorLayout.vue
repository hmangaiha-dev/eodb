<template>
  <div class="my-layout">
    <q-layout view="hHh Lpr lff">
      <div class="my-layout">
        <q-header elevated class="bg-primary text-white" height-hint="98">
          <q-toolbar class="containder bg-white text-dark q-py-none">
            <q-btn dense flat round icon="menu" @click="toggleLeftDrawer" />
            <router-link to="/"
              ><img style="width: 80px" src="~assets/eodb-logo.png"
            /></router-link>

            <q-toolbar-title class="q-mt-md q-pl-lg q-mb-none"
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

            <q-btn-dropdown class="lt-md" flat icon="menu">
              <q-list>
                <q-item
                  active-class="active-item q-px-md"
                  to="/h"
                  v-for="link in essentialLinks"
                  :key="link.title"
                  clickable
                  v-close-popup
                >
                  <q-item-section class="btn-dropdown">
                    <q-item-label style="color: #00000080">{{
                      link.title
                    }}</q-item-label>
                  </q-item-section>
                </q-item>
              </q-list>
            </q-btn-dropdown>
          </q-toolbar>
        </q-header>

        <q-page-container>
          <q-drawer
            class="q-px-md q-ml-md"
            :width="$q.screen.gt.md ? 400 : 350"
            show-if-above
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
              class="zitem text-primary"
              active-class="active-item q-px-md"
              to="/investor"
              clickable
            >
              <q-item-section avatar>
                <q-icon color="negative" name="dashboard" />
              </q-item-section>
              <q-item-section> Dashboard </q-item-section>
            </q-item>

            <q-item
              exact
              class="zitem text-primary"
              active-class="active-item q-px-md"
              to="/investor/profile"
              clickable
            >
              <q-item-section avatar>
                <q-icon color="green" name="people" />
              </q-item-section>
              <q-item-section> Profile </q-item-section>
            </q-item>
            <q-expansion-item
              expand-icon="expand_more"
              group="somegroup"
              label="Online Services"
              header-class="text-primary"
            >
              <q-item
                v-for="dept in depts"
                :key="dept"
                class="q-ml-md zitem"
                active-class="active-item q-px-md"
                exact
                :to="`/investor/${dept.slug}/online-services`"
              >
                <q-item-section avatar>
                  <q-icon color="negative" name="precision_manufacturing" />
                </q-item-section>
                <q-item-section> {{ dept.name }} </q-item-section>
              </q-item>
            </q-expansion-item>
            <q-expansion-item
              expand-icon="expand_more"
              group="somegroup"
              icon="explore"
              label="My Applications"
              header-class="text-primary"
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
                <q-item-section> Ongoing Applications </q-item-section>
              </q-item>
              <q-item
                active-class="active-item q-px-md"
                class="q-ml-md zitem"
                :to="{ name: 'investor:approved' }"
                clickable
              >
                <q-item-section avatar>
                  <q-icon color="green-4" name="check_circle" />
                </q-item-section>
                <q-item-section> Approved Applications </q-item-section>
              </q-item>

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
            </q-expansion-item>
            <q-separator />
            <q-item
              class="zitem text-primary"
              active-class="active-item q-px-md"
              :to="{ name: 'common-application' }"
              clickable
            >
              <q-item-section avatar>
                <q-icon color="negative" name="dashboard" />
              </q-item-section>
              <q-item-section> Common Application </q-item-section>
            </q-item>
          </q-drawer>
          <router-view />
        </q-page-container>

        <!-- <MsegsFooter /> -->

        
      </div>
    </q-layout>
  </div>
</template>

<script>
import { ref } from "vue";
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

    return {
      depts,
      leftDrawerOpen,

      isAuthenticated: computed(
        () => store.getters["investor/isAuthenticated"]
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
