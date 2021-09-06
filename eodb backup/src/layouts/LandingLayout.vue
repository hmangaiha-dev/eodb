<template>
  <q-layout view="lHh Lpr lFf">
    <q-header style="margin: 0 auto" class="bg-white text-grey">
      <q-toolbar class="bg-white text-dark q-py-none">
        <img style="width: 80px" src="~assets/eodb-logo.png" />

        <q-toolbar-title class="q-mt-md q-pl-lg q-mb-none"
          ><span class="heading q-pb-none">Ease of Doing Business</span>
          <p class="mizoram q-pt-none text-caption">Mizoram</p>
          <!-- <q-btn flat @click="drawer = !drawer" round dense icon="menu" /> -->
        </q-toolbar-title>

        <q-space />

        <!--
        notice shrink property since we are placing it
        as child of QToolbar
      -->
        <div class="flex tabs gt-sm">
          <q-tabs no-caps>
            <q-route-tab
              class="q-px-none"
              @click="navigate"
              v-scroll-to="'#home'"
              label="Home"
            />
            <q-route-tab
              label="About Us"
              @click="navigate"
              v-scroll-to="'#about-us'"
            />
            <q-route-tab
              v-scroll-to="'#online-services'"
              @click="navigate"
              label="Online Services"
            />
            <q-route-tab
              @click="navigate"
              v-scroll-to="'#contact-us'"
              label="Contact Us"
            />
            <q-route-tab
              @click="navigate"
              v-scroll-to="'#about-us'"
              label="EODB"
            />
            <span class="text-h5">|</span>
            <q-route-tab label="Login" />

            <span class="text-h5">|</span>
            <q-route-tab label="Register" />
          </q-tabs>

          <!-- <q-separator dark vertical /> -->

          <!-- <q-item to="/">sfs</q-item> -->
        </div>

        <!-- <a href="">dsd</a> -->

        <!-- <q-btn @click="leftDrawerOpen = !leftDrawerOpen" class="q-mr-xl" flat dense round icon="menu" aria-label="Menu" /> -->
        <q-btn-dropdown class="lt-md" flat icon="menu">
          <q-list>
           
            <q-item to="/h" v-for="link in essentialLinks" :key="link.title" clickable v-close-popup>
              <q-item-section>
                <q-item-label style="color: #00000080">{{ link.title }}</q-item-label>
              </q-item-section>
            </q-item>

           
          </q-list>
        </q-btn-dropdown>
      </q-toolbar>
    </q-header>

    

    <q-page-container>
      <router-view />
    </q-page-container>
  </q-layout>
</template>

<script>
import EssentialLink from "components/EssentialLink.vue";

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
  },

  setup() {
    const leftDrawerOpen = ref(true);

    const navigate = (e) => {
      console.log("clicked");

      // console.log('length child nodes',e.target.childNodes);

      if (e.target.hasChildNodes()) console.log("no child nodes");
      else console.log("has child nodes");

      // if(e.target.childNodes)

      // console.log('target',e.target);

      const label = document.querySelectorAll(".q-tab__label");

      // label.style.color = "#00000080";

      var index = 0,
        length = label.length;
      for (; index < length; index++) {
        label[index].style.color = "#00000080";
      }

      e.target.style.color = "green";

      // label.style.background = "blue"

      // label.style.padding = "50px";
      // e.target.style.color="red";
    };

    return {
      tab: ref(""),
      essentialLinks: linksList,
      leftDrawerOpen,
      toggleLeftDrawer() {
        leftDrawerOpen.value = !leftDrawerOpen.value;
      },
      navigate,
    };
  },
});
</script>

<style>
@import url("https://fonts.googleapis.com/css2?family=Hammersmith+One&family=Poppins:wght@100&display=swap");
@import url("https://fonts.googleapis.com/css2?family=Hammersmith+One&display=swap");

@media (max-width: 600px) {
  .heading {
    font-size: 16px !important;
  }

  .mizoram {
    font-size: 14px !important;
  }

  .ellipsis {
    overflow: inherit;
  }

  .q-toolbar {
  width: 100% !important;
  /* margin: 0 auto; */
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
.text-green-4 {
  color: #357c71 !important;
}

.q-menu {
  min-width: 100% !important;
  left: 0px !important;
}

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

.q-page-container {
  padding-top: 0px !important;
}

.q-toolbar {
  width: 80%;
  margin: 0 auto;
}

.q-tab__content {
  min-width: 0px !important;
}

.test {
  background: red;
}
</style>
