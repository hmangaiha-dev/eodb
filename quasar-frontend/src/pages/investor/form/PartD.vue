<template>
  <div class="zcard row items-center q-col-gutter-md">
    <q-dialog v-model="dialog">
      <q-card class="col-12">
        <q-card-section>
          <embed :src="attachment" width="900" height="900" />
        </q-card-section>
      </q-card>
    </q-dialog>
    <div class="col-12 zsubtitle">
      6. Project Details
      <div class="row justify-start q-col-gutter-md q-ml-md">
        <div class="col-xs-12 col-md-5">
          <label class="zlabel" for="gender"> 6.1 Sector * </label>
        </div>
        <div class="col-xs-12 col-md-5">
          <!-- <q-input :rules="[(val) => (val && val.length > 0) || 'Please type something']"   outlined v-model="formData.designation" type="text" /> -->
          <q-select
            dropdown-icon="expand_more"
            v-model="formData.project_sector"
            :options="proposed_sectors"
            outlined
          />
        </div>

        <div class="col-xs-12 col-md-5">
          <label class="zlabel" for="gender"> 6.2 Project Purpose </label>
        </div>
        <div class="col-xs-12 col-md-5">
          <!-- <q-input :rules="[(val) => (val && val.length > 0) || 'Please type something']"   outlined v-model="formData.designation" type="text" /> -->
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            outlined
            v-model="formData.project_purpose"
          />
        </div>

        <div class="col-xs-12 col-md-5">
          <label class="zlabel" for="gender">
            6.3 Size of industry * (Includes both manufacturing and Service
            Sector)
          </label>
        </div>
        <div class="col-xs-12 col-md-5">
          <q-select
            dropdown-icon="expand_more"
            v-model="formData.industry_size"
            :options="proposed_industries"
            outlined
          />
        </div>
      </div>
    </div>

    <div class="col-12 text-caption">
      The limit investment in plan and machinery / equipment for manufacturing /
      service enterprises, as notified vide S.O. 1642(E) dtd.29-09-2006 of MSME
      are as under
    </div>

    <div class="col-12 zlabel">#Manufacturing Sector</div>

    <div class="col-12 text-center">
      <q-markup-table>
        <thead>
          <tr>
            <th>Enterprises</th>
            <th>Investment in plant &amp; machinery</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Micro Enterprises</td>
            <td>Does not exceed twenty-five lakh rupees</td>
          </tr>
          <tr>
            <td>Small Enterprises</td>
            <td>
              More than twenty-five lakh rupees but does not exceed five crore
              rupees
            </td>
          </tr>
          <tr>
            <td>Medium Enterprises</td>
            <td>
              More than five crore rupees but does not exceed ten crore rupees
            </td>
          </tr>
        </tbody>
      </q-markup-table>
    </div>

    <div class="col-12 zlabel">#Service Sector</div>

    <div class="col-12 text-center">
      <q-markup-table class="table table-bordered">
        <thead>
          <tr>
            <th>Enterprises</th>
            <th>Investment in equipment</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Micro Enterprises</td>
            <td>Does not exceed ten lakh rupees</td>
          </tr>
          <tr>
            <td>Small Enterprises</td>
            <td>
              More than ten lakh rupees but does not exceed two crore rupees
            </td>
          </tr>
          <tr>
            <td>Medium Enterprises</td>
            <td>
              More than two crore rupees but does not exceed five crore rupees
            </td>
          </tr>
        </tbody>
      </q-markup-table>
    </div>

    <div class="col-xs-12">
      <label class="zlabel" for="name">
        6.4 Project type *
        <span class="asterisk"> *</span></label
      >
      <br />

      <q-radio
        v-model="formData.project_type"
        class="zlabel"
        val="Construction Project(Civil Engineering, Construction, Petrochemical,Mining and Quarring)"
        label="Construction Project(Civil Engineering, Construction, Petrochemical,Mining and Quarring)"
      />
      <br />
      <q-radio
        v-model="formData.project_type"
        class="zlabel"
        val="Manufacturing Project"
        label="Manufacturing Project"
      />
      <br />
      <q-radio
        v-model="formData.project_type"
        class="zlabel"
        val="Service(Automobile and other repairs, Real Estate and Renting Activities, ITES, Insurance, Financial Services, Hostels and Restaurants, transportation, Warehouse and Cold Storage Service, Health Care and diagnostic centres etc."
        label="Service(Automobile and other repairs, Real Estate and Renting Activities, ITES, Insurance, Financial Services, Hostels and Restaurants, transportation, Warehouse and Cold Storage Service, Health Care and diagnostic centres etc."
      />
    </div>
    <br />
    <!-- <div class="col-xs-12 col-md-10"> -->

    <!-- </div> -->

    <div class="col-xs-12 col-sm-10">
      <label class="zlabel" for="dob" type="date">
        6.5 Category of project *
      </label>

      <q-select
        v-model="formData.project_category"
        :options="['Greenfield', 'Brownfield']"
        outlined
      />
    </div>

    <div class="col-12">
      <label for="" class="zlabel">
        6.6 If collaboration with foreign investor / Outside of state investor
      </label>
      <div class="row q-ml-md">
        <div class="col-xs-12 col-sm-10">
          <label for="" class="zlabel"> a) If yes, Name of the investor </label>
          <q-input outlined v-model="formData.foreign_investor_name" />
        </div>
        <div class="col-xs-12 col-sm-10">
          <label for="" class="zlabel">
            b) Name of the country of origin
          </label>
          <q-input outlined v-model="formData.foreign_investor_country" />
        </div>
        <div class="col-xs-12 col-sm-10">
          <label for="" class="zlabel">c) Address and Contact number </label>
          <q-input outlined v-model="formData.foreign_investor_address" />
        </div>
      </div>
    </div>

    <div class="col-xs-12 col-sm-10">
      <label class="zlabel" for="gender">
        6.7 Detailed Project Report (DPR) / Concept Note* ( Maximum size : 4 MB
        Format : PDF )
        <span class="asterisk">*</span></label
      >
      <q-uploader
        @removed="formData.detail_project_report = null"
        accept=".pdf"
        flat
        @added="
          (files) => {
            formData.detail_project_report = files[0];
          }
        "
        hide-upload-btn
        ref="formData.applicant_photo"
        color="grey"
        v-model="formData.detail_project_report"
        url="http://localhost:4444/upload"
        style="max-width: 300px"
      />

      <q-img
        v-if="mimeType(formData.detail_project_report)"
        :src="`http://localhost:8000/storage/${formData.detail_project_report}`"
        style="max-width: 150px; max-height: 150px; margin-top: -54px"
        spinner-color="primary"
        spinner-size="82px"
      />

      <!-- {{ typeof formData.udyog_memorandum }} -->

      <q-btn
        v-if="
          typeof formData.detail_project_report !== 'object' &&
          !mimeType(formData.detail_project_report)
        "
        flat
        style="max-width: 150px; margin-top: -100px"
        color="primary"
        icon="o_picture_as_pdf"
        label="view"
        @click="showAttachment(formData.detail_project_report)"
      />

      <!-- <q-img
        v-if="
          !Array.isArray(formData.detail_project_report) &&
          formData.detail_project_report
        "
        :src="`http://localhost:8000/storage/${formData.detail_project_report}`"
        style="max-width: 150px; margin-top: -54px"
        spinner-color="primary"
        spinner-size="82px"
      /> -->
    </div>

    <div class="col-12 zlabel">
      NOTE <br />
      a) DPR Should also contain applicable manufacturing/service process flow
      chart, list of machineries, list of products/services; list of raw
      materials <br />
      OR <br />
      b) Standard Concept Note format as prescribed by Department of Commerce &
      Industries to be submitted
    </div>

    <div class="col-xs-12" />
  </div>
