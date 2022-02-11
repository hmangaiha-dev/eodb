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
            
            outlined
            v-model="formData.land_cost"
          />
        </div>

        <div class="col-xs-12 col-md-5">
          <label class="zlabel" for="gender"> 7.2 Building Cost * </label>
        </div>
        <div class="col-xs-12 col-md-5">
          <!-- <q-input :rules="[(val) => (val && val.length > 0) || 'Please type something']"   outlined v-model="formData.designation" type="text" /> -->
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            
            outlined
            v-model="formData.building_cost"
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
            
            outlined
            v-model="formData.plant_machinery_cost"
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
            
            outlined
            v-model="formData.misc_cost"
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
            
            outlined
            v-model="formData.total_project_cost"
          />
        </div>
      </div>
    </div>

    <div class="col-12 zsubtitle">
      8. Means of Finance (In Lakhs)
      <div class="row items-center justify-start q-ml-md">
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
            
            outlined
            v-model="formData.bank_finance"
          />
        </div>

        <div class="col-xs-12 col-md-5">
          <label class="zlabel" for="gender"> 8.1 Equity Contribution * </label>
        </div>
        <div class="col-xs-12 col-md-5">
          <!-- <q-input :rules="[(val) => (val && val.length > 0) || 'Please type something']"   outlined v-model="formData.designation" type="text" /> -->
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            
            outlined
            v-model="formData.equity_contribution"
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
            
            outlined
            v-model="formData.foreign_direct_invest"
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
            
            outlined
            v-model="formData.subsidy_grant"
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
            
            outlined
            v-model="formData.other_means"
          />
        </div>
      </div>
    </div>

    <div class="col-12 zsubtitle">
      9. Proposed Employment (Numbers)
      <div class="row items-center justify-start q-ml-md">
        <div class="col-xs-12 col-md-5">
          <label class="zlabel" for="gender"> 9.1 Direct Male * </label>
        </div>
        <div class="col-xs-12 col-md-5">
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            
            outlined
            v-model="formData.direct_male"
          />
        </div>

        <div class="col-xs-12 col-md-5">
          <label class="zlabel" for="gender"> 9.2 Direct Female *</label>
        </div>
        <div class="col-xs-12 col-md-5">
          <!-- <q-input :rules="[(val) => (val && val.length > 0) || 'Please type something']"   outlined v-model="formData.designation" type="text" /> -->
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            
            outlined
            v-model="formData.direct_female"
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
            
            outlined
            v-model="formData.indirect_male"
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
            
            outlined
            v-model="formData.indirect_female"
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
            
            outlined
            v-model="formData.total_male"
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
            
            outlined
            v-model="formData.total_female"
          />
        </div>
      </div>
    </div>

    <div class="col-12 zsubtitle">
      10. Proposed Project Schedule
      <div class="row items-center justify-start q-ml-md">
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
            
            outlined
            v-model="formData.project_start"
          />
        </div>

        <div class="col-xs-12 col-md-5">
          <label class="zlabel" for="gender">
            10.2 Start of Commercial Activity *</label
          >
        </div>
        <div class="col-xs-12 col-md-5">
          <!-- <q-input :rules="[(val) => (val && val.length > 0) || 'Please type something']"   outlined v-model="formData.designation" type="text" /> -->
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            
            outlined
            v-model="formData.commercial_start"
          />
        </div>

        <div class="col-12">
          <span class="zlabel">
            10.3 Phase-wise Implementation/FCI Details *
          </span>
          <div
            v-for="i in formData.rows"
            :key="i"
            class="row justify q-col-gutter-sm q-ml-md"
          >
            <!-- {{ i }} -->
            <div class="col-sm-5 col-xs-12">
              <q-input
                label="Phase *"
                
                
                outlined
              />
            </div>

            <div class="col-sm-5 col-xs-12">
              <q-input
                placeholder="Product Category *"
                
                
                outlined
              />
            </div>

            <div class="col-sm-5 col-xs-12">
              <q-input
                placeholder="FCI *"
                
                
                outlined
              />
            </div>

            <div class="col-sm-5 col-xs-12">
              <q-input
                placeholder="Implementation Date"
                
                type="date"
                
                outlined
              />
            </div>

            <div class="q-my-md q-py-none col-12">
              <hr />
            </div>
          </div>

          <div class="col-4">
            <q-btn
              color="primary"
              class="full-width"
              label="Add row"
              @click="addRow"
            />
          </div>
        </div>
      </div>
    </div>
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
     land_cost: "",
     building_cost: "",
     plant_machinery_cost: "",
     misc_cost: "",
     total_project_cost: "",
     bank_finance: "",
     equity_contribution: "",
     foreign_direct_invest: "",
     foreign_direct_invest: "",
     subsidy_grant: "",
     other_means: "",
     direct_male: "",
     direct_female: "",
     indirect_male: "",   
     indirect_female: "",   
     total_male: "",
     total_female: "",
     project_start: "",
     commercial_start: "",
      rows: 1,
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
      addRow: () => {
        // formData.lsc_details.push({
        //   name: "",
        //   address: "",
        //   kum: "",
        //   caste: "",
        // });
        formData.rows++;
      },
    };
  },
};
</script>
