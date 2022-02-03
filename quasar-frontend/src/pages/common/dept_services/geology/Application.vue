<template>
  <div class="zcard q-pa-md">
    <div class="q-gutter-y-md">
      <div class="col-12 text-h6 q-pb-none text-center">FORM-A</div>
      <p class="col-12 text-caption q-py-none text-center">
        {See - rule (1) of rule (6)}
      </p>
      <div class="col-12 ztitle text-center">
        FORM OF APPLICATION FOR MINING LEASE
      </div>
      <!-- <q-form  @submit.prevent="onSubmit"> -->
      <!-- <q-tab-panels v-model="tab" animated> -->
      <!-- <q-tab-panel name="personal"> -->
      <div class="q-gutter-sm">
        <q-form @submit.prevent="submit">
          <fieldset
            class="row q-col-gutter-md q-pb-lg"
            style="
              border: 1px solid #ddd;

              background: #fff;
              border-radius: 4px;
            "
          >
            <legend style="color: #428bca" class="text-body1 text-weight-bold">
              Personal details
            </legend>
            <div class="col-md-6 col-sm-5 col-xs-12 col-lg-5">
              <label class="zlabel" for="">Name*</label>
              <q-input
                outlined
                v-model="formData.name"
                dense
                color="teal"
                lazy-rules
                :rules="[
                  (val) => (val && val.length > 0) || 'Please type something',
                ]"
                required
              >
              </q-input>
              <label class="zlabel" for="">S/o, D/o*</label>
              <q-input
                v-model="formData.sd"
                color="teal"
                dense
                outlined
                lazy-rules
                :rules="[
                  (val) => (val && val.length > 0) || 'Please type something',
                ]"
              >
              </q-input>
              <label class="zlabel" for="">House No*</label>
              <q-input
                v-model="formData.houseno"
                outlined
                color="teal"
                dense
                lazy-rules
                :rules="[
                  (val) => (val && val.length > 0) || 'Please type something',
                ]"
              >
              </q-input>
            </div>

            <div class="col-md-6 col-sm-5 col-xs-12 col-lg-5">
              <!-- <label class="zlabel" for="">Last Name*</label>
                <q-input outlined dense color="teal" lazy-rules required>
                </q-input> -->
              <label class="zlabel" for="">Village/Town*</label>
              <q-input
                v-model="formData.village"
                outlined
                color="teal"
                dense
                lazy-rules
                :rules="[
                  (val) => (val && val.length > 0) || 'Please type something',
                ]"
              >
              </q-input>
              <label class="zlabel" for="">Mobile No.*</label>
              <q-input
                v-model="formData.contact"
                dense
                type="number"
                color="teal"
                outlined
                :rules="[
                  (val) => (val && val.length == 10) || 'Maximum 10 digits',
                ]"
              >
              </q-input>
              <label class="zlabel" for="">Telephone No.*</label>
              <q-input
                v-model="formData.telephone"
                dense
                type="number"
                color="teal"
                outlined
                :rules="[
                  (val) => (val && val.length == 10) || 'Maximum 10 digits',
                ]"
              >
              </q-input>
            </div>
          </fieldset>

          <fieldset
            class="row justify-evenly q-col-gutter-md q-my-lg"
            style="
              border: 1px solid #ddd;

              background: #fff;
              border-radius: 4px;
            "
          >
            <legend style="color: #428bca" class="text-body1 text-weight-bold">
              Sectors and mining details
            </legend>
            <div class="col-md-6 col-sm-5 col-xs-12 col-lg-5">
              <q-select
                dense
                outlined
                v-model="formData.sector_type"
                :options="options"
                label="Choose sector*"
                color="teal"
                required
                :rules="[
                  (val) => (val && val.length > 0) || 'Please type something',
                ]"
              />

              <div v-if="formData.sector_type == 'individual'">
                <!-- {{ formData.individual_nationality }} -->
                <label class="zlabel" for="">Nationality*</label>
                <q-input
                  v-model="formData.individual_nationality"
                  color="teal"
                  dense
                  outlined
                  lazy-rules
                  :rules="[
                    (val) => (val && val.length > 0) || 'Please type something',
                  ]"
                >
                </q-input>
                <label class="zlabel" for="">Permanent Residency*</label>
                <q-input
                  v-model="formData.individual_residency"
                  dense
                  outlined
                  color="teal"
                  label="Permanent Residency"
                  lazy-rules
                  type="textarea"
                  rows="3"
                  :rules="[
                    (val) => (val && val.length > 0) || 'Please type something',
                  ]"
                >
                </q-input>
                <label class="zlabel" for="">Qualification*</label>
                <q-input
                  v-model="formData.individual_qualification"
                  color="teal"
                  dense
                  outlined
                  lazy-rules
                  :rules="[
                    (val) => (val && val.length > 0) || 'Please type something',
                  ]"
                >
                </q-input>
              </div>

              <div v-if="formData.sector_type == 'private'">
                <label class="zlabel" for="">Place of regd*</label>
                <q-input
                  v-model="formData.private_regd_place"
                  color="teal"
                  dense
                  outlined
                  lazy-rules
                  type="textarea"
                  rows="3"
                  :rules="[
                    (val) => (val && val.length > 0) || 'Please type something',
                  ]"
                ></q-input>

                <q-file
                  v-model="formData.private_certificate"
                  class="q-mt-md"
                  dense
                  color="teal"
                  label="Copy of regd"
                  required
                >
                  <template v-slot:prepend>
                    <q-icon name="attach_file" />
                  </template>
                </q-file>
                <label class="zlabel" for=""
                  >Nationality of members/Board of directors of company</label
                >
                <q-input
                  dense
                  outlined
                  color="teal"
                  v-model="formData.private_members_nationality"
                  lazy-rules
                  type="textarea"
                  rows="3"
                  :rules="[
                    (val) => (val && val.length > 0) || 'Please type something',
                  ]"
                >
                </q-input>
              </div>

              <div v-if="formData.sector_type == 'public'">
                <label class="zlabel" for="">Place of corporation*</label>
                <q-input
                  v-model="formData.public_corporation_place"
                  color="teal"
                  dense
                  outlined
                  type="textarea"
                  rows="3"
                  lazy-rules
                  :rules="[
                    (val) => (val && val.length > 0) || 'Please type something',
                  ]"
                >
                </q-input>

                <q-file
                  v-model="formData.public_certificate"
                  class="q-mt-md"
                  outlined
                  dense
                  color="teal"
                  label="Copy of certificate of incorporation"
                  required
                >
                  <template v-slot:prepend>
                    <q-icon name="attach_file" />
                  </template>
                </q-file>

                <label class="zlabel" for="">Nationality of Directors*</label>
                <q-input
                  v-model="formData.public_nationality"
                  color="teal"
                  dense
                  outlined
                  type="textarea"
                  rows="3"
                  lazy-rules
                  :rules="[
                    (val) => (val && val.length > 0) || 'Please type something',
                  ]"
                >
                </q-input>
              </div>

              <div v-if="formData.sector_type == 'firm'">
                <label class="zlabel" for="">Nationality of partners*</label>
                <q-input
                  v-model="formData.firm_nationality"
                  dense
                  outlined
                  color="teal"
                  lazy-rules
                  type="textarea"
                  rows="3"
                  :rules="[
                    (val) => (val && val.length > 0) || 'Please type something',
                  ]"
                >
                </q-input>
                <label class="zlabel" for="">Members of association*</label>
                <q-input
                  v-model="formData.firm_members"
                  dense
                  outlined
                  color="teal"
                  lazy-rules
                  type="textarea"
                  rows="3"
                  :rules="[
                    (val) => (val && val.length > 0) || 'Please type something',
                  ]"
                >
                </q-input>
              </div>

              <div v-if="formData.sector_type == 'cooperative'">
                <label class="zlabel" for="">Nationality of members*</label>
                <q-input
                  v-model="formData.cooperative_nationality"
                  dense
                  outlined
                  color="teal"
                  type="textarea"
                  rows="3"
                  lazy-rules
                  :rules="[
                    (val) => (val && val.length > 0) || 'Please type something',
                  ]"
                >
                </q-input>
                <label class="zlabel" for="">Place of registration*</label>
                <q-input
                  v-model="formData.cooperative_regd_place"
                  dense
                  outlined
                  color="teal"
                  lazy-rules
                  type="textarea"
                  rows="3"
                  :rules="[
                    (val) => (val && val.length > 0) || 'Please type something',
                  ]"
                >
                </q-input>

                <q-file
                  v-model="formData.cooperative_certificate"
                  class="q-mt-md"
                  outlined
                  dense
                  color="teal"
                  label="Copy of certificate of registration"
                  required
                >
                  <template v-slot:prepend>
                    <q-icon name="attach_file" />
                  </template>
                </q-file>
              </div>

              <label class="zlabel" for=""
                >profession of nature of business*</label
              >
              <q-input
                v-model="formData.business_profession"
                dense
                outlined
                color="teal"
                lazy-rules
                type="textarea"
                rows="3"
                :rules="[
                  (val) => (val && val.length > 0) || 'Please type something',
                ]"
              >
              </q-input>
            </div>

            <div class="col-md-6 col-sm-5 col-xs-12 col-lg-5">
              <div class="col-md-6 col-xl-4 col-lg-6 col-sm-6 col-xs-12">
                <q-file
                  v-model="formData.mining_documents"
                  dense
                  color="teal"
                  label="Particulars of documents appended*"
                  required
                >
                  <template v-slot:prepend>
                    <q-icon name="attach_file" />
                  </template>
                </q-file>
              </div>
              <div class="row">
                <div class="col">
                  <span class="text-caption"
                    >(a) Mining dues clearance certificate or <br />
                    (b) Affidavit in lieu of mining dues clearance certificate
                    subject to the production of mining dues clearance
                    certificate within ninety days of making application, or
                    <br />(c) Affidavit when not holding any mining lease.</span
                  >
                </div>
              </div>

              <!-- <div class="col-md-6 col-sm-6 col-xs-12 col-lg-5"> -->
              <label class="zlabel" for="">Minerals intented to mine*</label>
              <q-input
                v-model="formData.minerals_intended"
                dense
                outlined
                color="teal"
                lazy-rules
                :rules="[
                  (val) => (val && val.length > 0) || 'Please type something',
                ]"
                type="textarea"
                rows="3"
              >
              </q-input>

              <label class="zlabel" for=""
                >Extent of the area in respect of mining lease required*</label
              >
              <q-input
                v-model="formData.area_extent"
                dense
                outlined
                color="teal"
                lazy-rules
                :rules="[
                  (val) => (val && val.length > 0) || 'Please type something',
                ]"
                type="textarea"
                rows="3"
              >
              </q-input>

              <label class="zlabel" for=""
                >Period of which mining lease is required*</label
              >
              <q-input
                v-model="formData.mining_period"
                dense
                outlined
                color="teal"
                lazy-rules
                :rules="[
                  (val) => (val && val.length > 0) || 'Please type something',
                ]"
                rows="3"
              >
              </q-input>

              <!-- <label class="zlabel" for="">Details of the area*</label>
                <q-input
                  v-model="formData.area_details"
                  dense
                  outlined
                  color="teal"
                  lazy-rules
                   type="textarea"
                  rows="3"
                >
                </q-input> -->
              <!-- </div> -->
            </div>
          </fieldset>

          <fieldset
            class="row justify q-col-gutter-md"
            style="border: 1px solid #ddd; background: #fff; border-radius: 4px"
          >
            <legend style="color: #428bca" class="text-body1 text-weight-bold">
              Area details
            </legend>

            <div class="col-md-6 col-sm-5 col-xs-12 col-lg-5">
              <q-select
                dense
                outlined
                v-model="formData.district"
                :options="districts"
                label="Choose district*"
                lazy-rules
                :rules="[
                  (val) => (val && val.length > 0) || 'Please type something',
                ]"
              />

              <label class="zlabel" for="">Mouza(Subdivision/RD Block)*</label>
              <q-input
                v-model="formData.mouza"
                dense
                outlined
                color="teal"
                lazy-rules
                :rules="[
                  (val) => (val && val.length > 0) || 'Please type something',
                ]"
                type="textarea"
                rows="3"
              >
              </q-input>

              <label class="zlabel" for="">Village(or City/Town)*</label>
              <q-input
                dense
                v-model="formData.city_town"
                type="textarea"
                outlined
                color="teal"
                lazy-rules
                :rules="[
                  (val) => (val && val.length > 0) || 'Please type something',
                ]"
                rows="3"
              >
              </q-input>
            </div>

            <div class="col-md-6 col-sm-5 col-xs-12 col-lg-5">
              <label class="zlabel" for=""
                >PLot/Dag No.(LSC/PP/Land Lease No etc)*</label
              >
              <q-input
                dense
                v-model="formData.plot_no"
                type="textarea"
                outlined
                color="teal"
                lazy-rules
                :rules="[
                  (val) => (val && val.length > 0) || 'Please type something',
                ]"
                rows="3"
              >
              </q-input>

              <label class="zlabel" for="">Areas(in Ha/Bigha/Sq.m)*</label>
              <q-input
                dense
                v-model="formData.areas"
                type="textarea"
                outlined
                color="teal"
                lazy-rules
                :rules="[
                  (val) => (val && val.length > 0) || 'Please type something',
                ]"
                rows="3"
              >
              </q-input>

              <label class="zlabel" for="">Ownership, Occupancy*</label>
              <q-input
                dense
                v-model="formData.ownership"
                type="textarea"
                outlined
                color="teal"
                lazy-rules
                :rules="[
                  (val) => (val && val.length > 0) || 'Please type something',
                ]"
                rows="3"
              >
              </q-input>
            </div>
          </fieldset>

          <div class="row">
            <q-toggle
              label="Is the area applied for lease is under forest?"
              v-model="formData.under_forest"
            />
          </div>

          <fieldset
            v-if="formData.under_forest"
            class="row justify-evenly q-mt-md"
            style="border: 1px solid #ddd; background: #fff; border-radius: 4px"
          >
            <legend style="color: #428bca" class="text-body1 text-weight-bold">
              Forest Description
            </legend>
            <div class="col-md-6 col-sm-4 col-xs-12 col-lg-3">
              <label class="zlabel" for=""
                >Forest Division, Block and Range*</label
              >
              <q-input
                v-model="formData.forest_division"
                color="teal"
                dense
                outlined
                lazy-rules
                :rules="[
                  (val) => (val && val.length > 0) || 'Please type something',
                ]"
              >
              </q-input>

              <q-toggle
                v-model="formData.sanctuary"
                class="q-mt-md"
                label="Whether it forms part of a National Park/Wildlife Sanctuary?"
              />
            </div>
            <div class="col-md-6 col-sm-4 col-xs-12 col-lg-3">
              <label class="zlabel" for=""
                >Legal status of forest, whether reserved*</label
              >
              <q-input
                v-model="formData.legal_status"
                dense
                outlined
                color="teal"
                lazy-rules
                :rules="[
                  (val) => (val && val.length > 0) || 'Please type something',
                ]"
              >
              </q-input>
              <label class="zlabel" for=""
                >Type and extent of vegetation in the area</label
              >
              <q-input
                v-model="formData.area_extent"
                color="teal"
                dense
                outlined
                lazy-rules
                :rules="[
                  (val) => (val && val.length > 0) || 'Please type something',
                ]"
              >
              </q-input>
            </div>
          </fieldset>

          <fieldset
            class="row justify-evenly q-col-gutter-md q-pb-lg"
            style="
              border: 1px solid #ddd;
              margin: 0 2px 22px 0;
              background: #fff;
              border-radius: 4px;
            "
          >
            <legend style="color: #428bca" class="text-body1 text-weight-bold">
              Other Information
            </legend>
            <div class="col-md-6 col-sm-5 col-xs-12 col-lg-5">
              <label class="zlabel" for="">Area hold under quarry lease*</label>
              <q-input
                v-model="formData.already_hold_already"
                dense
                outlined
                color="teal"
                lazy-rules
                type="textarea"
                rows="3"
                :rules="[
                  (val) => (val && val.length > 0) || 'Please type something',
                ]"
              >
              </q-input>

              <label class="zlabel" for=""
                >has applied for,but not granted*</label
              >
              <q-input
                v-model="formData.already_applied_not_granted"
                dense
                outlined
                color="teal"
                type="textarea"
                rows="3"
                lazy-rules
                :rules="[
                  (val) => (val && val.length > 0) || 'Please type something',
                ]"
              >
              </q-input>

              <label class="zlabel" for=""
                >being applied for simultaneously*</label
              >
              <q-input
                v-model="formData.applied_simultaneously"
                dense
                outlined
                color="teal"
                lazy-rules
                type="textarea"
                rows="3"
                :rules="[
                  (val) => (val && val.length > 0) || 'Please type something',
                ]"
              >
              </q-input>
            </div>

            <div class="col-md-6 col-sm-5 col-xs-12 col-lg-5">
              <q-file
                v-model="formData.sketch_plan"
                dense
                color="teal"
                label="Attach sketch plan*"
                class="q-mb-md"
                required
              >
                <template v-slot:prepend>
                  <q-icon name="attach_file" />
                </template>
              </q-file>

              <span class="q-mt-md">
                <span class="text-bold">Note:</span> <br />
                <div class="text-caption">
                  a) the area applied for lease together with boundary, if any,
                  of any other existing /mining lease in case the arca applied
                  for has any common point or line with the boundaries of
                  existing quarry lease <br />
                  <br />
                  (b) the dimensions of the lines forming the boundary area and
                  the bearing and distance of all mer points from any important,
                  prominent and fixed point or points
                  <br /><br />
                  (c) all important surface and natural features ( namely roads,
                  railways, wells, religious places cremation grounds,
                  Government establishment, streams etc)
                </div>
              </span>
            </div>
          </fieldset>

          <fieldset
            class="row justify-evenly q-pb-lg"
            style="
              border: 1px solid #ddd;
              margin: 0 2px 22px 0;
              background: #fff;
              border-radius: 4px;
            "
          >
            <legend style="color: #428bca" class="text-body1 text-weight-bold">
              Sketch plan
            </legend>
            <div class="col-md-4 col-sm-4 col-xs-12 col-lg-4">
              <label class="zlabel" for=""
                >Captive use, location and industry*</label
              >
              <q-input
                v-model="formData.captive_use"
                dense
                outlined
                color="teal"
                lazy-rules
                type="textarea"
                rows="3"
                :rules="[
                  (val) => (val && val.length > 0) || 'Please type something',
                ]"
              >
              </q-input>

              <label class="zlabel" for=""
                >Financial resource of the applicant*</label
              >
              <q-input
                v-model="formData.financial_resource"
                dense
                outlined
                color="teal"
                lazy-rules
                type="textarea"
                rows="3"
                :rules="[
                  (val) => (val && val.length > 0) || 'Please type something',
                ]"
              >
              </q-input>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12 col-lg-6">
              <label class="zlabel" for=""
                >if for sale,whether mineral supplied in raw or after
                processing</label
              >
              <q-input
                v-model="formData.if_sale"
                dense
                outlined
                color="teal"
                lazy-rules
                :rules="[
                  (val) => (val && val.length > 0) || 'Please type something',
                ]"
              >
              </q-input>
              <q-file
                v-model="formData.other_particulars"
                dense
                class="q-mb-md q-mt-md"
                color="teal"
                label="Any other particulars which the applicant wishes to furnish"
                required
              >
                <template v-slot:prepend>
                  <q-icon name="attach_file" />
                </template>
              </q-file>

              <span class="text-caption"
                >(a) Attested copy of Land-based document (LSC/PP/ Land Lease
                etc.) <br />
                (b) No Objection Certificate (NOC) from concerned Local/Village
                Council <br />
                (c) No Objection Certificate (NOC) from concerned Branch
                YMA/YLA/MTP <br />
                (d) No Objection Certificate (NOC) from concerned PWD
                <br />
                (e) Attested copy of EPIC Aadhaar Card of the applicant
                <br />
                (f) Two copies of recent Pasport-size Photo of the
                applicant</span
              >
            </div>
          </fieldset>

          <div class="row q-col-gutter-md">
            <div class="col-sm-10 col-xs-12">
              <label class="zlabel" for="gender">
                Signature of the applicant
                <span class="asterisk">*</span></label
              >
              <q-file v-model="formData.signature" outlined>
                <template v-slot:prepend>
                  <q-icon name="attach_file" />
                </template>
              </q-file>
            </div>
            <div class="text-center q-mt-md col-12">
              <q-btn type="submit" color="green-5" label="Submit" />
              <q-btn class="q-mx-md" color="red-4" label="Reset" />
            </div>
          </div>
        </q-form>
      </div>
      <!-- </q-tab-panel> -->

      <!-- <q-tab-panel name="sectors"> -->

      <!-- </q-tab-panel> -->

      <!-- <q-tab-panel name="documents"> -->

      <!-- </q-tab-panel> -->
      <!-- </q-tab-panels> -->
    </div>
  </div>
