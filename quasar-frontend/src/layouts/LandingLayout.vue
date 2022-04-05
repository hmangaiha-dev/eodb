<template>
  <q-layout view="lHh Lpr lff">
    <q-header elevated class="bg-white">
      <q-toolbar class="container-lg text-dark q-py-none">
        <q-btn
          @click="openDrawer = !openDrawer"
          class="lt-md q-mr-md"
          color="primary"
          outline
          icon="menu"
        />

        <router-link to="/"
          ><img style="width: 80px" src="~assets/eodb-logo.png"
        /></router-link>

        <q-toolbar-title class="gt-xs q-mt-md q-pl-lg q-mb-none"
          ><span class="heading q-pb-none">Ease of Doing Business</span>
          <p class="mizoram q-pt-none text-caption">Mizoram</p>
          <!-- <q-btn flat @click="drawer = !drawer" round dense icon="menu" /> -->
        </q-toolbar-title>

        <q-space />

        <q-item
          clickable
          class="gt-sm"
          :focused="selectedMenu === 'home'"
          active-class="text-primary"
          @click="handleHome"
        >
          <q-item-section>
            <q-item-label class="nav-item">Home</q-item-label>
          </q-item-section>
        </q-item>

        <q-item
          class="gt-sm"
          v-if="$route.name === 'home'"
          :focused="selectedMenu === item.id"
          clickable
          v-for="item in NAV_LINKS"
          :key="item.id"
          @click="(e) => navigate(item.id)"
        >
          <q-item-section>
            <q-item-label class="nav-item">{{ item.label }}</q-item-label>
          </q-item-section>
        </q-item>
        <q-item class="q-ma-none q-pr-xs gt-sm">
          <q-item-section>
            <q-btn-dropdown class="nav-item" flat label="EODB">
              <e-menu />
            </q-btn-dropdown>
          </q-item-section>
        </q-item>
        <q-separator vertical class="q-my-lg gt-sm" />

        <q-btn-dropdown
          color="primary"
          v-if="isAuthenticated"
          outline
          class="q-pa-xs q-mx-sm"
          icon="account_circle"
          rounded
        >
          <ProfileMenu />
        </q-btn-dropdown>

        <q-item
          v-if="$route.name !== 'investor:login' && !isAuthenticated"
          clickable
          class="gt-sm"
          @click="(e) => $router.push({ name: 'investor:login' })"
        >
          <q-item-section>
            <q-item-label class="nav-item">Login</q-item-label>
          </q-item-section>
        </q-item>
        <q-item
          v-if="!isAuthenticated"
          clickable
          class="gt-sm"
          @click="(e) => $router.push({ name: 'register' })"
        >
          <q-item-section>
            <q-item-label class="nav-item">Register</q-item-label>
          </q-item-section>
        </q-item>
      </q-toolbar>
    </q-header>

    <q-drawer
      class="bg-primary text-white"
      v-model="openDrawer"
      behavior="mobile"
    >
      <mobile-menu />
    </q-drawer>

    <q-page-container class="bg-grey-2">
      <!-- <keep-alive> -->
      <router-view />
      <!-- </keep-alive> -->
    </q-page-container>

    <q-footer class="bg-white">
      <div class="row logos justify-center q-col-gutter-md">
        <q-list style="display: contents" bordered>
          <q-item clickable v-ripple>
            <q-item-section
              ><img class="logo" style="" src="~assets/govt_mizoram.png"
            /></q-item-section>
          </q-item>

          <q-item clickable v-ripple>
            <q-item-section
              ><img class="logo" style="" src="~assets/startup_india.png"
            /></q-item-section>
          </q-item>

          <q-item clickable v-ripple>
            <q-item-section
              ><img class="logo" style="" src="~assets/make_in_india.png"
            /></q-item-section>
          </q-item>

          <q-item clickable v-ripple>
            <q-item-section
              ><img
                class="logo"
                style=""
                src="~assets/digital-india-government.png"
            /></q-item-section>
          </q-item>

          <q-item clickable v-ripple>
            <q-item-section
              ><img class="logo" style="" src="~assets/skill_india.png"
            /></q-item-section>
          </q-item>

          <q-item clickable v-ripple>
            <q-item-section
              ><img class="logo" style="" src="~assets/india_gov.png"
            /></q-item-section>
          </q-item>

          <q-item clickable v-ripple>
            <q-item-section
              ><img class="logo" style="" src="~assets/my_gov.png"
            /></q-item-section>
          </q-item>
        </q-list>
      </div>
      <MsegsFooter />
    </q-footer>
  </q-layout>
</template>

<script>
import ProfileMenu from "components/ProfileMenu.vue";
import { useStore } from "vuex";
import { computed, defineComponent, onMounted, ref } from "vue";
import MsegsFooter from "components/MsegsFooter";
import EMenu from "components/EMenu";
import { useRoute, useRouter } from "vue-router";
import MobileMenu from "components/MobileMenu";
import { scroll } from "quasar";
const { getScrollTarget, setVerticalScrollPosition } = scroll;

const NAV_LINKS = [
  { id: "about-us", label: "About us" },
  { id: "online-services", label: "Online Service" },
  { id: "contact-us", label: "Contact Us" },
];

export default defineComponent({
  name: "MainLayout",

  components: {
    MobileMenu,
    EMenu,
    ProfileMenu,
    MsegsFooter,
  },

  setup() {
    const store = useStore();
    const selectedMenu = ref("home");
    const openDrawer = ref(false);
    const route = useRoute();
    const router = useRouter();
    onMounted(() => {
      // console.log("dsfsf");
      // store.dispatch("globalData/fetchDeptServices");
      // console.log("investor service", store.state.globalData);
    });

    const navigate = (id) => {
      selectedMenu.value = id;
      var el = document.getElementById(id);
      const target = getScrollTarget(el);
      const offset = el.offsetTop;
      const duration = 1000;
      setVerticalScrollPosition(target, offset, duration);
    };
    const handleHome = (e) => {
      if (route.name !== "home") {
        router.push({ name: "home" });
      }
      navigate("home");
    };

    return {
      navigate,
      openDrawer,
      isAuthenticated: computed(
        () => store.getters["authData/isAuthenticated"]
      ),
      NAV_LINKS,
      handleHome,
      selectedMenu,
      isAuthenticated: computed(
        () => store.getters["authData/isAuthenticated"]
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

.nav-item {
  font-size: 16px;
  font-weight: 500;
  color: rgba(0, 0, 0, 0.5);
}
</style>
