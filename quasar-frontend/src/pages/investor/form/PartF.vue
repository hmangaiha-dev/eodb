<template>
  <div class="zcard row items-center q-col-gutter-md">
    <q-dialog class="print-hide" v-model="dialog">
      <q-card>
        <embed :src="attachment" width="500" height="500" />
      </q-card>
    </q-dialog>
    <div class="col-12">
      <label class="zlabel"> 11. Manufacturing </label> <br />
      <label for="" class="zlabel">
        Data Manufacturing Details(Please add all major Raw Materials,
        Products/By-Products)
      </label>
      <div
        v-for="i in formData.rows"
        :key="i"
        class="row justify q-col-gutter-sm q-ml-md"
      >
        <!-- {{ i }} -->
        <div class="col-sm-5 col-xs-12">
          <q-input label="Raw Material" outlined />
        </div>

        <div class="col-sm-5 col-xs-12">
          <q-input placeholder="Quantity" outlined />
        </div>

        <div class="col-sm-5 col-xs-12">
          <q-input placeholder="Units(Ton per day-TDP)" outlined />
        </div>

        <div class="col-sm-5 col-xs-12">
          <q-input placeholder="Main Product	" outlined />
        </div>
        <div class="col-sm-5 col-xs-12">
          <q-input placeholder="Quantity" outlined />
        </div>
        <div class="col-sm-5 col-xs-12">
          <q-input placeholder="Units(Number per day)" outlined />
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

    <div class="col-12 zsubtitle">
      11.2 Manufacturing Process Flow *
      <div class="row justify-start q-ml-md">
        <div class="col-xs-12 col-md-5">
          <label class="zlabel" for="gender">
            a) Upload Manufacturing Process Flow * <br />
            ( Maximum size : 4 MB Format : PDF )
          </label>
        </div>
        <div class="col-xs-12 col-md-5">
          <q-uploader
            flat
            @added="
              (files) => {
                formData.manuf_process_flow = files[0];
              }
            "
            hide-upload-btn
            ref="formData.applicant_photo"
            color="grey"
            url="http://localhost:4444/upload"
            style="max-width: 300px"
          />
          <q-img
            v-if="
              !Array.isArray(formData.manuf_process_flow) &&
              formData.manuf_process_flow
            "
            :src="`http://localhost:8000/storage/${formData.manuf_process_flow}`"
            style="max-width: 150px; margin-top: -54px"
            spinner-color="primary"
            spinner-size="82px"
          />
        </div>

        <div class="col-xs-12 col-md-5">
          <label class="zlabel" for="gender">
            b) Steps in Manufacturing Process *</label
          >
        </div>
        <div class="col-xs-12 col-md-5">
          <!-- <q-input :rules="[(val) => (val && val.length > 0) || 'Please type something']"   outlined v-model="formData.designation" type="text" /> -->
          <q-input
            type="textarea"
            placeholder="Step 1: 