</template>

<script>
import { reactive } from "@vue/reactivity";
import { useStore } from "vuex";
import { onMounted } from "vue";
import { date } from "quasar";
import { ref } from "vue";
import { api } from "src/boot/axios";
import { useQuasar } from "quasar";
import { useRouter } from "vue-router";

// import Form from "./Form.vue";
import router from "src/router";

export default {
  components: {
    // Form,
  },

  setup(props, context) {
    const applicantRef = ref(null);
    const store = useStore();
    const $q = useQuasar();
    const router = useRouter();
    const draft = store.getters["applicantData/getCurrentDraft"];
    const currentUser = store.getters["auth/getCurrentUser"];

    const formData = reactive({
      application_code: "GEOLOGY_MINING",
      department_id: 17,
      other_particulars: null,
      name: "",
      sd: "",
      village: "",
      houseno: "",
      telephone: "",
      contact: "",
      sector_type: "",

      individual: '',
      individual_nationality: "",
      individual_residency: "",
      individual_qualification: "",

      private:'',
      private_regd_place: "",
      private_certificate: null,
      private_members_nationality: "",

      public: '',
      public_corporation_place: "",
      public_certificate: null,
      public_nationality: "",
      firm: '',
      firm_nationality: "",
      firm_members: "",
      cooperative: '',
      cooperative_nationality: "",
      cooperative_regd_place: "",
      cooperative_certificate: null,
      business_profession: "",
      mining_documents: null,
      minerals_intended: "",
      mining_period: " ",
      area_extent: "",
      district: "",
      mouza: "",
      city_town: "",
      plot_no: "",
      areas: "",
      ownership: "",
      under_forest: false,
      forest_division: "",
      legal_status: "",
      sanctuary: false,
      type_extent: "",
      sketch_plan: null,
      already_hold_already: "",
      already_applied_not_granted: "",
      applied_simultaneously: "",
      captive_use: "",
      if_sale: "",
      financial_resource: "",
      other_particulars: null,
      signature: null,
    });

    const submit = () => {
      // return console.log('my router',myRouter);
      //   let formDatas = reactive({});

      //   formDatas = Object.assign({}, formData.value);

      var formDatas = new FormData();

      for (let data in formData) {
        // console.log("formData foreach", data, formData[data]);
        formDatas.append(`${data}`, formData[data]);
      }
      //   return console.log("formDats", formDatas);

      api
        .post("/applications/submit", formDatas)
        .then((res) => {
          console.log("response value", res.data);
          $q.notify({
            message: "Application submitted successfully",
            color: "green",
          });
          router.push({ name: "investor:ongoing" });
        })
        .catch((err) => console.log("error", err));
    };

    return {
      applicantRef,
      submit,
      formData,
      districts: [
        "Aizawl	",
        "Champhai",
        "Hnahthial",
        "Kolasib",
        "Khawzawl",
        "Lawngtlai",
        "Lunglei",
        "Mamit",
        "Saiha",
        "Saitual",
        "Serchhip",
        "Other",
      ],
      router,
      options: ["individual", "private", "public", "firm", "cooperative"],
      maxDate: () => date.formatDate(Date.now(), "YYYY-MM-DD"),
    };
    //test
  },
};
</script>
