<template>
  <div
    id="home"
    class="group row justify-evenly"
    style="background-color: #b9d8d4"
  >
    <div class="container-lg flex">
      <div class="col-sm-5 col-xs-12 q-mb-md">
        <h1 class="heading content q-px-md"><span>Think of Business!</span></h1>
        <div class="content2">
          <span>There is Ease of Doing Business!</span>
        </div>
        <q-btn
          @click="(e) => navigate('online-services')"
          label="Explore Department"
          class="explore text-capitalize"
          rounded
        />
        <q-btn
          @click="(e) => navigate('track')"
          label="Track Form"
          class="explore q-ml-md text-capitalize"
          rounded
        />
      </div>
    </div>

    <div class="gt-sm col-sm-5">
      <!-- <img class="map" src="~assets/mzr.png" /> -->
      <q-img
        fit="contain"
        class="map"
        src="~assets/mzr.png"
        width="80%"
        spinner-color="primary"
        spinner-size="82px"
      />
    </div>
  </div>

  <div id="online-services" class="row q-mt-lg justify-center">
    <div class="col-lg-12 text-center">
      <span class="explore_dept">Explore Department</span>
    </div>
  </div>

  <div class="row q-mt-lg container-lg justify-start q-col-gutter-md">
    <div
      v-for="dept in depts"
      :key="dept.serial"
      class="col-sm-6 col-md-3 col-xs-12"
    >
      <!-- <q-list class="tile cursor-pointer" clickable bordered padding> -->
      <q-item
        style="min-height: 170px"
        :to="{ name: 'common:show', params: { deptname: `${dept?.link}` } }"
        class="cursor-pointer zcard"
        clickable
        v-ripple
      >
        <q-item-section class="text-primary" style="font-size: 28px" avatar>
          {{ dept.serial }}
        </q-item-section>

        <q-item-section class="text-center tile-content">{{
          dept.title
        }}</q-item-section>
      </q-item>
      <!-- </q-list> -->
    </div>
  </div>

  <div class="track q-mt-lg">
    <div id="track" class="container-lg row justify-center">
      <p
        class="text-primary bg-white q-my-lg q-py-sm q-px-xl col-md-5 col-xs-12 text-center"
        style="font-size: 26px; min-width: 480px"
      >
        Track your EODB form
      </p>

      <div class="col-md-8 col-xs-12">
        <q-input
          @keyup.enter="handleTracking"
          v-model="localData.trackId"
          placeholder="Enter form number"
          class="long-input zsubtitle"
          standout="bg-white text-white"
          rounded
          outlined
        >
          <template v-slot:append>
            <!-- <q-avatar> -->
            <q-btn
              :disable="!localData.trackId"
              @click="handleTracking"
              class="btn-track"
              rounded
              label="Track"
            />
            <!-- {{ localData.data }} -->
            <!-- </q-avatar> -->
          </template>
        </q-input>

        <TrackCard
          @closeDialog="localData.dialog = false"
          v-if="localData.dialog"
          :data="localData.data"
        />
      </div>
    </div>
  </div>

  <div class="bg-white">
    <div
      id="about-us"
      class="container-lg row q-mt-lg justify-center q-col-gutter-lg"
    >
      <div class="col-xs-12 text-center">
        <span class="explore_dept">About Us</span>
      </div>

      <div class="col-sm-12 gt-xs text-center">
        <img class="series" style="width: 90%" src="~assets/group.svg" />
      </div>

      <div class="col-sm-12 lt-sm text-center">
        <img style="width: 100%" src="~assets/about.svg" />
      </div>

      <div class="col-sm-6 col-xs-12 text-center">
        <p class="para">
          Ease of doing business in Mizoram aims to create a platform for
          providing best support towards the prospective and existing business
          community in th state and drives forward the state's vision of
          prosperity for all - by empoying technology, innovation inclusively
          and sutainablility as key factors for development. It provides
          objective measures of business regulations.
        </p>
      </div>

      <div class="col-sm-6 col-xs-12 text-center">
        <p class="para">
          Ease of Doing Business in Mizoram encourages enconomics to compete
          toward more efficient regulation; It looks at domestic small and
          medium-size companies and measures the regulations applying to them
          through their life cycle. Government of Mizoram is there to guide and
          help you set up your industry in the State of Mizoram
        </p>
      </div>
    </div>
  </div>

  <div id="contact-us" class="row q-mt-lg justify-center q-col-gutter-md">
    <div class="col-lg-12 text-center">
      <span class="explore_dept">Contact Us</span>
    </div>
  </div>

  <div class="row q-mt-lg justify-end q-col-gutter-md">
    <div class="col-xs-12 col-md-3 text-center">
      <q-list class="q-p-none contact-us">
        <q-item class="q-pb-none">
          <q-item-section avatar>
            <!-- <img src="~assets/question.png" /> -->
            <q-icon color="primary" name="fmd_good" />
          </q-item-section>

          <q-item-section>
            <q-item-label class="office-address">OFFICE ADDRESS</q-item-label>
            <q-item-label class="commerce"
              >Directorate of Commerce & Industries Department Khatla, Near
              Circuit House Aizawl - 796001, Mizoram
            </q-item-label>
          </q-item-section>
        </q-item>
      </q-list>
      <q-list class="q-pt-none contact-us">
        <q-item class="q-pb-none">
          <q-item-section avatar>
            <q-icon color="primary" name="call" />
          </q-item-section>

          <q-item-section>
            <q-item-label class="office-address">CONTACT NUMBER</q-item-label>
            <q-item-label caption class="commerce">0389-2325706</q-item-label>
          </q-item-section>
        </q-item>
      </q-list>

      <q-list class="q-pt-none contact-us">
        <q-item class="q-pb-none">
          <q-item-section avatar>
            <!-- <q-avatar > -->
            <img src="~assets/mail.png" />
            <!-- </q-avatar> -->
          </q-item-section>

          <q-item-section>
            <q-item-label class="office-address">EMAIL ID</q-item-label>
            <q-item-label caption class="commerce"
              >dirind-mz@gov.in
            </q-item-label>
          </q-item-section>
        </q-item>
      </q-list>

      <q-list class="q-pt-none contact-us">
        <q-item class="q-pb-none">
          <q-item-section avatar>
            <!-- <q-avatar > -->
            <img src="~assets/globe.png" />
            <!-- </q-avatar> -->
          </q-item-section>

          <q-item-section>
            <q-item-label class="office-address">WEBSITE</q-item-label>
            <q-item-label caption class="commerce"
              >Industries.mizoram.gov.in
            </q-item-label>
          </q-item-section>
        </q-item>
      </q-list>
    </div>

    <div class="map-cursor col-xs-12 col-md-7 text-center">
      <!-- <img src="~assets/map.png"  /> -->
      <iframe
        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3652.6998308299926!2d92.717265!3d23.722411!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xaf37fb566d152e65!2sDirectorate%20of%20Industries%2C%20Govt.%20of%20Mizoram!5e0!3m2!1sen!2sin!4v1568975073569!5m2!1sen!2sin"
        width="100%"
        height="100%"
        frameborder="0"
        style="border: 0"
        allowfullscreen=""
      ></iframe>
    </div>
  </div>
