<template>
  <div class="zcard row items-center q-col-gutter-md">
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
          <q-file v-model="formData.certified_copy_owner" outlined>
            <template v-slot:prepend>
              <q-icon name="attach_file" />
            </template>
          </q-file>
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
          <q-file v-model="formData.certified_lease_doc" outlined>
            <template v-slot:prepend>
              <q-icon name="attach_file" />
            </template>
          </q-file>
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
          <q-file v-model="formData.certified_rent_deed" outlined>
            <template v-slot:prepend>
              <q-icon name="attach_file" />
            </template>
          </q-file>
        </div>
        <!-- </div> -->
        <!-- <div class="row q-col-gutter-md"> -->
        <div class="col-xs-12 col-md-6">
          <label class="zlabel" for=""> b)NOC from owner* </label>
          <q-file v-model="formData.noc_owner" outlined>
            <template v-slot:prepend>
              <q-icon name="attach_file" />
            </template>
          </q-file>
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
      <q-file v-model="formData.site_layout_plan" outlined>
        <template v-slot:prepend>
          <q-icon name="attach_file" />
        </template>
      </q-file>
    </div>

    <div class="col-xs-12 col-md-6">
      <label class="zlabel" for="dob" type="date">
        5.8 Attach Linear Strip Plan* <br />
        <span class="text-caption">
          [Map showing the width of entry/exit gate and its distance from the
          connecting NH/SH/SR/Other road]
        </span>
      </label>
      <q-file v-model="formData.linear_strip_plan" outlined>
        <template v-slot:prepend>
          <q-icon name="attach_file" />
        </template>
      </q-file>
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
    const draft = store.getters["applicantData/getCurrentDraft"];
    const currentUser = store.getters["auth/getCurrentUser"];

    const formData = reactive({
      choose_applicable: "",
      certified_copy_owner: null,
      certified_lease_doc: null,
      certified_lease_doc: null,
      certified_rent_deed: null,
      noc_owner: null,
      site_layout_plan: null,
      linear_strip_plan: null,
     
    });
    onMounted(() => {});
    return {
      formData,
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
      maxDate: () => date.formatDate(Date.now(), "YYYY-MM-DD"),
    };
  },
};
</script>
