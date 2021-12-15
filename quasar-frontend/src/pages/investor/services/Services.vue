<template>
  <q-page>
    <div class="full-width banner-dept">
      <div
        class="row q-px-md q-pt-xl justify-between q-col-gutter-md"
        style="max-width: 1400px; margin: 0 auto"
      >
        <div
          class="text-h4 text-center full-width text-white bg-grey-8 q-pa-xl"
        >
          {{ dept_name }}
        </div>
        <br />
        <div class="col-4">
          <q-card flat>
            <q-card-section>
              <div class="text-h6">P. Jawahar</div>
            </q-card-section>
            <q-card-section>
              <div>Secretary</div>
              <div>{{ dept_name }}</div>
            </q-card-section>
          </q-card>
        </div>
        <div class="col-4">
          <q-card flat>
            <q-card-section>
              <div class="text-h6">J. Hmingthanmawia</div>
            </q-card-section>
            <q-card-section>
              <div>Director</div>
              <div>{{ dept_name }}</div>
            </q-card-section>
          </q-card>
        </div>
      </div>
    </div>
    <div
      style="max-width: 1600px; margin: 0 auto"
      class="row q-mt-md q-col-gutter-md q-pa-sm"
    >
      <div style="width: 100%" class="col-12 q-pa-md">
        <q-tabs stretch v-model="tab" class="text-teal">
          <q-tab name="services" icon="mails" label="Online Services" />
          <q-tab name="about" icon="alarm" label="About Us" />
          <q-tab name="actrules" icon="movie" label="Act & Rules" />
          <q-tab name="noti" icon="movie" label="Noftifications" />
          <q-tab name="other" icon="movie" label="Other Infomations" />
        </q-tabs>

        <div class="row q-my-lg q-ml-md">
          <div class="col-4">
            <q-select
              dense
              dropdown-icon="expand_more"
              v-model="localData.category"
              :options="categories"
              label="Select category"
              emit-value
            />
          </div>

          <div class="col-3 q-ml-md">
            <q-btn color="blue" label="Filter" @click="getSelectedCategory" />
          </div>
        </div>

        <q-tab-panels class="full-width" v-model="tab" animated>
          <q-tab-panel name="services">
            <q-table
              bordered
              wrap-cells
              flat
              title="Online Services"
              :columns="columns"
              :rows="rows"
              row-key="name"
            >
              <template v-slot:body="props">
                <q-tr :props="props">
                  <q-td key="service_name" :props="props">
                    {{ props.row.service_name }}
                  </q-td>
                  <q-td key="who_should_apply" :props="props">
                    <q-btn color="blue-6" flat label="View" />
                  </q-td>
                  <q-td key="how_to_apply" :props="props">
                    <q-btn color="blue-6" flat label="View procedure" />
                  </q-td>
                  <q-td key="document_to_submit" :props="props">
                    <q-btn color="blue-6" flat label="View" />
                  </q-td>
                  <q-td key="timeline" :props="props">
                    <q-btn color="blue-6" flat label="View fees" />
                  </q-td>
                  <q-td key="fees" :props="props">
                    <q-btn color="blue-6" flat label="Download" />
                  </q-td>
                  <q-td key="sample_form" :props="props">
                    <q-btn color="blue-6" flat label="Download" />
                  </q-td>
                  <q-td key="path" :props="props">
                    <q-btn
                      :to="`/investor/${route.params.deptname}/${props.row.path}`"
                      color="blue-6"
                      label="Apply"
                    />
                  </q-td>
                </q-tr>
                <!-- <q-tr :props="props"> -->
                <!-- </q-tr> -->
              </template>
            </q-table>
          </q-tab-panel>
          <q-tab-panel name="about">
            <AboutUs />
          </q-tab-panel>
          <q-tab-panel name="actrules">
            <ActRules />
          </q-tab-panel>
          <q-tab-panel name="noti">
            <Notifications />
          </q-tab-panel>
          <q-tab-panel name="other">
            <OtherInfo />
          </q-tab-panel>
        </q-tab-panels>
      </div>
    </div>
  </q-page>