</template>

<script>
import { defineComponent, ref, reactive } from "vue";
import { scroll } from "quasar";
import TrackCard from "./TrackCard.vue";
import { useMeta, useQuasar } from "quasar";

import { api } from "src/boot/axios";
const { getScrollTarget, setVerticalScrollPosition } = scroll;

export default defineComponent({
  name: "PageIndex",
  components: {
    TrackCard,
  },

  setup() {
    const localData = reactive({
      trackId: null,
      dialog: false,
      data: {},
    });
    const q = useQuasar();
    // const trackId = ref(null);
    const navigate = (id) => {
      var el = document.getElementById(id);
      const target = getScrollTarget(el);
      const offset = el.offsetTop;
      const duration = 1000;

      setVerticalScrollPosition(target, offset, duration);
    };
    const depts = [
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

    const handleTracking = () => {
      api
        .get(`applications/${localData.trackId}/states`)
        .then((res) => {
          localData.data = res.data;
          // return console.log("status", localData.data);
          localData.dialog = true;
        })
        .catch((err) => {
          // if (err?.response?.data?.errors)
          //   localData.errors = err.response.data?.errors;
          err?.response?.data?.message &&
            q.notify({
              type: "negative",
              message: "Application not found",
            });
        });
    };

    return {
      depts,
      navigate,
      handleTracking,
      localData,
    };
  },
});
</script>

<style>
@import url("https://fonts.googleapis.com/css2?family=Hammersmith+One&family=Poppins&display=swap");

.office-address {
  /* width: 221px;
  height: 32px;
  margin: 52px 415px 113px 13px; */
  font-family: "Hammersmith One";
  font-size: 16px;
  font-weight: bolder;
  font-stretch: normal;
  font-style: normal;
  line-height: 1.88;
  letter-spacing: normal;
  text-align: left;
  color: #393939;
}

.commerce {
  font-family: Poppins;
  font-size: 16px;
  font-weight: normal;
  font-stretch: normal;
  font-style: normal;
  line-height: 1.88;
  letter-spacing: normal;
  text-align: left;
  color: #393939;
}

.para {
  /* width: 700px;
  height: 143px;
  margin: 59.2px 73px 74px 141.3px; */
  font-family: Poppins;
  font-size: 16px;
  font-weight: normal;
  font-stretch: normal;
  font-style: normal;
  line-height: 1.88;
  letter-spacing: normal;
  text-align: left;
  color: #393939;
}

.long-input {
  /* width: 664px;
  height: 56px; */
  /* margin: 56.5px 0 0; */
  /* padding: 8px 8px 8px 28px; */
  /* padding-left: 20px; */
  border-radius: 100px;
  border: solid 1px #a2c4c0;
  background-color: #fff;
}

.contact-us {
  padding: 0px 0px 25px 0px !important;
}

.tile {
  /* width: 398px;
  height: 100px; */
  margin: 0 16px 0px 12px;
  padding: 30px;
  border-radius: 10px;
  background-color: #fff;
}

.btn-dropdown,
.tile-content {
  font-family: "Poppins";
  font-size: 18px;
  font-weight: 600;
  font-stretch: normal;
  font-style: normal;
  letter-spacing: normal;
  text-align: left;
  color: #357c71;
}

.track {
  /* width: 1920px; */
  /* height: 392px; */
  padding: 40px;
  background: url("../../assets/group.png");
}

.explore_dept {
  /* width: 613px;
  height: 70px; */
  /* margin: 15px 506px 29px 521px; */
  font-family: Hammersmith One;
  font-size: 1.6rem;
  font-weight: normal;
  font-stretch: normal;
  font-style: normal;
  line-height: normal;
  letter-spacing: normal;
  text-align: center;
  color: #357c71;

  /* width: 361.5px;
  height: 58px;
  margin: 0 639.5px 56px 639px; */
  background-color: #e7efee;

  padding: 5px 30px;
}

.explore {
  color: #357c71;
  /* width: 222px;
  height: 50px;
  margin: 38px 21px 243px 5px;
  padding: 13.5px 31px; */
  border-radius: 50px;
  background-color: #fff;

  /* width: 160px;
  height: 23px; */
  font-family: "Poppins";
  font-size: 16px;
  font-weight: 600;
  /* font-stretch: normal; */
  /* font-style: normal; */
  /* line-height: normal; */
  /* letter-spacing: normal; */
  /* text-align: center; */
  /* color: #357c71; */
}

.map {
  /* width: 600px;
  height: 672px; */
  margin: 100px 0 0 52px;
  object-fit: contain;
}

.group {
  /* width: 1920px;
  height: 749px; */
  margin: 23.9px 0 0;
  padding-top: 44px;
  /* padding: 44px 197px 33px 140px; */
  /* object-fit: contain; */
}

.content span {
  /* width: 408px;
  height: 60px; */
  font-family: "Hammersmith One";
  /* font-size: 48px; */
  font-weight: normal;
  font-stretch: normal;
  font-style: normal;
  /* line-height: 1.67; */
  letter-spacing: normal;
  text-align: left;
  color: #f5f5f5;
}

.content2 span {
  width: 728px;
  height: 60px;
  font-family: "Hammersmith One";
  /* font-size: 48px; */
  font-weight: normal;
  font-stretch: normal;
  font-style: normal;
  /* line-height: 1.67; */
  letter-spacing: normal;
  text-align: left;
  color: #f5f5f5;
}

.content,
.content2 .heading {
  font: 40px Poppins, sans-serif;
  font-weight: 500 !important;
  font-size: 2.5rem;
  /* color: ; */
}

@media (max-width: 600px) {
  .track {
    background: url("../../assets/bag.png");
  }
  .content span,
  .content2 span {
    font-size: 19px !important;
    font-family: "Hammersmith One";
    /* font-size: 10px; */
    font-weight: normal;
    font-stretch: normal;
    font-style: normal;
    line-height: 1.6;
    letter-spacing: normal;
    text-align: left;
    color: #f5f5f5;
    /* color: olive; */
  }

  .content {
    /* width: 195.5px; */
    /* height: 36.2px; */
    width: 60%;
    margin: 100.6px 148.5px 10.2px 16px;
    padding: 7.4px 40px 3.8px 10px;
    background-color: #357c71;
  }

  .content2 {
    /* width: 328px; */
    width: 90%;
    /* height: 40px; */
    margin: 10.2px 16px 50px;
    padding: 8px 15px 7px 10px;
    background-color: #357c71;
  }
}

@media (min-width: 320px) {
  /* mobile */
  /* .content2,
  .content {
    color: brown;
    width: 100%;
    height: auto;
    padding: 13px 35px 7px 24px;


  } */
  /* .logos {
    display: grid;
    grid-template-columns: 1fr 1fr;
    margin: 0 auto;
    border: none;
  } */
  /* .q-item:last-child {
    display: grid;
    grid-template-columns: 6fr 6fr;
  } */
  .group {
    margin: 0px;
    padding: 0px;
  }

  .content2 span,
  content span {
    width: 100%;
    /* color: darkblue; */
    padding: 0px;
    font-size: 30px;
  }

  .track-form span {
    /* width: 302px;
  height: 37px; */
    font-family: "Hammersmith One";
    font-size: 25px;
    font-weight: normal;
    font-stretch: normal;
    font-style: normal;
    /* line-height: 1.8; */
    letter-spacing: normal;
    text-align: center;
    color: #357c71;
  }

  .track-form {
    background: #fff;
    margin-bottom: 20px;
  }

  .btn-track {
    border-radius: 100px;
    background-color: #357c71;
    color: white;
  }
}

@media (min-width: 481px) {
  /* desktop */
  .content2 span {
    color: #f5f5f5;
  }

  .content {
    width: 80% !important;
    /* height: 80px; */
    margin-top: 152px;
    /* margin: 152px 283.1px 25px 0; */
    padding: 13px 44.9px 7px 24px;
    background-color: #357c71;
  }

  .content2 {
    /* width: 834.5px; */

    /* margin-top: 152px; */
    /* height: 80px; */

    /* margin: 25px 10.5px 38px 0; */
    /* padding: 13px 82.5px 7px 24px; */
    background-color: #357c71;
  }

  .series {
    width: 70% !important;
  }

  .track-form span {
    width: 302px;
    height: 37px;
    font-family: "Hammersmith One";
    font-size: 30px;
    font-weight: normal;
    font-stretch: normal;
    font-style: normal;
    /* line-height: 1.8; */
    letter-spacing: normal;
    text-align: center;
    color: #357c71;
  }

  .btn-track {
    width: 115px;
    height: 40px;
    margin: 0 0 0 235px;
    padding: 8.5px 35.5px;
    border-radius: 100px;
    background-color: #357c71;
    color: white;
  }

  .track-form {
    width: 442.8px;
    height: 56px;
    margin: 0 110.2px 56.5px 111px;
    padding: 9.5px 70.3px 9.5px 70.5px;
    background-color: #fff;
  }

  .content2 {
    /* width: 500.5px; */
    /* width: 100%; */
    /* width: 100%; */
    /* height: 90px; */
    margin: 25px 10.5px 38px 0;
    padding: 13px 82.5px 7px 24px;
  }
}
</style>
