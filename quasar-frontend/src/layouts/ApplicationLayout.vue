<template>
  <q-page class="row q-col-gutter-md q-ma-none container-lg">
    <div class="print-hide col-sm-3 bg-grey-1 print-hide">
      <List :notes="localData.notes"/>
    </div>
    <div class=" col-sm-9 column q-gutter-md">

      <div class="zcard print-hide q-mt-sm rounded-borders q-pa-md flex justify-between">
        <q-btn @click="closeFile"  color="negative" label="Close"/>
        <div class="flex flex-inline q-gutter-sm">
          <q-btn :disable="localData.current_step<=0" @click="handleBack" outline color="negative" label="Send back"/>
          <q-btn @click="handleForward" outline color="primary" label="Forward"/>
        </div>
      </div>

      <div class="zcard bg-grey-1 q-py-md row">
        <div class="col-9 print-hide">
          <div class="zlabel">Application : <span class="zvalue">{{ localData.application_code }}</span></div>
          <div class="zlabel">Regn No : <span class="zvalue">{{ localData?.regn_no }}</span></div>
          <div class="zlabel">Submitted At : <span class="zvalue">{{ localData?.createdAt }}</span></div>
        </div>
        <div class="col-3 flex justify-end print-hide">
          <q-btn @click="localData.openHistory=!localData.openHistory;fetchMovements()" no-caps outline flat
                 label="Movement History"/>
          <q-btn :to="{name:'application:detail'}" no-caps color="primary" flat label="View Application"/>
        </div>
<!--        <div class="col-12 zdetailcard">-->
<!--            <states :states="localData.states">-->
<!--              <template v-slot:header>-->
<!--                <p class="zsubtitle">Application statuses</p>-->
<!--                <q-btn @click="localData.createStatus=true" outline label="Create new status"/>-->
<!--              </template>-->
<!--            </states>-->
<!--        </div>-->
        <div class="col-12 zdetailcard  q-my-md print-hide">
          <certificates :id="$route.params.id"/>
        </div>
        <div class="col-12 zdetailcard q-my-md">
          <router-view @notes="val=>localData.notes=val"/>
        </div>

      </div>
    </div>
    <q-btn :to="{name:'note:create',params:{id:$route.params.id}}" fab icon="edit" color="primary"
           class="absolute-bottom-right q-mr-xl q-mb-xl print-hide"/>

    <!--    <q-dialog position="bottom" v-model="localData.openHistory">-->
    <!--      <q-card style="max-width: 750px;width: 700px">hello world</q-card>-->
    <!--    </q-dialog>-->
    <q-drawer v-model="localData.openHistory" side="right" behavior="mobile">
      <movement :movements="localData.movements"/>
    </q-drawer>

    <q-dialog v-model="localData.createStatus">
      <create-state @exposeList="list=>localData.states=list"/>
    </q-dialog>

  </q-page>

</template>

<script>
import {onMounted, ref} from 'vue'
import List from "pages/admin/application/detail/notes/List";
import {api} from "boot/axios";
import {useRoute, useRouter} from "vue-router";
import {reactive} from "@vue/reactivity";
import {date, useQuasar} from "quasar";
import Movement from "pages/admin/application/detail/Movement";
import States from "pages/common/state/List";
import CreateState from "pages/common/state/Create";
import Certificates from "pages/admin/application/certificate/List";

export default {
  components: {Certificates, CreateState, States, Movement, List},
  setup() {
    const leftDrawerOpen = ref(true)
    const route = useRoute();
    const router = useRouter();
    const q = useQuasar();
    const localData = reactive({
      createStatus: false,
      notes: [],
      states: [],
      openHistory: false,
      movements: [],
    })

    const fetchMovements = () => {
      const id = route.params.id;
      api.get(`applications/${id}/movements`)
        .then(res => {
          localData.movements = res.data;
        })
    }
    const fetchStates = () => {
      const id = route.params.id;
      api.get(`applications/${id}/states`)
        .then(res => {
          localData.states = res.data;
          console.log(res)
        })
    }
    const fetchApplication = id => {
      api.get(`applications/${id}`)
        .then(res => {
          const {data, action} = res.data;
          const {regn_no, application_code, current_step, last_step, id,created_at, profile} = data;
          localData.id = id;
          localData.current_step = current_step;
          localData.last_step = last_step;
          localData.regn_no = regn_no;
          localData.application_code = application_code;
          localData.profile = profile;
          localData.createdAt = date.formatDate(new Date(created_at),'DD-MM-YYYY hh:mm a');
        })
        .catch(err => {
          let message = err.response?.message || err.toString()
          q.notify({type: 'negative', message})
        })
    }
    const fetchNotes = (id) => {
      api.get(`applications/${id}/notes`)
        .then(res => [
          localData.notes = res.data.list
        ])
        .catch(err => {
          let message = err.response?.message || err.toString()
          q.notify({type: 'negative', message})
        })
    }
    onMounted(() => {
      const id = route.params.id;
      fetchNotes(id);
      fetchApplication(id)
      fetchStates(id);
    })

    const handleForward = () => {
      const id = route.params.id;
      api.post(`applications/${id}/forward`)
        .then(res => {
          const {message, list, data} = res.data;
          q.notify({type: 'positive', message})
          router.replace({name: 'staff:dashboard'})
        })
        .catch(err => {
          let message = err.response?.message || err.toString()
          q.notify({type: 'negative', message})
        })
    }

    const handleAdd = () => {
      localData.createStatus = true;
    }
    const closeFile = () => {
      const {id} = route.params;
      api.post(`applications/${id}/close`)
        .then(res => {
          q.notify({type: 'positive', message: res.data.message})
          setTimeout(() => {
            router.replace({name: 'staff:dashboard'});
          }, 1000)
        })
        .catch(err => {
          q.notify({type: 'negative', message: err.response?.message || err.toString()})
        });
    }
    const handleBack=()=>{
      const id = route.params.id;
      api.post(`applications/${id}/backward`)
        .then(res => {
          const {message, list, data} = res.data;
          q.notify({type: 'positive', message})
          router.replace({name: 'staff:dashboard'})
        })
        .catch(err => {
          let message = err.response?.message || err.toString()
          q.notify({type: 'negative', message})
        })
    }

    return {
      fetchMovements,
      handleBack,
      leftDrawerOpen,
      localData,
      handleAdd,
      handleForward,
      closeFile,
      toggleLeftDrawer() {
        leftDrawerOpen.value = !leftDrawerOpen.value
      }
    }
  }
}
</script>