Step 2: 
Step ..."
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            outlined
            v-model="formData.manuf_process_steps"
          />
        </div>
      </div>
    </div>

    <div class="col-12 zsubtitle">
      12. Environment Impact Data
      <div class="row justify-start q-col-gutter-md q-ml-md">
        <div class="col-xs-12 col-md-5">
          <label class="zlabel" for="gender"> 12.1 Category * </label>
        </div>
        <div class="col-xs-12 col-md-5">
          <q-select
            v-model="formData.env_category"
            :options="['Red', 'Orange', 'Green', 'White']"
            outlined
          />
        </div>

        <div class="col-12">
          <label class="zlabel" for="">
            12.2 Raw Water & Effluent Details *
          </label>
          <div class="row q-col-gutter-md q-ml-md">
            <div class="col-xs-12 col-md-5">
              <label class="zlabel"> a) Source of raw water supply * </label>
            </div>
            <div class="col-xs-12 col-md-5">
              <!-- <q-input :rules="[(val) => (val && val.length > 0) || 'Please type something']"   outlined v-model="formData.designation" type="text" /> -->
              <q-select
                v-model="formData.water_supply_source"
                :options="['Tube well', 'River/Stream', 'PHED']"
                outlined
              />
            </div>

            <div class="col-12">
              <span class="zlabel">
                Water Usages(In cubic meter per day) *
              </span>
              <div class="row justify q-col-gutter-sm q-ml-md">
                <!-- {{ i }} -->
                <div class="col-sm-5 col-xs-12">
                  <q-input
                    v-model="formData.water_usage_per_day_process"
                    label="Process"
                    :rules="[
                      (val) =>
                        (val && val.length > 0) || 'Please type something',
                    ]"
                    outlined
                  />
                </div>

                <div class="col-sm-5 col-xs-12">
                  <q-input
                    v-model="formData.water_usage_per_day_cooling"
                    placeholder="Cooling"
                    :rules="[
                      (val) =>
                        (val && val.length > 0) || 'Please type something',
                    ]"
                    outlined
                  />
                </div>

                <div class="col-sm-5 col-xs-12">
                  <q-input
                    v-model="formData.water_usage_per_day_domestic"
                    placeholder="Domestic"
                    :rules="[
                      (val) =>
                        (val && val.length > 0) || 'Please type something',
                    ]"
                    outlined
                  />
                </div>

                <div class="col-sm-5 col-xs-12">
                  <q-input
                    v-model="formData.water_usage_per_day_others"
                    placeholder="Others"
                    :rules="[
                      (val) =>
                        (val && val.length > 0) || 'Please type something',
                    ]"
                    outlined
                  />
                </div>

                <div class="q-my-md q-py-none col-12">
                  <hr />
                </div>
              </div>
            </div>
            <div class="q-py-none col-12">
              <span class="zlabel">
                Waste water generation(In cubic meter per day) *
              </span>
              <div class="row justify q-col-gutter-sm q-ml-md">
                <!-- {{ i }} -->
                <div class="col-sm-5 col-xs-12">
                  <q-input
                    v-model="formData.water_water_gen_per_day_process"
                    label="Process"
                    :rules="[
                      (val) =>
                        (val && val.length > 0) || 'Please type something',
                    ]"
                    outlined
                  />
                </div>

                <div class="col-sm-5 col-xs-12">
                  <q-input
                    v-model="formData.water_water_gen_per_day_cooling"
                    placeholder="Cooling"
                    :rules="[
                      (val) =>
                        (val && val.length > 0) || 'Please type something',
                    ]"
                    outlined
                  />
                </div>

                <div class="col-sm-5 col-xs-12">
                  <q-input
                    v-model="formData.water_water_gen_per_day_domestic"
                    placeholder="Domestic"
                    :rules="[
                      (val) =>
                        (val && val.length > 0) || 'Please type something',
                    ]"
                    outlined
                  />
                </div>

                <div class="col-sm-5 col-xs-12">
                  <q-input
                    v-model="formData.water_water_gen_per_day_others"
                    placeholder="Others"
                    :rules="[
                      (val) =>
                        (val && val.length > 0) || 'Please type something',
                    ]"
                    outlined
                  />
                </div>

                <div class="q-my-md q-py-none col-12">
                  <hr />
                </div>
              </div>
            </div>
            <div class="q-py-none col-12">
              <span class="zlabel"> Waste water treatment* </span>
              <div class="row justify q-col-gutter-sm q-ml-md">
                <!-- {{ i }} -->
                <div class="col-sm-5 col-xs-12">
                  <q-input
                    v-model="formData.water_water_treatment_process"
                    label="Process"
                    :rules="[
                      (val) =>
                        (val && val.length > 0) || 'Please type something',
                    ]"
                    outlined
                  />
                </div>

                <div class="col-sm-5 col-xs-12">
                  <q-input
                    v-model="formData.water_water_treatment_cooling"
                    placeholder="Cooling"
                    :rules="[
                      (val) =>
                        (val && val.length > 0) || 'Please type something',
                    ]"
                    outlined
                  />
                </div>

                <div class="col-sm-5 col-xs-12">
                  <q-input
                    v-model="formData.water_water_treatment_domestic"
                    placeholder="Domestic"
                    :rules="[
                      (val) =>
                        (val && val.length > 0) || 'Please type something',
                    ]"
                    outlined
                  />
                </div>

                <div class="col-sm-5 col-xs-12">
                  <q-input
                    v-model="formData.water_water_treatment_others"
                    placeholder="Others"
                    :rules="[
                      (val) =>
                        (val && val.length > 0) || 'Please type something',
                    ]"
                    outlined
                  />
                </div>

                <div class="q-my-md q-py-none col-12">
                  <hr />
                </div>
              </div>
            </div>

            <div class="col-xs-12 col-md-5">
              <label class="zlabel" for="gender">
                Enclose Waste water treatment details * <br />
                ( Maximum size : 4 MB Format : PDF )
              </label>
            </div>
            <div class="col-xs-12 col-md-5">
              <q-uploader
                flat
                @added="
                  (files) => {
                    formData.waste_water_treatment_details = files[0];
                  }
                "
                hide-upload-btn
                ref="formData.applicant_photo"
                color="grey"
                url="http://localhost:4444/upload"
                style="max-width: 300px"
              />
              <q-img
                v-if="
                  !Array.isArray(formData.waste_water_treatment_details) &&
                  formData.waste_water_treatment_details
                "
                :src="`http://localhost:8000/storage/${formData.waste_water_treatment_details}`"
                style="max-width: 150px; margin-top: -54px"
                spinner-color="primary"
                spinner-size="82px"
              />
            </div>
          </div>
        </div>

        <div class="col-xs-12 col-md-5">
          <label class="zlabel" for="gender">
            12.3 Mode of dispossal for Discharge
          </label>
        </div>
        <div class="col-xs-12 col-md-5">
          <q-select
            v-model="formData.disposal_mode"
            :options="['Sewer', 'Open drainage']"
            outlined
          />
        </div>

        <div class="col-12">
          <span class="zlabel">
            12.4 Emission Data * (Please add at least one item from each BOILER,
            FURNANCE, PROCESS EMISSION, DC SET)
          </span>
          <div
            v-for="i in formData.rows"
            :key="i"
            class="row justify q-col-gutter-sm q-ml-md"
          >
            <!-- {{ i }} -->
            <div class="col-sm-5 col-xs-12">
              <q-input label="Capacity(Ton per hour/KVA)" dense outlined />
            </div>

            <div class="col-sm-5 col-xs-12">
              <q-input placeholder="Type of Fuel" dense outlined />
            </div>

            <div class="col-sm-5 col-xs-12">
              <q-input
                placeholder="Quantity of fuel(in KL per day / Ton per day)"
                dense
                outlined
              />
            </div>

            <div class="col-sm-5 col-xs-12">
              <q-input placeholder="Stack Height	" dense outlined />
            </div>
            <div class="col-sm-5 col-xs-12">
              <q-input
                placeholder="Air Pollution Control Device"
                dense
                outlined
              />
            </div>
            <div class="col-sm-5 col-xs-12">
              <q-input
                placeholder="Boiler Rating(Heating Surface) In cubic meter"
                dense
                outlined
              />
            </div>
            <div class="col-sm-5 col-xs-12">
              <q-input
                placeholder="Stream Pressure(max) In Kg per Cubic cm"
                dense
                outlined
              />
            </div>
            <div class="col-sm-5 col-xs-12">
              <q-input placeholder="Capacity in ltrs" dense outlined />
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

        <div class="zlabel col-12">
          # Above Ground Level: AGL; #ARL: Above Roof Level
        </div>

        <div class="col-12">
          <span class="zlabel"> 12.5 Solid Waste Generation Details </span>
          <div
            v-for="i in formData.rows"
            :key="i"
            class="row justify q-col-gutter-sm q-ml-md"
          >
            <!-- {{ i }} -->
            <div class="col-sm-5 col-xs-12">
              <q-input label="Source of Generation" dense outlined />
            </div>

            <div class="col-sm-5 col-xs-12">
              <q-input placeholder="Nature/Type" dense outlined />
            </div>

            <div class="col-sm-5 col-xs-12">
              <q-input placeholder="	Quantity(Ton per day)" dense outlined />
            </div>

            <div class="col-sm-5 col-xs-12">
              <q-input placeholder="Mode of disposal" dense outlined />
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

    <div class="col-12 zsubtitle">
      13 Need for clearance of vegetation(Trees and Bamboo Groves) in the
      project site* <br />
      <q-radio
        class="zlabel"
        v-model="formData.need_clearance"
        val="true"
        label="Applicable"
      />
      <q-radio
        class="zlabel"
        v-model="formData.need_clearance"
        val="false"
        label="Not Applicable"
      />
      <div
        v-if="formData.need_clearance == 'true'"
        class="row justify-start q-ml-sm"
      >
        <div class="col-12 q-ml-sm">
          <div class="col-xs-12 col-md-5">
            <label class="zlabel" for="gender"> a) If Applicable </label>
          </div>

          <div class="col-12 q-ml-sm">
            <div class="col-xs-12 col-md-5">
              <label class="zlabel" for="gender">
                I. Number of Trees cut *</label
              >
            </div>
            <div class="col-xs-12 col-md-5">
              <!-- <q-input :rules="[(val) => (val && val.length > 0) || 'Please type something']"   outlined v-model="formData.designation" type="text" /> -->
              <q-input
                :rules="[
                  (val) => (val && val.length > 0) || 'Please type something',
                ]"
                outlined
                v-model="formData.trees_cut_no"
              />
            </div>
            <div class="col-xs-12 col-md-5">
              <label class="zlabel" for="gender">
                II. Number of Bamboo Groves removed *
              </label>
            </div>
            <div class="col-xs-12 col-md-5">
              <q-input
                :rules="[
                  (val) => (val && val.length > 0) || 'Please type something',
                ]"
                outlined
                v-model="formData.bamboo_groves_remove_no"
              />
            </div>
          </div>
        </div>

        <div class="col-xs-12 q-ml-sm col-md-6">
          <label class="zlabel" for="gender">
            b) Attach Plan for Re-plantation * ( Maximum size : 4 MB Format :
            PDF )
          </label>
        </div>
        <div class="col-xs-12 col-md-6">
          <q-uploader
            flat
            @added="
              (files) => {
                formData.replantation_plan = files[0];
              }
            "
            hide-upload-btn
            ref="formData.applicant_photo"
            color="grey"
            url="http://localhost:4444/upload"
            style="max-width: 300px"
          />
          <q-img
            v-if="
              !Array.isArray(formData.replantation_plan) &&
              formData.replantation_plan
            "
            :src="`http://localhost:8000/storage/${formData.replantation_plan}`"
            style="max-width: 150px; margin-top: -54px"
            spinner-color="primary"
            spinner-size="82px"
          />
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import { reactive } from "@vue/reactivity";
import { useStore } from "vuex";
import { onMounted, ref, watch } from "vue";
import { date } from "quasar";

export default {
  setup(props, context) {
    const store = useStore();
    const dialog = ref(false);
    const attachment = ref("");

    let formData = reactive({
      manuf_process_flow: null,
      manuf_process_steps: "",
      env_category: "",
      water_supply_source: "",
      water_usage_per_day_process: "",
      water_usage_per_day_cooling: "",
      water_usage_per_day_domestic: "",
      water_usage_per_day_others: "",
      water_water_gen_per_day_process: "",
      water_water_gen_per_day_cooling: "",
      water_water_gen_per_day_domestic: "",
      water_water_gen_per_day_others: "",
      water_water_treatment_process: "",
      water_water_treatment_cooling: "",
      water_water_treatment_domestic: "",
      water_water_treatment_others: "",
      waste_water_treatment_details: null,
      disposal_mode: "",
      trees_cut_no: "",
      need_clearance: "",
      bamboo_groves_remove_no: "",
      replantation_plan: null,
      model: "F",

      rows: 1,
    });
    const getF = () =>
      (formData = Object.assign(
        formData,
        store.state.globalData.common?.partF
      ));

    onMounted(() => getF());

    watch(store.state.globalData.common, () => getF());
    return {
      formData,
      dialog,
      attachment,
      getF,
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
