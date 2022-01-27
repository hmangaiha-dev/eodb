<template>
  <q-page class="container-lg zcard q-my-md" padding>
    <h1 class="ztitle">Ongoing Applications</h1>
    <div class="row ">
      <div class="col-xs-12">
        <q-table
          v-model:pagination="tableData.pagination"
          :loading="localData.loading"
          @request="onRequest"
          flat
          card-class="zdetailcard"
          :rows="tableData.data"
          :columns="columns"
          row-key="fullname"
          binary-state-sort
          :rows-per-page-options="[7,15,30,50]"
        >
          <template v-slot:top>
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
          <template v-slot:body-cell-action="props">
            <q-td :props="props">
              <q-btn-dropdown rounded  dropdown-icon="arrow_drop_down" no-caps label="Action" outline color="primary">
                <q-list separator>
                  <q-item @click="e=>viewApplication(props.row.id)"  clickable>
                    <q-item-section>
                      <q-item-label>View Application</q-item-label>
                    </q-item-section>
                  </q-item>

                  <q-item @click="e=>movementHistory(props.row.id)" clickable>
                    <q-item-section>
                      <q-item-label>Movement History </q-item-label>
                    </q-item-section>
                  </q-item>

                  <!--    <q-item :to="{name:'order-history:dashboard'}"  v-show="isAuthenticated"  clickable>-->
                  <!--      <q-item-label></q-item-label>-->
                  <!--    </q-item>-->
                  <!--    <q-item :to="{name:'order-history:dashboard'}"  v-show="isAuthenticated"  clickable>-->
                  <!--      <q-item-label>Order History</q-item-label>-->
                  <!--    </q-item>-->
                </q-list>
              </q-btn-dropdown>
            </q-td>
          </template>
<!--          <template v-slot:body-cell-roles="props">-->
<!--            <q-td :props="props">-->
<!--              <q-badge v-for="item in props.row.roles" :key="item.id" :label="item.name"/>-->
<!--            </q-td>-->
<!--          </template>-->

        </q-table>
      </div>
    </div>
    <q-dialog v-model="localData.openMovementHistory">
      <q-card>
        <q-card-section>
          <movement :movements="localData.movements"/>
        </q-card-section>
        <q-card-actions>
          <q-btn outline color="negative" label="Close" @click="localData.openMovementHistory=false"/>
        </q-card-actions>
      </q-card>
    </q-dialog>
  </q-page>
</template>
<script>
import {ref} from 'vue'
import {onMounted} from "@vue/runtime-core";
import {api} from "boot/axios";
import {reactive} from "@vue/reactivity";
import {date, useQuasar} from "quasar";
import {useRoute, useRouter} from "vue-router";
import Movement from "pages/admin/application/detail/Movement";


const columns = [
  {name: 'application_name', align: 'left', label: 'Application', field: 'application_name', sortable: true},
  {name: 'regn_no', align: 'left', label: 'Registration No', field: 'regn_no', sortable: true},
  {name: 'created_at',align:'left', label: 'Submitted At', field: 'created_at',format:val=>date.formatDate(val,'DD-MMYYYY hh:mm a')},
  // { name: 'email', label: 'Email', field: 'email', sortable: true },
  {name: 'action',align:'center', label: 'Action', field: 'id'},
  // {name: 'status',align:'left', label: 'Status', field: 'current_post', format: val => val.pivot.status},
]

export default {
  components: {Movement},
  setup() {
    const q = useQuasar();
    const router = useRouter();
    const route = useRoute();
    const localData = reactive({
      loading: false,
      openMovementHistory:false,
      movements: [],
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
      api.get('office/applications/ongoing', {
        params: {
          page, rowsPerPage, sortBy, descending, search: localData.search
        }
      }).then(res => {
        const {current_page, per_page, data, to, total} = res.data
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
    const viewApplication=(id)=>{
      router.push({name:'ongoing-applications:detail',params:{id}})
    }
    const movementHistory=(id)=>{
      console.info(id)
      api.get(`applications/${id}/movements`)
      .then(res=>{
        localData.movements = res.data;
        localData.openMovementHistory = !localData.openMovementHistory;
      })
      .catch(err=>{
        q.notify({
          type:'negative',
          message:err?.response?.message || err.toString()
        })
      })
    }
    return {
      onRequest,
      columns,
      tableData,
      localData,
      handleSearch,
      viewApplication,
      movementHistory
    }
  }
}
</script>
