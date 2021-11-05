<template>
  <q-page class="container">
    <div class="zcard">
      <div class="row justify-center q-col-gutter-md">
        <div class="col-6">
          <q-table
            wrap-cells
            separator="none"
            table-class="my-table"
            title="Treats"
            :rows="rows"
            :columns="columns"
            row-key="name"
          >
            <template v-slot:body-cell-actions="props">
              <q-td
                style="display: flex; padding-bottom: 46px !important"
                :props="props"
              >
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
              <!-- <span class="text-h5">Department Profile List</span> -->
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
        </div>
        <div class="col-lg-4 col-sm-10">
          <h1 class="ztitle">Add Department Profile</h1>
          <q-card class="my-card">
            <q-card-section class="q-pb-none">
              <!-- <div class="text-h6">Add Department Profile</div> -->
            </q-card-section>
            <q-card-section class="q-pb-none">
              <q-select dropdown-icon="expand_more" filled dense outlined v-model="model" :options="options" label="Select Department" />
            </q-card-section>
            <q-card-section class="q-pb-none">
              <q-file dense label="Secreatriat HOD Name" outlined v-model="model">
                <template v-slot:prepend>
                  <q-icon name="attach_file" />
                </template>
              </q-file>

        <div class="col-4">
          <q-card class="my-card">
            <q-card-section class="q-pb-none">
              <div class="text-h6">Add Department Profile</div>
            </q-card-section>
            <q-card-section class="q-pb-none">
              <q-input
                v-model="text"
                outlined
                dense
                type="text"
                label="Secreatriat HOD Designation"
              />
            </q-card-section>
            <q-card-section class="q-pb-none">
              <q-file
                dense
                label="Department Name"
              />
            </q-card-section>

            <q-card-section class="q-pb-none">
              <q-file dense label="Secreatriat HOD Name" outlined v-model="model">
                <template v-slot:prepend>
                  <q-icon name="attach_file" />
                </template>
              </q-file>
            </q-card-section>

            <q-card-section class="q-pb-none">
              <q-input
                v-model="text"
                outlined
                dense
                type="text"
                label="Secreatriat HOD Designation"
              />
            </q-card-section>

            <q-card-section class="q-pb-none">
              <q-file
                dense
                label="Secreatriat HOD Photo"
                outlined
                v-model="model"
              >
                <template v-slot:prepend>
                  <q-icon name="attach_file" />
                </template>
              </q-file>
            </q-card-section>

            <q-card-section class="q-pb-none">
              <q-input
                v-model="text"
                outlined
                dense
                type="text"
                label="Directorate HOD Name"
              />
            </q-card-section>

            <q-card-section class="q-pb-none">
              <q-file
                dense
                label="Directorate  HOD Designation"
                outlined
                v-model="model"
              >
                <template v-slot:prepend>
                  <q-icon name="attach_file" />
                </template>
              </q-file>
            </q-card-section>

            <q-card-section>
              <q-input
                v-model="text"
                outlined
                dense
                type="text"
                label="Directorate HOD Photo"
              />
            </q-card-section>

            <q-card-actions align="right">
              <q-btn color="red-5" label="Reset" />
              <q-btn color="green-5" label="Save" />
            </q-card-actions>
          </q-card>
        </div>
      </div>

      <q-dialog v-model="dialogRef">
        <q-card class="q-dialog-plugin">
          <q-card-section class="q-pb-none">
            <div class="text-h6">Update Department Profile</div>
          </q-card-section>
          <q-card-section>
            <q-input
              v-model="text"
              outlined
              dense
              type="text"
              label="Department Name"
            />
          </q-card-section>

          <q-card-section>
            <q-file dense label="Secreatriat HOD Name" outlined v-model="model">
              <template v-slot:prepend>
                <q-icon name="attach_file" />
              </template>
            </q-file>
          </q-card-section>

          <q-card-section>
            <q-input
              v-model="text"
              outlined
              dense
              type="text"
              label="Secreatriat HOD Designation"
            />
          </q-card-section>

          <q-card-section>
            <q-file dense label="Secreatriat HOD Photo" outlined v-model="model">
              <template v-slot:prepend>
                <q-icon name="attach_file" />
              </template>
            </q-file>
          </q-card-section>

          <q-card-section>
            <q-input
              v-model="text"
              outlined
              dense
              type="text"
              label="Directorate HOD Name"
            />
          </q-card-section>

          <q-card-section>
            <q-file
              dense
              label="Directorate  HOD Designation"
              outlined
              v-model="model"
            >
              <template v-slot:prepend>
                <q-icon name="attach_file" />
              </template>
            </q-file>
          </q-card-section>
          <q-card-section>
            <q-input
              v-model="text"
              outlined
              dense
              type="text"
              label="Directorate HOD Photo"
            />
          </q-card-section>
          <q-card-actions align="right">
            <q-btn color="red-5" label="Reset" />
            <q-btn color="green-5" label="Save" />
          </q-card-actions>
        </q-card>
      </q-dialog>
    </div>
    </div>
  <!-- </q-page> -->

  </q-page>
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
  {
    dept_name: "Commerce & Industries Department",
    secretariat_hod_name: "P. Jawahar",
    secretariat_designation: "Secretary",
    directorate_hod_name: "J. Hmingthanmawia	",
    directorate_hod_designation: "Director",
  },
  {
    dept_name: "Environment, Forest & Climate Change Department",
    secretariat_hod_name: "Pu Liandawla, IFS",
    secretariat_designation: "Principal Chief Conservator of Forests",
    directorate_hod_name: "Pu Keyiekhrie Kire IFS",
    directorate_hod_designation:
      "Additional Principal Chief Conservator of Forests",
  },
];

export default {
  props: {
    // ...your custom props
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


       options: [
        'Google', 'Facebook', 'Twitter', 'Apple', 'Oracle'
      ],

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

