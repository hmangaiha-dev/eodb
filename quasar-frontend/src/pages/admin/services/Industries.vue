<template>
  <q-page class="">
    <div class="zcard">
      <services :rows="rows" :columns="columns" :title="title" />
    </div>
  </q-page>
</template>

<script>
import { ref } from "vue";

import Services from "../services/Services.vue";

const columns = [
  {
    name: "service_name",
    required: true,
    label: "Service Name",
    align: "left",
    field: "service_name",
    format: (val) => `${val}`,
    sortable: true,
  },

  {
    name: "actions",
    required: true,
    label: "Actions",
    align: "left",
    field: "actions",
    format: (val) => `${val}`,
    sortable: true,
  },
];

const rows = [
  {
    service_name:
      "Application For State Transportation Subsidy on Plant & Machineries",
  },
  {
    service_name: "Application For Allotment Of Industrial Plot",
  },
  {
    service_name: "Application For Claim Of Interest Subsidy",
  },
  {
    service_name: "Application for Claim Of Subsidy On Rent Of Factory Shed",
  },
];

const title = ref('Commerce and Industries Department')

export default {
  props: {
    // ...your custom props
  },

  components: {
    Services,
  },

  setup() {
    const dialogRef = ref(false);

    const dept_name = ref("");
    const secretariat_hod_name = ref("");
    const secretariat_designation = ref("");
    const directorate_hod_name = ref("");
    const directorate_hod_designation = ref("");

    const dept_slug = ref("");

    const edit = (props) => {
      console.log("props", props);

      dept_name.value = props.row.dept_name;

      secretariat_hod_name.value = props.row.secretariat_hod_name;

      secretariat_designation.value = props.row.secretariat_designation;

      directorate_hod_name.value = props.row.directorate_hod_name;

      directorate_hod_designation.value = props.row.directorate_hod_designation;
      dialogRef.value = true;

      console.log("props", props);
    };

    const cancel = () => {
      console.log("cancel");
      dialogRef.value = false;
    };

    return {
     
      rows,
      columns,
      title

     
    };
  },
};
</script>

<style lang="sass">

// .q-table thead, .q-table tr, .q-table th, .q-table td
//   white-space: normal !important
</style>
