<template>
  <div class="q-pa-md">
    <q-table
      class="my-sticky-header-table"
      title="Ongoing Applicants"
      :rows="rows"
      :columns="columns"
      row-key="name"
      flat
      bordered
    />
  </div>
</template>

<script>
const columns = [
  {
    name: 'name',
    required: true,
    label: 'Name',
    align: 'left',
    field: row => row.name,
    format: val => `${val}`,
    sortable: true
  },
  { name: 'department', align: 'center', label: 'Department', field: 'department', sortable: true },

  { name: 'calories', align: 'center', label: 'Application Code', field: 'calories', sortable: true },
  { name: 'fat', label: 'Submitted on', field: 'fat', sortable: true },
  { name: 'carbs', label: 'Status', field: 'carbs' },
  { name: 'protein', label: 'Protein (g)', field: 'protein' },
  
]

const rows = [
  {
    name: 'Application for Allotment of Industrial Plot',
    department: 'Aizawl Municipal Corporation',
    calories: 159,
    fat: 6.0,
    carbs: 24,
    protein: 4.0,
    
  },
  {
    name: 'Application for Claiming Interest Subsidy',
    department: 'Commerce and Industries',
    calories: 237,
    fat: 9.0,
    carbs: 37,
    protein: 4.3,
    
  },
  {
    name: 'APPLICATION FOR PERIODIC PATTA (PERIODIC PATTA DILNA)',
    department: 'Aizawl Municipal Corporation',
    calories: 262,
    fat: 16.0,
    carbs: 23,
    protein: 6.0,
    
  },
  
]

export default {
  setup () {
    return {
      columns,
      rows
    }
  }
}
</script>



<style lang="sass">
.my-sticky-header-table
  /* height or max-height is important */
  height: 310px

  .q-table__top,
  .q-table__bottom,
  thead tr:first-child th
    /* bg color is important for th; just specify one */
    background-color: #c1f4cd

  thead tr th
    position: sticky
    z-index: 1
  thead tr:first-child th
    top: 0

  /* this is when the loading indicator appears */
  &.q-table--loading thead tr:last-child th
    /* height of all previous header rows */
    top: 48px
</style>