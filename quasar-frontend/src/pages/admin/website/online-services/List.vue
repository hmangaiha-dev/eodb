<template>
  <q-page class="container-lg q-my-md" padding>

    <div class="zcard">
      <p class="ztitle">Online Services</p>
      <div class="row q-col-gutter-md">
        <div class="flex justify-between flex-inline col-12">
          <q-btn :to="{name:'online-service:create'}" outline label="New Service" color="primary"/>
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
              <q-item-section avatar>
                <q-avatar class="cursor-pointer" @click="handleDownload(item)" icon="attachment"/>
              </q-item-section>
              <q-item-section>
                <q-item-label>{{ item?.service_name }}</q-item-label>
                <q-item-label caption>{{ item?.description }}</q-item-label>
              </q-item-section>
              <q-item-section side>
                <div class="flex flex-inline q-gutter-sm">
                  <q-btn :to="{name:'online-service:edit',params:{id:item.id}}" size="12px" outline icon="edit"/>
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

    </div>
    <q-dialog @hide="localData.openCreate=false" v-model="localData.openCreate">
      <notification-create @onCreated="onCreated"/>
    </q-dialog>
    <!--    <q-dialog @hide="localData.openEdit=false" v-model="localData.openEdit">-->
    <!--      <Edit v-if="!!localData.selectedStaff" @onStaffUpdated="onStaffUpdated" :id="localData.selectedStaff?.id"/>-->
    <!--    </q-dialog>-->
  </q-page>
</template>
<script>
import {computed, reactive} from "@vue/reactivity";
import Create from "pages/admin/staff/Create";
import {onMounted} from "@vue/runtime-core";
import {api} from "boot/axios";
import {useQuasar} from "quasar";
import Edit from "pages/admin/staff/Edit";
import NotificationCreate from "pages/admin/website/notification/Create";

export default {
  components: {NotificationCreate, Edit, Create},

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
      }
    })
    const onCreated = (values) => {
      localData.openCreate = false
      const {current_page, total, per_page, data} = values;
      localData.listData.current_page = current_page;
      localData.listData.data = data;
      localData.listData.total = total;
      localData.listData.per_page = per_page;
    }

    const deleteService = id => {
      api.delete(`web/online-services/${id}`)
        .then(res => {
          const {current_page, total, per_page, data} = res.data.list;
          localData.listData.current_page = current_page;
          localData.listData.data = data;
          localData.listData.total = total;
          localData.listData.per_page = per_page;
          q.notify({type: 'positive', message: res.data?.message})
        })
        .catch(err => {
          q.notify({type: 'negative', message: err?.response?.data?.message||err.toString()})
        })
    }

    const handleDownload = (item) => {
      api.get(`web/notification/${item.id}/download`)
        .then(res => {
          const {data} = res.data;
          let a = document.createElement('a');
          a.href = data?.full_path;
          a.target = '_blank';
          a.click();
        })
    }
    const handleDelete = (item) => {
      q.dialog({
        title: 'Confirm',
        message: 'Would you like to delete?',
        cancel: true,
        persistent: true
      }).onOk(() => {
        deleteService(item.id)
      }).onCancel(() => {
        // console.log('>>>> Cancel')
      }).onDismiss(() => {
        // console.log('I am triggered on both OK and Cancel')
      })
    }

    const handleSearch = e => {
      localData.search = e.target.value;
      if (e.keyCode === 13)
        fetchServices(1);
    }
    const updatePagination = (value) => {
      fetchServices(value)
    }

    const fetchServices = (page) => {
      api.get(`web/online-services?page=${page}`, {params: {search: localData.search}})
        .then(res => {
          const {current_page, total, per_page, data} = res.data.list;
          localData.listData.current_page = current_page;
          localData.listData.data = data;
          localData.listData.total = total;
          localData.listData.per_page = per_page;
        })
        .catch(err => {
          let message = err.response?.data?.message || err.toString();
          q.notify({type: 'negative', message});
        })
    }
    onMounted(() => fetchServices(localData.listData.page))
    return {
      updatePagination,
      pageCount: computed(() => Math.ceil(localData.listData.total / localData.listData.per_page)),
      localData,
      onCreated,
      deleteService,
      handleSearch,
      handleDownload,
      handleDelete
    }
  }
}

</script>
