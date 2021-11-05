<template>
  <div class="row q-col-gutter-md">
    <div class="col-xs-12">
      <h1 class="zsubtitle">Schedule castes</h1>
    </div>

    <div class="flex justify-between flex-inline col-12">
      <q-btn outline @click="localData.openCreate=true" label="Add new" color="primary"/>
      <q-input v-model="localData.search" @keyup="handleSearch" placeholder="Type here" outlined dense>
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
            <q-item-label>{{ item?.label }}</q-item-label>
            <q-item-label caption>{{ item?.value }}</q-item-label>
          </q-item-section>
          <q-item-section side>
            <div class="flex flex-inline q-gutter-sm">
              <q-btn size="12px" @click="handleEdit(item.id)" outline icon="edit"/>
              <q-btn size="12px" @click="deleteData(item.id)" outline icon="delete"/>
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
    <q-dialog @hide="localData.openCreate=false" v-model="localData.openCreate">
      <Create class="zcard" title="New Caste" type="sc" @onCreated="onCreated"/>
    </q-dialog>
    <q-dialog @hide="localData.openEdit=false" v-model="localData.openEdit">
      <Edit v-if="Boolean(selectedId)" :id="selectedId" class="zcard" title="Edit Caste" @onUpdated="onUpdated"/>
    </q-dialog>
  </div>


</template>
<script>
import {computed, reactive} from "@vue/reactivity";
import {onMounted} from "@vue/runtime-core";
import {api} from "boot/axios";
import {useQuasar} from "quasar";
import Create from "pages/admin/master-data/keypairs/Create";
import Edit from "pages/admin/master-data/keypairs/Edit";
import {ref} from "vue";

export default {
  components: {Edit, Create},
  setup(props, context) {
    const q = useQuasar();

    const selectedId = ref(null);
    const localData = reactive({
      openCreate: false,
      openEdit: false,
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
      localData.listData = values;
    }
    const onUpdated = (values) => {
      localData.openEdit = false
      localData.listData = values;
    }

    const deleteConfirmed=(id)=>{
      api.delete(`resources/${id}/destroy`,{params:{type:'sc'}})
        .then(res => {
          localData.listData = res.data.list
          q.notify({type: 'positive', message: res.data?.message})
        })
        .catch(err => {
          let message = !!err?.response ? err.response?.message : err.toString()
          q.notify({type: 'negative', message})
        })
    }
    const deleteData = id => {
      q.dialog({
        title: 'Confirm',
        message: 'Would you like to delete?',
        cancel: true,
        persistent: true
      }).onOk(() => {
        deleteConfirmed(id)
      }).onOk(() => {
      }).onCancel(() => {
        // console.log('>>>> Cancel')
      }).onDismiss(() => {
        // console.log('I am triggered on both OK and Cancel')
      })

    }

    const updatePagination = (value) => {
      fetchData(value)
    }

    const handleEdit=(id)=>{
      selectedId.value = id;
      localData.openEdit = true;
    }

    const handleSearch=(e)=>{
      if (e.keyCode === 13) {
        fetchData(1);
      }
    }
    const fetchData = (page) => {
      api.get(`resources/sc/index?page=${page}`,{params:{search:localData.search}})
        .then(res => {
          console.log(res.data)
          const {current_page, total, per_page, data} = res.data;
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

    onMounted(() => fetchData(localData.listData?.page))
    return {
      updatePagination,
      pageCount: computed(() => Math.ceil(localData.listData.total / localData.listData.per_page)),
      deleteData,
      localData,
      handleEdit,
      selectedId,
      onCreated,
      onUpdated,
      handleSearch
    }
  }
}

</script>
