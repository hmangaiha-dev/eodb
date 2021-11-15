<template>
  <q-page class="">
    <div class="zcard">
      <services :rows="rows" :columns="columns" :title="title"/>
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

const title = ref('Fire & Industries Department')

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

export default {
  props: {
    // ...your custom props
  },

  components: {
    Services,
  },

  setup() {
  

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
