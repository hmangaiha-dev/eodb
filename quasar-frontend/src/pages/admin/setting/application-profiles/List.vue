<template>
  <q-page class="container-lg" padding>

    <div>
      <div class="row q-col-gutter-md">
        <div class="flex justify-between items-baseline flex-inline col-12">
          <p class="zsubtitle">Application profiles</p>

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
<!--                  <q-toggle :model-value="item.published" left-label @click="publish(item)" label="published?"/>-->
                  <q-btn :to="{name:'print-template:create',params:{id:item.id}}" size="12px" outline icon="printer"/>
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
  </q-page>
</template>
<script>
import {computed, reactive} from "@vue/reactivity";
import Create from "pages/admin/staff/Create";
import {onMounted} from "@vue/runtime-core";
import {api} from "boot/axios";
import {useQuasar} from "quasar";
import Edit from "pages/admin/staff/Edit";

export default {
  components: {Edit, Create},

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


    const deleteProfile = id => {
      api.delete(`application-profiles/${id}`)
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
        deleteProfile(item.id)
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
          // const {current_page, total, per_page, data} = res.data.list;
          // localData.listData.current_page = current_page;
          // localData.listData.data = data;
          // localData.listData.total = total;
          q.notify({type: 'positive', message: res.data?.message})
        })
        .catch(err=>{
          let message = !!err?.response ? err.response?.message : err.toString()
          q.notify({type: 'negative', message})
        })
    }
    const fetchStaff = (page) => {
      api.get(`application-profiles/index?page=${page}`, {params: {search: localData.search}})
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
      deleteProfile,
      localData,
      handleSearch,
      handleEdit,
      publish,
      handleDelete
    }
  }
}

</script>
