<template>
  <q-layout view="lHh Lpr lFf">
    <q-header style="margin: 0 auto" class="bg-white text-grey">
      <q-toolbar class="container bg-white text-dark q-py-none">
        <router-link to="/"
          ><img style="width: 80px" src="~assets/eodb-logo.png"
        /></router-link>

        <q-toolbar-title class="gt-xs q-mt-md q-pl-lg q-mb-none"
          ><span class="heading q-pb-none">Ease of Doing Business</span>
          <p class="mizoram q-pt-none text-caption">Mizoram</p>
          <!-- <q-btn flat @click="drawer = !drawer" round dense icon="menu" /> -->
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

        <template v-else>
          <router-link
            active-class="activebtn"
            class="q-mr-md btnhover"
            to="/login"
          >
            Login
          </router-link>
          <router-link active-class="activebtn" class="btnhover" to="/register">
            Register
          </router-link>
        </template>
        <!--
        notice shrink property since we are placing it
        as child of QToolbar
      -->
        <div class="flex tabs gt-sm">
          <q-tabs no-caps>
            <!--            <q-route-tab-->
            <!--              class="q-px-none"-->
            <!--              @click="navigate"-->
            <!--              label="Home"-->
            <!--            />-->
            <!--            <q-route-tab-->
            <!--              label="About Us"-->
            <!--              @click="navigate"-->
            <!--            />-->
            <!--            <q-route-tab-->
            <!--              @click="navigate"-->
            <!--              label="Online Services"-->
            <!--            />-->
            <!--            <q-route-tab-->
            <!--              @click="navigate"-->
            <!--              v-scroll-to="'#contact-us'"-->
            <!--              label="Contact Us"-->
            <!--            />-->
            <!--            <q-route-tab-->
            <!--              @click="navigate"-->
            <!--              label="EODB"-->
            <!--            />-->
            <!--            <span class="text-h5">|</span>-->
            <!--            <q-route-tab label="Login" />-->

            <!--            <span class="text-h5">|</span>-->
            <!--            <q-route-tab label="Register" />-->
          </q-tabs>

          <!-- <q-separator dark vertical /> -->

          <!-- <q-item to="/">sfs</q-item> -->
        </div>

        <!-- <a href="">dsd</a> -->

        <!-- <q-btn @click="leftDrawerOpen = !leftDrawerOpen" class="q-mr-xl" flat dense round icon="menu" aria-label="Menu" /> -->
        <q-btn-dropdown class="lt-md" flat icon="menu">
          <q-list>
            <q-item
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

    <q-page-container class="bg-grey-2">
      <!-- <keep-alive> -->
        <router-view />
      <!-- </keep-alive> -->
    </q-page-container>

    <MsegsFooter />
  </q-layout>
</template>

<script>
import EssentialLink from "components/EssentialLink.vue";
import ProfileMenu from "components/ProfileMenu.vue";
import { useStore } from "vuex";
import { computed, onMounted } from "vue";
import MsegsFooter from "components/MsegsFooter";
// import { useStore } from "vuex";

const linksList = [
  {
    title: "Home",
    caption: "quasar.dev",
    icon: "school",
    link: "https://quasar.dev",
  },
  {
    title: "About",
    caption: "github.com/quasarframework",
    icon: "code",
    link: "https://github.com/quasarframework",
  },
  {
    title: "Online Services",
    caption: "chat.quasar.dev",
    icon: "chat",
    link: "https://chat.quasar.dev",
  },
  {
    title: "Contact Us",
    caption: "forum.quasar.dev",
    icon: "record_voice_over",
    link: "https://forum.quasar.dev",
  },
  {
    title: "EODB",
    caption: "@quasarframework",
    icon: "rss_feed",
    link: "https://twitter.quasar.dev",
  },
  {
    title: "Login",
    caption: "@QuasarFramework",
    icon: "public",
    link: "https://facebook.quasar.dev",
  },
  {
    title: "Register",
    caption: "Community Quasar projects",
    icon: "favorite",
    link: "https://awesome.quasar.dev",
  },
];

import { defineComponent, ref } from "vue";

export default defineComponent({
  name: "MainLayout",

  components: {
    EssentialLink,
    ProfileMenu,
    MsegsFooter,
  },

  setup() {
    const store = useStore();
    // console.log("dsfsf");

    onMounted(() => {
      // console.log("dsfsf");
      // store.dispatch("globalData/fetchDeptServices");
      // console.log("investor service", store.state.globalData);
    });

    return {
      essentialLinks: linksList,
      isAuthenticated: computed(
        () => store.getters["investor/isAuthenticated"]
      ),
    };
  },
});
</script>

<style scoped>
@import url("https://fonts.googleapis.com/css2?family=Hammersmith+One&family=Poppins:wght@100&display=swap");
@import url("https://fonts.googleapis.com/css2?family=Hammersmith+One&display=swap");

.btnhover {
  text-decoration: none;
  color: rgba(0, 0, 0, 0.5);
  font-size: 16px;
}

.activebtn {
  border-bottom: 2px solid green;
  height: 26px;
}

.btnhover:after {
  content: "";
  display: block;
  /* margin: auto; */
  height: 2px;

  background: transparent;
  transition: width 0.5s ease, background-color 0.5s ease;
}

.btnhover:hover:after {
  width: 100%;

  background: green;
}

@media (max-width: 600px) {
  .heading {
    font-size: 16px !important;
  }

  .mizoram {
    font-size: 14px !important;
  }
}

.heading {
  /* font-family: "Hammersmith One", sans-serif;
  font-size: 1.5rem;
  color: #393939; */

  /* width: 300px; */
  /* height: 32px; */
  /* margin: 0 0 19px; */
  font-family: "Hammersmith One";
  font-size: 25px;
  font-weight: normal;
  font-stretch: normal;
  font-style: normal;
  line-height: normal;
  letter-spacing: normal;
  text-align: left;
  color: #393939;
}

/* .q-menu {
  min-width: 100% !important;
  left: 0px !important;
} */

.mizoram {
  width: 178px;
  height: 23px;
  /* margin: 28px 120px 0 2px; */
  font-family: "Hammersmith One";
  font-size: 16px;
  font-weight: normal;
  font-stretch: normal;
  font-style: normal;
  line-height: normal;
  letter-spacing: 1.6px;
  text-align: left;
  color: #393939;
}

.tabs {
  color: rgba(0, 0, 0, 0.5);
}
</style>
