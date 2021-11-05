<template>
  <q-page>
    <div class="row justify-center q-col-gutter-md">
      <div class="col-lg-6 col-sm-10">
        <h1 class="ztitle">{{ title }}</h1>
        <q-table
          :filter="filter"
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
                color="green-5"
                @click="edit(props)"
                label="Apply"
              ></q-btn>
            </q-td>
          </template>
          <template v-slot:top>
            <!-- <span class="text-h5">Department Profile List</span> -->
            <q-space />
            <q-input class="filter-search" label="Search" dense rounded outlined v-model="filter">
              <template v-slot:append>
                <q-avatar>
                  <q-icon size="md" name="search" />
                </q-avatar>
              </template>
            </q-input>
          </template>
        </q-table>
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
  </q-page>
</template>

<script>
import {ref} from 'vue'
export default {
  props: ["rows", "columns", "title"],

  setup(props) {
    return {
      filter: ref(""),
    };
  },
};
</script>


<style  lang="scss">
  
 .filter-search > div > div > div.q-field__control-container > div, .q-field__native {
      padding-left: 10%;
      // color: blue;
      
 }




</style>