</template>

<script>
import AboutUs from "./AboutUs.vue";
import { useRoute, useRouter } from "vue-router";
import ActRules from "./ActRules.vue";
import ApplyService from "./ApplyService.vue";
import Notifications from "./Notifications.vue";
// import Notifications from "./Notifications.vue";
import MsegsFooter from "components/MsegsFooter.vue";
import { ref, onMounted, watch, reactive } from "vue";
import { api } from "src/boot/axios";
import OtherInfo from "./OtherInfo.vue";
import { useStore } from 'vuex'
// import { ref } from "vue";

console.log("declare");
export default {
  components: {
    AboutUs,
    ActRules,
    ApplyService,
    Notifications,
    Notifications,
    OtherInfo,
    MsegsFooter,
  },
  setup(props, context) {
    const route = useRoute();

    const store = useStore();

    // store.dispatch('globalData/fetchDeptServices');

    
    const router = useRouter();

    const dept_name = ref("");
 
    const localData = reactive({
      category: "",
    });

    onMounted(async() => {
      console.log('service mounted');
      // refresh();
      await api
        .get("department/services")
        .then((res) => {
          deptServices = res.data
        })
        .catch((err) => console.log("error", err));


        refresh();
    });

    watch(
      () => route.params.deptname,
      () => {
        if (route.name != "common:create") return;

        console.log("route name", route.name);

        console.log("route changed investor");

        refresh();
      }
    );

    const refresh = () => {
      const result = deptServices.filter((dept) => {
        // console.log('dept value',dept.slug);
        return dept.slug == route.params.deptname;
      });


      dept_name.value = result[0].dept_name;

      !result.length && router.push({ name: "invalid" });

      rows.value = result[0]?.services;
    };

    function getSelectedCategory(e) {
      console.log("selected target", localData.category);
    }

    const columns = ref([
      {
        name: "service_name",
        align: "center",
        label: "Name of services",
        field: "service_name",
        sortable: true,
      },

      {
        name: "how_to_apply",
        align: "center",
        label: "How to apply",
        field: "how_to_apply",
      },
      {
        name: "who_should_apply",
        align: "center",
        label: "Who should apply?",
        field: "who",
        sortable: true,
      },
      {
        name: "document_to_submit",
        align: "center",
        label: "Document to be submitted",
        field: "document_to_submit",
      },
      {
        name: "timeline",
        align: "center",
        label: "Timeline",
        field: "timeline",
      },
      { name: "fees", align: "center", label: "Fees", field: "fees" },
      { name: "sample_form", align: "center", label: "Download Form", field: "sample_form" },
      {
        name: "path",
        required: true,
        label: "Apply Online",
        align: "center",
        field: "path",

        sortable: true,
      },
    ]);

    const rows = ref([
      {
        name: "Application For Allotment Of Industrial Plot",
        who: 159,
        how: 6.0,
        document: 24,
        timeline: 4.0,
        fees: 87,
        form: "14%",
        path: "1%",
      },
    ]);

    var deptServices = [];
    // onMounted(() => {
    //   refresh();
    // });

    // console.log("layouts is".Layouts);
    return {
      rows,
      columns,
      route,
      router,
      dept_name,
      localData,
      tab: ref("services"),
      deptServices,
      categories: [
        "PRE-ESTABLISHMENT",
        "POST-ESTABLISHMENT",
        "POST-COMMENCEMENT",
        "PRE-OPERATION",
        "POST-OPERATION",
      ],
      refresh,
      getSelectedCategory,
    };
  },
};
</script>

<style>
.banner-dept {
  background-image: url("https://eodbmizoram.gov.in/images/commerce/departmentbackground.png");
  width: 100%;
  height: 400px;
}
</style>