</template>

<script>
import { reactive } from "@vue/reactivity";
import { useStore } from "vuex";
import { onMounted, watch, ref } from "vue";
import { date } from "quasar";

export default {
  setup(props, context) {
    const store = useStore();
    const dialog = ref(false);
    const attachment = ref("");

    let formData = reactive({
      project_sector: "",
      project_purpose: "",
      industry_size: "",
      project_type: "",
      project_category: "",
      foreign_investor_name: "",
      foreign_investor_country: "",
      foreign_investor_address: "",
      detail_project_report: null,
      model: "D",
    });
    const getD = () =>
      (formData = Object.assign(
        formData,
        store.state.globalData.common?.partD
      ));

    onMounted(() => getD());

    watch(store.state.globalData.common, () => getD());
    return {
      formData,
      dialog,
      attachment,

      mimeType: (val) => {
        // return console.log(typeof val);
        let index = String(val).lastIndexOf(".");
        let mime = String(val).substring(index + 1);
        return typeof val === "string" && val ? mime != "pdf" : false;
      },
      getD,
      showAttachment: (val) => {
        console.log("dialog attach", val);
        // return
        attachment.value = "http://localhost:8000/storage/" + val;
        dialog.value = true;
      },
      industrial_areas: [
        "Industrial Growth Centre, Luangmual",
        "Industrial Estate, Zuangtui",
        "Export Promotion Industrial Park, Lengte",
      ],
      proposed_sectors: ["Manufacturing", "Service"],
      proposed_industries: ["Micro", "Small", "Medium", "Large"],
      project_categories: ["Greenfield", "Brownfield"],
      maxDate: () => date.formatDate(Date.now(), "YYYY-MM-DD"),
    };
  },
};
</script>
