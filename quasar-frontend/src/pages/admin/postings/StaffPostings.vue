<template>
  <q-page class="container-lg" padding>
    <h1 class="ztitle">Staff postings</h1>
    <div class="row zdetailcard">
      <div class="col-xs-12">
        <q-table
          v-model:pagination="tableData.pagination"
          :loading="localData.loading"
          @request="onRequest"
          flat
          :rows="tableData.data"
          :columns="columns"
          row-key="fullname"
          binary-state-sort
          :rows-per-page-options="[7,15,30,50]"
        >
          <template v-slot:top>
            <q-btn :to="{name:'posting:create'}" outline color="primary" label="New Posting"/>
            <q-space/>

            <q-input outlined
                     dense
                     v-model="localData.search"
                     @change="handleSearch"
                     placeholder="Search"
            >
              <template v-slot:append>
                <q-icon name="search"/>
              </template>
            </q-input>

            <!--                <q-select-->
            <!--                  multiple-->
            <!--                  outlined-->
            <!--                  dense-->
            <!--                  options-dense-->
            <!--                  emit-value-->
            <!--                  map-options-->
            <!--                  :options="columns"-->
            <!--                  option-value="name"-->
            <!--                  options-cover-->
            <!--                  style="min-width: 150px"-->
            <!--                />-->
          </template>

        </q-table>
      </div>
    </div>
  </q-page>
</template>
<script>
import {ref} from 'vue'
import {onMounted} from "@vue/runtime-core";
import {api} from "boot/axios";
import {reactive} from "@vue/reactivity";
import {useQuasar} from "quasar";


const columns = [
  // {
  //   name: 'staff',
  //   required: true,
  //   label: 'Staff',
  //   align: 'left',
  //   field: row => row.staff,
  //   format: val => `${val}`,
  //   sortable: true
  // },
  {name: 'fullname', align: 'left', label: 'Fullname', field: 'full_name', sortable: true},
  {name: 'email', align: 'left', label: 'Email', field: 'email', sortable: true},
  {name: 'rolesName',align:'left', label: 'Role', field: 'rolesName', format: val => val?.toString()},

  // { name: 'email', label: 'Email', field: 'email', sortable: true },
  {name: 'currentPost',align:'left', label: 'Post', field: 'currentPost', format: val => val?.name},
  {name: 'status',align:'left', label: 'Status', field: 'currentPost', format: val => val?.pivot?.status},
]

export default {
  setup() {
    const q = useQuasar();
    const localData = reactive({
      loading: false,
      search: ''
    })
    const tableData = reactive({
      data: [],
      pagination: {
        sortBy: 'id',
        descending: false,
        page: 1,
        rowsPerPage: 5,
        rowsNumber: 0
      }
    })

    const handleSearch = value => {
      onRequest(tableData)
    }
    const onRequest = prop => {
      const {page, rowsPerPage, sortBy, descending} = prop.pagination
      localData.loading = true;
      api.get('posting/index', {
        params: {
          page, rowsPerPage, sortBy, descending, search: localData.search
        }
      }).then(res => {
          const {current_page, per_page, data, to, total} = res.data.data
          tableData.data = data;
          tableData.pagination.rowsNumber = total;
          tableData.pagination.page = current_page;
          tableData.pagination.rowsPerPage = per_page;
          console.log(res.data)
        })
        .catch(err => {
          err?.response?.data?.message &&  q.notify({
            type: 'negative',
            message: err.response?.data?.message
          })
        })
        .finally(() => localData.loading = false)
    }

    onMounted(() => {
      // get initial data from server (1st page)
      onRequest({
        pagination: tableData.pagination,
        filter: undefined
      })
    })
    return {
      onRequest,
      visibleColumns: ref(['staff', 'office', 'designation', 'role', 'joined_at', 'status']),
      columns,
      tableData,
      localData,
      handleSearch
    }
  }
}
</script>
