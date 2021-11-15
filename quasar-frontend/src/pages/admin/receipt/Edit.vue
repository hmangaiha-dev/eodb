<template>
  <q-page class="container-lg">
    <h1 class="ztitle">New file</h1>
    <q-form style="max-width: 550px" class="row zdetailcard q-mt-sm q-col-gutter-md">
      <div class="col-xs-12 col-md-3 flex items-center">
        <label for="fileno" class="zlabel">File number</label>
      </div>
      <div class="col-xs-12 col-md-9">
        <q-input  id="fileno"
                  outlined
                  item-aligned
                 dense
                 v-model="formData.receipt_no"
                  :rules="[val=>!!val || 'Receipt no is required']"
        />
      </div>
      <div class="col-xs-12 col-md-3 flex items-center">
        <label for="subject" class="zlabel">Subject</label>
      </div>
      <div class="col-xs-12 col-md-9">
        <q-input  id="subject"
                  outlined
                  item-aligned
                  dense
                  v-model="formData.subject"
                  :rules="[val=>!!val || 'Subject is required']"
        />
      </div>

      <div class="col-xs-12 col-md-3 flex items-center">
        <label for="type" class="zlabel">File type</label>
      </div>
      <div class="col-xs-12 col-md-9">
        <q-select id="type"
                  dropdown-icon="arrow_drop_down"
                  dense
                  item-aligned
                  v-model="formData.type"
                  outlined
                  :options="file_types"
                  :rules="[
                        val=>!!val || 'File type is required'
                      ]"
                  />
      </div>

      <div class="col-xs-12 col-md-3 flex items-center">
        <label for="remark" class="zlabel">Remark</label>
      </div>
      <div class="col-xs-12 col-md-9">
        <q-input  id="remark"
                  outlined
                  item-aligned
                  dense
                  v-model="formData.remark"
        />
      </div>
      <div class="col-xs-12">
        <q-separator/>
      </div>
      <div class="col-xs-12">
        <q-btn type="submit" label="Save" color="primary" flat/>
        <q-btn type="reset" label="Cancel" color="negative" flat/>
      </div>

    </q-form>
  </q-page>
</template>
<script>
import {reactive} from "@vue/reactivity";
import {computed} from "vue";
import {useStore} from "vuex";

export default {
  setup(props,context){
    const store = useStore();
    const formData=reactive({
      file_no:'',
      subject:'',
      type:'',
      remark:'',
    })
    return{

      file_types: computed(() => store.state.staffData.file_types),
      formData
    }
  }
}
</script>
