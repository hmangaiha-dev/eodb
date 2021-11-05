<template>
  <q-page class="container-lg" padding>
    <h1 class="ztitle">Offices</h1>

    <div class="zcard">

      <div class="row q-col-gutter-md">
        <div class="flex justify-between flex-inline col-12">
          <q-btn :to="{name:'office:create'}" outline label="New office" color="primary"/>
          <q-input placeholder="Search" v-model="localData.search" outlined dense>
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
            <q-item v-for="(item,i) in localData?.listData?.data" :key="i">
              <q-item-section>
                <q-item-label>{{ item?.name }}</q-item-label>
                <q-item-label caption>{{ item?.description }}</q-item-label>
              </q-item-section>
              <q-item-section side>
                <div class="flex flex-inline q-gutter-sm">
                  <q-btn size="12px" :to="{name:'office:edit',params:{id:item.id}}" outline icon="edit"/>
                  <q-btn size="12px" @click="confirmDelete(item.id)" outline icon="delete"/>
                </div>
              </q-item-section>
            </q-item>
          </q-list>
        </div>
      </div>

    </div>

  </q-page>
</template>
<script>
import {reactive} from "@vue/reactivity";
import {onMounted} from "@vue/runtime-core";
import {api} from "boot/axios";
import {useQuasar} from "quasar";

export default {
  setup(props, context) {
    const q = useQuasar();
    const localData = reactive({
      search: '',
      listData: {
        data: []
      }
    })

    const deleteRole = (id) => {
      api.delete(`office/${id}`)
        .then(res => {
          localData.listData = res.data
          q.notify({
            type: 'positive',
            message: res.data.message
          })
        })
        .catch(err => {
          console.log("dfadf ",err.response)
           q.notify({
            type: 'negative',
            message: err.response?.data?.message
          })
        })
    }
    const confirmDelete = (id) => {
      q.dialog({
        title: 'Confirm',
        message: 'Would you like to delete?',
        cancel: true,
        persistent: true
      }).onOk(() => {
      }).onOk(() => {
        deleteRole(id)
      }).onCancel(() => {
        // console.log('>>>> Cancel')
      }).onDismiss(() => {
        // console.log('I am triggered on both OK and Cancel')
      })
    }
    onMounted(() => {
      api.get('office')
        .then(res => {
          localData.listData = res.data
        })
        .catch(err => {
          err.hasOwnProperty("response") &&q.notify({
            type: 'negative',
            message: err.response?.data?.message
          })
        })
    })
    return {
      localData,
      confirmDelete
    }
  }
}
</script>
