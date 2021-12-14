<template>
  <div class="zcard row items-center q-col-gutter-md">
    <div class="col-12 zsubtitle">
      7. Proposed Fixed Capital Investment (FCI) (In Lakhs)
      <div class="row justify-start q-ml-md">
        <div class="col-xs-12 col-md-5">
          <label class="zlabel" for="gender"> 7.1 Land Cost * </label>
        </div>
        <div class="col-xs-12 col-md-5">
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            dense
            outlined
            v-model="formData.proposed_total_proposed_area"
          />
        </div>

        <div class="col-xs-12 col-md-5">
          <label class="zlabel" for="gender"> 7.2 Building Cost * </label>
        </div>
        <div class="col-xs-12 col-md-5">
          <!-- <q-input :rules="[(val) => (val && val.length > 0) || 'Please type something']"  dense outlined v-model="formData.designation" type="text" /> -->
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            dense
            outlined
            v-model="formData.proposed_total_proposed_area"
          />
        </div>

        <div class="col-xs-12 col-md-5">
          <label class="zlabel" for="gender">
            7.3 Plant & Machinery Cost
          </label>
        </div>
        <div class="col-xs-12 col-md-5">
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            dense
            outlined
            v-model="formData.proposed_total_proposed_area"
          />
        </div>

        <div class="col-xs-12 col-md-5">
          <label class="zlabel" for="gender">
            7.4 Cost of miscellaneous assets
          </label>
        </div>
        <div class="col-xs-12 col-md-5">
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            dense
            outlined
            v-model="formData.proposed_total_proposed_area"
          />
        </div>

        <div class="col-xs-12 col-md-5">
          <label class="zlabel" for="gender">
            7.5 Total Project Cost *(Sum of 7.1,7.2 & 7.3)
          </label>
        </div>
        <div class="col-xs-12 col-md-5">
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            dense
            outlined
            v-model="formData.proposed_total_proposed_area"
          />
        </div>
      </div>
    </div>

    <div class="col-12 zsubtitle">
      8. Means of Finance (In Lakhs)
      <div class="row justify-start q-ml-md">
        <div class="col-xs-12 col-md-5">
          <label class="zlabel" for="gender">
            8.1 Bank/Institutional Finance *
          </label>
        </div>
        <div class="col-xs-12 col-md-5">
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            dense
            outlined
            v-model="formData.proposed_total_proposed_area"
          />
        </div>

        <div class="col-xs-12 col-md-5">
          <label class="zlabel" for="gender"> 8.1 Equity Contribution * </label>
        </div>
        <div class="col-xs-12 col-md-5">
          <!-- <q-input :rules="[(val) => (val && val.length > 0) || 'Please type something']"  dense outlined v-model="formData.designation" type="text" /> -->
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            dense
            outlined
            v-model="formData.proposed_total_proposed_area"
          />
        </div>

        <div class="col-xs-12 col-md-5">
          <label class="zlabel" for="gender">
            8.3 Foreign Direct Investment(FDI) *
          </label>
        </div>
        <div class="col-xs-12 col-md-5">
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            dense
            outlined
            v-model="formData.proposed_total_proposed_area"
          />
        </div>

        <div class="col-xs-12 col-md-5">
          <label class="zlabel" for="gender">
            8.4 Govt. of India Subsidy Grant *
          </label>
        </div>
        <div class="col-xs-12 col-md-5">
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            dense
            outlined
            v-model="formData.proposed_total_proposed_area"
          />
        </div>

        <div class="col-xs-12 col-md-5">
          <label class="zlabel" for="gender"> 8.5 Other Means * </label>
        </div>
        <div class="col-xs-12 col-md-5">
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            dense
            outlined
            v-model="formData.proposed_total_proposed_area"
          />
        </div>
      </div>
    </div>

    <div class="col-12 zsubtitle">
      9. Proposed Employment (Numbers)
      <div class="row justify-start q-ml-md">
        <div class="col-xs-12 col-md-5">
          <label class="zlabel" for="gender"> 9.1 Direct Male * </label>
        </div>
        <div class="col-xs-12 col-md-5">
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            dense
            outlined
            v-model="formData.proposed_total_proposed_area"
          />
        </div>

        <div class="col-xs-12 col-md-5">
          <label class="zlabel" for="gender"> 9.2 Direct Female *</label>
        </div>
        <div class="col-xs-12 col-md-5">
          <!-- <q-input :rules="[(val) => (val && val.length > 0) || 'Please type something']"  dense outlined v-model="formData.designation" type="text" /> -->
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            dense
            outlined
            v-model="formData.proposed_total_proposed_area"
          />
        </div>

        <div class="col-xs-12 col-md-5">
          <label class="zlabel" for="gender"> 9.3 Indirect Male * </label>
        </div>
        <div class="col-xs-12 col-md-5">
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            dense
            outlined
            v-model="formData.proposed_total_proposed_area"
          />
        </div>

        <div class="col-xs-12 col-md-5">
          <label class="zlabel" for="gender"> 9.4 Indirect Female * </label>
        </div>
        <div class="col-xs-12 col-md-5">
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            dense
            outlined
            v-model="formData.proposed_total_proposed_area"
          />
        </div>

        <div class="col-xs-12 col-md-5">
          <label class="zlabel" for="gender"> 9.5 Total Male *</label>
        </div>
        <div class="col-xs-12 col-md-5">
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            dense
            outlined
            v-model="formData.proposed_total_proposed_area"
          />
        </div>

        <div class="col-xs-12 col-md-5">
          <label class="zlabel" for="gender"> 9.6 Total Female *</label>
        </div>
        <div class="col-xs-12 col-md-5">
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            dense
            outlined
            v-model="formData.proposed_total_proposed_area"
          />
        </div>
      </div>
    </div>

    <div class="col-12 zsubtitle">
      10. Proposed Project Schedule
      <div class="row justify-start q-ml-md">
        <div class="col-xs-12 col-md-5">
          <label class="zlabel" for="gender">
            10.1 Start of Project Construction *
          </label>
        </div>
        <div class="col-xs-12 col-md-5">
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            dense
            outlined
            v-model="formData.proposed_total_proposed_area"
          />
        </div>

        <div class="col-xs-12 col-md-5">
          <label class="zlabel" for="gender">
            10.2 Start of Commercial Activity *</label
          >
        </div>
        <div class="col-xs-12 col-md-5">
          <!-- <q-input :rules="[(val) => (val && val.length > 0) || 'Please type something']"  dense outlined v-model="formData.designation" type="text" /> -->
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            dense
            outlined
            v-model="formData.proposed_total_proposed_area"
          />
        </div>
      </div>
    </div>

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

    <div class="col-xs-12 col-md-2">
      <label class="zlabel" for="name">
        6.4 Project type *
        <span class="asterisk"> *</span></label
      >
    </div>
    <div style="display: grid" class="col-xs-12 col-md-10">
      <q-radio
        v-model="formData.project_type"
        val="Construction Project(Civil Engineering, Construction, Petrochemical,Mining and Quarring)"
        label="Construction Project(Civil Engineering, Construction, Petrochemical,Mining and Quarring)"
      />
      <q-radio
        v-model="formData.project_type"
        val="Manufacturing Project"
        label="Manufacturing Project"
      />
      <q-radio
        v-model="formData.project_type"
        val="Service(Automobile and other repairs, Real Estate and Renting Activities, ITES, Insurance, Financial Services, Hostels and Restaurants, transportation, Warehouse and Cold Storage Service, Health Care and diagnostic centres etc."
        label="Service(Automobile and other repairs, Real Estate and Renting Activities, ITES, Insurance, Financial Services, Hostels and Restaurants, transportation, Warehouse and Cold Storage Service, Health Care and diagnostic centres etc."
      />
    </div>

    <div class="col-xs-12 col-md-2">
      <label class="zlabel" for="dob" type="date">
        6.5 Category of project *
      </label>
    </div>
    <div class="col-xs-12 col-md-4">
      <q-radio v-model="formData.project_category" val="yes" label="Yes" />
      <q-radio v-model="formData.project_category" val="no" label="No" />
    </div>

    <div class="col-xs-12 col-md-3">
      <label class="zlabel" for="gender">
        6.7 Detailed Project Report (DPR) / Concept Note* ( Maximum size : 4 MB
        Format : PDF )
        <span class="asterisk">*</span></label
      >
    </div>
    <div class="col-xs-12 col-md-3">
      <q-file v-model="formData.project_report" dense outlined>
        <template v-slot:prepend>
          <q-icon name="attach_file" />
        </template>
      </q-file>
    </div>

    <div class="col-12 text-caption">
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
import { onMounted } from "vue";
import { date } from "quasar";

export default {
  setup(props, context) {
    const store = useStore();

    const formData = reactive({
      proposed_sector: "",
      proposed_project_purpose: "",

      proposed_industry_size: "",

      project_type: "",

      project_category: "",

      foreign_colab: "",

      project_report: null,
    });
    onMounted(() => {});
    return {
      formData,
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
