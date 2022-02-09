<template>

  <div class="row">
    <div class="col-12 text-center">
      <p class="zsubtitle q-ma-none q-pa-sm">Department under EODB</p>
    </div>
    <div class="col-12">
      <q-separator/>
    </div>
    <div class="col-6">
      <q-list separator>
        <q-item v-for="item in DEPARTMENT_LINKS1" :key="item.serial" :to="'/'+item.link+'/online-services'">
          <q-item-section>
            <q-item-label>{{item.title}}</q-item-label>
          </q-item-section>
        </q-item>
      </q-list>
    </div>

    <div class="col-6">
      <q-list separator>
        <q-item v-for="item in DEPARTMENT_LINKS2" :key="item.serial" :to="'/'+item.link+'/online-services'">
          <q-item-section>
            <q-item-label>{{item.title}}</q-item-label>
          </q-item-section>
        </q-item>
      </q-list>

    </div>
  </div>



</template>
<script>
const DEPARTMENT_LINKS1 = [
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

];
const DEPARTMENT_LINKS2 = [

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
]
export default {
  name: 'e-menu',
  setup() {
    return{
      DEPARTMENT_LINKS1,
      DEPARTMENT_LINKS2
    }
  }
}
</script>
