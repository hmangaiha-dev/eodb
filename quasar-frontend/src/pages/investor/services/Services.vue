<template>
  <q-page>
    <div class="banner-dept">
      <div class="contain container-lg">
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
    </div>

    <div
      class="row q-col-gutter-md q-pa-sm container-lg"
    >
      <div style="width: 100%" class="col-12 q-pa-md">
        <q-toolbar class="justify-center bg-white shadow-1 ">
          <q-item :focused="tab==='services'" clickable @click="tab='services'">
            <q-item-section>
              <q-item-label class="nav-item">Online Services</q-item-label>
            </q-item-section>
          </q-item>
          <q-item  :focused="tab==='about'"   clickable @click="tab='about'">
            <q-item-section>
              <q-item-label class="nav-item">About Us</q-item-label>
            </q-item-section>
          </q-item>
          <q-item :focused="tab==='actrules'"  clickable @click="tab='actrules'">
            <q-item-section>
              <q-item-label class="nav-item">Act & Rules</q-item-label>
            </q-item-section>
          </q-item>
          <q-item :focused="tab==='noti'"  class="nav-item" clickable @click="tab='noti'">
            <q-item-section>
              <q-item-label class="nav-item">Notifications</q-item-label>
            </q-item-section>
          </q-item>
          <q-item :focused="tab==='other'"  class="nav-item" clickable @click="tab='other'">
            <q-item-section>
              <q-item-label class="nav-item">Other Information</q-item-label>
            </q-item-section>
          </q-item>
        </q-toolbar>
        <br/>
        <div class="znhovercard">
          <q-tabs
            v-if="tab == 'services'"
            stretch
            v-model="tabCategory"
            class="bg-grey-3 q-mt-md text-grey-8 "
          >
            <q-tab name="ALL-CATEGORIES" label="All Categories" />
            <q-tab name="PRE-ESTABLISHMENT" label="PRE-ESTABLISHMENT" />
            <q-tab name="POST-ESTABLISHMENT" label="POST-ESTABLISHMENT" />
            <q-tab name="POST-COMMENCEMENT" label="POST-COMMENCEMENT" />
            <q-tab name="PRE-PROCESSING" label="PRE-PROCESSING" />
            <q-tab name="POST-PROCESSING" label="POST-PROCESSING" />
          </q-tabs>
          <q-tab-panels class="full-width" v-model="tab" animated>
            <q-tab-panel name="services">
              <q-table
                v-model:pagination="pagination"
                @request="onRequest"
                wrap-cells
                flat
                title="Online Services"
                :columns="columns"
                :rows="rows"
                row-key="id"
              >
                <template v-slot:body="props">
                  <q-tr :props="props">
                    <q-td key="id" :props="props"> {{ props.row.id }}. </q-td>
                    <q-td key="service_name" :props="props">
                      {{ props.row.service_name }}
                    </q-td>

                    <q-td key="how_to_apply" :props="props">
                      <q-btn
                        @click="
                        showDialog(props.row.how_to_apply, 'How to apply')
                      "
                        class="text-weight-regular"
                        color="blue-6"
                        flat
                        label="View procedure"
                      />
                    </q-td>
                    <q-td key="who_should_apply" :props="props">
                      <q-btn
                        @click="
                        showDialog(
                          props.row.who_should_apply,
                          'Who should apply'
                        )
                      "
                        class="text-weight-regular"
                        color="blue-6"
                        flat
                        label="View"
                      />
                    </q-td>
                    <q-td key="document_to_submit" :props="props">
                      <q-btn
                        @click="
                        showDialog(
                          props.row.document_to_submit,
                          'Document to be submitted'
                        )
                      "
                        class="text-weight-regular"
                        color="blue-6"
                        flat
                        label="View"
                      />
                    </q-td>
                    <q-td key="timeline" :props="props">
                      <q-btn
                        @click="showDialog(props.row.timeline, 'Timeline')"
                        class="text-weight-regular"
                        color="blue-6"
                        flat
                        label="View"
                      />
                    </q-td>
                    <q-td key="fees" :props="props">
                      <q-btn
                        @click="showDialog(props.row.fees, 'Fees')"
                        class="text-weight-regular"
                        color="blue-6"
                        flat
                        label="View fees"
                      />
                    </q-td>
                    <q-td key="sample_form" :props="props">
                      <q-btn
                        class="text-weight-regular"
                        color="blue-6"
                        flat
                        label="Download"
                      />
                    </q-td>
                    <q-td key="path" :props="props">
                      <q-btn
                        class="text-weight-regular"
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
    </div>

    <q-dialog v-model="dialog">
      <q-card style="min-width: 20%">
        <q-card-section>
          <div class="text-h6">{{ dialogKey }}</div>
        </q-card-section>

        <q-card-section v-html="dialogContent" />

        <q-card-actions align="right">
          <q-btn flat label="OK" color="primary" v-close-popup />
        </q-card-actions>
      </q-card>
    </q-dialog>
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
import { useStore } from "vuex";
// import { ref } from "vue";

