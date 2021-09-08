<template>
  <q-page class="container" padding>
    <h1 class="ztitle">Staffs</h1>

    <div class="zcard">
      <div class="row q-col-gutter-md">
        <div class="flex justify-between flex-inline col-12">
          <q-btn :to="{name:'staff:create'}" label="New staff" color="primary"/>
          <q-input v-model="localData.search" placeholder="Type here"  outlined dense>
            <template v-slot:append>
              <q-icon name="search"/>
            </template>
          </q-input>
        </div>

        <div class="col-12">
          <q-separator/>
        </div>
        <div class="col-12">
          <q-list  v-for="item in localData.listData.data" :key="item.id" :separator="true">
            <q-item>
              <q-item-section>
                <q-item-label>{{item.full_name}}</q-item-label>
                <q-item-label caption>{{item?.email}}</q-item-label>
              </q-item-section>
              <q-item-section side>
                <div class="flex-inline">
                  <q-btn size="md" class="q-pa-sm" flat icon="edit" color="primary"/>
                  <q-btn size="md" class="q-pa-sm" @click="deleteStaff(item.id)" flat icon="delete" color="negative"/>
                </div>
              </q-item-section>
            </q-item>
          </q-list>
        </div>
        <div class="col-12">
          <q-pagination
            v-model="test"
            :max="5"
            direction-links
          />
        </div>
      </div>

    </div>
    <q-dialog @hide="localData.openCreate=false" v-model="localData.openCreate">
      <Create @onStaffCreated="onStaffCreated"/>
    </q-dialog>
  </q-page>
</template>
<script>
import {reactive} from "@vue/reactivity";
import Create from "pages/admin/staff/Create";
import {onMounted} from "@vue/runtime-core";
import {api} from "boot/axios";
import {useQuasar} from "quasar";

export default {
  components: {Create},

  setup(props,context){
    const q = useQuasar();
    const localData=reactive({
      openCreate:false,
      search:'',
      listData:{
        data:[]
      }
    })

    const onStaffCreated=(values)=>{
      localData.openCreate=false
    }

    const deleteStaff=id=>{
      api.delete(`staff/${id}`)
        .then(res=>{
          localData.listData=res.data.list
          q.notify({type:'positive',message:res.data?.message})
        })
        .catch(err=>{
          let message=!!err?.response?err.response?.message:err.toString()
          q.notify({type:'negative',message})
        })
    }

    onMounted(()=> {
      api.get('staff')
        .then(res=>{
          localData.listData=res.data.data
        })
        .catch(err=>{
          let message=!!err?.response?err.response?.message:err.toString()
          q.notify({type:'negative',message})
        })
    })
    return{
      deleteStaff,
      localData,
      onStaffCreated,
      test:1
    }
  }
}

</script>
