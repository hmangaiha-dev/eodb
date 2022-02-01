<template>
  <q-page class="container-lg">
    <div class="flex flex-inline items-center">
      <h1 class='ztitle'>New Office</h1>
      <q-space/>
      <q-breadcrumbs align="right" gutter="xs">
        <q-breadcrumbs-el :to="{name:'office:read'}" label="Offices" />
        <q-breadcrumbs-el label="New office" />
      </q-breadcrumbs>
    </div>

      <q-form class="zcard q-pa-md" ref="formRef" @reset="resetForm" @submit="handleSubmit">
        <div class="row q-col-gutter-md">
          <div class="col-xs-12 zsubtitle">Office detail</div>
          <div class="col-xs-12 col-md-6">
            <q-input v-model="formData.code"
                     class="q-mt-md"
                     label="Code"
                     outlined
                     :error="localData.errors.hasOwnProperty('code')"
                     :error-message="localData.errors?.name?.toString()"
                     @blur="delete localData.errors['code']"
                     :rules="[
                 val=>!!val || 'Code is required'
               ]"
            />
          </div>
          <div class="col-xs-12 col-md-6">
            <q-input v-model="formData.name"
                     class="q-mt-md"
                     label="Name"
                     outlined
                     :error="localData.errors.hasOwnProperty('name')"
                     :error-message="localData.errors?.name?.toString()"
                     @blur="delete localData.errors['name']"
                     :rules="[
                 val=>!!val || 'Name is required'
               ]"
            />
          </div>
          <div class="col-xs-12 col-md-6">
            <q-input v-model="formData.contacts"
                     class="q-mt-md"
                     label="Contacts"
                     outlined
                     :error="localData.errors.hasOwnProperty('contacts')"
                     :error-message="localData.errors?.description?.toString()"
                     @blur="delete localData.errors['contacts']"
            />
          </div>
          <div class="col-xs-12 col-md-6">
            <q-input v-model="formData.description"
                     class="q-mt-md"
                     label="Description"
                     type="textarea"
                     outlined
                     :error="localData.errors.hasOwnProperty('description')"
                     :error-message="localData.errors?.description?.toString()"
                     @blur="delete localData.errors['description']"

            />
          </div>

          <div class=col-xs-12>
            <q-separator/>
          </div>
          <div class="col-xs-12 zsubtitle">Bank detail</div>
          <div class="col-xs-12 col-md-6">
            <q-input v-model="bankData.mid"
                     class="q-mt-md"
                     label="Merchant ID"
                     outlined
            />
          </div>
          <div class="col-xs-12 col-md-6">
            <q-input v-model="bankData.bank_name"
                     class="q-mt-md"
                     label="Name of bank"
                     outlined
            />
          </div>
          <div class="col-xs-12 col-md-6">
            <q-input v-model="bankData.ac_holder"
                     class="q-mt-md"
                     label="Ac Holder"
                     outlined
            />
          </div>
          <div class="col-xs-12 col-md-6">
            <q-input v-model="bankData.ac_no"
                     class="q-mt-md"
                     label="Ac no "
                     outlined
            />
          </div>
          <div class="col-xs-12 col-md-6">
            <q-input v-model="bankData.ifsc"
                     class="q-mt-md"
                     label="IFSC"
                     outlined
            />
          </div>
          <div class="col-xs-12 col-md-6">
            <q-input v-model="bankData.remark"
                     class="q-mt-md"
                     label="Remark"
                     outlined
            />
          </div>
        </div>

        <q-card-actions class="q-mt-md">
          <q-btn color="primary" flat type="submit" label="Save"/>
          <q-btn color="negative" flat type="reset" label="Reset"/>
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

export default {
  setup(props, context) {
    const store = useStore();
    const q = useQuasar();
    const localData = reactive({
      errors: {}
    })
    const formRef = ref(null);
    const tempRoles = ref([]);
    const bankData = reactive({
      mid: '',
      bank_name: '',
      ac_holder: '',
      ac_no: '',
      ifsc: '',
      description: ''
    });
    const formData = reactive({
      code: '',
      name: '',
      description: '',
      contact: '',
    });

    const handleSubmit = e => {
      formData.bank_detail={...bankData}
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
      formData.contact = '';

      bankData.bank_name = '';
      bankData.ac_holder = '';
      bankData.ac_no = '';
      bankData.ifsc = '';
      bankData.description = '';

      formRef.value.reset();

    }
    return {
      localData,
      bankData,
      formData,
      resetForm,
      handleSubmit,
      tempRoles,
      formRef

    }
  }
}
</script>
