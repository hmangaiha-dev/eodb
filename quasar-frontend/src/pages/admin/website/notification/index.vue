<template>
  <q-page class="container-lg zcard q-my-md" padding>
    <p class="ztitle">Notifications</p>

    <div class="row q-col-gutter-md">
      <div class="flex justify-between flex-inline col-12">
        <q-input v-model="search" placeholder="Search" @keyup="handleSearch" outlined dense>
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
          <q-item  v-for="item in listData" :key="item.id">
            <q-item-section>
              <q-item-label>{{item?.service_name}}</q-item-label>
              <q-item-label caption>{{item?.description}}</q-item-label>
            </q-item-section>
            <q-item-section  side>
              <div class="flex flex-inline q-gutter-sm">
                <!--                  <q-btn size="12px" :to="{name:'role:edit',params:{id:item.id}}" outline icon="edit" />-->
                <q-btn size="12px" @click="deleteItem(item)" outline icon="delete"/>
              </div>
            </q-item-section>
          </q-item>
        </q-list>
      </div>
    </div>


  </q-page>
</template>
<script>
import {reactive} from "@vue/reactivity";
import {useQuasar} from "quasar";
import {onMounted} from "@vue/runtime-core";
import {api} from "boot/axios";
import {ref} from "vue";

export default {
  setup(props,context){
    const q = useQuasar();
    const listData=ref([])
    const search=ref('')
    const deleteItem=()=>{
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
    const handleSearch=(e)=>{
      if (e.keyCode === 13) {
        fetchData();
      }
    }
    const fetchData=()=>{
      api.get('web/online-services',{params:{search}})
        .then(res=>{
          const {list} = res.data;
          listData.value = list;
        })
        .catch(err=>{
          err?.response?.data?.message && q.notify({
            type: 'negative',
            message: err.response?.data?.message
          })
        })
    }
    onMounted(()=>{
      fetchData();
    })
    return{
      search,
      listData,
      deleteItem,
      handleSearch
    }
  }
}

</script>
