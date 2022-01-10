<template>
  <q-page class="row q-col-gutter-md q-ma-none container-lg">
      <div class="col-md-3 bg-grey-1">
        <List :notes="localData.notes"/>
      </div>
      <div class="col-md-9 column q-gutter-md">
        <div class="zcard bg-grey-1 q-pt-lg row">
          <div class="col-9">
            <div class="zlabel">Application : <span class="zvalue">{{ localData?.profile?.title }}</span></div>
            <div class="zlabel">Regn No : <span class="zvalue">{{ localData?.regn_no }}</span></div>
          </div>
          <div class="col-3 flex justify-end">
            <q-btn @click="localData.openHistory=!localData.openHistory;fetchMovements()" no-caps outline flat label="Movement history"/>
            <q-btn :to="{name:'application:detail'}" no-caps color="primary" flat label="View more"/>
          </div>
        </div>
        <div class="zcard q-mt-sm rounded-borders q-pa-md flex justify-between">
          <q-btn outline color="negative" label="Send back"/>
          <q-btn @click="handleForward" outline color="primary" label="Forward"/>
        </div>
        <router-view  @notes="val=>localData.notes=val"/>

      </div>
      <q-btn :to="{name:'note:create',params:{id:$route.params.id}}" fab icon="edit" color="primary"
             class="absolute-bottom-right q-mr-xl q-mb-xl"/>

<!--    <q-dialog position="bottom" v-model="localData.openHistory">-->
<!--      <q-card style="max-width: 750px;width: 700px">hello world</q-card>-->
<!--    </q-dialog>-->
    <q-drawer v-model="localData.openHistory" side="right" behavior="mobile">
      <movement :movements="localData.movements"/>
    </q-drawer>

  </q-page>

</template>

<script>
import {onMounted, ref} from 'vue'
import List from "pages/admin/application/detail/notes/List";
import {api} from "boot/axios";
import {useRoute, useRouter} from "vue-router";
import {reactive} from "@vue/reactivity";
import {useQuasar} from "quasar";
import Movement from "pages/admin/application/detail/Movement";

export default {
  components: {Movement, List},
  setup() {
    const leftDrawerOpen = ref(true)
    const route = useRoute();
    const router = useRouter();
    const q = useQuasar();
    const localData = reactive({
      notes: [],
      openHistory:false,
      movements:[]
    })

    const fetchMovements=()=>{
      const id = route.params.id;
      api.get(`applications/${id}/movements`)
      .then(res=>{
        localData.movements = res.data;
      })
    }
    const fetchApplication = id => {
      api.get(`applications/${id}`)
        .then(res => {
          const {regn_no, application_code,current_step,last_step, id, profile} = res.data;
          localData.id = id;
          localData.current_step = current_step;
          localData.last_step = last_step;
          localData.regn_no = regn_no;
          localData.application_code = application_code;
          localData.profile = profile;
        })
        .catch(err => {
          let message = !!err?.response ? err.response?.message : err.toString()
          q.notify({type: 'negative', message})
        })
    }
    onMounted(() => {
      const id = route.params.id;
      api.get(`applications/${id}/notes`)
        .then(res => [
          localData.notes = res.data.list
        ])
        .catch(err => {
          let message = !!err?.response ? err.response?.message : err.toString()
          q.notify({type: 'negative', message})
        })
      fetchApplication(id)
    })

    const handleForward = () => {
      const id = route.params.id;
      api.post(`applications/${id}/forward`)
        .then(res => {
          const {message, list, data} = res.data;
          q.notify({type: 'positive', message})
          router.replace({name:'staff:dashboard'})
        })
        .catch(err => {
          let message = !!err?.response ? err.response?.message : err.toString()
          q.notify({type: 'negative', message})
        })
    }
    return {
      fetchMovements,
      leftDrawerOpen,
      localData,
      handleForward,
      toggleLeftDrawer() {
        leftDrawerOpen.value = !leftDrawerOpen.value
      }
    }
  }
}
</script>
