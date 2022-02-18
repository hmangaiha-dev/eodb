<template>
  <div class="zcard row items-center q-col-gutter-md">
    <q-dialog class="print-hide" v-model="dialog">
      <q-card>
        <embed :src="attachment" width="500" height="500" />
      </q-card>
    </q-dialog>
    <div class="col-12 zsubtitle">
      14. Electric Power Requirement *

      <p>14.1 Temporary Connection # During Construction</p>
      <div class="row justify-start q-ml-md">
        <div class="col-xs-12 col-md-5">
          <label class="zlabel" for="gender"> a) Load Required </label>
        </div>
        <div class="col-xs-12 col-md-5">
          <q-radio
            v-model="formData.electric_temporary_load_required"
            val="Yes"
            label="Yes"
          />
          <q-radio
            v-model="formData.electric_temporary_load_required"
            val="No"
            label="No"
          />
        </div>

        <div class="col-xs-12 col-md-5">
          <label class="zlabel" for="gender"> b) Existing Connection </label>
        </div>
        <div class="col-xs-12 col-md-5">
          <q-radio
            v-model="formData.electric_temporary_existing_connection"
            val="Yes"
            label="Yes"
          />
          <q-radio
            v-model="formData.electric_temporary_existing_connection"
            val="No"
            label="No"
          />
        </div>

        <div class="col-xs-12 col-md-5">
          <label class="zlabel" for="gender">
            Attach Copy of the Bill * ( Maximum size : 4 MB Format : PDF )
          </label>
        </div>
        <div class="q-my-sm col-xs-12 col-md-5">
          <!-- <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            dense
            outlined
            v-model="formData.electric_temporary_existing_connection_file"
          /> -->

          <q-uploader
            flat
            @added="
              (files) => {
                formData.electric_temporary_existing_connection_file = files[0];
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
              !Array.isArray(
                formData.electric_temporary_existing_connection_file
              ) && formData.electric_temporary_existing_connection_file
            "
            :src="`http://localhost:8000/storage/${formData.electric_temporary_existing_connection_file}`"
            style="max-width: 150px; margin-top: -54px"
            spinner-color="primary"
            spinner-size="82px"
          />
        </div>

        <div class="col-xs-12 col-md-5">
          <label class="zlabel" for="gender"> c) Consumer Number* </label>
        </div>
        <div class="col-xs-12 col-md-5">
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            dense
            outlined
            v-model="formData.electric_temporary_consumer_number"
          />
        </div>

        <div class="col-xs-12 col-md-5">
          <label class="zlabel" for="gender">
            d) Existing Load Demand (KW)*
          </label>
        </div>
        <div class="col-xs-12 col-md-5">
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            dense
            outlined
            v-model="formData.electric_temporary_existing_load_demand_kw"
          />
        </div>
        <div class="col-xs-12 col-md-5">
          <label class="zlabel" for="gender">
            e) Existing Load Demand (KVA)*
          </label>
        </div>
        <div class="col-xs-12 col-md-5">
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            dense
            outlined
            v-model="formData.electric_temporary_existing_load_demand_kva"
          />
        </div>
        <div class="col-xs-12 col-md-5">
          <label class="zlabel" for="gender"> f) New Load Demand (KW)* </label>
        </div>
        <div class="col-xs-12 col-md-5">
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            dense
            outlined
            v-model="formData.electric_temporary_new_load_demand_kw"
          />
        </div>
        <div class="col-xs-12 col-md-5">
          <label class="zlabel" for="gender"> g) New Load Demand (KWA)* </label>
        </div>
        <div class="col-xs-12 col-md-5">
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            dense
            outlined
            v-model="formData.electric_temporary_new_load_demand_kVa"
          />
        </div>

        <div class="col-xs-12 col-md-5">
          <label class="zlabel" for="gender"> h) Demand Date * </label>
        </div>
        <div class="col-xs-12 col-md-5">
          <div class="q-pa-md">
            <q-input
              filled
              v-model="formData.electric_temporary_demand_date"
              mask="date"
              :rules="['date']"
            >
              <template v-slot:append>
                <q-icon name="event" class="cursor-pointer">
                  <q-popup-proxy
                    ref="qDateProxy"
                    cover
                    transition-show="scale"
                    transition-hide="scale"
                  >
                    <q-date v-model="formData.electric_temporary_demand_date">
                      <div class="row items-center justify-end">
                        <q-btn
                          v-close-popup
                          label="Close"
                          color="primary"
                          flat
                        />
                      </div>
                    </q-date>
                  </q-popup-proxy>
                </q-icon>
              </template>
            </q-input>
          </div>
          <!-- <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            dense
            outlined
            v-model="formData.electric_temporary_h"
          /> -->
        </div>
      </div>
    </div>

    <div class="col-12 zsubtitle">
      14.2 Regular Connection # During Commercial Activity

      <div class="row justify-start q-ml-md">
        <div class="col-xs-12 col-md-5">
          <label class="zlabel" for="gender"> a) Load Required </label>
        </div>
        <div class="col-xs-12 col-md-5">
          <q-radio
            v-model="formData.electric_regular_load_required"
            val="Yes"
            label="Yes"
          />
          <q-radio
            v-model="formData.electric_regular_load_required"
            val="No"
            label="No"
          />
        </div>

        <div class="col-xs-12 col-md-5">
          <label class="zlabel" for="gender"> b) Existing Connection </label>
        </div>
        <div class="col-xs-12 col-md-5">
          <q-radio
            v-model="formData.electric_regular_existing_connection"
            val="Yes"
            label="Yes"
          />
          <q-radio
            v-model="formData.electric_regular_existing_connection"
            val="No"
            label="No"
          />
        </div>

        <div class="col-xs-12 col-md-5">
          <label class="zlabel" for="gender">
            Attach Copy of the Bill * ( Maximum size : 4 MB Format : PDF )
          </label>
        </div>
        <div class="q-my-md col-xs-12 col-md-5">
          <q-uploader
            flat
            @added="
              (files) => {
                formData.electric_regular_existing_connection_file = files[0];
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
              !Array.isArray(
                formData.electric_regular_existing_connection_file
              ) && formData.electric_regular_existing_connection_file
            "
            :src="`http://localhost:8000/storage/${formData.electric_regular_existing_connection_file}`"
            style="max-width: 150px; margin-top: -54px"
            spinner-color="primary"
            spinner-size="82px"
          />
        </div>

        <div class="col-xs-12 col-md-5">
          <label class="zlabel" for="gender"> c) Consumer Type* </label>
        </div>
        <div class="q-my-md col-xs-12 col-md-5">
          <q-select
            dense
            outlined
            v-model="formData.electric_regular_consumer_type"
            :options="consumer_type"
          />
        </div>

        <div class="col-xs-12 col-md-5">
          <label class="zlabel" for="gender"> d) Consumer Number* </label>
        </div>
        <div class="col-xs-12 col-md-5">
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            dense
            outlined
            v-model="formData.electric_regular_consumer_number"
          />
        </div>

        <div class="col-xs-12 col-md-5">
          <label class="zlabel" for="gender">
            e) Existing Load Demand (KW)*
          </label>
        </div>
        <div class="col-xs-12 col-md-5">
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            dense
            outlined
            v-model="formData.electric_regular_existing_load_demand_kw"
          />
        </div>
        <div class="col-xs-12 col-md-5">
          <label class="zlabel" for="gender">
            f) Existing Load Demand (KVA)*
          </label>
        </div>
        <div class="col-xs-12 col-md-5">
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            dense
            outlined
            v-model="formData.electric_regular_existing_load_demand_kva"
          />
        </div>
        <div class="col-xs-12 col-md-5">
          <label class="zlabel" for="gender"> g) New Load Demand (KW)* </label>
        </div>
        <div class="col-xs-12 col-md-5">
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            dense
            outlined
            v-model="formData.electric_regular_new_load_demand_kw"
          />
        </div>
        <div class="col-xs-12 col-md-5">
          <label class="zlabel" for="gender"> h) New Load Demand (KVA)* </label>
        </div>
        <div class="col-xs-12 col-md-5">
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            dense
            outlined
            v-model="formData.electric_regular_new_load_demand_kva"
          />
        </div>
        <div class="col-xs-12 col-md-5">
          <label class="zlabel" for="gender"> i) Demand Date * </label>
        </div>
        <div class="col-xs-12 col-md-5">
          <div class="q-pa-md">
            <q-input
              filled
              v-model="formData.electric_regular_demand_date"
              mask="date"
              :rules="['date']"
            >
              <template v-slot:append>
                <q-icon name="event" class="cursor-pointer">
                  <q-popup-proxy
                    ref="qDateProxy"
                    cover
                    transition-show="scale"
                    transition-hide="scale"
                  >
                    <q-date v-model="formData.electric_regular_demand_date">
                      <div class="row items-center justify-end">
                        <q-btn
                          v-close-popup
                          label="Close"
                          color="primary"
                          flat
                        />
                      </div>
                    </q-date>
                  </q-popup-proxy>
                </q-icon>
              </template>
            </q-input>
          </div>
        </div>
      </div>
    </div>

    <div class="col-12 zsubtitle">
      <h5>15. Water Requirement</h5>
      15.1 Temporary Connection * #During Construction

      <div class="row justify-start q-ml-md">
        <div class="col-xs-12 col-md-5">
          <label class="zlabel" for="gender"> a) Connection Required * </label>
        </div>
        <div class="col-xs-12 col-md-5">
          <q-radio
            v-model="formData.water_temporary_connection_required"
            val="Yes"
            label="Yes"
          />
          <q-radio
            v-model="formData.water_temporary_connection_required"
            val="No"
            label="No"
          />
        </div>

        <div class="col-xs-12 col-md-5">
          <label class="zlabel" for="gender"> b) Existing Connection * </label>
        </div>
        <div class="col-xs-12 col-md-5">
          <q-radio
            v-model="formData.water_temporary_existing_connection"
            val="Yes"
            label="Yes"
          />
          <q-radio
            v-model="formData.water_temporary_existing_connection"
            val="No"
            label="No"
          />
        </div>

        <div class="col-xs-12 col-md-5">
          <label class="zlabel" for="gender">
            Attach Copy of the Bill * ( Maximum size : 4 MB Format : PDF )
          </label>
        </div>
        <div class="col-xs-12 col-md-5">
          <q-uploader
            flat
            @added="
              (files) => {
                formData.water_temporary_existing_bill_copy_file = files[0];
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
              !Array.isArray(
                formData.water_temporary_existing_bill_copy_file
              ) && formData.water_temporary_existing_bill_copy_file
            "
            :src="`http://localhost:8000/storage/${formData.water_temporary_existing_bill_copy_file}`"
            style="max-width: 150px; margin-top: -54px"
            spinner-color="primary"
            spinner-size="82px"
          />
        </div>
      </div>
    </div>

    <div class="col-12 zsubtitle">
      15.2 Regular Connection * #During Commerical Activity

      <div class="row justify-start q-ml-md">
        <div class="col-xs-12 col-md-5">
          <label class="zlabel" for="gender"> a) Connection Required * </label>
        </div>
        <div class="col-xs-12 col-md-5">
          <q-radio
            v-model="formData.water_regular_connection_required"
            val="Yes"
            label="Yes"
          />
          <q-radio
            v-model="formData.water_regular_connection_required"
            val="No"
            label="No"
          />
        </div>

        <div class="col-xs-12 col-md-5">
          <label class="zlabel" for="gender"> b) Existing Connection * </label>
        </div>
        <div class="col-xs-12 col-md-5">
          <q-radio
            v-model="formData.water_regular_existing_connection"
            val="Yes"
            label="Yes"
          />
          <q-radio
            v-model="formData.water_regular_existing_connection"
            val="No"
            label="No"
          />
        </div>
        <div class="col-xs-12 col-md-5">
          <label class="zlabel" for="gender">
            Attach Copy of the Bill * ( Maximum size : 4 MB Format : PDF )
          </label>
        </div>
        <div class="q-my-sm col-xs-12 col-md-5">
          <q-uploader
            flat
            @added="
              (files) => {
                formData.water_regular_existing_bill_copy_file = files[0];
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
              !Array.isArray(formData.water_regular_existing_bill_copy_file) &&
              formData.water_regular_existing_bill_copy_file
            "
            :src="`http://localhost:8000/storage/${formData.water_regular_existing_bill_copy_file}`"
            style="max-width: 150px; margin-top: -54px"
            spinner-color="primary"
            spinner-size="82px"
          />
        </div>

        <div class="col-xs-12 col-md-5">
          <label class="zlabel" for="gender"> c) Customer Type * </label>
        </div>
        <div class="q-my-md col-xs-12 col-md-5">
          <!-- <q-input :rules="[(val) => (val && val.length > 0) || 'Please type something']"  dense outlined v-model="formData.designation" type="text" /> -->
          <q-select
            dense
            outlined
            v-model="formData.water_regular_consumer_type"
            :options="consumer_type"
          />
        </div>

        <div class="col-xs-12 col-md-5">
          <label class="zlabel" for="gender"> 15.3 Consumer Number * </label>
        </div>
        <div class="col-xs-12 col-md-5">
          <!-- <q-input :rules="[(val) => (val && val.length > 0) || 'Please type something']"  dense outlined v-model="formData.designation" type="text" /> -->
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            dense
            outlined
            v-model="formData.water_consumer_number"
          />
        </div>

        <!-- <div class="col-12">
          <span class="zlabel"> 18. FAMILY DETAILS (DILTU CHHUNGKUA): </span>
          <div
            v-for="i in formData.rows"
            :key="i"
            class="row justify q-col-gutter-sm q-ml-md"
          >
            <div class="col-sm-5 col-xs-12">
              <q-input
                label="Name as per (EPIC/PAN/UID)Hming"
                :rules="[
                  (val) => (val && val.length > 0) || 'Please type something',
                ]"
                v-model="formData.lsc_details[i - 1].name"
                dense
                outlined
              />
            </div>

            <div class="col-sm-5 col-xs-12">
              <q-input
                placeholder="Kum zat"
                :rules="[
                  (val) => (val && val.length > 0) || 'Please type something',
                ]"
                v-model="formData.lsc_details[i - 1].address"
                dense
                outlined
              />
            </div>

            <div class="col-sm-5 col-xs-12">
              <q-input
                placeholder="Hnathawh"
                :rules="[
                  (val) => (val && val.length > 0) || 'Please type something',
                ]"
                v-model="formData.lsc_details[i - 1].kum"
                dense
                outlined
              />
            </div>

            <div class="col-sm-5 col-xs-12">
              <q-input
                placeholder="Chhungkaw pa ber nen inlaichinna"
                :rules="[
                  (val) => (val && val.length > 0) || 'Please type something',
                ]"
                v-model="formData.lsc_details[i - 1].caste"
                dense
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
        </div> -->
      </div>
    </div>
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
      electric_temporary_load_required: "",
      electric_temporary_existing_connection: "",
      electric_temporary_existing_connection_file: null,
      electric_temporary_consumer_number: "",
      electric_temporary_existing_load_demand_kw: "",
      electric_temporary_existing_load_demand_kva: "",
      electric_temporary_new_load_demand_kw: "",
      electric_temporary_new_load_demand_kVa: "",
      electric_temporary_demand_date: "",
      electric_regular_load_required: "",
      electric_regular_existing_connection: "",
      electric_regular_existing_connection_file: null,
      electric_regular_consumer_type: "",
      electric_regular_consumer_number: "",
      electric_regular_existing_load_demand_kw: "",
      electric_regular_existing_load_demand_kva: "",
      electric_regular_new_load_demand_kw: "",
      electric_regular_new_load_demand_kva: "",
      electric_regular_demand_date: "",
      water_temporary_connection_required: "",
      water_temporary_existing_connection: "",
      water_temporary_existing_bill_copy_file: null,
      water_regular_connection_required: "",
      water_regular_existing_connection: "",
      water_regular_existing_bill_copy_file: null,
      water_regular_consumer_type: "",
      water_consumer_number: "",
      model: "G",

      rows: 1,
    });
    const getG = () =>
      (formData = Object.assign(
        formData,
        store.state.globalData.common?.partG
      ));

    onMounted(() => getG());

    watch(store.state.globalData.common, () => getG());
    return {
      formData,
      getG,
      dialog,
      attachment,
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
      consumer_type: ["Industrial", "Domestic"],

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
