<template>
  <q-page padding class="container-lg">
    <h1 class="ztitle">New Application</h1>
    <p class="text-caption">Register your offline application to become an online</p>
    <q-form  style="max-width: 750px" class="row zdetailcard q-mt-sm q-col-gutter-md">

      <div class="col-xs-12 col-md-3 flex items-center">
        <label for="application_id" class="zlabel">Application ID</label>
      </div>
      <div class="col-xs-12 col-md-9">
        <q-input  id="application_id"
                  outlined
                  item-aligned
                  dense
                  v-model="formData.application_id"
                  :rules="[val=>!!val || 'Application no is required']"
        />
      </div>

      <div class="col-xs-12 col-md-3 flex items-center">
        <label for="title" class="zlabel">Title</label>
      </div>
      <div class="col-xs-12 col-md-9">
        <q-input  id="title"
                  outlined
                  item-aligned
                  dense
                  v-model="formData.title"
                  :rules="[val=>!!val || 'Title is required']"
        />
      </div>


      <div class="col-xs-12 col-md-3 flex items-center">
        <label for="date" class="zlabel">Date</label>
      </div>
      <div class="col-xs-12 col-md-9">
        <q-input  id="date"
                  outlined
                  type="date"
                  item-aligned
                  dense
                  v-model="formData.voucher_date"
                  :rules="[val=>!!val || 'Title is required']"
        />
      </div>

      <div class="col-xs-12">
        <p class="zsubtitle">Application details</p>
      </div>
      <q-form @submit="addRow" class="col-xs-12">
        <q-markup-table flat class="zdetailcard">
          <thead>
          <q-tr>
            <q-th>Key</q-th>
            <q-th>Value</q-th>
            <q-th class="text-center">Action</q-th>
          </q-tr>
          </thead>
          <tbody>

          <q-tr v-for="(item,i) in rowData.list" :key="i">
            <q-td class="zlabel">{{item.key}}</q-td>
            <q-td class="zvalue">{{item.value}}</q-td>
            <q-td class="zvalue"><q-btn flat rounded icon="highlight_off" color="negative" @click="removeDetailRow(i)" /> </q-td>
          </q-tr>
          <q-tr>
            <q-td>
              <q-input  outlined
                        item-aligned
                        dense
                        placeholder="Key (Father's name) "
                        v-model="rowData.key"
                        :rules="[val=>!!val || 'Key is required']"
              />
            </q-td>
            <q-td>
              <q-input  outlined
                        item-aligned
                        dense
                        placeholder="Value eg(Lallunghnema)"
                        v-model="rowData.value"
                        :rules="[val=>!!val || 'Value is required']"
              />
            </q-td>
            <q-td>
              <q-btn type="submit" size="sm" color="primary" rounded  icon="add"/>
            </q-td>
          </q-tr>
          </tbody>
        </q-markup-table>
      </q-form>
      <div class="col-xs-12">
        <p class="zsubtitle">Attachments</p>
      </div>
      <div @submit="addRow" class="col-xs-12">
        <q-markup-table flat class="zdetailcard">
          <thead>
          <q-tr>
            <q-th>Attachment</q-th>
            <q-th class="text-center">Action</q-th>
          </q-tr>
          </thead>
          <tbody>

          <q-tr v-for="(item,i) in rowData.attachment" :key="i">
            <q-td class="zlabel">{{item.name}}</q-td>
            <q-td class="zvalue"><q-btn flat rounded icon="highlight_off" color="negative" @click="removeDetailRow(i)" /> </q-td>
          </q-tr>
          <q-tr>
            <q-td>
              <q-input v-on:change="addAttachment" type="file" size="sm" color="primary" rounded  icon="add"/>
            </q-td>
          </q-tr>
          </tbody>
        </q-markup-table>
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
    const rowData=reactive({
      key:'',
      value:'',
      list:[],
      attachment: []
    })
    const formData=reactive({
      application_id:'',
      subject:'',
      voucher_date: new Date(),
      type:'',
      remark:'',
    })
    const addRow=(e)=>{
      const {key, value} = rowData;
      rowData.list.push({key,value})
      rowData.key = '';
      rowData.value = '';
      e.target?.reset()
    }
    const addAttachment=e=>{
      console.log(e)
      const file=e.target.files[0];
      if (file) {
        rowData.attachment.push(file)
      }
    }
    const removeDetailRow=i=>{
      const temp=rowData.list.filter((item, index) => i !== index);
      rowData.list = temp;
    }
    return{
      removeDetailRow,
      addAttachment,
      addRow,
      rowData,
      application_types: computed(() => store.state.staffData.application_types),
      formData
    }
  }
}
</script>
