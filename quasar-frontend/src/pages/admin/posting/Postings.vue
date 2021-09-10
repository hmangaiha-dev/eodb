<template>
  <q-page class="container" padding>
    <h1 class="ztitle">Staff Postings</h1>
    <q-layout>
      <q-drawer side="right" v-model="localData.openDrawer" @hide="localData.openDrawer=false">
        <q-card class="zcard q-ml-md" bordered>
          <p>detail</p>
        </q-card>
      </q-drawer>
      <q-page-container>
        <q-page>
          <q-table
            class="zcard"
            :rows="[]"
            :columns="columns"
            row-key="id"
            v-model:pagination="tableData.pagination"
            binary-state-sort
          >
            <template v-slot:top-left>
              <q-btn :to="{name:'posting:create'}" size="md" label="New posting" color="primary"/>
            </template>
            <template v-slot:top-right>
              <div class="flex">
                <q-input dense outlined v-model="localData.search" placeholder="Search">
                  <template v-slot:append>
                    <q-icon name="search" />
                  </template>
                </q-input>
                <q-btn  flat icon="sort" @click="localData.openDrawer=!localData.openDrawer"/>
              </div>

            </template>
          </q-table>
        </q-page>
      </q-page-container>
    </q-layout>

  </q-page>
</template>
<script>
import {reactive} from "@vue/reactivity";
const columns = [
  {
    name: 'staff',
    required: true,
    label: 'Staff',
    align: 'left',
    field: row => row.name,
    format: val => `${val}`,
    sortable: true
  },
  { name: 'protein', label: 'Office', field: 'protein', sortable: true },
  { name: 'protein', label: 'Role', field: 'protein', sortable: true },
  { name: 'sodium', label: 'Joining date', field: 'sodium', sortable: true },
  { name: 'calcium', label: 'leaving date', field: 'calcium', sortable: true, sort: (a, b) => parseInt(a, 10) - parseInt(b, 10) },
  { name: 'iron', label: 'Status', field: 'status', sortable: true, sort: (a, b) => parseInt(a, 10) - parseInt(b, 10) }
]
export default {
  setup(props,context){
    const  localData=reactive({
      openDrawer:false,
      search:''
    })

    const tableData=reactive({
      pagination:{
        sortBy: 'desc',
        descending: false,
        page: 1,
        rowsPerPage: 3,
        rowsNumber: 10
      }
    })
    return{
      localData,
      tableData,
      columns
    }
  }
}
</script>
