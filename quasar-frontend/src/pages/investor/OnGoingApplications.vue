<template>
  <div class="q-pa-lg">
    <div class="row q-col-gutter-md">
      <div v-if="!localData.length" class="zlabel">
        No Applications so far
      </div>
      <div v-else v-for="item in localData" :key="item.id" class="col-md-3 col-xs-12 col-sm-4">
        <q-card class="zcard">
          <q-card-section>
            <p class="col-xs-12 col-md-3 zvalue ellipsis">
              {{ item.application_name }}
            </p>
            <div class="text-subtitle2">{{ item.regn_no }}</div>
            <div class="text-subtitle2">{{ item.department.dept_name }}</div>
          </q-card-section>
          <q-card-section>
            <div class="text-subtitle2">
              Submitted at {{ dateFilter(item.created_at) }}
            </div>
          </q-card-section>
          <q-card-actions align="left">
            <q-btn
              @click="showApplicantDetail(item.id)"
              color="green"
              outline
              label="Open"
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
import { ref, computed } from "vue";
import { date } from "quasar";
import { useRouter } from "vue-router";

export default {
  setup() {
    const localData = ref([]);
    const router = useRouter();
    onMounted(() => {
      api
        .get("investor/applications")
        .then((res) => {
          localData.value = res.data;
        })
        .catch((err) => {
          console.log("error response", err.message);
        });
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
    };
  },
};
</script>

<style lang="sass">
.my-sticky-header-table
  /* height or max-height is important */
  height: 310px

  .q-table__top,
  .q-table__bottom,
  thead tr:first-child th
    /* bg color is important for th; just specify one */
    background-color: #c1f4cd

  thead tr th
    position: sticky
    z-index: 1
  thead tr:first-child th
    top: 0

  /* this is when the loading indicator appears */
  &.q-table--loading thead tr:last-child th
    /* height of all previous header rows */
    top: 48px
</style>
