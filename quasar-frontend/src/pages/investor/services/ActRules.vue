<template>
  <div>
    <q-table title-class="text-uppercase" title="Act and Rules" :columns="columns" :rows="rows" row-key="name" >
        <template v-slot:body-cell-download="props">
        <q-td :props="props">
          <div>
            <q-btn color="primary" label="download"  />
          </div>
         
        </q-td>
      </template>
    </q-table>
  </div>
</template>

<script>
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
    name: "actrules",
    required: true,
    label: "Act and Rules",
    align: "left",
    field: "actrules",
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
    serial: 2,
    actrules: "Mizoram EODB Act, 2021 (Draft)",
    download: "download",
    
    
  },
  {
    serial: "1",
    actrules: "Mizoram EODB Act, 2021 (Draft)",
    download: "download",
  },
  {
    serial: "1",
    actrules: "Mizoram EODB Act, 2021 (Draft)",
    download: "download",
  },
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
