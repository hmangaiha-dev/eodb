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
           
             @click="onOKClick" 
            icon="edit"
          ></q-btn>
          <q-btn
            dense
            round
            flat
            color="red-4"
            @click="deleteRow(props)"
            icon="delete"
          ></q-btn>
        </q-td>
      </template>
      <template v-slot:top>
        <span class="text-h5">Department List</span>

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

    <q-dialog ref="dialogRef" @hide="onDialogHide">
    <q-card class="q-dialog-plugin">

      <div class="h4">Diaglog component</div>
      <!--
        ...content
        ... use q-card-section for it?
      -->

      <!-- buttons example -->
      <q-card-actions align="right">
        <q-btn color="primary" label="OK" @click="onOKClick" />
        <q-btn color="primary" label="Cancel" @click="onCancelClick" />
      </q-card-actions>
    </q-card>
  </q-dialog>
  </div>
</template>

<script>
import { useDialogPluginComponent } from 'quasar'

import { ref } from "vue";




const columns = [
  {
    name: "Department Name",
    required: true,
    label: "Dessert (100g serving)",
    align: "left",
    field: "dept",
    format: (val) => `${val}`,
    sortable: true,
  },

  {
    name: "Slug",
    required: true,
    label: "Dessert (100g serving)",
    align: "left",
    field: "slug",
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
    slug: "aizawl-municipal-corporation",
  },
  {
    dept: "Commerce & Industries Department",
    slug: "commerce-and-industries-department",
  },
  {
    dept: "Environment, Forest & Climate Change Department",
    slug: "environment-forest-and-climate-change-department",
  },
  {
    dept: "Excise & Narcotics Department",
    slug: "excise-and-narcotics-department",
  },
];

export default {

   props: {
    // ...your custom props
  },

  emits: [
    // REQUIRED; need to specify some events that your
    // component will emit through useDialogPluginComponent()
    ...useDialogPluginComponent.emits
  ],
  setup() {
    const { dialogRef, onDialogHide, onDialogOK, onDialogCancel } = useDialogPluginComponent()

    const  onOKClick  = () => {
      onDialogOK()
    }

   
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
       dialogRef,
      onDialogHide,
      onOKClick,
      onDialogOK,
      onCancelClick: onDialogCancel,
      columns,
      rows,
    };
  },
};
</script>

<style></style>
