<template>
  <div>
    <q-table flat title-class="text-uppercase" title="Notifications" :columns="columns" :rows="rows" row-key="name" >
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
    name: "date",
    required: true,
    label: "Act and Rules",
    align: "left",
    field: "date",
    format: (val) => `${val}`,
    sortable: true,
  },
  {
    name: "noti_no",
    required: true,
    label: "Download",
    align: "left",
    field: "noti_no",
    format: (val) => `${val}`,
    sortable: true,
  },
  {
    name: "subject",
    required: true,
    label: "Act and Rules",
    align: "left",
    field: "subject",
    format: (val) => `${val}`,
    sortable: true,
  },
  {
    name: "issue_authority",
    required: true,
    label: "Download",
    align: "left",
    field: "issue_authority",
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
    date: new Date().toLocaleDateString(),
    noti_no: '34',
    subject: 'Test Subject',
    issue_authority: 'MSeGS',

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
