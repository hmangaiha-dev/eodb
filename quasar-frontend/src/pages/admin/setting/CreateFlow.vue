<template>
  <q-page padding class="container-lg">
    <p class="zsubtitle">Create flow</p>
    <div class="">
      <div class="zdetailcard flex justify-between">
        <q-select
          style="min-width: 250px"
          outlined
          item-aligned
          option-value="code"
          option-label="title"
          dropdown-icon="arrow_drop_down"
          v-model="formData.application"
          :options="application_profiles"
          use-chips
          label="Select Application"
        />
        <q-btn flat @click="localData.openDialog=true" label="Add flow" icon="add"/>
      </div>
      <br/>
        <q-list separator>
          <q-item class="zdetailcard q-mt-sm" v-for="(item,i) in formData.flows" :key="i">
            <q-item-section>
              <q-item-label>STEP: {{ i+1 }} : <span class="text-caption">{{ item?.duration }}</span></q-item-label>
            </q-item-section>
            <q-item-section side>
              <div class="flex flex-inline">
                <q-btn class="q-pa-sm" flat icon="settings"/>
                <q-btn @click="removeFlow(i)" class="q-pa-sm" flat icon="delete"/>
              </div>
            </q-item-section>
          </q-item>
        </q-list>

      <q-btn class="q-mt-md" outline v-if="formData.flows.length>0"  color="primary" label="Save "/>
      </div>
    <q-dialog v-model="localData.openDialog">
      <FlowDialog @save="handleSave" @close="localData.openDialog=false"/>
    </q-dialog>
  </q-page>
</template>
<script>
import {reactive} from "@vue/reactivity";
import FlowDialog from "pages/admin/setting/FlowDialog";
import {computed, ref} from "vue";
import {useStore} from "vuex";

export default {
  components: {FlowDialog},
  setup(props, context) {
    const list = ref([]);
    const store = useStore();
    const formData=reactive({
      application:null,
      flows:[]
    })
    const localData=reactive({
      openDialog:false
    })
    const  handleSave=({staff,duration})=>{
      let temp = formData.flows;
      temp.push({staff, duration});

      formData.flows = temp;
      localData.openDialog = false;
    }
    const removeFlow=index=>{
      const temp = formData.flows.filter((val,i) => i!==index);
      formData.flows=temp
    }
    return{
      removeFlow,
      list,
      formData,
      handleSave,
      localData,
      application_profiles:computed(()=>store.state.staffData.application_profiles)
    }
  }

}
</script>
