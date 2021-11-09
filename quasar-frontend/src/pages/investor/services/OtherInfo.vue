<template>
  <div>
    <q-table title-class="text-uppercase" title="Other Informations" :columns="columns" :rows="rows" row-key="name" >
        <template v-slot:body-cell-download="props">
        <q-td :props="props">
          <div>
            <q-btn color="primary" label="download" />
          </div>
         
        </q-td>
      </template>
    </q-table>
  </div>
</template>

<script>
import { date } from 'quasar';
const columns = [
  {
    name: "serial",
    required: true,
    label: "#",
    align: "left",
    field: "serial",
    format: (val) => `${val}`,
    sortable: false,
  },
  {
    name: "other_info",
    required: true,
    label: "Act and Rules",
    align: "left",
    field: "other_info",
    format: (val) => `${val}`,
    sortable: true,
  },

  
  {
    name: "download",
    required: true,
    label: "Download",
    align: "left",
    field: "download",
    format: (val) => `${val}`,
    sortable: true,
  },
];

const rows = [
  {
    serial: 1,
    other_info: 'District/Divisional Officers with Office Address',

    download: "download",
    
    
  }
];
export default {
  setup() {
    return {
      columns,
      rows,
    };
  },
};
</script>

<style lang="scss" scoped></style>
