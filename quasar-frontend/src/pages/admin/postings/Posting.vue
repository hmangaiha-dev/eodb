<template>
  <q-page padding class="container-lg">
    <div class="flex flex-inline items-center">
      <h1 class='ztitle'>New post</h1>
      <q-space/>
      <q-breadcrumbs align="right" gutter="xs">
        <q-breadcrumbs-el :to="{name:'posting:read'}" label="Postings" />
        <q-breadcrumbs-el label="New post" />
      </q-breadcrumbs>
    </div>
    <div class="zdetailcard">
      <q-form ref="formRef" @reset="reset" @submit="submit">
        <div class="row q-col-gutter-md">
          <div class="col-xs-12 col-md-6">
            <q-select dropdown-icon="arrow_drop_down"
                      v-model="formData.staff"
                      outlined
                      :options="staffs"
                      :rules="[
                        val=>!!val || 'Please select staff'
                      ]"
                      :error="localData.errors.hasOwnProperty('staff_id')"
                      :error-message="localData.errors?.staff_id"
                      label="Select Staff"/>
          </div>
          <div class="col-xs-12 col-md-6">
            <q-select dropdown-icon="arrow_drop_down"
                      v-model="formData.office"
                      outlined
                      :options="offices"
                      :rules="[
                        val=>!!val || 'Please select offices'
                      ]"
                      :error="localData.errors.hasOwnProperty('office_id')"
                      :error-message="localData.errors?.office_id?.toString()"
                      label="Select Office"/>
          </div>
          <div class=" col-xs-12 col-md-6">
            <q-input outlined v-model="formData.joining_date"
                     label="Joining date"
                     :error="localData.errors.hasOwnProperty('joining_date')"
                     mask="date"
                     :rules="['date']">
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
          <div class="col-xs-12 col-md-6 q-pa-md q-gutter-md">
            <div class=" q-pa-sm rounded-borders">
              Status
              <q-option-group
                name="status"
                v-model="formData.status"
                :options="statuses"
                color="primary"
                inline
              />
            </div>
          </div>
          <div class="col-xs-12 col-md-6">
            <q-input outlined label="Remark" v-model="formData.remark"/>
          </div>
          <div class="flex-inline col-md-12">
            <q-btn type="submit" flat color="primary" label="Submit"/>
            <q-btn type="reset" flat color="negative" label="Reset"/>
          </div>
        </div>

      </q-form>
    </div>

  </q-page>

</template>
<script>
import {computed, reactive} from "@vue/reactivity";
import {useStore} from "vuex";
import {api} from "boot/axios";
import axios from "axios";
import {useQuasar} from "quasar";
import {ref} from "vue";
export default {
  setup(props, context) {
    const store=useStore()
    const q = useQuasar();
    const formRef = ref(null);
    const localData = reactive({
      errors:[]
    });
    const formData = reactive({
      staff:null,
      office: null,
      joining_date: '',
      status: 'on-duty',
      remark: ''
    })

    const submit=()=>{
      const data={
        staff_id:formData.staff.value,
        office_id:formData.office.value,
        ...formData
      }
      api.post('posting',data)
        .then(res=>{
          q.notify({type:'positive',message:res.data?.message})
          reset();
        })
        .catch(err=>{
          if (err?.response?.data?.errors)
            localData.errors= err.response.data?.errors
          err?.response?.data?.message &&  q.notify({
            type: 'negative',
            message: err.response?.data?.message
          })
        })
    }
    const reset=()=>{
      formData.staff = null;
      formData.office = null;
      formData.joining_date = null;
      formData.status = 'on-duty';
      formData.remark = '';
      formRef.value.reset()
    }

    return {
      formData,
      formRef,
      reset,
      submit,
      localData,
      staffs:computed(()=>store.state.staffData.staffs),
      offices:computed(()=>store.state.staffData.offices),
      statuses:computed(()=>store.state.staffData.postingStatuses),
      roles:computed(()=>store.state.staffData.roles),
    }
  }
}
</script>
