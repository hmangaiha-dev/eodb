<template>
  <q-page padding class="container">
    <h1 class="ztitle">Posting</h1>
    <div class="zcard">
      <q-form @reset="reset" @submit="submit">
        <div class="row q-col-gutter-md">
          <div class="col-xs-12 col-md-6">
            <q-select dropdown-icon="arrow_drop_down"
                      v-model="formData.staff"
                      outlined
                      :options="staffs"
                      :rules="[
                        val=>!!val || 'Please select staff'
                      ]"
                      label="Select Staff"/>
          </div>
          <div class="col-xs-12 col-md-6">
            <q-select dropdown-icon="arrow_drop_down"
                      @update:model-value="onDepartmentSelect"
                      v-model="formData.office"
                      outlined
                      :options="offices"
                      :rules="[
                        val=>!!val || 'Please select offices'
                      ]"
                      label="Select Office"/>
          </div>
          <div class="col-xs-12 col-md-6">
            <q-select dropdown-icon="arrow_drop_down"
                      multiple
                      use-chips
                      v-model="formData.roles"
                      outlined
                      :error="localData.errors.hasOwnProperty('roles')"
                      :options="localData.officeRoles"
                      :rules="[
                        val=>!!val || 'Please select roles'
                      ]"
                      label="Select roles"/>
          </div>

          <div class=" col-xs-12 col-md-6">
            <q-input outlined v-model="formData.joining_date"
                     label="Joining date"
                     mask="date"
                     :rules="[
                       val=> !!val || 'Joining date is required'
                     ]">
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
import {useQuasar} from "quasar";
import {onMounted} from "@vue/runtime-core";
import {notify} from "src/utils";
export default {
  setup(props, context) {
    const store=useStore()
    const q = useQuasar();
    const localData = reactive({
      officeRoles:[],
      errors:[]
    });
    const formData = reactive({
      staff:null,
      roles:[],
      office: null,
      joining_date: '',
      status: 'on-duty',
      remark: ''
    })

    const submit=()=>{
      const data={
        staff_id:formData.staff.value,
        office_id:formData.office.value,
        roles:formData.roles.map(item=>item.id),
        joining_date:formData.joining_date,
        status:formData.status,
        remark:formData.remark
      }
      api.post('staff/post',data)
      .then(res=>{
        reset();
        q.notify({type:"positive",message:res?.data?.message})
      })
      .catch(err=>{
        if (err?.response?.data?.errors)
          localData.errors = err.response.data?.errors
        err?.response?.data?.message && q.notify({
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
    }
    const onDepartmentSelect=e=>fetchRoles(e.value)

    const fetchRoles=(office_id)=>{
      api.get(`office/${office_id}/roles`)
      .then(res=>{
        localData.officeRoles=res.data
      })
      .catch(err=>{
        q.notify({
          type:'negative',
          message:err.toString()
        })
      })
    }
    onMounted(()=>notify())
    return {
      formData,
      reset,
      submit,
      localData,
      staffs:computed(()=>store.state.globalData.staffs),
      offices:computed(()=>store.state.globalData.offices),
      statuses:computed(()=>store.state.globalData.statuses),
      onDepartmentSelect
    }
  }
}
</script>
