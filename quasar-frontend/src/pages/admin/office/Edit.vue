<template>
  <q-page class="container-lg">
    <div class="flex flex-inline items-center">
      <h1 class='ztitle'>Edit Office</h1>
      <q-space/>
      <q-breadcrumbs align="right" gutter="xs">
        <q-breadcrumbs-el :to="{name:'office:read'}" label="Offices" />
        <q-breadcrumbs-el label="Edit office" />
      </q-breadcrumbs>
    </div>

    <q-card class="zcard q-pa-md">
      <q-form @reset="resetForm" @submit="handleSubmit">
        <div class="row q-col-gutter-md">
          <div class="col-xs-12 zsubtitle">Office detail</div>
          <div class="col-xs-12 col-md-6">
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
          <div class="col-xs-12 col-md-6">
            <q-input v-model="formData.contact"
                     class="q-mt-md"
                     label="Contact"
                     outlined
                     :error="localData.errors.hasOwnProperty('contact')"
                     :error-message="localData.errors?.description?.toString()"
                     @blur="delete localData.errors['contacts']"
            />
          </div>
          <div class=col-xs-12>
            <q-separator/>
          </div>
          <div class="col-xs-12 zsubtitle">Bank detail</div>
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
    </q-card>
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
  setup(props, context) {
    const store = useStore();
    const q = useQuasar();
    const route = useRoute();
    const router = useRouter();
    const localData = reactive({
      errors: {}
    })
    const tempRoles = ref([]);
    const bankData = reactive({
      bank_name: '',
      ac_holder: '',
      ac_no: '',
      contact:'',
      ifsc: '',
      description: ''
    });
    let formData = reactive({
      id:null,
      code: '',
      name: '',
      description: '',
      contacts: '',
    });

    onMounted(()=>{
      const id=route.params.id;

      api.get(`office/${id}`)
      .then(res=>{
        console.log(res.data)
        const {id,code,name,description,contact,bank_detail}=res.data
        formData.id = id;
        formData.code = code;
        formData.name = name;
        formData.description = description;
        formData.contact=contact

        if (bank_detail) {
          const { bank_name, ac_holder, ac_no,ifsc} = bank_detail;
          bankData.bank_name = bank_name;
          bankData.ifsc = ifsc;
          bankData.ac_holder = ac_holder;
          bankData.ac_no = ac_no;
        }


      })
      .catch(err=>{
        err?.response?.data?.message && q.notify({
          type: 'negative',
          message: err.response?.data?.message
        })
      })
    })
    const handleSubmit = e => {
      const {id} =route.params
      formData.bank_detail={...bankData}
      api.put(`office/${id}`, formData)
        .then(res => {
          q.notify({
            type: 'positive',
            message: res?.data?.message
          })
          setTimeout(()=>{
            router.back()
          },1000)

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
      e?.target?.reset();
      formData.code = '';
      formData.name = '';
      formData.description = '';
      formData.contacts = '';
      bankData.ac_no = '';
      bankData.ac_holder = '';
      bankData.ifsc = '';
      bankData.bank_name = '';
      bankData.description = '';
    }
    return {
      localData,
      bankData,
      formData,
      resetForm,
      handleSubmit,
      tempRoles

    }
  }
}
</script>
