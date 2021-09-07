<template>

   <div class="row q-col-gutter-md">
     <div class="col-md-6">
       <q-input outlined dense label="Username"/>
     </div>
     <div class="col-md-6">
       <q-input outlined dense label="Email"/>
     </div>
     <div class="col-md-6">
       <q-input outlined dense label="Username"/>
     </div>
     <div class="col-md-6">
       <q-input outlined dense label="Email"/>
     </div>
     <div class="col-md-6">
       <q-input outlined dense label="Username"/>
     </div>
     <div class="col-md-6">
       <q-input outlined dense label="Email"/>
     </div>
     <div class="col-md-6">
       <q-input outlined dense label="Username"/>
     </div>
     <div class="col-md-6">
       <q-input outlined dense label="Email"/>
     </div>
   </div>
</template>
<script>
import {reactive} from "@vue/reactivity";

export default {
  emits: ['onCloseDialog'],
  setup(props, context) {
    const errors = reactive({});
    const formData = reactive({
      name: '',
      description: ''
    });

    const handleSubmit = e => {
      context.emit(formData)
    }
    const resetForm = e => {
      formData.name = '';
      formData.description = '';
    }
    return {
      errors,
      formData,
      resetForm,
      handleSubmit,
      handleClose: val => context.emit('onCloseDialog'),
      modelMultiple: reactive([]),

      options: [
        {value: 1, label: 'One'},
        {value: 2, label: 'Two'},
        {value: 3, label: 'Three'},
      ]
    }
  }
}
</script>
