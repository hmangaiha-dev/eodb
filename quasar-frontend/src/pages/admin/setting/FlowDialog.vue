<template>
  <q-card flat class="q-pa-md">
    <q-form class="column" ref="formRef" @reset="resetForm" @submit="handleSubmit">
      <p class="zsubtitle">Select staff</p>

      <q-select
        outlined
        item-aligned
        dropdown-icon="arrow_drop_down"
        v-model="formData.staff"
        :options="temp"
        use-chips
        label="Select staff"
      />
      <q-input v-model="formData.duration"
               label="Duration in Hrs"
               item-aligned
               outlined
               :error="errors.hasOwnProperty('duration')"
               :error-message="errors?.duration?.toString()"
               @blur="delete errors['duration']"
      />
      <q-card-actions>
        <q-btn flat color="primary" type="submit" label="Save"/>
        <q-btn flat color="negative" type="reset" label="Reset"/>
      </q-card-actions>
    </q-form>
  </q-card>
</template>
<script>

import {reactive} from "@vue/reactivity";

const temp = ['testa', 'temp'];

export default {
  emits: ['save', 'close'],
  setup(props,context){
    const errors=reactive({})
    const formData=reactive({
      staff:null,
      duration:0
    })
    const resetForm=e=>{
      e?.target?.resetForm();
      context.emit('close',true)
    };
    const handleSubmit=e=>{
      context.emit('save',formData);
    };
    return{
      resetForm,
      errors,
      formData,
      handleSubmit,
      temp
    }
  }
}
</script>
