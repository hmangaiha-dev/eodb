<template>
  <q-page class="container-lg">
    <div class="flex col items-center justify-between">
      <h1 class='ztitle'>Edit role</h1>
      <q-breadcrumbs>
        <q-breadcrumbs-el label="Roles" :to="{name:'role:read'}" />
        <q-breadcrumbs-el label="Edit Role"  />
      </q-breadcrumbs>
    </div>
      <q-form class="column zdetailcard" @reset="resetForm" @submit="handleSubmit">

        <q-input v-model="formData.name"
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
                 type="textarea"
                 outlined
                 :error="localData.errors.hasOwnProperty('description')"
                 :error-message="localData.errors?.description?.toString()"
                 @blur="delete localData.errors['description']"
        />
        <q-select
          outlined
          dropdown-icon="arrow_drop_down"
          v-model="tempPerms"
          multiple
          :options="permissions"
          use-chips
          label="Permissions"
        />
        <q-card-actions>
          <q-btn flat color="primary" type="submit" label="Update"/>
          <q-btn flat color="negative" type="reset" label="Reset"/>
        </q-card-actions>
      </q-form>
  </q-page>
</template>
<script>
import {computed, reactive} from "@vue/reactivity";
import {useStore} from "vuex";
import {api} from "boot/axios";
import {useQuasar} from "quasar";
import {ref} from "vue";
import {onMounted} from "@vue/runtime-core";
import {useRoute, useRouter} from "vue-router";

export default {
  emits: ['onRoleCreated'],
  setup(props, context) {
    const store = useStore();
    const q = useQuasar();
    const route = useRoute();
    const router=useRouter()
    const localData = reactive({
      errors: {}
    })
    const tempPerms = ref([]);
    const formData = reactive({
      name: '',
      description: '',
      permissions: []
    });

    const handleSubmit = e => {
      formData['permissions'] = tempPerms.value.map(item => item.value)
      api.put(`roles/${formData.id}`, formData)
        .then(res => {
          q.notify({
            type: 'positive',
            message: res?.data?.message
          })
          resetForm();
          router.go(-1)
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
      formData.name = '';
      formData.description = '';
      formData.permissions = [];
      tempPerms.value = []
    }
    onMounted(() => {
      api.get(`roles/${route.params.id}`)
        .then(res => {
          const{id,name,description,permissions}=res.data
          formData.id=id;
          formData.name = name;
          formData.description = description;
          tempPerms.value = permissions;
        })
        .catch(err => {
          err?.response?.data?.message &&  q.notify({
            type: 'negative',
            message: err.response?.data?.message
          })
        })
    })
    return {
      permissions: computed(() => store.state.staffData.permissions),
      localData,
      formData,
      resetForm,
      handleSubmit,
      tempPerms

    }
  }
}
</script>
