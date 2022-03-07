<template>
  <div class="q-pa-lg">
    <div class="row q-col-gutter-md">
      <div class="col-md-4 col-xs-12">
        <q-card class="my-card">
          <q-img src="~assets/cert.png">
            <div class="absolute-bottom text-h6">Title</div>
          </q-img>

          <q-card-section>
            {{ lorem }}
          </q-card-section>
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
      lorem:
        "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",
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
