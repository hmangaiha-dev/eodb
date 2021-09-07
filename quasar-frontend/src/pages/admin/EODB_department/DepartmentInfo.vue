<template>
  <!-- <q-page class="container"> -->
    <div class="zcard">
      <div class="row justify-center q-col-gutter-md ">
        <div class="col-6">
          <q-table
            wrap-cells
            separator="none"
            title="Treats"
            :rows="rows"
            :columns="columns"
            row-key="name"
            :visible-columns="visibleColumns"
          >
            <template v-slot:body-cell-actions="props">
              <q-td style="display: flex" :props="props">
                <q-btn
                  dense
                  round
                  flat
                  color="green"
                  @click="edit(props)"
                  icon="edit"
                ></q-btn>
                <q-btn
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
              <span class="ztitle">Department Info List</span>
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
        <div class="col-4">
          <q-card class="my-card">
            <q-card-section class="q-pb-none">
              <div class="text-h6">Add Department Info List</div>
            </q-card-section>
            <q-card-section class="q-pb-none">
              <q-input
                v-model="text"
                outlined
                dense
                type="text"
                label="Department Name"
              />
            </q-card-section>
            <q-card-section class="q-pb-none">
              <q-input
                v-model="text"
                outlined
                dense
                type="text"
                label="Heading"
              />
            </q-card-section>
            <q-card-section class="q-pb-none">
              <q-input v-model="text" outlined dense type="text" label="Type" />
            </q-card-section>
            <q-card-section class="q-pb-none">
              <q-input
                type="textarea"
                v-model="text"
                outlined
                dense
                label="Body"
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
          <q-card-section>
            <div class="text-h6">Edit Department Info</div>
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
              placeholder="Heading"
              dense
              v-model="dept_slug"
              autofocus
              @keyup.enter="prompt = false"
            />
          </q-card-section>
          <q-card-section class="q-pt-none">
            <q-input
              placeholder="Type"
              dense
              v-model="dept_slug"
              autofocus
              @keyup.enter="prompt = false"
            />
          </q-card-section>
          <q-card-section class="q-pt-none">
            <q-input
              type="textarea"
              placeholder="Body"
              dense
              v-model="dept_slug"
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
  <!-- </q-page> -->
</template>

<script>
import { useDialogPluginComponent } from "quasar";

import { ref } from "vue";

const columns = [
  {
    name: "Department Name",
    required: true,
    label: "Department Name",
    align: "left",
    field: "dept",
    format: (val) => `${val}`,
    sortable: true,
  },

  {
    name: "Heading",
    required: true,
    label: "Heading",
    align: "left",
    field: "heading",
    format: (val) => `${val}`,
    sortable: true,
  },

  {
    name: "Type",
    required: true,
    label: "Type",
    align: "left",
    field: "type",
    format: (val) => `${val}`,
    sortable: true,
  },

  {
    name: "Body",
    required: true,
    label: "body",
    align: "left",
    field: "body",
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
    dept: "Aizawl Municipal Corporation",
    heading: "Mission",
    type: "Text",
    body: "Our Mission is to accelerate industrial development in Mizoram by maximizing investment, output, growth, employment and competitiveness throughdevelopment of infrastructure, human resource, incentives and administrative support network.",
  },
  {
    dept: "Commerce & Industries Department",
    heading: "Vision",
    type: "Text",
    body: "Our Mission is to accelerate industrial development in Mizoram by maximizing investment, output, growth, employment and competitiveness throughdevelopment of infrastructure, human resource, incentives and administrative support network.",
  },
  {
    dept: "Legal Metrology",
    heading: "Mission",
    type: "Text",
    body: " Enforcing Legal Metrology Act, and Rules made there under.",
  },
];

export default {
  props: {
    // ...your custom props
  },

  emits: [
    // REQUIRED; need to specify some events that your
    // component will emit through useDialogPluginComponent()
    ...useDialogPluginComponent.emits,
  ],
  setup() {
    const dialogRef = ref(false);

    const dept_name = ref("");

    const dept_slug = ref("");

    const edit = (props) => {
      dept_name.value = props.row.dept;
      dept_slug.value = props.row.slug;
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
      edit,
      cancel,
    };
  },
};
</script>

<style></style>
