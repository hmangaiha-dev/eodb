<template>
  <q-page class="container" padding>
    <h1 class="ztitle">Offices</h1>

    <div class="zcard">

      <div class="row q-col-gutter-md">
        <div class="flex justify-between flex-inline col-12">
          <q-btn :to="{name:'office:create'}" label="New office" color="primary"/>
          <q-input placeholder="Search" v-model="localData.search" outlined dense>
            <template v-slot:append>
              <q-icon name="search" />
            </template>
          </q-input>
        </div>

        <div class="col-12">
          <q-separator/>
        </div>
        <div class="col-12">
          <q-list separator>
            <q-item  v-for="item in localData?.listData?.data" :key="item.id">
              <q-item-section>
                <q-item-label>{{item?.name}}</q-item-label>
                <q-item-label caption>{{item?.description}}</q-item-label>
              </q-item-section>
              <q-item-section  side>
                <div class="flex-inline">
                  <q-btn :to="{name:'role:edit',params:{id:item.id}}" flat icon="edit" color="primary"/>
                  <q-btn @click="deleteRole" flat icon="delete" color="negative"/>
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
  setup(props,context){
    const q = useQuasar();
    const localData=reactive({
      search:'',
      listData:{
        data:[]
      }
    })
    const deleteRole=()=>{
      q.dialog({
        title: 'Confirm',
        message: 'Would you like to delete?',
        cancel: true,
        persistent: true
      }).onOk(() => {
        // console.log('>>>> OK')
      }).onOk(() => {
        // console.log('>>>> second OK catcher')
      }).onCancel(() => {
        // console.log('>>>> Cancel')
      }).onDismiss(() => {
        // console.log('I am triggered on both OK and Cancel')
      })
    }
    onMounted(()=>{
      api.get('office')
        .then(res=>{
          localData.listData=res.data
        })
        .catch(err=>{
          console.log(err)
        })
    })
    return{
      localData,
      deleteRole
    }
  }
}
</script>
