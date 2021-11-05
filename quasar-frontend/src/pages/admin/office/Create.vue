<template>
  <q-page class="container">
    <h1 class='ztitle'>New Office</h1>
    <q-card class="zcard q-pa-md">
      <q-form @reset="resetForm" @submit="handleSubmit">

        <h1 class="zsubtitle">New Office</h1>

        <q-input v-model="formData.code"
                 class="q-mt-md"
                 label="Code"
                 outlined
                 autofocus
                 :error="localData.errors.hasOwnProperty('code')"
                 :error-message="localData.errors?.name?.toString()"
                 @blur="delete localData.errors['code']"
                 :rules="[
                 val=>!!val || 'Code is required'
               ]"
        />
        <q-input v-model="formData.name"
                 class="q-mt-md"
                 label="Name"
                 outlined
                 autofocus
                 :error="localData.errors.hasOwnProperty('name')"
                 :error-message="localData.errors?.name?.toString()"
                 @blur="delete localData.errors['name']"
                 :rules="[
                 val=>!!val || 'Name is required'
               ]"
        />
        <q-input v-model="formData.description"
                 class="q-mt-md"
                 label="Description"
                 type="textarea"
                 outlined
                 :error="localData.errors.hasOwnProperty('description')"
                 :error-message="localData.errors?.description?.toString()"
                 @blur="delete localData.errors['description']"

        />
        <q-space/>
        <q-input v-model="formData.contacts"
                 class="q-mt-md"
                 label="Contacts"
                 outlined
                 :error="localData.errors.hasOwnProperty('contacts')"
                 :error-message="localData.errors?.description?.toString()"
                 @blur="delete localData.errors['contacts']"
        />
        <q-space/>
        <q-select class="q-mt-md"
                  outlined
                  dropdown-icon="arrow_drop_down"
                  v-model="tempRoles"
                  multiple
                  :options="roles"
                  use-chips
                  stack-label
                  label="Roles"
        />
        <q-card-actions class="q-mt-md">
          <q-btn color="primary" type="submit" label="Save"/>
          <q-btn color="negative" type="reset" label="Reset"/>
        </q-card-actions>
      </q-form>
    </q-card>
  </q-page>
</template>
<script>
import {computed, reactive} from "@vue/reactivity";
import {useStore} from "vuex";
import {api} from "boot/axios";
import {useQuasar} from "quasar";
import {ref} from "vue";

export default {
  setup(props, context) {
    const store = useStore();
    const q = useQuasar();
    const localData = reactive({
      errors: {}
    })
    const tempRoles = ref([]);
    const formData = reactive({
      code: '',
      name: '',
      description: '',
      contacts: '',
      permissions: []
    });

    const handleSubmit = e => {
      formData['roles'] = tempRoles.value.map(item => item.value)
      api.post('office', formData)
        .then(res => {
          q.notify({
            type: 'positive',
            message: res?.data?.message
          })
          resetForm();

        })
        .catch(err => {
          console.log('error', err.response)
          if (err?.response?.data?.errors)
            localData.errors = err.response.data?.errors
          err?.response?.data?.message && q.notify({
            type: 'negative',
            message: err.response?.data?.message
          })
        })
    }
    const resetForm = e => {
      formData.code = '';
      formData.name = '';
      formData.description = '';
      formData.roles = [];
      tempRoles.value = []
    }
    return {
      roles: computed(() => store.state.globalData.roles),
      localData,
      formData,
      resetForm,
      handleSubmit,
      tempRoles

    }
  }
}
</script>
