<template>
  <div class="zcard row items-center q-col-gutter-md">
    <q-dialog class="print-hide" v-model="dialog">
      <q-card>
        <embed :src="attachment" width="500" height="500" />
      </q-card>
    </q-dialog>
    <div class="col-xs-12 col-sm-10">
      <label class="zlabel" for="name">
        5.6 Choose Which Ever Is Applicaple to You <br />
        <span class="text-caption">
          [ Covers additional details(such as ownership details) about project
          site. Investor is required to select at least one option from
          certified copy of ownership/certified copy of lease document/rent
          deed(tenancy)]
        </span>
      </label>
    </div>
    <div class="col-xs-12 col-md-8">
      <q-select
        dropdown-icon="expand_more"
        outlined
        v-model="formData.choose_applicable"
        :options="choose"
      />
    </div>

    <div class="q-ml-md col-12">
      <div
        v-if="
          formData.choose_applicable ==
          'i. Certified Copy of freehold ownership'
        "
        class="row q-col-guter-md"
      >
        <div class="col-xs-12 col-md-6">
          <label class="zlabel" for="">
            a)Attach certified copy of ownership*
          </label>
          <q-uploader
            flat
            @added="
              (files) => {
                formData.certified_copy_owner = files[0];
              }
            "
            hide-upload-btn
            ref="formData.applicant_photo"
            color="grey"
            v-model="formData.certified_copy_owner"
            url="http://localhost:4444/upload"
            style="max-width: 300px"
          />
          <q-img
            v-if="
              !Array.isArray(formData.certified_copy_owner) &&
              formData.certified_copy_owner
            "
            :src="`http://localhost:8000/storage/${formData.certified_copy_owner}`"
            style="max-width: 150px; margin-top: -54px"
            spinner-color="primary"
            spinner-size="82px"
          />
        </div>
      </div>

      <div
        v-if="
          formData.choose_applicable ==
          'ii. Certified Copy of leasehold ownership'
        "
        class="row q-mt-md q-col-gutter-md"
      >
        <div class="col-xs-12 col-md-6">
          <label class="zlabel" for="">
            a)Attach certified of lease document*
          </label>
          <q-uploader
            flat
            @added="
              (files) => {
                formData.certified_lease_doc = files[0];
              }
            "
            hide-upload-btn
            ref="formData.applicant_photo"
            color="grey"
            v-model="formData.certified_lease_doc"
            url="http://localhost:4444/upload"
            style="max-width: 300px"
          />
          <q-img
            v-if="
              !Array.isArray(formData.certified_lease_doc) &&
              formData.certified_lease_doc
            "
            :src="`http://localhost:8000/storage/${formData.certified_lease_doc}`"
            style="max-width: 150px; margin-top: -54px"
            spinner-color="primary"
            spinner-size="82px"
          />
        </div>
      </div>

      <div
        v-if="formData.choose_applicable == 'iii. Rent Deep'"
        class="row q-mt-md q-col-gutter-md"
      >
        <!-- <div class="row col-12 q-col-gutter-md"> -->
        <div class="col-xs-12 col-md-6">
          <label class="zlabel" for="">
            a)Attach certified copy of rent deed*
          </label>
          <q-uploader
            flat
            @added="
              (files) => {
                formData.certified_rent_deed = files[0];
              }
            "
            hide-upload-btn
            ref="formData.applicant_photo"
            color="grey"
            v-model="formData.certified_rent_deed"
            url="http://localhost:4444/upload"
            style="max-width: 300px"
          />
          <q-img
            v-if="
              !Array.isArray(formData.certified_rent_deed) &&
              formData.certified_rent_deed
            "
            :src="`http://localhost:8000/storage/${formData.certified_rent_deed}`"
            style="max-width: 150px; margin-top: -54px"
            spinner-color="primary"
            spinner-size="82px"
          />
        </div>
        <!-- </div> -->
        <!-- <div class="row q-col-gutter-md"> -->
        <div class="col-xs-12 col-md-6">
          <label class="zlabel" for=""> b)NOC from owner* </label>
          <q-uploader
            flat
            @added="
              (files) => {
                formData.noc_owner = files[0];
              }
            "
            hide-upload-btn
            ref="formData.applicant_photo"
            color="grey"
            v-model="formData.noc_owner"
            url="http://localhost:4444/upload"
            style="max-width: 300px"
          />
          <q-img
            v-if="!Array.isArray(formData.noc_owner) && formData.noc_owner"
            :src="`http://localhost:8000/storage/${formData.noc_owner}`"
            style="max-width: 150px; margin-top: -54px"
            spinner-color="primary"
            spinner-size="82px"
          />
        </div>
        <!-- </div> -->
      </div>
    </div>

    <div class="col-xs-12 col-md-6">
      <label class="zlabel" for="dob" type="date">
        5.7 Attach Site/Layout Plan* <br />
        <span class="text-caption">
          [Map showing dimensions & directions of project site with entry/exit]
        </span>
      </label>
      <q-uploader
        flat
        @added="
          (files) => {
            formData.site_layout_plan = files[0];
          }
        "
        hide-upload-btn
        ref="formData.applicant_photo"
        color="grey"
        v-model="formData.site_layout_plan"
        url="http://localhost:4444/upload"
        style="max-width: 300px"
      />
      <q-img
        v-if="
          !Array.isArray(formData.site_layout_plan) && formData.site_layout_plan
        "
        :src="`http://localhost:8000/storage/${formData.site_layout_plan}`"
        style="max-width: 150px; margin-top: -54px"
        spinner-color="primary"
        spinner-size="82px"
      />
    </div>

    <div class="col-xs-12 col-md-6">
      <label class="zlabel" for="dob" type="date">
        5.8 Attach Linear Strip Plan* <br />
        <span class="text-caption">
          [Map showing the width of entry/exit gate and its distance from the
          connecting NH/SH/SR/Other road]
        </span>
      </label>
      <q-uploader
        flat
        @added="
          (files) => {
            formData.linear_strip_plan = files[0];
          }
        "
        hide-upload-btn
        ref="formData.applicant_photo"
        color="grey"
        v-model="formData.linear_strip_plan"
        url="http://localhost:4444/upload"
        style="max-width: 300px"
      />
      <q-img
        v-if="
          !Array.isArray(formData.linear_strip_plan) &&
          formData.linear_strip_plan
        "
        :src="`http://localhost:8000/storage/${formData.linear_strip_plan}`"
        style="max-width: 150px; margin-top: -54px"
        spinner-color="primary"
        spinner-size="82px"
      />
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
    const draft = store.getters["applicantData/getCurrentDraft"];
    const currentUser = store.getters["auth/getCurrentUser"];
    const dialog = ref(false);
    const attachment = ref(null);

    let formData = reactive({
      choose_applicable: "",
      certified_copy_owner: null,
      certified_copy_owner2: null,
      certified_lease_doc: null,
      certified_lease_doc2: null,
      // certified_lease_doc: null,
      certified_rent_deed: null,
      certified_rent_deed: null,
      noc_owner: null,
      site_layout_plan: null,
      linear_strip_plan: null,
      model: "C",
    });

    const getC = () =>
      (formData = Object.assign(
        formData,
        store.state.globalData.common?.partC
      ));

    onMounted(() => getC());

    watch(store.state.globalData.common, () => getC());

    return {
      formData,
      getC,
      dialog,
      attachment,
      choose: [
        "i. Certified Copy of freehold ownership",
        "ii. Certified Copy of leasehold ownership",
        "iii. Rent Deep",
      ],
      industrial_areas: [
        "Industrial Growth Centre, Luangmual",
        "Industrial Estate, Zuangtui",
        "Export Promotion Industrial Park, Lengte",
      ],
      showAttachment: (val) => {
        console.log("dialog attach", val);
        // return
        attachment.value = "http://localhost:8000/storage/" + val;
        dialog.value = true;
      },
      maxDate: () => date.formatDate(Date.now(), "YYYY-MM-DD"),
    };
  },
};
</script>
