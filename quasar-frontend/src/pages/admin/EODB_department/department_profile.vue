<template>
  <div class="q-pa-lg">
    <q-table
      title="Treats"
      :rows="rows"
      :columns="columns"
      row-key="name"
      :visible-columns="visibleColumns"
    >
      <template v-slot:body-cell-actions="props">
        <q-td :props="props">
          <q-btn
            dense
            round
            flat
            color="green"
            @click="edit(props)"
            icon="edit"
          ></q-btn>
          <q-btn
            outl
            dense
            round
            flat
            color="red-4"
            @click="cancel"
            icon="delete"
          ></q-btn>
        </q-td>
      </template>
      <template v-slot:top>
        <span class="text-h5">Department Profile List</span>

        <q-space />

        <q-input dense rounded outlined v-model="text">
          <template v-slot:append>
            <q-avatar>
              <q-icon size="md" name="search" />
            </q-avatar>
          </template>
        </q-input>
      </template>
    </q-table>

    <q-dialog v-model="dialogRef">
      <q-card class="q-dialog-plugin">
        <q-card-section>
          <div class="text-h6">Edit Department</div>
        </q-card-section>
        <q-card-section class="q-pt-none">
          <q-input
            placeholder="Department Name"
            dense
            v-model="dept_name"
            autofocus
            @keyup.enter="prompt = false"
          />
        </q-card-section>

        <q-card-section class="q-pt-none">
          <q-input
            placeholder="Secretariat HOD Name"
            dense
            v-model="secretariat_hod_name"
            autofocus
            @keyup.enter="prompt = false"
          />
        </q-card-section>

        <q-card-section class="q-pt-none">
          <q-input
            placeholder="Secretariat Designation"
            dense
            v-model="secretariat_hod_name"
            autofocus
            @keyup.enter="prompt = false"
          />
        </q-card-section>

        <q-card-section class="q-pt-none">
          <q-input
            placeholder="Directorate HOD Name"
            dense
            v-model="directorate_hod_name"
            autofocus
            @keyup.enter="prompt = false"
          />
        </q-card-section>

        <q-card-section class="q-pt-none">
          <q-input
            placeholder="Directorate HOD Designation"
            dense
            v-model="directorate_hod_designation"
            autofocus
            @keyup.enter="prompt = false"
          />
        </q-card-section>

        <q-card-actions align="right">
          <q-btn color="primary" label="OK" @click="edit" />
          <q-btn color="primary" label="Cancel" v-close-popup />
        </q-card-actions>
      </q-card>
    </q-dialog>
  </div>
</template>

<script>
import { ref } from "vue";

const columns = [
  {
    name: "Department Name",
    required: true,
    label: "Department Name",
    align: "left",
    field: "dept_name",
    format: (val) => `${val}`,
    sortable: true,
  },

  {
    name: "Secretariat HOD Name",
    required: true,
    label: "Secretariat HOD Name",
    align: "left",
    field: "secretariat_hod_name",
    format: (val) => `${val}`,
    sortable: true,
  },

  {
    name: "Secretariat Designation",
    required: true,
    label: "Secretariat Designation",
    align: "left",
    field: "secretariat_designation",
    format: (val) => `${val}`,
    sortable: true,
  },

  {
    name: "Directorate HOD Name",
    required: true,
    label: "Directorate HOD Name",
    align: "left",
    field: "directorate_hod_name",
    format: (val) => `${val}`,
    sortable: true,
  },

  {
    name: "Directorate HOD Designation",
    required: true,
    label: "Directorate HOD Designation",
    align: "left",
    field: "directorate_hod_designation",
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
    dept_name: "Aizawl Municipal Corporation",
    secretariat_hod_name: "Administrator",
    secretariat_designation: "Administrator",
    directorate_hod_name: "Administrator",
    directorate_hod_designation: "Administration",
  },
];

export default {
  props: {
    // ...your custom props
  },

  setup() {
    const dialogRef = ref(true);

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

      secretariat_designation.value = props.row.secretariat_designation

      directorate_hod_name.value = props.row.directorate_hod_name

      directorate_hod_designation.value = props.row.directorate_hod_designation
      dialogRef.value = true;

      console.log("props", props);
    };

    const cancel = () => {
      console.log("cancel");
      dialogRef.value = false;
    };

    return {
      visibleColumns: ref([
        "calories",
        "desc",
        "fat",
        "carbs",
        "protein",
        "sodium",
        "calcium",
        "iron",
      ]),
      dept_name,
      dept_slug,
      dialogRef,
      rows,
      columns,

      secretariat_hod_name,
      secretariat_designation,
      directorate_hod_name,
      directorate_hod_designation,
      edit,
      cancel,
    };
  },
};
</script>

<style></style>
