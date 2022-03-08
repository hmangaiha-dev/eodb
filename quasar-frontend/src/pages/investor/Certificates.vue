<template>
  <div class="q-pa-lg">
    <div class="row q-col-gutter-md">
      <q-card class="col-md-6 col-xs-12" v-if="localData.loading">
        <q-item>
          <q-item-section avatar>
            <q-skeleton type="QAvatar" />
          </q-item-section>

          <q-item-section>
            <q-item-label>
              <q-skeleton type="text" />
            </q-item-label>
            <q-item-label caption>
              <q-skeleton type="text" />
            </q-item-label>
          </q-item-section>
        </q-item>

        <q-skeleton height="200px" square />

        <q-card-actions align="right" class="q-gutter-md">
          <q-skeleton type="QBtn" />
          <q-skeleton type="QBtn" />
        </q-card-actions>
      </q-card>

      <div class="col-12 ztitle text-start">My Certificates</div>
      <div v-if="!localData.certs.length" class="zlabel">
        No Certificates to show
      </div>
      <div
        v-else
        v-for="item in localData.certs"
        :key="item"
        class="col-md-4 col-lg-3 col-sm-6 col-xs-12"
      >
        <q-card>
          <q-img :ratio="16 / 9" src="~assets/cert.png">
            <div class="absolute-bottom text-h6">{{ item?.name }}</div>
          </q-img>

          <q-card-section class="text-body1">
            {{ item.application?.application_code }}
            <div class="zlabel ellipsis">
              {{ item.application?.application_name }}
            </div>
          </q-card-section>

          <q-card-actions class="q-py-none" align="right">
            <span class="q-ml-sm zlabel"> {{ item.remark }} </span>
            <q-space />
            <q-btn
              size="lg"
              @click="handleDownload(item.full_path)"
              flat
              round
              color="teal"
              icon="download"
            />
          </q-card-actions>
        </q-card>
      </div>
    </div>
  </div>
</template>

<script>
import { api } from "src/boot/axios";
import { onMounted } from "vue";
import { reactive } from "@vue/reactivity";
import { ref, computed } from "vue";
import { date } from "quasar";
import { useRouter } from "vue-router";
import { useStore } from "vuex";

export default {
  setup(props, context) {
    const store = useStore();
    const localData = reactive({
      certs: [],
      loading: true,
    });

    localData.certs = computed(() => store.state.globalData.certs);
    const router = useRouter();
    onMounted(() => {
      return localData.loading = false
    });

  

    const dateFilter = (dt) => {
      return date.formatDate(new Date(dt), "DD/MM/YYYY hh:mm a");
    };
    return {
      localData,
      router,
      date,
      dateFilter,
      showApplicantDetail: (id) => {
        // return console.log("show app detail",id);
        router.push({
          name: "investor:show-applicant",
          params: {
            id: id,
          },
        });
      },
      handleDownload: (url) => {
        window.open(url, "_blank").focus();
        // console.log(url);
      },
     
    };
  },
};
</script>
