<template>
  <q-page padding class="container">
    <h1 class="ztitle">Posting</h1>
    <div class="zcard">
      <div class="row q-col-gutter-md">
        <div class="col-md-6">
          <q-select dropdown-icon="arrow_drop_down" outlined :options="['one','two']" label="Select User"/>
        </div>
        <div class="col-md-6">
          <q-select dropdown-icon="arrow_drop_down" outlined :options="['one','two']" label="Select department"/>
        </div>
        <div class="col-md-6">
          <q-select dropdown-icon="arrow_drop_down" outlined :options="['one','two']" label="Select department"/>
        </div>
        <div class="col-md-6">
          <q-input outlined v-model="formData.joining_date" label="Joining date" mask="date" :rules="['date']">
            <template v-slot:append>
              <q-icon name="event" class="cursor-pointer">
                <q-popup-proxy ref="qDateProxy" transition-show="scale" transition-hide="scale">
                  <q-date v-model="formData.joining_date">
                    <div class="row items-center justify-end">
                      <q-btn v-close-popup label="Close" color="primary" flat/>
                    </div>
                  </q-date>
                </q-popup-proxy>
              </q-icon>
            </template>
          </q-input>
        </div>
        <div class="col-md-6 q-pa-md q-gutter-md">
          <q-radio dense val="line" label="On leave"/>
          <q-radio dense val="rectangle" label="On duty"/>
          <q-radio dense val="ellipse" label="Pension"/>
        </div>
        <div class="col-xs-6">
          <q-input outlined label="Remark" v-model="formData.remark"/>
        </div>


        <div class="col-md-12">

        </div>
      </div>
    </div>

  </q-page>

</template>
<script>
import {reactive} from "@vue/reactivity";

export default {
  setup(props, context) {

    const formData = reactive({
      department: null,
      joining_date: '',
      status: '',
      remark: ''
    })
    return {
      formData
    }
  }
}
</script>