console.log("declare");

export default {
  components: {
    AboutUs,
    ActRules,
    ApplyService,
    Notifications,
    OtherInfo,
    MsegsFooter,
  },

  setup(props, context) {
    const rows = ref([]);
    const dialog = ref(false);
    const dialogKey = ref("");
    const dialogContent = ref("");
    // console.log('rows',rows.value);
    const pagination = ref({
      sortBy: "desc",
      descending: false,
      page: 1,
      rowsPerPage: 3,
      // rowsNumber: 11,
      // rowsNumber: 10
    });

    const route = useRoute();

    const store = useStore();

    const router = useRouter();

    const tabCategory = ref("ALL-CATEGORIES");

    const dept_name = ref("");

    const localData = reactive({
      category: "ALL-CATEGORIES",
    });

    onMounted(async () => {
      await api
        .get("department/services")
        .then((res) => {
          deptServices = res.data;
        })
        .catch((err) => console.log("error", err));

      refresh();

      onRequest();
    });

    function onRequest(props) {
      pagination.value.rowsPerPage = rows.value.length;
    }

    watch(
      () => tabCategory.value,
      (newvalue, oldValue) => {
        refresh();

        if (newvalue === "ALL-CATEGORIES") return;

        const finalResult = rows.value.filter((service) => {
          return service?.operational_type == newvalue;
        });

        rows.value = finalResult;

        pagination.rowsPerPage = rows.value.length;
      }
    );

    watch(
      () => route.params.deptname,
      () => {
        if (route.name != "common:create") return;

        refresh();
      }
    );

    const refresh = () => {
      const result = deptServices.filter((dept, index) => {
        // console.log('dept value and index',dept.slug,index);
        return dept.slug == route.params.deptname;
      });

      dept_name.value = result[0].dept_name;

      !result.length && router.push({ name: "invalid" });

      rows.value = result[0]?.services;

      pagination.rowsPerPage = rows.value.length;

      rows.value.forEach((row, index) => {
        row.id = index + 1;
        // console.log("row and index", row, index);
      });
    };

    const showDialog = (value, key) => {
      // console.log("id and key", value,key);
      dialogKey.value = key;
      dialogContent.value = value;
      dialog.value = true;
    };

    const columns = ref([
      {
        name: "id",
        align: "center",
        label: "#",
        field: "id",
        sortable: true,
      },
      {
        name: "service_name",
        align: "left",
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
      {
        name: "sample_form",
        align: "center",
        label: "Download Form",
        field: "sample_form",
      },
      {
        name: "path",
        required: true,
        label: "Apply Online",
        align: "center",
        field: "path",

        sortable: true,
      },
    ]);

    var deptServices = [];

    return {
      rows,
      columns,
      pagination,
      route,
      router,
      dept_name,
      localData,
      onRequest,
      tab: ref("services"),
      tabCategory,
      deptServices,
      categories: [
        "ALL-CATEGORIES",
        "PRE-ESTABLISHMENT",
        "POST-ESTABLISHMENT",
        "POST-COMMENCEMENT",
        "PRE-OPERATION",
        "POST-OPERATION",
      ],
      refresh,
      dialog,
      dialogKey,
      dialogContent,
      showDialog,
      // filterCategory,
      test: (value) => {
        console.log("dfdf", value);
      },
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
