<template>
  <q-card style="min-width: 500px"  class="q-pa-md">
    <q-form @reset="resetForm" @submit="handleSubmit">

      <div class="flex items-center justify-between">
        <h1 class="text-h6">New Role</h1>

        <q-btn @click="handleClose" icon="close" flat/>
      </div>
      <q-input v-model="formData.name"
               outlined
               autofocus
               dense
               name="name"
               :error="Boolean(errors?.name)"
               :error-message="errors?.name?.toString()"
               @input="delete errors?.name"
               :rules="[
                 val=>val || 'Name is required'
               ]"
      />
      <q-input v-model="formData.description"
               type="textarea"
               outlined
               dense
               :error="Boolean(errors?.description)"
               :error-message="errors?.description?.toString()"
               @input="delete errors?.description"
               :rules="[
                 val=>val || 'Description is required'
               ]"
      />
      <q-select
        filled
        v-model="modelMultiple"
        multiple
        :options="options"
        use-chips
        stack-label
        label="Multiple selection"
      />
      <q-card-actions>
        <q-btn color="primary" type="submit" label="Save"/>
        <q-btn color="negative" type="reset" label="Cancel"/>
      </q-card-actions>
    </q-form>
  </q-card>
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
