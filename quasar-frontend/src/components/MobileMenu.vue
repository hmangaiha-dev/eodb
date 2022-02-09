<template>
  <q-list>
    <div style="min-height: 180px" class="flex justify-center items-center bg-white">
        <img style="width: 80px;color: white" src="~assets/eodb-logo.png"/>
      <p class="ztitle text-dark q-ma-none q-pa-xs">Ease of Doing Business! </p>
    </div>
    <q-item clickable  :focused="selectedMenu==='home'" @click="handleHome">
      <q-item-section>
        <q-item-label class="nav-item">Home</q-item-label>
      </q-item-section>
    </q-item>

    <q-item  clickable    @click="e=>$router.push({name:'investor:login'})">
      <q-item-section>
        <q-item-label class="nav-item">Login</q-item-label>
      </q-item-section>
    </q-item>

    <q-item clickable   @click="e=>$router.push({name:'register'})">
      <q-item-section>
        <q-item-label class="nav-item">Register</q-item-label>
      </q-item-section>
    </q-item>

    <q-expansion-item
      expand-icon-class="text-white"
      label="Departments"
    >
      <q-list dense separator>
        <q-item class="flex justify-center items-center" v-for="item in DEPARTMENT_LINKS" :key="item.serial" :to="'/'+item.link+'/online-services'">
          <q-icon class="q-ma-md" name="lens" />
          <q-item-section>
            <q-item-label>{{item.title}}</q-item-label>
          </q-item-section>
        </q-item>
      </q-list>

    </q-expansion-item>

    <q-item  :focused="selectedMenu===item.id" clickable v-for="item in NAV_LINKS" :key="item.id" @click="e=>navigate(item.id)">
      <q-item-section>
        <q-item-label class="nav-item">{{item.label}}</q-item-label>
      </q-item-section>
    </q-item>



  </q-list>
</template>
<script>
import {ref} from "vue";
import {scroll} from 'quasar'
import {useRoute, useRouter} from "vue-router";

const {getScrollTarget, setVerticalScrollPosition} = scroll

const NAV_LINKS = [
  {id: 'about-us', label: 'About us'},
  {id: 'online-services', label: 'Online Service'},
  {id: 'contact-us', label: 'Contact Us'},
];
const DEPARTMENT_LINKS = [
  {
    serial: "01",
    title: "Land Revenue & Settle Department",
    link: "land-revenue",
  },

  {
    serial: "02",
    title: "Commerce & Industrial Department",
    link: "commerce-and-industries",
  },

  {
    serial: "03",
    title: "Environment, Forest & Climate Change Department",
    link: "environment-forest-and-climate-change",
  },
  {
    serial: "04",
    title: "Mizoram Pollution Control Board",
    link: "pollution-control-board",
  },
  {
    serial: "05",
    title: "Fire & Emergency Services",
    link: "fire-and-emergency-services",
  },
  {
    serial: "06",
    title: "Food & Drug Administration, H&FW Department",
    link: "food-and-drug-administration",
  },
  {
    serial: "07",
    title: "Labour, Skill Developement & Entrepreneurship",
    link: "labour-skill-development-and-enterprise",
  },
  {
    serial: "08",
    title: "Aizawl Municipal Corporation",
    link: "aizawl-municipal-corporation",
  },
  {
    serial: "09",
    title: "Law & Judicial Department",
    link: "law-and-judicial",
  },
  {
    serial: "10",
    title: "Legal Metrology",
    link: "legal-metrology",
  },
  {
    serial: "11",
    title: "Excise & Narcotics Department",
    link: "excise-and-narcotics",
  },

  {
    serial: "12",
    title: "Power & Electricity Department",
    link: "power-and-electricity",
  },
  {
    serial: "13",
    title: "Public Health Engineering Department",
    link: "public-health-engineering",
  },
  {
    serial: "14",
    title: "Public Works Department",
    link: "public-work-department",
  },
  {
    serial: "15",
    title: "Taxation Department",
    link: "taxation",
  },
  {
    serial: "16",
    title: "Urban Developement & Poverty Allievation",
    link: "urban-development-and-proverty-alleviation",
  },
  {
    serial: "17",
    title: "Geology & Mineral Resources",
    link: "geology-and-mineral-resources",
  },

];
export default {

  setup() {
    const route = useRoute();
    const router = useRouter();

    const navigate = (id) => {
      router.replace({name: 'home'})
      selectedMenu.value = id;
      var el = document.getElementById(id);
      const target = getScrollTarget(el)
      const offset = el.offsetTop
      const duration = 1000
      setVerticalScrollPosition(target, offset, duration)
    }
    const handleHome = e => {
      navigate('home');
    }
    const selectedMenu = ref('home')
    return {
      navigate,
      handleHome,
      selectedMenu,
      NAV_LINKS,
      DEPARTMENT_LINKS
    }
  }
}
</script>
