<template>
  <q-page class="container-lg  q-my-md" padding>
    <p class="ztitle">Staff posting</p>
      <div class="col-xs-12">
        <q-table
          title="Staff posting"
          v-model:pagination="tableData.pagination"
          :loading="localData.loading"
          @request="onRequest"
          card-class="zcard"
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
          </template>
          <template v-slot:body-cell-current_post="props">
            <q-td :props="props">
              <p class="zlabel">{{props.row.current_post?.code}} : {{props.row.current_post?.name}}</p>
            </q-td>
          </template>
          <template v-slot:body-cell-roles="props">
            <q-td :props="props">
              <q-badge v-for="item in props.row.roles" :key="item.id" :label="item.name"/>
            </q-td>
          </template>

        </q-table>
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
  {name: 'fullname', align: 'left', label: 'Fullname', field: 'full_name', sortable: true},
  {name: 'email', align: 'left', label: 'Email', field: 'email', sortable: true},
  {name: 'roles',align:'left', label: 'Roles', field: 'roles'},

  // { name: 'email', label: 'Email', field: 'email', sortable: true },
  {name: 'current_post',align:'center', label: 'Post', field: 'current_post'},
  // {name: 'status',align:'left', label: 'Status', field: 'current_post', format: val => val.pivot.status},
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
