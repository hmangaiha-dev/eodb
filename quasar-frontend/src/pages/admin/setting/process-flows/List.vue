<template>
  <q-page class="container-lg" padding>
    <p class="zsubtitle">Process flows</p>

    <div>
      <div class="row q-col-gutter-md">
        <div class="flex justify-between flex-inline col-12">
          <q-btn :to="{name:'process-flows:create'}" outline label="New process flow" color="primary"/>
          <q-input v-model="localData.search" placeholder="Search" @keyup="handleSearch" outlined dense>
            <template v-slot:append>
              <q-icon name="search"/>
            </template>
          </q-input>
        </div>

        <div class="col-12">
          <q-separator/>
        </div>
        <div class="col-12">
          <q-list separator>
            <q-item v-for="item in localData.listData.data" :key="item.id">
              <q-item-section>
                <q-item-label>{{item.title }} </q-item-label>
                <q-item-label caption>{{item.code}} </q-item-label>
              </q-item-section>
              <q-item-section side>
                <div class="flex flex-inline q-gutter-sm">
<!--                  <q-toggle v-model="item.published" left-label @click="publish(item)" label="published?"/>-->
                  <q-btn @click="viewDetail(item)" size="12px" outline icon="preview"/>
                  <q-btn @click="handleDelete(item)" size="12px" outline icon="delete"/>

                </div>
              </q-item-section>
            </q-item>
          </q-list>
        </div>
        <div class="col-12">
          <q-pagination
            @update:model-value="updatePagination"
            v-model="localData.listData.current_page"
            :max="pageCount"
            input
          />
        </div>
      </div>

      <q-dialog v-model="localData.openFlow">
        <Detail :application_name="localData.selectedFlow?.title"
                :flows="localData.selectedFlow?.process_flows"
        />
      </q-dialog>

    </div>
  </q-page>
</template>
<script>
import {computed, reactive} from "@vue/reactivity";
import Create from "pages/admin/staff/Create";
import {onMounted} from "@vue/runtime-core";
import {api} from "boot/axios";
import {useQuasar} from "quasar";
import Edit from "pages/admin/staff/Edit";
import Detail from "pages/admin/setting/process-flows/Detail";

export default {
  components: {Detail, Edit, Create},

  setup(props, context) {
    const q = useQuasar();
    const localData = reactive({
      openCreate: false,
      openEdit: false,
      selectedStaff: null,
      search: '',
      listData: {
        per_page: 15,
        data: [],
        current_page: 1,
        total: 1
      },
      openFlow:false,
      selectedFlow:{}
    })


    const deleteFlow = id => {
      api.delete(`application-profiles/process-flows/${id}`)
        .then(res => {
          localData.listData = res.data.list
          q.notify({type: 'positive', message: res.data?.message})
        })
        .catch(err => {
          q.notify({type: 'negative', message: err?.response?.data?.message})
        })
    }

    const handleEdit = (item) => {
      localData.selectedStaff = item;
      localData.openEdit = true;
    }
    const handleDelete = (item) => {
      q.dialog({
        title: 'Confirm',
        message: 'Would you like to delete?',
        cancel: true,
        persistent: true
      }).onOk(() => {
        deleteFlow(item.id)
      }).onCancel(() => {
        // console.log('>>>> Cancel')
      }).onDismiss(() => {
        // console.log('I am triggered on both OK and Cancel')
      })
    }

    const handleSearch = e => {
      localData.search = e.target.value;
      if (e.keyCode === 13)
        fetchStaff(1);
    }
    const updatePagination = (value) => {
      fetchStaff(value)
    }

    const publish=item=>{
      api.put(`application-profiles/${item.id}/toggle`)
      .then(res=>{
        const {current_page, total, per_page, data} = res.data.list;
        localData.listData.current_page = current_page;
        localData.listData.data = data;
        localData.listData.total = total;
        q.notify({type: 'positive', message: res.data?.message})
      })
      .catch(err=>{
        let message = !!err?.response ? err.response?.message : err.toString()
        q.notify({type: 'negative', message})
      })
    }
    const viewDetail=(flow)=>{
      console.log(flow)
      localData.openFlow = true;
      localData.selectedFlow = flow;
    }
    const fetchStaff = (page) => {
      api.get(`application-profiles/flows?page=${page}`, {params: {search: localData.search}})
        .then(res => {
          const {current_page, total, per_page, data} = res.data.list;
          localData.listData.current_page = current_page;
          localData.listData.data = data;
          localData.listData.total = total;
          localData.listData.per_page = per_page;
        })
        .catch(err => {
          let message = !!err?.response ? err.response?.message : err.toString()
          q.notify({type: 'negative', message})
        })
    }
    onMounted(() => fetchStaff(localData.listData.page))
    return {
      updatePagination,
      pageCount: computed(() => Math.ceil(localData.listData.total / localData.listData.per_page)),
      deleteFlow,
      localData,
      handleSearch,
      handleEdit,
      publish,
      handleDelete,
      viewDetail
    }
  }
}

</script>
